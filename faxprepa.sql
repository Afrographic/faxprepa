-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for faxprepa
CREATE DATABASE IF NOT EXISTS `faxprepa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `faxprepa`;

-- Dumping structure for table faxprepa.epreuve
CREATE TABLE IF NOT EXISTS `epreuve` (
  `idEpreuve` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `annee` varchar(255) DEFAULT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `idEcole` int(11) DEFAULT NULL,
  `idTypeEpreuve` int(11) DEFAULT NULL,
  `totalDownload` int(11) DEFAULT NULL,
  `niveau` int(11) DEFAULT NULL,
  `idFiliere` int(11) DEFAULT NULL,
  PRIMARY KEY (`idEpreuve`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table faxprepa.filiere
CREATE TABLE IF NOT EXISTS `filiere` (
  `idFiliere` int(11) NOT NULL AUTO_INCREMENT,
  `idSchool` int(11) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idFiliere`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table faxprepa.school
CREATE TABLE IF NOT EXISTS `school` (
  `idSchool` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idSchool`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table faxprepa.typeepreuve
CREATE TABLE IF NOT EXISTS `typeepreuve` (
  `idTypeEpreuve` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) NOT NULL,
  PRIMARY KEY (`idTypeEpreuve`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
