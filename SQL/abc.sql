-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2017 at 05:44 PM
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
(3, 'EnlargementSizes', '<option value="15 x 24">15 x 24</option>  								<option value="16 x 24">16 x 24</option>  								<option value="17 x 24">17 x 24</option> '),
(4, 'ThankCardQualities', '<option value="Single Side Matte">Single Side Matte</option> \r\n					<option value="Single Side Glossy">Single Side Glossy</option> \r\n					<option value="Double Side Matte">Double Side Matte</option> \r\n					<option value="Double Side Glossy">Double Side Glossy</option>'),
(5, 'AlbumQualities', '<option value="Magazine">Magazine</option> \n					<option value="Story Book">Story Book</option> '),
(6, 'VidQuality', '	<option value="Blueray">Blueray</option> \r\n					<option value="HD">HD</option> '),
(7, 'VidNoOfCam', '<option value="Use 1 Camera">Use 1 Camera</option> \n<option value="Use 2 Camera">Use 2 Camera</option> \n<option value="Use 3 Camera">Use 3 Camera</option>'),
(9, 'MiniAlbumSizes', '<option value="4 x 8">4 x 8</option>  					<option value="4 x 12">4 x 12</option>'),
(8, 'VidType', '<option value="Wedding Only">Wedding Only</option> \n<option value="Wedding and Homecoming">Wedding and Homecoming</option> \n<option value="Preshoot Only">Preshoot Only</option> \n<option value="Preshoot and Wedding">Preshoot and Wedding</option> \n<option value="Preshoot, Wedding and Homecoming">Preshoot, Wedding and Homecoming</option> '),
(10, 'SigBoardSizes', '<option value="15 x 24">15 x 24</option>  								<option value="16 x 24">16 x 24</option>  								');

-- --------------------------------------------------------

--
-- Table structure for table `costmodel`
--

CREATE TABLE `costmodel` (
  `ID` int(11) NOT NULL,
  `TableName` varchar(20) NOT NULL,
  `KeyVal` varchar(100) NOT NULL,
  `Version` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costmodel`
--

INSERT INTO `costmodel` (`ID`, `TableName`, `KeyVal`, `Version`) VALUES
(10749, 'demo', 'Story Book:17 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10748, 'demo', 'Story Book:17 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10747, 'demo', 'Story Book:17 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10746, 'demo', 'Story Book:17 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10745, 'demo', 'Story Book:17 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10744, 'demo', 'Story Book:16 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10742, 'demo', 'Story Book:16 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10743, 'demo', 'Story Book:16 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10741, 'demo', 'Story Book:16 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10740, 'demo', 'Story Book:16 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10738, 'demo', 'Story Book:15 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10739, 'demo', 'Story Book:15 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10737, 'demo', 'Story Book:15 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10736, 'demo', 'Story Book:15 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10733, 'demo', 'Story Book:12 x 30:Extra Page Cost?', '2017-08-20 17:11:38'),
(10734, 'demo', 'Story Book:12 x 30:Extra Page Price?', '2017-08-20 17:11:38'),
(10735, 'demo', 'Story Book:15 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10732, 'demo', 'Story Book:12 x 30:Fixed Price?', '2017-08-20 17:11:38'),
(10731, 'demo', 'Story Book:12 x 30:Fixed Cost?', '2017-08-20 17:11:38'),
(10729, 'demo', 'Story Book:12 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10730, 'demo', 'Story Book:12 x 30:Fixed Pages?', '2017-08-20 17:11:38'),
(10727, 'demo', 'Story Book:12 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10728, 'demo', 'Story Book:12 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10726, 'demo', 'Story Book:12 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10725, 'demo', 'Story Book:12 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10724, 'demo', 'Story Book:10 x 28:Extra Page Price?', '2017-08-20 17:11:38'),
(10723, 'demo', 'Story Book:10 x 28:Extra Page Cost?', '2017-08-20 17:11:38'),
(10722, 'demo', 'Story Book:10 x 28:Fixed Price?', '2017-08-20 17:11:38'),
(10721, 'demo', 'Story Book:10 x 28:Fixed Cost?', '2017-08-20 17:11:38'),
(10720, 'demo', 'Story Book:10 x 28:Fixed Pages?', '2017-08-20 17:11:38'),
(10719, 'demo', 'Story Book:10 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10717, 'demo', 'Story Book:10 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10718, 'demo', 'Story Book:10 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10716, 'demo', 'Story Book:10 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10715, 'demo', 'Story Book:10 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10714, 'demo', 'Story Book:10 x 20:Extra Page Price?', '2017-08-20 17:11:38'),
(10713, 'demo', 'Story Book:10 x 20:Extra Page Cost?', '2017-08-20 17:11:38'),
(10712, 'demo', 'Story Book:10 x 20:Fixed Price?', '2017-08-20 17:11:38'),
(10710, 'demo', 'Story Book:10 x 20:Fixed Pages?', '2017-08-20 17:11:38'),
(10711, 'demo', 'Story Book:10 x 20:Fixed Cost?', '2017-08-20 17:11:38'),
(10707, 'demo', 'Story Book:10 x 15:Fixed Price?', '2017-08-20 17:11:38'),
(10708, 'demo', 'Story Book:10 x 15:Extra Page Cost?', '2017-08-20 17:11:38'),
(10709, 'demo', 'Story Book:10 x 15:Extra Page Price?', '2017-08-20 17:11:38'),
(10706, 'demo', 'Story Book:10 x 15:Fixed Cost?', '2017-08-20 17:11:38'),
(10703, 'demo', 'Story Book:8 x 20:Extra Page Cost?', '2017-08-20 17:11:38'),
(10704, 'demo', 'Story Book:8 x 20:Extra Page Price?', '2017-08-20 17:11:38'),
(10705, 'demo', 'Story Book:10 x 15:Fixed Pages?', '2017-08-20 17:11:38'),
(10702, 'demo', 'Story Book:8 x 20:Fixed Price?', '2017-08-20 17:11:38'),
(10701, 'demo', 'Story Book:8 x 20:Fixed Cost?', '2017-08-20 17:11:38'),
(10696, 'demo', 'Story Book:8 x 16:Fixed Cost?', '2017-08-20 17:11:38'),
(10697, 'demo', 'Story Book:8 x 16:Fixed Price?', '2017-08-20 17:11:38'),
(10700, 'demo', 'Story Book:8 x 20:Fixed Pages?', '2017-08-20 17:11:38'),
(10699, 'demo', 'Story Book:8 x 16:Extra Page Price?', '2017-08-20 17:11:38'),
(10698, 'demo', 'Story Book:8 x 16:Extra Page Cost?', '2017-08-20 17:11:38'),
(10695, 'demo', 'Story Book:8 x 16:Fixed Pages?', '2017-08-20 17:11:38'),
(10691, 'demo', 'Magazine:18 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10692, 'demo', 'Magazine:18 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10693, 'demo', 'Magazine:18 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10694, 'demo', 'Magazine:18 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10690, 'demo', 'Magazine:18 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10689, 'demo', 'Magazine:17 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10688, 'demo', 'Magazine:17 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10687, 'demo', 'Magazine:17 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10685, 'demo', 'Magazine:17 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10686, 'demo', 'Magazine:17 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10684, 'demo', 'Magazine:16 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10683, 'demo', 'Magazine:16 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10681, 'demo', 'Magazine:16 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10682, 'demo', 'Magazine:16 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10680, 'demo', 'Magazine:16 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10678, 'demo', 'Magazine:15 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10673, 'demo', 'Magazine:12 x 30:Extra Page Cost?', '2017-08-20 17:11:38'),
(10674, 'demo', 'Magazine:12 x 30:Extra Page Price?', '2017-08-20 17:11:38'),
(10679, 'demo', 'Magazine:15 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10677, 'demo', 'Magazine:15 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10676, 'demo', 'Magazine:15 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10675, 'demo', 'Magazine:15 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10667, 'demo', 'Magazine:12 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10668, 'demo', 'Magazine:12 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10669, 'demo', 'Magazine:12 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10670, 'demo', 'Magazine:12 x 30:Fixed Pages?', '2017-08-20 17:11:38'),
(10671, 'demo', 'Magazine:12 x 30:Fixed Cost?', '2017-08-20 17:11:38'),
(10672, 'demo', 'Magazine:12 x 30:Fixed Price?', '2017-08-20 17:11:38'),
(10666, 'demo', 'Magazine:12 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10665, 'demo', 'Magazine:12 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10660, 'demo', 'Magazine:10 x 28:Fixed Pages?', '2017-08-20 17:11:38'),
(10661, 'demo', 'Magazine:10 x 28:Fixed Cost?', '2017-08-20 17:11:38'),
(10662, 'demo', 'Magazine:10 x 28:Fixed Price?', '2017-08-20 17:11:38'),
(10663, 'demo', 'Magazine:10 x 28:Extra Page Cost?', '2017-08-20 17:11:38'),
(10664, 'demo', 'Magazine:10 x 28:Extra Page Price?', '2017-08-20 17:11:38'),
(10659, 'demo', 'Magazine:10 x 24:Extra Page Price?', '2017-08-20 17:11:38'),
(10658, 'demo', 'Magazine:10 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10657, 'demo', 'Magazine:10 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10656, 'demo', 'Magazine:10 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10655, 'demo', 'Magazine:10 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10654, 'demo', 'Magazine:10 x 20:Extra Page Price?', '2017-08-20 17:11:38'),
(10653, 'demo', 'Magazine:10 x 20:Extra Page Cost?', '2017-08-20 17:11:38'),
(10652, 'demo', 'Magazine:10 x 20:Fixed Price?', '2017-08-20 17:11:38'),
(10651, 'demo', 'Magazine:10 x 20:Fixed Cost?', '2017-08-20 17:11:38'),
(10650, 'demo', 'Magazine:10 x 20:Fixed Pages?', '2017-08-20 17:11:38'),
(10649, 'demo', 'Magazine:10 x 15:Extra Page Price?', '2017-08-20 17:11:38'),
(10648, 'demo', 'Magazine:10 x 15:Extra Page Cost?', '2017-08-20 17:11:38'),
(10647, 'demo', 'Magazine:10 x 15:Fixed Price?', '2017-08-20 17:11:38'),
(10646, 'demo', 'Magazine:10 x 15:Fixed Cost?', '2017-08-20 17:11:38'),
(10645, 'demo', 'Magazine:10 x 15:Fixed Pages?', '2017-08-20 17:11:38'),
(10644, 'demo', 'Magazine:8 x 20:Extra Page Price?250', '2017-08-20 17:11:38'),
(10643, 'demo', 'Magazine:8 x 20:Extra Page Cost?200', '2017-08-20 17:11:38'),
(10641, 'demo', 'Magazine:8 x 20:Fixed Cost?20000', '2017-08-20 17:11:38'),
(10642, 'demo', 'Magazine:8 x 20:Fixed Price?25000', '2017-08-20 17:11:38'),
(10640, 'demo', 'Magazine:8 x 20:Fixed Pages?40', '2017-08-20 17:11:38'),
(10639, 'demo', 'Magazine:8 x 16:Extra Page Price?150', '2017-08-20 17:11:38'),
(10636, 'demo', 'Magazine:8 x 16:Fixed Cost?10000', '2017-08-20 17:11:38'),
(10637, 'demo', 'Magazine:8 x 16:Fixed Price?15000', '2017-08-20 17:11:38'),
(10638, 'demo', 'Magazine:8 x 16:Extra Page Cost?100', '2017-08-20 17:11:38'),
(10633, 'demo', 'Double Side Glossy:6 x 6:Cost per Card?21', '2017-08-20 17:11:38'),
(10634, 'demo', 'Double Side Glossy:6 x 6:Price per Card?29', '2017-08-20 17:11:38'),
(10635, 'demo', 'Magazine:8 x 16:Fixed Pages?30', '2017-08-20 17:11:38'),
(10629, 'demo', 'Double Side Glossy:5 x 8:Cost per Card?12', '2017-08-20 17:11:38'),
(10630, 'demo', 'Double Side Glossy:5 x 8:Price per Card?14', '2017-08-20 17:11:38'),
(10632, 'demo', 'Double Side Glossy:5 x 10:Price per Card?29', '2017-08-20 17:11:38'),
(10631, 'demo', 'Double Side Glossy:5 x 10:Cost per Card?22', '2017-08-20 17:11:38'),
(10628, 'demo', 'Double Side Glossy:4 x 12:Price per Card?15', '2017-08-20 17:11:38'),
(10627, 'demo', 'Double Side Glossy:4 x 12:Cost per Card?11', '2017-08-20 17:11:38'),
(10625, 'demo', 'Double Side Glossy:4 x 8:Cost per Card?10', '2017-08-20 17:11:38'),
(10626, 'demo', 'Double Side Glossy:4 x 8:Price per Card?12', '2017-08-20 17:11:38'),
(10624, 'demo', 'Double Side Matte:6 x 6:Price per Card?26', '2017-08-20 17:11:38'),
(10623, 'demo', 'Double Side Matte:6 x 6:Cost per Card?20', '2017-08-20 17:11:38'),
(10620, 'demo', 'Double Side Matte:5 x 8:Price per Card?27', '2017-08-20 17:11:38'),
(10622, 'demo', 'Double Side Matte:5 x 10:Price per Card?26', '2017-08-20 17:11:38'),
(10621, 'demo', 'Double Side Matte:5 x 10:Cost per Card?19', '2017-08-20 17:11:38'),
(10619, 'demo', 'Double Side Matte:5 x 8:Cost per Card?22', '2017-08-20 17:11:38'),
(10618, 'demo', 'Double Side Matte:4 x 12:Price per Card?25', '2017-08-20 17:11:38'),
(10614, 'demo', 'Single Side Glossy:6 x 6:Price per Card?15', '2017-08-20 17:11:38'),
(10615, 'demo', 'Double Side Matte:4 x 8:Cost per Card?20', '2017-08-20 17:11:38'),
(10616, 'demo', 'Double Side Matte:4 x 8:Price per Card?22', '2017-08-20 17:11:38'),
(10617, 'demo', 'Double Side Matte:4 x 12:Cost per Card?20', '2017-08-20 17:11:38'),
(10613, 'demo', 'Single Side Glossy:6 x 6:Cost per Card?10', '2017-08-20 17:11:38'),
(10612, 'demo', 'Single Side Glossy:5 x 10:Price per Card?24', '2017-08-20 17:11:38'),
(10611, 'demo', 'Single Side Glossy:5 x 10:Cost per Card?19', '2017-08-20 17:11:38'),
(10610, 'demo', 'Single Side Glossy:5 x 8:Price per Card?23', '2017-08-20 17:11:38'),
(10609, 'demo', 'Single Side Glossy:5 x 8:Cost per Card?18', '2017-08-20 17:11:38'),
(10605, 'demo', 'Single Side Glossy:4 x 8:Cost per Card?10', '2017-08-20 17:11:38'),
(10606, 'demo', 'Single Side Glossy:4 x 8:Price per Card?15', '2017-08-20 17:11:38'),
(10607, 'demo', 'Single Side Glossy:4 x 12:Cost per Card?12', '2017-08-20 17:11:38'),
(10608, 'demo', 'Single Side Glossy:4 x 12:Price per Card?17', '2017-08-20 17:11:38'),
(10604, 'demo', 'Single Side Matte:6 x 6:Price per Card?35', '2017-08-20 17:11:38'),
(10603, 'demo', 'Single Side Matte:6 x 6:Cost per Card?30', '2017-08-20 17:11:38'),
(10602, 'demo', 'Single Side Matte:5 x 10:Price per Card?27', '2017-08-20 17:11:38'),
(10601, 'demo', 'Single Side Matte:5 x 10:Cost per Card?22', '2017-08-20 17:11:38'),
(10600, 'demo', 'Single Side Matte:5 x 8:Price per Card?20', '2017-08-20 17:11:38'),
(10599, 'demo', 'Single Side Matte:5 x 8:Cost per Card?15', '2017-08-20 17:11:38'),
(10598, 'demo', 'Single Side Matte:4 x 12:Price per Card?17', '2017-08-20 17:11:38'),
(10597, 'demo', 'Single Side Matte:4 x 12:Cost per Card?12', '2017-08-20 17:11:38'),
(10596, 'demo', 'Single Side Matte:4 x 8:Price per Card?15', '2017-08-20 17:11:38'),
(10595, 'demo', 'Single Side Matte:4 x 8:Cost per Card?11', '2017-08-20 17:11:38'),
(10594, 'demo', '17 x 24:Price per Enlargement?2000', '2017-08-20 17:11:38'),
(10593, 'demo', '17 x 24:Cost per Enlargement?1800', '2017-08-20 17:11:38'),
(10591, 'demo', '16 x 24:Cost per Enlargement?1500', '2017-08-20 17:11:38'),
(10592, 'demo', '16 x 24:Price per Enlargement?1700', '2017-08-20 17:11:38'),
(10590, 'demo', '15 x 24:Price per Enlargement?1200', '2017-08-20 17:11:38'),
(10588, 'demo', 'HD:Use 3 Camera:Preshoot, Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10589, 'demo', '15 x 24:Cost per Enlargement?1000', '2017-08-20 17:11:38'),
(10587, 'demo', 'HD:Use 3 Camera:Preshoot, Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10583, 'demo', 'HD:Use 3 Camera:Preshoot Only:Video Cost?', '2017-08-20 17:11:38'),
(10584, 'demo', 'HD:Use 3 Camera:Preshoot Only:Video Price?', '2017-08-20 17:11:38'),
(10585, 'demo', 'HD:Use 3 Camera:Preshoot and Wedding:Video Cost?', '2017-08-20 17:11:38'),
(10586, 'demo', 'HD:Use 3 Camera:Preshoot and Wedding:Video Price?', '2017-08-20 17:11:38'),
(10581, 'demo', 'HD:Use 3 Camera:Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10582, 'demo', 'HD:Use 3 Camera:Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10579, 'demo', 'HD:Use 3 Camera:Wedding Only:Video Cost?', '2017-08-20 17:11:38'),
(10580, 'demo', 'HD:Use 3 Camera:Wedding Only:Video Price?', '2017-08-20 17:11:38'),
(10578, 'demo', 'HD:Use 2 Camera:Preshoot, Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10577, 'demo', 'HD:Use 2 Camera:Preshoot, Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10576, 'demo', 'HD:Use 2 Camera:Preshoot and Wedding:Video Price?', '2017-08-20 17:11:38'),
(10574, 'demo', 'HD:Use 2 Camera:Preshoot Only:Video Price?', '2017-08-20 17:11:38'),
(10575, 'demo', 'HD:Use 2 Camera:Preshoot and Wedding:Video Cost?', '2017-08-20 17:11:38'),
(10573, 'demo', 'HD:Use 2 Camera:Preshoot Only:Video Cost?', '2017-08-20 17:11:38'),
(10572, 'demo', 'HD:Use 2 Camera:Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10569, 'demo', 'HD:Use 2 Camera:Wedding Only:Video Cost?', '2017-08-20 17:11:38'),
(10570, 'demo', 'HD:Use 2 Camera:Wedding Only:Video Price?', '2017-08-20 17:11:38'),
(10571, 'demo', 'HD:Use 2 Camera:Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10568, 'demo', 'HD:Use 1 Camera:Preshoot, Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10567, 'demo', 'HD:Use 1 Camera:Preshoot, Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10566, 'demo', 'HD:Use 1 Camera:Preshoot and Wedding:Video Price?', '2017-08-20 17:11:38'),
(10565, 'demo', 'HD:Use 1 Camera:Preshoot and Wedding:Video Cost?', '2017-08-20 17:11:38'),
(10564, 'demo', 'HD:Use 1 Camera:Preshoot Only:Video Price?', '2017-08-20 17:11:38'),
(10563, 'demo', 'HD:Use 1 Camera:Preshoot Only:Video Cost?', '2017-08-20 17:11:38'),
(10562, 'demo', 'HD:Use 1 Camera:Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10560, 'demo', 'HD:Use 1 Camera:Wedding Only:Video Price?', '2017-08-20 17:11:38'),
(10561, 'demo', 'HD:Use 1 Camera:Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10559, 'demo', 'HD:Use 1 Camera:Wedding Only:Video Cost?', '2017-08-20 17:11:38'),
(10558, 'demo', 'Blueray:Use 3 Camera:Preshoot, Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10557, 'demo', 'Blueray:Use 3 Camera:Preshoot, Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10556, 'demo', 'Blueray:Use 3 Camera:Preshoot and Wedding:Video Price?', '2017-08-20 17:11:38'),
(10555, 'demo', 'Blueray:Use 3 Camera:Preshoot and Wedding:Video Cost?', '2017-08-20 17:11:38'),
(10554, 'demo', 'Blueray:Use 3 Camera:Preshoot Only:Video Price?', '2017-08-20 17:11:38'),
(10553, 'demo', 'Blueray:Use 3 Camera:Preshoot Only:Video Cost?', '2017-08-20 17:11:38'),
(10552, 'demo', 'Blueray:Use 3 Camera:Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10551, 'demo', 'Blueray:Use 3 Camera:Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10549, 'demo', 'Blueray:Use 3 Camera:Wedding Only:Video Cost?', '2017-08-20 17:11:38'),
(10550, 'demo', 'Blueray:Use 3 Camera:Wedding Only:Video Price?', '2017-08-20 17:11:38'),
(10548, 'demo', 'Blueray:Use 2 Camera:Preshoot, Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10547, 'demo', 'Blueray:Use 2 Camera:Preshoot, Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10546, 'demo', 'Blueray:Use 2 Camera:Preshoot and Wedding:Video Price?', '2017-08-20 17:11:38'),
(10544, 'demo', 'Blueray:Use 2 Camera:Preshoot Only:Video Price?', '2017-08-20 17:11:38'),
(10545, 'demo', 'Blueray:Use 2 Camera:Preshoot and Wedding:Video Cost?', '2017-08-20 17:11:38'),
(10543, 'demo', 'Blueray:Use 2 Camera:Preshoot Only:Video Cost?', '2017-08-20 17:11:38'),
(10542, 'demo', 'Blueray:Use 2 Camera:Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10540, 'demo', 'Blueray:Use 2 Camera:Wedding Only:Video Price?', '2017-08-20 17:11:38'),
(10541, 'demo', 'Blueray:Use 2 Camera:Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10539, 'demo', 'Blueray:Use 2 Camera:Wedding Only:Video Cost?', '2017-08-20 17:11:38'),
(10538, 'demo', 'Blueray:Use 1 Camera:Preshoot, Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10537, 'demo', 'Blueray:Use 1 Camera:Preshoot, Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10536, 'demo', 'Blueray:Use 1 Camera:Preshoot and Wedding:Video Price?', '2017-08-20 17:11:38'),
(10535, 'demo', 'Blueray:Use 1 Camera:Preshoot and Wedding:Video Cost?', '2017-08-20 17:11:38'),
(10534, 'demo', 'Blueray:Use 1 Camera:Preshoot Only:Video Price?', '2017-08-20 17:11:38'),
(10533, 'demo', 'Blueray:Use 1 Camera:Preshoot Only:Video Cost?', '2017-08-20 17:11:38'),
(10532, 'demo', 'Blueray:Use 1 Camera:Wedding and Homecoming:Video Price?', '2017-08-20 17:11:38'),
(10531, 'demo', 'Blueray:Use 1 Camera:Wedding and Homecoming:Video Cost?', '2017-08-20 17:11:38'),
(10530, 'demo', 'Blueray:Use 1 Camera:Wedding Only:Video Price?', '2017-08-20 17:11:38'),
(10529, 'demo', 'Blueray:Use 1 Camera:Wedding Only:Video Cost?', '2017-08-20 17:11:38'),
(10528, 'demo', '17 x 24:Signature Board Price?3500', '2017-08-20 17:11:38'),
(10527, 'demo', '17 x 24:Signature Board Cost?3000', '2017-08-20 17:11:38'),
(10526, 'demo', '16 x 24:Signature Board Price?2500', '2017-08-20 17:11:38'),
(10525, 'demo', '16 x 24:Signature Board Cost?2000', '2017-08-20 17:11:38'),
(10524, 'demo', '15 x 24:Signature Board Price?1500', '2017-08-20 17:11:38'),
(10523, 'demo', '15 x 24:Signature Board Cost?1000', '2017-08-20 17:11:38'),
(10522, 'demo', 'Price For 1 Helper?3500', '2017-08-20 17:11:38'),
(10521, 'demo', 'Cost For 1 Helper?2500', '2017-08-20 17:11:38'),
(10520, 'demo', '6 x 6:Mini Album Price?', '2017-08-20 17:11:38'),
(10519, 'demo', '6 x 6:Mini Album Cost?', '2017-08-20 17:11:38'),
(10518, 'demo', '5 x 10:Mini Album Price?130', '2017-08-20 17:11:38'),
(10517, 'demo', '5 x 10:Mini Album Cost?130', '2017-08-20 17:11:38'),
(10516, 'demo', '5 x 8:Mini Album Price?220', '2017-08-20 17:11:38'),
(10515, 'demo', '5 x 8:Mini Album Cost?120', '2017-08-20 17:11:38'),
(10514, 'demo', '4 x 12:Mini Album Price?210', '2017-08-20 17:11:38'),
(10513, 'demo', '4 x 12:Mini Album Cost?110', '2017-08-20 17:11:38'),
(10512, 'demo', '4 x 8:Mini Album Price?200', '2017-08-20 17:11:38'),
(10511, 'demo', '4 x 8:Mini Album Cost?100', '2017-08-20 17:11:38'),
(10510, 'demo', 'Drone Camera Price?15000', '2017-08-20 17:11:38'),
(10509, 'demo', 'Drone Camera Cost?10000', '2017-08-20 17:11:38'),
(10750, 'demo', 'Story Book:18 x 24:Fixed Pages?', '2017-08-20 17:11:38'),
(10751, 'demo', 'Story Book:18 x 24:Fixed Cost?', '2017-08-20 17:11:38'),
(10752, 'demo', 'Story Book:18 x 24:Fixed Price?', '2017-08-20 17:11:38'),
(10753, 'demo', 'Story Book:18 x 24:Extra Page Cost?', '2017-08-20 17:11:38'),
(10754, 'demo', 'Story Book:18 x 24:Extra Page Price?', '2017-08-20 17:11:38');

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
  `SigBoard` varchar(20) NOT NULL,
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
  `Advance4` varchar(20) NOT NULL,
  `Advance5` varchar(20) NOT NULL,
  `Advance6` varchar(20) NOT NULL,
  `Comments` varchar(400) NOT NULL,
  `PrivateComments` varchar(500) NOT NULL,
  `PrivateCommentsCost` varchar(20) DEFAULT NULL,
  `PrivateCommentsPrice` varchar(20) DEFAULT NULL,
  `Album1Cost` varchar(10) NOT NULL,
  `Album1Price` varchar(10) NOT NULL,
  `Album2Cost` varchar(10) NOT NULL,
  `Album2Price` varchar(10) NOT NULL,
  `Album3Cost` varchar(10) NOT NULL,
  `Album3Price` varchar(10) NOT NULL,
  `MiniAlbCost` varchar(10) NOT NULL,
  `MiniAlbPrice` varchar(10) NOT NULL,
  `SigboardCost` varchar(10) NOT NULL,
  `SigboardPrice` varchar(10) NOT NULL,
  `EnlargeCost` varchar(10) NOT NULL,
  `EnlargePrice` varchar(10) NOT NULL,
  `WedThankCost` varchar(10) NOT NULL,
  `WedThankPrice` varchar(10) NOT NULL,
  `HomThankCost` varchar(10) NOT NULL,
  `HomThankPrice` varchar(10) NOT NULL,
  `VidCost` varchar(10) NOT NULL,
  `VidPrice` varchar(10) NOT NULL,
  `DroneCost` varchar(10) NOT NULL,
  `DronePrice` varchar(10) NOT NULL,
  `HelperCost` varchar(10) NOT NULL,
  `HelperPrice` varchar(10) NOT NULL,
  `DesignerCost` varchar(10) NOT NULL,
  `DesignerPrice` varchar(10) NOT NULL,
  `CostVersion` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`ID`, `name`, `email`, `phone`, `NameG`, `EmailG`, `PhoneG`, `Address`, `dateW`, `timeW`, `placeW`, `dateH`, `timeH`, `placeH`, `CAQuality`, `Album1Type`, `CASize`, `CAPages`, `FAQuality`, `Album2Type`, `FASize`, `FAPages`, `PSQuality`, `PSSize`, `PSPages`, `IncludeFA`, `SigBoard`, `Enlarge1Size`, `Enlarge2Size`, `Enlarge3Size`, `Enlarge1Count`, `Enlarge2Count`, `Enlarge3Count`, `thankCardQuality`, `thankCardSize`, `wedThankCardCount`, `ThankCardQualityH`, `ThankCardSizeH`, `homeThankCardCount`, `VidQuality`, `VidNoOfCam`, `VidType`, `IncludeDrone`, `Total`, `Transport`, `Advance1`, `Advance2`, `Advance3`, `Advance4`, `Advance5`, `Advance6`, `Comments`, `PrivateComments`, `PrivateCommentsCost`, `PrivateCommentsPrice`, `Album1Cost`, `Album1Price`, `Album2Cost`, `Album2Price`, `Album3Cost`, `Album3Price`, `MiniAlbCost`, `MiniAlbPrice`, `SigboardCost`, `SigboardPrice`, `EnlargeCost`, `EnlargePrice`, `WedThankCost`, `WedThankPrice`, `HomThankCost`, `HomThankPrice`, `VidCost`, `VidPrice`, `DroneCost`, `DronePrice`, `HelperCost`, `HelperPrice`, `DesignerCost`, `DesignerPrice`, `CostVersion`) VALUES
(59, 'Test comment', '', '', '', '', '', '', '2017-08-23', 'N/A', '', '2010-01-01', 'N/A', '', 'N/A', 'Wedding', '0', '', 'N/A', 'Homecoming', '0', '', 'N/A', '0', '', 'false', 'N/A', 'N/A', 'N/A', 'N/A', '', '', '', 'N/A', 'N/A', '', 'N/A', 'N/A', '', 'N/A', 'N/A', 'N/A', 'false', '0', '', '', '', '', '', '', '', 'Zxc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(60, 'Test comment', '', '', '', '', '', '', '2017-08-23', 'N/A', '', '2010-01-01', 'N/A', '', 'N/A', 'Wedding', '0', '', 'N/A', 'Homecoming', '0', '', 'N/A', '0', '', 'false', 'N/A', 'N/A', 'N/A', 'N/A', '', '', '', 'N/A', 'N/A', '', 'N/A', 'N/A', '', 'N/A', 'N/A', 'N/A', 'true', '42000', '', '', '', '', '', '', '', 'Zxc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(66, 'Full Malinda Kumarasinghe', 'malindakpt@gmail.com', '0777180399', 'Sumudu Herath', 'sumudu@gmail.com', '0775092447', 'Kanadulla Kuliyapitiya', '2017-08-23', 'Day', 'SIrimali RoyalDawn', '2017-08-25', 'Night', 'Waddduwa Hotel', 'Magazine', 'Wedding', '8 x 16', '45', 'Magazine', 'Homecoming', '8 x 16', '30', 'Magazine', '8 x 20', '12', '4 x 8', '15 x 24', '16 x 24', '15 x 24', '17 x 24', '2', '1', '3', 'Single Side Matte', '4 x 8', '100', 'Single Side Matte', '4 x 12', '200', 'HD', 'Use 1 Camera', 'Wedding Only', 'true', '114950', '', '', '', '', '', '', '', 'THis is customer commnet \n15000 per lkjsl lkajsda lksda\n20000 per lkjdlfkjslkf  lkjf\nFree is gviemn', '', '', '', '11500', '17250', '10000', '15000', '20000', '25000', '100', '200', '1000', '1500', '9400', '10600', '1100', '1500', '2400', '3400', '', '', '10000', '15000', '10000', '14000', '', '13000', '2017-08-20 17:11:38');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `costmodel`
--
ALTER TABLE `costmodel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10755;
--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
