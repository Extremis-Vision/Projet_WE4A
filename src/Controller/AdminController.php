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
    public function dashboard(AdminRepository $adminRepo): Response
    {
        return $this->render('admin/dashboard.html.twig', [
            'stats' => $adminRepo->getStats(),
        ]);
    }

    // ── UTILISATEURS ─────────────────────────────────────────────────────────

    #[Route('/utilisateurs', name: 'utilisateurs')]
    public function utilisateurs(AdminRepository $adminRepo): Response
    {
        return $this->render('admin/utilisateurs.html.twig', [
            'utilisateurs' => $adminRepo->findAllUsers(),
        ]);
    }

    #[Route('/utilisateurs/{id}/supprimer', name: 'supprimer_utilisateur', methods: ['POST'])]
    public function supprimerUtilisateur(int $id, AdminRepository $adminRepo): Response
    {
        $user = $adminRepo->findUserById($id);

        if (!$user) {
            $this->addFlash('error', 'Utilisateur introuvable.');
            return $this->redirectToRoute('admin_utilisateurs');
        }

        if ((int) $this->getUser()->getId() === $id) {
            $this->addFlash('error', 'Impossible de supprimer votre propre compte.');
            return $this->redirectToRoute('admin_utilisateurs');
        }

        if ($user['role'] === 'admin') {
            $this->addFlash('error', 'Impossible de supprimer un compte administrateur.');
            return $this->redirectToRoute('admin_utilisateurs');
        }

        $adminRepo->deleteUser($id);
        $this->addFlash('success', "L'utilisateur {$user['prenom']} {$user['nom']} a été supprimé.");
        return $this->redirectToRoute('admin_utilisateurs');
    }

    // ── ANNONCES ─────────────────────────────────────────────────────────────

    #[Route('/annonces', name: 'annonces')]
    public function annonces(Request $request, AnnonceRepository $annonceRepo, MarqueRepository $marqueRepo): Response
    {
        $filters = [
            'statut'    => $request->query->get('statut'),
            'marque_id' => $request->query->get('marque_id'),
            'search'    => $request->query->get('search'),
        ];

        return $this->render('admin/annonces.html.twig', [
            'annonces' => $annonceRepo->findAllAdmin($filters),
            'marques'  => $marqueRepo->findAll(),
            'filters'  => $filters,
        ]);
    }

    #[Route('/annonces/{id}/pauser', name: 'pauser_annonce', methods: ['POST'])]
    public function pauserAnnonce(int $id, Request $request, AnnonceRepository $annonceRepo): Response
    {
        $commentaire = trim($request->request->get('commentaire_admin', ''));

        if (empty($commentaire)) {
            $this->addFlash('error', 'Veuillez saisir un commentaire expliquant la raison de la mise en pause.');
            return $this->redirectToRoute('admin_annonces');
        }

        $annonceRepo->updateStatut($id, 'pause', $commentaire);
        $this->addFlash('success', 'Annonce mise en pause. Le vendeur verra votre commentaire.');
        return $this->redirectToRoute('admin_annonces');
    }

    #[Route('/annonces/{id}/reactiver', name: 'reactiver_annonce', methods: ['POST'])]
    public function reactiverAnnonce(int $id, AnnonceRepository $annonceRepo): Response
    {
        $annonceRepo->updateStatut($id, 'active', null);
        $this->addFlash('success', 'Annonce réactivée avec succès.');
        return $this->redirectToRoute('admin_annonces');
    }

    #[Route('/annonces/{id}/supprimer', name: 'supprimer_annonce', methods: ['POST'])]
    public function supprimerAnnonce(int $id, AnnonceRepository $annonceRepo): Response
    {
        $annonceRepo->deletePhotos($id);
        $annonceRepo->delete($id);
        $this->addFlash('success', 'Annonce supprimée définitivement.');
        return $this->redirectToRoute('admin_annonces');
    }

    // ── CATALOGUE — MARQUES ──────────────────────────────────────────────────

    #[Route('/catalogue', name: 'catalogue')]
    public function catalogue(CatalogueRepository $catalogRepo): Response
    {
        return $this->render('admin/catalogue.html.twig', [
            'marques' => $catalogRepo->findAllMarques(),
        ]);
    }

    #[Route('/catalogue/marques/ajouter', name: 'ajouter_marque', methods: ['POST'])]
    public function ajouterMarque(Request $request, CatalogueRepository $catalogRepo): Response
    {
        $nom = trim($request->request->get('nom', ''));

        if (empty($nom)) {
            $this->addFlash('error', 'Le nom de la marque est requis.');
        } else {
            $catalogRepo->createMarque($nom);
            $this->addFlash('success', "Marque « {$nom} » ajoutée.");
        }

        return $this->redirectToRoute('admin_catalogue');
    }

    #[Route('/catalogue/marques/{id}/supprimer', name: 'supprimer_marque', methods: ['POST'])]
    public function supprimerMarque(int $id, CatalogueRepository $catalogRepo): Response
    {
        $marque = $catalogRepo->findMarqueById($id);

        if (!$marque) {
            $this->addFlash('error', 'Marque introuvable.');
            return $this->redirectToRoute('admin_catalogue');
        }

        if (!$catalogRepo->deleteMarque($id)) {
            $this->addFlash('error', "Impossible de supprimer « {$marque['nom']} » : des modèles lui sont rattachés.");
        } else {
            $this->addFlash('success', "Marque « {$marque['nom']} » supprimée.");
        }

        return $this->redirectToRoute('admin_catalogue');
    }

    // ── CATALOGUE — MODELES ───────────────────────────────────────────────────

    #[Route('/catalogue/marques/{id}/modeles', name: 'catalogue_modeles')]
    public function catalogueModeles(int $id, CatalogueRepository $catalogRepo): Response
    {
        $marque = $catalogRepo->findMarqueById($id);

        if (!$marque) {
            throw $this->createNotFoundException('Marque introuvable.');
        }

        return $this->render('admin/catalogue_modeles.html.twig', [
            'marque'  => $marque,
            'modeles' => $catalogRepo->findModelesByMarque($id),
        ]);
    }

    #[Route('/catalogue/marques/{id}/modeles/ajouter', name: 'ajouter_modele', methods: ['POST'])]
    public function ajouterModele(int $id, Request $request, CatalogueRepository $catalogRepo): Response
    {
        $nom = trim($request->request->get('nom', ''));

        if (empty($nom)) {
            $this->addFlash('error', 'Le nom du modèle est requis.');
        } else {
            $catalogRepo->createModele($id, $nom);
            $this->addFlash('success', "Modèle « {$nom} » ajouté.");
        }

        return $this->redirectToRoute('admin_catalogue_modeles', ['id' => $id]);
    }

    #[Route('/catalogue/modeles/{id}/supprimer', name: 'supprimer_modele', methods: ['POST'])]
    public function supprimerModele(int $id, CatalogueRepository $catalogRepo): Response
    {
        $modele = $catalogRepo->findModeleById($id);

        if (!$modele) {
            $this->addFlash('error', 'Modèle introuvable.');
            return $this->redirectToRoute('admin_catalogue');
        }

        if (!$catalogRepo->deleteModele($id)) {
            $this->addFlash('error', "Impossible de supprimer « {$modele['nom']} » : des générations lui sont rattachées.");
        } else {
            $this->addFlash('success', "Modèle « {$modele['nom']} » supprimé.");
        }

        return $this->redirectToRoute('admin_catalogue_modeles', ['id' => $modele['id_marque']]);
    }

    // ── CATALOGUE — GENERATIONS ───────────────────────────────────────────────

    #[Route('/catalogue/modeles/{id}/generations', name: 'catalogue_generations')]
    public function catalogueGenerations(int $id, CatalogueRepository $catalogRepo): Response
    {
        $modele = $catalogRepo->findModeleById($id);

        if (!$modele) {
            throw $this->createNotFoundException('Modèle introuvable.');
        }

        return $this->render('admin/catalogue_generations.html.twig', [
            'modele'      => $modele,
            'generations' => $catalogRepo->findGenerationsByModele($id),
        ]);
    }

    #[Route('/catalogue/modeles/{id}/generations/ajouter', name: 'ajouter_generation', methods: ['POST'])]
    public function ajouterGeneration(int $id, Request $request, CatalogueRepository $catalogRepo): Response
    {
        $nom       = trim($request->request->get('nom', ''));
        $dateSortie = $request->request->get('date_sortie') ?: null;

        if (empty($nom)) {
            $this->addFlash('error', 'Le nom de la génération est requis.');
        } else {
            $catalogRepo->createGeneration($id, $nom, $dateSortie);
            $this->addFlash('success', "Génération « {$nom} » ajoutée.");
        }

        return $this->redirectToRoute('admin_catalogue_generations', ['id' => $id]);
    }

    #[Route('/catalogue/generations/{id}/supprimer', name: 'supprimer_generation', methods: ['POST'])]
    public function supprimerGeneration(int $id, CatalogueRepository $catalogRepo): Response
    {
        $gen = $catalogRepo->findGenerationById($id);

        if (!$gen) {
            $this->addFlash('error', 'Génération introuvable.');
            return $this->redirectToRoute('admin_catalogue');
        }

        if (!$catalogRepo->deleteGeneration($id)) {
            $this->addFlash('error', "Impossible de supprimer « {$gen['generation_nom']} » : des versions lui sont rattachées.");
        } else {
            $this->addFlash('success', "Génération « {$gen['generation_nom']} » supprimée.");
        }

        return $this->redirectToRoute('admin_catalogue_generations', ['id' => $gen['id_modele']]);
    }

    // ── CATALOGUE — VERSIONS ──────────────────────────────────────────────────

    #[Route('/catalogue/generations/{id}/versions', name: 'catalogue_versions')]
    public function catalogueVersions(int $id, CatalogueRepository $catalogRepo): Response
    {
        $generation = $catalogRepo->findGenerationById($id);

        if (!$generation) {
            throw $this->createNotFoundException('Génération introuvable.');
        }

        return $this->render('admin/catalogue_versions.html.twig', [
            'generation' => $generation,
            'versions'   => $catalogRepo->findVersionsByGeneration($id),
        ]);
    }

    #[Route('/catalogue/generations/{id}/versions/ajouter', name: 'ajouter_version', methods: ['POST'])]
    public function ajouterVersion(int $id, Request $request, CatalogueRepository $catalogRepo): Response
    {
        $nom          = trim($request->request->get('nom', ''));
        $transmission = $request->request->get('transmission') ?: null;
        $boiteVitesse = $request->request->get('boite_vitesse') ?: null;
        $nbPlaces     = $request->request->get('nombre_places') ? (int) $request->request->get('nombre_places') : null;
        $nbPortes     = $request->request->get('nombre_portes') ? (int) $request->request->get('nombre_portes') : null;

        if (empty($nom)) {
            $this->addFlash('error', 'Le nom de la version est requis.');
        } else {
            $catalogRepo->createVersion($id, $nom, $transmission, $boiteVitesse, $nbPlaces, $nbPortes);
            $this->addFlash('success', "Version « {$nom} » ajoutée.");
        }

        return $this->redirectToRoute('admin_catalogue_versions', ['id' => $id]);
    }

    #[Route('/catalogue/versions/{id}/supprimer', name: 'supprimer_version', methods: ['POST'])]
    public function supprimerVersion(int $id, CatalogueRepository $catalogRepo): Response
    {
        $version = $catalogRepo->findVersionById($id);

        if (!$version) {
            $this->addFlash('error', 'Version introuvable.');
            return $this->redirectToRoute('admin_catalogue');
        }

        if (!$catalogRepo->deleteVersion($id)) {
            $this->addFlash('error', "Impossible de supprimer « {$version['nom']} » : des annonces utilisent cette version.");
        } else {
            $this->addFlash('success', "Version « {$version['nom']} » supprimée.");
        }

        return $this->redirectToRoute('admin_catalogue_versions', ['id' => $version['id_generation']]);
    }
}

