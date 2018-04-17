-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 06:43 PM
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
-- Table structure for table `tbl_addressdetails`
--

CREATE TABLE `tbl_addressdetails` (
  `DbKey` int(11) NOT NULL,
  `SocietyDbKey` int(11) NOT NULL,
  `AddressLine1` text NOT NULL,
  `AddressLine2` text NOT NULL,
  `Locality` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `PinCode` varchar(255) NOT NULL,
  `CreatedOn` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addressdetails`
--

INSERT INTO `tbl_addressdetails` (`DbKey`, `SocietyDbKey`, `AddressLine1`, `AddressLine2`, `Locality`, `District`, `City`, `State`, `Country`, `PinCode`, `CreatedOn`, `Status`) VALUES
(1, 7, 'Majri Mafi', 'Mohkhampur', 'IIP', 'Dehradun', 'Dehradun', 'Uttarakhand', 'India', '248001', '04-01-2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_areadetails`
--

CREATE TABLE `tbl_areadetails` (
  `DbKey` int(11) NOT NULL,
  `SocietyDbKey` int(11) NOT NULL,
  `AreaType` varchar(255) NOT NULL,
  `AreaUOM` varchar(255) NOT NULL,
  `OriginalArea` varchar(255) NOT NULL,
  `RevisedArea` varchar(255) NOT NULL,
  `CIA` varchar(255) NOT NULL,
  `CreatedOn` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_areadetails`
--

INSERT INTO `tbl_areadetails` (`DbKey`, `SocietyDbKey`, `AreaType`, `AreaUOM`, `OriginalArea`, `RevisedArea`, `CIA`, `CreatedOn`, `Status`) VALUES
(1, 1, 'Built Up Area', 'Sq.Ft', 'fdsgdf', 'dgdfgdf', 'dgdsgd', '03-28-2018', 1),
(2, 1, 'Parks/Open Area', 'Acre', '1234sq', '122ws', '121222', '04-01-2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactdetails`
--

CREATE TABLE `tbl_contactdetails` (
  `DbKey` int(11) NOT NULL,
  `SocietyDbKey` int(11) NOT NULL,
  `ContactTypeDbKey` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address_PropertyNo` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `MembershipNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `ValidFrom` varchar(255) NOT NULL,
  `ValidTo` varchar(255) NOT NULL,
  `CreatedOn` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contactdetails`
--

INSERT INTO `tbl_contactdetails` (`DbKey`, `SocietyDbKey`, `ContactTypeDbKey`, `Name`, `Address_PropertyNo`, `Phone`, `Mobile`, `MembershipNumber`, `Email`, `ValidFrom`, `ValidTo`, `CreatedOn`, `Status`) VALUES
(1, 7, 6, 'Jitendra', 'Dehradun GPU', '9897911162', '8826707229', 'JIttu0098', 'Jittupant12@gmail.com', '2017-11-30', '2020-11-29', '04-01-2018', 1),
(2, 1, 9, 'Sonu', 'GPU', '1352661890', '8826707229', 'JIT098877', 'Jittu@gmail.com', '2015-11-30', '2019-11-29', '04-01-2018', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `DbKey` int(11) NOT NULL,
  `UniqId` varchar(80) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `EncryptPass` text NOT NULL,
  `Salt` text NOT NULL,
  `CreatedOn` varchar(50) NOT NULL,
  `UpdatedOn` varchar(50) DEFAULT NULL,
  `UserType` varchar(250) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`DbKey`, `UniqId`, `UserName`, `Email`, `Phone`, `EncryptPass`, `Salt`, `CreatedOn`, `UpdatedOn`, `UserType`, `Status`) VALUES
(1, '59f71ebe85fb94.24073241', 'Super Admin', 'Superadmin@gmail.com', '9876543210', 'F99Mett4MqOgSR8E2sdfQkxWL0I0OTc5MDhkM2Y4', '497908d3f8', '29-11-2017 17:21:05', NULL, 'SUPERADMIN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_society`
--

CREATE TABLE `tbl_society` (
  `DbKey` int(11) NOT NULL,
  `CompanyDbKey` int(11) NOT NULL DEFAULT '1',
  `Name` varchar(255) NOT NULL,
  `AliasName` varchar(255) NOT NULL,
  `SocietyRegistrationNumber` varchar(255) NOT NULL,
  `RegistrationDate` varchar(255) NOT NULL,
  `RWARegistrationNumber` varchar(255) NOT NULL,
  `RWARegistrationDate` varchar(255) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `ConstructedBy` varchar(255) NOT NULL,
  `DateOfComencementOfConstruction` varchar(255) NOT NULL,
  `DateOfConstructionCompletion` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `AlternateContactNumber` varchar(255) NOT NULL,
  `PANno` varchar(255) NOT NULL,
  `TANno` varchar(255) NOT NULL,
  `FAXNumber` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Photo` varchar(255) NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `Pincode` varchar(255) NOT NULL,
  `CreatedOn` varchar(255) NOT NULL,
  `UpdatedOn` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_society`
--

INSERT INTO `tbl_society` (`DbKey`, `CompanyDbKey`, `Name`, `AliasName`, `SocietyRegistrationNumber`, `RegistrationDate`, `RWARegistrationNumber`, `RWARegistrationDate`, `Remarks`, `ConstructedBy`, `DateOfComencementOfConstruction`, `DateOfConstructionCompletion`, `ContactNumber`, `AlternateContactNumber`, `PANno`, `TANno`, `FAXNumber`, `Email`, `Category`, `Photo`, `Logo`, `Pincode`, `CreatedOn`, `UpdatedOn`, `Status`) VALUES
(1, 1, 'Jitendra', 'Jittu', 'TestSociety1', '2017-12-01', 'TestRWA00125', '2017-09-08', 'Test Remark', 'Test Pvt Ltd', '2017-11-10', '2018-07-22', '9720361880', '8826707229', 'ck05510524l', '4587965841', '214522', 'Jittupant12@gmail.com', 'Commercial', 'Hydrangeas.jpg', 'Jellyfish.jpg', '248001', '03-28-2018', '', 1),
(7, 1, 'Jittu', 'Jitendra', '123', '2016-10-30', '24234', '2016-11-30', 'svdffv', 'jittu', '2016-11-29', '2016-11-29', '97878979', 'pu98t76768798', 'y87698', '7u897868', '86786', '78678678y', 'Commercial', 'Chrysanthemum.jpg', 'Tulips.jpg', 'safeet45', '03-30-2018', '', 1),
(8, 1, 'fgdfgd', 'fgdf', 'gfdgdf', '2018-03-15', 'gdfgdf', '2018-03-24', 'dfg', 'sdgd', '2018-07-10', '2018-03-22', 'dfgd', 'dfg', 'gdfg', 'gdfgd', 'fgdf', 'gdfgdfg', 'Others', '5abdce77a03de.jpg', 'Chrysanthemum.jpg', 'dfgdf', '03-30-2018', '', 1),
(9, 1, 'fdvf', 'fhfg', '75675', '2018-04-18', '5675756', '0007-05-16', 'y5yruyu55y', 'y56y56ry', '2018-04-20', '2018-04-19', 'dfvry54yr', 'y5y5667567657', '56756756', '756756', '756756', '7567567', 'Commercial', '5ac086bf53ea1.png', '5ac086bf57f79.png', 'fghfggf', '04-01-2018', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taxdetails`
--

CREATE TABLE `tbl_taxdetails` (
  `DbKey` int(11) NOT NULL,
  `SocietyDbKey` int(11) NOT NULL,
  `TaxType` varchar(255) NOT NULL,
  `Applicability` varchar(255) NOT NULL,
  `StateName` varchar(255) NOT NULL,
  `RegistrationNumber` varchar(255) NOT NULL,
  `CreatedOn` varchar(255) NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_taxdetails`
--

INSERT INTO `tbl_taxdetails` (`DbKey`, `SocietyDbKey`, `TaxType`, `Applicability`, `StateName`, `RegistrationNumber`, `CreatedOn`, `Status`) VALUES
(1, 1, 'Service Tax', 'State', 'UK', '13585852', '03-28-2018', 1),
(2, 7, 'Service Tax', 'INDIA', 'UP', '9890009000912', '04-01-2018', 1),
(3, 1, 'VAT', 'INDIA', 'csdz', 'sdv', '04-01-2018', 1),
(4, 1, 'VAT', 'INDIA', 'rre', 'reg', '04-01-2018', 1),
(5, 1, 'VAT', 'INDIA', 'scv', 'sdc', '04-01-2018', 1),
(6, 8, 'VAT', 'INDIA', 'sfdf', 'sdfsdf', '04-01-2018', 1),
(7, 1, 'VAT', 'INDIA', 'ERG', 'REG', '04-01-2018', 1),
(8, 1, 'VAT', 'INDIA', 'VDF', 'FDV', '04-01-2018', 1),
(9, 1, 'VAT', 'INDIA', 'dbf', 'fdb', '04-01-2018', 1),
(10, 1, 'VAT', 'INDIA', 'sdv', 'vsdv', '04-01-2018', 1),
(11, 1, 'VAT', 'INDIA', 'fgb', 'bfgbfg', '04-01-2018', 1),
(12, 1, 'VAT', 'INDIA', 'fgbdf', 'bdfb', '04-01-2018', 1),
(13, 1, 'VAT', 'INDIA', 'fdbdf', 'bdfbdf', '04-01-2018', 1),
(14, 1, 'VAT', 'INDIA', 'bdfb', 'dfbdf', '04-01-2018', 1),
(15, 1, 'VAT', 'INDIA', 'dbfbd', 'fbd', '04-01-2018', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addressdetails`
--
ALTER TABLE `tbl_addressdetails`
  ADD PRIMARY KEY (`DbKey`);

--
-- Indexes for table `tbl_areadetails`
--
ALTER TABLE `tbl_areadetails`
  ADD PRIMARY KEY (`DbKey`);

--
-- Indexes for table `tbl_contactdetails`
--
ALTER TABLE `tbl_contactdetails`
  ADD PRIMARY KEY (`DbKey`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`DbKey`),
  ADD UNIQUE KEY `UniqId` (`UniqId`);

--
-- Indexes for table `tbl_society`
--
ALTER TABLE `tbl_society`
  ADD PRIMARY KEY (`DbKey`);

--
-- Indexes for table `tbl_taxdetails`
--
ALTER TABLE `tbl_taxdetails`
  ADD PRIMARY KEY (`DbKey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addressdetails`
--
ALTER TABLE `tbl_addressdetails`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_areadetails`
--
ALTER TABLE `tbl_areadetails`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contactdetails`
--
ALTER TABLE `tbl_contactdetails`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_society`
--
ALTER TABLE `tbl_society`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_taxdetails`
--
ALTER TABLE `tbl_taxdetails`
  MODIFY `DbKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
