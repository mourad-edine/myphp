-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 09 sep. 2023 à 10:48
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
-- Base de données : `attente`
--

-- --------------------------------------------------------

--
-- Structure de la table `affichage`
--

CREATE TABLE `affichage` (
  `id` int NOT NULL,
  `nom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `affichage`
--

INSERT INTO `affichage` (`id`, `nom`) VALUES
(1, 'bienvenue dans notre agence'),
(2, 'salut le monde'),
(3, 'voici le nouveau texte d affichage'),
(4, 'voici le premier pour afficher quelque chose à l écran'),
(5, 'nouveau'),
(6, 'Bienvenue dans notre agence'),
(7, 'Bienvenue dans notre Agence Bien aimé');

-- --------------------------------------------------------

--
-- Structure de la table `assigner`
--

CREATE TABLE `assigner` (
  `id` int NOT NULL,
  `id_guichet` int NOT NULL,
  `ticket` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `assigner`
--

INSERT INTO `assigner` (`id`, `id_guichet`, `ticket`, `created_at`) VALUES
(28, 1, 'V1', '2023-09-04 16:26:06'),
(29, 1, 'T1', '2023-09-04 19:37:10');

-- --------------------------------------------------------

--
-- Structure de la table `guichet`
--

CREATE TABLE `guichet` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `passe` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `guichet`
--

INSERT INTO `guichet` (`id`, `nom`, `passe`, `created_at`) VALUES
(1, 'guichet1', 'guichet1', '2023-09-03 13:49:35'),
(2, 'guichet2', 'guichet2', '2023-09-03 13:49:35');

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id` int NOT NULL,
  `id_transaction` int NOT NULL,
  `numero` varchar(50) NOT NULL,
  `numero_T` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id`, `id_transaction`, `numero`, `numero_T`, `created_at`) VALUES
(69, 2, '1', 'R1', '2023-09-04 09:47:05'),
(70, 1, '1', 'V1', '2023-09-04 19:35:54'),
(71, 2, '2', 'R2', '2023-09-04 19:36:05'),
(72, 2, '3', 'R3', '2023-09-09 12:37:17');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `nom_transaction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`id`, `nom_transaction`) VALUES
(1, 'versement'),
(2, 'retrait'),
(3, 'transfert'),
(4, 'depot');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affichage`
--
ALTER TABLE `affichage`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `assigner`
--
ALTER TABLE `assigner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guichet` (`id_guichet`);

--
-- Index pour la table `guichet`
--
ALTER TABLE `guichet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaction` (`id_transaction`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affichage`
--
ALTER TABLE `affichage`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `assigner`
--
ALTER TABLE `assigner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `guichet`
--
ALTER TABLE `guichet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `assigner`
--
ALTER TABLE `assigner`
  ADD CONSTRAINT `assigner_ibfk_1` FOREIGN KEY (`id_guichet`) REFERENCES `guichet` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_transaction`) REFERENCES `transaction` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
