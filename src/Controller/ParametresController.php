<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class ParametresController extends AbstractController
{
    #[Route('/parametres', name: 'parametres', methods: ['GET', 'POST'])]
    public function index(
        Request $request,
        UserRepository $repo,
        UserPasswordHasherInterface $hasher
    ): Response {
        $user = $this->getUser();
        $profile = $repo->findByIdFull($user->getId());

        if ($request->isMethod('POST')) {
            $action = $request->request->get('_action');

            /* ---- Modification du profil ---- */
            if ($action === 'update_profile') {
                $token = $request->request->get('_token');
                if (!$this->isCsrfTokenValid('parametres_profile', $token)) {
                    $this->addFlash('error', 'Jeton de sécurité invalide.');
                    return $this->redirectToRoute('parametres');
                }

                $nom    = trim($request->request->get('nom', ''));
                $prenom = trim($request->request->get('prenom', ''));
                $email  = trim($request->request->get('email', ''));
                $phone  = trim($request->request->get('numero_phone', '')) ?: null;

                if (!$nom || !$prenom || !$email) {
                    $this->addFlash('error', 'Nom, prénom et email sont obligatoires.');
                    return $this->redirectToRoute('parametres');
                }

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $this->addFlash('error', 'Adresse email invalide.');
                    return $this->redirectToRoute('parametres');
                }

                $repo->updateProfile($user->getId(), $nom, $prenom, $email, $phone);
                $this->addFlash('success', 'Profil mis à jour avec succès.');
                return $this->redirectToRoute('parametres');
            }

            /* ---- Changement de mot de passe ---- */
            if ($action === 'update_password') {
                $token = $request->request->get('_token');
                if (!$this->isCsrfTokenValid('parametres_password', $token)) {
                    $this->addFlash('error', 'Jeton de sécurité invalide.');
                    return $this->redirectToRoute('parametres');
                }

                $current = $request->request->get('current_password', '');
                $new     = $request->request->get('new_password', '');
                $confirm = $request->request->get('confirm_password', '');

                if (!$hasher->isPasswordValid($user, $current)) {
                    $this->addFlash('error', 'Le mot de passe actuel est incorrect.');
                    return $this->redirectToRoute('parametres');
                }

                if (strlen($new) < 8) {
                    $this->addFlash('error', 'Le nouveau mot de passe doit contenir au moins 8 caractères.');
                    return $this->redirectToRoute('parametres');
                }

                if ($new !== $confirm) {
                    $this->addFlash('error', 'Les mots de passe ne correspondent pas.');
                    return $this->redirectToRoute('parametres');
                }

                $hashed = $hasher->hashPassword($user, $new);
                $repo->updatePassword($user->getId(), $hashed);
                $this->addFlash('success', 'Mot de passe modifié avec succès.');
                return $this->redirectToRoute('parametres');
            }

            /* ---- Suppression du compte ---- */
            if ($action === 'delete_account') {
                $token = $request->request->get('_token');
                if (!$this->isCsrfTokenValid('parametres_delete', $token)) {
                    $this->addFlash('error', 'Jeton de sécurité invalide.');
                    return $this->redirectToRoute('parametres');
                }

                $confirmText = trim($request->request->get('confirm_delete', ''));
                if ($confirmText !== 'SUPPRIMER') {
                    $this->addFlash('error', 'Veuillez taper SUPPRIMER pour confirmer.');
                    return $this->redirectToRoute('parametres');
                }

                $repo->delete($user->getId());

                // Invalidate session
                $request->getSession()->invalidate();
                $this->container->get('security.token_storage')->setToken(null);

                return $this->redirectToRoute('homePage');
            }
        }

        return $this->render('user/parametres.html.twig', [
            'profile' => $profile,
        ]);
    }
}
