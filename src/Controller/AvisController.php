<?php

namespace App\Controller;

use App\Repository\AvisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AvisController extends AbstractController
{
    #[Route('/vendeur/{id}/avis', name: 'avis_vendeur', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function index(int $id, AvisRepository $repo, \App\Repository\AnnonceRepository $annonceRepo): Response
    {
        $vendeur = $repo->findVendeur($id);

        if (!$vendeur) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $avis     = $repo->findByVendeur($id);
        $stats    = $repo->getStats($id);
        $annonces = $annonceRepo->findAll(['vendeur_id' => $id]);
        $dejaNote = false;

        if ($this->getUser()) {
            $dejaNote = $repo->hasAlreadyReviewed($this->getUser()->getId(), $id);
        }

        return $this->render('avis/avis.html.twig', [
            'vendeur'   => $vendeur,
            'avis'      => $avis,
            'stats'     => $stats,
            'annonces'  => $annonces,
            'deja_note' => $dejaNote,
        ]);
    }

    #[Route('/vendeur/{id}/avis/ajouter', name: 'avis_ajouter', methods: ['POST'], requirements: ['id' => '\d+'])]
    #[IsGranted('ROLE_USER')]
    public function ajouter(int $id, Request $request, AvisRepository $repo): Response
    {
        if (!$this->isCsrfTokenValid('avis', $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $vendeur = $repo->findVendeur($id);

        if (!$vendeur) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $userId = $this->getUser()->getId();

        if ($userId === $id) {
            $this->addFlash('error', 'Vous ne pouvez pas noter votre propre profil.');
            return $this->redirectToRoute('avis_vendeur', ['id' => $id]);
        }

        if ($repo->hasAlreadyReviewed($userId, $id)) {
            $this->addFlash('error', 'Vous avez déjà laissé un avis pour ce vendeur.');
            return $this->redirectToRoute('avis_vendeur', ['id' => $id]);
        }

        $note    = (int) $request->request->get('note', 0);
        $contenu = trim($request->request->get('contenu', ''));

        if ($note < 1 || $note > 5) {
            $this->addFlash('error', 'La note doit être comprise entre 1 et 5.');
            return $this->redirectToRoute('avis_vendeur', ['id' => $id]);
        }

        $repo->create($userId, $id, $note, $contenu ?: null);
        $this->addFlash('success', 'Votre avis a été publié.');

        return $this->redirectToRoute('avis_vendeur', ['id' => $id]);
    }

    #[Route('/avis/{id}/supprimer', name: 'avis_supprimer', methods: ['POST'], requirements: ['id' => '\d+'])]
    #[IsGranted('ROLE_USER')]
    public function supprimer(int $id, Request $request, AvisRepository $repo): Response
    {
        if (!$this->isCsrfTokenValid('avis_supprimer_' . $id, $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $avis = $repo->findById($id);

        if (!$avis) {
            throw $this->createNotFoundException('Avis introuvable.');
        }

        $userId = $this->getUser()->getId();

        if ((int) $avis['id_redacteur'] !== $userId && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Vous ne pouvez supprimer que vos propres avis.');
        }

        $vendeurId = (int) $avis['id_vendeur'];
        $repo->delete($id);
        $this->addFlash('success', 'Avis supprimé.');

        return $this->redirectToRoute('avis_vendeur', ['id' => $vendeurId]);
    }
}
