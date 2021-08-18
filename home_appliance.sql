-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 06:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_appliance`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `Brand` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `BuyingPrice` int(40) NOT NULL,
  `SellingPrice` int(40) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Displayable` varchar(10) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PID`, `Name`, `Model`, `Category`, `Brand`, `Color`, `BuyingPrice`, `SellingPrice`, `Quantity`, `Displayable`, `Description`) VALUES
(1, 'Samsung Top Mount Refrigerator', '45h55', 'Refrigerator', 'Samsung', 'Silver', 70000, 72900, 5, 'Yes', 'Samsung Top Mount Refrigerator.'),
(2, 'Samsung 50', 'QA50Q60TARSER SKU', 'TV', 'Samsung', 'Black', 111900, 114000, 10, 'Yes', 'Quantum Dot Technology delivers our finest picture ever. With Color Volume 100%, Quantum Dot takes light and turns it into breathtaking color that stays true at any level of brightness.'),
(3, 'Whirlpool Supreme Cool In', 'SAI12K30SC0', 'AC', 'Whirlpool', 'Black', 54000, 58000, 0, 'Yes', 'CONSUMES LESS ENERGY\r\nZERO IMPACT ON OZONE LAYER                         \r\nHIGHER COOLING CAPACITY'),
(4, 'Panasonic Multi Cooker SR', 'W22 GS', 'Kitchen', 'Panasonic ', 'Red', 3400, 3700, 10, 'Yes', 'Voltage	220 V\r\n•Frequency	50 Hz\r\n•Wattage	730 W\r\n•Capacity	2.2 L'),
(25, 'Philips Beard Trimmer', 'BT3105', 'others', 'others', 'Blue', 4000, 4500, 10, 'Yes', '0.5mm precision settings\r\n45 min cordless use/2h charge\r\nStainless steel blades'),
(26, 'Bosch Serie 4 Free-stan', 'SMS50D08GC', 'WashingMachine', 'others', 'Silver', 72900, 75900, 10, 'Yes', '5 programmes:\r\n\r\nIntensive 70 °C, Auto 45-65 °C, Eco 50 °C, Quick wash 45 °C, Pre-Rinse\r\n\r\n \r\n\r\n1 special options: HygienePlus\r\n\r\n4 cleaning temperatures\r\n\r\nActiveWater hydraulic system');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_ID` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_ID`, `Name`, `DOB`, `Gender`, `Address`, `Email`, `User_Name`, `Password`) VALUES
('122', 'mrr', '2001-08-03', 'male', ' dh', 'mr@gm.com', 'er', '1234567'),
('38', 'Monirul', '27-08-1999', 'Male', 'Dhaka', 'aiub@aiub.edu', 'mr', '1234'),
('38660', 'mr', '2001-08-11', 'male', 'dhaka', 'mr@gmail.co', 'mre', '12345'),
('38665', 'Rahat ', '25-01-1999', 'Male', 'Dhaka', 'aiub@aiub.edu', 'r1', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `DateOfBirth` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `Name`, `Email`, `Username`, `Password`, `Gender`, `DateOfBirth`) VALUES
(1, 'Mredul', 'mredul@gmail.com', 'm', 'a', 'male', '1998-06-16'),
(6, 'Monirul', 'monirul@gmail.com', 'Monirul', 'abcd@1234', 'male', '2021-07-07'),
(7, 'Monirul11', 'monirul@gmail.com', 'Monirul1', 'abcd@1234', 'male', '2021-07-29'),
(8, 'new', 'new@gmail.com', 'newww', '12345678@', 'male', '2018-06-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
