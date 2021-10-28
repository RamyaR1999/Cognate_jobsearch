-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 28, 2021 at 06:10 AM
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
  `Job_title` varchar(60) NOT NULL,
  `Company_name` varchar(60) NOT NULL,
  `Location` varchar(60) NOT NULL,
  `Job_posted` date DEFAULT NULL,
  `Job_time` varchar(40) NOT NULL,
  `Job_description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `Logo`, `Job_title`, `Company_name`, `Location`, `Job_posted`, `Job_time`, `Job_description`) VALUES
(1, 'CrysCloud.jpg', 'Senior Software Engineer MacOS', 'CrysCloud Pvt. Ltd', 'Bangalore', '2021-07-20', 'Full Time', 'In this role, you will be an integral part of the Data Protection Group in India, Developing Endpoint application for MacOS.\r\nA launch pad into various senior management opportunities – within the many business lines of\r\nEurofins globally – or into the management hierarchy in our different corporate functions.\r\nThe opportunity to grow your project management skills in a demanding, fast growing organization.\r\nA chance to become part of a highly motivated international team of professionals.\r\nIn a fast growing group, successful leaders are frequently being offered increased areas of\r\nresponsibility (subject to geographic mobility).'),
(2, 'CrysCloud.jpg', 'Senior Software Engineer MacOS', 'CrysCloud Pvt. Ltd', 'Chennai', NULL, 'Full Time', 'In this role, you will be an integral part of the Data Protection Group in India, Developing Endpoint application for MacOS.');

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
  `City` varchar(30) NOT NULL,
  `Industry` varchar(30) NOT NULL,
  `Function` varchar(200) NOT NULL,
  `Education` varchar(40) NOT NULL,
  `Experience` varchar(40) NOT NULL,
  `Salary` varchar(40) NOT NULL,
  `CV` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Lastname`, `Email`, `Password`, `Phone`, `City`, `Industry`, `Function`, `Education`, `Experience`, `Salary`, `CV`) VALUES
(1, 'Ramya', 'Rajendiran', '07.ramyar@gmail.com', '88e00fd00ba330b8fa467a8877a014a4', '9834567892', 'Cuttack', 'Agriculture / Diary', 'IT Software - Mainframe', 'ICWA (CMA)', '1', '0', 'uploads/');

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
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
