-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 05:14 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fl_paperpoint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` text DEFAULT NULL,
  `imei_no` varchar(20) NOT NULL,
  `token` varchar(255) NOT NULL,
  `forgot_token` varchar(255) DEFAULT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'USER',
  `profession` varchar(20) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`_id`, `name`, `fname`, `lname`, `email`, `phone`, `password`, `profile_pic`, `imei_no`, `token`, `forgot_token`, `role`, `profession`, `institute`, `otp`, `status`, `created_at`) VALUES
(1, 'Mayur Sojitra', NULL, NULL, 'mayurxcsd@gmail.com', '901672710', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '232134234', '33bcc3743a839d37ead94e413e9e7848', 'c2c2d0ef41cfdf7c939174d4a90e7335', 'ADMIN', '', '', '', 0, '2019-01-06 07:10:19'),
(20, 'Mayur SojitraS', 'Mayur', 'Sojitra', 'mayur543sd@gmail.com', '901672719', '827ccb0eea8a706c4c34a16891f84e7b', 'no-image.jpg', '232134234', 'f85621c1aebab0d0640d3662bfbb3760', '', 'USER', 'teacher', 'AITS', '', 0, '2019-08-28 14:49:45'),
(29, 'nirmal Ardeshna', 'nirmal', 'Ardeshna', 'nirmal@gmail.com', '9979608021', 'e10adc3949ba59abbe56e057f20f883e', 'YNcnnYUitJ-lrm_export_431780473653868_20190901_212915203.jpeg', '357192104726967', '3b34e181e2ea22f2bdbcc660a0697fdb', NULL, 'USER', 'STUDENT', 'STUDENT', '123456', 1, '2019-09-04 16:49:33'),
(30, 'JUNE APRIL', 'JUNE', 'APRIL', 'june@gmail.com', '123456789', 'e10adc3949ba59abbe56e057f20f883e', 'no-image.jpg', '000000000000000', '02353f476d5d99ffbbc5ef0f1b499332', NULL, 'USER', 'TEACHER', 'NEW', '123456', 0, '2019-09-09 06:01:22'),
(31, 'vin', 'dgh', 'dfgh', 'vin@me.com', '89565', 'fb62579e990da4e2a8f15c3d1e123438', 'no-image.jpg', '000000000000000', '61ff6827271acd7e764052a9e4ad0a71', NULL, 'USER', 'STUDENT', 'NA', '123456', 0, '2019-09-09 06:20:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
