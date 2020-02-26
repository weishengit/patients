-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 04:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbhospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpatients`
--

CREATE TABLE `tblpatients` (
  `PID` int(11) NOT NULL,
  `PName` varchar(55) NOT NULL,
  `Address` varchar(155) NOT NULL,
  `Contact` varchar(25) NOT NULL,
  `Time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpatients`
--

INSERT INTO `tblpatients` (`PID`, `PName`, `Address`, `Contact`, `Time`) VALUES
(1, 'Jules Daryl Diego', '123 Street', '0975123423', '9:00AM'),
(2, 'Popo', 'Dog House', 'woofwoof', '12:00PM'),
(3, 'Jaymart Judah', 'Homeless', '911', '1:00PM'),
(4, 'JJ', 'Abrams', 'Frank', '3:00PM'),
(5, 'Batang', 'Pasaway', '222222', '2:00AM'),
(6, 'Almost', 'Done', 'Home', '10:55PM'),
(7, 'Test', 'Mode', 'Left', '11:20PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblpatients`
--
ALTER TABLE `tblpatients`
  ADD PRIMARY KEY (`PID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblpatients`
--
ALTER TABLE `tblpatients`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
