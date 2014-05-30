-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 30 Mai 2014 à 16:32
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `pseudo` varchar(255) NOT NULL,
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tables des utilisateur qui sont aussi administrateur';

-- --------------------------------------------------------

--
-- Structure de la table `borrowed`
--

CREATE TABLE IF NOT EXISTS `borrowed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `object_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table qui fait la correspondance entre les objets emrpunté et l''utilisateur' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `object`
--

CREATE TABLE IF NOT EXISTS `object` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` mediumtext,
  `type` varchar(128) NOT NULL,
  `borrowed` tinyint(1) NOT NULL,
  `lenght` int(11) DEFAULT NULL,
  `number_port` int(11) NOT NULL,
  `cpu` varchar(512) NOT NULL,
  `frequence` float NOT NULL,
  `ram` int(11) NOT NULL,
  `hard_drive` int(11) NOT NULL,
  `gpu` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table qui stock les information sur les objets du Xid' AUTO_INCREMENT=2 ;

--
-- Contenu de la table `object`
--

INSERT INTO `object` (`id`, `name`, `description`, `type`, `borrowed`, `lenght`, `number_port`, `cpu`, `frequence`, `ram`, `hard_drive`, `gpu`) VALUES
(1, 'Kirby', 'L''ordinateur Kirby', 'PC', 0, NULL, 0, '4 Core AMD', 3.4, 4, 500, 'Radeon R9 260');

-- --------------------------------------------------------

--
-- Structure de la table `preset`
--

CREATE TABLE IF NOT EXISTS `preset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` mediumtext NOT NULL,
  `lenght` tinyint(1) NOT NULL,
  `number_port` tinyint(1) NOT NULL,
  `cpu` tinyint(1) NOT NULL,
  `frequence` tinyint(1) NOT NULL,
  `ram` tinyint(1) NOT NULL,
  `hard_drive` tinyint(1) NOT NULL,
  `gpu` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table qui stock les preset pour chaque type d''objects' AUTO_INCREMENT=2 ;

--
-- Contenu de la table `preset`
--

INSERT INTO `preset` (`id`, `name`, `description`, `lenght`, `number_port`, `cpu`, `frequence`, `ram`, `hard_drive`, `gpu`) VALUES
(1, 'PC', 'Les ordinateurs du Xid', 0, 0, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `admin` int(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `pseudo`, `email`, `password`, `admin`) VALUES
(12, 'Bellec', 'Julien', 'Tumai', 'julien.bellec@hotmail.fr', 'soncssimmam', 0),
(13, 'Alberola', 'Gaël', 'zoski', 'zoski@free.fr', '64faf5d0b1dc311fd0f94af64f6c296a03045571', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
