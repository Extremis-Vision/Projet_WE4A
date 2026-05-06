<?php

namespace App\Controller;

use App\Repository\AnnonceRepository;
use App\Repository\MarqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class AnnonceController extends AbstractController
{
    public function __construct(
        #[Autowire('%kernel.project_dir%')] private string $projectDir
    ) {}

    #[Route('/annonces', name: 'annonces', methods: ['GET'])]
    public function liste(Request $request, AnnonceRepository $repo, MarqueRepository $marqueRepo): Response
    {
        $filters = [
            'marque_id' => $request->query->get('marque_id'),
            'modele_id' => $request->query->get('modele_id'),
            'prix_min'  => $request->query->get('prix_min'),
            'prix_max'  => $request->query->get('prix_max'),
            'km_max'    => $request->query->get('km_max'),
            'annee_min' => $request->query->get('annee_min'),
            'annee_max' => $request->query->get('annee_max'),
        ];

        $annonces = $repo->findAll($filters);
        $marques  = $marqueRepo->findAll();
        $modelesParMarque = $marqueRepo->findModelesByMarque();

        if ($request->isXmlHttpRequest()) {
            return $this->render('annonce/_liste.html.twig', ['annonces' => $annonces]);
        }

        return $this->render('annonces.html.twig', [
            'annonces'         => $annonces,
            'marques'          => $marques,
            'modelesParMarque' => $modelesParMarque,
            'filters'          => $filters,
        ]);
    }

    #[Route('/annonces/nouvelle', name: 'annonce_nouvelle', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function nouvelle(Request $request, AnnonceRepository $repo, MarqueRepository $marqueRepo): Response
    {
        $errors  = [];
        $catalog = $marqueRepo->getCatalogTree();

        if ($request->isMethod('POST')) {
            $data = [
                'id_utilisateur'    => $this->getUser()->getId(),
                'id_version'        => (int) $request->request->get('id_version'),
                'prix'              => (float) str_replace(',', '.', $request->request->get('prix', '')),
                'annee_circulation' => (int) $request->request->get('annee_circulation'),
                'kilometrage'       => (int) $request->request->get('kilometrage'),
                'etat'              => $request->request->get('etat'),
                'couleur'           => $request->request->get('couleur'),
                'premiere_main'     => $request->request->has('premiere_main'),
                'nombre_proprietaire' => $request->request->get('nombre_proprietaire') ?: null,
                'controle_technique'  => $request->request->get('controle_technique') ?: null,
                'localisation'      => $request->request->get('localisation'),
                'description'       => $request->request->get('description'),
            ];

            if (!$data['id_version']) { $errors[] = 'Veuillez sélectionner un modèle.'; }
            if ($data['prix'] <= 0)   { $errors[] = 'Le prix doit être supérieur à 0.'; }
            if (!$data['annee_circulation']) { $errors[] = 'L\'année de mise en circulation est requise.'; }
            if ($data['kilometrage'] < 0)    { $errors[] = 'Le kilométrage est invalide.'; }

            if (empty($errors)) {
                $id = $repo->create($data);
                $this->handlePhotoUploads($request, $repo, $id);
                $this->addFlash('success', 'Annonce publiée avec succès !');
                return $this->redirectToRoute('annonce_detail', ['id' => $id]);
            }
        }

        return $this->render('annonce/form.html.twig', [
            'annonce' => self::emptyAnnonce(),
            'catalog' => $catalog,
            'errors'  => $errors,
            'photos'  => [],
        ]);
    }

    private function handlePhotoUploads(Request $request, AnnonceRepository $repo, int $idAnnonce): void
    {
        $uploadDir = $this->projectDir . '/public/uploads/photos';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $files = $request->files->get('photos', []);
        if (!is_array($files)) {
            $files = $files ? [$files] : [];
        }

        $allowedExt = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        $rejected   = 0;

        foreach ($files as $file) {
            if (!$file instanceof UploadedFile) {
                continue;
            }

            // Champ vide — aucun fichier sélectionné
            if ($file->getError() === UPLOAD_ERR_NO_FILE || $file->getClientOriginalName() === '') {
                continue;
            }

            if (!$file->isValid()) {
                $rejected++;
                continue;
            }

            $ext = strtolower($file->getClientOriginalExtension());
            if (!in_array($ext, $allowedExt, true)) {
                $rejected++;
                continue;
            }

            $filename = uniqid('photo_', true) . '.' . $ext;
            $file->move($uploadDir, $filename);
            $repo->addPhoto($idAnnonce, '/uploads/photos/' . $filename);
        }

        if ($rejected > 0) {
            $this->addFlash('warning', $rejected . ' photo(s) n\'ont pas pu être uploadées (taille trop grande ou format invalide).');
        }
    }

    private static function emptyAnnonce(): array
    {
        return [
            'id_version'          => null,
            'prix'                => '',
            'annee_circulation'   => '',
            'kilometrage'         => '',
            'etat'                => '',
            'couleur'             => '',
            'premiere_main'       => false,
            'nombre_proprietaire' => '',
            'controle_technique'  => '',
            'localisation'        => '',
            'description'         => '',
        ];
    }

    #[Route('/mes-annonces', name: 'mes_annonces', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function mesAnnonces(AnnonceRepository $repo): Response
    {
        $annonces = $repo->findByVendeur($this->getUser()->getId());

        return $this->render('annonce/mes_annonces.html.twig', [
            'annonces' => $annonces,
        ]);
    }

    #[Route('/annonces/{id}', name: 'annonce_detail', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function detail(int $id, AnnonceRepository $repo): Response
    {
        $annonce = $repo->findById($id);

        if (!$annonce) {
            throw $this->createNotFoundException('Annonce introuvable.');
        }

        $photos = $repo->findPhotos($id);

        return $this->render('annonce/detail.html.twig', [
            'annonce' => $annonce,
            'photos'  => $photos,
        ]);
    }

    #[Route('/annonces/{id}/modifier', name: 'annonce_modifier', methods: ['GET', 'POST'], requirements: ['id' => '\d+'])]
    #[IsGranted('ROLE_USER')]
    public function modifier(int $id, Request $request, AnnonceRepository $repo, MarqueRepository $marqueRepo): Response
    {
        $annonce = $repo->findById($id);
        if (!$annonce) {
            throw $this->createNotFoundException('Annonce introuvable.');
        }

        $user = $this->getUser();
        if ((int) $annonce['vendeur_id'] !== (int) $user->getId() && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Vous ne pouvez modifier que vos propres annonces.');
        }

        $errors  = [];
        $catalog = $marqueRepo->getCatalogTree();

        if ($request->isMethod('POST')) {
            $data = [
                'id_version'        => (int) $request->request->get('id_version'),
                'prix'              => (float) str_replace(',', '.', $request->request->get('prix', '')),
                'annee_circulation' => (int) $request->request->get('annee_circulation'),
                'kilometrage'       => (int) $request->request->get('kilometrage'),
                'etat'              => $request->request->get('etat'),
                'couleur'           => $request->request->get('couleur'),
                'premiere_main'     => $request->request->has('premiere_main'),
                'nombre_proprietaire' => $request->request->get('nombre_proprietaire') ?: null,
                'controle_technique'  => $request->request->get('controle_technique') ?: null,
                'localisation'      => $request->request->get('localisation'),
                'description'       => $request->request->get('description'),
            ];

            if (!$data['id_version']) { $errors[] = 'Veuillez sélectionner un modèle.'; }
            if ($data['prix'] <= 0)   { $errors[] = 'Le prix doit être supérieur à 0.'; }

            if (empty($errors)) {
                $repo->update($id, $data);

                foreach ($request->request->all('delete_photos') as $idPhoto) {
                    $repo->deletePhoto((int) $idPhoto);
                }

                $this->handlePhotoUploads($request, $repo, $id);

                $this->addFlash('success', 'Annonce mise à jour.');
                return $this->redirectToRoute('annonce_detail', ['id' => $id]);
            }
        }

        $photos = $repo->findPhotos($id);

        return $this->render('annonce/form.html.twig', [
            'annonce' => $annonce,
            'catalog' => $catalog,
            'errors'  => $errors,
            'photos'  => $photos,
        ]);
    }

    #[Route('/annonces/{id}/supprimer', name: 'annonce_supprimer', methods: ['POST'], requirements: ['id' => '\d+'])]
    #[IsGranted('ROLE_USER')]
    public function supprimer(int $id, AnnonceRepository $repo): Response
    {
        $owner = $repo->getOwner($id);
        $user  = $this->getUser();

        if ((int) $owner !== (int) $user->getId() && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException();
        }

        $repo->delete($id);
        $this->addFlash('success', 'Annonce supprimée.');
        return $this->redirectToRoute('mes_annonces');
    }
}
