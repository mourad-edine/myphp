-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 09 sep. 2023 à 10:47
-- Version du serveur : 8.0.33
-- Version de PHP : 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `medoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `consultant`
--

CREATE TABLE `consultant` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `numero` varchar(100) NOT NULL,
  `CIN` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `id_utilisateur` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `consultant`
--

INSERT INTO `consultant` (`id`, `nom`, `prenom`, `numero`, `CIN`, `adresse`, `id_utilisateur`, `created_at`) VALUES
(1, 'Ravier', 'marcus', '02131531351', '45435121221', 'diego suarez', 1, '2023-08-06 19:33:40'),
(2, 'fabrice', 'Eboue', '631301564', '455123131231', 'mamrseille', 1, '2023-08-06 19:34:38'),
(3, 'vidal', 'cardio villacio', '051124521201', '15112412215341', 'pays bas', 1, '2023-08-06 19:35:12');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int NOT NULL,
  `designation` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `nombre` int NOT NULL,
  `total` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `para`
--

CREATE TABLE `para` (
  `id` int NOT NULL,
  `nom_medoc` varchar(255) NOT NULL,
  `nombre` int NOT NULL,
  `prix_unit` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `para`
--

INSERT INTO `para` (`id`, `nom_medoc`, `nombre`, `prix_unit`, `created_at`, `description`) VALUES
(1, 'paracetamol 500mg', 391, 1500, '2023-08-03 19:23:23', 'Le paracétamol ou acétaminophène est une'),
(2, 'amoxicilline', 950, 5000, '2023-08-03 19:23:23', 'L\'amoxicilline est un antibiotique. Il peut'),
(3, 'vitamine C', 376, 1500, '2023-08-03 20:35:21', 'vitamine C pour tout le monde'),
(4, 'Dolyprane', 684, 5400, '2023-08-03 20:40:42', 'anti douleur'),
(5, 'CAC 1000 sans Dose', 792, 10000, '2023-08-03 20:40:42', 'anti douleur'),
(6, 'éheralgan', 7486, 7000, '2023-08-03 20:49:16', 'type Dl /458'),
(8, 'Abacavir ZIAGEN', 42, 10200, '2023-09-07 21:33:33', 'je sais pas'),
(9, 'Amlodipine', 42, 850, '2023-09-07 21:33:33', 'je sais pas'),
(10, 'Benztropine', 46, 600, '2023-09-07 21:34:40', 'je sais pas'),
(11, 'Eslicarbazépine', 76, 6100, '2023-09-07 21:34:40', 'je sais pas');

-- --------------------------------------------------------

--
-- Structure de la table `reserve_salle`
--

CREATE TABLE `reserve_salle` (
  `id` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `id_salle` int NOT NULL,
  `reservation` tinyint(1) NOT NULL DEFAULT '1',
  `payement` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `reserve_salle`
--

INSERT INTO `reserve_salle` (`id`, `id_utilisateur`, `id_salle`, `reservation`, `payement`, `created_at`) VALUES
(14, 4, 8, 1, 0, '2023-08-06 15:23:11'),
(15, 5, 4, 1, 0, '2023-08-06 15:23:58'),
(17, 6, 7, 1, 0, '2023-08-06 15:26:14'),
(19, 7, 13, 1, 0, '2023-08-06 15:27:16');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

CREATE TABLE `salle` (
  `id` int NOT NULL,
  `salle` int NOT NULL,
  `etage` int NOT NULL,
  `type` varchar(100) NOT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `salle`, `etage`, `type`, `etat`) VALUES
(1, 1, 2, 'famille', 0),
(2, 2, 2, 'presidentielle', 0),
(3, 3, 2, 'patient', 0),
(4, 4, 2, 'operation', 1),
(5, 5, 2, 'accouchement', 0),
(6, 1, 1, 'patient', 0),
(7, 2, 1, 'patient', 1),
(8, 3, 1, 'patient', 1),
(9, 4, 1, 'opération', 0),
(10, 5, 1, 'laboratoire', 0),
(11, 1, 3, 'salle docteur', 0),
(12, 2, 3, 'salle medecin', 0),
(13, 3, 3, 'salle medecin', 1),
(14, 4, 3, 'salle medecin', 0),
(15, 5, 3, 'salle medecin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `CIN` varchar(100) NOT NULL,
  `mot` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `CIN`, `mot`, `adresse`, `status`, `created_at`) VALUES
(1, 'chams', 'maulice mourad', '25852451121215', '1234', 'mangarano', 'docteur', '2023-08-04 09:10:35'),
(2, 'patrice', 'Don Dieu', '8464653413512', '1234', 'paris', 'pharmacien', '2023-08-04 09:10:35'),
(3, 'marco', 'pierre', '4654653435151', '1234', 'mangarano', 'reception', '2023-08-04 11:36:02'),
(4, 'jean', 'francis', '546543543512', '2454212', 'paris', 'patient', '2023-08-05 15:14:27'),
(5, 'jean paul', 'pierre', '465431244534', '24564321', 'france', 'patient', '2023-08-05 15:15:07'),
(6, 'Maria belle', 'rasoa', '464534653432', '2458635', 'tànà', 'patient', '2023-08-05 18:24:50'),
(7, 'kimany Marley', 'johnson', '46534346352122', '3563', 'tulear 501', 'patient', '2023-08-05 18:24:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `para`
--
ALTER TABLE `para`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reserve_salle`
--
ALTER TABLE `reserve_salle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_utilisateur` (`id_utilisateur`),
  ADD UNIQUE KEY `id_salle` (`id_salle`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `para`
--
ALTER TABLE `para`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `reserve_salle`
--
ALTER TABLE `reserve_salle`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `consultant`
--
ALTER TABLE `consultant`
  ADD CONSTRAINT `consultant_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `reserve_salle`
--
ALTER TABLE `reserve_salle`
  ADD CONSTRAINT `reserve_salle_ibfk_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `reserve_salle_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
