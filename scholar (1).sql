-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2019 at 07:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholar`
--

-- --------------------------------------------------------

--
-- Table structure for table `noc`
--

CREATE TABLE `noc` (
  `ID` int(11) NOT NULL,
  `College` varchar(30) NOT NULL,
  `Dramatics` varchar(15) NOT NULL,
  `Sports` varchar(15) NOT NULL,
  `Music` varchar(15) NOT NULL,
  `Athletics` varchar(15) NOT NULL,
  `Technical` varchar(15) NOT NULL,
  `Dance` varchar(15) NOT NULL,
  `Arts` varchar(15) NOT NULL,
  `Literary` varchar(15) NOT NULL,
  `Eventname` varchar(200) NOT NULL,
  `Startdate` date NOT NULL,
  `Enddate` date NOT NULL,
  `Comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noc`
--

INSERT INTO `noc` (`ID`, `College`, `Dramatics`, `Sports`, `Music`, `Athletics`, `Technical`, `Dance`, `Arts`, `Literary`, `Eventname`, `Startdate`, `Enddate`, `Comment`) VALUES
(16, 'IIT Kanpur', '', 'Sports', '', 'Athletics', '', 'Dance', '', 'Literary', '', '2019-04-03', '2019-04-06', ''),
(17, 'IIT Delhi', 'Dramatics', '', 'Music', 'Athletics', '', '', '', '', 'I am sincere!!', '2019-04-24', '2019-04-17', 'I am sincere!!'),
(18, 'IIT Delhi', 'Dramatics', '', 'Music', 'Athletics', '', '', '', '', 'I am sincere!!', '2019-04-24', '2019-04-17', ''),
(19, 'IIT Kanpur', 'Dramatics', 'Sports', 'Music', '', '', '', '', '', 'SHutter UP', '2019-04-02', '2019-04-04', 'I am obedient!'),
(20, 'MNNIT Allahabad', 'Dramatics', '', '', '', '', '', 'Arts', '', 'uinjinj', '2019-04-25', '2019-04-28', 'jkjn k');

-- --------------------------------------------------------

--
-- Table structure for table `scholarform`
--

CREATE TABLE `scholarform` (
  `ID` int(11) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarform`
--

INSERT INTO `scholarform` (`ID`, `Type`, `Description`, `Amount`) VALUES
(1, 'Government', 'NTSE', 'more than 15000'),
(2, 'Private', 'abcd', '5000 to 15000'),
(3, 'Private', 'popo', 'less than 2000'),
(4, '', '', ''),
(5, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noc`
--
ALTER TABLE `noc`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `scholarform`
--
ALTER TABLE `scholarform`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noc`
--
ALTER TABLE `noc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `scholarform`
--
ALTER TABLE `scholarform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
