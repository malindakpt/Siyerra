-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 01:52 AM
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
  `dateH` date DEFAULT NULL,
  `timeH` varchar(11) NOT NULL,
  `placeH` varchar(100) NOT NULL,
  `PSSize` varchar(100) NOT NULL,
  `PSPages` int(11) NOT NULL,
  `PSQuality` varchar(100) NOT NULL,
  `VidQuality` varchar(100) NOT NULL,
  `VidNoOfCam` varchar(11) NOT NULL,
  `VidType` varchar(100) NOT NULL,
  `Advance1` int(11) NOT NULL DEFAULT '0',
  `Advance2` int(11) NOT NULL DEFAULT '0',
  `Advance3` int(11) NOT NULL DEFAULT '0',
  `Total` int(11) NOT NULL DEFAULT '0',
  `Comments` varchar(500) NOT NULL,
  `IncludeFA` varchar(5) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `IncludeDrone` varchar(5) NOT NULL,
  `NameG` varchar(100) NOT NULL,
  `EmailG` varchar(100) NOT NULL,
  `PhoneG` varchar(100) NOT NULL,
  `ThankCardSizeH` varchar(100) NOT NULL,
  `ThankCardQualityH` varchar(100) NOT NULL,
  `Transport` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `name`, `dateW`, `timeW`, `placeW`, `CASize`, `CAPages`, `CAQuality`, `FASize`, `FAPages`, `FAQuality`, `thankCardSize`, `thankCardQuality`, `wedThankCardCount`, `homeThankCardCount`, `email`, `phone`, `dateH`, `timeH`, `placeH`, `PSSize`, `PSPages`, `PSQuality`, `VidQuality`, `VidNoOfCam`, `VidType`, `Advance1`, `Advance2`, `Advance3`, `Total`, `Comments`, `IncludeFA`, `Address`, `IncludeDrone`, `NameG`, `EmailG`, `PhoneG`, `ThankCardSizeH`, `ThankCardQualityH`, `Transport`) VALUES
(43, 'M1dsds', '2017-06-16', 'N/A', '', '8 x 16', 50, 'Magazine', '8 x 16', 40, 'Magazine', '4 x 8', 'Quality 2', 1000, 50, 'm@', 'm7', '2017-06-29', 'N/A', '', '8 x 16', 60, 'Story Book', 'N/A', '1cam', 'wed', 0, 0, 0, 0, 'addcomment', 'true', 'Address', 'true', 'B1', 'b@', 'B77', '4 x 6', 'Quality 1', '4000'),
(45, 'qqWWWWWW', '2017-06-09', 'Day', '', '8 x 16', 50, 'N/A', '10 x 24', 40, 'N/A', '4 x 8', 'Single Side Matte', 100, 100, '', '', '2017-06-14', 'Night', '', '8 x 16', 60, 'N/A', 'N/A', '1cam', 'wed', 0, 0, 0, 0, '', 'true', '', 'true', 'BBBBBBBBBBBBB', '', '', '4 x 8', 'Single Side Matte', '12222'),
(46, 'sdsd', '2017-06-15', 'N/A', '', '8 x 16', 50, 'N/A', '10 x 24', 40, 'N/A', '4 x 8', 'Single Side Matte', 100, 100, '', '', '2010-01-01', 'N/A', '', '8 x 16', 60, 'N/A', 'N/A', '1cam', 'wed', 0, 0, 0, 0, '', 'true', '', 'true', 'asas', '', '', '4 x 8', 'Single Side Matte', ''),
(47, 'yyyy', '2017-06-07', 'N/A', '', '8 x 16', 50, 'N/A', '10 x 24', 40, 'N/A', '4 x 8', 'Single Side Matte', 100, 100, 'iuy', '', '2010-01-01', 'N/A', '', '8 x 16', 60, 'N/A', 'N/A', '1cam', 'wed', 0, 0, 0, 0, '', 'true', '', 'true', 'yyyy', '', '', '4 x 8', 'Single Side Matte', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserName`, `Password`) VALUES
('a', 'a'),
('b', 'b');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
