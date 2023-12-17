-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2023 at 02:27 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goober.avi`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`) VALUES
(1, 'noway'),
(2, 'zun'),
(3, 'jeff kidney'),
(4, 'sun tshoo'),
(0, 'placeholder');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `author` int NOT NULL,
  `length` int NOT NULL,
  `rating` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `author`, `length`, `rating`) VALUES
(1, 'diariaryie of a wimpy gregory', 3, 2, 4),
(2, 'the art of war', 4, 31, 0);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

DROP TABLE IF EXISTS `movie`;
CREATE TABLE IF NOT EXISTS `movie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `author` int NOT NULL,
  `length` int NOT NULL,
  `rating` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `author`, `length`, `rating`) VALUES
(1, 'morbius', 1, 6240, 8),
(2, 'angry birb', 0, 5820, 5);

-- --------------------------------------------------------

--
-- Table structure for table `ok`
--

DROP TABLE IF EXISTS `ok`;
CREATE TABLE IF NOT EXISTS `ok` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `author` int NOT NULL,
  `length` int NOT NULL,
  `rating` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `ok`
--

INSERT INTO `ok` (`id`, `name`, `author`, `length`, `rating`) VALUES
(1, 'an eternity more scarlet than red', 0, 31, 3),
(2, 'A soul as Red as a Ground cherry', 0, 151, 4),
(3, 'Apparitions Stalk the Night', 0, 117, 4),
(4, 'Lunate Elf', 0, 177, 3),
(5, 'Tomboyish Girl in Love', 0, 183, 6),
(6, 'Shanghai Teahouse ~ Chinese Tea', 0, 243, 4),
(7, 'Shanghai Alice of Meiji 17', 0, 196, 7),
(8, 'voile', 0, 0, 9),
(9, 'B4', 0, 0, 6),
(10, 'S5', 0, 0, 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
