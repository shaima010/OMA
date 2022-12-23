-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 10:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petsclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentId` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `doctor_national_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(60) NOT NULL,
  `category` varchar(20) NOT NULL,
  `Pet_id` int(11) NOT NULL,
  `Pet_type` varchar(20) NOT NULL,
  `Pet_gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentId`, `customer_id`, `doctor_national_id`, `date`, `time`, `category`, `Pet_id`, `Pet_type`, `Pet_gender`) VALUES
(12, 11223344, 123456, '2018-03-29', '11:00AM-12:00PM', 'Dentest', 123, 'Cat', '2');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_first_name` varchar(20) NOT NULL,
  `customer_last_name` varchar(20) NOT NULL,
  `customer_username` varchar(20) NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_first_name`, `customer_last_name`, `customer_username`, `customer_phone`, `customer_email`, `customer_password`) VALUES
(11223344, 'ddd', 'ddd', 'bvb', 11223344, 'a@a.com', 'd0970714757783e6cf17b26fb8e2298f'),
(19447115, 'fatma', 'alghammari', 'fatma', 97310000, 'f.m.alghammari@hotmail.com', 'ab515fc8490c32d3077a'),
(12345678, 'shaima', 'almatani', '36j1425', 97057458, 'shns-f4e@hotmail.com', '2bd12a930c3012f9bb4e0ea9bec9a3fc'),
(11111152, 'it', 'hct', 'bvb', 12345678, 'ithct@edu.om', '25f9e794323b453885f5181f1b624d0b'),
(3450222, 'Fatima', 'almatani', 'ftim', 99998888, 'fgf@efgfgh.com', 'b0ac0645d2346d5e613e54a6d0e69a0c');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_namtional_id` int(11) NOT NULL,
  `doctor_first_name` varchar(20) NOT NULL,
  `doctor_last_name` varchar(20) NOT NULL,
  `doctor_phone` int(11) NOT NULL,
  `doctor_email` varchar(50) NOT NULL,
  `doctor_password` varchar(200) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_namtional_id`, `doctor_first_name`, `doctor_last_name`, `doctor_phone`, `doctor_email`, `doctor_password`, `category`) VALUES
(18004594, 'khalid', 'ali', 12345678, 'shns-f4e@hotmail.com', '25d55ad283aa400af464c76d713c07ad', 'Bone'),
(12345, 'dghg', 'ligili', 96857896, 'dsfs@gmail.com', '147258369', 'Heart'),
(123456, 'sdfghj', 'zxdcfg', 963852741, 'sfg@gh.dfg', '0', 'Dentest');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petid` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pet_name` varchar(30) NOT NULL,
  `pet_type` varchar(30) NOT NULL,
  `pet_gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petid`, `customer_id`, `pet_name`, `pet_type`, `pet_gender`) VALUES
(123, 11223344, 'tom', 'cat', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `treat`
--

CREATE TABLE `treat` (
  `treat_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `doctor_national_id` int(11) NOT NULL,
  `Treat_type` varchar(500) NOT NULL,
  `problem` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treat`
--

INSERT INTO `treat` (`treat_id`, `pet_id`, `doctor_national_id`, `Treat_type`, `problem`, `date`) VALUES
(3, 123, 18004594, 'injection', 'fever', '2018-03-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentId`,`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_namtional_id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`petid`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `treat`
--
ALTER TABLE `treat`
  ADD PRIMARY KEY (`treat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `treat`
--
ALTER TABLE `treat`
  MODIFY `treat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
