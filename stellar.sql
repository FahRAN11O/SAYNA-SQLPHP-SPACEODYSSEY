-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 nov. 2023 à 22:41
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
  `mission_id` int(11) NOT NULL,
  `date_naissance` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `astronautes`
--

INSERT INTO `astronautes` (`id`, `nom`, `prenom`, `nationalite`, `annee_service`, `etat_sante`, `taille`, `poids`, `mission_id`, `date_naissance`) VALUES
(30, 'RAKOTO', 'Mahavita', 'Malagasy', 7, 'Bien', 179, 69, 60, '1977-03-12 00:00:00'),
(31, 'RABE', 'Mazoto', 'Malagasy', 8, 'Bien', 181, 70, 60, '1981-09-12 00:00:00');

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
(60, 'SpaceZ', 'explorer la planete PL001', '2023-11-13 21:00:00', '2024-11-14 00:00:00', 'Début', NULL, 4, 5),
(61, 'SpaceZ', 'explorer la planete PL001', '2023-11-13 21:00:00', '2024-11-14 00:00:00', 'Début', NULL, 4, 5),
(63, 'STELL-Z', 'Explorer la planete PL002', '2022-10-11 21:00:00', '2024-08-25 00:00:00', 'En cours', NULL, 11, 6),
(64, 'STELL-Z', 'Explorer la planete PL002', '2022-10-11 21:00:00', '2024-08-25 00:00:00', 'En cours', NULL, 11, 6);

-- --------------------------------------------------------

--
-- Structure de la table `planetes`
--

CREATE TABLE `planetes` (
  `id` int(11) NOT NULL,
  `nom` varchar(55) DEFAULT NULL,
  `distance_terre` bigint(20) NOT NULL,
  `circonference` double DEFAULT NULL,
  `etat` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `planetes`
--

INSERT INTO `planetes` (`id`, `nom`, `distance_terre`, `circonference`, `etat`) VALUES
(5, 'PL001', 345000, 25000, 'engage'),
(6, 'PL002', 125000, 34000, 'engage');

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
(4, 'FAST-C', 'VS001', 3, 39000, NULL, 'engage'),
(5, 'SPEED', 'VS002', 6, 24000, NULL, 'engage'),
(6, 'HEAVY', 'VS003', 4, 33000, NULL, 'libre'),
(7, 'LIGHT', 'VS004', 5, 27000, NULL, 'libre'),
(8, 'LIGHT-XP', 'VS005', 3, 37000, NULL, 'libre'),
(9, 'DARK-ENGINE', 'VS006', 2, 41000, NULL, 'libre'),
(10, 'ECLAIR', 'VS007', 7, 36000, NULL, 'libre'),
(11, '4GEN', 'VS008', 4, 24000, NULL, 'engage'),
(12, 'LT-SPACE', 'VS009', 5, 30000, NULL, 'libre'),
(13, 'SKYX', 'VS010', 4, 22000, NULL, 'libre'),
(14, 'ECLAIR-2GEN', 'VS011', 4, 38000, NULL, 'libre');

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
-- AUTO_INCREMENT pour la table `astronautes`
--
ALTER TABLE `astronautes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `planetes`
--
ALTER TABLE `planetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `vaisseaux`
--
ALTER TABLE `vaisseaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
