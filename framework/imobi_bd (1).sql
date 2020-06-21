-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 21 Juin 2020 à 05:36
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `imobi_bd`
--
CREATE DATABASE IF NOT EXISTS `imobi_bd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `imobi_bd`;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id_ag` int(11) NOT NULL,
  `nom_a` varchar(100) NOT NULL,
  `prenom_a` varchar(100) NOT NULL,
  `adr_a` varchar(100) NOT NULL,
  `contact_a` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_cl` int(11) NOT NULL,
  `nom_cl` varchar(100) NOT NULL,
  `prenom_cl` varchar(200) NOT NULL,
  `add_cl` varchar(30) NOT NULL,
  `contact_cl` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `loyer`
--

CREATE TABLE `loyer` (
  `id_loyer` int(11) NOT NULL,
  `libelle` int(30) NOT NULL,
  `date_pay` int(20) NOT NULL,
  `maiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

CREATE TABLE `maison` (
  `id_mai` int(11) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `quartier` int(11) NOT NULL,
  `prix` varchar(50) NOT NULL,
  `tym` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `maison`
--

INSERT INTO `maison` (`id_mai`, `descrip`, `quartier`, `prix`, `tym`) VALUES
(2, 'Douche cusine ', 1, '30000', 1);

-- --------------------------------------------------------

--
-- Structure de la table `occupation`
--

CREATE TABLE `occupation` (
  `id_occ` int(11) NOT NULL,
  `etat` varchar(30) NOT NULL,
  `date_loc` varchar(40) NOT NULL,
  `mais` int(11) NOT NULL,
  `agt` int(11) NOT NULL,
  `clt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `quartier`
--

CREATE TABLE `quartier` (
  `id_quart` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `quartier`
--

INSERT INTO `quartier` (`id_quart`, `libelle`) VALUES
(1, 'beaufort'),
(2, 'commerce'),
(3, 'broukro');

-- --------------------------------------------------------

--
-- Structure de la table `type_maison`
--

CREATE TABLE `type_maison` (
  `id_typ` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_maison`
--

INSERT INTO `type_maison` (`id_typ`, `libelle`) VALUES
(1, 'deux chambres salon'),
(2, 'studio'),
(3, 'trois chambres salon');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `mdp`, `email`) VALUES
(1, 'lati', 'lati', 'lati@gmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id_ag`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_cl`);

--
-- Index pour la table `loyer`
--
ALTER TABLE `loyer`
  ADD PRIMARY KEY (`id_loyer`),
  ADD KEY `maiso` (`maiso`);

--
-- Index pour la table `maison`
--
ALTER TABLE `maison`
  ADD PRIMARY KEY (`id_mai`),
  ADD KEY `tym` (`tym`),
  ADD KEY `quartier` (`quartier`);

--
-- Index pour la table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`id_occ`),
  ADD KEY `mais` (`mais`),
  ADD KEY `agt` (`agt`),
  ADD KEY `clt` (`clt`);

--
-- Index pour la table `quartier`
--
ALTER TABLE `quartier`
  ADD PRIMARY KEY (`id_quart`);

--
-- Index pour la table `type_maison`
--
ALTER TABLE `type_maison`
  ADD PRIMARY KEY (`id_typ`),
  ADD KEY `id_typ` (`id_typ`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id_ag` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_cl` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `loyer`
--
ALTER TABLE `loyer`
  MODIFY `id_loyer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `maison`
--
ALTER TABLE `maison`
  MODIFY `id_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `id_occ` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `quartier`
--
ALTER TABLE `quartier`
  MODIFY `id_quart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `type_maison`
--
ALTER TABLE `type_maison`
  MODIFY `id_typ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `loyer`
--
ALTER TABLE `loyer`
  ADD CONSTRAINT `JK` FOREIGN KEY (`maiso`) REFERENCES `maison` (`id_mai`);

--
-- Contraintes pour la table `maison`
--
ALTER TABLE `maison`
  ADD CONSTRAINT `ds` FOREIGN KEY (`quartier`) REFERENCES `quartier` (`id_quart`),
  ADD CONSTRAINT `mp` FOREIGN KEY (`tym`) REFERENCES `type_maison` (`id_typ`);

--
-- Contraintes pour la table `occupation`
--
ALTER TABLE `occupation`
  ADD CONSTRAINT `lk` FOREIGN KEY (`agt`) REFERENCES `agent` (`id_ag`),
  ADD CONSTRAINT `pl` FOREIGN KEY (`clt`) REFERENCES `client` (`id_cl`),
  ADD CONSTRAINT `ty` FOREIGN KEY (`mais`) REFERENCES `maison` (`id_mai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
