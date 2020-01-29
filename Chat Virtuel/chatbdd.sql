-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Novembre 2019 à 19:22
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(8) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Contenu de la table `chat`
--

INSERT INTO `chat` (`id`, `pseudo`, `message`) VALUES
(3, 'Georges', 'blabla'),
(4, 'Georges', 'blabla'),
(5, 'Georges', 'blabla'),
(6, 'Georges', 'blabla'),
(7, 'Test', 'blalbe'),
(8, 'Test', 'blakbf'),
(9, 'Lucas', 'test'),
(10, 'Lucas', 'test'),
(11, 'Lucas', 'test'),
(12, 'Lucas', 'test'),
(13, 'lucas', 'blabla'),
(14, 'lucas', 'blabla'),
(15, 'lucas', 'blabla'),
(16, 'lucas', 'blabla'),
(17, 'pseudo', 'blabla'),
(18, 'pseudo', 'test'),
(19, 'RÃ©mi', 'test'),
(20, 'RÃ©mi', 'test'),
(21, 'Georges', 'Salut'),
(22, 'Georges', 'Salut'),
(23, 'Georges', 'Salut'),
(24, 'lucas', 'test'),
(25, 'lucas', 'test'),
(26, 'lucas', 'test'),
(27, 'lucas', 'test'),
(28, 'lucas', 'Salut'),
(29, 'Georges', 'test'),
(30, 'Georges', 'test'),
(31, 'Georges', 'test'),
(32, 'Georges', 'test'),
(33, 'Georges', 'test'),
(34, 'Georges', 'blabla'),
(35, 'Georges', 'blabla'),
(36, 'Georges', 'yo'),
(37, 'Georges', 'yo'),
(38, 'Georges', 'yo'),
(39, 'Georges', 'yo'),
(40, 'Georges', 'yo'),
(41, 'Georges', 'yo'),
(42, 'Georges', 'yo'),
(43, 'Georges', 'yo'),
(44, 'Georges', 'yo'),
(45, 'Georges', 'yo'),
(46, 'Georges', 'yo'),
(47, 'Georges', 'yo'),
(48, 'Lucas', 'Bonjour ThÃ©o');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
