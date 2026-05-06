<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use App\Repository\MarqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class mainController extends AbstractController
{
    #[Route('/', name: 'homePage')]
    public function homePage(AnnonceRepository $annonceRepo, MarqueRepository $marqueRepo): Response
    {
        $annonces = $annonceRepo->findAll([]);
        $vedettes = array_slice($annonces, 0, 6);
        $marques          = $marqueRepo->findAll();
        $modelesParMarque = $marqueRepo->findModelesByMarque();

        return $this->render('homePage.html.twig', [
            'vedettes'         => $vedettes,
            'marques'          => $marques,
            'modelesParMarque' => $modelesParMarque,
            'total'            => count($annonces),
        ]);
    }

    #[Route('/vendre-ma-voiture', name: 'vendreMaVoiture')]
    public function vendre_ma_voiture(): Response
    {
        return $this->render('vendreMaVoiture.html.twig');
    }
}