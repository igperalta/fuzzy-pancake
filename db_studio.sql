-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 06:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `componente`
--

CREATE TABLE `componente` (
  `id_componente` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `precio` float NOT NULL,
  `gama` varchar(20) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `componente`
--

INSERT INTO `componente` (`id_componente`, `tipo`, `modelo`, `precio`, `gama`, `id_marca`) VALUES
(3, 'Consola', 'Zen 16', 200, 'Basic', 3),
(4, 'Consola', 'L 200', 300, 'Advanced', 10),
(5, 'Consola', 'M4 Tube', 600, 'Premium', 11),
(6, 'Microfono', '74 B Ribbon', 50, 'Basic', 7),
(7, 'Microfono', 'MD 421', 80, 'Advanced', 4),
(8, 'Microfono', 'MD 419', 80, 'Advanced', 4),
(9, 'Microfono', 'SM 57', 150, 'Premium', 5),
(10, 'Microfono', 'NT 5', 150, 'Premium', 8),
(11, 'Monitor', 'Pro Twin 6', 100, 'Basic', 6),
(12, 'Monitor', 'D 280 Pro', 200, 'Advanced', 4),
(13, 'Monitor', 'KH 310', 350, 'Premium', 9);

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `origen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`id_marca`, `marca`, `origen`) VALUES
(3, 'Audient', 'Estados Unidos'),
(4, 'Sennheiser', 'Estados Unidos'),
(5, 'Shure', 'Estados Unidos'),
(6, 'Focal', 'Inglaterra'),
(7, 'RCA', 'Estados Unidos'),
(8, 'Rode', 'Holanda'),
(9, 'Neumann', 'Estados Unidos'),
(10, 'Solid State Logic', 'Estados Unidos'),
(11, 'TL Audio', 'Inglaterra');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'testAdmin@testeo.com', '$2y$10$Dvjw8NxfvW.vrGYTNrRFwO2px972PVkWqduvbMcQro3/hILELA/Jm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `componente`
--
ALTER TABLE `componente`
  ADD PRIMARY KEY (`id_componente`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `componente`
--
ALTER TABLE `componente`
  MODIFY `id_componente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `componente`
--
ALTER TABLE `componente`
  ADD CONSTRAINT `componente_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
