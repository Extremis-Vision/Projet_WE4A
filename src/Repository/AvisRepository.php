<?php

namespace App\Repository;

use App\Service\DatabaseService;

class AvisRepository
{
    public function __construct(private DatabaseService $db) {}

    public function findByVendeur(int $vendeurId): array
    {
        $stmt = $this->db->getConnection()->prepare('
            SELECT
                a.id_avis_utilisateur,
                a.note,
                a.contenu,
                a.date_avis,
                u.id_utilisateur AS redacteur_id,
                u.nom            AS redacteur_nom,
                u.prenom         AS redacteur_prenom
            FROM avis_utilisateur a
            JOIN utilisateur u ON u.id_utilisateur = a.id_redacteur
            WHERE a.id_vendeur = :vid
            ORDER BY a.date_avis DESC
        ');
        $stmt->execute(['vid' => $vendeurId]);
        return $stmt->fetchAll();
    }

    public function getStats(int $vendeurId): array
    {
        $stmt = $this->db->getConnection()->prepare('
            SELECT COUNT(*) AS nb_avis, ROUND(AVG(note), 1) AS note_moyenne
            FROM avis_utilisateur
            WHERE id_vendeur = :vid
        ');
        $stmt->execute(['vid' => $vendeurId]);
        return $stmt->fetch();
    }

    public function hasAlreadyReviewed(int $redacteurId, int $vendeurId): bool
    {
        $stmt = $this->db->getConnection()->prepare('
            SELECT 1 FROM avis_utilisateur
            WHERE id_redacteur = :rid AND id_vendeur = :vid
        ');
        $stmt->execute(['rid' => $redacteurId, 'vid' => $vendeurId]);
        return (bool) $stmt->fetch();
    }

    public function create(int $redacteurId, int $vendeurId, int $note, ?string $contenu): int
    {
        $stmt = $this->db->getConnection()->prepare('
            INSERT INTO avis_utilisateur (id_redacteur, id_vendeur, note, contenu, date_avis)
            VALUES (:rid, :vid, :note, :contenu, NOW())
        ');
        $stmt->execute([
            'rid'     => $redacteurId,
            'vid'     => $vendeurId,
            'note'    => $note,
            'contenu' => $contenu,
        ]);
        return (int) $this->db->getConnection()->lastInsertId();
    }

    public function findById(int $id): ?array
    {
        $stmt = $this->db->getConnection()->prepare(
            'SELECT * FROM avis_utilisateur WHERE id_avis_utilisateur = :id'
        );
        $stmt->execute(['id' => $id]);
        return $stmt->fetch() ?: null;
    }

    public function delete(int $id): void
    {
        $this->db->getConnection()->prepare(
            'DELETE FROM avis_utilisateur WHERE id_avis_utilisateur = :id'
        )->execute(['id' => $id]);
    }

    public function findVendeur(int $id): ?array
    {
        $stmt = $this->db->getConnection()->prepare(
            'SELECT id_utilisateur, nom, prenom FROM utilisateur WHERE id_utilisateur = :id'
        );
        $stmt->execute(['id' => $id]);
        return $stmt->fetch() ?: null;
    }
}
