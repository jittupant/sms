-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 03:28 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `DbKey` int(11) NOT NULL,
  `SocietyDbKey` int(11) NOT NULL,
  `MemberResidentType` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `MemberRegistrationNumber` varchar(255) NOT NULL,
  `PreviousMemberRegistrationNumber` varchar(255) NOT NULL,
  `OwnershipType` varchar(255) NOT NULL,
  `Salutation` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `PANNo` varchar(255) NOT NULL,
  `AADHARSSNNo` varchar(255) NOT NULL,
  `PassportNo` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `AlternateMobile` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `MemberValidFrom` varchar(255) NOT NULL,
  `MemberValidTo` varchar(255) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Photograph` varchar(255) NOT NULL,
  `Signature` varchar(255) NOT NULL,
  `CreatedOn` varchar(255) NOT NULL,
  `UpdatedOn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`DbKey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
