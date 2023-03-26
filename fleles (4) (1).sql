-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 21 mai 2022 à 15:42
-- Version du serveur : 5.5.62
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fleles`
--

-- --------------------------------------------------------

--
-- Structure de la table `basepoints`
--

DROP TABLE IF EXISTS `basepoints`;
CREATE TABLE IF NOT EXISTS `basepoints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `cpc` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `basepoints`
--

INSERT INTO `basepoints` (`id`, `email`, `username`, `cpc`) VALUES
(1, 'chihatori07@gmail.com', 'finaltest', 9),
(2, 'ali@gmail.com', 'ali', 10),
(3, 'a.y@z', 'azazaz', 18),
(4, 'Bennourm9@gmail.com', 'Admin', 40000),
(5, 'ahmed2020@gmail.com', 'ahmed2020', 1256),
(6, 'Issam@gmail.com', 'Issam', 43);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `telephone` varchar(8) NOT NULL,
  `Interets` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `Prenom`, `Ville`, `telephone`, `Interets`) VALUES
(3, 'bb', 'bb@gmail.com', '3b64db95cb55c763391c707108489ae18b4112d783300de38e033b4c98c3deaf', '', '', '', ''),
(4, 'cc', 'cc@gmail.com', '355b1bbfc96725cdce8f4a2708fda310a80e6d13315aec4e5eed2a75fe8032ce', '', '', '', ''),
(5, 'cc', 'cc@gmail.com', '355b1bbfc96725cdce8f4a2708fda310a80e6d13315aec4e5eed2a75fe8032ce', '', '', '', ''),
(6, 'cc', 'cc@gmail.com', '355b1bbfc96725cdce8f4a2708fda310a80e6d13315aec4e5eed2a75fe8032ce', '', '', '', ''),
(7, 'Dark', 'aymen199719@hotmail.fr', 'f2681684f82b59a1af4d014de7348442d33fd012f0b62fe88ff0ff12258888c3', '', '', '', ''),
(12, 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(13, 'aq', 'aq', 'aq', 'aq', 'aq', 'aq', 'aq'),
(14, 'anonyme', 'chihaotri07@gmail.com', '1bff74ddff5f2337a47d9c905bafa2993017ef8fbc171e64eca3489f71f33e13', 'syrine', 'manouba', '93999999', 'therapie'),
(15, 'fr', 'fr', 'cebb971732e38076ba87b048af20252954245b9876b49afb2df5a58dedbd34a7', 'fr', 'fr', 'fr', 'fr'),
(16, 'finaltest', 'chihatori07@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'finaltest', 'inconnu', '12333333', 'rien'),
(18, 'Admin', 'Bennourm9@gmail.com', 'ed5094ba90fbfc8a2459c26ab0a651a037ceec18e6667c2dea536136a74a9c2e', 'Mabrouk Bannour', 'Tunis', '56748609', 'Freelance'),
(20, 'Issam', 'Issam@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'Issam001', 'Rades', '99999999', 'rien hh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
