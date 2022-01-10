-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 10:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faxprepa`
--

-- --------------------------------------------------------

--
-- Table structure for table `epreuve`
--

CREATE TABLE `epreuve` (
  `idEpreuve` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `annee` varchar(255) DEFAULT NULL,
  `taille` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `idEcole` int(11) DEFAULT NULL,
  `idTypeEpreuve` int(11) DEFAULT NULL,
  `totalDownload` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `epreuve`
--

INSERT INTO `epreuve` (`idEpreuve`, `nom`, `annee`, `taille`, `path`, `idEcole`, `idTypeEpreuve`, `totalDownload`) VALUES
(2, 'Mecanique des fluides', '2017/2019', '98 KB', 'data/subjects/conf-logiciels-libres.pdf', 1, 3, 0),
(4, 'Compatabilite avancee', '2017/2019', '2 MB', 'data/subjects/Raleway.zip', 1, 3, 0),
(6, 'Algorithme avancee', '2017/2018', '98 KB', 'data/subjects/conf-logiciels-libres.pdf', 1, 3, 0),
(8, 'xcvxcv', 'xcvxcv', '57 KB', 'data/subjects/Analyser-une-scénographie.pdf', 0, 3, 0),
(9, 'dfgdfg', 'dfgdfg', '10 KB', 'data/subjects/cog.png', 4, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `idSchool` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`idSchool`, `name`, `mdp`, `logo`) VALUES
(1, 'Ecole Nationale Superieur Polytechnique de Yaounde', 'abe93c6cdea62df1f5b1229baf1f2a16', 'Images/logoEcole/ensp.jpg'),
(2, 'Universite Inter Etat Cameroun - Congo', 'abe93c6cdea62df1f5b1229baf1f2a16', 'Images/logoEcole/uiecc.jpg'),
(3, 'Faculte Agronomie des Sciences', 'abe93c6cdea62df1f5b1229baf1f2a16', 'Images/logoEcole/fasa.jpg'),
(4, 'Dsffsdfsdf', 'aab3238922bcc25a6f606eb525ffdc56', 'Images/logoEcole/cog.png');

-- --------------------------------------------------------

--
-- Table structure for table `typeepreuve`
--

CREATE TABLE `typeepreuve` (
  `idTypeEpreuve` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typeepreuve`
--

INSERT INTO `typeepreuve` (`idTypeEpreuve`, `label`) VALUES
(1, 'CC'),
(2, 'Normale'),
(3, 'Rattrapage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `epreuve`
--
ALTER TABLE `epreuve`
  ADD PRIMARY KEY (`idEpreuve`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`idSchool`);

--
-- Indexes for table `typeepreuve`
--
ALTER TABLE `typeepreuve`
  ADD PRIMARY KEY (`idTypeEpreuve`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `epreuve`
--
ALTER TABLE `epreuve`
  MODIFY `idEpreuve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `idSchool` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `typeepreuve`
--
ALTER TABLE `typeepreuve`
  MODIFY `idTypeEpreuve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
