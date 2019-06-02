-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2015 at 02:26 PM
-- Server version: 5.5.42-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `souljaz_kcocps`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Post` varchar(1000) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Date_s` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `status` text NOT NULL,
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  PRIMARY KEY (`fid`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`status`, `fid`, `Name`, `Email`, `Message`) VALUES
('', 2, 'Kevin Maina', 'kevin12maina@gmail.com', 'where can i download the bursary form '),
('', 3, 'Henry Kibet', 'Henrykipe@yahoo.com', 'How can i register and log in to the system?'),
('', 4, 'karen chepngeno koskei', 'kkoskei@kabarak.ac.ke', 'how do i apply for the CDF bursary funds from my County'),
('', 5, 'ekijelape', 'baxasemu@dfgggg.org', 'http://flagyl-online-buy.net/ - Buy Metronidazole <a href="http://priligy-cheapest-price-buy.org/">Buy Dapoxetine Online</a> http://lasix-buy-online.net/'),
('', 6, 'qonecuzulutu', 'iisyuv@popmailserv.org', 'http://flagyl-online-buy.net/ - Flagyl <a href="http://priligy-cheapest-price-buy.org/">Buy Priligy Online</a> http://lasix-buy-online.net/'),
('', 7, 'ixaququwek', 'oqigoha@mailadadad.org', 'http://flagyl-online-buy.net/ - Metronidazole 500 Mg <a href="http://priligy-cheapest-price-buy.org/">Dapoxetine Online</a> http://lasix-buy-online.net/'),
('', 8, 'omelecagehi', 'ueritzus@emailll.org', 'http://flagyl-online-buy.net/ - Buy Flagyl Online <a href="http://priligy-cheapest-price-buy.org/">Buy Priligy Online</a> http://lasix-buy-online.net/'),
('', 9, 'ulunuiki', 'atonixenu@fsfsdf.org', 'http://flagyl-online-buy.net/ - Metronidazole Online <a href="http://priligy-cheapest-price-buy.org/">Priligy En Usa</a> http://lasix-buy-online.net/'),
('', 10, 'uguyeyuca', 'ojuldubiy@emailrtg.org', 'http://flagyl-online-buy.net/ - Flagyl 500 Mg <a href="http://priligy-cheapest-price-buy.org/">Priligy</a> http://lasix-buy-online.net/'),
('', 11, 'idiitaye', 'adayojfa@rertimail.org', 'http://flagyl-online-buy.net/ - Buy Flagyl Online <a href="http://priligy-cheapest-price-buy.org/">Buy Dapoxetine</a> http://lasix-buy-online.net/'),
('', 12, 'anuyumaq', 'icesopn@aboutbothann.org', 'http://flagyl-online-buy.net/ - Metronidazole 500 Mg <a href="http://priligy-cheapest-price-buy.org/">Dapoxetine</a> http://lasix-buy-online.net/'),
('', 13, 'ahozbeisifara', 'aboboca@alfamailr.org', 'http://flagyl-online-buy.net/ - Flagyl Online <a href="http://priligy-cheapest-price-buy.org/">Buy Dapoxetine</a> http://lasix-buy-online.net/'),
('', 14, 'aducavoz', 'ibafur@mailfnmng.org', 'http://flagyl-online-buy.net/ - Metronidazole 500 Mg Antibiotic <a href="http://priligy-cheapest-price-buy.org/">Priligy Dapoxetine</a> http://lasix-buy-online.net/'),
('', 15, 'ursoquatgesu', 'azafaxeje@mailadadad.org', 'http://flagyl-online-buy.net/ - Flagyl Antibiotic <a href="http://priligy-cheapest-price-buy.org/">Buy Dapoxetine</a> http://lasix-buy-online.net/'),
('', 16, 'idetoiinemasu', 'ixihjepet@aboutbothann.org', 'http://flagyl-online-buy.net/ - Metronidazole 500 Mg <a href="http://priligy-cheapest-price-buy.org/">Dapoxetine Order</a> http://lasix-buy-online.net/'),
('', 17, 'dogotenamru', 'sejogiwi@eehfmail.org', 'http://flagyl-online-buy.net/ - Buy Metronidazole <a href="http://priligy-cheapest-price-buy.org/">Priligy En Usa</a> http://lasix-buy-online.net/'),
('', 18, 'urasuberud', 'kiqipo@asdjmail.org', 'http://flagyl-online-buy.net/ - Flagyl 500 Mg <a href="http://priligy-cheapest-price-buy.org/">Buy Priligy Online</a> http://lasix-buy-online.net/'),
('', 19, 'otowejekmado', 'ukefahipn@akmaila.org', 'http://flagyl-online-buy.net/ - Buy Flagyl Online <a href="http://priligy-cheapest-price-buy.org/">60 Mg Dapoxetine</a> http://lasix-buy-online.net/'),
('', 20, 'upomvijoewudu', 'hehocitu@asdjmail.org', 'http://flagyl-online-buy.net/ - Buy Metronidazole <a href="http://priligy-cheapest-price-buy.org/">Dapoxetine Online</a> http://lasix-buy-online.net/');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Date_s` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username` (`Username`,`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`ID`, `Username`, `Password`, `Email`, `Date_s`, `status`) VALUES
(5, 'Dandee', 'souljaz', 'AdminDandee@kabu.com', '2014-12-09 21:52:30', 0),
(6, 'm', 'm', '', '2015-04-23 12:52:27', 0),
(7, 'Patrick', 'mylove2015', 'ronohpatrick2@gmail.com', '2015-04-29 09:56:22', 0),
(8, 'Josphat', '0649600', 'rjosphat@gmail.com', '2015-05-05 13:50:42', 0),
(9, 'Ken', 'ron_ken_tai', 'kenoeronie@yahoo.com', '2015-05-10 19:23:44', 0),
(13, 'Anto', 'kipkwech', 'antotiro@gmail.com', '2015-05-25 12:01:29', 0),
(17, 'bmadete', 'kaggy2011', 'bmadete54@gmail.com', '2015-05-25 12:53:36', 0),
(19, '', '', '', '2015-05-25 12:54:24', 0),
(21, '1', '1', 'bmadete54@gmail.com', '2015-06-02 09:11:06', 0),
(22, 'sang leonard', 'leonados', 'leshnao@gmail.com', '2015-06-23 13:25:03', 0),
(23, 'KOECH EDWIN', 'cherujohny', 'edwinkoech60@gmail.com', '2015-07-06 18:22:53', 0),
(24, 'Peter Ngeno', '7468pkn86', 'npetero@live.com', '2015-07-09 06:27:20', 0),
(26, 'csrono', 'Geoffneg78', 'ckronoh@gmail.com', '2015-07-29 12:34:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `s_complains`
--

CREATE TABLE IF NOT EXISTS `s_complains` (
  `Agenda_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`Agenda_id`),
  KEY `Agenda_id` (`Agenda_id`),
  KEY `Agenda_id_2` (`Agenda_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `s_complains`
--

INSERT INTO `s_complains` (`Agenda_id`, `Constituency`, `Ward`, `issue`, `description`, `date_saved`, `Q_comment`, `email`, `fwd_to`, `Ministry`, `A_comment`, `F_comment`, `f_Ministry`, `f_Constituency`, `Responded_by`, `Status`) VALUES
(4, 'Ainamoi', 'Kipchebor', 'Agriculture, Livestock & Fisheries', 'poor water supply', '2015-05-14 10:10:00', '', '', 'C.O', '', '', '', 'Agriculture, Livestock & Fisheries', '', '', 'Forwarded'),
(5, 'Bureti', 'Cheplanget', 'Public Works, Roads & Transport', 'Your Excellency The Governor, we as the residents of the above mentioned ward have a road problem. Road classified 1084E from PANDA PILIS TO KAMPALA is constructed half way, why? Kindly make extension from Sach-Angwan to Kampala. From HESBORN TONUI. ', '2015-05-17 15:37:28', 'The road is being constructed now', '', 'C.E.C', '', '', 'please respond and forward to the respective personnel', 'Public Works, Roads & Transport', '', 'Quality Assurance', 'Replied'),
(8, 'Kipkelion West', 'Londiani', 'Health Services', 'slow medical services', '2015-06-08 11:22:13', '', '', 'C.O', '', '', 'deal with this ', 'Health Services', '', '', 'Forwarded'),
(9, 'Soin/Sigowet', 'Soin Ward', 'Water, Energy, Forestry, Environment and Natural Resources', 'poor water drainage', '2015-07-08 13:05:15', '', '', 'C.O', '', '', 'please deal with this issue', 'Water, Energy, Forestry, Environment and Natural R', '', '', 'Forwarded'),
(10, 'Ainamoi', 'Ainamoi Ward', 'Information, Communication & E-Government', 'SLOW NET', '2015-07-08 13:09:53', '', '', 'C.O', '', '', '', 'Information, Communication & E-Government', '', '', 'Forwarded');

-- --------------------------------------------------------

--
-- Table structure for table `s_disaster`
--

CREATE TABLE IF NOT EXISTS `s_disaster` (
  `Agenda_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`Agenda_id`),
  KEY `Agenda_id` (`Agenda_id`),
  KEY `Agenda_id_2` (`Agenda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `s_inquiries`
--

CREATE TABLE IF NOT EXISTS `s_inquiries` (
  `Agenda_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `f_Ministry` varchar(50) NOT NULL,
  `f_Constituency` varchar(20) NOT NULL,
  `Responded_by` varchar(30) NOT NULL,
  `Status` varchar(10) NOT NULL,
  KEY `Agenda_id` (`Agenda_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `s_inquiries`
--

INSERT INTO `s_inquiries` (`Agenda_id`, `Constituency`, `Ward`, `issue`, `description`, `date_saved`, `email`, `Q_comment`, `F_comment`, `fwd_to`, `A_comment`, `Ministry`, `f_Ministry`, `f_Constituency`, `Responded_by`, `Status`) VALUES
(1, 'Ainamoi', 'Kipchebor', 'Agriculture, Livestock & Fisheries', 'where can i get advice on proper farming practices?', '2015-04-17 10:21:27', '', 'try visiting your sub county office for assistance ', '', '', '', '', '', '', 'Quality Assurance', 'Replied'),
(2, 'Ainamoi', 'Kapsaos', 'Trade, Industrialization, Co-operate  Management & Wildlife', 'where can i get assistance if i wanted to register my own company and what might be the rates?', '2015-04-17 10:35:31', '', 'Come visit our co-operatives offices near DC government offices', '', '', '', '', '', '', 'Quality Assurance', 'Replied'),
(3, 'Kipkelion West', 'Kamasian', 'Information, Communication & E-Government', 'where can we get soft copy of the Kericho County Integrated Development Plan(2013-17)', '2015-05-01 11:54:14', '', '', '', 'C.O', '', '', 'Information, Communication & E-Government', '', '', 'Forwarded'),
(5, 'Ainamoi', 'Ainamoi Ward', 'Public Works, Roads & Transport', 'Draft your Complain here ...what is the status of laliat-barsaiyan- sachangwan- koitabmat road', '2015-05-04 08:31:40', '', '', 'please reply to this issue', 'C.O', '', '', 'Public Works, Roads & Transport', '', '', 'Forwarded'),
(7, 'Ainamoi', 'Kapkugerwet', 'Other', 'when are the loans  applied disbursed', '2015-05-07 15:01:04', '', 'depends on the type of loan you are applying for please specify', '', '', '', '', '', '', 'Quality Assurance', 'Replied'),
(8, 'Bureti', 'Cheplanget', 'Education, Youth affairs, Culture & Social Services', '1.Where ca we get youths funds to start up our businesses as individuals?\r\n2.As youths with groups were promised to get access to loans in the county,what are the channels to be followed. ', '2015-05-22 11:29:26', '', '', 'please reply to this question', 'C.O', '', '', 'Education, Youth affairs, Culture & Social Service', '', '', 'Forwarded'),
(9, 'Bureti', 'Cheplanget', 'Education, Youth affairs, Culture & Social Services', '1.Can an individual get access to loans for youths to start a business? \r\n2.Where can a youth group registered get access to loans?', '2015-05-22 11:43:23', '', '', '', 'C.O', '', '', 'Education, Youth affairs, Culture & Social Service', '', '', 'Forwarded'),
(10, 'Kipkelion East', 'Kedowa/Kimugul', 'Education, Youth affairs, Culture & Social Services', 'How do I apply for the loan that our governor disbursed to HELB. Undergraduate student at Dedan Kimathi University of Technology, kindly help.\r\n', '2015-08-05 10:24:25', '', '', '', 'C.O', '', '', 'Education, Youth affairs, Culture & Social Service', '', '', 'Forwarded');

-- --------------------------------------------------------

--
-- Table structure for table `s_recommendation`
--

CREATE TABLE IF NOT EXISTS `s_recommendation` (
  `Agenda_id` int(100) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`Agenda_id`),
  KEY `Agenda_id` (`Agenda_id`),
  KEY `Agenda_id_2` (`Agenda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `s_suggestion`
--

CREATE TABLE IF NOT EXISTS `s_suggestion` (
  `Agenda_id` int(10) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`Agenda_id`),
  KEY `Agenda_id` (`Agenda_id`),
  KEY `Agenda_id_2` (`Agenda_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `s_suggestion`
--

INSERT INTO `s_suggestion` (`Agenda_id`, `Constituency`, `Ward`, `issue`, `description`, `date_saved`, `Q_comment`, `F_comment`, `fwd_to`, `A_comment`, `Ministry`, `f_Ministry`, `f_Constituency`, `Responded_by`, `Status`) VALUES
(1, 'Kipkelion East', 'Kedowa/Kimugul', 'Public Works, Roads & Transport', 'would you consider adding more worker on the rural roads development process, the rains are making it hard for us to travel from place to place business activities affected', '2015-04-17 10:23:29', 'will take this under advisement and consider your suggestion thank you loyal citizen ', 'please respond to this', 'C.E.C', '', '', 'Public Works, Roads & Transport', '', 'C.E.C', 'Replied'),
(2, 'Bureti', '0', 'Public Works, Roads & Transport', 'Am wishing the county government would fasten the installation of security along the highway as earlier promised\r\n\r\n\r\n', '2015-04-27 11:59:32', 'street lights are being installed allong the highway and although its slow just please be patient', '', '', '', '', '', '', 'Quality Assurance', 'Replied'),
(3, 'Belgut', 'Kapsoit', 'Finance & Economic Planning', 'Poor management of funds', '2015-07-30 09:10:58', 'We will into that', '', '', '', '', '', '', 'Quality Assurance', 'Replied');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `Email` varchar(100) NOT NULL,
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
  PRIMARY KEY (`Adm_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=80 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Adm_id`, `user_role`, `username`, `password`, `Email`, `firstname`, `lastname`, `Gender`, `Birthdate`, `Department`, `PhoneNo`, `img`, `date_registered`, `Bio`, `Constituency`) VALUES
(1, 'Admin', 'Admin', '1234', 'admin.kcocps@info.com', 'Quality', 'Assurance', 'Assurance', '1990', '', 837533, 'imagesh.jpg', 0, '2015-01-29 16:00:57', ''),
(2, 'Quality Assurance', 'QA', '1234', 'qa.kcocps@info.com', 'Quality', 'Assurance', '', '1991', '', 837533, '', 0, '', ''),
(3, 'County Secretary', 'CS', '1234', 'cs.kcocps@info.com', '', '', 'Male', '1998', '', 71728263, '', 0, '2015-01-29 16:00:57', ''),
(14, 'Governor', 'GOV', '1234', '', '', '', '', '', '', 0, '', 0, '', ''),
(15, 'Deputy Governor', 'DGOV', '1234', '', '', '', '', '', '', 0, '', 0, '', ''),
(48, 'C.E.C', 'CECFEP', '1234', '', '', '', '', '', 'Finance & Economic Planning', 0, '', 0, '', ''),
(49, 'C.E.C', 'CECPSM', '1234', '', '', '', '', '', 'Public Service Management', 0, '', 0, '', ''),
(50, 'C.E.C', 'CECWEFER', '1234', '', '', '', '', '', 'Water, Energy, Forestry, Environment and Natural Resources', 0, '', 0, '', ''),
(51, 'C.E.C', 'CECPRT', '1234', '', '', '', '', '', 'Public Works, Roads & Transport', 0, '', 0, '', ''),
(52, 'C.E.C', 'CECICT', '1234', '', '', '', '', '', 'Information, Communication & E-Government', 0, '', 0, '', ''),
(53, 'C.E.C', 'CECEYCS', '1234', '', '', '', '', '', 'Education, Youth affairs, Culture & Social Services', 0, '', 0, '', ''),
(54, 'C.E.C', 'CECLHP', '1234', '', '', '', '', '', 'Land, Housing & Physical Planning', 0, '', 0, '', ''),
(55, 'C.E.C', 'CECH', '1234', '', '', '', '', '', 'Health Services', 0, '', 0, '', ''),
(56, 'C.E.C', 'CECTICW', '1234', '', '', '', '', '', 'Trade, Industrialization, Co-operate Management & Wildlife', 0, '', 0, '', ''),
(57, 'C.E.C', 'CECALF', '1234', '', '', '', '', '', 'Agriculture, Livestock & Fisheries', 0, '', 0, '', ''),
(58, 'C.O', 'COALF', '1234', '', '', '', '', '', 'Agriculture, Livestock & Fisheries', 0, '', 0, '', ''),
(59, 'C.O', 'COFEP', '1234', '', '', '', '', '', 'Finance & Economic Planning', 0, '', 0, '', ''),
(60, 'C.O', 'COPSM', '1234', '', '', '', '', '', 'Public Service Management', 0, '', 0, '', ''),
(61, 'C.O', 'COWEFER', '1234', '', '', '', '', '', 'Water, Energy, Forestry, Environment and Natural Resources', 0, '', 0, '', ''),
(62, 'C.O', 'COPRT', '1234', '', '', '', '', '', 'Public Works, Roads & Transport', 0, '', 0, '', ''),
(63, 'C.O', 'COICT', '1234', '', '', '', '', '', 'Information, Communication & E-Government', 0, '', 0, '', ''),
(64, 'C.O', 'COEYCS', '1234', '', '', '', '', '', 'Education, Youth affairs, Culture & Social Services', 0, '', 0, '', ''),
(65, 'C.O', 'COLHP', '1234', '', '', '', '', '', 'Land, Housing & Physical Planning', 0, '', 0, '', ''),
(66, 'C.O', 'COH', '1234', '', '', '', '', '', 'Health Services', 0, '', 0, '', ''),
(67, 'C.O', 'COTICW', '1234', '', '', '', '', '', 'Trade, Industrialization, Co-operate  Management & Wildlife', 0, '', 0, '', ''),
(68, 'Sub-County Admin', 'SUBCAA', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Ainamoi'),
(69, 'Dept_Sub-County Admin', 'DSUBCAA', '', '', '', '', '', '', '', 0, '', 0, '', 'Ainamoi'),
(70, 'Sub-County Admin', 'SUBCABE', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Belgut'),
(71, 'Dept_Sub-County Admin', 'DSUBCABE', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Belgut'),
(72, 'Sub-County Admin', 'SUBCAKW', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Kipkelion West'),
(73, 'Dept_Sub-County Admin', 'DSUBCAKW', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Kipkelion West'),
(74, 'Sub-County Admin', 'SUBCAKE', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Kipkelion East'),
(75, 'Dept_Sub-County Admin', 'DSUBCAKE', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Kipkelion East'),
(76, 'Sub-County Admin', 'SUBCABU', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Bureti'),
(77, 'Dept_Sub-County Admin', 'DSUBCABU', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Bureti'),
(78, 'Sub-County Admin', 'SUBCASS', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Soin/Sigowet'),
(79, 'Dept_Sub-County Admin', 'DSUBCASS', '1234', '', '', '', '', '', '', 0, '', 0, '', 'Soin/Sigowet');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
