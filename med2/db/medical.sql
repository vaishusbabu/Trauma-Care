-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 08:47 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `hid`, `about`, `photo`) VALUES
(9, 'rims', 'The RIMS Hospital is the first multi-specialty hospital in Kerala, which offers dedicated medical and \r\nsurgical treatment to the people of Thiruvananthapuram and the surrounding areas. \r\nThe RIMS Hospital has the distinction of being the first private hospital in Kerala to perform Open Heart \r\nSurgery and start a Cardiac Catheterization Lab. The hospital has also been credited with introducing many advanced techniques\r\n and procedures in the medical history of Kerala such as Balloon Mitral Valvuloplasty and Bypass Surgery on a beating heart. \r\nThe first Mitral valvuloplasty was done here in 1988, three years after the introduction of open heart surgery.\r\n\r\nThe Sree Uthradom Thirunal Hospital retains the longest and the best safety record in Elective Open Heart Surgery including \r\nCoronary Bypass Surgery. The hospital offers the-state-of-the-art facilities and employs the use of the most sophisticated ultra \r\nmodern technology.\r\n\r\nThe RIMS Hospital, which was started with the aim of providing high standards of medical and health care at affordable costs, \r\nattracts people from Thiruvananthapuram and the surrounding places.', 'rims.jpg'),
(10, 'ashtamudi', 'Ashtamudi Hospital & Trauma Care Centre mend broken bodies, usher in new life, and provide a dignified gateway out of our mortal toil. Let''s define thus our mission on social responsibility entrusted upon us.\r\n\r\n', 'ashtamudi.jpg'),
(11, 'nairs', 'Welcome to Dr. Nair’s HospitalDr. Nair’s Hospital was started on 5/12/1968 by the late Dr. K. P. Nair and the late Smt. Lekshmikutty Amma as a small Nursing home. Today under Dr. P. Mohan Nair, MS, DHHM, we are a 200 bed , ISO 9001:2008 certified Multi Speciality Hospital. He is assisted by Ms. Usha Nair, CEO. \r\n\r\nStarting as a 10 bed hospital on 5/12/1968, with the late Dr. K. P Nair, FRCS as founder Director, we expanded over the years to include the departments of Anesthesiology, Dermatology, Dentistry, ENT, Gastroenterology, Gynecology, General Medicine, Neonatology, Nephrology, Neurology, Orthopaedics, Ophthalmology, Paediatrics, Psychiatry, Plastic & Reconstructive Surgery, Surgery& Urology. Each department is run by one or more Consultants who have attained a name in their Speciality.', 'nairs.png'),
(12, 'pnn', 'PNNM Hospital, a specialty hospital located in Anchalummood, close to the vibrant waters of the Ashtamudi Lake, is known for its standards of excellence in medical treatment and care. It is a multi specialty hospital with modern facilities and best computerized equipments. It was initially started as a clinic and has blossomed into a hospital with more than 100 bed strengths. Over the years, it had proved as one of the leading hospitals in Anchalummood with highest quality of healthcare.  Its flagship is ‘Sympathy to the poor is the commitment to the Almighty’. It aims at rendering quality medical service to all, irrespective of caste, color, creed and religion.', 'pnn.jpg'),
(13, 'kims@gmail.com', 'A multi-specialty tertiary care hospital where a competent team of specialists and sophisticated technology come together to deliver high-quality medical aid.', 'kims@gmail.com.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `accident_cid`
--

CREATE TABLE IF NOT EXISTS `accident_cid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `accident_id` varchar(10) NOT NULL,
  `cid` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `accident_cid`
--

INSERT INTO `accident_cid` (`id`, `hid`, `accident_id`, `cid`) VALUES
(1, 'kims@gmail.com', '1', 'JL72'),
(2, 'kims@gmail.com', '1', 'JL72'),
(3, 'kims@gmail.com', '3', 'SDXE'),
(4, 'kims@gmail.com', '4', '2318'),
(5, 'kims@gmail.com', '8', 'GFXQ'),
(6, 'kims@gmail.com', '15', 'F7EM'),
(7, 'kims@gmail.com', '17', '43IQ'),
(8, 'kims@gmail.com', '19', '14VN'),
(9, 'kims@gmail.com', '21', 'MXBK'),
(10, 'kims@gmail.com', '21', 'MXBK'),
(11, 'kims@gmail.com', '22', 'J0RS'),
(12, 'kims@gmail.com', '23', 'K8HA'),
(13, 'kims@gmail.com', '24', '53IS'),
(14, 'kims@gmail.com', '25', '5E7H'),
(15, 'kims@gmail.com', '26', '9P7G'),
(16, 'kims@gmail.com', '27', 'AIHM'),
(17, 'kims@gmail.com', '29', 'D8CJ'),
(18, 'kims@gmail.com', '30', 'INLW'),
(19, 'kims@gmail.com', '32', '64RA'),
(20, 'kims@gmail.com', '33', '4BU4'),
(21, 'kims@gmail.com', '34', 'TLK0'),
(22, 'kims@gmail.com', '35', 'XUTQ'),
(23, 'kims@gmail.com', '36', 'U5X0'),
(24, 'kims@gmail.com', '37', '1OVX'),
(25, 'kims@gmail.com', '38', '06P5'),
(26, 'kims@gmail.com', '39', 'WKUJ'),
(27, 'kims@gmail.com', '40', 'KRO0'),
(28, 'kims@gmail.com', '41', 'URLZ'),
(29, 'kims@gmail.com', '42', '2UAZ');

-- --------------------------------------------------------

--
-- Table structure for table `accident_id`
--

CREATE TABLE IF NOT EXISTS `accident_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accident_id`
--

INSERT INTO `accident_id` (`id`, `num`) VALUES
(1, 43);

-- --------------------------------------------------------

--
-- Table structure for table `add_dep`
--

CREATE TABLE IF NOT EXISTS `add_dep` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hosid` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `des` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `add_dep`
--

INSERT INTO `add_dep` (`id`, `hosid`, `dept`, `des`) VALUES
(1, 'kims@gmail.com', 'Cardiology', 'Nil'),
(2, 'kims@gmail.com', 'Neurology', 'Nil'),
(3, 'kims@gmail.com', 'Nephrology', 'Nil'),
(4, 'ahri@gmail.com', 'card', 'dfdg');

-- --------------------------------------------------------

--
-- Table structure for table `add_doc`
--

CREATE TABLE IF NOT EXISTS `add_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_yr` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `postdg` varchar(50) NOT NULL,
  `inst` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `busy` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `add_icu`
--

CREATE TABLE IF NOT EXISTS `add_icu` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hosid` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bed` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `bbed` varchar(50) NOT NULL,
  `nextavl` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `add_icu`
--

INSERT INTO `add_icu` (`id`, `hosid`, `dept`, `name`, `bed`, `des`, `bbed`, `nextavl`) VALUES
(1, 'kims@gmail.com', 'Cardiology ', 'Cardiac ICU', '10', 'Nil', '9', '1'),
(2, 'kims@gmail.com', 'Neurology ', 'Neuro Lab1', '8', 'Nil', '8', '0'),
(3, 'kims@gmail.com', 'Neurology ', 'Neuro Lab2', '5', 'Nil', '1', '4'),
(4, 'kims@gmail.com', 'Nephrology ', 'NPH ICU', '12', 'Nil', '2', '10'),
(5, 'kims@gmail.com', 'Cardiology ', 'Neuro Lab 2', '19', 'hgjhgjhgjhg', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `add_inc`
--

CREATE TABLE IF NOT EXISTS `add_inc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `desc` text NOT NULL,
  `uid` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `add_inc`
--

INSERT INTO `add_inc` (`id`, `nme`, `desc`, `uid`, `st`) VALUES
(1, 'Medical insurance', 'Medical insurance packages combine multiple insurance and non-insurance products to provide coverage that may save you 20%-50% compared to the cost of a major medical health insurance plan (that is, an Obamacare-compliant plan). Medical insurance packages are not major medical health insurance, so they do not cover the full set of Obamacare minimum essential benefits and are not eligible for Obamacare subsidies. However, medical insurance packages may be useful for people interested in paying a lower monthly premium in exchange for less comprehensive benefits.', 'ins@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `amb`
--

CREATE TABLE IF NOT EXISTS `amb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `em` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph1` varchar(150) NOT NULL,
  `ph2` varchar(150) NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `amb`
--

INSERT INTO `amb` (`id`, `nme`, `addr`, `em`, `cont`, `uid`, `pas`, `ph1`, `ph2`, `la`, `lo`, `st`) VALUES
(1, 'Nithin Nair', 'bvsjjhdbjsbjvbdjvbh', 'nn@gmail.com', '8794561234', 'nn123', '123', '1.jpg', '1.docx', 8.4926, 76.9449, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE IF NOT EXISTS `ambulance` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `ambu` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`id`, `hid`, `ambu`) VALUES
(1, 'kims@gmail.com', '3');

-- --------------------------------------------------------

--
-- Table structure for table `as_sym`
--

CREATE TABLE IF NOT EXISTS `as_sym` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dpt` varchar(150) NOT NULL,
  `dis` varchar(150) NOT NULL,
  `sid` varchar(150) NOT NULL,
  `sy` text NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `as_sym`
--

INSERT INTO `as_sym` (`id`, `dpt`, `dis`, `sid`, `sy`, `st`) VALUES
(17, '1', '2', '10', 'Shortness of breath.', 0),
(18, '1', '2', '12', 'Fatigue.', 0),
(19, '1', '2', '11', 'Cold sweat', 0),
(20, '1', '2', '8', 'Pressure, tightness, pain, or a squeezing or aching sensation in your chest or arms that may spread to your neck, jaw or back.', 0),
(21, '1', '2', '13', 'Lightheadedness or sudden dizziness', 0),
(22, '3', '3', '12', 'Fatigue.', 0),
(23, '3', '3', '13', 'Lightheadedness or sudden dizziness', 0),
(24, '3', '3', '1', 'Headache', 0),
(25, '2', '4', '4', 'Body Pain', 0),
(26, '2', '4', '10', 'Shortness of breath.', 0),
(27, '2', '4', '12', 'Fatigue.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `hid`, `blood`) VALUES
(1, 'kims@gmail.com', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `blood_reg`
--

CREATE TABLE IF NOT EXISTS `blood_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `age` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `em` varchar(150) NOT NULL,
  `cont` varchar(150) NOT NULL,
  `typ` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `ph1` varchar(150) NOT NULL,
  `ph2` varchar(150) NOT NULL,
  `la` float NOT NULL,
  `lo` float NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cit_data`
--

CREATE TABLE IF NOT EXISTS `cit_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `did` varchar(10) NOT NULL,
  `tid` varchar(10) NOT NULL,
  `vid` varchar(10) NOT NULL,
  `ward_num` varchar(50) NOT NULL,
  `hse_num` varchar(50) NOT NULL,
  `addr` text NOT NULL,
  `postal_pin` varchar(6) NOT NULL,
  `con` varchar(15) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `bgp` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `physic` varchar(25) NOT NULL,
  `physic_desc` text NOT NULL,
  `bar_code` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `cit_data`
--

INSERT INTO `cit_data` (`id`, `nme`, `sid`, `did`, `tid`, `vid`, `ward_num`, `hse_num`, `addr`, `postal_pin`, `con`, `pic`, `bgp`, `dob`, `physic`, `physic_desc`, `bar_code`, `password`, `st`) VALUES
(1, 'Biju Kurup', '18', '280', '1', '1', '12', '101', 'Ushas\r\nPulimath Post\r\nKilimanoor', '695612', '99568548546', '695612-12-101-755.jpg', 'O+ve', '1985-10-13', 'Normal', 'Nil', '695612-12-101-755', 'O6Ptx71Gk', 0),
(2, 'Binu Kurup', '18', '280', '1', '1', '12', '101', 'Ushas<br />Pulimath Post<br />Kilimanoor', '695612', '9446563002', '695612-12-101-382.jpg', 'AB+ve', '1996-08-10', 'Normal', 'Nil', '695612-12-101-382', '5c9Le4BaX', 0),
(3, 'Shradha Vimal', '18', '280', '1', '1', '12', '102', 's s bhavan<br />\r\nVellayambalam<br />\r\nTrivandrum', '696501', '9446563002', '6965010-12-101-415.jpg', 'O+ve', '1995-10-27', 'Normal', '', '6965010-12-101-415', 'R5b7ycH5I', 0),
(4, 'Gouri V R', '18', '280', '1', '1', '12', '123', 'Gouri Bhavan<br />\r\nChirayinkeezhu<br />\r\nAttingal', '695101', '9465874521', '695101-12-123-947.jpg', 'O+ve', '1996-07-23', 'Normal', '', '695101-12-123-947', 'xT45ABy9a', 0),
(5, 'Akhil K Maniyan', '18', '280', '1', '1', '15', '100', 'Geetha Bhavan<br />\r\nPothencode<br />\r\nTrivandrum', '695584', '9544508649', '695584-15-100-537.jpg', 'AB+ve', '1995-06-05', 'Normal', '', '695584-15-100-537', 'Mb6O6c1sZ', 0),
(6, 'Sreeraj S Nair', '18', '280', '1', '1', '12', '101', 'Gokulam<br />\r\nRamachanvila<br />\r\nAttingal', '695101', '9809576772', '695101-12-101-142.jpg', 'O+ve', '1995-01-14', 'Normal', '', '695101-12-101-142', 'b8KWp1t9Q', 0),
(7, 'Jeniga.N', '31', '505', '15', '3', '19', '73/1', 'CSI Church Street<br />\r\nKattuputhoor<br />\r\nAlakiypandipuram Post', '629851', '9629201092', '629851-19-73/1-359.jpg', 'O+ve', '1995-04-20', '', '', '629851-19-73/1-359', '9ohU71DOg', 0),
(9, 'vimal', '31', '505', '15', '3', '15', '100', 'vimal bhavan<br />\r\nkulathoor', '695101', '9446563005', '695101-15-100-189.jpg', 'O+ve', '1996-06-04', 'Normal', '', '695101-15-100-189', 'zAP6w54Ur', 0),
(10, 'Keerthi B U', '18', '280', '1', '1', '5', '356', 'BK Nivas<br />\r\nOlippunada<br />\r\nNaruvamoodu<br />\r\nTrivandrum', '695528', '9895717296', '695528-5-356-886.jpg', 'O+ve', '1996-09-14', 'Normal', '', '695528-5-356-886', 'zPx9c82EJ', 0),
(11, 'Jazeena A', '18', '280', '1', '1', '50', '25', 'Thiruvathira<br />\r\nChonamchira<br />\r\nPerinadu PO', '691601', '9847072674', '691601-50-25-267.jpg', 'O+ve', '1995-12-23', 'Normal', '', '691601-50-25-267', 'm2F3S4Twb', 0),
(12, 'Saranya M S', '18', '280', '1', '1', '16', '102', 'Saranya thamalam<br />\r\nPoojappura<br />\r\ntrivandrum', '695012', '9447242195', '695012-16-102-056.jpg', 'O+ve', '1995-02-15', 'Normal', '', '695012-16-102-056', '2XFvoU6n5', 0),
(13, 'Anand', '18', '280', '1', '1', '12', '11', 'tvm', '698089', '9876543212', '6980897-12-11-781.png', 'O+ve', '2018-02-14', 'Normal', '', '6980897-12-11-781', 'Gq1pm8F9U', 0),
(14, 'anjali', '18', '280', '1', '1', '79', '182', 'valiaveed oruvathilkotta po', '695501', '8965471236', '695501-79-182-910.png', 'O+ve', '1998-04-05', 'Normal', '', '695501-79-182-910', '7MhiKIy53', 0),
(15, 'Drupa', '18', '274', '16', '5', '11', '11', 'ktym', '678898', '999888888', '6788987-11-11-787.jpg', 'O-ve', '1997-05-05', 'Normal', '', '6788987-11-11-787', '4FAe1u4zH', 0),
(16, 'jitha', '18', '270', '17', '6', '45', '3', 'iduki', '687897', '9988767890', '6878976-45-3-603.png', 'O+ve', '1993-04-06', 'Normal', '', '6878976-45-3-603', '4lIXFx99m', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dist`
--

CREATE TABLE IF NOT EXISTS `dist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dpt` varchar(150) NOT NULL,
  `dis` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `dist`
--

INSERT INTO `dist` (`id`, `dpt`, `dis`) VALUES
(2, '1', 'Heart Attack'),
(3, '3', 'Brain Tumer'),
(4, '2', 'Nervous System Disorder');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `DistCode` int(11) NOT NULL AUTO_INCREMENT,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`DistCode`),
  KEY `StCode` (`StCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=651 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`) VALUES
(1, 1, 'North and Middle Andama'),
(2, 1, 'South Andama'),
(3, 1, 'Nicobar'),
(4, 2, 'Anantapur'),
(5, 2, 'Chittoor'),
(6, 2, 'East Godavari'),
(7, 2, 'Guntur'),
(8, 2, 'Krishna'),
(9, 2, 'Kurnool'),
(10, 2, 'Prakasam'),
(11, 2, 'Srikakulam'),
(12, 2, 'Sri Potti Sri Ramulu Nellore'),
(13, 2, 'Vishakhapatnam'),
(14, 2, 'Vizianagaram'),
(15, 2, 'West Godavari'),
(16, 2, 'Cudappah'),
(17, 3, 'Anjaw'),
(18, 3, 'Changlang'),
(19, 3, 'East Siang'),
(20, 3, 'East Kameng'),
(21, 3, 'Kurung Kumey'),
(22, 3, 'Lohit'),
(23, 3, 'Lower Dibang Valley'),
(24, 3, 'Lower Subansiri'),
(25, 3, 'Papum Pare'),
(26, 3, 'Tawang'),
(27, 3, 'Tirap'),
(28, 3, 'Dibang Valley'),
(29, 3, 'Upper Siang'),
(30, 3, 'Upper Subansiri'),
(31, 3, 'West Kameng'),
(32, 3, 'West Siang'),
(33, 4, 'Baksa'),
(34, 4, 'Barpeta'),
(35, 4, 'Bongaigao'),
(36, 4, 'Cachar'),
(37, 4, 'Chirang'),
(38, 4, 'Darrang'),
(39, 4, 'Dhemaji'),
(40, 4, 'Dima Hasao'),
(41, 4, 'Dhubri'),
(42, 4, 'Dibrugarh'),
(43, 4, 'Goalpara'),
(44, 4, 'Golaghat'),
(45, 4, 'Hailakandi'),
(46, 4, 'Jorhat'),
(47, 4, 'Kamrup'),
(48, 4, 'Kamrup Metropolita'),
(49, 4, 'Karbi Anglong'),
(50, 4, 'Karimganj'),
(51, 4, 'Kokrajhar'),
(52, 4, 'Lakhimpur'),
(53, 4, 'Morigao'),
(54, 4, 'Nagao'),
(55, 4, 'Nalbari'),
(56, 4, 'Sivasagar'),
(57, 4, 'Sonitpur'),
(58, 4, 'Tinsukia'),
(59, 4, 'Udalguri'),
(60, 5, 'Araria'),
(61, 5, 'Arwal'),
(62, 5, 'Aurangabad'),
(63, 5, 'Banka'),
(64, 5, 'Begusarai'),
(65, 5, 'Bhagalpur'),
(66, 5, 'Bhojpur'),
(67, 5, 'Buxar'),
(68, 5, 'Darbhanga'),
(69, 5, 'East Champara'),
(70, 5, 'Gaya'),
(71, 5, 'Gopalganj'),
(72, 5, 'Jamui'),
(73, 5, 'Jehanabad'),
(74, 5, 'Kaimur'),
(75, 5, 'Katihar'),
(76, 5, 'Khagaria'),
(77, 5, 'Kishanganj'),
(78, 5, 'Lakhisarai'),
(79, 5, 'Madhepura'),
(80, 5, 'Madhubani'),
(81, 5, 'Munger'),
(82, 5, 'Muzaffarpur'),
(83, 5, 'Nalanda'),
(84, 5, 'Nawada'),
(85, 5, 'Patna'),
(86, 5, 'Purnia'),
(87, 5, 'Rohtas'),
(88, 5, 'Saharsa'),
(89, 5, 'Samastipur'),
(90, 5, 'Sara'),
(91, 5, 'Sheikhpura'),
(92, 5, 'Sheohar'),
(93, 5, 'Sitamarhi'),
(94, 5, 'Siwa'),
(95, 5, 'Supaul'),
(96, 5, 'Vaishali'),
(97, 5, 'West Champara'),
(98, 6, 'Chandigarh'),
(99, 7, 'Bastar'),
(100, 7, 'Bijapur'),
(101, 7, 'Bilaspur'),
(102, 7, 'Dantewada'),
(103, 7, 'Dhamtari'),
(104, 7, 'Durg'),
(105, 7, 'Jashpur'),
(106, 7, 'Janjgir-Champa'),
(107, 7, 'Korba'),
(108, 7, 'Koriya'),
(109, 7, 'Kanker'),
(110, 7, 'Kabirdham (formerly Kawardha);'),
(111, 7, 'Mahasamund'),
(112, 7, 'Narayanpur'),
(113, 7, 'Raigarh'),
(114, 7, 'Rajnandgao'),
(115, 7, 'Raipur'),
(116, 7, 'Surajpur'),
(117, 8, 'Dadra and Nagar Haveli'),
(118, 9, 'Dama'),
(119, 9, 'Diu'),
(120, 10, 'Central Delhi'),
(121, 10, 'East Delhi'),
(122, 10, 'New Delhi'),
(123, 10, 'North Delhi'),
(124, 10, 'North East Delhi'),
(125, 10, 'North West Delhi'),
(126, 10, 'South Delhi'),
(127, 10, 'South West Delhi'),
(128, 10, 'West Delhi'),
(129, 11, 'North Goa'),
(130, 11, 'South Goa'),
(131, 12, 'Ahmedabad'),
(132, 12, 'Amreli'),
(133, 12, 'Anand'),
(134, 12, 'Aravalli'),
(135, 12, 'Banaskantha'),
(136, 12, 'Bharuch'),
(137, 12, 'Bhavnagar'),
(138, 12, 'Dahod'),
(139, 12, 'Dang'),
(140, 12, 'Gandhinagar'),
(141, 12, 'Jamnagar'),
(142, 12, 'Junagadh'),
(143, 12, 'Kutch'),
(144, 12, 'Kheda'),
(145, 12, 'Mehsana'),
(146, 12, 'Narmada'),
(147, 12, 'Navsari'),
(148, 12, 'Pata'),
(149, 12, 'Panchmahal'),
(150, 12, 'Porbandar'),
(151, 12, 'Rajkot'),
(152, 12, 'Sabarkantha'),
(153, 12, 'Surendranagar'),
(154, 12, 'Surat'),
(155, 12, 'Tapi'),
(156, 12, 'Vadodara'),
(157, 12, 'Valsad'),
(158, 13, 'Ambala'),
(159, 13, 'Bhiwani'),
(160, 13, 'Faridabad'),
(161, 13, 'Fatehabad'),
(162, 13, 'Gurgao'),
(163, 13, 'Hissar'),
(164, 13, 'Jhajjar'),
(165, 13, 'Jind'),
(166, 13, 'Karnal'),
(167, 13, 'Kaithal'),
(168, 13, 'Kurukshetra'),
(169, 13, 'Mahendragarh'),
(170, 13, 'Mewat'),
(171, 13, 'Palwal'),
(172, 13, 'Panchkula'),
(173, 13, 'Panipat'),
(174, 13, 'Rewari'),
(175, 13, 'Rohtak'),
(176, 13, 'Sirsa'),
(177, 13, 'Sonipat'),
(178, 13, 'Yamuna Nagar'),
(179, 14, 'Bilaspur'),
(180, 14, 'Chamba'),
(181, 14, 'Hamirpur'),
(182, 14, 'Kangra'),
(183, 14, 'Kinnaur'),
(184, 14, 'Kullu'),
(185, 14, 'Lahaul and Spiti'),
(186, 14, 'Mandi'),
(187, 14, 'Shimla'),
(188, 14, 'Sirmaur'),
(189, 14, 'Sola'),
(190, 14, 'Una'),
(191, 15, 'Anantnag'),
(192, 15, 'Badgam'),
(193, 15, 'Bandipora'),
(194, 15, 'Baramulla'),
(195, 15, 'Doda'),
(196, 15, 'Ganderbal'),
(197, 15, 'Jammu'),
(198, 15, 'Kargil'),
(199, 15, 'Kathua'),
(200, 15, 'Kishtwar'),
(202, 15, 'Kupwara'),
(203, 15, 'Kulgam'),
(204, 15, 'Leh'),
(205, 15, 'Poonch'),
(206, 15, 'Pulwama'),
(207, 15, 'Rajouri'),
(208, 15, 'Ramba'),
(209, 15, 'Reasi'),
(210, 15, 'Samba'),
(211, 15, 'Shopia'),
(212, 15, 'Srinagar'),
(213, 15, 'Udhampur'),
(214, 16, 'Bokaro'),
(215, 16, 'Chatra'),
(216, 16, 'Deoghar'),
(217, 16, 'Dhanbad'),
(218, 16, 'Dumka'),
(219, 16, 'East Singhbhum'),
(220, 16, 'Garhwa'),
(221, 16, 'Giridih'),
(222, 16, 'Godda'),
(223, 16, 'Gumla'),
(224, 16, 'Hazaribag'),
(225, 16, 'Jamtara'),
(226, 16, 'Khunti'),
(227, 16, 'Koderma'),
(228, 16, 'Latehar'),
(229, 16, 'Lohardaga'),
(230, 16, 'Pakur'),
(231, 16, 'Palamu'),
(232, 16, 'Ramgarh'),
(233, 16, 'Ranchi'),
(234, 16, 'Sahibganj'),
(235, 16, 'Seraikela Kharsawa'),
(236, 16, 'Simdega'),
(237, 16, 'West Singhbhum'),
(238, 17, 'Bagalkot'),
(239, 17, 'Bangalore Rural'),
(240, 17, 'Bangalore Urba'),
(241, 17, 'Belgaum'),
(242, 17, 'Bellary'),
(243, 17, 'Bidar'),
(244, 17, 'Bijapur'),
(245, 17, 'Chamarajnagar'),
(246, 17, 'Chikkamagaluru'),
(247, 17, 'Chikkaballapur'),
(248, 17, 'Chitradurga'),
(249, 17, 'Davanagere'),
(250, 17, 'Dharwad'),
(251, 17, 'Dakshina Kannada'),
(252, 17, 'Gadag'),
(253, 17, 'Gulbarga'),
(254, 17, 'Hassa'),
(255, 17, 'Haveri'),
(256, 17, 'Kodagu'),
(257, 17, 'Kolar'),
(258, 17, 'Koppal'),
(259, 17, 'Mandya'),
(260, 17, 'Mysore'),
(261, 17, 'Raichur'),
(262, 17, 'Shimoga'),
(263, 17, 'Tumkur'),
(264, 17, 'Udupi'),
(265, 17, 'Uttara Kannada'),
(266, 17, 'Ramanagara'),
(267, 17, 'Yadgir'),
(268, 18, 'Alappuzha'),
(269, 18, 'Ernakulam'),
(270, 18, 'Idukki'),
(271, 18, 'Kannur'),
(272, 18, 'Kasaragod'),
(273, 18, 'Kollam'),
(274, 18, 'Kottayam'),
(275, 18, 'Kozhikode'),
(276, 18, 'Malappuram'),
(277, 18, 'Palakkad'),
(278, 18, 'Pathanamthitta'),
(279, 18, 'Thrissur'),
(280, 18, 'Thiruvananthapuram'),
(281, 18, 'Wayanad'),
(282, 19, 'Lakshadweep'),
(283, 20, 'Agar'),
(284, 20, 'Alirajpur'),
(285, 20, 'Anuppur'),
(286, 20, 'Ashok Nagar'),
(287, 20, 'Balaghat'),
(288, 20, 'Barwani'),
(289, 20, 'Betul'),
(290, 20, 'Bhind'),
(291, 20, 'Bhopal'),
(292, 20, 'Burhanpur'),
(293, 20, 'Chhatarpur'),
(294, 20, 'Chhindwara'),
(295, 20, 'Damoh'),
(296, 20, 'Datia'),
(297, 20, 'Dewas'),
(298, 20, 'Dhar'),
(299, 20, 'Dindori'),
(300, 20, 'Guna'),
(301, 20, 'Gwalior'),
(302, 20, 'Harda'),
(303, 20, 'Hoshangabad'),
(304, 20, 'Indore'),
(305, 20, 'Jabalpur'),
(306, 20, 'Jhabua'),
(307, 20, 'Katni'),
(308, 20, 'Khandwa (East Nimar);'),
(309, 20, 'Khargone (West Nimar);'),
(310, 20, 'Mandla'),
(311, 20, 'Mandsaur'),
(312, 20, 'Morena'),
(313, 20, 'Narsinghpur'),
(314, 20, 'Neemuch'),
(315, 20, 'Panna'),
(316, 20, 'Raise'),
(317, 20, 'Rajgarh'),
(318, 20, 'Ratlam'),
(319, 20, 'Rewa'),
(320, 20, 'Sagar'),
(321, 20, 'Satna'),
(322, 20, 'Sehore'),
(323, 20, 'Seoni'),
(324, 20, 'Shahdol'),
(325, 20, 'Shajapur'),
(326, 20, 'Sheopur'),
(327, 20, 'Shivpuri'),
(328, 20, 'Sidhi'),
(329, 20, 'Singrauli'),
(330, 20, 'Tikamgarh'),
(331, 20, 'Ujjai'),
(332, 20, 'Umaria'),
(333, 20, 'Vidisha'),
(334, 21, 'Ahmednagar'),
(335, 21, 'Akola'),
(336, 21, 'Amravati'),
(337, 21, 'Aurangabad'),
(338, 21, 'Beed'),
(339, 21, 'Bhandara'),
(340, 21, 'Buldhana'),
(341, 21, 'Chandrapur'),
(342, 21, 'Dhule'),
(343, 21, 'Gadchiroli'),
(344, 21, 'Gondia'),
(345, 21, 'Hingoli'),
(346, 21, 'Jalgao'),
(347, 21, 'Jalna'),
(348, 21, 'Kolhapur'),
(349, 21, 'Latur'),
(350, 21, 'Mumbai City'),
(351, 21, 'Mumbai suburba'),
(352, 21, 'Nanded'),
(353, 21, 'Nandurbar'),
(354, 21, 'Nagpur'),
(355, 21, 'Nashik'),
(356, 21, 'Osmanabad'),
(357, 21, 'Parbhani'),
(358, 21, 'Pune'),
(359, 21, 'Raigad'),
(360, 21, 'Ratnagiri'),
(361, 21, 'Sangli'),
(362, 21, 'Satara'),
(363, 21, 'Sindhudurg'),
(364, 21, 'Solapur'),
(365, 21, 'Thane'),
(366, 21, 'Wardha'),
(367, 21, 'Washim'),
(368, 21, 'Yavatmal'),
(369, 22, 'Bishnupur'),
(370, 22, 'Churachandpur'),
(371, 22, 'Chandel'),
(372, 22, 'Imphal East'),
(373, 22, 'Senapati'),
(374, 22, 'Tamenglong'),
(375, 22, 'Thoubal'),
(376, 22, 'Ukhrul'),
(377, 22, 'Imphal West'),
(378, 23, 'East Garo Hills'),
(379, 23, 'East Khasi Hills'),
(380, 23, 'Jaintia Hills'),
(381, 23, 'Ri Bhoi'),
(382, 23, 'South Garo Hills'),
(383, 23, 'West Garo Hills'),
(384, 23, 'West Khasi Hills'),
(385, 24, 'Aizawl'),
(386, 24, 'Champhai'),
(387, 24, 'Kolasib'),
(388, 24, 'Lawngtlai'),
(389, 24, 'Lunglei'),
(390, 24, 'Mamit'),
(391, 24, 'Saiha'),
(392, 24, 'Serchhip'),
(393, 25, 'Dimapur'),
(394, 25, 'Kiphire'),
(395, 25, 'Kohima'),
(396, 25, 'Longleng'),
(397, 25, 'Mokokchung'),
(398, 25, 'Mo'),
(399, 25, 'Pere'),
(400, 25, 'Phek'),
(401, 25, 'Tuensang'),
(402, 25, 'Wokha'),
(403, 25, 'Zunheboto'),
(404, 26, 'Angul'),
(405, 26, 'Boudh (Bauda);'),
(406, 26, 'Bhadrak'),
(407, 26, 'Balangir'),
(408, 26, 'Bargarh (Baragarh);'),
(409, 26, 'Balasore'),
(410, 26, 'Cuttack'),
(411, 26, 'Debagarh (Deogarh);'),
(412, 26, 'Dhenkanal'),
(413, 26, 'Ganjam'),
(414, 26, 'Gajapati'),
(415, 26, 'Jharsuguda'),
(416, 26, 'Jajpur'),
(417, 26, 'Jagatsinghpur'),
(418, 26, 'Khordha'),
(419, 26, 'Kendujhar (Keonjhar);'),
(420, 26, 'Kalahandi'),
(421, 26, 'Kandhamal'),
(422, 26, 'Koraput'),
(423, 26, 'Kendrapara'),
(424, 26, 'Malkangiri'),
(425, 26, 'Mayurbhanj'),
(426, 26, 'Nabarangpur'),
(427, 26, 'Nuapada'),
(428, 26, 'Nayagarh'),
(429, 26, 'Puri'),
(430, 26, 'Rayagada'),
(431, 26, 'Sambalpur'),
(432, 26, 'Subarnapur (Sonepur);'),
(433, 26, 'Sundergarh'),
(434, 27, 'Karaikal'),
(435, 27, 'Mahe'),
(436, 27, 'Pondicherry'),
(437, 27, 'Yanam'),
(438, 28, 'Amritsar'),
(439, 28, 'Barnala'),
(440, 28, 'Bathinda'),
(441, 28, 'Firozpur'),
(442, 28, 'Faridkot'),
(443, 28, 'Fatehgarh Sahib'),
(444, 28, 'Fazilka'),
(445, 28, 'Gurdaspur'),
(446, 28, 'Hoshiarpur'),
(447, 28, 'Jalandhar'),
(448, 28, 'Kapurthala'),
(449, 28, 'Ludhiana'),
(450, 28, 'Mansa'),
(451, 28, 'Moga'),
(452, 28, 'Sri Muktsar Sahib'),
(453, 28, 'Pathankot'),
(454, 28, 'Patiala'),
(455, 28, 'Rupnagar'),
(456, 28, 'Ajitgarh (Mohali);'),
(457, 28, 'Sangrur'),
(458, 28, 'Shahid Bhagat Singh Nagar'),
(459, 28, 'Tarn Tara'),
(460, 29, 'Ajmer'),
(461, 29, 'Alwar'),
(462, 29, 'Bikaner'),
(463, 29, 'Barmer'),
(464, 29, 'Banswara'),
(465, 29, 'Bharatpur'),
(466, 29, 'Bara'),
(467, 29, 'Bundi'),
(468, 29, 'Bhilwara'),
(469, 29, 'Churu'),
(470, 29, 'Chittorgarh'),
(471, 29, 'Dausa'),
(472, 29, 'Dholpur'),
(473, 29, 'Dungapur'),
(474, 29, 'Ganganagar'),
(475, 29, 'Hanumangarh'),
(476, 29, 'Jhunjhunu'),
(477, 29, 'Jalore'),
(478, 29, 'Jodhpur'),
(479, 29, 'Jaipur'),
(480, 29, 'Jaisalmer'),
(481, 29, 'Jhalawar'),
(482, 29, 'Karauli'),
(483, 29, 'Kota'),
(484, 29, 'Nagaur'),
(485, 29, 'Pali'),
(486, 29, 'Pratapgarh'),
(487, 29, 'Rajsamand'),
(488, 29, 'Sikar'),
(489, 29, 'Sawai Madhopur'),
(490, 29, 'Sirohi'),
(491, 29, 'Tonk'),
(492, 29, 'Udaipur'),
(493, 30, 'East Sikkim'),
(494, 30, 'North Sikkim'),
(495, 30, 'South Sikkim'),
(496, 30, 'West Sikkim'),
(497, 31, 'Ariyalur'),
(498, 31, 'Chennai'),
(499, 31, 'Coimbatore'),
(500, 31, 'Cuddalore'),
(501, 31, 'Dharmapuri'),
(502, 31, 'Dindigul'),
(503, 31, 'Erode'),
(504, 31, 'Kanchipuram'),
(505, 31, 'Kanyakumari'),
(506, 31, 'Karur'),
(507, 31, 'Krishnagiri'),
(508, 31, 'Madurai'),
(509, 31, 'Nagapattinam'),
(510, 31, 'Nilgiris'),
(511, 31, 'Namakkal'),
(512, 31, 'Perambalur'),
(513, 31, 'Pudukkottai'),
(514, 31, 'Ramanathapuram'),
(515, 31, 'Salem'),
(516, 31, 'Sivaganga'),
(517, 31, 'Tirupur'),
(518, 31, 'Tiruchirappalli'),
(519, 31, 'Theni'),
(520, 31, 'Tirunelveli'),
(521, 31, 'Thanjavur'),
(522, 31, 'Thoothukudi'),
(523, 31, 'Tiruvallur'),
(524, 31, 'Tiruvarur'),
(525, 31, 'Tiruvannamalai'),
(526, 31, 'Vellore'),
(527, 31, 'Viluppuram'),
(528, 31, 'Virudhunagar'),
(529, 32, 'Adilabad'),
(530, 32, 'Hyderabad'),
(531, 32, 'Karimnagar'),
(532, 32, 'Khammam'),
(533, 32, 'Mahbubnagar'),
(534, 32, 'Medak'),
(535, 32, 'Nalgonda'),
(536, 32, 'Nizamabad'),
(537, 32, 'Ranga Reddy'),
(538, 32, 'Warangal'),
(539, 33, 'Dhalai'),
(540, 33, 'North Tripura'),
(541, 33, 'South Tripura'),
(542, 33, 'Khowai'),
(543, 33, 'West Tripura'),
(544, 35, 'Agra'),
(545, 35, 'Aligarh'),
(546, 35, 'Allahabad'),
(547, 35, 'Ambedkar Nagar'),
(548, 35, 'Auraiya'),
(549, 35, 'Azamgarh'),
(550, 35, 'Bagpat'),
(551, 35, 'Bahraich'),
(552, 35, 'Ballia'),
(553, 35, 'Balrampur'),
(554, 35, 'Banda'),
(555, 35, 'Barabanki'),
(556, 35, 'Bareilly'),
(557, 35, 'Basti'),
(558, 35, 'Bijnor'),
(559, 35, 'Budau'),
(560, 35, 'Bulandshahr'),
(561, 35, 'Chandauli'),
(562, 35, 'Amethi (Chhatrapati Shahuji Maharaj Nagar)'),
(563, 35, 'Chitrakoot'),
(564, 35, 'Deoria'),
(565, 35, 'Etah'),
(566, 35, 'Etawah'),
(567, 35, 'Faizabad'),
(568, 35, 'Farrukhabad'),
(569, 35, 'Fatehpur'),
(570, 35, 'Firozabad'),
(571, 35, 'Gautam Buddh Nagar'),
(572, 35, 'Ghaziabad'),
(573, 35, 'Ghazipur'),
(574, 35, 'Gonda'),
(575, 35, 'Gorakhpur'),
(576, 35, 'Hamirpur'),
(577, 35, 'Hardoi'),
(578, 35, 'Hathras (Mahamaya Nagar);'),
(579, 35, 'Jalau'),
(580, 35, 'Jaunpur'),
(581, 35, 'Jhansi'),
(582, 35, 'Jyotiba Phule Nagar'),
(583, 35, 'Kannauj'),
(584, 35, 'Kanpur Dehat (Ramabai Nagar);'),
(585, 35, 'Kanpur Nagar'),
(586, 35, 'Kanshi Ram Nagar'),
(587, 35, 'Kaushambi'),
(588, 35, 'Kushinagar'),
(589, 35, 'Lakhimpur Kheri'),
(590, 35, 'Lalitpur'),
(591, 35, 'Lucknow'),
(592, 35, 'Maharajganj'),
(593, 35, 'Mahoba'),
(594, 35, 'Mainpuri'),
(595, 35, 'Mathura'),
(596, 35, 'Mau'),
(597, 35, 'Meerut'),
(598, 35, 'Mirzapur'),
(599, 35, 'Moradabad'),
(600, 35, 'Muzaffarnagar'),
(601, 35, 'Panchsheel Nagar (Hapur);'),
(602, 35, 'Pilibhit'),
(603, 35, 'Pratapgarh'),
(604, 35, 'Raebareli'),
(605, 35, 'Rampur'),
(606, 35, 'Saharanpur'),
(607, 35, 'Sambhal(Bheem Nagar);'),
(608, 35, 'Sant Kabir Nagar'),
(609, 35, 'Sant Ravidas Nagar'),
(610, 35, 'Shahjahanpur'),
(611, 35, 'Shamli'),
(612, 35, 'Shravasti'),
(613, 35, 'Siddharthnagar'),
(614, 35, 'Sitapur'),
(615, 35, 'Sonbhadra'),
(616, 35, 'Sultanpur'),
(617, 35, 'Unnao'),
(618, 35, 'Varanasi'),
(619, 34, 'Almora'),
(620, 34, 'Bageshwar'),
(621, 34, 'Chamoli'),
(622, 34, 'Champawat'),
(623, 34, 'Dehradu'),
(624, 34, 'Haridwar'),
(625, 34, 'Nainital'),
(626, 34, 'Pauri Garhwal'),
(627, 34, 'Pithoragarh'),
(628, 34, 'Rudraprayag'),
(629, 34, 'Tehri Garhwal'),
(630, 34, 'Udham Singh Nagar'),
(631, 34, 'Uttarkashi'),
(632, 36, 'Bankura'),
(633, 36, 'Bardhama'),
(634, 36, 'Birbhum'),
(635, 36, 'Cooch Behar'),
(636, 36, 'Dakshin Dinajpur'),
(637, 36, 'Darjeeling'),
(638, 36, 'Hooghly'),
(639, 36, 'Howrah'),
(640, 36, 'Jalpaiguri'),
(641, 36, 'Kolkata'),
(642, 36, 'Maldah'),
(643, 36, 'Murshidabad'),
(644, 36, 'Nadia'),
(645, 36, 'North 24 Parganas'),
(646, 36, 'Paschim Medinipur'),
(647, 36, 'Purba Medinipur'),
(648, 36, 'Purulia'),
(649, 36, 'South 24 Parganas'),
(650, 36, 'Uttar Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `dis_symptom`
--

CREATE TABLE IF NOT EXISTS `dis_symptom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dises` int(11) NOT NULL,
  `sympt` varchar(50) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dpt`
--

CREATE TABLE IF NOT EXISTS `dpt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dpt`
--

INSERT INTO `dpt` (`id`, `nme`, `st`) VALUES
(1, 'Cardiology', 1),
(2, 'Neurology', 1),
(3, 'Cancer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE IF NOT EXISTS `emergency` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `pic` varchar(50) NOT NULL,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `des` text NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `hid`, `uid`, `des`, `status`) VALUES
(1, '', 'Appumaaman', 'sdfsfsfsd', ''),
(2, 'kims@gmail.com', 'Appumaaman', 'sdfdgdd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosreg`
--

CREATE TABLE IF NOT EXISTS `hosreg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `land` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `hosreg`
--

INSERT INTO `hosreg` (`id`, `name`, `address`, `pin`, `district`, `email`, `land`, `mobile`, `uid`, `password`, `type`, `lattitude`, `longitude`, `photo`, `status`) VALUES
(1, 'KIMS', 'Kerala Institute of Medical Science\r\nP.B.No.1, Ana', '695029', 'trivandrum', 'patel.vishnu16@gmail.com', '04713041312', '04713071938', 'kims@gmail.com', 'kims', 'private', '8.513628560363507', '76.90953254699707', '1.jpg', '1'),
(2, 'Ananthapuri Hospital', 'NH bypass, Chackai, Thiruvananthapuram, Kerala 695', '695024', 'trivandrum', 'ananthapurihri@vsnl.net', '04712579900', '04712506565', 'ahri@gmail.com', 'ahri', 'private', '8.486725219413499', '76.92766285214225', '2.jpg', '1'),
(3, 'PRS Hospital', 'NH 47, Killipalam, Thiruvananthapuram, Kerala 6950', '695002', 'trivandrum', 'admin@prshospital.com ', '04712344442', '04712344443', 'prs@gmail.com', 'prs', 'private', '8.480861591194726', '76.95931434631348', '3.jpg', '1'),
(4, 'KINGS HOSPITAL', 'hjbsacjhbascjhbscj', '78964', 'trivandrum', 'k@gmail.com', '04714558452', '8975463210', 'k@gmail.com', '123', 'govt', '8.892787805513994', '76.61389283677067', '4.jpg', '2');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL,
  `hid` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `acc_id`, `hid`, `image`, `lattitude`, `longitude`, `status`, `dt`) VALUES
(1, 1, 'kims@gmail.com', 'Road-Accident.png', '8.513348535147955', '76.92671002480984', '3', '2018-03-10'),
(2, 1, 'ahri@gmail.com', 'Road-Accident.png', '8.513348535147955', '76.92671002480984', '4', '2018-03-10'),
(3, 1, 'prs@gmail.com', 'Road-Accident.png', '8.513348535147955', '76.92671002480984', '4', '2018-03-10'),
(4, 2, 'kims@gmail.com', 'Road-Accident.png', '8.520874448784038', '76.91499413583279', '0', '2018-03-11'),
(5, 2, 'ahri@gmail.com', 'Road-Accident.png', '8.520874448784038', '76.91499413583279', '0', '2018-03-11'),
(6, 2, 'prs@gmail.com', 'Road-Accident.png', '8.520874448784038', '76.91499413583279', '0', '2018-03-11'),
(7, 3, 'kims@gmail.com', 'logo2.jpg', '8.525415677550209', '76.92859829995632', '5', '2018-03-16'),
(8, 3, 'ahri@gmail.com', 'logo2.jpg', '8.525415677550209', '76.92859829995632', '4', '2018-03-16'),
(9, 3, 'prs@gmail.com', 'logo2.jpg', '8.525415677550209', '76.92859829995632', '4', '2018-03-16'),
(10, 4, 'kims@gmail.com', 'Road-Accident.png', '8.53263060293683', '76.92284764382839', '3', '2018-03-16'),
(11, 4, 'ahri@gmail.com', 'Road-Accident.png', '8.53263060293683', '76.92284764382839', '4', '2018-03-16'),
(12, 4, 'prs@gmail.com', 'Road-Accident.png', '8.53263060293683', '76.92284764382839', '4', '2018-03-16'),
(13, 8, 'kims@gmail.com', 'app_type_car_dealer_512px_GREY.png', '8.527410405842637', '76.93851174447536', '3', '2018-04-23'),
(14, 8, 'ahri@gmail.com', 'app_type_car_dealer_512px_GREY.png', '8.527410405842637', '76.93851174447536', '4', '2018-04-23'),
(15, 8, 'prs@gmail.com', 'app_type_car_dealer_512px_GREY.png', '8.527410405842637', '76.93851174447536', '4', '2018-04-23'),
(16, 10, 'kims@gmail.com', 'Barcelona+v+Chelsea+UEFA+Champions+League+3XzPU0Fm', '8.528216782409732', '76.93323315713405', '0', '2018-06-01'),
(17, 10, 'ahri@gmail.com', 'Barcelona+v+Chelsea+UEFA+Champions+League+3XzPU0Fm', '8.528216782409732', '76.93323315713405', '0', '2018-06-01'),
(18, 10, 'prs@gmail.com', 'Barcelona+v+Chelsea+UEFA+Champions+League+3XzPU0Fm', '8.528216782409732', '76.93323315713405', '0', '2018-06-01'),
(19, 11, 'kims@gmail.com', '5a3f820d95a597b55f8b4620.JPG', '8.524906383551857', '76.93537892434597', '2', '2018-06-01'),
(20, 11, 'ahri@gmail.com', '5a3f820d95a597b55f8b4620.JPG', '8.524906383551857', '76.93537892434597', '0', '2018-06-01'),
(21, 11, 'prs@gmail.com', '5a3f820d95a597b55f8b4620.JPG', '8.524906383551857', '76.93537892434597', '0', '2018-06-01'),
(22, 12, 'kims@gmail.com', 'b28b9b25a4aec5b0d5e5a88fa56a6773.jpg', '8.530763223553548', '76.92898453805446', '1', '2018-06-01'),
(23, 12, 'ahri@gmail.com', 'b28b9b25a4aec5b0d5e5a88fa56a6773.jpg', '8.530763223553548', '76.92898453805446', '0', '2018-06-01'),
(24, 12, 'prs@gmail.com', 'b28b9b25a4aec5b0d5e5a88fa56a6773.jpg', '8.530763223553548', '76.92898453805446', '0', '2018-06-01'),
(25, 14, 'kims@gmail.com', '1065068_311201833435314.jpg', '8.529574886465358', '76.93374814126491', '0', '2018-10-16'),
(26, 14, 'ahri@gmail.com', '1065068_311201833435314.jpg', '8.529574886465358', '76.93374814126491', '0', '2018-10-16'),
(27, 14, 'prs@gmail.com', '1065068_311201833435314.jpg', '8.529574886465358', '76.93374814126491', '0', '2018-10-16'),
(28, 15, 'kims@gmail.com', '1065068_311201833435314.jpg', '8.52830166405463', '76.93791092965603', '3', '2018-10-16'),
(29, 15, 'ahri@gmail.com', '1065068_311201833435314.jpg', '8.52830166405463', '76.93791092965603', '4', '2018-10-16'),
(30, 15, 'prs@gmail.com', '1065068_311201833435314.jpg', '8.52830166405463', '76.93791092965603', '4', '2018-10-16'),
(31, 16, 'kims@gmail.com', '1065068_311201833435314.jpg', '8.525670324294909', '76.93610848519802', '0', '2018-10-16'),
(32, 16, 'ahri@gmail.com', '1065068_311201833435314.jpg', '8.525670324294909', '76.93610848519802', '0', '2018-10-16'),
(33, 16, 'prs@gmail.com', '1065068_311201833435314.jpg', '8.525670324294909', '76.93610848519802', '0', '2018-10-16'),
(34, 17, 'kims@gmail.com', 'image.jpg', '8.52445123106592', '76.94562435150146', '3', '2018-10-16'),
(35, 17, 'ahri@gmail.com', 'image.jpg', '8.52445123106592', '76.94562435150146', '4', '2018-10-16'),
(36, 17, 'prs@gmail.com', 'image.jpg', '8.52445123106592', '76.94562435150146', '4', '2018-10-16'),
(37, 19, 'kims@gmail.com', 'photography-art.jpg', '8.521225682813045', '76.92961692810059', '3', '2018-11-16'),
(38, 19, 'ahri@gmail.com', 'photography-art.jpg', '8.521225682813045', '76.92961692810059', '4', '2018-11-16'),
(39, 19, 'prs@gmail.com', 'photography-art.jpg', '8.521225682813045', '76.92961692810059', '4', '2018-11-16'),
(40, 21, 'kims@gmail.com', 'hero.jpg', '8.523475081176768', '76.92824363708496', '3', '2018-11-16'),
(41, 21, 'ahri@gmail.com', 'hero.jpg', '8.523475081176768', '76.92824363708496', '4', '2018-11-16'),
(42, 21, 'prs@gmail.com', 'hero.jpg', '8.523475081176768', '76.92824363708496', '4', '2018-11-16'),
(43, 22, 'kims@gmail.com', 'image.jpg', '8.522869200772998', '76.9397754001975', '3', '2018-11-16'),
(44, 22, 'ahri@gmail.com', 'image.jpg', '8.522869200772998', '76.9397754001975', '4', '2018-11-16'),
(45, 22, 'prs@gmail.com', 'image.jpg', '8.522869200772998', '76.9397754001975', '4', '2018-11-16'),
(46, 23, 'kims@gmail.com', 'image.jpg', '8.529023157275002', '76.93647091869116', '3', '2018-11-20'),
(47, 23, 'ahri@gmail.com', 'image.jpg', '8.529023157275002', '76.93647091869116', '4', '2018-11-20'),
(48, 23, 'prs@gmail.com', 'image.jpg', '8.529023157275002', '76.93647091869116', '4', '2018-11-20'),
(49, 24, 'kims@gmail.com', 'image.jpg', '8.530779415409098', '76.94483941081762', '3', '2019-01-05'),
(50, 24, 'ahri@gmail.com', 'image.jpg', '8.530779415409098', '76.94483941081762', '4', '2019-01-05'),
(51, 24, 'prs@gmail.com', 'image.jpg', '8.530779415409098', '76.94483941081762', '4', '2019-01-05'),
(52, 25, 'kims@gmail.com', 'image.jpg', '8.523378497485444', '76.94007580760717', '3', '2019-01-05'),
(53, 25, 'ahri@gmail.com', 'image.jpg', '8.523378497485444', '76.94007580760717', '4', '2019-01-05'),
(54, 25, 'prs@gmail.com', 'image.jpg', '8.523378497485444', '76.94007580760717', '4', '2019-01-05'),
(55, 26, 'kims@gmail.com', '_downloadfiles_wallpapers_2560_1600_cristiano_rona', '8.515793118998442', '76.93326473236084', '3', '2019-01-23'),
(56, 26, 'ahri@gmail.com', '_downloadfiles_wallpapers_2560_1600_cristiano_rona', '8.515793118998442', '76.93326473236084', '4', '2019-01-23'),
(57, 26, 'prs@gmail.com', '_downloadfiles_wallpapers_2560_1600_cristiano_rona', '8.515793118998442', '76.93326473236084', '4', '2019-01-23'),
(58, 27, 'kims@gmail.com', 'image.jpg', '8.526264499372735', '76.93522637370825', '3', '2019-01-23'),
(59, 27, 'ahri@gmail.com', 'image.jpg', '8.526264499372735', '76.93522637370825', '4', '2019-01-23'),
(60, 27, 'prs@gmail.com', 'image.jpg', '8.490684303417476', '76.95298614465412', '4', '2019-01-23'),
(61, 28, 'kims@gmail.com', 'healthcare-wallpaper-5.jpg', '8.523135550196288', '76.93420886993408', '0', '2019-02-11'),
(62, 28, 'ahri@gmail.com', 'healthcare-wallpaper-5.jpg', '8.523135550196288', '76.93420886993408', '0', '2019-02-11'),
(63, 28, 'prs@gmail.com', 'healthcare-wallpaper-5.jpg', '8.523135550196288', '76.93420886993408', '0', '2019-02-11'),
(64, 29, 'kims@gmail.com', '020117_qc1.jpg', '8.525840088697114', '76.93808259103298', '3', '2019-02-23'),
(65, 29, 'ahri@gmail.com', '020117_qc1.jpg', '8.525840088697114', '76.93808259103298', '4', '2019-02-23'),
(66, 29, 'prs@gmail.com', '020117_qc1.jpg', '8.525840088697114', '76.93808259103298', '4', '2019-02-23'),
(67, 30, 'kims@gmail.com', '1550908409146-1721462518.jpg', '8.524208214380023', '76.93948741110125', '3', '2019-02-23'),
(68, 30, 'ahri@gmail.com', '1550908409146-1721462518.jpg', '8.524208214380023', '76.93948741110125', '4', '2019-02-23'),
(69, 30, 'prs@gmail.com', '1550908409146-1721462518.jpg', '8.524208214380023', '76.93948741110125', '4', '2019-02-23'),
(70, 32, 'kims@gmail.com', 'image.jpg', '8.527113319310008', '76.93518345836401', '3', '2019-03-28'),
(71, 32, 'ahri@gmail.com', 'image.jpg', '8.527113319310008', '76.93518345836401', '4', '2019-03-28'),
(72, 32, 'prs@gmail.com', 'image.jpg', '8.527113319310008', '76.93518345836401', '4', '2019-03-28'),
(73, 33, 'kims@gmail.com', 'image.jpg', '8.523135550196288', '76.93420886993408', '3', '2019-04-29'),
(74, 33, 'ahri@gmail.com', 'image.jpg', '8.523135550196288', '76.93420886993408', '4', '2019-04-29'),
(75, 33, 'prs@gmail.com', 'image.jpg', '8.523135550196288', '76.93420886993408', '4', '2019-04-29'),
(76, 34, 'kims@gmail.com', 'image.jpg', '8.528980716535044', '76.93702881816625', '3', '2019-05-02'),
(77, 34, 'ahri@gmail.com', 'image.jpg', '8.528980716535044', '76.93702881816625', '4', '2019-05-02'),
(78, 34, 'prs@gmail.com', 'image.jpg', '8.528980716535044', '76.93702881816625', '4', '2019-05-02'),
(79, 35, 'kims@gmail.com', 'image.jpg', '8.531102747756876', '76.94003289226293', '3', '2019-05-25'),
(80, 35, 'ahri@gmail.com', 'image.jpg', '8.531102747756876', '76.94003289226293', '4', '2019-05-25'),
(81, 35, 'prs@gmail.com', 'image.jpg', '8.531102747756876', '76.94003289226293', '4', '2019-05-25'),
(82, 36, 'kims@gmail.com', 'image.jpg', '8.527682707963315', '76.9389414243592', '3', '2019-05-27'),
(83, 36, 'ahri@gmail.com', 'image.jpg', '8.527682707963315', '76.9389414243592', '4', '2019-05-27'),
(84, 36, 'prs@gmail.com', 'image.jpg', '8.527682707963315', '76.9389414243592', '4', '2019-05-27'),
(85, 37, 'kims@gmail.com', '2001_gujarat_earthquake1-600x270.jpg', '8.522784317921625', '76.93228901956081', '3', '2019-06-01'),
(86, 37, 'ahri@gmail.com', '2001_gujarat_earthquake1-600x270.jpg', '8.522784317921625', '76.93228901956081', '4', '2019-06-01'),
(87, 37, 'prs@gmail.com', '2001_gujarat_earthquake1-600x270.jpg', '8.522784317921625', '76.93228901956081', '4', '2019-06-01'),
(88, 38, 'kims@gmail.com', 'image.jpg', '8.527410405842623', '76.93591301921606', '3', '2019-06-22'),
(89, 38, 'ahri@gmail.com', 'image.jpg', '8.527410405842623', '76.93591301921606', '4', '2019-06-22'),
(90, 38, 'prs@gmail.com', 'image.jpg', '8.527410405842623', '76.93591301921606', '4', '2019-06-22'),
(91, 39, 'kims@gmail.com', 'image.jpg', '8.526264499372735', '76.93657854232788', '3', '2019-06-29'),
(92, 39, 'ahri@gmail.com', 'image.jpg', '8.526264499372735', '76.93657854232788', '4', '2019-06-29'),
(93, 39, 'prs@gmail.com', 'image.jpg', '8.526264499372735', '76.93657854232788', '4', '2019-06-29'),
(94, 40, 'kims@gmail.com', 'image.jpg', '8.53060965320145', '76.93403216273498', '3', '2019-07-11'),
(95, 40, 'ahri@gmail.com', 'image.jpg', '8.53060965320145', '76.93403216273498', '4', '2019-07-11'),
(96, 40, 'prs@gmail.com', 'image.jpg', '8.53060965320145', '76.93403216273498', '4', '2019-07-11'),
(97, 41, 'kims@gmail.com', 'graffiti_wall_girl_art_110107_3840x2400.jpg', '8.520365148736373', '76.93110013041496', '3', '2019-07-30'),
(98, 41, 'ahri@gmail.com', 'graffiti_wall_girl_art_110107_3840x2400.jpg', '8.520365148736373', '76.93110013041496', '4', '2019-07-30'),
(99, 41, 'prs@gmail.com', 'graffiti_wall_girl_art_110107_3840x2400.jpg', '8.520365148736373', '76.93110013041496', '4', '2019-07-30'),
(100, 42, 'kims@gmail.com', 'image.jpg', '8.527271407516675', '76.93330869338763', '3', '2019-08-17'),
(101, 42, 'ahri@gmail.com', 'image.jpg', '8.527271407516675', '76.93330869338763', '4', '2019-08-17'),
(102, 42, 'prs@gmail.com', 'image.jpg', '8.527271407516675', '76.93330869338763', '4', '2019-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `increg`
--

CREATE TABLE IF NOT EXISTS `increg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pin` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `land` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `increg`
--

INSERT INTO `increg` (`id`, `name`, `address`, `pin`, `district`, `email`, `land`, `mobile`, `uid`, `password`, `type`, `lattitude`, `longitude`, `photo`, `status`) VALUES
(2, 'New India Assurance Company', 'Vallamattom Estate, M.G.Rod, Ravipuram, Kochi, Ker', '682015', 'trivandrum', 'ins@gmail.com', '04712554854', '7895463217', 'ins@gmail.com', '123', '0', '8.492932003444741', '76.94459035992622', '1.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `lattitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `audio` varchar(50) NOT NULL,
  `video` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `new_patient`
--

CREATE TABLE IF NOT EXISTS `new_patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_id` varchar(250) NOT NULL,
  `bar_code` varchar(250) NOT NULL,
  `info_todoc` text NOT NULL,
  `deses` text NOT NULL,
  `doc_descp` text NOT NULL,
  `tmp` varchar(20) NOT NULL,
  `wight` varchar(20) NOT NULL,
  `bp` varchar(50) NOT NULL,
  `dep` varchar(20) NOT NULL,
  `doc` varchar(250) NOT NULL,
  `dt1` date NOT NULL,
  `dt2` date NOT NULL,
  `mnth` varchar(200) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `new_patient`
--

INSERT INTO `new_patient` (`id`, `h_id`, `bar_code`, `info_todoc`, `deses`, `doc_descp`, `tmp`, `wight`, `bp`, `dep`, `doc`, `dt1`, `dt2`, `mnth`, `st`) VALUES
(1, 'kims', '695612-12-101-382', 'Body pain and heavy headache.', 'Fever', 'Nothing serious. need to tale rest.', '101', '75', '85-95', '6', 'gm@gmail.com', '2016-11-08', '0000-00-00', '', 1),
(2, 'kims', '695612-12-101-755', 'Cold, Fever, Body Pain', 'Fever', 'Provide Medicine, Need Good Rest', '101', '80', '95-105', '6', 'gm@gmail.com', '2016-11-08', '0000-00-00', '2016-11', 1),
(3, 'kims', '6965010-12-101-415', 'head ache', 'Multiple Sclerosis', 'need rest.', '102', '50', '100-125', '5', 'avp@gmail.com', '2016-11-12', '0000-00-00', '2016-11', 1),
(4, 'kims', '6965010-12-101-415', 'Head ache, Feaver', 'Allergy', 'Need to admit here', '103', '50', '100-125', '6', 'vl@gmail.com', '2016-11-15', '2016-11-18', '2016-11', 2),
(5, 'kims', '695101-12-123-947', 'Feaver, Headach, ', 'Allergy', 'take rest', '101', '52', '95-101', '6', 'vl@gmail.com', '2016-11-17', '0000-00-00', '2016-11', 1),
(6, 'ah101', '6965010-12-101-415', 'Head ache, Fever, ', 'Allergy', 'Need to observe the patient', '102', '52', '100-125', '6', 'sudha101', '2016-11-19', '0000-00-00', '2016-11', 2),
(9, 'kims', '695584-15-100-537', 'fever', 'Fever', 'need rest', '102', '75', '100-125', '6', 'vl@gmail.com', '2016-11-25', '0000-00-00', '2016-11', 1),
(10, 'kims', '695584-15-100-537', 'fever', 'Fever', 'need rest', '100', '50', '100-125', '6', 'vl@gmail.com', '2016-11-30', '0000-00-00', '2016-11', 1),
(11, 'kims', '695612-12-101-382', 'headache', 'Fever', 'take rest', '99', '52', '100-125', '6', 'vl@gmail.com', '2016-12-01', '0000-00-00', '2016-12', 1),
(12, 'kims', '695101-12-123-947', 'fever', '', '', '', '', '', '6', 'vl@gmail.com', '2016-12-01', '0000-00-00', '2016-12', 0),
(13, 'kims', '695584-15-100-537', 'test', 'Allergy', 'need rest', '103', '50', '100-125', '6', 'vl@gmail.com', '2016-12-03', '0000-00-00', '2016-12', 1),
(15, 'ah101', '6965010-12-101-415', 'kkk', 'Allergy', '', '', '', '', '1', 'pj@gmail.com', '2016-12-04', '0000-00-00', '2016-12', 0),
(16, 'kims', '695101-12-123-947', 'chuma', '', '', '', '', '', '1', 'pj@gmail.com', '2016-12-07', '0000-00-00', '2016-12', 0),
(17, 'kims', '695584-15-100-537', 'fever.', 'Fever', 'need rest. ', '102', '75', '100-125', '6', 'vl@gmail.com', '2017-01-01', '0000-00-00', '2017-01', 1),
(18, 'kims', '6965010-12-101-415', 'fever', '', '', '', '', '', '6', 'vl@gmail.com', '2017-01-03', '0000-00-00', '2017-01', 0),
(19, 'kims', '695528-5-356-886', 'fever', 'Fever', 'nee drest', '102', '52', '100-125', '6', 'vl@gmail.com', '2017-01-07', '0000-00-00', '2017-01', 1),
(20, 'kims', '691601-50-25-267', 'pain', '', 'need rest', '99', '52', '95-101', '13', 'oaj@gmaol.com', '2017-01-11', '0000-00-00', '2017-01', 2),
(21, 'kims', '695012-16-102-056', 'headache', '', '', '', '', '', '6', 'vl@gmail.com', '2017-01-21', '0000-00-00', '2017-01', 0),
(22, 'kims', '695101-12-101-142', 'pain', '', '', '', '', '', '1', 'meera@gmail.com', '2017-03-01', '0000-00-00', '2017-03', 0),
(23, 'kims', '695612-12-101-382', 'shvbm', '', '', '', '', '', '6', 'vl@gmail.com', '2018-02-11', '0000-00-00', '2018-02', 0),
(24, 'kims', '6788987-11-11-787', 'bgyhgbunh', '', '', '', '', '', '1', 'pj@gmail.com', '2018-03-10', '0000-00-00', '2018-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `optr`
--

CREATE TABLE IF NOT EXISTS `optr` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `otnme` varchar(50) NOT NULL,
  `busy` varchar(50) NOT NULL,
  `available` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `optr`
--

INSERT INTO `optr` (`id`, `hid`, `dept`, `otnme`, `busy`, `available`) VALUES
(1, 'kims@gmail.com', 'Cardiology ', 'Cardiac Theater', 'Yes', '0'),
(2, 'kims@gmail.com', 'Neurology ', 'Neuro Theator', 'Yes', '0');

-- --------------------------------------------------------

--
-- Table structure for table `org_data`
--

CREATE TABLE IF NOT EXISTS `org_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(250) NOT NULL,
  `unme` varchar(50) NOT NULL,
  `em` varchar(250) NOT NULL,
  `addr` text NOT NULL,
  `con` varchar(15) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `stat` varchar(250) NOT NULL,
  `dis` varchar(250) NOT NULL,
  `taluk` varchar(250) NOT NULL,
  `vilg` varchar(250) NOT NULL,
  `org_typ` varchar(50) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `org_data`
--

INSERT INTO `org_data` (`id`, `nme`, `unme`, `em`, `addr`, `con`, `mob`, `stat`, `dis`, `taluk`, `vilg`, `org_typ`, `st`) VALUES
(1, 'Revathi Medicals', 'rm101', 'revathimedicals@gmail.com', 'Kerette Junction<br />\r\nNear Bus stand<br />\r\nOpp. Gulabi Digital Studio', '04702836312', '9446563002', '18', '280', '1', '1', '2', 1),
(2, 'Karette Medical Center', 'kmc', 'kmc@gmail.com', 'Opposit Bus Stand<br />\r\nNagaroor Road<br />\r\nKarette', '04702836398', '9995114948', '18', '280', '1', '1', '1', 1),
(3, 'DDRC Lab', 'ddrckarette', 'ddrckarette@gmail.com', 'Opposite South Indian Bank<br />\r\nNear Petrol Pump<br />\r\nKarette', '04702836654', '9995478521', '18', '280', '1', '1', '3', 1),
(4, 'Saji Hospital', 'sh101', 'sajihospital@gmail.com', 'Market Road<br />\r\nopposite S R Enterprise<br />\r\nKilimanoor ', '04702836852', '9446563008', '18', '280', '1', '1', '1', 2),
(5, 'Kerala Institute of Medical Sciences (KIMS)', 'kims', 'relations@kimsglobal.com', 'No.1, Anayara Road<br />\r\nAnayara, Thiruvananthapuram<br />\r\nKerala 695029', '04713041400', '9995114948', '18', '280', '1', '1', '1', 1),
(6, 'Ananthapuri Hospitals', 'ah101', 'ananthapurihri@vsnl.net', 'Ananthapuri Hospitals and Research Institute<br />\r\nChacka, NH Bypass<br />\r\nThiruvananthapuram - 695024', '04712579900', '9995478521', '18', '280', '1', '1', '1', 1),
(7, 'Kannan Medical Sore', 'knn101', 'kannan@gmail.com', 'Near KSRTC Bus Stand<br />\r\nKilmanoor', '9446563002', '9598741256', '18', '280', '1', '1', '2', 1),
(8, 'Anupama Medicals', 'anu101', 'anupamamedicals@gmail.com', 'Near HDFC Bank<br />\r\nNaraaroor Jn.<br />\r\nKilimanoor', '9895412587', '9995123456', '18', '280', '1', '2', '2', 1),
(9, 'Matha Memorial Hospital', 'mmh', 'mathahospital@gmail.com', 'Kadavoor<br />\r\nKollam<br />\r\nKerala', '9856321478', '9995123456', '18', '280', '1', '1', '1', 1),
(10, 'govindans', 'gg', 'gg@gmail.com', 'kottayam', '0471-2345678', '99988909897', '18', '274', '16', '5', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ptreg`
--

CREATE TABLE IF NOT EXISTS `ptreg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `mstatus` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `cno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `comid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ptreg`
--

INSERT INTO `ptreg` (`id`, `name`, `gender`, `dob`, `mstatus`, `fname`, `address`, `cno`, `email`, `docname`, `comid`) VALUES
(1, 'Gopal', 'male', '1986-05-20', 'single', 'Rajagopal', 'Rajeswari\r\nKerala\r\nTrivandrum', '9995457896', 'Nil@gmail.com', '----Choose one----', 'JL72'),
(2, 'Appumaaman', 'male', '1975-07-16', 'single', 'Gopalan', 'Nil', '9995457896', 'kims@gmail.com', '----Choose one----', 'SDXE'),
(3, 'sdfs', 'male', '1985-06-06', 'single', 'sdvDCVB', 'cv', '242', 'kims@gmail.com', '----Choose one----', 'SDXE');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_lab`
--

CREATE TABLE IF NOT EXISTS `purchase_lab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` varchar(200) NOT NULL,
  `barcode` varchar(150) NOT NULL,
  `purchase_typ` varchar(10) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `purchase_lab`
--

INSERT INTO `purchase_lab` (`id`, `store_id`, `barcode`, `purchase_typ`, `dt`) VALUES
(1, 'ddrckarette', '695612-12-101-382', '1', '2016-11-21'),
(2, 'ddrckarette', '695612-12-101-755', '2', '2016-11-21'),
(3, 'ddrckarette', '695101-12-123-947', '4', '2016-11-21'),
(5, 'ddrckarette', '6965010-12-101-415', '0', '2016-11-21'),
(6, 'ddrckarette', '695612-12-101-382', '1', '2016-11-22'),
(7, 'ddrckarette', '695612-12-101-755', '2', '2016-11-23'),
(8, 'ddrckarette', '695612-12-101-382', '7', '2017-01-01'),
(9, 'ddrckarette', '6965010-12-101-415', '0', '2017-01-11'),
(10, 'ddrckarette', '695612-12-101-755', '2', '2018-02-11'),
(11, 'ddrckarette', '695612-12-101-755', '2', '2018-02-11'),
(12, 'ddrckarette', '6', '0', '2018-02-11'),
(13, 'ddrckarette', '6788987-11-11-787', '0', '2018-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_lab_test`
--

CREATE TABLE IF NOT EXISTS `purchase_lab_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` varchar(150) NOT NULL,
  `pid` varchar(10) NOT NULL,
  `op_id` varchar(10) NOT NULL,
  `bar_code` varchar(150) NOT NULL,
  `test_id` varchar(10) NOT NULL,
  `op_lab_id` varchar(50) NOT NULL,
  `test_file` varchar(50) NOT NULL,
  `fil_typ` varchar(10) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `purchase_lab_test`
--

INSERT INTO `purchase_lab_test` (`id`, `store_id`, `pid`, `op_id`, `bar_code`, `test_id`, `op_lab_id`, `test_file`, `fil_typ`, `st`) VALUES
(1, 'ddrckarette', '1', '1', '695612-12-101-382', '3', '3', '3.gif', '1', 1),
(2, 'ddrckarette', '1', '1', '695612-12-101-382', '1', '1', '4.jpg', '1', 1),
(3, 'ddrckarette', '2', '2', '695612-12-101-755', '4', '6', '1.jpg', '1', 1),
(4, 'ddrckarette', '2', '2', '695612-12-101-755', '1', '4', '5.gif', '1', 1),
(5, 'ddrckarette', '2', '2', '695612-12-101-755', '2', '5', '0', '0', 0),
(6, 'ddrckarette', '3', '4', '695101-12-123-947', '3', '8', '6.jpg', '1', 1),
(7, 'ddrckarette', '5', '0', '6965010-12-101-415', '1', '0', '0', '0', 0),
(8, 'ddrckarette', '5', '0', '6965010-12-101-415', '2', '0', '3.gif', '1', 1),
(9, 'ddrckarette', '7', '2', '695612-12-101-755', '2', '5', '7.jpg', '1', 1),
(10, 'ddrckarette', '7', '2', '695612-12-101-755', '4', '6', '8.jpg', '1', 1),
(11, 'ddrckarette', '8', '7', '695612-12-101-382', '3', '11', '0', '0', 0),
(12, 'ddrckarette', '9', '0', '6965010-12-101-415', '3', '0', '9.jpg', '1', 1),
(13, 'ddrckarette', '9', '0', '6965010-12-101-415', '2', '0', '10.jpg', '1', 1),
(14, 'ddrckarette', '10', '2', '695612-12-101-755', '2', '5', '0', '0', 0),
(15, 'ddrckarette', '12', '0', '6', '3', '0', '11.png', '1', 1),
(16, 'ddrckarette', '13', '0', '6788987-11-11-787', '3', '0', '12.png', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_medicine`
--

CREATE TABLE IF NOT EXISTS `purchase_medicine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` varchar(200) NOT NULL,
  `bar_code` varchar(50) NOT NULL,
  `purchase_type` varchar(50) NOT NULL,
  `dt` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `purchase_medicine`
--

INSERT INTO `purchase_medicine` (`id`, `store_id`, `bar_code`, `purchase_type`, `dt`) VALUES
(1, 'rm101', '695612-12-101-382', '1', '2016-11-10'),
(2, 'rm101', '695612-12-101-382', '1', '2016-11-10'),
(3, 'rm101', '695612-12-101-382', '1', '2016-11-10'),
(4, 'rm101', '695612-12-101-382', '1', '2016-11-10'),
(5, 'rm101', '695612-12-101-382', '1', '2016-11-10'),
(6, 'rm101', '695612-12-101-755', '2', '2016-11-10'),
(7, 'rm101', '695612-12-101-755', '2', '2016-11-10'),
(8, 'rm101', '695612-12-101-382', '1', '2016-11-11'),
(9, 'rm101', '695612-12-101-382', '0', '2016-11-11'),
(10, 'rm101', '695612-12-101-382', '0', '2016-11-12'),
(11, 'rm101', '6965010-12-101-415', '3', '2016-11-12'),
(12, 'rm101', '6965010-12-101-415', '0', '2016-11-12'),
(13, 'rm101', '6965010-12-101-415', '0', '2016-11-14'),
(14, 'rm101', '6965010-12-101-415', '0', '2016-11-15'),
(15, 'rm101', '695101-12-123-947', '4', '2016-11-17'),
(16, 'rm101', '695584-15-100-537', '5', '2016-11-25'),
(17, 'rm101', '695612-12-101-755', '0', '2016-11-29'),
(18, 'rm101', '695584-15-100-537', '6', '2016-11-30'),
(19, 'rm101', '695612-12-101-382', '7', '2016-12-01'),
(20, 'rm101', '6965010-12-101-415', '0', '2016-12-01'),
(21, 'rm101', '695584-15-100-537', '9', '2017-01-01'),
(22, 'rm101', '695528-5-356-886', '0', '2017-01-07'),
(23, 'rm101', '6965010-12-101-415', '0', '2017-01-11'),
(24, 'rm101', '695612-12-101-755', '0', '2017-01-11'),
(25, 'knn101', '695612-12-101-755', '2', '2018-02-10'),
(26, 'rm101', '695612-12-101-755', '2', '2018-02-11'),
(27, 'rm101', '695612-12-101-755', '0', '2018-02-11'),
(28, 'rm101', '6788987-11-11-787', '0', '2018-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `p_reg`
--

CREATE TABLE IF NOT EXISTS `p_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `la` varchar(150) NOT NULL,
  `lo` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `con` varchar(150) NOT NULL,
  `cid` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `p_reg`
--

INSERT INTO `p_reg` (`id`, `nme`, `la`, `lo`, `addr`, `con`, `cid`, `uid`, `pas`, `st`) VALUES
(1, 'Hari Krishna', '8.509392913433313', '76.94647058844566', 'jkhjhjhkkhjjh', '9874653124', 'ms123', 'hk123', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `review` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_reg`
--

CREATE TABLE IF NOT EXISTS `staff_reg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hosid` varchar(30) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `addrs` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff_reg`
--

INSERT INTO `staff_reg` (`id`, `hosid`, `dept`, `name`, `dob`, `gender`, `addrs`, `mobile`, `email`, `uid`, `pwd`, `pic`) VALUES
(1, 'kims@gmail.com', 'All', 'Venugopal', '1982-10-05', 'male', 'Venu Bhavan\r\nKilimanoor\r\nTrivandrum', '9446563002', 'venu@gmail.com', 'venu@gmail.com', 'venu', 'venu@gmail.com.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `StCode` int(11) NOT NULL AUTO_INCREMENT,
  `StateName` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`StCode`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`) VALUES
(1, 'Andaman and Nicobar Island (UT)'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh (UT)'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli (UT)'),
(9, 'Daman and Diu (UT)'),
(10, 'Delhi (NCT)'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep (UT)'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry (UT)'),
(28, 'Punjab'),
(29, 'Rajastha'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttarakhand'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `sym`
--

CREATE TABLE IF NOT EXISTS `sym` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` text NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sym`
--

INSERT INTO `sym` (`id`, `nme`, `st`) VALUES
(1, 'Headache', 1),
(2, 'Fever', 1),
(3, 'Cold', 1),
(4, 'Body Pain', 1),
(5, 'Nose Bleeding', 1),
(8, 'Pressure, tightness, pain, or a squeezing or aching sensation in your chest or arms that may spread to your neck, jaw or back.', 1),
(9, 'Nausea, indigestion, heartburn or abdominal pain.', 1),
(10, 'Shortness of breath.', 1),
(11, 'Cold sweat', 1),
(12, 'Fatigue.', 1),
(13, 'Lightheadedness or sudden dizziness', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_control`
--

CREATE TABLE IF NOT EXISTS `t_control` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nme` varchar(150) NOT NULL,
  `stat` varchar(150) NOT NULL,
  `dist` varchar(150) NOT NULL,
  `addr` text NOT NULL,
  `em` varchar(150) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `pas` varchar(150) NOT NULL,
  `st` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `t_control`
--

INSERT INTO `t_control` (`id`, `nme`, `stat`, `dist`, `addr`, `em`, `uid`, `pas`, `st`) VALUES
(1, 'Manathala Station', '18', 'Thiruvananthapuram', 'jkhhkhkhkjjhkjhkjhkjh', '7895463124', 'ms123', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usermsg`
--

CREATE TABLE IF NOT EXISTS `usermsg` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `acc_id` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `msg_from` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_communi`
--

CREATE TABLE IF NOT EXISTS `user_communi` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `cid` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `msgfrm` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `user_communi`
--

INSERT INTO `user_communi` (`id`, `cid`, `msg`, `msgfrm`) VALUES
(1, '', '1', 'JL72'),
(2, '', '1', 'JL72'),
(3, 'JL72', 'heloooo', 'user'),
(4, 'JL72', 'Yes tel me the details', 'hospital'),
(5, 'JL72', 'we r on the way', 'user'),
(6, 'JL72', 'ok ok came fast', 'hospital'),
(7, 'SDXE', 'hi<br />\r\n', 'hospital'),
(8, '2318', 'heloooo<br />\r\n', 'user'),
(9, '2318', 'dsfdsf<br />\r\n', 'user'),
(10, '2318', 'sdfsdfsdfds', 'user'),
(11, '2318', 'dfdfgfd<br />\r\n', 'user'),
(12, '2318', 'adasdasd', 'hospital'),
(13, '2318', 'entha', 'hospital'),
(14, '2318', 'ayyada', 'user'),
(15, '43IQ', 'Help urgent come quick', 'user'),
(16, '14VN', 'icu needed', 'user'),
(17, '14VN', 'ok', 'hospital'),
(18, 'MXBK', 'urjent', 'user'),
(19, 'J0RS', 'Urgent', 'user'),
(20, 'K8HA', 'Urgent', 'user'),
(21, 'K8HA', 'will arive in 5', 'hospital'),
(22, '53IS', 'Help urgent now', 'user'),
(23, '53IS', 'ok ambulance on the way', 'hospital'),
(24, '5E7H', 'Help needed come fast', 'user'),
(25, '5E7H', 'ok apply preasure on the wound and keep it clean', 'hospital'),
(26, '5E7H', 'Ok ', 'user'),
(27, 'AIHM', 'Urgent help needed', 'user'),
(28, 'AIHM', 'ok ambulance on the way', 'hospital'),
(29, 'D8CJ', 'Need help Urgent', 'user'),
(30, 'D8CJ', 'oh help on the way apply preasure on the wound', 'hospital'),
(31, 'INLW', 'Help!!!!!!', 'user'),
(32, 'INLW', 'ok', 'hospital'),
(33, '64RA', 'Help', 'user'),
(34, '64RA', 'ok help on the way apply preasure to wound', 'hospital'),
(35, '4BU4', 'Help', 'user'),
(36, '4BU4', 'ok', 'hospital'),
(37, '4BU4', 'Thank u', 'user'),
(38, '4BU4', 'Apply preasure on wound', 'user'),
(39, '4BU4', 'ok', 'hospital'),
(40, 'TLK0', 'Help come fast', 'user'),
(41, 'TLK0', 'ok apply preasure on wound', 'hospital'),
(42, 'XUTQ', 'Help', 'user'),
(43, 'XUTQ', 'Ok', 'hospital'),
(44, 'U5X0', 'Hai', 'user'),
(45, 'U5X0', 'is it serious????', 'hospital'),
(46, 'U5X0', 'Ys', 'user'),
(47, '1OVX', 'help', 'user'),
(48, '1OVX', 'ok', 'hospital'),
(49, '06P5', 'Help', 'user'),
(50, '06P5', 'ok', 'hospital'),
(51, 'WKUJ', 'Help plze', 'user'),
(52, 'WKUJ', 'ok we r on the way', 'hospital'),
(53, 'WKUJ', 'Thank u', 'user'),
(54, 'KRO0', 'Help', 'user'),
(55, 'KRO0', 'ok', 'hospital'),
(56, 'URLZ', 'hghg', 'user'),
(57, '2UAZ', 'Help', 'user'),
(58, '2UAZ', 'ok', 'hospital'),
(59, '2UAZ', 'Come fast', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `uid`, `pwd`, `type`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '1'),
(2, 'kims@gmail.com', 'kims', 'hospital', '1'),
(3, 'ahri@gmail.com', 'ahri', 'hospital', '1'),
(4, 'prs@gmail.com', 'prs', 'hospital', '1'),
(5, 'venu@gmail.com', 'venu', 'staff', '1'),
(6, 'k@gmail.com', '123', 'hospital', '2'),
(7, 'ms123', '123', 'control', '1'),
(9, 'hk123', '123', 'tp', '1'),
(10, 'nn123', '123', 'amb', '1'),
(12, 'ins@gmail.com', '123', 'ins', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ventilator`
--

CREATE TABLE IF NOT EXISTS `ventilator` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `hid` varchar(50) NOT NULL,
  `ventilator` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ventilator`
--

INSERT INTO `ventilator` (`id`, `hid`, `ventilator`) VALUES
(1, 'kims@gmail.com', 'Yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
