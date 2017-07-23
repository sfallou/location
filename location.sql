-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 23 juil. 2017 à 05:20
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
(1, '12 Square Albert Einstein, M.KOPTIVI, 91000 Evry', '80 m2', 'KOKOUK_wifi', 'Saliou', 1, '00 65 44 77 66', 'FR098272277282929229920'),
(2, '25 Saint George, M.KOPOTIVI, 91000 Grigny', '90 m2', 'GrignyGrigny', 'Mariam', 2, '01 43 44 77 08', 'FR098272277282929229920'),
(3, '135 Gare RER, Bras de Fer, 92000', '85', 'Wifi2019', 'Kokou', 3, '01 93 44 77 08', 'FR098272277282929229920'),
(4, '105 Gare RER, Bras de Fer, 92000', '80 m2', 'ColocSuper', 'Personna', 3, '05 65 44 77 66', 'FR098272277282929229920');

-- --------------------------------------------------------

--
-- Structure de la table `charge_appartement`
--

CREATE TABLE `charge_appartement` (
  `id` int(11) NOT NULL,
  `appart_id` int(11) DEFAULT NULL,
  `charge_id` int(11) DEFAULT NULL,
  `charge_amount` decimal(10,0) DEFAULT NULL,
  `charge_date` date DEFAULT NULL,
  `charge_state` tinyint(1) DEFAULT NULL,
  `charge_comment` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `charge_appartement`
--

INSERT INTO `charge_appartement` (`id`, `appart_id`, `charge_id`, `charge_amount`, `charge_date`, `charge_state`, `charge_comment`) VALUES
(1, 1, 2, '160', '2017-07-01', 0, 'Facture du mois précédent'),
(2, 1, 1, '100', '2017-07-01', 0, 'Frais électricité du mois'),
(3, 1, 3, '10', '2017-07-18', 0, 'Paiement à partager entre colocs');

-- --------------------------------------------------------

--
-- Structure de la table `charge_room`
--

CREATE TABLE `charge_room` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `charge_id` int(11) DEFAULT NULL,
  `charge_amount` decimal(10,0) DEFAULT NULL,
  `charge_date` date DEFAULT NULL,
  `charge_state` tinyint(1) DEFAULT NULL,
  `charge_comment` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `charge_room`
--

INSERT INTO `charge_room` (`id`, `room_id`, `charge_id`, `charge_amount`, `charge_date`, `charge_state`, `charge_comment`) VALUES
(1, 1, 1, '40', '2017-07-01', 1, 'Part sur les frais collectifs en gaz'),
(2, 2, 1, '40', '2017-07-01', 0, 'Part de la charge collective');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `genre` int(11) NOT NULL,
  `telephone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_type_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `genre`, `telephone`, `id_type_contact`) VALUES
(1, 'Jean', 'Naser', 'jnaser@mail.com', 1, '0899886677', 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact_appartement`
--

CREATE TABLE `contact_appartement` (
  `id` int(11) NOT NULL,
  `appart_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `contact_comment` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact_residence`
--

CREATE TABLE `contact_residence` (
  `id` int(11) NOT NULL,
  `residence_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `contact_comment` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_type` int(11) NOT NULL,
  `path` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`id`, `name`, `id_type`, `path`) VALUES
(1, 'Bail grigny', 1, '6a541938c6446c01b68ce3659a9fe86d.pdf'),
(2, 'Facture Téléphone et box du mois de mars', 2, '6be9cc1ae1059d0cdb7f8f7c1646934d.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `document_appartement`
--

CREATE TABLE `document_appartement` (
  `id` int(11) NOT NULL,
  `appart_id` int(11) DEFAULT NULL,
  `document_id` int(11) DEFAULT NULL,
  `document_date` date DEFAULT NULL,
  `document_comment` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `document_appartement`
--

INSERT INTO `document_appartement` (`id`, `appart_id`, `document_id`, `document_date`, `document_comment`) VALUES
(1, 1, 1, '2017-07-01', NULL),
(2, 1, 2, '2017-07-18', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `document_user_room`
--

CREATE TABLE `document_user_room` (
  `id` int(11) NOT NULL,
  `user_room_id` int(11) DEFAULT NULL,
  `document_id` int(11) DEFAULT NULL,
  `document_date` date DEFAULT NULL,
  `document_comment` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `document_user_room`
--

INSERT INTO `document_user_room` (`id`, `user_room_id`, `document_id`, `document_date`, `document_comment`) VALUES
(1, 1, 1, '2017-07-18', NULL),
(2, 1, 1, '2017-07-18', NULL),
(3, 2, 1, '2017-07-18', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fix_appartement`
--

CREATE TABLE `fix_appartement` (
  `id` int(11) NOT NULL,
  `appart_id` int(11) DEFAULT NULL,
  `fix_id` int(11) DEFAULT NULL,
  `fix_date` date DEFAULT NULL,
  `fix_state` tinyint(1) DEFAULT NULL,
  `fix_priority` tinyint(1) DEFAULT NULL,
  `fix_comment` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fix_appartement`
--

INSERT INTO `fix_appartement` (`id`, `appart_id`, `fix_id`, `fix_date`, `fix_state`, `fix_priority`, `fix_comment`) VALUES
(1, 1, 1, '2017-07-14', 0, 1, 'Robinet cuisine'),
(2, 1, 2, '2017-07-15', 0, 1, 'Plus de lumière dans l\'immeuble'),
(3, 1, 1, '2017-07-18', 0, 1, 'Probleme de lavabo dans les douches');

-- --------------------------------------------------------

--
-- Structure de la table `fix_room`
--

CREATE TABLE `fix_room` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `fix_id` int(11) DEFAULT NULL,
  `fix_date` date DEFAULT NULL,
  `fix_state` tinyint(1) DEFAULT NULL,
  `fix_priority` tinyint(1) DEFAULT NULL,
  `fix_comment` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fix_room`
--

INSERT INTO `fix_room` (`id`, `room_id`, `fix_id`, `fix_date`, `fix_state`, `fix_priority`, `fix_comment`) VALUES
(1, 1, 1, '2017-07-15', 0, 1, 'Test'),
(2, 1, 2, '2017-07-15', 0, 0, 'Prise de la chambre foirée'),
(3, 3, 2, '2017-07-23', 0, 1, 'Pas de courant dans la chambre');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(2) NOT NULL,
  `fonction_libelle` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `fonction_description` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `fonction_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Télévison  Samsung 80cm', 1),
(2, 'Sofa 4 places', 4),
(3, 'Table 3 pattes', 2),
(4, 'Lit double place', 5);

-- --------------------------------------------------------

--
-- Structure de la table `meuble_appartement`
--

CREATE TABLE `meuble_appartement` (
  `id` int(11) NOT NULL,
  `appart_id` int(11) DEFAULT NULL,
  `meuble_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `meuble_appartement`
--

INSERT INTO `meuble_appartement` (`id`, `appart_id`, `meuble_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 2),
(4, 1, 4),
(5, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `meuble_room`
--

CREATE TABLE `meuble_room` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `meuble_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `meuble_room`
--

INSERT INTO `meuble_room` (`id`, `room_id`, `meuble_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `object`
--

CREATE TABLE `object` (
  `id` int(11) NOT NULL,
  `object_name` varchar(50) DEFAULT NULL,
  `object_wording` varchar(45) DEFAULT NULL,
  `object_ftp` tinyint(1) DEFAULT NULL,
  `object_ftp_host` varchar(255) DEFAULT NULL,
  `object_ftp_username` varchar(50) DEFAULT NULL,
  `object_ftp_password` varchar(50) DEFAULT NULL,
  `object_ftp_folder` varchar(50) DEFAULT NULL,
  `object_ftp_remote_username` varchar(50) DEFAULT NULL,
  `object_ftp_remote_password` varchar(50) DEFAULT NULL,
  `object_ext_auth` varchar(100) DEFAULT NULL,
  `object_active` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rent_user_room`
--

CREATE TABLE `rent_user_room` (
  `id` int(11) NOT NULL,
  `user_room_id` int(11) DEFAULT NULL,
  `rent_amount` int(11) DEFAULT NULL,
  `rent_date` date DEFAULT NULL,
  `rent_date1` date DEFAULT NULL,
  `rent_date2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `rent_user_room`
--

INSERT INTO `rent_user_room` (`id`, `user_room_id`, `rent_amount`, `rent_date`, `rent_date1`, `rent_date2`) VALUES
(1, 1, 400, '2017-07-01', NULL, NULL),
(3, 1, 400, '2017-05-01', NULL, NULL),
(4, 1, 400, '2017-07-01', '2017-07-01', '2017-08-01');

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
(3, '18 m2', 350, 350, 1),
(4, '15 m2', 350, 350, 2),
(5, '13 m2', 350, 350, 2),
(6, '25 m2', 400, 400, 3),
(7, '15', 400, 400, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type_charge`
--

CREATE TABLE `type_charge` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_charge`
--

INSERT INTO `type_charge` (`id`, `name`) VALUES
(1, 'Charge Gaz'),
(2, 'Charge électricité'),
(3, 'Charge téléphone');

-- --------------------------------------------------------

--
-- Structure de la table `type_contact`
--

CREATE TABLE `type_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_contact`
--

INSERT INTO `type_contact` (`id`, `name`) VALUES
(1, 'Gardien');

-- --------------------------------------------------------

--
-- Structure de la table `type_document`
--

CREATE TABLE `type_document` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_document`
--

INSERT INTO `type_document` (`id`, `name`) VALUES
(1, 'Bail'),
(2, 'Facture téléphone'),
(3, 'Quittance'),
(4, 'Facture électricité'),
(5, 'Facture');

-- --------------------------------------------------------

--
-- Structure de la table `type_fix`
--

CREATE TABLE `type_fix` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_fix`
--

INSERT INTO `type_fix` (`id`, `name`) VALUES
(1, 'Plomberie'),
(2, 'Electrique');

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
(1, 'Télévision'),
(2, 'Table à manger'),
(4, 'Sofa'),
(5, 'Lit');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `firstname`, `lastname`, `phone`) VALUES
(1, 'kokou', 'kokou', 'kokou@test.com', 'kokou@test.com', 1, '90qnang1ea888cs8okw8ww884w8ko84', '$2y$13$90qnang1ea888cs8okw8wuVef4zj4.6ih1Fff8RuJnI.CviSTbQNi', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:12:\"ROLE_PROPRIO\";}', 0, NULL, 'Kokou', 'Kpotivi', '0654344765'),
(2, 'admin', 'admin', 'admin@admin.com', 'admin@admin.com', 1, 'eecndaq9zs8oo0kswow0ogokkogc0sg', '$2y$13$eecndaq9zs8oo0kswow0oe5FFUWHpsfJqTkTagm2EL.FllaUzjKla', '2017-07-23 05:51:42', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', 0, NULL, 'Administrateur', 'Admin', '00000000000000'),
(3, 'sfallou', 'sfallou', 'sfallou2010@hotmail.fr', 'sfallou2010@hotmail.fr', 1, 'rkjn4fzg9n4co4okwscc0scsswwwws8', '$2y$13$rkjn4fzg9n4co4okwscc0eugv791yauQ.cIXp3fbZ3p5pMMCGtBXy', '2017-07-23 06:14:16', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:14:\"ROLE_LOCATAIRE\";}', 0, NULL, 'Serigne Fallou', 'NDIAYE', '0618765442'),
(4, 'saliou', 'saliou', 'saliou@hotmail.com', 'saliou@hotmail.com', 1, '4qi27gzdjl0kw4s8c0swo0ok04o4o8k', '$2y$13$4qi27gzdjl0kw4s8c0swouHuWHqIXFnSdTsccAWnGRJ.CyJ9Pjfiy', '2017-07-23 06:14:43', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:13:\"ROLE_REFERENT\";}', 0, NULL, 'Saliou', 'Diallo', '0656789655'),
(5, 'samba', 'samba', 'samba@hotmail.fr', 'samba@hotmail.fr', 1, '4mku833xbkaos448wkcgcowk4oc4sw0', '$2y$13$4mku833xbkaos448wkcgce3Q6IlVW/jgZ36Sgt71oNENH7/uUQ/F2', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:14:\"ROLE_LOCATAIRE\";}', 0, NULL, 'Samba', 'Drame', '0765438900');

-- --------------------------------------------------------

--
-- Structure de la table `user_room`
--

CREATE TABLE `user_room` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `user_room_date_in` date DEFAULT NULL,
  `user_room_date_out` date DEFAULT NULL,
  `user_room_rent` int(11) DEFAULT NULL,
  `user_room_guarantee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `user_room`
--

INSERT INTO `user_room` (`id`, `user_id`, `room_id`, `user_room_date_in`, `user_room_date_out`, `user_room_rent`, `user_room_guarantee`) VALUES
(1, 2, 1, '2017-07-01', '2017-07-31', 400, 400),
(2, 1, 2, '2017-07-01', '2017-09-01', 350, 350),
(3, 3, 3, '2017-07-01', '2017-07-01', 350, 350),
(4, 4, 4, '2017-07-01', '2017-09-30', 350, 350),
(5, 5, 5, '2017-07-01', '2017-12-31', 350, 350);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appartement`
--
ALTER TABLE `appartement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `charge_appartement`
--
ALTER TABLE `charge_appartement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `charge_room`
--
ALTER TABLE `charge_room`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_appartement`
--
ALTER TABLE `contact_appartement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_residence`
--
ALTER TABLE `contact_residence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `document_appartement`
--
ALTER TABLE `document_appartement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `document_user_room`
--
ALTER TABLE `document_user_room`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fix_appartement`
--
ALTER TABLE `fix_appartement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fix_room`
--
ALTER TABLE `fix_room`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `meuble`
--
ALTER TABLE `meuble`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `meuble_appartement`
--
ALTER TABLE `meuble_appartement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `meuble_room`
--
ALTER TABLE `meuble_room`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rent_user_room`
--
ALTER TABLE `rent_user_room`
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
-- Index pour la table `type_charge`
--
ALTER TABLE `type_charge`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_contact`
--
ALTER TABLE `type_contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_document`
--
ALTER TABLE `type_document`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_fix`
--
ALTER TABLE `type_fix`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_meuble`
--
ALTER TABLE `type_meuble`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`);

--
-- Index pour la table `user_room`
--
ALTER TABLE `user_room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appartement`
--
ALTER TABLE `appartement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `charge_appartement`
--
ALTER TABLE `charge_appartement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `charge_room`
--
ALTER TABLE `charge_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `contact_appartement`
--
ALTER TABLE `contact_appartement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contact_residence`
--
ALTER TABLE `contact_residence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `document_appartement`
--
ALTER TABLE `document_appartement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `document_user_room`
--
ALTER TABLE `document_user_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `fix_appartement`
--
ALTER TABLE `fix_appartement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `fix_room`
--
ALTER TABLE `fix_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `meuble`
--
ALTER TABLE `meuble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `meuble_appartement`
--
ALTER TABLE `meuble_appartement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `meuble_room`
--
ALTER TABLE `meuble_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `object`
--
ALTER TABLE `object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `rent_user_room`
--
ALTER TABLE `rent_user_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `residence`
--
ALTER TABLE `residence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `type_charge`
--
ALTER TABLE `type_charge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `type_contact`
--
ALTER TABLE `type_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `type_document`
--
ALTER TABLE `type_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `type_fix`
--
ALTER TABLE `type_fix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `type_meuble`
--
ALTER TABLE `type_meuble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `user_room`
--
ALTER TABLE `user_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
