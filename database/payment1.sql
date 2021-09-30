-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 11:41 AM
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
-- Database: `payment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `paymentu1`
--

CREATE TABLE `paymentu1` (
  `pa_ID` int(11) NOT NULL,
  `pa_name` varchar(20) NOT NULL,
  `pa_contact` int(11) NOT NULL,
  `pa_add` varchar(50) NOT NULL,
  `pa_qua` int(11) NOT NULL,
  `pa_pay` varchar(10) NOT NULL,
  `pa_hol` varchar(50) NOT NULL,
  `pa_crdnum` int(11) NOT NULL,
  `pa_mon` int(11) NOT NULL,
  `pa_year` int(11) NOT NULL,
  `pa_secu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentu1`
--

INSERT INTO `paymentu1` (`pa_ID`, `pa_name`, `pa_contact`, `pa_add`, `pa_qua`, `pa_pay`, `pa_hol`, `pa_crdnum`, `pa_mon`, `pa_year`, `pa_secu`) VALUES
(7, 'as', 774047401, 'as', 2, 'card', 'dsd', 123, 1, 2007, 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paymentu1`
--
ALTER TABLE `paymentu1`
  ADD PRIMARY KEY (`pa_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paymentu1`
--
ALTER TABLE `paymentu1`
  MODIFY `pa_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
