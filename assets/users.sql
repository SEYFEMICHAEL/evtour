
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
  `status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agency_users`
--

INSERT INTO `users` (`user_id`, `name`, `uname`, `passwd`, `address`, `phone`, `bio`, `photo`, `role`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', 'Addis Ababa', '0921548789', '', 'download_(3)1.jpg', 'Admin', 0),
(2, 'User', 'user@gmail.com', '363c8bf6fce7c4f6df02411e4cd463a4a33a4c02', 'addis ababa', '+251945684531', NULL, 'download4.jpg', 'User', 0),
 

-- --------------------------------------------------------