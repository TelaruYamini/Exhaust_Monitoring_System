-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 01:45 PM
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
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `Name` varchar(30) NOT NULL,
  `CO` double NOT NULL,
  `NO2` double NOT NULL,
  `PM_Value` double NOT NULL,
  `AQI_CO` double NOT NULL,
  `AQI_NO2` double NOT NULL,
  `AQI_PM2.5` double NOT NULL,
  `AQI_Site` double NOT NULL,
  `Fine` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`Name`, `CO`, `NO2`, `PM_Value`, `AQI_CO`, `AQI_NO2`, `AQI_PM2.5`, `AQI_Site`, `Fine`) VALUES
('Civic', 0, 0, 36, 0, 0, 145, 145, 50000),
('Monash', 1, 0, 46, 7, 0, 183, 183, 50000),
('Florey', 0, 0, 33, 5, 0, 131, 131, 0),
('Monash', 1, 0, 45, 7, 0, 178, 178, 50000),
('Florey', 0, 0, 29, 5, 0, 115, 115, 0),
('Civic', 0, 0, 33, 0, 0, 132, 132, 0),
('Florey', 0, 0, 27, 5, 0, 107, 107, 0),
('Monash', 1, 0, 43, 7, 0, 171, 171, 50000),
('Civic', 0, 0, 31, 0, 0, 122, 122, 0),
('Civic', 0, 0, 29, 0, 0, 115, 115, 0),
('Florey', 0, 0, 26, 5, 0, 102, 102, 0),
('Monash', 1, 0, 42, 7, 0, 166, 166, 50000),
('Monash', 1, 0, 39, 6, 0, 156, 156, 50000),
('Civic', 0, 0, 28, 0, 0, 110, 110, 0),
('Florey', 0, 0, 25, 5, 1, 99, 99, 0),
('Florey', 1, 0, 24, 5, 4, 96, 96, 0),
('Civic', 0, 0, 26, 0, 0, 105, 105, 0),
('Monash', 1, 0, 37, 6, 0, 146, 146, 50000),
('Civic', 0, 0, 25, 0, 0, 101, 101, 0),
('Florey', 1, 0, 22, 5, 4, 89, 89, 0),
('Monash', 1, 0, 34, 6, 0, 134, 134, 0),
('Monash', 0, 0, 58, 6, 0, 235, 235, 75000),
('Florey ', 0, 0, 28, 5, 0, 115, 115, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
