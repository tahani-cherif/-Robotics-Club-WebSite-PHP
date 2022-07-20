-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 28 mai 2021 à 23:56
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `testdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin1`
--

CREATE TABLE `admin1` (
  `cin` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `motsdepasse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin1`
--

INSERT INTO `admin1` (`cin`, `email`, `motsdepasse`) VALUES
(14502145, 'cheriftahani92@gmail.com', 'tahani123');

-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

CREATE TABLE `enfant` (
  `nometprenom` varchar(20) NOT NULL,
  `cin` int(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `datedenaissance` date NOT NULL,
  `activitesnumerique` varchar(20) NOT NULL,
  `motsdepasse` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enfant`
--

INSERT INTO `enfant` (`nometprenom`, `cin`, `email`, `datedenaissance`, `activitesnumerique`, `motsdepasse`) VALUES
('tahani cherif', 14502145, 'cheriftahani92@gmail.com', '2000-08-31', 'programmation', 'tahani'),
('islem cherif', 14770875, 'cheriislem044@gmail.com', '2001-09-03', '......', 'islem');

-- --------------------------------------------------------

--
-- Structure de la table `mesage`
--

CREATE TABLE `mesage` (
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mesage`
--

INSERT INTO `mesage` (`nom`, `prenom`, `email`, `msg`) VALUES
('CHERIF', 'TAHANI', 'amenicherif676@gmail', 'xddfcgvbhjn'),
('BEN OTHMEN', 'CHAIMA', 'Chaymabothmen@gmail.', 'xdfghbj'),
('CHERIF', 'TAHANI', 'cheriftahani92@gmail', 'xddfcgvbhjn'),
('CHERIF', 'TAHANI', 'khouloud123choiy@gma', 'xddfcgvbhjn');

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE `parent` (
  `nometprenom` varchar(20) NOT NULL,
  `cin` int(4) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` int(4) NOT NULL,
  `nomenfant` varchar(20) NOT NULL,
  `motsdepasse` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parent`
--

INSERT INTO `parent` (`nometprenom`, `cin`, `email`, `telephone`, `nomenfant`, `motsdepasse`) VALUES
('aicha ', 1478987, 'aichazz@gmail.com', 17888744, 'islem', '$2y$10$14H'),
('ameni cherif', 14502145, 'ameni@gmail.com', 27711622, 'tahani cherif', '$2y$10$dId');

-- --------------------------------------------------------

--
-- Structure de la table `seq1`
--

CREATE TABLE `seq1` (
  `next_not_cached_value` bigint(21) NOT NULL,
  `minimum_value` bigint(21) NOT NULL,
  `maximum_value` bigint(21) NOT NULL,
  `start_value` bigint(21) NOT NULL COMMENT 'start value when sequences is created or value if RESTART is used',
  `increment` bigint(21) NOT NULL COMMENT 'increment value',
  `cache_size` bigint(21) UNSIGNED NOT NULL,
  `cycle_option` tinyint(1) UNSIGNED NOT NULL COMMENT '0 if no cycles are allowed, 1 if the sequence should begin a new cycle when maximum_value is passed',
  `cycle_count` bigint(21) NOT NULL COMMENT 'How many cycles have been done'
) ENGINE=InnoDB;

--
-- Déchargement des données de la table `seq1`
--

INSERT INTO `seq1` (`next_not_cached_value`, `minimum_value`, `maximum_value`, `start_value`, `increment`, `cache_size`, `cycle_option`, `cycle_count`) VALUES
(1, 1, 9223372036854775806, 1, 1, 1000, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `mesage`
--
ALTER TABLE `mesage`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`cin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
