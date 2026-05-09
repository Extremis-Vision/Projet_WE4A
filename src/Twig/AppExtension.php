<?php

namespace App\Twig;

use App\Repository\MessagerieRepository;
use Symfony\Bundle\SecurityBundle\Security;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

/**
 * Extension Twig globale : rend le compteur de messages non lus
 * disponible dans tous les templates via la variable `unread_messages_count`.
 */
class AppExtension extends AbstractExtension implements GlobalsInterface
{
    public function __construct(
        private MessagerieRepository $messagerieRepo,
        private Security $security,
    ) {}

    public function getGlobals(): array
    {
        $user = $this->security->getUser();

        if (!$user) {
            return ['unread_messages_count' => 0];
        }

        return [
            'unread_messages_count' => $this->messagerieRepo->countUnreadMessages($user->getId()),
        ];
    }
}
