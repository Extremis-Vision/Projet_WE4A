-- Migration : ajout colonne commentaire_admin sur la table annonce
-- Exécuter ce script UNE SEULE FOIS dans phpMyAdmin ou MySQL CLI

-- Ajout du commentaire admin (explication au vendeur en cas de mise en pause)
ALTER TABLE `annonce`
    ADD COLUMN IF NOT EXISTS `commentaire_admin` TEXT DEFAULT NULL;

-- S'assurer que le statut peut accepter 'pause' (conversion en VARCHAR si ENUM trop restrictif)
ALTER TABLE `annonce`
    MODIFY COLUMN `statut` VARCHAR(20) NOT NULL DEFAULT 'active';
