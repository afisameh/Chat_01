-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 11 Août 2015 à 08:25
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dblogin`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(230) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(3, 'sameh', 'sameh@gmail.com', '$2y$10$TPrt0mnReUTkjICnqZTzveCi8KaYmeNEuI9mbot8KefnKJ/EBVGJq'),
(2, 'admin', 'admin@gmail.com', '$2y$10$PgYpznCOxBIno8jWSLKZ7./UGhJJKmfP3FXnAscb0azHUUKt2R.hu'),
(4, 'souhail', 'souhail@gmail.com', '$2y$10$e/KqAiA5FuJa1e1r5Zb.Y.IDZJzua69b.cmhWqOWJ/01gqYH8H.GC'),
(5, 'mohamed', 'mohamed@gmail.cim', '$2y$10$aqGKcSUYbKP9Px0BoPnUpOo4okdDW59Lp0/e4rD/p4nWt9wTljqiC');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
