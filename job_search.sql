-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 06, 2022 at 07:49 AM
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
(1, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate global', 'Senior Software Engineer MacOS', 'Full Time', '2021-02-23', '9876896534', 'reshmasamy21@gmail.com', 'IT Contract Staffing', 'Chennai', 'Information Technology', 'HR', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(2, 'CrysCloud.jpg', 'Ramya', 'Rajendiran', 'cognate global', 'Senior Software Engineer MacOS', 'Full Time', '2021-02-23', '9876896534', '07.ramyar@gmail.com', 'Permanent Recruitment', 'Hyderabad', 'Information Technology', 'HR', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(10, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith36@gmail.com', 'Permanent Recruitment', 'Chennai', 'Information Technology', 'HR', 'This webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\\r\\nPress the reload button to resubmit the data needed to load the page.\\r\\nThis webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\\r\\nPress the reload button to resubmit the data needed to load the page.'),
(11, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith48@gmail.com', 'Permanent Recruitment', 'Bengaluru', 'Information Technology', 'HR', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(12, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith68@gmail.com', 'Permanent Recruitment', 'Mumbai', 'Information Technology', 'HR', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(13, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith37@gmail.com', 'Permanent Recruitment', 'New Delhi', 'Information Technology', 'HR', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)');

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
(6, 'Rohan', 'Rajendiran', '07.ramyar@gmail.com', '9834567892', 'HR', 'Cognate', 'Gurgaon', 'Permanent Recruitment'),
(7, 'Reshma', 'priya', 'reshmasamy21@gmail.com', '8798546798', 'HR', 'Cognate ', 'Bhubaneswar', 'Contract Staffing'),
(8, 'Reshma', 'priya', 'reshmasamy21@gmail.com', '8798546798', 'HR', 'Cognate ', 'Baroda', 'Permanent Recruitment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(33) NOT NULL,
  `Firstname` varchar(15) NOT NULL,
  `Lastname` varchar(15) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `email_verification_link` varchar(200) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_password` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Image` varchar(60) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Industry` varchar(300) NOT NULL,
  `Function` varchar(200) NOT NULL,
  `Education` varchar(40) NOT NULL,
  `Experience_years` varchar(40) NOT NULL,
  `Experience_months` varchar(40) NOT NULL,
  `Current_Salary_lakhs` varchar(40) NOT NULL,
  `Current_Salary_thousand` varchar(40) NOT NULL,
  `Expected_Salary_lakhs` varchar(40) NOT NULL,
  `Expected_Salary_thousand` varchar(40) NOT NULL,
  `CV` text NOT NULL,
  `otp` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Lastname`, `Email`, `email_verification_link`, `Password`, `Confirm_password`, `Phone`, `Image`, `City`, `Industry`, `Function`, `Education`, `Experience_years`, `Experience_months`, `Current_Salary_lakhs`, `Current_Salary_thousand`, `Expected_Salary_lakhs`, `Expected_Salary_thousand`, `CV`, `otp`) VALUES
(1, 'Rithvika', 'Mohan', 'Rithvika2021@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '4f0340a33197986b0d269019f8588ce8', '4f0340a33197986b0d269019f8588ce8', '9876896534', 'profile.png', 'Ahmedabad', 'Agriculture / Diary', 'Analytics & Business Intelligence', 'B.Com', '2', '', '2 lakhs', '2 thousand', '2 lakhs', '2 thousand', '', 979275),
(2, 'Reshma', 'priya', 'reshmasamy21@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '88e00fd00ba330b8fa467a8877a014a4', '4f0340a33197986b0d269019f8588ce8', '9876896534', 'profile.png', 'Ahmadnagar', 'Agriculture / Diary', 'Airline / Reservations / Ticketing / Travel', 'B.Arch', '2 years', '2 months', '2 lakhs', '3 thousand', '3 lakhs', '3 thousand', 'A1_SOLUTIONS.docx', 638697),
(3, 'Ramya', 'Rajendiran', '07.ramyar@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '88e00fd00ba330b8fa467a8877a014a4', '88e00fd00ba330b8fa467a8877a014a4', '9677893371', 'profile.png', 'Srimushnam', '', '', 'BCA', '', '', '', '', '', '', 'Ramya R.docx', 351499);

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
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
