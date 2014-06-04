-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 04 Juin 2014 à 17:57
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `pseudo`, `admin`, `email`, `password`, `phone`, `adress`, `photos`, `network`, `promo`) VALUES
(12, 'bellec', 'julien', 'tumai', NULL, 'julien.bellec@hotmail.fr', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', 0, '', '', '', ''),
(13, 'azer', 'ae', 'qsdfg', NULL, 'example@example.fr', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', 0, '', '', '', ''),
(14, 'zerty', '', 'dalia', NULL, '', '6f7be09772f2e5d51923d5feaa84508ee8472f4e', 0, '', '', '', ''),
(15, 'Alberola', 'Gaël', 'zoski', 1, 'zoski@free.fr', '64faf5d0b1dc311fd0f94af64f6c296a03045571', 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
