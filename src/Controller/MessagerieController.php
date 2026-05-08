<?php

namespace App\Controller;

use App\Repository\MessagerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class MessagerieController extends AbstractController
{
    #[Route('/messagerie', name: 'messagerie_inbox', methods: ['GET'])]
    public function inbox(MessagerieRepository $repo): Response
    {
        $conversations = $repo->findConversations($this->getUser()->getId());

        return $this->render('messagerie/inbox.html.twig', [
            'conversations'       => $conversations,
            'interlocuteur'       => null,
            'interlocuteur_actif' => null,
            'id_annonce_actif'    => null,
            'messages'            => [],
        ]);
    }

    #[Route('/messagerie/{id_vendeur}/{id_annonce}', name: 'messagerie_conversation', methods: ['GET'], requirements: ['id_vendeur' => '\d+', 'id_annonce' => '\d+'])]
    public function conversation(int $id_vendeur, int $id_annonce, MessagerieRepository $repo): Response
    {
        $interlocuteur = $repo->findUtilisateur($id_vendeur);

        if (!$interlocuteur) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $userId = $this->getUser()->getId();

        if ($userId === $id_vendeur) {
            return $this->redirectToRoute('messagerie_inbox');
        }

        $repo->marquerLus($id_vendeur, $userId, $id_annonce);

        $messages      = $repo->findMessages($userId, $id_vendeur, $id_annonce);
        $conversations = $repo->findConversations($userId);

        return $this->render('messagerie/inbox.html.twig', [
            'conversations'       => $conversations,
            'interlocuteur'       => $interlocuteur,
            'interlocuteur_actif' => $id_vendeur,
            'id_annonce_actif'    => $id_annonce,
            'messages'            => $messages,
        ]);
    }

    #[Route('/messagerie/{id_vendeur}/{id_annonce}/envoyer', name: 'messagerie_envoyer', methods: ['POST'], requirements: ['id_vendeur' => '\d+', 'id_annonce' => '\d+'])]
    public function envoyer(int $id_vendeur, int $id_annonce, Request $request, MessagerieRepository $repo): Response
    {
        if (!$this->isCsrfTokenValid('message', $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $contenu = trim($request->request->get('contenu', ''));

        if ($contenu !== '') {
            $interlocuteur = $repo->findUtilisateur($id_vendeur);

            if (!$interlocuteur) {
                throw $this->createNotFoundException('Utilisateur introuvable.');
            }

            $repo->envoyer($this->getUser()->getId(), $id_vendeur, $id_annonce, $contenu);
        }

        return $this->redirectToRoute('messagerie_conversation', [
            'id_vendeur'  => $id_vendeur,
            'id_annonce'  => $id_annonce,
        ]);
    }
}
