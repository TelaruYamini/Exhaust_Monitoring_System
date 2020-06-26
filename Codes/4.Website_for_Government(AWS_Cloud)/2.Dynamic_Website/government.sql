-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 01:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `government`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `Name` int(1) DEFAULT NULL,
  `CO` decimal(3,2) DEFAULT NULL,
  `NO2` int(1) DEFAULT NULL,
  `PM_Value` decimal(4,2) DEFAULT NULL,
  `AQI_CO` int(1) DEFAULT NULL,
  `AQI_NO2` int(1) DEFAULT NULL,
  `AQI_PM_Value` int(3) DEFAULT NULL,
  `Fine` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`Name`, `CO`, `NO2`, `PM_Value`, `AQI_CO`, `AQI_NO2`, `AQI_PM_Value`, `Fine`) VALUES
(0, '0.00', 0, '36.00', 0, 0, 145, 50000),
(2, '1.00', 0, '46.00', 7, 0, 183, 50000),
(1, '0.00', 0, '33.00', 5, 0, 131, 0),
(2, '1.00', 0, '45.00', 7, 0, 178, 50000),
(1, '0.00', 0, '29.00', 5, 0, 115, 0),
(0, '0.00', 0, '33.00', 0, 0, 132, 0),
(1, '0.00', 0, '27.00', 5, 0, 107, 0),
(2, '1.00', 0, '43.00', 7, 0, 171, 50000),
(0, '0.00', 0, '31.00', 0, 0, 122, 0),
(0, '0.00', 0, '29.00', 0, 0, 115, 0),
(1, '0.00', 0, '26.00', 5, 0, 102, 0),
(2, '1.00', 0, '42.00', 7, 0, 166, 50000),
(2, '1.00', 0, '39.00', 6, 0, 156, 50000),
(0, '0.00', 0, '28.00', 0, 0, 110, 0),
(1, '0.00', 0, '25.00', 5, 1, 99, 0),
(1, '1.00', 0, '24.00', 5, 4, 96, 0),
(0, '0.00', 0, '26.00', 0, 0, 105, 0),
(2, '1.00', 0, '37.00', 6, 0, 146, 50000),
(0, '0.00', 0, '25.00', 0, 0, 101, 0),
(1, '1.00', 0, '22.00', 5, 4, 89, 0),
(2, '1.00', 0, '34.00', 6, 0, 134, 0),
(2, '0.61', 0, '58.00', 6, 0, 235, 75000),
(1, '0.50', 0, '28.00', 5, 0, 115, 0),
(0, '0.64', 0, '36.28', 0, 0, 145, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `user_authentication`
--

CREATE TABLE `user_authentication` (
  `Username` varchar(17) DEFAULT NULL,
  `Password` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_authentication`
--

INSERT INTO `user_authentication` (`Username`, `Password`) VALUES
('abc', 'xx'),
('abc_yagna', '@!65'),
('nangunuri_rachana', 'rasna'),
('neha_nelly', '3neha@'),
('yamini_t', 'yam23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
