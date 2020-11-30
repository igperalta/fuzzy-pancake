-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 05:03 AM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `score` tinyint(4) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_component` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `content`, `score`, `id_user`, `id_component`) VALUES
(6, 'este es un comentario de prueba', 5, 1, 2),
(15, 'comentario de prueba por API', 4, 1, 4),
(16, 'comentario de prueba por API', 4, 1, 5),
(17, 'comentario de prueba por API', 4, 1, 6),
(18, 'comentario de prueba por API', 4, 1, 7),
(19, 'comentario de prueba por API', 4, 1, 8),
(20, 'comentario de prueba por API', 4, 1, 9),
(32, 'prueba de carga por formulario', 5, 1, 7),
(36, 'prueba de carga por formulario', 5, 11, 3),
(39, 'muy bueno el shure, excelente sonido', 5, 1, 5),
(71, 'prueba para borrar', 5, 1, 10),
(72, 'prueba para borrar', 2, 1, 10),
(73, 'prueba para borrar5', 5, 1, 10),
(74, 'usuario comun', 5, 11, 6),
(75, 'buena consola para el precio', 3, 11, 1);

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
(1, 'Consola', 'L 200', 300, 'Advanced', 10),
(2, 'Consola', 'M4 Tube', 600, 'Premium', 11),
(3, 'Microfono', '74 B Ribbon', 50, 'Basic', 7),
(4, 'Microfono', 'MD 419', 80, 'Advanced ', 4),
(5, 'Microfono', 'SM 57', 150, 'Premium', 5),
(6, 'Microfono', 'NT 5', 150, 'Premium', 8),
(7, 'Monitor', 'Pro Twin 6', 100, 'Basic', 6),
(8, 'Monitor', 'D 280 Pro', 200, 'Advanced', 4),
(9, 'Monitor', 'KH 310', 350, 'Premium', 9),
(10, 'Consola', 'Zen 16', 50, 'Basic', 12);

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
(4, 'Sennheiser', 'Alemania'),
(5, 'Shure', 'Estados Unidos'),
(6, 'Focal', 'Inglaterra'),
(7, 'RCA', 'Estados Unidos'),
(8, 'Rode', 'Holanda'),
(9, 'Neumann', 'Estados Unidos'),
(10, 'Solid State Logic', 'Estados Unidos'),
(11, 'TL Audio', 'Inglaterra'),
(12, 'Audient', 'Estados Unidos');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `is_admin`) VALUES
(1, 'testAdmin@testeo.com', '$2y$10$Dvjw8NxfvW.vrGYTNrRFwO2px972PVkWqduvbMcQro3/hILELA/Jm', 1),
(11, 'testRegister@testeo.com', '$2y$10$oYMI73SS0b8QJ4kEO6mJn.zVO/eBPNMiEJbQyXFvcdGvWJ6GgWbsa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `user_id` (`id_user`),
  ADD KEY `id_component` (`id_component`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `componente`
--
ALTER TABLE `componente`
  MODIFY `id_componente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_component`) REFERENCES `componente` (`id_componente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `componente`
--
ALTER TABLE `componente`
  ADD CONSTRAINT `componente_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
