-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 03:46 AM
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
-- Table structure for table `tbl_memberaddress`
--

CREATE TABLE `tbl_memberaddress` (
  `DbKey` int(11) NOT NULL,
  `ResidentTypeDbKey` int(11) NOT NULL,
  `Address Number` varchar(250) NOT NULL,
  `Address Type` varchar(250) NOT NULL,
  `Address Line 1` varchar(250) NOT NULL,
  `Address Line 2` varchar(250) NOT NULL,
  `Locality` varchar(250) NOT NULL,
  `District` varchar(250) NOT NULL,
  `City` varchar(250) NOT NULL,
  `State` varchar(250) NOT NULL,
  `Country` varchar(250) NOT NULL,
  `PinCode` varchar(250) NOT NULL,
  `CreatedOn` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_memberaddress`
--
ALTER TABLE `tbl_memberaddress`
  ADD PRIMARY KEY (`DbKey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_memberaddress`
--
ALTER TABLE `tbl_memberaddress`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
