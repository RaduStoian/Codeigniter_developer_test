-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2019 at 03:20 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `name`, `description`, `date_time`) VALUES
(1, 'Movie Test 1', 'This is the description for Movie Test 1', '2019-08-17 00:00:00'),
(3, 'Movie Test 2', 'This is the description for Movie Test 2', '2019-08-17 21:10:49'),
(5, 'Movie test 3', 'description3', '2019-08-17 23:08:16'),
(9, '\"drop;;\'', '\";32123   xz\'', '2019-08-17 23:45:14'),
(8, 'The attack of the squirrels', 'dang those squirrels are scary', '2019-08-17 23:42:05'),
(10, 'Historical Movie', 'A movie about the history of Iran', '2019-08-17 23:56:13'),
(11, 'Inception', 'cool fglkjfgljkdfgl;k ', '2019-08-18 21:45:41'),
(12, 'Movie of the year', 'New year\'s eve surprise turns into a year round adventure into finding the lost arc of the machine people from space who made a sun beneath the earth\'s crust.', '2019-08-19 23:36:01'),
(13, 'Snakes on a plane', 'Horror movie', '2019-08-20 00:10:07'),
(14, 'A separation', 'Tragic film', '2019-08-20 01:06:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
