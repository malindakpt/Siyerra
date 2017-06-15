-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 03:01 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dateW` date NOT NULL,
  `timeW` varchar(11) NOT NULL,
  `placeW` varchar(100) NOT NULL,
  `CASize` varchar(100) NOT NULL,
  `CAPages` int(11) NOT NULL,
  `CAQuality` varchar(100) NOT NULL,
  `FASize` varchar(100) NOT NULL,
  `FAPages` int(11) NOT NULL,
  `FAQuality` varchar(100) NOT NULL,
  `thankCardSize` varchar(100) NOT NULL,
  `thankCardQuality` varchar(100) NOT NULL,
  `wedThankCardCount` int(11) NOT NULL,
  `homeThankCardCount` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dateH` date NOT NULL,
  `timeH` varchar(11) NOT NULL,
  `placeH` varchar(100) NOT NULL,
  `PSSize` varchar(100) NOT NULL,
  `PSPages` int(11) NOT NULL,
  `PSQuality` varchar(100) NOT NULL,
  `VidQuality` varchar(100) NOT NULL,
  `VidNoOfCam` varchar(11) NOT NULL,
  `VidType` varchar(100) NOT NULL,
  `Advance1` int(11) NOT NULL,
  `Advance2` int(11) NOT NULL,
  `Advance3` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `IncludeFA` varchar(5) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `IncludeDrone` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `name`, `dateW`, `timeW`, `placeW`, `CASize`, `CAPages`, `CAQuality`, `FASize`, `FAPages`, `FAQuality`, `thankCardSize`, `thankCardQuality`, `wedThankCardCount`, `homeThankCardCount`, `email`, `phone`, `dateH`, `timeH`, `placeH`, `PSSize`, `PSPages`, `PSQuality`, `VidQuality`, `VidNoOfCam`, `VidType`, `Advance1`, `Advance2`, `Advance3`, `Total`, `Comments`, `IncludeFA`, `Address`, `IncludeDrone`) VALUES
(34, 'Anurudda3', '2017-09-04', 'Day', 'Colombo', '12*23', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, 'malinda.kumarasinghe@facebook.com', '0771141198', '2017-09-05', 'Day', 'Kirindawa', '12*23', 60, 'Story Book', 'blueray', '3', 'wed', 677, 677, 677, 677, 'Commmmmm', 'false', 'Kanadulla 3', ''),
(32, 'Anurudda P', '2017-09-04', 'Day', 'Colombo', '12*23', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, 'oeijro', 'ojoij', '2017-09-05', 'Day', 'Kirindawa', '12*23', 60, 'Story Book', 'blueray', '3', 'wed', 677, 677, 677, 677, 'Commmmmm', 'true', 'Kanadulla', ''),
(33, 'Anurudda1', '2017-09-04', 'Day', 'Colombo', '12*23', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, 'oeijro', 'ojoij', '2017-09-05', 'Day', 'Kirindawa', '12*23', 60, 'Story Book', 'blueray', '3', 'wed', 677, 677, 677, 677, 'Commmmmm', 'false', 'Kanadulla', ''),
(35, 'Wasantha Ayya', '2017-09-04', 'Day', 'Colombo', '12*23', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, 'malinda.kumarasinghe@facebook.com', '0771141198', '2017-09-05', 'Day', 'Kirindawa', '12*23', 60, 'Story Book', 'blueray', 'wedHome', 'pre', 677, 677, 677, 677, 'Commmmmm', 'false', 'Kanadulla 3', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
