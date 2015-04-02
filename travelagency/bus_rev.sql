-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2015 at 11:42 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_rev`
--

-- --------------------------------------------------------

--
-- Table structure for table `1bus`
--

CREATE TABLE IF NOT EXISTS `1bus` (
  `id` int(11) NOT NULL,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1bus`
--

INSERT INTO `1bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'N'),
(2, 'Available', 'W'),
(3, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `2bus`
--

CREATE TABLE IF NOT EXISTS `2bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `2bus`
--

INSERT INTO `2bus` (`id`, `status`, `state`) VALUES
(2, 'Available', 'N'),
(3, 'Available', 'N'),
(4, 'Available', 'N'),
(5, 'Available', 'N'),
(6, 'Available', 'W'),
(7, 'Available', 'W'),
(8, 'Available', 'W'),
(9, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `3bus`
--

CREATE TABLE IF NOT EXISTS `3bus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `3bus`
--

INSERT INTO `3bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'N'),
(2, 'Available', 'W'),
(3, 'Available', 'W'),
(4, 'Available', 'W'),
(5, 'Available', 'W'),
(6, 'Available', 'N'),
(7, 'Available', 'N'),
(8, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `4bus`
--

CREATE TABLE IF NOT EXISTS `4bus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `4bus`
--

INSERT INTO `4bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'N'),
(2, 'Available', 'N'),
(3, 'Available', 'N'),
(4, 'Available', 'N'),
(5, 'Available', 'W'),
(6, 'Available', 'W'),
(7, 'Available', 'W'),
(8, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_name` varchar(120) NOT NULL,
  `from_stop` varchar(120) NOT NULL,
  `to_stop` varchar(120) NOT NULL,
  `dept_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  `journeyDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_name`, `from_stop`, `to_stop`, `dept_time`, `arrival_time`, `distance`, `fare`, `journeyDate`) VALUES
(1, 'Parveen', 'Salem', 'Chennai', '06:00:00', '12:00:00', 341, 250, '2015-03-20'),
(2, 'Parveen', 'Salem', 'Bangalore', '06:00:00', '12:00:00', 290, 230, '2015-03-21'),
(3, 'Parveen', 'Erode', 'Bangalore', '06:00:00', '12:00:00', 340, 300, '2015-03-21'),
(4, 'Parveen', 'Erode', 'Chennai', '06:00:00', '12:00:00', 371, 500, '2015-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `gender` varchar(120) NOT NULL,
  `dob` date NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `address` varchar(120) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `dob`, `mobile`, `address`, `pin_code`, `email`, `password`, `reg_date`) VALUES
(1, 'Narpat', 'Male', '1991-01-01', '9829707528', 'Sanchore', 343041, 'bishnoi29@gmail.com', '123', '2012-07-06'),
(5, 'Raju', 'Male', '1993-07-03', '9636870640', 'Sanchore', 343041, 'raju@gmail.com', '123', '2012-07-19'),
(3, 'NARPAT', 'Male', '1991-01-01', '9829707528', 'SANCHORE', 343041, 'bishnoinarpat5@gmail.com', '54321', '2012-07-19'),
(6, 'NARPAT BISHNOI', 'Male', '1991-01-01', '9829707528', 'JPR', 302013, 'bishnoi-narpat5@gmail.com', '12345', '2012-07-19'),
(22, 'lolita1', 'Female', '1951-03-03', '546464646', '9,MOIDEEN ,KARAVAIKAL', 638001, 'lolita@gmail.com', '123', '2015-03-15'),
(19, 'ganapathy', 'Male', '1910-02-03', '9487140854', '9,MOIDEEN ,\r\nKARAVAIKAL', 638001, 'sundar@gmail.com', '1234', '2015-03-15'),
(16, 'sundu', 'Male', '1963-02-16', '9487140854', '3', 638001, 'ganapathyravi13@gmail.com', '123', '2015-03-13'),
(26, 'kabila', 'Female', '1911-01-02', '98098', 'hkjh', 0, 'g@gmail.com', '123', '2015-03-15'),
(27, 'oooooo', 'Male', '1910-02-04', '1111', '1', 1, '1@a.com', '1', '2015-03-15'),
(24, 'kabila', 'Female', '1912-02-04', '456789', '39,MOIDEEN STREET BACKSIDE,\r\nNEAR KARAVAIKAL', 638001, 'kabila1@gmail.com', '123', '2015-03-15'),
(28, 'kabila', 'Female', '1911-01-01', '9487140854', '39,MOIDEEN STREET BACKSIDE,\r\nNEAR KARAVAIKAL', 638001, 'gh@gmail.com', '123', '2015-03-15'),
(29, 'sundar', 'Male', '1962-04-16', '9487140854', '39,MOIDEEN STREET BACKSIDE,NEAR KARAVAIKAL', 638001, 'sundar1@gmail.com', '123', '2015-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE IF NOT EXISTS `user_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_name` varchar(120) NOT NULL,
  `from_stop` varchar(120) NOT NULL,
  `to_stop` varchar(120) NOT NULL,
  `journey_date` date NOT NULL,
  `booking_date` date NOT NULL,
  `seat_no_booked` int(11) NOT NULL,
  `dept_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `fare` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
