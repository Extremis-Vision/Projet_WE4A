<?php

namespace App\Controller;

use App\Repository\FavorisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class FavorisController extends AbstractController
{
    #[Route('/favoris', name: 'favoris', methods: ['GET'])]
    public function index(FavorisRepository $repo): Response
    {
        $annonces    = $repo->findByUser($this->getUser()->getId());
        $favorisIds  = array_column($annonces, 'id_annonce');

        return $this->render('favoris/favoris.html.twig', [
            'annonces'   => $annonces,
            'favoris_ids'=> $favorisIds,
        ]);
    }

    #[Route('/favoris/{id}/toggle', name: 'favori_toggle', methods: ['POST'], requirements: ['id' => '\d+'])]
    public function toggle(int $id, Request $request, FavorisRepository $repo): Response
    {
        if (!$this->isCsrfTokenValid('favori', $request->request->get('_token'))) {
            throw $this->createAccessDeniedException('Token CSRF invalide.');
        }

        $repo->toggle($this->getUser()->getId(), $id);

        $referer = $request->headers->get('referer');
        return $this->redirect($referer ?: $this->generateUrl('annonces'));
    }
}
