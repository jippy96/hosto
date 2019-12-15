-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 01:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hopital`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `id_Consultation` int(10) UNSIGNED NOT NULL,
  `identifiant_Patient` varchar(30) NOT NULL,
  `categorie_Patient` varchar(30) NOT NULL,
  `date_rdv` date NOT NULL,
  `date_Consultation` varchar(10) NOT NULL,
  `prix_Seance` varchar(20) NOT NULL,
  `nombre_Seance` int(11) NOT NULL DEFAULT '1',
  `id_Medecin` int(10) UNSIGNED NOT NULL,
  `id_Patient` int(10) UNSIGNED NOT NULL,
  `id_Indication` int(10) UNSIGNED NOT NULL,
  `commentaire` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`id_Consultation`, `identifiant_Patient`, `categorie_Patient`, `date_rdv`, `date_Consultation`, `prix_Seance`, `nombre_Seance`, `id_Medecin`, `id_Patient`, `id_Indication`, `commentaire`) VALUES
(1, 'Numéro de Bon', 'ANAIM', '2019-12-20', '2019-11-11', '20000', 20, 1, 17, 3, ''),
(2, 'Numéro de Bon', 'ANAIM', '2019-12-20', '2019-11-10', '20000', 20, 1, 18, 3, ''),
(3, 'Indigenat', 'CBG', '2019-12-05', '2019-05-12', '499984', 20, 1, 19, 1, 'ok'),
(4, 'Indigenat', 'CBG', '2019-12-12', '2019-12-10', '50000', 20, 3, 20, 3, 'ok'),
(5, '100221', 'CBG', '2019-12-25', '2019-12-13', '50000', 25, 3, 21, 3, ''),
(6, 'numero de bon', 'P.E.C', '2019-12-24', '2019-12-15', '10000', 10, 1, 22, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `indication`
--

CREATE TABLE `indication` (
  `id_Indication` int(10) UNSIGNED NOT NULL,
  `libelle_Indication` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indication`
--

INSERT INTO `indication` (`id_Indication`, `libelle_Indication`) VALUES
(1, 'Torticolis'),
(3, 'IMC');

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE `medecin` (
  `id_Medecin` int(10) UNSIGNED NOT NULL,
  `nomMedecin` varchar(30) NOT NULL,
  `prenomsMedecin` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`id_Medecin`, `nomMedecin`, `prenomsMedecin`, `contact`) VALUES
(1, 'koundouno', 'Jean Paul', '00221776602651'),
(3, 'Gning', 'Niania', '779862011'),
(4, 'Dembélé', 'm\'bamakan', '782001548');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id_Patient` int(10) UNSIGNED NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenoms` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `adresse` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id_Patient`, `nom`, `prenoms`, `age`, `sexe`, `adresse`) VALUES
(3, 'koundouno', 'Jean-Paul', 20, 'm', 'liberté3'),
(4, 'koundouno', 'Jean-Paul', 20, 'm', 'liberté3'),
(5, 'koundouno', 'Jean-Paul', 20, 'm', 'liberté3'),
(6, 'koundouno', 'Jean-Paul', 20, 'm', 'liberté3'),
(7, 'koundouno', 'Jean-Paul', 20, 'm', 'liberté3'),
(17, 'koundouno', 'Jean-Paul', 20, 'm', 'liberté3'),
(18, 'koundouno', 'Jean-Paul', 20, 'm', 'liberté3'),
(19, 'Bah', 'Aliou', 25, 'm', 'liberté3'),
(20, 'ok', 'ok', 25, 'm', 'ko'),
(21, 'haba', 'perrin', 12, 'm', 'castor'),
(22, 'dembélé', 'm\'bamakan', 25, 'f', 'fass');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_Users` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nomPrenoms` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_Users`, `pseudo`, `password`, `nomPrenoms`) VALUES
(2, 'jippy', 'e9483d314d48064a513db48a04e0ed255aeae4c2', 'koundouno jean-paul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id_Consultation`),
  ADD KEY `fk_consultation_medecin` (`id_Medecin`),
  ADD KEY `fk_consultation_indication` (`id_Indication`),
  ADD KEY `fk_consultation_patient` (`id_Patient`);

--
-- Indexes for table `indication`
--
ALTER TABLE `indication`
  ADD PRIMARY KEY (`id_Indication`);

--
-- Indexes for table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id_Medecin`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id_Patient`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_Users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id_Consultation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `indication`
--
ALTER TABLE `indication`
  MODIFY `id_Indication` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id_Medecin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id_Patient` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_Users` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `fk_consultation_indication` FOREIGN KEY (`id_Indication`) REFERENCES `indication` (`id_Indication`),
  ADD CONSTRAINT `fk_consultation_medecin` FOREIGN KEY (`id_Medecin`) REFERENCES `medecin` (`id_Medecin`),
  ADD CONSTRAINT `fk_consultation_patient` FOREIGN KEY (`id_Patient`) REFERENCES `patient` (`id_Patient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
