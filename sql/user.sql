-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 30 Mai 2014 à 13:24
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
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `filiere` varchar(255) NOT NULL,
  `annee` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `pseudo`, `email`, `password`, `tel`, `adresse`, `photos`, `filiere`, `annee`) VALUES
(12, 'Bellec', 'Julien', 'Tumai', 'julien.bellec@hotmail.fr', 'soncssimmam', 0, '', '', '', ''),
(13, 'exampleexample', 'example1', 'example', 'example@example.fr', 'c3499c2729730a7f807efb8676a92dcb6f8a3f8f', 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
