-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 03 Juin 2014 à 22:52
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
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `network` varchar(255) NOT NULL,
  `promo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `pseudo`, `email`, `password`, `admin`, `phone`, `adress`, `photos`, `network`, `promo`) VALUES
(12, 'azerrtt', 'julien', 'tumai', 'julien.bellec@hotmail.fr', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', NULL, 0, '', '', '', ''),
(13, 'azer', 'ae', 'qsdfg', 'example@example.fr', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', NULL, 0, '', '', '', ''),
(14, 'zerty', '', 'dalia', '', '6f7be09772f2e5d51923d5feaa84508ee8472f4e', NULL, 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
