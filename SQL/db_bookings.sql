-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 11:11 PM
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
  `VidNoOfCam` int(11) NOT NULL,
  `VidType` varchar(100) NOT NULL,
  `Advance1` int(11) NOT NULL,
  `Advance2` int(11) NOT NULL,
  `Advance3` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `IncludeFA` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `name`, `dateW`, `timeW`, `placeW`, `CASize`, `CAPages`, `CAQuality`, `FASize`, `FAPages`, `FAQuality`, `thankCardSize`, `thankCardQuality`, `wedThankCardCount`, `homeThankCardCount`, `email`, `phone`, `dateH`, `timeH`, `placeH`, `PSSize`, `PSPages`, `PSQuality`, `VidQuality`, `VidNoOfCam`, `VidType`, `Advance1`, `Advance2`, `Advance3`, `Total`, `Comments`, `IncludeFA`) VALUES
(19, 'Malinda', '2017-06-01', 'Day', 'Kirindawa', '12*23', 12, '12*23', '12*23', 12, 'Story Book', '12R', 'Dark', 13, 13, 'malindakpt@gmail.com', '0771141194', '2017-06-02', 'Night', 'Kuliyapitiya', '', 0, '', '', 0, '', 0, 0, 0, 0, '', '0'),
(20, 'Shanaka', '2017-06-28', 'Night', 'Wattala', '40*30', 30, '40*30', '40*30', 34, 'Magazine Book', '12R', 'Light', 150, 150, 'shanaka@gmail.com', '9283729187349', '2017-06-24', 'Day', 'Kalpitiya', '', 0, '', '', 0, '', 0, 0, 0, 0, '', '0'),
(21, 'Malinda', '2017-06-01', 'Day', 'Kirindawa', '12*23', 12, '12*23', '12*23', 12, 'Story Book', '12R', 'Dark', 13, 13, 'malindakpt@gmail.com', '0771141194', '2017-06-02', 'Night', 'Kuliyapitiya', '', 0, '', '', 0, '', 0, 0, 0, 0, '', '0'),
(22, 'Warruna', '2017-03-01', 'N/A', 'HKJHK', '40*30', 123, '12*23', '12*23', 12, 'Magazine Book', '12R', 'Dark', 200, 200, 'waruna@gmail.com', '9879879', '2017-03-02', 'Night', 'sdfsdf', '', 0, '', '', 0, '', 0, 0, 0, 0, '', '0'),
(23, 'Aruna', '2017-02-01', 'Day', 'Colombo', '12*23', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, 'aroiuo', 'daksjd', '2017-02-02', 'Day', 'Kirindawa', '12*23', 60, 'Story Book', 'blueray', 3, 'wed', 0, 0, 0, 0, '', '0'),
(24, 'Jayasinghe', '2017-10-02', 'Day', 'Colombo', '12*23', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, 'alskdj', 'lkjlkj', '2017-10-03', 'Day', 'Kirindawa', '12*23', 60, 'Story Book', 'blueray', 3, 'wed', 300, 400, 500, 600, '', '0'),
(25, 'Tiron', '2017-09-04', 'Day', 'Colombo', '12*23', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, 'oeijro', 'ojoij', '2017-09-05', 'Day', 'Kirindawa', '12*23', 60, 'Story Book', 'blueray', 3, 'wed', 677, 677, 677, 677, 'Commmmmm', '0'),
(26, 'Su,udu', '2017-07-11', 'Day', 'Colombo', '12*23', 50, '12*23', '12*23', 40, 'Story Book', '12R', 'Dark', 100, 100, 'kjhj', 'khjkh', '2017-07-14', 'N/A', 'Kirindawa', '12*23', 60, 'Story Book', 'blueray', 3, 'wed', 123, 123, 123, 123, 'ADAD vom', 'false');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
