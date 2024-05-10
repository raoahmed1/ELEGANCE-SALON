-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 06:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `app_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_contact` int(11) NOT NULL,
  `c_service` int(11) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `appointment_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`app_id`, `c_name`, `c_contact`, `c_service`, `c_date`, `appointment_Date`) VALUES
(64, 'izhan', 2147483647, 10, '2024-05-04 11:16:52', '2024-05-17 18:19:00'),
(65, 'izhan', 2147483647, 10, '2024-05-04 11:18:07', '2024-05-17 18:19:00'),
(66, 'izhan', 2147483647, 10, '2024-05-04 18:28:20', '2024-05-17 18:19:00'),
(67, 'izhan', 2147483647, 10, '2024-05-05 07:37:51', '2024-05-17 18:19:00'),
(68, 'izhan', 2147483647, 10, '2024-05-05 07:42:27', '2024-05-17 18:19:00'),
(69, 'izhan', 2147483647, 10, '2024-05-05 07:42:57', '2024-05-17 18:19:00'),
(70, 'izhan', 2147483647, 10, '2024-05-05 07:43:38', '2024-05-17 18:19:00'),
(71, 'izhan', 2147483647, 10, '2024-05-05 07:43:56', '2024-05-17 18:19:00'),
(72, 'huzaifa', 1241241241, 10, '2024-05-06 13:26:29', '2024-05-09 18:29:00'),
(81, '', 0, 0, '2024-05-07 16:49:53', '0000-00-00 00:00:00'),
(82, '', 0, 0, '2024-05-07 16:50:06', '0000-00-00 00:00:00'),
(83, '', 0, 0, '2024-05-07 16:58:14', '0000-00-00 00:00:00'),
(84, '', 0, 0, '2024-05-07 17:29:01', '0000-00-00 00:00:00'),
(85, '', 0, 0, '2024-05-07 17:31:02', '0000-00-00 00:00:00'),
(86, '', 0, 0, '2024-05-07 17:33:56', '0000-00-00 00:00:00'),
(87, '', 0, 0, '2024-05-07 17:35:57', '0000-00-00 00:00:00'),
(88, '', 0, 0, '2024-05-07 17:37:49', '0000-00-00 00:00:00'),
(89, '', 0, 0, '2024-05-07 17:39:18', '0000-00-00 00:00:00'),
(90, 'shahrukh', 2412424, 9, '2024-05-08 02:15:54', '2024-05-24 11:18:00'),
(91, 'shahrukh', 2412424, 9, '2024-05-08 02:16:26', '2024-05-24 11:18:00'),
(92, 'rafay', 5532525, 11, '2024-05-08 02:32:24', '2024-05-09 19:35:00'),
(93, 'rafay', 5532525, 11, '2024-05-08 02:32:32', '2024-05-09 19:35:00'),
(94, 'rafay', 5532525, 11, '2024-05-08 02:34:18', '2024-05-09 19:35:00'),
(95, 'rafay', 5532525, 9, '2024-05-08 02:35:56', '2024-05-09 19:35:00'),
(96, 'rafay', 5532525, 9, '2024-05-08 02:37:34', '2024-05-09 19:35:00'),
(97, 'rafay', 5532525, 9, '2024-05-08 02:39:59', '2024-05-09 19:35:00'),
(98, 'rafay', 5532525, 9, '2024-05-08 02:41:51', '2024-05-09 19:35:00'),
(99, 'ahmed', 41242412, 11, '2024-05-08 02:42:28', '2024-05-10 19:45:00'),
(100, 'ahmed', 41242412, 11, '2024-05-08 02:42:50', '2024-05-10 19:45:00'),
(101, 'ramzan', 2412412, 9, '2024-05-08 02:45:30', '2024-06-07 21:46:00'),
(102, 'ahmed', 41242412, 10, '2024-05-08 02:50:11', '2024-05-23 07:50:00'),
(103, 'ahsan ansari', 412414124, 8, '2024-05-08 02:51:35', '2024-06-08 07:51:00'),
(104, 'zain', 51241241, 9, '2024-05-08 02:59:37', '2024-05-10 07:59:00'),
(105, 'zain', 51241241, 9, '2024-05-08 03:05:07', '2024-05-10 07:59:00'),
(106, 'zain', 51241241, 9, '2024-05-08 03:05:13', '2024-05-10 07:59:00'),
(107, 'zain', 412412, 10, '2024-05-08 03:05:43', '0000-00-00 00:00:00'),
(108, 'zain', 412412, 10, '2024-05-08 03:07:08', '0000-00-00 00:00:00'),
(109, 'zain', 412412, 10, '2024-05-08 03:07:18', '0000-00-00 00:00:00'),
(110, 'zain', 412412, 10, '2024-05-08 03:08:20', '0000-00-00 00:00:00'),
(111, 'zain', 412412, 9, '2024-05-08 03:09:17', '2024-05-08 20:11:00'),
(112, 'hassan', 34121251, 10, '2024-05-08 03:19:05', '2024-05-08 08:21:00'),
(113, 'shamil', 412412415, 11, '2024-05-08 03:58:40', '2024-05-08 10:58:00'),
(114, 'ebad', 242114124, 10, '2024-05-08 04:11:04', '2024-05-03 09:12:00'),
(116, 'ebad', 242114124, 10, '2024-05-08 04:11:43', '2024-05-03 09:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `information` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `appointment_history` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `contact`, `information`, `service`, `appointment_history`) VALUES
(2, 'ahmed hassan', 2147483647, 'hair demaged hier a stylish for repair hair', ' hair stylish', ' Monday,12:34,14April 2024'),
(4, 'rehmat ali', 56221458, 'groom deal for night', ' hair,face,nail stylish', ' 25April 24, 15:30'),
(5, 'hamza khan', 546684, 'comes from quetta special costumer using refferal ', ' facial and hair stylish ', ' 29April 24, 20:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `message`, `name`, `email`, `number`) VALUES
(1, 'fasfasfsafqwwq', 'aaleen', 'aaleenzafar52@gmail.com', 4124124),
(2, 'kjasfkhasfhio', 'shahrukh', 'ahsan@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_items`
--

CREATE TABLE `inventory_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_image` varchar(200) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory_items`
--

INSERT INTO `inventory_items` (`item_id`, `item_name`, `item_price`, `item_image`, `item_quantity`, `isActive`) VALUES
(24, 'hair color', 900, 'download.jpeg', 7, 0),
(25, 'facial kit', 1200, 'download (1).jpeg', 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_pass` varchar(200) NOT NULL,
  `staff_role` varchar(200) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_name`, `full_name`, `user_email`, `user_pass`, `staff_role`, `date`) VALUES
(27, 'xhahrukh59', 'Muhammad Shahrukh', 'xhahrukh59@gmail.com', '', '', '2024-04-11 20:49:31'),
(28, 'abc', 'abcd', 'abcd@gmail.com', '', 'stylist', '2024-04-11 20:48:06'),
(29, 'rafay', 'abdurrafay', 'rafay@gmail.com', '123', '', '2024-04-12 15:37:34'),
(30, 'tazkia', 'tazkianadeem', 'tazkia@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '2024-04-12 15:40:06'),
(31, 'ahsan', 'ahsanansari', 'ahsan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '2024-04-13 13:40:01'),
(32, 'zain', 'zainmalik', 'zain@gmail.com', 'zain', 'stylist', '2024-05-01 19:38:12'),
(37, 'stylist', 'stylist', 'stylist@gmail.com', '97417613dc7c854f6cd2b1d768e132a7', 'stylist', '2024-04-14 20:22:04'),
(38, 'receptionist', 'receptionist', 'receptionist@gmail.com', '0a9b3767c8b9b69cea129110e8daeda2', 'receptionist', '2024-04-14 20:22:16'),
(39, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2024-04-14 22:09:05'),
(40, 'azan', 'azan', 'azan@gmail.com', 'azan', 'receptionist', '2024-05-01 19:37:39'),
(41, 'deeba', 'deeba', 'deeba@gmail.com', '6deb65556c992bd23098599d6c58a31b', 'stylist', '2024-04-14 22:43:45'),
(42, 'ullo', 'ullo', 'ullo@gmail.com', '18b52405f7c4bfee877d076269ca4d03', 'stylist', '2024-04-14 22:45:29'),
(43, 'patha', 'patha', 'patha@gmail.com', 'a296b5e555376bc70936b0512cc778e2', '', '2024-04-14 22:48:23'),
(44, 'huzaifa', 'huzaifa', 'huzaifa@gmail.com', '6080f78b8300a1ba423f640ebd9a2568', '', '2024-04-15 15:39:16'),
(45, 'nadeem', 'nadeem', 'nadeem@gmail.com', '62cdf75b97d222b6396b84ea003de42f', '', '2024-04-15 15:55:39'),
(46, 'aaleen', 'aaleen', 'aaleen@gmail.com', '1f18dd799631e07923785d5f95492cf7', 'admin', '2024-04-21 13:06:20'),
(47, 'aren', 'aren', 'aren@gmail.com', 'a6535518a0ae34edf527e58dccc0be99', '', '2024-04-23 18:51:53'),
(48, 'aman', 'amananis', 'aman@gmail.com', 'ccda1683d8c97f8f2dff2ea7d649b42c', '', '2024-04-30 18:59:11'),
(49, 'ali', 'alizafar', 'ali@gmail.com', '86318e52f5ed4801abe1d13d509443de', '', '2024-04-30 19:34:03'),
(50, 'arbaz', 'arbazkhan', 'arbaz@gmail.com', '43fd9cd8ffbb0154daf54230a7eff4f1', 'stylist', '2024-04-30 19:36:44'),
(51, 'ramzan', 'Muhammad Ramzan', 'ramzan@gmail.com', '383473c229ecc0ae87d2e0ac46b88b6b', 'receptionist', '2024-04-30 19:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `service_amount` varchar(200) NOT NULL,
  `product_amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `description`, `duration`, `price`) VALUES
(8, 'manicure', 'gsdgsdgsdg', '2 hours', 1400),
(9, 'pedicure', 'faffqw', '1 hour', 1200),
(10, 'hair cutting', 'gsdgsdgsdg', '1 hour', 500),
(11, 'Beard trimming', 'gsdgsdgsdg', 'half hour', 300),
(12, 'Facial', 'gsdgsdgsdg', '2 hour', 1500);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_info` varchar(100) DEFAULT NULL,
  `work_schedule` varchar(100) DEFAULT NULL,
  `commission_rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `contact_info`, `work_schedule`, `commission_rate`) VALUES
(1, 'rafay', '03383201', 'morning', 2000),
(2, 'ahmed', '14124124', 'morning', 1000),
(3, 'mohsin', '02412489', 'morning', 100);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(100) NOT NULL,
  `task_shift` text DEFAULT NULL,
  `assigned_staff_id` int(11) DEFAULT NULL,
  `completion_status` enum('Pending','Completed') DEFAULT 'Pending',
  `is_seen` tinyint(1) NOT NULL,
  `created_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `task_shift`, `assigned_staff_id`, `completion_status`, `is_seen`, `created_datetime`) VALUES
(1, '0', 'jfpkdgpodgjsdgsdgpdosjpsd', 1, '', 0, '2024-05-02 00:11:01'),
(2, '0', 'jfpkdgpodgjsdgsdgpdosjpsd', 1, '', 0, '2024-05-02 00:11:01'),
(3, '0', 'sfafasfasfsfasasfasfassafasfsadfsddffdddd', 1, '', 0, '2024-05-02 00:11:01'),
(6, '0', 'morning', 2, '', 0, '2024-05-02 00:11:01'),
(8, '0', 'evening', 2, '', 0, '2024-05-02 00:11:01'),
(12, '0', 'morning', 2, '', 0, '2024-05-02 00:11:01'),
(17, '0', 'morning', 1, '', 0, '2024-05-02 00:11:01'),
(21, '0', 'morning', 2, '', 0, '2024-05-02 00:11:01'),
(24, '8', 'morning', 1, '', 0, '2024-05-02 00:11:01'),
(25, '9', 'evening', 2, '', 0, '2024-05-02 00:11:01'),
(26, '8', 'morning', 38, 'Completed', 0, '2024-05-02 00:11:01'),
(27, '9', 'evening', 40, 'Completed', 0, '2024-05-02 00:11:01'),
(28, '8', 'morning', 27, 'Completed', 0, '2024-05-02 00:11:01'),
(29, '8', 'morning', 41, 'Completed', 0, '2024-05-02 00:11:01'),
(30, '10', 'morning', 45, 'Completed', 0, '2024-05-02 00:11:01'),
(31, '11', 'evening', 50, 'Completed', 0, '2024-05-03 22:21:10'),
(32, '10', 'morning', 50, 'Completed', 0, '2024-05-03 22:33:35'),
(33, '12', 'night', 50, 'Completed', 0, '2024-05-06 12:51:27'),
(34, '12', 'night', 50, 'Completed', 0, '2024-05-06 12:52:07'),
(35, '12', 'night', 50, 'Completed', 0, '2024-05-06 12:52:39'),
(36, '12', 'night', 50, 'Completed', 0, '2024-05-06 12:52:44'),
(37, '12', 'night', 50, 'Completed', 0, '2024-05-06 12:53:38'),
(38, '12', 'night', 50, 'Completed', 0, '2024-05-06 12:58:33'),
(40, '10', 'evening', 50, 'Completed', 0, '2024-05-06 13:52:16'),
(41, '10', 'evening', 41, 'Completed', 0, '2024-05-06 13:56:38'),
(42, '11', 'morning', 41, 'Completed', 0, '2024-05-06 14:04:45'),
(43, '8', 'night', 41, 'Completed', 0, '2024-05-06 15:14:23'),
(44, '9', 'night', 41, 'Completed', 0, '2024-05-06 15:41:22'),
(45, '10', 'night', 41, 'Completed', 0, '2024-05-06 15:47:50'),
(46, '11', 'evening', 41, 'Completed', 0, '2024-05-06 15:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_pass` varchar(200) NOT NULL,
  `user_role` varchar(200) NOT NULL DEFAULT 'user',
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `full_name`, `user_name`, `user_email`, `user_pass`, `user_role`, `date`) VALUES
(1, 'azan', 'azan', 'azan@gmail.com', 'azan', 'user', '2024-05-06 14:37:16'),
(2, 'aaleen', 'aaleen', 'aaleenzafar52@gmail.com', 'aaleen', 'user', '2024-05-06 14:37:08'),
(3, 'huzaifa', 'huzaifa', 'huzaifa@gmail.com', '6080f78b8300a1ba423f640ebd9a2568', 'user', '2024-05-06 14:37:19'),
(4, 'muhammad shahukh', 'shahrukh', 'abc@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'user', '2024-05-07 17:30:48'),
(5, 'rafay', 'rafay', 'rafay@gmail.com', 'd63c6146fdfa2afc9cea7e556df8b549', 'user', '2024-05-08 02:17:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `appointments_ibfk_1` (`c_service`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory_items`
--
ALTER TABLE `inventory_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `user_name` (`user_name`,`user_email`),
  ADD KEY `login_id` (`login_id`,`user_name`,`full_name`,`user_email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `assigned_staff_id` (`assigned_staff_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory_items`
--
ALTER TABLE `inventory_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
