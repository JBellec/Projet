-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 02 Juin 2014 à 22:04
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
(1, 'Kirby', 'L''ordinateur Kirby', 'PC', 1, NULL, 0, '4 Core AMD', 3.4, 4, 500, 'Radeon R9 260'),
(2, 'Samus', 'L''ordinateur Samus', 'PC', 0, NULL, 0, '4 Core AMD', 3.4, 4, 500, 'Radeon R9 260'),
(3, 'Lorien', 'Raspberry Pi', 'PC', 0, NULL, 0, 'AMR 7', 0.8, 0.5, 16, 'Intégré'),
(4, 'XidDemo', 'Raspberry Pi 2', 'PC', 0, NULL, 0, 'AMR 7', 0.8, 0.5, 4, 'Intégré'),
(5, 'Pac Man', 'L''ordinateur Pac Man', 'PC', 1, NULL, 0, 'Intel P4 Double core', 2.5, 2, 500, 'Nvidia Geforce 9600 GT'),
(6, 'Pong', 'L''ordinateur Pong, Xubuntu, StepMania', 'PC', 1, NULL, 0, 'Intel P4 Dual Core', 2.4, 1, 80, 'A définir'),
(7, 'Sonic', 'L''ordinateur Sonic - Windows 7', 'PC', 1, NULL, 0, 'Intel P4 Double core', 2.4, 2, 500, 'Radeon'),
(8, 'Tetris', 'L''ordinateur Tetris - Windows 7', 'PC', 0, NULL, 0, 'Intel P4 Double core', 2.4, 2, 500, 'Radeon'),
(9, 'Zelda', 'L''ordinateur Zelda - Windows 7', 'PC', 0, NULL, 0, 'Intel P4 Double core', 2.4, 2, 500, 'Radeon'),
(10, 'Fangorn', 'Serveur FTP', 'PC', 0, NULL, 0, 'Mono Core', 3.4, 1, 170, 'Sans'),
(11, 'Fomcombe', 'Serveur DHCP etc...', 'PC', 0, NULL, 0, 'Mono Core', 3.4, 1, 170, 'Sans'),
(12, 'Erebor', 'Serveur Proxmox', 'PC', 0, NULL, 0, 'Mono Core', 3.4, 8, 170, 'Sans'),
(13, 'Gondor', 'Serveur Proxmox', 'PC', 0, NULL, 0, 'Intel Xeon', 3, 8, 74, 'Sans');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
