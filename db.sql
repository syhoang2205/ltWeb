-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8887
-- Generation Time: Oct 15, 2017 at 01:03 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btcn05`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Lê S? Hoàng', 'syhoang22@gmail.com', '$2y$10$JYn7xUCCs5MRMTiG0To3jOkAoSj9dRF0pzGlT.ZGJRrpZl1e1f.le'),
(5, 'lê hoàng', 'hoang123@gmail.com', '$2y$10$q3vYxCyrfHoF5Bsn/gwNAeG2Q6Urpz5Bn/V8ghz440QcIlgCmvDz.'),
(6, '123', '123@gmail.com', '$2y$10$yPOceLxN92SuOL8RXqE6G.ubAYVxa3qZK4rP0XJ1X2bZiVqMGEyAe'),
(9, '321', '123321@gmail.com', '$2y$10$ILTMbua/5f1v2Iic4exH9Onp4Exfu.3wtjA9aZsVnI61Rs67L6mo.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueEmail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
