-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 07, 2022 at 10:26 AM
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
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(40) NOT NULL,
  `Education` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `Education`) VALUES
(1, 'B.A'),
(2, 'B.Arch'),
(3, 'B.Com'),
(4, 'B.Ed'),
(5, 'B.Pharma'),
(6, 'B.Sc'),
(7, 'B.Tech/B.E'),
(8, 'BCA'),
(9, 'BDS'),
(10, 'BVSC'),
(11, 'CA'),
(12, 'CS'),
(13, 'Diploma'),
(14, 'H.Sc/+2/Intermediate'),
(15, 'ICWA (CMA)'),
(16, 'ITI'),
(17, 'LLB'),
(18, 'LLM'),
(19, 'M.A');

-- --------------------------------------------------------

--
-- Table structure for table `function`
--

CREATE TABLE `function` (
  `id` int(40) NOT NULL,
  `Function` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `function`
--

INSERT INTO `function` (`id`, `Function`) VALUES
(1, 'Accounting / Tax / Company Secretary / Audit'),
(2, 'Airline / Reservations / Ticketing / Travel'),
(3, 'Analytics & Business Intelligence'),
(4, 'Anchoring / TV / Films / Production'),
(5, 'Architects / Interior Design / Naval Arch'),
(6, 'Art Director / Graphic / Web Designer'),
(7, 'Banking / Insurance'),
(8, 'Beauty / Fitness / Spa Services'),
(9, 'Content / Journalism'),
(10, 'Corporate Planning / Consulting'),
(11, 'CSR & Sustainability'),
(12, 'Engineering Design / R&D'),
(13, 'Export / Import / Merchandising'),
(14, 'Fashion / Garments / Merchandising'),
(15, 'Guards / Security Services'),
(16, 'Hotels / Restaurants'),
(17, 'HR / Administration / IR'),
(18, 'IT - Hardware / Telecom / Technical Staff / Support'),
(19, 'IT Software - Application Programming / Maintenance'),
(20, 'IT Software - Client Server'),
(21, 'IT Software - DBA / Data warehousing'),
(22, 'IT Software - Ecommerce / Internet Technologies'),
(23, 'IT Software - Embedded /EDA /VLSI /ASIC / Chip Des'),
(24, 'IT Software - ERP / CRM'),
(25, 'IT Software - Mainframe'),
(26, 'IT Software - Middleware'),
(27, 'IT Software - Mobile'),
(28, 'IT Software - Network Administration / Security'),
(29, 'IT Software - QA & Testing'),
(30, 'IT Software - System Programming'),
(31, 'IT Software - Systems / EDP / MIS'),
(32, 'IT Software - Telecom Software'),
(33, 'ITES / BPO / KPO / Customer Service / Operations'),
(34, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `id` int(40) NOT NULL,
  `Industry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`id`, `Industry`) VALUES
(1, 'Accounting / Finance'),
(2, 'Banking & finance'),
(3, 'General Administration'),
(4, 'Human Resources'),
(5, 'Information Technology'),
(6, 'Insurance'),
(7, 'ITeS & BPO'),
(8, 'Manufacturing'),
(9, 'Sales'),
(10, 'FMCG'),
(11, 'Retail'),
(12, 'Telecom'),
(13, 'Media & entertainment'),
(14, 'Education'),
(15, 'Hospitality & Tourism'),
(16, 'Consulting & VC'),
(17, 'Other');

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
(2, 'CrysCloud.jpg', 'Ramya', 'Rajendiran', 'cognate global', 'Senior Software Engineer', 'Full Time', '2021-02-23', '9876896534', '07.ramyar@gmail.com', 'Permanent Recruitment', 'Hyderabad', 'Information Technology', 'HR', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(10, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith36@gmail.com', 'Permanent Recruitment', 'Chennai', 'Information Technology', 'HR', 'This webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\\r\\nPress the reload button to resubmit the data needed to load the page.\\r\\nThis webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\\r\\nPress the reload button to resubmit the data needed to load the page.'),
(11, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith48@gmail.com', 'Permanent Recruitment', 'Bengaluru', 'Information Technology', 'HR', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(12, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith68@gmail.com', 'Permanent Recruitment', 'Mumbai', 'Information Technology', 'HR', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(13, 'CrysCloud.jpg', 'Ranjith', 'Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith37@gmail.com', 'Permanent Recruitment', 'Work from Home', 'Information Technology', 'HR', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)');

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
(1, 'Rithvika', 'Mohan', 'Rithvika2021@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '4f0340a33197986b0d269019f8588ce8', '4f0340a33197986b0d269019f8588ce8', '9876896534', 'profile.png', 'Ahmedabad', 'Accounting / Finance', 'Analytics & Business Intelligence', 'B.Com', '2 years', '1 month', '2 lakhs', '2 thousand', '2 lakhs', '2 thousand', '', 979275),
(2, 'Reshma', 'priya', 'reshmasamy21@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '88e00fd00ba330b8fa467a8877a014a4', '4f0340a33197986b0d269019f8588ce8', '9876896534', 'profile.png', 'Ahmadnagar', 'Information Technology', 'Airline / Reservations / Ticketing / Travel', 'B.Arch', '2 years', '2 months', '2 lakhs', '3 thousand', '3 lakhs', '3 thousand', 'A1_SOLUTIONS.docx', 638697),
(3, 'Ramya', 'Rajendiran', 'Ramyamilky@yahoo.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '88e00fd00ba330b8fa467a8877a014a4', '88e00fd00ba330b8fa467a8877a014a4', '9677893371', 'cat.jpg', 'Chennai', 'Information Technology', 'IT Software - Mainframe', 'BCA', '1 year', '1 month', '0 lakhs', '5 thousand', '0 lakhs', '15 thousand', 'ASSIGNMENT.docx', 351499),
(12, 'Ramya', 'Rajendiran', '07.ramyar@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '88e00fd00ba330b8fa467a8877a014a4', '88e00fd00ba330b8fa467a8877a014a4', '8768897986', 'profile.png', 'Ahmadnagar', 'General Administration', 'Analytics & Business Intelligence', 'B.Ed', '3 years', '4 months', '11 lakhs', '13 thousand', '14 lakhs', '15 thousand', 'ASSIGNMENT.docx', 406000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `function`
--
ALTER TABLE `function`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `function`
--
ALTER TABLE `function`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
