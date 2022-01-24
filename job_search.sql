-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 24, 2022 at 07:02 AM
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
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(50) NOT NULL,
  `Experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `Experience`) VALUES
(1, '0 years'),
(2, '1 years'),
(3, '2 years'),
(4, '3 years'),
(5, '4 years'),
(6, '5 years'),
(7, '6 years'),
(8, '7 years'),
(9, '8 years'),
(10, '9 years'),
(11, '10 years'),
(12, '11 years'),
(13, '12 years'),
(14, '13 years'),
(15, '14 years'),
(16, '15 years'),
(17, '16 years'),
(18, '17 years'),
(19, '18 years'),
(20, '19 years'),
(21, '20 years');

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
  `id` int(100) NOT NULL,
  `Fullname` varchar(32) NOT NULL,
  `Company_name` varchar(60) NOT NULL,
  `Job_title` varchar(60) NOT NULL,
  `Job_posted` varchar(200) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Service` varchar(100) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Location_country` varchar(500) NOT NULL,
  `Sector` varchar(6000) NOT NULL,
  `Skills` varchar(500) NOT NULL,
  `Job_type` varchar(500) NOT NULL,
  `Job_description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `Fullname`, `Company_name`, `Job_title`, `Job_posted`, `Phone`, `Email`, `Service`, `Location`, `Location_country`, `Sector`, `Skills`, `Job_type`, `Job_description`) VALUES
(1, '', 'Cognate Global Business Solutions PRIVATE LIMITED', 'ASP .NET Developer', '20 Jan 2022', '', '', 'Permanent Recruitment', 'Bangalore', 'India', 'Information Technology', 'Angular JS/ASP .NET Developer', 'Full time', 'The person selected would be responsible for web/API development work using following technologies ASP.NET MVC, WCF, JQuery and RESTful services, .NET/.NET Core,\r\nwriting unit test cases - mocking framework, ReactJS/Angular and SQL server as database Person would work in Retirement Services GPT team, Pune, SP Infocity.\r\nWrite high quality/efficient code, debug, unit test cases, resolve issues and further develop deep Product knowledge over a period of time \r\nWork collaboratively in Agile scrum team including Developers/ lead developers, Architects/Tech leads, Product Owners, Scrum master and Testers for next-gen UI development. This will include 2-4 hours overlap with global RS team in US (EST time) based on project needs.\r\nWould be responsible for peer code reviews; provide suggestions to improve code efficiency/performance.\r\nResults-oriented, knowledge of new and legacy technologies, knowledge of the relevant platforms and environments, and familiar with business processes, functions and data within their domain to provide innovative, insightful, and secure solutions.\r\n\r\n\r\nEligibility/Experience\r\n\r\n•	B.E. or MCA with 4-6 years of web/API development experience using .NET, ASP.NET MVC, REST APIs, WCF services, SQL server, Javascript/JQuery are must to have skills. \r\n•	Knowledge on ReactJS, AngularJS, .NET core would be added advantage \r\n•	Experience working in an agile process Object oriented development RESTful web services implementation XML and JSON \r\n•	Good communication and interpersonal skills Strong analytical and problem-solving skills\r\n\r\nWe currently have multiple openings for these roles, these roles are in Bangalore.'),
(2, '', 'Cognate Global Business Solutions PRIVATE LIMITED', 'DevOps/ AWS/ Kubernetes Engineer', '20 Jan 2022', '', '', 'Permanent Recruitment', 'Onsite/Remote', 'India', 'Information Technology', 'Devops/AWS', 'Full time', 'DevOps/ Kubernetes Certified/\r\n\r\nExperience : 3+ years\r\n\r\nRequirement : The need is of a mid-level Kubernetes resource, somebody who can be up & running independently. \r\n\r\nMostly working on following- \r\n	Implement and manage CI/CD pipelines. \r\n	Implement an auto-scaling system for the Kubernetes nodes\r\n	Consolidate Clusters \r\n	Implement and improve monitoring and alerting. \r\n	Build and maintain highly available systems on Kubernetes.\r\n'),
(3, '', 'Cognate Global Business Solutions PRIVATE LIMITED', 'WMS/solution Consultant', '20 Jan 2022', '', '', 'Contract Staffing', 'Bangalore', 'India', 'Information Technology', 'WMS', 'Full time', 'Solution Consultant \r\nMain Domain: WMS Consultant, relevant qualifications in Information Technology or \r\nComputer science.\r\n\r\nCurrent work experience: 3 to 5 years in related IT or supply chain industries\r\n\r\n\r\nResponsibilities\r\nJob description:\r\n- \r\nSupport day to day issues faced by customer’s users on site , English and Russian\r\n- \r\nMap customer requirements, provide solutions to requirements\r\n- \r\nWork with customer’s IT team for Highjump WMS\r\n- \r\nPerform testing, training activities on behalf of the customer’s IT team for new \r\nchanges.\r\nThe Person:\r\nRequired skills: \r\nIndependent and self-driven personality\r\n- \r\nAble to travel and work on site at customer’s location with minimal supervision\r\n- \r\nOpen to new ideas and changes\r\n- \r\nFamiliar with WMS related concepts as well as integration points\r\n- \r\nBasic knowledge of Reporting tools and MSSQL\r\n- \r\nAnalytical with good interpersonal skills\r\n- Good understanding of supply chain processes\r\n\r\nPreferred skills:\r\n- Understanding of logistics and supply chain management particularly in areas of \r\nWarehousing\r\n- Knowledgeable In MSSQL and Microsoft technologies\r\n- Experience in the Highjump WMS is strong benefit\r\n- Good interpersonal skills with high Emotional quotient'),
(4, '', 'Cognate Global Business Solutions PRIVATE LIMITED', 'JAVA DEVELOPER', '20 Jan 2022', '', '', 'Permanent Recruitment', 'Bangalore', 'India', 'Information Technology', 'Java', 'Full time', 'We are looking for a Java Developer with experience in building high-performing, scalable, \r\nenterprise-grade applications.\r\n\r\nEXPERIENCE – More than 2 years\r\n\r\nResponsibilities \r\n•Contribute in all phases of the development lifecycle \r\n•Write well designed, testable, efficient code \r\n•Ensure designs are in compliance with specifications \r\n•Prepare and produce releases of software components \r\n•Support continuous improvement by investigating alternatives and technologies and presenting \r\nthese for architectural review \r\nRequirements \r\n•BS/MS degree in Computer Science, Engineering or a related subject \r\n•Proven hands-on Software Development experience \r\n•Proven working experience in Java development \r\n•Hands on experience in designing and developing applications using Java EE platforms \r\n•Object Oriented analysis and design using common design patterns. \r\n•Profound insight of Java and JEE internals (Classloading, Memory Management, Transaction \r\nmanagement etc) \r\n•Excellent knowledge of Relational Databases, SQL and ORM technologies (JPA2, Hibernate) \r\n•Experience in the Spring Framework \r\n•Experience as a Sun Certified Java Developer \r\n•Experience in developing web applications using at least one popular web framework (JSF, \r\nWicket, GWT, Spring MVC) \r\n•Experience with test-driven development'),
(5, '', 'Cognate Global Business Solutions PRIVATE LIMITED', 'REACT .JS DEVELOPER', '20 Jan 2022', '', '', 'Permanent Recruitment', 'Bangalore', 'India', 'Information Technology', 'Angular JS', 'Full time', 'We are looking for a skilled react.js developer to join our front-end development team.\r\n            \r\nResponsibilities:   \r\n• Meeting with the development team to discuss user interface ideas and applications. \r\n• Reviewing application requirements and interface designs. \r\n• Identifying web-based user interactions. \r\n• Developing and implementing highly responsive user interface components using react concepts. \r\n• Writing application interface codes using JavaScript following react.js workflows. \r\n• Troubleshooting interface software and debugging application codes. \r\n• Developing and implementing front-end architecture to support user interface concepts. \r\n• Monitoring and improving front-end performance. \r\n• Documenting application changes and developing updates.\r\n \r\nRequirements: \r\n• Bachelor’s degree in computer science, information technology, or a similar field. \r\n• 2+ years experience in working as a react.js developer. \r\n• In-depth knowledge of JavaScript, CSS, HTML, and front-end languages. \r\n• Knowledge of REACT tools including React.js, Webpack, Enzyme, Redux, and Flux. \r\n• Experience with user interface design. \r\n• Knowledge of performance testing frameworks including Mocha and Jest. \r\n• Experience with browser-based debugging and performance testing software. \r\n• Excellent troubleshooting skills. \r\n• Good project management skills. \r\n• Strong knowledge and experience of building for Security, Performance, and Scalability'),
(6, '', 'Cognate Global Business Solutions PRIVATE LIMITED', 'Senior Angular Developer', '20 Jan 2022', '', '', 'Permanent Recruitment', 'Bangalore', 'India', 'Information Technology', 'Angular JS', 'Full time', 'Role Skills\r\n•	Expertise in Angular (latest version);  \r\n•	Expertise in TypeScript; \r\n•	Experience working with Grapes.js;  \r\n•	Experience working with NGXS State management; \r\n•	Knowledge of RxJS; \r\n•	A bit of experience with React; \r\n•	Expertise in Stencil.js;  \r\n•	Knowledge of Object-oriented Design and Design Patterns; \r\n•	Experience working with Git and Bitbucket;  \r\n•	Keep up-to-date with developing technologies and showcase them in your work; \r\n•	Understand web application scalability and performance; \r\n•	Analysis, design, and development with the mentioned technologies; \r\n•	Effort estimation; \r\nRequirements \r\n\r\nExperience working in agile teams; \r\n \r\nExperience working with agile tools, knowledge of agile processes; \r\n \r\nTake part and initiative in software and architectural development activities; \r\n \r\nConduct software analysis, programming, testing, and debugging; \r\n \r\nRecommend changes to improve established application processes; \r\n \r\nDevelop technical designs for application development; \r\n \r\nOpenness to fix critical bugs with high business impact on the customers; \r\n \r\nAnalytical and creative problem-solving abilities, good communication skills, result-oriented; \r\n \r\nAbility to work independently, proactively as well with a team, and within tight deadlines; \r\n \r\nSelf-motivating, with customer focus and ability to manage multiple tasks; \r\n \r\nEnglish: good speaking and writing level;\r\n\r\nExperience:  3- 6yrs');

-- --------------------------------------------------------

--
-- Table structure for table `location_india`
--

CREATE TABLE `location_india` (
  `id` int(40) NOT NULL,
  `Location_india` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location_india`
--

INSERT INTO `location_india` (`id`, `Location_india`) VALUES
(1, 'Ahmedabad'),
(2, 'Baroda'),
(3, 'Bangalore'),
(4, 'Bhubaneswar'),
(5, 'Chandigarh'),
(6, 'Chennai'),
(7, 'Cochin'),
(8, 'Coimbatore'),
(9, 'Gurgaon'),
(10, 'Guwahat'),
(11, 'Hubli'),
(12, 'Hyderabad'),
(13, 'Indore'),
(14, 'Jaipur'),
(15, 'Jamshedpur'),
(16, 'Karnataka'),
(17, 'Kolkata'),
(18, 'Lucknow'),
(19, 'Madurai'),
(20, 'Mangalore'),
(21, 'Mumbai'),
(22, 'Nagpur'),
(23, 'New Delhi'),
(24, 'Patna'),
(25, 'Pune'),
(26, 'Rajkot'),
(27, 'Surat'),
(28, 'Trivandrum'),
(29, 'Visakapatnam');

-- --------------------------------------------------------

--
-- Table structure for table `location_uk`
--

CREATE TABLE `location_uk` (
  `id` int(11) NOT NULL,
  `Location_UK` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location_uk`
--

INSERT INTO `location_uk` (`id`, `Location_UK`) VALUES
(1, 'Aberconwy and Colwyn'),
(2, 'Aberdeen City'),
(3, 'Aberdeenshire'),
(4, 'Anglesey'),
(5, 'Angus'),
(6, 'Antrim'),
(7, 'England'),
(8, 'Argyll and Bute'),
(9, 'Armagh'),
(10, 'Avon'),
(11, 'Ayrshire'),
(12, 'Bath and NE Somerset'),
(13, 'Bedfordshire'),
(14, 'Belfast'),
(15, 'Berkshire'),
(16, 'Berwickshire'),
(17, 'BFPO'),
(18, 'Blaenau Gwent'),
(19, 'Buckinghamshire'),
(20, 'Caernarfonshire'),
(21, 'Caerphilly'),
(22, 'Caithness'),
(23, 'Cambridgeshire'),
(24, 'Cardiff'),
(25, 'Cardiganshire'),
(26, 'Ceredigion'),
(27, 'Channel Islands'),
(28, 'Cheshire'),
(29, 'City of Bristol'),
(30, 'Clackmannanshire'),
(31, 'Clwyd'),
(32, 'Conwy'),
(33, 'Cornwall/Scilly'),
(34, 'Cumbria'),
(35, 'Denbighshire'),
(36, '	\r\nDerbyshire'),
(37, 'Derry/Londonderry'),
(38, 'Devon'),
(39, 'Dorset'),
(40, 'Down'),
(41, 'Dumfries and Galloway'),
(42, 'Dunbartonshire'),
(43, 'Dundee'),
(44, 'Durham'),
(45, 'Dyfed'),
(46, 'East Ayrshire'),
(47, '	\r\nEast Dunbartonshire'),
(48, '	\r\nEast Lothian'),
(49, 'East Renfrewshire'),
(50, 'East Riding Yorkshire'),
(51, 'East Sussex'),
(52, 'Edinburgh'),
(53, 'England'),
(54, 'Essex'),
(55, 'Falkirk'),
(56, 'Fermanagh'),
(57, 'Fife'),
(58, 'Flintshire'),
(59, 'Glasgow'),
(60, 'Gloucestershire'),
(61, 'Greater London'),
(62, 'Greater Manchester'),
(63, 'Gwent'),
(64, 'Gwynedd'),
(65, 'Hampshire'),
(66, 'Hartlepool'),
(67, 'Hereford and Worcester'),
(68, 'Hertfordshire'),
(69, 'Highlands'),
(70, 'Inverclyde'),
(71, 'Inverness-Shire'),
(72, 'Isle of Man\r\n'),
(73, 'Isle of Wight'),
(74, 'Kent'),
(75, 'Kincardinshire'),
(76, 'Kincardinshire'),
(77, 'Kinross-Shire'),
(78, 'Kirklees'),
(79, 'Lanarkshire'),
(80, 'Lancashire'),
(81, 'Leicestershire'),
(82, 'Lincolnshire'),
(83, 'Londonderry'),
(84, 'Londonderry'),
(85, 'Merthyr Tydfil'),
(86, 'Mid Glamorgan'),
(87, 'Mid Glamorgan'),
(88, 'Middlesex'),
(89, 'Monmouthshire'),
(90, 'Moray'),
(91, 'Neath & Port Talbot'),
(92, 'Newport'),
(93, 'Norfolk'),
(94, 'North Ayrshire'),
(95, 'North East Lincolnshire'),
(96, 'North Lanarkshire'),
(97, 'North Lincolnshire'),
(98, 'North Somerset'),
(99, 'North Yorkshire'),
(100, 'Northamptonshire'),
(101, 'Northern Ireland'),
(102, 'Northumberland'),
(103, 'Nottinghamshire'),
(104, 'Orkney and Shetland Isles'),
(105, 'Oxfordshire'),
(106, 'Pembrokeshire'),
(107, 'Perth and Kinross'),
(108, 'Powys\r\n\r\n'),
(109, 'Redcar and Cleveland'),
(110, 'Renfrewshire'),
(111, 'Rhonda Cynon Taff'),
(112, 'Rutland'),
(113, 'Scottish Borders'),
(114, 'Shetland'),
(115, 'Shropshire'),
(116, 'Somerset'),
(117, 'South Ayrshire'),
(118, 'South Glamorgan'),
(119, 'South Gloucesteshire'),
(120, 'South Lanarkshire'),
(121, 'South Yorkshire'),
(122, 'Staffordshire'),
(123, 'Stirling'),
(124, 'Stockton On Tees'),
(125, 'Suffolk'),
(126, 'Surrey'),
(127, 'Swansea'),
(128, 'Torfaen'),
(129, 'Tyne and Wear'),
(130, 'Tyrone'),
(131, 'Vale Of Glamorgan'),
(132, 'Wales'),
(133, 'Warwickshire'),
(134, 'West Berkshire'),
(135, 'West Dunbartonshire'),
(136, 'West Glamorgan'),
(137, 'West Lothian'),
(138, 'West Midlands'),
(139, 'West Sussex'),
(140, 'West Yorkshire'),
(141, 'Western Isles'),
(142, 'Wiltshire'),
(143, 'Wirral'),
(144, 'Worcestershire'),
(145, 'Wrexham'),
(146, 'York');

-- --------------------------------------------------------

--
-- Table structure for table `location_us`
--

CREATE TABLE `location_us` (
  `id` int(40) NOT NULL,
  `Location_US` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location_us`
--

INSERT INTO `location_us` (`id`, `Location_US`) VALUES
(1, 'Alabama'),
(2, 'Alaska'),
(3, 'Arizona'),
(4, 'Arkansas'),
(5, 'California'),
(6, 'Colorado'),
(7, 'Connecticut'),
(8, 'Delaware'),
(9, 'Florida'),
(10, 'Georgia '),
(11, 'Hawaii'),
(12, 'Idaho'),
(13, 'Illinois'),
(14, 'Indiana'),
(15, 'Iowa'),
(16, 'Kansas'),
(17, 'Kentucky'),
(18, 'Louisiana'),
(19, 'Maine'),
(20, 'Maryland'),
(21, 'Massachusetts'),
(22, 'Michigan'),
(23, 'Minnesota'),
(24, 'Mississippi'),
(25, 'Nevada'),
(26, 'Missouri'),
(27, 'Montana'),
(28, 'New York (state)'),
(29, 'Washington'),
(30, 'West_Virginia');

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
(6, 'Angular JS/ASP .NET Developer'),
(7, 'React JS'),
(8, 'Devops/AWS'),
(9, 'WMS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `Fullname` varchar(32) NOT NULL,
  `Email` varchar(60) NOT NULL,
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
  `Email_status` varchar(50) NOT NULL DEFAULT 'unverified',
  `otp` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fullname`, `Email`, `email_verification_link`, `Password`, `Confirm_password`, `User_type`, `Phone`, `Image`, `City`, `Industry`, `Skills`, `Function`, `Education`, `Experience_years`, `Experience_months`, `Current_Salary_lakhs`, `Current_Salary_thousand`, `Expected_Salary_lakhs`, `Expected_Salary_thousand`, `CV`, `Email_status`, `otp`) VALUES
(1, 'Admin', 'Admin@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '0e7517141fb53f21ee439b355b5a1d0a', '4f0340a33197986b0d269019f8588ce8', 'Admin', '9876896534', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', '', 'Verified', 979275),
(2, 'Abhishek B D', 'abhishekbd5656@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '8105020825', 'profile.png', '', '', 'python', '', 'BCA', '2 years', '', '', '', '', '', 'AbhishekBD[3_11].docx', 'Verified', 723673),
(3, 'Ameer Shaik ', 'shaikameer965@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '9700735779', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AmeerShaik[4_5].pdf', 'Verified', 343490),
(4, 'AMIT CHAND', 'amitchand254@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AmitChand[3_9].pdf', 'Verified', 385018),
(5, 'AMIT RAY', 'amitroy9615@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AmitRay[2_4].pdf', 'Verified', 855920),
(6, 'Anand Nagaraju', 'anandnagaraju@outlook.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Anand Nagaraju_30 days- Bangalore.pdf', 'Verified', 685050),
(7, 'Shekar S', 'shekarsadula001@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', '_Shekhar_deloite_5yrs_2mths.docx', 'Verified', 645456),
(8, 'Abilash kushwaha', 'abhilashkushwaha1993@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'ABHILASH _3yrs_ mth.docx', 'Verified', 298622),
(9, 'AdityaChaitanya N', 'adityachaithanya.n@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'aditya Chaithany_4.10 yrs-3ths.docx', 'Verified', 236920),
(10, 'Amrita Dwibedy', 'amritadwibedy58@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Amrita Dwibedy_ 6yrs_3mths.docx', 'Verified', 244961),
(11, 'Ashis Kumar Sarangi', 'aksarangi55@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Ashis Kumar Sarangi _submit.pdf', 'Verified', 892670),
(12, 'Ashish Kumar Raul', 'raulashishkumar@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Ashish Kumar Raul Resume_15days_Java Developer.docx', 'Verified', 114283),
(13, 'Bharath Akinapally', 'bharath.akinapally@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Bharath Akinapally_5yrs_2mths.pdf', 'Verified', 596075),
(14, 'Bhargava Chary  N', 'nannojibhargava@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Bhargava Chary Resume- 1.9 yrs_3+mths.docx', 'Verified', 249851),
(15, 'Bangaru Bhavya Sree', 'bangarubhavya3377@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BhavyaSreeBangaru_ 1 month_Java Developer.doc', 'Verified', 547433),
(16, 'Chandrashekhar Marishetty', 'chandrashekhar.97016@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Chandrashekhar_6 yrs-3mths.doc', 'Verified', 885461),
(17, 'Durga Bhavani', 'durgamaadu@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Durga Bhavani_3.11_1 mth.pdf', 'Verified', 769269),
(18, 'venuvanka ganesh', 'ganeshvenuvanka88@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Ganesh Venuvanka_4.7_55days.docx', 'Verified', 377768),
(19, 'Chandragopal vadlamudi', 'Chandragopal007@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'gopal_resume_4yrs_2 mths.docx', 'Verified', 156106),
(20, 'Gopi Krishna Grandhi', 'gopigrandhi0464@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Gopi Grandhi _4.4yrs_2 mths.docx', 'Verified', 271773),
(21, 'PRASAD', 'kambapuprasad1991@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'KAMBAPU PRASAD_5.8yrs_2 mths.pdf', 'Verified', 745031),
(22, 'Kumari Rashmi', 'rashmijajwari@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Kumari Rashmi_2 yrs_serving NP.pdf', 'Verified', 961731),
(23, 'Sai Naveen ', 'sainaveen57344@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'M.Sai Naveen_15 days.docx', 'Verified', 749026),
(24, 'Mandula Soma Ratnam', 'mandulasomaratnam@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Mandula Somaratnam_3.9 years _1mth.docx', 'Verified', 676678),
(25, 'Valavala Mani Surekha', 'mani.surekha1266@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Mani Surekha ValaVala_2.7yrs_2mths.docx', 'Verified', 873439),
(26, 'Mihir Prakash', 'mihirp90@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Mihir Prakash -Java Developer Resume', 'Verified', 292657),
(27, 'Venkata Murali Krishna Sola', 'vmuralikrishnasola@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Murali Krishna Sola_2.5_2mths.pdf', 'Verified', 157677),
(28, 'Murali M', 'murali.infs@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Murali M_4.8yrs-2 mths.docx', 'Verified', 306665),
(29, 'NagiReddy', 'nagireddy.javainfo@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'NagiReddy_6yrs_3 mths.doc', 'Verified', 997627),
(30, 'Narahari', 'itsnarahari@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'NarahariLatest-_2yrs_15 days.pdf', 'Verified', 550766),
(31, ' Naresh Reddy Yenugula', 'nareshreddy9y@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Naresh Reddy Yenugula_Java Developer.docx', 'Verified', 221049),
(32, 'Nishi Kanta Behera', 'kantanishi1993@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Nishi Kanta Behera_2.4yrs_1mth.docx', 'Verified', 933067),
(33, 'padma', 'padmahyd21@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'padma_5.9yrs_2 mths.doc', 'Verified', 982408),
(34, 'Pavani Oruganti                 ', 'pavani123.oruganti@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Pavani Oruganti_4 yrs_15days_submit.docx', 'Verified', 306665),
(35, 'Perugu Vikram Babu', 'peruguvikram21@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Perugu Vikram Babu_5 yrs_LWD june16.docx', 'Verified', 963295),
(36, 'Prathyusha Vattigunta', 'prathyushav999@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Prathyusha vattigunta_5.3_ 1mth.docx', 'Verified', 458879),
(37, 'Sunil Kumar Reddy Putta', 'puttasunil.2279@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Putta Sunil Kumar_2 months.pdf', 'Verified', 753695),
(38, 'RAJKUMAR VODNALA', 'rajkumarvodnala928@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Rajkumar Vodnala_4_2 mths.docx', 'Verified', 642087),
(39, 'Raman Dwivedi', 'ramandwivedivolantetech@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Raman_Dwivedi JavaDeveloper-converted_2.6yrs_2mths.pdf', 'Verified', 428962),
(40, 'Ramanjaneyulu A', 'ram.ab5690@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Ramanjaneyulu A_Java Developer-90days.docx', 'Verified', 135070),
(41, 'RAMESH G', 'rameshgk.online@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Ramesh g k_7yrs_2months.doc', 'Verified', 601179),
(42, 'Tulasi RamKumar Kolamala', 'ramkumarkolamala@yahoo.in', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Ramkumar kolamala_5.7yrs_3 months.docx', 'Verified', 830773),
(43, 'RAMYA REDDY MOTHE', 'motheramyareddy0904@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Ramya_Java Developer Front End.pdf', 'Verified', 958239),
(44, '  Ravi', 'ravi050613@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Ravi_3.11yrs_2 mths.docx', 'Verified', 952860),
(45, 'Harish Reddi', 'harishreddy96420@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Reddi Harish_2 mths.docx', 'Verified', 582551),
(46, 'Saishrinivas Polishetti', 'p.saishrinivas3292@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Saishrinivas_5yrs_3 mths.pdf', 'Verified', 117663),
(47, 'SANDEEP LAKKA', 'sandeeplakka@outlook.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'SandeepLakka_6yr_2mth.pdf', 'Verified', 365104),
(48, 'Sathya Pasupuleti', 'sathyanagamani1991@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Sathya Pasupuleti_4.6yrs_1 month.pdf', 'Verified', 883762),
(49, 'Ramsatyanarayana', 'sathya.mallula265@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Satya_2.9_15 days.pdf', 'Verified', 865638),
(50, 'SIDDHARTH BISOYI', 'siddharthbisoyi2@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Siddharth Bisoyi _4.5yrs_1 mth.pdf', 'Verified', 654564),
(51, 'Sivaparvathi Vutla', 'sivaparvathi.pac@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Sivaparvathi Vutula.pdf', 'Verified', 367016),
(52, 'Snigdha Reddy Mekala', 'snigdhareddy115@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Snigdha Resume_2.1yrs_1 month.docx', 'Verified', 884815),
(53, 'SRAVAN KUMAR', 'sravankp690@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Sravan Kumar_5.6yrs_2 mths.pdf', 'Verified', 458117),
(54, 'Sreenivasulu Sadu', 'sreenu.config@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Sreenivasulu_Sadu_Java_FullStack_4 Yrs_2mths.docx', 'Verified', 525987),
(55, 'PALIVELA VEERABABU', 'VEERABABUPALIVELA85@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Veerababu_2.7Yrs_2 mths.docx', 'Verified', 761967),
(56, 'Venkata Krishna', 'venkatakrishna18.goda@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'VenkataKrishna_4 yrs_3 mths.doc', 'Verified', 549740),
(57, 'Vipin Kumar Patel', 'patelvipinkumar@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Vipin Kumar Patel_expected 10L Neg_ Accenture_3mths NP.pdf', 'Verified', 538513),
(58, 'Vivek Kumar Patel', 'springboot.ai@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Vivek Patel_Java developer_6.15 L_3mths.docx', 'Verified', 594053),
(59, 'Areti Saikrishna', 'saikrishnadaddy7@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Areti Saikrishna_2yrs_.net.pdf', 'Verified', 393314),
(60, 'ATHAR MEHDI ', 'athar_mehdi89@yahoo.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AtharM_resume_8.9yrs_.net.docx', 'Verified', 312307),
(61, 'Deepak HN', 'deepu.rrr@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'DeepakHN_8yrs_.Net.pdf', 'Verified', 840954),
(62, 'Harsha Prasad', 'harshap9484@yahoo.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Harsha Prasad_.NET_10yrs.docx', 'Verified', 876578),
(63, 'MISHEL MALIK', 'mishelmalik7993@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'MISHEL MALIK_.net_3+.pdf', 'Verified', 893481),
(64, 'Monika', 'monikar029@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Monika_6+yrs_.NET.docx', 'Verified', 897108),
(65, 'Naga Sandhya Pothireddy', 'pothireddy413@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'NagaSandhyaPothireddy_5yrs_.NET.pdf', 'Verified', 358404),
(66, 'NAGASHREE   K', 'nagashree911@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Nagashree+K-_7+yrs.docx', 'Verified', 942338),
(67, 'NEERAJ KUMAR SINGH', 'jerry231088@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Neeraj Kumar Singh_6 yrs_.net.pdf', 'Verified', 559818),
(69, 'parshwa K Shah', 'parshwashah007@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Parshwa+Shah-6+_.NET_full Stack.docx', 'Verified', 972228),
(70, 'SHAMBHAVI', 'shambhavi240@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'ShambhaviResume_2yrs_.net.pdf', 'Verified', 598006),
(71, 'SHRUJANA U', 'shrujanaundavalli@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'SHRUJANA.U_.NET_genuine_1.2yrs_1mth.docx', 'Verified', 920596),
(72, 'S U N I L   K U M A R   B ', 'sunilkumarb2005@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Sunil Kumar B_.NET_10yyrs.doc', 'Verified', 874250),
(73, 'Swapnil Raj', 'ajswapnil06@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Swapnil Raj_.NET_2yrs.pdf', 'Verified', 615547),
(74, ' P R A B H O D A BS', 'prabhoda.kurthekar@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Prabhoda__DotNet_13+yrs.doc', 'Verified', 254296),
(75, 'Ananta Gunvanta Ghatol', 'agghatol@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AnantaGunvanataGhatol[4_6].docx', 'Verified', 585043),
(76, 'Anil Gowd D', 'dinnupatianilgowd@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AnilGowdD[7_0].doc', 'Verified', 751432),
(77, 'Anirudh Patil', 'anirudhpatilmca@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AnirudhLPatil[7_0].pdf', 'Verified', 169665),
(78, 'Anuj Kumar Rohit', 'anujkumarrohit@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AnujKumarRohit[8_0].pdf', 'Verified', 303880),
(79, 'ARE SUDHEER BABU', 'sudheerare024@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AreSudheerBabu[2_9].docx', 'Verified', 608112),
(80, 'Arpith M', 'marpith56@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'ARPITHM[3_3].pdf', 'Verified', 803625),
(81, 'ARUP KUMAR DAS ', 'arup.kumar.das06@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Arup Kumar Das _10 yrs _13L.docx', 'Verified', 129386),
(82, 'Ashish Kumar', 'kumar1010ashish@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AshishKumar[6_0].pdf', 'Verified', 877583),
(83, 'ASHWINI G', 'ashwini.ganapathy4130@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'AshwiniG[3_3].docx', 'Verified', 491484),
(84, 'Bala Harish N P', 'harishnelapati777@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BalaHarishNelapati[3_4].pdf', 'Verified', 603504),
(85, 'Balambika Ganesan', 'balambika.g@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BalambikaGanesan[6_0].docx', 'Verified', 974659),
(86, 'BANDLA SANDEEP', 'bandlasandeep77@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BANDLASANDEEP[4_2].docx', 'Verified', 148609),
(87, 'Lokesh B', 'beesabathini.lokesh@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BeesabathiniLokesh[3_0].doc', 'Verified', 995881),
(88, 'Bhabani shankar Satapathy', 'bhabani9964@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BhabaniShankarSatapathy[2_0].pdf', 'Verified', 989284),
(89, 'Bhanuprakash Y', 'BhanuHN0011@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BhanuprakashNaidu[3_6] (1).pdf', 'Verified', 780948),
(90, 'BHARGAV ADHIMULAM', 'bhargav.adimulam@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BhargavAdhimulam[2_0].docx', 'Verified', 336874),
(91, 'Bhupendra Joshi', 'deepakj7739@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BhupendraJoshi[6_0].pdf', 'Verified', 955957),
(92, 'BirenderBhardwaj', 'virendra.hcl@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Birender (Veer) _Exp- 14L_Available immediatly.doc', 'Verified', 133963),
(93, 'Bismaya Kumar Sahoo', 'bismayakumar606@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'BismayaKumar[5_0].docx', 'Verified', 675633),
(94, 'BRAHMARAO MEDARAMETLA', 'brahma.devops340@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'd9310d46839fc5957115f29d979bc355', 'd9310d46839fc5957115f29d979bc355', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Brahmarao[2_0].pdf', 'Verified', 854868),
(95, 'B SAI VENKATESH', 'saivenkatesh450@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Bsaivenkatesh[3_0].pdf', 'Verified', 913123),
(96, 'CHANDRAKANTH H', 'chandrakanth2496@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'ChandrakanthH[2_9].pdf', 'Verified', 832440),
(97, 'CH SRINIVAS ', 'csrini8238@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'ChandraSrinivasu[4_3].docx', 'Verified', 463816),
(98, 'LaxmaReddy', 'laxmar663@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'CHILUKURILAXMAREDDY[3_3].pdf', 'Verified', 147848),
(99, 'CHINNADURAI K', 'chinnaduraiece07@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'ChinnaduraiK[8_0].pdf', 'Verified', 789977),
(100, 'Jahnavi Chakala', 'janujanvi3@gmil.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'CJahnavi[3_6].docx', 'Verified', 140704),
(101, 'DEEPALI WADEKAR', 'wadekar.deepali0211@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'DeepaliTukaramWadekar[2_5].docx', 'Verified', 794939),
(102, 'Devi Prasad Mohanty ', 'devmohanty1991@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'DeviPrasadMohanty[7_0].docx', 'Verified', 700632),
(103, 'Dhanalakshmi Ramachandran', 'dhanadivya17@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Dhanalakshmi[4_0].pdf', 'Verified', 212924),
(104, 'Dhanunjaya Talari ', 'dhanunjaydev@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Dhanunjaya[4_4].docx', 'Verified', 482839),
(105, 'DHEERAJ ARANI', 'ARANISAIDHEERAJ@GMAIL.COM', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'DheerajArani[3_5].pdf', 'Verified', 656981),
(106, 'Dinkar', '4dinkar@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Dinkar[3_5].docx', 'Verified', 405369),
(107, 'JANA DURGA NAGAMANI', 'durgajana2011@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'DurgaNagamaniJana[2_8] (1).docx', 'Verified', 885625),
(108, 'Chaithanya Deepika', 'eedigachaithanyadeepika@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'EChaithanyaDeepika[3_0].pdf', 'Verified', 373159),
(109, 'EDWIN INBARAJ DEVAN', 'Edwin.devan27@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'EdwinInbarajDevan[5_0].pdf', 'Verified', 935252),
(110, 'FARHAN AHEMAD', 'farhan91293@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Farhanahemad[4_0].doc', 'Verified', 145364),
(111, 'Gargi Agrawal', 'agrawalgargieic@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'GargiAgrawal_Exp 28L_45 days_Dover India Ltd.docx', 'Verified', 803102),
(112, 'GIRISH RP', 'girish313392@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'GirishRP[5_10].pdf', 'Verified', 637224),
(113, 'Manikanta Reddy', 'mani.devops@outlook.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'GManikantaReddy[3_8].docx', 'Verified', 724030),
(114, 'ADITYA VARMA GOTTUMUKKALA', 'gottumukkalaadityavarma@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'GottumukkalaAdityaVarma[5_0].docx', 'Verified', 129227),
(115, 'Govind S Kumar', 'govindskumar22@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'GovindSKumar[5_2].pdf', 'Verified', 749973),
(116, 'Gowthami Sivanga M              ', 'gowthamisivanga16@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Gowthami[5_5].docx', 'Verified', 465942),
(118, 'Hardeep Singh', 'Hardeep.singh18@outlook.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'HardeepSingh[6_0].pdf', 'Verified', 250470),
(119, 'HARINEE VIVEKANANDABABU', 'harineevj7991@hotmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '4955d61d33a6cf96af919989f55a05a9', '4955d61d33a6cf96af919989f55a05a9', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'HarineeVivekanandababu[2_4].pdf', 'Verified', 562839),
(120, 'Harsh P Gindi', 'harshgindi007@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', '4955d61d33a6cf96af919989f55a05a9', '4955d61d33a6cf96af919989f55a05a9', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'HarshGindi[3_0].pdf', 'Verified', 526504),
(121, 'HEMANTH', 'hemanthv068@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Hemanth[5_5].pdf', 'Verified', 817371),
(122, 'Jnaneshwar ', 'Jnaneshwar.devops@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Jnaneshwar-Anasuri-latest.docx', 'Verified', 686505),
(123, 'Kalavathi R', 'kalavathir55@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'KalavathiR[3_0].pdf', 'Verified', 294816),
(124, 'KARTHIKEYAN VENKATACHALAM', 'karthikeyanv.1991@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'KARTHIKEYANVENKATACHALAM[7_0].pdf', 'Verified', 702662),
(125, 'kavya GM', 'gmkavya211996@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'KavyaGM[4_6].doc', 'Verified', 482999),
(126, 'Kedharnadh Aduri', 'adurikedharnadh@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'kedharnadh[3_1].pdf', 'Verified', 866734),
(127, 'Komal Urkude', 'komalurkude543@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'KomalUrkude[2_7].pdf', 'Verified', 483450),
(128, 'Venkata Nagendra Kumar Kone', 'nagendra-kumar.kone@outlook.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'KONEVENKATANAGENDRAKUMAR[2_11].pdf', 'Verified', 130310),
(129, 'kowsikvarma G', 'kowshikvarmag@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'kowshikvarma[7_0].docx', 'Verified', 463287),
(130, 'KRISHNAKUMAR P', 'krish0337@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Krishnakumar[3_0].pdf', 'Verified', 769193),
(131, 'Purneet Kumar Satapathy', 'purneet.k.satapathy@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Purneet_Soft-Dev-Ops-ASE.doc', 'Verified', 626189),
(132, 'Shiva Kumar T', 'tshivakumar@engineer.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'shiva_DevOps TL _30days _28L.pdf', 'Verified', 692533),
(133, 'Vallikannu L', 'vallikanu.sekar@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Vallikannu[10_0]_30%_immmediate_DevOps Lead.docx', 'Verified', 789908),
(134, 'VIPUL AGARWAL', 'vipagarwal79@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', '14+_yrs_exp_Technical_Test_Lead_Vipul_Agarwal.docx', 'Verified', 370780),
(135, 'ADITI', 'ady1321@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'ady_CV_v1.2.doc', 'Verified', 195909),
(136, 'Ashvin Gajera', 'ashvin2266@yahoo.co.in', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Ashvin_CV.docx', 'Verified', 361936),
(137, ' Baljeev M R ', 'baljeev@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Baljeev.doc', 'Verified', 421354),
(138, 'Kristina Vaitiekute', 'k.vaitiekute4@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'CV_test.EN.pdf', 'Verified', 810011),
(139, 'Edinaldo Lima', 'edinaldo.lima@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Edinaldo_CVd.docx', 'Verified', 601054),
(140, 'Italo Moraes', 'italoe@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Italo_Moraes_-_Full_Stack_Software_Engineer.pdf', 'Verified', 828097),
(141, 'Jagdeep Bhoria', 'jagdeep.bhoria@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Jagdeep_Bhoria_Test_Analyst.docx', 'Verified', 325434),
(142, 'Sherry Raheem', 'sherryraheem15@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'LatestCV2019new1.docx', 'Verified', 956447),
(143, 'NIKE  OLABINTAN ', 'toyasolabint@yahoo.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Nike_Olabintan_-_Tester.doc', 'Verified', 335503),
(144, ' O n d e r   T a p a r ', 'ondertapar@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'OnderTapar.doc', 'Verified', 275537),
(145, 'Pradip Pack', 'pradip.pack@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'PradipPackCV-06-19.docx', 'Verified', 190415),
(146, 'Pallavi Yewale', 'pallaviyewale15@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Resume-TestAnalyst-Automation-Manual.docx', 'Verified', 672294),
(147, 'Uyoyo oghene Okoro   ', 'okoro.uyoyo@aol.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'ResumeUYOYO+OKOROAnalyst.docx', 'Verified', 604994),
(148, '  REVANTH', 'rcrazy61@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'REV_CV.docx', 'Verified', 337928),
(149, 'SATIP RANJAN PADHY', 'satippadhyds@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Satip_7yrs_DB_ETL_CV.pdf', 'Verified', 632867),
(150, 'Seema Kodihalli Balachandra', 'seema.sorab@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Seema_Testlead_CV_July2019.docx', 'Verified', 748887),
(151, 'Taiwo Afolabi Fajemirokun', 'tkfajek@yahoo.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'TAIWO_FAJEMIROKUN_CV_Test_Analyst_updated..docx', 'Verified', 866300),
(152, 'VICTOR ONIBOKUN', 'victor.onibokun@gmail.com', 'http://localhost:8889/demo/Cognate_jobsearch/email_verification.php', 'cde83d11de39e5902fa33ddd99526359', 'cde83d11de39e5902fa33ddd99526359', 'Job Seeker', '', 'profile.png', '', '', '', '', '', '', '', '', '', '', '', 'Victor_A_Onibokun_CV_2019_MBox..docx', 'Verified', 256926);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
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
-- Indexes for table `location_india`
--
ALTER TABLE `location_india`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_uk`
--
ALTER TABLE `location_uk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_us`
--
ALTER TABLE `location_us`
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
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request_callback`
--
ALTER TABLE `request_callback`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
