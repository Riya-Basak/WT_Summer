-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 08:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nid` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`firstname`, `lastname`, `uname`, `email`, `nid`, `phone`, `password`, `picture`, `id`) VALUES
('Ripty', 'Basak', 'rpbasak', 'riptyriya121@gmail.com', '4168278234', '172-7003611', 'rpBasak1', 'admin.docx', 6),
('Riya', 'Basak', 'rbasak', 'riyabasak121@gmail.com', '6852568051', '172-7003612', 'rBasak1', '', 8),
('Riya', 'Basak', 'rrb', 'riptyriya121@gmail.com', '4', '172-7003611', 'rbasak12', 'admin.pdf', 9);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hname` varchar(100) NOT NULL,
  `hlocation` varchar(100) NOT NULL,
  `hrating` varchar(100) NOT NULL,
  `hlicense` varchar(100) NOT NULL,
  `serial` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hname`, `hlocation`, `hrating`, `hlicense`, `serial`) VALUES
('Sugondha', 'Dhaka', '9', 'main.cpp', 1),
('Bistro', 'Dinajpur', '8', 'main.cpp', 2),
('Green', 'Comilla', '6', 'main.cpp', 10),
('Diamond', 'Rangpur', '5', 'main.cpp', 11),
('Green', 'Comilla', '9', '', 21),
('Green', 'Comilla', '9', '', 22),
('village', 'Dhaka', '4', 'main.cpp', 23),
('Sugondha', 'Dinajpur', '', '', 24),
('Sugondha', 'Dinajpur', '', '', 25),
('Green', 'Dhaka', '', '', 32),
('Green', 'Dhaka', '', '', 33),
('village', 'Rangpur', '5', '', 34),
('village', 'Dhaka', '4', 'Green computing.pdf', 35),
('hname', 'hlocation', 'hrating', '', 36),
('hname', 'hlocation', 'hrating', '', 37),
('Food village', 'Comilla', '7', 'Basak firm.pptx', 38);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `serialno` int(100) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `ttype` varchar(100) NOT NULL,
  `contype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`serialno`, `tname`, `ttype`, `contype`) VALUES
(1, 'nabil', 'bus', 'ac'),
(2, 'Novoair', 'plane', 'ac'),
(3, 'Shamoly', 'bus', 'nonac'),
(9, 'Green Line', 'bus', 'ac'),
(10, 'USBangla', 'plane', 'ac'),
(11, 'Hanif', 'bus', 'nonac'),
(19, 'Hanif', '', ''),
(20, 'Hanif', '', ''),
(21, 'Royal', '', ''),
(22, 'Royal', '', ''),
(23, 'Hanif', '', ''),
(24, 'Hanif', '', ''),
(25, 'Hanif', '', ''),
(26, 'Royal', '', ''),
(27, 'Royal', '', ''),
(28, 'Royal', '', ''),
(29, 'Hanif', '', ''),
(30, 'Shamoly', 'You have not selected any type', 'ac'),
(31, 'Royal', '', ''),
(32, 'Hanif', 'You have not selected any type', 'ac'),
(33, 'Hanif', 'You have not selected any type', 'nonac'),
(34, 'Shamoly', '', 'ac'),
(35, 'Shamoly', '', 'nonac'),
(36, 'Hanif', '', 'nonac'),
(37, 'nabil', '', 'nonac'),
(38, 'nabil', 'bus', 'nonac'),
(39, 'nabil', '', 'nonac'),
(40, 'Jack', 'train', 'ac'),
(41, 'Robinson', 'plane', 'ac'),
(42, 'Ghost Rider', 'plane', 'ac'),
(43, 'Eagle', 'train', 'ac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`serialno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `serial` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `serialno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
