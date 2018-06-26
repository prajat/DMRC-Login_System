-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 07:24 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `rev`
--

CREATE TABLE `rev` (
  `sno` int(20) NOT NULL,
  `line` varchar(20) NOT NULL,
  `station` varchar(25) NOT NULL,
  `tom1` int(11) NOT NULL,
  `tom2` int(11) NOT NULL,
  `cc` int(11) NOT NULL,
  `tum1` int(11) NOT NULL,
  `tum2` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rev`
--

INSERT INTO `rev` (`sno`, `line`, `station`, `tom1`, `tom2`, `cc`, `tum1`, `tum2`, `date`) VALUES
(1, 'yellow', 'gtb nagar', 25, 50, 11, 89, 85, '2018-06-06'),
(25, 'dasd', 'sdasd', 55454, 151, 5151, 51514, 51515, '0565-05-15'),
(34, 'magenta', 'ina', 32, 4324, 32424, 324, 342, '2020-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `userinfotbl`
--

CREATE TABLE `userinfotbl` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfotbl`
--

INSERT INTO `userinfotbl` (`username`, `password`) VALUES
('abc', '123'),
('sd', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rev`
--
ALTER TABLE `rev`
  ADD PRIMARY KEY (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
