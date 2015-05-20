-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 20 Mai 2015 à 15:55
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `coctools`
--
CREATE DATABASE IF NOT EXISTS `coctools` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `coctools`;

-- --------------------------------------------------------

--
-- Structure de la table `t_building`
--

CREATE TABLE IF NOT EXISTS `t_building` (
  `id_building` int(11) NOT NULL,
  `name_building` text NOT NULL,
  `level_building` int(11) NOT NULL,
  `health_building` int(11) NOT NULL,
  `gold_building` int(11) NOT NULL,
  `elixir_building` int(11) NOT NULL,
  `black_building` int(11) NOT NULL,
  `buildtime_building` int(11) NOT NULL,
  `image_building` text NOT NULL,
  PRIMARY KEY (`id_building`),
  UNIQUE KEY `id_building` (`id_building`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_heroes`
--

CREATE TABLE IF NOT EXISTS `t_heroes` (
  `id_hero` int(11) NOT NULL,
  `name_hero` text NOT NULL,
  `level_hero` int(11) NOT NULL,
  `health_hero` int(11) NOT NULL,
  `damagesec_hero` int(11) NOT NULL,
  `damageattack_hero` int(11) NOT NULL,
  `resttime_hero` int(11) NOT NULL,
  `image_hero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_research`
--

CREATE TABLE IF NOT EXISTS `t_research` (
  `id_search` int(11) NOT NULL,
  `type_search` text NOT NULL,
  `level_search` int(11) NOT NULL,
  `gold_search` int(11) NOT NULL,
  `elixir_search` int(11) NOT NULL,
  `black_search` int(11) NOT NULL,
  `searchtime_search` int(11) NOT NULL,
  `townhalllevel_search` int(11) NOT NULL,
  PRIMARY KEY (`id_search`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_spell`
--

CREATE TABLE IF NOT EXISTS `t_spell` (
  `id_spell` int(11) NOT NULL,
  `level_spell` int(11) NOT NULL,
  `name_spell` text NOT NULL,
  `gold_spell` int(11) NOT NULL,
  `elixir_spell` int(11) NOT NULL,
  `black_spell` int(11) NOT NULL,
  `builtime_spell` int(11) NOT NULL,
  `duration_spell` int(11) NOT NULL,
  `power1_spell` int(11) NOT NULL,
  `power2_spell` int(11) NOT NULL,
  `image_spell` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_troop`
--

CREATE TABLE IF NOT EXISTS `t_troop` (
  `id_troop` int(11) NOT NULL,
  `level_troop` int(11) NOT NULL,
  `name_troop` text NOT NULL,
  `gold_troop` int(11) NOT NULL,
  `elixir_troop` int(11) NOT NULL,
  `black_troop` int(11) NOT NULL,
  `health_troop` int(11) NOT NULL,
  `damagesec_troop` int(11) NOT NULL,
  `damageattack_troop` int(11) NOT NULL,
  `buildtime_troop` int(11) NOT NULL,
  `image_troop` text NOT NULL,
  PRIMARY KEY (`id_troop`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_unlockbuilding`
--

CREATE TABLE IF NOT EXISTS `t_unlockbuilding` (
  `id_unlock` int(11) NOT NULL,
  `buildingname_unlock` text NOT NULL,
  `numberunlocked_unlock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `t_users`
--

CREATE TABLE IF NOT EXISTS `t_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo_user` text NOT NULL,
  `hash_user` text NOT NULL,
  `mail_user` text NOT NULL,
  `type_user` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `t_users`
--

INSERT INTO `t_users` (`id_user`, `pseudo_user`, `hash_user`, `mail_user`, `type_user`) VALUES
(1, 'admin', 'aa36dc6e81e2ac7ad03e12fedcb6a2c0', 'maxime.poulet.4593@gmail.com', 1),
(2, 'user', 'aa36dc6e81e2ac7ad03e12fedcb6a2c0', '', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
