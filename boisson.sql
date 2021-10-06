-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 30 Septembre 2021 à 04:43
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `boisson`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `num_agent` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `mot_pass` varchar(20) DEFAULT NULL,
  `adresse` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`num_agent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `agent`
--


-- --------------------------------------------------------

--
-- Structure de la table `boisson`
--

CREATE TABLE IF NOT EXISTS `boisson` (
  `ref_boisson` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(200) DEFAULT NULL,
  `design` varchar(100) DEFAULT NULL,
  `qte` int(20) DEFAULT NULL,
  `pu` int(20) DEFAULT NULL,
  PRIMARY KEY (`ref_boisson`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `boisson`
--

INSERT INTO `boisson` (`ref_boisson`, `photo`, `design`, `qte`, `pu`) VALUES
(6, 'IMG-20210922-WA0008.jpg', 'Djino', 34, 1550),
(7, 'IMG-20210922-WA0008.jpg', 'SKOL', 23, 2500),
(8, 'IMG-20210922-WA0015.jpg', 'XXL', 46, 2000),
(9, 'IMG-20210922-WA0019.jpg', 'COOL', 24, 1200);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `num_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `mot_pass` varchar(20) DEFAULT NULL,
  `adresse` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`num_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `client`
--


-- --------------------------------------------------------

--
-- Structure de la table `cmd`
--

CREATE TABLE IF NOT EXISTS `cmd` (
  `num_cmd` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(200) DEFAULT NULL,
  `date_cmd` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`num_cmd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `cmd`
--

INSERT INTO `cmd` (`num_cmd`, `contenu`, `date_cmd`) VALUES
(1, 'simba', '17'),
(2, 'skol', '17'),
(3, 'simba', '29'),
(4, 'TEMBO', '29-09-2021'),
(5, 'SKOL', '30-09-2021'),
(6, 'COOL', '30-09-2021');

-- --------------------------------------------------------

--
-- Structure de la table `menu_boisson`
--

CREATE TABLE IF NOT EXISTS `menu_boisson` (
  `ref_menu` int(11) NOT NULL AUTO_INCREMENT,
  `date_pub` varchar(20) DEFAULT NULL,
  `contenu` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ref_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `menu_boisson`
--


-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `fonction` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `pwd`, `email`, `adresse`, `fonction`) VALUES
(2, 'cedrick', '1234', 'cedrickkande@gmail.c', 'GOLF', 'agent'),
(4, 'Hans', '1234', 'hansemutombo@gmail.c', 'KENYA', 'client'),
(5, 'francis', '1234', 'franciskumoyo@gmail.', 'Bel Air', 'administrateur');
