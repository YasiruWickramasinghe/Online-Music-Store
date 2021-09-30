-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 11:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactu`
--

CREATE TABLE `contactu` (
  `contact_ID` int(11) NOT NULL,
  `contact_Name` varchar(50) NOT NULL,
  `contact_Email` varchar(50) NOT NULL,
  `contact_Phone` int(11) NOT NULL,
  `contact_Massage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactu`
--

INSERT INTO `contactu` (`contact_ID`, `contact_Name`, `contact_Email`, `contact_Phone`, `contact_Massage`) VALUES
(17, 'abc', 'yasiru@gmail.com', 123, 'hbjbhj'),
(18, '', '', 0, ''),
(19, '', '', 0, ''),
(20, '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactu`
--
ALTER TABLE `contactu`
  ADD PRIMARY KEY (`contact_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactu`
--
ALTER TABLE `contactu`
  MODIFY `contact_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
