<?php

namespace App\Controller;

use App\Repository\AdminRepository;
use App\Repository\AnnonceRepository;
use App\Repository\CatalogueRepository;
use App\Repository\MarqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin', name: 'admin_')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    // ── DASHBOARD ────────────────────────────────────────────────────────────

    #[Route('', name: 'dashboard')]
    public function dashboard(AdminRepository $repo): Response
    {
        return $this->render('admin/dashboard.html.twig', [
            'stats' => $repo->getStats(),
        ]);
    }

    // ── UTILISATEURS ─────────────────────────────────────────────────────────

    #[Route('/utilisateurs', name: 'utilisateurs')]
    public function utilisateurs(AdminRepository $repo): Response
    {
        return $this->render('admin/utilisateurs.html.twig', [
            'users' => $repo->findAllUsers(),
        ]);
    }

    #[Route('/utilisateurs/{id}/supprimer', name: 'supprimer_utilisateur', methods: ['POST'])]
    public function supprimerUtilisateur(int $id, AdminRepository $repo): Response
    {
        if ((int) $this->getUser()->getId() === $id) {
            $this->addFlash('error', 'Vous ne pouvez pas supprimer votre propre compte.');
            return $this->redirectToRoute('admin_utilisateurs');
        }

        $repo->deleteUser($id);
        $this->addFlash('success', 'Utilisateur supprimé.');
        return $this->redirectToRoute('admin_utilisateurs');
    }

    // ── ANNONCES ─────────────────────────────────────────────────────────────

    #[Route('/annonces', name: 'annonces')]
    public function annonces(Request $request, AnnonceRepository $repo, MarqueRepository $marqueRepo): Response
    {
        $filters = [
            'statut'    => $request->query->get('statut'),
            'marque_id' => $request->query->get('marque_id'),
            'search'    => $request->query->get('search'),
        ];

        return $this->render('admin/annonces.html.twig', [
            'annonces' => $repo->findAllAdmin($filters),
            'marques'  => $marqueRepo->findAll(),
            'filters'  => $filters,
        ]);
    }

    #[Route('/annonces/{id}/pauser', name: 'pauser_annonce', methods: ['POST'])]
    public function pauserAnnonce(int $id, Request $request, AnnonceRepository $repo): Response
    {
        $commentaire = trim($request->request->get('commentaire_admin', ''));
        if ($commentaire === '') {
            $this->addFlash('error', 'Un commentaire est requis pour suspendre une annonce.');
            return $this->redirectToRoute('admin_annonces');
        }

        $repo->updateStatut($id, 'pause', $commentaire);
        $this->addFlash('success', 'Annonce suspendue.');
        return $this->redirectToRoute('admin_annonces');
    }

    #[Route('/annonces/{id}/reactiver', name: 'reactiver_annonce', methods: ['POST'])]
    public function reactiverAnnonce(int $id, AnnonceRepository $repo): Response
    {
        $repo->updateStatut($id, 'active', null);
        $this->addFlash('success', 'Annonce réactivée.');
        return $this->redirectToRoute('admin_annonces');
    }

    #[Route('/annonces/{id}/supprimer', name: 'supprimer_annonce', methods: ['POST'])]
    public function supprimerAnnonce(int $id, AnnonceRepository $repo): Response
    {
        $repo->deletePhotos($id);
        $repo->delete($id);
        $this->addFlash('success', 'Annonce supprimée.');
        return $this->redirectToRoute('admin_annonces');
    }

    // ── CATALOGUE : MARQUES ───────────────────────────────────────────────────

    #[Route('/catalogue', name: 'catalogue')]
    public function catalogue(CatalogueRepository $repo): Response
    {
        return $this->render('admin/catalogue.html.twig', [
            'marques' => $repo->findAllMarques(),
        ]);
    }

    #[Route('/catalogue/marques/ajouter', name: 'ajouter_marque', methods: ['POST'])]
    public function ajouterMarque(Request $request, CatalogueRepository $repo): Response
    {
        $nom = trim($request->request->get('nom', ''));
        if ($nom !== '') {
            $repo->createMarque($nom);
            $this->addFlash('success', "Marque « $nom » ajoutée.");
        }
        return $this->redirectToRoute('admin_catalogue');
    }

    #[Route('/catalogue/marques/{id}/supprimer', name: 'supprimer_marque', methods: ['POST'])]
    public function supprimerMarque(int $id, CatalogueRepository $repo): Response
    {
        $marque = $repo->findMarqueById($id);
        if (!$repo->deleteMarque($id)) {
            $this->addFlash('error', 'Impossible de supprimer cette marque : elle contient des modèles.');
        } else {
            $this->addFlash('success', "Marque « {$marque['nom']} » supprimée.");
        }
        return $this->redirectToRoute('admin_catalogue');
    }

    // ── CATALOGUE : MODELES ───────────────────────────────────────────────────

    #[Route('/catalogue/marques/{id}/modeles', name: 'catalogue_modeles')]
    public function catalogueModeles(int $id, CatalogueRepository $repo): Response
    {
        $marque = $repo->findMarqueById($id);
        if (!$marque) { throw $this->createNotFoundException(); }

        return $this->render('admin/catalogue_modeles.html.twig', [
            'marque'  => $marque,
            'modeles' => $repo->findModelesByMarque($id),
        ]);
    }

    #[Route('/catalogue/marques/{id}/modeles/ajouter', name: 'ajouter_modele', methods: ['POST'])]
    public function ajouterModele(int $id, Request $request, CatalogueRepository $repo): Response
    {
        $nom = trim($request->request->get('nom', ''));
        if ($nom !== '') {
            $repo->createModele($id, $nom);
            $this->addFlash('success', "Modèle « $nom » ajouté.");
        }
        return $this->redirectToRoute('admin_catalogue_modeles', ['id' => $id]);
    }

    #[Route('/catalogue/modeles/{id}/supprimer', name: 'supprimer_modele', methods: ['POST'])]
    public function supprimerModele(int $id, CatalogueRepository $repo): Response
    {
        $modele = $repo->findModeleById($id);
        if (!$modele) { throw $this->createNotFoundException(); }

        if (!$repo->deleteModele($id)) {
            $this->addFlash('error', 'Impossible de supprimer ce modèle : il contient des générations.');
        } else {
            $this->addFlash('success', "Modèle « {$modele['nom']} » supprimé.");
        }
        return $this->redirectToRoute('admin_catalogue_modeles', ['id' => $modele['id_marque']]);
    }

    // ── CATALOGUE : GENERATIONS ───────────────────────────────────────────────

    #[Route('/catalogue/modeles/{id}/generations', name: 'catalogue_generations')]
    public function catalogueGenerations(int $id, CatalogueRepository $repo): Response
    {
        $modele = $repo->findModeleById($id);
        if (!$modele) { throw $this->createNotFoundException(); }

        return $this->render('admin/catalogue_generations.html.twig', [
            'modele'      => $modele,
            'generations' => $repo->findGenerationsByModele($id),
        ]);
    }

    #[Route('/catalogue/modeles/{id}/generations/ajouter', name: 'ajouter_generation', methods: ['POST'])]
    public function ajouterGeneration(int $id, Request $request, CatalogueRepository $repo): Response
    {
        $nom  = trim($request->request->get('nom', ''));
        $date = $request->request->get('date_sortie') ?: null;
        if ($nom !== '') {
            $repo->createGeneration($id, $nom, $date);
            $this->addFlash('success', "Génération « $nom » ajoutée.");
        }
        return $this->redirectToRoute('admin_catalogue_generations', ['id' => $id]);
    }

    #[Route('/catalogue/generations/{id}/supprimer', name: 'supprimer_generation', methods: ['POST'])]
    public function supprimerGeneration(int $id, CatalogueRepository $repo): Response
    {
        $gen = $repo->findGenerationById($id);
        if (!$gen) { throw $this->createNotFoundException(); }

        if (!$repo->deleteGeneration($id)) {
            $this->addFlash('error', 'Impossible de supprimer cette génération : elle contient des versions.');
        } else {
            $this->addFlash('success', "Génération « {$gen['generation_nom']} » supprimée.");
        }
        return $this->redirectToRoute('admin_catalogue_generations', ['id' => $gen['id_modele']]);
    }

    // ── CATALOGUE : VERSIONS ──────────────────────────────────────────────────

    #[Route('/catalogue/generations/{id}/versions', name: 'catalogue_versions')]
    public function catalogueVersions(int $id, CatalogueRepository $repo): Response
    {
        $gen = $repo->findGenerationById($id);
        if (!$gen) { throw $this->createNotFoundException(); }

        return $this->render('admin/catalogue_versions.html.twig', [
            'generation' => $gen,
            'versions'   => $repo->findVersionsByGeneration($id),
        ]);
    }

    #[Route('/catalogue/generations/{id}/versions/ajouter', name: 'ajouter_version', methods: ['POST'])]
    public function ajouterVersion(int $id, Request $request, CatalogueRepository $repo): Response
    {
        $nom = trim($request->request->get('nom', ''));
        if ($nom !== '') {
            $repo->createVersion(
                $id,
                $nom,
                $request->request->get('transmission') ?: null,
                $request->request->get('boite_vitesse') ?: null,
                $request->request->get('nombre_places') ? (int) $request->request->get('nombre_places') : null,
                $request->request->get('nombre_portes') ? (int) $request->request->get('nombre_portes') : null,
            );
            $this->addFlash('success', "Version « $nom » ajoutée.");
        }
        return $this->redirectToRoute('admin_catalogue_versions', ['id' => $id]);
    }

    #[Route('/catalogue/versions/{id}/supprimer', name: 'supprimer_version', methods: ['POST'])]
    public function supprimerVersion(int $id, CatalogueRepository $repo): Response
    {
        $version = $repo->findVersionById($id);
        if (!$version) { throw $this->createNotFoundException(); }

        if (!$repo->deleteVersion($id)) {
            $this->addFlash('error', 'Impossible de supprimer cette version : des annonces y sont rattachées.');
        } else {
            $this->addFlash('success', "Version « {$version['nom']} » supprimée.");
        }
        return $this->redirectToRoute('admin_catalogue_versions', ['id' => $version['id_generation']]);
    }
}
