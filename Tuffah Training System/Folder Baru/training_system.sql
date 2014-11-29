-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2014 at 06:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `training system`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `instructorID` int(11) NOT NULL AUTO_INCREMENT,
  `instructorName` varchar(200) NOT NULL,
  `instructorIcNo` varchar(200) NOT NULL,
  `instructorNoPhone` varchar(200) NOT NULL,
  `instructorAddress` varchar(200) NOT NULL,
  PRIMARY KEY (`instructorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructorID`, `instructorName`, `instructorIcNo`, `instructorNoPhone`, `instructorAddress`) VALUES
(1, 'Azman Bin Ali', '860720-14-9856', '60123512972', 'No.3 Jalan Joran 12/13 section 13, Shah Alam, 40300, Selangor Darul Ehsan'),
(2, 'Hamid Bin Fikri', '630428-10-0298', '0193750296', 'No.20 Jalan Bakul Presint 2, Putrajaya, 47000 Kuala Lumpur');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subjectID` int(11) NOT NULL AUTO_INCREMENT,
  `subjectCode` varchar(200) NOT NULL,
  `subjectName` varchar(200) NOT NULL,
  PRIMARY KEY (`subjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectID`, `subjectCode`, `subjectName`) VALUES
(1, 'Java', 'Fast Track Java Course'),
(2, 'HTML 5', 'Fast Track HTML Course');

-- --------------------------------------------------------

--
-- Table structure for table `tibridge`
--

CREATE TABLE IF NOT EXISTS `tibridge` (
  `tiBridgeID` int(11) NOT NULL AUTO_INCREMENT,
  `trainingID` int(11) NOT NULL,
  `instructorID` int(11) NOT NULL,
  `waktuMengajar` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  PRIMARY KEY (`tiBridgeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `trainingID` int(11) NOT NULL AUTO_INCREMENT,
  `trainingName` varchar(200) NOT NULL,
  `trainingPlace` varchar(200) NOT NULL,
  `startDate` varchar(200) NOT NULL,
  `EndDate` varchar(200) NOT NULL,
  `totalStudent` varchar(200) NOT NULL,
  PRIMARY KEY (`trainingID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `username`, `password`, `level`) VALUES
(1, 'sufi', 'sufi123', 'Admin'),
(2, 'ahmad', 'ahmad012', 'Staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
