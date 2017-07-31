-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 06:18 PM
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
-- Table structure for table `sireraa`
--

CREATE TABLE `sireraa` (
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
-- Dumping data for table `sireraa`
--

INSERT INTO `sireraa` (`ID`, `name`, `email`, `phone`, `NameG`, `EmailG`, `PhoneG`, `Address`, `dateW`, `timeW`, `placeW`, `dateH`, `timeH`, `placeH`, `CAQuality`, `Album1Type`, `CASize`, `CAPages`, `FAQuality`, `Album2Type`, `FASize`, `FAPages`, `PSQuality`, `PSSize`, `PSPages`, `IncludeFA`, `Enlarge1`, `Enlarge2`, `Enlarge3`, `thankCardQuality`, `thankCardSize`, `wedThankCardCount`, `ThankCardQualityH`, `ThankCardSizeH`, `homeThankCardCount`, `VidQuality`, `VidNoOfCam`, `VidType`, `IncludeDrone`, `Total`, `Transport`, `Advance1`, `Advance2`, `Advance3`, `Comments`) VALUES
(43, 'C Wasantha Kumata', 'malindakpt@gmail.com', '0779879879', 'Sumudu Nisansala', 'asd@kasjhdjkas.vom', '879879878979', 'Kanadulla Kuiyapitiya', '2017-06-16', 'Day', 'Maradagahamula', '2017-06-29', 'Day', 'Wattala', 'Magazine', '', '8 x 16', '50', 'Magazine', 'Engagement', '15 x 24', '400', 'Sory Book', '8 x 16', '60', 'true', '', '', '', 'Single Side Matte', '4 x 8', '1000', 'Double Side Matte', '4 x 12', '50', 'blueray', '1cam', 'wed', 'true', '130000', '4000', '2000', '0', '0', 'addcomment'),
(49, 'C Malindak', 'malindakpt@gmail.com', '0779879879', 'Sumudu Nisansala', 'asd@kasjhdjkas.vom', '879879878979', 'Kanadulla Kuiyapitiya', '2017-06-16', 'Day', 'Maradagahamula', '2017-06-29', 'Day', 'Wattala', 'Magazine', '', '8 x 16', '50', 'Magazine', 'Engagement', '15 x 24', '400', 'Sory Book', '8 x 16', '60', 'true', '', '', '', 'Single Side Matte', '4 x 8', '1000', 'Double Side Matte', '4 x 12', '50', 'blueray', '1cam', 'wed', 'true', '130000', '4000', '2000', '0', '0', 'addcomment'),
(46, 'Csdsd', '', '', 'asas', '', '', '', '2017-06-15', 'N/A', '', '2010-01-01', 'N/A', '', 'N/A', '', '8 x 16', '50', 'N/A', '', '10 x 24', '40', 'N/A', '8 x 16', '60', 'true', '', '', '', 'Single Side Matte', '4 x 8', '100', 'Single Side Matte', '4 x 8', '100', 'N/A', '1cam', 'wed', 'true', '0', '', '0', '0', '0', ''),
(47, 'C yyyy', 'iuy', '', 'yyyy', '', '', '', '2017-06-07', 'N/A', 'Kanadulla', '2017-07-27', 'N/A', 'Ragama', 'N/A', '', '8 x 16', '50', 'N/A', '', '10 x 24', '40', 'N/A', '8 x 16', '60', 'true', 'E11', 'E21', 'E31', 'Single Side Matte', '4 x 8', '100', 'Single Side Matte', '4 x 8', '100', 'N/A', '1cam', 'wed', 'true', '0', '', '0', '0', '0', ''),
(48, 'C Salinda', '', '', 'weqwe', '', '', '', '2017-07-15', 'N/A', '', '2010-01-01', 'N/A', '', 'N/A', '', '8 x 16', '50', 'N/A', 'Homecoming', '10 x 24', '40', 'N/A', '8 x 16', '60', 'true', '1 Wedding couple enlargement 20x30 with frame', '2 Wedding couple enlargement 12x18 with frame', '2 Group enlargement 12x18 with frame', 'N/A', '4 x 8', '100', 'N/A', '4 x 8', '100', 'N/A', '1cam', 'wed', 'true', '0', '', '0', '0', '0', ''),
(50, 'AA', '', '', 'CC', '', '', '', '2017-07-12', 'N/A', '', '2010-01-01', 'N/A', '', 'N/A', 'Wedding', '0', '', 'N/A', 'Homecoming', '0', '', 'N/A', '0', '', 'true', '1 Wedding couple enlargement 20x30 with frame', '2 Wedding couple enlargement 12x18 with fram', '2 Group enlargement 12x18 with frame', 'N/A', 'N/A', '', 'N/A', 'N/A', '', 'N/A', 'N/A', 'N/A', 'false', '0', '', '0', '0', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sireraa`
--
ALTER TABLE `sireraa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sireraa`
--
ALTER TABLE `sireraa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
