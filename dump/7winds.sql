-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2016 at 08:19 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `7winds`
--

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE IF NOT EXISTS `tree` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `name`, `parent`) VALUES
(1, 'A0', NULL),
(2, 'B3', 8),
(3, 'C3', 15),
(4, 'A4', 10),
(5, 'B0', NULL),
(7, 'C4', 3),
(8, 'B2', 20),
(9, 'C1', 13),
(10, 'A3', 14),
(11, 'B4', 2),
(12, 'B5', 11),
(13, 'C0', NULL),
(14, 'A2', 18),
(15, 'C2', 9),
(16, 'A5', 4),
(18, 'A1', 1),
(19, 'D0', NULL),
(20, 'B1', 5),
(21, 'A2-2', 18),
(22, 'A4-2', 10),
(23, 'C1-2', 13),
(24, 'B4-2', 2),
(25, 'B4-3', 2),
(26, 'A1-2', 1),
(27, 'C1-3', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
