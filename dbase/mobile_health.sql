-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 03:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc_tbl`
--

CREATE TABLE `admin_acc_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_acc_tbl`
--

INSERT INTO `admin_acc_tbl` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a74389'),
(2, 'user', '5725dbcc7254ee8422d1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration_tbl`
--

CREATE TABLE `admin_registration_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mid_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `cont_number` int(15) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_registration_tbl`
--

INSERT INTO `admin_registration_tbl` (`id`, `username`, `password`, `first_name`, `last_name`, `mid_name`, `address`, `cont_number`, `position`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin', 'admin', 2147483647, 'admin'),
(2, 'user', '5725dbcc7254ee8422d1cb60db29625c', 'user', 'user', 'midname', 'tarlac city', 2147483647, 'test user');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `announcement_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` varchar(100) NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `announcement_location` varchar(255) NOT NULL,
  `announcement_image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_tbl`
--

INSERT INTO `announcement_tbl` (`announcement_id`, `event_name`, `event_date`, `event_time`, `posted_by`, `announcement_location`, `announcement_image`) VALUES
(27, 'test 1', '2021-11-26', '9:30 AM', 'admin admin', 'test location', 'contacts.png'),
(28, 'test 2', '2021-11-25', '9:30 AM', 'admin admin', 'test 2 location\r\n', '1000012.jpg'),
(29, 'test 3', '2021-11-24', '3:30 PM', 'admin admin', 'test 3 location', '1965448.jpg'),
(30, 'test 4', '2021-11-25', '4:30 PM', 'admin admin', 'test 4', '360_F_338872547_NOIssTh7bxVLwYKbiUDpgEdE2NzcJF7X.jpg'),
(31, 'test 5', '2021-11-26', '9:30 AM', 'admin admin', 'test 5 location', 'contacts.png'),
(32, 'test 6', '2021-12-02', '1:30 PM', 'admin admin', 'test 6 location', '1965448.jpg'),
(33, 'test 7', '2021-11-26', '11:00 AM', 'admin admin', 'test 7\r\n', 'GrgQ7hVm.gif'),
(34, 'test 8', '2021-11-26', '10:30 AM', 'admin admin', 'test 8 location', 'r.png');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `appointment_name` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` varchar(20) NOT NULL,
  `appointment_end` varchar(100) NOT NULL,
  `appointment_interval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `appointment_name`, `appointment_date`, `appointment_time`, `appointment_end`, `appointment_interval`) VALUES
(1, 'Dental Check up', '2020-10-07', '10:30 AM', '4:00 PM', 0),
(2, 'Dental Check up', '2020-10-22', '11:30 AM', '4:00 PM', 0),
(3, 'Medical Check-up', '2020-10-29', '1:00 PM', '4:30 PM', 0),
(4, 'Children Medical Check-up', '2020-10-30', '1:00 PM', '3:00 PM', 0),
(5, 'Maternity  Check-up', '2020-10-29', '9:00 AM', '3:00 PM', 0),
(6, 'sadfasd asdf asdf asdfasdf', '2020-10-29', '10:00 AM', '1:30 PM', 0),
(7, 'sdafasd asdf asdf sadf asdf sadf ', '2020-10-29', '11:00 AM', '1:00 PM', 0),
(8, 'sdfsadf sadf asd sda ffasdf sdf ', '2020-10-29', '1:00 PM', '2:00 PM', 0),
(9, 'fasdfasdf', '2020-11-05', '1:00 PM', '2:00 PM', 0),
(10, 'asdfsafd asf asdf ', '2020-10-29', '2:30 PM', '3:30 PM', 0),
(11, 'Medical Check-up', '2020-10-29', '9:30 AM', '3:00 PM', 0),
(12, 'fasDAS', '2020-10-28', '2:00 PM', '2:30 PM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_reg_tbl`
--

CREATE TABLE `appointment_reg_tbl` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `time_interval` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_reg_tbl`
--

INSERT INTO `appointment_reg_tbl` (`id`, `user_id`, `appointment_id`, `firstname`, `middlename`, `lastname`, `contact`, `timestamp`, `time_interval`) VALUES
(1, 2, 1, 'Darven', '', 'Gloria', '2147483647', '2020-10-07 02:18:51', ''),
(2, 2, 2, 'Darven', '', 'Gloria', '2147483647', '2020-10-19 09:08:22', ''),
(3, 2, 3, 'Darven', '', 'Gloria', '2147483647', '2020-10-19 13:54:13', ''),
(4, 2, 4, 'Darven', '', 'Gloria', '2147483647', '2020-10-19 13:57:45', ''),
(5, 2, 5, 'Darven', '', 'Gloria', '2147483647', '2020-10-19 14:32:02', ''),
(6, 2, 8, 'Darven', '', 'Gloria', '2147483647', '2020-10-19 20:09:52', ''),
(7, 2, 7, 'Darven', '', 'Gloria', '2147483647', '2020-10-19 20:14:20', ''),
(8, 2, 9, 'Darven', '', 'Gloria', '2147483647', '2020-10-21 11:57:54', ''),
(9, 2, 11, 'Darven', '', 'Gloria', '2147483647', '2020-10-21 11:59:22', ''),
(10, 3, 11, 'Mareve', 'D.', 'Gloria', '312312312', '2020-10-21 12:02:23', ''),
(11, 3, 2, 'Mareve', 'D.', 'Gloria', '312312312', '2020-10-21 12:02:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification_tbl`
--

CREATE TABLE `notification_tbl` (
  `notification_id` int(11) NOT NULL,
  `reminder_name` varchar(255) NOT NULL,
  `reminder_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification_tbl`
--

INSERT INTO `notification_tbl` (`notification_id`, `reminder_name`, `reminder_content`) VALUES
(1, 'COVID-19', 'Total Active Cases 47,546'),
(2, 'asdsdfasdf asd', 'f  asdfas dfasd fsd asdf asdf sadfsd af'),
(3, 'fasdf asdf asdf asdf asdf', ' sdfasdf asdf sadf sadf asdf asdf sadf asdfasdf'),
(4, 'sdfsdfsd', 'fsdfsdaf sdaf sdaf sadf asdf asdf asdf asdf asdf asdf sddf asd'),
(5, 'asfasdf asdf asdfsdfasdf sdffss sdf', 'sdafsd sdf asd fsa'),
(6, 'asdfasd', 'f asdf asdf sdf sdaf asdf'),
(7, 'asf', 'fasdfasdfasdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `pendinguser`
--

CREATE TABLE `pendinguser` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cont_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendinguser`
--

INSERT INTO `pendinguser` (`id`, `username`, `password`, `first_name`, `last_name`, `middle_name`, `dob`, `address`, `cont_number`) VALUES
(12, 'admin', '3698561c3306c8c1f8e36356a104c622', 'admin', 'admin', 'admin', '1998-10-04', 'tarlac city', '09667615561');

-- --------------------------------------------------------

--
-- Table structure for table `registration_key`
--

CREATE TABLE `registration_key` (
  `id` int(11) NOT NULL,
  `mobile_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_key`
--

INSERT INTO `registration_key` (`id`, `mobile_key`) VALUES
(31, 'cONstTCxdDA:APA91bGPZoO_r8_sMce0p5KVLMjkp_XcdkN7bO0u_ss1tRrfz_yrcs0YLKhIV4TdBwpuROCfdvFlZrx5rBNW-wRy1Pju3sO2_7remz_GAWaC4JSWha55q8Pn-1S0fYRK2ww6vxksvzgA'),
(32, 'e6sbNsTtOVs:APA91bEq6m1pDqgdoBrAOKMPDNNq-OV_snr-stps_RqajgYmY6VQ1R7TKxoFcPMaO7NMJE0amFvrX32gzx9XrAPkfZsn0VEO47e4NTU8PVzfPioMdmMBz9xdc_sVTfzncntyD9LKhKYI');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts_tbl`
--

CREATE TABLE `user_accounts_tbl` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_information_tbl`
--

CREATE TABLE `user_information_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `cont_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information_tbl`
--

INSERT INTO `user_information_tbl` (`id`, `username`, `password`, `first_name`, `last_name`, `middle_name`, `dob`, `address`, `cont_number`) VALUES
(2, 'darvs', '1b3231655cebb7a1f783eddf27d254ca', 'Darven', 'Gloria', '', '1999-06-16', '#18 Sinforosa Street Unit f', '2147483647'),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Mareve', 'Gloria', 'D.', '2020-09-28', 'Unit 17 4-3 Urbano St. Bagbag', '312312312'),
(17, 'student', 'b0becd27dd9c337b84d793f1059d1aca', 'student', 'student', 'student', '2001-01-01', 'tarlac city tarlac', '0930081765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc_tbl`
--
ALTER TABLE `admin_acc_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_registration_tbl`
--
ALTER TABLE `admin_registration_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `appointment_reg_tbl`
--
ALTER TABLE `appointment_reg_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `pendinguser`
--
ALTER TABLE `pendinguser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_key`
--
ALTER TABLE `registration_key`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_accounts_tbl`
--
ALTER TABLE `user_accounts_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_information_tbl`
--
ALTER TABLE `user_information_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc_tbl`
--
ALTER TABLE `admin_acc_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_registration_tbl`
--
ALTER TABLE `admin_registration_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `appointment_reg_tbl`
--
ALTER TABLE `appointment_reg_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pendinguser`
--
ALTER TABLE `pendinguser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration_key`
--
ALTER TABLE `registration_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_accounts_tbl`
--
ALTER TABLE `user_accounts_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_information_tbl`
--
ALTER TABLE `user_information_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
