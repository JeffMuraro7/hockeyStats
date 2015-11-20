-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 20 Novembre 2015 à 08:37
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hockeystats`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `prenomUser` varchar(100) NOT NULL,
  `nomUser` varchar(100) NOT NULL,
  `emailUser` varchar(250) NOT NULL,
  `birthdayUser` date NOT NULL,
  `equipeUser` varchar(100) NOT NULL,
  `posteUser` varchar(100) NOT NULL,
  `pseudoUser` varchar(100) NOT NULL,
  `mdpUser` varchar(250) NOT NULL,
  `statutUser` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idUser`, `prenomUser`, `nomUser`, `emailUser`, `birthdayUser`, `equipeUser`, `posteUser`, `pseudoUser`, `mdpUser`, `statutUser`) VALUES
(1, 'jeff', 'muraro', 'jeff.muraro@gmail.com', '1996-02-01', 'cpmeyrin', 'attaquant', 'Jeff', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 127);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
