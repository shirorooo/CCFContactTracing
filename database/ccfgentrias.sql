-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 12:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccfgentrias`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacttracing`
--

CREATE TABLE `contacttracing` (
  `CID` int(45) NOT NULL,
  `LName` varchar(45) DEFAULT NULL,
  `FName` varchar(45) DEFAULT NULL,
  `MI` varchar(45) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `CNum` varchar(45) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Temperature` float DEFAULT NULL,
  `Date` varchar(45) DEFAULT NULL,
  `Time` varchar(45) DEFAULT NULL,
  `Service` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacttracing`
--

INSERT INTO `contacttracing` (`CID`, `LName`, `FName`, `MI`, `age`, `CNum`, `Address`, `Temperature`, `Date`, `Time`, `Service`) VALUES
(1, 'Andres', 'Ricco Rowell', 'O.', 21, '0975336619', 'Blk. 34 Lot 4, Diamond St., Holiday Homes, Biclatan, General Trias, Cavite', 36.2, '2021-02-13', '01:40:23pm', '3rd Service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacttracing`
--
ALTER TABLE `contacttracing`
  ADD PRIMARY KEY (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacttracing`
--
ALTER TABLE `contacttracing`
  MODIFY `CID` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
