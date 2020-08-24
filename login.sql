-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 06:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `SerialNumber` int(60) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Registration` text NOT NULL,
  `Semester` int(4) NOT NULL,
  `Course1` varchar(255) NOT NULL,
  `Course2` varchar(255) NOT NULL,
  `Course3` varchar(255) NOT NULL,
  `Course4` varchar(255) NOT NULL,
  `Course5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`SerialNumber`, `Name`, `Registration`, `Semester`, `Course1`, `Course2`, `Course3`, `Course4`, `Course5`) VALUES
(1, 'Snigdha Sharma', '20184097', 2, 'MA12101', 'AM12201', 'PH12102', 'HS12201', 'CE12101'),
(2, 'Purva Gautam', '20184014', 2, 'MA12101', 'AM12201', 'PH12102', 'HS12201', 'CE12101'),
(3, 'Kshitij Agrawal', '20184081', 2, 'MA12101', 'AM12201', 'PH12102', 'HS12201', 'CE12101'),
(4, 'Nikhar Shah', '20184198', 2, 'MA12101', 'AM12201', 'PH12102', 'HS12201', 'CE12101'),
(5, 'John', '20179873', 4, '', '', '', '', ''),
(6, 'John', '20179873', 4, '', '', '', '', ''),
(7, 'John', '20179873', 4, '', '', '', '', ''),
(8, 'John', '20179873', 4, '', '', '', '', ''),
(9, 'John', '20179873', 4, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `attn1`
--

CREATE TABLE `attn1` (
  `RegistrationNo` text NOT NULL,
  `Monday` tinyint(1) NOT NULL,
  `Tuesday` tinyint(1) NOT NULL,
  `Wednesday` tinyint(1) NOT NULL,
  `Thursday` tinyint(1) NOT NULL,
  `Friday` tinyint(1) NOT NULL,
  `Percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attn1`
--

INSERT INTO `attn1` (`RegistrationNo`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Percentage`) VALUES
('20184014', 0, 1, 0, 1, 0, 40);

-- --------------------------------------------------------

--
-- Table structure for table `attn2`
--

CREATE TABLE `attn2` (
  `RegistrationNo` int(11) NOT NULL,
  `Monday` int(11) NOT NULL,
  `Tuesday` int(11) NOT NULL,
  `Wednesday` int(11) NOT NULL,
  `Thursday` int(11) NOT NULL,
  `Friday` int(11) NOT NULL,
  `Percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attn3`
--

CREATE TABLE `attn3` (
  `RegistrationNo` text NOT NULL,
  `Monday` tinyint(1) NOT NULL,
  `Tuesday` tinyint(1) NOT NULL,
  `Wednesday` tinyint(1) NOT NULL,
  `Thursday` tinyint(1) NOT NULL,
  `Friday` tinyint(1) NOT NULL,
  `Percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attn3`
--

INSERT INTO `attn3` (`RegistrationNo`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Percentage`) VALUES
('20184081', 1, 0, 1, 1, 0, 60);

-- --------------------------------------------------------

--
-- Table structure for table `attn4`
--

CREATE TABLE `attn4` (
  `RegistrationNo` text NOT NULL,
  `Monday` tinyint(1) NOT NULL,
  `Tuesday` tinyint(1) NOT NULL,
  `Wednesday` tinyint(1) NOT NULL,
  `Thursday` tinyint(1) NOT NULL,
  `Friday` tinyint(1) NOT NULL,
  `Percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attn4`
--

INSERT INTO `attn4` (`RegistrationNo`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Percentage`) VALUES
('20184014', 1, 0, 1, 0, 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `attn5`
--

CREATE TABLE `attn5` (
  `RegistrationNo` text NOT NULL,
  `Monday` tinyint(1) NOT NULL,
  `Tuesday` tinyint(1) NOT NULL,
  `Wednesday` tinyint(1) NOT NULL,
  `Thursday` tinyint(1) NOT NULL,
  `Friday` tinyint(1) NOT NULL,
  `Percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attn5`
--

INSERT INTO `attn5` (`RegistrationNo`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Percentage`) VALUES
('20184014', 1, 1, 0, 1, 0, 60),
('20184097', 0, 1, 0, 1, 0, 40);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `student_id` int(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Category` varchar(7) NOT NULL,
  `DOB` date NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`student_id`, `Name`, `Contact`, `Email`, `Category`, `DOB`, `ID`) VALUES
(20184081, 'Kshitij', 6263046669, 'kshtj09@gmail.com', 'general', '2019-04-18', 7),
(20184097, 'Snigdha', 9977819299, 'j@k.com', 'general', '2019-04-25', 9),
(20183086, 'Saloni', 9900887766, 'saloni@gmail.com', 'general', '2019-04-04', 11),
(20184014, 'Purva', 7987318738, 'gautam.purva@gmail.com', 'general', '2001-01-15', 12),
(20180016, 'Ravina', 2645728927, 'ag@gmail.com', 'general', '2019-04-04', 13),
(20184123, 'Shubham shah', 70, 'nikharshah2000@gmail.com', 'general', '2020-08-21', 21);

-- --------------------------------------------------------

--
-- Table structure for table `dinner_sabzi`
--

CREATE TABLE `dinner_sabzi` (
  `dinner_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinner_sabzi`
--

INSERT INTO `dinner_sabzi` (`dinner_id`, `item_name`) VALUES
(1, 'Soyabean Aaloo'),
(2, 'Baingan Bhurta'),
(3, 'Kathal Veg'),
(4, 'Aalo-Gobhi-Tomato'),
(5, 'Dum aalo'),
(6, 'Shahi Paneer'),
(7, 'Mix.Veg'),
(8, 'Aaloo Shimla Mirch Veg'),
(9, 'Bhindi'),
(10, 'Rajma'),
(11, 'Palak Paneer'),
(12, 'Veg Kofta'),
(13, 'Palak Corn'),
(14, 'Aaloo Beans'),
(15, 'Baingan Bharta'),
(16, 'Paneer Butter Masala'),
(17, 'Lockey Kofta Curry'),
(18, 'Veg Navratna'),
(19, 'Palak Paneer'),
(20, 'Kathal Veg'),
(21, 'Baingan Bharta');

-- --------------------------------------------------------

--
-- Table structure for table `lunch-sabzi`
--

CREATE TABLE `lunch-sabzi` (
  `lunch_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch-sabzi`
--

INSERT INTO `lunch-sabzi` (`lunch_id`, `item_name`) VALUES
(1, 'Mix.Veg'),
(2, 'Aalo-Gobhi-Tomato'),
(3, 'Bhindi'),
(4, 'Aaloo Beans'),
(5, 'Veg Kofta'),
(6, 'Rajma'),
(7, 'Palak paneer'),
(8, 'Palak Corn'),
(9, 'Soyabean Aloo'),
(10, 'Baingan Bharta'),
(11, 'Kathal Veg'),
(12, 'Dum Aloo'),
(13, 'Shahi Paneer'),
(14, 'Aloo Shimla'),
(15, 'Aloo Parwali Masala'),
(16, 'Chole Masala'),
(17, 'Jeera Sambhar'),
(18, 'Veg Biryani'),
(19, 'Mix Veg'),
(20, 'Aloo Shimla'),
(21, 'Bhindi');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `lunch_id` int(11) NOT NULL,
  `dinner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `day`, `lunch_id`, `dinner_id`) VALUES
(11, 'Monday', 1, 1),
(12, 'Monday', 2, 2),
(13, 'Monday', 3, 3),
(14, 'Tuesday', 4, 4),
(15, 'Tuesday', 5, 5),
(16, 'Tuesday', 6, 6),
(17, 'Wednesday', 7, 7),
(18, 'Wednesday', 8, 8),
(19, 'Wednesday', 9, 9),
(20, 'Thursday', 10, 10),
(21, 'Thursday', 11, 11),
(22, 'Thursday', 12, 12),
(23, 'Friday', 13, 13),
(24, 'Friday', 14, 14),
(25, 'Friday', 15, 15),
(26, 'Saturday', 16, 16),
(27, 'Saturday', 17, 17),
(28, 'Saturday', 18, 18),
(29, 'Sunday', 19, 19),
(30, 'Sunday', 20, 20),
(31, 'Sunday', 21, 21);

-- --------------------------------------------------------

--
-- Table structure for table `noc`
--

CREATE TABLE `noc` (
  `ID` int(11) NOT NULL,
  `College` varchar(30) DEFAULT NULL,
  `Dramatics` varchar(15) DEFAULT NULL,
  `Sports` varchar(15) DEFAULT NULL,
  `Music` varchar(15) DEFAULT NULL,
  `Athletics` varchar(15) DEFAULT NULL,
  `Technical` varchar(15) DEFAULT NULL,
  `Dance` varchar(15) DEFAULT NULL,
  `Arts` varchar(15) DEFAULT NULL,
  `Literary` varchar(15) DEFAULT NULL,
  `Eventname` varchar(200) NOT NULL,
  `Startdate` date NOT NULL,
  `Enddate` date NOT NULL,
  `Comment` varchar(200) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noc`
--

INSERT INTO `noc` (`ID`, `College`, `Dramatics`, `Sports`, `Music`, `Athletics`, `Technical`, `Dance`, `Arts`, `Literary`, `Eventname`, `Startdate`, `Enddate`, `Comment`, `student_id`) VALUES
(12, 'MNNIT Allahabad', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0);

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
(5, '', '', ''),
(6, 'Government', 'brgbe', 'less than 2000'),
(7, 'Government', 'hhhhhh', '2000 to 5000'),
(8, 'Government', '', 'less than 2000');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `User`, `Pass`) VALUES
(1, '20184014', 'purva'),
(2, '20184081', 'kshitij'),
(3, '20184097', 'snigdha'),
(4, '20184198', 'nikhar'),
(25, '20184075', 'chinmay'),
(27, '20183086', 'saloni'),
(28, '20185084', 'divyasri'),
(29, '20185040', 'rishabh'),
(30, '20180016', 'bintee'),
(32, '20181029', 'ananya');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `student_id` int(11) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `Password`) VALUES
(111111, '1234'),
(9543454, 'nnn'),
(20001000, 'nikhar'),
(20180016, 'ravina123'),
(20183086, 'sallu'),
(20184000, 'nikhar1234'),
(20184014, 'purva123'),
(20184081, 'kshitij123'),
(20184097, 'snigdha123'),
(20184123, 'ullu'),
(20184198, 'nikhar123'),
(20185084, 'divyasri123'),
(126939123, 'aalo');

-- --------------------------------------------------------

--
-- Table structure for table `student_menu`
--

CREATE TABLE `student_menu` (
  `sm_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `lunch_id` int(11) NOT NULL,
  `dinner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_menu`
--

INSERT INTO `student_menu` (`sm_id`, `student_id`, `day`, `lunch_id`, `dinner_id`) VALUES
(141, 20184097, 'Monday', 1, 1),
(142, 20184097, 'Tuesday', 4, 4),
(143, 20184097, 'Wednesday', 7, 7),
(144, 20184097, 'Thursday', 10, 10),
(145, 20184097, 'Friday', 13, 13),
(146, 20184097, 'Saturday', 16, 16),
(147, 20184097, 'Sunday', 19, 19),
(162, 20184014, 'Monday', 1, 1),
(163, 20184014, 'Tuesday', 4, 5),
(164, 20184014, 'Wednesday', 7, 7),
(165, 20184014, 'Thursday', 10, 12),
(166, 20184014, 'Friday', 13, 13),
(167, 20184014, 'Saturday', 16, 16),
(168, 20184014, 'Sunday', 19, 19);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `course` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `course`, `pass`) VALUES
(1, 'MA12101', 'maths'),
(2, 'AM12201', 'mechanics'),
(3, 'PH12102', 'physics'),
(4, 'HS12201', 'english'),
(5, 'CE12101', 'chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogin`
--

CREATE TABLE `teacherlogin` (
  `Attendance` tinyint(1) NOT NULL,
  `Percent` int(11) NOT NULL,
  `StudentName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`Attendance`, `Percent`, `StudentName`) VALUES
(1, 75, 'Snigdha Sharma'),
(1, 75, 'Snigdha Sharma'),
(1, 75, 'Snigdha Sharma'),
(1, 75, 'Snigdha Sharma'),
(1, 75, 'Snigdha Sharma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`SerialNumber`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `dinner_sabzi`
--
ALTER TABLE `dinner_sabzi`
  ADD PRIMARY KEY (`dinner_id`);

--
-- Indexes for table `lunch-sabzi`
--
ALTER TABLE `lunch-sabzi`
  ADD PRIMARY KEY (`lunch_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `lunch_id` (`lunch_id`),
  ADD KEY `dinner_id` (`dinner_id`);

--
-- Indexes for table `noc`
--
ALTER TABLE `noc`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `scholarform`
--
ALTER TABLE `scholarform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_menu`
--
ALTER TABLE `student_menu`
  ADD PRIMARY KEY (`sm_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `lunch_id` (`lunch_id`),
  ADD KEY `dinner_id` (`dinner_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `SerialNumber` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `dinner_sabzi`
--
ALTER TABLE `dinner_sabzi`
  MODIFY `dinner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `lunch-sabzi`
--
ALTER TABLE `lunch-sabzi`
  MODIFY `lunch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `noc`
--
ALTER TABLE `noc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `scholarform`
--
ALTER TABLE `scholarform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `student_menu`
--
ALTER TABLE `student_menu`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`lunch_id`) REFERENCES `lunch-sabzi` (`lunch_id`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`dinner_id`) REFERENCES `dinner_sabzi` (`dinner_id`);

--
-- Constraints for table `student_menu`
--
ALTER TABLE `student_menu`
  ADD CONSTRAINT `student_menu_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_info` (`student_id`),
  ADD CONSTRAINT `student_menu_ibfk_2` FOREIGN KEY (`lunch_id`) REFERENCES `lunch-sabzi` (`lunch_id`),
  ADD CONSTRAINT `student_menu_ibfk_3` FOREIGN KEY (`dinner_id`) REFERENCES `dinner_sabzi` (`dinner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
