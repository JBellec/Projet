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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
