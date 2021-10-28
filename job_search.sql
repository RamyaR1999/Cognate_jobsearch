-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 28, 2021 at 09:04 AM
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
(2, 'CrysCloud.jpg', '', '', 'CrysCloud Pvt. Ltd', 'Senior Software Engineer MacOS', 'Full Time', 'In this role, you will be an integral part of the Data Protection Group in India, Developing Endpoint application for MacOS.', 'permanent', 'India(Remote)', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(33) NOT NULL,
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Password` varchar(40) NOT NULL,
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

INSERT INTO `users` (`id`, `Firstname`, `Lastname`, `Email`, `Password`, `Phone`, `Image`, `City`, `Industry`, `Function`, `Education`, `Experience`, `Salary`, `CV`, `otp`) VALUES
(2, 'princy', 'R', 'princy@gmail.com', '9c4a38260049134480b74aa509c56a44', '9657467990', 'profile.png', 'Ernakulam', 'IT-Hardware  Networking', 'IT Software - ERP / CRM', 'ITI', '20', '-1', 'uploads/', 527449),
(3, 'Ramya', 'R', 'ramya@gmail.com', '69f8ccc05b12ef0f8c94d2d0087124bd', '9657467987', 'profile.png', 'Delhi', 'IT-Hardware  Networking', 'IT Software - Middleware', 'M.A', '20', '20', 'uploads/', 931332),
(4, 'thivya', 'h', 'thivya@gmail.com', '8a04b706aeeb771d64a3cbb5e9a17240', '9876543211', 'profile.png', 'Agartala', 'Agriculture / Diary', 'IT Software - ERP / CRM', 'M.A', '4', '20', 'uploads/', 707690),
(5, 'Reshma', 'B', 'Reshma@gmail.com', 'e4695c9ad8ee056baf6c259bb9d5da2c', '9876543216', 'profile.png', 'Agartala', 'Agriculture / Diary', 'IT Software - ERP / CRM', 'M.A', '4', '20', 'uploads/', 238150),
(6, 'Reshma', 'B', 'reshmasamy21@gmail.com', 'e4695c9ad8ee056baf6c259bb9d5da2c', '9876543216', 'profile.png', 'Agartala', 'Agriculture / Diary', 'IT Software - ERP / CRM', 'M.A', '4', '20', 'uploads/', 417003),
(8, 'Barthalomena', 'Francis', 'barthalomena@gmail.com', '2a26fdb9cf6ad136597c171459709d02', '9657467997', 'profile.png', '-1', '-1', '-1', '-1', '-1', '-1', 'uploads/', 576320),
(12, 'Ramya', 'Rajendiran', '07.ramyar@gmail.com', '88e00fd00ba330b8fa467a8877a014a4', '9834567892', 'profile.png', 'Dahod', 'Insurance', 'IT Software - ERP / CRM', 'H.Sc/+2/Intermediate', '15', '17', 'uploads/', 571656);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
