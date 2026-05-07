<?php

namespace App\Controller;

use App\Repository\StatsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ENTREPRISE')]
class StatsController extends AbstractController
{
    #[Route('/stats', name: 'stats')]
    public function index(StatsRepository $repo): Response
    {
        $userId = $this->getUser()->getId();

        return $this->render('stats.html.twig', [
            // Marché global
            'global'          => $repo->getGlobalStats(),
            'parMarque'       => $repo->getPrixMoyenParMarque(),
            'topModeles'      => $repo->getModelesLesPlusAnnonces(),
            'parAnnee'        => $repo->getAnnoncesParAnnee(),
            'parCarburant'    => $repo->getAnnoncesParCarburant(),
            // Stats personnelles entreprise
            'statsEntreprise' => $repo->getStatsEntreprise($userId),
            'ventesParMois'   => $repo->getVentesParMoisEntreprise($userId),
            'topVendus'       => $repo->getTopModelesVendusEntreprise($userId),
        ]);
    }
}
