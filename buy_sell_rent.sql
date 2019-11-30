-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2018 at 06:13 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buy.sell.rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `cid` int(11) DEFAULT NULL,
  `passkey` varchar(30) DEFAULT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `nid` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phone` double DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `buying_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) DEFAULT NULL,
  `passkey` varchar(30) DEFAULT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `nid` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phone` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE `has` (
  `car_id` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `insurance_no` varchar(30) DEFAULT NULL,
  `ins_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `insurance_no` varchar(30) DEFAULT NULL,
  `ins_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` varchar(30) DEFAULT NULL,
  `no_of_installment` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `cid` int(11) DEFAULT NULL,
  `passkey` varchar(30) DEFAULT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `nid` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phone` double DEFAULT NULL,
  `pay_id` varchar(30) DEFAULT NULL,
  `no_of_installment` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `cid` int(11) DEFAULT NULL,
  `passkey` varchar(30) DEFAULT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `nid` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phone` double DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `reanting_rate` double DEFAULT NULL,
  `renting_date` date DEFAULT NULL,
  `renting_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `cid` int(11) DEFAULT NULL,
  `passkey` varchar(30) DEFAULT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `nid` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phone` double DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `model` varchar(30) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `mileage` double DEFAULT NULL,
  `used_for` varchar(30) DEFAULT NULL,
  `selling_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
