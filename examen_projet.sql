-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 août 2022 à 09:11
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `examen_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `authentification`
--

CREATE TABLE `authentification` (
  `id` int(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `cin` bigint(20) NOT NULL,
  `telephone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `password_retype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `authentification`
--

INSERT INTO `authentification` (`id`, `nom`, `prenom`, `cin`, `telephone`, `email`, `password`, `password_retype`) VALUES
(1, 'USER', 'user', 111222333444, '0343403434', 'user.user@esti.mg', '1234', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(4) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `fonction` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telephone` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `messages_reçus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `prenom`, `fonction`, `email`, `telephone`, `photo`, `messages_reçus`) VALUES
(5, 'RANDRIAMANDIMBISOA', 'Mathieu', 'Directeur général', 'nomenjanahary.randriamandimbisoa@esti.mg', '0346461483', 'Mathieu.jpg', ''),
(6, 'TAHIANAHARISON', 'Johanna', 'Responsable communication', 'johanna.tahianaharison@esti.mg', '0343403465', 'Johanna.jpg', ''),
(7, 'RASOLONJATOVO', 'Maherifinoana', 'Responsable Ressources Humaines', 'maherifinoana.rasolonjatovo@esti.mg', '0333303232', 'Finoana.jpg', ''),
(8, 'RAHARIFITIAVANA', 'Juliana', 'Responsable admission', 'juliana.raharifitiavana@esti.mg', '0323202456', 'juli.jpg', ''),
(9, 'RANDRIANASOLO', 'Kevin', 'Directeur des Etudes', 'kevin.randrianasolo@esti.mg', '0323258965', 'kev.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(4) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `age` int(2) NOT NULL,
  `cin` bigint(20) NOT NULL,
  `niveau` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `password_retype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `nom`, `prenom`, `age`, `cin`, `niveau`, `email`, `password`, `password_retype`) VALUES
(1, 'RANDRIAMANDIMBISOA', 'Mathieu', 18, 101789789789, 'L1 G2', 'mathieugilrandria@gmail.com', '123454321', '123454321'),
(3, 'TAHIANAHARISON', 'Johanna', 19, 101123456789, 'L1 G2', 'johanna.misaela@gmail.com', '', ''),
(5, 'RASOLONJATOVO', 'Maherifinoana', 18, 156145145123, 'L1 G2', 'maherifinoana.rasolonjatovo@esti.mg', '', ''),
(7, 'RANDRIANASOLO', 'Kevin ', 20, 101444111777, 'L1 G2', 'kevin.randrianasolo@esti.mg', '1596', '1596'),
(8, 'USER', 'user', 20, 101123456987, 'Doctorat', 'user.user@esti.mg', '1234', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id` int(4) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `code` int(20) NOT NULL,
  `credit` int(20) NOT NULL,
  `heure` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `nom`, `code`, `credit`, `heure`) VALUES
(11, 'Langage C', 140, 4, '16'),
(12, 'Calcul Numerique', 220, 5, '24'),
(13, 'Analyse et algebre II', 210, 4, '24'),
(14, 'Programmation Php', 253, 3, '30');

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

CREATE TABLE `profs` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `cin` bigint(20) NOT NULL,
  `matiere` varchar(200) NOT NULL,
  `niveau` varchar(200) NOT NULL,
  `telephone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `password_retype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`id`, `nom`, `prenom`, `cin`, `matiere`, `niveau`, `telephone`, `email`, `password`, `password_retype`) VALUES
(9, 'RANDRIAMANDIMBISOA', 'Mathieu', 111111111111, 'Recherche Operationnelle', 'Licence', '0323203232', 'nomenjanahary.randriamandimbisoa@esti.mg', '', ''),
(10, 'TAHIANAHARISON', 'Johanna', 222222222222, 'Calcul Numerique', 'Master', '0343503535', 'johanna.tahianaharison@esti.mg', '', ''),
(11, 'RANDRIANASOLO', 'Kevin', 101444444444, 'Python', 'Licence', '0333303333', 'kevin.randrianasolo@esti.mg', '', ''),
(12, 'USER', 'user', 101123456789, 'Communication et leadership', 'License', '03232456789', 'user.user@esti.mg', '1234', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `authentification`
--
ALTER TABLE `authentification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `authentification`
--
ALTER TABLE `authentification`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `profs`
--
ALTER TABLE `profs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
