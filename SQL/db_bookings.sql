-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2017 at 09:05 PM
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
  `date` date NOT NULL,
  `time` varchar(11) NOT NULL,
  `place` varchar(100) NOT NULL,
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
  `phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `name`, `date`, `time`, `place`, `CASize`, `CAPages`, `CAQuality`, `FASize`, `FAPages`, `FAQuality`, `thankCardSize`, `thankCardQuality`, `wedThankCardCount`, `homeThankCardCount`, `email`, `phone`) VALUES
(13, 'Sumudu', '2017-06-14', '0', 'rtrtrtrtrtda', 'Malin3123123da', 323, 'NG', '3123123', 21, 'Bad rt', '123123', 'Bad', 32, 32, '', ''),
(12, 'Wasaantha', '2012-01-12', '0', 'rtrtrtrtrtda', 'Malin3123123da', 323, 'NG', '3123123', 21, 'Bad rt', '123123', 'Bad', 32, 32, '', ''),
(14, 'Anurudda', '2017-06-14', 'night', 'rtrtrtrtrtda', 'Malin3123123da', 323, 'NG', '3123123', 21, 'Bad rt', '123123', 'Bad', 32, 32, '', ''),
(16, 'sumudu', '2017-06-25', 'day', 'Sirimali', 'day', 23, 'day', 'day', 33, 'day', 'day', 'day', 100, 100, '', '');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
