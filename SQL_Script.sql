
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 03 Mai 2013 à 16:55
-- Version du serveur: 5.1.67
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `u225471288_data`
--

-- --------------------------------------------------------

--
-- Structure de la table `ANCIEN`
--

CREATE TABLE IF NOT EXISTS `ANCIEN` (
  `IDPERSONNE` varchar(10) NOT NULL,
  `IDFILIÈRE` char(32) NOT NULL,
  `IDORGANISATION` varchar(10) DEFAULT NULL,
  `IDOPTION` char(32) NOT NULL,
  `FORMATION_EN_COURS` varchar(255) DEFAULT NULL,
  `ANNÉE_PROMOTION` char(9) DEFAULT NULL,
  PRIMARY KEY (`IDPERSONNE`),
  KEY `I_FK_ANCIEN_FILIÈRE` (`IDFILIÈRE`),
  KEY `I_FK_ANCIEN_ORGANISATION` (`IDORGANISATION`),
  KEY `I_FK_ANCIEN_OPTIONS` (`IDOPTION`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ANNÉE`
--

CREATE TABLE IF NOT EXISTS `ANNÉE` (
  `ANNÉESCOLAIRE` char(9) NOT NULL,
  PRIMARY KEY (`ANNÉESCOLAIRE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CLASSE`
--

CREATE TABLE IF NOT EXISTS `CLASSE` (
  `IDCLASSE` char(32) NOT NULL,
  `IDFILIÈRE` char(32) NOT NULL,
  PRIMARY KEY (`IDCLASSE`),
  KEY `I_FK_CLASSE_FILIÈRE` (`IDFILIÈRE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `CONTACT`
--

CREATE TABLE IF NOT EXISTS `CONTACT` (
  `IDPERSONNE` varchar(10) NOT NULL,
  `IDORGANISATION` varchar(10) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`),
  KEY `I_FK_CONTACT_ORGANISATION` (`IDORGANISATION`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `FILIÈRE`
--

CREATE TABLE IF NOT EXISTS `FILIÈRE` (
  `IDFILIÈRE` char(32) NOT NULL,
  `FILIÈRE` char(32) NOT NULL,
  PRIMARY KEY (`IDFILIÈRE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `OPTIONS`
--

CREATE TABLE IF NOT EXISTS `OPTIONS` (
  `IDOPTION` char(32) NOT NULL,
  `OPTIONS` char(32) NOT NULL,
  PRIMARY KEY (`IDOPTION`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ORGANISATION`
--

CREATE TABLE IF NOT EXISTS `ORGANISATION` (
  `IDORGANISATION` varchar(10) NOT NULL,
  `NOM_ORGANISATION` varchar(255) NOT NULL,
  `VILLE_ORGANISATION` varchar(128) NOT NULL,
  `ADRESSE_ORGANISATION` varchar(128) NOT NULL,
  `CP_ORGANISATION` bigint(5) NOT NULL,
  `TEL_ORGANISATION` varchar(10) NOT NULL,
  `FAX_ORGANISATION` varchar(10) DEFAULT NULL,
  `FORMEJURIDIQUE` varchar(10) DEFAULT NULL,
  `MAIL` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDORGANISATION`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ORGANISATION`
--

INSERT INTO `ORGANISATION` (`IDORGANISATION`, `NOM_ORGANISATION`, `VILLE_ORGANISATION`, `ADRESSE_ORGANISATION`, `CP_ORGANISATION`, `TEL_ORGANISATION`, `FAX_ORGANISATION`, `FORMEJURIDIQUE`, `MAIL`) VALUES
('test', 'test', 'test', 'test', 44000, 'test', 'test', 'test', 'test@test.test'),
('11', 'azerty', 'azerty', 'azerty', 44800, 'azerty', 'azerty', 'azerty', 'azerty@azerty.azerty');

-- --------------------------------------------------------

--
-- Structure de la table `PERSONNE`
--

CREATE TABLE IF NOT EXISTS `PERSONNE` (
  `IDPERSONNE` varchar(10) NOT NULL,
  `NOM` varchar(30) NOT NULL,
  `NUM_TEL` char(10) DEFAULT NULL,
  `ADRESSE_MAIL` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(20) NOT NULL,
  PRIMARY KEY (`IDPERSONNE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `PERSONNE`
--

INSERT INTO `PERSONNE` (`IDPERSONNE`, `NOM`, `NUM_TEL`, `ADRESSE_MAIL`, `PRENOM`) VALUES
('1', 'test', 'test', 'test', 'test'),
('2', 'admin', 'admin', 'admin', 'admin'),
('3', 'etudiant', 'etudiant', 'etudiant', 'etudiant'),
('4', 'secretaire', NULL, NULL, 'secretaire'),
('5', 'professeur', NULL, NULL, 'professeur');

-- --------------------------------------------------------

--
-- Structure de la table `PROMOTION`
--

CREATE TABLE IF NOT EXISTS `PROMOTION` (
  `ANNÉESCOLAIRE` char(9) NOT NULL,
  `IDPERSONNE` varchar(10) NOT NULL,
  `IDCLASSE` char(32) NOT NULL,
  PRIMARY KEY (`ANNÉESCOLAIRE`,`IDPERSONNE`),
  KEY `I_FK_PROMOTION_CLASSE` (`IDCLASSE`),
  KEY `I_FK_PROMOTION_ANNÉE` (`ANNÉESCOLAIRE`),
  KEY `I_FK_PROMOTION_UTILISATEUR` (`IDPERSONNE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `STAGE`
--

CREATE TABLE IF NOT EXISTS `STAGE` (
  `NUM_STAGE` int(3) NOT NULL,
  `IDORGANISATION` varchar(10) NOT NULL,
  `IDRESPONSABLE` varchar(10) NOT NULL,
  `IDMAITRE_STAGE` varchar(10) NOT NULL,
  `IDPROFESSEUR` varchar(10) NOT NULL,
  `IDETUDIANT` varchar(10) NOT NULL,
  `DATEDEBUT` date NOT NULL,
  `DATEFIN` date NOT NULL,
  `DATE_VISITE` char(32) DEFAULT NULL,
  `TACHES_VISITE` char(32) DEFAULT NULL,
  `AVIS_VISITE` char(32) DEFAULT NULL,
  `PARTICIPATIONCCF` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`NUM_STAGE`),
  KEY `I_FK_STAGE_CONTACT` (`IDRESPONSABLE`),
  KEY `I_FK_STAGE_ORGANISATION` (`IDORGANISATION`),
  KEY `I_FK_STAGE_CONTACT1` (`IDMAITRE_STAGE`),
  KEY `I_FK_STAGE_UTILISATEUR` (`IDPROFESSEUR`),
  KEY `I_FK_STAGE_UTILISATEUR1` (`IDETUDIANT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `STAGE`
--

INSERT INTO `STAGE` (`NUM_STAGE`, `IDORGANISATION`, `IDRESPONSABLE`, `IDMAITRE_STAGE`, `IDPROFESSEUR`, `IDETUDIANT`, `DATEDEBUT`, `DATEFIN`, `DATE_VISITE`, `TACHES_VISITE`, `AVIS_VISITE`, `PARTICIPATIONCCF`) VALUES
(11, 'test', 'test', 'test', 'test', 'test', '2013-04-09', '2013-04-12', 'test', 'test', 'test', 1);

-- --------------------------------------------------------

--
-- Structure de la table `UTILISATEUR`
--

CREATE TABLE IF NOT EXISTS `UTILISATEUR` (
  `IDPERSONNE` varchar(10) NOT NULL,
  `IDOPTION_ETUDIANT` char(32) DEFAULT NULL,
  `LOGIN` char(32) NOT NULL,
  `MOT_DE_PASSE` char(32) NOT NULL,
  `ROLE` char(15) DEFAULT NULL,
  PRIMARY KEY (`IDPERSONNE`),
  KEY `I_FK_UTILISATEUR_OPTIONS` (`IDOPTION_ETUDIANT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `UTILISATEUR`
--

INSERT INTO `UTILISATEUR` (`IDPERSONNE`, `IDOPTION_ETUDIANT`, `LOGIN`, `MOT_DE_PASSE`, `ROLE`) VALUES
('1', NULL, 'test', 'test', NULL),
('2', NULL, 'admin', 'admin', 'admin'),
('3', NULL, 'etudiant', 'etudiant', 'etudiant'),
('4', NULL, 'secretaire', 'secretaire', 'secretaire'),
('5', NULL, 'professeur', 'professeur', 'professeur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
