-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 10 Juin 2014 à 15:44
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
-- Structure de la table `borrowed`
--

CREATE TABLE IF NOT EXISTS `borrowed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `object_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table qui fait la correspondance entre les objets emrpunté et l''utilisateur' AUTO_INCREMENT=16 ;

--
-- Contenu de la table `borrowed`
--

INSERT INTO `borrowed` (`id`, `pseudo`, `object_id`) VALUES
(14, 'zoski', 8),
(15, 'zoski', 7);

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
  `ram` float NOT NULL,
  `hard_drive` int(11) NOT NULL,
  `gpu` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table qui stock les information sur les objets du Xid' AUTO_INCREMENT=14 ;

--
-- Contenu de la table `object`
--

INSERT INTO `object` (`id`, `name`, `description`, `type`, `borrowed`, `lenght`, `number_port`, `cpu`, `frequence`, `ram`, `hard_drive`, `gpu`) VALUES
(1, 'Kirby', 'L''ordinateur Kirby', 'PC', 0, NULL, 0, '4 Core AMD', 3.4, 4, 500, 'Radeon R9 260'),
(2, 'Samus', 'L''ordinateur Samus', 'PC', 0, NULL, 0, '4 Core AMD', 3.4, 4, 500, 'Radeon R9 260'),
(3, 'Lorien', 'Raspberry Pi', 'PC', 0, NULL, 0, 'AMR 7', 0.8, 0.5, 16, 'Intégré'),
(4, 'XidDemo', 'Raspberry Pi 2', 'PC', 0, NULL, 0, 'AMR 7', 0.8, 0.5, 4, 'Intégré'),
(5, 'Pac Man', 'L''ordinateur Pac Man', 'PC', 0, NULL, 0, 'Intel P4 Double core', 2.5, 2, 500, 'Nvidia Geforce 9600 GT'),
(6, 'Pong', 'L''ordinateur Pong, Xubuntu, StepMania', 'PC', 0, NULL, 0, 'Intel P4 Dual Core', 2.4, 1, 80, 'A définir'),
(7, 'Sonic', 'L''ordinateur Sonic - Windows 7', 'PC', 1, NULL, 0, 'Intel P4 Double core', 2.4, 2, 500, 'Radeon'),
(8, 'Tetris', 'L''ordinateur Tetris - Windows 7', 'PC', 1, NULL, 0, 'Intel P4 Double core', 2.4, 2, 500, 'Radeon'),
(9, 'Zelda', 'L''ordinateur Zelda - Windows 7', 'PC', 0, NULL, 0, 'Intel P4 Double core', 2.4, 2, 500, 'Radeon'),
(10, 'Fangorn', 'Serveur FTP', 'PC', 0, NULL, 0, 'Mono Core', 3.4, 1, 170, 'Sans'),
(11, 'Fomcombe', 'Serveur DHCP etc...', 'PC', 0, NULL, 0, 'Mono Core', 3.4, 1, 170, 'Sans'),
(12, 'Erebor', 'Serveur Proxmox', 'PC', 0, NULL, 0, 'Mono Core', 3.4, 8, 170, 'Sans'),
(13, 'Gondor', 'Serveur Proxmox', 'PC', 0, NULL, 0, 'Intel Xeon', 3, 8, 74, 'Sans');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table qui stock les preset pour chaque type d''objects' AUTO_INCREMENT=5 ;

--
-- Contenu de la table `preset`
--

INSERT INTO `preset` (`id`, `name`, `description`, `lenght`, `number_port`, `cpu`, `frequence`, `ram`, `hard_drive`, `gpu`) VALUES
(1, 'PC', 'Les ordinateurs du Xid', 0, 0, 1, 1, 1, 1, 1),
(2, 'Switch', 'Les Switch du Xid', 0, 1, 1, 1, 1, 0, 0),
(4, 'Multiprise', 'Les mutiprises du xid, grande ou pas...', 1, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` int(11) NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8 NOT NULL,
  `photos` varchar(255) CHARACTER SET utf8 NOT NULL,
  `network` varchar(255) CHARACTER SET utf8 NOT NULL,
  `promo` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `pseudo`, `admin`, `email`, `password`, `phone`, `adress`, `photos`, `network`, `promo`) VALUES
(12, 'bellec', 'julien', 'tumai', 0, 'julien.bellec@hotmail.fr', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', 0, '', '', '', ''),
(15, 'Alberola', 'Gaël', 'zoski', 1, 'zoski@free.fr', '64faf5d0b1dc311fd0f94af64f6c296a03045571', 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
