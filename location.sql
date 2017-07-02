-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 02 juil. 2017 à 17:15
-- Version du serveur :  5.7.18
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

CREATE TABLE `appartement` (
  `id` int(11) NOT NULL,
  `adresse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surface` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `wifi_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_appart` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_residence` int(11) NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rib` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`id`, `adresse`, `surface`, `wifi_code`, `contact_appart`, `id_residence`, `phone`, `rib`) VALUES
(1, '12 Square Albert Einstein, M.KOPTIVI, 91000 Evry', '80 m2', 'KOKOUK_wifi', 'Saliou', 1, '01 65 44 77 66', 'FR098272277282929229920'),
(2, '25 Saint George, M.KOPOTIVI, 91000 Grigny', '90 m2', 'GrignyGrigny', 'Mariam', 2, '01 43 44 77 08', 'FR098272277282929229920'),
(3, '135 Gare RER, Bras de Fer, 92000', '85', 'Wifi2019', 'Kokou', 3, '01 93 44 77 08', 'FR098272277282929229920');

-- --------------------------------------------------------

--
-- Structure de la table `meuble`
--

CREATE TABLE `meuble` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `meuble`
--

INSERT INTO `meuble` (`id`, `name`, `id_type`) VALUES
(1, 'Télévison  Samsung 80cm', 1);

-- --------------------------------------------------------

--
-- Structure de la table `residence`
--

CREATE TABLE `residence` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_gardien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `horaire_gardien` longtext COLLATE utf8_unicode_ci NOT NULL,
  `contact_syndic` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `residence`
--

INSERT INTO `residence` (`id`, `name`, `contact_gardien`, `horaire_gardien`, `contact_syndic`) VALUES
(1, 'Les Bruyères', '06 76 34 55 98', 'Lundi - Samedi : 8h - 20h', '0678998877'),
(2, 'Grigny Centre', '06 00 34 55 98', 'Lundi - Mardi - Mercredi - Samedi', '0488776609'),
(3, 'Bras de Fer', '07 76 34 55 98', 'Lundi - Vendredi : 9h-20h', '0188776609');

-- --------------------------------------------------------

--
-- Structure de la table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `surface` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rent` int(11) NOT NULL,
  `guarantee` int(11) NOT NULL,
  `id_appart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `room`
--

INSERT INTO `room` (`id`, `surface`, `rent`, `guarantee`, `id_appart`) VALUES
(1, '20 m2', 400, 400, 1),
(2, '15 m2', 350, 350, 1),
(3, '18 m2', 350, 350, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_meuble`
--

CREATE TABLE `type_meuble` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_meuble`
--

INSERT INTO `type_meuble` (`id`, `name`) VALUES
(1, 'Télévision');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartement`
--
ALTER TABLE `appartement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `meuble`
--
ALTER TABLE `meuble`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `residence`
--
ALTER TABLE `residence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_meuble`
--
ALTER TABLE `type_meuble`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartement`
--
ALTER TABLE `appartement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `meuble`
--
ALTER TABLE `meuble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `residence`
--
ALTER TABLE `residence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `type_meuble`
--
ALTER TABLE `type_meuble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
