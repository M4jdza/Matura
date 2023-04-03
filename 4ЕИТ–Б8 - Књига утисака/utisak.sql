-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221119.dd915776f2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2023 at 12:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `knjiga_utisaka_b8`
--

-- --------------------------------------------------------

--
-- Table structure for table `utisak`
--

CREATE TABLE `utisak` (
  `Id` int(11) NOT NULL,
  `Ime` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Komentar` text NOT NULL,
  `Datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utisak`
--

INSERT INTO `utisak` (`Id`, `Ime`, `Email`, `Komentar`, `Datum`) VALUES
(1, 'Strahinja', 'strahinjasretovic04@gmail.com', ' 12345', '2023-04-03 22:31:50'),
(2, 'Strahinja', 'strahinjasretovic04@gmail.com', ' ', '2023-04-03 22:33:19'),
(3, 'Strahinja', 'strahinjasretovic04@gmail.com', ' ', '2023-04-03 22:37:06'),
(4, 'Strahinja', 'fickozvezda@gmail.com', ' ', '2023-04-03 22:43:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utisak`
--
ALTER TABLE `utisak`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utisak`
--
ALTER TABLE `utisak`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
