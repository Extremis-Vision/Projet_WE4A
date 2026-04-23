<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class mainController extends AbstractController
{
    #[Route('/', name: 'homePage')]
    public function homePage():Response{
        return $this->render('homePage.html.twig');
    }

    #[Route('/annonces', name : 'annonces')]
    public function annoncesPage():Response{
        return $this->render('annonces.html.twig');
    }

    #[Route('/avis', name : 'avis')]
    public function avisPage():Response{
        return $this->render('avis.html.twig');
    }

    #[Route('/vendre-ma-voiture', name : 'vendreMaVoiture')]
    public function vendre_ma_voiture():Response{
        return $this->render('vendreMaVoiture.html.twig');
    }

    #[Route('/connexion', name : 'connexion')]
    public function connexionPage():Response{
        return $this->render('connexion.html.twig');
    }

    #[Route('/inscription', name : 'inscription')]
    public function inscriptionPage():Response{
        return $this->render('inscription.html.twig');
    }
}