-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 07:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `el_recnik_b8`
--

-- --------------------------------------------------------

--
-- Table structure for table `recnik`
--

CREATE TABLE `recnik` (
  `Id` int(11) NOT NULL,
  `Engleski` varchar(50) NOT NULL,
  `Srpski` varchar(50) NOT NULL,
  `Opis` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recnik`
--

INSERT INTO `recnik` (`Id`, `Engleski`, `Srpski`, `Opis`) VALUES
(2, 'translate', 'prevesti', ' glagol'),
(3, 'work', 'rad', ' imenica'),
(4, 'pray', 'moliti', ' glagol'),
(5, 'see', 'videti', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recnik`
--
ALTER TABLE `recnik`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recnik`
--
ALTER TABLE `recnik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
