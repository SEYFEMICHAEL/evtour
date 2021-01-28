-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 12:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qefira`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `type` int(10) NOT NULL DEFAULT 0,
  `sponsor` int(10) NOT NULL DEFAULT 0,
  `title` text NOT NULL,
  `descriptions` text NOT NULL,
  `price` text DEFAULT NULL,
  `img1` text DEFAULT NULL,
  `img2` text DEFAULT NULL,
  `img3` text DEFAULT NULL,
  `state` text NOT NULL,
  `user_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `category`, `type`, `sponsor`, `title`, `descriptions`, `price`, `img1`, `img2`, `img3`, `state`, `user_id`) VALUES
(1, '1', 0, 1, 'Hp envy dv6', 'core-i5 2.6 ghz 15.6\"\r\n12GB RAM\r\n250 SSD ', '18000', 'feature-1.jpg', NULL, NULL, 'New', '1'),
(2, '1', 0, 0, 'hp omen 17', 'Gamming cor i7 16GB 1TB+255SSD 6GB GTX 1060ti', '55000', 'feature-3.jpg', NULL, NULL, 'new', '1'),
(3, '1', 0, 1, 'hp deskjet 2600', 'color print\r\nscan\r\ncopy\r\nwifi', '2500', 'feature-5.jpg', NULL, NULL, 'used', '1'),
(4, 'Phone', 0, 0, 'Samsung Galaxy J6 ', 'RAM: 3GB\r\nStorage: 32GB\r\nDisplay: 5.6\" super AMOLED                  Slightly used\r\nFingerPrint: YES\r\nPrice: 5999 ETB\r\n', NULL, 'feature-6.jpg', NULL, NULL, 'Used', '1'),
(5, 'Phone', 0, 1, 'Huawie P9 ', 'Huawei P9 Model:EVA-L09\r\n3GB RAM\r\n32 GB Storage\r\n13MP dual rear-Camera with 8MP front-camera', '3999', 'feature-10.jpg', NULL, NULL, 'Used', '1'),
(6, '', 0, 1, 'Cisco Router', 'A Cisco router connects different networks together whereas, a switch connects multiple devices together to create a network. 2. Routers work on the Physical layer; Data link layer and the Network layer whereas Switches, as well as advanced switches, work on the Data link layer and the Network layer too.', '30000', 'feature-4.jpg', NULL, NULL, 'new', ''),
(7, '', 0, 1, 'WHEY Protean', '', '2400', 'feature-2.jpg', NULL, NULL, '', ''),
(8, '', 1, 1, 'Bark Best', '', NULL, 'b1.jpeg', NULL, NULL, '', ''),
(9, '', 1, 1, 'Redi Makeup', '', NULL, 'b2.jpeg', NULL, NULL, '', ''),
(10, '', 1, 1, 'Yene Commission', '', NULL, 'b4.jpeg', NULL, NULL, '', ''),
(11, '', 1, 1, 'Ebana', '', NULL, 'b5.jpeg', NULL, NULL, '', ''),
(12, '', 1, 1, 'Fuad', '', NULL, 'b7.jpeg', NULL, NULL, '', ''),
(13, '', 1, 1, 'Yamy', '', NULL, 'b8.jpg', NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `alphabet`
--

CREATE TABLE `alphabet` (
  `id` int(11) NOT NULL,
  `alphabet` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alphabet`
--

INSERT INTO `alphabet` (`id`, `alphabet`, `status`) VALUES
(1, 'A', '1'),
(2, 'B', ''),
(3, 'C', '1'),
(4, 'D', ''),
(5, 'E', '1'),
(6, 'F', ''),
(7, 'G', ''),
(8, 'H', ''),
(9, 'I', ''),
(10, 'J', ''),
(11, 'K', ''),
(12, 'L', ''),
(13, 'M', ''),
(14, 'N', ''),
(15, 'O', ''),
(16, 'P', ''),
(17, 'Q', ''),
(18, 'R', ''),
(19, 'S', ''),
(20, 'T', ''),
(21, 'U', ''),
(22, 'V', ''),
(23, 'W', ''),
(24, 'X', ''),
(25, 'Y', ''),
(26, 'Z', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `ad_id` text NOT NULL,
  `name` text NOT NULL,
  `dos` text NOT NULL,
  `doe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `ad_id`, `name`, `dos`, `doe`) VALUES
(1, '1', 'Electronics', '28/15/2020', '30/15/2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `img`) VALUES
(1, 'smtm', '1234', ':)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `role` enum('Admin','User') NOT NULL DEFAULT 'User',
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `uname`, `passwd`, `address`, `phone`, `bio`, `photo`, `role`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', 'Addis Ababa', '0921548789', '', 'download_(3)1.jpg', 'Admin', 0),
(2, 'User', 'user@gmail.com', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', 'addis ababa', '+251945684531', NULL, 'download4.jpg', 'User', 0);

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `alphabet`
--
ALTER TABLE `alphabet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
