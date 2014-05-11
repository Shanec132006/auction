-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 11, 2014 at 11:08 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `participant_address`
--

CREATE TABLE IF NOT EXISTS `participant_address` (
  `user_id` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `parish` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant_address`
--

INSERT INTO `participant_address` (`user_id`, `address`, `parish`) VALUES
('', '', ''),
('14323', 'esdgmkspw', 'QPADGMS'),
('21718', '12qwrs', '14qwfas'),
('28825', 'sfagss', '1314rw'),
('855', 'sfagss', '1314rw'),
('913', '14qw32ewsf', 'pomsd;lfm');

-- --------------------------------------------------------

--
-- Table structure for table `participant_info`
--

CREATE TABLE IF NOT EXISTS `participant_info` (
  `user_id` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `id_type` varchar(30) NOT NULL,
  `id_num` varchar(30) NOT NULL,
  `trn` varchar(30) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `phone_num` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant_info`
--

INSERT INTO `participant_info` (`user_id`, `first_name`, `middle_name`, `last_name`, `Gender`, `id_type`, `id_num`, `trn`, `dob`, `phone_num`) VALUES
('14323', 'Sja', 'qe,ads', '3qe1', 'Gender', '1p3ewsd-kp', '2335245', '1324546', '3-3-1993', '13e32453'),
('21718', 'passq', 'asofm', 'asfa', 'Gender', '1241', '124142', '1241', '12-24-2012', '1231'),
('26780', 'Sean', 'Miller', 'mold', 'Gender', 'asfom', '12021', '12413', '', '123142141'),
('28825', 'Admin ', 'fas', 'wsdg', 'Gender', 'sjkgna', '1243142', '124134131', 'dd-mm-yyyy', '1241515'),
('855', 'Admin ', 'fas', 'wsdg', 'Gender', 'sjkgna', '1243142', '124134131', 'dd-mm-yyyy', '1241515'),
('913', 'Yanique', 'wpmw', 'qwsamf', 'Gender', 'sdggslkm', '1213425', '124142', '11-3-1992', '12411209');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `chassis_num` varchar(255) NOT NULL,
  `starting_price` varchar(255) DEFAULT NULL,
  `end_price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`chassis_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`chassis_num`, `starting_price`, `end_price`) VALUES
('KB20914253', '$4,000,000', '$2,000,000');

-- --------------------------------------------------------

--
-- Table structure for table `successfull_bids`
--

CREATE TABLE IF NOT EXISTS `successfull_bids` (
  `chassis_num` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `type`) VALUES
('1', 'admin@gmail.com', 'a4TxbGfBrxO3Y', 'admin'),
('1051', 'shanec132006@hotmail.com', 'a4TxbGfBrxO3Y', 'participant'),
('10680', 'shanecwqafgsdgr132006@hotmail.', 'a4opOS/h9zup6', 'participant'),
('14323', 'esdg@gmail.com', 'a4TxbGfBrxO3Y', 'participant'),
('19042', 'shanecwqr132006@hotmail.com', 'a4Z1gNK1eB/c2', 'participant'),
('2', 'cashier@gmail.com', 'a4TxbGfBrxO3Y', 'cashier'),
('20559', 'shanec132006@hotmail.com', 'a4e/O0UzVbfYI', 'participant'),
('2171', 'shanec132006@hotmail.com', 'a4hrz1MGk3FOE', 'participant'),
('21718', 'asfmk@gmigl.com', 'a4TxbGfBrxO3Y', 'participant'),
('26780', 'sam@hotmail.com', 'a4TxbGfBrxO3Y', 'participant'),
('28825', 'AdminPassword@hotmail.com', 'a4zhojdx8zuCk', 'participant'),
('3', 'auctioneer@gmail.com', 'a4TxbGfBrxO3Y', 'auctioneer'),
('855', 'AdminPassword@hotmail.com', 'a4TxbGfBrxO3Y', 'participant'),
('913', 'shanocam@hmail.com', 'a48./su.3PeDQ', 'participant');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `chassis_num` varchar(255) NOT NULL,
  `Make` varchar(255) NOT NULL,
  `model` varchar(233) NOT NULL,
  `year` int(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `seating` varchar(20) NOT NULL,
  `transmission` varchar(20) NOT NULL,
  `drive_side` varchar(20) NOT NULL,
  `doors` varchar(20) NOT NULL,
  `fuel_type` varchar(20) NOT NULL,
  `cc` varchar(20) NOT NULL,
  `eng_num` varchar(20) NOT NULL,
  PRIMARY KEY (`chassis_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`chassis_num`, `Make`, `model`, `year`, `color`, `seating`, `transmission`, `drive_side`, `doors`, `fuel_type`, `cc`, `eng_num`) VALUES
('KB20914253', 'Mitsubishi ', 'Lancer Evolution X', 2013, 'Black', '4 Seater', 'Manual', 'RHD', '4 Doors', 'Gas', '2000', 'ENG13104950');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_images`
--

CREATE TABLE IF NOT EXISTS `vehicle_images` (
  `chassis_num` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_images`
--

INSERT INTO `vehicle_images` (`chassis_num`, `img_url`) VALUES
('KB20914253', '../img/car_images/mitsubishi-lancer-8 (1).jpg'),
('KB20914253', '../img/car_images/mitsubishi-lancer-interior-3.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
