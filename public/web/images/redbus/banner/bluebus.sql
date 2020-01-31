-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 01:07 PM
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
-- Database: `bluebus`
--

-- --------------------------------------------------------

--
-- Table structure for table `bb_amenities`
--

CREATE TABLE `bb_amenities` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_api_call_list`
--

CREATE TABLE `bb_api_call_list` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `device_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_api_list`
--

CREATE TABLE `bb_api_list` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_bank`
--

CREATE TABLE `bb_bank` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `date_of_transaction` date NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_no` int(11) NOT NULL,
  `date_of_cheque` date NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_block_devices`
--

CREATE TABLE `bb_block_devices` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blocked_on` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_board_point`
--

CREATE TABLE `bb_board_point` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `board_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickup_time` time NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_booking_details`
--

CREATE TABLE `bb_booking_details` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `board_point_id` bigint(20) UNSIGNED NOT NULL,
  `drop_point_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seat_no` int(11) NOT NULL,
  `total_fare` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_policy` tinyint(1) NOT NULL,
  `booking_status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_bus`
--

CREATE TABLE `bb_bus` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `bus_type_id` bigint(20) UNSIGNED NOT NULL,
  `amenities_id` bigint(20) UNSIGNED NOT NULL,
  `bus_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus_reg_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starting_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time NOT NULL,
  `ending_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ending_time` time NOT NULL,
  `max_seats` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_bus_cancellation`
--

CREATE TABLE `bb_bus_cancellation` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `cancellation_date` date NOT NULL,
  `cancellation_time` time NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compensation_amount` int(11) NOT NULL,
  `date_of_cancel` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_bus_gallary`
--

CREATE TABLE `bb_bus_gallary` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_bus_type`
--

CREATE TABLE `bb_bus_type` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_cancellation_policy`
--

CREATE TABLE `bb_cancellation_policy` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `time_to_depart` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_cash`
--

CREATE TABLE `bb_cash` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `date_of_transaction` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_city`
--

CREATE TABLE `bb_city` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_country`
--

CREATE TABLE `bb_country` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_currencies`
--

CREATE TABLE `bb_currencies` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_origin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decimal_point` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_current_theme`
--

CREATE TABLE `bb_current_theme` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `theme_id` bigint(20) UNSIGNED NOT NULL,
  `theme_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_customer_details`
--

CREATE TABLE `bb_customer_details` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `gender` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verification_status` tinyint(1) NOT NULL,
  `mobileno_verification_status` tinyint(1) NOT NULL,
  `dob` date NOT NULL,
  `remember_tocken` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_customer_wallet`
--

CREATE TABLE `bb_customer_wallet` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `wallet_balance` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_devices`
--

CREATE TABLE `bb_devices` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_drop_point`
--

CREATE TABLE `bb_drop_point` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `drop_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_time` time NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_label`
--

CREATE TABLE `bb_label` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_languages`
--

CREATE TABLE `bb_languages` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_migrations`
--

CREATE TABLE `bb_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bb_migrations`
--

INSERT INTO `bb_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_01_30_105836_create_user_role', 1),
(2, '2020_01_30_105844_create_user', 1),
(3, '2020_01_30_110400_create_user_activity', 1),
(4, '2020_01_30_110648_create_country', 1),
(5, '2020_01_30_110655_create_state', 1),
(6, '2020_01_30_110703_create_city', 1),
(7, '2020_01_30_111321_create_bus_type', 1),
(8, '2020_01_30_111425_create_amenities', 1),
(9, '2020_01_30_111601_create_route', 1),
(10, '2020_01_30_111710_create_bus', 1),
(11, '2020_01_30_112050_create_board_point', 2),
(12, '2020_01_30_112123_create_drop_point', 2),
(13, '2020_01_30_112259_create_bus_cancellation', 3),
(14, '2020_01_30_112359_create_bus_gallary', 4),
(15, '2020_01_30_112514_create_booking_details', 5),
(16, '2020_01_30_112615_create_ticket_cancellation', 6),
(17, '2020_01_30_112832_create_promocode', 7),
(18, '2020_01_30_112918_create_promocode_transaction', 8),
(19, '2020_01_30_113212_create_cancellation_policy', 9),
(20, '2020_01_30_113318_create_customer_details', 10),
(21, '2020_01_30_113410_create_rating', 11),
(22, '2020_01_30_113454_create_seat_layout', 12),
(24, '2020_01_30_113741_create_transaction_history', 14),
(25, '2020_01_30_113834_create_customer_wallet', 15),
(26, '2020_01_30_114016_create_referral_code', 16),
(27, '2020_01_30_114121_create_devices', 17),
(28, '2020_01_30_114309_create_block_devices', 18),
(29, '2020_01_30_114358_create_currencies', 18),
(30, '2020_01_30_114618_create_themes', 19),
(31, '2020_01_30_114650_create_current_theme', 19),
(32, '2020_01_30_115349_create_passenger_details', 20),
(33, '2020_01_30_115805_create_bank', 21),
(34, '2020_01_30_115827_create_cash', 21),
(35, '2020_01_30_115926_create_payment_method', 22),
(36, '2020_01_30_115953_create_payment_method_detail', 22),
(37, '2020_01_30_120102_create_api_list', 23),
(38, '2020_01_30_120203_create_api_call_list', 23),
(39, '2020_01_30_113631_create_languages', 24),
(40, '2020_01_30_120305_create_label', 24),
(41, '2020_01_30_120525_create_newsletter', 25),
(42, '2020_01_30_120618_create_setting', 26);

-- --------------------------------------------------------

--
-- Table structure for table `bb_newsletter`
--

CREATE TABLE `bb_newsletter` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_passenger_details`
--

CREATE TABLE `bb_passenger_details` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_journey` date NOT NULL,
  `insurance_status` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_payment_method`
--

CREATE TABLE `bb_payment_method` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `environment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_payment_method_detail`
--

CREATE TABLE `bb_payment_method_detail` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method_id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_promocode`
--

CREATE TABLE `bb_promocode` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `promocode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `max_amount` int(11) NOT NULL,
  `usage_count` int(11) NOT NULL,
  `indivisual_use` int(11) NOT NULL,
  `exclude_bus_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `include_bus_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_order_amount` int(11) NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_promocode_transaction`
--

CREATE TABLE `bb_promocode_transaction` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `promocode_id` bigint(20) UNSIGNED NOT NULL,
  `amount_used` int(11) NOT NULL,
  `limit` int(11) NOT NULL,
  `remaining_balance` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_rating`
--

CREATE TABLE `bb_rating` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_referral_code`
--

CREATE TABLE `bb_referral_code` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_route`
--

CREATE TABLE `bb_route` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `source_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_time` time NOT NULL,
  `destination_point` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_time` time NOT NULL,
  `fare_price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `journey_duration` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_seat_layout`
--

CREATE TABLE `bb_seat_layout` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `total_seat` int(11) NOT NULL,
  `layout` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `layout_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_seat_at_last` int(11) NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_setting`
--

CREATE TABLE `bb_setting` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_state`
--

CREATE TABLE `bb_state` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_themes`
--

CREATE TABLE `bb_themes` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_ticket_cancellation`
--

CREATE TABLE `bb_ticket_cancellation` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` bigint(20) UNSIGNED NOT NULL,
  `total_fare` int(11) NOT NULL,
  `cancellation_charges` int(11) NOT NULL,
  `refund_amount` int(11) NOT NULL,
  `refund_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_transaction_history`
--

CREATE TABLE `bb_transaction_history` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reference_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_amount` int(11) NOT NULL,
  `debit_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_user`
--

CREATE TABLE `bb_user` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` bigint(20) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` int(11) NOT NULL,
  `forget_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_user_activity`
--

CREATE TABLE `bb_user_activity` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bb_user_role`
--

CREATE TABLE `bb_user_role` (
  `_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bb_amenities`
--
ALTER TABLE `bb_amenities`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_api_call_list`
--
ALTER TABLE `bb_api_call_list`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_api_call_list_device_id_foreign` (`device_id`);

--
-- Indexes for table `bb_api_list`
--
ALTER TABLE `bb_api_list`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_bank`
--
ALTER TABLE `bb_bank`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_bank_transaction_id_foreign` (`transaction_id`);

--
-- Indexes for table `bb_block_devices`
--
ALTER TABLE `bb_block_devices`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_board_point`
--
ALTER TABLE `bb_board_point`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_board_point_bus_id_foreign` (`bus_id`),
  ADD KEY `bb_board_point_route_id_foreign` (`route_id`);

--
-- Indexes for table `bb_booking_details`
--
ALTER TABLE `bb_booking_details`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_booking_details_bus_id_foreign` (`bus_id`),
  ADD KEY `bb_booking_details_route_id_foreign` (`route_id`),
  ADD KEY `bb_booking_details_board_point_id_foreign` (`board_point_id`),
  ADD KEY `bb_booking_details_drop_point_id_foreign` (`drop_point_id`);

--
-- Indexes for table `bb_bus`
--
ALTER TABLE `bb_bus`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_bus_route_id_foreign` (`route_id`),
  ADD KEY `bb_bus_bus_type_id_foreign` (`bus_type_id`),
  ADD KEY `bb_bus_amenities_id_foreign` (`amenities_id`);

--
-- Indexes for table `bb_bus_cancellation`
--
ALTER TABLE `bb_bus_cancellation`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_bus_cancellation_bus_id_foreign` (`bus_id`),
  ADD KEY `bb_bus_cancellation_route_id_foreign` (`route_id`);

--
-- Indexes for table `bb_bus_gallary`
--
ALTER TABLE `bb_bus_gallary`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_bus_gallary_bus_id_foreign` (`bus_id`);

--
-- Indexes for table `bb_bus_type`
--
ALTER TABLE `bb_bus_type`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_cancellation_policy`
--
ALTER TABLE `bb_cancellation_policy`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_cancellation_policy_bus_id_foreign` (`bus_id`);

--
-- Indexes for table `bb_cash`
--
ALTER TABLE `bb_cash`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_cash_transaction_id_foreign` (`transaction_id`);

--
-- Indexes for table `bb_city`
--
ALTER TABLE `bb_city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bb_city_state_id_foreign` (`state_id`),
  ADD KEY `bb_city_city_id_foreign` (`city_id`);

--
-- Indexes for table `bb_country`
--
ALTER TABLE `bb_country`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_currencies`
--
ALTER TABLE `bb_currencies`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_current_theme`
--
ALTER TABLE `bb_current_theme`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_current_theme_theme_id_foreign` (`theme_id`);

--
-- Indexes for table `bb_customer_details`
--
ALTER TABLE `bb_customer_details`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_customer_wallet`
--
ALTER TABLE `bb_customer_wallet`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_customer_wallet_user_id_foreign` (`user_id`),
  ADD KEY `bb_customer_wallet_transaction_id_foreign` (`transaction_id`);

--
-- Indexes for table `bb_devices`
--
ALTER TABLE `bb_devices`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_devices_user_id_foreign` (`user_id`);

--
-- Indexes for table `bb_drop_point`
--
ALTER TABLE `bb_drop_point`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_drop_point_bus_id_foreign` (`bus_id`),
  ADD KEY `bb_drop_point_route_id_foreign` (`route_id`);

--
-- Indexes for table `bb_label`
--
ALTER TABLE `bb_label`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bb_label_language_id_foreign` (`language_id`);

--
-- Indexes for table `bb_languages`
--
ALTER TABLE `bb_languages`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_migrations`
--
ALTER TABLE `bb_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bb_newsletter`
--
ALTER TABLE `bb_newsletter`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_passenger_details`
--
ALTER TABLE `bb_passenger_details`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_passenger_details_user_id_foreign` (`user_id`),
  ADD KEY `bb_passenger_details_bus_id_foreign` (`bus_id`),
  ADD KEY `bb_passenger_details_ticket_id_foreign` (`ticket_id`);

--
-- Indexes for table `bb_payment_method`
--
ALTER TABLE `bb_payment_method`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_payment_method_detail`
--
ALTER TABLE `bb_payment_method_detail`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_payment_method_detail_payment_method_id_foreign` (`payment_method_id`);

--
-- Indexes for table `bb_promocode`
--
ALTER TABLE `bb_promocode`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_promocode_transaction`
--
ALTER TABLE `bb_promocode_transaction`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_promocode_transaction_promocode_id_foreign` (`promocode_id`);

--
-- Indexes for table `bb_rating`
--
ALTER TABLE `bb_rating`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_rating_user_id_foreign` (`user_id`),
  ADD KEY `bb_rating_bus_id_foreign` (`bus_id`);

--
-- Indexes for table `bb_referral_code`
--
ALTER TABLE `bb_referral_code`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_route`
--
ALTER TABLE `bb_route`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_seat_layout`
--
ALTER TABLE `bb_seat_layout`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_seat_layout_bus_id_foreign` (`bus_id`);

--
-- Indexes for table `bb_setting`
--
ALTER TABLE `bb_setting`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_state`
--
ALTER TABLE `bb_state`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_state_country_id_foreign` (`country_id`);

--
-- Indexes for table `bb_themes`
--
ALTER TABLE `bb_themes`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `bb_ticket_cancellation`
--
ALTER TABLE `bb_ticket_cancellation`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_ticket_cancellation_bus_id_foreign` (`bus_id`),
  ADD KEY `bb_ticket_cancellation_ticket_id_foreign` (`ticket_id`);

--
-- Indexes for table `bb_transaction_history`
--
ALTER TABLE `bb_transaction_history`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_transaction_history_user_id_foreign` (`user_id`);

--
-- Indexes for table `bb_user`
--
ALTER TABLE `bb_user`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `bb_user_activity`
--
ALTER TABLE `bb_user_activity`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `bb_user_activity_user_id_foreign` (`user_id`);

--
-- Indexes for table `bb_user_role`
--
ALTER TABLE `bb_user_role`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bb_amenities`
--
ALTER TABLE `bb_amenities`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_api_call_list`
--
ALTER TABLE `bb_api_call_list`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_api_list`
--
ALTER TABLE `bb_api_list`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_bank`
--
ALTER TABLE `bb_bank`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_block_devices`
--
ALTER TABLE `bb_block_devices`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_board_point`
--
ALTER TABLE `bb_board_point`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_booking_details`
--
ALTER TABLE `bb_booking_details`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_bus`
--
ALTER TABLE `bb_bus`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_bus_cancellation`
--
ALTER TABLE `bb_bus_cancellation`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_bus_gallary`
--
ALTER TABLE `bb_bus_gallary`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_bus_type`
--
ALTER TABLE `bb_bus_type`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_cancellation_policy`
--
ALTER TABLE `bb_cancellation_policy`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_cash`
--
ALTER TABLE `bb_cash`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_city`
--
ALTER TABLE `bb_city`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_country`
--
ALTER TABLE `bb_country`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_currencies`
--
ALTER TABLE `bb_currencies`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_current_theme`
--
ALTER TABLE `bb_current_theme`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_customer_details`
--
ALTER TABLE `bb_customer_details`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_customer_wallet`
--
ALTER TABLE `bb_customer_wallet`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_devices`
--
ALTER TABLE `bb_devices`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_drop_point`
--
ALTER TABLE `bb_drop_point`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_label`
--
ALTER TABLE `bb_label`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_languages`
--
ALTER TABLE `bb_languages`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_migrations`
--
ALTER TABLE `bb_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `bb_newsletter`
--
ALTER TABLE `bb_newsletter`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_passenger_details`
--
ALTER TABLE `bb_passenger_details`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_payment_method`
--
ALTER TABLE `bb_payment_method`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_payment_method_detail`
--
ALTER TABLE `bb_payment_method_detail`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_promocode`
--
ALTER TABLE `bb_promocode`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_promocode_transaction`
--
ALTER TABLE `bb_promocode_transaction`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_rating`
--
ALTER TABLE `bb_rating`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_referral_code`
--
ALTER TABLE `bb_referral_code`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_route`
--
ALTER TABLE `bb_route`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_seat_layout`
--
ALTER TABLE `bb_seat_layout`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_setting`
--
ALTER TABLE `bb_setting`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_state`
--
ALTER TABLE `bb_state`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_themes`
--
ALTER TABLE `bb_themes`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_ticket_cancellation`
--
ALTER TABLE `bb_ticket_cancellation`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_transaction_history`
--
ALTER TABLE `bb_transaction_history`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_user`
--
ALTER TABLE `bb_user`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_user_activity`
--
ALTER TABLE `bb_user_activity`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bb_user_role`
--
ALTER TABLE `bb_user_role`
  MODIFY `_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bb_api_call_list`
--
ALTER TABLE `bb_api_call_list`
  ADD CONSTRAINT `bb_api_call_list_device_id_foreign` FOREIGN KEY (`device_id`) REFERENCES `bb_devices` (`_id`);

--
-- Constraints for table `bb_bank`
--
ALTER TABLE `bb_bank`
  ADD CONSTRAINT `bb_bank_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `bb_transaction_history` (`_id`);

--
-- Constraints for table `bb_board_point`
--
ALTER TABLE `bb_board_point`
  ADD CONSTRAINT `bb_board_point_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`),
  ADD CONSTRAINT `bb_board_point_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `bb_route` (`_id`);

--
-- Constraints for table `bb_booking_details`
--
ALTER TABLE `bb_booking_details`
  ADD CONSTRAINT `bb_booking_details_board_point_id_foreign` FOREIGN KEY (`board_point_id`) REFERENCES `bb_board_point` (`_id`),
  ADD CONSTRAINT `bb_booking_details_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`),
  ADD CONSTRAINT `bb_booking_details_drop_point_id_foreign` FOREIGN KEY (`drop_point_id`) REFERENCES `bb_drop_point` (`_id`),
  ADD CONSTRAINT `bb_booking_details_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `bb_route` (`_id`);

--
-- Constraints for table `bb_bus`
--
ALTER TABLE `bb_bus`
  ADD CONSTRAINT `bb_bus_amenities_id_foreign` FOREIGN KEY (`amenities_id`) REFERENCES `bb_amenities` (`_id`),
  ADD CONSTRAINT `bb_bus_bus_type_id_foreign` FOREIGN KEY (`bus_type_id`) REFERENCES `bb_bus_type` (`_id`),
  ADD CONSTRAINT `bb_bus_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `bb_route` (`_id`);

--
-- Constraints for table `bb_bus_cancellation`
--
ALTER TABLE `bb_bus_cancellation`
  ADD CONSTRAINT `bb_bus_cancellation_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`),
  ADD CONSTRAINT `bb_bus_cancellation_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `bb_route` (`_id`);

--
-- Constraints for table `bb_bus_gallary`
--
ALTER TABLE `bb_bus_gallary`
  ADD CONSTRAINT `bb_bus_gallary_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`);

--
-- Constraints for table `bb_cancellation_policy`
--
ALTER TABLE `bb_cancellation_policy`
  ADD CONSTRAINT `bb_cancellation_policy_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`);

--
-- Constraints for table `bb_cash`
--
ALTER TABLE `bb_cash`
  ADD CONSTRAINT `bb_cash_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `bb_transaction_history` (`_id`);

--
-- Constraints for table `bb_city`
--
ALTER TABLE `bb_city`
  ADD CONSTRAINT `bb_city_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `bb_country` (`_id`),
  ADD CONSTRAINT `bb_city_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `bb_state` (`_id`);

--
-- Constraints for table `bb_current_theme`
--
ALTER TABLE `bb_current_theme`
  ADD CONSTRAINT `bb_current_theme_theme_id_foreign` FOREIGN KEY (`theme_id`) REFERENCES `bb_themes` (`_id`);

--
-- Constraints for table `bb_customer_wallet`
--
ALTER TABLE `bb_customer_wallet`
  ADD CONSTRAINT `bb_customer_wallet_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `bb_transaction_history` (`_id`),
  ADD CONSTRAINT `bb_customer_wallet_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `bb_user` (`_id`);

--
-- Constraints for table `bb_devices`
--
ALTER TABLE `bb_devices`
  ADD CONSTRAINT `bb_devices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `bb_user` (`_id`);

--
-- Constraints for table `bb_drop_point`
--
ALTER TABLE `bb_drop_point`
  ADD CONSTRAINT `bb_drop_point_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`),
  ADD CONSTRAINT `bb_drop_point_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `bb_route` (`_id`);

--
-- Constraints for table `bb_label`
--
ALTER TABLE `bb_label`
  ADD CONSTRAINT `bb_label_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `bb_languages` (`_id`);

--
-- Constraints for table `bb_passenger_details`
--
ALTER TABLE `bb_passenger_details`
  ADD CONSTRAINT `bb_passenger_details_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`),
  ADD CONSTRAINT `bb_passenger_details_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `bb_booking_details` (`_id`),
  ADD CONSTRAINT `bb_passenger_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `bb_user` (`_id`);

--
-- Constraints for table `bb_payment_method_detail`
--
ALTER TABLE `bb_payment_method_detail`
  ADD CONSTRAINT `bb_payment_method_detail_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `bb_payment_method` (`_id`);

--
-- Constraints for table `bb_promocode_transaction`
--
ALTER TABLE `bb_promocode_transaction`
  ADD CONSTRAINT `bb_promocode_transaction_promocode_id_foreign` FOREIGN KEY (`promocode_id`) REFERENCES `bb_promocode` (`_id`);

--
-- Constraints for table `bb_rating`
--
ALTER TABLE `bb_rating`
  ADD CONSTRAINT `bb_rating_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`),
  ADD CONSTRAINT `bb_rating_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `bb_user` (`_id`);

--
-- Constraints for table `bb_seat_layout`
--
ALTER TABLE `bb_seat_layout`
  ADD CONSTRAINT `bb_seat_layout_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`);

--
-- Constraints for table `bb_state`
--
ALTER TABLE `bb_state`
  ADD CONSTRAINT `bb_state_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `bb_country` (`_id`);

--
-- Constraints for table `bb_ticket_cancellation`
--
ALTER TABLE `bb_ticket_cancellation`
  ADD CONSTRAINT `bb_ticket_cancellation_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `bb_bus` (`_id`),
  ADD CONSTRAINT `bb_ticket_cancellation_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `bb_booking_details` (`_id`);

--
-- Constraints for table `bb_transaction_history`
--
ALTER TABLE `bb_transaction_history`
  ADD CONSTRAINT `bb_transaction_history_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `bb_user` (`_id`);

--
-- Constraints for table `bb_user`
--
ALTER TABLE `bb_user`
  ADD CONSTRAINT `bb_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `bb_user_role` (`_id`) ON DELETE CASCADE;

--
-- Constraints for table `bb_user_activity`
--
ALTER TABLE `bb_user_activity`
  ADD CONSTRAINT `bb_user_activity_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `bb_user` (`_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
