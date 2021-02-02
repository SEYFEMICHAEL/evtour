-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 01:00 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evtour_db`
--

-- --------------------------------------------------------
--
-- Table structure for table `attraction`
--

CREATE TABLE `attraction` (
  `at_id` int(11) NOT NULL,
  `name` int(11) DEFAULT NULL,
  `abt` text DEFAULT NULL,
  `type` enum('National Park','Natural Attraction','Historic Attraction','Festival Attraction') NOT NULL DEFAULT 'Natural Attraction',
  `img` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 0,
  `fname` text DEFAULT NULL,
  `place` text DEFAULT NULL,
  `date` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `code` text DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`book_id`, `user_id`, `fname`, `place`, `date`, `timestamp`, `code`, `state`) VALUES
(2, 21, 'yabsira ', 'Lalibela', '01/26/2021', '2021-01-25 01:36:29', NULL, 1),
(3, 21, 'yabsira ', 'Sof Omar', '01/28/2021', '2021-01-25 02:03:47', 'B134', 1),
(4, 0, 'Melaku dude', 'Lalibela', '01/28/2021', '2021-01-26 11:37:05', NULL, 0),
(7, 25, 'newuser ', 'Erta Ale', '01/30/2021', '2021-01-28 01:28:05', NULL, 1),
(11, 25, 'newuser ', 'Sof Omar', '2021/01/28', '2021-01-28 19:35:30', NULL, 1),
(13, 25, 'newuser ', 'Axum', '2021/02/05', '2021-01-28 21:07:11', 'F012', 1),
(14, 25, 'newuser newuserlname', 'Sof Omar', '2021/01/31', '2021-01-30 07:46:18', '5BA2', 1);
-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `site_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `type` enum('Carousel','Panaroma','VR') NOT NULL DEFAULT 'Carousel',
  `img` varchar(255) DEFAULT NULL,
  `embed` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`site_id`, `name`, `detail`, `type`, `img`, `embed`, `active`) VALUES
(1, 'Entoto Park', NULL, 'VR', NULL, 'TTkUxrOXByU', 1),
(3, 'Lalibela', NULL, 'Panaroma', 'Panaroma_1612212133913.jpg', '', 1),
(4, 'Entoto Park', NULL, 'VR', NULL, 'TTkUxrOXByU', 1),
(5, NULL, NULL, 'VR', NULL, 'TTkUxrOXByU', 1),
(6, NULL, NULL, 'VR', NULL, 'TTkUxrOXByU', 1),
(7, NULL, NULL, 'VR', NULL, 'TTkUxrOXByU', 1),
(8, NULL, NULL, 'VR', NULL, 'TTkUxrOXByU', 1),
(9, NULL, NULL, 'Panaroma', 'Panaroma_1612212133913.jpg', NULL, 1),
(10, NULL, NULL, 'Panaroma', 'Panaroma_1612212133913.jpg', NULL, 1),
(11, NULL, NULL, 'Panaroma', 'Panaroma_1612212133913.jpg', NULL, 1),
(12, NULL, NULL, 'Panaroma', 'Panaroma_1612212133913.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `type` enum('Natural','Historical','Festival','Parks','Other') NOT NULL DEFAULT 'Other',
  `active` int(11) NOT NULL DEFAULT 1,
  `img` varchar(255) DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `name`, `detail`, `type`, `active`, `img`, `state`) VALUES
(3, 'Lalibela', '<b>Lalibela</b> is a town in the Amhara region of northern Ethiopia. It\'s known for its distinctive rock-cut churches<br>', 'Historical', 1, 'Tour_1611673912557.jpg', 1),
(4, 'Fasil', '<b>Gondar</b>, or Gonder, is a city in northern Ethiopia. It\'s known for the walled Fasil Ghebbi fortress', 'Historical', 1, 'Tour_1611674149651.jpg', 1),
(5, 'Erta Ale', '<b>Erta Ale</b> is a continuously active basaltic shield volcano in the Afar Region of northeastern Ethiopia.', 'Natural', 1, 'Tour_1611781597800.jpg', 1),
(7, 'Dalol', '<b>Dalol</b> is a located in the Afar Region of northeastern Ethiopia.', 'Natural', 1, 'Tour_1611868319174.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `img` text DEFAULT NULL,
  `role` enum('Admin','User','','') NOT NULL DEFAULT 'User',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `last_name`, `email`, `phone`, `password`, `img`, `role`, `status`) VALUES
(21, 'smtm01c', 'yared', 'kasahun', 'yabu@gmail.com', '0912359600', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, 'User', 1),
(22, 'smtmadmin', 'adminstrator', NULL, 'ad@gmail.com', NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, 'Admin', 1),
(23, 'dscdsc', 'bfvkbf', 'dscd', 'dcdsc', '1321', 'dscs', 'dsc', 'User', 0),
(24, 'user1234', 'firstnamme01', 'lastname02', 'jho@gmail.com', '0912365489', '60149a289a3623cd214943af2892e103f4bddafb', NULL, 'User', 1),
(25, '', 'newuser', 'newuserlname', 'n@gmail.com', '0912358695', '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, 'User', 1),
(26, 'jjjjjj', 'jhon doe', NULL, 'j@j.j', NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b', NULL, 'User', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alphabet`
--
ALTER TABLE `alphabet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attraction`
--
ALTER TABLE `attraction`
  ADD PRIMARY KEY (`at_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

-- AUTO_INCREMENT for table `attraction`
--
ALTER TABLE `attraction`
  MODIFY `at_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `site_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
