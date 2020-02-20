-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 01 fév. 2020 à 15:36
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_placement`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE `administrateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `password` varchar(170) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `pseudo`, `password`) VALUES
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `id` int(11) NOT NULL,
  `no_appartenir` varchar(100) NOT NULL,
  `id_personnel` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `appartenir`
--

INSERT INTO `appartenir` (`id`, `no_appartenir`, `id_personnel`, `id_categorie`) VALUES
(2, 'KACOU-AMA_Nounou', 4, 2),
(5, 'GUI-PARFAITTRESOR_jardinier', 6, 5);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `libelle` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `libelle`) VALUES
(2, 'Nounou'),
(3, 'CuisiniÃ¨re'),
(4, 'Coiffeuse'),
(5, 'jardinier');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `no_client` varchar(30) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(120) DEFAULT NULL,
  `lieu_habitation` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `no_client`, `nom`, `prenoms`, `contact`, `email`, `lieu_habitation`) VALUES
(1, 'No1579757248', 'Konan', 'Wilfried', '74-55-99-91', 'konanwil@abc.xk', 'abidjan yopougon maroc');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `nbre_annee_exp` int(11) NOT NULL,
  `id_appartenir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `nbre_annee_exp`, `id_appartenir`) VALUES
(4, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id` int(11) NOT NULL,
  `no_identifieur` varchar(100) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(100) NOT NULL,
  `nom_complet` varchar(200) NOT NULL,
  `sexe` varchar(8) NOT NULL,
  `date_naiss` date NOT NULL,
  `contact` varchar(20) NOT NULL,
  `type_piece` varchar(80) NOT NULL,
  `piece_identite` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modif` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id`, `no_identifieur`, `photo`, `nom`, `prenoms`, `nom_complet`, `sexe`, `date_naiss`, `contact`, `type_piece`, `piece_identite`, `description`, `date_ajout`, `date_modif`) VALUES
(4, 'No_PE1579651903', NULL, 'kacou', 'ama', 'kacou ama', 'Feminin', '1995-02-15', '87-85-63-12', 'CNI', 'C0111225548', 'eszedzÃ©\"', '2020-01-22 00:11:43', '2020-01-22 00:11:43'),
(6, 'No_PE1580553993', NULL, 'Gui', 'parfait tresor', 'Gui parfait tresor', 'Masculin', '1996-07-13', '78-95-19-15', 'Passeport', '183141446AT', '', '2020-02-01 11:46:33', '2020-02-01 11:46:33'),
(7, 'No_PE1580554885', NULL, 'brou', 'yapi', 'brou yapi', 'Masculin', '1996-01-12', '43-45-45-13', 'CNI', 'C1234567809', '', '2020-02-01 12:01:25', '2020-02-01 12:01:25'),
(8, 'No_PE1580555030', NULL, 'Atse', 'parfait', 'Atse parfait', 'Masculin', '1994-01-26', '65-43-87-09', 'CNI', 'C5423678934', '', '2020-02-01 12:03:50', '2020-02-01 12:03:50'),
(9, 'No_PE1580555158', NULL, 'Adou', 'marthe', 'Adou marthe', 'Feminin', '1992-02-23', '43-45-56-12', 'CNI', 'C3456234589', '', '2020-02-01 12:05:58', '2020-02-01 12:05:58');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `no_reservation` varchar(25) NOT NULL,
  `duree` varchar(20) NOT NULL,
  `tranche` varchar(20) NOT NULL,
  `cout_reservation` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_appartenir` int(11) NOT NULL,
  `date_reservation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat` varchar(15) NOT NULL DEFAULT 'attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_personnel` (`id_personnel`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `no_client` (`no_client`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_appartenir` (`id_appartenir`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_appartenir` (`id_appartenir`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `appartenir`
--
ALTER TABLE `appartenir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `appartenir_ibfk_1` FOREIGN KEY (`id_personnel`) REFERENCES `personnels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appartenir_ibfk_2` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_ibfk_1` FOREIGN KEY (`id_appartenir`) REFERENCES `appartenir` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`id_appartenir`) REFERENCES `appartenir` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
