-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2017 at 05:35 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2376393_db_bookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `abc`
--

CREATE TABLE `abc` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `NameG` varchar(100) NOT NULL,
  `EmailG` varchar(100) NOT NULL,
  `PhoneG` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `dateW` date NOT NULL,
  `timeW` varchar(20) NOT NULL,
  `placeW` varchar(100) NOT NULL,
  `dateH` date NOT NULL,
  `timeH` varchar(20) NOT NULL,
  `placeH` varchar(100) NOT NULL,
  `CAQuality` varchar(100) NOT NULL,
  `CASize` varchar(20) NOT NULL,
  `CAPages` varchar(20) NOT NULL,
  `FAQuality` varchar(100) NOT NULL,
  `Album2Type` varchar(20) NOT NULL,
  `FASize` varchar(20) NOT NULL,
  `FAPages` varchar(20) NOT NULL,
  `PSQuality` varchar(100) NOT NULL,
  `PSSize` varchar(20) NOT NULL,
  `PSPages` varchar(20) NOT NULL,
  `IncludeFA` varchar(20) NOT NULL,
  `Enlarge1` varchar(200) NOT NULL,
  `Enlarge2` varchar(200) NOT NULL,
  `Enlarge3` varchar(200) NOT NULL,
  `thankCardQuality` varchar(100) NOT NULL,
  `thankCardSize` varchar(20) NOT NULL,
  `wedThankCardCount` varchar(20) NOT NULL,
  `ThankCardQualityH` varchar(100) NOT NULL,
  `ThankCardSizeH` varchar(20) NOT NULL,
  `homeThankCardCount` varchar(20) NOT NULL,
  `VidQuality` varchar(100) NOT NULL,
  `VidNoOfCam` varchar(20) NOT NULL,
  `VidType` varchar(100) NOT NULL,
  `IncludeDrone` varchar(20) NOT NULL,
  `Total` varchar(20) NOT NULL,
  `Transport` varchar(20) NOT NULL,
  `Advance1` varchar(20) NOT NULL,
  `Advance2` varchar(20) NOT NULL,
  `Advance3` varchar(20) NOT NULL,
  `Comments` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abc`
--
ALTER TABLE `abc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
