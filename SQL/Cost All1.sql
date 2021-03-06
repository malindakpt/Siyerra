-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2017 at 07:51 AM
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
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `ID` int(11) NOT NULL,
  `Property` varchar(1000) NOT NULL,
  `Value` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`ID`, `Property`, `Value`) VALUES
(1, 'AlbumSizes', '	<option value="8 x 16">8 x 16</option>  							<option value="8 x 20">8 x 20</option> 		 							<option value="10 x 15">10 x 15</option>  							<option value="10 x 20">10 x 20</option>  							<option value="10 x 24">10 x 24</option>  							<option value="10 x 28">10 x 28</option>  							<option value="12 x 24">12 x 24</option>  							<option value="12 x 30">12 x 30</option>  							<option value="15 x 24">15 x 24</option>  							<option value="16 x 24">16 x 24</option>  							<option value="17 x 24">17 x 24</option> <option value="18 x 24">18 x 24</option> '),
(2, 'ThankCardSizes', '<option value="4 x 8">4 x 8</option>  					<option value="4 x 12">4 x 12</option>  					<option value="5 x 8">5 x 8</option>  					<option value="5 x 10">5 x 10</option>  					<option value="6 x 6">6 x 6</option> '),
(3, 'EnlargementSizes', '<option value="15 x 24">15 x 24</option>  								<option value="16 x 24">16 x 24</option>  								<option value="17 x 24">17 x 24</option> ');

-- --------------------------------------------------------

--
-- Table structure for table `costmodel`
--

CREATE TABLE `costmodel` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Cost` varchar(20) NOT NULL,
  `Price` int(11) NOT NULL,
  `Count` int(11) NOT NULL,
  `CountCost` int(11) NOT NULL,
  `CountPrice` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costmodel`
--

INSERT INTO `costmodel` (`ID`, `UserName`, `Model`, `Cost`, `Price`, `Count`, `CountCost`, `CountPrice`) VALUES
(3, 'demo', 'Magazine', '1214', 4000, 0, 0, 0),
(4, 'demo', 'Enlargement', '120', 9000, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
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
  `Album1Type` varchar(20) NOT NULL,
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
  `Enlarge1Size` varchar(20) NOT NULL,
  `Enlarge2Size` varchar(20) NOT NULL,
  `Enlarge3Size` varchar(20) NOT NULL,
  `Enlarge1Count` varchar(20) NOT NULL,
  `Enlarge2Count` varchar(20) NOT NULL,
  `Enlarge3Count` varchar(20) NOT NULL,
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
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`ID`, `name`, `email`, `phone`, `NameG`, `EmailG`, `PhoneG`, `Address`, `dateW`, `timeW`, `placeW`, `dateH`, `timeH`, `placeH`, `CAQuality`, `Album1Type`, `CASize`, `CAPages`, `FAQuality`, `Album2Type`, `FASize`, `FAPages`, `PSQuality`, `PSSize`, `PSPages`, `IncludeFA`, `Enlarge1`, `Enlarge2`, `Enlarge3`, `Enlarge1Size`, `Enlarge2Size`, `Enlarge3Size`, `Enlarge1Count`, `Enlarge2Count`, `Enlarge3Count`, `thankCardQuality`, `thankCardSize`, `wedThankCardCount`, `ThankCardQualityH`, `ThankCardSizeH`, `homeThankCardCount`, `VidQuality`, `VidNoOfCam`, `VidType`, `IncludeDrone`, `Total`, `Transport`, `Advance1`, `Advance2`, `Advance3`, `Comments`) VALUES
(54, 'Malinda', '12312', '1231231', '123123123', '', '', '', '2017-08-24', 'N/A', '', '2010-01-01', 'N/A', '', 'Magazine', 'Wedding', '8 x 20', '12', 'N/A', 'Homecoming', '0', '', 'N/A', '0', '', 'true', '1 Wedding couple enlargement 20x30 with frame', '2 Wedding couple enlargement 12x18 with frame', '2 Group enlargement 12x18 with frame', '', '', '', '', '', '', 'N/A', 'N/A', '', 'N/A', 'N/A', '', 'N/A', 'N/A', 'N/A', 'true', '0', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `StudioName` varchar(100) NOT NULL,
  `TableName` varchar(100) NOT NULL,
  `ExpireDate` date DEFAULT NULL,
  `Cost` varchar(10) NOT NULL,
  `Enlargements` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserName`, `Password`, `StudioName`, `TableName`, `ExpireDate`, `Cost`, `Enlargements`) VALUES
('demo', '1234', 'Demo Studio', 'demo', '2017-09-21', '8500', '1 Wedding couple enlargement 20x30 with frame####2 Wedding couple enlargement 12x18 with frame####2 Group enlargement 12x18 with frame'),
('siyeraa1234', '1234', 'Siyeraa Studio', 'siyeraa', '2018-08-08', '6000', '1 Wedding couple enlargement 20x30 with frame####2 Wedding couple enlargement 12x18 with frame####2 Group enlargement 12x18 with frame');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `costmodel`
--
ALTER TABLE `costmodel`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `costmodel`
--
ALTER TABLE `costmodel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
