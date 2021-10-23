-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 03:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sta_monica_concepcion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc_tbl`
--

CREATE TABLE `admin_acc_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_acc_tbl`
--

INSERT INTO `admin_acc_tbl` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

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
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'darvs', 'gloria', 'dulay', 'Tarlac', 192312321, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `announcement_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` varchar(100) NOT NULL,
  `posted_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement_tbl`
--

INSERT INTO `announcement_tbl` (`announcement_id`, `event_name`, `event_date`, `event_time`, `posted_by`) VALUES
(1, 'TRANSPARENT GOVERNANCE AND ACCOUNTABILITY IN THE FACE OF COVID-19', '2020-10-16', '9:00 AM TO 12:00 NN', 'darvs gloria'),
(2, 'STRENGTHENING THE LOCAL HEALTH SYSTEM', '2020-10-15', '9:00 AM TO 12:00 NN', 'darven gloria'),
(3, 'ENSURING CONTINUITY OF HEALTH SERVICE DELIVERY AMIDST PUBLIC HEALTH EMERGENCIES: HUMAN RESOURCES FOR HEALTH AND HEALTH FACILITIES', '2020-10-15', '1:00 PM TO 4:00 PM', 'darven gloria'),
(4, 'sadfsadfsdf', '2020-10-28', '11:00 AM', 'darvs gloria'),
(5, 'sadfsadfsdf', '2020-10-28', '11:00 AM', 'darvs gloria'),
(6, 'sadfsadfsdf', '2020-10-28', '11:00 AM', 'darvs gloria'),
(7, 'sadfsadfsdf', '2020-10-28', '11:00 AM', 'darvs gloria'),
(8, 'dfsadfasdf', '2020-10-28', '10:00 AM', 'darvs gloria'),
(9, 'dfsadfasdfsadf', '2020-10-29', '9:30 AM', 'darvs gloria'),
(10, 'adfasdfasdfasdfasdfsdafdsfsdfasdf', '2020-10-29', '9:30 AM', 'darvs gloria'),
(11, 'adfasdfasdfasdfasdfsdafdsfsdfasdf', '2020-10-29', '9:30 AM', 'darvs gloria'),
(12, 'asdfasd asdf asdf asdfh asdf lkjsadhf  asddf jh,  asdfljasd hfjklsd fsdaf', '2020-10-29', '9:30 AM', 'darvs gloria'),
(13, 'sd asdf asd fasdf asdgf asdf asdf hasdlkf sdf asd fasdilfg asd sdlhjgsd usdygfweerbyuisdfjasdbf lisdfh sdlaufgh asdfsdf', '2020-10-28', '10:00 AM', 'darvs gloria'),
(14, 'ssdfasdf asdf asdf sdf s asdf sad', '2020-10-29', '11:00 AM', 'darvs gloria'),
(15, 'asdfs asdf dasf asdf asd sdf sad asd fsdd asddf sd sdf ', '2020-10-29', '2:30 PM', 'darvs gloria'),
(16, 'asdfasdf', '2020-10-24', '2:30 PM', 'darvs gloria'),
(17, 'asdfasdff dsf asdf', '2020-11-06', '3:30 PM', 'darvs gloria'),
(18, 'asdfd asdf asdf ', '2020-10-28', '1:30 PM', 'darvs gloria'),
(19, 'asdfd asdf asdf  sadf asdf asdf ', '2020-10-28', '1:30 PM', 'darvs gloria'),
(20, 'asdfasd asdf sadf asdf asdf sadf sdaf asdf sdf ', '2020-10-29', '2:30 PM', 'darvs gloria'),
(21, 'asdfasdf asdf asdf asdf ', '2020-10-28', '3:30 PM', 'darvs gloria'),
(22, 'ftgdty ', '2020-10-30', '2:00 PM', 'darvs gloria'),
(23, 'fdsfsa adds fasdf sd', '2020-10-30', '3:00 PM', 'darvs gloria'),
(24, 'sadfasdf', '2020-11-25', '11:30 AM', 'darvs gloria'),
(25, 'fsdf af asf asf asf asdf', '2020-11-25', '11:30 AM', 'darvs gloria'),
(26, 'asfasdf f asdf asdf asdf', '2020-12-02', '10:30 AM', 'darvs gloria'),
(27, 'asfasdf f asdf asdf asdf', '2020-12-02', '10:30 AM', 'darvs gloria'),
(28, 'asfasdf f asdf asdf asdf', '2020-12-02', '10:30 AM', 'darvs gloria'),
(29, 'ZXcdsafdasf ', '2020-11-18', '4:00 PM', 'darvs gloria'),
(30, 'fdsfas df asdf sd', '2020-11-19', '2:00 PM', 'darvs gloria'),
(31, 'asdfsdf asdf sdfsad', '2020-11-26', '11:30 AM', 'darvs gloria'),
(32, 'faasdfasd fasdf dsafasdf sdf asdf asdf', '2020-11-30', '1:30 PM', 'darvs gloria'),
(33, 'asdfasdf asdf asdf sd', '2020-11-24', '1:00 PM', 'darvs gloria'),
(34, 'asdfasdf asdf dsfasdf sadf sdf ', '2020-11-30', '2:00 PM', 'darvs gloria'),
(35, 'asdf asdf asdf asdf sdf asdf', '2020-11-30', '2:00 PM', 'darvs gloria'),
(36, 'sadfasdf asdf asf asdf adsf asd', '2020-11-30', '2:00 PM', 'darvs gloria'),
(37, 'fgfdfsg dsfg sdfg sdfg sdfgdfg dsfgsdfg', '2020-11-27', '11:00 AM', 'darvs gloria'),
(38, 'ffasdfsadfasdfsdf', '2020-11-30', '1:00 PM', 'darvs gloria');

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
(1, 'Dental Check up', '2020-10-07', '10:30 AM', '4:00 PM', 30),
(2, 'Dental Check up', '2020-10-22', '11:30 AM', '4:00 PM', 60),
(3, 'Medical Check-up', '2020-10-29', '1:00 PM', '4:30 PM', 60),
(4, 'Children Medical Check-up', '2020-10-30', '1:00 PM', '3:00 PM', 30),
(5, 'Maternity  Check-up', '2020-10-29', '9:00 AM', '3:00 PM', 60),
(6, 'sadfasd asdf asdf asdfasdf', '2020-10-29', '10:00 AM', '1:30 PM', 60),
(7, 'sdafasd asdf asdf sadf asdf sadf ', '2020-10-29', '11:00 AM', '1:00 PM', 60),
(8, 'sdfsadf sadf asd sda ffasdf sdf ', '2020-10-29', '1:00 PM', '2:00 PM', 60),
(9, 'fasdfasdf', '2020-11-05', '1:00 PM', '2:00 PM', 60),
(10, 'asdfsafd asf asdf ', '2020-10-29', '2:30 PM', '3:30 PM', 60),
(11, 'Medical Check-up', '2020-10-29', '9:30 AM', '3:00 PM', 60),
(12, 'fasDAS', '2020-10-28', '2:00 PM', '2:30 PM', 60),
(13, 'dfsadfsadfsad', '2020-11-25', '10:00 AM', '3:00 PM', 30),
(14, 'asdfsdfasdf', '2020-11-25', '11:00 AM', '3:30 PM', 60);

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
(18, 3, 14, 'Mareve', 'D.', 'Gloria', '312312312', '2020-11-30 00:09:11', '01:00 pm - 02:00 pm'),
(19, 2, 14, 'Darven', '', 'Gloria', '09478070065', '2020-11-30 00:41:29', '02:00 PM - 03:00 PM'),
(20, 2, 13, 'Darven', '', 'Gloria', '09478070065', '2020-11-30 00:41:42', '12:00 PM - 12:30 PM'),
(21, 2, 12, 'Darven', '', 'Gloria', '09478070065', '2020-11-30 00:41:46', '02:00 PM - 03:00 PM'),
(22, 2, 8, 'Darven', '', 'Gloria', '09478070065', '2020-11-30 00:41:49', '01:00 PM - 02:00 PM'),
(23, 2, 6, 'Darven', '', 'Gloria', '09478070065', '2020-11-30 00:41:53', '11:00 AM - 12:00 PM'),
(24, 2, 11, 'Darven', '', 'Gloria', '09478070065', '2020-11-30 00:42:15', '12:30 PM - 01:30 PM');

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
(7, 'asf', 'fasdfasdfasdfasdf'),
(8, 'sadfasdf', 'asdf asdf asdf asdf asdfsdaf'),
(9, 'sdafasdf sadf sadf', 'sdf sdaf sadf asdf asdfasdfsadf');

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
(85, 'ewcvCB8Y7_0:APA91bF3S1QrbF536lEyQ4kTEgyMVNaKMdQ_21s3j3FHzfYlzX5-yaVxrKKkdUXWw6ZPhEl0tHbDhLIgnjjivYt6OYTwBRfnGxhxI18_hF9EkwbdtR4BDjmjKYbxA2cp74uOONCng1iU'),
(86, 'fOecVYuaDWg:APA91bFSw2iXMblKM0x4PgTNo_7jEOEXAxsNDRsojRxqXKdv787136GlSTtXK1DKHbk9nOH9Zlco0Ba_bAdkrkwX_GJnDBgp1oeQIA0bhlLvUQ-ALGfdSa3CQo83uG9iQJKIPbZPEYTH'),
(87, 'cjFqq0MHlBM:APA91bHzmBeoiCnuqVZldt1C300dFBAYXSlq7-_FjDUoLOZWaAKiQFGo1_Qj5-hAQ843eAS_s4h1Knd91EAfM_eh3ItITEjyMPpCQd_2-7MM3DSn4Q77fxAqBiq1_h-6aJty8stINuBG');

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
  `cont_number` varchar(15) NOT NULL,
  `profile` varchar(500) DEFAULT 'contacts.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_information_tbl`
--

INSERT INTO `user_information_tbl` (`id`, `username`, `password`, `first_name`, `last_name`, `middle_name`, `dob`, `address`, `cont_number`, `profile`) VALUES
(2, 'darvs', 'ee11cbb19052e40b07aac0ca060c23ee', 'Darven', 'Gloria', '', '1999-06-16', 'sdaf asdf asdfs', '09478070065', 'contacts.png'),
(3, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Mareve', 'Gloria', 'D.', '2020-09-28', 'Unit 17 4-3 Urbano St. Bagbag', '312312312', 'contacts.png'),
(4, 'localhost', 'ee11cbb19052e40b07aac0ca060c23ee', 'asdf', 'fasfd', 'asdf', '2020-11-13', 'asdfasdfsdaf asdf asdf', '0969465545', 'contacts.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_registration_tbl`
--
ALTER TABLE `admin_registration_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `appointment_reg_tbl`
--
ALTER TABLE `appointment_reg_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pendinguser`
--
ALTER TABLE `pendinguser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_key`
--
ALTER TABLE `registration_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `user_accounts_tbl`
--
ALTER TABLE `user_accounts_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_information_tbl`
--
ALTER TABLE `user_information_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
