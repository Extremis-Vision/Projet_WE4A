<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/profil/{id}', name: 'user_profil', requirements: ['id' => '\d+'])]
    public function profil(int $id, UserRepository $userRepo, AnnonceRepository $annonceRepo): Response
    {
        $user = $userRepo->findById($id);
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur introuvable.');
        }

        $annonces = $annonceRepo->findActiveByVendeur($id);
        $reviews  = $userRepo->findReviews($id);

        return $this->render('user/profil.html.twig', [
            'user'     => $user,
            'annonces' => $annonces,
            'reviews'  => $reviews,
        ]);
    }
}
