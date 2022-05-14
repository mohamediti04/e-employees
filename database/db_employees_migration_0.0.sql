-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 10 mai 2022 à 10:28
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-employees`
--

-- --------------------------------------------------------

--
-- Structure de la table `empl`
--

DROP TABLE IF EXISTS `empl`;
CREATE TABLE IF NOT EXISTS `empl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Matricule` varchar(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Grade` varchar(20) NOT NULL,
  `service` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Matricule` (`Matricule`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `empl`
--

INSERT INTO `empl` (`ID`, `Matricule`, `Nom`, `Prenom`, `Grade`, `service`) VALUES
(28, '874', 'Fatima', 'Chadili', 'IngÃ©nieur', 'SPA'),
(24, '207', 'Oumaima', 'benanni', 'IngÃ©nieur', 'SGRID'),
(25, '453', 'Kamal', 'hadou', 'Administrateur', 'SE'),
(26, '456', 'Ahmed', 'banon', 'Technicien 1G', 'SPA'),
(27, '789', 'Khadija', 'baali', 'Technicien 3G', 'SPP'),
(23, '123', 'Mohammed', 'Ali', 'Technicien 2G', 'SE'),
(31, '2317', 'ikram', 'Elbaz', 'Technicien 3G', 'SAF'),
(32, '4320', 'Nawal', 'Mansouri', 'Administrateur', 'S.Elevage');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
