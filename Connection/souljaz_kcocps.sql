-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 05:15 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `souljaz_kcocps`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `Project_ID` int(11) NOT NULL,
  `Project_Name` varchar(250) NOT NULL,
  `Project_Description` varchar(250) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `MBudget` int(50) NOT NULL,
  `CMBudget` int(50) NOT NULL,
  `E_tBudget` double NOT NULL,
  `E_Labor` int(25) NOT NULL,
  `E_Facilities` int(25) NOT NULL,
  `E_Duration` int(25) NOT NULL,
  `E_Cost` int(25) NOT NULL,
  `C_Cost` int(11) NOT NULL,
  `C_Labor` int(11) NOT NULL,
  `C_Facilities` int(11) NOT NULL,
  `C_Duration` int(11) NOT NULL,
  `C_tBudget` int(11) NOT NULL,
  `PBudget` int(25) NOT NULL,
  `CPBudget` int(11) NOT NULL,
  `CPRBudget` int(11) NOT NULL,
  `FNsup` varchar(50) NOT NULL,
  `LNsup` varchar(50) NOT NULL,
  `Csup` varchar(250) NOT NULL,
  `User_role` int(11) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Labour` int(11) NOT NULL,
  `Facilities` int(11) NOT NULL,
  `Duration` int(11) NOT NULL,
  `Ministry` varchar(200) NOT NULL,
  `Constituency` varchar(25) NOT NULL,
  `Ward` varchar(25) NOT NULL,
  `Csur` varchar(50) NOT NULL,
  `FNsur` varchar(50) NOT NULL,
  `LNsur` varchar(50) NOT NULL,
  `FNPE` varchar(50) NOT NULL,
  `LNPE` varchar(50) NOT NULL,
  `CPE` varchar(50) NOT NULL,
  `FNPC` varchar(50) NOT NULL,
  `LNPC` varchar(50) NOT NULL,
  `CPC` varchar(50) NOT NULL,
  `FNPM` varchar(50) NOT NULL,
  `LNPM` varchar(50) NOT NULL,
  `CPM` varchar(35) NOT NULL,
  `Progress` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Project_ID`, `Project_Name`, `Project_Description`, `Company`, `MBudget`, `CMBudget`, `E_tBudget`, `E_Labor`, `E_Facilities`, `E_Duration`, `E_Cost`, `C_Cost`, `C_Labor`, `C_Facilities`, `C_Duration`, `C_tBudget`, `PBudget`, `CPBudget`, `CPRBudget`, `FNsup`, `LNsup`, `Csup`, `User_role`, `Cost`, `Labour`, `Facilities`, `Duration`, `Ministry`, `Constituency`, `Ward`, `Csur`, `FNsur`, `LNsur`, `FNPE`, `LNPE`, `CPE`, `FNPC`, `LNPC`, `CPC`, `FNPM`, `LNPM`, `CPM`, `Progress`) VALUES
(0, 'ProjectPAF', 'pikapika', '', 3500000, 3247700, 252300, 230000, 20000, 0, 2300, 3500, 2500, 1300, 4, 7300, 252300, 245000, 7300, 'ujghjgj', 'jgjgjgj', 'jgjgjgjg', 0, 0, 0, 0, 0, 'Finance & Economic Planning', 'Ainamoi', 'Kapsoit', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(11) NOT NULL,
  `Post` varchar(1000) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Date_s` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `Post`, `Content`, `Date_s`) VALUES
(1, 'Governor Address', 'ther will be a Governors Address On 23rd july, 2016 at the uhuru open group from 10.00am all are invited', '2016-04-07 07:24:36');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `Budget_id` int(11) NOT NULL,
  `MBudget` int(50) NOT NULL,
  `Ministry` varchar(250) NOT NULL,
  `BudgetM` int(50) NOT NULL,
  `BudgetR` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`Budget_id`, `MBudget`, `Ministry`, `BudgetM`, `BudgetR`) VALUES
(2, 450000000, '', 0, 0),
(5, 446500000, 'Finance & Economic Planning', 3500000, 446500000);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `status` text NOT NULL,
  `Date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fid` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Reply` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`status`, `Date_posted`, `fid`, `Name`, `Email`, `Message`, `Reply`) VALUES
('', '2016-04-07 07:23:02', 1, 'admin', 'Admintesting@gmail.com', 'sdsdss', '');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Date_s` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Company` varchar(250) NOT NULL,
  `Ministry` varchar(350) NOT NULL,
  `User_role` varchar(20) NOT NULL,
  `Project_Name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`ID`, `Username`, `Password`, `Email`, `Date_s`, `status`, `FName`, `LName`, `Company`, `Ministry`, `User_role`, `Project_Name`) VALUES
(26, 'csrono', 'Geoffneg78', 'ckronoh@gmail.com', '2015-07-29 12:34:32', 1, '', '', '', '', '', ''),
(27, 'f9caec', 'f9caec', '', '2016-04-07 07:38:00', 1, 'gffgfg', 'gfgfgf', 'fgfgfg', 'Finance & Economic Planning', 'Supervisor', 'ProjectPAF'),
(28, '44327e', '44327e', '', '2016-04-07 07:53:33', 1, 'ujghjgj', 'jgjgjgj', 'jgjgjgjg', 'Finance & Economic Planning', 'Supervisor', 'ProjectPAF');

-- --------------------------------------------------------

--
-- Table structure for table `s_complains`
--

CREATE TABLE IF NOT EXISTS `s_complains` (
  `Agenda_id` int(11) NOT NULL,
  `Constituency` varchar(40) NOT NULL,
  `Ward` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Q_comment` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fwd_to` varchar(30) NOT NULL,
  `Ministry` varchar(100) NOT NULL,
  `A_comment` varchar(500) NOT NULL,
  `F_comment` varchar(500) NOT NULL,
  `f_Ministry` varchar(50) NOT NULL,
  `f_Constituency` varchar(40) NOT NULL,
  `Responded_by` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Comments` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_corruption`
--

CREATE TABLE IF NOT EXISTS `s_corruption` (
  `Agenda_id` int(10) NOT NULL,
  `Constituency` varchar(100) NOT NULL,
  `Ward` varchar(30) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Q_comment` varchar(500) NOT NULL,
  `F_comment` varchar(500) NOT NULL,
  `fwd_to` varchar(50) NOT NULL,
  `A_comment` varchar(500) NOT NULL,
  `Ministry` varchar(50) NOT NULL,
  `f_Ministry` varchar(50) NOT NULL,
  `f_Constituency` varchar(40) NOT NULL,
  `Responded_by` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Comments` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_disaster`
--

CREATE TABLE IF NOT EXISTS `s_disaster` (
  `Agenda_id` int(11) NOT NULL,
  `Constituency` varchar(50) NOT NULL,
  `Ward` varchar(50) NOT NULL,
  `issue` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Q_comment` varchar(500) NOT NULL,
  `F_comment` varchar(500) NOT NULL,
  `fwd_to` varchar(30) NOT NULL,
  `A_comment` varchar(500) NOT NULL,
  `Ministry` varchar(50) NOT NULL,
  `f_Ministry` varchar(50) NOT NULL,
  `f_Constituency` varchar(20) NOT NULL,
  `Responded_by` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_inquiries`
--

CREATE TABLE IF NOT EXISTS `s_inquiries` (
  `Agenda_id` int(11) NOT NULL,
  `Constituency` varchar(100) NOT NULL,
  `Ward` varchar(30) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  `Q_comment` varchar(500) NOT NULL,
  `F_comment` varchar(500) NOT NULL,
  `fwd_to` varchar(50) NOT NULL,
  `A_comment` varchar(500) NOT NULL,
  `Ministry` varchar(50) NOT NULL,
  `Comments` varchar(200) NOT NULL,
  `f_Ministry` varchar(50) NOT NULL,
  `f_Constituency` varchar(20) NOT NULL,
  `Responded_by` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_recommendation`
--

CREATE TABLE IF NOT EXISTS `s_recommendation` (
  `Agenda_id` int(100) NOT NULL,
  `Constituency` varchar(100) NOT NULL,
  `Ward` varchar(30) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Q_comment` varchar(500) NOT NULL,
  `F_comment` varchar(500) NOT NULL,
  `fwd_to` varchar(50) NOT NULL,
  `A_comment` varchar(500) NOT NULL,
  `Ministry` varchar(50) NOT NULL,
  `f_Ministry` varchar(50) NOT NULL,
  `f_Constituency` varchar(50) NOT NULL,
  `Responded_by` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_suggestion`
--

CREATE TABLE IF NOT EXISTS `s_suggestion` (
  `Agenda_id` int(10) NOT NULL,
  `Constituency` varchar(100) NOT NULL,
  `Ward` varchar(30) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Q_comment` varchar(500) NOT NULL,
  `F_comment` varchar(500) NOT NULL,
  `fwd_to` varchar(50) NOT NULL,
  `A_comment` varchar(500) NOT NULL,
  `Ministry` varchar(50) NOT NULL,
  `f_Ministry` varchar(50) NOT NULL,
  `f_Constituency` varchar(40) NOT NULL,
  `Responded_by` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Comments` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Adm_id` int(11) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Birthdate` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date_registered` bigint(20) NOT NULL,
  `Bio` varchar(200) NOT NULL,
  `Constituency` varchar(30) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Project_Name` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Adm_id`, `user_role`, `username`, `password`, `Email`, `title`, `firstname`, `lastname`, `Gender`, `Birthdate`, `Department`, `PhoneNo`, `img`, `date_registered`, `Bio`, `Constituency`, `Company`, `Project_Name`) VALUES
(1, 'Admin', 'Admin', '1234', 'admin.kcocps@info.com', '', 'Quality', 'Assurance', 'Assurance', '1990', '', 837533, 'imagesh.jpg', 0, '2015-01-29 16:00:57', '', '', '0'),
(2, 'Quality Assurance', 'QA', '1234', 'qa.kcocps@info.com', '', 'Quality', 'Assurance', '', '1991', '', 837533, '', 0, '', '', '', '0'),
(3, 'County Secretary', 'CS', '1234', 'cs.kcocps@info.com', '', '', '', 'Male', '1998', '', 71728263, '', 0, '2015-01-29 16:00:57', '', '', '0'),
(14, 'Governor', 'GOV', '1234', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '0'),
(15, 'Deputy Governor', 'DGOV', '1234', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '0'),
(48, 'C.E.C', 'CECFEP', '1234', 'themann@gmail.com', 'Hon.', 'theman', 'man', 'Male', '30-06-1960', 'Finance & Economic Planning', 0, '', 0, '', '', '', '0'),
(49, 'C.E.C', 'CECPSM', '1234', '', '', '', '', '', '', 'Public Service Management', 0, '', 0, '', '', '', '0'),
(50, 'C.E.C', 'CECWEFER', '1234', '', '', '', '', '', '', 'Water, Energy, Forestry, Environment and Natural Resources', 0, '', 0, '', '', '', '0'),
(51, 'C.E.C', 'CECPRT', '1234', '', '', '', '', '', '', 'Public Works, Roads & Transport', 0, '', 0, '', '', '', '0'),
(52, 'C.E.C', 'CECICT', '1234', '', '', '', '', '', '', 'Information, Communication & E-Government', 0, '', 0, '', '', '', '0'),
(53, 'C.E.C', 'CECEYCS', '1234', '', '', '', '', '', '', 'Education, Youth affairs, Culture & Social Services', 0, '', 0, '', '', '', '0'),
(54, 'C.E.C', 'CECLHP', '1234', '', '', '', '', '', '', 'Land, Housing & Physical Planning', 0, '', 0, '', '', '', '0'),
(55, 'C.E.C', 'CECH', '1234', '', '', '', '', '', '', 'Health Services', 0, '', 0, '', '', '', '0'),
(56, 'C.E.C', 'CECTICW', '1234', '', '', '', '', '', '', 'Trade, Industrialization, Co-operate Management & Wildlife', 0, '', 0, '', '', '', '0'),
(57, 'C.E.C', 'CECALF', '1234', '', '', '', '', '', '', 'Agriculture, Livestock & Fisheries', 0, '', 0, '', '', '', '0'),
(58, 'C.O', 'COALF', '1234', '', '', '', '', '', '', 'Agriculture, Livestock & Fisheries', 0, '', 0, '', '', '', '0'),
(59, 'C.O', 'COFEP', '1234', '', '', '', '', '', '', 'Finance & Economic Planning', 0, '', 0, '', '', '', '0'),
(60, 'C.O', 'COPSM', '1234', '', '', '', '', '', '', 'Public Service Management', 0, '', 0, '', '', '', '0'),
(61, 'C.O', 'COWEFER', '1234', '', '', '', '', '', '', 'Water, Energy, Forestry, Environment and Natural Resources', 0, '', 0, '', '', '', '0'),
(62, 'C.O', 'COPRT', '1234', '', '', '', '', '', '', 'Public Works, Roads & Transport', 0, '', 0, '', '', '', '0'),
(63, 'C.O', 'COICT', '1234', '', '', '', '', '', '', 'Information, Communication & E-Government', 0, '', 0, '', '', '', '0'),
(64, 'C.O', 'COEYCS', '1234', '', '', '', '', '', '', 'Education, Youth affairs, Culture & Social Services', 0, '', 0, '', '', '', '0'),
(65, 'C.O', 'COLHP', '1234', '', '', '', '', '', '', 'Land, Housing & Physical Planning', 0, '', 0, '', '', '', '0'),
(66, 'C.O', 'COH', '1234', '', '', '', '', '', '', 'Health Services', 0, '', 0, '', '', '', '0'),
(67, 'C.O', 'COTICW', '1234', '', '', '', '', '', '', 'Trade, Industrialization, Co-operate  Management & Wildlife', 0, '', 0, '', '', '', '0'),
(68, 'Sub-County Admin', 'SUBCAA', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Ainamoi', '', '0'),
(69, 'Dept_Sub-County Admin', 'DSUBCAA', '', '', '', '', '', '', '', '', 0, '', 0, '', 'Ainamoi', '', '0'),
(70, 'Sub-County Admin', 'SUBCABE', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Belgut', '', '0'),
(71, 'Dept_Sub-County Admin', 'DSUBCABE', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Belgut', '', '0'),
(72, 'Sub-County Admin', 'SUBCAKW', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Kipkelion West', '', '0'),
(73, 'Dept_Sub-County Admin', 'DSUBCAKW', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Kipkelion West', '', '0'),
(74, 'Sub-County Admin', 'SUBCAKE', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Kipkelion East', '', '0'),
(75, 'Dept_Sub-County Admin', 'DSUBCAKE', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Kipkelion East', '', '0'),
(76, 'Sub-County Admin', 'SUBCABU', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Bureti', '', '0'),
(77, 'Dept_Sub-County Admin', 'DSUBCABU', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Bureti', '', '0'),
(78, 'Sub-County Admin', 'SUBCASS', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Soin/Sigowet', '', '0'),
(79, 'Dept_Sub-County Admin', 'DSUBCASS', '1234', '', '', '', '', '', '', '', 0, '', 0, '', 'Soin/Sigowet', '', '0'),
(81, 'Supervisor', '44327e', '44327e', '', '', 'ujghjgj', 'jgjgjgj', '', '', 'Finance & Economic Planning', 0, '', 0, '', '', 'jgjgjgjg', 'ProjectPAF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Project_ID`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`Budget_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`,`Email`);

--
-- Indexes for table `s_complains`
--
ALTER TABLE `s_complains`
  ADD PRIMARY KEY (`Agenda_id`),
  ADD KEY `Agenda_id` (`Agenda_id`),
  ADD KEY `Agenda_id_2` (`Agenda_id`);

--
-- Indexes for table `s_corruption`
--
ALTER TABLE `s_corruption`
  ADD PRIMARY KEY (`Agenda_id`),
  ADD KEY `Agenda_id` (`Agenda_id`),
  ADD KEY `Agenda_id_2` (`Agenda_id`);

--
-- Indexes for table `s_disaster`
--
ALTER TABLE `s_disaster`
  ADD PRIMARY KEY (`Agenda_id`),
  ADD KEY `Agenda_id` (`Agenda_id`),
  ADD KEY `Agenda_id_2` (`Agenda_id`);

--
-- Indexes for table `s_inquiries`
--
ALTER TABLE `s_inquiries`
  ADD KEY `Agenda_id` (`Agenda_id`);

--
-- Indexes for table `s_recommendation`
--
ALTER TABLE `s_recommendation`
  ADD PRIMARY KEY (`Agenda_id`),
  ADD KEY `Agenda_id` (`Agenda_id`),
  ADD KEY `Agenda_id_2` (`Agenda_id`);

--
-- Indexes for table `s_suggestion`
--
ALTER TABLE `s_suggestion`
  ADD PRIMARY KEY (`Agenda_id`),
  ADD KEY `Agenda_id` (`Agenda_id`),
  ADD KEY `Agenda_id_2` (`Agenda_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Adm_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `Budget_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `s_complains`
--
ALTER TABLE `s_complains`
  MODIFY `Agenda_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `s_corruption`
--
ALTER TABLE `s_corruption`
  MODIFY `Agenda_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `s_disaster`
--
ALTER TABLE `s_disaster`
  MODIFY `Agenda_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `s_inquiries`
--
ALTER TABLE `s_inquiries`
  MODIFY `Agenda_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `s_recommendation`
--
ALTER TABLE `s_recommendation`
  MODIFY `Agenda_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `s_suggestion`
--
ALTER TABLE `s_suggestion`
  MODIFY `Agenda_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Adm_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
