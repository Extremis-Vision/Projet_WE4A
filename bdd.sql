-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 17 avr. 2026 à 18:08
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `automarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(10) UNSIGNED NOT NULL,
  `id_utilisateur` int(10) UNSIGNED NOT NULL,
  `id_version` int(10) UNSIGNED NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `annee_circulation` year(4) NOT NULL,
  `kilometrage` int(10) UNSIGNED NOT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `sellerie` varchar(100) DEFAULT NULL,
  `finition` varchar(100) DEFAULT NULL,
  `nombre_proprietaire` tinyint(4) DEFAULT NULL,
  `premiere_main` tinyint(1) NOT NULL DEFAULT 0,
  `controle_technique` date DEFAULT NULL,
  `provenance` varchar(100) DEFAULT NULL,
  `localisation` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `statut` enum('active','vendue','suspendue','en_attente') NOT NULL DEFAULT 'en_attente',
  `date_publication` datetime DEFAULT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modification` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `avis_modele`
--

CREATE TABLE `avis_modele` (
  `id_avis_modele` int(10) UNSIGNED NOT NULL,
  `id_redacteur` int(10) UNSIGNED NOT NULL,
  `id_modele` int(10) UNSIGNED NOT NULL,
  `note` tinyint(4) NOT NULL,
  `contenu` text DEFAULT NULL,
  `date_avis` datetime NOT NULL DEFAULT current_timestamp()
) ;

-- --------------------------------------------------------

--
-- Structure de la table `avis_utilisateur`
--

CREATE TABLE `avis_utilisateur` (
  `id_avis_utilisateur` int(10) UNSIGNED NOT NULL,
  `id_redacteur` int(10) UNSIGNED NOT NULL,
  `id_vendeur` int(10) UNSIGNED NOT NULL,
  `note` tinyint(4) NOT NULL,
  `contenu` text DEFAULT NULL,
  `date_avis` datetime NOT NULL DEFAULT current_timestamp()
) ;

-- --------------------------------------------------------

--
-- Structure de la table `coffre`
--

CREATE TABLE `coffre` (
  `id_coffre` int(10) UNSIGNED NOT NULL,
  `volume` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `favorie`
--

CREATE TABLE `favorie` (
  `id_utilisateur` int(10) UNSIGNED NOT NULL,
  `id_annonce` int(10) UNSIGNED NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `generation`
--

CREATE TABLE `generation` (
  `id_generation` int(10) UNSIGNED NOT NULL,
  `id_modele` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `date_sortie` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id_marque` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `continent` varchar(50) DEFAULT NULL,
  `pays` varchar(100) DEFAULT NULL,
  `date_creation` year(4) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `createur` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(10) UNSIGNED NOT NULL,
  `id_expediteur` int(10) UNSIGNED NOT NULL,
  `id_destinataire` int(10) UNSIGNED NOT NULL,
  `id_annonce` int(10) UNSIGNED NOT NULL,
  `contenu` text NOT NULL,
  `lu` tinyint(1) NOT NULL DEFAULT 0,
  `date_envoi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

CREATE TABLE `modele` (
  `id_modele` int(10) UNSIGNED NOT NULL,
  `id_marque` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `nom` varchar(150) NOT NULL,
  `annee_creation` year(4) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `moteur`
--

CREATE TABLE `moteur` (
  `id_moteur` int(10) UNSIGNED NOT NULL,
  `nom` varchar(150) NOT NULL,
  `puissance_fiscale` smallint(6) DEFAULT NULL,
  `puissance_DIN` smallint(6) DEFAULT NULL,
  `cylindree` smallint(6) DEFAULT NULL,
  `couple_cumul` smallint(6) DEFAULT NULL,
  `nombre_cylindre` tinyint(4) DEFAULT NULL,
  `nombre_soupapes_cyclindre` tinyint(4) DEFAULT NULL,
  `alimentation` varchar(50) DEFAULT NULL,
  `type_suralimentation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(10) UNSIGNED NOT NULL,
  `id_annonce` int(10) UNSIGNED NOT NULL,
  `url_photo` varchar(500) NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `possession_moteur`
--

CREATE TABLE `possession_moteur` (
  `id_version` int(10) UNSIGNED NOT NULL,
  `id_moteur` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

CREATE TABLE `recherche` (
  `id_recherche` int(10) UNSIGNED NOT NULL,
  `id_utilisateur` int(10) UNSIGNED DEFAULT NULL,
  `date_recherche` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservoir`
--

CREATE TABLE `reservoir` (
  `id_reservoir` int(10) UNSIGNED NOT NULL,
  `volume` smallint(6) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `nom`, `description`) VALUES
(1, 'Berline', 'Carrosserie 3 volumes traditionnelle'),
(2, 'Break', 'Carrosserie familiale à grand coffre'),
(3, 'SUV', 'Sport Utility Vehicle, position haute'),
(4, 'Coupé', '2 portes, ligne sportive'),
(5, 'Cabriolet', 'Toit ouvrant ou escamotable'),
(6, 'Monospace', 'Grand volume, nombreuses places'),
(7, 'Citadine', 'Petite voiture urbaine'),
(8, 'Pick-up', 'Plateau arrière ouvert'),
(9, 'Utilitaire', 'Usage professionnel'),
(10, 'Crossover', 'Entre berline et SUV');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(10) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `est_administrateur` tinyint(1) NOT NULL DEFAULT 0,
  `numero_phone` varchar(20) DEFAULT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `version`
--

CREATE TABLE `version` (
  `id_version` int(10) UNSIGNED NOT NULL,
  `id_generation` int(10) UNSIGNED NOT NULL,
  `id_reservoir` int(10) UNSIGNED DEFAULT NULL,
  `id_coffre` int(10) UNSIGNED DEFAULT NULL,
  `nom` varchar(150) NOT NULL,
  `vitesse_max` smallint(6) DEFAULT NULL,
  `consommation_urbaine` decimal(4,1) DEFAULT NULL,
  `consommation_extra_urbaine` decimal(4,1) DEFAULT NULL,
  `consomation_mixte` decimal(4,1) DEFAULT NULL,
  `emission_CO2` smallint(6) DEFAULT NULL,
  `Norme_euro` varchar(10) DEFAULT NULL,
  `Crit_air` tinyint(4) DEFAULT NULL,
  `nombre_portes` tinyint(4) DEFAULT NULL,
  `nombre_places` tinyint(4) DEFAULT NULL,
  `largeur_sans_retros` smallint(6) DEFAULT NULL,
  `hauteur` smallint(6) DEFAULT NULL,
  `empattement` smallint(6) DEFAULT NULL,
  `poids_vide` smallint(6) DEFAULT NULL,
  `largeur_pneu_avant` smallint(6) DEFAULT NULL,
  `largeur_pneu_arriere` smallint(6) DEFAULT NULL,
  `rapport_hL_pneu_avant` tinyint(4) DEFAULT NULL,
  `rapport_hL_pneu_arriere` tinyint(4) DEFAULT NULL,
  `diametre_jante_avant` tinyint(4) DEFAULT NULL,
  `diametre_jante_arriere` tinyint(4) DEFAULT NULL,
  `suspension_avant` varchar(100) DEFAULT NULL,
  `suspension_arriere` varchar(100) DEFAULT NULL,
  `freins_avant` varchar(100) DEFAULT NULL,
  `freins_arriere` varchar(100) DEFAULT NULL,
  `diametre_braquage` decimal(4,1) DEFAULT NULL,
  `transmission` varchar(50) DEFAULT NULL,
  `boite_vitesse` varchar(50) DEFAULT NULL,
  `nombre_rapport` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`),
  ADD KEY `idx_annonce_utilisateur` (`id_utilisateur`),
  ADD KEY `idx_annonce_version` (`id_version`),
  ADD KEY `idx_annonce_statut` (`statut`),
  ADD KEY `idx_annonce_prix` (`prix`),
  ADD KEY `idx_annonce_km` (`kilometrage`);

--
-- Index pour la table `avis_modele`
--
ALTER TABLE `avis_modele`
  ADD PRIMARY KEY (`id_avis_modele`),
  ADD KEY `idx_avis_modele_modele` (`id_modele`),
  ADD KEY `idx_avis_modele_redacteur` (`id_redacteur`);

--
-- Index pour la table `avis_utilisateur`
--
ALTER TABLE `avis_utilisateur`
  ADD PRIMARY KEY (`id_avis_utilisateur`),
  ADD KEY `idx_avis_vendeur` (`id_vendeur`),
  ADD KEY `idx_avis_redacteur` (`id_redacteur`);

--
-- Index pour la table `coffre`
--
ALTER TABLE `coffre`
  ADD PRIMARY KEY (`id_coffre`);

--
-- Index pour la table `favorie`
--
ALTER TABLE `favorie`
  ADD PRIMARY KEY (`id_utilisateur`,`id_annonce`),
  ADD KEY `fk_favorie_annonce` (`id_annonce`);

--
-- Index pour la table `generation`
--
ALTER TABLE `generation`
  ADD PRIMARY KEY (`id_generation`),
  ADD KEY `idx_generation_modele` (`id_modele`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id_marque`),
  ADD UNIQUE KEY `uq_marque_nom` (`nom`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `idx_message_expediteur` (`id_expediteur`),
  ADD KEY `idx_message_destinataire` (`id_destinataire`),
  ADD KEY `idx_message_annonce` (`id_annonce`);

--
-- Index pour la table `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`id_modele`),
  ADD KEY `idx_modele_marque` (`id_marque`),
  ADD KEY `idx_modele_type` (`id_type`);

--
-- Index pour la table `moteur`
--
ALTER TABLE `moteur`
  ADD PRIMARY KEY (`id_moteur`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`),
  ADD KEY `idx_photo_annonce` (`id_annonce`);

--
-- Index pour la table `possession_moteur`
--
ALTER TABLE `possession_moteur`
  ADD PRIMARY KEY (`id_version`,`id_moteur`),
  ADD KEY `fk_pm_moteur` (`id_moteur`);

--
-- Index pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD PRIMARY KEY (`id_recherche`),
  ADD KEY `idx_recherche_utilisateur` (`id_utilisateur`),
  ADD KEY `idx_recherche_date` (`date_recherche`);

--
-- Index pour la table `reservoir`
--
ALTER TABLE `reservoir`
  ADD PRIMARY KEY (`id_reservoir`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`),
  ADD UNIQUE KEY `uq_type_nom` (`nom`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `uq_utilisateur_email` (`email`),
  ADD KEY `idx_utilisateur_status` (`status`);

--
-- Index pour la table `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`id_version`),
  ADD KEY `fk_version_reservoir` (`id_reservoir`),
  ADD KEY `fk_version_coffre` (`id_coffre`),
  ADD KEY `idx_version_generation` (`id_generation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avis_modele`
--
ALTER TABLE `avis_modele`
  MODIFY `id_avis_modele` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avis_utilisateur`
--
ALTER TABLE `avis_utilisateur`
  MODIFY `id_avis_utilisateur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coffre`
--
ALTER TABLE `coffre`
  MODIFY `id_coffre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `generation`
--
ALTER TABLE `generation`
  MODIFY `id_generation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id_marque` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `id_modele` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `moteur`
--
ALTER TABLE `moteur`
  MODIFY `id_moteur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recherche`
--
ALTER TABLE `recherche`
  MODIFY `id_recherche` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservoir`
--
ALTER TABLE `reservoir`
  MODIFY `id_reservoir` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `version`
--
ALTER TABLE `version`
  MODIFY `id_version` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `fk_annonce_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_annonce_version` FOREIGN KEY (`id_version`) REFERENCES `version` (`id_version`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `avis_modele`
--
ALTER TABLE `avis_modele`
  ADD CONSTRAINT `fk_avis_modele_modele` FOREIGN KEY (`id_modele`) REFERENCES `modele` (`id_modele`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_avis_modele_redacteur` FOREIGN KEY (`id_redacteur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `avis_utilisateur`
--
ALTER TABLE `avis_utilisateur`
  ADD CONSTRAINT `fk_avis_redacteur` FOREIGN KEY (`id_redacteur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_avis_vendeur` FOREIGN KEY (`id_vendeur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `favorie`
--
ALTER TABLE `favorie`
  ADD CONSTRAINT `fk_favorie_annonce` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id_annonce`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_favorie_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `generation`
--
ALTER TABLE `generation`
  ADD CONSTRAINT `fk_generation_modele` FOREIGN KEY (`id_modele`) REFERENCES `modele` (`id_modele`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_annonce` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id_annonce`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_message_destinataire` FOREIGN KEY (`id_destinataire`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_message_expediteur` FOREIGN KEY (`id_expediteur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `fk_modele_marque` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_modele_type` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `fk_photo_annonce` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id_annonce`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `possession_moteur`
--
ALTER TABLE `possession_moteur`
  ADD CONSTRAINT `fk_pm_moteur` FOREIGN KEY (`id_moteur`) REFERENCES `moteur` (`id_moteur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pm_version` FOREIGN KEY (`id_version`) REFERENCES `version` (`id_version`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD CONSTRAINT `fk_recherche_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `version`
--
ALTER TABLE `version`
  ADD CONSTRAINT `fk_version_coffre` FOREIGN KEY (`id_coffre`) REFERENCES `coffre` (`id_coffre`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_version_generation` FOREIGN KEY (`id_generation`) REFERENCES `generation` (`id_generation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_version_reservoir` FOREIGN KEY (`id_reservoir`) REFERENCES `reservoir` (`id_reservoir`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
