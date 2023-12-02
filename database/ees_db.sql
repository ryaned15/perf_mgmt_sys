-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 08:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ees_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `command_list`
--

CREATE TABLE `command_list` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `command_list`
--

INSERT INTO `command_list` (`id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(2, 'Betul', 'Czerkawski', 'bcozkan@arizona.edu', '1dccadfed7bcbb036c56a4afb97e906f', '1701531000_UA_Horizontal_RGB.png', '2021-03-02 13:53:17'),
(3, 'Ryan', 'Edmonds', 'redmonds2315@gmail.com', 'fd7b1d28840f3cfd881bbd9dd57abf26', '1699643700_Edmonds_Ryan_PP.jpg', '2023-10-28 13:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `department_list`
--

CREATE TABLE `department_list` (
  `id` int(30) NOT NULL,
  `department` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_list`
--

INSERT INTO `department_list` (`id`, `department`, `description`) VALUES
(1, 'S1', 'Commander, Superintendent, Commander Support Staff'),
(3, 'S2', 'Intelligence '),
(4, 'S3', 'Operations'),
(5, 'S4', 'Logistics'),
(6, 'S5', 'Plans and programs');

-- --------------------------------------------------------

--
-- Table structure for table `designation_list`
--

CREATE TABLE `designation_list` (
  `id` int(30) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation_list`
--

INSERT INTO `designation_list` (`id`, `designation`, `description`) VALUES
(1, 'Junior Enlisted', 'Ranks E-1 through E-5'),
(2, 'Senior Enlisted', 'Ranks E-6 through E-9'),
(3, 'Junior Officer', 'Ranks O-1 through O-4'),
(4, 'Senior Officer', 'Ranks O-5 through O-10');

-- --------------------------------------------------------

--
-- Table structure for table `employee_list`
--

CREATE TABLE `employee_list` (
  `id` int(30) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `department_id` int(30) NOT NULL,
  `designation_id` int(30) NOT NULL,
  `evaluator_id` int(30) NOT NULL,
  `evaluator` text DEFAULT NULL,
  `command` text DEFAULT NULL,
  `admin` text DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`id`, `employee_id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `department_id`, `designation_id`, `evaluator_id`, `evaluator`, `command`, `admin`, `avatar`, `date_created`) VALUES
(1, '', 'Curtis', '', 'Jones', 'cjo@liverpool.com', 'c85a6a3b872ccdc150bb766a4fd64ad2', 3, 1, 2, '', NULL, NULL, '1607134500_avatar.jpg', '2020-12-05 10:15:38'),
(6, '', 'Luis', '', 'Diaz', 'ldiaz@liverpool.com', '502ff82f7f1f8218dd41201fe4353687', 4, 1, 2, NULL, NULL, NULL, 'no-image-available.png', '2023-11-25 12:38:03'),
(7, '', 'Dominic', '', 'Szobozlai', 'dszo@liverpool.com', '850ab44cce67bf2c5457c6dca6181d60', 3, 2, 3, NULL, NULL, NULL, 'no-image-available.png', '2023-12-02 08:32:56'),
(8, '', 'Trent', '', 'Alexander-Arnold', 'taa@liverpool.com', '1843e51e39e7195d4ef79a58fdeea872', 5, 1, 2, NULL, NULL, NULL, 'no-image-available.png', '2023-12-02 08:34:04'),
(9, '', 'Alexis', '', 'MacAliister', 'amac@liverpool.com', '059bf68f71c80fce55214b411dd2280c', 3, 3, 3, NULL, NULL, NULL, 'no-image-available.png', '2023-12-02 08:34:54'),
(10, '', 'Darwin', '', 'Nunez', 'dnunez@liverpool.com', '3750c667d5cd8aecc0a9213b362066e9', 4, 3, 3, NULL, NULL, NULL, 'no-image-available.png', '2023-12-02 08:35:38'),
(11, '', 'Mohammed', '', 'Salah', 'mosalah@liverpool.com', '09695571837d5f173102f03beab7861c', 4, 4, 3, NULL, NULL, NULL, 'no-image-available.png', '2023-12-02 08:37:27'),
(12, '', 'Virgil', '', 'Van Dijk', 'vvd@liverpool.com', 'bbd254f810a64621be6fc0b06e81a6d2', 5, 4, 3, NULL, NULL, NULL, 'no-image-available.png', '2023-12-02 08:42:23'),
(13, '', 'Andrew', '', 'Robertson', 'robbo@liverpool.com', 'd914e3ecf6cc481114a3f534a5faf90b', 5, 2, 3, NULL, NULL, NULL, 'no-image-available.png', '2023-12-02 08:44:23'),
(14, '', 'Ibrahima', '', 'Konate', 'ibra@liverpool.com', 'd726fe05cdd54b1b9a8d407b1516c75f', 5, 4, 2, NULL, NULL, NULL, 'no-image-available.png', '2023-12-02 08:45:29'),
(15, '', 'Allison', '', 'Becker', 'allison@liverpool', '4651d80cfa79f4933bc5408665394e9c', 6, 2, 2, NULL, NULL, NULL, 'no-image-available.png', '2023-12-02 08:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `evaluator_list`
--

CREATE TABLE `evaluator_list` (
  `id` int(30) NOT NULL,
  `employee_id` varchar(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evaluator_list`
--

INSERT INTO `evaluator_list` (`id`, `employee_id`, `firstname`, `middlename`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(2, '', 'Ryan', '', 'Edmonds', 'redmonds2315@gmail.com', 'fd7b1d28840f3cfd881bbd9dd57abf26', 'no-image-available.png', '2023-11-11 12:10:50'),
(3, '', 'Betul', '', ' Czerkawski', 'bcozkan@arizona.edu', '9e76d075c324f87e752db59dbcc8847c', '1701530580_UA_Horizontal_RGB.png', '2023-12-02 08:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(30) NOT NULL,
  `employee_id` int(30) NOT NULL,
  `task_id` int(30) NOT NULL,
  `evaluator_id` int(30) NOT NULL,
  `primary_duty` int(11) NOT NULL,
  `remarks_pd` text NOT NULL,
  `lead` int(11) NOT NULL,
  `remarks_lead` text NOT NULL,
  `follow` int(11) NOT NULL,
  `remarks_follow` text NOT NULL,
  `growth` int(11) NOT NULL,
  `remarks_growth` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `employee_id`, `task_id`, `evaluator_id`, `primary_duty`, `remarks_pd`, `lead`, `remarks_lead`, `follow`, `remarks_follow`, `growth`, `remarks_growth`, `date_created`) VALUES
(2, 1, 1, 1, 0, '', 5, '', 5, '', 5, 'Sample', '2020-12-05 15:18:40'),
(5, 1, 4, 2, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed odio. Lobortis scelerisque fermentum dui faucibus in. Sodales neque sodales ut etiam sit amet. In nulla posuere sollicitudin aliquam ultrices sagittis. Nec ullamcorper sit amet risus nullam eget.', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed odio. Lobortis scelerisque fermentum dui faucibus in. Sodales neque sodales ut etiam sit amet. In nulla posuere sollicitudin aliquam ultrices sagittis. Nec ullamcorper sit amet risus nullam eget.', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed odio. Lobortis scelerisque fermentum dui faucibus in. Sodales neque sodales ut etiam sit amet. In nulla posuere sollicitudin aliquam ultrices sagittis. Nec ullamcorper sit amet risus nullam eget.', 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed odio. Lobortis scelerisque fermentum dui faucibus in. Sodales neque sodales ut etiam sit amet. In nulla posuere sollicitudin aliquam ultrices sagittis. Nec ullamcorper sit amet risus nullam eget.', '2023-11-17 20:06:10'),
(7, 6, 6, 2, 5, 'good employee but, needs to work on communication', 5, 'good employee but, needs to work on communication', 5, 'good employee but, needs to work on communication', 1, 'Has done none', '2023-11-25 15:39:39'),
(9, 14, 15, 2, 5, '', 5, '', 5, '', 5, '', '2023-12-02 12:17:00'),
(10, 8, 7, 2, 5, 'Trent performed extraordinarily well at his given position of Right Back.  In addition, he expanded his production to assist the midfield with progressive passing as well.  ', 5, 'Trent is a leader amongst his peers and merits his recent selections as \"Captain\". ', 4, 'Trent has a primacy streak but overall is willing to share opportunities with teammates.   ', 5, 'Trent has completed extensive work on his speed, agility and receiving the ball on the half turn during the offseason.  He is one of the most improved players in the squad. ', '2023-12-02 12:23:36'),
(12, 15, 8, 2, 5, 'Allison is one of the best keepers in the world.  His shot stopping and distribution are rated as high as any Keeper in the game. ', 5, 'Allison is a classic leader by example and is an excellent reserve captain given his status. ', 5, 'Allison is very accountable for his mistakes and allows others to learn and grow from theirs as well. ', 3, 'This is the one category that there is some room for improvement.  His style is a bit unconventional and he can find himself out of position or taking unnecesary risks. ', '2023-12-02 12:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Performance Management System', 'info@sample.comm', '+6948 8542 623', '2102  Caldwell Road, Rochester, New York, 14608', '');

-- --------------------------------------------------------

--
-- Table structure for table `task_list`
--

CREATE TABLE `task_list` (
  `id` int(30) NOT NULL,
  `task` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `employee_id` int(30) NOT NULL,
  `due_date` date NOT NULL,
  `completed` date NOT NULL,
  `status` int(1) NOT NULL COMMENT '0=pending, 1=on-progress,3=Completed',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_list`
--

INSERT INTO `task_list` (`id`, `task`, `description`, `employee_id`, `due_date`, `completed`, `status`, `date_created`) VALUES
(1, 'Sample Task 1', '																												Sample Only																								', 2, '2020-12-02', '0000-00-00', 2, '2020-12-05 11:06:15'),
(2, 'Sample Task 2', '																					&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-size: 14px; text-align: justify;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed gravida, magna eu sagittis venenatis, lorem tellus mollis tellus, viverra facilisis metus odio vel dui. Sed posuere interdum ultrices. Pellentesque blandit enim in condimentum pretium. Suspendisse id tortor sit amet augue rutrum condimentum. Fusce ac mattis purus, eget vehicula sem. Maecenas sit amet orci id lorem tristique tempor. Nullam iaculis quis velit at dapibus. Nullam scelerisque, metus vitae feugiat aliquam, risus turpis pellentesque justo, vitae varius urna leo vitae nisl. Pellentesque viverra ipsum et diam blandit varius. Suspendisse blandit ex vitae hendrerit volutpat. Nulla fermentum dolor at lorem accumsan, nec lacinia mi pellentesque. Mauris ac augue vel elit lobortis maximus.&lt;/span&gt;																															', 3, '2020-12-24', '0000-00-00', 0, '2020-12-05 13:09:05'),
(3, 'EPR_2023', '													', 3, '2023-11-11', '0000-00-00', 2, '2023-11-11 11:35:43'),
(4, 'EPR_2023', '													', 1, '2023-11-16', '0000-00-00', 2, '2023-11-15 18:25:20'),
(6, 'EPR_2023', '													', 6, '2023-12-02', '0000-00-00', 2, '2023-11-25 12:42:56'),
(7, 'Eval_2023', 'Please rate Trent&amp;#x2019;s performance over CY2023', 8, '2023-12-04', '0000-00-00', 2, '2023-12-02 08:56:38'),
(8, 'Eval_2023', '							Please rate Allison&amp;#x2019;s performance over CY2023						', 15, '2023-12-04', '0000-00-00', 2, '2023-12-02 08:57:16'),
(9, 'Eval_2023', 'Please rate Robbo&amp;#x2019;s performance over CY2023', 13, '2023-12-02', '0000-00-00', 2, '2023-12-02 09:03:12'),
(10, 'Eval_2023', 'Please rate Virgil&amp;#x2019;s performance over CY2023', 12, '2023-12-02', '0000-00-00', 2, '2023-12-02 09:04:10'),
(11, 'Eval_2023', 'Please rate Dominic&amp;#x2019;s performance over CY2023													', 7, '2023-12-02', '0000-00-00', 2, '2023-12-02 09:06:38'),
(12, 'Eval_2023', 'Please rate Mo&amp;#x2019;s performance over CY2023													', 11, '2023-12-02', '0000-00-00', 2, '2023-12-02 09:07:00'),
(13, 'Eval_2023', 'Please rate Darwin&amp;#x2019;s performance over CY2023', 10, '2023-12-02', '0000-00-00', 2, '2023-12-02 09:09:10'),
(14, 'Eval_2023', 'Please rate Alexis&amp;#x2019;s performance over CY2023													', 9, '2023-12-02', '0000-00-00', 2, '2023-12-02 09:09:50'),
(15, 'Eval_2023', '													', 14, '2023-12-02', '0000-00-00', 2, '2023-12-02 09:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `task_progress`
--

CREATE TABLE `task_progress` (
  `id` int(11) NOT NULL,
  `task_id` int(30) NOT NULL,
  `progress` text NOT NULL,
  `is_complete` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=no,1=Yes',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task_progress`
--

INSERT INTO `task_progress` (`id`, `task_id`, `progress`, `is_complete`, `date_created`) VALUES
(1, 1, '&lt;p&gt;Sample Progress&lt;/p&gt;', 0, '2020-12-05 11:29:48'),
(2, 1, '&lt;p&gt;Sample Progress&lt;/p&gt;', 0, '2020-12-05 11:32:15'),
(3, 1, '&lt;p&gt;Sample 2&lt;/p&gt;', 0, '2020-12-05 11:34:18'),
(4, 1, 'asdasd', 0, '2020-12-05 11:34:31'),
(5, 1, '&lt;p&gt;complete&lt;/p&gt;', 1, '2020-12-05 11:54:13'),
(6, 3, '&lt;p&gt;Send to Supervisor&lt;/p&gt;', 1, '2023-11-15 19:08:00'),
(7, 4, '&lt;p&gt;e&lt;/p&gt;', 1, '2023-11-15 19:52:17'),
(8, 6, '&lt;p&gt;task complete&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 1, '2023-11-25 12:46:22'),
(9, 7, '&lt;p&gt;Please rate my 2023 performance&lt;/p&gt;', 1, '2023-12-02 09:21:55'),
(10, 15, '&lt;p&gt;Please rate my performance over CY2023&lt;br&gt;&lt;/p&gt;', 1, '2023-12-02 09:22:44'),
(11, 8, '&lt;p&gt;Please rate my performance over CY2023&lt;br&gt;&lt;/p&gt;', 1, '2023-12-02 09:23:23'),
(12, 9, '&lt;p&gt;Please rate my performance over CY2023&lt;br&gt;&lt;/p&gt;', 1, '2023-12-02 09:23:51'),
(13, 10, '&lt;p&gt;Please rate my performance over CY2023&lt;br&gt;&lt;/p&gt;', 1, '2023-12-02 09:24:20'),
(14, 12, '&lt;p&gt;Please rate my performance over CY2023&lt;br&gt;&lt;/p&gt;', 1, '2023-12-02 09:24:46'),
(15, 13, '&lt;p&gt;Please rate my performance over CY2023&lt;br&gt;&lt;/p&gt;', 1, '2023-12-02 09:25:21'),
(16, 11, '&lt;p&gt;Please rate my performance over CY2023&lt;/p&gt;', 1, '2023-12-02 10:59:32'),
(17, 14, '&lt;p&gt;Please rate my performance over CY2023&lt;/p&gt;', 1, '2023-12-02 11:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `avatar`, `date_created`) VALUES
(3, 'Ryan', 'Edmonds', 'redmonds2315@gmail.com', 'fd7b1d28840f3cfd881bbd9dd57abf26', '1701530460_Edmonds_Ryan_Web.jpg', '2023-10-28 13:10:03'),
(4, 'Betul', 'Czerkawski', 'bcozkan@arizona.edu', '21232f297a57a5a743894a0e4a801fc3', '1701530400_UA_Horizontal_RGB.png', '2023-12-02 08:20:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `command_list`
--
ALTER TABLE `command_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_list`
--
ALTER TABLE `department_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_list`
--
ALTER TABLE `designation_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_list`
--
ALTER TABLE `employee_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluator_list`
--
ALTER TABLE `evaluator_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_list`
--
ALTER TABLE `task_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_progress`
--
ALTER TABLE `task_progress`
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
-- AUTO_INCREMENT for table `command_list`
--
ALTER TABLE `command_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department_list`
--
ALTER TABLE `department_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `designation_list`
--
ALTER TABLE `designation_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_list`
--
ALTER TABLE `employee_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `evaluator_list`
--
ALTER TABLE `evaluator_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task_list`
--
ALTER TABLE `task_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `task_progress`
--
ALTER TABLE `task_progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
