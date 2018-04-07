-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 07:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `DbKey` int(11) NOT NULL,
  `Tower` varchar(255) NOT NULL,
  `Block` varchar(255) NOT NULL,
  `PropertyNo` int(11) NOT NULL,
  `PropertyType` varchar(255) NOT NULL,
  `UnitType` varchar(255) NOT NULL,
  `ParkingType` varchar(255) NOT NULL,
  `UnitOfMeasurement` varchar(255) NOT NULL,
  `OriginalArea` varchar(255) NOT NULL,
  `RevisedArea` varchar(255) NOT NULL,
  `PropertyDisplayName` varchar(255) NOT NULL,
  `Remarks` text NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Currency` varchar(250) NOT NULL,
  `CurrencyAmount` float(10,3) NOT NULL,
  `ExchangeRate` float(10,3) NOT NULL,
  `OriginalPrice` float(10,3) NOT NULL,
  `RevisedPrice` float(10,3) NOT NULL,
  `CreatedOn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`DbKey`, `Tower`, `Block`, `PropertyNo`, `PropertyType`, `UnitType`, `ParkingType`, `UnitOfMeasurement`, `OriginalArea`, `RevisedArea`, `PropertyDisplayName`, `Remarks`, `Status`, `Currency`, `CurrencyAmount`, `ExchangeRate`, `OriginalPrice`, `RevisedPrice`, `CreatedOn`) VALUES
(1, 'ffsdfds', 'dfsdf', 2018, 'fvdf', '2018-04-21', 'gdfbcvb', '2018-04-21', '2018-04-21', 'ffsdfs', 'fsdffsdfs', 'sfsdf', 'fsdf', '354.000', 4534.000, 435.000, 345.000, 34543.000, '04-03-2018'),
(2, 'text', 'test block', 111111, 'kiosk', '3BHK', 'Covered', 'Nos', '2017-11-30', '111', '111', '11sxsx', 'Active', 'USD', 11.000, 121.000, 12.000, 23.000, '04-03-2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`DbKey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
