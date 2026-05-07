<?php

namespace App\Repository;

use App\Service\DatabaseService;

class AdminRepository
{
    public function __construct(private DatabaseService $db) {}

    public function getStats(): array
    {
        $row = $this->db->getConnection()->query('
            SELECT
                (SELECT COUNT(*) FROM utilisateur)                          AS total_users,
                (SELECT COUNT(*) FROM annonce WHERE statut = \'active\')    AS active_annonces,
                (SELECT COUNT(*) FROM annonce WHERE statut = \'pause\')     AS paused_annonces,
                (SELECT COUNT(*) FROM annonce)                              AS total_annonces
        ')->fetch();

        return [
            'total_users'      => (int) $row['total_users'],
            'active_annonces'  => (int) $row['active_annonces'],
            'paused_annonces'  => (int) $row['paused_annonces'],
            'total_annonces'   => (int) $row['total_annonces'],
        ];
    }

    public function findAllUsers(): array
    {
        return $this->db->getConnection()->query('
            SELECT
                u.id_utilisateur, u.nom, u.prenom, u.email, u.role,
                u.numero_phone, u.date_inscription,
                COUNT(a.id_annonce) AS nb_annonces
            FROM utilisateur u
            LEFT JOIN annonce a ON a.id_utilisateur = u.id_utilisateur
            GROUP BY u.id_utilisateur, u.nom, u.prenom, u.email, u.role, u.numero_phone, u.date_inscription
            ORDER BY u.date_inscription DESC
        ')->fetchAll();
    }

    public function findUserById(int $id): ?array
    {
        $stmt = $this->db->getConnection()->prepare(
            'SELECT id_utilisateur, nom, prenom, email, role, numero_phone, date_inscription
             FROM utilisateur WHERE id_utilisateur = ?'
        );
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function deleteUser(int $id): void
    {
        $pdo = $this->db->getConnection();

        // Supprimer les photos des annonces du vendeur
        $pdo->prepare('
            DELETE ph FROM photo ph
            JOIN annonce a ON ph.id_annonce = a.id_annonce
            WHERE a.id_utilisateur = ?
        ')->execute([$id]);

        // Supprimer les annonces
        $pdo->prepare('DELETE FROM annonce WHERE id_utilisateur = ?')->execute([$id]);

        // Supprimer l'utilisateur
        $pdo->prepare('DELETE FROM utilisateur WHERE id_utilisateur = ?')->execute([$id]);
    }
}
