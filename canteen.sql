-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 08:53 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `canteenownerworker`
--

CREATE TABLE `canteenownerworker` (
  `Ename` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Ousername` varchar(20) NOT NULL,
  `Opassword` varchar(20) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Contact_No` bigint(20) NOT NULL,
  `Empid` int(3) NOT NULL,
  `pin_assigned` bigint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canteenownerworker`
--

INSERT INTO `canteenownerworker` (`Ename`, `Email`, `Ousername`, `Opassword`, `Designation`, `Contact_No`, `Empid`, `pin_assigned`) VALUES
('Ayush', 'ayush.cse@gmail.com', 'ayushcan', '12345', 'Owner', 6201437251, 101, NULL),
('test', 'test@mail.com', 'testOwner', 'test', 'DA', 9876543210, 102, 700009),
('test1', 'test1@mail.com', 'testOwner1', 'test', 'DA', 9876543210, 103, 700098),
('a', 'b@mail.com', 'a', '123', 'DA', 6201437251, 104, 700005),
('b', 'c@mail.com', 'b', '', 'a', 0, 107, NULL),
('b', 'c@mail.com', 'Sdn', '1234', 'a', 0, 108, NULL),
('Jyoti', 'Jyoti@gmail.com', 'jyoti', '12345', 'Headchef', 123456325, 109, NULL),
('Manohar', 'manohar@mail.com', 'manohar', '12345', 'Developer', 123568547, 110, NULL),
('Manohar', 'manohar@mail.com', 'manohar02', '12345', 'Developer', 123568547, 112, NULL),
('bhanug', 'bdkjbk@gmail.com', 'bhanug', '12345', 'head', 9304258070, 113, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Itemid` int(5) NOT NULL COMMENT 'Foreign Key',
  `itemname` varchar(40) NOT NULL,
  `price` int(4) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Itemid`, `itemname`, `price`, `qty`) VALUES
(1, 'Rice', 30, 2),
(2, 'DAL FRY', 50, 3),
(3, 'Chowmien', 60, 4),
(5, 'Chicken Roll', 65, 4),
(9, 'Gulab Jamun', 15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Name` varchar(40) DEFAULT NULL,
  `Email` varchar(40) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Ph_no` bigint(10) NOT NULL,
  `Cid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Email`, `Address`, `Username`, `Password`, `Ph_no`, `Cid`) VALUES
('Ayush Verma', 'ayush.verma3099@gmail.com', 'Patna', 'ayushverma', '1234567890', 6201437251, 1),
('Anuj Kumar Verma', 'akverma0702@gmail.com', 'Biharsharif', 'anujkumarverma', '1234567890', 7488167969, 2),
('Aryan                                   ', 'a____________________@gmail.com', '----------------------------', 'aryan                       ---', '1234567890', 9525909507, 3),
('Tanya Verma', 'tanyaverma@gmail.com', 'Patna', 'tanyaverma', '1234567890', 9876543210, 4),
('Tanya Verma', 'tanyaverma@gmail.com', 'Patna', 'tanyaverma02', '1234567890', 9876543210, 7),
('Jyoti ', 'jyoti@gmail.com', 'Kolkata', 'jyoti', '1234567890', 1234567890, 9),
('Modi jyoti', 'jyoti@ymail.com', 'MG Road', 'jyotimodi', '1234', 235689, 12),
('Ajay', 'a@g.com', 'Saltlake', 'ajay', '123', 123456, 13),
('JyotiG', 'jyoti4499@gmail.com', 'abc street', 'jyotics', '1234', 6201437269, 14),
('', '', '', '', '', 0, 15),
('astha verma', 'astha@gmail.com', 'patna', 'astha', '12345', 9304258070, 16),
('Bhanu ', 'B@gmail.com', 'CU', 'bhanu', '12345', 1234567890, 17);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Itemid` int(3) NOT NULL,
  `ItemName` varchar(20) NOT NULL,
  `Price` int(4) NOT NULL,
  `Description` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Itemid`, `ItemName`, `Price`, `Description`) VALUES
(1, 'Rice', 30, 'Plain Rice'),
(2, 'DAL FRY', 50, 'TASTY'),
(3, 'Chowmien', 60, 'Chineese'),
(4, 'Chicken Chowmien', 120, 'Chineese'),
(5, 'Chicken Roll', 65, 'Chineese'),
(6, 'Egg Roll', 45, 'Chineese'),
(7, 'Paneer Roll', 55, 'Chineese'),
(8, 'Chicken kassa', 80, 'Tasty'),
(9, 'Gulab Jamun', 15, 'Desi Ghee');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Oid` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `price` int(5) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Oid`, `cname`, `price`, `phone_no`, `date`) VALUES
(1, 'Ayush Verma', 30, 1201437251, '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `cid` int(5) NOT NULL,
  `OrderNo` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`cid`, `OrderNo`) VALUES
(1, 101);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `canteenownerworker`
--
ALTER TABLE `canteenownerworker`
  ADD PRIMARY KEY (`Empid`),
  ADD UNIQUE KEY `Ousername` (`Ousername`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Itemid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cid`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Itemid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `canteenownerworker`
--
ALTER TABLE `canteenownerworker`
  MODIFY `Empid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
