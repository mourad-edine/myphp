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
-- Base de données : `banque`
--

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int NOT NULL,
  `transaction` varchar(100) NOT NULL,
  `id_soldes` int NOT NULL,
  `montant` double NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id`, `transaction`, `id_soldes`, `montant`, `created_at`) VALUES
(1, 'depot', 3, 100, '2023-08-28 09:08:11'),
(2, 'depot', 1, 2500, '2023-08-28 09:12:56'),
(3, 'retrait', 1, 200, '2023-08-28 09:25:25'),
(4, 'retrait', 2, 100, '2023-08-28 09:27:38'),
(5, 'retrait', 3, 500, '2023-08-28 09:30:48'),
(9, 'transfert', 1, 200, '2023-08-28 10:18:40'),
(10, 'depot', 2, 200, '2023-08-28 10:18:40'),
(11, 'transfert', 2, 500, '2023-08-28 10:22:07'),
(12, 'depot', 3, 500, '2023-08-28 10:22:07'),
(13, 'transfert', 3, 100, '2023-08-28 10:23:30'),
(14, 'depot', 1, 100, '2023-08-28 10:23:30'),
(15, 'depot', 1, 300, '2023-08-28 10:25:32'),
(16, 'retrait', 1, 2000, '2023-08-28 15:15:36'),
(17, 'depot', 1, 10000, '2023-08-28 15:19:55'),
(18, 'retrait', 1, 100, '2023-08-28 18:35:35'),
(19, 'retrait', 3, 200, '2023-08-28 18:46:55'),
(20, 'retrait', 3, 300, '2023-08-28 18:49:22'),
(21, 'retrait', 3, 100, '2023-08-28 18:51:27'),
(22, 'transfert', 1, 500, '2023-08-28 19:08:34'),
(23, 'depot', 2, 500, '2023-08-28 19:08:34'),
(24, 'retrait', 2, 2500, '2023-08-29 06:57:56');

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

CREATE TABLE `historiques` (
  `id` int NOT NULL,
  `frais` double NOT NULL,
  `transaction` varchar(150) NOT NULL,
  `id_ressources` int NOT NULL,
  `creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ressources`
--

CREATE TABLE `ressources` (
  `id` int NOT NULL,
  `nom_ressource` varchar(150) NOT NULL,
  `valeur` double NOT NULL,
  `creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `ressources`
--

INSERT INTO `ressources` (`id`, `nom_ressource`, `valeur`, `creation`) VALUES
(1, 'fond', 10000000000, '2023-08-29 10:48:56'),
(2, 'total frais', 15054, '2023-08-29 10:48:56'),
(3, 'voiture', 20000000, '2023-08-29 10:49:21');

-- --------------------------------------------------------

--
-- Structure de la table `soldes`
--

CREATE TABLE `soldes` (
  `id` int NOT NULL,
  `solde` double NOT NULL,
  `id_utilisateur` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `soldes`
--

INSERT INTO `soldes` (`id`, `solde`, `id_utilisateur`, `created_at`) VALUES
(1, 24780, 1, '2023-08-27 18:58:26'),
(2, 9400, 2, '2023-08-27 18:58:26'),
(3, 2200, 3, '2023-08-27 19:49:02');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int NOT NULL,
  `cin` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `cin`, `nom`, `prenom`, `adresse`, `profession`, `genre`, `status`, `creation`) VALUES
(1, 24245324, 'patrick', 'franck', 'mangarano', 'agent de sécurité', 'homme', 'client', '2023-08-02 07:59:40'),
(2, 354241412, 'jimmy', 'hendrix', 'paris', 'guitariste', 'femme', 'client', '2023-08-08 07:59:40'),
(3, 3132132, 'Ezekiela', 'valeee', 'Depot', 'mpianatra', 'homme', 'client', '2023-08-12 07:59:40');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_soldes` (`id_soldes`);

--
-- Index pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ressources` (`id_ressources`);

--
-- Index pour la table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `soldes`
--
ALTER TABLE `soldes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `soldes`
--
ALTER TABLE `soldes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `historique`
--
ALTER TABLE `historique`
  ADD CONSTRAINT `historique_ibfk_1` FOREIGN KEY (`id_soldes`) REFERENCES `soldes` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD CONSTRAINT `historiques_ibfk_1` FOREIGN KEY (`id_ressources`) REFERENCES `ressources` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `soldes`
--
ALTER TABLE `soldes`
  ADD CONSTRAINT `soldes_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
