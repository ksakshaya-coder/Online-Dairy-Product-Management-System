-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2019 at 04:08 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coconutstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `bname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` bigint(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `bname`, `email`, `mobile`, `address`, `username`, `password`, `status`) VALUES
(1, 'Muhammed', 'muhammed@gmail.com', 9874569888, 'Pollachi', 'muhammed', '123', 'pending'),
(2, 'Kumar', 'kumar12@gmail.com', 9659876565, 'Coimbatore', 'kumar', '123', 'pending'),
(3, 'Priya', 'priya89@gmail.com', 9638527410, 'Erode', 'priya', '123', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(25) NOT NULL,
  `pqw` varchar(25) NOT NULL,
  `rate` int(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(25) NOT NULL,
  `path` varchar(25) NOT NULL,
  `qty` int(25) NOT NULL,
  `total` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `susername` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `pname`, `pqw`, `rate`, `company`, `mobile`, `address`, `path`, `qty`, `total`, `username`, `susername`) VALUES
(4, 'Coco Peat Block - 10 Kg', 'In stock', 250, 'SS Exports', 8956237896, 'Coimbatore', 'product/5.jpg', 100, 25000, 'muhammed', 'ssexports'),
(5, 'Cheap Fresh Semi husked', 'In stock', 9, 'Raja Traders', 9876543211, 'Erode', 'product/3.jpg', 250, 2250, 'muhammed', 'raja'),
(6, 'Coco Peat Block - 5 Kg', 'In stock', 150, 'SS Exports', 8956237896, 'Coimbatore', 'product/4.jpg', 253, 37950, 'kumar', 'ssexports'),
(7, 'Coco Peat Block - 5 Kg', 'In stock', 150, 'SS Exports', 8956237896, 'Coimbatore', 'product/4.jpg', 75, 11250, 'priya', 'ssexports');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sno` int(25) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `pqw` varchar(25) NOT NULL,
  `rate` varchar(25) NOT NULL,
  `company` varchar(25) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `path` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `sno`, `pname`, `pqw`, `rate`, `company`, `mobile`, `email`, `address`, `username`, `path`) VALUES
(1, 1, 'Fresh Semi Husked ', 'In stock', '14', 'Raja Traders', 9876543211, 'raja@gmail.com', 'Erode', 'raja', 'product/1.jpg'),
(3, 3, 'Cheap Fresh Semi husked', 'In stock', '9', 'Raja Traders', 9876543211, 'raja@gmail.com', 'Erode', 'raja', 'product/3.jpg'),
(4, 4, 'Coco Peat Block - 5 Kg', 'In stock', '150', 'SS Exports', 8956237896, 'bala@gmail.com', 'Coimbatore', 'ssexports', 'product/4.jpg'),
(5, 5, 'Coco Peat Block - 10 Kg', 'In stock', '250', 'SS Exports', 8956237896, 'bala@gmail.com', 'Coimbatore', 'ssexports', 'product/5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `company` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `sname`, `email`, `mobile`, `address`, `company`, `username`, `password`, `status`) VALUES
(1, 'Raja', 'raja@gmail.com', 9876543211, 'Erode', 'Raja Traders', 'raja', '123', 'approved'),
(2, 'Bala', 'bala@gmail.com', 8956237896, 'Coimbatore', 'SS Exports', 'ssexports', '123', 'approved'),
(3, 'Manikkam', 'manikbhai@gmail.com', 9658745558, 'Pollachi', 'Manik Exports', 'manik', '145', 'pending');
