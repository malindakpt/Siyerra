-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 06:37 AM
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
  `PhoneG` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `name`, `dateW`, `timeW`, `placeW`, `CASize`, `CAPages`, `CAQuality`, `FASize`, `FAPages`, `FAQuality`, `thankCardSize`, `thankCardQuality`, `wedThankCardCount`, `homeThankCardCount`, `email`, `phone`, `dateH`, `timeH`, `placeH`, `PSSize`, `PSPages`, `PSQuality`, `VidQuality`, `VidNoOfCam`, `VidType`, `Advance1`, `Advance2`, `Advance3`, `Total`, `Comments`, `IncludeFA`, `Address`, `IncludeDrone`, `NameG`, `EmailG`, `PhoneG`) VALUES
(36, 'Ranathisata', '2017-12-01', 'Day', 'Colombo', '12*23', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, 'malinda.kumarasinghe@facebook.com', '0771141198', '2017-12-02', 'Day', 'Kirindawa', '12*23', 60, 'Story Book', 'hd', '3cam', 'preWedHome', 677, 677, 677, 677, 'Commmmmmn akjshda s  kajsdhjkas hdkja  aksjdajhsdj a kahsdkjahs   akjsdhkajshda  akjshdkajhsdkas  jkashd', 'true', 'Kanadulla 3', 'true', '', '0', ''),
(39, 'MR Wasantha Ayya', '2017-09-04', 'Day', 'Colombo', '', 50, '', '', 40, '', '12R', 'Dark', 100, 100, 'malinda.kumarasinghe@facebook.com', '0771141198', '2017-09-05', 'Day', 'Kirindawa', '', 60, 'Story Book', 'blueray', '', 'pre', 677, 677, 677, 677, 'Commmmmm', 'true', 'Kanadulla 3', 'false', '', '0', ''),
(40, 'MAlinda Kumatra', '2017-06-15', 'N/A', 'Colombo', '8 x 16', 50, 'N/A', '8 x 16', 40, 'N/A', '12R', 'Dark', 100, 100, 'malindakpt@gmail.com', '', '2017-06-23', 'N/A', 'Kirindawa', '8 x 16', 60, 'N/A', 'N/A', '1cam', 'wed', 0, 0, 0, 0, '', 'true', '', 'true', '', '0', ''),
(38, 'Mihil', '2017-01-01', 'Day', 'Colombo', '40*30', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, '9182379 io', 'oiuoiuo', '2017-01-02', 'Day', 'Borella', '12*23', 60, 'Story Book', 'N/A', '1cam', 'wed', 122, 122, 1212, 122222, 'asd', 'false', 'Kirillawala', 'false', '', '0', ''),
(42, 'Malinda', '2017-06-15', 'N/A', '', '8 x 16', 50, 'N/A', '8 x 16', 40, 'N/A', '4 x 6', 'Quality 1', 100, 100, 'malindakpt@gmail.com', '0771141194', '2017-06-06', 'N/A', '', '8 x 16', 60, 'N/A', 'N/A', '1cam', 'wed', 0, 0, 0, 0, '', 'true', 'Kirindawa Kuliyapitiya', 'true', 'Sumudu', 'sumudu@gmail.com', '07760924471');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
