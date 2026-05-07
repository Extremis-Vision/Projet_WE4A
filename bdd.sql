-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
<<<<<<< Updated upstream
-- Généré le : mer. 29 avr. 2026 à 17:59
=======
-- Généré le : jeu. 07 mai 2026 à 17:53
>>>>>>> Stashed changes
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
  `statut` varchar(20) NOT NULL DEFAULT 'active',
  `date_publication` datetime DEFAULT NULL,
  `date_creation` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modification` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `commentaire_admin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `id_utilisateur`, `id_version`, `prix`, `annee_circulation`, `kilometrage`, `etat`, `couleur`, `sellerie`, `finition`, `nombre_proprietaire`, `premiere_main`, `controle_technique`, `provenance`, `localisation`, `description`, `statut`, `date_publication`, `date_creation`, `date_modification`, `commentaire_admin`) VALUES
(31, 2, 11, 10000.00, '2015', 112000, 'Excellent', 'Blanc', NULL, NULL, 1, 0, '2027-02-19', NULL, 'Mulhouse', 'Bonne voiture pour rouler ', 'active', '2026-05-05 22:58:48', '2026-05-05 22:58:48', '2026-05-07 17:46:51', NULL),
(33, 13, 17, 20001.00, '2014', 12222, 'Excellent', 'Noir', NULL, NULL, 2, 0, '2026-05-23', NULL, 'Mulhouse', 'Belle voiture', 'active', '2026-05-06 14:08:54', '2026-05-06 14:08:54', '2026-05-06 14:09:13', NULL),
(34, 14, 10, 25000.00, '2018', 57000, 'Très bon', 'Noir', NULL, NULL, 2, 0, '2027-06-09', NULL, 'Rixheim', 'Bonne voiture qui ne m\'a jamais trahi sur la route', 'active', '2026-05-06 15:02:12', '2026-05-06 15:02:12', '2026-05-06 15:02:12', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `coffre`
--

CREATE TABLE `coffre` (
  `id_coffre` int(10) UNSIGNED NOT NULL,
  `volume` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `coffre`
--

INSERT INTO `coffre` (`id_coffre`, `volume`) VALUES
(1, 311),
(2, 391),
(3, 381),
(4, 286),
(5, 328),
(6, 520),
(7, 422),
(8, 303),
(9, 480),
(10, 370),
(11, 380),
(12, 309),
(13, 316),
(14, 361),
(15, 351),
(16, 375),
(17, 360),
(18, 434),
(19, 412),
(20, 430),
(21, 420),
(22, 352),
(23, 503),
(24, 185),
(25, 355),
(26, 600),
(27, 580),
(28, 455),
(29, 495),
(30, 615);

-- --------------------------------------------------------

--
-- Structure de la table `declinaison_type`
--

CREATE TABLE `declinaison_type` (
  `id_version` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `declinaison_type`
--

INSERT INTO `declinaison_type` (`id_version`, `id_type`) VALUES
(1, 7),
(2, 7),
(3, 1),
(4, 7),
(5, 1),
(6, 3),
(7, 10),
(8, 7),
(9, 1),
(10, 1),
(11, 1),
(12, 7),
(13, 7),
(14, 1),
(15, 7),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 3),
(21, 1),
(22, 7),
(23, 3),
(24, 7),
(25, 7),
(26, 1),
(27, 3),
(28, 1),
(29, 1),
(30, 3);

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

--
-- Déchargement des données de la table `generation`
--

INSERT INTO `generation` (`id_generation`, `id_modele`, `nom`, `date_sortie`) VALUES
(1, 1, '208 V Phase 2', '2023-01-01'),
(2, 2, 'Clio V', '2019-06-01'),
(3, 3, 'Golf VIII', '2020-01-01'),
(4, 4, 'Yaris IV', '2020-09-01'),
(5, 5, 'Sandero III', '2021-01-01'),
(6, 6, '3008 II Phase 2', '2021-06-01'),
(7, 7, 'Captur II', '2020-09-01'),
(8, 8, 'Fiesta VII', '2017-01-01'),
(9, 9, 'Série 3 G20', '2019-03-01'),
(10, 10, 'Classe A IV', '2018-03-01'),
(11, 11, 'A3 IV', '2020-09-01'),
(12, 12, 'Corsa F', '2019-10-01'),
(13, 13, 'C3 III Phase 2', '2020-01-01'),
(14, 14, 'Corolla XII', '2018-10-01'),
(15, 15, 'Polo VI', '2017-11-01'),
(16, 16, 'Focus IV', '2018-10-01'),
(17, 17, 'Série 1 F40', '2019-09-01'),
(18, 18, 'Mégane IV Phase 2', '2020-01-01'),
(19, 19, '308 III', '2021-12-01'),
(20, 20, 'Qashqai III', '2021-02-01'),
(21, 21, 'Civic XI', '2021-10-01'),
(22, 22, 'i20 III', '2020-12-01'),
(23, 23, 'Sportage V', '2021-06-01'),
(24, 24, '500 III', '2020-01-01'),
(25, 25, 'Ibiza V Phase 2', '2021-06-01'),
(26, 26, 'Octavia IV', '2020-01-01'),
(27, 27, 'RAV4 V', '2019-01-01'),
(28, 28, 'Classe C W206', '2021-07-01'),
(29, 29, 'A4 B10', '2023-02-01'),
(30, 30, 'Tiguan II Phase 2', '2021-09-01');

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

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id_marque`, `nom`, `continent`, `pays`, `date_creation`, `description`, `createur`) VALUES
(1, 'Peugeot', 'Europe', 'France', '0000', 'Constructeur automobile français fondé en 1810', 'Armand Peugeot'),
(2, 'Renault', 'Europe', 'France', '0000', 'Constructeur automobile français', 'Louis Renault'),
(3, 'Volkswagen', 'Europe', 'Allemagne', '1937', 'Constructeur automobile allemand', 'Ferdinand Porsche'),
(4, 'Toyota', 'Asie', 'Japon', '1937', 'Constructeur automobile japonais', 'Kiichiro Toyoda'),
(5, 'Dacia', 'Europe', 'Roumanie', '1966', 'Constructeur roumain du groupe Renault', 'Nicolae Ceaușescu'),
(6, 'Ford', 'Amérique', 'États-Unis', '1903', 'Constructeur automobile américain', 'Henry Ford'),
(7, 'BMW', 'Europe', 'Allemagne', '1916', 'Bayerische Motoren Werke', 'Franz Josef Popp'),
(8, 'Mercedes-Benz', 'Europe', 'Allemagne', '1926', 'Constructeur automobile allemand de luxe', 'Karl Benz'),
(9, 'Audi', 'Europe', 'Allemagne', '1909', 'Constructeur automobile allemand premium', 'August Horch'),
(10, 'Opel', 'Europe', 'Allemagne', '0000', 'Constructeur automobile allemand', 'Adam Opel'),
(11, 'Citroën', 'Europe', 'France', '1919', 'Constructeur automobile français', 'André Citroën'),
(12, 'Nissan', 'Asie', 'Japon', '1933', 'Constructeur automobile japonais', 'Yoshisuke Aikawa'),
(13, 'Honda', 'Asie', 'Japon', '1948', 'Constructeur automobile et motocycles', 'Soichiro Honda'),
(14, 'Hyundai', 'Asie', 'Corée du Sud', '1967', 'Constructeur automobile coréen', 'Chung Ju-yung'),
(15, 'Kia', 'Asie', 'Corée du Sud', '1944', 'Constructeur automobile coréen', 'Kim Cheul-ho'),
(16, 'Fiat', 'Europe', 'Italie', '0000', 'Fabbrica Italiana Automobili Torino', 'Giovanni Agnelli'),
(17, 'SEAT', 'Europe', 'Espagne', '1950', 'Constructeur automobile espagnol du groupe VW', 'Instituto Nacional de Industria'),
(18, 'Škoda', 'Europe', 'République tchèque', '0000', 'Constructeur automobile tchèque du groupe VW', 'Václav Laurin');

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
  `annee_creation` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`id_modele`, `id_marque`, `id_type`, `nom`, `annee_creation`) VALUES
(1, 1, 7, '208', '2012'),
(2, 2, 7, 'Clio', '1990'),
(3, 3, 1, 'Golf', '1974'),
(4, 4, 7, 'Yaris', '1999'),
(5, 5, 1, 'Sandero', '2008'),
(6, 1, 3, '3008', '2008'),
(7, 2, 10, 'Captur', '2013'),
(8, 6, 7, 'Fiesta', '1976'),
(9, 7, 1, 'Série 3', '1975'),
(10, 8, 1, 'Classe A', '1997'),
(11, 9, 1, 'A3', '1996'),
(12, 10, 7, 'Corsa', '1982'),
(13, 11, 7, 'C3', '2001'),
(14, 4, 1, 'Corolla', '1966'),
(15, 3, 7, 'Polo', '1975'),
(16, 6, 1, 'Focus', '1998'),
(17, 7, 1, 'Série 1', '2004'),
(18, 2, 1, 'Mégane', '1995'),
(19, 1, 1, '308', '2007'),
(20, 12, 3, 'Qashqai', '2006'),
(21, 13, 1, 'Civic', '1972'),
(22, 14, 7, 'i20', '2008'),
(23, 15, 3, 'Sportage', '1993'),
(24, 16, 7, '500', '1957'),
(25, 17, 7, 'Ibiza', '1984'),
(26, 18, 1, 'Octavia', '1959'),
(27, 4, 3, 'RAV4', '1994'),
(28, 8, 1, 'Classe C', '1993'),
(29, 9, 1, 'A4', '1994'),
(30, 3, 3, 'Tiguan', '2007');

-- --------------------------------------------------------

--
-- Structure de la table `moteur`
--

CREATE TABLE `moteur` (
  `id_moteur` int(10) UNSIGNED NOT NULL,
  `id_marque` int(10) UNSIGNED DEFAULT NULL,
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

--
-- Déchargement des données de la table `moteur`
--

INSERT INTO `moteur` (`id_moteur`, `id_marque`, `nom`, `puissance_fiscale`, `puissance_DIN`, `cylindree`, `couple_cumul`, `nombre_cylindre`, `nombre_soupapes_cyclindre`, `alimentation`, `type_suralimentation`) VALUES
(1, 1, 'PureTech 100', 6, 100, 1199, 205, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(2, 2, 'TCe 100', 6, 100, 999, 160, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(3, 3, 'TSI 110', 8, 110, 1498, 200, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(4, 4, 'VVT-i 72', 5, 72, 998, 93, 3, 4, 'Injection indirecte', NULL),
(5, 5, 'SCe 65', 4, 65, 999, 91, 3, 4, 'Injection indirecte', NULL),
(6, 1, 'PureTech 130', 7, 130, 1199, 230, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(7, 2, 'TCe 130', 8, 130, 1333, 240, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(8, 6, 'EcoBoost 95', 6, 95, 999, 170, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(9, 7, 'B47 2.0d 190', 11, 190, 1995, 400, 4, 4, 'Injection directe diesel', 'Turbocompresseur'),
(10, 8, 'M282 1.3T 136', 8, 136, 1332, 230, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(11, 9, 'DKZA 1.5T 150', 9, 150, 1498, 250, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(12, 10, 'B12XHL 1.2T 100', 6, 100, 1199, 205, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(13, 11, 'EB2ADTS 1.2T 83', 6, 83, 1199, 160, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(14, 4, '2ZR-FXE Hybrid', 8, 122, 1798, 142, 4, 4, 'Hybride essence-électrique', NULL),
(15, 3, 'DLAC 1.0T 95', 5, 95, 999, 175, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(16, 6, 'EcoBoost 125', 7, 125, 999, 170, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(17, 7, 'B48B20A 170', 10, 170, 1998, 250, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(18, 2, 'H5Ht 1.3T 140', 8, 140, 1333, 260, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(19, 1, 'PureTech 110', 7, 110, 1199, 205, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(20, 12, 'MR13DDT 1.3T', 8, 140, 1332, 240, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(21, 13, 'LFA e:HEV 2.0', 10, 143, 1993, 175, 4, 4, 'Hybride essence-électrique', NULL),
(22, 14, 'G3LC 1.0T 100', 6, 100, 998, 172, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(23, 15, 'G4FJ 1.6T 150', 9, 150, 1591, 253, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(24, 16, '312A5 1.0 70', 4, 70, 999, 92, 3, 4, 'Injection directe', NULL),
(25, 17, 'DPCA 1.0T 95', 5, 95, 999, 175, 3, 4, 'Injection directe turbo', 'Turbocompresseur'),
(26, 18, 'DADA 1.5T 150', 9, 150, 1498, 250, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(27, 4, 'A25A-FXS Hybrid', 13, 222, 2487, 221, 4, 4, 'Hybride essence-électrique', NULL),
(28, 8, 'M254 1.5T 170', 10, 170, 1496, 300, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(29, 9, 'DETA 2.0T 150', 9, 150, 1984, 320, 4, 4, 'Injection directe turbo', 'Turbocompresseur'),
(30, 3, 'EA211 1.5T 150', 9, 150, 1498, 250, 4, 4, 'Injection directe turbo', 'Turbocompresseur');

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

--
-- Déchargement des données de la table `photo`
--

INSERT INTO `photo` (`id_photo`, `id_annonce`, `url_photo`, `date_ajout`) VALUES
(65, 33, '/uploads/photos/photo_69fb35f5d92cc5.02703960.jpg', '2026-05-06 14:37:09'),
(66, 33, '/uploads/photos/photo_69fb361cb8d6b8.67097930.jpg', '2026-05-06 14:37:48'),
(74, 34, '/uploads/photos/photo_69fb3f98be2788.06639533.jpg', '2026-05-06 15:18:16'),
(77, 34, '/uploads/photos/photo_69fb3fdd6c9f71.36294974.jpg', '2026-05-06 15:19:25'),
(79, 31, '/uploads/photos/photo_69fb41845666d7.57897275.jpg', '2026-05-06 15:26:28'),
(80, 31, '/uploads/photos/photo_69fb41925a9452.29825981.jpeg', '2026-05-06 15:26:42');

-- --------------------------------------------------------

--
-- Structure de la table `possession_moteur`
--

CREATE TABLE `possession_moteur` (
  `id_version` int(10) UNSIGNED NOT NULL,
  `id_moteur` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `possession_moteur`
--

INSERT INTO `possession_moteur` (`id_version`, `id_moteur`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30);

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

CREATE TABLE `recherche` (
  `id_recherche` int(10) UNSIGNED NOT NULL,
  `id_utilisateur` int(10) UNSIGNED DEFAULT NULL,
  `id_annonce` int(10) UNSIGNED DEFAULT NULL,
  `date_recherche` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `recherche`
--

INSERT INTO `recherche` (`id_recherche`, `id_utilisateur`, `id_annonce`, `date_recherche`) VALUES
(1, NULL, NULL, '2024-05-01 08:30:00'),
(2, NULL, NULL, '2024-05-01 08:35:00'),
(3, NULL, NULL, '2024-05-01 09:00:00'),
(4, NULL, NULL, '2024-05-02 10:15:00'),
(5, NULL, NULL, '2024-05-02 10:20:00'),
(6, NULL, NULL, '2024-05-02 10:25:00'),
(7, NULL, NULL, '2024-05-03 14:15:00'),
(8, NULL, NULL, '2024-05-03 14:20:00'),
(9, NULL, NULL, '2024-05-03 14:25:00'),
(10, NULL, NULL, '2024-05-04 09:15:00'),
(11, NULL, NULL, '2024-05-04 09:20:00'),
(12, NULL, NULL, '2024-05-04 09:25:00'),
(13, NULL, NULL, '2024-05-05 13:15:00'),
(14, NULL, NULL, '2024-05-05 13:20:00'),
(15, NULL, NULL, '2024-05-05 13:25:00'),
(16, NULL, NULL, '2024-05-06 08:15:00'),
(17, NULL, NULL, '2024-05-06 08:20:00'),
(18, NULL, NULL, '2024-05-07 11:15:00'),
(19, NULL, NULL, '2024-05-07 11:20:00'),
(20, NULL, NULL, '2024-05-08 10:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `reservoir`
--

CREATE TABLE `reservoir` (
  `id_reservoir` int(10) UNSIGNED NOT NULL,
  `id_marque` int(10) UNSIGNED DEFAULT NULL,
  `volume` smallint(6) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservoir`
--

INSERT INTO `reservoir` (`id_reservoir`, `id_marque`, `volume`, `type`) VALUES
(1, NULL, 44, 'Essence'),
(2, NULL, 45, 'Essence'),
(3, NULL, 55, 'Essence'),
(4, NULL, 42, 'Essence'),
(5, NULL, 50, 'Essence'),
(6, NULL, 53, 'Essence'),
(7, NULL, 48, 'Essence'),
(8, NULL, 42, 'Essence'),
(9, NULL, 59, 'Diesel'),
(10, NULL, 43, 'Essence'),
(11, NULL, 55, 'Essence'),
(12, NULL, 40, 'Essence'),
(13, NULL, 45, 'Essence'),
(14, NULL, 43, 'Hybride'),
(15, NULL, 45, 'Essence'),
(16, NULL, 55, 'Essence'),
(17, NULL, 52, 'Essence'),
(18, NULL, 47, 'Essence'),
(19, NULL, 53, 'Essence'),
(20, NULL, 57, 'Essence'),
(21, NULL, 46, 'Hybride'),
(22, NULL, 45, 'Essence'),
(23, NULL, 52, 'Essence'),
(24, NULL, 35, 'Essence'),
(25, NULL, 45, 'Essence'),
(26, NULL, 55, 'Essence'),
(27, NULL, 55, 'Hybride'),
(28, NULL, 66, 'Essence'),
(29, NULL, 63, 'Essence'),
(30, NULL, 60, 'Essence');

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
  `role` enum('admin','vendeur','acheteur') NOT NULL DEFAULT 'acheteur',
  `numero_phone` varchar(20) DEFAULT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `email`, `mdp`, `role`, `numero_phone`, `date_inscription`) VALUES
(1, 'Admin', 'AutoMarket', 'admin@automarket.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', '0600000001', '2024-01-01 08:00:00'),
(2, 'Martin', 'Pierre', 'pierre.martin@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vendeur', '0601234567', '2024-01-15 10:30:00'),
(3, 'Dubois', 'Sophie', 'sophie.dubois@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vendeur', '0602345678', '2024-01-20 14:15:00'),
(4, 'Leroy', 'Marc', 'marc.leroy@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vendeur', '0603456789', '2024-02-01 09:00:00'),
(5, 'Bernard', 'Julie', 'julie.bernard@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vendeur', '0604567890', '2024-02-10 11:45:00'),
(6, 'Petit', 'Thomas', 'thomas.petit@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vendeur', '0605678901', '2024-02-15 16:00:00'),
(7, 'Moreau', 'Emma', 'emma.moreau@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'acheteur', '0606789012', '2024-03-01 08:30:00'),
(8, 'Simon', 'Lucas', 'lucas.simon@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'acheteur', '0607890123', '2024-03-05 12:00:00'),
(9, 'Laurent', 'Camille', 'camille.laurent@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'acheteur', '0608901234', '2024-03-10 15:30:00'),
(10, 'Durand', 'Antoine', 'antoine.durand@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'acheteur', '0609012345', '2024-03-15 09:45:00'),
(11, 'Garnier', 'Sarah', 'sarah.garnier@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'acheteur', '0610123456', '2024-03-20 14:00:00'),
(12, 'Roux', 'Nicolas', 'nicolas.roux@email.fr', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'acheteur', '0611234567', '2024-03-25 10:15:00');

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
-- Déchargement des données de la table `version`
--

INSERT INTO `version` (`id_version`, `id_generation`, `id_reservoir`, `id_coffre`, `nom`, `vitesse_max`, `consommation_urbaine`, `consommation_extra_urbaine`, `consomation_mixte`, `emission_CO2`, `Norme_euro`, `Crit_air`, `nombre_portes`, `nombre_places`, `largeur_sans_retros`, `hauteur`, `empattement`, `poids_vide`, `largeur_pneu_avant`, `largeur_pneu_arriere`, `rapport_hL_pneu_avant`, `rapport_hL_pneu_arriere`, `diametre_jante_avant`, `diametre_jante_arriere`, `suspension_avant`, `suspension_arriere`, `freins_avant`, `freins_arriere`, `diametre_braquage`, `transmission`, `boite_vitesse`, `nombre_rapport`) VALUES
(1, 1, 1, 1, '1.2 PureTech 100 Active', 185, 6.5, 4.5, 5.2, 117, 'Euro 6d', 1, 5, 5, 1745, 1430, 2540, 1095, 195, 195, 55, 55, 16, 16, 'MacPherson', 'Poutre de torsion', 'Disques ventilés', 'Tambours', 10.4, 'Traction avant', 'Manuelle', 6),
(2, 2, 2, 2, '1.0 TCe 100 Evolution', 180, 6.8, 4.6, 5.4, 122, 'Euro 6d', 1, 5, 5, 1798, 1448, 2583, 1118, 195, 195, 55, 55, 16, 16, 'MacPherson', 'Poutre de torsion', 'Disques ventilés', 'Tambours', 10.6, 'Traction avant', 'Manuelle', 6),
(3, 3, 3, 3, '1.5 TSI 110 Life', 195, 7.2, 5.1, 5.9, 134, 'Euro 6d', 1, 5, 5, 1789, 1456, 2631, 1315, 205, 205, 55, 55, 16, 16, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 10.9, 'Traction avant', 'Manuelle', 6),
(4, 4, 4, 4, '1.0 VVT-i 72 Dynamic', 165, 6.0, 4.2, 4.9, 111, 'Euro 6d', 1, 5, 5, 1695, 1515, 2560, 1050, 185, 185, 60, 60, 15, 15, 'MacPherson', 'Poutre de torsion', 'Disques', 'Tambours', 9.8, 'Traction avant', 'Manuelle', 5),
(5, 5, 5, 5, '1.0 SCe 65 Access', 155, 6.8, 4.7, 5.5, 124, 'Euro 6d', 1, 5, 5, 1763, 1522, 2601, 1055, 195, 195, 55, 55, 15, 15, 'MacPherson', 'Poutre de torsion', 'Disques', 'Tambours', 10.8, 'Traction avant', 'Manuelle', 5),
(6, 6, 6, 6, '1.2 PureTech 130 Allure', 198, 8.2, 5.6, 6.6, 148, 'Euro 6d', 1, 5, 5, 1894, 1630, 2675, 1375, 215, 215, 60, 60, 17, 17, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.4, 'Traction avant', 'Automatique', 8),
(7, 7, 7, 7, '1.3 TCe 130 Business', 188, 7.5, 5.2, 6.1, 138, 'Euro 6d', 1, 5, 5, 1797, 1571, 2639, 1220, 205, 205, 55, 55, 16, 16, 'MacPherson', 'Poutre de torsion', 'Disques ventilés', 'Disques', 10.5, 'Traction avant', 'Manuelle', 6),
(8, 8, 8, 8, '1.0 EcoBoost 95 Titanium', 175, 6.5, 4.4, 5.2, 119, 'Euro 6d', 1, 5, 5, 1726, 1481, 2489, 1092, 185, 185, 60, 60, 15, 15, 'MacPherson', 'Poutre de torsion', 'Disques', 'Tambours', 10.2, 'Traction avant', 'Manuelle', 5),
(9, 9, 9, 9, '320d xDrive Sport', 235, 5.8, 4.1, 4.7, 124, 'Euro 6d', 1, 4, 5, 1825, 1440, 2851, 1570, 225, 225, 45, 45, 18, 18, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.6, 'Intégrale', 'Automatique', 8),
(10, 10, 10, 10, 'A 180 Progressive', 208, 7.8, 5.4, 6.3, 142, 'Euro 6d', 1, 5, 5, 1796, 1440, 2729, 1355, 205, 205, 55, 55, 16, 16, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.3, 'Traction avant', 'Automatique', 7),
(11, 11, 11, 11, '35 TFSI S tronic Advanced', 224, 8.1, 5.5, 6.5, 147, 'Euro 6d', 1, 5, 5, 1820, 1426, 2637, 1350, 215, 215, 45, 45, 17, 17, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 10.5, 'Traction avant', 'Automatique', 7),
(12, 12, 12, 12, '1.2 Turbo 100 Elegance', 182, 6.8, 4.6, 5.4, 121, 'Euro 6d', 1, 5, 5, 1765, 1481, 2562, 1154, 195, 195, 55, 55, 16, 16, 'MacPherson', 'Poutre de torsion', 'Disques ventilés', 'Tambours', 10.2, 'Traction avant', 'Manuelle', 6),
(13, 13, 13, 13, '1.2 PureTech 83 Feel', 172, 6.3, 4.3, 5.1, 116, 'Euro 6d', 1, 5, 5, 1748, 1490, 2597, 1058, 195, 195, 55, 55, 15, 15, 'MacPherson', 'Poutre de torsion', 'Disques', 'Tambours', 10.8, 'Traction avant', 'Manuelle', 5),
(14, 14, 14, 14, '1.8 Hybrid 122 Design', 180, 4.8, 4.3, 4.5, 102, 'Euro 6d', 1, 5, 5, 1790, 1435, 2640, 1345, 205, 205, 55, 55, 16, 16, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 10.6, 'Traction avant', 'Automatique', 1),
(15, 15, 15, 15, '1.0 TSI 95 Confortline', 178, 6.4, 4.3, 5.1, 116, 'Euro 6d', 1, 5, 5, 1751, 1461, 2564, 1095, 195, 195, 55, 55, 15, 15, 'MacPherson', 'Poutre de torsion', 'Disques', 'Tambours', 10.1, 'Traction avant', 'Manuelle', 5),
(16, 16, 16, 16, '1.0 EcoBoost 125 ST-Line', 195, 7.2, 5.0, 5.9, 134, 'Euro 6d', 1, 5, 5, 1823, 1472, 2648, 1278, 215, 215, 50, 50, 17, 17, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 10.8, 'Traction avant', 'Manuelle', 6),
(17, 17, 17, 17, '120i M Sport', 240, 8.5, 5.8, 6.9, 157, 'Euro 6d', 1, 5, 5, 1799, 1421, 2670, 1395, 225, 225, 40, 40, 18, 18, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 10.8, 'Traction avant', 'Automatique', 8),
(18, 18, 18, 18, '1.3 TCe 140 Intens', 202, 7.8, 5.4, 6.3, 141, 'Euro 6d', 1, 5, 5, 1814, 1447, 2669, 1275, 205, 205, 55, 55, 16, 16, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 10.8, 'Traction avant', 'Manuelle', 6),
(19, 19, 19, 19, '1.2 PureTech 110 Allure', 192, 7.5, 5.2, 6.1, 138, 'Euro 6d', 1, 5, 5, 1851, 1444, 2714, 1280, 215, 215, 45, 45, 17, 17, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 10.6, 'Traction avant', 'Manuelle', 6),
(20, 20, 20, 20, '1.3 DIG-T 140 Acenta', 195, 7.9, 5.4, 6.4, 144, 'Euro 6d', 1, 5, 5, 1838, 1625, 2665, 1350, 225, 225, 55, 55, 18, 18, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.2, 'Traction avant', 'Manuelle', 6),
(21, 21, 21, 21, 'e:HEV 143 Elegance', 180, 4.7, 4.3, 4.4, 100, 'Euro 6d', 1, 5, 5, 1802, 1415, 2735, 1350, 215, 215, 50, 50, 17, 17, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.0, 'Traction avant', 'Automatique', 1),
(22, 22, 22, 22, '1.0 T-GDI 100 Techno', 182, 6.7, 4.5, 5.3, 120, 'Euro 6d', 1, 5, 5, 1775, 1505, 2580, 1120, 195, 195, 55, 55, 16, 16, 'MacPherson', 'Poutre de torsion', 'Disques', 'Tambours', 10.4, 'Traction avant', 'Manuelle', 6),
(23, 23, 23, 23, '1.6 T-GDI 150 GT-Line', 195, 9.2, 6.4, 7.5, 170, 'Euro 6d', 1, 5, 5, 1865, 1635, 2680, 1495, 235, 235, 55, 55, 18, 18, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.3, 'Traction avant', 'Automatique', 7),
(24, 24, 24, 24, '1.0 70 Dolcevita', 162, 5.8, 4.0, 4.7, 108, 'Euro 6d', 1, 3, 4, 1627, 1488, 2300, 916, 185, 185, 55, 55, 15, 15, 'MacPherson', 'Poutre de torsion', 'Disques', 'Tambours', 9.7, 'Traction avant', 'Manuelle', 5),
(25, 25, 25, 25, '1.0 EcoTSI 95 Style', 178, 6.4, 4.3, 5.1, 116, 'Euro 6d', 1, 5, 5, 1780, 1444, 2563, 1095, 195, 195, 55, 55, 15, 15, 'MacPherson', 'Poutre de torsion', 'Disques', 'Tambours', 10.1, 'Traction avant', 'Manuelle', 5),
(26, 26, 26, 26, '1.5 TSI 150 Style', 210, 7.8, 5.3, 6.3, 142, 'Euro 6d', 1, 5, 5, 1829, 1468, 2686, 1360, 215, 215, 55, 55, 16, 16, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 10.6, 'Traction avant', 'Automatique', 7),
(27, 27, 27, 27, '2.5 Hybrid 222 Collection', 180, 6.1, 5.9, 6.0, 135, 'Euro 6d', 1, 5, 5, 1855, 1685, 2690, 1930, 235, 235, 55, 55, 18, 18, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.0, 'Intégrale', 'Automatique', 1),
(28, 28, 28, 28, 'C 200 AMG Line', 237, 8.4, 5.7, 6.8, 154, 'Euro 6d', 1, 4, 5, 1821, 1438, 2865, 1595, 225, 225, 50, 50, 17, 17, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.4, 'Propulsion', 'Automatique', 9),
(29, 29, 29, 29, '35 TFSI 150 S line', 225, 8.5, 5.7, 6.8, 154, 'Euro 6d', 1, 4, 5, 1842, 1412, 2908, 1530, 235, 235, 45, 45, 18, 18, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.2, 'Traction avant', 'Automatique', 7),
(30, 30, 30, 30, '1.5 TSI 150 R-Line', 205, 8.8, 6.0, 7.1, 162, 'Euro 6d', 1, 5, 5, 1839, 1640, 2677, 1520, 235, 235, 50, 50, 19, 19, 'MacPherson', 'Multibras', 'Disques ventilés', 'Disques', 11.8, 'Traction avant', 'Automatique', 7);

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
-- Index pour la table `declinaison_type`
--
ALTER TABLE `declinaison_type`
  ADD PRIMARY KEY (`id_version`,`id_type`),
  ADD KEY `fk_dt_type` (`id_type`);

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
  ADD PRIMARY KEY (`id_moteur`),
  ADD KEY `fk_moteur_marque` (`id_marque`);

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
  ADD KEY `idx_recherche_annonce` (`id_annonce`),
  ADD KEY `idx_recherche_date` (`date_recherche`);

--
-- Index pour la table `reservoir`
--
ALTER TABLE `reservoir`
  ADD PRIMARY KEY (`id_reservoir`),
  ADD KEY `fk_reservoir_marque` (`id_marque`);

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
  ADD KEY `idx_utilisateur_role` (`role`);

--
-- Index pour la table `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`id_version`),
  ADD KEY `idx_version_generation` (`id_generation`),
  ADD KEY `fk_version_reservoir` (`id_reservoir`),
  ADD KEY `fk_version_coffre` (`id_coffre`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `avis_modele`
--
ALTER TABLE `avis_modele`
  MODIFY `id_avis_modele` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `avis_utilisateur`
--
ALTER TABLE `avis_utilisateur`
  MODIFY `id_avis_utilisateur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `coffre`
--
ALTER TABLE `coffre`
  MODIFY `id_coffre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `generation`
--
ALTER TABLE `generation`
  MODIFY `id_generation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id_marque` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `modele`
--
ALTER TABLE `modele`
  MODIFY `id_modele` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `moteur`
--
ALTER TABLE `moteur`
  MODIFY `id_moteur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `recherche`
--
ALTER TABLE `recherche`
  MODIFY `id_recherche` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `reservoir`
--
ALTER TABLE `reservoir`
  MODIFY `id_reservoir` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
<<<<<<< Updated upstream
  MODIFY `id_utilisateur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
=======
  MODIFY `id_utilisateur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `version`
--
ALTER TABLE `version`
  MODIFY `id_version` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- Contraintes pour la table `declinaison_type`
--
ALTER TABLE `declinaison_type`
  ADD CONSTRAINT `fk_dt_type` FOREIGN KEY (`id_type`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dt_version` FOREIGN KEY (`id_version`) REFERENCES `version` (`id_version`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Contraintes pour la table `moteur`
--
ALTER TABLE `moteur`
  ADD CONSTRAINT `fk_moteur_marque` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`) ON DELETE SET NULL ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_recherche_annonce` FOREIGN KEY (`id_annonce`) REFERENCES `annonce` (`id_annonce`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_recherche_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservoir`
--
ALTER TABLE `reservoir`
  ADD CONSTRAINT `fk_reservoir_marque` FOREIGN KEY (`id_marque`) REFERENCES `marque` (`id_marque`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `version`
--
ALTER TABLE `version`
  ADD CONSTRAINT `fk_version_coffre` FOREIGN KEY (`id_coffre`) REFERENCES `coffre` (`id_coffre`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_version_generation` FOREIGN KEY (`id_generation`) REFERENCES `generation` (`id_generation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_version_reservoir` FOREIGN KEY (`id_reservoir`) REFERENCES `reservoir` (`id_reservoir`) ON DELETE SET NULL ON UPDATE CASCADE;
>>>>>>> Stashed changes
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
