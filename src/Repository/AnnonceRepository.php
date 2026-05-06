<?php

namespace App\Repository;

use App\Service\DatabaseService;

class AnnonceRepository
{
    private const BASE_SELECT = '
        SELECT
            a.id_annonce, a.prix, a.annee_circulation, a.kilometrage, a.etat, a.couleur,
            a.localisation, a.statut, a.description, a.premiere_main, a.nombre_proprietaire,
            a.controle_technique, a.date_publication, a.date_creation,
            v.id_version, v.nom AS version_nom, v.transmission, v.boite_vitesse, v.nombre_places, v.nombre_portes,
            g.id_generation, g.nom AS generation_nom,
            mo.id_modele, mo.nom AS modele_nom,
            ma.id_marque, ma.nom AS marque_nom,
            u.id_utilisateur AS vendeur_id, u.prenom AS vendeur_prenom, u.nom AS vendeur_nom, u.numero_phone AS vendeur_phone,
            (SELECT url_photo FROM photo p WHERE p.id_annonce = a.id_annonce ORDER BY p.id_photo LIMIT 1) AS photo_principale
        FROM annonce a
        JOIN version v ON a.id_version = v.id_version
        JOIN generation g ON v.id_generation = g.id_generation
        JOIN modele mo ON g.id_modele = mo.id_modele
        JOIN marque ma ON mo.id_marque = ma.id_marque
        JOIN utilisateur u ON a.id_utilisateur = u.id_utilisateur
    ';

    public function __construct(private DatabaseService $db) {}

    public function findAll(array $filters = []): array
    {
        $where  = ['a.statut = ?'];
        $params = ['active'];

        if (!empty($filters['marque_id'])) {
            $where[]  = 'ma.id_marque = ?';
            $params[] = (int) $filters['marque_id'];
        }
        if (!empty($filters['modele_id'])) {
            $where[]  = 'mo.id_modele = ?';
            $params[] = (int) $filters['modele_id'];
        }
        if (!empty($filters['prix_min'])) {
            $where[]  = 'a.prix >= ?';
            $params[] = (float) $filters['prix_min'];
        }
        if (!empty($filters['prix_max'])) {
            $where[]  = 'a.prix <= ?';
            $params[] = (float) $filters['prix_max'];
        }
        if (!empty($filters['km_max'])) {
            $where[]  = 'a.kilometrage <= ?';
            $params[] = (int) $filters['km_max'];
        }
        if (!empty($filters['annee_min'])) {
            $where[]  = 'a.annee_circulation >= ?';
            $params[] = (int) $filters['annee_min'];
        }
        if (!empty($filters['annee_max'])) {
            $where[]  = 'a.annee_circulation <= ?';
            $params[] = (int) $filters['annee_max'];
        }

        $sql  = self::BASE_SELECT . ' WHERE ' . implode(' AND ', $where);
        $sql .= ' ORDER BY a.date_publication DESC, a.date_creation DESC';

        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array
    {
        $stmt = $this->db->getConnection()->prepare(
            self::BASE_SELECT . ' WHERE a.id_annonce = ?'
        );
        $stmt->execute([$id]);
        return $stmt->fetch() ?: null;
    }

    public function findPhotos(int $idAnnonce): array
    {
        $stmt = $this->db->getConnection()->prepare(
            'SELECT id_photo, url_photo FROM photo WHERE id_annonce = ? ORDER BY id_photo'
        );
        $stmt->execute([$idAnnonce]);
        return $stmt->fetchAll();
    }

    public function findByVendeur(int $idUser): array
    {
        $sql  = self::BASE_SELECT . ' WHERE a.id_utilisateur = ?';
        $sql .= ' ORDER BY a.date_creation DESC';
        $stmt = $this->db->getConnection()->prepare($sql);
        $stmt->execute([$idUser]);
        return $stmt->fetchAll();
    }

    public function create(array $data): int
    {
        $pdo  = $this->db->getConnection();
        $stmt = $pdo->prepare('
            INSERT INTO annonce
                (id_utilisateur, id_version, prix, annee_circulation, kilometrage,
                 etat, couleur, premiere_main, nombre_proprietaire, controle_technique,
                 localisation, description, statut, date_publication)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
        ');
        $stmt->execute([
            $data['id_utilisateur'],
            $data['id_version'],
            $data['prix'],
            $data['annee_circulation'],
            $data['kilometrage'],
            $data['etat'] ?: null,
            $data['couleur'] ?: null,
            $data['premiere_main'] ? 1 : 0,
            $data['nombre_proprietaire'] ?: null,
            $data['controle_technique'] ?: null,
            $data['localisation'] ?: null,
            $data['description'] ?: null,
            'active',
        ]);
        return (int) $pdo->lastInsertId();
    }

    public function update(int $id, array $data): void
    {
        $stmt = $this->db->getConnection()->prepare('
            UPDATE annonce SET
                id_version = ?, prix = ?, annee_circulation = ?, kilometrage = ?,
                etat = ?, couleur = ?, premiere_main = ?, nombre_proprietaire = ?,
                controle_technique = ?, localisation = ?, description = ?
            WHERE id_annonce = ?
        ');
        $stmt->execute([
            $data['id_version'],
            $data['prix'],
            $data['annee_circulation'],
            $data['kilometrage'],
            $data['etat'] ?: null,
            $data['couleur'] ?: null,
            $data['premiere_main'] ? 1 : 0,
            $data['nombre_proprietaire'] ?: null,
            $data['controle_technique'] ?: null,
            $data['localisation'] ?: null,
            $data['description'] ?: null,
            $id,
        ]);
    }

    public function delete(int $id): void
    {
        $stmt = $this->db->getConnection()->prepare(
            'DELETE FROM annonce WHERE id_annonce = ?'
        );
        $stmt->execute([$id]);
    }

    public function getOwner(int $idAnnonce): ?int
    {
        $stmt = $this->db->getConnection()->prepare(
            'SELECT id_utilisateur FROM annonce WHERE id_annonce = ?'
        );
        $stmt->execute([$idAnnonce]);
        $row = $stmt->fetch();
        return $row ? (int) $row['id_utilisateur'] : null;
    }

    public function addPhoto(int $idAnnonce, string $urlPhoto): void
    {
        $stmt = $this->db->getConnection()->prepare(
            'INSERT INTO photo (id_annonce, url_photo) VALUES (?, ?)'
        );
        $stmt->execute([$idAnnonce, $urlPhoto]);
    }

    public function deletePhoto(int $idPhoto): void
    {
        $stmt = $this->db->getConnection()->prepare(
            'DELETE FROM photo WHERE id_photo = ?'
        );
        $stmt->execute([$idPhoto]);
    }

    public function deletePhotos(int $idAnnonce): void
    {
        $stmt = $this->db->getConnection()->prepare(
            'DELETE FROM photo WHERE id_annonce = ?'
        );
        $stmt->execute([$idAnnonce]);
    }
}
