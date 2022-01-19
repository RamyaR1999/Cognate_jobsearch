-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 19, 2022 at 10:28 AM
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
  `Fullname` varchar(32) NOT NULL,
  `Company_name` varchar(60) NOT NULL,
  `Job_title` varchar(60) NOT NULL,
  `Job_time` varchar(40) NOT NULL,
  `Job_posted` date NOT NULL DEFAULT '2021-12-03',
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Sector` varchar(6000) NOT NULL,
  `Skills` varchar(500) NOT NULL,
  `Job_type` varchar(500) NOT NULL,
  `Job_description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `Fullname`, `Company_name`, `Job_title`, `Job_time`, `Job_posted`, `Phone`, `Email`, `Service`, `Location`, `Sector`, `Skills`, `Job_type`, `Job_description`) VALUES
(1, 'Reshma Priya', 'cognate global', 'Senior Software Engineer MacOS', 'Full Time', '2021-02-23', '9876896534', 'reshmasamy21@gmail.com', 'IT Contract Staffing', 'Chennai', 'Information Technology', 'PHP', 'Full time', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(2, 'Ramya', 'cognate global', 'Senior Software Engineer', 'Full Time', '2021-02-23', '9876896534', '07.ramyar@gmail.com', 'Permanent Recruitment', 'Hyderabad', 'Information Technology', 'C++', 'Part time', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(10, 'Ranjith', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith36@gmail.com', 'Permanent Recruitment', 'Chennai', 'Information Technology', 'Python', 'Part time', 'This webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\\r\\nPress the reload button to resubmit the data needed to load the page.\\r\\nThis webpage requires data that you entered earlier in order to be properly displayed. You can send this data again, but by doing so you will repeat any action this page previously performed.\\r\\nPress the reload button to resubmit the data needed to load the page.'),
(11, 'Ranjith Kumar', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith48@gmail.com', 'Permanent Recruitment', 'Bengaluru', 'Information Technology', 'PHP', 'Full time', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(12, 'Ranjithi Mohan', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith68@gmail.com', 'Permanent Recruitment', 'Mumbai', 'Information Technology', 'Java', 'Part time', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)'),
(13, 'Rahul', 'cognate', 'Software Developer', 'FullTime', '2021-12-03', '9834567892', 'Ranjith37@gmail.com', 'Permanent Recruitment', 'Work from Home', 'Information Technology', 'Kotlin', 'Full time', 'Understand the customer requirements. Write embedded software code on ARM/Cortex platforms Improve the performance of existing products / projects Cross functional communication with engineering organization Ability to work independently Qualifications for Embedded software engineer 7+ years of related experience Proven ability to solve problems creatively Excellent analytical skills  Strong interpersonal skills and extremely resourceful Solid programming knowledge in C Experience working with wired or wireless communication protocols. Good understanding on Bluetooth LE (and classic) technology Experience in working with firmware development on an ARM/ Cortex processor, including RTOS, Interrupt driven designs Knowledge on OS/Kernel modules. Knowledge on Memory modules (NV/EEPROM/Flash)');

-- --------------------------------------------------------

--
-- Table structure for table `request_callback`
--

CREATE TABLE `request_callback` (
  `id` int(40) NOT NULL,
  `Fullname` varchar(32) NOT NULL,
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

INSERT INTO `request_callback` (`id`, `Fullname`, `Email`, `Phone`, `Designation`, `Company`, `Branch`, `Service`) VALUES
(6, 'Ramya', '07.ramyar@gmail.com', '9834567892', 'HR', 'Cognate', 'Gurgaon', 'Permanent Recruitment'),
(7, 'Reshma Priya', 'reshmasamy21@gmail.com', '8798546798', 'HR', 'Cognate ', 'Bhubaneswar', 'Contract Staffing'),
(8, 'Reshma priya', 'reshmasamy21@gmail.com', '8798546798', 'HR', 'Cognate ', 'Baroda', 'Permanent Recruitment');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(200) NOT NULL,
  `Skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `Skills`) VALUES
(1, 'PHP'),
(2, 'Python'),
(3, 'Java'),
(4, 'C'),
(5, 'C++'),
(6, 'Kotlin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(33) NOT NULL,
  `Fullname` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `email_verification_link` varchar(200) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Confirm_password` varchar(50) NOT NULL,
  `User_type` varchar(40) NOT NULL DEFAULT 'Job Seeker',
  `Phone` varchar(15) NOT NULL,
  `Image` varchar(60) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Industry` varchar(300) NOT NULL,
  `Skills` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `Fullname`, `Email`, `email_verification_link`, `Password`, `Confirm_password`, `User_type`, `Phone`, `Image`, `City`, `Industry`, `Skills`, `Function`, `Education`, `Experience_years`, `Experience_months`, `Current_Salary_lakhs`, `Current_Salary_thousand`, `Expected_Salary_lakhs`, `Expected_Salary_thousand`, `CV`, `otp`) VALUES
(1, 'Admin', 'Admin@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '0e7517141fb53f21ee439b355b5a1d0a', '4f0340a33197986b0d269019f8588ce8', 'Admin', '9876896534', 'profile.png', 'Ahmedabad', 'General Administration', 'PHP', '', '', '', '', '', '', '', '', '', 979275),
(2, 'Rithvika Mohan', 'Rithvika2021@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '4f0340a33197986b0d269019f8588ce8', '4f0340a33197986b0d269019f8588ce8', 'Job Seeker', '9876896534', 'profile.png', 'Ahmedabad', 'Accounting / Finance', 'Python', 'Analytics & Business Intelligence', 'B.Com', '2 years', '1 month', '2 lakhs', '2 thousand', '2 lakhs', '2 thousand', 'Ramya R.docx', 979275),
(3, 'Reshma Priya', 'reshmasamy231@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '88e00fd00ba330b8fa467a8877a014a4', '4f0340a33197986b0d269019f8588ce8', 'Job Seeker', '9876896534', 'profile.png', 'Ahmadnagar', 'Information Technology', 'Java', 'Airline / Reservations / Ticketing / Travel', 'B.Arch', '2 years', '2 months', '2 lakhs', '3 thousand', '3 lakhs', '3 thousand', 'Ramya R.docx', 638697),
(4, 'Ramya Rajendiran', 'Ramyamilky@yahoo.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '88e00fd00ba330b8fa467a8877a014a4', '88e00fd00ba330b8fa467a8877a014a4', 'Job Seeker', '8768897986', 'profile.png', 'Ahmadnagar', 'General Administration', 'Kotlin', 'Analytics & Business Intelligence', 'B.Ed', '3 years', '4 months', '11 lakhs', '13 thousand', '14 lakhs', '15 thousand', 'Ramya R.docx', 406000),
(14, 'Ramya Rajendiran', '07.ramyar@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '88e00fd00ba330b8fa467a8877a014a4', '88e00fd00ba330b8fa467a8877a014a4', 'Job Seeker', '', 'profile.png', '', 'Information Technology', 'Angular JS', '', '', '', '', '', '', '', '', 'Ramya R.docx', 897976),
(15, 'Reshma priya ', 'reshmasamy21@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'e1e7ea465afc730052fdbe132f519277', 'e1e7ea465afc730052fdbe132f519277', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Book1.xlsx', 685148);

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
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
