-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 02:08 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluebus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` text NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `password` varchar(250) NOT NULL,
  `profile_picture` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `user_type` int(25) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `mobile_no`, `password`, `profile_picture`, `status`, `user_type`) VALUES
(1, 'admin', 'admin@gmail.com', '9712703191', '$2y$10$tONBBrb0M8qzktQtayHFKe36Ui6h0QRaRJ/DY.9TqkkbOPvuqv1ha', 'images/admin-profile/admin_WYbNA.jpg', '1', 1),
(2, 'jjj', 'jjjjj@gmail.com', '8888888888', '00000000', 'images/admin-profile/_LWOKvgxZFu.JPG', '0', 1),
(4, 'llll', 'mayur@gmail.com', '9999999999', 'ggggggggg', 'images/admin-profile/_ofJgcmqHhd.JPG', '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `profile_picture` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT '1',
  `created_by` varchar(250) NOT NULL,
  `remember_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `email`, `username`, `first_name`, `last_name`, `password`, `mobile_no`, `company_name`, `address`, `city`, `country`, `profile_picture`, `status`, `created_by`, `remember_token`) VALUES
(1, 'agent@gmail.com', 'agent', 'Agent', 'Demo', '$2y$10$BVYhV8bAAjo7KImGpVNN6.3i8sUPvL7hYBdiWOpVnYXeQxu/STB1W', '999117871', 'Bakti Traveles', '305, Amora arcad ', 'Surat', 'india', 'agent/images/agent-profile/agent_Rye5a.jpg', '1', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(250) NOT NULL,
  `amenities` varchar(250) NOT NULL,
  `status` int(250) NOT NULL DEFAULT 1,
  `image` varchar(200) NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenities`, `status`, `image`, `created_by`) VALUES
(1, 'WIfi', 0, 'admin/images/amenities/WIFi.JPG', ''),
(2, 'Water Bottle', 1, '', ''),
(3, 'Blankets', 1, '', ''),
(4, 'Snacks', 1, '', ''),
(5, 'Charging Point', 1, '', ''),
(6, 'Movie', 1, '', ''),
(7, 'Reading Light', 0, '', ''),
(9, 'Personal TV', 1, '', ''),
(10, 'Track My Bus', 1, '', ''),
(11, 'Emergency exit', 1, '', ''),
(12, 'Fire Extinguisher', 0, '', ''),
(13, 'Hammer (to break glass)', 0, '', ''),
(14, 'Emergency Contact Number', 0, '', ''),
(15, 'jaja', 0, 'admin/images/amenities/jaja.png', ''),
(16, 'jaj', 1, 'admin/images/amenities/jaj.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(40) NOT NULL,
  `block_name` text NOT NULL,
  `blog_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `block_name`, `blog_content`) VALUES
(1, 'Routs&Operators&TicketsSold ', '<div class=\"clm-1\">\r\n<div class=\"container\">\r\n<div class=\"secssion3\">\r\n<div class=\"row\">\r\n<div class=\"col-md-3\"><br class=\"head-ourcities1\" />\r\n<h3 class=\"head-sec3\"><img src=\"#s#/assets/images/quality.png\" alt=\"\" /> <span class=\"tb_operator1\">67000 <small class=\"smalls\">ROUTES<br /></small></span></h3>\r\n<div class=\"tb_list_offer\">\r\n<div class=\"ofer_list\">UPTO RS.100 OFF</div>\r\n<div class=\"ofer_list_bold\">TRAVEL SMART</div>\r\n<div class=\"ofer_list_normal\">Code:RBM120</div>\r\n<div class=\"ofer_list_normal\">Book Using Pay Money</div>\r\n</div>\r\n</div>\r\n<div class=\"col-md-3\">\r\n<h3 class=\"head-sec3\"><img src=\"#s#/assets/images/reliability.png\" alt=\"\" /> <span class=\"tb_operator2\">1800<small class=\"smalls\"> BUS OPERATORS</small></span></h3>\r\n<div class=\"ofer_list\">UPTO 70% OFF</div>\r\n<div class=\"ofer_list_bold\">ON HOTELS ACROSS INDIA</div>\r\n<div class=\"ofer_list_normal\">Offer Code:RBRTM120</div>\r\n<div class=\"ofer_list_normal\">&nbsp;</div>\r\n<div class=\"ofer_list_normal\">\r\n<div class=\"col-md-3\">\r\n<h3 class=\"head-sec3\"><img src=\"#s#/assets/images/quality.png\" alt=\"\" /> <span class=\"tb_operator3\">6,00,000 + <small class=\"smalls\">TICKETS SOLD</small></span></h3>\r\n<div class=\"tb_list_offer\">&nbsp;&nbsp; FLAT Rs.100 OFF\r\n<div class=\"ofer_list_bold left\">&nbsp;&nbsp; red Bus APP OFFER</div>\r\n<div class=\"ofer_list_normal\">&nbsp;&nbsp; book via the redBUS APP</div>\r\n<div class=\"ofer_list_normal\">&nbsp;&nbsp; Code:ERHH54</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"right-section\">&nbsp;</div>\r\n<div class=\"right-section\">\r\n<h4 class=\"tb_head\">Top Bus Routers</h4>\r\n<ul class=\"clm4-list\">\r\n<li>\r\n<p class=\"headlist-para\"><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Bangalore</a></p>\r\n</li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Pune to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Chennai</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Coimbatore to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Chennai to Madurai</a></li>\r\n</ul>\r\n<div class=\"right-section\">\r\n<h4 class=\"tb_head\">Top Cities</h4>\r\n<ul class=\"clm4-list\">\r\n<li>\r\n<p class=\"headlist-para\"><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Bangalore</a></p>\r\n</li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Pune to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Chennai</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Coimbatore to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Chennai to Madurai</a></li>\r\n</ul>\r\n<h4 class=\"tb_head\">Top Bus Operators</h4>\r\n<ul class=\"clm4-list\">\r\n<li>\r\n<p class=\"headlist-para\"><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Bangalore</a></p>\r\n</li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Pune to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Hyderabad to Chennai</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Coimbatore to Bangalore </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Chennai to Madurai</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>'),
(2, 'footer ', '<div class=\"clm-4\">\r\n<div class=\"container\">\r\n<div class=\"secssion6\">\r\n<div class=\"row\">\r\n<div class=\"col-md-9\">\r\n<h3 class=\"head-ourcities2\">Follow Us</h3>\r\n<ul class=\"clm4-list\">\r\n<li>\r\n<p class=\"headlist-para\"><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">About TrueBus</a></p>\r\n</li>\r\n<li>FAQ</li>\r\n<li>Careers</li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">TrueBus Coupons</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Contact Us </a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Terms of Use</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">Privacy Policy &nbsp;</a></li>\r\n<li><a href=\"/shibila/true-bus/CI-admin-structure-adminLTE/\">TrueBus on Mobilenew</a></li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>'),
(3, 'Banner Image', '<p>assets/images/images/banner-inner.png</p>');

-- --------------------------------------------------------

--
-- Table structure for table `board_points`
--

CREATE TABLE `board_points` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `route_id` int(200) NOT NULL,
  `board_point` int(11) NOT NULL,
  `pickup_point` varchar(20) NOT NULL,
  `pickup_time` varchar(20) NOT NULL,
  `landmark` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` int(200) NOT NULL DEFAULT 1,
  `created_id` int(11) NOT NULL,
  `created_by` varchar(11) NOT NULL,
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board_points`
--

INSERT INTO `board_points` (`id`, `bus_id`, `route_id`, `board_point`, `pickup_point`, `pickup_time`, `landmark`, `address`, `status`, `created_id`, `created_by`, `updated_by`) VALUES
(1, 1, 5, 1, 'Nana Varachha', '19:30', 'sdklf', 'skldvsd', 1, 0, '0', ''),
(3, 2, 4, 2, 'surat', '19:30', 'gujarat', '302,B-8,opera royal, kamrej', 1, 1, 'vendor', ''),
(4, 3, 3, 3, 'Surat', '19:30', 'sdklf', 'skldvsd', 1, 0, '0', ''),
(5, 4, 4, 4, 'surat', '19:30', 'gujarat', '302,B-8,opera royal, kamrej', 1, 1, 'vendor', ''),
(6, 5, 5, 5, 'Surat', '19:30', 'sdklf', 'skldvsd', 1, 0, '0', ''),
(7, 7, 8, 7, 'surat', '19:30', 'gujarat', '302,B-8,opera royal, kamrej', 1, 1, 'vendor', ''),
(8, 1, 11, 8, 'Surat', '19:30', 'sdklf', 'skldvsd', 1, 0, '0', ''),
(9, 1, 11, 9, 'surat', '19:30', 'gujarat', '302,B-8,opera royal, kamrej', 1, 1, 'vendor', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL,
  `booking_id` varchar(7) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `bus_id` int(250) NOT NULL,
  `route_id` int(250) NOT NULL,
  `boarding_point_id` varchar(250) NOT NULL,
  `drop_point_id` int(200) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `seat_no` varchar(250) NOT NULL,
  `payment_status` varchar(250) NOT NULL,
  `payment_option` varchar(251) NOT NULL,
  `booking_date` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `amount`, `bus_id`, `route_id`, `boarding_point_id`, `drop_point_id`, `user_id`, `seat_no`, `payment_status`, `payment_option`, `booking_date`, `status`, `created_by`) VALUES
(1, '#66416', '9090', 1, 11, '8', 5, '1', '90', '1', 'COD', '11', '1', 'admin'),
(2, '#50948', '9090', 1, 11, '8', 5, '1', '90', '1', 'COD', '11', '1', 'admin'),
(3, '#48692', '9090', 1, 11, '8', 5, '1', '90', '1', 'COD', '11', '1', 'admin'),
(4, '#95873', '800', 1, 11, '8', 5, '1', '18', '1', 'COD', '11', '1', 'admin'),
(5, '#11165', '90', 2, 4, '3', 2, '1', '90', '1', 'COD', '4', '1', 'admin'),
(6, '#14263', '900', 1, 11, '8', 5, '1', '9', '1', 'COD', '23-01-2020', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_bus`
--

CREATE TABLE `book_bus` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `book_date` datetime NOT NULL DEFAULT current_timestamp(),
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_bus`
--

INSERT INTO `book_bus` (`id`, `bus_id`, `user_id`, `book_date`, `amount`, `status`) VALUES
(1, 101, 'usr_001', '2016-04-25 14:22:29', '5000.00', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(20) NOT NULL,
  `bus_type_id` int(11) NOT NULL,
  `amenities_id` varchar(250) NOT NULL,
  `bus_reg_no` varchar(20) NOT NULL,
  `max_seats` int(11) NOT NULL,
  `board_point` varchar(250) NOT NULL,
  `board_time` varchar(20) NOT NULL,
  `drop_point` varchar(20) NOT NULL,
  `drop_time` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `bus_status` int(200) NOT NULL DEFAULT 1,
  `created_id` int(11) NOT NULL,
  `created_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_name`, `bus_type_id`, `amenities_id`, `bus_reg_no`, `max_seats`, `board_point`, `board_time`, `drop_point`, `drop_time`, `status`, `bus_status`, `created_id`, `created_by`) VALUES
(1, 'Anumool', 3, '4,6,9', 'GJ-03-sd-2233', 30, 'Surat', '22:30', 'Rajkot', '10:45', 1, 1, 0, 'admin'),
(2, 'Kabara', 2, '2,5,9', 'GJ-18-kh-1232', 38, 'Surat', '23:00', 'Ahmedabad', '05:00', 0, 1, 0, 'admin'),
(5, 'Anumool', 3, '4,6,9', 'GJ-03-sd-2233', 30, 'Ahmedabad', '22:30', 'Rajkot', '10:45', 1, 1, 0, 'admin'),
(6, 'Raj', 2, '2,5,9', 'GJ-18-kh-1232', 38, 'Surat', '23:00', 'Ahmedabad', '05:00', 1, 1, 0, 'admin'),
(7, 'Ajay', 3, '4,6,9', 'GJ-03-sd-2233', 30, 'Surat', '22:30', 'Rajkot', '10:45', 1, 1, 0, 'admin'),
(8, 'Vijay', 3, '4,6,9', 'GJ-03-sd-2233', 30, 'Ahmedabad', '22:30', 'Rajkot', '10:45', 1, 1, 0, 'admin'),
(9, 'Kabara', 2, '2,5,9', 'GJ-18-kh-1232', 38, 'Surat', '23:00', 'Ahmedabad', '05:00', 1, 1, 0, 'admin'),
(10, 'Raj', 2, '2,5,9', 'GJ-18-kh-1232', 38, 'Surat', '23:00', 'Ahmedabad', '05:00', 1, 1, 0, 'admin'),
(11, 'Anumool', 3, '4,6,9', 'GJ-03-sd-2233', 30, 'Surat', '22:30', 'Rajkot', '10:45', 1, 1, 0, 'admin'),
(12, 'Anumool', 3, '4,6,9', 'GJ-03-sd-2233', 30, 'Ahmedabad', '22:30', 'Rajkot', '10:45', 1, 1, 0, 'admin'),
(13, 'Ajay', 3, '4,6,9', 'GJ-03-sd-2233', 30, 'Surat', '22:30', 'Rajkot', '10:45', 1, 1, 0, 'admin'),
(14, 'Vijay', 3, '4,6,9', 'GJ-03-sd-2233', 30, 'Ahmedabad', '22:30', 'Rajkot', '10:45', 1, 1, 0, 'admin'),
(15, 'Riddhi', 1, '5,9', '#51321', 30, 'Suart', '19:30', 'Ankleshwer', '08:45', 1, 1, 1, 'vendor'),
(16, 'Mariti', 1, '6', '#51321', 30, 'surat', '19:30', 'kamrej', '08:45', 1, 1, 1, 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `bus_gallery`
--

CREATE TABLE `bus_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(750) NOT NULL,
  `user_id` int(250) NOT NULL,
  `bus_id` int(250) NOT NULL,
  `created_id` int(11) NOT NULL,
  `created_by` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_gallery`
--

INSERT INTO `bus_gallery` (`id`, `image`, `user_id`, `bus_id`, `created_id`, `created_by`) VALUES
(1, 'admin/images/bus-image/1_gVaHo.jpg', 1, 1, 0, ''),
(3, 'vendor/images/bus-image/1_uQi2P.gif', 1, 1, 0, ''),
(4, 'vendor/images/bus-image/16_uLr3S.png', 1, 16, 1, 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `bus_type`
--

CREATE TABLE `bus_type` (
  `id` int(11) NOT NULL,
  `bus_type` varchar(20) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_type`
--

INSERT INTO `bus_type` (`id`, `bus_type`, `status`) VALUES
(1, 'AC', '1'),
(2, 'Non AC', '1'),
(3, 'Sleeper', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

CREATE TABLE `cancellation` (
  `id` int(11) NOT NULL,
  `bus_id` varchar(11) NOT NULL,
  `advertisement_status` int(250) NOT NULL,
  `cancel_time` varchar(250) NOT NULL,
  `percentage` varchar(11) NOT NULL,
  `flat` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancellation`
--

INSERT INTO `cancellation` (`id`, `bus_id`, `advertisement_status`, `cancel_time`, `percentage`, `flat`, `type`) VALUES
(1, '1', 1, '19:30', '100', '100', 'flat');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `booking_id` varchar(250) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `seat_no` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `customer_name`, `age`, `mobile`, `email`, `gender`, `booking_id`, `order_id`, `seat_no`) VALUES
(129, 'manu', '24', '1234567890', 'shsjd@hsdu.gdf', 'male', 'TRB1468559520', '53', 'A8'),
(130, 'manu', '24', '1234567890', 'shsjd@hsdu.gdf', 'male', 'TRB1468559520', '54', 'A4'),
(131, 'erty', '23', 'TRB1468559554-55', 'shibilabs23@gmail.com', 'male', 'TRB1468559554-55', '55', 'A8'),
(132, 'erty', '23', '1234567890', 'df@fgf.gh', 'male', 'TRB1468559554', '56', 'A4'),
(133, 'hjh', '12', '13457890767', 'vbv!fh@fg.hj', 'male', 'TRB1468563980', '57', 'C7'),
(134, 'hjh', '56', '13457890767', 'vbv!fh@fg.hj', 'male', 'TRB1468563980', '57', 'D7'),
(135, 'hjh', '12', '13457890767', 'vbv!fh@fg.hj', 'male', 'TRB1468563980', '58', 'C4'),
(136, 'hjh', '56', '13457890767', 'vbv!fh@fg.hj', 'male', 'TRB1468563980', '58', 'D3'),
(137, 'shh', '23', '1234567890', 'hgh@GH.U', 'female', 'TRB1468657011', '59', 'C3'),
(138, 'dfg', '23', '1234567890', 'hgh@GH.U', 'female', 'TRB1468657011', '59', 'C4'),
(139, 'ER', '34', '1234567890', 'HG@GH.YH', 'female', 'TRB1468657203', '60', 'C3'),
(140, 'GFG', '54', '1234567890', 'HG@GH.YH', 'female', 'TRB1468657203', '60', 'C4'),
(141, 'VB', '3', '1234567890', 'BNB@RY.H', 'male', 'TRB1468657251', '61', 'C3'),
(142, 'ER', '3', '1234567890', 'BNB@RY.H', 'male', 'TRB1468657251', '61', 'C4'),
(143, 'gfg', '343', '1234567890', 'jh@ty.th', 'male', 'TRB1468657350', '62', 'C3'),
(144, 'ef', '3', '1234567890', 'jh@ty.th', 'male', 'TRB1468657350', '62', 'C4'),
(145, 'rtr', '4', '1234567890', 'kl@rt.hg', 'male', 'TRB1468657385', '63', 'C3'),
(146, 're', '5', '1234567890', 'kl@rt.hg', 'male', 'TRB1468657385', '63', 'C4'),
(147, 'werc', '243', '1234567890', 'v@rj.ghg', 'male', 'TRB1468657486', '64', 'C3'),
(148, 'ty', '4', '1234567890', 'v@rj.ghg', 'male', 'TRB1468657486', '64', 'C4'),
(149, 'ty', '5', '1234567890', 'vg@hj.g', 'male', 'TRB1468657742', '65', 'C3'),
(150, 'f', '5', '1234567890', 'vg@hj.g', 'male', 'TRB1468657742', '65', 'C4'),
(151, 'ty', '3', '1234567890', 'df@fg.yh', 'male', 'TRB1468657841', '66', 'D4'),
(152, 're', '4', '0987654321', 'cv@ghj.tr', 'male', 'TRB1468657894', '67', 'D4'),
(153, 't', '4', '1323243434343', 'fg@t.yu', 'male', 'TRB1468657997', '68', 'D4'),
(154, 'yu', '66', '1234567890', 'fg@tgh.gh', 'male', 'TRB1468658140', '69', 'D4'),
(155, 't', '4', '1234567890', 'downloaddf@gh.g', 'male', 'TRB1468658271', '70', 'D4'),
(156, 'Ragunathan', '24', '9979798556', 'ragu1991nathan@gmail.com', 'male', 'TRB1468839488', '71', 'C8'),
(157, 'ragunathan', '25', '95260855456', 'ragu1991nathan@gmail.com', 'male', 'TRB1468839741', '72', 'C9'),
(158, 'ragunathah', '24', '3243433', 'ragu@gmail.com', 'male', 'TRB1468839874', '73', 'C8'),
(159, 'r', '23', '1234567890', 'vbv@ghg.gh', 'male', 'TRB1468840107', '74', 'C8'),
(160, 'fdf', '34', '1234567890', 'd@fg.hj', 'female', 'TRB1468840392', '75', 'C8'),
(161, 'wwwwww', '232', '1234567890', 'df@hg.ff', 'male', 'TRB1468910408', '76', 'D7'),
(162, 'wwwwww', '232', '1234567890', 'df@hg.ff', 'male', 'TRB1468910409', '77', 'C8'),
(163, 'gh', '56', '1234567890', 'fghf@fgh.df', 'male', 'TRB1468918433', '78', 'C8'),
(164, 'yj', '23', '123456789', 'nbb@hm.d', 'male', 'TRB1468919373', '79', 'D5'),
(165, 'Ragu', '24', '9897959595', 'ragu@gmail.com', 'male', 'TRB1468920018', '80', 'E1'),
(166, 'Ragu', '24', '9897959595', 'ragu@gmail.com', 'male', 'TRB1468920018', '81', 'C8'),
(167, 'Ragu', '24', '9897959595', 'ragu@gmail.com', 'male', 'TRB1468920029', '82', 'E1'),
(168, 'Ragu', '24', '9897959595', 'ragu@gmail.com', 'male', 'TRB1468920029', '83', 'C8'),
(169, 'Ragu', '23', '2132332232', 'test@gm.m', 'male', 'TRB1468920084', '84', 'E1'),
(170, 'Ragu', '23', '2132332232', 'test@gm.m', 'male', 'TRB1468920084', '85', 'C8'),
(171, 'yj', '23', '123456789', 'nbb@hm.d', 'male', 'TRB1468920488', '86', 'D5'),
(172, 'Ragu', '25', '1234567890', 'ragu@gmail.com', 'male', 'TRB1468922448', '87', 'C6'),
(173, 'test', '21', '1234567890', 'ragu@gmail.com', 'female', 'TRB1468922448', '87', 'C7'),
(174, 'Nahtn', '24', '1234567890', 'ragu@gmail.com', 'male', 'TRB1468922448', '87', 'C8'),
(175, 'df', '23', '1234638493', 'shibilabs23@gmail.com', 'male', 'TRB1468923989', '88', 'E4'),
(176, 'ui', '88', '123456789', 'shibilabs23@gmail.com', 'male', 'TRB1468926362', '89', 'C4'),
(177, 'vb', '78', '123456789', 'shibilabs23@gmail.com', 'female', 'TRB1468926362', '89', 'D4'),
(178, 'rahu', '25', '2525252525', 'ragu@ragu.com', 'male', 'TRB1468987591-90', '90', 'C8'),
(179, 'ragu', '25', '1324343441', 'ragu@gmail.com', 'male', 'TRB1468987960-91', '91', 'B2'),
(180, 'ragu', '25', '1324343441', 'ragu@gmail.com', 'male', 'TRB1468987960-92', '92', 'A4'),
(181, 'ragu', '23', '1234567890', 'shibilabs23@gmail.com', 'male', 'TRB1468988780-93', '93', 'C6'),
(182, 'JAINYMOL', '25', '5678568756', 'jainymol.techware@gmail.com', 'female', 'TRB1468989185-94', '94', 'E3'),
(183, 'JAINYMOL', '25', '5678568756', 'jainymol.techware@gmail.com', 'female', 'TRB1468989185-95', '95', 'E2'),
(184, 'test', '22', '3232323232', 'jainymol@techware.in', 'male', 'TRB1469515442-96', '96', 'E3'),
(185, 'test', '22', '22223232322', 'jainymol@techware.in', 'male', 'TRB1469515650-97', '97', 'E4'),
(186, 'test', '22', '22223232322', 'jainymol@techware.in', 'male', 'TRB1469515650-98', '98', 'E4'),
(187, 'test', '25', '13254354445', 'download@tre.com', 'male', 'TRB1469603777-99', '99', 'C6');

-- --------------------------------------------------------

--
-- Table structure for table `drop_points`
--

CREATE TABLE `drop_points` (
  `id` int(11) NOT NULL,
  `bus_id` varchar(250) NOT NULL,
  `route_id` int(200) NOT NULL,
  `drop_point` varchar(250) NOT NULL,
  `stoping_point` varchar(250) NOT NULL,
  `drop_time` varchar(250) NOT NULL,
  `landmark` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` int(200) NOT NULL DEFAULT 1,
  `created_id` int(11) NOT NULL,
  `created_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drop_points`
--

INSERT INTO `drop_points` (`id`, `bus_id`, `route_id`, `drop_point`, `stoping_point`, `drop_time`, `landmark`, `address`, `status`, `created_id`, `created_by`) VALUES
(2, '2', 4, '6', 'Nana Bus satnd', '07:45', 'Nana Bus satnd as', 'Nana Bus , Lala Chwok', 1, 0, ''),
(3, '1', 5, '22', 'Kamrej', '08:45', 'Other', 'abc mall', 1, 1, 'vendor'),
(4, '8', 0, '6', 'Nana Bus satnd', '07:45', 'Nana Bus satnd as', 'Nana Bus , Lala Chwok', 1, 0, ''),
(5, '1', 11, '28', 'Shyam Dham', '08:45', 'Shyam IceCream', 'abc mall,Shyam Dham,Surat', 1, 1, 'vendor'),
(6, '1', 11, '6', 'Nana Bus satnd', '07:45', 'Nana Bus satnd as', 'Nana Bus , Lala Chwok', 1, 0, ''),
(7, '16', 0, '22', 'surat', '08:45', 'Other', 'abc mall', 1, 1, 'vendor'),
(8, '2', 0, '6', 'Nana Bus satnd', '07:45', 'Nana Bus satnd as', 'Nana Bus , Lala Chwok', 1, 0, ''),
(9, '16', 0, '22', 'surat', '08:45', 'Other', 'abc mall', 1, 1, 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `forgetpassword`
--

CREATE TABLE `forgetpassword` (
  `vid` int(200) NOT NULL,
  `token` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forgetpassword`
--

INSERT INTO `forgetpassword` (`vid`, `token`, `created_at`) VALUES
(1, 'jjohihgzjhvbzv vbn', '2020-01-10 09:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `promocode`
--

CREATE TABLE `promocode` (
  `id` int(11) NOT NULL,
  `promo_code` varchar(100) NOT NULL,
  `promo_no_use` int(11) NOT NULL,
  `promo_detail` text NOT NULL,
  `min_no_ticket` int(11) NOT NULL,
  `min_ticket_amount` int(11) NOT NULL,
  `max_discount_amount` int(11) NOT NULL,
  `promo_type` enum('Flat','Percentage') NOT NULL,
  `percentage` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `promo_image` text DEFAULT NULL,
  `t_and_c` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_id` int(11) NOT NULL,
  `created_by` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promocode`
--

INSERT INTO `promocode` (`id`, `promo_code`, `promo_no_use`, `promo_detail`, `min_no_ticket`, `min_ticket_amount`, `max_discount_amount`, `promo_type`, `percentage`, `start_date`, `expiry_date`, `promo_image`, `t_and_c`, `status`, `created_id`, `created_by`) VALUES
(1, 'BUS100', 5, 'dfdsf', 10, 10, 50, 'Flat', 0, '2019-12-20', '2019-12-31', 'vendor/images/promo-code/bus100_sFU1L.png', 'sfsdfdsfsdfddsfsd', 1, 0, ''),
(2, 'BUS200', 10, 'dsfsdfdsffsdds', 10, 10, 10, 'Flat', 0, '2019-12-19', '2019-12-27', 'vendor/images/promo-code/bus200_LOSV6.png', 'cvxcvcxvcxvxcvxcvcxvcxvxcvcxvxc', 1, 1, 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `bus_id` varchar(250) NOT NULL,
  `bus_quality` varchar(250) NOT NULL,
  `punctuality` varchar(250) NOT NULL,
  `Staff_behaviour` varchar(250) NOT NULL,
  `average` varchar(250) NOT NULL,
  `comments` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `user_id`, `bus_id`, `bus_quality`, `punctuality`, `Staff_behaviour`, `average`, `comments`) VALUES
(3, '4', '1', '3', '2', '3', '2.6666666666667', ''),
(4, '123', '2', '3', '3', '3', '3', ''),
(5, '4', '5', '3', '3', '3', '3', 'fgf\r\n'),
(6, '154', '6', '3', '3', '3', '3', '\r\nnice');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `board_point` varchar(20) NOT NULL,
  `board_time` varchar(20) NOT NULL,
  `drop_point` varchar(20) NOT NULL,
  `drop_time` varchar(20) NOT NULL,
  `fare` int(11) NOT NULL,
  `status` int(200) NOT NULL DEFAULT 1,
  `created_id` int(11) NOT NULL,
  `created_by` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `bus_id`, `board_point`, `board_time`, `drop_point`, `drop_time`, `fare`, `status`, `created_id`, `created_by`) VALUES
(1, 1, 'Surat', '10:00', 'Amreli', '07:45', 600, 0, 0, 'admin'),
(2, 2, 'Surat', '11:00', 'Ahmedabad', '05:45', 450, 1, 0, 'admin'),
(4, 2, 'Surat', '19:30', 'Bharuch', '08:45', 140, 1, 0, 'admin'),
(5, 1, 'Surat', '19:30', 'Vadodara', '07:45', 250, 0, 0, 'admin'),
(6, 2, 'Surat', '10:00', 'Rajkot', '07:45', 600, 1, 0, 'admin'),
(11, 1, 'Surat', '11:00', 'Kutch', '05:45', 450, 1, 0, 'admin'),
(12, 1, 'Surat', '19:30', 'Nana Varachha', '07:45', 250, 1, 0, 'admin'),
(13, 1, 'Surat', '19:30', 'Sanod', '07:45', 250, 1, 0, 'admin'),
(14, 2, 'Surat', '10:00', 'Bhavnagar', '07:45', 600, 1, 0, 'admin'),
(15, 2, 'Surat', '10:00', 'Palitana', '07:45', 600, 1, 0, 'admin'),
(16, 1, 'Surat', '19:30', 'Vadiya', '08:45', 140, 1, 0, 'admin'),
(17, 1, 'Surat', '19:30', 'Ratanpar', '08:45', 140, 1, 0, 'admin'),
(18, 2, 'Surat', '10:00', 'Khijadiya', '07:45', 600, 1, 0, 'admin'),
(19, 2, 'Surat', '10:00', 'Div', '07:45', 600, 1, 0, 'admin'),
(20, 1, 'Surat', '11:00', 'Daman', '05:45', 450, 1, 0, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `seat_layout`
--

CREATE TABLE `seat_layout` (
  `id` int(11) NOT NULL,
  `bus_id` varchar(250) NOT NULL,
  `bus_type` varchar(250) NOT NULL,
  `totel_seat` varchar(250) NOT NULL,
  `layout` longtext NOT NULL,
  `layout_type` varchar(250) NOT NULL,
  `last_seat` varchar(250) NOT NULL,
  `no_sleeper` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_layout`
--

INSERT INTO `seat_layout` (`id`, `bus_id`, `bus_type`, `totel_seat`, `layout`, `layout_type`, `last_seat`, `no_sleeper`) VALUES
(52, '101', 'Seater && Sleeper', '20', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"}],\"1\":[{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B4\"}],\"2\":[{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C4\"}],\"3\":[{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D4\"}],\"4\":[{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":20,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '4', ''),
(53, '1032', 'Sleeper', '20', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"}],\"1\":[{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"B4\"}],\"2\":[{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"C4\"}],\"3\":[{\"bus\":12,\"type\":\"sleeper\",\"seat_no\":\"D1\"},{\"bus\":13,\"type\":\"sleeper\",\"seat_no\":\"D2\"},{\"bus\":14,\"type\":\"sleeper\",\"seat_no\":\"D3\"},{\"bus\":15,\"type\":\"sleeper\",\"seat_no\":\"D4\"}],\"4\":[{\"bus\":16,\"type\":\"sleeper\",\"seat_no\":\"E1\"},{\"bus\":17,\"type\":\"sleeper\",\"seat_no\":\"E2\"},{\"bus\":18,\"type\":\"sleeper\",\"seat_no\":\"E3\"},{\"bus\":19,\"type\":\"sleeper\",\"seat_no\":\"E4\"},{\"bus\":20,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '4', ''),
(54, '103', 'Seater / Semi sleeper', '49', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"A8\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"A9\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"A10\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"A11\"}],\"1\":[{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"B7\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"B8\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"B9\"},{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"B10\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"B11\"}],\"2\":[{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":24,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":25,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":26,\"type\":\"seater\",\"seat_no\":\"C5\"},{\"bus\":27,\"type\":\"seater\",\"seat_no\":\"C6\"},{\"bus\":28,\"type\":\"seater\",\"seat_no\":\"C7\"},{\"bus\":29,\"type\":\"seater\",\"seat_no\":\"C8\"},{\"bus\":30,\"type\":\"seater\",\"seat_no\":\"C9\"},{\"bus\":31,\"type\":\"seater\",\"seat_no\":\"C10\"},{\"bus\":32,\"type\":\"seater\",\"seat_no\":\"C11\"}],\"3\":[{\"bus\":33,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":34,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":35,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":36,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":37,\"type\":\"seater\",\"seat_no\":\"D5\"},{\"bus\":38,\"type\":\"seater\",\"seat_no\":\"D6\"},{\"bus\":39,\"type\":\"seater\",\"seat_no\":\"D7\"},{\"bus\":40,\"type\":\"seater\",\"seat_no\":\"D8\"},{\"bus\":41,\"type\":\"seater\",\"seat_no\":\"D9\"},{\"bus\":42,\"type\":\"seater\",\"seat_no\":\"D10\"},{\"bus\":43,\"type\":\"seater\",\"seat_no\":\"D11\"}],\"4\":[{\"bus\":44,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":45,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":46,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":47,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":48,\"type\":\"seater\",\"seat_no\":\"E5\"}]}', 'layout-4', '5', ''),
(55, '1017', 'Seater && Sleeper', '40', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"A8\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"A9\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"A10\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"A11\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"A12\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"A13\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"A14\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"A15\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"A16\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"A17\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"A18\"}],\"1\":[{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":24,\"type\":\"seater\",\"seat_no\":\"B7\"},{\"bus\":25,\"type\":\"seater\",\"seat_no\":\"B8\"},{\"bus\":26,\"type\":\"seater\",\"seat_no\":\"B9\"},{\"bus\":27,\"type\":\"seater\",\"seat_no\":\"B10\"},{\"bus\":28,\"type\":\"seater\",\"seat_no\":\"B11\"},{\"bus\":29,\"type\":\"seater\",\"seat_no\":\"B12\"},{\"bus\":30,\"type\":\"seater\",\"seat_no\":\"B13\"},{\"bus\":31,\"type\":\"seater\",\"seat_no\":\"B14\"},{\"bus\":32,\"type\":\"seater\",\"seat_no\":\"B15\"},{\"bus\":33,\"type\":\"seater\",\"seat_no\":\"B16\"},{\"bus\":34,\"type\":\"seater\",\"seat_no\":\"B17\"},{\"bus\":35,\"type\":\"seater\",\"seat_no\":\"B18\"}],\"2\":[],\"3\":[],\"4\":[{\"bus\":36,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":37,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":40,\"type\":\"sleeper1\",\"seat_no\":\"E5\"},{\"bus\":39,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":38,\"type\":\"seater\",\"seat_no\":\"E3\"}]}', 'layout-1', '4', ''),
(58, '102', 'Seater / Semi sleeper', '20', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"A8\"}],\"1\":[{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"B7\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"B8\"}],\"2\":[],\"3\":[],\"4\":[{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":20,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-1', '4', ''),
(59, '105', 'Seater / Semi sleeper', '20', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"A8\"}],\"1\":[{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"B5\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"B6\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"B7\"},{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"B8\"}],\"2\":[],\"3\":[],\"4\":[{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":20,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-1', '4', ''),
(60, '131', 'Sleeper', '49', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"A8\"},{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"A9\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"A10\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"A11\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"A12\"}],\"1\":[{\"bus\":12,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":13,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":14,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":15,\"type\":\"sleeper\",\"seat_no\":\"B4\"},{\"bus\":16,\"type\":\"sleeper\",\"seat_no\":\"B5\"},{\"bus\":17,\"type\":\"sleeper\",\"seat_no\":\"B6\"},{\"bus\":18,\"type\":\"sleeper\",\"seat_no\":\"B7\"},{\"bus\":19,\"type\":\"sleeper\",\"seat_no\":\"B8\"},{\"bus\":20,\"type\":\"sleeper\",\"seat_no\":\"B9\"},{\"bus\":21,\"type\":\"sleeper\",\"seat_no\":\"B10\"},{\"bus\":22,\"type\":\"sleeper\",\"seat_no\":\"B11\"},{\"bus\":23,\"type\":\"sleeper\",\"seat_no\":\"B12\"}],\"2\":[{\"bus\":24,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":25,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":26,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":27,\"type\":\"sleeper\",\"seat_no\":\"C4\"},{\"bus\":28,\"type\":\"sleeper\",\"seat_no\":\"C5\"},{\"bus\":29,\"type\":\"sleeper\",\"seat_no\":\"C6\"},{\"bus\":30,\"type\":\"sleeper\",\"seat_no\":\"C7\"},{\"bus\":31,\"type\":\"sleeper\",\"seat_no\":\"C8\"},{\"bus\":32,\"type\":\"sleeper\",\"seat_no\":\"C9\"},{\"bus\":33,\"type\":\"sleeper\",\"seat_no\":\"C10\"},{\"bus\":34,\"type\":\"sleeper\",\"seat_no\":\"C11\"},{\"bus\":35,\"type\":\"sleeper\",\"seat_no\":\"C12\"}],\"3\":[{\"bus\":39,\"type\":\"sleeper\",\"seat_no\":\"D1\"},{\"bus\":40,\"type\":\"sleeper\",\"seat_no\":\"D2\"},{\"bus\":41,\"type\":\"sleeper\",\"seat_no\":\"D3\"},{\"bus\":42,\"type\":\"sleeper\",\"seat_no\":\"D4\"},{\"bus\":43,\"type\":\"sleeper\",\"seat_no\":\"D5\"},{\"bus\":44,\"type\":\"sleeper\",\"seat_no\":\"D6\"},{\"bus\":45,\"type\":\"sleeper\",\"seat_no\":\"D7\"},{\"bus\":46,\"type\":\"sleeper\",\"seat_no\":\"D8\"},{\"bus\":47,\"type\":\"sleeper\",\"seat_no\":\"D9\"},{\"bus\":48,\"type\":\"sleeper\",\"seat_no\":\"D10\"},{\"bus\":49,\"type\":\"sleeper\",\"seat_no\":\"D11\"},{\"bus\":50,\"type\":\"sleeper\",\"seat_no\":\"D12\"},{\"bus\":51,\"type\":\"sleeper\",\"seat_no\":\"D13\"}],\"4\":[]}', 'layout-4', '1', ''),
(61, '133', 'Sleeper', '49', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"A7\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"A8\"},{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"A9\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"A10\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"A11\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"A12\"}],\"1\":[{\"bus\":12,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":13,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":14,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":15,\"type\":\"sleeper\",\"seat_no\":\"B4\"},{\"bus\":16,\"type\":\"sleeper\",\"seat_no\":\"B5\"},{\"bus\":17,\"type\":\"sleeper\",\"seat_no\":\"B6\"},{\"bus\":18,\"type\":\"sleeper\",\"seat_no\":\"B7\"},{\"bus\":19,\"type\":\"sleeper\",\"seat_no\":\"B8\"},{\"bus\":20,\"type\":\"sleeper\",\"seat_no\":\"B9\"},{\"bus\":21,\"type\":\"sleeper\",\"seat_no\":\"B10\"},{\"bus\":22,\"type\":\"sleeper\",\"seat_no\":\"B11\"},{\"bus\":23,\"type\":\"sleeper\",\"seat_no\":\"B12\"}],\"2\":[{\"bus\":24,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":25,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":26,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":27,\"type\":\"sleeper\",\"seat_no\":\"C4\"},{\"bus\":28,\"type\":\"sleeper\",\"seat_no\":\"C5\"},{\"bus\":29,\"type\":\"sleeper\",\"seat_no\":\"C6\"},{\"bus\":30,\"type\":\"sleeper\",\"seat_no\":\"C7\"},{\"bus\":31,\"type\":\"sleeper\",\"seat_no\":\"C8\"},{\"bus\":32,\"type\":\"sleeper\",\"seat_no\":\"C9\"},{\"bus\":33,\"type\":\"sleeper\",\"seat_no\":\"C10\"},{\"bus\":34,\"type\":\"sleeper\",\"seat_no\":\"C11\"},{\"bus\":35,\"type\":\"sleeper\",\"seat_no\":\"C12\"}],\"3\":[{\"bus\":39,\"type\":\"sleeper\",\"seat_no\":\"D1\"},{\"bus\":40,\"type\":\"sleeper\",\"seat_no\":\"D2\"},{\"bus\":41,\"type\":\"sleeper\",\"seat_no\":\"D3\"},{\"bus\":42,\"type\":\"sleeper\",\"seat_no\":\"D4\"},{\"bus\":43,\"type\":\"sleeper\",\"seat_no\":\"D5\"},{\"bus\":44,\"type\":\"sleeper\",\"seat_no\":\"D6\"},{\"bus\":45,\"type\":\"sleeper\",\"seat_no\":\"D7\"},{\"bus\":46,\"type\":\"sleeper\",\"seat_no\":\"D8\"},{\"bus\":47,\"type\":\"sleeper\",\"seat_no\":\"D9\"},{\"bus\":48,\"type\":\"sleeper\",\"seat_no\":\"D10\"},{\"bus\":49,\"type\":\"sleeper\",\"seat_no\":\"D11\"},{\"bus\":50,\"type\":\"sleeper\",\"seat_no\":\"D12\"},{\"bus\":51,\"type\":\"sleeper\",\"seat_no\":\"D13\"}],\"4\":[]}', 'layout-4', '2', ''),
(62, '134', 'Sleeper', '10', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"}],\"1\":[{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"B3\"}],\"2\":[{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"C4\"}],\"3\":[],\"4\":[]}', 'layout-3', '1', ''),
(64, '137', 'Sleeper', '22', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"sleeper\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"sleeper\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":21,\"type\":\"sleeper\",\"seat_no\":\"D1\"},{\"bus\":22,\"type\":\"sleeper\",\"seat_no\":\"D2\"},{\"bus\":23,\"type\":\"sleeper\",\"seat_no\":\"D3\"},{\"bus\":24,\"type\":\"sleeper\",\"seat_no\":\"D4\"},{\"bus\":25,\"type\":\"sleeper\",\"seat_no\":\"D5\"},{\"bus\":26,\"type\":\"sleeper\",\"seat_no\":\"D6\"},{\"bus\":27,\"type\":\"sleeper\",\"seat_no\":\"D7\"}],\"4\":[]}', 'layout-4', '2', ''),
(66, '129', 'Sleeper', '12', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"}],\"1\":[{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"B4\"}],\"2\":[{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"C4\"}],\"3\":[],\"4\":[]}', 'layout-3', '1', ''),
(73, '126', 'Sleeper', '20', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"}],\"1\":[{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"B4\"}],\"2\":[{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"C4\"}],\"3\":[{\"bus\":18,\"type\":\"sleeper\",\"seat_no\":\"D1\"},{\"bus\":19,\"type\":\"sleeper\",\"seat_no\":\"D2\"},{\"bus\":20,\"type\":\"sleeper\",\"seat_no\":\"D3\"},{\"bus\":21,\"type\":\"sleeper\",\"seat_no\":\"D4\"},{\"bus\":22,\"type\":\"sleeper\",\"seat_no\":\"D5\"},{\"bus\":23,\"type\":\"sleeper\",\"seat_no\":\"D6\"}],\"4\":[{\"bus\":18,\"type\":\"sleeper\",\"seat_no\":\"E1\"},{\"bus\":19,\"type\":\"sleeper\",\"seat_no\":\"E2\"},{\"bus\":20,\"type\":\"sleeper1\",\"seat_no\":\"E3\"},{\"bus\":21,\"type\":\"sleeper1\",\"seat_no\":\"E4\"},{\"bus\":22,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '2', ''),
(74, '138', 'Sleeper', '22', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"A5\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"A6\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"A7\"}],\"1\":[{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"B4\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"B5\"},{\"bus\":12,\"type\":\"sleeper\",\"seat_no\":\"B6\"},{\"bus\":13,\"type\":\"sleeper\",\"seat_no\":\"B7\"}],\"2\":[{\"bus\":16,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":17,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":18,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":19,\"type\":\"sleeper\",\"seat_no\":\"C4\"},{\"bus\":20,\"type\":\"sleeper\",\"seat_no\":\"C5\"},{\"bus\":21,\"type\":\"sleeper\",\"seat_no\":\"C6\"},{\"bus\":22,\"type\":\"sleeper\",\"seat_no\":\"C7\"},{\"bus\":23,\"type\":\"sleeper\",\"seat_no\":\"C8\"}],\"3\":[],\"4\":[]}', 'layout-3', '0', ''),
(75, '139', 'Sleeper', '12', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"}],\"1\":[{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"B4\"}],\"2\":[{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"C4\"}],\"3\":[],\"4\":[]}', 'layout-3', '0', ''),
(76, '104', 'Sleeper', '20', '{\"0\":[{\"bus\":0,\"type\":\"sleeper\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"sleeper\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"sleeper\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"sleeper\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"sleeper\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"sleeper\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"sleeper\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"sleeper\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"sleeper\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"sleeper\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"sleeper\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"sleeper\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"sleeper\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"sleeper\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"sleeper\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":15,\"type\":\"sleeper\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"sleeper\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"sleeper\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"sleeper\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"sleeper\",\"seat_no\":\"D5\"}],\"4\":[]}', 'layout-4', '0', ''),
(77, '112', 'Seater / Semi sleeper', '20', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"D5\"}],\"4\":[]}', 'layout-4', '0', ''),
(78, '113', 'Seater / Semi sleeper', '24', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"D5\"}],\"4\":[{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":24,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '4', ''),
(79, '115', 'Seater / Semi sleeper', '24', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"D5\"}],\"4\":[{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":24,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '4', ''),
(80, '116', 'Seater / Semi sleeper', '24', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"D5\"}],\"4\":[{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":24,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '4', ''),
(81, '117', 'Seater / Semi sleeper', '24', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"D5\"}],\"4\":[{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":24,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '4', ''),
(82, '125', 'Seater / Semi sleeper', '24', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"D5\"}],\"4\":[{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":24,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '4', ''),
(83, '127', 'Seater / Semi sleeper', '24', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"D5\"}],\"4\":[{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":24,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '4', ''),
(84, '128', 'Seater / Semi sleeper', '24', '{\"0\":[{\"bus\":0,\"type\":\"seater\",\"seat_no\":\"A1\"},{\"bus\":1,\"type\":\"seater\",\"seat_no\":\"A2\"},{\"bus\":2,\"type\":\"seater\",\"seat_no\":\"A3\"},{\"bus\":3,\"type\":\"seater\",\"seat_no\":\"A4\"},{\"bus\":4,\"type\":\"seater\",\"seat_no\":\"A5\"}],\"1\":[{\"bus\":5,\"type\":\"seater\",\"seat_no\":\"B1\"},{\"bus\":6,\"type\":\"seater\",\"seat_no\":\"B2\"},{\"bus\":7,\"type\":\"seater\",\"seat_no\":\"B3\"},{\"bus\":8,\"type\":\"seater\",\"seat_no\":\"B4\"},{\"bus\":9,\"type\":\"seater\",\"seat_no\":\"B5\"}],\"2\":[{\"bus\":10,\"type\":\"seater\",\"seat_no\":\"C1\"},{\"bus\":11,\"type\":\"seater\",\"seat_no\":\"C2\"},{\"bus\":12,\"type\":\"seater\",\"seat_no\":\"C3\"},{\"bus\":13,\"type\":\"seater\",\"seat_no\":\"C4\"},{\"bus\":14,\"type\":\"seater\",\"seat_no\":\"C5\"}],\"3\":[{\"bus\":15,\"type\":\"seater\",\"seat_no\":\"D1\"},{\"bus\":16,\"type\":\"seater\",\"seat_no\":\"D2\"},{\"bus\":17,\"type\":\"seater\",\"seat_no\":\"D3\"},{\"bus\":18,\"type\":\"seater\",\"seat_no\":\"D4\"},{\"bus\":19,\"type\":\"seater\",\"seat_no\":\"D5\"}],\"4\":[{\"bus\":20,\"type\":\"seater\",\"seat_no\":\"E1\"},{\"bus\":21,\"type\":\"seater\",\"seat_no\":\"E2\"},{\"bus\":22,\"type\":\"seater\",\"seat_no\":\"E3\"},{\"bus\":23,\"type\":\"seater\",\"seat_no\":\"E4\"},{\"bus\":24,\"type\":\"sleeper1\",\"seat_no\":\"E5\"}]}', 'layout-4', '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `favicon` varchar(250) NOT NULL,
  `smtp_username` varchar(250) NOT NULL,
  `smtp_host` varchar(250) NOT NULL,
  `smtp_password` varchar(250) NOT NULL,
  `sender_id` varchar(250) NOT NULL,
  `sms_username` varchar(250) NOT NULL,
  `sms_password` varchar(250) NOT NULL,
  `paypal` varchar(250) NOT NULL,
  `paypalid` varchar(251) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `logo`, `favicon`, `smtp_username`, `smtp_host`, `smtp_password`, `sender_id`, `sms_username`, `sms_password`, `paypal`, `paypalid`) VALUES
(1, 'TrueBus', 'assets/uploads/logo/1469446049_TrueBus.png', 'assets/uploads/favicons/1469446049_TrueBus.png', 'noreplay@truebus.co.in', 'mail.truebus.co.in ', 'P4*!GIVXZFvi', '101', 'manu', '676', 'https://www.sandbox.paypal.com/cgi-bin/webscr', 'shajeermhmmd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `image` varchar(80) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `reset_key` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `username`, `password`, `name`, `dob`, `image`, `gender`, `mob`, `reset_key`) VALUES
(3, 'usr_001', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'test', '05/13/2016', 'assets/uploads/profilepic/crossbar.png', 'male', 9867542324, ''),
(4, 'usr_002', 'shibilabs23@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'shibi', '05/13/2016', 'assets/uploads/profilepic/crossbar.png', 'female', 9496383739, 'TB1469535255'),
(10, 'usr_002', 'shilpa.techware@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'abc-traders', '03-07-1970', 'http://192.168.1.31/jasir/truebus/assets/uploads/Koala.jpg', 'male', 0, 'TB1469535808');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(200) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `phone_number` bigint(15) DEFAULT NULL,
  `company_name` varchar(200) DEFAULT NULL,
  `profile_picture` text DEFAULT NULL,
  `logo` varchar(250) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `status` varchar(150) NOT NULL,
  `remember_token` text NOT NULL,
  `forgettoken` varchar(200) DEFAULT NULL,
  `token_time` datetime DEFAULT current_timestamp(),
  `otp` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone_number`, `company_name`, `profile_picture`, `logo`, `address`, `city`, `state`, `status`, `remember_token`, `forgettoken`, `token_time`, `otp`) VALUES
(1, 'vendor', '$2y$10$Zy/bmdQ9/TBPRktDy2Ktrex8hvo6LIZnhajMsSpSb547KufdBqfqG', 'jjj', 'koko', 'vendor@gmail.com', 9999999990, 'coname', 'vendor/images/admin-profile/vendor_2EdYR.jpg', 'vendor/images/logo/vendor_hcxhF.png', 'yogi chowk', 'Surat', 'Gujarat', '1', 'Wyx6NebMUjnwO0C771IojIfPh4VSySJkV5WbJ5zSm0qzjlD2WhO0jmrtgi14', 'H2xDzD16wjwG9QrsGCTZ0PLtmrWx2U2BcIiXC3PP1bs4WVkUzA7nJUXX1WnD', '2020-01-18 11:40:38', 579099),
(2, 'vin', '$2y$10$04YSt1cQAo0XcTasI1n/nuORJCtv1SfNjXJZ5BMjce6laXsUxLrMS', NULL, NULL, 'vin@me.com', 9664675543, NULL, NULL, NULL, NULL, NULL, NULL, '1', '', '', '2020-01-11 00:00:00', 0),
(5, 'jjjj', '1111', NULL, NULL, 'jjjj@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 'hEPI7XTVV1JTZCBHhPgpHLSxFVWwDZ5f2iPV8Y86', '', '2020-01-11 00:00:00', 0),
(6, 'klklk', '$2y$10$GULdAScdWajKaXChDNhL0.tFYz05BzuVtRNpsDZSzvCs9Sbj8gVyi', NULL, NULL, 'jjjj@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0SUMjXYBcnfk5eO3reEI87YauziSPO5zzdWexLnqA41nPTvXFODYwdf3G1ZL', '', '2020-01-11 00:00:00', 0),
(7, 'klklk', '$2y$10$cp0vG3Dogl0090trdccMtelWidQDjSlJR.sP4toCARyLW3QrI1j3u', NULL, NULL, 'llll@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '6bSz5oN8tqlQiGYYTtlPkbLZ4WsfJuQNcuoTvX6MWsUgPlryQb8auJ2cW1WS', '', '2020-01-11 00:00:00', 0),
(8, 'klklk', '$2y$10$g466QTSwd7RDXAb1thPq.Ox3dLzqeAZPr72u3LGMVYGO4BBgXPwRq', NULL, NULL, 'llll@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'iE60YWPtvZII2m5Qu22xnlP7hC5fSzFZkgwFiyaxtHAJmjCX8FhY2fMAs9ux', '', '2020-01-11 00:00:00', 0),
(9, 'okoko', '$2y$10$4.rcXzi3KdEkA1grUkQO/OrIHa9PgGHVrHaS8.28tZE.hpsm8W2Oy', NULL, NULL, 'koko@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'bs1Dro5L27kbb536a34eupTFUBAMCHqDONEtYTcetnfLqaZYtfDGYFKkIGA8', '', '2020-01-11 00:00:00', 0),
(10, 'mayu', '$2y$10$48mP9qCc3MZV24PfSsHZPugckJloZki/eZoEveEsNCPi6EciI2V2e', NULL, NULL, 'mayu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'AWLq2go9rlbQbeoy0jojMDk9xcM10tuJ9lXyR9XXwtI8KTXcHEfkLm4j42ot', NULL, '2020-01-16 19:27:49', NULL),
(11, 'mayu', '$2y$10$n1etBjEdcZR8jKQYSqiVV.2Uq8/42i5dqfhwPmvf4kAN9HUFcYexa', NULL, NULL, 'mayu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'vIgYzx2uZKWsLCPLmYGsx2IYQbDgJcC8iYrVBc8SeSSwG6HKBeQ6yNdXZNMQ', NULL, '2020-01-16 19:30:08', NULL),
(12, 'mayu', '$2y$10$DLlksvVsm2e4jcUzwidlQeNCv.QNQJvPY.XbCEO2DOP2Y54/u/sL6', NULL, NULL, 'mayu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '4c4UTKr0TsGfKCy4KP4d96S73fTq2dmUEslf9gUpInJlKKBrTvNdjuc2be2M', NULL, '2020-01-16 19:30:16', NULL),
(13, 'mayu', '$2y$10$eRjgrKmsAeoEWmvG.Nf8sOpgsxCnBf4r6kCrtj7pfi0EoqGYahSHa', NULL, NULL, 'mayu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2UDKnLxQxT5nin4N8NHljvedluYABD3nRchvSj7saUoNLzHi0YQ7cK7GMUZ1', NULL, '2020-01-16 19:30:59', NULL),
(14, 'mayu', '$2y$10$G.msOdFCjWaHqwOeXpxqfOYCmq0esoDQLlBdx6FRu18Cmoz0RK5KK', NULL, NULL, 'mayu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'fDkYqpbCfewDEBa9HL7UfybBfGsN209KOKadjJTmucsRT1D6KUZ9ap08128B', NULL, '2020-01-16 19:32:03', NULL),
(15, 'mayu', '$2y$10$aVqgfn1BwoSTHFHh.H0ZsOlILLqgENwagfUqF/3XZGcFnBQCxCOU.', NULL, NULL, 'mayu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '2LSu5Uc8X2eSZDKOX0KvhKpHMq7mwlyv3WGzLfqr6HbC40ABQDzrvpjN5vLd', NULL, '2020-01-16 19:33:18', NULL),
(16, 'mayu', '$2y$10$FS9NhtuoPTpv5iTHfYtJMerRSD2hQFTueAo8cxB0RA6fLybZmZidC', NULL, NULL, 'mayu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'iN85zuz4OocL41Dg651GY9WEJT1DVY0VYsdA4B7ykF2G5gRbkuiLIMioOsBJ', NULL, '2020-01-16 19:33:26', NULL),
(17, 'mayuri', '$2y$10$tJtJjPHMl04VD9ZW8T6bRuLmRkr1pN39s7A7lYg6tS6Truh8rolXu', NULL, NULL, 'mayuri@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'loYhaG8a3vLluRes1817KeY4MbIApu8MZQ5oHbc85MJRYjNRnbZjimhsYZj7', NULL, '2020-01-16 19:35:14', NULL),
(18, 'mayuri', '$2y$10$ZRTCLdvnDF.Ueq2WniZtk.13HKFDjYxK4wBtZdxVkhbFC5c3mqxVy', NULL, NULL, 'mayuri@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'RcaWT79gEeKuTIHaH3Eyi39li2r8h88Ldq3fINp371mD9ZUjqyTfl0vt9SsL', NULL, '2020-01-16 19:35:27', NULL),
(19, 'kjkj', '$2y$10$BYwYJv0X.ctm8eX.bOrft.w6PE2gnnHLnjPre/CC/zqWXCwJz/NR.', NULL, NULL, 'kjkj@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '7mJYtmdJ2Fi1K3W0WMIEdZZVJIbarKsIllXBfGTnWTcYiln1OSFo7uL6CbxM', NULL, '2020-01-16 19:57:32', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_points`
--
ALTER TABLE `board_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `book_bus`
--
ALTER TABLE `book_bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_gallery`
--
ALTER TABLE `bus_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_type`
--
ALTER TABLE `bus_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drop_points`
--
ALTER TABLE `drop_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgetpassword`
--
ALTER TABLE `forgetpassword`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `promocode`
--
ALTER TABLE `promocode`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `promo_code` (`promo_code`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat_layout`
--
ALTER TABLE `seat_layout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `board_points`
--
ALTER TABLE `board_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book_bus`
--
ALTER TABLE `book_bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bus_gallery`
--
ALTER TABLE `bus_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bus_type`
--
ALTER TABLE `bus_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cancellation`
--
ALTER TABLE `cancellation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `drop_points`
--
ALTER TABLE `drop_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `promocode`
--
ALTER TABLE `promocode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `seat_layout`
--
ALTER TABLE `seat_layout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
