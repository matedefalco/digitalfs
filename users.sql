-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 04:40 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pf`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` tinytext COLLATE utf8_bin NOT NULL,
  `password` tinytext COLLATE utf8_bin NOT NULL,
  `email` tinytext COLLATE utf8_bin NOT NULL,
  `nombre` tinytext COLLATE utf8_bin NOT NULL,
  `apellido` tinytext COLLATE utf8_bin NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `sexo` tinytext COLLATE utf8_bin NOT NULL,
  `dni` int(10) UNSIGNED NOT NULL,
  `direccion` tinytext COLLATE utf8_bin NOT NULL,
  `piso` tinytext COLLATE utf8_bin NOT NULL,
  `cuit` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `email`, `nombre`, `apellido`, `edad`, `sexo`, `dni`, `direccion`, `piso`, `cuit`) VALUES
(1, 'juanpi', '', 'juanpi999@hotmail.com', 'juan pablo', 'rodriguez acevedo', 21, 'masculino', 40830128, 'heredia 1080', 'timbre izq', 24408301284);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
