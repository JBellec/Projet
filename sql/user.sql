-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 10 Juin 2014 à 16:12
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pseudo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` int(11) NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `titre` varchar(255) NOT NULL,
  `network` varchar(255) CHARACTER SET utf8 NOT NULL,
  `promo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lienf` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lient` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `admin`, `name`, `lastname`, `pseudo`, `email`, `password`, `phone`, `adress`, `image`, `description`, `titre`, `network`, `promo`, `lienf`, `lient`) VALUES
(12, NULL, 'bellec', 'julien', 'tumai', 'julien.bellec@hotmail.fr', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', 0, '', '', '', '', '', '', '', ''),
(13, NULL, 'azer', 'ae', 'qsdfg', 'example@example.fr', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', 0, '', '', '', '', '', '', '', ''),
(14, NULL, 'zerty', '', 'dalia', '', '6f7be09772f2e5d51923d5feaa84508ee8472f4e', 0, '', '', '', '', '', '', '', ''),
(15, 1, 'Dalia', 'BEN MECHEDAL', 'dadie', 'dalia33@hotmail.fr', '89df19516b4b70c9de34cce9f6c9ea0660d14633', 0, '', 'img/dg.jpg', 'image ', 'dg', '', '', '<a href="https://www.facebook.com/dadie.dalouche?ref=tn_tnmn" > ..lien.. </a>', '<a href="https://twitter.com/DadieDalouche">..lien..</a>'),
(16, NULL, '', '', '', '', '', 0, '', '', 'iuhj', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
