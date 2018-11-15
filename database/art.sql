-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2017 at 06:33 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `art`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE IF NOT EXISTS `art` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `size` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `artist_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id`, `name`, `size`, `image`, `artist_name`) VALUES
(1, 'Painting', '300X300cm', 'photos/1406112900_Ref.-No_.-489_.JPG', 'Aditya Basak'),
(2, 'Painting', '300X300cm', 'photos/1406190411_Ref.-No_.-652_.png', 'Aditya Basak'),
(3, 'Painting', '300X300cm', 'photos/1407228430_Ref.-No_.-3047_.png', 'Aditya Basak'),
(4, 'Painting', '300X300cm', 'photos/1439379389_G1091_Aditya_Basak_Cage_Tempera_on_Acid_Free_Board_19.5_x_17_in_2013_Rs_60,000__5_', 'Aditya Basak'),
(5, 'Painting', '300X300cm', 'photos/1409644941_G_0112_Mithun_Dasgupta_Untitled_Ink_on_Paper_5.5_X_5_in_2006_1500_.png', 'Sudip Roy'),
(6, 'Painting', '300X300cm', 'photos/1422602707_2901.jpg', 'Sudip Roy'),
(7, 'Sculptures', '300X300cm', 'photos/1409298575_B25_Asit_Mondal_Krishna_with_Flute_Tempera_Wash_on_Board_28.5_x_38_.5_in_2,50,000_', 'Sudip Roy'),
(8, 'Sculptures', '200x300cm', 'photos/1451292329_4_Ref._No_._4448_Bikash_Bhattacharjee_Urban_Space_for_Human_Watercolour_on_Paper_1', 'Sudip Roy'),
(9, 'Sculptures', '200x300cm', 'photos/1497080312_Ref._No_._2792_.jpg', 'Atin Basak'),
(10, 'Sculptures', '200x300cm', 'photos/1409401335_4117.png', 'Atin Basak'),
(11, 'Sculptures', '200x300cm', 'photos/1489840967_1_DSC_0226.JPG', 'Atin Basak'),
(12, 'Print Making', '250x250', 'photos/1427192310_1._1002_Achuthan_Kudallur_Untitled_Acrylic_on_canvas_00_x_00_in_2002_OK_ (1).jpg', 'Atin Basak'),
(13, 'Print Making', '250x250cm', 'photos/1429776955_1294.JPG', 'abhijit gupta'),
(14, 'Print Making', '250x250cm', 'photos/1474544465_Ref_No._M1664_,_Achuthan_Kudallur_ (1).jpg', 'abhijit gupta'),
(17, 'Print Making', '200x300cm', 'photos/1508924704_C0140_Silence-Vl,_Tempera_on_board,30X22_1,20,000.jpg', 'lalu prasad'),
(18, 'Print Making', '200x300cm', 'photos/1508925272_C0141_Silence-Vll,Tepmera_on_board_,30X22_1,20,000.jpg', 'lalu prasad'),
(19, 'Painting', '200x300cm', 'photos/1480758840_AH002.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  `address` text NOT NULL,
  `artistphoto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `dob`, `address`, `artistphoto`) VALUES
(14, 'Lalu Prasad', '1956-06-17', 'Delhi', 'photos/lalu prasad.jpg'),
(13, 'Atin Basak', '1972-05-03', 'Mumbai', 'photos/atin basak.jpg'),
(12, 'Aditya Basak', '1978-02-02', 'Mumbai', 'photos/aditya basak.jpg'),
(11, 'Abhijit Gupta', '1971-02-01', 'Bangalore', 'photos/abhijit gupta.JPG'),
(15, 'Supip Roy', '1969-07-06', 'Uttar Pradesh', 'photos/sudip roy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`fname`, `lname`, `email`, `subject`, `msg`) VALUES
('Ravikesh', 'yadav', 'ravikeshyadav4@gmail.com', 'test', 'hi i am testing this page'),
('Ravikesh', 'yadav', 'ravikeshyadav4@gmail.com', 'test', 'hi how r u'),
('Ravikesh', 'yadav', 'sachin@gmail.com', 'ART', 'HI I UPLOADED MY ART'),
('wegw', 'egege', 'eglk@gmail.com', 'jkwfegkj', 'egwgr'),
('wegw', 'egege', 'eglk@gmail.com', 'jkwfegkj', 'egwgr'),
('wegw', 'egege', 'eglk@gmail.com', 'jkwfegkj', 'egwgr'),
('Ravikesh', 'yadav', 'ravikeshyadav4@gmail.com', '1995', 'Thanks');

-- --------------------------------------------------------

--
-- Table structure for table `exhibition`
--

CREATE TABLE IF NOT EXISTS `exhibition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `exhibition`
--

INSERT INTO `exhibition` (`id`, `location`, `name`, `address`, `startdate`, `enddate`) VALUES
(5, 'photos/a.JPG', 'INDIA ART FAIR 2017', 'Mumbai', '2017-10-06', '2017-10-09'),
(6, 'photos/1508924704_C0140_Silence-Vl,_Tempera_on_board,30X22_1,20,000.jpg', 'Print Making', 'Mumbai', '2016-12-07', '2016-12-11'),
(7, 'photos/1508925272_C0141_Silence-Vll,Tepmera_on_board_,30X22_1,20,000.jpg', 'INDIA ART FAIR 2017', 'Bangalore', '2017-11-22', '2017-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `username` varchar(40) NOT NULL,
  `price` bigint(7) NOT NULL DEFAULT '20000',
  `mobile` bigint(10) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `username`, `price`, `mobile`, `address`) VALUES
(1, 'Ravikesh yadav', 'ravikeshyadav4@gmail.com', 20000, 7411966489, 'FTR HQ BSF campus, yelahanka, Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` char(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `mobile`, `address`) VALUES
(1, 'Ravikesh yadav', 'ravikeshyadav4@gmail.com', 'ravi', '2147483647', 'FTR HQ BSF campus, yelahanka, Bangalore'),
(3, 'sachin', 'sachin@gmail.com', 'sachin', '2147483647', 'Bangalore'),
(5, 'nanda', 'nanda@gmail.com', 'nanda', '1234565432', 'STC BSF Bangalore');
