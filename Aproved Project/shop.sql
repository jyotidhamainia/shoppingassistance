-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2013 at 09:38 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `First name` varchar(20) NOT NULL,
  `Second name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Telephone` int(10) NOT NULL,
  `Address` varchar(25) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`First name`, `Second name`, `Username`, `Password`, `Email`, `Telephone`, `Address`) VALUES
('roohee', 'tanzeem', 'roohee', 'roohee', 'ruhi@gmail.com', 2147483647, 'opal '),
('roohi', 'lodhi', 'roohi', '123', 'roohi@gmail.com', 2147483647, 'jfbfhdsbdshb');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` int(10) NOT NULL,
  `address` int(25) NOT NULL,
  `comments` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soap`
--

CREATE TABLE IF NOT EXISTS `soap` (
  `name` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `avalaible` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `shopname` varchar(202) NOT NULL,
  `availibility` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soap`
--

INSERT INTO `soap` (`name`, `quantity`, `avalaible`, `price`, `shopname`, `availibility`) VALUES
('Lifebuoy Shampoo', 50, 20, 15, 'Gurunath and chintam', 'Available'),
('Liril-2000', 50, 20, 27, 'Gurunath and chintam', 'Available'),
('Hamam soap', 75, 24, 24, 'Gurunath and chintam', ''),
('Lux-Peach-&-Cream so', 100, 24, 20, 'Gurunath and chintam', ''),
('Cinthole ', 75, 24, 35, 'Gurunath and chintam', ''),
('Lux FreshSplash', 100, 24, 20, 'Gurunath and chintam', ''),
('Park Avenue Cool blu', 100, 24, 28, 'Available on only Gu', ''),
('Park Avenue luxery s', 100, 24, 37, 'Available on only Gu', ''),
('Sugar', 20, 20, 25, 'Chintamadi shop', ''),
('Garnier Shampoo', 100, 20, 119, 'Chintamadi and gurun', ''),
('Head-Shoulders', 100, 20, 74, 'Chintamadi and gurun', ''),
('Clinic-plus Shampoo', 100, 20, 115, 'Chintamadi and gurun', ''),
('Dove Shampoo', 200, 20, 155, 'Chintamadi and gurun', ''),
('Lifebuoy Shampoo', 50, 20, 15, 'Chintamadi and gurun', ''),
('Liril-2000', 50, 20, 27, 'Chintamadi and gurun', ''),
('', 0, 0, 0, '', ''),
('Himalaya facewash ne', 100, 20, 50, 'Gurunath and chintamani shop', 'Available'),
('Olay Facewash', 125, 20, 150, 'Gurunath and chintamani shop', 'Available'),
('Dove facewash', 50, 20, 70, 'Gurunath and chintamani shop', 'Available'),
('clean n clear facewa', 100, 20, 50, 'Gurunath and chintamani shop', 'Available'),
('Garnier Facewash Men', 50, 20, 70, 'Gurunath shop', 'Available'),
('Garnier Facewash', 50, 20, 70, 'Gurunath shop', 'Not available'),
('', 0, 0, 0, '', ''),
('', 0, 0, 0, '', ''),
('Pears Facewash', 70, 64, 45, 'Gurunath shop', 'available'),
('Medimix-Sandal', 100, 20, 35, 'Gurunath', 'Medimix-Sandal'),
('Medimix-Sandal', 100, 20, 35, 'Gurunath', 'Medimix-Sandal'),
('Cinthole ', 75, 20, 35, 'Gurunath and Chintamani shop', 'Available'),
('Cinthole ', 75, 20, 35, 'Gurunath and Chintamani shop', 'Available');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
