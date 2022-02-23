-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2022 at 08:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zerowaste`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

DROP TABLE IF EXISTS `donation`;
CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `contactNo` varchar(255) NOT NULL,
  `books` varchar(256) NOT NULL,
  `education` varchar(256) NOT NULL,
  `furniture` varchar(256) NOT NULL,
  `toys` varchar(256) NOT NULL,
  `cloths` varchar(256) NOT NULL,
  `sport` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `username`, `email`, `address`, `contactNo`, `books`, `education`, `furniture`, `toys`, `cloths`, `sport`) VALUES
(1, 'Mr. Dulakshitha E V P', 'pavanedirisngha2000@gmail.com', 'pavan imaduwa galle', '0719900021', 'b', 'e', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feddbacks`
--

DROP TABLE IF EXISTS `feddbacks`;
CREATE TABLE IF NOT EXISTS `feddbacks` (
  `uid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `messege` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `contact` varchar(16) NOT NULL,
  `identity` tinyint(4) NOT NULL COMMENT 'seller-1, Buyer-2',
  `ploythene` varchar(10) NOT NULL,
  `glass` varchar(10) NOT NULL,
  `husked` varchar(10) NOT NULL,
  `books` varchar(10) NOT NULL,
  `vehicle` varchar(10) NOT NULL,
  `electronic` varchar(10) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
