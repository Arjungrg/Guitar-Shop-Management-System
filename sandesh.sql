-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 08:09 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sandesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_guitar`
--

CREATE TABLE IF NOT EXISTS `add_guitar` (
  `guitar_id` int(11) NOT NULL AUTO_INCREMENT,
  `guitar_make` varchar(30) NOT NULL,
  `guitar_model` varchar(30) NOT NULL,
  `guitar_color` varchar(30) NOT NULL,
  `purposed_sp` varchar(30) NOT NULL,
  `damaged_status` varchar(30) NOT NULL,
  `rack_no` int(11) NOT NULL,
  PRIMARY KEY (`guitar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `add_guitar`
--

INSERT INTO `add_guitar` (`guitar_id`, `guitar_make`, `guitar_model`, `guitar_color`, `purposed_sp`, `damaged_status`, `rack_no`) VALUES
(17, 'Acoustic', 'AC1', 'Blue', '5000', 'Ok', 9),
(19, 'Steel', 'ST5', 'Red', '8000', 'Ok', 15),
(20, 'Electric', 'ET2', 'Green', '8000', 'Ok', 14),
(21, 'Resonator', 'RT5', 'Black', '7500', 'Damaged', 9),
(22, 'Bass', 'BA', 'Purple', '6500', 'Ok', 8),
(23, 'Steel', 'STEEL123', 'Green', '8000', 'Ok', 50);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` tinyint(1) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`users_id`, `user_type`, `username`, `password`) VALUES
(4, 0, 'arjun', 'arjun');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `address` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `address`) VALUES
(7, 'Sailesh ', 'Kunwar', 'Godawari'),
(8, 'Avisekh', 'Pandey', 'Baneshwor'),
(9, 'Nawaraj', 'Limbu', 'hattiban'),
(10, 'Lijesh ', 'Shakya', 'kamalpokhari'),
(11, 'Prajwol ', 'Shrestha', 'Kalanki'),
(12, 'Salman', 'Khan', 'Bhaktapur');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE IF NOT EXISTS `dealer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dealer_name` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contact` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`id`, `dealer_name`, `address`, `email`, `contact`) VALUES
(8, 'Rozan ', 'Bouddha', 'rozan@gmail.com', 2147483647),
(9, 'Safal Joshi', 'Damauli', 'safal@yahoo.com', 459871265),
(11, 'Santa', 'Mahalaxmisthan', 'santa@yahoo.com', 1249762359),
(12, 'Barsha', 'Kupandole', 'barsha@gmail.com', 1247896543);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE IF NOT EXISTS `purchase_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `pDate` date NOT NULL,
  `dDate` date NOT NULL,
  `make` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`order_id`, `pDate`, `dDate`, `make`, `quantity`, `price`) VALUES
(7, '2016-04-22', '2016-04-27', 'Bass', 10, 10000),
(8, '2016-04-22', '2016-05-12', 'Electric', 5, 5000),
(9, '2016-04-16', '2016-04-30', 'Resonator', 20, 50000),
(10, '2016-04-19', '2016-04-30', 'Steel', 7, 7000),
(11, '2016-04-17', '2016-04-26', 'Electric', 2, 2000),
(12, '2016-04-16', '2016-04-25', 'Steel', 5, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `email`) VALUES
(14, 'ram', 'ram', 'ram@gmail.com'),
(15, 'sita', 'sita', 'sita@gmail.com'),
(16, 'hari', 'hari', 'hari@gmail.com'),
(18, 'arjun', 'arjun', 'arjun.gurung.c3@gmail.com'),
(19, 'prasanna', 'prasanna', 'prasanna@gmail.com'),
(20, 'Sneha', 'sneha', 'Sneha@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
