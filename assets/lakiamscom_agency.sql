-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2020 at 11:44 PM
-- Server version: 5.7.32
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lakiamscom_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency_contacts`
--

CREATE TABLE `agency_contacts` (
  `contact_id` int(11) NOT NULL,
  `agency_id` int(255) NOT NULL DEFAULT '0',
  `passnum` varchar(255) DEFAULT NULL,
  `rname` varchar(255) DEFAULT NULL,
  `rsex` enum('Male','Female') DEFAULT NULL,
  `kinship` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` enum('Addis Ababa','Tigray','Amhara','Oromia','Debub','Somali','Afar','Diredawa') NOT NULL DEFAULT 'Addis Ababa',
  `photo` varchar(255) DEFAULT NULL,
  `idcard` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency_contacts`
--

INSERT INTO `agency_contacts` (`contact_id`, `agency_id`, `passnum`, `rname`, `rsex`, `kinship`, `phone`, `address`, `photo`, `idcard`, `status`) VALUES
(4, 1, 'EP0913444', 'olyad mulisa kebede', 'Male', 'Brother', '6193666025', 'Addis Ababa', NULL, 'semirapass.jpg', 0),
(5, 1, 'EP0011226', 'dskjabvkasj asdvsad', 'Male', 'Mother', '0913459874', 'Addis Ababa', NULL, NULL, 1),
(6, 1, 'EP0011225', 'jgh hghj', 'Male', 'Father', '6193666025', 'Tigray', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `agency_employees`
--

CREATE TABLE `agency_employees` (
  `employee_id` int(11) NOT NULL,
  `agency_id` int(255) DEFAULT NULL,
  `passnum` varchar(255) DEFAULT NULL,
  `mstatus` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `edu` varchar(255) DEFAULT NULL,
  `skill` varchar(255) DEFAULT NULL,
  `eyc` varchar(255) DEFAULT NULL,
  `eya` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL DEFAULT '''Ethiopia''',
  `city` varchar(255) NOT NULL DEFAULT '''Addis Ababa''',
  `wereda` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency_employees`
--

INSERT INTO `agency_employees` (`employee_id`, `agency_id`, `passnum`, `mstatus`, `religion`, `job`, `edu`, `skill`, `eyc`, `eya`, `country`, `city`, `wereda`, `zone`, `mobile`, `photo`, `status`) VALUES
(1, 1, 'EP4567654', 'Single', 'Non-Muslim', 'House Maid', 'High School', 'Washing Cleaning', '4', '0', '\'Ethiopia\'', '\'Addis Ababa\'', NULL, NULL, NULL, NULL, 0),
(2, 4, 'EP5672148', 'Single', 'Christian', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '2', '1', '\'Ethiopia\'', 'htht', '07', 'Amhara', '0912564562', 'SOLOMON1.jpg', 1),
(3, 1, 'EP7788999', 'Single', 'None-Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', 'hgjhb', '21', 'vhj', '0924165', 'HABTAM.jpg', 1),
(4, 7, 'EP1234555', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '3', '0', '\'Ethiopia\'', 'desse', '45', 'Amhara', '+251913440344', 'SOFIA.jpg', 1),
(5, 4, 'EP4563123', 'Married', 'None-Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', 'hjjh', '', '153465', 'SOFIA1.jpg', 1),
(6, 1, 'EP1232780', 'Single', 'None-Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '3', '0', '\'Ethiopia\'', 'Addis Ababa', '07', 'Addis Ababa Ethiopia', '+251913440344', 'SOFIA2.jpg', 1),
(7, 1, 'EP0011223', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', '', '', '', NULL, 1),
(8, 1, 'EP0011224', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', '', '', '', NULL, 1),
(9, 1, 'EP0011225', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', '', '', '', NULL, 1),
(10, 1, 'EP0011226', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', '', '', '', 'amcl.png', 0),
(11, 1, 'EP0011227', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', '', '', '', NULL, 1),
(12, 1, 'EP0011228', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', '', '', '', NULL, 1),
(13, 1, 'EP0011229', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', '', '', '', NULL, 1),
(15, 1, 'EP5698741', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', 'AA', '07', 'Christian', '+251948759855', NULL, 1),
(16, 1, 'EP1233216', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', '', '', '', NULL, 1),
(17, 1, 'EP0011225', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', '', '', '', '', NULL, 1),
(18, 1, 'EP1234567', 'Single', 'Muslim', 'House Maid', 'High School', 'Washing Dish, Cloth, Cleaning & Dusting', '1', '0', '\'Ethiopia\'', 'Addis Ababa', '23', 'Dbdk', '0913456985', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `agency_passports`
--

CREATE TABLE `agency_passports` (
  `passid` int(11) NOT NULL,
  `agency_id` int(255) NOT NULL,
  `passnum` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `snameamh` varchar(255) DEFAULT NULL,
  `gname` varchar(255) NOT NULL,
  `gnameamh` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) NOT NULL,
  `sex` enum('Male','Female') NOT NULL DEFAULT 'Female',
  `dob` varchar(255) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `doi` varchar(255) NOT NULL,
  `doe` varchar(255) NOT NULL,
  `poi` varchar(255) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency_passports`
--

INSERT INTO `agency_passports` (`passid`, `agency_id`, `passnum`, `sname`, `snameamh`, `gname`, `gnameamh`, `nationality`, `sex`, `dob`, `pob`, `doi`, `doe`, `poi`, `passport`, `status`) VALUES
(1, 1, 'EP4567654', 'Kebede', 'ከበደ', 'Olyad Mulissa', 'ኦሊያድ ሙሊሳ', 'Ethiopia', 'Male', '2019-12-22', 'Addis Ababa', '2019-12-25', '2019-12-28', 'Addis Ababa', '07.jpg', 2),
(2, 4, 'EP5672148', 'Abebe', 'አበበ', 'Sisay Alemu', 'ሲሳይ አለሙ', 'United States', 'Male', '2019-12-27', 'AddisAlem', '2019-12-28', '2020-01-17', 'Addis Ababa', 'logo.PNG', 0),
(3, 4, 'EP5578963', 'Behailu', 'በሃይሉ', 'Tsige Mengesha', 'ጽጌ መንገሻ', 'Ethiopian', 'Female', '2019-12-28', 'Debrebirhan', '2019-12-01', '2022-03-25', 'Addis Ababa', 'logo.jpg', 1),
(4, 1, 'EP7788999', 'Neway', 'ነዋይ', 'Admasu Gobeze', 'አድማሱ ጎበዜ', 'Ethiopian', 'Female', '2019-12-08', 'Addis Ababa', '2019-12-20', '2020-02-29', 'Addis  Ababa', 'hottel.png', 2),
(5, 7, 'EP1234555', 'xyz', 'ዔክስዋይዚ', 'ccc ddd', 'ሲሲሲ ዲዲዲ', 'Ethiopia', 'Female', '2019-12-09', 'Addis Ababa', '2019-12-10', '2019-12-19', 'Addis Ababa', 'logo1.PNG', 1),
(6, 4, 'EP4563123', 'DJ', 'ዲጄ', 'DJ DJ', 'ዲጄ ዲጄ', 'Ethiopia', 'Male', '2019-09-17', 'Addis Ababa', '2019-12-18', '2019-12-24', 'Addis Ababa', 'visa.png', 1),
(7, 1, 'EP1232780', 'Biruk', 'ብሩክ', 'Biruk Biruk', 'ብሩክ ብሩክ', 'Ethiopia', 'Male', '2019-01-07', 'AA', '2019-12-10', '2019-12-27', 'AA', 'app.png', 2),
(8, 1, 'EP0011223', 'Aaaaaaa', 'ኤኤኤኤኤ', 'Aaaaaaa Aaaaaaa', 'ኤኤኤኤኤ ኤኤኤኤኤ', 'Ethiopia', 'Female', '2020-01-21', 'Addis Ababa', '2020-01-21', '2020-01-24', 'Addis Ababa', 'visa1.png', 2),
(9, 1, 'EP0011224', 'Bbbbbb', 'ቢቢቢቢቢ', 'Bbbbbb Bbbbbb', 'ቢቢቢቢቢ ቢቢቢቢቢ', 'Ethiopia', 'Female', '2020-02-03', '', '2020-01-27', '2020-01-20', '', 'visa2.png', 2),
(10, 1, 'EP0011225', 'Cccccc', 'ሲሲሲሲሲ', 'Cccccc Cccccc', 'ሲሲሲሲሲ ሲሲሲሲሲ', 'Ethiopia', 'Female', '2020-02-17', 'AA', '2020-01-28', '2020-01-30', 'AA', 'visa3.png', 2),
(11, 1, 'EP0011226', 'Ddddd', 'ዲዲዲዲዲ', 'Ddddd Ddddd', 'ዲዲዲዲዲ ዲዲዲዲዲ', 'Ethiopia', 'Female', '', '', '', '', '', 'app1.png', 1),
(12, 1, 'EP0011227', 'Eeeeee', 'ዒዒዒዒዒዒ', 'Eeeeee Eeeeee', 'ዒዒዒዒዒ ዒዒዒዒዒ', 'Ethiopia', 'Female', '2020-02-25', '', '2020-01-22', '2020-02-07', '', 'app2.png', 2),
(13, 1, 'EP0011228', 'Fffffff', 'ኤፍኤፍ', 'Fffffff Fffffff', 'ኤፍኤፍ ኤፍኤፍ ', 'Ethiopia', 'Female', '2020-02-24', '', '2020-01-08', '2020-02-14', '', 'visa4.png', 2),
(14, 1, 'EP0011229', 'Ggggg', 'ጂጂጂጂ', 'Ggggg Ggggg', 'ጂጂጂጂ ጂጂጂጂ', 'Ethiopia', 'Female', '2020-02-25', 'AA', '2020-01-29', '2020-02-20', '', 'visa5.png', 2),
(15, 1, 'EP0011230', 'Hhhh', 'ኤችኤች', 'Hhhh Hhhh', 'ኤችኤች ኤችኤች', 'Ethiopia', 'Female', '2020-02-26', 'AA', '2020-01-30', '2020-02-21', '', 'visa6.png', 2),
(16, 1, 'EP0913443', 'as', '123', 'SWORD', '23', 'ethiopian', 'Male', '2020-01-15', 'AA', '2020-01-15', '2020-01-15', 'AA', '', 2),
(17, 1, 'EP5698741', 'qwe', 'ስስ', 'qew qwe', 'ፍር እፍ', 'ethiopian', 'Male', '2020-01-23', 'AA', '2020-01-24', '2020-01-31', 'AA', '', 2),
(18, 1, 'EP1233216', 'jkdf', 'ጋኧፍ', 'fdsdfsd', 'ጋኧፍ ጋኧፍ', 'bahraini', 'Male', '2020-01-30', 'df', '2020-01-02', '2020-01-24', 'aa', '', 2),
(19, 1, 'EP1234567', 'Daf', 'ብውይ', 'Dgg', 'ዕዥቅ', 'ethiopian', 'Female', '1993-01-23', 'Addis Ababa', '2020-01-30', '2022-01-30', 'Addis Ababa', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `agency_users`
--

CREATE TABLE `agency_users` (
  `agency_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `role` enum('Admin','Agency') NOT NULL DEFAULT 'Agency',
  `status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency_users`
--

INSERT INTO `agency_users` (`agency_id`, `name`, `uname`, `passwd`, `address`, `phone`, `bio`, `photo`, `role`, `status`) VALUES
(1, 'Almaz Foreign Private Employeement Agency', 'agency@gmail.com', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', 'Addis Ababa', '0924002448', 'Experianced Agency for the last decade. ', '', 'Agency', 0),
(2, 'Admin', 'admin@gmail.com', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', 'Addis Ababa', '0921548789', '', 'download_(3)1.jpg', 'Admin', 0),
(4, 'SEMAGU', 'SE', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', 'addis ababa', '+251945684531', NULL, 'download4.jpg', 'Agency', 0),
(6, 'Seyfemichael Teklemariam', 'smtm', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', '', '', NULL, 'CROPPED-DSC_98425.JPG', 'Admin', 0),
(7, 'Dave', 'Dave', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', 'Addis Ababa', '0913440344', NULL, 'logo7.PNG', 'Agency', 0),
(9, 'gh', 'gh', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', '', '', NULL, '', 'Admin', 0),
(10, 'new', 'new', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', '', '', NULL, '', 'Admin', 0),
(11, 'Baby', 'baby', '12345', 'Addis Ababa', '096492', NULL, '', 'Agency', NULL),
(12, 'AEAU', 'alemu', 'alemu1', 'Addis Ababa', '+251912970734', NULL, '', 'Agency', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` enum('Action','Comedy','Drama','Horror','Thriller','Western','Fantasy','Romance') NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `year`) VALUES
(1, '911', 'Action', '12 May 2020'),
(2, 'Lonnie Toons', 'Comedy', '12 Jan 2000'),
(3, 'Friends', 'Comedy', '02 Feb 1994');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency_contacts`
--
ALTER TABLE `agency_contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `agency_employees`
--
ALTER TABLE `agency_employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `agency_passports`
--
ALTER TABLE `agency_passports`
  ADD PRIMARY KEY (`passid`);

--
-- Indexes for table `agency_users`
--
ALTER TABLE `agency_users`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency_contacts`
--
ALTER TABLE `agency_contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `agency_employees`
--
ALTER TABLE `agency_employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `agency_passports`
--
ALTER TABLE `agency_passports`
  MODIFY `passid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `agency_users`
--
ALTER TABLE `agency_users`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
