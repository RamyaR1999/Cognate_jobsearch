-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 03, 2021 at 03:16 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `Logo` varchar(32) NOT NULL,
  `Firstname` varchar(32) NOT NULL,
  `Lastname` varchar(32) NOT NULL,
  `Company_name` varchar(60) NOT NULL,
  `Job_title` varchar(60) NOT NULL,
  `Job_time` varchar(40) NOT NULL,
  `Job_posted` date NOT NULL DEFAULT '2021-12-03',
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Branch` varchar(200) NOT NULL,
  `Sector` varchar(6000) NOT NULL,
  `Job_designation` varchar(5000) NOT NULL,
  `Job_specification` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `Logo`, `Firstname`, `Lastname`, `Company_name`, `Job_title`, `Job_time`, `Job_posted`, `Phone`, `Email`, `Service`, `Branch`, `Sector`, `Job_designation`, `Job_specification`) VALUES
(1, 'CrysCloud.jpg', '', '', 'CrysCloud Pvt. Ltd', 'Senior Software Engineer MacOS', 'Full Time', '2021-02-23', '', '', '', '', '', '', ''),
(2, 'CrysCloud.jpg', '', '', 'CrysCloud Pvt. Ltd', 'Senior Software Engineer MacOS', 'Full Time', '2021-02-23', '', '', '', '', '', '', ''),
(7, 'CrysCloud.jpg', 'Shery', 'daniyal', 'cognate global', 'software developer', 'FullTime', '2021-02-23', '9876896534', 'Shery@gmail.com', 'IT Contract Staffing', '5', '1217', 'Containment zone', 'job title and designation'),
(9, 'CrysCloud.jpg', 'Reshma', 'priya', 'cognate global', 'software developer', 'FullTime', '2021-02-23', '8798546798', 'reshmasamy21@gmail.com', 'Permanent Recruitment', '29', '1221', 'Containment zone', 'This webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\r\nPress the reload button to resubmit the data needed to load the page.\r\nThis webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\r\nPress the reload button to resubmit the data needed to load the page.                          '),
(10, 'India', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith36@gmail.com', 'Permanent Recruitment', '41', 'Understand the customer requirements.\r\n Write embedded software code on ARM/Cortex platforms\r\n Improve the performance of existing products / projects\r\n Cross functional communication with engineering organization\r\n Ability to work independently\r\nQualifications for Embedded software engineer\r\n 7+ years of related experience\r\n Proven ability to solve problems creatively\r\n Excellent analytical skills\r\n Strong interpersonal skills and extremely resourceful\r\n Solid programming knowledge in C\r\n Experience working with wired or wireless communication protocols.\r\n Good understanding on Bluetooth LE (and classic) technology\r\n Experience in working with firmware development on an ARM/ Cortex processor, including RTOS,\r\nInterrupt driven designs\r\n Knowledge on OS/Kernel modules.\r\n Knowledge on Memory modules (NV/EEPROM/Flash)', 'HR', 'CrysCloud.jpg'),
(11, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith48@gmail.com', '-1', '-1', '-1', 'HR', '                          '),
(12, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith68@gmail.com', 'Permanent Recruitment', '41', '1220', 'HR', 'Understand the customer requirements.\r\n Write embedded software code on ARM/Cortex platforms\r\n Improve the performance of existing products / projects\r\n Cross functional communication with engineering organization\r\n Ability to work independently\r\nQualifications for Embedded software engineer\r\n 7+ years of related experience\r\n Proven ability to solve problems creatively\r\n Excellent analytical skills\r\n Strong interpersonal skills and extremely resourceful\r\n Solid programming knowledge in C\r\n Experience working with wired or wireless communication protocols.\r\n Good understanding on Bluetooth LE (and classic) technology\r\n Experience in working with firmware development on an ARM/ Cortex processor, including RTOS,\r\nInterrupt driven designs\r\n Knowledge on OS/Kernel modules.\r\n Knowledge on Memory modules (NV/EEPROM/Flash)'),
(13, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith37@gmail.com', 'Permanent Recruitment', '6', '1220', 'HR', 'Understand the customer requirements.\r\n Write embedded software code on ARM/Cortex platforms\r\n Improve the performance of existing products / projects\r\n Cross functional communication with engineering organization\r\n Ability to work independently\r\nQualifications for Embedded software engineer\r\n 7+ years of related experience\r\n Proven ability to solve problems creatively\r\n Excellent analytical skills\r\n Strong interpersonal skills and extremely resourceful\r\n Solid programming knowledge in C\r\n Experience working with wired or wireless communication protocols.\r\n Good understanding on Bluetooth LE (and classic) technology\r\n Experience in working with firmware development on an ARM/ Cortex processor, including RTOS,\r\nInterrupt driven designs\r\n Knowledge on OS/Kernel modules.\r\n Knowledge on Memory modules (NV/EEPROM/Flash)');

-- --------------------------------------------------------

--
-- Table structure for table `request_callback`
--

CREATE TABLE `request_callback` (
  `id` int(40) NOT NULL,
  `Firstname` varchar(33) NOT NULL,
  `Lastname` varchar(33) NOT NULL,
  `Email` varchar(42) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Designation` varchar(200) NOT NULL,
  `Company` varchar(200) NOT NULL,
  `Branch` varchar(200) NOT NULL,
  `Service` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request_callback`
--

INSERT INTO `request_callback` (`id`, `Firstname`, `Lastname`, `Email`, `Phone`, `Designation`, `Company`, `Branch`, `Service`) VALUES
(6, 'Rohan', 'Rajendiran', '07.ramyar@gmail.com', '9834567892', 'HR', 'Cognate', 'Gurgaon', 'Permanent Recruitment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(33) NOT NULL,
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_password` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Image` varchar(60) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Industry` varchar(300) NOT NULL,
  `Function` varchar(200) NOT NULL,
  `Education` varchar(40) NOT NULL,
  `Experience` varchar(40) NOT NULL,
  `Salary` varchar(40) NOT NULL,
  `CV` text NOT NULL,
  `otp` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Lastname`, `Email`, `Password`, `Confirm_password`, `Phone`, `Image`, `City`, `Industry`, `Function`, `Education`, `Experience`, `Salary`, `CV`, `otp`) VALUES
(35, 'Reshma', 'priya', 'reshmasamy21@gmail.com', 'e1e7ea465afc730052fdbe132f519277', 'e1e7ea465afc730052fdbe132f519277', '8798546798', 'profile.png', 'Ahmedabad', 'Auto / Auto Ancillary', 'Architects / Interior Design / Naval Arch.', 'BVSC', '6', '9', 'uploads/', 465630),
(36, 'Ramya', 'Rajendiran', '07.ramyar@gmail.com', '88e00fd00ba330b8fa467a8877a014a4', '88e00fd00ba330b8fa467a8877a014a4', '9834567892', 'profile.png', 'Chennai', 'IT-Software / Software Services', 'IT Software - Application Programming / Maintenance', 'BCA', '1', '1', 'uploads/', 846456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_callback`
--
ALTER TABLE `request_callback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `request_callback`
--
ALTER TABLE `request_callback`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
