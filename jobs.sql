-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2013 at 10:55 AM
-- Server version: 5.1.36-community-log
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `JobID` varchar(25) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Details` varchar(250) NOT NULL,
  PRIMARY KEY (`JobID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`JobID`, `Status`, `Subject`, `Details`) VALUES
('5TY6-GY4D-GTW4-WEY7-YTG6L', 'Ongoing', 'Computer Won''t Start', 'The computer will not start the monitor doesn''t power up and the computer itself doesn''t turn on.'),
('5TY4-GY4D-GTW4-WEY7-YTG6L', 'Ongoing', 'Computer Won''t Start', 'The computer will not start the monitor doesn''t power up and the computer itself doesn''t turn on.'),
('testing', 'ongoing', 'broken', 'the computer no longer works\r\n'),
('testing #2', 'ongoing', 'testing it again', 'page broken');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
