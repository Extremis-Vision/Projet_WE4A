<?php

namespace App\Repository;

use App\Service\DatabaseService;

class CatalogueRepository
{
    public function __construct(private DatabaseService $db) {}

    // ── MARQUES ─────────────────────────────────────────────────────────────

    public function findAllMarques(): array
    {
        return $this->db->getConnection()->query('
            SELECT ma.id_marque, ma.nom,
                COUNT(DISTINCT mo.id_modele) AS nb_modeles
            FROM marque ma
            LEFT JOIN modele mo ON mo.id_marque = ma.id_marque
            GROUP BY ma.id_marque, ma.nom
            ORDER BY ma.nom
        ')->fetchAll();
    }

    public function findMarqueById(int $id): ?array
    {
        $stmt = $this->db->getConnection()->prepare(
            'SELECT id_marque, nom FROM marque WHERE id_marque = ?'
        );
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function createMarque(string $nom): int
    {
        $pdo  = $this->db->getConnection();
        $stmt = $pdo->prepare('INSERT INTO marque (nom) VALUES (?)');
        $stmt->execute([trim($nom)]);
        return (int) $pdo->lastInsertId();
    }

    public function deleteMarque(int $id): bool
    {
        $count = $this->db->getConnection()->prepare('SELECT COUNT(*) FROM modele WHERE id_marque = ?');
        $count->execute([$id]);
        if ((int) $count->fetchColumn() > 0) {
            return false;
        }
        $this->db->getConnection()->prepare('DELETE FROM marque WHERE id_marque = ?')->execute([$id]);
        return true;
    }

    // ── MODELES ──────────────────────────────────────────────────────────────

    public function findModelesByMarque(int $idMarque): array
    {
        $stmt = $this->db->getConnection()->prepare('
            SELECT mo.id_modele, mo.nom, mo.id_marque,
                COUNT(DISTINCT g.id_generation) AS nb_generations
            FROM modele mo
            LEFT JOIN generation g ON g.id_modele = mo.id_modele
            WHERE mo.id_marque = ?
            GROUP BY mo.id_modele, mo.nom, mo.id_marque
            ORDER BY mo.nom
        ');
        $stmt->execute([$idMarque]);
        return $stmt->fetchAll();
    }

    public function findModeleById(int $id): ?array
    {
        $stmt = $this->db->getConnection()->prepare('
            SELECT mo.id_modele, mo.nom, mo.id_marque, ma.nom AS marque_nom
            FROM modele mo
            JOIN marque ma ON mo.id_marque = ma.id_marque
            WHERE mo.id_modele = ?
        ');
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function createModele(int $idMarque, string $nom): int
    {
        $pdo  = $this->db->getConnection();
        $stmt = $pdo->prepare('INSERT INTO modele (id_marque, nom) VALUES (?, ?)');
        $stmt->execute([$idMarque, trim($nom)]);
        return (int) $pdo->lastInsertId();
    }

    public function deleteModele(int $id): bool
    {
        $count = $this->db->getConnection()->prepare('SELECT COUNT(*) FROM generation WHERE id_modele = ?');
        $count->execute([$id]);
        if ((int) $count->fetchColumn() > 0) {
            return false;
        }
        $this->db->getConnection()->prepare('DELETE FROM modele WHERE id_modele = ?')->execute([$id]);
        return true;
    }

    // ── GENERATIONS ──────────────────────────────────────────────────────────

    public function findGenerationsByModele(int $idModele): array
    {
        $stmt = $this->db->getConnection()->prepare('
            SELECT g.id_generation, g.nom, g.date_sortie, g.id_modele,
                COUNT(v.id_version) AS nb_versions
            FROM generation g
            LEFT JOIN version v ON v.id_generation = g.id_generation
            WHERE g.id_modele = ?
            GROUP BY g.id_generation, g.nom, g.date_sortie, g.id_modele
            ORDER BY g.date_sortie, g.nom
        ');
        $stmt->execute([$idModele]);
        return $stmt->fetchAll();
    }

    public function findGenerationById(int $id): ?array
    {
        $stmt = $this->db->getConnection()->prepare('
            SELECT g.id_generation, g.nom AS generation_nom, g.date_sortie, g.id_modele,
                mo.nom AS modele_nom, mo.id_marque, ma.nom AS marque_nom
            FROM generation g
            JOIN modele mo ON g.id_modele = mo.id_modele
            JOIN marque ma ON mo.id_marque = ma.id_marque
            WHERE g.id_generation = ?
        ');
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function createGeneration(int $idModele, string $nom, ?string $dateSortie): int
    {
        $pdo  = $this->db->getConnection();
        $stmt = $pdo->prepare('INSERT INTO generation (id_modele, nom, date_sortie) VALUES (?, ?, ?)');
        $stmt->execute([$idModele, trim($nom), $dateSortie ?: null]);
        return (int) $pdo->lastInsertId();
    }

    public function deleteGeneration(int $id): bool
    {
        $count = $this->db->getConnection()->prepare('SELECT COUNT(*) FROM version WHERE id_generation = ?');
        $count->execute([$id]);
        if ((int) $count->fetchColumn() > 0) {
            return false;
        }
        $this->db->getConnection()->prepare('DELETE FROM generation WHERE id_generation = ?')->execute([$id]);
        return true;
    }

    // ── VERSIONS ─────────────────────────────────────────────────────────────

    public function findVersionsByGeneration(int $idGeneration): array
    {
        $stmt = $this->db->getConnection()->prepare('
            SELECT v.id_version, v.nom, v.transmission, v.boite_vitesse,
                v.nombre_places, v.nombre_portes, v.id_generation
            FROM version v
            WHERE v.id_generation = ?
            ORDER BY v.nom
        ');
        $stmt->execute([$idGeneration]);
        return $stmt->fetchAll();
    }

    public function findVersionById(int $id): ?array
    {
        $stmt = $this->db->getConnection()->prepare('
            SELECT v.id_version, v.nom, v.transmission, v.boite_vitesse,
                v.nombre_places, v.nombre_portes, v.id_generation,
                g.nom AS generation_nom, g.id_modele,
                mo.nom AS modele_nom, mo.id_marque, ma.nom AS marque_nom
            FROM version v
            JOIN generation g ON v.id_generation = g.id_generation
            JOIN modele mo ON g.id_modele = mo.id_modele
            JOIN marque ma ON mo.id_marque = ma.id_marque
            WHERE v.id_version = ?
        ');
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function createVersion(
        int $idGeneration,
        string $nom,
        ?string $transmission,
        ?string $boiteVitesse,
        ?int $nbPlaces,
        ?int $nbPortes
    ): int {
        $pdo  = $this->db->getConnection();
        $stmt = $pdo->prepare('
            INSERT INTO version (id_generation, nom, transmission, boite_vitesse, nombre_places, nombre_portes)
            VALUES (?, ?, ?, ?, ?, ?)
        ');
        $stmt->execute([$idGeneration, trim($nom), $transmission ?: null, $boiteVitesse ?: null, $nbPlaces ?: null, $nbPortes ?: null]);
        return (int) $pdo->lastInsertId();
    }

    public function deleteVersion(int $id): bool
    {
        $count = $this->db->getConnection()->prepare('SELECT COUNT(*) FROM annonce WHERE id_version = ?');
        $count->execute([$id]);
        if ((int) $count->fetchColumn() > 0) {
            return false;
        }
        $this->db->getConnection()->prepare('DELETE FROM version WHERE id_version = ?')->execute([$id]);
        return true;
    }
}
