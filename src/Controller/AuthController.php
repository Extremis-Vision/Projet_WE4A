<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\DatabaseService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthController extends AbstractController
{
    #[Route('/connexion', name: 'connexion', methods: ['GET', 'POST'])]
    public function connexion(AuthenticationUtils $authUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('homePage');
        }

        return $this->render('connexion.html.twig', [
            'last_username' => $authUtils->getLastUsername(),
            'error' => $authUtils->getLastAuthenticationError(),
        ]);
    }

    #[Route('/inscription', name: 'inscription', methods: ['GET', 'POST'])]
    public function inscription(
        Request $request,
        DatabaseService $db,
        UserPasswordHasherInterface $hasher
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('homePage');
        }

        if ($request->isMethod('POST')) {
            $prenom = trim($request->request->get('prenom', ''));
            $nom    = trim($request->request->get('nom', ''));
            $email  = trim($request->request->get('email', ''));
            $mdp    = $request->request->get('mdp', '');
            $mdpConfirm = $request->request->get('mdp_confirm', '');
            $phone  = trim($request->request->get('numero_phone', '')) ?: null;

            if (!$prenom || !$nom || !$email || !$mdp) {
                $this->addFlash('error', 'Tous les champs obligatoires doivent être remplis.');
                return $this->render('inscription.html.twig');
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->addFlash('error', 'Adresse email invalide.');
                return $this->render('inscription.html.twig');
            }

            if ($mdp !== $mdpConfirm) {
                $this->addFlash('error', 'Les mots de passe ne correspondent pas.');
                return $this->render('inscription.html.twig');
            }

            if (strlen($mdp) < 8) {
                $this->addFlash('error', 'Le mot de passe doit contenir au moins 8 caractères.');
                return $this->render('inscription.html.twig');
            }

            $pdo = $db->getConnection();

            $check = $pdo->prepare('SELECT id_utilisateur FROM utilisateur WHERE email = ?');
            $check->execute([$email]);
            if ($check->fetch()) {
                $this->addFlash('error', 'Cette adresse email est déjà utilisée.');
                return $this->render('inscription.html.twig');
            }

            $tempUser = new User();
            $tempUser->setMdp('');
            $hashedPwd = $hasher->hashPassword($tempUser, $mdp);

            $stmt = $pdo->prepare(
                'INSERT INTO utilisateur (nom, prenom, email, mdp, role, numero_phone) VALUES (?, ?, ?, ?, ?, ?)'
            );
            $stmt->execute([$nom, $prenom, $email, $hashedPwd, 'acheteur', $phone]);

            $this->addFlash('success', 'Compte créé avec succès. Vous pouvez maintenant vous connecter.');
            return $this->redirectToRoute('connexion');
        }

        return $this->render('inscription.html.twig');
    }

    #[Route('/deconnexion', name: 'deconnexion')]
    public function deconnexion(): never
    {
        // Intercepté par le firewall Symfony avant d'atteindre ce code.
        throw new \LogicException('Le firewall doit gérer cette route.');
    }
}
