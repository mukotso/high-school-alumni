-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2021 at 07:57 PM
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
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnidetails`
--

DROP TABLE IF EXISTS `alumnidetails`;
CREATE TABLE IF NOT EXISTS `alumnidetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` int(255) NOT NULL,
  `adm_no` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `photo_file_name` varchar(255) NOT NULL,
  `cv_file_name` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_number` int(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `admission_number` int(100) NOT NULL,
  `completion_year` int(100) NOT NULL,
  `tel` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `id_number`, `gender`, `admission_number`, `completion_year`, `tel`, `address`, `city`, `password`) VALUES
(1, 'kelvin mukotso', 'kelvinmukotso@gmail.com', 23456782, 'Female', 3012, 2017, 790345587, '3172', 'kakamega', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(2, 'brenda', 'mukotso@gmail.com', 89898989, 'Female', 8907, 3467, 790345587, '3172', 'kakamega', 'e5e9b41c8f1ad39ffb22df4a7aa7d876'),
(3, 'test ', 'test@gmail.com', 67687654, 'Male', 2345, 2016, 790345587, '3172', 'kakamega', '098f6bcd4621d373cade4e832627b4f6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
