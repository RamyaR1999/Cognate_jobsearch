-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 01, 2021 at 07:45 AM
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
  `Job_description` varchar(5000) NOT NULL,
  `Job_type` varchar(33) NOT NULL,
  `Location` varchar(60) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Branch` varchar(200) NOT NULL,
  `Sector` varchar(200) NOT NULL,
  `Job_designation` varchar(5000) NOT NULL,
  `Job_specification` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `Logo`, `Firstname`, `Lastname`, `Company_name`, `Job_title`, `Job_time`, `Job_description`, `Job_type`, `Location`, `Phone`, `Email`, `Service`, `Branch`, `Sector`, `Job_designation`, `Job_specification`) VALUES
(1, 'CrysCloud.jpg', '', '', 'CrysCloud Pvt. Ltd', 'Senior Software Engineer MacOS', 'Full Time', 'In this role, you will be an integral part of the Data Protection Group in India, Developing Endpoint application for MacOS.', 'permanent', 'India(Remote)', '', '', '', '', '', '', ''),
(2, 'CrysCloud.jpg', '', '', 'CrysCloud Pvt. Ltd', 'Senior Software Engineer MacOS', 'Full Time', 'In this role, you will be an integral part of the Data Protection Group in India, Developing Endpoint application for MacOS.', 'permanent', 'India(Remote)', '', '', '', '', '', '', ''),
(7, 'CrysCloud.jpg', 'Shery', 'daniyal', 'cognate global', 'software developer', 'FullTime', 'In this role, you will be an integral part of the Data Protection Group in India, Developing Endpoint application for MacOS.', 'permanent', 'India', '9876896534', 'Shery@gmail.com', 'IT Contract Staffing', '5', '1217', 'Containment zone', 'job title and designation'),
(9, 'CrysCloud.jpg', 'Reshma', 'priya', 'cognate global', 'software developer', 'FullTime', 'In this role, you will be an integral part of the Data Protection Group in India, Developing Endpoint application for MacOS.', 'permanent', 'India', '8798546798', 'reshmasamy21@gmail.com', 'Permanent Recruitment', '29', '1221', 'Containment zone', 'This webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\r\nPress the reload button to resubmit the data needed to load the page.\r\nThis webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\r\nPress the reload button to resubmit the data needed to load the page.                          ');

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
  `Industry` varchar(30) NOT NULL,
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
(35, 'Reshma', 'priya', 'reshmasamy21@gmail.com', 'e1e7ea465afc730052fdbe132f519277', 'e1e7ea465afc730052fdbe132f519277', '8798546798', 'profile.png', 'Ahmedabad', 'Auto / Auto Ancillary', 'Architects / Interior Design / Naval Arch.', 'BVSC', '6', '9', 'uploads/', 465630);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
