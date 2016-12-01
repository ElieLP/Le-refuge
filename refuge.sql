-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 01 Décembre 2016 à 22:01
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `refuge`
--

-- --------------------------------------------------------

--
-- Structure de la table `ligne`
--

CREATE TABLE IF NOT EXISTS `ligne` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `coordonnee` multipoint NOT NULL,
  `prix` int(4) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `sous_categorie` varchar(30) NOT NULL,
  `id_user` int(200) NOT NULL COMMENT 'clé secondaire',
  `vote` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `point` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `ligne`
--
ALTER TABLE `ligne`
  ADD CONSTRAINT `ligne_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
