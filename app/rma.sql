-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 30 Mai 2014 à 15:13
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `rma`
--

-- --------------------------------------------------------

--
-- Structure de la table `rma_params`
--

CREATE TABLE IF NOT EXISTS `rma_params` (
  `param_id` int(11) NOT NULL AUTO_INCREMENT,
  `param_mail_contact` varchar(255) NOT NULL,
  `param_is_maintenance` tinyint(1) NOT NULL,
  `param_message_maintenance` varchar(255) NOT NULL,
  PRIMARY KEY (`param_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `rma_params`
--

INSERT INTO `rma_params` (`param_id`, `param_mail_contact`, `param_is_maintenance`, `param_message_maintenance`) VALUES
(1, 'contact@test.te', 0, 'Le site est actuellement en maintenance !');

-- --------------------------------------------------------

--
-- Structure de la table `rma_partners`
--

CREATE TABLE IF NOT EXISTS `rma_partners` (
  `partner_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_type` tinyint(1) NOT NULL,
  `partner_name` varchar(255) NOT NULL,
  `partner_desc` text NOT NULL,
  `partner_img` varchar(255) NOT NULL,
  `partner_to_home` tinyint(1) NOT NULL DEFAULT '0',
  `partner_to_page` tinyint(1) NOT NULL DEFAULT '0',
  `partner_date_added` date NOT NULL,
  PRIMARY KEY (`partner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `rma_partners`
--

INSERT INTO `rma_partners` (`partner_id`, `partner_type`, `partner_name`, `partner_desc`, `partner_img`, `partner_to_home`, `partner_to_page`, `partner_date_added`) VALUES
(1, 0, 'partner 1uihiuh', 'kjedfhjzuisgfhuizehguzieh', '1111111', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `rma_sliders`
--

CREATE TABLE IF NOT EXISTS `rma_sliders` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_name` varchar(255) NOT NULL,
  `slider_desc` text NOT NULL,
  `slider_img` varchar(255) NOT NULL,
  `slider_is_activated` tinyint(1) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rma_teams`
--

CREATE TABLE IF NOT EXISTS `rma_teams` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(255) NOT NULL,
  `team_desc` text NOT NULL,
  `team_img` varchar(255) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `rma_users`
--

CREATE TABLE IF NOT EXISTS `rma_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `rma_users`
--

INSERT INTO `rma_users` (`id`, `username`, `password`, `created`, `modified`) VALUES
(1, 'DevCode', 'e6ef17fb9c490e7d31ddbe4025781570ee92197e', NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
