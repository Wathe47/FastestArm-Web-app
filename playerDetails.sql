-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql301.infinityfree.com
-- Generation Time: Jun 28, 2023 at 10:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34385571_baseball`
--

-- --------------------------------------------------------

--
-- Table structure for table `playerDetails`
--

CREATE TABLE `playerDetails` (
  `playerNo` int(11) NOT NULL,
  `name` varchar(25) DEFAULT '-',
  `gender` varchar(25) DEFAULT 'male',
  `faculty` varchar(25) DEFAULT '-',
  `batch` varchar(25) DEFAULT '-',
  `phone` varchar(25) DEFAULT '-',
  `speed` float DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playerDetails`
--
ALTER TABLE `playerDetails`
  ADD PRIMARY KEY (`playerNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playerDetails`
--
ALTER TABLE `playerDetails`
  MODIFY `playerNo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
