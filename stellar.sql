-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 nov. 2023 à 14:44
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `stellar`
--

-- --------------------------------------------------------

--
-- Structure de la table `astronautes`
--

CREATE TABLE `astronautes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `nationalite` varchar(255) DEFAULT NULL,
  `annee_service` int(11) DEFAULT NULL,
  `etat_sante` varchar(255) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `poids` double DEFAULT NULL,
  `mission_id` int(11) DEFAULT NULL,
  `date_naissance` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `astronautes`
--

INSERT INTO `astronautes` (`id`, `nom`, `prenom`, `nationalite`, `annee_service`, `etat_sante`, `taille`, `poids`, `mission_id`, `date_naissance`) VALUES
(0, 'Peter', 'Check', 'Anglais', 9, 'Bien', 185, 73, 19, '1983-09-14 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `missions`
--

CREATE TABLE `missions` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `objectif` text DEFAULT NULL,
  `date_debut` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_fin` datetime DEFAULT NULL,
  `status_mission` varchar(55) DEFAULT NULL,
  `cout` double DEFAULT NULL,
  `vaisseau_id` int(11) DEFAULT NULL,
  `planete_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `missions`
--

INSERT INTO `missions` (`id`, `nom`, `objectif`, `date_debut`, `date_fin`, `status_mission`, `cout`, `vaisseau_id`, `planete_id`) VALUES
(1, 'SpaceZ', 'explorer le planete K56', '2023-11-10 21:00:00', '2024-12-20 00:00:00', 'debut', NULL, 2, NULL),
(2, 'SpaceY', 'explorer le planete TN64', '2022-07-08 21:00:00', '2024-01-18 00:00:00', 'encours', NULL, 1, NULL),
(3, 'ExploR', 'explorer la planete 56K43', '2010-11-07 21:00:00', '2012-10-16 00:00:00', 'abandonne', NULL, 1, NULL),
(4, 'FLYW', 'explorer la planet KP2787J', '2021-06-08 21:00:00', '2022-09-13 00:00:00', 'fini', NULL, 3, NULL),
(5, 'FLYW', 'explorer la planet KP2787J', '2021-06-08 21:00:00', '2022-09-13 00:00:00', 'fini', NULL, 3, NULL),
(14, 'Heavy', 'explorer la planete V67K43', '2023-11-21 21:00:00', '2024-12-11 00:00:00', 'Début', NULL, 2, NULL),
(15, 'LIGHT', 'explorer la planete V67K43', '2023-11-21 21:00:00', '2024-12-11 00:00:00', 'Début', NULL, 3, NULL),
(19, 'INTERNWZ', 'explorer la planete 67HJ32', '2023-11-10 21:00:00', '2024-11-11 00:00:00', 'Début', NULL, 1, NULL),
(20, 'INTERNWZ', 'explorer la planete 67HJ32', '2023-11-10 21:00:00', '2024-11-11 00:00:00', 'Début', NULL, 1, NULL),
(21, 'INTERNWZ', 'explorer la planete 67HJ32', '2023-11-10 21:00:00', '2024-11-11 00:00:00', 'Début', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `planetes`
--

CREATE TABLE `planetes` (
  `id` int(11) NOT NULL,
  `nom` varchar(55) DEFAULT NULL,
  `distance_terre` bigint(20) NOT NULL,
  `circonference` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vaisseaux`
--

CREATE TABLE `vaisseaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(55) DEFAULT NULL,
  `reference` varchar(55) DEFAULT NULL,
  `capacite` int(11) DEFAULT NULL,
  `vitesse` int(11) DEFAULT NULL,
  `autonomie` int(11) DEFAULT NULL,
  `etat` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vaisseaux`
--

INSERT INTO `vaisseaux` (`id`, `nom`, `reference`, `capacite`, `vitesse`, `autonomie`, `etat`) VALUES
(1, 'V-FAST', 'VS44', 5, NULL, NULL, NULL),
(2, 'SPEED', 'VS77', 6, NULL, NULL, NULL),
(3, 'LIGHT', 'VS62', 3, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `astronautes`
--
ALTER TABLE `astronautes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mission_id` (`mission_id`);

--
-- Index pour la table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `planete_id` (`planete_id`),
  ADD KEY `vaisseau_id` (`vaisseau_id`);

--
-- Index pour la table `planetes`
--
ALTER TABLE `planetes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `planetes`
--
ALTER TABLE `planetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `astronautes`
--
ALTER TABLE `astronautes`
  ADD CONSTRAINT `astronautes_ibfk_1` FOREIGN KEY (`mission_id`) REFERENCES `missions` (`id`);

--
-- Contraintes pour la table `missions`
--
ALTER TABLE `missions`
  ADD CONSTRAINT `missions_ibfk_1` FOREIGN KEY (`planete_id`) REFERENCES `planetes` (`id`),
  ADD CONSTRAINT `missions_ibfk_2` FOREIGN KEY (`vaisseau_id`) REFERENCES `vaisseaux` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
