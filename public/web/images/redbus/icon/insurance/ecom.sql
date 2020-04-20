-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 07:39 PM
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
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_recorder`
--

CREATE TABLE `action_recorder` (
  `id` int(11) NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `success` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address_book`
--

CREATE TABLE `address_book` (
  `address_book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `entry_gender` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customers_id` int(11) DEFAULT NULL,
  `entry_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_suburb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entry_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_country_id` int(11) NOT NULL DEFAULT 0,
  `entry_zone_id` int(11) NOT NULL DEFAULT 0,
  `entry_latitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_longitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `address_format`
--

CREATE TABLE `address_format` (
  `address_format_id` int(11) NOT NULL,
  `address_format` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_summary` varchar(48) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alert_settings`
--

CREATE TABLE `alert_settings` (
  `alert_id` int(11) NOT NULL,
  `create_customer_email` tinyint(1) NOT NULL DEFAULT 0,
  `create_customer_notification` tinyint(1) NOT NULL DEFAULT 0,
  `order_status_email` tinyint(1) NOT NULL DEFAULT 0,
  `order_status_notification` tinyint(1) NOT NULL DEFAULT 0,
  `new_product_email` tinyint(1) NOT NULL DEFAULT 0,
  `new_product_notification` tinyint(1) NOT NULL DEFAULT 0,
  `forgot_email` tinyint(1) NOT NULL DEFAULT 0,
  `forgot_notification` tinyint(1) NOT NULL DEFAULT 0,
  `news_email` tinyint(1) NOT NULL DEFAULT 0,
  `news_notification` tinyint(1) NOT NULL DEFAULT 0,
  `contact_us_email` tinyint(1) NOT NULL DEFAULT 0,
  `contact_us_notification` tinyint(1) NOT NULL DEFAULT 0,
  `order_email` tinyint(1) NOT NULL DEFAULT 0,
  `order_notification` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alert_settings`
--

INSERT INTO `alert_settings` (`alert_id`, `create_customer_email`, `create_customer_notification`, `order_status_email`, `order_status_notification`, `new_product_email`, `new_product_notification`, `forgot_email`, `forgot_notification`, `news_email`, `news_notification`, `contact_us_email`, `contact_us_notification`, `order_email`, `order_notification`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `api_calls_list`
--

CREATE TABLE `api_calls_list` (
  `id` int(11) NOT NULL,
  `nonce` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `banners_id` int(11) NOT NULL,
  `banners_title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banners_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banners_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banners_group` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banners_html_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expires_impressions` int(11) DEFAULT 0,
  `expires_date` datetime DEFAULT NULL,
  `date_scheduled` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_status_change` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `type` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banners_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners_history`
--

CREATE TABLE `banners_history` (
  `banners_history_id` int(11) NOT NULL,
  `banners_id` int(11) NOT NULL,
  `banners_shown` int(11) NOT NULL DEFAULT 0,
  `banners_clicked` int(11) NOT NULL DEFAULT 0,
  `banners_history_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `block_ips`
--

CREATE TABLE `block_ips` (
  `id` int(11) NOT NULL,
  `device_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `sort_order` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `categories_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_image`, `categories_icon`, `parent_id`, `sort_order`, `date_added`, `last_modified`, `categories_slug`, `categories_status`, `created_at`, `updated_at`) VALUES
(1, '507', '507', 0, NULL, NULL, NULL, 'shirt-for-men', 1, '2020-01-13 02:25:49', '2020-01-28 11:37:56'),
(2, '511', '511', 0, NULL, NULL, NULL, 'two-shirt-combo', 1, '2020-01-13 02:26:07', '2020-01-28 11:44:23'),
(3, '510', '510', 0, NULL, NULL, NULL, 'three-shirt-combo', 1, '2020-01-13 02:26:24', '2020-01-28 11:45:12'),
(8, '506', '506', 0, NULL, NULL, NULL, 'watch', 1, '2020-01-28 19:06:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories_description`
--

CREATE TABLE `categories_description` (
  `categories_description_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL DEFAULT 0,
  `language_id` int(11) NOT NULL DEFAULT 1,
  `categories_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_description`
--

INSERT INTO `categories_description` (`categories_description_id`, `categories_id`, `language_id`, `categories_name`) VALUES
(1, 1, 1, 'SHIRT'),
(2, 2, 1, 'TWO SHIRT COMBO'),
(3, 3, 1, 'THREE SHIRT COMBO'),
(8, 8, 1, 'Watch');

-- --------------------------------------------------------

--
-- Table structure for table `categories_role`
--

CREATE TABLE `categories_role` (
  `categories_role_id` int(11) NOT NULL,
  `categories_ids` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compare`
--

CREATE TABLE `compare` (
  `id` int(11) NOT NULL,
  `product_ids` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `constant_banners`
--

CREATE TABLE `constant_banners` (
  `banners_id` int(11) NOT NULL,
  `banners_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banners_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banners_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `languages_id` int(11) NOT NULL,
  `type` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `constant_banners`
--

INSERT INTO `constant_banners` (`banners_id`, `banners_title`, `banners_url`, `banners_image`, `date_added`, `status`, `languages_id`, `type`) VALUES
(1, 'style0', '', '114', '2019-09-08 18:43:14', 1, 1, '1'),
(2, 'style0', '', '114', '2019-09-08 18:43:25', 1, 1, '2'),
(3, 'banner1', '', '83', '2019-09-08 18:43:34', 1, 1, '3'),
(4, 'banner1', '', '83', '2019-09-08 18:43:42', 1, 1, '4'),
(5, 'banner1', '', '83', '2019-09-08 18:44:15', 1, 1, '5'),
(6, 'banner2_3_4', '', '84', '2019-09-10 08:50:55', 1, 1, '6'),
(7, '7', '', '137', '2020-01-17 04:53:30', 1, 1, '7'),
(8, 'banner2_3_4', '', '86', '2019-09-10 08:54:28', 1, 1, '8'),
(9, 'banner2_3_4', '', '86', '2019-09-10 08:54:38', 1, 1, '9'),
(10, 'banner5_6', '', '92', '2019-09-10 09:31:13', 1, 1, '10'),
(11, 'banner5_6', '', '92', '2019-09-10 09:31:24', 1, 1, '11'),
(12, 'banner5_6', '', '92', '2019-09-10 09:31:35', 1, 1, '12'),
(13, 'banner5_6', '', '92', '2019-09-10 09:32:18', 1, 1, '13'),
(14, 'banner5_6', '', '91', '2019-09-10 09:32:28', 1, 1, '14'),
(15, 'banner7_8', '', '95', '2019-09-10 09:52:02', 1, 1, '15'),
(16, 'banner7_8', '', '96', '2019-09-10 09:52:29', 1, 1, '16'),
(17, 'banner7_8', '', '96', '2019-09-10 09:47:56', 1, 1, '17'),
(18, 'banner7_8', '', '94', '2019-09-10 09:48:05', 1, 1, '18'),
(19, 'banner9', '', '97', '2019-09-10 10:19:03', 1, 1, '19'),
(20, 'banner9', '', '97', '2019-09-10 10:19:13', 1, 1, '20'),
(21, 'banner10_11_12', '', '98', '2019-09-10 10:26:12', 1, 1, '21'),
(22, 'banner10_11_12', '', '96', '2019-09-10 10:26:30', 1, 1, '22'),
(23, 'banner10_11_12', '', '96', '2019-09-10 10:26:41', 1, 1, '23'),
(24, 'banner10_11_12', '', '99', '2019-09-10 10:26:54', 1, 1, '24'),
(25, 'banner13_14_15', '', '100', '2019-09-10 11:01:09', 1, 1, '25'),
(26, 'banner13_14_15', '', '101', '2019-09-10 11:01:27', 1, 1, '26'),
(27, 'banner13_14_15', '', '101', '2019-09-10 11:02:12', 1, 1, '27'),
(28, 'banner13_14_15', '', '101', '2019-09-10 11:02:23', 1, 1, '28'),
(29, 'banner13_14_15', '', '101', '2019-09-10 11:02:36', 1, 1, '29'),
(30, 'banner16_17', '', '104', '2019-09-10 11:19:45', 1, 1, '30'),
(31, 'banner16_17', '', '104', '2019-09-10 11:19:58', 1, 1, '31'),
(32, 'banner16_17', '', '105', '2019-09-10 11:21:00', 1, 1, '32'),
(33, 'banner18_19', '', '116', '2019-09-10 11:30:35', 1, 1, '33'),
(34, 'banner18_19', '', '116', '2019-09-10 11:30:49', 1, 1, '34'),
(35, 'banner18_19', '', '96', '2019-09-10 11:31:04', 1, 1, '35'),
(36, 'banner18_19', '', '96', '2019-09-10 11:31:20', 1, 1, '36'),
(37, 'banner18_19', '', '115', '2019-09-10 11:31:54', 1, 1, '37'),
(38, 'banner18_19', '', '115', '2019-09-10 11:32:06', 1, 1, '38'),
(39, '39', 'https://everything2us.com/product-detail/dark-yellow-slim-fit-cotton-shirt', '126', '2020-01-18 19:07:43', 1, 1, '39'),
(40, '40', '', '128', '2020-01-12 06:20:56', 1, 1, '40');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `countries_id` int(11) NOT NULL,
  `countries_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countries_iso_code_2` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countries_iso_code_3` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_format_id` int(11) NOT NULL,
  `country_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countries_id`, `countries_name`, `countries_iso_code_2`, `countries_iso_code_3`, `address_format_id`, `country_code`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 1, NULL),
(2, 'Albania', 'AL', 'ALB', 1, NULL),
(3, 'Algeria', 'DZ', 'DZA', 1, NULL),
(4, 'American Samoa', 'AS', 'ASM', 1, NULL),
(5, 'Andorra', 'AD', 'AND', 1, NULL),
(6, 'Angola', 'AO', 'AGO', 1, NULL),
(7, 'Anguilla', 'AI', 'AIA', 1, NULL),
(8, 'Antarctica', 'AQ', 'ATA', 1, NULL),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 1, NULL),
(10, 'Argentina', 'AR', 'ARG', 1, NULL),
(11, 'Armenia', 'AM', 'ARM', 1, NULL),
(12, 'Aruba', 'AW', 'ABW', 1, NULL),
(13, 'Australia', 'AU', 'AUS', 1, NULL),
(14, 'Austria', 'AT', 'AUT', 5, NULL),
(15, 'Azerbaijan', 'AZ', 'AZE', 1, NULL),
(16, 'Bahamas', 'BS', 'BHS', 1, NULL),
(17, 'Bahrain', 'BH', 'BHR', 1, NULL),
(18, 'Bangladesh', 'BD', 'BGD', 1, NULL),
(19, 'Barbados', 'BB', 'BRB', 1, NULL),
(20, 'Belarus', 'BY', 'BLR', 1, NULL),
(21, 'Belgium', 'BE', 'BEL', 1, NULL),
(22, 'Belize', 'BZ', 'BLZ', 1, NULL),
(23, 'Benin', 'BJ', 'BEN', 1, NULL),
(24, 'Bermuda', 'BM', 'BMU', 1, NULL),
(25, 'Bhutan', 'BT', 'BTN', 1, NULL),
(26, 'Bolivia', 'BO', 'BOL', 1, NULL),
(27, 'Bosnia and Herzegowina', 'BA', 'BIH', 1, NULL),
(28, 'Botswana', 'BW', 'BWA', 1, NULL),
(29, 'Bouvet Island', 'BV', 'BVT', 1, NULL),
(30, 'Brazil', 'BR', 'BRA', 1, NULL),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 1, NULL),
(32, 'Brunei Darussalam', 'BN', 'BRN', 1, NULL),
(33, 'Bulgaria', 'BG', 'BGR', 1, NULL),
(34, 'Burkina Faso', 'BF', 'BFA', 1, NULL),
(35, 'Burundi', 'BI', 'BDI', 1, NULL),
(36, 'Cambodia', 'KH', 'KHM', 1, NULL),
(37, 'Cameroon', 'CM', 'CMR', 1, NULL),
(38, 'Canada', 'CA', 'CAN', 1, NULL),
(39, 'Cape Verde', 'CV', 'CPV', 1, NULL),
(40, 'Cayman Islands', 'KY', 'CYM', 1, NULL),
(41, 'Central African Republic', 'CF', 'CAF', 1, NULL),
(42, 'Chad', 'TD', 'TCD', 1, NULL),
(43, 'Chile', 'CL', 'CHL', 1, NULL),
(44, 'China', 'CN', 'CHN', 1, NULL),
(45, 'Christmas Island', 'CX', 'CXR', 1, NULL),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK', 1, NULL),
(47, 'Colombia', 'CO', 'COL', 1, NULL),
(48, 'Comoros', 'KM', 'COM', 1, NULL),
(49, 'Congo', 'CG', 'COG', 1, NULL),
(50, 'Cook Islands', 'CK', 'COK', 1, NULL),
(51, 'Costa Rica', 'CR', 'CRI', 1, NULL),
(52, 'Cote D\'Ivoire', 'CI', 'CIV', 1, NULL),
(53, 'Croatia', 'HR', 'HRV', 1, NULL),
(54, 'Cuba', 'CU', 'CUB', 1, NULL),
(55, 'Cyprus', 'CY', 'CYP', 1, NULL),
(56, 'Czech Republic', 'CZ', 'CZE', 1, NULL),
(57, 'Denmark', 'DK', 'DNK', 1, NULL),
(58, 'Djibouti', 'DJ', 'DJI', 1, NULL),
(59, 'Dominica', 'DM', 'DMA', 1, NULL),
(60, 'Dominican Republic', 'DO', 'DOM', 1, NULL),
(61, 'East Timor', 'TP', 'TMP', 1, NULL),
(62, 'Ecuador', 'EC', 'ECU', 1, NULL),
(63, 'Egypt', 'EG', 'EGY', 1, NULL),
(64, 'El Salvador', 'SV', 'SLV', 1, NULL),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 1, NULL),
(66, 'Eritrea', 'ER', 'ERI', 1, NULL),
(67, 'Estonia', 'EE', 'EST', 1, NULL),
(68, 'Ethiopia', 'ET', 'ETH', 1, NULL),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 1, NULL),
(70, 'Faroe Islands', 'FO', 'FRO', 1, NULL),
(71, 'Fiji', 'FJ', 'FJI', 1, NULL),
(72, 'Finland', 'FI', 'FIN', 1, NULL),
(73, 'France', 'FR', 'FRA', 1, NULL),
(74, 'France, Metropolitan', 'FX', 'FXX', 1, NULL),
(75, 'French Guiana', 'GF', 'GUF', 1, NULL),
(76, 'French Polynesia', 'PF', 'PYF', 1, NULL),
(77, 'French Southern Territories', 'TF', 'ATF', 1, NULL),
(78, 'Gabon', 'GA', 'GAB', 1, NULL),
(79, 'Gambia', 'GM', 'GMB', 1, NULL),
(80, 'Georgia', 'GE', 'GEO', 1, NULL),
(81, 'Germany', 'DE', 'DEU', 5, NULL),
(82, 'Ghana', 'GH', 'GHA', 1, NULL),
(83, 'Gibraltar', 'GI', 'GIB', 1, NULL),
(84, 'Greece', 'GR', 'GRC', 1, NULL),
(85, 'Greenland', 'GL', 'GRL', 1, NULL),
(86, 'Grenada', 'GD', 'GRD', 1, NULL),
(87, 'Guadeloupe', 'GP', 'GLP', 1, NULL),
(88, 'Guam', 'GU', 'GUM', 1, NULL),
(89, 'Guatemala', 'GT', 'GTM', 1, NULL),
(90, 'Guinea', 'GN', 'GIN', 1, NULL),
(91, 'Guinea-bissau', 'GW', 'GNB', 1, NULL),
(92, 'Guyana', 'GY', 'GUY', 1, NULL),
(93, 'Haiti', 'HT', 'HTI', 1, NULL),
(94, 'Heard and Mc Donald Islands', 'HM', 'HMD', 1, NULL),
(95, 'Honduras', 'HN', 'HND', 1, NULL),
(96, 'Hong Kong', 'HK', 'HKG', 1, NULL),
(97, 'Hungary', 'HU', 'HUN', 1, NULL),
(98, 'Iceland', 'IS', 'ISL', 1, NULL),
(99, 'India', 'IN', 'IND', 1, NULL),
(100, 'Indonesia', 'ID', 'IDN', 1, NULL),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN', 1, NULL),
(102, 'Iraq', 'IQ', 'IRQ', 1, NULL),
(103, 'Ireland', 'IE', 'IRL', 1, NULL),
(104, 'Israel', 'IL', 'ISR', 1, NULL),
(105, 'Italy', 'IT', 'ITA', 1, NULL),
(106, 'Jamaica', 'JM', 'JAM', 1, NULL),
(107, 'Japan', 'JP', 'JPN', 1, NULL),
(108, 'Jordan', 'JO', 'JOR', 1, NULL),
(109, 'Kazakhstan', 'KZ', 'KAZ', 1, NULL),
(110, 'Kenya', 'KE', 'KEN', 1, NULL),
(111, 'Kiribati', 'KI', 'KIR', 1, NULL),
(112, 'Korea, Democratic People\'s Republic of', 'KP', 'PRK', 1, NULL),
(113, 'Korea, Republic of', 'KR', 'KOR', 1, NULL),
(114, 'Kuwait', 'KW', 'KWT', 1, NULL),
(115, 'Kyrgyzstan', 'KG', 'KGZ', 1, NULL),
(116, 'Lao People\'s Democratic Republic', 'LA', 'LAO', 1, NULL),
(117, 'Latvia', 'LV', 'LVA', 1, NULL),
(118, 'Lebanon', 'LB', 'LBN', 1, NULL),
(119, 'Lesotho', 'LS', 'LSO', 1, NULL),
(120, 'Liberia', 'LR', 'LBR', 1, NULL),
(121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 1, NULL),
(122, 'Liechtenstein', 'LI', 'LIE', 1, NULL),
(123, 'Lithuania', 'LT', 'LTU', 1, NULL),
(124, 'Luxembourg', 'LU', 'LUX', 1, NULL),
(125, 'Macau', 'MO', 'MAC', 1, NULL),
(126, 'Macedonia, The Former Yugoslav Republic of', 'MK', 'MKD', 1, NULL),
(127, 'Madagascar', 'MG', 'MDG', 1, NULL),
(128, 'Malawi', 'MW', 'MWI', 1, NULL),
(129, 'Malaysia', 'MY', 'MYS', 1, NULL),
(130, 'Maldives', 'MV', 'MDV', 1, NULL),
(131, 'Mali', 'ML', 'MLI', 1, NULL),
(132, 'Malta', 'MT', 'MLT', 1, NULL),
(133, 'Marshall Islands', 'MH', 'MHL', 1, NULL),
(134, 'Martinique', 'MQ', 'MTQ', 1, NULL),
(135, 'Mauritania', 'MR', 'MRT', 1, NULL),
(136, 'Mauritius', 'MU', 'MUS', 1, NULL),
(137, 'Mayotte', 'YT', 'MYT', 1, NULL),
(138, 'Mexico', 'MX', 'MEX', 1, NULL),
(139, 'Micronesia, Federated States of', 'FM', 'FSM', 1, NULL),
(140, 'Moldova, Republic of', 'MD', 'MDA', 1, NULL),
(141, 'Monaco', 'MC', 'MCO', 1, NULL),
(142, 'Mongolia', 'MN', 'MNG', 1, NULL),
(143, 'Montserrat', 'MS', 'MSR', 1, NULL),
(144, 'Morocco', 'MA', 'MAR', 1, NULL),
(145, 'Mozambique', 'MZ', 'MOZ', 1, NULL),
(146, 'Myanmar', 'MM', 'MMR', 1, NULL),
(147, 'Namibia', 'NA', 'NAM', 1, NULL),
(148, 'Nauru', 'NR', 'NRU', 1, NULL),
(149, 'Nepal', 'NP', 'NPL', 1, NULL),
(150, 'Netherlands', 'NL', 'NLD', 1, NULL),
(151, 'Netherlands Antilles', 'AN', 'ANT', 1, NULL),
(152, 'New Caledonia', 'NC', 'NCL', 1, NULL),
(153, 'New Zealand', 'NZ', 'NZL', 1, NULL),
(154, 'Nicaragua', 'NI', 'NIC', 1, NULL),
(155, 'Niger', 'NE', 'NER', 1, NULL),
(156, 'Nigeria', 'NG', 'NGA', 1, NULL),
(157, 'Niue', 'NU', 'NIU', 1, NULL),
(158, 'Norfolk Island', 'NF', 'NFK', 1, NULL),
(159, 'Northern Mariana Islands', 'MP', 'MNP', 1, NULL),
(160, 'Norway', 'NO', 'NOR', 1, NULL),
(161, 'Oman', 'OM', 'OMN', 1, NULL),
(162, 'Pakistan', 'PK', 'PAK', 1, NULL),
(163, 'Palau', 'PW', 'PLW', 1, NULL),
(164, 'Panama', 'PA', 'PAN', 1, NULL),
(165, 'Papua New Guinea', 'PG', 'PNG', 1, NULL),
(166, 'Paraguay', 'PY', 'PRY', 1, NULL),
(167, 'Peru', 'PE', 'PER', 1, NULL),
(168, 'Philippines', 'PH', 'PHL', 1, NULL),
(169, 'Pitcairn', 'PN', 'PCN', 1, NULL),
(170, 'Poland', 'PL', 'POL', 1, NULL),
(171, 'Portugal', 'PT', 'PRT', 1, NULL),
(172, 'Puerto Rico', 'PR', 'PRI', 1, NULL),
(173, 'Qatar', 'QA', 'QAT', 1, NULL),
(174, 'Reunion', 'RE', 'REU', 1, NULL),
(175, 'Romania', 'RO', 'ROM', 1, NULL),
(176, 'Russian Federation', 'RU', 'RUS', 1, NULL),
(177, 'Rwanda', 'RW', 'RWA', 1, NULL),
(178, 'Saint Kitts and Nevis', 'KN', 'KNA', 1, NULL),
(179, 'Saint Lucia', 'LC', 'LCA', 1, NULL),
(180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 1, NULL),
(181, 'Samoa', 'WS', 'WSM', 1, NULL),
(182, 'San Marino', 'SM', 'SMR', 1, NULL),
(183, 'Sao Tome and Principe', 'ST', 'STP', 1, NULL),
(184, 'Saudi Arabia', 'SA', 'SAU', 1, NULL),
(185, 'Senegal', 'SN', 'SEN', 1, NULL),
(186, 'Seychelles', 'SC', 'SYC', 1, NULL),
(187, 'Sierra Leone', 'SL', 'SLE', 1, NULL),
(188, 'Singapore', 'SG', 'SGP', 4, NULL),
(189, 'Slovakia (Slovak Republic)', 'SK', 'SVK', 1, NULL),
(190, 'Slovenia', 'SI', 'SVN', 1, NULL),
(191, 'Solomon Islands', 'SB', 'SLB', 1, NULL),
(192, 'Somalia', 'SO', 'SOM', 1, NULL),
(193, 'South Africa', 'ZA', 'ZAF', 1, NULL),
(194, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 1, NULL),
(195, 'Spain', 'ES', 'ESP', 3, NULL),
(196, 'Sri Lanka', 'LK', 'LKA', 1, NULL),
(197, 'St. Helena', 'SH', 'SHN', 1, NULL),
(198, 'St. Pierre and Miquelon', 'PM', 'SPM', 1, NULL),
(199, 'Sudan', 'SD', 'SDN', 1, NULL),
(200, 'Suriname', 'SR', 'SUR', 1, NULL),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', 1, NULL),
(202, 'Swaziland', 'SZ', 'SWZ', 1, NULL),
(203, 'Sweden', 'SE', 'SWE', 1, NULL),
(204, 'Switzerland', 'CH', 'CHE', 1, NULL),
(205, 'Syrian Arab Republic', 'SY', 'SYR', 1, NULL),
(206, 'Taiwan', 'TW', 'TWN', 1, NULL),
(207, 'Tajikistan', 'TJ', 'TJK', 1, NULL),
(208, 'Tanzania, United Republic of', 'TZ', 'TZA', 1, NULL),
(209, 'Thailand', 'TH', 'THA', 1, NULL),
(210, 'Togo', 'TG', 'TGO', 1, NULL),
(211, 'Tokelau', 'TK', 'TKL', 1, NULL),
(212, 'Tonga', 'TO', 'TON', 1, NULL),
(213, 'Trinidad and Tobago', 'TT', 'TTO', 1, NULL),
(214, 'Tunisia', 'TN', 'TUN', 1, NULL),
(215, 'Turkey', 'TR', 'TUR', 1, NULL),
(216, 'Turkmenistan', 'TM', 'TKM', 1, NULL),
(217, 'Turks and Caicos Islands', 'TC', 'TCA', 1, NULL),
(218, 'Tuvalu', 'TV', 'TUV', 1, NULL),
(219, 'Uganda', 'UG', 'UGA', 1, NULL),
(220, 'Ukraine', 'UA', 'UKR', 1, NULL),
(221, 'United Arab Emirates', 'AE', 'ARE', 1, NULL),
(222, 'United Kingdom', 'GB', 'GBR', 1, NULL),
(223, 'United States', 'US', 'USA', 2, NULL),
(224, 'United States Minor Outlying Islands', 'UM', 'UMI', 1, NULL),
(225, 'Uruguay', 'UY', 'URY', 1, NULL),
(226, 'Uzbekistan', 'UZ', 'UZB', 1, NULL),
(227, 'Vanuatu', 'VU', 'VUT', 1, NULL),
(228, 'Vatican City State (Holy See)', 'VA', 'VAT', 1, NULL),
(229, 'Venezuela', 'VE', 'VEN', 1, NULL),
(230, 'Viet Nam', 'VN', 'VNM', 1, NULL),
(231, 'Virgin Islands (British)', 'VG', 'VGB', 1, NULL),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR', 1, NULL),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF', 1, NULL),
(234, 'Western Sahara', 'EH', 'ESH', 1, NULL),
(235, 'Yemen', 'YE', 'YEM', 1, NULL),
(236, 'Yugoslavia', 'YU', 'YUG', 1, NULL),
(237, 'Zaire', 'ZR', 'ZAR', 1, NULL),
(238, 'Zambia', 'ZM', 'ZMB', 1, NULL),
(239, 'Zimbabwe', 'ZW', 'ZWE', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupans_id` int(11) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Options: fixed_cart, percent, fixed_product and percent_product. Default: fixed_cart.',
  `amount` int(11) NOT NULL,
  `expiry_date` datetime NOT NULL,
  `usage_count` int(11) NOT NULL,
  `individual_use` tinyint(1) NOT NULL DEFAULT 0,
  `product_ids` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exclude_product_ids` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage_limit` int(11) DEFAULT NULL,
  `usage_limit_per_user` int(11) DEFAULT NULL,
  `limit_usage_to_x_items` int(11) NOT NULL,
  `free_shipping` tinyint(1) NOT NULL DEFAULT 0,
  `product_categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excluded_product_categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exclude_sale_items` tinyint(1) NOT NULL DEFAULT 0,
  `minimum_amount` decimal(10,2) NOT NULL,
  `maximum_amount` decimal(10,2) NOT NULL,
  `email_restrictions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `used_by` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` char(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol_left` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol_right` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_point` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thousands_point` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_places` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `value` double(13,8) DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `is_current` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `title`, `code`, `symbol_left`, `symbol_right`, `decimal_point`, `thousands_point`, `decimal_places`, `created_at`, `updated_at`, `value`, `is_default`, `status`, `is_current`) VALUES
(1, 'INR', 'INR', 'Rs.', NULL, NULL, NULL, '2', '2020-01-12 11:14:13', '2020-01-12 11:14:13', 1.00000000, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `currency_record`
--

CREATE TABLE `currency_record` (
  `id` int(11) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_record`
--

INSERT INTO `currency_record` (`id`, `code`, `currency_name`) VALUES
(1, 'AED', 'United Arab Emirates Dirham'),
(2, 'AFN', 'Afghan Afghani'),
(3, 'ALL', 'Albanian Lek'),
(4, 'AMD', 'Armenian Dram'),
(5, 'ANG', 'Netherlands Antillean Guilder'),
(6, 'AOA', 'Angolan Kwanza'),
(7, 'ARS', 'Argentine Peso'),
(8, 'AUD', 'Australian Dollar'),
(9, 'AWG', 'Aruban Florin'),
(10, 'AZN', 'Azerbaijani Manat'),
(11, 'BAM', 'Bosnia-Herzegovina Convertible Mark'),
(12, 'BBD', 'Barbadian Dollar'),
(13, 'BDT', 'Bangladeshi Taka'),
(14, 'BGN', 'Bulgarian Lev'),
(15, 'BHD', 'Bahraini Dinar'),
(16, 'BIF', 'Burundian Franc'),
(17, 'BMD', 'Bermudan Dollar'),
(18, 'BND', 'Brunei Dollar'),
(19, 'BOB', 'Bolivian Boliviano'),
(20, 'BRL', 'Brazilian Real'),
(21, 'BSD', 'Bahamian Dollar'),
(22, 'BTC', 'Bitcoin'),
(23, 'BTN', 'Bhutanese Ngultrum'),
(24, 'BWP', 'Botswanan Pula'),
(25, 'BYN', 'Belarusian Ruble'),
(26, 'BZD', 'Belize Dollar'),
(27, 'CAD', 'Canadian Dollar'),
(28, 'CDF', 'Congolese Franc'),
(29, 'CHF', 'Swiss Franc'),
(30, 'CLF', 'Chilean Unit of Account (UF)'),
(31, 'CLP', 'Chilean Peso'),
(32, 'CNH', 'Chinese Yuan (Offshore)'),
(33, 'CNY', 'Chinese Yuan'),
(34, 'COP', 'Colombian Peso'),
(35, 'CRC', 'Costa Rican Colón'),
(36, 'CUC', 'Cuban Convertible Peso'),
(37, 'CUP', 'Cuban Peso'),
(38, 'CVE', 'Cape Verdean Escudo'),
(39, 'CZK', 'Czech Republic Koruna'),
(40, 'DJF', 'Djiboutian Franc'),
(41, 'DKK', 'Danish Krone'),
(42, 'DOP', 'Dominican Peso'),
(43, 'DZD', 'Algerian Dinar'),
(44, 'EGP', 'Egyptian Pound'),
(45, 'ERN', 'Eritrean Nakfa'),
(46, 'ETB', 'Ethiopian Birr'),
(47, 'EUR', 'Euro'),
(48, 'FJD', 'Fijian Dollar'),
(49, 'FKP', 'Falkland Islands Pound'),
(50, 'GBP', 'British Pound Sterling'),
(51, 'GEL', 'Georgian Lari'),
(52, 'GGP', 'Guernsey Pound'),
(53, 'GHS', 'Ghanaian Cedi'),
(54, 'GIP', 'Gibraltar Pound'),
(55, 'GMD', 'Gambian Dalasi'),
(56, 'GNF', 'Guinean Franc'),
(57, 'GTQ', 'Guatemalan Quetzal'),
(58, 'GYD', 'Guyanaese Dollar'),
(59, 'HKD', 'Hong Kong Dollar'),
(60, 'HNL', 'Honduran Lempira'),
(61, 'HRK', 'Croatian Kuna'),
(62, 'HTG', 'Haitian Gourde'),
(63, 'HUF', 'Hungarian Forint'),
(64, 'IDR', 'Indonesian Rupiah'),
(65, 'ILS', 'Israeli New Sheqel'),
(66, 'IMP', 'Manx pound'),
(67, 'INR', 'Indian Rupee'),
(68, 'IQD', 'Iraqi Dinar'),
(69, 'IRR', 'Iranian Rial'),
(70, 'ISK', 'Icelandic Króna'),
(71, 'JEP', 'Jersey Pound'),
(72, 'JMD', 'Jamaican Dollar'),
(73, 'JOD', 'Jordanian Dinar'),
(74, 'JPY', 'Japanese Yen'),
(75, 'KES', 'Kenyan Shilling'),
(76, 'KGS', 'Kyrgystani Som'),
(77, 'KHR', 'Cambodian Riel'),
(78, 'KMF', 'Comorian Franc'),
(79, 'KPW', 'North Korean Won'),
(80, 'KRW', 'South Korean Won'),
(81, 'KWD', 'Kuwaiti Dinar'),
(82, 'KYD', 'Cayman Islands Dollar'),
(83, 'KZT', 'Kazakhstani Tenge'),
(84, 'LAK', 'Laotian Kip'),
(85, 'LBP', 'Lebanese Pound'),
(86, 'LKR', 'Sri Lankan Rupee'),
(87, 'LRD', 'Liberian Dollar'),
(88, 'LSL', 'Lesotho Loti'),
(89, 'LYD', 'Libyan Dinar'),
(90, 'MAD', 'Moroccan Dirham'),
(91, 'MDL', 'Moldovan Leu'),
(92, 'MGA', 'Malagasy Ariary'),
(93, 'MKD', 'Macedonian Denar'),
(94, 'MMK', 'Myanma Kyat'),
(95, 'MNT', 'Mongolian Tugrik'),
(96, 'MOP', 'Macanese Pataca'),
(97, 'MRO', 'Mauritanian Ouguiya (pre-2018)'),
(98, 'MRU', 'Mauritanian Ouguiya'),
(99, 'MUR', 'Mauritian Rupee'),
(100, 'MVR', 'Maldivian Rufiyaa'),
(101, 'MWK', 'Malawian Kwacha'),
(102, 'MXN', 'Mexican Peso'),
(103, 'MYR', 'Malaysian Ringgit'),
(104, 'MZN', 'Mozambican Metical'),
(105, 'NAD', 'Namibian Dollar'),
(106, 'NGN', 'Nigerian Naira'),
(107, 'NIO', 'Nicaraguan Córdoba'),
(108, 'NOK', 'Norwegian Krone'),
(109, 'NPR', 'Nepalese Rupee'),
(110, 'NZD', 'New Zealand Dollar'),
(111, 'OMR', 'Omani Rial'),
(112, 'PAB', 'Panamanian Balboa'),
(113, 'PEN', 'Peruvian Nuevo Sol'),
(114, 'PGK', 'Papua New Guinean Kina'),
(115, 'PHP', 'Philippine Peso'),
(116, 'PKR', 'Pakistani Rupee'),
(117, 'PLN', 'Polish Zloty'),
(118, 'PYG', 'Paraguayan Guarani'),
(119, 'QAR', 'Qatari Rial'),
(120, 'RON', 'Romanian Leu'),
(121, 'RSD', 'Serbian Dinar'),
(122, 'RUB', 'Russian Ruble'),
(123, 'RWF', 'Rwandan Franc'),
(124, 'SAR', 'Saudi Riyal'),
(125, 'SBD', 'Solomon Islands Dollar'),
(126, 'SCR', 'Seychellois Rupee'),
(127, 'SDG', 'Sudanese Pound'),
(128, 'SEK', 'Swedish Krona'),
(129, 'SGD', 'Singapore Dollar'),
(130, 'SHP', 'Saint Helena Pound'),
(131, 'SLL', 'Sierra Leonean Leone'),
(132, 'SOS', 'Somali Shilling'),
(133, 'SRD', 'Surinamese Dollar'),
(134, 'SSP', 'South Sudanese Pound'),
(135, 'STD', 'São Tomé and Príncipe Dobra (pre-2018)'),
(136, 'STN', 'São Tomé and Príncipe Dobra'),
(137, 'SVC', 'Salvadoran Colón'),
(138, 'SYP', 'Syrian Pound'),
(139, 'SZL', 'Swazi Lilangeni'),
(140, 'THB', 'Thai Baht'),
(141, 'TJS', 'Tajikistani Somoni'),
(142, 'TMT', 'Turkmenistani Manat'),
(143, 'TND', 'Tunisian Dinar'),
(144, 'TOP', 'Tongan Pa\'anga'),
(145, 'TRY', 'Turkish Lira'),
(146, 'TTD', 'Trinidad and Tobago Dollar'),
(147, 'TWD', 'New Taiwan Dollar'),
(148, 'TZS', 'Tanzanian Shilling'),
(149, 'UAH', 'Ukrainian Hryvnia'),
(150, 'UGX', 'Ugandan Shilling'),
(151, 'USD', 'United States Dollar'),
(152, 'UYU', 'Uruguayan Peso'),
(153, 'UZS', 'Uzbekistan Som'),
(154, 'VEF', 'Venezuelan Bolívar Fuerte'),
(155, 'VND', 'Vietnamese Dong'),
(156, 'VUV', 'Vanuatu Vatu'),
(157, 'WST', 'Samoan Tala'),
(158, 'XAF', 'CFA Franc BEAC'),
(159, 'XAG', 'Silver Ounce'),
(160, 'XAU', 'Gold Ounce'),
(161, 'XCD', 'East Caribbean Dollar'),
(162, 'XDR', 'Special Drawing Rights'),
(163, 'XOF', 'CFA Franc BCEAO'),
(164, 'XPD', 'Palladium Ounce'),
(165, 'XPF', 'CFP Franc'),
(166, 'XPT', 'Platinum Ounce'),
(167, 'YER', 'Yemeni Rial'),
(168, 'ZAR', 'South African Rand'),
(169, 'ZMW', 'Zambian Kwacha'),
(170, 'ZWL', 'Zimbabwean Dollar');

-- --------------------------------------------------------

--
-- Table structure for table `current_theme`
--

CREATE TABLE `current_theme` (
  `id` int(11) NOT NULL,
  `header` int(11) NOT NULL,
  `carousel` int(11) NOT NULL,
  `banner` int(11) NOT NULL,
  `footer` int(11) NOT NULL,
  `product_section_order` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` int(11) NOT NULL,
  `news` int(11) NOT NULL,
  `detail` int(11) NOT NULL,
  `shop` int(11) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `current_theme`
--

INSERT INTO `current_theme` (`id`, `header`, `carousel`, `banner`, `footer`, `product_section_order`, `cart`, `news`, `detail`, `shop`, `contact`) VALUES
(1, 1, 1, 1, 1, '[{\"id\":10,\"name\":\"Second Ad Section\",\"order\":1,\"file_name\":\"sec_ad_banner\",\"status\":1,\"image\":\"images\\/prototypes\\/sec_ad_section.jpg\",\"disabled_image\":\"images\\/prototypes\\/sec_ad_section-cross.jpg\",\"alt\":\"Second Ad Section\"},{\"id\":5,\"name\":\"Categories\",\"order\":2,\"file_name\":\"categories\",\"status\":1,\"image\":\"images\\/prototypes\\/categories.jpg\",\"disabled_image\":\"images\\/prototypes\\/categories-cross.jpg\",\"alt\":\"Categories\"},{\"id\":1,\"name\":\"Banner Section\",\"order\":3,\"file_name\":\"banner_section\",\"status\":0,\"image\":\"images\\/prototypes\\/banner_section.jpg\",\"alt\":\"Banner Section\"},{\"id\":9,\"name\":\"Top Selling\",\"order\":4,\"file_name\":\"top\",\"status\":1,\"image\":\"images\\/prototypes\\/top.jpg\",\"disabled_image\":\"images\\/prototypes\\/top-cross.jpg\",\"alt\":\"Top Selling\"},{\"id\":8,\"name\":\"Newest Product Section\",\"order\":5,\"file_name\":\"newest_product\",\"status\":1,\"image\":\"images\\/prototypes\\/newest_product.jpg\",\"disabled_image\":\"images\\/prototypes\\/newest_product-cross.jpg\",\"alt\":\"Newest Product Section\"},{\"id\":11,\"name\":\"Tab Products View\",\"order\":6,\"file_name\":\"tab\",\"status\":1,\"image\":\"images\\/prototypes\\/tab.jpg\",\"disabled_image\":\"images\\/prototypes\\/tab-cross.jpg\",\"alt\":\"Tab Products View\"},{\"id\":3,\"name\":\"Special Products Section\",\"order\":7,\"file_name\":\"special\",\"status\":1,\"image\":\"images\\/prototypes\\/special_product.jpg\",\"disabled_image\":\"images\\/prototypes\\/special_product-cross.jpg\",\"alt\":\"Special Products Section\"},{\"id\":2,\"name\":\"Flash Sale Section\",\"order\":8,\"file_name\":\"flash_sale_section\",\"status\":1,\"image\":\"images\\/prototypes\\/flash_sale_section.jpg\",\"disabled_image\":\"images\\/prototypes\\/flash_sale_section-cross.jpg\",\"alt\":\"Flash Sale Section\"},{\"id\":4,\"name\":\"Ad Section\",\"order\":9,\"file_name\":\"ad_banner_section\",\"status\":1,\"image\":\"images\\/prototypes\\/ad_banner_section.jpg\",\"disabled_image\":\"images\\/prototypes\\/ad_banner_section-cross.jpg\",\"alt\":\"Ad Section\"},{\"id\":6,\"name\":\"Blog Section\",\"order\":10,\"file_name\":\"blog_section\",\"status\":1,\"image\":\"images\\/prototypes\\/blog_section.jpg\",\"disabled_image\":\"images\\/prototypes\\/blog_section-cross.jpg\",\"alt\":\"Blog Section\"},{\"id\":7,\"name\":\"Info Boxes\",\"order\":11,\"file_name\":\"info_boxes\",\"status\":1,\"image\":\"images\\/prototypes\\/info_boxes.jpg\",\"disabled_image\":\"images\\/prototypes\\/info_boxes-cross.jpg\",\"alt\":\"Info Boxes\"}]', 1, 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customers_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `customers_fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customers_newsletter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_id_tiwilo` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers_basket`
--

CREATE TABLE `customers_basket` (
  `customers_basket_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `products_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_basket_quantity` int(11) NOT NULL,
  `final_price` decimal(15,2) DEFAULT NULL,
  `customers_basket_date_added` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_order` tinyint(1) NOT NULL DEFAULT 0,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers_basket`
--

INSERT INTO `customers_basket` (`customers_basket_id`, `customers_id`, `products_id`, `customers_basket_quantity`, `final_price`, `customers_basket_date_added`, `is_order`, `session_id`) VALUES
(1, 0, '1', 1, '399.00', '2020-01-12', 0, 'wZ6oQbOicg2BIqU1rbc4dFRQHjWtwPw7a6APoRmg'),
(5, 5, '1', 1, '3.00', '2020-01-12', 1, 'uND9k5ZhEcj3HO1lT2Gy9po1OD2TOJw30vg1C6vs'),
(6, 5, '1', 1, '3.00', '2020-01-12', 1, 'uND9k5ZhEcj3HO1lT2Gy9po1OD2TOJw30vg1C6vs'),
(7, 4, '1', 1, '3.00', '2020-01-12', 1, 'SPYMJVO1Dg4hPH1FwDBsvPn1EvU8OO2xsd7guCX1'),
(8, 5, '1', 1, '3.00', '2020-01-12', 1, 'J8rXanhPeIxSl5bbpAMSLTmlXmkspKnAp86uqZZg'),
(9, 5, '1', 1, '3.00', '2020-01-12', 1, 'uND9k5ZhEcj3HO1lT2Gy9po1OD2TOJw30vg1C6vs'),
(10, 5, '1', 1, '3.00', '2020-01-12', 1, 'uND9k5ZhEcj3HO1lT2Gy9po1OD2TOJw30vg1C6vs'),
(11, 6, '1', 1, '3.00', '2020-01-12', 1, 'jPDooR9pZtuHxZf891UddyKw6aej1O7F1RyDlxyw'),
(12, 6, '1', 1, '3.00', '2020-01-12', 1, '3QtZSGqi3BuFF3rwf03KD0ZTEgoBf2II8BB32xty'),
(13, 6, '1', 1, '3.00', '2020-01-12', 1, 'G1pp1LZQ8asi6njFYoOYC4Rhv4v3ncaCEuUfRcBG'),
(15, 5, '1', 1, '3.00', '2020-01-12', 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(16, 5, '1', 1, '3.00', '2020-01-12', 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(17, 5, '1', 1, '3.00', '2020-01-12', 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(18, 6, '1', 1, '3.00', '2020-01-12', 1, 'Ammjh1oG126xmbSirbjfoWfqvq1lRSK2JBRRciPf'),
(19, 6, '1', 1, '3.00', '2020-01-12', 1, 'xFysBv5AOHejveAkHF3N6xF3zlOdjsMFH9bFLWv9'),
(20, 5, '1', 1, '3.00', '2020-01-12', 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(21, 6, '1', 1, '3.00', '2020-01-12', 1, 'xFysBv5AOHejveAkHF3N6xF3zlOdjsMFH9bFLWv9'),
(22, 5, '1', 1, '3.00', '2020-01-12', 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(23, 5, '1', 1, '3.00', '2020-01-12', 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(24, 4, '1', 1, '3.00', '2020-01-12', 1, 'SPYMJVO1Dg4hPH1FwDBsvPn1EvU8OO2xsd7guCX1'),
(25, 4, '1', 1, '3.00', '2020-01-12', 0, 'SPYMJVO1Dg4hPH1FwDBsvPn1EvU8OO2xsd7guCX1'),
(26, 6, '1', 1, '3.00', '2020-01-12', 1, 'xFysBv5AOHejveAkHF3N6xF3zlOdjsMFH9bFLWv9'),
(28, 0, '1', 1, '349.00', '2020-01-12', 0, '0yAAbQcVom53DnDNbvWmrJYwh9rsIUfY3PSIGIm5'),
(31, 0, '18', 1, '499.00', '2020-01-17', 0, 'he1yACNBglLZoDoSfBvgUMXT82snKYZ2jlZRieqA'),
(34, 9, '13', 1, '499.00', '2020-01-18', 1, 'OMQDDEnDPc4MZHDTCoBUN27H8VqvI1QNALJKJiiv'),
(35, 7, '18', 1, '499.00', '2020-01-20', 1, 'u0swbcqP0dTQshiR3wszyf3YCrBeo3XuBSKDwDcU'),
(36, 5, '18', 1, '499.00', '2020-01-20', 1, '78U7OANQSYKbKe4SNGmC0szkSfX8ARq6xSVjKQuc'),
(37, 7, '11', 1, '499.00', '2020-01-20', 1, 'u0swbcqP0dTQshiR3wszyf3YCrBeo3XuBSKDwDcU'),
(38, 5, '18', 1, '499.00', '2020-01-20', 1, 'hdEWrbL9v7zJhjxwuwe1y2xpUfRvooBcASiTeYVq'),
(44, 0, '48', 1, '799.00', '2020-01-22', 0, '9ggLsyDXj3fDIfo7FaqyJY4XRLbSG5EPsksIuR83'),
(47, 0, '18', 1, '499.00', '2020-01-23', 0, 'WGDQJ5ZcI21kL3z0UWzMR3UkuLZBhG0OvLVIOPBx'),
(49, 0, '44', 2, '799.00', '2020-01-23', 0, 'H9dvzJWs8Xc3ybkwQXF6dbgJKdoBssQzdYUQpxb8');

-- --------------------------------------------------------

--
-- Table structure for table `customers_basket_attributes`
--

CREATE TABLE `customers_basket_attributes` (
  `customers_basket_attributes_id` int(11) NOT NULL,
  `customers_basket_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `products_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_options_id` int(11) NOT NULL,
  `products_options_values_id` int(11) NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers_basket_attributes`
--

INSERT INTO `customers_basket_attributes` (`customers_basket_attributes_id`, `customers_basket_id`, `customers_id`, `products_id`, `products_options_id`, `products_options_values_id`, `session_id`) VALUES
(1, 1, 0, '1', 1, 1, 'wZ6oQbOicg2BIqU1rbc4dFRQHjWtwPw7a6APoRmg'),
(5, 5, 5, '1', 1, 1, 'uND9k5ZhEcj3HO1lT2Gy9po1OD2TOJw30vg1C6vs'),
(6, 6, 5, '1', 1, 1, 'uND9k5ZhEcj3HO1lT2Gy9po1OD2TOJw30vg1C6vs'),
(7, 7, 4, '1', 1, 1, 'SPYMJVO1Dg4hPH1FwDBsvPn1EvU8OO2xsd7guCX1'),
(8, 8, 5, '1', 1, 1, 'J8rXanhPeIxSl5bbpAMSLTmlXmkspKnAp86uqZZg'),
(9, 9, 5, '1', 1, 1, 'uND9k5ZhEcj3HO1lT2Gy9po1OD2TOJw30vg1C6vs'),
(10, 10, 5, '1', 1, 1, 'uND9k5ZhEcj3HO1lT2Gy9po1OD2TOJw30vg1C6vs'),
(11, 11, 6, '1', 1, 1, 'jPDooR9pZtuHxZf891UddyKw6aej1O7F1RyDlxyw'),
(12, 12, 6, '1', 1, 1, '3QtZSGqi3BuFF3rwf03KD0ZTEgoBf2II8BB32xty'),
(13, 13, 6, '1', 1, 1, 'G1pp1LZQ8asi6njFYoOYC4Rhv4v3ncaCEuUfRcBG'),
(14, 14, 7, '1', 1, 1, '48ZCHKnU4UGf4O7LptvQ6RapmSs7XCLvxok5VjK2'),
(15, 15, 5, '1', 1, 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(16, 16, 5, '1', 1, 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(17, 17, 5, '1', 1, 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(18, 18, 6, '1', 1, 1, 'Ammjh1oG126xmbSirbjfoWfqvq1lRSK2JBRRciPf'),
(19, 19, 6, '1', 1, 1, 'xFysBv5AOHejveAkHF3N6xF3zlOdjsMFH9bFLWv9'),
(20, 20, 5, '1', 1, 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(21, 21, 6, '1', 1, 1, 'xFysBv5AOHejveAkHF3N6xF3zlOdjsMFH9bFLWv9'),
(22, 22, 5, '1', 1, 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(23, 23, 5, '1', 1, 1, 'AMQS1sJzU3FNfLCmqq9EkuxsKITrfGtYpuxIYWrh'),
(24, 24, 4, '1', 1, 1, 'SPYMJVO1Dg4hPH1FwDBsvPn1EvU8OO2xsd7guCX1'),
(25, 25, 4, '1', 1, 1, 'SPYMJVO1Dg4hPH1FwDBsvPn1EvU8OO2xsd7guCX1'),
(26, 26, 6, '1', 1, 1, 'xFysBv5AOHejveAkHF3N6xF3zlOdjsMFH9bFLWv9'),
(28, 28, 0, '1', 1, 1, '0yAAbQcVom53DnDNbvWmrJYwh9rsIUfY3PSIGIm5'),
(31, 31, 0, '18', 1, 1, 'he1yACNBglLZoDoSfBvgUMXT82snKYZ2jlZRieqA'),
(34, 34, 9, '13', 1, 2, 'OMQDDEnDPc4MZHDTCoBUN27H8VqvI1QNALJKJiiv'),
(35, 35, 0, '18', 1, 2, 'u0swbcqP0dTQshiR3wszyf3YCrBeo3XuBSKDwDcU'),
(36, 36, 5, '18', 1, 1, '78U7OANQSYKbKe4SNGmC0szkSfX8ARq6xSVjKQuc'),
(37, 37, 7, '11', 1, 1, 'u0swbcqP0dTQshiR3wszyf3YCrBeo3XuBSKDwDcU'),
(38, 38, 5, '18', 1, 1, 'hdEWrbL9v7zJhjxwuwe1y2xpUfRvooBcASiTeYVq'),
(44, 44, 0, '48', 1, 1, '9ggLsyDXj3fDIfo7FaqyJY4XRLbSG5EPsksIuR83'),
(47, 47, 0, '18', 1, 1, 'WGDQJ5ZcI21kL3z0UWzMR3UkuLZBhG0OvLVIOPBx'),
(48, 48, 0, '49', 1, 1, 'YeuQH8plgOY2NXPgjLWjjx0w3VuqJ7uOWPOoLGky'),
(49, 49, 0, '44', 1, 1, 'H9dvzJWs8Xc3ybkwQXF6dbgJKdoBssQzdYUQpxb8');

-- --------------------------------------------------------

--
-- Table structure for table `customers_info`
--

CREATE TABLE `customers_info` (
  `customers_info_id` int(11) NOT NULL,
  `customers_info_date_of_last_logon` datetime DEFAULT NULL,
  `customers_info_number_of_logons` int(11) DEFAULT NULL,
  `customers_info_date_account_created` datetime DEFAULT NULL,
  `customers_info_date_account_last_modified` datetime DEFAULT NULL,
  `global_product_notifications` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `device_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `device_type` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `ram` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processor` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_os` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latittude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operating_system` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser_info` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_notify` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fedex_shipping`
--

CREATE TABLE `fedex_shipping` (
  `fedex_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parcel_height` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parcel_width` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_package` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flash_sale`
--

CREATE TABLE `flash_sale` (
  `flash_sale_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `flash_sale_products_price` decimal(15,2) NOT NULL,
  `flash_sale_date_added` int(11) NOT NULL,
  `flash_sale_last_modified` int(11) NOT NULL,
  `flash_start_date` int(11) NOT NULL,
  `flash_expires_date` int(11) NOT NULL,
  `flash_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flash_sale`
--

INSERT INTO `flash_sale` (`flash_sale_id`, `products_id`, `flash_sale_products_price`, `flash_sale_date_added`, `flash_sale_last_modified`, `flash_start_date`, `flash_expires_date`, `flash_status`, `created_at`, `updated_at`) VALUES
(1, 1, '399.00', 0, 0, 1578873600, 1579003200, 0, '2020-01-12 15:06:45', '2020-01-12 08:57:43'),
(2, 1, '399.00', 0, 0, 1578787200, 1578960000, 0, '2020-01-12 15:12:15', '2020-01-12 08:57:43'),
(3, 1, '3.00', 0, 0, 1578787200, 1578960000, 0, '2020-01-12 15:56:53', '2020-01-12 08:57:43'),
(4, 1, '349.00', 0, 0, 1578787200, 1578960000, 0, '2020-01-12 07:58:39', '2020-01-12 08:57:43'),
(5, 1, '349.00', 0, 0, 1578787200, 1578960000, 1, '2020-01-12 08:57:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flate_rate`
--

CREATE TABLE `flate_rate` (
  `id` int(11) NOT NULL,
  `flate_rate` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flate_rate`
--

INSERT INTO `flate_rate` (`id`, `flate_rate`, `currency`) VALUES
(1, '70', 'INR');

-- --------------------------------------------------------

--
-- Table structure for table `front_end_theme_content`
--

CREATE TABLE `front_end_theme_content` (
  `id` int(11) NOT NULL,
  `headers` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousels` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banners` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footers` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_section_order` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_end_theme_content`
--

INSERT INTO `front_end_theme_content` (`id`, `headers`, `carousels`, `banners`, `footers`, `product_section_order`, `cart`, `news`, `detail`, `shop`, `contact`) VALUES
(1, '[\n{\n\"id\": 1,\n\"name\": \"Header One\",\n\"image\": \"images/prototypes/header1.jpg\",\n\"alt\" : \"header One\" \n},\n{\n\"id\": 2,\n\"name\": \"Header Two\",\n\"image\": \"images/prototypes/header2.jpg\",\n\"alt\" : \"header Two\" \n},\n{\n\"id\": 3,\n\"name\": \"Header Three\",\n\"image\": \"images/prototypes/header3.jpg\",\n\"alt\" : \"header Three\" \n},\n{\n\"id\": 4,\n\"name\": \"Header Four\",\n\"image\": \"images/prototypes/header4.jpg\",\n\"alt\" : \"header Four\" \n},\n{\n\"id\": 5,\n\"name\": \"Header Five\",\n\"image\": \"images/prototypes/header5.jpg\",\n\"alt\" : \"header Five\" \n},\n{\n\"id\": 6,\n\"name\": \"Header Six\",\n\"image\": \"images/prototypes/header6.jpg\",\n\"alt\" : \"header Six\" \n},\n{\n\"id\": 7,\n\"name\": \"Header Seven\",\n\"image\": \"images/prototypes/header7.jpg\",\n\"alt\" : \"header Seven\" \n},\n{\n\"id\": 8,\n\"name\": \"Header Eight\",\n\"image\": \"images/prototypes/header8.jpg\",\n\"alt\" : \"header Eight\" \n},\n{\n\"id\": 9,\n\"name\": \"Header Nine\",\n\"image\": \"images/prototypes/header9.jpg\",\n\"alt\" : \"header Nine\" \n},\n{\n\"id\": 10,\n\"name\": \"Header Ten\",\n\"image\": \"images/prototypes/header10.jpg\",\n\"alt\" : \"header Ten\" \n}\n]', '[\n{\n\"id\": 1,\n\"name\": \"Bootstrap Carousel Content Full Screen\",\n\"image\": \"images/prototypes/carousal1.jpg\",\n\"alt\": \"Bootstrap Carousel Content Full Screen\"\n},\n{\n\"id\": 2,\n\"name\": \"Bootstrap Carousel Content Full Width\",\n\"image\": \"images/prototypes/carousal2.jpg\",\n\"alt\": \"Bootstrap Carousel Content Full Width\"\n},\n{\n\"id\": 3,\n\"name\": \"Bootstrap Carousel Content with Left Banner\",\n\"image\": \"images/prototypes/carousal3.jpg\",\n\"alt\": \"Bootstrap Carousel Content with Left Banner\"\n},\n{\n\"id\": 4,\n\"name\": \"Bootstrap Carousel Content with Navigation\",\n\"image\": \"images/prototypes/carousal4.jpg\",\n\"alt\": \"Bootstrap Carousel Content with Navigation\"\n},\n{\n\"id\": 5,\n\"name\": \"Bootstrap Carousel Content with Right Banner\",\n\"image\": \"images/prototypes/carousal5.jpg\",\n\"alt\": \"Bootstrap Carousel Content with Right Banner\"\n}\n]', '[\n{\n\"id\": 1,\n\"name\": \"Banner One\",\n\"image\": \"images/prototypes/banner1.jpg\",\n\"alt\": \"Banner One\"\n},\n{\n\"id\": 2,\n\"name\": \"Banner Two\",\n\"image\": \"images/prototypes/banner2.jpg\",\n\"alt\": \"Banner Two\"\n},\n{\n\"id\": 3,\n\"name\": \"Banner Three\",\n\"image\": \"images/prototypes/banner3.jpg\",\n\"alt\": \"Banner Three\"\n},\n{\n\"id\": 4,\n\"name\": \"Banner Four\",\n\"image\": \"images/prototypes/banner4.jpg\",\n\"alt\": \"Banner Four\"\n},\n{\n\"id\": 5,\n\"name\": \"Banner Five\",\n\"image\": \"images/prototypes/banner5.jpg\",\n\"alt\": \"Banner Five\"\n},\n{\n\"id\": 6,\n\"name\": \"Banner Six\",\n\"image\": \"images/prototypes/banner6.jpg\",\n\"alt\": \"Banner Six\"\n},\n{\n\"id\": 7,\n\"name\": \"Banner Seven\",\n\"image\": \"images/prototypes/banner7.jpg\",\n\"alt\": \"Banner Seven\"\n},\n{\n\"id\": 8,\n\"name\": \"Banner Eight\",\n\"image\": \"images/prototypes/banner8.jpg\",\n\"alt\": \"Banner Eight\"\n},\n{\n\"id\": 9,\n\"name\": \"Banner Nine\",\n\"image\": \"images/prototypes/banner9.jpg\",\n\"alt\": \"Banner Nine\"\n},\n{\n\"id\": 10,\n\"name\": \"Banner Ten\",\n\"image\": \"images/prototypes/banner10.jpg\",\n\"alt\": \"Banner Ten\"\n},\n{\n\"id\": 11,\n\"name\": \"Banner Eleven\",\n\"image\": \"images/prototypes/banner11.jpg\",\n\"alt\": \"Banner Eleven\"\n},\n{\n\"id\": 12,\n\"name\": \"Banner Twelve\",\n\"image\": \"images/prototypes/banner12.jpg\",\n\"alt\": \"Banner Twelve\"\n},\n{\n\"id\": 13,\n\"name\": \"Banner Thirteen\",\n\"image\": \"images/prototypes/banner13.jpg\",\n\"alt\": \"Banner Thirteen\"\n},\n{\n\"id\": 14,\n\"name\": \"Banner Fourteen\",\n\"image\": \"images/prototypes/banner14.jpg\",\n\"alt\": \"Banner Fourteen\"\n},\n{\n\"id\": 15,\n\"name\": \"Banner Fifteen\",\n\"image\": \"images/prototypes/banner15.jpg\",\n\"alt\": \"Banner Fifteen\"\n},\n{\n\"id\": 16,\n\"name\": \"Banner Sixteen\",\n\"image\": \"images/prototypes/banner16.jpg\",\n\"alt\": \"Banner Sixteen\"\n},\n{\n\"id\": 17,\n\"name\": \"Banner Seventeen\",\n\"image\": \"images/prototypes/banner17.jpg\",\n\"alt\": \"Banner Seventeen\"\n},\n{\n\"id\": 18,\n\"name\": \"Banner Eighteen\",\n\"image\": \"images/prototypes/banner18.jpg\",\n\"alt\": \"Banner Eighteen\"\n},\n{\n\"id\": 19,\n\"name\": \"Banner Nineteen\",\n\"image\": \"images/prototypes/banner19.jpg\",\n\"alt\": \"Banner Nineteen\"\n}\n]', '[\n{\n\"id\": 1,\n\"name\": \"Footer One\",\n\"image\": \"images/prototypes/footer1.png\",\n\"alt\" : \"Footer One\"\n},\n{\n\"id\": 2,\n\"name\": \"Footer Two\",\n\"image\": \"images/prototypes/footer2.png\",\n\"alt\" : \"Footer Two\"\n},\n{\n\"id\": 3,\n\"name\": \"Footer Three\",\n\"image\": \"images/prototypes/footer3.png\",\n\"alt\" : \"Footer Three\"\n},\n{\n\"id\": 4,\n\"name\": \"Footer Four\",\n\"image\": \"images/prototypes/footer4.png\",\n\"alt\" : \"Footer Four\"\n},\n{\n\"id\": 5,\n\"name\": \"Footer Five\",\n\"image\": \"images/prototypes/footer5.png\",\n\"alt\" : \"Footer Five\"\n},\n{\n\"id\": 6,\n\"name\": \"Footer Six\",\n\"image\": \"images/prototypes/footer6.png\",\n\"alt\" : \"Footer Six\"\n},\n{\n\"id\": 7,\n\"name\": \"Footer Seven\",\n\"image\": \"images/prototypes/footer7.png\",\n\"alt\" : \"Footer Seven\"\n},\n{\n\"id\": 8,\n\"name\": \"Footer Eight\",\n\"image\": \"images/prototypes/footer8.png\",\n\"alt\" : \"Footer Eight\"\n},\n{\n\"id\": 9,\n\"name\": \"Footer Nine\",\n\"image\": \"images/prototypes/footer9.png\",\n\"alt\" : \"Footer Nine\"\n},\n{\n\"id\": 10,\n\"name\": \"Footer Ten\",\n\"image\": \"images/prototypes/footer10.png\",\n\"alt\" : \"Footer Ten\"\n}\n]', '[{\"id\":10,\"name\":\"Second Ad Section\",\"order\":1,\"file_name\":\"sec_ad_banner\",\"status\":1,\"image\":\"images\\/prototypes\\/sec_ad_section.jpg\",\"disabled_image\":\"images\\/prototypes\\/sec_ad_section-cross.jpg\",\"alt\":\"Second Ad Section\"},{\"id\":5,\"name\":\"Categories\",\"order\":2,\"file_name\":\"categories\",\"status\":1,\"image\":\"images\\/prototypes\\/categories.jpg\",\"disabled_image\":\"images\\/prototypes\\/categories-cross.jpg\",\"alt\":\"Categories\"},{\"id\":1,\"name\":\"Banner Section\",\"order\":3,\"file_name\":\"banner_section\",\"status\":0,\"image\":\"images\\/prototypes\\/banner_section.jpg\",\"alt\":\"Banner Section\"},{\"id\":9,\"name\":\"Top Selling\",\"order\":4,\"file_name\":\"top\",\"status\":1,\"image\":\"images\\/prototypes\\/top.jpg\",\"disabled_image\":\"images\\/prototypes\\/top-cross.jpg\",\"alt\":\"Top Selling\"},{\"id\":8,\"name\":\"Newest Product Section\",\"order\":5,\"file_name\":\"newest_product\",\"status\":1,\"image\":\"images\\/prototypes\\/newest_product.jpg\",\"disabled_image\":\"images\\/prototypes\\/newest_product-cross.jpg\",\"alt\":\"Newest Product Section\"},{\"id\":11,\"name\":\"Tab Products View\",\"order\":6,\"file_name\":\"tab\",\"status\":1,\"image\":\"images\\/prototypes\\/tab.jpg\",\"disabled_image\":\"images\\/prototypes\\/tab-cross.jpg\",\"alt\":\"Tab Products View\"},{\"id\":3,\"name\":\"Special Products Section\",\"order\":7,\"file_name\":\"special\",\"status\":1,\"image\":\"images\\/prototypes\\/special_product.jpg\",\"disabled_image\":\"images\\/prototypes\\/special_product-cross.jpg\",\"alt\":\"Special Products Section\"},{\"id\":2,\"name\":\"Flash Sale Section\",\"order\":8,\"file_name\":\"flash_sale_section\",\"status\":1,\"image\":\"images\\/prototypes\\/flash_sale_section.jpg\",\"disabled_image\":\"images\\/prototypes\\/flash_sale_section-cross.jpg\",\"alt\":\"Flash Sale Section\"},{\"id\":4,\"name\":\"Ad Section\",\"order\":9,\"file_name\":\"ad_banner_section\",\"status\":1,\"image\":\"images\\/prototypes\\/ad_banner_section.jpg\",\"disabled_image\":\"images\\/prototypes\\/ad_banner_section-cross.jpg\",\"alt\":\"Ad Section\"},{\"id\":6,\"name\":\"Blog Section\",\"order\":10,\"file_name\":\"blog_section\",\"status\":1,\"image\":\"images\\/prototypes\\/blog_section.jpg\",\"disabled_image\":\"images\\/prototypes\\/blog_section-cross.jpg\",\"alt\":\"Blog Section\"},{\"id\":7,\"name\":\"Info Boxes\",\"order\":11,\"file_name\":\"info_boxes\",\"status\":1,\"image\":\"images\\/prototypes\\/info_boxes.jpg\",\"disabled_image\":\"images\\/prototypes\\/info_boxes-cross.jpg\",\"alt\":\"Info Boxes\"}]', '[      {         \"id\":1,       \"name\":\"Cart One\"    },    {         \"id\":2,       \"name\":\"Cart Two\"    }     ]', '[      {         \"id\":1,       \"name\":\"Blog One\"    },    {         \"id\":2,       \"name\":\"Blog Two\"    }     ]', '[  \n{  \n\"id\":1,\n\"name\":\"Product Detail Page One\"\n},\n{  \n\"id\":2,\n\"name\":\"Product Detail Page Two\"\n},\n{  \n\"id\":3,\n\"name\":\"Product Detail Page Three\"\n},\n{  \n\"id\":4,\n\"name\":\"Product Detail Page Four\"\n},\n{  \n\"id\":5,\n\"name\":\"Product Detail Page Five\"\n},\n{  \n\"id\":6,\n\"name\":\"Product Detail Page Six\"\n}\n\n]', '[      {         \"id\":1,       \"name\":\"Shop Page One\"    },    {         \"id\":2,       \"name\":\"Shop Page Two\"    },    {         \"id\":3,       \"name\":\"Shop Page Three\"    },    {         \"id\":4,       \"name\":\"Shop Page Four\"    },    {         \"id\":5,       \"name\":\"Shop Page Five\"    }     ]', '[      {         \"id\":1,       \"name\":\"Contact Page One\"    },    {         \"id\":2,       \"name\":\"Contact Page Two\"    } ]');

-- --------------------------------------------------------

--
-- Table structure for table `geo_zones`
--

CREATE TABLE `geo_zones` (
  `geo_zone_id` int(11) NOT NULL,
  `geo_zone_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geo_zone_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `http_call_record`
--

CREATE TABLE `http_call_record` (
  `id` int(11) NOT NULL,
  `device_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ping_time` datetime DEFAULT NULL,
  `difference_from_previous` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hula_our_infos`
--

CREATE TABLE `hula_our_infos` (
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `user_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'XUF1110211.png', 1, NULL, NULL, NULL),
(4, '0S9Uj10711.png', 1, NULL, NULL, NULL),
(5, '49YbL10411.png', 1, NULL, NULL, NULL),
(83, 'JqYfZ11207.jpg', 1, NULL, NULL, NULL),
(84, '6Q4Qy11507.jpg', 1, NULL, NULL, NULL),
(85, 'jOVnc11207.jpg', 1, NULL, NULL, NULL),
(86, 'Ake4A11107.jpg', 1, NULL, NULL, NULL),
(89, 'nDQtA11407.jpg', 1, NULL, NULL, NULL),
(90, 'ueyod11407.jpg', 1, NULL, NULL, NULL),
(91, 'xD6MF11207.jpg', 1, NULL, NULL, NULL),
(92, 'YZyoU11507.jpg', 1, NULL, NULL, NULL),
(93, 'RLshK11309.jpg', 1, NULL, NULL, NULL),
(94, 'pTZdI11309.jpg', 1, NULL, NULL, NULL),
(95, '2t7BU11909.jpg', 1, NULL, NULL, NULL),
(96, 'O0cLp11909.jpg', 1, NULL, NULL, NULL),
(97, 'ncXhn11709.jpg', 1, NULL, NULL, NULL),
(98, '3876V11310.jpg', 1, NULL, NULL, NULL),
(99, '80IGj11510.jpg', 1, NULL, NULL, NULL),
(100, 'ueeqM11410.jpg', 1, NULL, NULL, NULL),
(101, 'UrgVW11410.jpg', 1, NULL, NULL, NULL),
(102, 'a18kN11510.jpg', 1, NULL, NULL, NULL),
(103, 'qQM0R11310.jpg', 1, NULL, NULL, NULL),
(104, 'VrhhT11510.jpg', 1, NULL, NULL, NULL),
(105, 'gSkR011310.jpg', 1, NULL, NULL, NULL),
(106, 'DXoxt11610.jpg', 1, NULL, NULL, NULL),
(107, 'N4WSZ11310.jpg', 1, NULL, NULL, NULL),
(108, 'z9MLR11610.jpg', 1, NULL, NULL, NULL),
(109, 'YNVyV11410.jpg', 1, NULL, NULL, NULL),
(110, 'YinE411810.jpg', 1, NULL, NULL, NULL),
(111, '97VNC11210.jpg', 1, NULL, NULL, NULL),
(114, 'zZZ2n11710.jpg', 1, NULL, NULL, NULL),
(115, 'vMNsa11710.jpg', 1, NULL, NULL, NULL),
(116, 'qujIz11610.jpg', 1, NULL, NULL, NULL),
(118, 'PJG0C11511.jpg', 1, NULL, NULL, NULL),
(119, 'SKOMJ11512.jpg', 1, NULL, NULL, NULL),
(120, 'heDeO12806.jpg', 1, NULL, NULL, NULL),
(121, 'tQlXB12406.jpg', 1, NULL, NULL, NULL),
(122, '3TfgH12106.jpg', 1, NULL, NULL, NULL),
(123, '8Z21912406.jpg', 1, NULL, NULL, NULL),
(124, '9zIV712606.jpg', 1, NULL, NULL, NULL),
(125, 'pIyQp12106.jpg', 1, NULL, NULL, NULL),
(126, 'CCaOO12806.jpg', 1, NULL, NULL, NULL),
(127, 'X9RfE12206.jpg', 1, NULL, NULL, NULL),
(128, 'rMOkz12206.jpg', 1, NULL, NULL, NULL),
(137, '6lFX014612.jpg', 3, NULL, NULL, NULL),
(138, '9dcaT14612.jpg', 3, NULL, NULL, NULL),
(139, '1Kt9F14512.jpg', 3, NULL, NULL, NULL),
(140, 'DoI5y14212.jpg', 3, NULL, NULL, NULL),
(141, 'JAWP014612.jpg', 3, NULL, NULL, NULL),
(142, '2iHkJ14312.jpg', 3, NULL, NULL, NULL),
(143, 'yCCMx14101.jpg', 3, NULL, NULL, NULL),
(144, 'Lpu1314901.jpg', 3, NULL, NULL, NULL),
(145, '0vL6P14101.jpg', 3, NULL, NULL, NULL),
(146, 'c6hM114601.jpg', 3, NULL, NULL, NULL),
(147, 'UcdOn14401.jpg', 3, NULL, NULL, NULL),
(148, 'NUH0w14301.jpg', 3, NULL, NULL, NULL),
(149, 'd2oH414401.jpg', 3, NULL, NULL, NULL),
(150, 'tVebB14801.jpg', 3, NULL, NULL, NULL),
(151, '7u1HS14601.jpg', 3, NULL, NULL, NULL),
(152, 'NzfGY14901.jpg', 3, NULL, NULL, NULL),
(153, 'hLSNR14901.jpg', 3, NULL, NULL, NULL),
(154, '82zYY14501.jpg', 3, NULL, NULL, NULL),
(155, 'kIoEG14901.jpg', 3, NULL, NULL, NULL),
(156, 'fSgMw14601.jpg', 3, NULL, NULL, NULL),
(157, 'IxAYr14801.jpg', 3, NULL, NULL, NULL),
(158, 'Hvu2c14601.jpg', 3, NULL, NULL, NULL),
(159, '1lH5g14801.jpg', 3, NULL, NULL, NULL),
(160, 'vzK1V14101.jpg', 3, NULL, NULL, NULL),
(161, 'Xt5NP14201.jpg', 3, NULL, NULL, NULL),
(162, '4HidE14401.jpg', 3, NULL, NULL, NULL),
(163, 'UzyFM14801.jpg', 3, NULL, NULL, NULL),
(164, 'ZAJBt14201.jpg', 3, NULL, NULL, NULL),
(165, 'hAIR914501.jpg', 3, NULL, NULL, NULL),
(166, 'joA1814201.jpg', 3, NULL, NULL, NULL),
(167, 'fKqZW16909.jpg', 3, NULL, NULL, NULL),
(168, 'tprz516409.jpg', 3, NULL, NULL, NULL),
(169, 'TuOmF16809.jpg', 3, NULL, NULL, NULL),
(170, '3idya16709.jpg', 3, NULL, NULL, NULL),
(171, 'XQn0p16409.jpg', 3, NULL, NULL, NULL),
(172, 'X60yn16209.jpg', 3, NULL, NULL, NULL),
(173, 'y88OU16609.jpg', 3, NULL, NULL, NULL),
(174, 'i7bmA16509.jpg', 3, NULL, NULL, NULL),
(175, 'hJHBo16909.jpg', 3, NULL, NULL, NULL),
(176, 'dnR4j16809.jpg', 3, NULL, NULL, NULL),
(177, 'rGGBD16409.jpg', 3, NULL, NULL, NULL),
(178, 'OEkEh16709.jpg', 3, NULL, NULL, NULL),
(179, 'vMAts16109.jpg', 3, NULL, NULL, NULL),
(180, 'W4dF116409.jpg', 3, NULL, NULL, NULL),
(181, 'VkrxK16709.jpg', 3, NULL, NULL, NULL),
(182, 'dcbuo16409.jpg', 3, NULL, NULL, NULL),
(183, 'XLcdI16509.jpg', 3, NULL, NULL, NULL),
(184, 'eTd1216809.jpg', 3, NULL, NULL, NULL),
(185, 'IlyQQ16609.jpg', 3, NULL, NULL, NULL),
(186, 'cArxy16709.jpg', 3, NULL, NULL, NULL),
(187, 'TbqKu16909.jpg', 3, NULL, NULL, NULL),
(188, 'AOvCt16209.jpg', 3, NULL, NULL, NULL),
(189, 'OUNNI16709.jpg', 3, NULL, NULL, NULL),
(190, '7H2hF16709.jpg', 3, NULL, NULL, NULL),
(191, '8b1rh16710.jpg', 3, NULL, NULL, NULL),
(192, 'yedf016210.jpg', 3, NULL, NULL, NULL),
(193, 'IMOgS16510.jpg', 3, NULL, NULL, NULL),
(194, 'iOnzs16410.jpg', 3, NULL, NULL, NULL),
(195, '1p4Jy16310.jpg', 3, NULL, NULL, NULL),
(196, 'jvIeC16210.jpg', 3, NULL, NULL, NULL),
(197, 'bxLX416310.jpg', 3, NULL, NULL, NULL),
(198, 'xTCik16110.jpg', 3, NULL, NULL, NULL),
(199, '13Eud16110.jpg', 3, NULL, NULL, NULL),
(200, 'UiTSZ16510.jpg', 3, NULL, NULL, NULL),
(201, 'rgdIc16910.jpg', 3, NULL, NULL, NULL),
(202, 'Dd71W16410.jpg', 3, NULL, NULL, NULL),
(203, 'Eauxu16210.jpg', 3, NULL, NULL, NULL),
(204, 'O6oiu16810.jpg', 3, NULL, NULL, NULL),
(205, 'k0dZW16410.jpg', 3, NULL, NULL, NULL),
(206, 'WqaEh16910.jpg', 3, NULL, NULL, NULL),
(207, 'CprlM16610.jpg', 3, NULL, NULL, NULL),
(208, '4RjkL16110.jpg', 3, NULL, NULL, NULL),
(209, 'f5Ydt16810.jpg', 3, NULL, NULL, NULL),
(210, 'YYwcx16910.jpg', 3, NULL, NULL, NULL),
(211, '1h5UV16210.jpg', 3, NULL, NULL, NULL),
(212, '4h2gr16210.jpg', 3, NULL, NULL, NULL),
(213, 'HSioR16110.jpg', 3, NULL, NULL, NULL),
(214, 'YRnqB16110.jpg', 3, NULL, NULL, NULL),
(215, 'ttO9016810.jpg', 3, NULL, NULL, NULL),
(216, 'oECF016110.jpg', 3, NULL, NULL, NULL),
(217, 'O7AKb16610.jpg', 3, NULL, NULL, NULL),
(218, 'FOjrl16310.jpg', 3, NULL, NULL, NULL),
(219, 'xBMfd16410.jpg', 3, NULL, NULL, NULL),
(220, 'gumsJ16810.jpg', 3, NULL, NULL, NULL),
(221, 'g8QZk16310.jpg', 3, NULL, NULL, NULL),
(222, 'nZsl716310.jpg', 3, NULL, NULL, NULL),
(223, 'mWjV816310.jpg', 3, NULL, NULL, NULL),
(224, 'ugjL416210.jpg', 3, NULL, NULL, NULL),
(225, 'S1uOE16910.jpg', 3, NULL, NULL, NULL),
(226, 'UBhZf16610.jpg', 3, NULL, NULL, NULL),
(228, 'Rlk5516410.jpg', 3, NULL, NULL, NULL),
(229, 'wDkW216210.jpg', 3, NULL, NULL, NULL),
(230, '2Sl9A16510.jpg', 3, NULL, NULL, NULL),
(231, 'Ym0S116910.jpg', 3, NULL, NULL, NULL),
(232, 'JgiZw16310.jpg', 3, NULL, NULL, NULL),
(233, 'SvBFB16310.jpg', 3, NULL, NULL, NULL),
(234, 'uzxTT16110.jpg', 3, NULL, NULL, NULL),
(235, 'jbJ6616910.jpg', 3, NULL, NULL, NULL),
(236, 'XWPYw16910.jpg', 3, NULL, NULL, NULL),
(237, '3vtxV16610.jpg', 3, NULL, NULL, NULL),
(238, 'GHl8316110.jpg', 3, NULL, NULL, NULL),
(239, '9eJoM16411.jpg', 3, NULL, NULL, NULL),
(240, 'emxna16311.jpg', 3, NULL, NULL, NULL),
(241, 'iZLI916712.jpg', 3, NULL, NULL, NULL),
(242, 'lqe9L16112.jpg', 3, NULL, NULL, NULL),
(243, 'pUpVw16801.jpg', 3, NULL, NULL, NULL),
(244, 'h3MNv17403.jpg', 1, NULL, NULL, NULL),
(245, 'l6zkU18212.jpg', 1, NULL, NULL, NULL),
(246, 'a0Lz418101.png', 1, NULL, NULL, NULL),
(250, 'm6Bip20411.jpg', 3, NULL, NULL, NULL),
(251, 'SwQTt20411.jpg', 3, NULL, NULL, NULL),
(252, 'dI16z20511.jpg', 3, NULL, NULL, NULL),
(253, 'ocu1720111.jpg', 3, NULL, NULL, NULL),
(254, 'MLGzS20811.jpg', 3, NULL, NULL, NULL),
(255, 'L1Wmo20311.jpg', 3, NULL, NULL, NULL),
(256, 'xkiGK20411.jpg', 3, NULL, NULL, NULL),
(257, '7pLk920411.jpg', 3, NULL, NULL, NULL),
(258, 'YioXC20311.jpg', 3, NULL, NULL, NULL),
(259, 'mVaqk20711.jpg', 3, NULL, NULL, NULL),
(260, 'Aledd20511.jpg', 3, NULL, NULL, NULL),
(261, 'u1pRk20511.jpg', 3, NULL, NULL, NULL),
(262, 'rfuZ120811.jpg', 3, NULL, NULL, NULL),
(263, 'GrjGi20811.jpg', 3, NULL, NULL, NULL),
(264, 'xAZ2M20811.jpg', 3, NULL, NULL, NULL),
(265, 'jk6sm20311.jpg', 3, NULL, NULL, NULL),
(266, 'IFCCa20711.jpg', 3, NULL, NULL, NULL),
(267, 'Y07XO20611.jpg', 3, NULL, NULL, NULL),
(268, 'CtyP720511.jpg', 3, NULL, NULL, NULL),
(269, '5b1wa20311.jpg', 3, NULL, NULL, NULL),
(270, 'G1Ff920911.jpg', 3, NULL, NULL, NULL),
(271, 'n2kbw20611.jpg', 3, NULL, NULL, NULL),
(272, 'BRUe120811.jpg', 3, NULL, NULL, NULL),
(273, 'wCceH20811.jpg', 3, NULL, NULL, NULL),
(274, 'umOnf20811.jpg', 3, NULL, NULL, NULL),
(275, 'KiQGR20611.jpg', 3, NULL, NULL, NULL),
(276, 'lzeSK20311.jpg', 3, NULL, NULL, NULL),
(277, 'cNYCI20411.jpg', 3, NULL, NULL, NULL),
(278, 'XLUtB20411.jpg', 3, NULL, NULL, NULL),
(279, 'rwZde20111.jpg', 3, NULL, NULL, NULL),
(280, 'EHKbT20711.jpg', 3, NULL, NULL, NULL),
(281, 'unjk920511.jpg', 3, NULL, NULL, NULL),
(282, 'Meave20411.jpg', 3, NULL, NULL, NULL),
(283, 'jR9XI20711.jpg', 3, NULL, NULL, NULL),
(284, 'dfwgE20611.jpg', 3, NULL, NULL, NULL),
(285, 'AXgJa20411.jpg', 3, NULL, NULL, NULL),
(286, 'jZnKR20611.jpg', 3, NULL, NULL, NULL),
(287, 'e7eGX20811.jpg', 3, NULL, NULL, NULL),
(288, 'RtFe720311.jpg', 3, NULL, NULL, NULL),
(289, 'kyMe620811.jpg', 3, NULL, NULL, NULL),
(290, '3NSZp20611.jpg', 3, NULL, NULL, NULL),
(291, '2wOey20111.jpg', 3, NULL, NULL, NULL),
(292, 'sBWwS20411.jpg', 3, NULL, NULL, NULL),
(293, 'MRqWx20611.jpg', 3, NULL, NULL, NULL),
(294, 'ZhIzs20511.jpg', 3, NULL, NULL, NULL),
(295, 'gd8SJ20411.jpg', 3, NULL, NULL, NULL),
(296, 'bpNsX20711.jpg', 3, NULL, NULL, NULL),
(297, 'QP5PB20911.jpg', 3, NULL, NULL, NULL),
(298, 'kncl020911.jpg', 3, NULL, NULL, NULL),
(299, '0n93B20811.jpg', 3, NULL, NULL, NULL),
(300, 'LVdhX20711.jpg', 3, NULL, NULL, NULL),
(301, 'ubZkt20611.jpg', 3, NULL, NULL, NULL),
(302, 'qOkNM20311.jpg', 3, NULL, NULL, NULL),
(303, 'teybQ20411.jpg', 3, NULL, NULL, NULL),
(304, 'SGSpo20911.jpg', 3, NULL, NULL, NULL),
(305, '6EWI320511.jpg', 3, NULL, NULL, NULL),
(306, '6RjRP20811.jpg', 3, NULL, NULL, NULL),
(307, 'QA2c820511.jpg', 3, NULL, NULL, NULL),
(308, 'qiJ8A20811.jpg', 3, NULL, NULL, NULL),
(309, 'vy9sm20911.jpg', 3, NULL, NULL, NULL),
(310, 'YpmDm20311.jpg', 3, NULL, NULL, NULL),
(311, 'j6D1x20411.jpg', 3, NULL, NULL, NULL),
(312, 'taWM120711.jpg', 3, NULL, NULL, NULL),
(313, 'o60O420511.jpg', 3, NULL, NULL, NULL),
(314, '3wbjB20811.jpg', 3, NULL, NULL, NULL),
(315, 'CKVBQ20811.jpg', 3, NULL, NULL, NULL),
(316, 'lKf3D20111.jpg', 3, NULL, NULL, NULL),
(317, 'Ru8ly20411.jpg', 3, NULL, NULL, NULL),
(318, '3jsTh20311.jpg', 3, NULL, NULL, NULL),
(319, 'lVjdY20611.jpg', 3, NULL, NULL, NULL),
(320, 'tq6mc20311.jpg', 3, NULL, NULL, NULL),
(321, 'ESrmw20211.jpg', 3, NULL, NULL, NULL),
(322, 'WTbMr20511.jpg', 3, NULL, NULL, NULL),
(323, 'MFmmv20911.jpg', 3, NULL, NULL, NULL),
(324, 'cjDki20811.jpg', 3, NULL, NULL, NULL),
(325, 'JljOd20311.jpg', 3, NULL, NULL, NULL),
(326, 'M9NvU20211.jpg', 3, NULL, NULL, NULL),
(327, 'qtWeX20911.jpg', 3, NULL, NULL, NULL),
(328, 'UKUsi20711.jpg', 3, NULL, NULL, NULL),
(329, 'rPztG20511.jpg', 3, NULL, NULL, NULL),
(330, 'D1tjw20111.jpg', 3, NULL, NULL, NULL),
(331, 'quC0g20811.jpg', 3, NULL, NULL, NULL),
(332, '6EuCr20211.jpg', 3, NULL, NULL, NULL),
(333, 'QMqBo20811.jpg', 3, NULL, NULL, NULL),
(334, 'q0qTP20911.jpg', 3, NULL, NULL, NULL),
(335, 'utbPx20211.jpg', 3, NULL, NULL, NULL),
(336, 'sHPEs20611.jpg', 3, NULL, NULL, NULL),
(337, 'zEW1K20111.jpg', 3, NULL, NULL, NULL),
(338, 'zB9cb20911.jpg', 3, NULL, NULL, NULL),
(339, 'Nf6nC20711.jpg', 3, NULL, NULL, NULL),
(340, 'SQAlW20811.jpg', 3, NULL, NULL, NULL),
(341, 'prlrw20311.jpg', 3, NULL, NULL, NULL),
(342, 'Ctuep20711.jpg', 3, NULL, NULL, NULL),
(343, '9mbpk20211.jpg', 3, NULL, NULL, NULL),
(344, '2LI4N20311.jpg', 3, NULL, NULL, NULL),
(345, 'PokkA20611.jpg', 3, NULL, NULL, NULL),
(346, 'FZZ2E20611.jpg', 3, NULL, NULL, NULL),
(347, 'bkK9b20311.jpg', 3, NULL, NULL, NULL),
(348, '4kkxU20711.jpg', 3, NULL, NULL, NULL),
(349, 'Lm9zc20511.jpg', 3, NULL, NULL, NULL),
(350, 'xP2ws20811.jpg', 3, NULL, NULL, NULL),
(351, 'qZS9u20911.jpg', 3, NULL, NULL, NULL),
(352, '60EtT20111.jpg', 3, NULL, NULL, NULL),
(353, 'XdN8d20611.jpg', 3, NULL, NULL, NULL),
(354, 'hRFu020111.jpg', 3, NULL, NULL, NULL),
(355, 'IJDwb20211.jpg', 3, NULL, NULL, NULL),
(356, 'LXgGt20811.jpg', 3, NULL, NULL, NULL),
(357, 'YUJlv20611.jpg', 3, NULL, NULL, NULL),
(358, 'hx0Yl20511.jpg', 3, NULL, NULL, NULL),
(359, 'CPJa820611.jpg', 3, NULL, NULL, NULL),
(360, 'JOdmy20311.jpg', 3, NULL, NULL, NULL),
(361, '8Wrfm20411.jpg', 3, NULL, NULL, NULL),
(362, 'sRZii20711.jpg', 3, NULL, NULL, NULL),
(363, 'yXF5420411.jpg', 3, NULL, NULL, NULL),
(364, 'FXdFS20911.jpg', 3, NULL, NULL, NULL),
(365, 'okuKp20211.jpg', 3, NULL, NULL, NULL),
(366, '8Z1F120111.jpg', 3, NULL, NULL, NULL),
(367, 'kFom920111.jpg', 3, NULL, NULL, NULL),
(368, 'rLFBI20111.jpg', 3, NULL, NULL, NULL),
(369, 'i0x5Z20611.jpg', 3, NULL, NULL, NULL),
(370, 'F12N420911.jpg', 3, NULL, NULL, NULL),
(371, '54bYi20511.jpg', 3, NULL, NULL, NULL),
(372, 'oQKuF20611.jpg', 3, NULL, NULL, NULL),
(373, '96jAm20611.jpg', 3, NULL, NULL, NULL),
(374, 'rXg5w20611.jpg', 3, NULL, NULL, NULL),
(375, 'RtNQz20711.jpg', 3, NULL, NULL, NULL),
(376, 'oSSmB20911.jpg', 3, NULL, NULL, NULL),
(377, 'LzfR020811.jpg', 3, NULL, NULL, NULL),
(378, 'qgXWK20211.jpg', 3, NULL, NULL, NULL),
(379, 'L0mw220311.jpg', 3, NULL, NULL, NULL),
(380, 'n7EBj20511.jpg', 3, NULL, NULL, NULL),
(381, '0sWXH20511.jpg', 3, NULL, NULL, NULL),
(382, 'mwcqF20511.jpg', 3, NULL, NULL, NULL),
(383, 'qF2wS20511.jpg', 3, NULL, NULL, NULL),
(384, 'NUvsf20911.jpg', 3, NULL, NULL, NULL),
(385, 'Kdxxk20111.jpg', 3, NULL, NULL, NULL),
(386, 'GmGjM20811.jpg', 3, NULL, NULL, NULL),
(387, '6XsiX20911.jpg', 3, NULL, NULL, NULL),
(388, '4l8MR20911.jpg', 3, NULL, NULL, NULL),
(389, 'mNPEv20611.jpg', 3, NULL, NULL, NULL),
(390, 'UDG5120311.jpg', 3, NULL, NULL, NULL),
(391, 'Fx3O820411.jpg', 3, NULL, NULL, NULL),
(392, 'S08vg20711.jpg', 3, NULL, NULL, NULL),
(393, 'F0q4020711.jpg', 3, NULL, NULL, NULL),
(394, 'SYgbu20611.jpg', 3, NULL, NULL, NULL),
(395, '9JGe820111.jpg', 3, NULL, NULL, NULL),
(396, 'eAoSB20111.jpg', 3, NULL, NULL, NULL),
(397, 'WUGBh20411.jpg', 3, NULL, NULL, NULL),
(398, '7bd6b20111.jpg', 3, NULL, NULL, NULL),
(399, 'P4qUy20911.jpg', 3, NULL, NULL, NULL),
(400, 'tktqM20811.jpg', 3, NULL, NULL, NULL),
(401, '5sTYz20701.jpg', 3, NULL, NULL, NULL),
(402, 'CpCer26609.jpg', 3, NULL, NULL, NULL),
(403, 'O96ZW26909.jpg', 3, NULL, NULL, NULL),
(404, 'EcsW526309.jpg', 3, NULL, NULL, NULL),
(405, 'ImqQj26909.jpg', 3, NULL, NULL, NULL),
(406, 'vTnKV26109.jpg', 3, NULL, NULL, NULL),
(407, 'RdITd26809.jpg', 3, NULL, NULL, NULL),
(408, 'zxbVR26509.jpg', 3, NULL, NULL, NULL),
(409, '1X7A926709.jpg', 3, NULL, NULL, NULL),
(410, 'yoGy126309.jpg', 3, NULL, NULL, NULL),
(411, 'vWZZP26409.jpg', 3, NULL, NULL, NULL),
(412, 'pskMF26909.jpg', 3, NULL, NULL, NULL),
(413, 'ZWVkA26709.jpg', 3, NULL, NULL, NULL),
(414, 'Gw2Ou26609.jpg', 3, NULL, NULL, NULL),
(415, 'mvz2526609.jpg', 3, NULL, NULL, NULL),
(416, 'FmLB226109.jpg', 3, NULL, NULL, NULL),
(417, 'UbZgZ26609.jpg', 3, NULL, NULL, NULL),
(418, '5hvpD26409.jpg', 3, NULL, NULL, NULL),
(419, 'ZSGkg26809.jpg', 3, NULL, NULL, NULL),
(420, 'dXKcO26809.jpg', 3, NULL, NULL, NULL),
(421, 'sLH6l26809.jpg', 3, NULL, NULL, NULL),
(422, 'gmSGr26409.jpg', 3, NULL, NULL, NULL),
(423, 'A04Hc26309.jpg', 3, NULL, NULL, NULL),
(424, 'wotPR26609.jpg', 3, NULL, NULL, NULL),
(425, 'omu6A26609.jpg', 3, NULL, NULL, NULL),
(426, 'db1ft26309.jpg', 3, NULL, NULL, NULL),
(427, 's3NIE26709.jpg', 3, NULL, NULL, NULL),
(428, 'FHpqo26209.jpg', 3, NULL, NULL, NULL),
(429, 'piCSe26109.jpg', 3, NULL, NULL, NULL),
(430, 'y8rED26109.jpg', 3, NULL, NULL, NULL),
(431, 'wXE3x26709.jpg', 3, NULL, NULL, NULL),
(432, 'x0Yow26509.jpg', 3, NULL, NULL, NULL),
(433, '182VR26509.jpg', 3, NULL, NULL, NULL),
(434, 'uGATS26909.jpg', 3, NULL, NULL, NULL),
(435, 'Wl7Dd26909.jpg', 3, NULL, NULL, NULL),
(436, 'VW7yI26109.jpg', 3, NULL, NULL, NULL),
(437, 'oGbeP26609.jpg', 3, NULL, NULL, NULL),
(438, 'ubSqE26509.jpg', 3, NULL, NULL, NULL),
(439, 'C8VUJ26309.jpg', 3, NULL, NULL, NULL),
(440, 'CF57F26709.jpg', 3, NULL, NULL, NULL),
(441, 'ROabh26409.jpg', 3, NULL, NULL, NULL),
(442, 'BZhc326809.jpg', 3, NULL, NULL, NULL),
(443, 'HcszO26209.jpg', 3, NULL, NULL, NULL),
(444, 'SChpV26509.jpg', 3, NULL, NULL, NULL),
(445, 'J16Ls26909.jpg', 3, NULL, NULL, NULL),
(446, 'koRm126109.jpg', 3, NULL, NULL, NULL),
(447, 'eRQsg26509.jpg', 3, NULL, NULL, NULL),
(448, 'VnXhr26709.jpg', 3, NULL, NULL, NULL),
(449, 'nwoHw26209.jpg', 3, NULL, NULL, NULL),
(450, 'eupPd26909.jpg', 3, NULL, NULL, NULL),
(451, '3brhg26409.jpg', 3, NULL, NULL, NULL),
(452, '3zPBP26809.jpg', 3, NULL, NULL, NULL),
(453, 'wLLl526909.jpg', 3, NULL, NULL, NULL),
(454, 'v9JGu26409.jpg', 3, NULL, NULL, NULL),
(455, 'Lw7a926409.jpg', 3, NULL, NULL, NULL),
(456, '0qqEL26809.jpg', 3, NULL, NULL, NULL),
(457, 'AQ52T26409.jpg', 3, NULL, NULL, NULL),
(458, 'LbihH26309.jpg', 3, NULL, NULL, NULL),
(459, 'tWoFT26409.jpg', 3, NULL, NULL, NULL),
(460, 'raeJk26509.jpg', 3, NULL, NULL, NULL),
(461, 'vQvUc26509.jpg', 3, NULL, NULL, NULL),
(462, '9guxO26309.jpg', 3, NULL, NULL, NULL),
(463, 'h0sx826709.jpg', 3, NULL, NULL, NULL),
(464, 'MMzh126609.jpg', 3, NULL, NULL, NULL),
(465, '7rLPU26809.jpg', 3, NULL, NULL, NULL),
(466, '4nNB326909.jpg', 3, NULL, NULL, NULL),
(467, '4NIT526609.jpg', 3, NULL, NULL, NULL),
(468, '1ZLgP26509.jpg', 3, NULL, NULL, NULL),
(469, 'oOCz426309.jpg', 3, NULL, NULL, NULL),
(470, 'poNZD26609.jpg', 3, NULL, NULL, NULL),
(471, '9FVXr26809.jpg', 3, NULL, NULL, NULL),
(472, 'Vk3lk26109.jpg', 3, NULL, NULL, NULL),
(473, 'zAUqs26609.jpg', 3, NULL, NULL, NULL),
(474, 'oGWVN26909.jpg', 3, NULL, NULL, NULL),
(475, 'c5iOb26209.jpg', 3, NULL, NULL, NULL),
(476, 'UD1Xs26209.jpg', 3, NULL, NULL, NULL),
(477, '9UdGF26709.jpg', 3, NULL, NULL, NULL),
(478, 'oGGww26709.jpg', 3, NULL, NULL, NULL),
(479, 'xkLFO26509.jpg', 3, NULL, NULL, NULL),
(480, 'X6JgO26909.jpg', 3, NULL, NULL, NULL),
(481, 'eQBja26509.jpg', 3, NULL, NULL, NULL),
(482, 'GL3Mw26209.jpg', 3, NULL, NULL, NULL),
(483, 'dCkEE26309.jpg', 3, NULL, NULL, NULL),
(484, 'QXAKX26910.jpg', 3, NULL, NULL, NULL),
(485, 'XaTxI26511.jpg', 3, NULL, NULL, NULL),
(487, 'C7s1B26611.jpg', 3, NULL, NULL, NULL),
(489, '28F2E28708.jpg', 3, NULL, NULL, NULL),
(490, 'BqvAV28708.jpg', 3, NULL, NULL, NULL),
(491, '7ImXD28608.jpg', 3, NULL, NULL, NULL),
(492, 'WZMkB28808.jpg', 3, NULL, NULL, NULL),
(493, 'ARce028808.jpg', 3, NULL, NULL, NULL),
(494, '9hRh128308.jpg', 3, NULL, NULL, NULL),
(495, 'mrdo728508.jpg', 3, NULL, NULL, NULL),
(496, 'Fe4L328308.jpg', 3, NULL, NULL, NULL),
(497, '80DcV28808.jpg', 3, NULL, NULL, NULL),
(498, 'rubpf28308.jpg', 3, NULL, NULL, NULL),
(499, 'LylU628608.jpg', 3, NULL, NULL, NULL),
(500, 'u6Zmx28208.jpg', 3, NULL, NULL, NULL),
(501, 'OWcno28508.jpg', 3, NULL, NULL, NULL),
(502, 'GtA6I28508.jpg', 3, NULL, NULL, NULL),
(503, 'bEGZQ28308.jpg', 3, NULL, NULL, NULL),
(504, 'nOyzk28808.jpg', 3, NULL, NULL, NULL),
(505, 'XouLV28608.jpg', 3, NULL, NULL, NULL),
(506, 'F84bS28209.jpg', 3, NULL, NULL, NULL),
(507, 'DjUiJ28301.jpg', 3, NULL, NULL, NULL),
(510, 'Csi8p28201.jpg', 3, NULL, NULL, NULL),
(511, 'kZ0qv28301.jpg', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_categories`
--

CREATE TABLE `image_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `image_type` enum('ACTUAL','THUMBNAIL','LARGE','MEDIUM') COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_categories`
--

INSERT INTO `image_categories` (`id`, `image_id`, `image_type`, `height`, `width`, `path`, `created_at`, `updated_at`) VALUES
(84, 83, 'ACTUAL', 277, 370, 'images/media/2019/10/JqYfZ11207.jpg', NULL, NULL),
(85, 83, 'THUMBNAIL', 112, 150, 'images/media/2019/10/thumbnail1570778231JqYfZ11207.jpg', NULL, NULL),
(86, 84, 'ACTUAL', 301, 770, 'images/media/2019/10/6Q4Qy11507.jpg', NULL, NULL),
(87, 85, 'ACTUAL', 550, 368, 'images/media/2019/10/jOVnc11207.jpg', NULL, NULL),
(88, 85, 'THUMBNAIL', 150, 100, 'images/media/2019/10/thumbnail1570778446jOVnc11207.jpg', NULL, NULL),
(89, 85, 'MEDIUM', 400, 268, 'images/media/2019/10/medium1570778446jOVnc11207.jpg', NULL, NULL),
(90, 86, 'ACTUAL', 220, 370, 'images/media/2019/10/Ake4A11107.jpg', NULL, NULL),
(91, 86, 'THUMBNAIL', 89, 150, 'images/media/2019/10/thumbnail1570778447Ake4A11107.jpg', NULL, NULL),
(96, 89, 'ACTUAL', 229, 270, 'images/media/2019/10/nDQtA11407.jpg', NULL, NULL),
(97, 89, 'THUMBNAIL', 127, 150, 'images/media/2019/10/thumbnail1570778680nDQtA11407.jpg', NULL, NULL),
(98, 90, 'ACTUAL', 298, 568, 'images/media/2019/10/ueyod11407.jpg', NULL, NULL),
(99, 90, 'THUMBNAIL', 79, 150, 'images/media/2019/10/thumbnail1570778749ueyod11407.jpg', NULL, NULL),
(100, 90, 'MEDIUM', 210, 400, 'images/media/2019/10/medium1570778749ueyod11407.jpg', NULL, NULL),
(101, 91, 'ACTUAL', 490, 570, 'images/media/2019/10/xD6MF11207.jpg', NULL, NULL),
(102, 91, 'THUMBNAIL', 129, 150, 'images/media/2019/10/thumbnail1570778967xD6MF11207.jpg', NULL, NULL),
(103, 91, 'MEDIUM', 344, 400, 'images/media/2019/10/medium1570778967xD6MF11207.jpg', NULL, NULL),
(104, 92, 'ACTUAL', 229, 270, 'images/media/2019/10/YZyoU11507.jpg', NULL, NULL),
(105, 92, 'THUMBNAIL', 127, 150, 'images/media/2019/10/thumbnail1570778968YZyoU11507.jpg', NULL, NULL),
(106, 93, 'ACTUAL', 301, 770, 'images/media/2019/10/RLshK11309.jpg', NULL, NULL),
(107, 93, 'THUMBNAIL', 59, 150, 'images/media/2019/10/thumbnail1570787475RLshK11309.jpg', NULL, NULL),
(108, 93, 'MEDIUM', 156, 400, 'images/media/2019/10/medium1570787476RLshK11309.jpg', NULL, NULL),
(109, 94, 'ACTUAL', 211, 570, 'images/media/2019/10/pTZdI11309.jpg', NULL, NULL),
(110, 94, 'THUMBNAIL', 56, 150, 'images/media/2019/10/thumbnail1570787731pTZdI11309.jpg', NULL, NULL),
(111, 94, 'MEDIUM', 148, 400, 'images/media/2019/10/medium1570787731pTZdI11309.jpg', NULL, NULL),
(112, 95, 'ACTUAL', 451, 570, 'images/media/2019/10/2t7BU11909.jpg', NULL, NULL),
(113, 95, 'THUMBNAIL', 119, 150, 'images/media/2019/10/thumbnail15707877532t7BU11909.jpg', NULL, NULL),
(114, 95, 'MEDIUM', 316, 400, 'images/media/2019/10/medium15707877542t7BU11909.jpg', NULL, NULL),
(115, 96, 'ACTUAL', 211, 270, 'images/media/2019/10/O0cLp11909.jpg', NULL, NULL),
(116, 96, 'THUMBNAIL', 117, 150, 'images/media/2019/10/thumbnail1570787792O0cLp11909.jpg', NULL, NULL),
(117, 97, 'ACTUAL', 298, 568, 'images/media/2019/10/ncXhn11709.jpg', NULL, NULL),
(118, 97, 'THUMBNAIL', 79, 150, 'images/media/2019/10/thumbnail1570787936ncXhn11709.jpg', NULL, NULL),
(119, 97, 'MEDIUM', 210, 400, 'images/media/2019/10/medium1570787936ncXhn11709.jpg', NULL, NULL),
(120, 98, 'ACTUAL', 452, 569, 'images/media/2019/10/3876V11310.jpg', NULL, NULL),
(121, 98, 'THUMBNAIL', 119, 150, 'images/media/2019/10/thumbnail15707880203876V11310.jpg', NULL, NULL),
(122, 98, 'MEDIUM', 318, 400, 'images/media/2019/10/medium15707880213876V11310.jpg', NULL, NULL),
(123, 99, 'ACTUAL', 451, 271, 'images/media/2019/10/80IGj11510.jpg', NULL, NULL),
(124, 99, 'THUMBNAIL', 150, 90, 'images/media/2019/10/thumbnail157078802180IGj11510.jpg', NULL, NULL),
(125, 99, 'MEDIUM', 400, 240, 'images/media/2019/10/medium157078802180IGj11510.jpg', NULL, NULL),
(126, 100, 'ACTUAL', 493, 370, 'images/media/2019/10/ueeqM11410.jpg', NULL, NULL),
(127, 100, 'THUMBNAIL', 150, 113, 'images/media/2019/10/thumbnail1570788170ueeqM11410.jpg', NULL, NULL),
(128, 100, 'MEDIUM', 400, 300, 'images/media/2019/10/medium1570788171ueeqM11410.jpg', NULL, NULL),
(129, 101, 'ACTUAL', 230, 370, 'images/media/2019/10/UrgVW11410.jpg', NULL, NULL),
(130, 101, 'THUMBNAIL', 93, 150, 'images/media/2019/10/thumbnail1570788171UrgVW11410.jpg', NULL, NULL),
(131, 102, 'ACTUAL', 230, 370, 'images/media/2019/10/a18kN11510.jpg', NULL, NULL),
(132, 102, 'THUMBNAIL', 93, 150, 'images/media/2019/10/thumbnail1570788301a18kN11510.jpg', NULL, NULL),
(133, 103, 'ACTUAL', 493, 370, 'images/media/2019/10/qQM0R11310.jpg', NULL, NULL),
(134, 103, 'THUMBNAIL', 150, 113, 'images/media/2019/10/thumbnail1570788302qQM0R11310.jpg', NULL, NULL),
(135, 103, 'MEDIUM', 400, 300, 'images/media/2019/10/medium1570788302qQM0R11310.jpg', NULL, NULL),
(136, 104, 'ACTUAL', 259, 770, 'images/media/2019/10/VrhhT11510.jpg', NULL, NULL),
(137, 104, 'THUMBNAIL', 50, 150, 'images/media/2019/10/thumbnail1570788382VrhhT11510.jpg', NULL, NULL),
(138, 104, 'MEDIUM', 135, 400, 'images/media/2019/10/medium1570788382VrhhT11510.jpg', NULL, NULL),
(139, 105, 'ACTUAL', 546, 372, 'images/media/2019/10/gSkR011310.jpg', NULL, NULL),
(140, 105, 'THUMBNAIL', 150, 102, 'images/media/2019/10/thumbnail1570788383gSkR011310.jpg', NULL, NULL),
(141, 105, 'MEDIUM', 400, 273, 'images/media/2019/10/medium1570788383gSkR011310.jpg', NULL, NULL),
(142, 106, 'ACTUAL', 430, 1599, 'images/media/2019/10/DXoxt11610.jpg', NULL, NULL),
(143, 106, 'THUMBNAIL', 40, 150, 'images/media/2019/10/thumbnail1570789393DXoxt11610.jpg', NULL, NULL),
(144, 106, 'MEDIUM', 108, 400, 'images/media/2019/10/medium1570789394DXoxt11610.jpg', NULL, NULL),
(145, 106, 'LARGE', 242, 900, 'images/media/2019/10/large1570789394DXoxt11610.jpg', NULL, NULL),
(146, 107, 'ACTUAL', 236, 1169, 'images/media/2019/10/N4WSZ11310.jpg', NULL, NULL),
(147, 107, 'THUMBNAIL', 30, 150, 'images/media/2019/10/thumbnail1570789395N4WSZ11310.jpg', NULL, NULL),
(148, 107, 'MEDIUM', 81, 400, 'images/media/2019/10/medium1570789395N4WSZ11310.jpg', NULL, NULL),
(149, 107, 'LARGE', 182, 900, 'images/media/2019/10/large1570789395N4WSZ11310.jpg', NULL, NULL),
(150, 108, 'ACTUAL', 421, 1170, 'images/media/2019/10/z9MLR11610.jpg', NULL, NULL),
(151, 108, 'THUMBNAIL', 54, 150, 'images/media/2019/10/thumbnail1570789643z9MLR11610.jpg', NULL, NULL),
(152, 108, 'MEDIUM', 144, 400, 'images/media/2019/10/medium1570789643z9MLR11610.jpg', NULL, NULL),
(153, 108, 'LARGE', 324, 900, 'images/media/2019/10/large1570789644z9MLR11610.jpg', NULL, NULL),
(154, 109, 'ACTUAL', 418, 885, 'images/media/2019/10/YNVyV11410.jpg', NULL, NULL),
(155, 109, 'THUMBNAIL', 71, 150, 'images/media/2019/10/thumbnail1570789935YNVyV11410.jpg', NULL, NULL),
(156, 109, 'MEDIUM', 189, 400, 'images/media/2019/10/medium1570789935YNVyV11410.jpg', NULL, NULL),
(157, 110, 'ACTUAL', 387, 770, 'images/media/2019/10/YinE411810.jpg', NULL, NULL),
(158, 110, 'THUMBNAIL', 75, 150, 'images/media/2019/10/thumbnail1570790072YinE411810.jpg', NULL, NULL),
(159, 110, 'MEDIUM', 201, 400, 'images/media/2019/10/medium1570790072YinE411810.jpg', NULL, NULL),
(160, 111, 'ACTUAL', 421, 1600, 'images/media/2019/10/97VNC11210.jpg', NULL, NULL),
(161, 111, 'THUMBNAIL', 39, 150, 'images/media/2019/10/thumbnail157079031897VNC11210.jpg', NULL, NULL),
(162, 111, 'MEDIUM', 105, 400, 'images/media/2019/10/medium157079031997VNC11210.jpg', NULL, NULL),
(163, 111, 'LARGE', 237, 900, 'images/media/2019/10/large157079031997VNC11210.jpg', NULL, NULL),
(168, 114, 'ACTUAL', 179, 370, 'images/media/2019/10/zZZ2n11710.jpg', NULL, NULL),
(169, 114, 'THUMBNAIL', 73, 150, 'images/media/2019/10/thumbnail1570790472zZZ2n11710.jpg', NULL, NULL),
(170, 115, 'ACTUAL', 211, 370, 'images/media/2019/10/vMNsa11710.jpg', NULL, NULL),
(171, 115, 'THUMBNAIL', 86, 150, 'images/media/2019/10/thumbnail1570790553vMNsa11710.jpg', NULL, NULL),
(172, 116, 'ACTUAL', 208, 465, 'images/media/2019/10/qujIz11610.jpg', NULL, NULL),
(173, 116, 'THUMBNAIL', 67, 150, 'images/media/2019/10/thumbnail1570790554qujIz11610.jpg', NULL, NULL),
(174, 116, 'MEDIUM', 179, 400, 'images/media/2019/10/medium1570790554qujIz11610.jpg', NULL, NULL),
(176, 118, 'ACTUAL', 20, 30, 'images/media/2019/10/PJG0C11511.jpg', NULL, NULL),
(177, 119, 'ACTUAL', 20, 30, 'images/media/2019/10/SKOMJ11512.jpg', NULL, NULL),
(178, 120, 'ACTUAL', 284, 250, 'images/media/2020/01/heDeO12806.jpg', NULL, NULL),
(179, 121, 'ACTUAL', 284, 250, 'images/media/2020/01/tQlXB12406.jpg', NULL, NULL),
(180, 120, 'THUMBNAIL', 150, 132, 'images/media/2020/01/thumbnail1578809956heDeO12806.jpg', NULL, NULL),
(181, 121, 'THUMBNAIL', 150, 132, 'images/media/2020/01/thumbnail1578809956tQlXB12406.jpg', NULL, NULL),
(182, 122, 'ACTUAL', 284, 250, 'images/media/2020/01/3TfgH12106.jpg', NULL, NULL),
(183, 122, 'THUMBNAIL', 150, 132, 'images/media/2020/01/thumbnail15788099563TfgH12106.jpg', NULL, NULL),
(184, 123, 'ACTUAL', 284, 250, 'images/media/2020/01/8Z21912406.jpg', NULL, NULL),
(185, 123, 'THUMBNAIL', 150, 132, 'images/media/2020/01/thumbnail15788099568Z21912406.jpg', NULL, NULL),
(186, 124, 'ACTUAL', 421, 1600, 'images/media/2020/01/9zIV712606.jpg', NULL, NULL),
(187, 124, 'THUMBNAIL', 39, 150, 'images/media/2020/01/thumbnail15788099579zIV712606.jpg', NULL, NULL),
(188, 124, 'MEDIUM', 105, 400, 'images/media/2020/01/medium15788099579zIV712606.jpg', NULL, NULL),
(189, 124, 'LARGE', 237, 900, 'images/media/2020/01/large15788099579zIV712606.jpg', NULL, NULL),
(190, 125, 'ACTUAL', 421, 1600, 'images/media/2020/01/pIyQp12106.jpg', NULL, NULL),
(191, 125, 'THUMBNAIL', 39, 150, 'images/media/2020/01/thumbnail1578809958pIyQp12106.jpg', NULL, NULL),
(192, 125, 'MEDIUM', 105, 400, 'images/media/2020/01/medium1578809958pIyQp12106.jpg', NULL, NULL),
(193, 125, 'LARGE', 237, 900, 'images/media/2020/01/large1578809958pIyQp12106.jpg', NULL, NULL),
(194, 126, 'ACTUAL', 236, 1170, 'images/media/2020/01/CCaOO12806.jpg', NULL, NULL),
(195, 126, 'THUMBNAIL', 30, 150, 'images/media/2020/01/thumbnail1578809958CCaOO12806.jpg', NULL, NULL),
(196, 126, 'MEDIUM', 81, 400, 'images/media/2020/01/medium1578809958CCaOO12806.jpg', NULL, NULL),
(197, 126, 'LARGE', 182, 900, 'images/media/2020/01/large1578809958CCaOO12806.jpg', NULL, NULL),
(198, 127, 'ACTUAL', 421, 1600, 'images/media/2020/01/X9RfE12206.jpg', NULL, NULL),
(199, 127, 'THUMBNAIL', 39, 150, 'images/media/2020/01/thumbnail1578809958X9RfE12206.jpg', NULL, NULL),
(200, 127, 'MEDIUM', 105, 400, 'images/media/2020/01/medium1578809958X9RfE12206.jpg', NULL, NULL),
(201, 127, 'LARGE', 237, 900, 'images/media/2020/01/large1578809958X9RfE12206.jpg', NULL, NULL),
(202, 128, 'ACTUAL', 430, 1599, 'images/media/2020/01/rMOkz12206.jpg', NULL, NULL),
(203, 128, 'THUMBNAIL', 40, 150, 'images/media/2020/01/thumbnail1578809959rMOkz12206.jpg', NULL, NULL),
(204, 128, 'MEDIUM', 108, 400, 'images/media/2020/01/medium1578809959rMOkz12206.jpg', NULL, NULL),
(205, 128, 'LARGE', 242, 900, 'images/media/2020/01/large1578809959rMOkz12206.jpg', NULL, NULL),
(230, 138, 'ACTUAL', 400, 400, 'images/media/2020/01/9dcaT14612.jpg', NULL, NULL),
(231, 137, 'ACTUAL', 400, 400, 'images/media/2020/01/6lFX014612.jpg', NULL, NULL),
(232, 137, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15790048186lFX014612.jpg', NULL, NULL),
(233, 138, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15790048189dcaT14612.jpg', NULL, NULL),
(234, 137, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15790048186lFX014612.jpg', NULL, NULL),
(235, 138, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15790048189dcaT14612.jpg', NULL, NULL),
(236, 139, 'ACTUAL', 400, 400, 'images/media/2020/01/1Kt9F14512.jpg', NULL, NULL),
(237, 140, 'ACTUAL', 400, 400, 'images/media/2020/01/DoI5y14212.jpg', NULL, NULL),
(238, 139, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15790048191Kt9F14512.jpg', NULL, NULL),
(239, 140, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579004819DoI5y14212.jpg', NULL, NULL),
(240, 139, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15790048191Kt9F14512.jpg', NULL, NULL),
(241, 140, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579004819DoI5y14212.jpg', NULL, NULL),
(242, 141, 'ACTUAL', 400, 400, 'images/media/2020/01/JAWP014612.jpg', NULL, NULL),
(243, 142, 'ACTUAL', 400, 400, 'images/media/2020/01/2iHkJ14312.jpg', NULL, NULL),
(244, 141, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579004819JAWP014612.jpg', NULL, NULL),
(245, 142, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15790048192iHkJ14312.jpg', NULL, NULL),
(246, 141, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579004819JAWP014612.jpg', NULL, NULL),
(247, 142, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15790048192iHkJ14312.jpg', NULL, NULL),
(248, 143, 'ACTUAL', 400, 400, 'images/media/2020/01/yCCMx14101.jpg', NULL, NULL),
(249, 143, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579008194yCCMx14101.jpg', NULL, NULL),
(250, 143, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579008194yCCMx14101.jpg', NULL, NULL),
(251, 144, 'ACTUAL', 400, 400, 'images/media/2020/01/Lpu1314901.jpg', NULL, NULL),
(252, 144, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579008194Lpu1314901.jpg', NULL, NULL),
(253, 144, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579008194Lpu1314901.jpg', NULL, NULL),
(254, 145, 'ACTUAL', 400, 400, 'images/media/2020/01/0vL6P14101.jpg', NULL, NULL),
(255, 145, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15790081950vL6P14101.jpg', NULL, NULL),
(256, 145, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15790081950vL6P14101.jpg', NULL, NULL),
(257, 146, 'ACTUAL', 400, 400, 'images/media/2020/01/c6hM114601.jpg', NULL, NULL),
(258, 146, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579008195c6hM114601.jpg', NULL, NULL),
(259, 146, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579008195c6hM114601.jpg', NULL, NULL),
(260, 147, 'ACTUAL', 400, 400, 'images/media/2020/01/UcdOn14401.jpg', NULL, NULL),
(261, 147, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579008195UcdOn14401.jpg', NULL, NULL),
(262, 147, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579008195UcdOn14401.jpg', NULL, NULL),
(263, 148, 'ACTUAL', 400, 400, 'images/media/2020/01/NUH0w14301.jpg', NULL, NULL),
(264, 148, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579008195NUH0w14301.jpg', NULL, NULL),
(265, 148, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579008195NUH0w14301.jpg', NULL, NULL),
(266, 149, 'ACTUAL', 400, 400, 'images/media/2020/01/d2oH414401.jpg', NULL, NULL),
(267, 150, 'ACTUAL', 400, 400, 'images/media/2020/01/tVebB14801.jpg', NULL, NULL),
(268, 149, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579008755d2oH414401.jpg', NULL, NULL),
(269, 150, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579008755tVebB14801.jpg', NULL, NULL),
(270, 149, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579008755d2oH414401.jpg', NULL, NULL),
(271, 150, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579008755tVebB14801.jpg', NULL, NULL),
(272, 151, 'ACTUAL', 400, 400, 'images/media/2020/01/7u1HS14601.jpg', NULL, NULL),
(273, 151, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15790087557u1HS14601.jpg', NULL, NULL),
(274, 152, 'ACTUAL', 400, 400, 'images/media/2020/01/NzfGY14901.jpg', NULL, NULL),
(275, 151, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15790087557u1HS14601.jpg', NULL, NULL),
(276, 152, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579008755NzfGY14901.jpg', NULL, NULL),
(277, 152, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579008755NzfGY14901.jpg', NULL, NULL),
(278, 153, 'ACTUAL', 400, 400, 'images/media/2020/01/hLSNR14901.jpg', NULL, NULL),
(279, 153, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579008755hLSNR14901.jpg', NULL, NULL),
(280, 154, 'ACTUAL', 400, 400, 'images/media/2020/01/82zYY14501.jpg', NULL, NULL),
(281, 153, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579008756hLSNR14901.jpg', NULL, NULL),
(282, 154, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail157900875682zYY14501.jpg', NULL, NULL),
(283, 154, 'MEDIUM', 400, 400, 'images/media/2020/01/medium157900875682zYY14501.jpg', NULL, NULL),
(284, 155, 'ACTUAL', 400, 400, 'images/media/2020/01/kIoEG14901.jpg', NULL, NULL),
(285, 156, 'ACTUAL', 400, 400, 'images/media/2020/01/fSgMw14601.jpg', NULL, NULL),
(286, 156, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009143fSgMw14601.jpg', NULL, NULL),
(287, 155, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009143kIoEG14901.jpg', NULL, NULL),
(288, 156, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009143fSgMw14601.jpg', NULL, NULL),
(289, 155, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009143kIoEG14901.jpg', NULL, NULL),
(290, 157, 'ACTUAL', 400, 400, 'images/media/2020/01/IxAYr14801.jpg', NULL, NULL),
(291, 158, 'ACTUAL', 400, 400, 'images/media/2020/01/Hvu2c14601.jpg', NULL, NULL),
(292, 157, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009144IxAYr14801.jpg', NULL, NULL),
(293, 158, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009144Hvu2c14601.jpg', NULL, NULL),
(294, 157, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009144IxAYr14801.jpg', NULL, NULL),
(295, 158, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009144Hvu2c14601.jpg', NULL, NULL),
(296, 159, 'ACTUAL', 400, 400, 'images/media/2020/01/1lH5g14801.jpg', NULL, NULL),
(297, 160, 'ACTUAL', 400, 400, 'images/media/2020/01/vzK1V14101.jpg', NULL, NULL),
(298, 159, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15790091441lH5g14801.jpg', NULL, NULL),
(299, 160, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009144vzK1V14101.jpg', NULL, NULL),
(300, 160, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009144vzK1V14101.jpg', NULL, NULL),
(301, 159, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15790091441lH5g14801.jpg', NULL, NULL),
(302, 161, 'ACTUAL', 400, 400, 'images/media/2020/01/Xt5NP14201.jpg', NULL, NULL),
(303, 161, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009684Xt5NP14201.jpg', NULL, NULL),
(304, 161, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009684Xt5NP14201.jpg', NULL, NULL),
(305, 162, 'ACTUAL', 400, 400, 'images/media/2020/01/4HidE14401.jpg', NULL, NULL),
(306, 162, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15790096844HidE14401.jpg', NULL, NULL),
(307, 162, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15790096844HidE14401.jpg', NULL, NULL),
(308, 163, 'ACTUAL', 400, 400, 'images/media/2020/01/UzyFM14801.jpg', NULL, NULL),
(309, 163, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009684UzyFM14801.jpg', NULL, NULL),
(310, 163, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009684UzyFM14801.jpg', NULL, NULL),
(311, 164, 'ACTUAL', 400, 400, 'images/media/2020/01/ZAJBt14201.jpg', NULL, NULL),
(312, 164, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009684ZAJBt14201.jpg', NULL, NULL),
(313, 164, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009684ZAJBt14201.jpg', NULL, NULL),
(314, 165, 'ACTUAL', 400, 400, 'images/media/2020/01/hAIR914501.jpg', NULL, NULL),
(315, 165, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009685hAIR914501.jpg', NULL, NULL),
(316, 165, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009685hAIR914501.jpg', NULL, NULL),
(317, 166, 'ACTUAL', 400, 400, 'images/media/2020/01/joA1814201.jpg', NULL, NULL),
(318, 166, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579009685joA1814201.jpg', NULL, NULL),
(319, 166, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579009685joA1814201.jpg', NULL, NULL),
(320, 167, 'ACTUAL', 400, 400, 'images/media/2020/01/fKqZW16909.jpg', NULL, NULL),
(321, 167, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579167633fKqZW16909.jpg', NULL, NULL),
(322, 167, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579167633fKqZW16909.jpg', NULL, NULL),
(323, 168, 'ACTUAL', 400, 400, 'images/media/2020/01/tprz516409.jpg', NULL, NULL),
(324, 168, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579167633tprz516409.jpg', NULL, NULL),
(325, 168, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579167633tprz516409.jpg', NULL, NULL),
(326, 169, 'ACTUAL', 400, 400, 'images/media/2020/01/TuOmF16809.jpg', NULL, NULL),
(327, 170, 'ACTUAL', 400, 400, 'images/media/2020/01/3idya16709.jpg', NULL, NULL),
(328, 169, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579167633TuOmF16809.jpg', NULL, NULL),
(329, 170, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15791676333idya16709.jpg', NULL, NULL),
(330, 169, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579167633TuOmF16809.jpg', NULL, NULL),
(331, 170, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15791676333idya16709.jpg', NULL, NULL),
(332, 171, 'ACTUAL', 400, 400, 'images/media/2020/01/XQn0p16409.jpg', NULL, NULL),
(333, 171, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579167634XQn0p16409.jpg', NULL, NULL),
(334, 171, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579167634XQn0p16409.jpg', NULL, NULL),
(335, 172, 'ACTUAL', 400, 400, 'images/media/2020/01/X60yn16209.jpg', NULL, NULL),
(336, 172, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579167634X60yn16209.jpg', NULL, NULL),
(337, 172, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579167634X60yn16209.jpg', NULL, NULL),
(338, 173, 'ACTUAL', 400, 400, 'images/media/2020/01/y88OU16609.jpg', NULL, NULL),
(339, 173, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168047y88OU16609.jpg', NULL, NULL),
(340, 173, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168047y88OU16609.jpg', NULL, NULL),
(341, 174, 'ACTUAL', 400, 400, 'images/media/2020/01/i7bmA16509.jpg', NULL, NULL),
(342, 174, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168048i7bmA16509.jpg', NULL, NULL),
(343, 174, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168048i7bmA16509.jpg', NULL, NULL),
(344, 175, 'ACTUAL', 400, 400, 'images/media/2020/01/hJHBo16909.jpg', NULL, NULL),
(345, 175, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168048hJHBo16909.jpg', NULL, NULL),
(346, 175, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168048hJHBo16909.jpg', NULL, NULL),
(347, 176, 'ACTUAL', 400, 400, 'images/media/2020/01/dnR4j16809.jpg', NULL, NULL),
(348, 176, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168048dnR4j16809.jpg', NULL, NULL),
(349, 177, 'ACTUAL', 400, 400, 'images/media/2020/01/rGGBD16409.jpg', NULL, NULL),
(350, 177, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168048rGGBD16409.jpg', NULL, NULL),
(351, 176, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168048dnR4j16809.jpg', NULL, NULL),
(352, 177, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168048rGGBD16409.jpg', NULL, NULL),
(353, 178, 'ACTUAL', 400, 400, 'images/media/2020/01/OEkEh16709.jpg', NULL, NULL),
(354, 178, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168049OEkEh16709.jpg', NULL, NULL),
(355, 178, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168049OEkEh16709.jpg', NULL, NULL),
(356, 179, 'ACTUAL', 400, 400, 'images/media/2020/01/vMAts16109.jpg', NULL, NULL),
(357, 179, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168395vMAts16109.jpg', NULL, NULL),
(358, 179, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168395vMAts16109.jpg', NULL, NULL),
(359, 180, 'ACTUAL', 400, 400, 'images/media/2020/01/W4dF116409.jpg', NULL, NULL),
(360, 180, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168395W4dF116409.jpg', NULL, NULL),
(361, 180, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168395W4dF116409.jpg', NULL, NULL),
(362, 181, 'ACTUAL', 400, 400, 'images/media/2020/01/VkrxK16709.jpg', NULL, NULL),
(363, 181, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168395VkrxK16709.jpg', NULL, NULL),
(364, 181, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168395VkrxK16709.jpg', NULL, NULL),
(365, 182, 'ACTUAL', 400, 400, 'images/media/2020/01/dcbuo16409.jpg', NULL, NULL),
(366, 182, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168395dcbuo16409.jpg', NULL, NULL),
(367, 182, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168395dcbuo16409.jpg', NULL, NULL),
(368, 183, 'ACTUAL', 400, 400, 'images/media/2020/01/XLcdI16509.jpg', NULL, NULL),
(369, 183, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168395XLcdI16509.jpg', NULL, NULL),
(370, 183, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168395XLcdI16509.jpg', NULL, NULL),
(371, 184, 'ACTUAL', 400, 400, 'images/media/2020/01/eTd1216809.jpg', NULL, NULL),
(372, 184, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168396eTd1216809.jpg', NULL, NULL),
(373, 184, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168396eTd1216809.jpg', NULL, NULL),
(374, 185, 'ACTUAL', 400, 400, 'images/media/2020/01/IlyQQ16609.jpg', NULL, NULL),
(375, 185, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168717IlyQQ16609.jpg', NULL, NULL),
(376, 185, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168717IlyQQ16609.jpg', NULL, NULL),
(377, 186, 'ACTUAL', 400, 400, 'images/media/2020/01/cArxy16709.jpg', NULL, NULL),
(378, 186, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168717cArxy16709.jpg', NULL, NULL),
(379, 186, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168717cArxy16709.jpg', NULL, NULL),
(380, 187, 'ACTUAL', 400, 400, 'images/media/2020/01/TbqKu16909.jpg', NULL, NULL),
(381, 187, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168717TbqKu16909.jpg', NULL, NULL),
(382, 187, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168717TbqKu16909.jpg', NULL, NULL),
(383, 188, 'ACTUAL', 400, 400, 'images/media/2020/01/AOvCt16209.jpg', NULL, NULL),
(384, 188, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168718AOvCt16209.jpg', NULL, NULL),
(385, 188, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168718AOvCt16209.jpg', NULL, NULL),
(386, 189, 'ACTUAL', 400, 400, 'images/media/2020/01/OUNNI16709.jpg', NULL, NULL),
(387, 189, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579168718OUNNI16709.jpg', NULL, NULL),
(388, 189, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579168718OUNNI16709.jpg', NULL, NULL),
(389, 190, 'ACTUAL', 400, 400, 'images/media/2020/01/7H2hF16709.jpg', NULL, NULL),
(390, 190, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15791687187H2hF16709.jpg', NULL, NULL),
(391, 190, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15791687187H2hF16709.jpg', NULL, NULL),
(392, 191, 'ACTUAL', 400, 400, 'images/media/2020/01/8b1rh16710.jpg', NULL, NULL),
(393, 191, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15791694768b1rh16710.jpg', NULL, NULL),
(394, 191, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15791694768b1rh16710.jpg', NULL, NULL),
(395, 192, 'ACTUAL', 400, 400, 'images/media/2020/01/yedf016210.jpg', NULL, NULL),
(396, 192, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579169476yedf016210.jpg', NULL, NULL),
(397, 192, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579169476yedf016210.jpg', NULL, NULL),
(398, 193, 'ACTUAL', 400, 400, 'images/media/2020/01/IMOgS16510.jpg', NULL, NULL),
(399, 193, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579169477IMOgS16510.jpg', NULL, NULL),
(400, 193, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579169477IMOgS16510.jpg', NULL, NULL),
(401, 194, 'ACTUAL', 400, 400, 'images/media/2020/01/iOnzs16410.jpg', NULL, NULL),
(402, 194, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579169478iOnzs16410.jpg', NULL, NULL),
(403, 194, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579169478iOnzs16410.jpg', NULL, NULL),
(404, 195, 'ACTUAL', 400, 400, 'images/media/2020/01/1p4Jy16310.jpg', NULL, NULL),
(405, 195, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15791694781p4Jy16310.jpg', NULL, NULL),
(406, 195, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15791694781p4Jy16310.jpg', NULL, NULL),
(407, 196, 'ACTUAL', 400, 400, 'images/media/2020/01/jvIeC16210.jpg', NULL, NULL),
(408, 196, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579169478jvIeC16210.jpg', NULL, NULL),
(409, 196, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579169478jvIeC16210.jpg', NULL, NULL),
(410, 197, 'ACTUAL', 400, 400, 'images/media/2020/01/bxLX416310.jpg', NULL, NULL),
(411, 197, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579169825bxLX416310.jpg', NULL, NULL),
(412, 197, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579169825bxLX416310.jpg', NULL, NULL),
(413, 198, 'ACTUAL', 400, 400, 'images/media/2020/01/xTCik16110.jpg', NULL, NULL),
(414, 198, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579169825xTCik16110.jpg', NULL, NULL),
(415, 198, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579169825xTCik16110.jpg', NULL, NULL),
(416, 199, 'ACTUAL', 400, 400, 'images/media/2020/01/13Eud16110.jpg', NULL, NULL),
(417, 199, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail157916982613Eud16110.jpg', NULL, NULL),
(418, 199, 'MEDIUM', 400, 400, 'images/media/2020/01/medium157916982613Eud16110.jpg', NULL, NULL),
(419, 200, 'ACTUAL', 400, 400, 'images/media/2020/01/UiTSZ16510.jpg', NULL, NULL),
(420, 200, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579169826UiTSZ16510.jpg', NULL, NULL),
(421, 200, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579169826UiTSZ16510.jpg', NULL, NULL),
(422, 201, 'ACTUAL', 400, 400, 'images/media/2020/01/rgdIc16910.jpg', NULL, NULL),
(423, 201, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579169826rgdIc16910.jpg', NULL, NULL),
(424, 201, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579169826rgdIc16910.jpg', NULL, NULL),
(425, 202, 'ACTUAL', 400, 400, 'images/media/2020/01/Dd71W16410.jpg', NULL, NULL),
(426, 202, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579169826Dd71W16410.jpg', NULL, NULL),
(427, 202, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579169826Dd71W16410.jpg', NULL, NULL),
(428, 203, 'ACTUAL', 400, 400, 'images/media/2020/01/Eauxu16210.jpg', NULL, NULL),
(429, 203, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579170237Eauxu16210.jpg', NULL, NULL),
(430, 203, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579170237Eauxu16210.jpg', NULL, NULL),
(431, 204, 'ACTUAL', 400, 400, 'images/media/2020/01/O6oiu16810.jpg', NULL, NULL),
(432, 204, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579170237O6oiu16810.jpg', NULL, NULL),
(433, 204, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579170237O6oiu16810.jpg', NULL, NULL),
(434, 205, 'ACTUAL', 400, 400, 'images/media/2020/01/k0dZW16410.jpg', NULL, NULL),
(435, 206, 'ACTUAL', 400, 400, 'images/media/2020/01/WqaEh16910.jpg', NULL, NULL),
(436, 205, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579170237k0dZW16410.jpg', NULL, NULL),
(437, 206, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579170237WqaEh16910.jpg', NULL, NULL),
(438, 205, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579170237k0dZW16410.jpg', NULL, NULL),
(439, 206, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579170237WqaEh16910.jpg', NULL, NULL),
(440, 207, 'ACTUAL', 400, 400, 'images/media/2020/01/CprlM16610.jpg', NULL, NULL),
(441, 207, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579170238CprlM16610.jpg', NULL, NULL),
(442, 207, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579170238CprlM16610.jpg', NULL, NULL),
(443, 208, 'ACTUAL', 400, 400, 'images/media/2020/01/4RjkL16110.jpg', NULL, NULL),
(444, 208, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15791702384RjkL16110.jpg', NULL, NULL),
(445, 208, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15791702384RjkL16110.jpg', NULL, NULL),
(446, 209, 'ACTUAL', 400, 400, 'images/media/2020/01/f5Ydt16810.jpg', NULL, NULL),
(447, 209, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171010f5Ydt16810.jpg', NULL, NULL),
(448, 209, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171010f5Ydt16810.jpg', NULL, NULL),
(449, 210, 'ACTUAL', 400, 400, 'images/media/2020/01/YYwcx16910.jpg', NULL, NULL),
(450, 210, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171010YYwcx16910.jpg', NULL, NULL),
(451, 210, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171010YYwcx16910.jpg', NULL, NULL),
(452, 211, 'ACTUAL', 400, 400, 'images/media/2020/01/1h5UV16210.jpg', NULL, NULL),
(453, 211, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15791710101h5UV16210.jpg', NULL, NULL),
(454, 211, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15791710101h5UV16210.jpg', NULL, NULL),
(455, 212, 'ACTUAL', 400, 400, 'images/media/2020/01/4h2gr16210.jpg', NULL, NULL),
(456, 212, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15791710134h2gr16210.jpg', NULL, NULL),
(457, 212, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15791710134h2gr16210.jpg', NULL, NULL),
(458, 213, 'ACTUAL', 400, 400, 'images/media/2020/01/HSioR16110.jpg', NULL, NULL),
(459, 214, 'ACTUAL', 400, 400, 'images/media/2020/01/YRnqB16110.jpg', NULL, NULL),
(460, 213, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171015HSioR16110.jpg', NULL, NULL),
(461, 214, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171015YRnqB16110.jpg', NULL, NULL),
(462, 213, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171015HSioR16110.jpg', NULL, NULL),
(463, 214, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171015YRnqB16110.jpg', NULL, NULL),
(464, 215, 'ACTUAL', 400, 400, 'images/media/2020/01/ttO9016810.jpg', NULL, NULL),
(465, 215, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171322ttO9016810.jpg', NULL, NULL),
(466, 215, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171322ttO9016810.jpg', NULL, NULL),
(467, 216, 'ACTUAL', 400, 400, 'images/media/2020/01/oECF016110.jpg', NULL, NULL),
(468, 216, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171322oECF016110.jpg', NULL, NULL),
(469, 216, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171322oECF016110.jpg', NULL, NULL),
(470, 217, 'ACTUAL', 400, 400, 'images/media/2020/01/O7AKb16610.jpg', NULL, NULL),
(471, 217, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171322O7AKb16610.jpg', NULL, NULL),
(472, 217, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171322O7AKb16610.jpg', NULL, NULL),
(473, 218, 'ACTUAL', 400, 400, 'images/media/2020/01/FOjrl16310.jpg', NULL, NULL),
(474, 218, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171322FOjrl16310.jpg', NULL, NULL),
(475, 218, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171322FOjrl16310.jpg', NULL, NULL),
(476, 219, 'ACTUAL', 400, 400, 'images/media/2020/01/xBMfd16410.jpg', NULL, NULL),
(477, 219, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171323xBMfd16410.jpg', NULL, NULL),
(478, 219, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171323xBMfd16410.jpg', NULL, NULL),
(479, 220, 'ACTUAL', 400, 400, 'images/media/2020/01/gumsJ16810.jpg', NULL, NULL),
(480, 220, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171323gumsJ16810.jpg', NULL, NULL),
(481, 220, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171323gumsJ16810.jpg', NULL, NULL),
(482, 221, 'ACTUAL', 400, 400, 'images/media/2020/01/g8QZk16310.jpg', NULL, NULL),
(483, 222, 'ACTUAL', 400, 400, 'images/media/2020/01/nZsl716310.jpg', NULL, NULL),
(484, 221, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171726g8QZk16310.jpg', NULL, NULL),
(485, 222, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171726nZsl716310.jpg', NULL, NULL),
(486, 221, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171726g8QZk16310.jpg', NULL, NULL),
(487, 222, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171726nZsl716310.jpg', NULL, NULL),
(488, 223, 'ACTUAL', 400, 400, 'images/media/2020/01/mWjV816310.jpg', NULL, NULL),
(489, 223, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171727mWjV816310.jpg', NULL, NULL),
(490, 224, 'ACTUAL', 400, 400, 'images/media/2020/01/ugjL416210.jpg', NULL, NULL),
(491, 224, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171727ugjL416210.jpg', NULL, NULL),
(492, 223, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171727mWjV816310.jpg', NULL, NULL),
(493, 224, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171727ugjL416210.jpg', NULL, NULL),
(494, 225, 'ACTUAL', 400, 400, 'images/media/2020/01/S1uOE16910.jpg', NULL, NULL),
(495, 226, 'ACTUAL', 400, 400, 'images/media/2020/01/UBhZf16610.jpg', NULL, NULL),
(496, 225, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171727S1uOE16910.jpg', NULL, NULL),
(497, 226, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579171727UBhZf16610.jpg', NULL, NULL),
(498, 225, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171727S1uOE16910.jpg', NULL, NULL),
(499, 226, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579171727UBhZf16610.jpg', NULL, NULL),
(503, 228, 'ACTUAL', 400, 400, 'images/media/2020/01/Rlk5516410.jpg', NULL, NULL),
(504, 228, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579172012Rlk5516410.jpg', NULL, NULL),
(505, 228, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579172012Rlk5516410.jpg', NULL, NULL),
(506, 229, 'ACTUAL', 400, 400, 'images/media/2020/01/wDkW216210.jpg', NULL, NULL),
(507, 229, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579172012wDkW216210.jpg', NULL, NULL),
(508, 229, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579172012wDkW216210.jpg', NULL, NULL),
(509, 230, 'ACTUAL', 400, 400, 'images/media/2020/01/2Sl9A16510.jpg', NULL, NULL),
(510, 230, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15791720122Sl9A16510.jpg', NULL, NULL),
(511, 230, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15791720122Sl9A16510.jpg', NULL, NULL),
(512, 231, 'ACTUAL', 400, 400, 'images/media/2020/01/Ym0S116910.jpg', NULL, NULL),
(513, 231, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579172013Ym0S116910.jpg', NULL, NULL),
(514, 231, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579172013Ym0S116910.jpg', NULL, NULL),
(515, 232, 'ACTUAL', 400, 400, 'images/media/2020/01/JgiZw16310.jpg', NULL, NULL),
(516, 232, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579172013JgiZw16310.jpg', NULL, NULL),
(517, 232, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579172013JgiZw16310.jpg', NULL, NULL),
(518, 233, 'ACTUAL', 400, 400, 'images/media/2020/01/SvBFB16310.jpg', NULL, NULL),
(519, 233, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579172365SvBFB16310.jpg', NULL, NULL),
(520, 233, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579172365SvBFB16310.jpg', NULL, NULL),
(521, 234, 'ACTUAL', 400, 400, 'images/media/2020/01/uzxTT16110.jpg', NULL, NULL),
(522, 234, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579172365uzxTT16110.jpg', NULL, NULL),
(523, 234, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579172365uzxTT16110.jpg', NULL, NULL),
(524, 235, 'ACTUAL', 400, 400, 'images/media/2020/01/jbJ6616910.jpg', NULL, NULL),
(525, 235, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579172365jbJ6616910.jpg', NULL, NULL),
(526, 235, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579172365jbJ6616910.jpg', NULL, NULL),
(527, 236, 'ACTUAL', 400, 400, 'images/media/2020/01/XWPYw16910.jpg', NULL, NULL),
(528, 236, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579172366XWPYw16910.jpg', NULL, NULL),
(529, 236, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579172366XWPYw16910.jpg', NULL, NULL),
(530, 237, 'ACTUAL', 400, 400, 'images/media/2020/01/3vtxV16610.jpg', NULL, NULL),
(531, 237, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail15791723663vtxV16610.jpg', NULL, NULL),
(532, 237, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15791723663vtxV16610.jpg', NULL, NULL),
(533, 238, 'ACTUAL', 400, 400, 'images/media/2020/01/GHl8316110.jpg', NULL, NULL),
(534, 238, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579172366GHl8316110.jpg', NULL, NULL),
(535, 238, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579172366GHl8316110.jpg', NULL, NULL),
(536, 239, 'ACTUAL', 1723, 2000, 'images/media/2020/01/9eJoM16411.jpg', NULL, NULL),
(537, 239, 'THUMBNAIL', 129, 150, 'images/media/2020/01/thumbnail15791732579eJoM16411.jpg', NULL, NULL),
(538, 239, 'MEDIUM', 345, 400, 'images/media/2020/01/medium15791732579eJoM16411.jpg', NULL, NULL),
(539, 239, 'LARGE', 775, 900, 'images/media/2020/01/large15791732579eJoM16411.jpg', NULL, NULL),
(540, 240, 'ACTUAL', 479, 400, 'images/media/2020/01/emxna16311.jpg', NULL, NULL),
(541, 240, 'THUMBNAIL', 150, 125, 'images/media/2020/01/thumbnail1579174101emxna16311.jpg', NULL, NULL),
(542, 240, 'MEDIUM', 400, 334, 'images/media/2020/01/medium1579174101emxna16311.jpg', NULL, NULL),
(543, 241, 'ACTUAL', 273, 400, 'images/media/2020/01/iZLI916712.jpg', NULL, NULL),
(544, 241, 'THUMBNAIL', 102, 150, 'images/media/2020/01/thumbnail1579176748iZLI916712.jpg', NULL, NULL),
(545, 241, 'MEDIUM', 273, 400, 'images/media/2020/01/medium1579176748iZLI916712.jpg', NULL, NULL),
(546, 242, 'ACTUAL', 400, 400, 'images/media/2020/01/lqe9L16112.jpg', NULL, NULL),
(547, 242, 'THUMBNAIL', 150, 150, 'images/media/2020/01/thumbnail1579177638lqe9L16112.jpg', NULL, NULL),
(548, 242, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579177638lqe9L16112.jpg', NULL, NULL),
(549, 243, 'ACTUAL', 250, 1600, 'images/media/2020/01/pUpVw16801.jpg', NULL, NULL),
(550, 243, 'THUMBNAIL', 23, 150, 'images/media/2020/01/thumbnail1579181465pUpVw16801.jpg', NULL, NULL),
(551, 243, 'MEDIUM', 63, 400, 'images/media/2020/01/medium1579181465pUpVw16801.jpg', NULL, NULL),
(552, 243, 'LARGE', 141, 900, 'images/media/2020/01/large1579181465pUpVw16801.jpg', NULL, NULL),
(553, 244, 'ACTUAL', 400, 273, 'images/media/2020/01/h3MNv17403.jpg', NULL, NULL),
(554, 244, 'THUMBNAIL', 400, 273, 'images/media/2020/01/thumbnail1579233597h3MNv17403.jpg', NULL, NULL),
(555, 244, 'MEDIUM', 400, 273, 'images/media/2020/01/medium1579233597h3MNv17403.jpg', NULL, NULL),
(556, 245, 'ACTUAL', 421, 1600, 'images/media/2020/01/l6zkU18212.jpg', NULL, NULL),
(557, 245, 'THUMBNAIL', 105, 400, 'images/media/2020/01/thumbnail1579350816l6zkU18212.jpg', NULL, NULL),
(558, 245, 'MEDIUM', 105, 400, 'images/media/2020/01/medium1579350816l6zkU18212.jpg', NULL, NULL),
(559, 245, 'LARGE', 237, 900, 'images/media/2020/01/large1579350817l6zkU18212.jpg', NULL, NULL),
(560, 246, 'ACTUAL', 64, 266, 'images/media/2020/01/a0Lz418101.png', NULL, NULL),
(570, 250, 'ACTUAL', 400, 420, 'images/media/2020/01/m6Bip20411.jpg', NULL, NULL),
(571, 250, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520603m6Bip20411.jpg', NULL, NULL),
(572, 250, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520603m6Bip20411.jpg', NULL, NULL),
(573, 251, 'ACTUAL', 400, 420, 'images/media/2020/01/SwQTt20411.jpg', NULL, NULL),
(574, 251, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520633SwQTt20411.jpg', NULL, NULL),
(575, 251, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520633SwQTt20411.jpg', NULL, NULL),
(576, 252, 'ACTUAL', 400, 420, 'images/media/2020/01/dI16z20511.jpg', NULL, NULL),
(577, 252, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520633dI16z20511.jpg', NULL, NULL),
(578, 252, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520633dI16z20511.jpg', NULL, NULL),
(579, 253, 'ACTUAL', 400, 420, 'images/media/2020/01/ocu1720111.jpg', NULL, NULL),
(580, 253, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520633ocu1720111.jpg', NULL, NULL),
(581, 253, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520633ocu1720111.jpg', NULL, NULL),
(582, 254, 'ACTUAL', 400, 420, 'images/media/2020/01/MLGzS20811.jpg', NULL, NULL),
(583, 254, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520634MLGzS20811.jpg', NULL, NULL),
(584, 254, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520634MLGzS20811.jpg', NULL, NULL),
(585, 255, 'ACTUAL', 400, 420, 'images/media/2020/01/L1Wmo20311.jpg', NULL, NULL),
(586, 255, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520634L1Wmo20311.jpg', NULL, NULL),
(587, 255, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520634L1Wmo20311.jpg', NULL, NULL),
(588, 256, 'ACTUAL', 400, 420, 'images/media/2020/01/xkiGK20411.jpg', NULL, NULL),
(589, 256, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520634xkiGK20411.jpg', NULL, NULL),
(590, 256, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520634xkiGK20411.jpg', NULL, NULL),
(591, 257, 'ACTUAL', 400, 420, 'images/media/2020/01/7pLk920411.jpg', NULL, NULL),
(592, 257, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795206347pLk920411.jpg', NULL, NULL),
(593, 257, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795206347pLk920411.jpg', NULL, NULL),
(594, 258, 'ACTUAL', 400, 420, 'images/media/2020/01/YioXC20311.jpg', NULL, NULL),
(595, 258, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520635YioXC20311.jpg', NULL, NULL),
(596, 258, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520635YioXC20311.jpg', NULL, NULL),
(597, 259, 'ACTUAL', 400, 420, 'images/media/2020/01/mVaqk20711.jpg', NULL, NULL),
(598, 259, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520635mVaqk20711.jpg', NULL, NULL),
(599, 259, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520635mVaqk20711.jpg', NULL, NULL),
(600, 260, 'ACTUAL', 400, 420, 'images/media/2020/01/Aledd20511.jpg', NULL, NULL),
(601, 260, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520635Aledd20511.jpg', NULL, NULL),
(602, 260, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520635Aledd20511.jpg', NULL, NULL),
(603, 261, 'ACTUAL', 400, 420, 'images/media/2020/01/u1pRk20511.jpg', NULL, NULL),
(604, 261, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520635u1pRk20511.jpg', NULL, NULL),
(605, 261, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520635u1pRk20511.jpg', NULL, NULL),
(606, 262, 'ACTUAL', 410, 410, 'images/media/2020/01/rfuZ120811.jpg', NULL, NULL),
(607, 262, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520636rfuZ120811.jpg', NULL, NULL),
(608, 262, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520636rfuZ120811.jpg', NULL, NULL),
(609, 263, 'ACTUAL', 410, 410, 'images/media/2020/01/GrjGi20811.jpg', NULL, NULL),
(610, 263, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520636GrjGi20811.jpg', NULL, NULL),
(611, 263, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520636GrjGi20811.jpg', NULL, NULL),
(612, 264, 'ACTUAL', 410, 410, 'images/media/2020/01/xAZ2M20811.jpg', NULL, NULL),
(613, 264, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520636xAZ2M20811.jpg', NULL, NULL),
(614, 264, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520636xAZ2M20811.jpg', NULL, NULL),
(615, 265, 'ACTUAL', 410, 410, 'images/media/2020/01/jk6sm20311.jpg', NULL, NULL),
(616, 265, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520636jk6sm20311.jpg', NULL, NULL),
(617, 265, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520636jk6sm20311.jpg', NULL, NULL),
(618, 266, 'ACTUAL', 410, 410, 'images/media/2020/01/IFCCa20711.jpg', NULL, NULL),
(619, 266, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520637IFCCa20711.jpg', NULL, NULL),
(620, 266, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520637IFCCa20711.jpg', NULL, NULL),
(621, 267, 'ACTUAL', 410, 410, 'images/media/2020/01/Y07XO20611.jpg', NULL, NULL),
(622, 267, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520637Y07XO20611.jpg', NULL, NULL),
(623, 267, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520637Y07XO20611.jpg', NULL, NULL),
(624, 268, 'ACTUAL', 410, 410, 'images/media/2020/01/CtyP720511.jpg', NULL, NULL),
(625, 268, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520637CtyP720511.jpg', NULL, NULL),
(626, 268, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520637CtyP720511.jpg', NULL, NULL),
(627, 269, 'ACTUAL', 410, 410, 'images/media/2020/01/5b1wa20311.jpg', NULL, NULL),
(628, 269, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail15795206375b1wa20311.jpg', NULL, NULL),
(629, 269, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15795206375b1wa20311.jpg', NULL, NULL),
(630, 270, 'ACTUAL', 410, 410, 'images/media/2020/01/G1Ff920911.jpg', NULL, NULL),
(631, 270, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520638G1Ff920911.jpg', NULL, NULL),
(632, 270, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520638G1Ff920911.jpg', NULL, NULL),
(633, 271, 'ACTUAL', 410, 410, 'images/media/2020/01/n2kbw20611.jpg', NULL, NULL),
(634, 271, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520733n2kbw20611.jpg', NULL, NULL),
(635, 271, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520733n2kbw20611.jpg', NULL, NULL),
(636, 272, 'ACTUAL', 410, 410, 'images/media/2020/01/BRUe120811.jpg', NULL, NULL),
(637, 272, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520733BRUe120811.jpg', NULL, NULL),
(638, 272, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520733BRUe120811.jpg', NULL, NULL),
(639, 273, 'ACTUAL', 410, 410, 'images/media/2020/01/wCceH20811.jpg', NULL, NULL),
(640, 273, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520734wCceH20811.jpg', NULL, NULL),
(641, 273, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520734wCceH20811.jpg', NULL, NULL),
(642, 274, 'ACTUAL', 410, 410, 'images/media/2020/01/umOnf20811.jpg', NULL, NULL),
(643, 274, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520734umOnf20811.jpg', NULL, NULL),
(644, 274, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520734umOnf20811.jpg', NULL, NULL),
(645, 275, 'ACTUAL', 410, 410, 'images/media/2020/01/KiQGR20611.jpg', NULL, NULL),
(646, 275, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520734KiQGR20611.jpg', NULL, NULL),
(647, 275, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520734KiQGR20611.jpg', NULL, NULL),
(648, 276, 'ACTUAL', 410, 410, 'images/media/2020/01/lzeSK20311.jpg', NULL, NULL),
(649, 276, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520734lzeSK20311.jpg', NULL, NULL),
(650, 276, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520734lzeSK20311.jpg', NULL, NULL),
(651, 277, 'ACTUAL', 410, 410, 'images/media/2020/01/cNYCI20411.jpg', NULL, NULL),
(652, 277, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520735cNYCI20411.jpg', NULL, NULL),
(653, 277, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520735cNYCI20411.jpg', NULL, NULL),
(654, 278, 'ACTUAL', 410, 410, 'images/media/2020/01/XLUtB20411.jpg', NULL, NULL),
(655, 278, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520735XLUtB20411.jpg', NULL, NULL),
(656, 278, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520735XLUtB20411.jpg', NULL, NULL),
(657, 279, 'ACTUAL', 410, 410, 'images/media/2020/01/rwZde20111.jpg', NULL, NULL),
(658, 279, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520735rwZde20111.jpg', NULL, NULL),
(659, 279, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520735rwZde20111.jpg', NULL, NULL),
(660, 280, 'ACTUAL', 410, 410, 'images/media/2020/01/EHKbT20711.jpg', NULL, NULL),
(661, 280, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520735EHKbT20711.jpg', NULL, NULL),
(662, 280, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520735EHKbT20711.jpg', NULL, NULL);
INSERT INTO `image_categories` (`id`, `image_id`, `image_type`, `height`, `width`, `path`, `created_at`, `updated_at`) VALUES
(663, 281, 'ACTUAL', 410, 410, 'images/media/2020/01/unjk920511.jpg', NULL, NULL),
(664, 281, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520736unjk920511.jpg', NULL, NULL),
(665, 281, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520736unjk920511.jpg', NULL, NULL),
(666, 282, 'ACTUAL', 410, 410, 'images/media/2020/01/Meave20411.jpg', NULL, NULL),
(667, 282, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520736Meave20411.jpg', NULL, NULL),
(668, 282, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520736Meave20411.jpg', NULL, NULL),
(669, 283, 'ACTUAL', 410, 410, 'images/media/2020/01/jR9XI20711.jpg', NULL, NULL),
(670, 283, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520736jR9XI20711.jpg', NULL, NULL),
(671, 283, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520736jR9XI20711.jpg', NULL, NULL),
(672, 284, 'ACTUAL', 410, 410, 'images/media/2020/01/dfwgE20611.jpg', NULL, NULL),
(673, 284, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520738dfwgE20611.jpg', NULL, NULL),
(674, 285, 'ACTUAL', 410, 410, 'images/media/2020/01/AXgJa20411.jpg', NULL, NULL),
(675, 285, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520739AXgJa20411.jpg', NULL, NULL),
(676, 285, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520739AXgJa20411.jpg', NULL, NULL),
(677, 286, 'ACTUAL', 410, 410, 'images/media/2020/01/jZnKR20611.jpg', NULL, NULL),
(678, 287, 'ACTUAL', 410, 410, 'images/media/2020/01/e7eGX20811.jpg', NULL, NULL),
(679, 286, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520803jZnKR20611.jpg', NULL, NULL),
(680, 287, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520803e7eGX20811.jpg', NULL, NULL),
(681, 286, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520803jZnKR20611.jpg', NULL, NULL),
(682, 287, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520803e7eGX20811.jpg', NULL, NULL),
(683, 288, 'ACTUAL', 410, 410, 'images/media/2020/01/RtFe720311.jpg', NULL, NULL),
(684, 288, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520804RtFe720311.jpg', NULL, NULL),
(685, 289, 'ACTUAL', 410, 410, 'images/media/2020/01/kyMe620811.jpg', NULL, NULL),
(686, 288, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520804RtFe720311.jpg', NULL, NULL),
(687, 289, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520804kyMe620811.jpg', NULL, NULL),
(688, 289, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520804kyMe620811.jpg', NULL, NULL),
(689, 290, 'ACTUAL', 410, 410, 'images/media/2020/01/3NSZp20611.jpg', NULL, NULL),
(690, 290, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail15795208043NSZp20611.jpg', NULL, NULL),
(691, 290, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15795208053NSZp20611.jpg', NULL, NULL),
(692, 291, 'ACTUAL', 410, 410, 'images/media/2020/01/2wOey20111.jpg', NULL, NULL),
(693, 291, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail15795208052wOey20111.jpg', NULL, NULL),
(694, 291, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15795208052wOey20111.jpg', NULL, NULL),
(695, 292, 'ACTUAL', 410, 410, 'images/media/2020/01/sBWwS20411.jpg', NULL, NULL),
(696, 292, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520805sBWwS20411.jpg', NULL, NULL),
(697, 292, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520805sBWwS20411.jpg', NULL, NULL),
(698, 293, 'ACTUAL', 410, 410, 'images/media/2020/01/MRqWx20611.jpg', NULL, NULL),
(699, 293, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520805MRqWx20611.jpg', NULL, NULL),
(700, 293, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520805MRqWx20611.jpg', NULL, NULL),
(701, 294, 'ACTUAL', 410, 410, 'images/media/2020/01/ZhIzs20511.jpg', NULL, NULL),
(702, 294, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520805ZhIzs20511.jpg', NULL, NULL),
(703, 294, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520805ZhIzs20511.jpg', NULL, NULL),
(704, 295, 'ACTUAL', 400, 400, 'images/media/2020/01/gd8SJ20411.jpg', NULL, NULL),
(705, 295, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520806gd8SJ20411.jpg', NULL, NULL),
(706, 295, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520806gd8SJ20411.jpg', NULL, NULL),
(707, 296, 'ACTUAL', 400, 420, 'images/media/2020/01/bpNsX20711.jpg', NULL, NULL),
(708, 296, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520806bpNsX20711.jpg', NULL, NULL),
(709, 296, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520806bpNsX20711.jpg', NULL, NULL),
(710, 297, 'ACTUAL', 400, 420, 'images/media/2020/01/QP5PB20911.jpg', NULL, NULL),
(711, 297, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520806QP5PB20911.jpg', NULL, NULL),
(712, 297, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520806QP5PB20911.jpg', NULL, NULL),
(713, 298, 'ACTUAL', 400, 420, 'images/media/2020/01/kncl020911.jpg', NULL, NULL),
(714, 298, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520806kncl020911.jpg', NULL, NULL),
(715, 298, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520806kncl020911.jpg', NULL, NULL),
(716, 299, 'ACTUAL', 400, 420, 'images/media/2020/01/0n93B20811.jpg', NULL, NULL),
(717, 299, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208060n93B20811.jpg', NULL, NULL),
(718, 299, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208060n93B20811.jpg', NULL, NULL),
(719, 300, 'ACTUAL', 400, 420, 'images/media/2020/01/LVdhX20711.jpg', NULL, NULL),
(720, 300, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520807LVdhX20711.jpg', NULL, NULL),
(721, 300, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520807LVdhX20711.jpg', NULL, NULL),
(722, 301, 'ACTUAL', 400, 420, 'images/media/2020/01/ubZkt20611.jpg', NULL, NULL),
(723, 301, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520807ubZkt20611.jpg', NULL, NULL),
(724, 301, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520807ubZkt20611.jpg', NULL, NULL),
(725, 302, 'ACTUAL', 400, 420, 'images/media/2020/01/qOkNM20311.jpg', NULL, NULL),
(726, 302, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520807qOkNM20311.jpg', NULL, NULL),
(727, 302, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520807qOkNM20311.jpg', NULL, NULL),
(728, 303, 'ACTUAL', 400, 420, 'images/media/2020/01/teybQ20411.jpg', NULL, NULL),
(729, 303, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520807teybQ20411.jpg', NULL, NULL),
(730, 303, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520807teybQ20411.jpg', NULL, NULL),
(731, 304, 'ACTUAL', 400, 420, 'images/media/2020/01/SGSpo20911.jpg', NULL, NULL),
(732, 304, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520808SGSpo20911.jpg', NULL, NULL),
(733, 304, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520808SGSpo20911.jpg', NULL, NULL),
(734, 305, 'ACTUAL', 400, 420, 'images/media/2020/01/6EWI320511.jpg', NULL, NULL),
(735, 305, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208086EWI320511.jpg', NULL, NULL),
(736, 305, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208086EWI320511.jpg', NULL, NULL),
(737, 306, 'ACTUAL', 400, 420, 'images/media/2020/01/6RjRP20811.jpg', NULL, NULL),
(738, 306, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208416RjRP20811.jpg', NULL, NULL),
(739, 306, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208416RjRP20811.jpg', NULL, NULL),
(740, 307, 'ACTUAL', 400, 420, 'images/media/2020/01/QA2c820511.jpg', NULL, NULL),
(741, 307, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520841QA2c820511.jpg', NULL, NULL),
(742, 307, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520841QA2c820511.jpg', NULL, NULL),
(743, 308, 'ACTUAL', 400, 420, 'images/media/2020/01/qiJ8A20811.jpg', NULL, NULL),
(744, 308, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520842qiJ8A20811.jpg', NULL, NULL),
(745, 308, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520842qiJ8A20811.jpg', NULL, NULL),
(746, 309, 'ACTUAL', 400, 420, 'images/media/2020/01/vy9sm20911.jpg', NULL, NULL),
(747, 309, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520842vy9sm20911.jpg', NULL, NULL),
(748, 309, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520842vy9sm20911.jpg', NULL, NULL),
(749, 310, 'ACTUAL', 400, 420, 'images/media/2020/01/YpmDm20311.jpg', NULL, NULL),
(750, 310, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520842YpmDm20311.jpg', NULL, NULL),
(751, 310, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520842YpmDm20311.jpg', NULL, NULL),
(752, 311, 'ACTUAL', 400, 420, 'images/media/2020/01/j6D1x20411.jpg', NULL, NULL),
(753, 311, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520842j6D1x20411.jpg', NULL, NULL),
(754, 311, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520842j6D1x20411.jpg', NULL, NULL),
(755, 312, 'ACTUAL', 400, 420, 'images/media/2020/01/taWM120711.jpg', NULL, NULL),
(756, 312, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520843taWM120711.jpg', NULL, NULL),
(757, 312, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520843taWM120711.jpg', NULL, NULL),
(758, 313, 'ACTUAL', 400, 420, 'images/media/2020/01/o60O420511.jpg', NULL, NULL),
(759, 313, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520843o60O420511.jpg', NULL, NULL),
(760, 313, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520843o60O420511.jpg', NULL, NULL),
(761, 314, 'ACTUAL', 400, 420, 'images/media/2020/01/3wbjB20811.jpg', NULL, NULL),
(762, 314, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208433wbjB20811.jpg', NULL, NULL),
(763, 314, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208433wbjB20811.jpg', NULL, NULL),
(764, 315, 'ACTUAL', 400, 420, 'images/media/2020/01/CKVBQ20811.jpg', NULL, NULL),
(765, 315, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520843CKVBQ20811.jpg', NULL, NULL),
(766, 315, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520843CKVBQ20811.jpg', NULL, NULL),
(767, 316, 'ACTUAL', 400, 420, 'images/media/2020/01/lKf3D20111.jpg', NULL, NULL),
(768, 316, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520844lKf3D20111.jpg', NULL, NULL),
(769, 316, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520844lKf3D20111.jpg', NULL, NULL),
(770, 317, 'ACTUAL', 400, 420, 'images/media/2020/01/Ru8ly20411.jpg', NULL, NULL),
(771, 317, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520844Ru8ly20411.jpg', NULL, NULL),
(772, 317, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520844Ru8ly20411.jpg', NULL, NULL),
(773, 318, 'ACTUAL', 400, 420, 'images/media/2020/01/3jsTh20311.jpg', NULL, NULL),
(774, 318, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208443jsTh20311.jpg', NULL, NULL),
(775, 318, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208443jsTh20311.jpg', NULL, NULL),
(776, 319, 'ACTUAL', 400, 420, 'images/media/2020/01/lVjdY20611.jpg', NULL, NULL),
(777, 319, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520844lVjdY20611.jpg', NULL, NULL),
(778, 319, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520844lVjdY20611.jpg', NULL, NULL),
(779, 320, 'ACTUAL', 400, 420, 'images/media/2020/01/tq6mc20311.jpg', NULL, NULL),
(780, 320, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845tq6mc20311.jpg', NULL, NULL),
(781, 320, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845tq6mc20311.jpg', NULL, NULL),
(782, 321, 'ACTUAL', 400, 420, 'images/media/2020/01/ESrmw20211.jpg', NULL, NULL),
(783, 321, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845ESrmw20211.jpg', NULL, NULL),
(784, 321, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845ESrmw20211.jpg', NULL, NULL),
(785, 322, 'ACTUAL', 400, 420, 'images/media/2020/01/WTbMr20511.jpg', NULL, NULL),
(786, 322, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845WTbMr20511.jpg', NULL, NULL),
(787, 322, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845WTbMr20511.jpg', NULL, NULL),
(788, 323, 'ACTUAL', 400, 420, 'images/media/2020/01/MFmmv20911.jpg', NULL, NULL),
(789, 323, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845MFmmv20911.jpg', NULL, NULL),
(790, 323, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845MFmmv20911.jpg', NULL, NULL),
(791, 324, 'ACTUAL', 400, 420, 'images/media/2020/01/cjDki20811.jpg', NULL, NULL),
(792, 324, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845cjDki20811.jpg', NULL, NULL),
(793, 324, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845cjDki20811.jpg', NULL, NULL),
(794, 325, 'ACTUAL', 400, 420, 'images/media/2020/01/JljOd20311.jpg', NULL, NULL),
(795, 325, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520846JljOd20311.jpg', NULL, NULL),
(796, 325, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520846JljOd20311.jpg', NULL, NULL),
(797, 326, 'ACTUAL', 400, 420, 'images/media/2020/01/M9NvU20211.jpg', NULL, NULL),
(798, 327, 'ACTUAL', 400, 420, 'images/media/2020/01/qtWeX20911.jpg', NULL, NULL),
(799, 327, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520905qtWeX20911.jpg', NULL, NULL),
(800, 326, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520905M9NvU20211.jpg', NULL, NULL),
(801, 326, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520905M9NvU20211.jpg', NULL, NULL),
(802, 327, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520905qtWeX20911.jpg', NULL, NULL),
(803, 328, 'ACTUAL', 400, 420, 'images/media/2020/01/UKUsi20711.jpg', NULL, NULL),
(804, 328, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520906UKUsi20711.jpg', NULL, NULL),
(805, 328, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520906UKUsi20711.jpg', NULL, NULL),
(806, 329, 'ACTUAL', 400, 420, 'images/media/2020/01/rPztG20511.jpg', NULL, NULL),
(807, 329, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520906rPztG20511.jpg', NULL, NULL),
(808, 329, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520906rPztG20511.jpg', NULL, NULL),
(809, 330, 'ACTUAL', 400, 420, 'images/media/2020/01/D1tjw20111.jpg', NULL, NULL),
(810, 330, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520906D1tjw20111.jpg', NULL, NULL),
(811, 330, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520906D1tjw20111.jpg', NULL, NULL),
(812, 331, 'ACTUAL', 400, 420, 'images/media/2020/01/quC0g20811.jpg', NULL, NULL),
(813, 331, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520907quC0g20811.jpg', NULL, NULL),
(814, 331, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520907quC0g20811.jpg', NULL, NULL),
(815, 332, 'ACTUAL', 400, 420, 'images/media/2020/01/6EuCr20211.jpg', NULL, NULL),
(816, 332, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795209076EuCr20211.jpg', NULL, NULL),
(817, 332, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795209076EuCr20211.jpg', NULL, NULL),
(818, 333, 'ACTUAL', 400, 420, 'images/media/2020/01/QMqBo20811.jpg', NULL, NULL),
(819, 333, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908QMqBo20811.jpg', NULL, NULL),
(820, 333, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908QMqBo20811.jpg', NULL, NULL),
(821, 334, 'ACTUAL', 400, 420, 'images/media/2020/01/q0qTP20911.jpg', NULL, NULL),
(822, 334, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908q0qTP20911.jpg', NULL, NULL),
(823, 334, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908q0qTP20911.jpg', NULL, NULL),
(824, 335, 'ACTUAL', 400, 420, 'images/media/2020/01/utbPx20211.jpg', NULL, NULL),
(825, 335, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908utbPx20211.jpg', NULL, NULL),
(826, 335, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908utbPx20211.jpg', NULL, NULL),
(827, 336, 'ACTUAL', 400, 420, 'images/media/2020/01/sHPEs20611.jpg', NULL, NULL),
(828, 336, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908sHPEs20611.jpg', NULL, NULL),
(829, 336, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908sHPEs20611.jpg', NULL, NULL),
(830, 337, 'ACTUAL', 400, 420, 'images/media/2020/01/zEW1K20111.jpg', NULL, NULL),
(831, 337, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908zEW1K20111.jpg', NULL, NULL),
(832, 337, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908zEW1K20111.jpg', NULL, NULL),
(833, 338, 'ACTUAL', 400, 420, 'images/media/2020/01/zB9cb20911.jpg', NULL, NULL),
(834, 338, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520909zB9cb20911.jpg', NULL, NULL),
(835, 338, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520909zB9cb20911.jpg', NULL, NULL),
(836, 339, 'ACTUAL', 400, 420, 'images/media/2020/01/Nf6nC20711.jpg', NULL, NULL),
(837, 339, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520909Nf6nC20711.jpg', NULL, NULL),
(838, 339, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520909Nf6nC20711.jpg', NULL, NULL),
(839, 340, 'ACTUAL', 400, 420, 'images/media/2020/01/SQAlW20811.jpg', NULL, NULL),
(840, 340, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520909SQAlW20811.jpg', NULL, NULL),
(841, 340, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520909SQAlW20811.jpg', NULL, NULL),
(842, 341, 'ACTUAL', 400, 420, 'images/media/2020/01/prlrw20311.jpg', NULL, NULL),
(843, 341, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520939prlrw20311.jpg', NULL, NULL),
(844, 341, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520939prlrw20311.jpg', NULL, NULL),
(845, 342, 'ACTUAL', 400, 420, 'images/media/2020/01/Ctuep20711.jpg', NULL, NULL),
(846, 342, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520940Ctuep20711.jpg', NULL, NULL),
(847, 342, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520940Ctuep20711.jpg', NULL, NULL),
(848, 343, 'ACTUAL', 400, 420, 'images/media/2020/01/9mbpk20211.jpg', NULL, NULL),
(849, 343, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795209409mbpk20211.jpg', NULL, NULL),
(850, 343, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795209409mbpk20211.jpg', NULL, NULL),
(851, 344, 'ACTUAL', 400, 420, 'images/media/2020/01/2LI4N20311.jpg', NULL, NULL),
(852, 344, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795209402LI4N20311.jpg', NULL, NULL),
(853, 344, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795209402LI4N20311.jpg', NULL, NULL),
(854, 345, 'ACTUAL', 400, 420, 'images/media/2020/01/PokkA20611.jpg', NULL, NULL),
(855, 345, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520940PokkA20611.jpg', NULL, NULL),
(856, 345, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520940PokkA20611.jpg', NULL, NULL),
(857, 346, 'ACTUAL', 400, 420, 'images/media/2020/01/FZZ2E20611.jpg', NULL, NULL),
(858, 346, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520941FZZ2E20611.jpg', NULL, NULL),
(859, 346, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520941FZZ2E20611.jpg', NULL, NULL),
(860, 347, 'ACTUAL', 400, 420, 'images/media/2020/01/bkK9b20311.jpg', NULL, NULL),
(861, 347, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520941bkK9b20311.jpg', NULL, NULL),
(862, 347, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520941bkK9b20311.jpg', NULL, NULL),
(863, 348, 'ACTUAL', 400, 420, 'images/media/2020/01/4kkxU20711.jpg', NULL, NULL),
(864, 348, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795209414kkxU20711.jpg', NULL, NULL),
(865, 348, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795209414kkxU20711.jpg', NULL, NULL),
(866, 349, 'ACTUAL', 400, 420, 'images/media/2020/01/Lm9zc20511.jpg', NULL, NULL),
(867, 349, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520941Lm9zc20511.jpg', NULL, NULL),
(868, 349, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520941Lm9zc20511.jpg', NULL, NULL),
(869, 350, 'ACTUAL', 400, 420, 'images/media/2020/01/xP2ws20811.jpg', NULL, NULL),
(870, 350, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520942xP2ws20811.jpg', NULL, NULL),
(871, 350, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520942xP2ws20811.jpg', NULL, NULL),
(872, 351, 'ACTUAL', 400, 420, 'images/media/2020/01/qZS9u20911.jpg', NULL, NULL),
(873, 351, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520942qZS9u20911.jpg', NULL, NULL),
(874, 351, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520942qZS9u20911.jpg', NULL, NULL),
(875, 352, 'ACTUAL', 400, 420, 'images/media/2020/01/60EtT20111.jpg', NULL, NULL),
(876, 352, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail157952094260EtT20111.jpg', NULL, NULL),
(877, 352, 'MEDIUM', 381, 400, 'images/media/2020/01/medium157952094260EtT20111.jpg', NULL, NULL),
(878, 353, 'ACTUAL', 400, 420, 'images/media/2020/01/XdN8d20611.jpg', NULL, NULL),
(879, 353, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520942XdN8d20611.jpg', NULL, NULL),
(880, 353, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520942XdN8d20611.jpg', NULL, NULL),
(881, 354, 'ACTUAL', 400, 420, 'images/media/2020/01/hRFu020111.jpg', NULL, NULL),
(882, 354, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520943hRFu020111.jpg', NULL, NULL),
(883, 354, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520943hRFu020111.jpg', NULL, NULL),
(884, 355, 'ACTUAL', 400, 420, 'images/media/2020/01/IJDwb20211.jpg', NULL, NULL),
(885, 355, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520943IJDwb20211.jpg', NULL, NULL),
(886, 355, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520943IJDwb20211.jpg', NULL, NULL),
(887, 356, 'ACTUAL', 400, 420, 'images/media/2020/01/LXgGt20811.jpg', NULL, NULL),
(888, 356, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520943LXgGt20811.jpg', NULL, NULL),
(889, 356, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520943LXgGt20811.jpg', NULL, NULL),
(890, 357, 'ACTUAL', 400, 420, 'images/media/2020/01/YUJlv20611.jpg', NULL, NULL),
(891, 357, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520943YUJlv20611.jpg', NULL, NULL),
(892, 357, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520943YUJlv20611.jpg', NULL, NULL),
(893, 358, 'ACTUAL', 400, 420, 'images/media/2020/01/hx0Yl20511.jpg', NULL, NULL),
(894, 358, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520944hx0Yl20511.jpg', NULL, NULL),
(895, 358, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520944hx0Yl20511.jpg', NULL, NULL),
(896, 359, 'ACTUAL', 400, 420, 'images/media/2020/01/CPJa820611.jpg', NULL, NULL),
(897, 359, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520944CPJa820611.jpg', NULL, NULL),
(898, 359, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520944CPJa820611.jpg', NULL, NULL),
(899, 360, 'ACTUAL', 400, 420, 'images/media/2020/01/JOdmy20311.jpg', NULL, NULL),
(900, 360, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520944JOdmy20311.jpg', NULL, NULL),
(901, 360, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520944JOdmy20311.jpg', NULL, NULL),
(902, 361, 'ACTUAL', 400, 420, 'images/media/2020/01/8Wrfm20411.jpg', NULL, NULL),
(903, 362, 'ACTUAL', 400, 420, 'images/media/2020/01/sRZii20711.jpg', NULL, NULL),
(904, 362, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521003sRZii20711.jpg', NULL, NULL),
(905, 361, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210038Wrfm20411.jpg', NULL, NULL),
(906, 361, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210038Wrfm20411.jpg', NULL, NULL),
(907, 362, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521003sRZii20711.jpg', NULL, NULL),
(908, 363, 'ACTUAL', 400, 420, 'images/media/2020/01/yXF5420411.jpg', NULL, NULL),
(909, 364, 'ACTUAL', 400, 420, 'images/media/2020/01/FXdFS20911.jpg', NULL, NULL),
(910, 363, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521004yXF5420411.jpg', NULL, NULL),
(911, 363, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521004yXF5420411.jpg', NULL, NULL),
(912, 364, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521004FXdFS20911.jpg', NULL, NULL),
(913, 364, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521004FXdFS20911.jpg', NULL, NULL),
(914, 365, 'ACTUAL', 400, 420, 'images/media/2020/01/okuKp20211.jpg', NULL, NULL),
(915, 365, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521004okuKp20211.jpg', NULL, NULL),
(916, 366, 'ACTUAL', 400, 420, 'images/media/2020/01/8Z1F120111.jpg', NULL, NULL),
(917, 365, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521004okuKp20211.jpg', NULL, NULL),
(918, 366, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210048Z1F120111.jpg', NULL, NULL),
(919, 366, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210048Z1F120111.jpg', NULL, NULL),
(920, 367, 'ACTUAL', 400, 420, 'images/media/2020/01/kFom920111.jpg', NULL, NULL),
(921, 367, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521005kFom920111.jpg', NULL, NULL),
(922, 367, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521005kFom920111.jpg', NULL, NULL),
(923, 368, 'ACTUAL', 400, 420, 'images/media/2020/01/rLFBI20111.jpg', NULL, NULL),
(924, 368, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521005rLFBI20111.jpg', NULL, NULL),
(925, 368, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521005rLFBI20111.jpg', NULL, NULL),
(926, 369, 'ACTUAL', 400, 420, 'images/media/2020/01/i0x5Z20611.jpg', NULL, NULL),
(927, 369, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521005i0x5Z20611.jpg', NULL, NULL),
(928, 369, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521005i0x5Z20611.jpg', NULL, NULL),
(929, 370, 'ACTUAL', 400, 420, 'images/media/2020/01/F12N420911.jpg', NULL, NULL),
(930, 370, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521005F12N420911.jpg', NULL, NULL),
(931, 370, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521005F12N420911.jpg', NULL, NULL),
(932, 371, 'ACTUAL', 400, 420, 'images/media/2020/01/54bYi20511.jpg', NULL, NULL),
(933, 371, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail157952100654bYi20511.jpg', NULL, NULL),
(934, 371, 'MEDIUM', 381, 400, 'images/media/2020/01/medium157952100654bYi20511.jpg', NULL, NULL),
(935, 372, 'ACTUAL', 400, 420, 'images/media/2020/01/oQKuF20611.jpg', NULL, NULL),
(936, 372, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521006oQKuF20611.jpg', NULL, NULL),
(937, 372, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521006oQKuF20611.jpg', NULL, NULL),
(938, 373, 'ACTUAL', 400, 420, 'images/media/2020/01/96jAm20611.jpg', NULL, NULL),
(939, 373, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail157952100696jAm20611.jpg', NULL, NULL),
(940, 373, 'MEDIUM', 381, 400, 'images/media/2020/01/medium157952100696jAm20611.jpg', NULL, NULL),
(941, 374, 'ACTUAL', 400, 420, 'images/media/2020/01/rXg5w20611.jpg', NULL, NULL),
(942, 374, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521006rXg5w20611.jpg', NULL, NULL),
(943, 374, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521006rXg5w20611.jpg', NULL, NULL),
(944, 375, 'ACTUAL', 400, 420, 'images/media/2020/01/RtNQz20711.jpg', NULL, NULL),
(945, 375, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521007RtNQz20711.jpg', NULL, NULL),
(946, 375, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521007RtNQz20711.jpg', NULL, NULL),
(947, 376, 'ACTUAL', 400, 420, 'images/media/2020/01/oSSmB20911.jpg', NULL, NULL),
(948, 376, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521033oSSmB20911.jpg', NULL, NULL),
(949, 376, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521033oSSmB20911.jpg', NULL, NULL),
(950, 377, 'ACTUAL', 400, 420, 'images/media/2020/01/LzfR020811.jpg', NULL, NULL),
(951, 377, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521033LzfR020811.jpg', NULL, NULL),
(952, 377, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521033LzfR020811.jpg', NULL, NULL),
(953, 378, 'ACTUAL', 400, 420, 'images/media/2020/01/qgXWK20211.jpg', NULL, NULL),
(954, 378, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521033qgXWK20211.jpg', NULL, NULL),
(955, 378, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521033qgXWK20211.jpg', NULL, NULL),
(956, 379, 'ACTUAL', 400, 420, 'images/media/2020/01/L0mw220311.jpg', NULL, NULL),
(957, 379, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521033L0mw220311.jpg', NULL, NULL),
(958, 379, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521033L0mw220311.jpg', NULL, NULL),
(959, 380, 'ACTUAL', 400, 420, 'images/media/2020/01/n7EBj20511.jpg', NULL, NULL),
(960, 380, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521034n7EBj20511.jpg', NULL, NULL),
(961, 380, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521034n7EBj20511.jpg', NULL, NULL),
(962, 381, 'ACTUAL', 400, 420, 'images/media/2020/01/0sWXH20511.jpg', NULL, NULL),
(963, 381, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210340sWXH20511.jpg', NULL, NULL),
(964, 381, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210340sWXH20511.jpg', NULL, NULL),
(965, 382, 'ACTUAL', 400, 420, 'images/media/2020/01/mwcqF20511.jpg', NULL, NULL),
(966, 382, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521034mwcqF20511.jpg', NULL, NULL),
(967, 382, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521034mwcqF20511.jpg', NULL, NULL),
(968, 383, 'ACTUAL', 400, 420, 'images/media/2020/01/qF2wS20511.jpg', NULL, NULL),
(969, 383, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521034qF2wS20511.jpg', NULL, NULL),
(970, 383, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521034qF2wS20511.jpg', NULL, NULL),
(971, 384, 'ACTUAL', 400, 420, 'images/media/2020/01/NUvsf20911.jpg', NULL, NULL),
(972, 384, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521035NUvsf20911.jpg', NULL, NULL),
(973, 384, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521035NUvsf20911.jpg', NULL, NULL),
(974, 385, 'ACTUAL', 400, 420, 'images/media/2020/01/Kdxxk20111.jpg', NULL, NULL),
(975, 385, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521035Kdxxk20111.jpg', NULL, NULL),
(976, 385, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521035Kdxxk20111.jpg', NULL, NULL),
(977, 386, 'ACTUAL', 400, 420, 'images/media/2020/01/GmGjM20811.jpg', NULL, NULL),
(978, 386, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521035GmGjM20811.jpg', NULL, NULL),
(979, 386, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521035GmGjM20811.jpg', NULL, NULL),
(980, 387, 'ACTUAL', 400, 420, 'images/media/2020/01/6XsiX20911.jpg', NULL, NULL),
(981, 387, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210356XsiX20911.jpg', NULL, NULL),
(982, 387, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210356XsiX20911.jpg', NULL, NULL),
(983, 388, 'ACTUAL', 400, 420, 'images/media/2020/01/4l8MR20911.jpg', NULL, NULL),
(984, 388, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210364l8MR20911.jpg', NULL, NULL),
(985, 388, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210364l8MR20911.jpg', NULL, NULL),
(986, 389, 'ACTUAL', 400, 420, 'images/media/2020/01/mNPEv20611.jpg', NULL, NULL),
(987, 389, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521036mNPEv20611.jpg', NULL, NULL),
(988, 389, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521036mNPEv20611.jpg', NULL, NULL),
(989, 390, 'ACTUAL', 400, 420, 'images/media/2020/01/UDG5120311.jpg', NULL, NULL),
(990, 390, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521036UDG5120311.jpg', NULL, NULL),
(991, 390, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521036UDG5120311.jpg', NULL, NULL),
(992, 391, 'ACTUAL', 400, 420, 'images/media/2020/01/Fx3O820411.jpg', NULL, NULL),
(993, 391, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521067Fx3O820411.jpg', NULL, NULL),
(994, 391, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521067Fx3O820411.jpg', NULL, NULL),
(995, 392, 'ACTUAL', 400, 420, 'images/media/2020/01/S08vg20711.jpg', NULL, NULL),
(996, 392, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521068S08vg20711.jpg', NULL, NULL),
(997, 392, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521068S08vg20711.jpg', NULL, NULL),
(998, 393, 'ACTUAL', 400, 420, 'images/media/2020/01/F0q4020711.jpg', NULL, NULL),
(999, 394, 'ACTUAL', 400, 420, 'images/media/2020/01/SYgbu20611.jpg', NULL, NULL),
(1000, 394, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521069SYgbu20611.jpg', NULL, NULL),
(1001, 393, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521069F0q4020711.jpg', NULL, NULL),
(1002, 394, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521070SYgbu20611.jpg', NULL, NULL),
(1003, 393, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521070F0q4020711.jpg', NULL, NULL),
(1004, 395, 'ACTUAL', 400, 420, 'images/media/2020/01/9JGe820111.jpg', NULL, NULL),
(1005, 395, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210709JGe820111.jpg', NULL, NULL),
(1006, 396, 'ACTUAL', 400, 420, 'images/media/2020/01/eAoSB20111.jpg', NULL, NULL),
(1007, 396, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521071eAoSB20111.jpg', NULL, NULL),
(1008, 396, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521071eAoSB20111.jpg', NULL, NULL),
(1009, 397, 'ACTUAL', 400, 420, 'images/media/2020/01/WUGBh20411.jpg', NULL, NULL),
(1010, 397, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521072WUGBh20411.jpg', NULL, NULL),
(1011, 397, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521072WUGBh20411.jpg', NULL, NULL),
(1012, 398, 'ACTUAL', 400, 420, 'images/media/2020/01/7bd6b20111.jpg', NULL, NULL),
(1013, 398, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210737bd6b20111.jpg', NULL, NULL),
(1014, 398, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210737bd6b20111.jpg', NULL, NULL),
(1015, 399, 'ACTUAL', 400, 420, 'images/media/2020/01/P4qUy20911.jpg', NULL, NULL),
(1016, 399, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521074P4qUy20911.jpg', NULL, NULL),
(1017, 399, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521074P4qUy20911.jpg', NULL, NULL),
(1018, 400, 'ACTUAL', 400, 420, 'images/media/2020/01/tktqM20811.jpg', NULL, NULL),
(1019, 400, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521074tktqM20811.jpg', NULL, NULL),
(1020, 400, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521075tktqM20811.jpg', NULL, NULL),
(1021, 401, 'ACTUAL', 400, 420, 'images/media/2020/01/5sTYz20701.jpg', NULL, NULL),
(1022, 401, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795268825sTYz20701.jpg', NULL, NULL),
(1023, 401, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795268825sTYz20701.jpg', NULL, NULL),
(1024, 402, 'ACTUAL', 400, 420, 'images/media/2020/01/CpCer26609.jpg', NULL, NULL),
(1025, 403, 'ACTUAL', 400, 420, 'images/media/2020/01/O96ZW26909.jpg', NULL, NULL),
(1026, 402, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029585CpCer26609.jpg', NULL, NULL),
(1027, 403, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029585O96ZW26909.jpg', NULL, NULL),
(1028, 402, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029585CpCer26609.jpg', NULL, NULL),
(1029, 403, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029585O96ZW26909.jpg', NULL, NULL),
(1030, 404, 'ACTUAL', 400, 420, 'images/media/2020/01/EcsW526309.jpg', NULL, NULL),
(1031, 404, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029586EcsW526309.jpg', NULL, NULL),
(1032, 404, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029587EcsW526309.jpg', NULL, NULL),
(1033, 405, 'ACTUAL', 400, 420, 'images/media/2020/01/ImqQj26909.jpg', NULL, NULL),
(1034, 405, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029587ImqQj26909.jpg', NULL, NULL),
(1035, 405, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029587ImqQj26909.jpg', NULL, NULL),
(1036, 406, 'ACTUAL', 400, 420, 'images/media/2020/01/vTnKV26109.jpg', NULL, NULL),
(1037, 406, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029588vTnKV26109.jpg', NULL, NULL),
(1038, 406, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029588vTnKV26109.jpg', NULL, NULL),
(1039, 407, 'ACTUAL', 400, 420, 'images/media/2020/01/RdITd26809.jpg', NULL, NULL),
(1040, 407, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029588RdITd26809.jpg', NULL, NULL),
(1041, 407, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029588RdITd26809.jpg', NULL, NULL),
(1042, 408, 'ACTUAL', 400, 420, 'images/media/2020/01/zxbVR26509.jpg', NULL, NULL),
(1043, 408, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029589zxbVR26509.jpg', NULL, NULL),
(1044, 408, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029589zxbVR26509.jpg', NULL, NULL),
(1045, 409, 'ACTUAL', 400, 420, 'images/media/2020/01/1X7A926709.jpg', NULL, NULL),
(1046, 409, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800295891X7A926709.jpg', NULL, NULL),
(1047, 409, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800295891X7A926709.jpg', NULL, NULL),
(1048, 410, 'ACTUAL', 400, 420, 'images/media/2020/01/yoGy126309.jpg', NULL, NULL),
(1049, 410, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029590yoGy126309.jpg', NULL, NULL),
(1050, 410, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029590yoGy126309.jpg', NULL, NULL),
(1051, 411, 'ACTUAL', 400, 420, 'images/media/2020/01/vWZZP26409.jpg', NULL, NULL),
(1052, 411, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029590vWZZP26409.jpg', NULL, NULL),
(1053, 411, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029590vWZZP26409.jpg', NULL, NULL),
(1054, 412, 'ACTUAL', 400, 420, 'images/media/2020/01/pskMF26909.jpg', NULL, NULL),
(1055, 413, 'ACTUAL', 400, 420, 'images/media/2020/01/ZWVkA26709.jpg', NULL, NULL),
(1056, 412, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029591pskMF26909.jpg', NULL, NULL),
(1057, 413, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029591ZWVkA26709.jpg', NULL, NULL),
(1058, 412, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029591pskMF26909.jpg', NULL, NULL),
(1059, 413, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029591ZWVkA26709.jpg', NULL, NULL),
(1060, 414, 'ACTUAL', 400, 420, 'images/media/2020/01/Gw2Ou26609.jpg', NULL, NULL),
(1061, 414, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029592Gw2Ou26609.jpg', NULL, NULL),
(1062, 414, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029592Gw2Ou26609.jpg', NULL, NULL),
(1063, 415, 'ACTUAL', 400, 420, 'images/media/2020/01/mvz2526609.jpg', NULL, NULL),
(1064, 415, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029593mvz2526609.jpg', NULL, NULL),
(1065, 415, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029593mvz2526609.jpg', NULL, NULL),
(1066, 416, 'ACTUAL', 400, 420, 'images/media/2020/01/FmLB226109.jpg', NULL, NULL),
(1067, 416, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029594FmLB226109.jpg', NULL, NULL),
(1068, 416, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029594FmLB226109.jpg', NULL, NULL),
(1069, 417, 'ACTUAL', 400, 420, 'images/media/2020/01/UbZgZ26609.jpg', NULL, NULL),
(1070, 417, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029594UbZgZ26609.jpg', NULL, NULL),
(1071, 417, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029594UbZgZ26609.jpg', NULL, NULL),
(1072, 418, 'ACTUAL', 400, 420, 'images/media/2020/01/5hvpD26409.jpg', NULL, NULL),
(1073, 418, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800295945hvpD26409.jpg', NULL, NULL),
(1074, 418, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800295945hvpD26409.jpg', NULL, NULL),
(1075, 419, 'ACTUAL', 400, 420, 'images/media/2020/01/ZSGkg26809.jpg', NULL, NULL),
(1076, 419, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029595ZSGkg26809.jpg', NULL, NULL),
(1077, 419, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029595ZSGkg26809.jpg', NULL, NULL),
(1078, 420, 'ACTUAL', 400, 420, 'images/media/2020/01/dXKcO26809.jpg', NULL, NULL),
(1079, 420, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029596dXKcO26809.jpg', NULL, NULL),
(1080, 421, 'ACTUAL', 400, 420, 'images/media/2020/01/sLH6l26809.jpg', NULL, NULL),
(1081, 420, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029596dXKcO26809.jpg', NULL, NULL),
(1082, 421, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029596sLH6l26809.jpg', NULL, NULL),
(1083, 421, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029596sLH6l26809.jpg', NULL, NULL),
(1084, 422, 'ACTUAL', 400, 420, 'images/media/2020/01/gmSGr26409.jpg', NULL, NULL),
(1085, 422, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029663gmSGr26409.jpg', NULL, NULL),
(1086, 422, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029663gmSGr26409.jpg', NULL, NULL),
(1087, 423, 'ACTUAL', 400, 420, 'images/media/2020/01/A04Hc26309.jpg', NULL, NULL),
(1088, 423, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029663A04Hc26309.jpg', NULL, NULL),
(1089, 423, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029663A04Hc26309.jpg', NULL, NULL),
(1090, 424, 'ACTUAL', 400, 420, 'images/media/2020/01/wotPR26609.jpg', NULL, NULL),
(1091, 424, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029664wotPR26609.jpg', NULL, NULL),
(1092, 424, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029664wotPR26609.jpg', NULL, NULL),
(1093, 425, 'ACTUAL', 400, 420, 'images/media/2020/01/omu6A26609.jpg', NULL, NULL),
(1094, 425, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029665omu6A26609.jpg', NULL, NULL),
(1095, 426, 'ACTUAL', 400, 420, 'images/media/2020/01/db1ft26309.jpg', NULL, NULL),
(1096, 425, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029665omu6A26609.jpg', NULL, NULL),
(1097, 426, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029665db1ft26309.jpg', NULL, NULL),
(1098, 426, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029665db1ft26309.jpg', NULL, NULL),
(1099, 427, 'ACTUAL', 400, 420, 'images/media/2020/01/s3NIE26709.jpg', NULL, NULL),
(1100, 427, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029665s3NIE26709.jpg', NULL, NULL),
(1101, 427, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029665s3NIE26709.jpg', NULL, NULL),
(1102, 428, 'ACTUAL', 400, 420, 'images/media/2020/01/FHpqo26209.jpg', NULL, NULL),
(1103, 428, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029665FHpqo26209.jpg', NULL, NULL),
(1104, 428, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029665FHpqo26209.jpg', NULL, NULL),
(1105, 429, 'ACTUAL', 400, 420, 'images/media/2020/01/piCSe26109.jpg', NULL, NULL),
(1106, 429, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029666piCSe26109.jpg', NULL, NULL),
(1107, 429, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029666piCSe26109.jpg', NULL, NULL),
(1108, 430, 'ACTUAL', 400, 420, 'images/media/2020/01/y8rED26109.jpg', NULL, NULL),
(1109, 430, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029666y8rED26109.jpg', NULL, NULL),
(1110, 430, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029666y8rED26109.jpg', NULL, NULL),
(1111, 431, 'ACTUAL', 400, 420, 'images/media/2020/01/wXE3x26709.jpg', NULL, NULL),
(1112, 431, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029667wXE3x26709.jpg', NULL, NULL),
(1113, 431, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029667wXE3x26709.jpg', NULL, NULL),
(1114, 432, 'ACTUAL', 400, 420, 'images/media/2020/01/x0Yow26509.jpg', NULL, NULL),
(1115, 432, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029667x0Yow26509.jpg', NULL, NULL),
(1116, 432, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029667x0Yow26509.jpg', NULL, NULL),
(1117, 433, 'ACTUAL', 400, 420, 'images/media/2020/01/182VR26509.jpg', NULL, NULL),
(1118, 433, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029667182VR26509.jpg', NULL, NULL),
(1119, 433, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029667182VR26509.jpg', NULL, NULL),
(1120, 434, 'ACTUAL', 400, 420, 'images/media/2020/01/uGATS26909.jpg', NULL, NULL),
(1121, 434, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029668uGATS26909.jpg', NULL, NULL),
(1122, 434, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029668uGATS26909.jpg', NULL, NULL),
(1123, 435, 'ACTUAL', 400, 420, 'images/media/2020/01/Wl7Dd26909.jpg', NULL, NULL),
(1124, 435, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029669Wl7Dd26909.jpg', NULL, NULL),
(1125, 435, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029669Wl7Dd26909.jpg', NULL, NULL),
(1126, 437, 'ACTUAL', 400, 420, 'images/media/2020/01/oGbeP26609.jpg', NULL, NULL),
(1127, 436, 'ACTUAL', 400, 420, 'images/media/2020/01/VW7yI26109.jpg', NULL, NULL),
(1128, 437, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029669oGbeP26609.jpg', NULL, NULL),
(1129, 436, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029669VW7yI26109.jpg', NULL, NULL),
(1130, 437, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029669oGbeP26609.jpg', NULL, NULL),
(1131, 436, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029669VW7yI26109.jpg', NULL, NULL),
(1132, 438, 'ACTUAL', 400, 420, 'images/media/2020/01/ubSqE26509.jpg', NULL, NULL),
(1133, 438, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029670ubSqE26509.jpg', NULL, NULL),
(1134, 438, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029670ubSqE26509.jpg', NULL, NULL),
(1135, 439, 'ACTUAL', 400, 420, 'images/media/2020/01/C8VUJ26309.jpg', NULL, NULL),
(1136, 439, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029672C8VUJ26309.jpg', NULL, NULL),
(1137, 439, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029672C8VUJ26309.jpg', NULL, NULL),
(1138, 440, 'ACTUAL', 400, 420, 'images/media/2020/01/CF57F26709.jpg', NULL, NULL),
(1139, 440, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029672CF57F26709.jpg', NULL, NULL),
(1140, 440, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029672CF57F26709.jpg', NULL, NULL),
(1141, 441, 'ACTUAL', 400, 420, 'images/media/2020/01/ROabh26409.jpg', NULL, NULL),
(1142, 441, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029673ROabh26409.jpg', NULL, NULL),
(1143, 441, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029673ROabh26409.jpg', NULL, NULL),
(1144, 442, 'ACTUAL', 400, 420, 'images/media/2020/01/BZhc326809.jpg', NULL, NULL),
(1145, 443, 'ACTUAL', 400, 420, 'images/media/2020/01/HcszO26209.jpg', NULL, NULL),
(1146, 442, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029712BZhc326809.jpg', NULL, NULL),
(1147, 443, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029712HcszO26209.jpg', NULL, NULL),
(1148, 442, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029712BZhc326809.jpg', NULL, NULL),
(1149, 443, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029712HcszO26209.jpg', NULL, NULL),
(1150, 444, 'ACTUAL', 400, 420, 'images/media/2020/01/SChpV26509.jpg', NULL, NULL),
(1151, 444, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029712SChpV26509.jpg', NULL, NULL),
(1152, 444, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029713SChpV26509.jpg', NULL, NULL),
(1153, 445, 'ACTUAL', 400, 420, 'images/media/2020/01/J16Ls26909.jpg', NULL, NULL),
(1154, 445, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029713J16Ls26909.jpg', NULL, NULL),
(1155, 445, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029713J16Ls26909.jpg', NULL, NULL),
(1156, 446, 'ACTUAL', 400, 420, 'images/media/2020/01/koRm126109.jpg', NULL, NULL),
(1157, 446, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029713koRm126109.jpg', NULL, NULL),
(1158, 446, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029713koRm126109.jpg', NULL, NULL),
(1159, 447, 'ACTUAL', 400, 420, 'images/media/2020/01/eRQsg26509.jpg', NULL, NULL),
(1160, 447, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029714eRQsg26509.jpg', NULL, NULL),
(1161, 447, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029714eRQsg26509.jpg', NULL, NULL),
(1162, 448, 'ACTUAL', 400, 420, 'images/media/2020/01/VnXhr26709.jpg', NULL, NULL),
(1163, 448, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029714VnXhr26709.jpg', NULL, NULL),
(1164, 448, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029714VnXhr26709.jpg', NULL, NULL),
(1165, 449, 'ACTUAL', 400, 420, 'images/media/2020/01/nwoHw26209.jpg', NULL, NULL),
(1166, 449, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029714nwoHw26209.jpg', NULL, NULL),
(1167, 449, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029714nwoHw26209.jpg', NULL, NULL),
(1168, 451, 'ACTUAL', 400, 420, 'images/media/2020/01/3brhg26409.jpg', NULL, NULL),
(1169, 450, 'ACTUAL', 400, 420, 'images/media/2020/01/eupPd26909.jpg', NULL, NULL),
(1170, 451, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297153brhg26409.jpg', NULL, NULL),
(1171, 450, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029715eupPd26909.jpg', NULL, NULL),
(1172, 451, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297153brhg26409.jpg', NULL, NULL),
(1173, 450, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029715eupPd26909.jpg', NULL, NULL),
(1174, 452, 'ACTUAL', 400, 420, 'images/media/2020/01/3zPBP26809.jpg', NULL, NULL),
(1175, 452, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297153zPBP26809.jpg', NULL, NULL),
(1176, 452, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297153zPBP26809.jpg', NULL, NULL),
(1177, 453, 'ACTUAL', 400, 420, 'images/media/2020/01/wLLl526909.jpg', NULL, NULL),
(1178, 453, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029715wLLl526909.jpg', NULL, NULL),
(1179, 454, 'ACTUAL', 400, 420, 'images/media/2020/01/v9JGu26409.jpg', NULL, NULL),
(1180, 454, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029716v9JGu26409.jpg', NULL, NULL),
(1181, 454, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029716v9JGu26409.jpg', NULL, NULL),
(1182, 455, 'ACTUAL', 400, 420, 'images/media/2020/01/Lw7a926409.jpg', NULL, NULL),
(1183, 455, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029717Lw7a926409.jpg', NULL, NULL),
(1184, 456, 'ACTUAL', 400, 420, 'images/media/2020/01/0qqEL26809.jpg', NULL, NULL),
(1185, 455, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029717Lw7a926409.jpg', NULL, NULL),
(1186, 456, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297170qqEL26809.jpg', NULL, NULL),
(1187, 456, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297170qqEL26809.jpg', NULL, NULL),
(1188, 457, 'ACTUAL', 400, 420, 'images/media/2020/01/AQ52T26409.jpg', NULL, NULL),
(1189, 457, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029717AQ52T26409.jpg', NULL, NULL),
(1190, 457, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029717AQ52T26409.jpg', NULL, NULL),
(1191, 458, 'ACTUAL', 400, 420, 'images/media/2020/01/LbihH26309.jpg', NULL, NULL),
(1192, 458, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029717LbihH26309.jpg', NULL, NULL);
INSERT INTO `image_categories` (`id`, `image_id`, `image_type`, `height`, `width`, `path`, `created_at`, `updated_at`) VALUES
(1193, 458, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029717LbihH26309.jpg', NULL, NULL),
(1194, 459, 'ACTUAL', 400, 420, 'images/media/2020/01/tWoFT26409.jpg', NULL, NULL),
(1195, 459, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029718tWoFT26409.jpg', NULL, NULL),
(1196, 459, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029718tWoFT26409.jpg', NULL, NULL),
(1197, 460, 'ACTUAL', 400, 420, 'images/media/2020/01/raeJk26509.jpg', NULL, NULL),
(1198, 460, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029718raeJk26509.jpg', NULL, NULL),
(1199, 460, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029718raeJk26509.jpg', NULL, NULL),
(1200, 461, 'ACTUAL', 400, 420, 'images/media/2020/01/vQvUc26509.jpg', NULL, NULL),
(1201, 461, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029719vQvUc26509.jpg', NULL, NULL),
(1202, 461, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029719vQvUc26509.jpg', NULL, NULL),
(1203, 462, 'ACTUAL', 400, 420, 'images/media/2020/01/9guxO26309.jpg', NULL, NULL),
(1204, 462, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297519guxO26309.jpg', NULL, NULL),
(1205, 462, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297519guxO26309.jpg', NULL, NULL),
(1206, 463, 'ACTUAL', 400, 420, 'images/media/2020/01/h0sx826709.jpg', NULL, NULL),
(1207, 463, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029751h0sx826709.jpg', NULL, NULL),
(1208, 463, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029751h0sx826709.jpg', NULL, NULL),
(1209, 464, 'ACTUAL', 400, 420, 'images/media/2020/01/MMzh126609.jpg', NULL, NULL),
(1210, 464, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029752MMzh126609.jpg', NULL, NULL),
(1211, 464, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029752MMzh126609.jpg', NULL, NULL),
(1212, 465, 'ACTUAL', 400, 420, 'images/media/2020/01/7rLPU26809.jpg', NULL, NULL),
(1213, 465, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297527rLPU26809.jpg', NULL, NULL),
(1214, 465, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297527rLPU26809.jpg', NULL, NULL),
(1215, 466, 'ACTUAL', 400, 420, 'images/media/2020/01/4nNB326909.jpg', NULL, NULL),
(1216, 466, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297524nNB326909.jpg', NULL, NULL),
(1217, 466, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297524nNB326909.jpg', NULL, NULL),
(1218, 467, 'ACTUAL', 400, 420, 'images/media/2020/01/4NIT526609.jpg', NULL, NULL),
(1219, 467, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297524NIT526609.jpg', NULL, NULL),
(1220, 467, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297534NIT526609.jpg', NULL, NULL),
(1221, 468, 'ACTUAL', 400, 420, 'images/media/2020/01/1ZLgP26509.jpg', NULL, NULL),
(1222, 468, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297531ZLgP26509.jpg', NULL, NULL),
(1223, 468, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297531ZLgP26509.jpg', NULL, NULL),
(1224, 469, 'ACTUAL', 400, 420, 'images/media/2020/01/oOCz426309.jpg', NULL, NULL),
(1225, 470, 'ACTUAL', 400, 420, 'images/media/2020/01/poNZD26609.jpg', NULL, NULL),
(1226, 469, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029753oOCz426309.jpg', NULL, NULL),
(1227, 470, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029753poNZD26609.jpg', NULL, NULL),
(1228, 469, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029753oOCz426309.jpg', NULL, NULL),
(1229, 470, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029753poNZD26609.jpg', NULL, NULL),
(1230, 471, 'ACTUAL', 400, 420, 'images/media/2020/01/9FVXr26809.jpg', NULL, NULL),
(1231, 471, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297549FVXr26809.jpg', NULL, NULL),
(1232, 472, 'ACTUAL', 400, 420, 'images/media/2020/01/Vk3lk26109.jpg', NULL, NULL),
(1233, 471, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297549FVXr26809.jpg', NULL, NULL),
(1234, 472, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029754Vk3lk26109.jpg', NULL, NULL),
(1235, 472, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029754Vk3lk26109.jpg', NULL, NULL),
(1236, 473, 'ACTUAL', 400, 420, 'images/media/2020/01/zAUqs26609.jpg', NULL, NULL),
(1237, 473, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029754zAUqs26609.jpg', NULL, NULL),
(1238, 473, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029754zAUqs26609.jpg', NULL, NULL),
(1239, 474, 'ACTUAL', 400, 420, 'images/media/2020/01/oGWVN26909.jpg', NULL, NULL),
(1240, 474, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029755oGWVN26909.jpg', NULL, NULL),
(1241, 474, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029755oGWVN26909.jpg', NULL, NULL),
(1242, 475, 'ACTUAL', 400, 420, 'images/media/2020/01/c5iOb26209.jpg', NULL, NULL),
(1243, 475, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029755c5iOb26209.jpg', NULL, NULL),
(1244, 475, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029755c5iOb26209.jpg', NULL, NULL),
(1245, 476, 'ACTUAL', 400, 420, 'images/media/2020/01/UD1Xs26209.jpg', NULL, NULL),
(1246, 476, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029756UD1Xs26209.jpg', NULL, NULL),
(1247, 476, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029756UD1Xs26209.jpg', NULL, NULL),
(1248, 477, 'ACTUAL', 400, 420, 'images/media/2020/01/9UdGF26709.jpg', NULL, NULL),
(1249, 477, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297569UdGF26709.jpg', NULL, NULL),
(1250, 477, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297569UdGF26709.jpg', NULL, NULL),
(1251, 478, 'ACTUAL', 400, 420, 'images/media/2020/01/oGGww26709.jpg', NULL, NULL),
(1252, 478, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029757oGGww26709.jpg', NULL, NULL),
(1253, 478, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029757oGGww26709.jpg', NULL, NULL),
(1254, 479, 'ACTUAL', 400, 420, 'images/media/2020/01/xkLFO26509.jpg', NULL, NULL),
(1255, 479, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029757xkLFO26509.jpg', NULL, NULL),
(1256, 479, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029757xkLFO26509.jpg', NULL, NULL),
(1257, 480, 'ACTUAL', 400, 420, 'images/media/2020/01/X6JgO26909.jpg', NULL, NULL),
(1258, 480, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029758X6JgO26909.jpg', NULL, NULL),
(1259, 480, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029758X6JgO26909.jpg', NULL, NULL),
(1260, 481, 'ACTUAL', 400, 420, 'images/media/2020/01/eQBja26509.jpg', NULL, NULL),
(1261, 481, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029758eQBja26509.jpg', NULL, NULL),
(1262, 481, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029758eQBja26509.jpg', NULL, NULL),
(1263, 483, 'ACTUAL', 400, 420, 'images/media/2020/01/dCkEE26309.jpg', NULL, NULL),
(1264, 482, 'ACTUAL', 400, 420, 'images/media/2020/01/GL3Mw26209.jpg', NULL, NULL),
(1265, 483, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029804dCkEE26309.jpg', NULL, NULL),
(1266, 482, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029804GL3Mw26209.jpg', NULL, NULL),
(1267, 483, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029804dCkEE26309.jpg', NULL, NULL),
(1268, 482, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029804GL3Mw26209.jpg', NULL, NULL),
(1269, 484, 'ACTUAL', 430, 410, 'images/media/2020/01/QXAKX26910.jpg', NULL, NULL),
(1270, 484, 'THUMBNAIL', 400, 381, 'images/media/2020/01/thumbnail1580036061QXAKX26910.jpg', NULL, NULL),
(1271, 484, 'MEDIUM', 400, 381, 'images/media/2020/01/medium1580036061QXAKX26910.jpg', NULL, NULL),
(1272, 485, 'ACTUAL', 284, 250, 'images/media/2020/01/XaTxI26511.jpg', NULL, NULL),
(1276, 487, 'ACTUAL', 284, 250, 'images/media/2020/01/C7s1B26611.jpg', NULL, NULL),
(629, 269, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15795206375b1wa20311.jpg', NULL, NULL),
(630, 270, 'ACTUAL', 410, 410, 'images/media/2020/01/G1Ff920911.jpg', NULL, NULL),
(631, 270, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520638G1Ff920911.jpg', NULL, NULL),
(632, 270, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520638G1Ff920911.jpg', NULL, NULL),
(633, 271, 'ACTUAL', 410, 410, 'images/media/2020/01/n2kbw20611.jpg', NULL, NULL),
(634, 271, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520733n2kbw20611.jpg', NULL, NULL),
(635, 271, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520733n2kbw20611.jpg', NULL, NULL),
(636, 272, 'ACTUAL', 410, 410, 'images/media/2020/01/BRUe120811.jpg', NULL, NULL),
(637, 272, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520733BRUe120811.jpg', NULL, NULL),
(638, 272, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520733BRUe120811.jpg', NULL, NULL),
(639, 273, 'ACTUAL', 410, 410, 'images/media/2020/01/wCceH20811.jpg', NULL, NULL),
(640, 273, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520734wCceH20811.jpg', NULL, NULL),
(641, 273, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520734wCceH20811.jpg', NULL, NULL),
(642, 274, 'ACTUAL', 410, 410, 'images/media/2020/01/umOnf20811.jpg', NULL, NULL),
(643, 274, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520734umOnf20811.jpg', NULL, NULL),
(644, 274, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520734umOnf20811.jpg', NULL, NULL),
(645, 275, 'ACTUAL', 410, 410, 'images/media/2020/01/KiQGR20611.jpg', NULL, NULL),
(646, 275, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520734KiQGR20611.jpg', NULL, NULL),
(647, 275, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520734KiQGR20611.jpg', NULL, NULL),
(648, 276, 'ACTUAL', 410, 410, 'images/media/2020/01/lzeSK20311.jpg', NULL, NULL),
(649, 276, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520734lzeSK20311.jpg', NULL, NULL),
(650, 276, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520734lzeSK20311.jpg', NULL, NULL),
(651, 277, 'ACTUAL', 410, 410, 'images/media/2020/01/cNYCI20411.jpg', NULL, NULL),
(652, 277, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520735cNYCI20411.jpg', NULL, NULL),
(653, 277, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520735cNYCI20411.jpg', NULL, NULL),
(654, 278, 'ACTUAL', 410, 410, 'images/media/2020/01/XLUtB20411.jpg', NULL, NULL),
(655, 278, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520735XLUtB20411.jpg', NULL, NULL),
(656, 278, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520735XLUtB20411.jpg', NULL, NULL),
(657, 279, 'ACTUAL', 410, 410, 'images/media/2020/01/rwZde20111.jpg', NULL, NULL),
(658, 279, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520735rwZde20111.jpg', NULL, NULL),
(659, 279, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520735rwZde20111.jpg', NULL, NULL),
(660, 280, 'ACTUAL', 410, 410, 'images/media/2020/01/EHKbT20711.jpg', NULL, NULL),
(661, 280, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520735EHKbT20711.jpg', NULL, NULL),
(662, 280, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520735EHKbT20711.jpg', NULL, NULL),
(663, 281, 'ACTUAL', 410, 410, 'images/media/2020/01/unjk920511.jpg', NULL, NULL),
(664, 281, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520736unjk920511.jpg', NULL, NULL),
(665, 281, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520736unjk920511.jpg', NULL, NULL),
(666, 282, 'ACTUAL', 410, 410, 'images/media/2020/01/Meave20411.jpg', NULL, NULL),
(667, 282, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520736Meave20411.jpg', NULL, NULL),
(668, 282, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520736Meave20411.jpg', NULL, NULL),
(669, 283, 'ACTUAL', 410, 410, 'images/media/2020/01/jR9XI20711.jpg', NULL, NULL),
(670, 283, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520736jR9XI20711.jpg', NULL, NULL),
(671, 283, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520736jR9XI20711.jpg', NULL, NULL),
(672, 284, 'ACTUAL', 410, 410, 'images/media/2020/01/dfwgE20611.jpg', NULL, NULL),
(673, 284, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520738dfwgE20611.jpg', NULL, NULL),
(674, 285, 'ACTUAL', 410, 410, 'images/media/2020/01/AXgJa20411.jpg', NULL, NULL),
(675, 285, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520739AXgJa20411.jpg', NULL, NULL),
(676, 285, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520739AXgJa20411.jpg', NULL, NULL),
(677, 286, 'ACTUAL', 410, 410, 'images/media/2020/01/jZnKR20611.jpg', NULL, NULL),
(678, 287, 'ACTUAL', 410, 410, 'images/media/2020/01/e7eGX20811.jpg', NULL, NULL),
(679, 286, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520803jZnKR20611.jpg', NULL, NULL),
(680, 287, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520803e7eGX20811.jpg', NULL, NULL),
(681, 286, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520803jZnKR20611.jpg', NULL, NULL),
(682, 287, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520803e7eGX20811.jpg', NULL, NULL),
(683, 288, 'ACTUAL', 410, 410, 'images/media/2020/01/RtFe720311.jpg', NULL, NULL),
(684, 288, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520804RtFe720311.jpg', NULL, NULL),
(685, 289, 'ACTUAL', 410, 410, 'images/media/2020/01/kyMe620811.jpg', NULL, NULL),
(686, 288, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520804RtFe720311.jpg', NULL, NULL),
(687, 289, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520804kyMe620811.jpg', NULL, NULL),
(688, 289, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520804kyMe620811.jpg', NULL, NULL),
(689, 290, 'ACTUAL', 410, 410, 'images/media/2020/01/3NSZp20611.jpg', NULL, NULL),
(690, 290, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail15795208043NSZp20611.jpg', NULL, NULL),
(691, 290, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15795208053NSZp20611.jpg', NULL, NULL),
(692, 291, 'ACTUAL', 410, 410, 'images/media/2020/01/2wOey20111.jpg', NULL, NULL),
(693, 291, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail15795208052wOey20111.jpg', NULL, NULL),
(694, 291, 'MEDIUM', 400, 400, 'images/media/2020/01/medium15795208052wOey20111.jpg', NULL, NULL),
(695, 292, 'ACTUAL', 410, 410, 'images/media/2020/01/sBWwS20411.jpg', NULL, NULL),
(696, 292, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520805sBWwS20411.jpg', NULL, NULL),
(697, 292, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520805sBWwS20411.jpg', NULL, NULL),
(698, 293, 'ACTUAL', 410, 410, 'images/media/2020/01/MRqWx20611.jpg', NULL, NULL),
(699, 293, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520805MRqWx20611.jpg', NULL, NULL),
(700, 293, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520805MRqWx20611.jpg', NULL, NULL),
(701, 294, 'ACTUAL', 410, 410, 'images/media/2020/01/ZhIzs20511.jpg', NULL, NULL),
(702, 294, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520805ZhIzs20511.jpg', NULL, NULL),
(703, 294, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520805ZhIzs20511.jpg', NULL, NULL),
(704, 295, 'ACTUAL', 400, 400, 'images/media/2020/01/gd8SJ20411.jpg', NULL, NULL),
(705, 295, 'THUMBNAIL', 400, 400, 'images/media/2020/01/thumbnail1579520806gd8SJ20411.jpg', NULL, NULL),
(706, 295, 'MEDIUM', 400, 400, 'images/media/2020/01/medium1579520806gd8SJ20411.jpg', NULL, NULL),
(707, 296, 'ACTUAL', 400, 420, 'images/media/2020/01/bpNsX20711.jpg', NULL, NULL),
(708, 296, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520806bpNsX20711.jpg', NULL, NULL),
(709, 296, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520806bpNsX20711.jpg', NULL, NULL),
(710, 297, 'ACTUAL', 400, 420, 'images/media/2020/01/QP5PB20911.jpg', NULL, NULL),
(711, 297, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520806QP5PB20911.jpg', NULL, NULL),
(712, 297, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520806QP5PB20911.jpg', NULL, NULL),
(713, 298, 'ACTUAL', 400, 420, 'images/media/2020/01/kncl020911.jpg', NULL, NULL),
(714, 298, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520806kncl020911.jpg', NULL, NULL),
(715, 298, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520806kncl020911.jpg', NULL, NULL),
(716, 299, 'ACTUAL', 400, 420, 'images/media/2020/01/0n93B20811.jpg', NULL, NULL),
(717, 299, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208060n93B20811.jpg', NULL, NULL),
(718, 299, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208060n93B20811.jpg', NULL, NULL),
(719, 300, 'ACTUAL', 400, 420, 'images/media/2020/01/LVdhX20711.jpg', NULL, NULL),
(720, 300, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520807LVdhX20711.jpg', NULL, NULL),
(721, 300, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520807LVdhX20711.jpg', NULL, NULL),
(722, 301, 'ACTUAL', 400, 420, 'images/media/2020/01/ubZkt20611.jpg', NULL, NULL),
(723, 301, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520807ubZkt20611.jpg', NULL, NULL),
(724, 301, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520807ubZkt20611.jpg', NULL, NULL),
(725, 302, 'ACTUAL', 400, 420, 'images/media/2020/01/qOkNM20311.jpg', NULL, NULL),
(726, 302, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520807qOkNM20311.jpg', NULL, NULL),
(727, 302, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520807qOkNM20311.jpg', NULL, NULL),
(728, 303, 'ACTUAL', 400, 420, 'images/media/2020/01/teybQ20411.jpg', NULL, NULL),
(729, 303, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520807teybQ20411.jpg', NULL, NULL),
(730, 303, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520807teybQ20411.jpg', NULL, NULL),
(731, 304, 'ACTUAL', 400, 420, 'images/media/2020/01/SGSpo20911.jpg', NULL, NULL),
(732, 304, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520808SGSpo20911.jpg', NULL, NULL),
(733, 304, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520808SGSpo20911.jpg', NULL, NULL),
(734, 305, 'ACTUAL', 400, 420, 'images/media/2020/01/6EWI320511.jpg', NULL, NULL),
(735, 305, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208086EWI320511.jpg', NULL, NULL),
(736, 305, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208086EWI320511.jpg', NULL, NULL),
(737, 306, 'ACTUAL', 400, 420, 'images/media/2020/01/6RjRP20811.jpg', NULL, NULL),
(738, 306, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208416RjRP20811.jpg', NULL, NULL),
(739, 306, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208416RjRP20811.jpg', NULL, NULL),
(740, 307, 'ACTUAL', 400, 420, 'images/media/2020/01/QA2c820511.jpg', NULL, NULL),
(741, 307, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520841QA2c820511.jpg', NULL, NULL),
(742, 307, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520841QA2c820511.jpg', NULL, NULL),
(743, 308, 'ACTUAL', 400, 420, 'images/media/2020/01/qiJ8A20811.jpg', NULL, NULL),
(744, 308, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520842qiJ8A20811.jpg', NULL, NULL),
(745, 308, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520842qiJ8A20811.jpg', NULL, NULL),
(746, 309, 'ACTUAL', 400, 420, 'images/media/2020/01/vy9sm20911.jpg', NULL, NULL),
(747, 309, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520842vy9sm20911.jpg', NULL, NULL),
(748, 309, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520842vy9sm20911.jpg', NULL, NULL),
(749, 310, 'ACTUAL', 400, 420, 'images/media/2020/01/YpmDm20311.jpg', NULL, NULL),
(750, 310, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520842YpmDm20311.jpg', NULL, NULL),
(751, 310, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520842YpmDm20311.jpg', NULL, NULL),
(752, 311, 'ACTUAL', 400, 420, 'images/media/2020/01/j6D1x20411.jpg', NULL, NULL),
(753, 311, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520842j6D1x20411.jpg', NULL, NULL),
(754, 311, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520842j6D1x20411.jpg', NULL, NULL),
(755, 312, 'ACTUAL', 400, 420, 'images/media/2020/01/taWM120711.jpg', NULL, NULL),
(756, 312, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520843taWM120711.jpg', NULL, NULL),
(757, 312, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520843taWM120711.jpg', NULL, NULL),
(758, 313, 'ACTUAL', 400, 420, 'images/media/2020/01/o60O420511.jpg', NULL, NULL),
(759, 313, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520843o60O420511.jpg', NULL, NULL),
(760, 313, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520843o60O420511.jpg', NULL, NULL),
(761, 314, 'ACTUAL', 400, 420, 'images/media/2020/01/3wbjB20811.jpg', NULL, NULL),
(762, 314, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208433wbjB20811.jpg', NULL, NULL),
(763, 314, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208433wbjB20811.jpg', NULL, NULL),
(764, 315, 'ACTUAL', 400, 420, 'images/media/2020/01/CKVBQ20811.jpg', NULL, NULL),
(765, 315, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520843CKVBQ20811.jpg', NULL, NULL),
(766, 315, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520843CKVBQ20811.jpg', NULL, NULL),
(767, 316, 'ACTUAL', 400, 420, 'images/media/2020/01/lKf3D20111.jpg', NULL, NULL),
(768, 316, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520844lKf3D20111.jpg', NULL, NULL),
(769, 316, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520844lKf3D20111.jpg', NULL, NULL),
(770, 317, 'ACTUAL', 400, 420, 'images/media/2020/01/Ru8ly20411.jpg', NULL, NULL),
(771, 317, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520844Ru8ly20411.jpg', NULL, NULL),
(772, 317, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520844Ru8ly20411.jpg', NULL, NULL),
(773, 318, 'ACTUAL', 400, 420, 'images/media/2020/01/3jsTh20311.jpg', NULL, NULL),
(774, 318, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795208443jsTh20311.jpg', NULL, NULL),
(775, 318, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795208443jsTh20311.jpg', NULL, NULL),
(776, 319, 'ACTUAL', 400, 420, 'images/media/2020/01/lVjdY20611.jpg', NULL, NULL),
(777, 319, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520844lVjdY20611.jpg', NULL, NULL),
(778, 319, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520844lVjdY20611.jpg', NULL, NULL),
(779, 320, 'ACTUAL', 400, 420, 'images/media/2020/01/tq6mc20311.jpg', NULL, NULL),
(780, 320, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845tq6mc20311.jpg', NULL, NULL),
(781, 320, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845tq6mc20311.jpg', NULL, NULL),
(782, 321, 'ACTUAL', 400, 420, 'images/media/2020/01/ESrmw20211.jpg', NULL, NULL),
(783, 321, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845ESrmw20211.jpg', NULL, NULL),
(784, 321, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845ESrmw20211.jpg', NULL, NULL),
(785, 322, 'ACTUAL', 400, 420, 'images/media/2020/01/WTbMr20511.jpg', NULL, NULL),
(786, 322, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845WTbMr20511.jpg', NULL, NULL),
(787, 322, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845WTbMr20511.jpg', NULL, NULL),
(788, 323, 'ACTUAL', 400, 420, 'images/media/2020/01/MFmmv20911.jpg', NULL, NULL),
(789, 323, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845MFmmv20911.jpg', NULL, NULL),
(790, 323, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845MFmmv20911.jpg', NULL, NULL),
(791, 324, 'ACTUAL', 400, 420, 'images/media/2020/01/cjDki20811.jpg', NULL, NULL),
(792, 324, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520845cjDki20811.jpg', NULL, NULL),
(793, 324, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520845cjDki20811.jpg', NULL, NULL),
(794, 325, 'ACTUAL', 400, 420, 'images/media/2020/01/JljOd20311.jpg', NULL, NULL),
(795, 325, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520846JljOd20311.jpg', NULL, NULL),
(796, 325, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520846JljOd20311.jpg', NULL, NULL),
(797, 326, 'ACTUAL', 400, 420, 'images/media/2020/01/M9NvU20211.jpg', NULL, NULL),
(798, 327, 'ACTUAL', 400, 420, 'images/media/2020/01/qtWeX20911.jpg', NULL, NULL),
(799, 327, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520905qtWeX20911.jpg', NULL, NULL),
(800, 326, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520905M9NvU20211.jpg', NULL, NULL),
(801, 326, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520905M9NvU20211.jpg', NULL, NULL),
(802, 327, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520905qtWeX20911.jpg', NULL, NULL),
(803, 328, 'ACTUAL', 400, 420, 'images/media/2020/01/UKUsi20711.jpg', NULL, NULL),
(804, 328, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520906UKUsi20711.jpg', NULL, NULL),
(805, 328, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520906UKUsi20711.jpg', NULL, NULL),
(806, 329, 'ACTUAL', 400, 420, 'images/media/2020/01/rPztG20511.jpg', NULL, NULL),
(807, 329, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520906rPztG20511.jpg', NULL, NULL),
(808, 329, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520906rPztG20511.jpg', NULL, NULL),
(809, 330, 'ACTUAL', 400, 420, 'images/media/2020/01/D1tjw20111.jpg', NULL, NULL),
(810, 330, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520906D1tjw20111.jpg', NULL, NULL),
(811, 330, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520906D1tjw20111.jpg', NULL, NULL),
(812, 331, 'ACTUAL', 400, 420, 'images/media/2020/01/quC0g20811.jpg', NULL, NULL),
(813, 331, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520907quC0g20811.jpg', NULL, NULL),
(814, 331, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520907quC0g20811.jpg', NULL, NULL),
(815, 332, 'ACTUAL', 400, 420, 'images/media/2020/01/6EuCr20211.jpg', NULL, NULL),
(816, 332, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795209076EuCr20211.jpg', NULL, NULL),
(817, 332, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795209076EuCr20211.jpg', NULL, NULL),
(818, 333, 'ACTUAL', 400, 420, 'images/media/2020/01/QMqBo20811.jpg', NULL, NULL),
(819, 333, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908QMqBo20811.jpg', NULL, NULL),
(820, 333, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908QMqBo20811.jpg', NULL, NULL),
(821, 334, 'ACTUAL', 400, 420, 'images/media/2020/01/q0qTP20911.jpg', NULL, NULL),
(822, 334, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908q0qTP20911.jpg', NULL, NULL),
(823, 334, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908q0qTP20911.jpg', NULL, NULL),
(824, 335, 'ACTUAL', 400, 420, 'images/media/2020/01/utbPx20211.jpg', NULL, NULL),
(825, 335, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908utbPx20211.jpg', NULL, NULL),
(826, 335, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908utbPx20211.jpg', NULL, NULL),
(827, 336, 'ACTUAL', 400, 420, 'images/media/2020/01/sHPEs20611.jpg', NULL, NULL),
(828, 336, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908sHPEs20611.jpg', NULL, NULL),
(829, 336, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908sHPEs20611.jpg', NULL, NULL),
(830, 337, 'ACTUAL', 400, 420, 'images/media/2020/01/zEW1K20111.jpg', NULL, NULL),
(831, 337, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520908zEW1K20111.jpg', NULL, NULL),
(832, 337, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520908zEW1K20111.jpg', NULL, NULL),
(833, 338, 'ACTUAL', 400, 420, 'images/media/2020/01/zB9cb20911.jpg', NULL, NULL),
(834, 338, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520909zB9cb20911.jpg', NULL, NULL),
(835, 338, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520909zB9cb20911.jpg', NULL, NULL),
(836, 339, 'ACTUAL', 400, 420, 'images/media/2020/01/Nf6nC20711.jpg', NULL, NULL),
(837, 339, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520909Nf6nC20711.jpg', NULL, NULL),
(838, 339, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520909Nf6nC20711.jpg', NULL, NULL),
(839, 340, 'ACTUAL', 400, 420, 'images/media/2020/01/SQAlW20811.jpg', NULL, NULL),
(840, 340, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520909SQAlW20811.jpg', NULL, NULL),
(841, 340, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520909SQAlW20811.jpg', NULL, NULL),
(842, 341, 'ACTUAL', 400, 420, 'images/media/2020/01/prlrw20311.jpg', NULL, NULL),
(843, 341, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520939prlrw20311.jpg', NULL, NULL),
(844, 341, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520939prlrw20311.jpg', NULL, NULL),
(845, 342, 'ACTUAL', 400, 420, 'images/media/2020/01/Ctuep20711.jpg', NULL, NULL),
(846, 342, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520940Ctuep20711.jpg', NULL, NULL),
(847, 342, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520940Ctuep20711.jpg', NULL, NULL),
(848, 343, 'ACTUAL', 400, 420, 'images/media/2020/01/9mbpk20211.jpg', NULL, NULL),
(849, 343, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795209409mbpk20211.jpg', NULL, NULL),
(850, 343, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795209409mbpk20211.jpg', NULL, NULL),
(851, 344, 'ACTUAL', 400, 420, 'images/media/2020/01/2LI4N20311.jpg', NULL, NULL),
(852, 344, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795209402LI4N20311.jpg', NULL, NULL),
(853, 344, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795209402LI4N20311.jpg', NULL, NULL),
(854, 345, 'ACTUAL', 400, 420, 'images/media/2020/01/PokkA20611.jpg', NULL, NULL),
(855, 345, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520940PokkA20611.jpg', NULL, NULL),
(856, 345, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520940PokkA20611.jpg', NULL, NULL),
(857, 346, 'ACTUAL', 400, 420, 'images/media/2020/01/FZZ2E20611.jpg', NULL, NULL),
(858, 346, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520941FZZ2E20611.jpg', NULL, NULL),
(859, 346, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520941FZZ2E20611.jpg', NULL, NULL),
(860, 347, 'ACTUAL', 400, 420, 'images/media/2020/01/bkK9b20311.jpg', NULL, NULL),
(861, 347, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520941bkK9b20311.jpg', NULL, NULL),
(862, 347, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520941bkK9b20311.jpg', NULL, NULL),
(863, 348, 'ACTUAL', 400, 420, 'images/media/2020/01/4kkxU20711.jpg', NULL, NULL),
(864, 348, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795209414kkxU20711.jpg', NULL, NULL),
(865, 348, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795209414kkxU20711.jpg', NULL, NULL),
(866, 349, 'ACTUAL', 400, 420, 'images/media/2020/01/Lm9zc20511.jpg', NULL, NULL),
(867, 349, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520941Lm9zc20511.jpg', NULL, NULL),
(868, 349, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520941Lm9zc20511.jpg', NULL, NULL),
(869, 350, 'ACTUAL', 400, 420, 'images/media/2020/01/xP2ws20811.jpg', NULL, NULL),
(870, 350, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520942xP2ws20811.jpg', NULL, NULL),
(871, 350, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520942xP2ws20811.jpg', NULL, NULL),
(872, 351, 'ACTUAL', 400, 420, 'images/media/2020/01/qZS9u20911.jpg', NULL, NULL),
(873, 351, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520942qZS9u20911.jpg', NULL, NULL),
(874, 351, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520942qZS9u20911.jpg', NULL, NULL),
(875, 352, 'ACTUAL', 400, 420, 'images/media/2020/01/60EtT20111.jpg', NULL, NULL),
(876, 352, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail157952094260EtT20111.jpg', NULL, NULL),
(877, 352, 'MEDIUM', 381, 400, 'images/media/2020/01/medium157952094260EtT20111.jpg', NULL, NULL),
(878, 353, 'ACTUAL', 400, 420, 'images/media/2020/01/XdN8d20611.jpg', NULL, NULL),
(879, 353, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520942XdN8d20611.jpg', NULL, NULL),
(880, 353, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520942XdN8d20611.jpg', NULL, NULL),
(881, 354, 'ACTUAL', 400, 420, 'images/media/2020/01/hRFu020111.jpg', NULL, NULL),
(882, 354, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520943hRFu020111.jpg', NULL, NULL),
(883, 354, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520943hRFu020111.jpg', NULL, NULL),
(884, 355, 'ACTUAL', 400, 420, 'images/media/2020/01/IJDwb20211.jpg', NULL, NULL),
(885, 355, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520943IJDwb20211.jpg', NULL, NULL),
(886, 355, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520943IJDwb20211.jpg', NULL, NULL),
(887, 356, 'ACTUAL', 400, 420, 'images/media/2020/01/LXgGt20811.jpg', NULL, NULL),
(888, 356, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520943LXgGt20811.jpg', NULL, NULL),
(889, 356, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520943LXgGt20811.jpg', NULL, NULL),
(890, 357, 'ACTUAL', 400, 420, 'images/media/2020/01/YUJlv20611.jpg', NULL, NULL),
(891, 357, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520943YUJlv20611.jpg', NULL, NULL),
(892, 357, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520943YUJlv20611.jpg', NULL, NULL),
(893, 358, 'ACTUAL', 400, 420, 'images/media/2020/01/hx0Yl20511.jpg', NULL, NULL),
(894, 358, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520944hx0Yl20511.jpg', NULL, NULL),
(895, 358, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520944hx0Yl20511.jpg', NULL, NULL),
(896, 359, 'ACTUAL', 400, 420, 'images/media/2020/01/CPJa820611.jpg', NULL, NULL),
(897, 359, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520944CPJa820611.jpg', NULL, NULL),
(898, 359, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520944CPJa820611.jpg', NULL, NULL),
(899, 360, 'ACTUAL', 400, 420, 'images/media/2020/01/JOdmy20311.jpg', NULL, NULL),
(900, 360, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579520944JOdmy20311.jpg', NULL, NULL),
(901, 360, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579520944JOdmy20311.jpg', NULL, NULL),
(902, 361, 'ACTUAL', 400, 420, 'images/media/2020/01/8Wrfm20411.jpg', NULL, NULL),
(903, 362, 'ACTUAL', 400, 420, 'images/media/2020/01/sRZii20711.jpg', NULL, NULL),
(904, 362, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521003sRZii20711.jpg', NULL, NULL),
(905, 361, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210038Wrfm20411.jpg', NULL, NULL),
(906, 361, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210038Wrfm20411.jpg', NULL, NULL),
(907, 362, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521003sRZii20711.jpg', NULL, NULL),
(908, 363, 'ACTUAL', 400, 420, 'images/media/2020/01/yXF5420411.jpg', NULL, NULL),
(909, 364, 'ACTUAL', 400, 420, 'images/media/2020/01/FXdFS20911.jpg', NULL, NULL),
(910, 363, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521004yXF5420411.jpg', NULL, NULL),
(911, 363, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521004yXF5420411.jpg', NULL, NULL),
(912, 364, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521004FXdFS20911.jpg', NULL, NULL),
(913, 364, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521004FXdFS20911.jpg', NULL, NULL),
(914, 365, 'ACTUAL', 400, 420, 'images/media/2020/01/okuKp20211.jpg', NULL, NULL),
(915, 365, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521004okuKp20211.jpg', NULL, NULL),
(916, 366, 'ACTUAL', 400, 420, 'images/media/2020/01/8Z1F120111.jpg', NULL, NULL),
(917, 365, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521004okuKp20211.jpg', NULL, NULL),
(918, 366, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210048Z1F120111.jpg', NULL, NULL),
(919, 366, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210048Z1F120111.jpg', NULL, NULL),
(920, 367, 'ACTUAL', 400, 420, 'images/media/2020/01/kFom920111.jpg', NULL, NULL),
(921, 367, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521005kFom920111.jpg', NULL, NULL),
(922, 367, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521005kFom920111.jpg', NULL, NULL),
(923, 368, 'ACTUAL', 400, 420, 'images/media/2020/01/rLFBI20111.jpg', NULL, NULL),
(924, 368, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521005rLFBI20111.jpg', NULL, NULL),
(925, 368, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521005rLFBI20111.jpg', NULL, NULL),
(926, 369, 'ACTUAL', 400, 420, 'images/media/2020/01/i0x5Z20611.jpg', NULL, NULL),
(927, 369, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521005i0x5Z20611.jpg', NULL, NULL),
(928, 369, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521005i0x5Z20611.jpg', NULL, NULL),
(929, 370, 'ACTUAL', 400, 420, 'images/media/2020/01/F12N420911.jpg', NULL, NULL),
(930, 370, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521005F12N420911.jpg', NULL, NULL),
(931, 370, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521005F12N420911.jpg', NULL, NULL),
(932, 371, 'ACTUAL', 400, 420, 'images/media/2020/01/54bYi20511.jpg', NULL, NULL),
(933, 371, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail157952100654bYi20511.jpg', NULL, NULL),
(934, 371, 'MEDIUM', 381, 400, 'images/media/2020/01/medium157952100654bYi20511.jpg', NULL, NULL),
(935, 372, 'ACTUAL', 400, 420, 'images/media/2020/01/oQKuF20611.jpg', NULL, NULL),
(936, 372, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521006oQKuF20611.jpg', NULL, NULL),
(937, 372, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521006oQKuF20611.jpg', NULL, NULL),
(938, 373, 'ACTUAL', 400, 420, 'images/media/2020/01/96jAm20611.jpg', NULL, NULL),
(939, 373, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail157952100696jAm20611.jpg', NULL, NULL),
(940, 373, 'MEDIUM', 381, 400, 'images/media/2020/01/medium157952100696jAm20611.jpg', NULL, NULL),
(941, 374, 'ACTUAL', 400, 420, 'images/media/2020/01/rXg5w20611.jpg', NULL, NULL),
(942, 374, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521006rXg5w20611.jpg', NULL, NULL),
(943, 374, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521006rXg5w20611.jpg', NULL, NULL),
(944, 375, 'ACTUAL', 400, 420, 'images/media/2020/01/RtNQz20711.jpg', NULL, NULL),
(945, 375, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521007RtNQz20711.jpg', NULL, NULL),
(946, 375, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521007RtNQz20711.jpg', NULL, NULL),
(947, 376, 'ACTUAL', 400, 420, 'images/media/2020/01/oSSmB20911.jpg', NULL, NULL),
(948, 376, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521033oSSmB20911.jpg', NULL, NULL),
(949, 376, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521033oSSmB20911.jpg', NULL, NULL),
(950, 377, 'ACTUAL', 400, 420, 'images/media/2020/01/LzfR020811.jpg', NULL, NULL),
(951, 377, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521033LzfR020811.jpg', NULL, NULL),
(952, 377, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521033LzfR020811.jpg', NULL, NULL),
(953, 378, 'ACTUAL', 400, 420, 'images/media/2020/01/qgXWK20211.jpg', NULL, NULL),
(954, 378, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521033qgXWK20211.jpg', NULL, NULL),
(955, 378, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521033qgXWK20211.jpg', NULL, NULL),
(956, 379, 'ACTUAL', 400, 420, 'images/media/2020/01/L0mw220311.jpg', NULL, NULL),
(957, 379, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521033L0mw220311.jpg', NULL, NULL),
(958, 379, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521033L0mw220311.jpg', NULL, NULL),
(959, 380, 'ACTUAL', 400, 420, 'images/media/2020/01/n7EBj20511.jpg', NULL, NULL),
(960, 380, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521034n7EBj20511.jpg', NULL, NULL),
(961, 380, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521034n7EBj20511.jpg', NULL, NULL),
(962, 381, 'ACTUAL', 400, 420, 'images/media/2020/01/0sWXH20511.jpg', NULL, NULL),
(963, 381, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210340sWXH20511.jpg', NULL, NULL),
(964, 381, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210340sWXH20511.jpg', NULL, NULL),
(965, 382, 'ACTUAL', 400, 420, 'images/media/2020/01/mwcqF20511.jpg', NULL, NULL),
(966, 382, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521034mwcqF20511.jpg', NULL, NULL),
(967, 382, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521034mwcqF20511.jpg', NULL, NULL),
(968, 383, 'ACTUAL', 400, 420, 'images/media/2020/01/qF2wS20511.jpg', NULL, NULL),
(969, 383, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521034qF2wS20511.jpg', NULL, NULL),
(970, 383, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521034qF2wS20511.jpg', NULL, NULL),
(971, 384, 'ACTUAL', 400, 420, 'images/media/2020/01/NUvsf20911.jpg', NULL, NULL),
(972, 384, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521035NUvsf20911.jpg', NULL, NULL),
(973, 384, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521035NUvsf20911.jpg', NULL, NULL),
(974, 385, 'ACTUAL', 400, 420, 'images/media/2020/01/Kdxxk20111.jpg', NULL, NULL),
(975, 385, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521035Kdxxk20111.jpg', NULL, NULL),
(976, 385, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521035Kdxxk20111.jpg', NULL, NULL),
(977, 386, 'ACTUAL', 400, 420, 'images/media/2020/01/GmGjM20811.jpg', NULL, NULL),
(978, 386, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521035GmGjM20811.jpg', NULL, NULL),
(979, 386, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521035GmGjM20811.jpg', NULL, NULL),
(980, 387, 'ACTUAL', 400, 420, 'images/media/2020/01/6XsiX20911.jpg', NULL, NULL),
(981, 387, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210356XsiX20911.jpg', NULL, NULL),
(982, 387, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210356XsiX20911.jpg', NULL, NULL),
(983, 388, 'ACTUAL', 400, 420, 'images/media/2020/01/4l8MR20911.jpg', NULL, NULL),
(984, 388, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210364l8MR20911.jpg', NULL, NULL),
(985, 388, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210364l8MR20911.jpg', NULL, NULL),
(986, 389, 'ACTUAL', 400, 420, 'images/media/2020/01/mNPEv20611.jpg', NULL, NULL),
(987, 389, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521036mNPEv20611.jpg', NULL, NULL),
(988, 389, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521036mNPEv20611.jpg', NULL, NULL),
(989, 390, 'ACTUAL', 400, 420, 'images/media/2020/01/UDG5120311.jpg', NULL, NULL),
(990, 390, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521036UDG5120311.jpg', NULL, NULL),
(991, 390, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521036UDG5120311.jpg', NULL, NULL),
(992, 391, 'ACTUAL', 400, 420, 'images/media/2020/01/Fx3O820411.jpg', NULL, NULL),
(993, 391, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521067Fx3O820411.jpg', NULL, NULL),
(994, 391, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521067Fx3O820411.jpg', NULL, NULL),
(995, 392, 'ACTUAL', 400, 420, 'images/media/2020/01/S08vg20711.jpg', NULL, NULL),
(996, 392, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521068S08vg20711.jpg', NULL, NULL),
(997, 392, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521068S08vg20711.jpg', NULL, NULL),
(998, 393, 'ACTUAL', 400, 420, 'images/media/2020/01/F0q4020711.jpg', NULL, NULL),
(999, 394, 'ACTUAL', 400, 420, 'images/media/2020/01/SYgbu20611.jpg', NULL, NULL),
(1000, 394, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521069SYgbu20611.jpg', NULL, NULL),
(1001, 393, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521069F0q4020711.jpg', NULL, NULL),
(1002, 394, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521070SYgbu20611.jpg', NULL, NULL),
(1003, 393, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521070F0q4020711.jpg', NULL, NULL),
(1004, 395, 'ACTUAL', 400, 420, 'images/media/2020/01/9JGe820111.jpg', NULL, NULL),
(1005, 395, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210709JGe820111.jpg', NULL, NULL),
(1006, 396, 'ACTUAL', 400, 420, 'images/media/2020/01/eAoSB20111.jpg', NULL, NULL),
(1007, 396, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521071eAoSB20111.jpg', NULL, NULL),
(1008, 396, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521071eAoSB20111.jpg', NULL, NULL),
(1009, 397, 'ACTUAL', 400, 420, 'images/media/2020/01/WUGBh20411.jpg', NULL, NULL),
(1010, 397, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521072WUGBh20411.jpg', NULL, NULL),
(1011, 397, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521072WUGBh20411.jpg', NULL, NULL),
(1012, 398, 'ACTUAL', 400, 420, 'images/media/2020/01/7bd6b20111.jpg', NULL, NULL),
(1013, 398, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795210737bd6b20111.jpg', NULL, NULL),
(1014, 398, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795210737bd6b20111.jpg', NULL, NULL),
(1015, 399, 'ACTUAL', 400, 420, 'images/media/2020/01/P4qUy20911.jpg', NULL, NULL),
(1016, 399, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521074P4qUy20911.jpg', NULL, NULL),
(1017, 399, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521074P4qUy20911.jpg', NULL, NULL),
(1018, 400, 'ACTUAL', 400, 420, 'images/media/2020/01/tktqM20811.jpg', NULL, NULL),
(1019, 400, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1579521074tktqM20811.jpg', NULL, NULL),
(1020, 400, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1579521075tktqM20811.jpg', NULL, NULL),
(1021, 401, 'ACTUAL', 400, 420, 'images/media/2020/01/5sTYz20701.jpg', NULL, NULL),
(1022, 401, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15795268825sTYz20701.jpg', NULL, NULL),
(1023, 401, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15795268825sTYz20701.jpg', NULL, NULL),
(1024, 402, 'ACTUAL', 400, 420, 'images/media/2020/01/CpCer26609.jpg', NULL, NULL),
(1025, 403, 'ACTUAL', 400, 420, 'images/media/2020/01/O96ZW26909.jpg', NULL, NULL),
(1026, 402, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029585CpCer26609.jpg', NULL, NULL),
(1027, 403, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029585O96ZW26909.jpg', NULL, NULL),
(1028, 402, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029585CpCer26609.jpg', NULL, NULL),
(1029, 403, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029585O96ZW26909.jpg', NULL, NULL),
(1030, 404, 'ACTUAL', 400, 420, 'images/media/2020/01/EcsW526309.jpg', NULL, NULL),
(1031, 404, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029586EcsW526309.jpg', NULL, NULL),
(1032, 404, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029587EcsW526309.jpg', NULL, NULL),
(1033, 405, 'ACTUAL', 400, 420, 'images/media/2020/01/ImqQj26909.jpg', NULL, NULL),
(1034, 405, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029587ImqQj26909.jpg', NULL, NULL),
(1035, 405, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029587ImqQj26909.jpg', NULL, NULL),
(1036, 406, 'ACTUAL', 400, 420, 'images/media/2020/01/vTnKV26109.jpg', NULL, NULL),
(1037, 406, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029588vTnKV26109.jpg', NULL, NULL),
(1038, 406, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029588vTnKV26109.jpg', NULL, NULL),
(1039, 407, 'ACTUAL', 400, 420, 'images/media/2020/01/RdITd26809.jpg', NULL, NULL),
(1040, 407, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029588RdITd26809.jpg', NULL, NULL),
(1041, 407, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029588RdITd26809.jpg', NULL, NULL),
(1042, 408, 'ACTUAL', 400, 420, 'images/media/2020/01/zxbVR26509.jpg', NULL, NULL),
(1043, 408, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029589zxbVR26509.jpg', NULL, NULL),
(1044, 408, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029589zxbVR26509.jpg', NULL, NULL),
(1045, 409, 'ACTUAL', 400, 420, 'images/media/2020/01/1X7A926709.jpg', NULL, NULL),
(1046, 409, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800295891X7A926709.jpg', NULL, NULL),
(1047, 409, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800295891X7A926709.jpg', NULL, NULL),
(1048, 410, 'ACTUAL', 400, 420, 'images/media/2020/01/yoGy126309.jpg', NULL, NULL),
(1049, 410, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029590yoGy126309.jpg', NULL, NULL),
(1050, 410, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029590yoGy126309.jpg', NULL, NULL),
(1051, 411, 'ACTUAL', 400, 420, 'images/media/2020/01/vWZZP26409.jpg', NULL, NULL),
(1052, 411, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029590vWZZP26409.jpg', NULL, NULL),
(1053, 411, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029590vWZZP26409.jpg', NULL, NULL),
(1054, 412, 'ACTUAL', 400, 420, 'images/media/2020/01/pskMF26909.jpg', NULL, NULL),
(1055, 413, 'ACTUAL', 400, 420, 'images/media/2020/01/ZWVkA26709.jpg', NULL, NULL),
(1056, 412, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029591pskMF26909.jpg', NULL, NULL),
(1057, 413, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029591ZWVkA26709.jpg', NULL, NULL),
(1058, 412, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029591pskMF26909.jpg', NULL, NULL),
(1059, 413, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029591ZWVkA26709.jpg', NULL, NULL),
(1060, 414, 'ACTUAL', 400, 420, 'images/media/2020/01/Gw2Ou26609.jpg', NULL, NULL),
(1061, 414, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029592Gw2Ou26609.jpg', NULL, NULL),
(1062, 414, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029592Gw2Ou26609.jpg', NULL, NULL),
(1063, 415, 'ACTUAL', 400, 420, 'images/media/2020/01/mvz2526609.jpg', NULL, NULL),
(1064, 415, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029593mvz2526609.jpg', NULL, NULL),
(1065, 415, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029593mvz2526609.jpg', NULL, NULL),
(1066, 416, 'ACTUAL', 400, 420, 'images/media/2020/01/FmLB226109.jpg', NULL, NULL),
(1067, 416, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029594FmLB226109.jpg', NULL, NULL),
(1068, 416, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029594FmLB226109.jpg', NULL, NULL),
(1069, 417, 'ACTUAL', 400, 420, 'images/media/2020/01/UbZgZ26609.jpg', NULL, NULL),
(1070, 417, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029594UbZgZ26609.jpg', NULL, NULL),
(1071, 417, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029594UbZgZ26609.jpg', NULL, NULL),
(1072, 418, 'ACTUAL', 400, 420, 'images/media/2020/01/5hvpD26409.jpg', NULL, NULL),
(1073, 418, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800295945hvpD26409.jpg', NULL, NULL),
(1074, 418, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800295945hvpD26409.jpg', NULL, NULL),
(1075, 419, 'ACTUAL', 400, 420, 'images/media/2020/01/ZSGkg26809.jpg', NULL, NULL),
(1076, 419, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029595ZSGkg26809.jpg', NULL, NULL),
(1077, 419, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029595ZSGkg26809.jpg', NULL, NULL),
(1078, 420, 'ACTUAL', 400, 420, 'images/media/2020/01/dXKcO26809.jpg', NULL, NULL);
INSERT INTO `image_categories` (`id`, `image_id`, `image_type`, `height`, `width`, `path`, `created_at`, `updated_at`) VALUES
(1079, 420, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029596dXKcO26809.jpg', NULL, NULL),
(1080, 421, 'ACTUAL', 400, 420, 'images/media/2020/01/sLH6l26809.jpg', NULL, NULL),
(1081, 420, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029596dXKcO26809.jpg', NULL, NULL),
(1082, 421, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029596sLH6l26809.jpg', NULL, NULL),
(1083, 421, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029596sLH6l26809.jpg', NULL, NULL),
(1084, 422, 'ACTUAL', 400, 420, 'images/media/2020/01/gmSGr26409.jpg', NULL, NULL),
(1085, 422, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029663gmSGr26409.jpg', NULL, NULL),
(1086, 422, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029663gmSGr26409.jpg', NULL, NULL),
(1087, 423, 'ACTUAL', 400, 420, 'images/media/2020/01/A04Hc26309.jpg', NULL, NULL),
(1088, 423, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029663A04Hc26309.jpg', NULL, NULL),
(1089, 423, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029663A04Hc26309.jpg', NULL, NULL),
(1090, 424, 'ACTUAL', 400, 420, 'images/media/2020/01/wotPR26609.jpg', NULL, NULL),
(1091, 424, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029664wotPR26609.jpg', NULL, NULL),
(1092, 424, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029664wotPR26609.jpg', NULL, NULL),
(1093, 425, 'ACTUAL', 400, 420, 'images/media/2020/01/omu6A26609.jpg', NULL, NULL),
(1094, 425, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029665omu6A26609.jpg', NULL, NULL),
(1095, 426, 'ACTUAL', 400, 420, 'images/media/2020/01/db1ft26309.jpg', NULL, NULL),
(1096, 425, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029665omu6A26609.jpg', NULL, NULL),
(1097, 426, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029665db1ft26309.jpg', NULL, NULL),
(1098, 426, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029665db1ft26309.jpg', NULL, NULL),
(1099, 427, 'ACTUAL', 400, 420, 'images/media/2020/01/s3NIE26709.jpg', NULL, NULL),
(1100, 427, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029665s3NIE26709.jpg', NULL, NULL),
(1101, 427, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029665s3NIE26709.jpg', NULL, NULL),
(1102, 428, 'ACTUAL', 400, 420, 'images/media/2020/01/FHpqo26209.jpg', NULL, NULL),
(1103, 428, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029665FHpqo26209.jpg', NULL, NULL),
(1104, 428, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029665FHpqo26209.jpg', NULL, NULL),
(1105, 429, 'ACTUAL', 400, 420, 'images/media/2020/01/piCSe26109.jpg', NULL, NULL),
(1106, 429, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029666piCSe26109.jpg', NULL, NULL),
(1107, 429, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029666piCSe26109.jpg', NULL, NULL),
(1108, 430, 'ACTUAL', 400, 420, 'images/media/2020/01/y8rED26109.jpg', NULL, NULL),
(1109, 430, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029666y8rED26109.jpg', NULL, NULL),
(1110, 430, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029666y8rED26109.jpg', NULL, NULL),
(1111, 431, 'ACTUAL', 400, 420, 'images/media/2020/01/wXE3x26709.jpg', NULL, NULL),
(1112, 431, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029667wXE3x26709.jpg', NULL, NULL),
(1113, 431, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029667wXE3x26709.jpg', NULL, NULL),
(1114, 432, 'ACTUAL', 400, 420, 'images/media/2020/01/x0Yow26509.jpg', NULL, NULL),
(1115, 432, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029667x0Yow26509.jpg', NULL, NULL),
(1116, 432, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029667x0Yow26509.jpg', NULL, NULL),
(1117, 433, 'ACTUAL', 400, 420, 'images/media/2020/01/182VR26509.jpg', NULL, NULL),
(1118, 433, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029667182VR26509.jpg', NULL, NULL),
(1119, 433, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029667182VR26509.jpg', NULL, NULL),
(1120, 434, 'ACTUAL', 400, 420, 'images/media/2020/01/uGATS26909.jpg', NULL, NULL),
(1121, 434, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029668uGATS26909.jpg', NULL, NULL),
(1122, 434, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029668uGATS26909.jpg', NULL, NULL),
(1123, 435, 'ACTUAL', 400, 420, 'images/media/2020/01/Wl7Dd26909.jpg', NULL, NULL),
(1124, 435, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029669Wl7Dd26909.jpg', NULL, NULL),
(1125, 435, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029669Wl7Dd26909.jpg', NULL, NULL),
(1126, 437, 'ACTUAL', 400, 420, 'images/media/2020/01/oGbeP26609.jpg', NULL, NULL),
(1127, 436, 'ACTUAL', 400, 420, 'images/media/2020/01/VW7yI26109.jpg', NULL, NULL),
(1128, 437, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029669oGbeP26609.jpg', NULL, NULL),
(1129, 436, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029669VW7yI26109.jpg', NULL, NULL),
(1130, 437, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029669oGbeP26609.jpg', NULL, NULL),
(1131, 436, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029669VW7yI26109.jpg', NULL, NULL),
(1132, 438, 'ACTUAL', 400, 420, 'images/media/2020/01/ubSqE26509.jpg', NULL, NULL),
(1133, 438, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029670ubSqE26509.jpg', NULL, NULL),
(1134, 438, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029670ubSqE26509.jpg', NULL, NULL),
(1135, 439, 'ACTUAL', 400, 420, 'images/media/2020/01/C8VUJ26309.jpg', NULL, NULL),
(1136, 439, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029672C8VUJ26309.jpg', NULL, NULL),
(1137, 439, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029672C8VUJ26309.jpg', NULL, NULL),
(1138, 440, 'ACTUAL', 400, 420, 'images/media/2020/01/CF57F26709.jpg', NULL, NULL),
(1139, 440, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029672CF57F26709.jpg', NULL, NULL),
(1140, 440, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029672CF57F26709.jpg', NULL, NULL),
(1141, 441, 'ACTUAL', 400, 420, 'images/media/2020/01/ROabh26409.jpg', NULL, NULL),
(1142, 441, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029673ROabh26409.jpg', NULL, NULL),
(1143, 441, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029673ROabh26409.jpg', NULL, NULL),
(1144, 442, 'ACTUAL', 400, 420, 'images/media/2020/01/BZhc326809.jpg', NULL, NULL),
(1145, 443, 'ACTUAL', 400, 420, 'images/media/2020/01/HcszO26209.jpg', NULL, NULL),
(1146, 442, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029712BZhc326809.jpg', NULL, NULL),
(1147, 443, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029712HcszO26209.jpg', NULL, NULL),
(1148, 442, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029712BZhc326809.jpg', NULL, NULL),
(1149, 443, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029712HcszO26209.jpg', NULL, NULL),
(1150, 444, 'ACTUAL', 400, 420, 'images/media/2020/01/SChpV26509.jpg', NULL, NULL),
(1151, 444, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029712SChpV26509.jpg', NULL, NULL),
(1152, 444, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029713SChpV26509.jpg', NULL, NULL),
(1153, 445, 'ACTUAL', 400, 420, 'images/media/2020/01/J16Ls26909.jpg', NULL, NULL),
(1154, 445, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029713J16Ls26909.jpg', NULL, NULL),
(1155, 445, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029713J16Ls26909.jpg', NULL, NULL),
(1156, 446, 'ACTUAL', 400, 420, 'images/media/2020/01/koRm126109.jpg', NULL, NULL),
(1157, 446, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029713koRm126109.jpg', NULL, NULL),
(1158, 446, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029713koRm126109.jpg', NULL, NULL),
(1159, 447, 'ACTUAL', 400, 420, 'images/media/2020/01/eRQsg26509.jpg', NULL, NULL),
(1160, 447, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029714eRQsg26509.jpg', NULL, NULL),
(1161, 447, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029714eRQsg26509.jpg', NULL, NULL),
(1162, 448, 'ACTUAL', 400, 420, 'images/media/2020/01/VnXhr26709.jpg', NULL, NULL),
(1163, 448, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029714VnXhr26709.jpg', NULL, NULL),
(1164, 448, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029714VnXhr26709.jpg', NULL, NULL),
(1165, 449, 'ACTUAL', 400, 420, 'images/media/2020/01/nwoHw26209.jpg', NULL, NULL),
(1166, 449, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029714nwoHw26209.jpg', NULL, NULL),
(1167, 449, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029714nwoHw26209.jpg', NULL, NULL),
(1168, 451, 'ACTUAL', 400, 420, 'images/media/2020/01/3brhg26409.jpg', NULL, NULL),
(1169, 450, 'ACTUAL', 400, 420, 'images/media/2020/01/eupPd26909.jpg', NULL, NULL),
(1170, 451, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297153brhg26409.jpg', NULL, NULL),
(1171, 450, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029715eupPd26909.jpg', NULL, NULL),
(1172, 451, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297153brhg26409.jpg', NULL, NULL),
(1173, 450, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029715eupPd26909.jpg', NULL, NULL),
(1174, 452, 'ACTUAL', 400, 420, 'images/media/2020/01/3zPBP26809.jpg', NULL, NULL),
(1175, 452, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297153zPBP26809.jpg', NULL, NULL),
(1176, 452, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297153zPBP26809.jpg', NULL, NULL),
(1177, 453, 'ACTUAL', 400, 420, 'images/media/2020/01/wLLl526909.jpg', NULL, NULL),
(1178, 453, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029715wLLl526909.jpg', NULL, NULL),
(1179, 454, 'ACTUAL', 400, 420, 'images/media/2020/01/v9JGu26409.jpg', NULL, NULL),
(1180, 454, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029716v9JGu26409.jpg', NULL, NULL),
(1181, 454, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029716v9JGu26409.jpg', NULL, NULL),
(1182, 455, 'ACTUAL', 400, 420, 'images/media/2020/01/Lw7a926409.jpg', NULL, NULL),
(1183, 455, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029717Lw7a926409.jpg', NULL, NULL),
(1184, 456, 'ACTUAL', 400, 420, 'images/media/2020/01/0qqEL26809.jpg', NULL, NULL),
(1185, 455, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029717Lw7a926409.jpg', NULL, NULL),
(1186, 456, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297170qqEL26809.jpg', NULL, NULL),
(1187, 456, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297170qqEL26809.jpg', NULL, NULL),
(1188, 457, 'ACTUAL', 400, 420, 'images/media/2020/01/AQ52T26409.jpg', NULL, NULL),
(1189, 457, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029717AQ52T26409.jpg', NULL, NULL),
(1190, 457, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029717AQ52T26409.jpg', NULL, NULL),
(1191, 458, 'ACTUAL', 400, 420, 'images/media/2020/01/LbihH26309.jpg', NULL, NULL),
(1192, 458, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029717LbihH26309.jpg', NULL, NULL),
(1193, 458, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029717LbihH26309.jpg', NULL, NULL),
(1194, 459, 'ACTUAL', 400, 420, 'images/media/2020/01/tWoFT26409.jpg', NULL, NULL),
(1195, 459, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029718tWoFT26409.jpg', NULL, NULL),
(1196, 459, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029718tWoFT26409.jpg', NULL, NULL),
(1197, 460, 'ACTUAL', 400, 420, 'images/media/2020/01/raeJk26509.jpg', NULL, NULL),
(1198, 460, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029718raeJk26509.jpg', NULL, NULL),
(1199, 460, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029718raeJk26509.jpg', NULL, NULL),
(1200, 461, 'ACTUAL', 400, 420, 'images/media/2020/01/vQvUc26509.jpg', NULL, NULL),
(1201, 461, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029719vQvUc26509.jpg', NULL, NULL),
(1202, 461, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029719vQvUc26509.jpg', NULL, NULL),
(1203, 462, 'ACTUAL', 400, 420, 'images/media/2020/01/9guxO26309.jpg', NULL, NULL),
(1204, 462, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297519guxO26309.jpg', NULL, NULL),
(1205, 462, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297519guxO26309.jpg', NULL, NULL),
(1206, 463, 'ACTUAL', 400, 420, 'images/media/2020/01/h0sx826709.jpg', NULL, NULL),
(1207, 463, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029751h0sx826709.jpg', NULL, NULL),
(1208, 463, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029751h0sx826709.jpg', NULL, NULL),
(1209, 464, 'ACTUAL', 400, 420, 'images/media/2020/01/MMzh126609.jpg', NULL, NULL),
(1210, 464, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029752MMzh126609.jpg', NULL, NULL),
(1211, 464, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029752MMzh126609.jpg', NULL, NULL),
(1212, 465, 'ACTUAL', 400, 420, 'images/media/2020/01/7rLPU26809.jpg', NULL, NULL),
(1213, 465, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297527rLPU26809.jpg', NULL, NULL),
(1214, 465, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297527rLPU26809.jpg', NULL, NULL),
(1215, 466, 'ACTUAL', 400, 420, 'images/media/2020/01/4nNB326909.jpg', NULL, NULL),
(1216, 466, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297524nNB326909.jpg', NULL, NULL),
(1217, 466, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297524nNB326909.jpg', NULL, NULL),
(1218, 467, 'ACTUAL', 400, 420, 'images/media/2020/01/4NIT526609.jpg', NULL, NULL),
(1219, 467, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297524NIT526609.jpg', NULL, NULL),
(1220, 467, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297534NIT526609.jpg', NULL, NULL),
(1221, 468, 'ACTUAL', 400, 420, 'images/media/2020/01/1ZLgP26509.jpg', NULL, NULL),
(1222, 468, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297531ZLgP26509.jpg', NULL, NULL),
(1223, 468, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297531ZLgP26509.jpg', NULL, NULL),
(1224, 469, 'ACTUAL', 400, 420, 'images/media/2020/01/oOCz426309.jpg', NULL, NULL),
(1225, 470, 'ACTUAL', 400, 420, 'images/media/2020/01/poNZD26609.jpg', NULL, NULL),
(1226, 469, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029753oOCz426309.jpg', NULL, NULL),
(1227, 470, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029753poNZD26609.jpg', NULL, NULL),
(1228, 469, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029753oOCz426309.jpg', NULL, NULL),
(1229, 470, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029753poNZD26609.jpg', NULL, NULL),
(1230, 471, 'ACTUAL', 400, 420, 'images/media/2020/01/9FVXr26809.jpg', NULL, NULL),
(1231, 471, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297549FVXr26809.jpg', NULL, NULL),
(1232, 472, 'ACTUAL', 400, 420, 'images/media/2020/01/Vk3lk26109.jpg', NULL, NULL),
(1233, 471, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297549FVXr26809.jpg', NULL, NULL),
(1234, 472, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029754Vk3lk26109.jpg', NULL, NULL),
(1235, 472, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029754Vk3lk26109.jpg', NULL, NULL),
(1236, 473, 'ACTUAL', 400, 420, 'images/media/2020/01/zAUqs26609.jpg', NULL, NULL),
(1237, 473, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029754zAUqs26609.jpg', NULL, NULL),
(1238, 473, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029754zAUqs26609.jpg', NULL, NULL),
(1239, 474, 'ACTUAL', 400, 420, 'images/media/2020/01/oGWVN26909.jpg', NULL, NULL),
(1240, 474, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029755oGWVN26909.jpg', NULL, NULL),
(1241, 474, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029755oGWVN26909.jpg', NULL, NULL),
(1242, 475, 'ACTUAL', 400, 420, 'images/media/2020/01/c5iOb26209.jpg', NULL, NULL),
(1243, 475, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029755c5iOb26209.jpg', NULL, NULL),
(1244, 475, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029755c5iOb26209.jpg', NULL, NULL),
(1245, 476, 'ACTUAL', 400, 420, 'images/media/2020/01/UD1Xs26209.jpg', NULL, NULL),
(1246, 476, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029756UD1Xs26209.jpg', NULL, NULL),
(1247, 476, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029756UD1Xs26209.jpg', NULL, NULL),
(1248, 477, 'ACTUAL', 400, 420, 'images/media/2020/01/9UdGF26709.jpg', NULL, NULL),
(1249, 477, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15800297569UdGF26709.jpg', NULL, NULL),
(1250, 477, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15800297569UdGF26709.jpg', NULL, NULL),
(1251, 478, 'ACTUAL', 400, 420, 'images/media/2020/01/oGGww26709.jpg', NULL, NULL),
(1252, 478, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029757oGGww26709.jpg', NULL, NULL),
(1253, 478, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029757oGGww26709.jpg', NULL, NULL),
(1254, 479, 'ACTUAL', 400, 420, 'images/media/2020/01/xkLFO26509.jpg', NULL, NULL),
(1255, 479, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029757xkLFO26509.jpg', NULL, NULL),
(1256, 479, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029757xkLFO26509.jpg', NULL, NULL),
(1257, 480, 'ACTUAL', 400, 420, 'images/media/2020/01/X6JgO26909.jpg', NULL, NULL),
(1258, 480, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029758X6JgO26909.jpg', NULL, NULL),
(1259, 480, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029758X6JgO26909.jpg', NULL, NULL),
(1260, 481, 'ACTUAL', 400, 420, 'images/media/2020/01/eQBja26509.jpg', NULL, NULL),
(1261, 481, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029758eQBja26509.jpg', NULL, NULL),
(1262, 481, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029758eQBja26509.jpg', NULL, NULL),
(1263, 483, 'ACTUAL', 400, 420, 'images/media/2020/01/dCkEE26309.jpg', NULL, NULL),
(1264, 482, 'ACTUAL', 400, 420, 'images/media/2020/01/GL3Mw26209.jpg', NULL, NULL),
(1265, 483, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029804dCkEE26309.jpg', NULL, NULL),
(1266, 482, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580029804GL3Mw26209.jpg', NULL, NULL),
(1267, 483, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029804dCkEE26309.jpg', NULL, NULL),
(1268, 482, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580029804GL3Mw26209.jpg', NULL, NULL),
(1269, 484, 'ACTUAL', 430, 410, 'images/media/2020/01/QXAKX26910.jpg', NULL, NULL),
(1270, 484, 'THUMBNAIL', 400, 381, 'images/media/2020/01/thumbnail1580036061QXAKX26910.jpg', NULL, NULL),
(1271, 484, 'MEDIUM', 400, 381, 'images/media/2020/01/medium1580036061QXAKX26910.jpg', NULL, NULL),
(1272, 485, 'ACTUAL', 284, 250, 'images/media/2020/01/XaTxI26511.jpg', NULL, NULL),
(1276, 487, 'ACTUAL', 284, 250, 'images/media/2020/01/C7s1B26611.jpg', NULL, NULL),
(1278, 489, 'ACTUAL', 284, 250, 'images/media/2020/01/28F2E28708.jpg', NULL, NULL),
(1282, 490, 'ACTUAL', 284, 250, 'images/media/2020/01/BqvAV28708.jpg', NULL, NULL),
(1283, 491, 'ACTUAL', 421, 1600, 'images/media/2020/01/7ImXD28608.jpg', NULL, NULL),
(1284, 492, 'ACTUAL', 421, 1600, 'images/media/2020/01/WZMkB28808.jpg', NULL, NULL),
(1285, 491, 'THUMBNAIL', 105, 400, 'images/media/2020/01/thumbnail15802009597ImXD28608.jpg', NULL, NULL),
(1286, 492, 'THUMBNAIL', 105, 400, 'images/media/2020/01/thumbnail1580200959WZMkB28808.jpg', NULL, NULL),
(1287, 491, 'MEDIUM', 105, 400, 'images/media/2020/01/medium15802009597ImXD28608.jpg', NULL, NULL),
(1288, 492, 'MEDIUM', 105, 400, 'images/media/2020/01/medium1580200959WZMkB28808.jpg', NULL, NULL),
(1289, 491, 'LARGE', 237, 900, 'images/media/2020/01/large15802009597ImXD28608.jpg', NULL, NULL),
(1290, 492, 'LARGE', 237, 900, 'images/media/2020/01/large1580200959WZMkB28808.jpg', NULL, NULL),
(1291, 493, 'ACTUAL', 400, 420, 'images/media/2020/01/ARce028808.jpg', NULL, NULL),
(1292, 493, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200987ARce028808.jpg', NULL, NULL),
(1293, 493, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200987ARce028808.jpg', NULL, NULL),
(1294, 494, 'ACTUAL', 400, 420, 'images/media/2020/01/9hRh128308.jpg', NULL, NULL),
(1295, 494, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail15802009879hRh128308.jpg', NULL, NULL),
(1296, 494, 'MEDIUM', 381, 400, 'images/media/2020/01/medium15802009879hRh128308.jpg', NULL, NULL),
(1297, 495, 'ACTUAL', 400, 420, 'images/media/2020/01/mrdo728508.jpg', NULL, NULL),
(1298, 495, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200987mrdo728508.jpg', NULL, NULL),
(1299, 496, 'ACTUAL', 400, 420, 'images/media/2020/01/Fe4L328308.jpg', NULL, NULL),
(1300, 495, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200987mrdo728508.jpg', NULL, NULL),
(1301, 496, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200987Fe4L328308.jpg', NULL, NULL),
(1302, 496, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200987Fe4L328308.jpg', NULL, NULL),
(1303, 497, 'ACTUAL', 400, 420, 'images/media/2020/01/80DcV28808.jpg', NULL, NULL),
(1304, 497, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail158020098880DcV28808.jpg', NULL, NULL),
(1305, 497, 'MEDIUM', 381, 400, 'images/media/2020/01/medium158020098880DcV28808.jpg', NULL, NULL),
(1306, 498, 'ACTUAL', 400, 420, 'images/media/2020/01/rubpf28308.jpg', NULL, NULL),
(1307, 498, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200988rubpf28308.jpg', NULL, NULL),
(1308, 498, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200988rubpf28308.jpg', NULL, NULL),
(1309, 499, 'ACTUAL', 400, 420, 'images/media/2020/01/LylU628608.jpg', NULL, NULL),
(1310, 499, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200988LylU628608.jpg', NULL, NULL),
(1311, 499, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200988LylU628608.jpg', NULL, NULL),
(1312, 500, 'ACTUAL', 400, 420, 'images/media/2020/01/u6Zmx28208.jpg', NULL, NULL),
(1313, 500, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200988u6Zmx28208.jpg', NULL, NULL),
(1314, 500, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200988u6Zmx28208.jpg', NULL, NULL),
(1315, 501, 'ACTUAL', 400, 420, 'images/media/2020/01/OWcno28508.jpg', NULL, NULL),
(1316, 501, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200989OWcno28508.jpg', NULL, NULL),
(1317, 501, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200989OWcno28508.jpg', NULL, NULL),
(1318, 502, 'ACTUAL', 400, 420, 'images/media/2020/01/GtA6I28508.jpg', NULL, NULL),
(1319, 502, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200989GtA6I28508.jpg', NULL, NULL),
(1320, 502, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200989GtA6I28508.jpg', NULL, NULL),
(1321, 503, 'ACTUAL', 400, 420, 'images/media/2020/01/bEGZQ28308.jpg', NULL, NULL),
(1322, 503, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200989bEGZQ28308.jpg', NULL, NULL),
(1323, 504, 'ACTUAL', 400, 420, 'images/media/2020/01/nOyzk28808.jpg', NULL, NULL),
(1324, 503, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200989bEGZQ28308.jpg', NULL, NULL),
(1325, 504, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200989nOyzk28808.jpg', NULL, NULL),
(1326, 504, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200989nOyzk28808.jpg', NULL, NULL),
(1327, 505, 'ACTUAL', 400, 420, 'images/media/2020/01/XouLV28608.jpg', NULL, NULL),
(1328, 505, 'THUMBNAIL', 381, 400, 'images/media/2020/01/thumbnail1580200989XouLV28608.jpg', NULL, NULL),
(1329, 505, 'MEDIUM', 381, 400, 'images/media/2020/01/medium1580200990XouLV28608.jpg', NULL, NULL),
(1330, 506, 'ACTUAL', 284, 250, 'images/media/2020/01/F84bS28209.jpg', NULL, NULL),
(1331, 507, 'ACTUAL', 284, 250, 'images/media/2020/01/DjUiJ28301.jpg', NULL, NULL),
(1334, 510, 'ACTUAL', 284, 250, 'images/media/2020/01/Csi8p28201.jpg', NULL, NULL),
(1335, 511, 'ACTUAL', 284, 250, 'images/media/2020/01/kZ0qv28301.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_ref_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `added_date` int(11) NOT NULL,
  `reference_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `purchase_price` decimal(10,2) NOT NULL,
  `stock_type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_ref_id`, `admin_id`, `added_date`, `reference_code`, `stock`, `products_id`, `purchase_price`, `stock_type`, `created_at`, `updated_at`) VALUES
(1, 3, 0, '2', 2, 1, '499.00', 'in', '2020-01-12 15:08:58', NULL),
(2, 3, 0, '2', 2, 1, '499.00', 'in', '2020-01-12 15:09:18', NULL),
(3, 3, 0, '2', 2, 1, '499.00', 'in', '2020-01-12 15:10:00', NULL),
(4, 3, 0, '2', 2, 1, '499.00', 'in', '2020-01-12 15:10:23', NULL),
(5, 3, 0, '2', 2, 1, '499.00', 'in', '2020-01-12 15:10:37', NULL),
(6, 0, 1578826704, '', 1, 1, '0.00', 'out', NULL, NULL),
(7, 0, 1578826818, '', 1, 1, '0.00', 'out', NULL, NULL),
(8, 1, 0, '1000', 10, 1, '100.00', 'in', '2020-01-12 16:07:24', NULL),
(9, 0, 1578827330, '', 1, 1, '0.00', 'out', NULL, NULL),
(10, 0, 1578827797, '', 1, 1, '0.00', 'out', NULL, NULL),
(11, 0, 1578827868, '', 1, 1, '0.00', 'out', NULL, NULL),
(12, 0, 1578827992, '', 1, 1, '0.00', 'out', NULL, NULL),
(13, 0, 1578828131, '', 1, 1, '0.00', 'out', NULL, NULL),
(14, 0, 1578828270, '', 1, 1, '0.00', 'out', NULL, NULL),
(15, 0, 1578828369, '', 1, 1, '0.00', 'out', NULL, NULL),
(16, 0, 1578828636, '', 1, 1, '0.00', 'out', NULL, NULL),
(17, 0, 1578828811, '', 1, 1, '0.00', 'out', NULL, NULL),
(18, 0, 1578829041, '', 1, 1, '0.00', 'out', NULL, NULL),
(19, 1, 0, 'dk', 100, 1, '599000.00', 'in', '2020-01-12 16:40:13', NULL),
(20, 0, 1578829292, '', 1, 1, '0.00', 'out', NULL, NULL),
(21, 0, 1578829397, '', 1, 1, '0.00', 'out', NULL, NULL),
(22, 0, 1578829496, '', 1, 1, '0.00', 'out', NULL, NULL),
(23, 0, 1578829950, '', 1, 1, '0.00', 'out', NULL, NULL),
(24, 0, 1578830106, '', 1, 1, '0.00', 'out', NULL, NULL),
(25, 0, 1578830152, '', 1, 1, '0.00', 'out', NULL, NULL),
(26, 0, 1578831947, '', 1, 1, '0.00', 'out', NULL, NULL),
(27, 0, 1578838666, '', 1, 1, '0.00', 'out', NULL, NULL),
(28, 3, 0, '', 1, 1, '0.00', 'in', '2020-01-12 09:20:15', NULL),
(29, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 2, 2, '250.00', 'in', '2020-01-13 09:48:53', NULL),
(30, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 3, '250.00', 'in', '2020-01-14 06:29:29', NULL),
(31, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 3, '250.00', 'in', '2020-01-14 06:29:42', NULL),
(32, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 3, '250.00', 'in', '2020-01-14 06:29:56', NULL),
(33, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 3, '250.00', 'in', '2020-01-14 06:30:17', NULL),
(34, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 3, '250.00', 'in', '2020-01-14 06:30:41', NULL),
(35, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 4, '250.00', 'in', '2020-01-14 06:36:04', NULL),
(36, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 4, '200.00', 'in', '2020-01-14 06:36:23', NULL),
(37, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 4, '200.00', 'in', '2020-01-14 06:36:37', NULL),
(38, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 4, '200.00', 'in', '2020-01-14 06:36:52', NULL),
(39, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 4, '250.00', 'in', '2020-01-14 06:37:05', NULL),
(40, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 3, '200.00', 'in', '2020-01-14 06:37:34', NULL),
(41, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 5, '200.00', 'in', '2020-01-14 06:43:35', NULL),
(42, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 5, '200.00', 'in', '2020-01-14 06:43:47', NULL),
(43, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 5, '200.00', 'in', '2020-01-14 06:44:06', NULL),
(44, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 5, '200.00', 'in', '2020-01-14 06:44:26', NULL),
(45, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 5, '200.00', 'in', '2020-01-14 06:44:44', NULL),
(46, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 6, '250.00', 'in', '2020-01-16 14:12:42', NULL),
(47, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 6, '250.00', 'in', '2020-01-16 14:13:19', NULL),
(48, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 6, '250.00', 'in', '2020-01-16 14:13:27', NULL),
(49, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 6, '250.00', 'in', '2020-01-16 14:14:00', NULL),
(50, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 6, '250.00', 'in', '2020-01-16 14:31:09', NULL),
(51, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 6, '250.00', 'in', '2020-01-16 14:31:23', NULL),
(52, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 6, '250.00', 'in', '2020-01-16 14:31:40', NULL),
(53, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 6, '250.00', 'in', '2020-01-16 14:31:59', NULL),
(54, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 7, '250.00', 'in', '2020-01-16 14:45:04', NULL),
(55, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 7, '250.00', 'in', '2020-01-16 14:45:17', NULL),
(56, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 7, '250.00', 'in', '2020-01-16 14:45:36', NULL),
(57, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 7, '250.00', 'in', '2020-01-16 14:45:52', NULL),
(58, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 7, '250.00', 'in', '2020-01-16 14:46:05', NULL),
(59, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 7, '250.00', 'in', '2020-01-16 14:46:20', NULL),
(60, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 8, '250.00', 'in', '2020-01-16 14:51:30', NULL),
(61, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 8, '250.00', 'in', '2020-01-16 14:51:45', NULL),
(62, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 8, '250.00', 'in', '2020-01-16 14:52:01', NULL),
(63, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 8, '250.00', 'in', '2020-01-16 14:52:14', NULL),
(64, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 8, '250.00', 'in', '2020-01-16 14:52:29', NULL),
(65, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 9, '250.00', 'in', '2020-01-16 14:56:36', NULL),
(66, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 9, '250.00', 'in', '2020-01-16 14:56:48', NULL),
(67, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 9, '250.00', 'in', '2020-01-16 14:57:06', NULL),
(68, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 9, '2500.00', 'in', '2020-01-16 14:57:30', NULL),
(69, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 9, '2500.00', 'in', '2020-01-16 14:57:43', NULL),
(70, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 10, '250.00', 'in', '2020-01-16 15:02:40', NULL),
(71, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 10, '250.00', 'in', '2020-01-16 15:02:55', NULL),
(72, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 10, '2500.00', 'in', '2020-01-16 15:03:08', NULL),
(73, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 10, '2500.00', 'in', '2020-01-16 15:03:28', NULL),
(74, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 10, '2500.00', 'in', '2020-01-16 15:03:45', NULL),
(75, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 11, '2500.00', 'in', '2020-01-16 15:15:08', NULL),
(76, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 11, '2500.00', 'in', '2020-01-16 15:15:20', NULL),
(77, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 11, '2500.00', 'in', '2020-01-16 15:15:33', NULL),
(78, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 11, '2500.00', 'in', '2020-01-16 15:15:47', NULL),
(79, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 11, '2500.00', 'in', '2020-01-16 15:15:59', NULL),
(80, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 12, '2500.00', 'in', '2020-01-16 15:22:21', NULL),
(81, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 12, '2500.00', 'in', '2020-01-16 15:22:34', NULL),
(82, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 12, '2500.00', 'in', '2020-01-16 15:22:46', NULL),
(83, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 12, '2500.00', 'in', '2020-01-16 15:22:59', NULL),
(84, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 12, '2500.00', 'in', '2020-01-16 15:23:11', NULL),
(85, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 13, '2500.00', 'in', '2020-01-16 15:32:22', NULL),
(86, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 13, '2500.00', 'in', '2020-01-16 15:32:35', NULL),
(87, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 13, '2500.00', 'in', '2020-01-16 15:32:53', NULL),
(88, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 13, '2500.00', 'in', '2020-01-16 15:33:09', NULL),
(89, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 13, '2500.00', 'in', '2020-01-16 15:33:25', NULL),
(90, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 14, '2500.00', 'in', '2020-01-16 15:40:18', NULL),
(91, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 14, '2500.00', 'in', '2020-01-16 15:40:30', NULL),
(92, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 14, '2500.00', 'in', '2020-01-16 15:40:48', NULL),
(93, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 14, '2500.00', 'in', '2020-01-16 15:41:04', NULL),
(94, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 14, '2500.00', 'in', '2020-01-16 15:41:17', NULL),
(95, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 15, '2500.00', 'in', '2020-01-16 15:44:41', NULL),
(96, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 15, '2500.00', 'in', '2020-01-16 15:44:53', NULL),
(97, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 15, '2500.00', 'in', '2020-01-16 15:45:08', NULL),
(98, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 15, '2500.00', 'in', '2020-01-16 15:45:22', NULL),
(99, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 15, '2500.00', 'in', '2020-01-16 15:45:34', NULL),
(100, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 16, '2000.00', 'in', '2020-01-16 15:51:42', NULL),
(101, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 16, '2000.00', 'in', '2020-01-16 15:51:55', NULL),
(102, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 16, '2000.00', 'in', '2020-01-16 15:52:16', NULL),
(103, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 16, '2000.00', 'in', '2020-01-16 15:52:32', NULL),
(104, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 16, '2000.00', 'in', '2020-01-16 15:52:44', NULL),
(105, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 17, '2000.00', 'in', '2020-01-16 15:57:25', NULL),
(106, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 17, '2000.00', 'in', '2020-01-16 15:57:40', NULL),
(107, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 17, '2000.00', 'in', '2020-01-16 15:57:53', NULL),
(108, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 17, '2000.00', 'in', '2020-01-16 15:58:06', NULL),
(109, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 17, '2000.00', 'in', '2020-01-16 15:58:20', NULL),
(110, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 18, '2500.00', 'in', '2020-01-16 16:03:16', NULL),
(111, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 18, '2500.00', 'in', '2020-01-16 16:03:30', NULL),
(112, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 18, '2500.00', 'in', '2020-01-16 16:03:43', NULL),
(113, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 18, '2500.00', 'in', '2020-01-16 16:03:57', NULL),
(114, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 18, '2500.00', 'in', '2020-01-16 16:04:10', NULL),
(115, 0, 1579318929, '', 1, 13, '0.00', 'out', NULL, NULL),
(116, 0, 1579519942, '', 1, 18, '0.00', 'out', NULL, NULL),
(117, 0, 1579520059, '', 1, 11, '0.00', 'out', NULL, NULL),
(118, 0, 1579520160, '', 1, 18, '0.00', 'out', NULL, NULL),
(119, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 20, '2000.00', 'in', '2020-01-20 17:54:10', NULL),
(120, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 20, '2000.00', 'in', '2020-01-20 17:54:24', NULL),
(121, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 20, '2000.00', 'in', '2020-01-20 17:54:40', NULL),
(122, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 22, '2000.00', 'in', '2020-01-20 17:54:56', NULL),
(123, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 20, '2000.00', 'in', '2020-01-20 17:55:11', NULL),
(124, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 21, '2500.00', 'in', '2020-01-20 17:55:38', NULL),
(125, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 21, '2500.00', 'in', '2020-01-20 17:55:50', NULL),
(126, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 21, '2500.00', 'in', '2020-01-20 17:56:05', NULL),
(127, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 21, '2500.00', 'in', '2020-01-20 17:56:18', NULL),
(128, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 21, '2500.00', 'in', '2020-01-20 17:56:34', NULL),
(129, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 22, '2500.00', 'in', '2020-01-20 17:56:46', NULL),
(130, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 22, '2500.00', 'in', '2020-01-20 17:56:58', NULL),
(131, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 22, '2500.00', 'in', '2020-01-20 17:57:16', NULL),
(132, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 22, '2500.00', 'in', '2020-01-20 17:57:30', NULL),
(133, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 23, '2500.00', 'in', '2020-01-20 06:18:47', NULL),
(134, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 23, '2500.00', 'in', '2020-01-20 06:19:05', NULL),
(135, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 23, '2500.00', 'in', '2020-01-20 06:19:20', NULL),
(136, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 23, '2500.00', 'in', '2020-01-20 06:19:26', NULL),
(137, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 23, '2500.00', 'in', '2020-01-20 06:19:36', NULL),
(138, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 23, '2500.00', 'in', '2020-01-20 06:20:22', NULL),
(139, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 23, '2500.00', 'in', '2020-01-20 06:20:45', NULL),
(140, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 23, '2500.00', 'in', '2020-01-20 06:21:00', NULL),
(141, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 24, '2500.00', 'in', '2020-01-20 06:51:40', NULL),
(142, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 24, '2500.00', 'in', '2020-01-20 06:51:54', NULL),
(143, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 24, '2500.00', 'in', '2020-01-20 06:52:08', NULL),
(144, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 24, '2500.00', 'in', '2020-01-20 06:52:25', NULL),
(145, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 24, '2500.00', 'in', '2020-01-20 06:52:38', NULL),
(146, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 25, '2500.00', 'in', '2020-01-20 07:03:57', NULL),
(147, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 25, '2500.00', 'in', '2020-01-20 07:04:12', NULL),
(148, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 25, '2500.00', 'in', '2020-01-20 07:05:11', NULL),
(149, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 25, '2500.00', 'in', '2020-01-20 07:05:56', NULL),
(150, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 25, '2500.00', 'in', '2020-01-20 07:06:14', NULL),
(151, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 26, '2500.00', 'in', '2020-01-20 07:15:31', NULL),
(152, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 26, '2500.00', 'in', '2020-01-20 07:15:46', NULL),
(153, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 26, '2500.00', 'in', '2020-01-20 07:16:01', NULL),
(154, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 26, '2500.00', 'in', '2020-01-20 07:16:22', NULL),
(155, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 26, '2500.00', 'in', '2020-01-20 07:16:36', NULL),
(156, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 27, '2500.00', 'in', '2020-01-20 07:24:27', NULL),
(157, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 27, '2500.00', 'in', '2020-01-20 07:24:44', NULL),
(158, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 27, '2500.00', 'in', '2020-01-20 07:24:57', NULL),
(159, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 27, '2500.00', 'in', '2020-01-20 07:25:17', NULL),
(160, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 27, '2500.00', 'in', '2020-01-20 07:25:33', NULL),
(161, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 29, '2500.00', 'in', '2020-01-20 07:37:03', NULL),
(162, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 29, '2500.00', 'in', '2020-01-20 07:37:23', NULL),
(163, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 29, '2500.00', 'in', '2020-01-20 07:37:36', NULL),
(164, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 29, '2500.00', 'in', '2020-01-20 07:37:51', NULL),
(165, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 29, '2500.00', 'in', '2020-01-20 07:38:06', NULL),
(166, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 30, '2500.00', 'in', '2020-01-20 07:48:09', NULL),
(167, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 30, '2500.00', 'in', '2020-01-20 07:48:58', NULL),
(168, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 30, '2500.00', 'in', '2020-01-20 07:49:13', NULL),
(169, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 30, '2500.00', 'in', '2020-01-20 07:49:27', NULL),
(170, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 30, '2500.00', 'in', '2020-01-20 07:49:46', NULL),
(171, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 31, '2500.00', 'in', '2020-01-20 08:07:05', NULL),
(172, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 31, '2500.00', 'in', '2020-01-20 08:07:18', NULL),
(173, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 31, '2500.00', 'in', '2020-01-20 08:07:35', NULL),
(174, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 31, '2500.00', 'in', '2020-01-20 08:08:03', NULL),
(175, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 31, '2500.00', 'in', '2020-01-20 08:08:28', NULL),
(176, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 32, '2500.00', 'in', '2020-01-20 08:18:42', NULL),
(177, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 32, '2500.00', 'in', '2020-01-20 08:19:01', NULL),
(178, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 32, '2500.00', 'in', '2020-01-20 08:19:25', NULL),
(179, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 32, '2500.00', 'in', '2020-01-20 08:19:40', NULL),
(180, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 32, '2500.00', 'in', '2020-01-20 08:19:53', NULL),
(181, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 33, '2500.00', 'in', '2020-01-20 08:51:58', NULL),
(182, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 33, '2500.00', 'in', '2020-01-20 08:52:17', NULL),
(183, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 33, '2500.00', 'in', '2020-01-20 08:52:32', NULL),
(184, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 33, '2500.00', 'in', '2020-01-20 08:52:47', NULL),
(185, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 33, '2500.00', 'in', '2020-01-20 08:53:02', NULL),
(186, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 34, '2500.00', 'in', '2020-01-20 08:59:48', NULL),
(187, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 34, '2500.00', 'in', '2020-01-20 09:00:03', NULL),
(188, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 34, '2500.00', 'in', '2020-01-20 09:00:19', NULL),
(189, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 34, '2500.00', 'in', '2020-01-20 09:00:35', NULL),
(190, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 34, '2500.00', 'in', '2020-01-20 09:00:55', NULL),
(191, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 35, '200.00', 'in', '2020-01-21 10:51:13', NULL),
(192, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 35, '2000.00', 'in', '2020-01-21 10:51:33', NULL),
(193, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 1, 35, '2000.00', 'in', '2020-01-21 10:52:04', NULL),
(194, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 35, '2000.00', 'in', '2020-01-21 10:52:25', NULL),
(195, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 35, '2000.00', 'in', '2020-01-21 10:52:46', NULL),
(196, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 35, '2000.00', 'in', '2020-01-21 10:53:08', NULL),
(197, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 36, '2000.00', 'in', '2020-01-21 11:02:24', NULL),
(198, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 36, '2000.00', 'in', '2020-01-21 11:02:40', NULL),
(199, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 36, '2000.00', 'in', '2020-01-21 11:02:56', NULL),
(200, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 36, '2000.00', 'in', '2020-01-21 11:03:11', NULL),
(201, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 36, '2000.00', 'in', '2020-01-21 11:03:28', NULL),
(202, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 38, '2500.00', 'in', '2020-01-21 11:27:02', NULL),
(203, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 38, '2500.00', 'in', '2020-01-21 11:27:17', NULL),
(204, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 38, '2500.00', 'in', '2020-01-21 11:27:36', NULL),
(205, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 38, '2500.00', 'in', '2020-01-21 11:27:49', NULL),
(206, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 38, '2500.00', 'in', '2020-01-21 11:28:28', NULL),
(207, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 39, '2500.00', 'in', '2020-01-21 11:34:54', NULL),
(208, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 39, '2500.00', 'in', '2020-01-21 11:35:07', NULL),
(209, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 39, '2500.00', 'in', '2020-01-21 11:35:51', NULL),
(210, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 39, '2500.00', 'in', '2020-01-21 11:36:07', NULL),
(211, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 39, '2500.00', 'in', '2020-01-21 11:36:21', NULL),
(212, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 41, '2500.00', 'in', '2020-01-21 12:00:25', NULL),
(213, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 41, '2500.00', 'in', '2020-01-21 12:00:46', NULL),
(214, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 41, '2500.00', 'in', '2020-01-21 12:01:01', NULL),
(215, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 41, '2500.00', 'in', '2020-01-21 12:01:35', NULL),
(216, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 41, '2500.00', 'in', '2020-01-21 12:01:56', NULL),
(217, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 40, '2500.00', 'in', '2020-01-21 12:06:37', NULL),
(218, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 40, '2500.00', 'in', '2020-01-21 12:06:58', NULL),
(219, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 40, '2500.00', 'in', '2020-01-21 12:07:14', NULL),
(220, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 40, '2500.00', 'in', '2020-01-21 12:07:31', NULL),
(221, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 40, '2500.00', 'in', '2020-01-21 12:07:46', NULL),
(222, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 37, '2500.00', 'in', '2020-01-21 12:08:19', NULL),
(223, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 37, '2500.00', 'in', '2020-01-21 12:08:33', NULL),
(224, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 37, '2500.00', 'in', '2020-01-21 12:08:47', NULL),
(225, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 37, '2500.00', 'in', '2020-01-21 12:09:03', NULL),
(226, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 37, '2500.00', 'in', '2020-01-21 12:09:15', NULL),
(227, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 42, '2500.00', 'in', '2020-01-21 11:13:09', NULL),
(228, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 42, '2500.00', 'in', '2020-01-21 11:13:22', NULL),
(229, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 42, '2500.00', 'in', '2020-01-21 11:13:37', NULL),
(230, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 42, '2500.00', 'in', '2020-01-21 11:13:52', NULL),
(231, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 42, '2500.00', 'in', '2020-01-21 11:14:06', NULL),
(232, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 43, '2500.00', 'in', '2020-01-21 11:19:23', NULL),
(233, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 43, '2500.00', 'in', '2020-01-21 11:19:37', NULL),
(234, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 43, '2500.00', 'in', '2020-01-21 11:19:50', NULL),
(235, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 43, '2500.00', 'in', '2020-01-21 11:20:07', NULL),
(236, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 43, '2500.00', 'in', '2020-01-21 11:20:21', NULL),
(237, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 44, '2500.00', 'in', '2020-01-21 11:25:37', NULL),
(238, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 44, '2500.00', 'in', '2020-01-21 11:25:51', NULL),
(239, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 44, '2500.00', 'in', '2020-01-21 11:26:03', NULL),
(240, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 44, '2500.00', 'in', '2020-01-21 11:26:16', NULL),
(241, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 44, '2500.00', 'in', '2020-01-21 11:26:30', NULL),
(242, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 45, '2500.00', 'in', '2020-01-21 11:32:42', NULL),
(243, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 45, '2500.00', 'in', '2020-01-21 11:32:55', NULL),
(244, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 45, '2500.00', 'in', '2020-01-21 11:33:08', NULL),
(245, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 45, '2500.00', 'in', '2020-01-21 11:33:22', NULL),
(246, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 45, '2500.00', 'in', '2020-01-21 11:33:36', NULL),
(247, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 46, '2500.00', 'in', '2020-01-22 11:43:54', NULL),
(248, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 46, '2500.00', 'in', '2020-01-22 11:44:08', NULL),
(249, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 46, '2500.00', 'in', '2020-01-22 11:44:29', NULL),
(250, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 46, '2500.00', 'in', '2020-01-22 11:44:43', NULL),
(251, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 46, '2500.00', 'in', '2020-01-22 11:44:56', NULL),
(252, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 47, '2500.00', 'in', '2020-01-22 11:51:12', NULL),
(253, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 47, '2500.00', 'in', '2020-01-22 11:51:23', NULL),
(254, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 47, '2500.00', 'in', '2020-01-22 11:51:38', NULL),
(255, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 47, '2500.00', 'in', '2020-01-22 11:51:52', NULL),
(256, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 47, '2500.00', 'in', '2020-01-22 11:52:05', NULL),
(257, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 47, '2500.00', 'in', '2020-01-22 11:52:06', NULL),
(258, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 48, '2500.00', 'in', '2020-01-22 12:00:48', NULL),
(259, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 48, '2500.00', 'in', '2020-01-22 12:01:03', NULL),
(260, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 48, '2500.00', 'in', '2020-01-22 12:01:16', NULL),
(261, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 48, '2500.00', 'in', '2020-01-22 12:01:29', NULL),
(262, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 48, '2500.00', 'in', '2020-01-22 12:01:41', NULL),
(263, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 49, '2500.00', 'in', '2020-01-22 12:13:04', NULL),
(264, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 49, '2500.00', 'in', '2020-01-22 12:13:22', NULL),
(265, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 49, '2500.00', 'in', '2020-01-22 12:13:37', NULL),
(266, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 49, '2500.00', 'in', '2020-01-22 12:17:15', NULL),
(267, 3, 0, 'NARESH AND COM ( ULASH NAGAR )', 10, 49, '2500.00', 'in', '2020-01-22 12:17:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory_detail`
--

CREATE TABLE `inventory_detail` (
  `inventory_ref_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventory_detail`
--

INSERT INTO `inventory_detail` (`inventory_ref_id`, `products_id`, `attribute_id`) VALUES
(1, 1, 5),
(2, 1, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 4),
(6, 1, 1),
(7, 1, 1),
(8, 1, 1),
(9, 1, 1),
(10, 1, 1),
(11, 1, 1),
(12, 1, 1),
(13, 1, 1),
(14, 1, 1),
(15, 1, 1),
(16, 1, 1),
(17, 1, 1),
(18, 1, 1),
(19, 1, 1),
(20, 1, 1),
(21, 1, 1),
(22, 1, 1),
(23, 1, 1),
(24, 1, 1),
(25, 1, 1),
(26, 1, 1),
(27, 1, 1),
(29, 2, 6),
(30, 3, 11),
(31, 3, 12),
(32, 3, 13),
(33, 3, 14),
(34, 3, 15),
(35, 4, 16),
(36, 4, 17),
(37, 4, 18),
(38, 4, 19),
(39, 4, 20),
(40, 3, 11),
(41, 5, 21),
(42, 5, 22),
(43, 5, 23),
(44, 5, 24),
(45, 5, 25),
(46, 6, 26),
(50, 6, 27),
(51, 6, 28),
(52, 6, 29),
(53, 6, 30),
(54, 7, 31),
(55, 7, 31),
(56, 7, 32),
(57, 7, 33),
(58, 7, 34),
(59, 7, 35),
(60, 8, 36),
(61, 8, 37),
(62, 8, 38),
(63, 8, 39),
(64, 8, 40),
(65, 9, 41),
(66, 9, 42),
(67, 9, 43),
(68, 9, 44),
(69, 9, 45),
(70, 10, 46),
(71, 10, 47),
(72, 10, 48),
(73, 10, 49),
(74, 10, 50),
(75, 11, 51),
(76, 11, 52),
(77, 11, 53),
(78, 11, 54),
(79, 11, 55),
(80, 12, 56),
(81, 12, 57),
(82, 12, 58),
(83, 12, 59),
(84, 12, 60),
(85, 13, 61),
(86, 13, 62),
(87, 13, 63),
(88, 13, 64),
(89, 13, 65),
(90, 14, 66),
(91, 14, 67),
(92, 14, 68),
(93, 14, 69),
(94, 14, 70),
(95, 15, 71),
(96, 15, 72),
(97, 15, 73),
(98, 15, 74),
(99, 15, 75),
(100, 16, 76),
(101, 16, 77),
(102, 16, 78),
(103, 16, 79),
(104, 16, 80),
(105, 17, 81),
(106, 17, 82),
(107, 17, 83),
(108, 17, 84),
(109, 17, 85),
(110, 18, 86),
(111, 18, 87),
(112, 18, 88),
(113, 18, 89),
(114, 18, 90),
(115, 13, 62),
(116, 18, 86),
(117, 11, 51),
(118, 18, 86),
(119, 20, 97),
(120, 20, 98),
(121, 20, 99),
(122, 22, 110),
(123, 20, 96),
(124, 21, 101),
(125, 21, 102),
(126, 21, 103),
(127, 21, 104),
(128, 21, 105),
(129, 22, 106),
(130, 22, 107),
(131, 22, 108),
(132, 22, 109),
(133, 23, 111),
(134, 23, 112),
(138, 23, 113),
(139, 23, 114),
(140, 23, 115),
(141, 24, 116),
(142, 24, 117),
(143, 24, 118),
(144, 24, 119),
(145, 24, 120),
(146, 25, 121),
(147, 25, 122),
(148, 25, 123),
(149, 25, 124),
(150, 25, 125),
(151, 26, 126),
(152, 26, 127),
(153, 26, 128),
(154, 26, 129),
(155, 26, 130),
(156, 27, 131),
(157, 27, 132),
(158, 27, 133),
(159, 27, 134),
(160, 27, 135),
(161, 29, 136),
(162, 29, 137),
(163, 29, 138),
(164, 29, 139),
(165, 29, 140),
(166, 30, 141),
(167, 30, 142),
(168, 30, 143),
(169, 30, 144),
(170, 30, 145),
(171, 31, 146),
(172, 31, 147),
(173, 31, 148),
(174, 31, 149),
(175, 31, 150),
(176, 32, 151),
(177, 32, 152),
(178, 32, 153),
(179, 32, 154),
(180, 32, 155),
(181, 33, 156),
(182, 33, 157),
(183, 33, 158),
(184, 33, 159),
(185, 33, 160),
(186, 34, 161),
(187, 34, 162),
(188, 34, 163),
(189, 34, 164),
(190, 34, 165),
(191, 35, 166),
(192, 35, 167),
(193, 35, 166),
(194, 35, 168),
(195, 35, 169),
(196, 35, 170),
(197, 36, 171),
(198, 36, 172),
(199, 36, 173),
(200, 36, 174),
(201, 36, 175),
(202, 38, 181),
(203, 38, 182),
(204, 38, 183),
(205, 38, 184),
(206, 38, 185),
(207, 39, 186),
(208, 39, 187),
(209, 39, 188),
(210, 39, 189),
(211, 39, 190),
(212, 41, 196),
(213, 41, 197),
(214, 41, 198),
(215, 41, 199),
(216, 41, 200),
(217, 40, 191),
(218, 40, 192),
(219, 40, 193),
(220, 40, 194),
(221, 40, 195),
(222, 37, 176),
(223, 37, 177),
(224, 37, 178),
(225, 37, 179),
(226, 37, 180),
(227, 42, 201),
(228, 42, 202),
(229, 42, 203),
(230, 42, 204),
(231, 42, 205),
(232, 43, 206),
(233, 43, 207),
(234, 43, 208),
(235, 43, 209),
(236, 43, 210),
(237, 44, 211),
(238, 44, 212),
(239, 44, 213),
(240, 44, 214),
(241, 44, 215),
(242, 45, 216),
(243, 45, 217),
(244, 45, 218),
(245, 45, 219),
(246, 45, 220),
(247, 46, 221),
(248, 46, 222),
(249, 46, 223),
(250, 46, 224),
(251, 46, 225),
(252, 47, 226),
(253, 47, 227),
(254, 47, 228),
(255, 47, 229),
(256, 47, 230),
(257, 47, 230),
(258, 48, 231),
(259, 48, 232),
(260, 48, 233),
(261, 48, 234),
(262, 48, 235),
(263, 49, 236),
(264, 49, 237),
(265, 49, 238),
(266, 49, 239),
(267, 49, 240);

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `label_id` int(11) NOT NULL,
  `label_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`label_id`, `label_name`) VALUES
(1, 'I\'ve forgotten my password?'),
(2, 'Creating an account means you’re okay with shopify\'s Terms of Service, Privacy Policy'),
(872, 'Login with'),
(873, 'or'),
(874, 'Email'),
(875, 'Password'),
(876, 'Register'),
(877, 'Forgot Password'),
(878, 'Send'),
(879, 'About Us'),
(880, 'Categories'),
(881, 'Contact Us'),
(882, 'Name'),
(883, 'Your Messsage'),
(884, 'Please connect to the internet'),
(885, 'Recently Viewed'),
(886, 'Products are available.'),
(887, 'Top Seller'),
(888, 'Special Deals'),
(889, 'Most Liked'),
(890, 'All Categories'),
(891, 'Deals'),
(892, 'REMOVE'),
(893, 'Intro'),
(894, 'Skip Intro'),
(895, 'Got It!'),
(896, 'Order Detail'),
(897, 'Price Detail'),
(898, 'Total'),
(899, 'Sub Total'),
(900, 'Shipping'),
(901, 'Product Details'),
(902, 'New'),
(903, 'Out of Stock'),
(904, 'In Stock'),
(905, 'Add to Cart'),
(906, 'ADD TO CART'),
(907, 'Product Description'),
(908, 'Techincal details'),
(909, 'OFF'),
(910, 'No Products Found'),
(911, 'Reset Filters'),
(912, 'Search'),
(913, 'Main Categories'),
(914, 'Sub Categories'),
(915, 'Shipping method'),
(916, 'Thank You'),
(917, 'Thank you for shopping with us.'),
(918, 'My Orders'),
(919, 'Continue Shopping'),
(920, 'Favourite'),
(921, 'Your wish List is empty'),
(922, 'Continue Adding'),
(923, 'Explore'),
(924, 'Word Press Post Detail'),
(925, 'Go Back'),
(926, 'Top Sellers'),
(927, 'News'),
(928, 'Enter keyword'),
(929, 'Settings'),
(930, 'Shop'),
(931, 'Reset'),
(932, 'Select Language'),
(933, 'OUT OF STOCK'),
(934, 'Newest'),
(935, 'Refund Policy'),
(936, 'Privacy Policy'),
(937, 'Term and Services'),
(938, 'Skip'),
(939, 'Top Dishes'),
(940, 'Recipe of Day'),
(941, 'Food Categories'),
(942, 'Coupon Code'),
(943, 'Coupon Amount'),
(944, 'coupon code'),
(945, 'Coupon'),
(946, 'Note to the buyer'),
(947, 'Explore More'),
(948, 'All'),
(949, 'A - Z'),
(950, 'Z - A'),
(951, 'Price : high - low'),
(952, 'Price : low - high'),
(953, 'Special Products'),
(954, 'Sort Products'),
(955, 'Cancel'),
(956, 'most liked'),
(957, 'special'),
(958, 'top seller'),
(959, 'newest'),
(960, 'Likes'),
(961, 'My Account'),
(962, 'Mobile'),
(963, 'Date of Birth'),
(964, 'Update'),
(965, 'Current Password'),
(966, 'New Password'),
(967, 'Change Password'),
(968, 'Customer Orders'),
(969, 'Order Status'),
(970, 'Orders ID'),
(971, 'Product Price'),
(972, 'No. of Products'),
(973, 'Date'),
(974, 'Customer Address'),
(975, 'Please add your new shipping address for the futher processing of the your order'),
(976, 'Add new Address'),
(977, 'Create an Account'),
(978, 'First Name'),
(979, 'Last Name'),
(980, 'Already Memeber?'),
(981, 'Billing Info'),
(982, 'Address'),
(983, 'Phone'),
(984, 'Same as Shipping Address'),
(985, 'Next'),
(986, 'Order'),
(987, 'Billing Address'),
(988, 'Shipping Method'),
(989, 'Products'),
(990, 'SubTotal'),
(991, 'Products Price'),
(992, 'Tax'),
(993, 'Shipping Cost'),
(994, 'Order Notes'),
(995, 'Payment'),
(996, 'Card Number'),
(997, 'Expiration Date'),
(998, 'Expiration'),
(999, 'Error: invalid card number!'),
(1000, 'Error: invalid expiry date!'),
(1001, 'Error: invalid cvc number!'),
(1002, 'Continue'),
(1003, 'My Cart'),
(1004, 'Your cart is empty'),
(1005, 'continue shopping'),
(1006, 'Price'),
(1007, 'Quantity'),
(1008, 'by'),
(1009, 'View'),
(1010, 'Remove'),
(1011, 'Proceed'),
(1012, 'Shipping Address'),
(1013, 'Country'),
(1014, 'other'),
(1015, 'Zone'),
(1016, 'City'),
(1017, 'Post code'),
(1018, 'State'),
(1019, 'Update Address'),
(1020, 'Save Address'),
(1021, 'Login & Register'),
(1022, 'Please login or create an account for free'),
(1023, 'Log Out'),
(1024, 'My Wish List'),
(1025, 'Filters'),
(1026, 'Price Range'),
(1027, 'Close'),
(1028, 'Apply'),
(1029, 'Clear'),
(1030, 'Menu'),
(1031, 'Home'),
(1033, 'Creating an account means you’re okay with our'),
(1034, 'Login'),
(1035, 'Turn on/off Local Notifications'),
(1036, 'Turn on/off Notifications'),
(1037, 'Change Language'),
(1038, 'Official Website'),
(1039, 'Rate Us'),
(1040, 'Share'),
(1041, 'Edit Profile'),
(1042, 'A percentage discount for the entire cart'),
(1043, 'A fixed total discount for the entire cart'),
(1044, 'A fixed total discount for selected products only'),
(1045, 'A percentage discount for selected products only'),
(1047, 'Network Connected Reloading Data'),
(1048, 'Sort by'),
(1049, 'Flash Sale'),
(1050, 'ok'),
(1051, 'Number'),
(1052, 'Expire Month'),
(1053, 'Expire Year'),
(1054, 'Payment Method'),
(1055, 'Status'),
(1056, 'And'),
(1057, 'cccc'),
(1058, 'All Products'),
(1059, 'Coupon Codes List'),
(1060, 'Custom Orders'),
(1061, 'DETAILS'),
(1062, 'Deals Products'),
(1063, 'Discount ends in'),
(1064, 'Featured Products'),
(1065, 'Most Liked Products'),
(1066, 'Newest Products'),
(1067, 'On Sale Products'),
(1068, 'Posts'),
(1069, 'Safe Payment'),
(1070, 'Secure Online Paymen'),
(1071, 'Select Currency'),
(1072, 'Terms and Services'),
(1073, 'Top Seller Products'),
(1074, 'Wish List'),
(1075, 'Product Quantity is Limited!'),
(1076, 'Error server not reponding'),
(1077, 'Please Enter Your New Password!'),
(1078, 'Please Enter Your Current Password!'),
(1079, 'Current Password is Wrong!'),
(1080, 'Product Not Available With these Attributes!'),
(1081, 'Please enter something'),
(1082, 'Disconnected'),
(1083, 'Connected'),
(1084, 'Error logging into Facebook'),
(1085, 'Error Check Login Status Facebook'),
(1086, 'Please enter coupon code!'),
(1087, 'Error or render dialog closed without being successful'),
(1088, 'Error in configuration'),
(1089, 'Error in initialization, maybe PayPal isnt supported or something else'),
(1090, 'Sorry Coupon is Expired'),
(1091, 'Sorry your Cart total is low than coupon min limit!'),
(1092, 'Sorry your Cart total is Higher than coupon Max limit!'),
(1093, 'Sorry, this coupon is not valid for this email address!'),
(1094, 'Sorry, this coupon is not valid for sale items.'),
(1095, 'Coupon code already applied!'),
(1096, 'Sorry Individual Use Coupon is already applied any other coupon cannot be applied with it !'),
(1097, 'Coupon usage limit has been reached.'),
(1098, 'Account');

-- --------------------------------------------------------

--
-- Table structure for table `label_value`
--

CREATE TABLE `label_value` (
  `label_value_id` int(11) NOT NULL,
  `label_value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `label_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `label_value`
--

INSERT INTO `label_value` (`label_value_id`, `label_value`, `language_id`, `label_id`) VALUES
(1297, 'Home', 1, 1031),
(1298, 'Menu', 1, 1030),
(1299, 'Clear', 1, 1029),
(1300, 'Apply', 1, 1028),
(1301, 'Close', 1, 1027),
(1302, 'Price Range', 1, 1026),
(1303, 'Filters', 1, 1025),
(1304, 'My Wish List', 1, 1024),
(1305, 'Log Out', 1, 1023),
(1306, 'Please login or create an account for free', 1, 1022),
(1307, 'login & Register', 1, 1021),
(1308, 'Save Address', 1, 1020),
(1309, 'State', 1, 1018),
(1310, 'Update Address', 1, 1019),
(1311, 'Post code', 1, 1017),
(1312, 'City', 1, 1016),
(1313, 'Zone', 1, 1015),
(1314, 'other', 1, 1014),
(1315, 'Country', 1, 1013),
(1316, 'Shipping Address', 1, 1012),
(1317, 'Proceed', 1, 1011),
(1318, 'Remove', 1, 1010),
(1319, 'by', 1, 1008),
(1320, 'View', 1, 1009),
(1321, 'Quantity', 1, 1007),
(1322, 'Price', 1, 1006),
(1323, 'continue shopping', 1, 1005),
(1324, 'Your cart is empty', 1, 1004),
(1325, 'My Cart', 1, 1003),
(1326, 'Continue', 1, 1002),
(1327, 'Error: invalid cvc number!', 1, 1001),
(1328, 'Error: invalid expiry date!', 1, 1000),
(1329, 'Error: invalid card number!', 1, 999),
(1330, 'Expiration', 1, 998),
(1331, 'Expiration Date', 1, 997),
(1332, 'Card Number', 1, 996),
(1333, 'Payment', 1, 995),
(1334, 'Order Notes', 1, 994),
(1335, 'Shipping Cost', 1, 993),
(1336, 'Tax', 1, 992),
(1337, 'Products Price', 1, 991),
(1338, 'SubTotal', 1, 990),
(1339, 'Products', 1, 989),
(1340, 'Shipping Method', 1, 988),
(1341, 'Billing Address', 1, 987),
(1342, 'Order', 1, 986),
(1343, 'Next', 1, 985),
(1344, 'Same as Shipping Address', 1, 984),
(1345, 'Billing Info', 1, 981),
(1346, 'Address', 1, 982),
(1347, 'Phone', 1, 983),
(1348, 'Already Memeber?', 1, 980),
(1349, 'Last Name', 1, 979),
(1350, 'First Name', 1, 978),
(1351, 'Create an Account', 1, 977),
(1352, 'Add new Address', 1, 976),
(1353, 'Please add your new shipping address for the futher processing of the your order', 1, 975),
(1354, 'Order Status', 1, 969),
(1355, 'Orders ID', 1, 970),
(1356, 'Product Price', 1, 971),
(1357, 'No. of Products', 1, 972),
(1358, 'Date', 1, 973),
(1359, 'Customer Address', 1, 974),
(1360, 'Customer Orders', 1, 968),
(1361, 'Change Password', 1, 967),
(1362, 'New Password', 1, 966),
(1363, 'Current Password', 1, 965),
(1364, 'Update', 1, 964),
(1365, 'Date of Birth', 1, 963),
(1366, 'Mobile', 1, 962),
(1367, 'My Account', 1, 961),
(1368, 'Likes', 1, 960),
(1369, 'Newest', 1, 959),
(1370, 'Top Seller', 1, 958),
(1371, 'Special', 1, 957),
(1372, 'Most Liked', 1, 956),
(1373, 'Cancel', 1, 955),
(1374, 'Sort Products', 1, 954),
(1375, 'Special Products', 1, 953),
(1376, 'Price : low - high', 1, 952),
(1377, 'Price : high - low', 1, 951),
(1378, 'Z - A', 1, 950),
(1379, 'A - Z', 1, 949),
(1380, 'All', 1, 948),
(1381, 'Explore More', 1, 947),
(1382, 'Note to the buyer', 1, 946),
(1383, 'Coupon', 1, 945),
(1384, 'coupon code', 1, 944),
(1385, 'Coupon Amount', 1, 943),
(1386, 'Coupon Code', 1, 942),
(1387, 'Food Categories', 1, 941),
(1388, 'Recipe of Day', 1, 940),
(1389, 'Top Dishes', 1, 939),
(1390, 'Skip', 1, 938),
(1391, 'Term and Services', 1, 937),
(1392, 'Privacy Policy', 1, 936),
(1393, 'Refund Policy', 1, 935),
(1394, 'Newest', 1, 934),
(1395, 'OUT OF STOCK', 1, 933),
(1396, 'Select Language', 1, 932),
(1397, 'Reset', 1, 931),
(1398, 'Shop', 1, 930),
(1399, 'Settings', 1, 929),
(1400, 'Enter keyword', 1, 928),
(1401, 'News', 1, 927),
(1402, 'Top Sellers', 1, 926),
(1403, 'Go Back', 1, 925),
(1404, 'Word Press Post Detail', 1, 924),
(1405, 'Explore', 1, 923),
(1406, 'Continue Adding', 1, 922),
(1407, 'Your wish List is empty', 1, 921),
(1408, 'Favourite', 1, 920),
(1409, 'Continue Shopping', 1, 919),
(1410, 'My Orders', 1, 918),
(1411, 'Thank you for shopping with us.', 1, 917),
(1412, 'Thank You', 1, 916),
(1413, 'Shipping method', 1, 915),
(1414, 'Sub Categories', 1, 914),
(1415, 'Main Categories', 1, 913),
(1416, 'Search', 1, 912),
(1417, 'Reset Filters', 1, 911),
(1418, 'No Products Found', 1, 910),
(1419, 'OFF', 1, 909),
(1420, 'Techincal details', 1, 908),
(1421, 'Product Description', 1, 907),
(1422, 'ADD TO CART', 1, 906),
(1423, 'Add to Cart', 1, 905),
(1424, 'In Stock', 1, 904),
(1425, 'Out of Stock', 1, 903),
(1426, 'New', 1, 902),
(1427, 'Product Details', 1, 901),
(1428, 'Shipping', 1, 900),
(1429, 'Sub Total', 1, 899),
(1430, 'Total', 1, 898),
(1431, 'Price Detail', 1, 897),
(1432, 'Order Detail', 1, 896),
(1433, 'Got It!', 1, 895),
(1434, 'Skip Intro', 1, 894),
(1435, 'Intro', 1, 893),
(1436, 'REMOVE', 1, 892),
(1437, 'Deals', 1, 891),
(1438, 'All Categories', 1, 890),
(1439, 'Most Liked', 1, 889),
(1440, 'Special Deals', 1, 888),
(1441, 'Top Seller', 1, 887),
(1442, 'Products are available.', 1, 886),
(1443, 'Recently Viewed', 1, 885),
(1444, 'Please connect to the internet', 1, 884),
(1445, 'Contact Us', 1, 881),
(1446, 'Name', 1, 882),
(1447, 'Your Message', 1, 883),
(1448, 'Categories', 1, 880),
(1449, 'About Us', 1, 879),
(1450, 'Send', 1, 878),
(1451, 'Forgot Password', 1, 877),
(1452, 'Register', 1, 876),
(1453, 'Password', 1, 875),
(1454, 'Email', 1, 874),
(1455, 'or', 1, 873),
(1456, 'Login with', 1, 872),
(1457, 'Creating an account means you\'re okay with shopify\'s Terms of Service, Privacy Policy', 1, 2),
(1458, 'I\'ve forgotten my password?', 1, 1),
(1459, NULL, 1, NULL),
(1462, 'Creating an account means you’re okay with our', 1, 1033),
(1465, 'Login', 1, 1034),
(1468, 'Turn on/off Local Notifications', 1, 1035),
(1471, 'Turn on/off Notifications', 1, 1036),
(1474, 'Change Language', 1, 1037),
(1477, 'Official Website', 1, 1038),
(1480, 'Rate Us', 1, 1039),
(1483, 'Share', 1, 1040),
(1486, 'Edit Profile', 1, 1041),
(1489, 'A percentage discount for the entire cart', 1, 1042),
(1492, 'A fixed total discount for the entire cart', 1, 1043),
(1495, 'A fixed total discount for selected products only', 1, 1044),
(1498, 'A percentage discount for selected products only', 1, 1045),
(1501, 'Network Connected Reloading Data', 1, 1047),
(1503, 'Sort by', 1, 1048),
(1505, 'Flash Sale', 1, 1049),
(1507, 'ok', 1, 1050),
(1509, 'Number', 1, 1051),
(1511, 'Expire Month', 1, 1052),
(1513, 'Expire Year', 1, 1053),
(1515, 'Payment Method', 1, 1054),
(1517, 'Status', 1, 1055),
(1519, 'And', 1, 1056),
(1520, NULL, 2, NULL),
(1521, NULL, 1, 1072),
(1522, NULL, 2, 1072),
(1523, NULL, 1, 1073),
(1524, NULL, 2, 1073),
(1525, NULL, 1, 1074),
(1526, NULL, 2, 1074),
(1527, NULL, 1, 1075),
(1528, NULL, 2, 1075),
(1529, NULL, 1, 1076),
(1530, NULL, 2, 1076),
(1531, NULL, 1, 1077),
(1532, NULL, 2, 1077),
(1533, NULL, 1, 1078),
(1534, NULL, 2, 1078),
(1535, NULL, 1, 1079),
(1536, NULL, 2, 1079),
(1537, NULL, 1, 1080),
(1538, NULL, 2, 1080),
(1539, NULL, 1, 1081),
(1540, NULL, 2, 1081),
(1541, NULL, 1, 1082),
(1542, NULL, 2, 1082),
(1543, NULL, 1, 1083),
(1544, NULL, 2, 1083),
(1545, NULL, 1, 1084),
(1546, NULL, 2, 1084),
(1547, NULL, 1, 1085),
(1548, NULL, 2, 1085),
(1549, NULL, 1, 1086),
(1550, NULL, 2, 1086),
(1551, NULL, 1, 1087),
(1552, NULL, 2, 1087),
(1553, NULL, 1, 1088),
(1554, NULL, 2, 1088),
(1555, NULL, 1, 1089),
(1556, NULL, 2, 1089),
(1557, NULL, 1, 1090),
(1558, NULL, 2, 1090),
(1559, NULL, 1, 1091),
(1560, NULL, 2, 1091),
(1561, NULL, 1, 1092),
(1562, NULL, 2, 1092),
(1563, NULL, 1, 1093),
(1564, NULL, 2, 1093),
(1565, NULL, 1, 1094),
(1566, NULL, 2, 1094),
(1567, NULL, 1, 1095),
(1568, NULL, 2, 1095),
(1569, NULL, 1, 1096),
(1570, NULL, 2, 1096),
(1571, NULL, 1, 1097),
(1572, NULL, 2, 1097),
(1573, 'Account', 1, 1098),
(1574, NULL, 2, 1098),
(1575, NULL, 2, 1020),
(1576, NULL, 2, 1021),
(1577, NULL, 2, 1022),
(1578, NULL, 2, 1023),
(1579, NULL, 2, 1024),
(1580, NULL, 2, 1025),
(1581, NULL, 2, 1026),
(1582, NULL, 2, 1027),
(1583, NULL, 2, 1028),
(1584, NULL, 2, 1029),
(1585, NULL, 2, 1030),
(1586, NULL, 2, 1031),
(1587, NULL, 2, 1033),
(1588, NULL, 2, 1034),
(1589, NULL, 2, 1035),
(1590, NULL, 2, 1036),
(1591, NULL, 2, 1037),
(1592, NULL, 2, 1038),
(1593, NULL, 2, 1039),
(1594, NULL, 2, 1040),
(1595, NULL, 2, 1041),
(1596, NULL, 2, 1042),
(1597, NULL, 2, 1043),
(1598, NULL, 2, 1044),
(1599, NULL, 2, 1045),
(1600, NULL, 2, 1047),
(1601, NULL, 2, 1048),
(1602, NULL, 2, 1049),
(1603, NULL, 2, 1050),
(1604, NULL, 2, 1051),
(1605, NULL, 2, 1052),
(1606, NULL, 2, 1053),
(1607, NULL, 2, 1054),
(1608, NULL, 2, 1055),
(1609, NULL, 2, 1056),
(1610, NULL, 1, 1057),
(1611, NULL, 2, 1057),
(1612, 'All Products', 1, 1058),
(1613, NULL, 2, 1058),
(1614, 'Coupon Codes List', 1, 1059),
(1615, NULL, 2, 1059),
(1616, 'Custom Orders', 1, 1060),
(1617, NULL, 2, 1060),
(1618, 'DETAILS', 1, 1061),
(1619, NULL, 2, 1061),
(1620, 'Deals Products', 1, 1062),
(1621, NULL, 2, 1062),
(1622, 'Discount ends in', 1, 1063),
(1623, NULL, 2, 1063),
(1624, 'Featured Products', 1, 1064),
(1625, NULL, 2, 1064),
(1626, 'Most Liked Products', 1, 1065),
(1627, NULL, 2, 1065),
(1628, 'Newest Products', 1, 1066),
(1629, NULL, 2, 1066),
(1630, 'On Sale Products', 1, 1067),
(1631, NULL, 2, 1067),
(1632, 'Posts', 1, 1068),
(1633, NULL, 2, 1068),
(1634, 'Safe Payment', 1, 1069),
(1635, NULL, 2, 1069),
(1636, 'Secure Online Paymen', 1, 1070),
(1637, NULL, 2, 1070),
(1638, 'Select Currency', 1, 1071),
(1639, NULL, 2, 1071);

-- --------------------------------------------------------

--
-- Table structure for table `label_values`
--

CREATE TABLE `label_values` (
  `label_value_id` int(10) UNSIGNED NOT NULL,
  `label_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(11) NOT NULL,
  `label_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `languages_id` int(11) NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directory` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `direction` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `is_default` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`languages_id`, `name`, `code`, `image`, `directory`, `sort_order`, `direction`, `status`, `is_default`) VALUES
(1, 'English', 'en', '118', NULL, 1, 'ltr', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `liked_products`
--

CREATE TABLE `liked_products` (
  `like_id` int(11) NOT NULL,
  `liked_products_id` int(11) NOT NULL,
  `liked_customers_id` int(11) NOT NULL,
  `date_liked` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manage_min_max`
--

CREATE TABLE `manage_min_max` (
  `min_max_id` int(11) NOT NULL,
  `min_level` int(11) NOT NULL,
  `max_level` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `inventory_ref_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manage_role`
--

CREATE TABLE `manage_role` (
  `manage_role_id` int(11) NOT NULL,
  `user_types_id` tinyint(1) NOT NULL DEFAULT 0,
  `dashboard_view` tinyint(1) NOT NULL DEFAULT 0,
  `manufacturer_view` tinyint(1) NOT NULL DEFAULT 0,
  `manufacturer_create` tinyint(1) NOT NULL DEFAULT 0,
  `manufacturer_update` tinyint(1) NOT NULL DEFAULT 0,
  `manufacturer_delete` tinyint(1) NOT NULL DEFAULT 0,
  `categories_view` tinyint(1) NOT NULL DEFAULT 0,
  `categories_create` tinyint(1) NOT NULL DEFAULT 0,
  `categories_update` tinyint(1) NOT NULL DEFAULT 0,
  `categories_delete` tinyint(1) NOT NULL DEFAULT 0,
  `products_view` tinyint(1) NOT NULL DEFAULT 0,
  `products_create` tinyint(1) NOT NULL DEFAULT 0,
  `products_update` tinyint(1) NOT NULL DEFAULT 0,
  `products_delete` tinyint(1) NOT NULL DEFAULT 0,
  `news_view` tinyint(1) NOT NULL DEFAULT 0,
  `news_create` tinyint(1) NOT NULL DEFAULT 0,
  `news_update` tinyint(1) NOT NULL DEFAULT 0,
  `news_delete` tinyint(1) NOT NULL DEFAULT 0,
  `customers_view` tinyint(1) NOT NULL DEFAULT 0,
  `customers_create` tinyint(1) NOT NULL DEFAULT 0,
  `customers_update` tinyint(1) NOT NULL DEFAULT 0,
  `customers_delete` tinyint(1) NOT NULL DEFAULT 0,
  `tax_location_view` tinyint(1) NOT NULL DEFAULT 0,
  `tax_location_create` tinyint(1) NOT NULL DEFAULT 0,
  `tax_location_update` tinyint(1) NOT NULL DEFAULT 0,
  `tax_location_delete` tinyint(1) NOT NULL DEFAULT 0,
  `coupons_view` tinyint(1) NOT NULL DEFAULT 0,
  `coupons_create` tinyint(1) NOT NULL DEFAULT 0,
  `coupons_update` tinyint(1) NOT NULL DEFAULT 0,
  `coupons_delete` tinyint(1) NOT NULL DEFAULT 0,
  `notifications_view` tinyint(1) NOT NULL DEFAULT 0,
  `notifications_send` tinyint(1) NOT NULL DEFAULT 0,
  `orders_view` tinyint(1) NOT NULL DEFAULT 0,
  `orders_confirm` tinyint(1) NOT NULL DEFAULT 0,
  `shipping_methods_view` tinyint(1) NOT NULL DEFAULT 0,
  `shipping_methods_update` tinyint(1) NOT NULL DEFAULT 0,
  `payment_methods_view` tinyint(1) NOT NULL DEFAULT 0,
  `payment_methods_update` tinyint(1) NOT NULL DEFAULT 0,
  `reports_view` tinyint(1) NOT NULL DEFAULT 0,
  `website_setting_view` tinyint(1) NOT NULL DEFAULT 0,
  `website_setting_update` tinyint(1) NOT NULL DEFAULT 0,
  `application_setting_view` tinyint(1) NOT NULL DEFAULT 0,
  `application_setting_update` tinyint(1) NOT NULL DEFAULT 0,
  `general_setting_view` tinyint(1) NOT NULL DEFAULT 0,
  `general_setting_update` tinyint(1) NOT NULL DEFAULT 0,
  `manage_admins_view` tinyint(1) NOT NULL DEFAULT 0,
  `manage_admins_create` tinyint(1) NOT NULL DEFAULT 0,
  `manage_admins_update` tinyint(1) NOT NULL DEFAULT 0,
  `manage_admins_delete` tinyint(1) NOT NULL DEFAULT 0,
  `language_view` tinyint(1) NOT NULL DEFAULT 0,
  `language_create` tinyint(1) NOT NULL DEFAULT 0,
  `language_update` tinyint(1) NOT NULL DEFAULT 0,
  `language_delete` tinyint(1) NOT NULL DEFAULT 0,
  `profile_view` tinyint(1) NOT NULL DEFAULT 0,
  `profile_update` tinyint(1) NOT NULL DEFAULT 0,
  `admintype_view` tinyint(1) NOT NULL DEFAULT 0,
  `admintype_create` tinyint(1) NOT NULL DEFAULT 0,
  `admintype_update` tinyint(1) NOT NULL DEFAULT 0,
  `admintype_delete` tinyint(1) NOT NULL DEFAULT 0,
  `manage_admins_role` tinyint(1) NOT NULL DEFAULT 0,
  `add_media` tinyint(1) NOT NULL DEFAULT 0,
  `edit_media` tinyint(1) NOT NULL DEFAULT 0,
  `view_media` tinyint(1) NOT NULL DEFAULT 0,
  `delete_media` tinyint(1) NOT NULL DEFAULT 0,
  `edit_management` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_role`
--

INSERT INTO `manage_role` (`manage_role_id`, `user_types_id`, `dashboard_view`, `manufacturer_view`, `manufacturer_create`, `manufacturer_update`, `manufacturer_delete`, `categories_view`, `categories_create`, `categories_update`, `categories_delete`, `products_view`, `products_create`, `products_update`, `products_delete`, `news_view`, `news_create`, `news_update`, `news_delete`, `customers_view`, `customers_create`, `customers_update`, `customers_delete`, `tax_location_view`, `tax_location_create`, `tax_location_update`, `tax_location_delete`, `coupons_view`, `coupons_create`, `coupons_update`, `coupons_delete`, `notifications_view`, `notifications_send`, `orders_view`, `orders_confirm`, `shipping_methods_view`, `shipping_methods_update`, `payment_methods_view`, `payment_methods_update`, `reports_view`, `website_setting_view`, `website_setting_update`, `application_setting_view`, `application_setting_update`, `general_setting_view`, `general_setting_update`, `manage_admins_view`, `manage_admins_create`, `manage_admins_update`, `manage_admins_delete`, `language_view`, `language_create`, `language_update`, `language_delete`, `profile_view`, `profile_update`, `admintype_view`, `admintype_create`, `admintype_update`, `admintype_delete`, `manage_admins_role`, `add_media`, `edit_media`, `view_media`, `delete_media`, `edit_management`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturers_id` int(10) UNSIGNED NOT NULL,
  `manufacturer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturers_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufacturers_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers_info`
--

CREATE TABLE `manufacturers_info` (
  `manufacturers_id` int(11) NOT NULL,
  `languages_id` int(11) NOT NULL,
  `manufacturers_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_clicked` int(11) NOT NULL DEFAULT 0,
  `date_last_click` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `sub_sort_order` int(11) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `external_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `sort_order`, `sub_sort_order`, `parent_id`, `type`, `external_link`, `link`, `page_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 0, 1, NULL, '/', NULL, 1, NULL, NULL),
(2, 2, NULL, 0, 1, NULL, 'shop', NULL, 1, NULL, NULL),
(3, 4, NULL, 0, 1, NULL, '#', NULL, 1, NULL, NULL),
(18, NULL, 4, 3, 1, NULL, '/page?name=about-us', 1, 1, NULL, NULL),
(19, NULL, 2, 3, 1, NULL, '/page?name=privacy-policy', 1, 1, NULL, NULL),
(20, 5, NULL, 0, 1, NULL, '#', NULL, 1, NULL, NULL),
(22, 6, NULL, 0, 1, NULL, 'contact', 1, 1, NULL, NULL),
(24, NULL, 3, 3, 1, NULL, 'page?name=about-us', 1, 1, NULL, NULL),
(25, NULL, 1, 3, 1, NULL, 'page?name=privacy-policy', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_translation`
--

CREATE TABLE `menu_translation` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `menu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_translation`
--

INSERT INTO `menu_translation` (`id`, `menu_id`, `language_id`, `menu_name`) VALUES
(2, 1, 1, 'Home'),
(3, 1, 2, 'Homee'),
(11, 2, 1, 'SHOP'),
(12, 2, 2, 'SHOP'),
(25, 3, 1, 'INFO PAGES'),
(26, 3, 2, 'INFO PAGES'),
(33, 18, 1, 'About Us'),
(34, 18, 2, 'About Us'),
(35, 19, 1, 'Privacy Policy'),
(36, 19, 2, 'Privacy Policy'),
(37, 20, 1, 'News'),
(38, 20, 2, 'News'),
(39, 21, 1, 'Demo'),
(40, 21, 2, 'Demo'),
(41, 22, 1, 'Contact Us'),
(42, 22, 2, 'Contact Us'),
(45, 24, 1, 'Sub Menu 1'),
(46, 24, 2, 'Sub Menu 1'),
(47, 25, 1, 'Sub Menu 12'),
(48, 25, 2, 'Sub Menu 12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_09_24_122557_create_action_recorder_table', 1),
(2, '2019_09_24_122557_create_address_book_table', 1),
(3, '2019_09_24_122557_create_address_format_table', 1),
(4, '2019_09_24_122557_create_alert_settings_table', 1),
(5, '2019_09_24_122557_create_api_calls_list_table', 1),
(6, '2019_09_24_122557_create_banners_history_table', 1),
(7, '2019_09_24_122557_create_banners_table', 1),
(8, '2019_09_24_122557_create_block_ips_table', 1),
(9, '2019_09_24_122557_create_categories_description_table', 1),
(10, '2019_09_24_122557_create_categories_role_table', 1),
(11, '2019_09_24_122557_create_categories_table', 1),
(12, '2019_09_24_122557_create_compare_table', 1),
(13, '2019_09_24_122557_create_constant_banners_table', 1),
(14, '2019_09_24_122557_create_countries_table', 1),
(15, '2019_09_24_122557_create_coupons_table', 1),
(16, '2019_09_24_122557_create_currencies_table', 1),
(17, '2019_09_24_122557_create_currency_record_table', 1),
(18, '2019_09_24_122557_create_current_theme_table', 1),
(19, '2019_09_24_122557_create_customers_basket_attributes_table', 1),
(20, '2019_09_24_122557_create_customers_basket_table', 1),
(21, '2019_09_24_122557_create_customers_info_table', 1),
(22, '2019_09_24_122557_create_customers_table', 1),
(23, '2019_09_24_122557_create_devices_table', 1),
(24, '2019_09_24_122557_create_fedex_shipping_table', 1),
(25, '2019_09_24_122557_create_flash_sale_table', 1),
(26, '2019_09_24_122557_create_flate_rate_table', 1),
(27, '2019_09_24_122557_create_front_end_theme_content_table', 1),
(28, '2019_09_24_122557_create_geo_zones_table', 1),
(29, '2019_09_24_122557_create_http_call_record_table', 1),
(30, '2019_09_24_122557_create_hula_our_infos_table', 1),
(31, '2019_09_24_122557_create_image_categories_table', 1),
(32, '2019_09_24_122557_create_images_table', 1),
(33, '2019_09_24_122557_create_inventory_detail_table', 1),
(34, '2019_09_24_122557_create_inventory_table', 1),
(35, '2019_09_24_122557_create_label_value_table', 1),
(36, '2019_09_24_122557_create_label_values_table', 1),
(37, '2019_09_24_122557_create_labels_table', 1),
(38, '2019_09_24_122557_create_languages_table', 1),
(39, '2019_09_24_122557_create_liked_products_table', 1),
(40, '2019_09_24_122557_create_manage_min_max_table', 1),
(41, '2019_09_24_122557_create_manage_role_table', 1),
(42, '2019_09_24_122557_create_manufacturers_info_table', 1),
(43, '2019_09_24_122557_create_manufacturers_table', 1),
(44, '2019_09_24_122557_create_news_categories_description_table', 1),
(45, '2019_09_24_122557_create_news_categories_table', 1),
(46, '2019_09_24_122557_create_news_description_table', 1),
(47, '2019_09_24_122557_create_news_table', 1),
(48, '2019_09_24_122557_create_news_to_news_categories_table', 1),
(49, '2019_09_24_122557_create_newsletters_table', 1),
(50, '2019_09_24_122557_create_orders_products_attributes_table', 1),
(51, '2019_09_24_122557_create_orders_products_download_table', 1),
(52, '2019_09_24_122557_create_orders_products_table', 1),
(53, '2019_09_24_122557_create_orders_status_description_table', 1),
(54, '2019_09_24_122557_create_orders_status_history_table', 1),
(55, '2019_09_24_122557_create_orders_status_table', 1),
(56, '2019_09_24_122557_create_orders_table', 1),
(57, '2019_09_24_122557_create_orders_total_table', 1),
(58, '2019_09_24_122557_create_pages_description_table', 1),
(59, '2019_09_24_122557_create_pages_table', 1),
(60, '2019_09_24_122557_create_payment_description_table', 1),
(61, '2019_09_24_122557_create_payment_methods_detail_table', 1),
(62, '2019_09_24_122557_create_payment_methods_table', 1),
(63, '2019_09_24_122557_create_permissions_table', 1),
(64, '2019_09_24_122557_create_products_attributes_download_table', 1),
(65, '2019_09_24_122557_create_products_attributes_table', 1),
(66, '2019_09_24_122557_create_products_description_table', 1),
(67, '2019_09_24_122557_create_products_images_table', 1),
(68, '2019_09_24_122557_create_products_notifications_table', 1),
(69, '2019_09_24_122557_create_products_options_descriptions_table', 1),
(70, '2019_09_24_122557_create_products_options_table', 1),
(71, '2019_09_24_122557_create_products_options_values_descriptions_table', 1),
(72, '2019_09_24_122557_create_products_options_values_table', 1),
(73, '2019_09_24_122557_create_products_shipping_rates_table', 1),
(74, '2019_09_24_122557_create_products_table', 1),
(75, '2019_09_24_122557_create_products_to_categories_table', 1),
(76, '2019_09_24_122557_create_reviews_description_table', 1),
(77, '2019_09_24_122557_create_reviews_table', 1),
(78, '2019_09_24_122557_create_sec_directory_whitelist_table', 1),
(79, '2019_09_24_122557_create_sessions_table', 1),
(80, '2019_09_24_122557_create_settings_table', 1),
(81, '2019_09_24_122557_create_shipping_description_table', 1),
(82, '2019_09_24_122557_create_shipping_methods_table', 1),
(83, '2019_09_24_122557_create_sliders_images_table', 1),
(84, '2019_09_24_122557_create_specials_table', 1),
(85, '2019_09_24_122557_create_tax_class_table', 1),
(86, '2019_09_24_122557_create_tax_rates_table', 1),
(87, '2019_09_24_122557_create_units_descriptions_table', 1),
(88, '2019_09_24_122557_create_units_table', 1),
(89, '2019_09_24_122557_create_ups_shipping_table', 1),
(90, '2019_09_24_122557_create_user_to_address_table', 1),
(91, '2019_09_24_122557_create_user_types_table', 1),
(92, '2019_09_24_122557_create_users_table', 1),
(93, '2019_09_24_122557_create_whos_online_table', 1),
(94, '2019_09_24_122557_create_zones_table', 1),
(95, '2019_09_24_122557_create_zones_to_geo_zones_table', 1),
(96, '2019_12_11_070737_create_menus_table', 1),
(97, '2019_12_11_070821_create_menu_translation_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_date_added` datetime NOT NULL,
  `news_last_modified` datetime DEFAULT NULL,
  `news_status` tinyint(1) NOT NULL,
  `is_feature` tinyint(1) NOT NULL DEFAULT 0,
  `news_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `newsletters_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_added` datetime NOT NULL,
  `date_sent` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `locked` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `categories_id` int(11) NOT NULL,
  `categories_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `sort_order` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `news_categories_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_categories_description`
--

CREATE TABLE `news_categories_description` (
  `categories_description_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL DEFAULT 0,
  `language_id` int(11) NOT NULL DEFAULT 1,
  `categories_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_description`
--

CREATE TABLE `news_description` (
  `language_id` int(11) NOT NULL DEFAULT 1,
  `news_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `news_id` int(11) NOT NULL,
  `news_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news_viewed` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_to_news_categories`
--

CREATE TABLE `news_to_news_categories` (
  `news_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `total_tax` decimal(7,2) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `customers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customers_street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_suburb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customers_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customers_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_address_format_id` int(11) DEFAULT NULL,
  `delivery_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_suburb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_address_format_id` int(11) DEFAULT NULL,
  `billing_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_suburb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address_format_id` int(11) NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_owner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_number` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc_expires` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `orders_date_finished` datetime DEFAULT NULL,
  `currency` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_value` decimal(14,6) DEFAULT NULL,
  `order_price` decimal(10,2) NOT NULL,
  `shipping_cost` decimal(10,2) NOT NULL,
  `shipping_method` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_duration` int(11) DEFAULT NULL,
  `order_information` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT 0,
  `coupon_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_amount` int(11) NOT NULL,
  `exclude_product_ids` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excluded_product_categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free_shipping` tinyint(1) NOT NULL DEFAULT 0,
  `product_ids` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordered_source` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1: Website, 2: App',
  `delivery_phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `total_tax`, `customers_id`, `customers_name`, `customers_company`, `customers_street_address`, `customers_suburb`, `customers_city`, `customers_postcode`, `customers_state`, `customers_country`, `customers_telephone`, `email`, `customers_address_format_id`, `delivery_name`, `delivery_company`, `delivery_street_address`, `delivery_suburb`, `delivery_city`, `delivery_postcode`, `delivery_state`, `delivery_country`, `delivery_address_format_id`, `billing_name`, `billing_company`, `billing_street_address`, `billing_suburb`, `billing_city`, `billing_postcode`, `billing_state`, `billing_country`, `billing_address_format_id`, `payment_method`, `cc_type`, `cc_owner`, `cc_number`, `cc_expires`, `last_modified`, `date_purchased`, `orders_date_finished`, `currency`, `currency_value`, `order_price`, `shipping_cost`, `shipping_method`, `shipping_duration`, `order_information`, `is_seen`, `coupon_code`, `coupon_amount`, `exclude_product_ids`, `product_categories`, `excluded_product_categories`, `free_shipping`, `product_ids`, `ordered_source`, `delivery_phone`, `billing_phone`, `transaction_id`, `created_at`, `updated_at`) VALUES
(27, '0.00', 9, 'Bholu Patel', NULL, '305, amora arcade, nr. Mauni international school, utran, surat', '', 'Surat', '394106', 'GJ', 'India', '', 'Bholupatel140@gmail.com', NULL, 'Bholu Patel', NULL, '305, amora arcade, nr. Mauni international school, utran, surat', '', 'Surat', '394106', 'GJ', 'India', NULL, 'Bholu Patel', NULL, '305, amora arcade, nr. Mauni international school, utran, surat', '', 'Surat', '394106', 'GJ', 'India', 0, 'Cash on Delivery', '', '', '', '', '2020-01-18 03:42:09', '2020-01-18 03:42:09', NULL, 'Rs.', NULL, '499.00', '0.00', 'Free Shipping', NULL, '[]', 1, '', 0, '', '', '', 0, '', 1, '8347276389', '8347276389', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `orders_products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `products_model` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_price` decimal(15,2) NOT NULL,
  `final_price` decimal(15,2) NOT NULL,
  `products_tax` decimal(7,0) NOT NULL,
  `products_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`orders_products_id`, `orders_id`, `products_id`, `products_model`, `products_name`, `products_price`, `final_price`, `products_tax`, `products_quantity`) VALUES
(21, 27, 13, NULL, 'LIGHT BLUE CASUAL COTTON SHIRT', '499.00', '499.00', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_products_attributes`
--

CREATE TABLE `orders_products_attributes` (
  `orders_products_attributes_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `orders_products_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `products_options` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_options_values` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options_values_price` decimal(15,2) NOT NULL,
  `price_prefix` char(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_products_attributes`
--

INSERT INTO `orders_products_attributes` (`orders_products_attributes_id`, `orders_id`, `orders_products_id`, `products_id`, `products_options`, `products_options_values`, `options_values_price`, `price_prefix`) VALUES
(1, 1, 1, 1, 'Size', 'S', '0.00', '+'),
(2, 2, 2, 1, 'Size', 'S', '0.00', '+'),
(3, 3, 3, 1, 'Size', 'S', '0.00', '+'),
(4, 5, 4, 1, 'Size', 'S', '0.00', '+'),
(5, 6, 5, 1, 'Size', 'S', '0.00', '+'),
(6, 10, 6, 1, 'Size', 'S', '0.00', '+'),
(7, 11, 7, 1, 'Size', 'S', '0.00', '+'),
(8, 13, 8, 1, 'Size', 'S', '0.00', '+'),
(9, 14, 9, 1, 'Size', 'S', '0.00', '+'),
(10, 15, 10, 1, 'Size', 'S', '0.00', '+'),
(11, 16, 11, 1, 'Size', 'S', '0.00', '+'),
(12, 17, 12, 1, 'Size', 'S', '0.00', '+'),
(13, 18, 13, 1, 'Size', 'S', '0.00', '+'),
(14, 19, 14, 1, 'Size', 'S', '0.00', '+'),
(15, 21, 15, 1, 'Size', 'S', '0.00', '+'),
(16, 22, 16, 1, 'Size', 'S', '0.00', '+'),
(17, 23, 17, 1, 'Size', 'S', '0.00', '+'),
(18, 24, 18, 1, 'Size', 'S', '0.00', '+'),
(19, 25, 19, 1, 'Size', 'S', '0.00', '+'),
(20, 26, 20, 1, 'Size', 'S', '0.00', '+'),
(21, 27, 21, 13, 'Size', 'M ( 38 )', '0.00', '+'),
(22, 29, 22, 18, 'Size', 'S  ( 36 )', '0.00', '+'),
(23, 30, 23, 11, 'Size', 'S  ( 36 )', '0.00', '+'),
(24, 31, 24, 18, 'Size', 'S  ( 36 )', '0.00', '+');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products_download`
--

CREATE TABLE `orders_products_download` (
  `orders_products_download_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL DEFAULT 0,
  `orders_products_id` int(11) NOT NULL DEFAULT 0,
  `orders_products_filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `download_maxdays` int(11) NOT NULL DEFAULT 0,
  `download_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_status`
--

CREATE TABLE `orders_status` (
  `orders_status_id` int(11) NOT NULL,
  `public_flag` int(11) DEFAULT 0,
  `downloads_flag` int(11) DEFAULT 0,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_status`
--

INSERT INTO `orders_status` (`orders_status_id`, `public_flag`, `downloads_flag`, `role_id`) VALUES
(1, 0, 0, 2),
(2, 0, 0, 2),
(3, 0, 0, 2),
(4, 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders_status_description`
--

CREATE TABLE `orders_status_description` (
  `orders_status_description_id` int(11) NOT NULL,
  `orders_status_id` int(11) NOT NULL,
  `orders_status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_status_description`
--

INSERT INTO `orders_status_description` (`orders_status_description_id`, `orders_status_id`, `orders_status_name`, `language_id`) VALUES
(1, 1, 'Pending', 1),
(2, 2, 'Completed', 1),
(3, 3, 'Cancel', 1),
(4, 4, 'Return', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_status_history`
--

CREATE TABLE `orders_status_history` (
  `orders_status_history_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `orders_status_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `customer_notified` int(11) DEFAULT 0,
  `comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_status_history`
--

INSERT INTO `orders_status_history` (`orders_status_history_id`, `orders_id`, `orders_status_id`, `date_added`, `customer_notified`, `comments`) VALUES
(1, 1, 1, '2020-01-12 10:58:24', 1, ''),
(2, 2, 1, '2020-01-12 11:00:18', 1, ''),
(3, 3, 1, '2020-01-12 11:08:50', 1, ''),
(4, 4, 1, '2020-01-12 11:09:53', 1, ''),
(5, 5, 1, '2020-01-12 11:16:37', 1, ''),
(6, 6, 1, '2020-01-12 11:17:48', 1, ''),
(7, 7, 1, '2020-01-12 11:18:01', 1, ''),
(8, 8, 1, '2020-01-12 11:18:07', 1, ''),
(9, 9, 1, '2020-01-12 11:18:24', 1, ''),
(10, 10, 1, '2020-01-12 11:19:52', 1, ''),
(11, 11, 1, '2020-01-12 11:22:11', 1, ''),
(12, 12, 1, '2020-01-12 11:22:17', 1, ''),
(13, 13, 1, '2020-01-12 11:24:30', 1, ''),
(14, 14, 1, '2020-01-12 11:26:09', 1, ''),
(15, 15, 1, '2020-01-12 11:30:36', 1, ''),
(16, 16, 1, '2020-01-12 11:33:31', 1, ''),
(17, 17, 1, '2020-01-12 11:37:21', 1, ''),
(18, 18, 1, '2020-01-12 11:41:32', 1, ''),
(19, 19, 1, '2020-01-12 11:43:17', 1, ''),
(20, 20, 1, '2020-01-12 11:43:45', 1, ''),
(21, 21, 1, '2020-01-12 11:44:56', 1, ''),
(22, 22, 1, '2020-01-12 11:52:30', 1, ''),
(23, 23, 1, '2020-01-12 11:55:06', 1, ''),
(24, 24, 1, '2020-01-12 11:55:52', 1, ''),
(25, 25, 1, '2020-01-12 12:25:47', 1, ''),
(26, 26, 1, '2020-01-12 02:17:46', 1, ''),
(27, 2, 3, '2020-01-12 04:20:15', 1, NULL),
(28, 2, 4, '2020-01-12 04:21:30', 1, 'guig'),
(29, 27, 1, '2020-01-18 03:42:09', 1, ''),
(30, 27, 3, '2020-01-18 03:43:21', 1, ''),
(31, 28, 1, '2020-01-20 11:23:28', 1, ''),
(32, 28, 3, '2020-01-20 11:30:53', 1, NULL),
(33, 29, 1, '2020-01-20 11:32:22', 1, ''),
(34, 29, 3, '2020-01-20 11:33:59', 1, ''),
(35, 30, 1, '2020-01-20 11:34:19', 1, ''),
(36, 30, 3, '2020-01-20 11:35:57', 1, ''),
(37, 31, 1, '2020-01-20 11:36:00', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders_total`
--

CREATE TABLE `orders_total` (
  `orders_total_id` int(10) UNSIGNED NOT NULL,
  `orders_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` decimal(15,4) NOT NULL,
  `class` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `slug`, `status`, `type`) VALUES
(1, 'privacy-policy', 1, 1),
(2, 'term-services', 1, 1),
(3, 'refund-policy', 1, 1),
(4, 'about-us', 1, 1),
(5, 'privacy-policy', 1, 2),
(6, 'term-services', 1, 2),
(7, 'refund-policy', 1, 2),
(8, 'about-us', 1, 2),
(9, 'ssssss', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages_description`
--

CREATE TABLE `pages_description` (
  `page_description_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages_description`
--

INSERT INTO `pages_description` (`page_description_id`, `name`, `description`, `language_id`, `page_id`) VALUES
(1, 'Privacy Policy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>\n\n<p>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>\n\n<p>book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>\n\n<p>unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>\n\n<p>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem</p>\n\n<p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard</p>\n\n<p>dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>\n\n<p>specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining</p>\n\n<p>essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum</p>\n\n<p>passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem</p>\n\n<p>Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>\n\n<p>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>\n\n<p>a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\n\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\n\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\n\n<p>of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>\n\n<p>the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>\n\n<p>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\n\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\n\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\n\n<p>of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>\n\n<p>the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>\n\n<p>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\n\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\n\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\n\n<p>of Lorem Ipsum.</p>\n', 1, 1),
(4, 'Term & Services', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>\n\n<p>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>\n\n<p>book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>\n\n<p>unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>\n\n<p>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem</p>\n\n<p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard</p>\n\n<p>dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>\n\n<p>specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining</p>\n\n<p>essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum</p>\n\n<p>passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem</p>\n\n<p>Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>\n\n<p>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>\n\n<p>a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\n\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\n\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\n\n<p>of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>\n\n<p>the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>\n\n<p>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\n\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\n\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\n\n<p>of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>\n\n<p>the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>\n\n<p>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\n\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\n\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\n\n<p>of Lorem Ipsum.</p>\n', 1, 2),
(7, 'Refund Policy', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy</p>\n\n<p>text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen</p>\n\n<p>book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>\n\n<p>unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>\n\n<p>and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem</p>\n\n<p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard</p>\n\n<p>dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>\n\n<p>specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining</p>\n\n<p>essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum</p>\n\n<p>passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem</p>\n\n<p>Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>\n\n<p>standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make</p>\n\n<p>a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\n\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\n\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\n\n<p>of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>\n\n<p>the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>\n\n<p>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\n\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\n\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\n\n<p>of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>\n\n<p>the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</p>\n\n<p>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>\n\n<p>remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>\n\n<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>\n\n<p>of Lorem Ipsum.</p>\n', 1, 3),
(10, 'About Us', '<h2><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></h2>\n\n<p>Cras non justo sed nulla finibus pulvinar sit amet et neque. Duis et odio vitae orci mattis gravida. Nullam vel tincidunt ex. Praesent vel neque egestas arcu feugiat venenatis. Donec eget dolor quis justo tempus mattis. Phasellus dictum nunc ut dapibus dictum. Etiam vel leo nulla. Ut eu mi hendrerit, eleifend lacus sed, dictum neque.</p>\n\n<p>Aliquam non convallis nibh. Donec luctus purus magna, et commodo urna fermentum sed. Cras vel ex blandit, pretium nulla id, efficitur massa. Suspendisse potenti. Maecenas vel vehicula velit. Etiam quis orci molestie, elementum nisl eget, ultricies felis. Ut condimentum quam ut mi scelerisque accumsan. Suspendisse potenti. Etiam orci purus, iaculis sit amet ornare sit amet, finibus sed ligula. Quisque et mollis libero, sit amet consectetur augue. Vestibulum posuere pellentesque enim, in facilisis diam dictum eget. Phasellus sed vestibulum urna, in aliquet felis. Vivamus quis lacus id est ornare faucibus at id nulla.</p>\n\n<h2>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</h2>\n\n<p>Nulla justo lectus, sollicitudin at lorem eu, sollicitudin molestie augue. Maecenas egestas facilisis dolor mattis feugiat. Donec sed orci tellus. Maecenas tortor ipsum, varius vel dolor nec, bibendum porttitor felis. Mauris rutrum tristique vehicula. Sed ullamcorper nisl non erat pharetra, sit amet mattis enim posuere. Nulla convallis fringilla tortor, at vestibulum mauris cursus eget. Ut semper sollicitudin odio, sed molestie libero luctus quis. Integer viverra rutrum diam non maximus. Maecenas pellentesque tortor et sapien fermentum laoreet non et est. Phasellus felis quam, laoreet rhoncus erat eget, tempor condimentum massa. Integer gravida turpis id suscipit bibendum. Phasellus pellentesque venenatis erat, ut maximus justo vulputate sed. Vestibulum maximus enim ligula, non suscipit lectus dignissim vel. Suspendisse eleifend lorem egestas, tristique ligula id, condimentum est.</p>\n\n<p>Mauris nulla nulla, laoreet at auctor quis, bibendum rutrum neque. Donec eu ligula mi. Nam cursus vulputate semper. Phasellus facilisis mollis tellus, interdum laoreet justo rutrum pulvinar. Praesent molestie, nibh sed ultrices porttitor, nulla tortor volutpat enim, quis auctor est sem et orci. Proin lacinia vestibulum ex ut convallis. Phasellus tempus odio purus.</p>\n\n<ul>\n<li>Nam lacinia urna eu arcu auctor, eget euismod metus sagittis.</li>\n<li>Etiam eleifend ex eu interdum varius.</li>\n<li>Nunc dapibus purus eu felis tincidunt, vel rhoncus erat tristique.</li>\n<li>Aenean nec augue sit amet lorem blandit ultrices.</li>\n<li>Nullam at lacus eleifend, pulvinar velit tempor, auctor nisi.</li>\n</ul>\n\n<p>Nunc accumsan tincidunt augue sed blandit. Duis et dignissim nisi. Phasellus sed ligula velit. Etiam rhoncus aliquet magna, nec volutpat nulla imperdiet et. Nunc vel tincidunt magna. Vestibulum lacinia odio a metus placerat maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam et faucibus neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean et metus malesuada, ullamcorper dui vel, convallis est. Donec congue libero sed turpis porta consequat. Suspendisse potenti. Aliquam pharetra nibh in magna iaculis, non elementum ipsum luctus.</p>\n\n<p>&nbsp;</p>', 1, 4);
INSERT INTO `pages_description` (`page_description_id`, `name`, `description`, `language_id`, `page_id`) VALUES
(13, 'Privacy Policy', '<div class=\\\\\\\\\\\\\\\"document-previewer-wrapper-04553d\\\\\\\\\\\\\\\"><style>[data-custom-class=\\\\\\\\\\\\\\\'body\\\\\\\\\\\\\\\'],[data-custom-class=\\\\\\\\\\\\\\\'body\\\\\\\\\\\\\\\'] *{background: transparent !important;\r\n}[data-custom-class=\\\\\\\\\\\\\\\'title\\\\\\\\\\\\\\\'],[data-custom-class=\\\\\\\\\\\\\\\'title\\\\\\\\\\\\\\\'] *{font-family: Arial !important;\r\nfont-size: 26px !important;\r\ncolor: #000000 !important;\r\n}[data-custom-class=\\\\\\\\\\\\\\\'subtitle\\\\\\\\\\\\\\\'],[data-custom-class=\\\\\\\\\\\\\\\'subtitle\\\\\\\\\\\\\\\'] *{font-family: Arial !important;\r\ncolor: #595959 !important;\r\nfont-size: 14px !important;\r\n}[data-custom-class=\\\\\\\\\\\\\\\'heading_1\\\\\\\\\\\\\\\'],[data-custom-class=\\\\\\\\\\\\\\\'heading_1\\\\\\\\\\\\\\\'] *{font-family: Arial !important;\r\nfont-size: 19px !important;\r\ncolor: #000000 !important;\r\n}[data-custom-class=\\\\\\\\\\\\\\\'heading_2\\\\\\\\\\\\\\\'],[data-custom-class=\\\\\\\\\\\\\\\'heading_2\\\\\\\\\\\\\\\'] *{font-family: Arial !important;\r\nfont-size: 17px !important;\r\ncolor: #000000 !important;\r\n}[data-custom-class=\\\\\\\\\\\\\\\'body_text\\\\\\\\\\\\\\\'],[data-custom-class=\\\\\\\\\\\\\\\'body_text\\\\\\\\\\\\\\\'] *{color: #595959 !important;\r\nfont-size: 14px !important;\r\nfont-family: Arial !important;\r\n}[data-custom-class=\\\\\\\\\\\\\\\'link\\\\\\\\\\\\\\\'],[data-custom-class=\\\\\\\\\\\\\\\'link\\\\\\\\\\\\\\\'] *{color: #3030F1 !important;\r\nfont-size: 14px !important;\r\nfont-family: Arial !important;\r\nword-break: break-word !important;\r\n}</style>      <div data-custom-class=\\\\\\\\\\\\\\\"body\\\\\\\\\\\\\\\">\r\n      <p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 26px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"title\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><strong><span style=\\\\\\\\\\\\\\\"font-size: 26px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"title\\\\\\\\\\\\\\\">PRIVACY POLICY</span></span></strong> <bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span></strong></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(127, 127, 127);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"subtitle\\\\\\\\\\\\\\\">Last updated <bdt class=\\\\\\\\\\\\\\\"question\\\\\\\\\\\\\\\">__________</bdt></span></strong></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><br></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Thank you for choosing to be part of our community at <bdt class=\\\\\\\\\\\\\\\"question\\\\\\\\\\\\\\\">__________</bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> (“<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><strong>Company</strong><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt>”, “<strong>we</strong>”, “<strong>us</strong>”, or “<strong>our</strong>”). We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about our <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>, or our practices with regards to your personal information, please contact us at <bdt class=\\\\\\\\\\\\\\\"question\\\\\\\\\\\\\\\">__________</bdt>.</span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">When you visit our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> and use our services, you trust us with your personal information. We take your privacy very seriously. In this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span>, we seek to explain to you in the clearest way possible what information we collect, how we use it and what rights you have in relation to it. We hope you take some time to read through it carefully, as it is important. If there are any terms in this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>that you do not agree with, please discontinue use of our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> and our services.</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">This <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>applies to all information collected through our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> and/or any related services, sales, marketing or events (we refer to them collectively in this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>as the \\\\\\\\\\\\\\\"<strong>Services</strong>\\\\\\\\\\\\\\\").&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Please read this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>carefully as it will help you make informed decisions about sharing your personal information with us.&nbsp;</span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">TABLE OF CONTENTS</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#infocollect\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">1. WHAT INFORMATION DO WE COLLECT?</span></a> <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#infoshare\\\\\\\\\\\\\\\">2. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</a> <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"></span></bdt></span><span style=\\\\\\\\\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">&nbsp;<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> &nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#cookies\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">3. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</span></a><span style=\\\\\\\\\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">&nbsp;<bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">&nbsp;<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>&nbsp;</span></span>&nbsp;</p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#sociallogins\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</span></span></span></a><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">&nbsp;<bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt>&nbsp;</span></span> <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#intltransfers\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">5. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?</span></a> <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">&nbsp;<bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt> <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#3pwebsites\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">6. WHAT IS OUR STANCE ON THIRD-PARTY WEBSITES?</span></a> <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#inforetain\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">7. HOW LONG DO WE KEEP YOUR INFORMATION?&nbsp;</span></a><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">&nbsp;<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span> <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>&nbsp;</p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#infominors\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">8. DO WE COLLECT INFORMATION FROM MINORS?</span></a> <bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt>&nbsp;</p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#privacyrights\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">9. WHAT ARE YOUR PRIVACY RIGHTS?<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></a></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#DNT\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">10. CONTROLS FOR DO-NOT-TRACK FEATURES</span></a><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#caresidents\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">11. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</span></a><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#policyupdates\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">12. DO WE MAKE UPDATES TO THIS POLICY?</span></a></p><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#contact\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">13. HOW CAN YOU CONTACT US ABOUT THIS POLICY?</span></a></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p id=\\\\\\\\\\\\\\\"infocollect\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">1. WHAT INFORMATION DO WE COLLECT?</span></span>&nbsp;</strong>&nbsp;</span></p><div style=\\\\\\\\\\\\\\\"line-height: 1.1;\\\\\\\\\\\\\\\"><br></div><div><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"heading_2\\\\\\\\\\\\\\\">Personal information you disclose to us</span></strong>&nbsp;</span></div><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></em>&nbsp;</strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><em>We collect personal information that you provide to us such as name, address, contact information, passwords and security data,<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> and payment information<span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><em><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></em></span>.</em></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\">We collect personal information that you voluntarily provide to us when <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>registering at the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt> expressing an interest in obtaining information about us or our products and services, when participating in activities on the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>(such as posting messages in our online forums or entering competitions, contests or giveaways)<bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt> or otherwise contacting us</span><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">.</span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">The personal information that we collect depends on the context of your interactions with us and the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>, the choices you make and the products and features you use. The personal information we collect can include the following:</span><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></strong></span><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></strong></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Credentials.</span></strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">&nbsp;We collect passwords, password hints, and similar security information used for authentication and account access.<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Social Media Login Data.</span></strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">&nbsp;We provide you with the option to register using social media account details, like your Facebook, Twitter or other social media account. If you choose to register in this way, we will collect the Information described in the section called \\\\\\\\\\\\\\\"</span></span><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#sociallogins\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">HOW DO WE HANDLE YOUR SOCIAL LOGINS</span></a></span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">\\\\\\\\\\\\\\\" below.</span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"></span></bdt></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">All personal information that you provide to us must be true, complete and accurate, and you must notify us of any changes to such personal information.</span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"></span></bdt>&nbsp;</span>&nbsp;</span></p><div style=\\\\\\\\\\\\\\\"line-height: 1.1;\\\\\\\\\\\\\\\"><br></div><div><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"heading_2\\\\\\\\\\\\\\\">Information automatically collected</span></strong>&nbsp;</span></div><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></em>&nbsp;</strong><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Some information – such as IP address and/or browser and device characteristics – is collected automatically when you visit our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>.</span></em></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We automatically collect certain information when you visit, use or navigate the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>. This information does not reveal your specific identity (like your name or contact information) but may include device and usage information, such as your IP address, browser and device characteristics, operating system, language preferences, referring URLs, device name, country, location, information about how and when you use our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> and other technical information. This information is primarily needed to maintain the security and operation of our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>, and for our internal analytics and reporting purposes.<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Like many businesses, we also collect information through cookies and similar technologies. <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span></span><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"text-align: justify; background-color: initial; color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><br></p><p id=\\\\\\\\\\\\\\\"infoshare\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">2. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations.&nbsp;</span></em>&nbsp;</span>&nbsp;</span></p><div><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We may process or share data based on the following legal basis:</span></span></div><ul><li><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><strong>Consent:</strong> We may process your data if you have given us specific consent to use your personal information in a specific purpose.&nbsp;</span><br><br></span></li><li><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><strong>Legitimate Interests:</strong> We may process your data when it is reasonably necessary to achieve our legitimate business interests.&nbsp;</span><br><br></span></li><li><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><strong>Performance of a Contract:&nbsp;</strong>Where we have entered into a contract with you, we may process your personal information to fulfill the terms of our contract.&nbsp;</span><br><br></span></li><li><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><strong>Legal Obligations:</strong> We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).&nbsp;</span><br><br></span></li><li><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><strong>Vital Interests:</strong> We may disclose your information where we believe it is necessary to investigate, prevent, or take action regarding potential violations of our policies, suspected fraud, situations involving potential threats to the safety of any person and illegal activities, or as evidence in litigation in which we are involved.</span></span></li></ul><p style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">More specifically, we may need to process your data or share your personal information in the following situations:</span></span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span></p><ul><li><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Vendors, Consultants and Other Third-Party Service Providers.</span></strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">&nbsp;We may share your data with third party vendors, service providers, contractors or agents who perform services for us or on our behalf and require access to such information to do that work. Examples include: payment processing, data analysis, email delivery, hosting services, customer service and marketing efforts. We may allow selected third parties to use tracking technology on the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>, which will enable them to collect data about how you interact with the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> over time. This information may be used to, among other things, analyze and track data, determine the popularity of certain content and better understand online activity. Unless described in this Policy, we do not share, sell, rent or trade any of your information with third parties for their promotional purposes. &nbsp;<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span>&nbsp;</span>&nbsp;&nbsp;<br><br></li><li><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Business Transfers.</span></strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">&nbsp;We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span><br><br></li><li><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Third-Party Advertisers.</span></strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">&nbsp;We may use third-party advertising companies to serve ads when you visit the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>. These companies may use information about your visits to our Website(s) and other websites that are contained in web cookies and other tracking technologies in order to provide advertisements about goods and services of interest to you. <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span><br><br></li><li><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Affiliates.</span></strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">&nbsp;We may share your information with our affiliates, in which case we will require those affiliates to honor this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span>. Affiliates include our parent company and any subsidiaries, joint venture partners or other companies that we control or that are under common control with us.<span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span></span></span><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span><br><br></li><li><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Business Partners.</span></strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">&nbsp;We may share your information with our business partners to offer you certain products, services or promotions.</span><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span></span></span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span><br><br></li><li><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Other Users.</span></strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">&nbsp;When you share personal information <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>or otherwise interact with public areas of the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>, such personal information may be viewed by all users and may be publicly distributed outside the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> in perpetuity. <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>If you interact with other users of our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> and register through a social network (such as Facebook), your contacts on the social network will see your name, profile photo, and descriptions of your activity. <bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt>Similarly, other users will be able to view descriptions of your activity, communicate with you within our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>, and view your profile.</span><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span></span></li></ul><div><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"></span></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\"></span></bdt>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</span></div><div><br></div><div><span id=\\\\\\\\\\\\\\\"cookies\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">3. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?</span></span>&nbsp;</strong>&nbsp;</span></div><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We may use cookies and other tracking technologies to collect and store your information.</span></em>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store information. Specific information about how we use such technologies and how you can refuse certain cookies is set out in our Cookie Policy<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>.</span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span></span></span></span></span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p id=\\\\\\\\\\\\\\\"sociallogins\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">4. HOW DO WE HANDLE YOUR SOCIAL LOGINS?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">If you choose to register or log in to our services using a social media account, we may have access to certain information about you.</span></em>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> offer you the ability to register and login using your third party social media account details (like your Facebook or Twitter logins). Where you choose to do this, we will receive certain profile information about you from your social media provider. The profile Information we receive may vary depending on the social media provider concerned, but will often include your name, e-mail address, friends list, profile picture as well as other information you choose to make public. <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We will use the information we receive only for the purposes that are described in this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>or that are otherwise made clear to you on the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>. Please note that we do not control, and are not responsible for, other uses of your personal information by your third party social media provider. We recommend that you review their privacy policy to understand how they collect, use and share your personal information, and how you can set your privacy preferences on their sites and apps.</span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"></span></bdt>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p id=\\\\\\\\\\\\\\\"intltransfers\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">5. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We may transfer, store, and process your information in countries other than your own.</span></em>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Our servers are located in<bdt class=\\\\\\\\\\\\\\\"forloop-component\\\\\\\\\\\\\\\"></bdt>. If you are accessing our <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> from outside<bdt class=\\\\\\\\\\\\\\\"forloop-component\\\\\\\\\\\\\\\"></bdt>, please be aware that your information may be transferred to, stored, and processed by us in our facilities and by those third parties with whom we may share your personal information (see \\\\\\\\\\\\\\\"</span></span></span><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"#infoshare\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\">WILL YOUR INFORMATION BE SHARED WITH ANYONE?</span></span></a></span><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">\\\\\\\\\\\\\\\" above), in<bdt class=\\\\\\\\\\\\\\\"forloop-component\\\\\\\\\\\\\\\"></bdt> and other countries.</span></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">If you are a resident in the European Economic Area, then these countries may not have data protection or other laws as comprehensive as those in your country. We will however take all necessary measures to protect your personal information in accordance with this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>and applicable law.<bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span></span></span></span></span></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p id=\\\\\\\\\\\\\\\"3pwebsites\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">6. WHAT IS OUR STANCE ON THIRD-PARTY WEBSITES?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We are not responsible for the safety of any information that you share with third-party providers who advertise, but are not affiliated with, our websites.&nbsp;</span></em>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">The <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> may contain advertisements from third parties that are not affiliated with us and which may link to other websites, online services or mobile applications. We cannot guarantee the safety and privacy of data you provide to any third parties. Any data collected by third parties is not covered by this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span>. We are not responsible for the content or privacy and security practices and policies of any third parties, including other websites, services or applications that may be linked to or from the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>. You should review the policies of such third parties and contact them directly to respond to your questions.</span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"></span></bdt></span></span></span></span></span></span></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p id=\\\\\\\\\\\\\\\"inforetain\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">7. HOW LONG DO WE KEEP YOUR INFORMATION?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We keep your information for as long as necessary to fulfill the purposes outlined in this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>unless otherwise required by law.</span>&nbsp;</em>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We will only keep your personal information for as long as it is necessary for the purposes set out in this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span>, unless a longer retention period is required or permitted by law (such as tax, accounting or other legal requirements). No purpose in this policy will require us keeping your personal information for longer than <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt> <bdt class=\\\\\\\\\\\\\\\"question\\\\\\\\\\\\\\\">__________</bdt><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt>.</span></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize it, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.</span></span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>&nbsp;</span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p id=\\\\\\\\\\\\\\\"infominors\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">8. DO WE COLLECT INFORMATION FROM MINORS?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We do not knowingly collect data from or market to children under 18 years of age.</span></em>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We do not knowingly solicit data from or market to children under 18 years of age. By using the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>. If we learn that personal information from users less than 18 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records. If you become aware of any data we have collected from children under age 18, please contact us at <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"question\\\\\\\\\\\\\\\">__________</bdt><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt>.</span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p id=\\\\\\\\\\\\\\\"privacyrights\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">9. WHAT ARE YOUR PRIVACY RIGHTS?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><em><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>You may review, change, or terminate your account at any time.</em></span><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"></span></bdt></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">If you are resident in the European Economic Area and you believe we are unlawfully processing your personal information, you also have the right to complain to your local data protection supervisory authority. You can find their contact details here:</span></span>&nbsp;</span><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(48, 48, 241);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><a data-custom-class=\\\\\\\\\\\\\\\"link\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm\\\\\\\\\\\\\\\" target=\\\\\\\\\\\\\\\"_blank\\\\\\\\\\\\\\\">http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm</a>.</span></span></span><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"></span></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></p><div style=\\\\\\\\\\\\\\\"line-height: 1.1;\\\\\\\\\\\\\\\"><br></div><div><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span data-custom-class=\\\\\\\\\\\\\\\"heading_2\\\\\\\\\\\\\\\">Account Information</span></strong>&nbsp;</span>&nbsp;</span></div><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">If you would at any time like to review or change the information in your account or terminate your account, you can:<bdt class=\\\\\\\\\\\\\\\"forloop-component\\\\\\\\\\\\\\\"></bdt></span></span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, some information may be retained in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our Terms of Use and/or comply with legal requirements.</span><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span></span></span></span></span><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><strong><u><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Opting out of email marketing:</span></u>&nbsp;</strong><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">You can unsubscribe from our marketing email list at any time by clicking on the unsubscribe link in the emails that we send or by contacting us using the details provided below. You will then be removed from the marketing email list – however, we will still need to send you service-related emails that are necessary for the administration and use of your account. To otherwise opt-out, you may:<bdt class=\\\\\\\\\\\\\\\"forloop-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></bdt></span></span></span></span></span></span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><br></p><p id=\\\\\\\\\\\\\\\"DNT\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">10. CONTROLS FOR DO-NOT-TRACK FEATURES</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track (“DNT”) feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. No uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span>.</span>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><br></p><p id=\\\\\\\\\\\\\\\"caresidents\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">11. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.&nbsp;</span></em>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">California Civil Code Section 1798.83, also known as the “Shine The Light” law, permits our users who are California residents to request and obtain from us, once a year and free of charge, information about categories of personal information (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared personal information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us using the contact information provided below.</span></span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">If you are under 18 years of age, reside in California, and have a registered account with the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>, you have the right to request removal of unwanted data that you publicly post on the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>. To request removal of such data, please contact us using the contact information provided below, and include the email address associated with your account and a statement that you reside in California. We will make sure the data is not publicly displayed on the <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>, but please be aware that the data may not be completely or comprehensively removed from our systems.</span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p id=\\\\\\\\\\\\\\\"policyupdates\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">12. DO WE MAKE UPDATES TO THIS POLICY?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><strong><em><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">In Short:</span></span>&nbsp;</em>&nbsp;</strong><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><em><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">Yes, we will update this policy as necessary to stay compliant with relevant laws.</span></em>&nbsp;</span>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">We may update this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>from time to time. The updated version will be indicated by an updated “Revised” date and the updated version will be effective as soon as it is accessible. If we make material changes to this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span>, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this <span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">privacy policy</span></span><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span>&nbsp;</span>frequently to be informed of how we are protecting your information.</span></span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px; line-height: 1.5;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><br></span></p><p id=\\\\\\\\\\\\\\\"contact\\\\\\\\\\\\\\\" style=\\\\\\\\\\\\\\\"font-size:15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(0, 0, 0);\\\\\\\\\\\\\\\"><strong><span style=\\\\\\\\\\\\\\\"font-size: 19px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"heading_1\\\\\\\\\\\\\\\">13. HOW CAN YOU CONTACT US ABOUT THIS POLICY?</span></span>&nbsp;</strong>&nbsp;</span></p><p style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89); font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">If you have questions or comments about this policy, you may <bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt>email us at <bdt class=\\\\\\\\\\\\\\\"question\\\\\\\\\\\\\\\">__________</bdt><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt> or by post to:</span></span></p><div><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"question\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\">__________</span></span></bdt><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span></span></div><div><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"question\\\\\\\\\\\\\\\">__________</bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span></div><div><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"question\\\\\\\\\\\\\\\">__________</bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span>&nbsp;</span><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt><bdt class=\\\\\\\\\\\\\\\"statement-end-if-in-editor\\\\\\\\\\\\\\\"></bdt></span></span></span><span style=\\\\\\\\\\\\\\\"color: rgb(89, 89, 89);\\\\\\\\\\\\\\\"><span style=\\\\\\\\\\\\\\\"font-size: 15px;\\\\\\\\\\\\\\\"><span data-custom-class=\\\\\\\\\\\\\\\"body_text\\\\\\\\\\\\\\\"><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></span></span></span></div><div><br></div><div><bdt class=\\\\\\\\\\\\\\\"block-component\\\\\\\\\\\\\\\"></bdt></div><style>\r\n      ul {\r\n        list-style-type: square;\r\n      }\r\n      ul > li > ul {\r\n        list-style-type: circle;\r\n      }\r\n      ul > li > ul > li > ul {\r\n        list-style-type: square;\r\n      }\r\n      ol li {\r\n        font-family: Arial ;\r\n      }\r\n    </style>\r\n      </div>\r\n      <div style=\\\\\\\\\\\\\\\"padding:16px 20px 20px;background: transparent\\\\\\\\\\\\\\\">\r\n<h1 style=\\\\\\\\\\\\\\\"font-family: Arial;font-size: 19px;color: #000000;text-transform: uppercase\\\\\\\\\\\\\\\">\r\n  How can you review, update, or delete the data we collect from you?\r\n</h1>\r\n<div style=\\\\\\\\\\\\\\\"color: #595959;font-size: 14px;font-family: Arial;margin-top:18px; line-height: 1.2\\\\\\\\\\\\\\\">\r\n  Based on the laws of some countries, you may have the right to request access to the personal information we collect from you, change that information, or delete it in some circumstances. To request to review, update, or delete your personal information, please submit a request form by clicking <a style=\\\\\\\\\\\\\\\"color: rgb(48, 48, 241) !important;\\\\\\\\\\\\\\\" href=\\\\\\\\\\\\\\\"/notify/9b1446c1-4a29-46c7-87a8-81f5f7b65c46\\\\\\\\\\\\\\\" target=\\\\\\\\\\\\\\\"', 1, 5);
INSERT INTO `pages_description` (`page_description_id`, `name`, `description`, `language_id`, `page_id`) VALUES
(16, 'Term & Services', '<div class=\\\\\\\"document-previewer-wrapper-04553d\\\\\\\"><style>[data-custom-class=\\\\\\\'body\\\\\\\'],[data-custom-class=\\\\\\\'body\\\\\\\'] *{background: transparent !important;\r\n}[data-custom-class=\\\\\\\'title\\\\\\\'],[data-custom-class=\\\\\\\'title\\\\\\\'] *{font-family: Arial !important;\r\nfont-size: 26px !important;\r\ncolor: #000000 !important;\r\n}[data-custom-class=\\\\\\\'subtitle\\\\\\\'],[data-custom-class=\\\\\\\'subtitle\\\\\\\'] *{font-family: Arial !important;\r\ncolor: #595959 !important;\r\nfont-size: 14px !important;\r\n}[data-custom-class=\\\\\\\'heading_1\\\\\\\'],[data-custom-class=\\\\\\\'heading_1\\\\\\\'] *{font-family: Arial !important;\r\nfont-size: 19px !important;\r\ncolor: #000000 !important;\r\n}[data-custom-class=\\\\\\\'heading_2\\\\\\\'],[data-custom-class=\\\\\\\'heading_2\\\\\\\'] *{font-family: Arial !important;\r\nfont-size: 17px !important;\r\ncolor: #000000 !important;\r\n}[data-custom-class=\\\\\\\'body_text\\\\\\\'],[data-custom-class=\\\\\\\'body_text\\\\\\\'] *{color: #595959 !important;\r\nfont-size: 14px !important;\r\nfont-family: Arial !important;\r\n}[data-custom-class=\\\\\\\'link\\\\\\\'],[data-custom-class=\\\\\\\'link\\\\\\\'] *{color: #3030F1 !important;\r\nfont-size: 14px !important;\r\nfont-family: Arial !important;\r\nword-break: break-word !important;\r\n}</style>      <div data-custom-class=\\\\\\\"body\\\\\\\">\r\n      <div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><strong><span style=\\\\\\\"font-size: 26px;\\\\\\\"><span data-custom-class=\\\\\\\"title\\\\\\\">TERMS AND CONDITIONS</span></span></strong></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; color: rgb(127, 127, 127);\\\\\\\"><strong><span data-custom-class=\\\\\\\"subtitle\\\\\\\">Last Updated <bdt class=\\\\\\\"question\\\\\\\">__________</bdt> <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>&nbsp;</span> <bdt class=\\\\\\\"question\\\\\\\"><span data-custom-class=\\\\\\\"subtitle\\\\\\\">__________</span></bdt>&nbsp;</strong>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\"></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\"><span style=\\\\\\\"color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\"><strong style=\\\\\\\"font-weight: 700;\\\\\\\">1.</strong></span><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\\\\\">&nbsp;&nbsp;</strong><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\\\\\">&nbsp;Agreement to Terms</strong></span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(0, 0, 0);\\\\\\\"><strong><span data-custom-class=\\\\\\\"heading_1\\\\\\\">&nbsp;&nbsp;</span><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\"></span></span>&nbsp;</strong>&nbsp;</span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\">&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\">1.1 &nbsp;These Terms and Conditions constitute a legally binding agreement made between you, whether personally or on behalf of an entity (<strong>you</strong>), and <strong><bdt class=\\\\\\\"question\\\\\\\">__________</bdt><bdt class=\\\\\\\"block-component\\\\\\\"></bdt></strong>,<strong>&nbsp;</strong>located at<strong>&nbsp;<bdt class=\\\\\\\"question\\\\\\\">__________</bdt>,</strong><strong><bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</strong><strong><bdt class=\\\\\\\"question\\\\\\\">__________</bdt>,<bdt class=\\\\\\\"block-component\\\\\\\"></bdt><bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</strong><strong><bdt class=\\\\\\\"question\\\\\\\">__________</bdt> <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>&nbsp;</strong>(<strong>we</strong>, <strong>us</strong>), concerning your access to and use of the <bdt class=\\\\\\\"question\\\\\\\"><strong>__________</strong></bdt><strong>&nbsp;(<bdt class=\\\\\\\"question\\\\\\\">__________</bdt>)&nbsp;</strong>website as well as any related applications (the <strong>Site</strong>).&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">The Site provides the following services: <strong><bdt class=\\\\\\\"question\\\\\\\">__________</bdt>&nbsp;</strong>(<strong>Services</strong>). You agree that by accessing the Site and/or Services, you have read, understood, and agree to be bound by all of these Terms and Conditions.&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><strong>If you do not agree with all of these Terms and Conditions, then you are prohibited from using the Site and Services and you must discontinue use immediately</strong>. We recommend that you print a copy of these Terms and Conditions for future reference.&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">1.2 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">The supplemental policies set out in Section 1.7 below, as well as any supplemental terms and condition or documents that may be posted on the Site from time to time, are expressly incorporated by reference.&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">1.3 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">We may make changes to these Terms and Conditions at any time. The updated version of these Terms and Conditions will be indicated by an updated “Revised” date and the updated version will be effective as soon as it is accessible. You are responsible for reviewing these Terms and Conditions to stay informed of updates. Your continued use of the Site represents that you have accepted such changes.&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">1.4 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">We may update or change the Site from time to time to reflect changes to our products, our users\\\\\\\' needs and/or our business priorities.&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">1.5 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">Our site is directed to people residing in <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>. The information provided on the Site is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject us to any registration requirement within such jurisdiction or country. &nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">1.6 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">The Site is intended for users who are at least 18 years old. &nbsp;If you are under the age of 18, you are not permitted to register for the Site or use the Services without parental permission.</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">1.7 &nbsp;</span></span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\">Additional policies which also apply to your use of the Site include: <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"margin-left: 20px; text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\\\\\\\"><span style=\\\\\\\"font-size: 13px; color: rgb(89, 89, 89);\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\">●&nbsp;</span></span>&nbsp;</strong><span data-custom-class=\\\\\\\"body_text\\\\\\\">Our Privacy Notice <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>, which sets out the terms on which we process any personal data we collect from you, or that you provide to us. By using the Site, you consent to such processing and you warrant that all data provided by you is accurate. <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></span><span data-custom-class=\\\\\\\"body_text\\\\\\\">&nbsp;</span></span></div><div style=\\\\\\\"margin-left: 20px; text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><strong style=\\\\\\\"font-weight: 700; font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(0, 0, 0); font-size: medium; text-align: start; background-color: rgb(255, 255, 255);\\\\\\\"><span style=\\\\\\\"font-size: 13px; color: rgb(89, 89, 89);\\\\\\\">●&nbsp;</span></strong>Our Acceptable Use Policy <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>, which sets out the permitted uses and prohibited uses of the Site. When using the Site, you must comply with this Acceptable Use Policy. <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span>&nbsp;</span>&nbsp;</span></div><div style=\\\\\\\"margin-left: 20px; text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><strong style=\\\\\\\"font-weight: 700; font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(0, 0, 0); font-size: medium; text-align: start; background-color: rgb(255, 255, 255);\\\\\\\"><span style=\\\\\\\"font-size: 13px; color: rgb(89, 89, 89);\\\\\\\">●&nbsp;</span></strong>Our Cookie Policy <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>, which sets out information about the cookies on the Site. <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span>&nbsp;</span>&nbsp;</span></div><div style=\\\\\\\"margin-left: 20px; text-align: justify; line-height: 1.5;\\\\\\\"><strong style=\\\\\\\"font-weight: 700; font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(0, 0, 0); font-size: medium; background-color: rgb(255, 255, 255);\\\\\\\"><span style=\\\\\\\"font-size: 13px; color: rgb(89, 89, 89);\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\">●&nbsp;</span></span></strong><span data-custom-class=\\\\\\\"body_text\\\\\\\">If you purchase<bdt class=\\\\\\\"forloop-component\\\\\\\"></bdt> from the Site, our terms and conditions of supply <bdt class=\\\\\\\"question\\\\\\\">__________</bdt> will apply to the<span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;\\\\\\\"></span></span><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;\\\\\\\"><bdt class=\\\\\\\"forloop-component\\\\\\\"></bdt></span> <bdt class=\\\\\\\"block-component\\\\\\\" style=\\\\\\\"display: inline; box-sizing: border-box; border-radius: 3px; color: rgb(255, 255, 255); padding: 0px 2px; background-color: rgb(127, 156, 172); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\\\\\\\"></bdt></span><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt><bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></span></div><div style=\\\\\\\"margin-left: 20px; text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\\\\\\\"><span style=\\\\\\\"font-size: 13px; color: rgb(89, 89, 89);\\\\\\\">●&nbsp;</span></strong><span style=\\\\\\\"color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">Certain parts of this Site can be used only on payment of a fee.<bdt class=\\\\\\\"block-component\\\\\\\"></bdt> <span style=\\\\\\\"font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255);\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">If you wish to use such Services, you will, in addition to our Terms and Conditions, also be subject to our Terms and conditions of supply <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>.</span></span> <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt>&nbsp;</span>&nbsp;</span> <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt>&nbsp;</span><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"></span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><br></span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(0, 0, 0);\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;\\\\\\\"><strong><span data-custom-class=\\\\\\\"heading_1\\\\\\\">2. &nbsp;&nbsp;</span></strong>&nbsp;</span><strong><span data-custom-class=\\\\\\\"heading_1\\\\\\\">Acceptable Use&nbsp;</span></strong><span data-custom-class=\\\\\\\"body_text\\\\\\\"> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></span><span data-custom-class=\\\\\\\"body_text\\\\\\\">&nbsp;</span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">2.1 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">Our full Acceptable Use Policy <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>, sets out all the permitted uses and prohibited uses of this site.</span><span style=\\\\\\\"color: rgb(0, 0, 0);\\\\\\\">&nbsp;<bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> &nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">2.2 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">You may not access or use the Site for any purpose other than that for which we make the site and our services available. The Site may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">2.3 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">As a user of this Site, you agree not to: </span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><bdt class=\\\\\\\"forloop-component\\\\\\\"></bdt></span></span>&nbsp;</span></div><div style=\\\\\\\"margin-left: 20px; text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; text-align: start; background-color: rgb(255, 255, 255);\\\\\\\"><span style=\\\\\\\"font-size: 13px; color: rgb(89, 89, 89);\\\\\\\">●&nbsp;</span></strong><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">Falsely imply a relationship with us or another company with whom you do not have a relationship&nbsp;</span></span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(0, 0, 0);\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" style=\\\\\\\"display: inline; box-sizing: border-box; border-radius: 3px; color: rgb(255, 255, 255); padding: 0px 2px; background-color: rgb(127, 156, 172); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"></span></bdt>&nbsp;</span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><strong><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\">3. &nbsp; Information you provide to us</span></span></strong> <span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"></span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">3.1 &nbsp;</span>You represent and warrant that: (a) all registration information you submit will be true, accurate, current, and complete and relate to you and not a third party; (b) you will maintain the accuracy of such information and promptly update such information as necessary; (c) you will keep your password confidential and will be responsible for all use of your password and account; (d) you have the legal capacity and you agree to comply with these Terms and Conditions; and (e) you are not a minor in the jurisdiction in which you reside, or if a minor, you have received parental permission to use the Site.&nbsp;</span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">If you know or suspect that anyone other than you knows your user information (such as an identification code or user name) and/or password you must promptly notify us at <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>.</span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">3.2 &nbsp;</span><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">If you provide any information that is untrue, inaccurate, not current or incomplete, we may suspend or terminate your account. We may remove or change a user name you select if we determine that such user name is inappropriate. <bdt class=\\\\\\\"block-component\\\\\\\"></bdt> </span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(0, 0, 0);\\\\\\\"><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt>&nbsp;</span></span> <bdt class=\\\\\\\"block-component\\\\\\\" style=\\\\\\\"font-size: 15px;\\\\\\\"></bdt>&nbsp;</span><span style=\\\\\\\"background-color: initial; color: rgb(89, 89, 89); font-size: 15px;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\">&nbsp;</span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-size: 15px; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\"><strong style=\\\\\\\"font-weight: 700;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\">4.</span></strong>&nbsp;</span><span data-custom-class=\\\\\\\"heading_1\\\\\\\"><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-size: 15px; background-color: rgb(255, 255, 255);\\\\\\\">&nbsp;</strong><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; font-size: 15px; background-color: rgb(255, 255, 255);\\\\\\\">&nbsp;&nbsp;</strong></span><strong><span style=\\\\\\\"font-size:15px;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\">Content you provide to us &nbsp;</span><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\"></span></span></span></strong></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\">4.1 &nbsp;</span></span><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">There may be opportunities for you to post content to the Site or send feedback to us (<strong>User Content</strong>). You understand and agree that your User Content may be viewed by other users on the Site, and that they may be able to see who has posted that User Content. <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">4.2 &nbsp;<bdt class=\\\\\\\"block-component\\\\\\\"></bdt><em style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\">You further agree that we can use your User Content for any other purposes whatsoever in perpetuity without payment to you, and combine your User Content with other content for use within the Site and otherwise. We do not have to attribute your User Content to you</span></em><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\\\\\">.</span> <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt><em style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\">When you upload or post content to our site, you grant us the following rights to use that content:</span></em> <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt><bdt class=\\\\\\\"block-component\\\\\\\"></bdt><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt></span><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\">&nbsp;<bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; margin-left: 20px; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">4.3 &nbsp;</span><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">In posting User Content, including reviews or making contact with other users of the Site you shall comply with our Acceptable Use Policy <bdt class=\\\\\\\"question\\\\\\\">__________</bdt>.</span><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\">&nbsp;<bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> &nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">4.4</span><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255); font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">&nbsp;&nbsp;</span><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size:15px;\\\\\\\">You warrant that any User Content does comply with our Acceptable Use Policy, and you will be liable to us and indemnify us for any breach of that warranty. This means you will be responsible for any loss or damage we suffer as a result of your breach of this warranty.</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">4.5 &nbsp;</span><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size:15px;\\\\\\\">We have the right to remove any User Content you put on the Site if, in our opinion, such User Content does not comply with the Acceptable Use Policy.&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">4.6 &nbsp;</span><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size:15px;\\\\\\\">We are not responsible and accept no liability for any User Content including any such content that contains incorrect information or is defamatory or loss of User Content. We accept no obligation to screen, edit or monitor any User Content but we reserve the right to remove, screen and/or edit any User Content without notice and at any time. User Content has not been verified or approved by us and the views expressed by other users on the Site do not represent our views or values</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">4.7 &nbsp;</span><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">If you wish to complain about User Content uploaded by other users please contact us <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>at <bdt class=\\\\\\\"question\\\\\\\">__________</bdt> or use the take down or report button. <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> <span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\"></span>&nbsp;</span>&nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt>&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><br></span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><strong><span data-custom-class=\\\\\\\"heading_1\\\\\\\">5. &nbsp;&nbsp;</span></strong><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\"><strong>Our content&nbsp;</strong>&nbsp;</span><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"></span></span><span data-custom-class=\\\\\\\"body_text\\\\\\\">&nbsp;&nbsp;</span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\">5.1 &nbsp;</span></span><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">Unless otherwise indicated, the Site and Services including source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics on the Site (<strong>Our Content</strong>) are owned or licensed to us, and are protected by copyright and trade mark laws. &nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">5.2 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">Except as expressly provided in these Terms and Conditions, no part of the Site, Services or Our Content may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission.</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">5.3 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">Provided that you are eligible to use the Site, you are granted a limited licence to access and use the Site and Our Content and to download or print a copy of any portion of the Content to which you have properly gained access solely for your personal, non-commercial use. &nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">5.4 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">You shall not (a) try to gain unauthorised access to the Site or any networks, servers or computer systems connected to the Site; and/or (b) make for any purpose including error correction, any modifications, adaptions, additions or enhancements to the Site or Our Content, including the modification of the paper or digital copies you may have downloaded.</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">5.5 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">We shall (a) prepare the Site and Our Content with reasonable skill and care; and (b) use industry standard virus detection software to try to block the uploading of content to the Site that contains viruses.&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">5.6 &nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">The content on the Site is provided for general information only. It is not intended to amount to advice on which you should rely. You must obtain professional or specialist advice before taking, or refraining from taking, any action on the basis of the content on the Site.&nbsp;</span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">5.7 &nbsp;</span></span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">Although we make reasonable efforts to update the information on our site, we make no representations, warranties or guarantees, whether express or implied, that Our Content on the Site is accurate, complete or up to date.</span> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; float: none; display: inline !important;\\\\\\\"><strong><span data-custom-class=\\\\\\\"heading_1\\\\\\\">6. &nbsp; Link to third party content&nbsp;</span></strong>&nbsp;</span><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"></span></span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">6.1</span><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255); font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">&nbsp;&nbsp;</span><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">The Site may contain links to websites or applications operated by third parties.We do not have any influence or control over any such third party websites or applications or the third party operator. We are not responsible for and do not endorse any third party websites or applications or their availability or content.</span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><br></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">6.2 &nbsp;</span><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">We accept no responsibility for adverts contained within the Site. If you agree to purchase goods and/or services from any third party who advertises in the Site, you do so at your own risk. The advertiser, and not us, is responsible for such goods and/or services and if you have any questions or complaints in relation to them, you should contact the advertiser. &nbsp;</span></span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\">&nbsp;<bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> &nbsp;</span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><br></span></span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\"><strong style=\\\\\\\"font-weight: 700;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\">7.&nbsp;</span></strong>&nbsp;</span><span data-custom-class=\\\\\\\"heading_1\\\\\\\"><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\\\\\">&nbsp;</strong><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\\\\\">&nbsp;</strong></span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span data-custom-class=\\\\\\\"heading_1\\\\\\\"><span style=\\\\\\\"color: rgb(0, 0, 0);\\\\\\\"><strong>Site Management &nbsp;<span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\"></span></strong>&nbsp;</span>&nbsp;</span>&nbsp;</span></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><br></div><div style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; color: rgb(89, 89, 89); font-size: 15px; text-align: justify; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\"><span data-custom-class=\\\\\\\"body_text\\\\\\\">7.1</span></span><span data-custom-class=\\\\\\\"body_text\\\\\\\"><span style=\\\\\\\"font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255); font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">&nbsp;&nbsp;</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">We reserve the right at our sole discretion, to  (1) monitor the Site for breaches of these Terms and Conditions; (<span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">2</span>) take appropriate legal action against anyone in breach of applicable laws or these Terms and Conditions; <bdt class=\\\\\\\"block-component\\\\\\\"></bdt> <span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">(</span><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255); float: none; display: inline !important;\\\\\\\">3</span><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\\\\\\\">) refuse', 1, 6);
INSERT INTO `pages_description` (`page_description_id`, `name`, `description`, `language_id`, `page_id`) VALUES
(19, 'Refund Policy', '<div class=\\\\\\\"document-previewer-wrapper-04553d\\\\\\\"><style>[data-custom-class=\\\\\\\'body\\\\\\\'],[data-custom-class=\\\\\\\'body\\\\\\\'] *{background: transparent !important;\r\n}[data-custom-class=\\\\\\\'title\\\\\\\'],[data-custom-class=\\\\\\\'title\\\\\\\'] *{font-family: Arial !important;\r\nfont-size: 26px !important;\r\ncolor: #000000 !important;\r\n}[data-custom-class=\\\\\\\'subtitle\\\\\\\'],[data-custom-class=\\\\\\\'subtitle\\\\\\\'] *{font-family: Arial !important;\r\ncolor: #595959 !important;\r\nfont-size: 14px !important;\r\n}[data-custom-class=\\\\\\\'heading_1\\\\\\\'],[data-custom-class=\\\\\\\'heading_1\\\\\\\'] *{font-family: Arial !important;\r\nfont-size: 19px !important;\r\ncolor: #000000 !important;\r\n}[data-custom-class=\\\\\\\'heading_2\\\\\\\'],[data-custom-class=\\\\\\\'heading_2\\\\\\\'] *{font-family: Arial !important;\r\nfont-size: 17px !important;\r\ncolor: #000000 !important;\r\n}[data-custom-class=\\\\\\\'body_text\\\\\\\'],[data-custom-class=\\\\\\\'body_text\\\\\\\'] *{color: #595959 !important;\r\nfont-size: 14px !important;\r\nfont-family: Arial !important;\r\n}[data-custom-class=\\\\\\\'link\\\\\\\'],[data-custom-class=\\\\\\\'link\\\\\\\'] *{color: #3030F1 !important;\r\nfont-size: 14px !important;\r\nfont-family: Arial !important;\r\nword-break: break-word !important;\r\n}</style>      <div data-custom-class=\\\\\\\"body\\\\\\\">\r\n      <div><div align=\\\\\\\"center\\\\\\\" class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align:center;line-height:115%;\\\\\\\"><a name=\\\\\\\"_2cipo4yr3w5d\\\\\\\"></a><div align=\\\\\\\"center\\\\\\\" class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: left; line-height: 150%;\\\\\\\"><div align=\\\\\\\"center\\\\\\\" class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"title\\\\\\\" style=\\\\\\\"text-align: left; line-height: 1.5;\\\\\\\"><strong><span style=\\\\\\\"font-size: 26px;\\\\\\\">RETURN POLICY</span></strong></div><div align=\\\\\\\"center\\\\\\\" class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: left; line-height: 22.5px;\\\\\\\"><br></div><div align=\\\\\\\"center\\\\\\\" class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"subtitle\\\\\\\" style=\\\\\\\"text-align: left; line-height: 22.5px;\\\\\\\"><span style=\\\\\\\"font-size: 15px; line-height: 22px; color: rgb(166, 166, 166);\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); text-align: justify;\\\\\\\"><strong>Last updated <bdt class=\\\\\\\"block-container question question-in-editor\\\\\\\" data-id=\\\\\\\"c2f1cfaa-f8aa-f473-fe60-375b057c49c3\\\\\\\" data-type=\\\\\\\"question\\\\\\\">December 17, 2019</bdt>&nbsp;</strong></span></span></div></div><div align=\\\\\\\"center\\\\\\\" class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: left; line-height: 150%;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">&nbsp;</span></span></div><div align=\\\\\\\"center\\\\\\\" class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: left; line-height: 150%;\\\\\\\"><br></div><div align=\\\\\\\"center\\\\\\\" class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: left; line-height: 150%;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><br><a name=\\\\\\\"_2cipo4yr3w5d\\\\\\\"></a></span></div></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\">Thank you for your purchase. We hope you are happy with your purchase. However, if you are not completely satisfied with your purchase for any reason, you may return it to us for <bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"03b751bb-5eee-5230-df87-d0707fec3124\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"policy_type\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt><bdt data-type=\\\\\\\"body\\\\\\\">a full refund only</bdt></bdt><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"policy_type\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt></bdt>. Please see below for more information on our return policy.</bdt></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"line-height: 115%;\\\\\\\"><span style=\\\\\\\"font-size:11.0pt;\r\nline-height:115%;font-family:Arial;color:#595959;mso-themecolor:text1;\r\nmso-themetint:166;\\\\\\\">&nbsp;</span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"heading_1\\\\\\\" style=\\\\\\\"line-height: 115%;\\\\\\\"><a name=\\\\\\\"_iwimutmowezb\\\\\\\"></a><strong><span style=\\\\\\\"line-height: 115%; font-family: Arial; font-size: 19px;\\\\\\\">RETURNS</span></strong></div><div class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 115%;\\\\\\\"><span style=\\\\\\\"font-size:11.0pt;line-height:115%;font-family:Arial;color:#595959;\r\nmso-themecolor:text1;mso-themetint:166;\\\\\\\">&nbsp;</span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\">All returns must be postmarked within <bdt class=\\\\\\\"block-container question question-in-editor\\\\\\\" data-id=\\\\\\\"10b33c27-be1f-aeda-7ea3-7c1f52ee6130\\\\\\\" data-type=\\\\\\\"question\\\\\\\">seven (7)</bdt> days of the purchase date. All returned items must be in new and unused condition, with all original tags and labels attached.</span></div><div class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 115%;\\\\\\\"><span style=\\\\\\\"font-size:11.0pt;line-height:115%;font-family:Arial;color:#595959;\r\nmso-themecolor:text1;mso-themetint:166;\\\\\\\">&nbsp;</span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"heading_1\\\\\\\" style=\\\\\\\"line-height: 115%;\\\\\\\"><a name=\\\\\\\"_16t1v96tankw\\\\\\\"></a><strong><span style=\\\\\\\"line-height: 115%; font-family: Arial; font-size: 19px;\\\\\\\">RETURN PROCESS</span></strong></div><div class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 115%;\\\\\\\"><span style=\\\\\\\"font-size:11.0pt;line-height:115%;font-family:Arial;color:#595959;\r\nmso-themecolor:text1;mso-themetint:166;\\\\\\\">&nbsp;</span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\">To return an item, <bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"51c4b423-789c-79e6-4161-743acb653a2d\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"authorization_option\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt><bdt data-type=\\\\\\\"body\\\\\\\">please email customer service at <bdt class=\\\\\\\"block-container question question-in-editor\\\\\\\" data-id=\\\\\\\"0b78538e-7550-6c62-669a-d2eb2ed0eafb\\\\\\\" data-type=\\\\\\\"question\\\\\\\">refund@everything2us.com</bdt> to obtain a Return Merchandise Authorization (RMA) number. After receiving a RMA number,&nbsp;</bdt></bdt><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\" data-type=\\\\\\\"close\\\\\\\"></bdt></bdt>place the item securely in its original packaging<bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"903ce2af-7990-07ea-2615-36e36315d483\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"return_inlcude_option\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt><bdt data-type=\\\\\\\"body\\\\\\\">&nbsp;and include your proof of purchase,&nbsp;</bdt></bdt><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"return_inlcude_option\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt></bdt>and mail your return to the following address:</bdt></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 115%;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\"><br></span></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 115%;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\"><bdt class=\\\\\\\"block-container question question-in-editor\\\\\\\" data-id=\\\\\\\"49265208-ebd3-4d63-5ecb-9fcda064a7d5\\\\\\\" data-type=\\\\\\\"question\\\\\\\">everything2us.com</bdt><br></span></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\">Attn: Returns</span></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\"><bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"2e485380-f516-a019-540b-f82bd718b0df\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"authorization_option\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt><bdt data-type=\\\\\\\"body\\\\\\\">RMA #</bdt></bdt><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\" data-type=\\\\\\\"close\\\\\\\"></bdt></bdt></span></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><bdt class=\\\\\\\"block-container question question-in-editor\\\\\\\" data-id=\\\\\\\"22673e85-8c82-1948-b0e9-b16dd7c6f007\\\\\\\" data-type=\\\\\\\"question\\\\\\\">__________</bdt></span></span> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\"><bdt class=\\\\\\\"block-container question question-in-editor\\\\\\\" data-id=\\\\\\\"765d45c0-0386-b367-b58a-832b154c7ee8\\\\\\\" data-type=\\\\\\\"question\\\\\\\">NEW DELHI</bdt>, <bdt class=\\\\\\\"block-component\\\\\\\"></bdt><bdt class=\\\\\\\"block-component\\\\\\\"></bdt><bdt class=\\\\\\\"question\\\\\\\">DELHI</bdt><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> <bdt class=\\\\\\\"block-container question question-in-editor\\\\\\\" data-id=\\\\\\\"85b0476b-4b2d-4b3d-060f-fc67c287cbe7\\\\\\\" data-type=\\\\\\\"question\\\\\\\">110096</bdt> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt><bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\"><bdt class=\\\\\\\"question\\\\\\\">India</bdt> <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> <bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> &nbsp;</span></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 115%;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><span style=\\\\\\\"line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\">&nbsp;</span></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\"><bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"b7518b5d-84c0-c06e-ad97-c7421eb67b0b\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"shipping_fee_option\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt></bdt><bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"d3f0beb2-1468-a072-da09-6936c6e877e2\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"shipping_fee_option\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt></bdt><bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"48a0f62a-d42f-f443-061d-cbbf93b49154\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"shipping_fee_option\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt><bdt data-type=\\\\\\\"body\\\\\\\">Return shipping charges will be paid or reimbursed by us.&nbsp;</bdt></bdt><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\" data-type=\\\\\\\"close\\\\\\\"></bdt></bdt><bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"ac6ab4e0-da32-a003-8324-04d8b43cb50c\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"shipping_fee_option\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt></bdt></bdt></bdt></bdt></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 115%;\\\\\\\"><br></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"heading_1\\\\\\\" style=\\\\\\\"line-height: 115%;\\\\\\\"><a name=\\\\\\\"_qxq7t4ufn5pr\\\\\\\"></a><strong><span style=\\\\\\\"line-height: 115%; font-family: Arial; font-size: 19px;\\\\\\\">REFUNDS</span></strong></div><div class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 115%;\\\\\\\"><a name=\\\\\\\"_kcap2nw8xg2p\\\\\\\"></a><span style=\\\\\\\"font-size:11.0pt;line-height:115%;\r\nfont-family:Arial;color:#595959;mso-themecolor:text1;mso-themetint:166;\\\\\\\">&nbsp;</span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; line-height: 115%; font-family: Arial; color: rgb(89, 89, 89);\\\\\\\">After receiving your return and inspecting the condition of your item, we will process your <bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"4c11860e-4346-687b-5cb3-3727f319e194\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"policy_type\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt><bdt data-type=\\\\\\\"body\\\\\\\">return</bdt></bdt><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\" data-type=\\\\\\\"close\\\\\\\"></bdt></bdt>. Please allow at least <bdt class=\\\\\\\"block-container question question-in-editor\\\\\\\" data-id=\\\\\\\"ab10b1ab-f4a1-256f-29ae-65257d891371\\\\\\\" data-type=\\\\\\\"question\\\\\\\">seven (7)</bdt> days from the receipt of your item to process your <bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"4c11860e-4346-687b-5cb3-3727f319e194\\\\\\\" style=\\\\\\\"font-size: 14.6667px;\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"policy_type\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt><bdt data-type=\\\\\\\"body\\\\\\\">return</bdt></bdt><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\" data-type=\\\\\\\"close\\\\\\\"></bdt></bdt>.<bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"16f989a0-873e-9d7c-70f2-1c4b9cc7ecc4\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"policy_type\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt><bdt data-type=\\\\\\\"body\\\\\\\">Refunds may take 1-2 billing cycles to appear on your credit card statement, depending on your credit card company.&nbsp;</bdt></bdt><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\" data-type=\\\\\\\"close\\\\\\\"></bdt></bdt><bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"b49c01dc-6b19-275b-5996-06e6aeaaf917\\\\\\\"><bdt data-type=\\\\\\\"conditional-block\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\" data-record-question-key=\\\\\\\"customer_notification_option\\\\\\\" data-type=\\\\\\\"statement\\\\\\\"></bdt><bdt data-type=\\\\\\\"body\\\\\\\">We will notify you by email when your return has been processed.&nbsp;</bdt></bdt></bdt><bdt class=\\\\\\\"block-container if\\\\\\\" data-type=\\\\\\\"if\\\\\\\" id=\\\\\\\"b49c01dc-6b19-275b-5996-06e6aeaaf917\\\\\\\"><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\" data-type=\\\\\\\"close\\\\\\\"></bdt></bdt></span></div><div class=\\\\\\\"MsoNormal\\\\\\\" style=\\\\\\\"text-align: justify; line-height: 115%;\\\\\\\"><a name=\\\\\\\"_gjdgxs\\\\\\\"></a><span style=\\\\\\\"font-size:11.0pt;line-height:115%;font-family:Arial;color:#595959;\r\nmso-themecolor:text1;mso-themetint:166;\\\\\\\">&nbsp;</span></div><div class=\\\\\\\"MsoNormal\\\\\\\" data-custom-class=\\\\\\\"heading_1\\\\\\\" style=\\\\\\\"line-height: 115%;\\\\\\\"><a name=\\\\\\\"_33ujiidflcnn\\\\\\\"></a><strong><span style=\\\\\\\"line-height: 115%; font-family: Arial; font-size: 19px;\\\\\\\">EXCEPTIONS &nbsp;</span></strong><span style=\\\\\\\"font-size: 15px;\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\"></bdt> <bdt class=\\\\\\\"block-component\\\\\\\"></bdt> &nbsp;</span></div><div data-custom-class=\\\\\\\"body_text\\\\\\\" data-empty=\\\\\\\"true\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><br></span></span></div><div data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"line-height: 1.5;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\">For defective or damaged products, please contact us at the customer service number below to arrange a refund or exchange.&nbsp;</span></span></div><div data-custom-class=\\\\\\\"body_text\\\\\\\" data-empty=\\\\\\\"true\\\\\\\" style=\\\\\\\"line-height: 1.5;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></span></div><div data-custom-class=\\\\\\\"body_text\\\\\\\" data-empty=\\\\\\\"true\\\\\\\" style=\\\\\\\"line-height: 1.5;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><strong>Please Note</strong></span></span></div><div data-custom-class=\\\\\\\"body_text\\\\\\\" data-empty=\\\\\\\"true\\\\\\\" style=\\\\\\\"line-height: 1.5;\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt> &nbsp;</span></span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"></span></bdt> &nbsp;</span><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\">&nbsp; <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></span></div><div data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\"><strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\\\\\\\"><span style=\\\\\\\"font-size: 13px; color: rgb(89, 89, 89);\\\\\\\">&nbsp; &nbsp; &nbsp;<strong style=\\\\\\\"font-weight: 700; color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial; background-color: rgb(255, 255, 255);\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important;\\\\\\\">●&nbsp;</span></strong>&nbsp; &nbsp;&nbsp;</span></strong>Sale items are FINAL SALE and cannot be returned. &nbsp;<bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt>&nbsp; <bdt class=\\\\\\\"block-component\\\\\\\"></bdt>&nbsp;</span></div><div><br></div><div data-custom-class=\\\\\\\"heading_1\\\\\\\"><span style=\\\\\\\"font-size: 19px; color: rgb(0, 0, 0);\\\\\\\"><strong>QUESTIONS</strong></span></div><div><br></div><div data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\">If you have any questions concerning our return policy, please contact us at:</span><span style=\\\\\\\"font-size: 15px;\\\\\\\"><bdt class=\\\\\\\"block-component\\\\\\\"></bdt></span></div><div data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px;\\\\\\\"><bdt class=\\\\\\\"question\\\\\\\"><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\">+91 9582786799</span></bdt><span style=\\\\\\\"color: rgb(89, 89, 89);\\\\\\\"><bdt class=\\\\\\\"statement-end-if-in-editor\\\\\\\"></bdt>&nbsp;</span></span></div><div data-custom-class=\\\\\\\"body_text\\\\\\\" style=\\\\\\\"line-height: 1.5;\\\\\\\"><span style=\\\\\\\"font-size: 15px; color: rgb(89, 89, 89);\\\\\\\"><bdt class=\\\\\\\"question\\\\\\\">refund@everything2us.com</bdt>&nbsp;</span></div><style>\r\n      ul {\r\n        list-style-type: square;\r\n      }\r\n      ul > li > ul {\r\n        list-style-type: circle;\r\n      }\r\n      ul > li > ul > li > ul {\r\n        list-style-type: square;\r\n      }\r\n      ol li {\r\n        font-family: Arial ;\r\n      }\r\n    </style>\r\n      </div>\r\n      </div></div>', 1, 7),
(22, 'About Us', '<div id=\\\\\\\"generatedDoc\\\\\\\" contenteditable=\\\\\\\"true\\\\\\\" style=\\\\\\\"white-space:pre-wrap;height:500px;overflow:auto;border-style:solid;border-width:thin;padding:20px\\\\\\\" spellcheck=\\\\\\\"false\\\\\\\"><p>Welcome to everything2us.com, your number one source for all things [product]. We\\\\\\\'re dedicated to providing you the very best of [product], with an emphasis on [store characteristic 1], [store characteristic 2], [store characteristic 3].</p><br><p>Founded in [year] by [founder name], everything2us.com has come a long way from its beginnings in [starting location]. When [founder name] first started out, [his/her/their] passion for [brand message - e.g. \\\\\\\"eco-friendly cleaning products\\\\\\\"] drove them to start their own business.</p><br><p>We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don\\\\\\\'t hesitate to contact us.</p><br><p>Sincerely,</p><p>[founder name]</p></div>', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `payment_description`
--

CREATE TABLE `payment_description` (
  `id` int(11) NOT NULL,
  `payment_methods_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(11) NOT NULL,
  `sub_name_1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_name_2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_description`
--

INSERT INTO `payment_description` (`id`, `payment_methods_id`, `name`, `language_id`, `sub_name_1`, `sub_name_2`) VALUES
(1, 1, 'Braintree', 1, 'Credit Card', 'Paypal'),
(4, 2, 'Stripe', 1, '', ''),
(5, 3, 'Paypal', 1, '', ''),
(6, 4, 'Cash on Delivery', 1, '', ''),
(7, 5, 'Instamojo', 1, '', ''),
(8, 0, 'Cybersoure', 1, '', ''),
(9, 6, 'Hyperpay', 1, '', ''),
(10, 7, 'Credit & Debit card ,G Pay, NET Banking ,UPI', 1, '', ''),
(11, 8, 'PayTm', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `payment_methods_id` int(11) NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `environment` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`payment_methods_id`, `payment_method`, `status`, `environment`, `created_at`, `updated_at`) VALUES
(1, 'braintree', 0, 0, '2019-09-18 20:40:13', '0000-00-00 00:00:00'),
(2, 'stripe', 0, 0, '2019-09-18 20:56:17', '0000-00-00 00:00:00'),
(3, 'paypal', 0, 0, '2019-09-18 20:56:04', '0000-00-00 00:00:00'),
(4, 'cash_on_delivery', 1, 0, '2019-09-18 20:56:37', '0000-00-00 00:00:00'),
(5, 'instamojo', 0, 0, '2019-09-18 20:57:23', '0000-00-00 00:00:00'),
(6, 'hyperpay', 0, 0, '2019-09-18 20:56:44', '0000-00-00 00:00:00'),
(7, 'razor_pay', 1, 0, '2019-09-18 20:56:44', '0000-00-00 00:00:00'),
(8, 'pay_tm', 0, 0, '2019-09-18 20:56:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods_detail`
--

CREATE TABLE `payment_methods_detail` (
  `id` int(11) NOT NULL,
  `payment_methods_id` int(11) NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods_detail`
--

INSERT INTO `payment_methods_detail` (`id`, `payment_methods_id`, `key`, `value`) VALUES
(3, 1, 'merchant_id', 'wrv3cwbft6n3bg5g'),
(4, 1, 'public_key', '2bz5kxcj2gs3hdbx'),
(5, 1, 'private_key', '55ae08cb061e36dca59aaf2a883190bf'),
(9, 2, 'secret_key', 'sk_test_Gsz7jL4wRikI8YFaNzbwxKOF'),
(10, 2, 'publishable_key', 'pk_test_cCAEC6EejawuAvsvR9bhKrGR'),
(15, 3, 'id', 'AULJ0Q_kdXwEbi7PCBunUBJc4Kkg2vvdazF8kJoywAV9_i7iJMQphB9NLwdR0v2BAUlLF974iTrynbys'),
(18, 3, 'payment_currency', 'USD'),
(21, 5, 'api_key', 'c5a348bd5fcb4c866074c48e9c77c6c4'),
(22, 5, 'auth_token', '99448897defb4423b921fe47e0851b86'),
(23, 5, 'client_id', 'test_9l7MW8I7c2bwIw7q0koc6B1j5NrvzyhasQh'),
(24, 5, 'client_secret', 'test_m9Ey3Jqp9AfmyWKmUMktt4K3g1uMIdapledVRRYJha7WinxOsBVV5900QMlwvv3l2zRmzcYDEOKPh1cvnVedkAKtHOFFpJbqcoNCNrjx1FtZhtDMkEJFv9MJuXD'),
(32, 6, 'userid', '8a82941865340dc8016537cdac1e0841'),
(33, 6, 'password', 'sXrYy8pnsf'),
(34, 6, 'entityid', '8a82941865340dc8016537ce08db0845'),
(35, 7, 'RAZORPAY_KEY', 'rzp_live_nY3qYoueExwjMj'),
(36, 7, 'RAZORPAY_SECRET', '8m9peTqkjQ6aR4iKY33cqPQx'),
(37, 8, 'paytm_mid', 'QROqBU67944622696360'),
(39, 8, 'paytm_key', 'w#5bJEFYV5EU4vnP'),
(40, 8, 'current_domain_name', 'http://localhost:8000');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `products_quantity` int(11) NOT NULL,
  `products_model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_price` decimal(15,2) NOT NULL,
  `products_date_added` datetime NOT NULL,
  `products_last_modified` datetime DEFAULT NULL,
  `products_date_available` datetime DEFAULT NULL,
  `products_weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_weight_unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_status` tinyint(1) NOT NULL,
  `is_current` tinyint(1) NOT NULL,
  `products_tax_class_id` int(11) NOT NULL,
  `manufacturers_id` int(11) DEFAULT NULL,
  `products_ordered` int(11) NOT NULL DEFAULT 0,
  `products_liked` int(11) NOT NULL,
  `low_limit` int(11) NOT NULL,
  `is_feature` tinyint(1) NOT NULL DEFAULT 0,
  `products_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_type` int(11) NOT NULL DEFAULT 0,
  `products_min_order` int(11) NOT NULL DEFAULT 1,
  `products_max_stock` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `products_quantity`, `products_model`, `products_image`, `products_price`, `products_date_added`, `products_last_modified`, `products_date_available`, `products_weight`, `products_weight_unit`, `products_status`, `is_current`, `products_tax_class_id`, `manufacturers_id`, `products_ordered`, `products_liked`, `low_limit`, `is_feature`, `products_slug`, `products_type`, `products_min_order`, `products_max_stock`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, '123', '499.00', '0000-00-00 00:00:00', NULL, NULL, '320', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'men-s-business-casual-yellow-shirts', 1, 1, NULL, '2020-01-12 13:54:20', '2020-01-12 08:57:43'),
(2, 0, 'RDF1105', '137', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.200', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'navy-blue-casual-cotton-shirt', 1, 1, NULL, '2020-01-13 09:31:43', '2020-01-16 16:26:35'),
(3, 0, 'RDF1100', '143', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'brown-causal-cotton-shirt', 1, 1, 5, '2020-01-14 06:26:07', '2020-01-16 16:29:44'),
(4, 0, 'RDF1101', '150', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'blue-casual-cotton-shirt', 1, 1, 5, '2020-01-14 06:34:10', '2020-01-16 16:30:12'),
(5, 0, 'RDF1102', '156', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'purple-casual-cotton-shirt', 1, 1, 5, '2020-01-14 06:41:32', '2020-01-16 16:31:11'),
(6, 0, 'RDF1103', '161', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'brown-slim-fit-casual-cotton-shirt', 1, 1, 5, '2020-01-14 06:52:18', '2020-01-16 16:30:41'),
(7, 0, 'RDF1104', '167', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'dark-blue-slim-fit-cotton-shirt', 1, 1, NULL, '2020-01-16 14:42:40', '2020-01-16 16:31:41'),
(8, 0, 'RDF1106', '174', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'pink-color-slim-fit-shirt', 1, 1, NULL, '2020-01-16 14:48:40', '2020-01-16 16:32:11'),
(9, 0, 'RDF1107', '179', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'yellow-color-casual-cotton-shirt', 1, 1, NULL, '2020-01-16 14:54:49', NULL),
(10, 0, 'RDF1108', '185', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'dark-yellow-slim-fit-cotton-shirt', 1, 1, NULL, '2020-01-16 15:00:03', '2020-01-16 16:32:40'),
(11, 0, 'RDF1109', '192', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'red-slim-fit-cotton-shirt', 1, 1, NULL, '2020-01-16 15:12:56', '2020-01-16 16:33:14'),
(12, 0, 'RDF1110', '197', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'purple-color-slim-fit-cotton-shirt', 1, 1, NULL, '2020-01-16 15:20:12', '2020-01-16 16:33:47'),
(13, 0, 'RDF1111', '203', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'light-blue-casual-cotton-shirt', 1, 1, NULL, '2020-01-16 15:26:29', '2020-01-16 16:34:15'),
(14, 0, 'RDF1112', '209', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'dark-pink-slim-fit-cotton-shirt', 1, 1, NULL, '2020-01-16 15:38:44', '2020-01-16 16:34:46'),
(15, 0, 'RDF1113', '215', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'orange-slim-fit-casual-cotton-shirt', 1, 1, NULL, '2020-01-16 15:43:14', '2020-01-16 16:35:20'),
(16, 0, 'RDF1114', '221', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'light-pink-regular-fit-cotton-shirt', 1, 1, NULL, '2020-01-16 15:50:05', '2020-01-16 16:35:45'),
(17, 0, 'RDF1115', '401', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'white-formal-regular-fit-cotton-shirt', 1, 1, NULL, '2020-01-16 15:55:19', '2020-01-20 06:31:31'),
(18, 0, 'RDF1116', '233', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.300', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'slim-fit-white-casual-cotton-shirt', 1, 1, NULL, '2020-01-16 16:01:00', '2020-01-16 16:37:02'),
(20, 0, 'RDF1102-01', '250', '699.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'brown-and-blue-regular-fit-cotton-shirt', 1, 1, NULL, '2020-01-20 16:57:20', '2020-01-21 10:42:25'),
(21, 0, 'RDF1103-04', '262', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'brown-and-dart-blue-slim-fit-cotton-shirt', 1, 1, NULL, '2020-01-20 17:13:01', NULL),
(22, 0, 'RDF1105-08', '294', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'navy-blue-and-yellow-cotton-shirt', 1, 1, NULL, '2020-01-20 17:48:28', NULL),
(23, 0, 'RDF1106-12', '310', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'pink-and-light-orange-slim-fit-cotton-shirt', 1, 1, NULL, '2020-01-20 06:12:59', NULL),
(24, 0, 'RDF1111-09', '363', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'blue-and-red-casual-cotton-shirt-combo', 1, 1, NULL, '2020-01-20 06:48:21', NULL),
(25, 0, 'RDF1103-06', '264', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'brown-and-pink-casual-cotton-shirt-combo', 1, 1, NULL, '2020-01-20 07:00:30', NULL),
(26, 0, 'RDF1110-08', '330', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'yellow-and-purple-slim-fit-shirt-combo', 1, 1, NULL, '2020-01-20 07:11:30', NULL),
(27, 0, 'RDF1113-05', '381', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'orange-and-sky-blue-cotton-shirt-combo', 1, 1, NULL, '2020-01-20 07:19:47', '2020-01-20 07:23:40'),
(29, 0, 'RDF1110-07', '350', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'purple-and-yellow-casual-cotton-shirt', 1, 1, NULL, '2020-01-20 07:32:41', '2020-01-20 07:33:41'),
(30, 0, 'RDF1116-09', '395', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'white-and-red-slim-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-20 07:41:40', NULL),
(31, 0, 'RDF1105-13', '299', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'sky-blue-and-orange-casual-shirt-combo', 1, 1, NULL, '2020-01-20 07:57:47', NULL),
(32, 0, 'RDF1108-11', '331', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'yellow-and-blue-slim-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-20 08:14:33', NULL),
(33, 0, 'RDF1112-03', '302', '499.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'pink-and-brown-slim-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-20 08:48:31', NULL),
(34, 0, 'RDF1109-16', '345', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'red-and-white-casual-slim-fit-shirt', 1, 1, NULL, '2020-01-20 08:56:26', NULL),
(35, 0, 'RDF1101-14', '256', '699.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'blue-and-pink-regular-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-21 10:46:38', NULL),
(36, 0, 'RDF1102-15', '261', '699.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'purple-and-white-cotton-shirt-combo', 1, 1, NULL, '2020-01-21 10:58:56', NULL),
(37, 0, 'RDF1106-08', '306', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'pink-and-yellow-slim-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-21 11:09:52', '2020-01-21 11:17:04'),
(38, 0, 'RDF1109-04', '336', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'red-and-dark-blue-casual-slim-fit-shirt', 1, 1, NULL, '2020-01-21 11:21:54', NULL),
(39, 0, 'RDF1116-05', '392', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'white-and-sky-blue-slim-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-21 11:31:14', NULL),
(40, 0, 'RDF1113-03', '379', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'orange-and-brown-cotton-shirt-combo', 1, 1, NULL, '2020-01-21 11:39:43', '2020-01-21 11:42:51'),
(41, 0, 'RDF1111-12', '360', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'blue-and-pink-cotton-shirt-combo', 1, 1, NULL, '2020-01-21 11:52:32', NULL),
(42, 0, 'RDF1109-10', '341', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'red-and-purple-casual-slim-fit-shirt-combo', 1, 1, NULL, '2020-01-21 11:09:56', NULL),
(43, 0, 'RDF1112-16', '312', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'pink-and-white-slim-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-21 11:16:34', NULL),
(44, 0, 'RDF1107-13', '322', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'yellow-and-orange-slim-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-21 11:22:55', NULL),
(45, 0, 'RDF1103-08', '266', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'brown-and-dark-yellow-cotton-shirt-combo', 1, 1, NULL, '2020-01-21 11:29:33', NULL),
(46, 0, 'RDF1105-11', '297', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'sky-blue-and-blue-casual-shirt-combo', 1, 1, NULL, '2020-01-22 11:40:34', NULL),
(47, 0, 'RDF1107-03', '313', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'yellow-and-brown-slim-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-22 11:47:16', NULL),
(48, 0, 'RDF1113-16', '389', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'orange-and-white-slim-fit-cotton-shirt-combo', 1, 1, NULL, '2020-01-22 11:56:33', NULL),
(49, 0, 'RDF1109-12', '343', '799.00', '0000-00-00 00:00:00', NULL, NULL, '.450', 'Gram', 1, 1, 0, NULL, 0, 0, 0, 0, 'red-and-dark-pink-casual-slim-fit-shirt-combo', 1, 1, NULL, '2020-01-22 12:03:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `products_attributes_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `options_id` int(11) NOT NULL,
  `options_values_id` int(11) NOT NULL,
  `options_values_price` decimal(15,2) NOT NULL,
  `price_prefix` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`products_attributes_id`, `products_id`, `options_id`, `options_values_id`, `options_values_price`, `price_prefix`, `is_default`) VALUES
(1, 1, 1, 1, '0.00', '+', 1),
(2, 1, 1, 2, '0.00', '+', 1),
(3, 1, 1, 3, '0.00', '+', 1),
(4, 1, 1, 4, '0.00', '+', 1),
(5, 1, 1, 5, '0.00', '+', 1),
(6, 2, 1, 1, '0.00', '+', 1),
(7, 2, 1, 2, '0.00', '+', 1),
(8, 2, 1, 3, '0.00', '+', 1),
(9, 2, 1, 4, '0.00', '+', 1),
(10, 2, 1, 5, '0.00', '+', 1),
(11, 3, 1, 1, '0.00', '+', 1),
(12, 3, 1, 2, '0.00', '+', 1),
(13, 3, 1, 3, '0.00', '+', 1),
(14, 3, 1, 4, '0.00', '+', 1),
(15, 3, 1, 5, '0.00', '+', 1),
(16, 4, 1, 1, '0.00', '+', 1),
(17, 4, 1, 2, '0.00', '+', 1),
(18, 4, 1, 3, '0.00', '+', 1),
(19, 4, 1, 4, '0.00', '+', 1),
(20, 4, 1, 5, '0.00', '+', 1),
(21, 5, 1, 1, '0.00', '+', 1),
(22, 5, 1, 2, '0.00', '+', 1),
(23, 5, 1, 3, '0.00', '+', 1),
(24, 5, 1, 4, '0.00', '+', 1),
(25, 5, 1, 5, '0.00', '+', 1),
(26, 6, 1, 1, '0.00', '+', 1),
(27, 6, 1, 2, '0.00', '+', 1),
(28, 6, 1, 3, '0.00', '+', 1),
(29, 6, 1, 4, '0.00', '+', 1),
(30, 6, 1, 5, '0.00', '+', 1),
(31, 7, 1, 1, '0.00', '+', 1),
(32, 7, 1, 2, '0.00', '+', 1),
(33, 7, 1, 3, '0.00', '+', 1),
(34, 7, 1, 4, '0.00', '+', 1),
(35, 7, 1, 5, '0.00', '+', 1),
(36, 8, 1, 1, '0.00', '+', 1),
(37, 8, 1, 2, '0.00', '+', 1),
(38, 8, 1, 3, '0.00', '+', 1),
(39, 8, 1, 4, '0.00', '+', 1),
(40, 8, 1, 5, '0.00', '+', 1),
(41, 9, 1, 1, '0.00', '+', 1),
(42, 9, 1, 2, '0.00', '+', 1),
(43, 9, 1, 3, '0.00', '+', 1),
(44, 9, 1, 4, '0.00', '+', 1),
(45, 9, 1, 5, '0.00', '+', 1),
(46, 10, 1, 1, '0.00', '+', 1),
(47, 10, 1, 2, '0.00', '+', 1),
(48, 10, 1, 3, '0.00', '+', 1),
(49, 10, 1, 4, '0.00', '+', 1),
(50, 10, 1, 5, '0.00', '+', 1),
(51, 11, 1, 1, '0.00', '+', 1),
(52, 11, 1, 2, '0.00', '+', 1),
(53, 11, 1, 3, '0.00', '+', 1),
(54, 11, 1, 4, '0.00', '+', 1),
(55, 11, 1, 5, '0.00', '+', 1),
(56, 12, 1, 1, '0.00', '+', 1),
(57, 12, 1, 2, '0.00', '+', 1),
(58, 12, 1, 3, '0.00', '+', 1),
(59, 12, 1, 4, '0.00', '+', 1),
(60, 12, 1, 5, '0.00', '+', 1),
(61, 13, 1, 1, '0.00', '+', 1),
(62, 13, 1, 2, '0.00', '+', 1),
(63, 13, 1, 3, '0.00', '+', 1),
(64, 13, 1, 4, '0.00', '+', 1),
(65, 13, 1, 5, '0.00', '+', 1),
(66, 14, 1, 1, '0.00', '+', 1),
(67, 14, 1, 2, '0.00', '+', 1),
(68, 14, 1, 3, '0.00', '+', 1),
(69, 14, 1, 4, '0.00', '+', 1),
(70, 14, 1, 5, '0.00', '+', 1),
(71, 15, 1, 1, '0.00', '+', 1),
(72, 15, 1, 2, '0.00', '+', 1),
(73, 15, 1, 3, '0.00', '+', 1),
(74, 15, 1, 4, '0.00', '+', 1),
(75, 15, 1, 5, '0.00', '+', 1),
(76, 16, 1, 1, '0.00', '+', 1),
(77, 16, 1, 2, '0.00', '+', 1),
(78, 16, 1, 3, '0.00', '+', 1),
(79, 16, 1, 4, '0.00', '+', 1),
(80, 16, 1, 5, '0.00', '+', 1),
(81, 17, 1, 1, '0.00', '+', 1),
(82, 17, 1, 2, '0.00', '+', 1),
(83, 17, 1, 3, '0.00', '+', 1),
(84, 17, 1, 4, '0.00', '+', 1),
(85, 17, 1, 5, '0.00', '+', 1),
(86, 18, 1, 1, '0.00', '+', 1),
(87, 18, 1, 2, '0.00', '+', 1),
(88, 18, 1, 3, '0.00', '+', 1),
(89, 18, 1, 4, '0.00', '+', 1),
(90, 18, 1, 5, '0.00', '+', 1),
(96, 20, 1, 1, '0.00', '+', 1),
(97, 20, 1, 2, '0.00', '+', 1),
(98, 20, 1, 3, '0.00', '+', 1),
(99, 20, 1, 4, '0.00', '+', 1),
(100, 20, 1, 5, '0.00', '+', 1),
(101, 21, 1, 1, '0.00', '+', 1),
(102, 21, 1, 2, '0.00', '+', 1),
(103, 21, 1, 3, '0.00', '+', 1),
(104, 21, 1, 4, '0.00', '+', 1),
(105, 21, 1, 5, '0.00', '+', 1),
(106, 22, 1, 1, '0.00', '+', 1),
(107, 22, 1, 2, '0.00', '+', 1),
(108, 22, 1, 3, '0.00', '+', 1),
(109, 22, 1, 4, '0.00', '+', 1),
(110, 22, 1, 5, '0.00', '+', 1),
(111, 23, 1, 1, '0.00', '+', 1),
(112, 23, 1, 2, '0.00', '+', 1),
(113, 23, 1, 3, '0.00', '+', 1),
(114, 23, 1, 4, '0.00', '+', 1),
(115, 23, 1, 5, '0.00', '+', 1),
(116, 24, 1, 1, '0.00', '+', 1),
(117, 24, 1, 2, '0.00', '+', 1),
(118, 24, 1, 3, '0.00', '+', 1),
(119, 24, 1, 4, '0.00', '+', 1),
(120, 24, 1, 5, '0.00', '+', 1),
(121, 25, 1, 1, '0.00', '+', 1),
(122, 25, 1, 2, '0.00', '+', 1),
(123, 25, 1, 3, '0.00', '+', 1),
(124, 25, 1, 4, '0.00', '+', 1),
(125, 25, 1, 5, '0.00', '+', 1),
(126, 26, 1, 1, '0.00', '+', 1),
(127, 26, 1, 2, '0.00', '+', 1),
(128, 26, 1, 3, '0.00', '+', 1),
(129, 26, 1, 4, '0.00', '+', 1),
(130, 26, 1, 5, '0.00', '+', 1),
(131, 27, 1, 1, '0.00', '+', 1),
(132, 27, 1, 2, '0.00', '+', 1),
(133, 27, 1, 3, '0.00', '+', 1),
(134, 27, 1, 4, '0.00', '+', 1),
(135, 27, 1, 5, '0.00', '+', 1),
(136, 29, 1, 1, '0.00', '+', 1),
(137, 29, 1, 2, '0.00', '+', 1),
(138, 29, 1, 3, '0.00', '+', 1),
(139, 29, 1, 4, '0.00', '+', 1),
(140, 29, 1, 5, '0.00', '+', 1),
(141, 30, 1, 1, '0.00', '+', 1),
(142, 30, 1, 2, '0.00', '+', 1),
(143, 30, 1, 3, '0.00', '+', 1),
(144, 30, 1, 4, '0.00', '+', 1),
(145, 30, 1, 5, '0.00', '+', 1),
(146, 31, 1, 1, '0.00', '+', 1),
(147, 31, 1, 2, '0.00', '+', 1),
(148, 31, 1, 3, '0.00', '+', 1),
(149, 31, 1, 4, '0.00', '+', 1),
(150, 31, 1, 5, '0.00', '+', 1),
(151, 32, 1, 1, '0.00', '+', 1),
(152, 32, 1, 2, '0.00', '+', 1),
(153, 32, 1, 3, '0.00', '+', 1),
(154, 32, 1, 4, '0.00', '+', 1),
(155, 32, 1, 5, '0.00', '+', 1),
(156, 33, 1, 1, '0.00', '+', 1),
(157, 33, 1, 2, '0.00', '+', 1),
(158, 33, 1, 3, '0.00', '+', 1),
(159, 33, 1, 4, '0.00', '+', 1),
(160, 33, 1, 5, '0.00', '+', 1),
(161, 34, 1, 1, '0.00', '+', 1),
(162, 34, 1, 2, '0.00', '+', 1),
(163, 34, 1, 3, '0.00', '+', 1),
(164, 34, 1, 4, '0.00', '+', 1),
(165, 34, 1, 5, '0.00', '+', 1),
(166, 35, 1, 1, '0.00', '+', 1),
(167, 35, 1, 2, '0.00', '+', 1),
(168, 35, 1, 3, '0.00', '+', 1),
(169, 35, 1, 4, '0.00', '+', 1),
(170, 35, 1, 5, '0.00', '+', 1),
(171, 36, 1, 1, '0.00', '+', 1),
(172, 36, 1, 2, '0.00', '+', 1),
(173, 36, 1, 3, '0.00', '+', 1),
(174, 36, 1, 4, '0.00', '+', 1),
(175, 36, 1, 5, '0.00', '+', 1),
(176, 37, 1, 1, '0.00', '+', 1),
(177, 37, 1, 2, '0.00', '+', 1),
(178, 37, 1, 3, '0.00', '+', 1),
(179, 37, 1, 4, '0.00', '+', 1),
(180, 37, 1, 5, '0.00', '+', 1),
(181, 38, 1, 1, '0.00', '+', 1),
(182, 38, 1, 2, '0.00', '+', 1),
(183, 38, 1, 3, '0.00', '+', 1),
(184, 38, 1, 4, '0.00', '+', 1),
(185, 38, 1, 5, '0.00', '+', 1),
(186, 39, 1, 1, '0.00', '+', 1),
(187, 39, 1, 2, '0.00', '+', 1),
(188, 39, 1, 3, '0.00', '+', 1),
(189, 39, 1, 4, '0.00', '+', 1),
(190, 39, 1, 5, '0.00', '+', 1),
(191, 40, 1, 1, '0.00', '+', 1),
(192, 40, 1, 2, '0.00', '+', 1),
(193, 40, 1, 3, '0.00', '+', 1),
(194, 40, 1, 4, '0.00', '+', 1),
(195, 40, 1, 5, '0.00', '+', 1),
(196, 41, 1, 1, '0.00', '+', 1),
(197, 41, 1, 2, '0.00', '+', 1),
(198, 41, 1, 3, '0.00', '+', 1),
(199, 41, 1, 4, '0.00', '+', 1),
(200, 41, 1, 5, '0.00', '+', 1),
(201, 42, 1, 1, '0.00', '+', 1),
(202, 42, 1, 2, '0.00', '+', 1),
(203, 42, 1, 3, '0.00', '+', 1),
(204, 42, 1, 4, '0.00', '+', 1),
(205, 42, 1, 5, '0.00', '+', 1),
(206, 43, 1, 1, '0.00', '+', 1),
(207, 43, 1, 2, '0.00', '+', 1),
(208, 43, 1, 3, '0.00', '+', 1),
(209, 43, 1, 4, '0.00', '+', 1),
(210, 43, 1, 5, '0.00', '+', 1),
(211, 44, 1, 1, '0.00', '+', 1),
(212, 44, 1, 2, '0.00', '+', 1),
(213, 44, 1, 3, '0.00', '+', 1),
(214, 44, 1, 4, '0.00', '+', 1),
(215, 44, 1, 5, '0.00', '+', 1),
(216, 45, 1, 1, '0.00', '+', 1),
(217, 45, 1, 2, '0.00', '+', 1),
(218, 45, 1, 3, '0.00', '+', 1),
(219, 45, 1, 4, '0.00', '+', 1),
(220, 45, 1, 5, '0.00', '+', 1),
(221, 46, 1, 1, '0.00', '+', 1),
(222, 46, 1, 2, '0.00', '+', 1),
(223, 46, 1, 3, '0.00', '+', 1),
(224, 46, 1, 4, '0.00', '+', 1),
(225, 46, 1, 5, '0.00', '+', 1),
(226, 47, 1, 1, '0.00', '+', 1),
(227, 47, 1, 2, '0.00', '+', 1),
(228, 47, 1, 3, '0.00', '+', 1),
(229, 47, 1, 4, '0.00', '+', 1),
(230, 47, 1, 5, '0.00', '+', 1),
(231, 48, 1, 1, '0.00', '+', 1),
(232, 48, 1, 2, '0.00', '+', 1),
(233, 48, 1, 3, '0.00', '+', 1),
(234, 48, 1, 4, '0.00', '+', 1),
(235, 48, 1, 5, '0.00', '+', 1),
(236, 49, 1, 1, '0.00', '+', 1),
(237, 49, 1, 2, '0.00', '+', 1),
(238, 49, 1, 3, '0.00', '+', 1),
(239, 49, 1, 4, '0.00', '+', 1),
(240, 49, 1, 5, '0.00', '+', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes_download`
--

CREATE TABLE `products_attributes_download` (
  `products_attributes_id` int(11) NOT NULL,
  `products_attributes_filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `products_attributes_maxdays` int(11) DEFAULT 0,
  `products_attributes_maxcount` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_description`
--

CREATE TABLE `products_description` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL DEFAULT 1,
  `products_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `products_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_viewed` int(11) DEFAULT 0,
  `products_left_banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_left_banner_start_date` int(11) DEFAULT NULL,
  `products_left_banner_expire_date` int(11) DEFAULT NULL,
  `products_right_banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_right_banner_start_date` int(11) DEFAULT NULL,
  `products_right_banner_expire_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_description`
--

INSERT INTO `products_description` (`id`, `products_id`, `language_id`, `products_name`, `products_description`, `products_url`, `products_viewed`, `products_left_banner`, `products_left_banner_start_date`, `products_left_banner_expire_date`, `products_right_banner`, `products_right_banner_start_date`, `products_right_banner_expire_date`) VALUES
(1, 1, 1, 'men\'s business casual Yellow shirts', '<p>Materials &amp; Care</p>\r\n\r\n<ul>\r\n	<li>100% Cotton</li>\r\n	<li>Machine Wash</li>\r\n</ul>\r\n\r\n<p>The Details</p>\r\n\r\n<p>All-day comfort &amp; style you need.</p>\r\n\r\n<ul>\r\n	<li>Soft And Versatile Oxford Fabrication</li>\r\n	<li>Full Button-Up Front Placket</li>\r\n	<li>Button-Down Collar</li>\r\n	<li>Embroidered Eagle On Chest Pocket</li>\r\n	<li>Shirttail Hem</li>\r\n</ul>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(2, 2, 1, 'NAVY BLUE CASUAL COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> -&nbsp;Navy Blue Casual Cotton Shirt <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF - 1005 <strong>, Color</strong>&nbsp;- Navy Blue <strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>\r\n\r\n<p>&nbsp;</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(3, 3, 1, 'BROWN CASUAL COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> -&nbsp;Navy Blue Casual Cotton Shirt <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF - 1005 <strong>, Color</strong>&nbsp;- Navy Blue <strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(4, 4, 1, 'BLUE CASUAL COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Blue&nbsp;Casual Cotton Shirt <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1101&nbsp;<strong>, Color</strong>&nbsp;- Blue&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Regular&nbsp;, <strong>Fabric And Pocket</strong>&nbsp;- Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(5, 5, 1, 'PURPLE CASUAL COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Purple casual Cotton Shirt <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1102&nbsp;<strong>, Color</strong>&nbsp;- Purple&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Regular , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(6, 6, 1, 'BROWN SLIM FIT CASUAL COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Brown slim fit&nbsp;Casual Cotton Shirt <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1103&nbsp;<strong>, Color</strong>&nbsp;- Brown&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(7, 7, 1, 'DARK BLUE SLIM FIT COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Dark blue slim fit&nbsp;Casual Cotton Shirt <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1104&nbsp;<strong>, Color</strong>&nbsp;- Dark Blue&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(8, 8, 1, 'PINK COLOR SLIM FIT CASUAL SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Pink clor slim fit&nbsp;Casual <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1106&nbsp;<strong>, Color</strong>&nbsp;- Pink&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(9, 9, 1, 'YELLOW COLOR CASUAL COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Yellow color casual cotton shirt&nbsp;<strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1107&nbsp;<strong>, Color</strong>&nbsp;- Yellow&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(10, 10, 1, 'DARK YELLOW SLIM FIT COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Dark yellow&nbsp;slim fit&nbsp;Cotton Shirt <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1108&nbsp;<strong>, Color</strong>&nbsp;- Dark Yello&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(11, 11, 1, 'RED SLIM FIT COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Red slim fit cotton shirt&nbsp;<strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1109&nbsp;<strong>, Color</strong>&nbsp;- Red&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(12, 12, 1, 'PURPLE COLOR SLIM FIT COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Purple color slim fit cotton shirt&nbsp;<strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1110&nbsp;<strong>, Color</strong>&nbsp;- Purple&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(13, 13, 1, 'LIGHT BLUE CASUAL COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Light Blue casual cotton shirt&nbsp;<strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1111&nbsp;<strong>, Color</strong>&nbsp;- Light Blue&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(14, 14, 1, 'DARK PINK SLIM FIT COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Dark Pink slim fit cotton shirt&nbsp;<strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1112&nbsp;<strong>, Color</strong>&nbsp;- Dark Pink&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(15, 15, 1, 'ORANGE SLIM FIT CASUAL COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Orange slim fit Casual Cotton Shirt <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1113&nbsp;<strong>, Color</strong>&nbsp;- Orang&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(16, 16, 1, 'LIGHT PINK REGULAR FIT COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Light Pink regular fit cotton shirt&nbsp;<strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1114&nbsp;<strong>, Color</strong>&nbsp;- Light Pink&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(17, 17, 1, 'WHITE FORMAL REGULAR FIT COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - White formal regular fit&nbsp;Cotton Shirt <strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1115&nbsp;<strong>, Color</strong>&nbsp;- Whiten&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(18, 18, 1, 'SLIM FIT WHITE CASUAL COTTON SHIRT', '<p><strong>Pack of</strong>&nbsp; &nbsp;-&nbsp; 01 <strong>,</strong>&nbsp;<strong>Model Name</strong> - Slim fit whit casual cotton shirt&nbsp;<strong>,</strong>&nbsp;<strong>Style Code</strong> - RDF1116&nbsp;<strong>, Color</strong>&nbsp;- White&nbsp;<strong>,&nbsp;Closure</strong>&nbsp;- Button</p>\r\n\r\n<p><strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(20, 20, 1, 'Brown And Blue Regular Fit Cotton Shirt', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;Brown And Blue Regular Fit Cotton Shirt&nbsp;<strong>Style Code</strong> - RDF1100-01<strong>,Color</strong>&nbsp;- Brown And Blue&nbsp;<strong>,Closure</strong>&nbsp;- Button<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(21, 21, 1, 'Brown And Dart Blue Slim Fit Cotton Shirt', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;Brown And Dart Blue Slim Fit Cotton Shirt&nbsp;<strong>Style Code</strong> - RDF1103-04<strong>,Color</strong>&nbsp;- Brown And Dart Blue&nbsp;<strong>,Closure</strong>&nbsp;- Button<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(22, 22, 1, 'Navy Blue And Yellow Cotton Shirt', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02<strong>,</strong><strong>Model Name</strong> -&nbsp;Navy Blue And Yellow Cotton Shirt ,<strong>Style Code</strong> - RDF1105-08<strong>,Color</strong>&nbsp;- Navy Blue And Yellow<strong>,Closure</strong>&nbsp;- Button<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(23, 23, 1, 'Pink And Light Orange Slim Fit Cotton Shirt', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;Pink And Light Orange Slim Fit Cotton Shirt,<strong>Style Code</strong> - RDF1106-12<strong>,Color</strong>&nbsp;- Pink And Light Orange&nbsp;<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(24, 24, 1, 'Blue And Red Casual Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;Blue And Red Casual Cotton Shirt Combo,<strong>Style Code</strong> - RDF1111-09<strong>,Color</strong>&nbsp;- Blue And Red&nbsp;Blue&nbsp;<strong>,Closure</strong>&nbsp;- Button<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp;And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(25, 25, 1, 'Brown And Pink Casual Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;Brown And Pink Casual Cotton Shirt Combo,<strong>Style Code</strong> - RDF1103-06<strong>,Color</strong>&nbsp;- Brown And Pink&nbsp;<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(26, 26, 1, 'Yellow And Purple Slim Fit Shirt Combo', '<p><strong>Pack of</strong>&nbsp;-&nbsp;02<strong>,</strong><strong>Model Name</strong> -&nbsp;Yellow And Purple Slim Fit Shirt Combo,<strong>Style Code</strong> - RDF1110-08<strong>,Color</strong>&nbsp;- Yellow And Purple<strong>,Closure</strong>&nbsp;- Button<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(27, 27, 1, 'Orange And Sky Blue Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;Orange And Sky Blue Cotton Shirt Combo,<strong>Style Code</strong> - RDF1113-05<strong>,Color</strong>&nbsp;- Orange And Sky Blue<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(29, 29, 1, 'Purple And Yellow Casual Cotton Shirt', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;Purple And Yellow Casual Cotton Shirt,<strong>Style Code</strong> - RDF1110-07<strong>,Color</strong>&nbsp;- Purple And Yellow<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(30, 30, 1, 'White And Red Slim Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;White And Red Slim Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1116-09<strong>,Color</strong>&nbsp;- White And Red<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(31, 31, 1, 'Sky Blue And Orange Casual Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;Sky Blue And Orange Casual Shirt Combo,<strong>Style Code</strong> - RDF1105-13<strong>,Color</strong>&nbsp;- Sky Blue And Orange<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(32, 32, 1, 'Yellow And Blue Slim Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Yellow And Blue Slim Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1108-11<strong>,Color</strong>&nbsp;-Yellow And&nbsp;Blue<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(33, 33, 1, 'Pink And Brown Slim Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Pink And Brown Slim Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1112-03<strong>,Color</strong>&nbsp;- Pink And Brown<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(34, 34, 1, 'Red And White Casual Slim Fit Shirt', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Red And White Casual Slim Fit Shirt&nbsp;,<strong>Style Code</strong> - RDF1109-16<strong>,Color</strong>&nbsp;- Red And White<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(35, 35, 1, 'Blue And Pink Regular Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;Blue And Pink Regular Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1101-14<strong>,Color</strong>&nbsp;- Blue And Pink<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Regular&nbsp;, <strong>Fabric And Pocket</strong>&nbsp;- Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(36, 36, 1, 'Purple And White Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Purple And White Cotton Shirt Combo,<strong>Style Code</strong> - RDF1102-15<strong>,Color</strong>&nbsp;- Purple And White<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Regular, <strong>Fabric And Pocket</strong>&nbsp;-Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(37, 37, 1, 'Pink And Yellow Slim Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Pink And Yellow Slim Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1106-08<strong>,Color</strong>&nbsp;- Pink And Yellow<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(38, 38, 1, 'Red And Dark Blue Casual Slim Fit Shirt', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Red And Dark Blue Casual Slim Fit Shirt,<strong>Style Code</strong> - RDF1109-04<strong>,Color</strong>&nbsp;- Red And Dark<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(39, 39, 1, 'White And Sky Blue Slim Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> -&nbsp;White And Sky Blue Slim Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1116-05<strong>,Color</strong>&nbsp;- White And Sky Blue<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(40, 40, 1, 'Orange And Brown Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Orange And Brown Cotton Shirt Combo,<strong>Style Code</strong> - RDF1113-03<strong>,Color</strong>&nbsp;- Orange And Brown<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, NULL, 0, 0, NULL, 0, 0),
(41, 41, 1, 'Blue And Pink Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Blue And Pink Cotton Shirt Combo,<strong>Style Code</strong> - RDF1111-12<strong>,Color</strong>&nbsp;- Blue And Pink<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(42, 42, 1, 'Red And Purple Casual Slim Fit Shirt  Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Red And Purple Casual Slim Fit Shirt &nbsp;Combo,<strong>Style Code</strong> - RDF1109-10<strong>,Color</strong>&nbsp;- Red And Purple<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(43, 43, 1, 'Pink And White Slim Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Pink And White Slim Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1112-16<strong>,Color</strong>&nbsp;- Pink And White<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(44, 44, 1, 'Yellow And Orange Slim Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Yellow And Orange Slim Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1107-13<strong>,Color</strong>&nbsp;- Yellow And Orange<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(45, 45, 1, 'Brown And Dark Yellow Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Brown And Dark Yellow Cotton Shirt Combo,<strong>Style Code</strong> - RDF1103-08<strong>,Color</strong>&nbsp;- Brown And Dark Yellow<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(46, 46, 1, 'Sky Blue And Blue Casual Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Sky Blue And Blue Casual Shirt Combo,<strong>Style Code</strong> - RDF1105-11<strong>,Color</strong>&nbsp;- Sky Blue And Blue<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(47, 47, 1, 'Yellow And Brown Slim Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Yellow And Brown Slim Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1107-03<strong>,Color</strong>&nbsp;- Yellow And Brown<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(48, 48, 1, 'Orange And White Slim Fit Cotton Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Orange And White Slim Fit Cotton Shirt Combo,<strong>Style Code</strong> - RDF1113-16<strong>,Color</strong>&nbsp;- Orange And White<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL),
(49, 49, 1, 'Red And Dark Pink Casual Slim Fit Shirt Combo', '<p><strong>Pack of</strong>&nbsp; -&nbsp;02&nbsp;<strong>,</strong><strong>Model Name</strong> - Red And Dark Pink Casual Slim Fit Shirt Combo,<strong>Style Code</strong> - RDF1109-12<strong>,Color</strong>&nbsp;- Red And Dark Pink<strong>,Closure</strong>&nbsp;- Button,<strong>Fit&nbsp;</strong>- Slim , <strong>Fabric And Pocket</strong>&nbsp;- Dobby Cotton&nbsp; And Yes ,&nbsp;<strong>Fabric Care</strong>&nbsp;-&nbsp;Dry in shade, Slight color may bleed in first wash,regular Machine Wash</p>\r\n\r\n<hr />\r\n<p>If you are looking to be a trend setter when you go out to the fanciest of parties on a weekend, Being Everything2us has just the range of apparel that ensures you&#39;d never miss that admirable glance or compliment. You can tuck the shirt inside for a formal look and also put it outside for casual look.</p>', NULL, 0, '', NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `htmlcontent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `products_id`, `image`, `htmlcontent`, `sort_order`) VALUES
(1, 1, '', NULL, 1),
(2, 2, '138', NULL, 1),
(3, 2, '139', NULL, 2),
(4, 2, '140', NULL, 3),
(5, 2, '141', NULL, 4),
(6, 2, '142', NULL, 5),
(7, 3, '144', NULL, 1),
(8, 3, '145', NULL, 2),
(9, 3, '146', NULL, 3),
(10, 3, '147', NULL, 4),
(11, 3, '148', NULL, 5),
(12, 5, '155', NULL, 1),
(13, 5, '157', NULL, 2),
(14, 5, '158', NULL, 3),
(15, 5, '159', NULL, 4),
(16, 5, '160', NULL, 5),
(17, 6, '162', NULL, 1),
(18, 6, '163', NULL, 2),
(19, 6, '164', NULL, 3),
(20, 6, '165', NULL, 4),
(21, 6, '166', NULL, 5),
(22, 4, '149', NULL, 1),
(23, 4, '151', NULL, 2),
(24, 4, '152', NULL, 3),
(25, 4, '153', NULL, 4),
(26, 4, '154', NULL, 5),
(27, 7, '168', NULL, 1),
(28, 7, '169', NULL, 2),
(29, 7, '170', NULL, 3),
(30, 7, '171', NULL, 4),
(31, 7, '172', NULL, 5),
(32, 8, '173', NULL, 1),
(33, 8, '175', NULL, 2),
(34, 8, '176', NULL, 3),
(35, 8, '177', NULL, 4),
(36, 8, '178', NULL, 5),
(37, 9, '180', NULL, 1),
(38, 9, '181', NULL, 2),
(39, 9, '182', NULL, 3),
(40, 9, '183', NULL, 4),
(41, 9, '184', NULL, 5),
(42, 10, '186', NULL, 1),
(43, 10, '187', NULL, 2),
(44, 10, '188', NULL, 3),
(45, 10, '189', NULL, 4),
(46, 10, '190', NULL, 5),
(47, 11, '191', NULL, 1),
(48, 11, '193', NULL, 2),
(49, 11, '194', NULL, 3),
(50, 11, '196', NULL, 4),
(51, 11, '195', NULL, 5),
(52, 12, '198', NULL, 1),
(53, 12, '199', NULL, 2),
(54, 12, '200', NULL, 3),
(55, 12, '201', NULL, 4),
(56, 12, '202', NULL, 5),
(57, 13, '204', NULL, 1),
(58, 13, '205', NULL, 2),
(59, 13, '206', NULL, 3),
(60, 13, '208', NULL, 4),
(61, 13, '207', NULL, 5),
(62, 14, '210', NULL, 1),
(63, 14, '211', NULL, 2),
(64, 14, '212', NULL, 3),
(65, 14, '213', NULL, 4),
(66, 14, '214', NULL, 5),
(67, 15, '216', NULL, 1),
(68, 15, '217', NULL, 2),
(69, 15, '218', NULL, 3),
(70, 15, '219', NULL, 4),
(71, 15, '220', NULL, 5),
(72, 16, '222', NULL, 1),
(73, 16, '223', NULL, 2),
(74, 16, '224', NULL, 3),
(75, 16, '225', NULL, 4),
(76, 16, '226', NULL, 5),
(77, 17, '228', NULL, 1),
(78, 17, '229', NULL, 2),
(79, 17, '230', NULL, 3),
(81, 17, '232', NULL, 5),
(82, 18, '234', NULL, 1),
(83, 18, '235', NULL, 2),
(84, 18, '236', NULL, 3),
(85, 18, '237', NULL, 4),
(86, 18, '238', NULL, 5),
(87, 19, '203', NULL, 1),
(88, 19, '204', NULL, 2),
(89, 19, '206', NULL, 3),
(90, 19, '208', NULL, 4),
(91, 19, '215', NULL, 5),
(92, 19, '217', NULL, 6),
(93, 19, '218', NULL, 7),
(94, 19, '219', NULL, 8),
(95, 19, '220', NULL, 9),
(96, 2, '240', NULL, 6),
(97, 3, '240', NULL, 6),
(98, 4, '240', NULL, 6),
(99, 6, '240', NULL, 6),
(100, 5, '240', NULL, 6),
(101, 7, '240', NULL, 6),
(102, 8, '240', NULL, 6),
(103, 10, '240', NULL, 6),
(104, 11, '240', NULL, 6),
(105, 12, '240', NULL, 6),
(106, 13, '240', NULL, 6),
(107, 14, '240', NULL, 6),
(108, 15, '240', NULL, 6),
(109, 16, '240', NULL, 6),
(110, 17, '240', NULL, 6),
(111, 18, '240', NULL, 6),
(112, 20, '143', NULL, 1),
(113, 20, '146', NULL, 2),
(114, 20, '147', NULL, 3),
(115, 20, '150', NULL, 4),
(116, 20, '152', NULL, 5),
(117, 20, '153', NULL, 6),
(118, 20, '148', NULL, 7),
(119, 20, '154', NULL, 8),
(120, 21, '161', NULL, 1),
(121, 21, '162', NULL, 2),
(122, 21, '164', NULL, 3),
(123, 21, '165', NULL, 4),
(124, 21, '166', NULL, 5),
(125, 21, '167', NULL, 6),
(126, 21, '168', NULL, 7),
(127, 21, '170', NULL, 8),
(128, 21, '171', NULL, 9),
(129, 21, '172', NULL, 10),
(130, 22, '137', NULL, 1),
(131, 22, '139', NULL, 2),
(132, 22, '140', NULL, 3),
(133, 22, '141', NULL, 4),
(134, 22, '142', NULL, 5),
(135, 22, '185', NULL, 6),
(136, 22, '186', NULL, 7),
(137, 22, '188', NULL, 8),
(138, 22, '189', NULL, 9),
(139, 22, '190', NULL, 10),
(140, 22, '240', NULL, 11),
(141, 23, '221', NULL, 1),
(142, 23, '222', NULL, 2),
(143, 23, '176', NULL, 3),
(144, 23, '177', NULL, 4),
(145, 23, '178', NULL, 5),
(146, 23, '209', NULL, 6),
(147, 23, '210', NULL, 7),
(148, 23, '212', NULL, 8),
(149, 23, '213', NULL, 9),
(150, 23, '214', NULL, 10),
(151, 23, '240', NULL, 11),
(152, 24, '203', NULL, 1),
(153, 24, '204', NULL, 2),
(154, 24, '206', NULL, 3),
(155, 24, '208', NULL, 4),
(156, 24, '207', NULL, 5),
(157, 24, '192', NULL, 6),
(158, 24, '191', NULL, 7),
(159, 24, '194', NULL, 8),
(160, 24, '196', NULL, 9),
(161, 24, '195', NULL, 10),
(162, 24, '240', NULL, 11),
(163, 25, '161', NULL, 1),
(164, 25, '162', NULL, 2),
(165, 25, '164', NULL, 3),
(166, 25, '165', NULL, 4),
(168, 25, '166', NULL, 6),
(169, 25, '174', NULL, 7),
(170, 25, '173', NULL, 8),
(171, 25, '176', NULL, 9),
(172, 25, '178', NULL, 10),
(173, 25, '240', NULL, 11),
(174, 26, '185', NULL, 1),
(175, 26, '186', NULL, 2),
(176, 26, '188', NULL, 3),
(177, 26, '189', NULL, 4),
(178, 26, '190', NULL, 5),
(179, 26, '197', NULL, 6),
(180, 26, '198', NULL, 7),
(181, 26, '200', NULL, 8),
(182, 26, '201', NULL, 9),
(183, 26, '202', NULL, 10),
(184, 26, '240', NULL, 11),
(185, 27, '215', NULL, 1),
(186, 27, '216', NULL, 2),
(188, 27, '218', NULL, 4),
(189, 27, '219', NULL, 5),
(190, 27, '220', NULL, 6),
(191, 27, '137', NULL, 7),
(192, 27, '138', NULL, 8),
(193, 27, '140', NULL, 9),
(194, 27, '141', NULL, 10),
(195, 27, '142', NULL, 11),
(196, 27, '240', NULL, 12),
(197, 29, '197', NULL, 1),
(198, 29, '199', NULL, 2),
(199, 29, '200', NULL, 3),
(200, 29, '201', NULL, 4),
(201, 29, '202', NULL, 5),
(202, 29, '179', NULL, 6),
(203, 29, '180', NULL, 7),
(204, 29, '182', NULL, 8),
(205, 29, '183', NULL, 9),
(206, 29, '184', NULL, 10),
(207, 29, '240', NULL, 11),
(208, 30, '233', NULL, 1),
(209, 30, '234', NULL, 2),
(210, 30, '236', NULL, 3),
(211, 30, '237', NULL, 4),
(212, 30, '238', NULL, 5),
(213, 30, '192', NULL, 6),
(214, 30, '191', NULL, 7),
(215, 30, '194', NULL, 8),
(216, 30, '196', NULL, 9),
(217, 30, '195', NULL, 10),
(218, 30, '240', NULL, 11),
(219, 31, '137', NULL, 1),
(220, 31, '138', NULL, 2),
(221, 31, '140', NULL, 3),
(222, 31, '141', NULL, 4),
(223, 31, '142', NULL, 5),
(224, 31, '215', NULL, 6),
(225, 31, '216', NULL, 7),
(226, 31, '218', NULL, 8),
(227, 31, '219', NULL, 9),
(228, 31, '220', NULL, 10),
(229, 31, '240', NULL, 11),
(230, 32, '185', NULL, 1),
(231, 32, '186', NULL, 2),
(233, 32, '188', NULL, 4),
(234, 32, '189', NULL, 5),
(235, 32, '190', NULL, 6),
(236, 32, '203', NULL, 7),
(237, 32, '204', NULL, 8),
(238, 32, '206', NULL, 9),
(239, 32, '208', NULL, 10),
(240, 32, '207', NULL, 11),
(241, 32, '', NULL, 12),
(242, 32, '240', NULL, 13),
(243, 33, '174', NULL, 1),
(244, 33, '173', NULL, 2),
(245, 33, '176', NULL, 3),
(246, 33, '177', NULL, 4),
(247, 33, '178', NULL, 5),
(248, 33, '161', NULL, 6),
(249, 33, '163', NULL, 7),
(250, 33, '164', NULL, 8),
(251, 33, '166', NULL, 9),
(252, 33, '240', NULL, 10),
(253, 34, '192', NULL, 1),
(254, 34, '193', NULL, 2),
(255, 34, '194', NULL, 3),
(256, 34, '196', NULL, 4),
(257, 34, '195', NULL, 5),
(258, 34, '233', NULL, 6),
(259, 34, '234', NULL, 7),
(260, 34, '236', NULL, 8),
(261, 34, '237', NULL, 9),
(262, 34, '238', NULL, 10),
(263, 34, '240', NULL, 11),
(264, 35, '150', NULL, 1),
(265, 35, '149', NULL, 2),
(266, 35, '152', NULL, 3),
(268, 35, '153', NULL, 4),
(269, 35, '154', NULL, 5),
(270, 35, '221', NULL, 6),
(271, 35, '222', NULL, 7),
(272, 35, '224', NULL, 8),
(273, 35, '225', NULL, 9),
(274, 35, '226', NULL, 10),
(275, 35, '240', NULL, 11),
(276, 36, '156', NULL, 1),
(277, 36, '155', NULL, 2),
(278, 36, '158', NULL, 3),
(279, 36, '159', NULL, 4),
(280, 36, '160', NULL, 5),
(281, 36, '244', NULL, 6),
(282, 36, '228', NULL, 7),
(283, 36, '230', NULL, 8),
(284, 36, '231', NULL, 9),
(285, 36, '232', NULL, 10),
(286, 36, '240', NULL, 11),
(287, 37, '174', NULL, 1),
(288, 37, '173', NULL, 2),
(289, 37, '176', NULL, 3),
(290, 37, '177', NULL, 4),
(291, 37, '178', NULL, 5),
(292, 37, '185', NULL, 6),
(293, 37, '186', NULL, 7),
(294, 37, '188', NULL, 8),
(295, 37, '189', NULL, 9),
(296, 37, '190', NULL, 10),
(297, 37, '190', NULL, 11),
(298, 37, '240', NULL, 12),
(299, 38, '192', NULL, 1),
(300, 38, '191', NULL, 2),
(301, 38, '194', NULL, 3),
(302, 38, '196', NULL, 4),
(303, 38, '195', NULL, 5),
(304, 38, '167', NULL, 6),
(305, 38, '168', NULL, 7),
(306, 38, '170', NULL, 8),
(307, 38, '171', NULL, 9),
(308, 38, '172', NULL, 10),
(309, 38, '240', NULL, 11),
(310, 39, '233', NULL, 1),
(311, 39, '234', NULL, 2),
(312, 39, '236', NULL, 3),
(313, 39, '237', NULL, 4),
(314, 39, '238', NULL, 5),
(315, 39, '137', NULL, 6),
(316, 39, '138', NULL, 7),
(317, 39, '140', NULL, 8),
(318, 39, '141', NULL, 9),
(319, 39, '142', NULL, 10),
(320, 39, '240', NULL, 11),
(321, 40, '215', NULL, 1),
(322, 40, '216', NULL, 2),
(323, 40, '218', NULL, 3),
(324, 40, '219', NULL, 4),
(325, 40, '220', NULL, 5),
(326, 40, '161', NULL, 6),
(327, 40, '162', NULL, 7),
(328, 40, '164', NULL, 8),
(329, 40, '165', NULL, 9),
(330, 40, '166', NULL, 10),
(331, 40, '240', NULL, 11),
(332, 41, '203', NULL, 1),
(333, 41, '204', NULL, 2),
(334, 41, '206', NULL, 3),
(335, 41, '208', NULL, 4),
(336, 41, '207', NULL, 5),
(337, 41, '209', NULL, 6),
(338, 41, '210', NULL, 7),
(339, 41, '212', NULL, 8),
(340, 41, '213', NULL, 9),
(341, 41, '214', NULL, 10),
(342, 41, '240', NULL, 11),
(343, 42, '192', NULL, 1),
(344, 42, '191', NULL, 2),
(345, 42, '194', NULL, 3),
(346, 42, '196', NULL, 4),
(347, 42, '195', NULL, 5),
(348, 42, '197', NULL, 6),
(349, 42, '198', NULL, 7),
(350, 42, '200', NULL, 8),
(351, 42, '201', NULL, 9),
(352, 42, '202', NULL, 10),
(353, 42, '240', NULL, 11),
(354, 43, '174', NULL, 1),
(355, 43, '173', NULL, 2),
(356, 43, '176', NULL, 3),
(357, 43, '177', NULL, 4),
(358, 43, '178', NULL, 5),
(359, 43, '233', NULL, 6),
(360, 43, '234', NULL, 7),
(361, 43, '236', NULL, 8),
(362, 43, '237', NULL, 9),
(363, 43, '238', NULL, 10),
(364, 43, '240', NULL, 11),
(365, 44, '179', NULL, 1),
(366, 44, '180', NULL, 2),
(367, 44, '182', NULL, 3),
(368, 44, '183', NULL, 4),
(369, 44, '184', NULL, 5),
(370, 44, '215', NULL, 6),
(371, 44, '216', NULL, 7),
(372, 44, '218', NULL, 8),
(373, 44, '219', NULL, 9),
(374, 44, '220', NULL, 10),
(375, 44, '240', NULL, 11),
(376, 45, '161', NULL, 1),
(377, 45, '162', NULL, 2),
(378, 45, '164', NULL, 3),
(379, 45, '165', NULL, 4),
(380, 45, '166', NULL, 5),
(381, 45, '185', NULL, 6),
(382, 45, '186', NULL, 7),
(383, 45, '188', NULL, 8),
(384, 45, '190', NULL, 9),
(385, 45, '189', NULL, 10),
(386, 45, '240', NULL, 11),
(387, 46, '137', NULL, 1),
(388, 46, '138', NULL, 2),
(389, 46, '140', NULL, 3),
(390, 46, '141', NULL, 4),
(391, 46, '142', NULL, 5),
(392, 46, '203', NULL, 6),
(393, 46, '204', NULL, 7),
(394, 46, '206', NULL, 8),
(395, 46, '208', NULL, 9),
(396, 46, '207', NULL, 10),
(397, 46, '240', NULL, 11),
(398, 47, '179', NULL, 1),
(399, 47, '180', NULL, 2),
(400, 47, '182', NULL, 3),
(401, 47, '183', NULL, 4),
(402, 47, '184', NULL, 5),
(403, 47, '161', NULL, 6),
(404, 47, '162', NULL, 7),
(405, 47, '164', NULL, 8),
(406, 47, '165', NULL, 9),
(407, 47, '166', NULL, 10),
(408, 47, '240', NULL, 11),
(409, 48, '215', NULL, 1),
(410, 48, '216', NULL, 2),
(411, 48, '218', NULL, 3),
(412, 48, '219', NULL, 4),
(413, 48, '220', NULL, 5),
(414, 48, '233', NULL, 6),
(415, 48, '234', NULL, 7),
(416, 48, '236', NULL, 8),
(417, 48, '236', NULL, 9),
(418, 48, '237', NULL, 10),
(419, 48, '238', NULL, 11),
(420, 48, '240', NULL, 12),
(421, 49, '192', NULL, 1),
(422, 49, '191', NULL, 2),
(423, 49, '194', NULL, 3),
(424, 49, '196', NULL, 4),
(425, 49, '195', NULL, 5),
(426, 49, '', NULL, 6),
(427, 49, '209', NULL, 7),
(428, 49, '210', NULL, 8),
(429, 49, '212', NULL, 9),
(430, 49, '213', NULL, 10),
(431, 49, '214', NULL, 11),
(432, 49, '240', NULL, 12);

-- --------------------------------------------------------

--
-- Table structure for table `products_notifications`
--

CREATE TABLE `products_notifications` (
  `products_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_options`
--

CREATE TABLE `products_options` (
  `products_options_id` int(11) NOT NULL,
  `products_options_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_options`
--

INSERT INTO `products_options` (`products_options_id`, `products_options_name`) VALUES
(1, 'Size');

-- --------------------------------------------------------

--
-- Table structure for table `products_options_descriptions`
--

CREATE TABLE `products_options_descriptions` (
  `products_options_descriptions_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `options_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_options_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_options_descriptions`
--

INSERT INTO `products_options_descriptions` (`products_options_descriptions_id`, `language_id`, `options_name`, `products_options_id`) VALUES
(1, 1, 'Size', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_options_values`
--

CREATE TABLE `products_options_values` (
  `products_options_values_id` int(11) NOT NULL,
  `products_options_id` int(11) NOT NULL,
  `products_options_values_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_options_values`
--

INSERT INTO `products_options_values` (`products_options_values_id`, `products_options_id`, `products_options_values_name`) VALUES
(1, 1, 'S'),
(2, 1, 'M'),
(3, 1, 'L'),
(4, 1, 'XL'),
(5, 1, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `products_options_values_descriptions`
--

CREATE TABLE `products_options_values_descriptions` (
  `products_options_values_descriptions_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `options_values_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_options_values_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_options_values_descriptions`
--

INSERT INTO `products_options_values_descriptions` (`products_options_values_descriptions_id`, `language_id`, `options_values_name`, `products_options_values_id`) VALUES
(1, 1, 'S  ( 36 )', 1),
(2, 1, 'M ( 38 )', 2),
(3, 1, 'L  ( 40 )', 3),
(4, 1, 'XL  ( 42 )', 4),
(5, 1, 'XXL  ( 44 )', 5);

-- --------------------------------------------------------

--
-- Table structure for table `products_shipping_rates`
--

CREATE TABLE `products_shipping_rates` (
  `products_shipping_rates_id` int(11) NOT NULL,
  `weight_from` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_to` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_price` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `products_shipping_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_shipping_rates`
--

INSERT INTO `products_shipping_rates` (`products_shipping_rates_id`, `weight_from`, `weight_to`, `weight_price`, `unit_id`, `products_shipping_status`) VALUES
(1, '0', '10', 10, 1, 1),
(2, '10', '20', 10, 1, 1),
(3, '20', '30', 10, 1, 1),
(4, '30', '50', 50, 1, 1),
(5, '50', '100000', 70, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_to_categories`
--

CREATE TABLE `products_to_categories` (
  `products_to_categories_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_to_categories`
--

INSERT INTO `products_to_categories` (`products_to_categories_id`, `products_id`, `categories_id`) VALUES
(6, 1, 2),
(27, 9, 1),
(42, 2, 1),
(43, 3, 1),
(44, 4, 1),
(45, 6, 1),
(46, 5, 1),
(47, 7, 1),
(48, 8, 1),
(49, 10, 1),
(50, 11, 1),
(51, 12, 1),
(52, 13, 1),
(53, 14, 1),
(54, 15, 1),
(55, 16, 1),
(58, 18, 1),
(72, 21, 2),
(73, 22, 2),
(74, 23, 2),
(78, 17, 1),
(79, 24, 2),
(80, 25, 2),
(81, 26, 2),
(84, 27, 2),
(87, 29, 2),
(88, 30, 2),
(89, 31, 2),
(90, 32, 2),
(91, 33, 2),
(92, 34, 2),
(93, 20, 2),
(94, 35, 2),
(95, 36, 2),
(97, 37, 2),
(98, 38, 2),
(99, 39, 2),
(101, 40, 2),
(102, 41, 2),
(103, 42, 2),
(104, 43, 2),
(105, 44, 2),
(106, 45, 2),
(107, 46, 2),
(108, 47, 2),
(109, 48, 2),
(110, 49, 2);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `customers_id` int(11) DEFAULT NULL,
  `customers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews_rating` int(11) DEFAULT NULL,
  `reviews_status` tinyint(1) NOT NULL DEFAULT 0,
  `reviews_read` int(11) NOT NULL DEFAULT 0,
  `vendors_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviews_id`, `products_id`, `customers_id`, `customers_name`, `reviews_rating`, `reviews_status`, `reviews_read`, `vendors_id`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'renish', 5, 1, 1, NULL, '2020-01-13 02:24:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews_description`
--

CREATE TABLE `reviews_description` (
  `id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `reviews_text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews_description`
--

INSERT INTO `reviews_description` (`id`, `review_id`, `language_id`, `reviews_text`) VALUES
(1, 1, 1, 'Good  product');

-- --------------------------------------------------------

--
-- Table structure for table `sec_directory_whitelist`
--

CREATE TABLE `sec_directory_whitelist` (
  `id` int(11) NOT NULL,
  `directory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `sesskey` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry` int(10) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'facebook_app_id', 'FB_CLIENT_ID', '2018-04-27 04:00:00', '2019-11-01 10:58:53'),
(2, 'facebook_secret_id', 'FB_SECRET_KEY', '2018-04-27 04:00:00', '2019-11-01 10:58:53'),
(3, 'facebook_login', '1', '2018-04-27 04:00:00', '2019-11-01 10:58:53'),
(4, 'contact_us_email', 'Contact@everything2us.com', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(5, 'address', 'C-2/34, DDA JANTA FLATS, MAYUR VIHAR,PHASE 3', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(6, 'city', 'NEW DELHI', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(7, 'state', 'DELHI', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(8, 'zip', '110096', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(9, 'country', 'India', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(10, 'latitude', '28.613945°', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(11, 'longitude', '77.329571°', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(12, 'phone_no', '09582786799', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(13, 'fcm_android', '', '2018-04-27 04:00:00', '2019-02-05 16:42:15'),
(14, 'fcm_ios', NULL, '2018-04-27 04:00:00', NULL),
(15, 'fcm_desktop', NULL, '2018-04-27 04:00:00', NULL),
(16, 'website_logo', 'images/media/2020/01/a0Lz418101.png', '2018-04-27 04:00:00', '2020-01-18 06:17:00'),
(17, 'fcm_android_sender_id', NULL, '2018-04-27 04:00:00', NULL),
(18, 'fcm_ios_sender_id', '', '2018-04-27 04:00:00', '2019-02-05 16:42:15'),
(19, 'app_name', 'everything2us', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(20, 'currency_symbol', 'Rs.', '2018-04-27 04:00:00', '2018-11-19 12:26:01'),
(21, 'new_product_duration', '20', '2018-04-27 04:00:00', '2020-01-20 06:50:27'),
(22, 'notification_title', 'Ionic Ecommerce', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(23, 'notification_text', 'A bundle of products waiting for you!', '2018-04-27 04:00:00', NULL),
(24, 'lazzy_loading_effect', 'Detail', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(25, 'footer_button', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(26, 'cart_button', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(27, 'featured_category', NULL, '2018-04-27 04:00:00', NULL),
(28, 'notification_duration', 'year', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(29, 'home_style', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(30, 'wish_list_page', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(31, 'edit_profile_page', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(32, 'shipping_address_page', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(33, 'my_orders_page', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(34, 'contact_us_page', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(35, 'about_us_page', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(36, 'news_page', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(37, 'intro_page', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(38, 'setting_page', '1', '2018-04-27 04:00:00', NULL),
(39, 'share_app', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(40, 'rate_app', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(41, 'site_url', 'URL', '2018-04-27 04:00:00', '2018-11-19 12:26:01'),
(42, 'admob', '0', '2018-04-27 04:00:00', '2019-05-15 14:58:05'),
(43, 'admob_id', 'ID', '2018-04-27 04:00:00', '2019-05-15 14:58:05'),
(44, 'ad_unit_id_banner', 'Unit ID', '2018-04-27 04:00:00', '2019-05-15 14:58:05'),
(45, 'ad_unit_id_interstitial', 'Indestrial', '2018-04-27 04:00:00', '2019-05-15 14:58:05'),
(46, 'category_style', '4', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(47, 'package_name', 'package name', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(48, 'google_analytic_id', 'test', '2018-04-27 04:00:00', '2019-05-15 14:58:30'),
(49, 'themes', 'themeone', '2018-04-27 04:00:00', NULL),
(50, 'company_name', '#', '2018-04-27 04:00:00', '2019-10-07 13:52:24'),
(51, 'facebook_url', '#', '2018-04-27 04:00:00', '2020-01-18 06:17:00'),
(52, 'google_url', '#', '2018-04-27 04:00:00', '2020-01-18 06:17:00'),
(53, 'twitter_url', '#', '2018-04-27 04:00:00', '2020-01-18 06:17:00'),
(54, 'linked_in', '#', '2018-04-27 04:00:00', '2020-01-18 06:17:00'),
(55, 'default_notification', 'onesignal', '2018-04-27 04:00:00', '2019-02-05 16:42:15'),
(56, 'onesignal_app_id', '6053d948-b8f6-472a-87e4-379fa89f78d8', '2018-04-27 04:00:00', '2019-02-05 16:42:15'),
(57, 'onesignal_sender_id', '50877237723', '2018-04-27 04:00:00', '2019-02-05 16:42:15'),
(58, 'ios_admob', '1', '2018-04-27 04:00:00', '2019-05-15 14:58:05'),
(59, 'ios_admob_id', 'AdMob ID', '2018-04-27 04:00:00', '2019-05-15 14:58:05'),
(60, 'ios_ad_unit_id_banner', 'Unit ID Banner', '2018-04-27 04:00:00', '2019-05-15 14:58:05'),
(61, 'ios_ad_unit_id_interstitial', 'ID Interstitial', '2018-04-27 04:00:00', '2019-05-15 14:58:05'),
(62, 'google_login', '1', NULL, '2019-11-01 10:58:36'),
(63, 'google_app_id', NULL, NULL, NULL),
(64, 'google_secret_id', NULL, NULL, NULL),
(65, 'google_callback_url', NULL, NULL, NULL),
(66, 'facebook_callback_url', NULL, NULL, NULL),
(67, 'is_app_purchased', '0', NULL, '2018-05-04 07:24:44'),
(68, 'is_web_purchased', '1', NULL, '2018-05-04 07:24:44'),
(69, 'consumer_key', 'dadb7a7c1557917902724bbbf5', NULL, '2019-05-15 14:58:22'),
(70, 'consumer_secret', '3ba77f821557917902b1d57373', NULL, '2019-05-15 14:58:22'),
(71, 'order_email', 'orders@everything2us.com', NULL, '2020-01-20 06:50:27'),
(72, 'website_themes', '1', NULL, NULL),
(73, 'seo_title', '', NULL, '2018-11-19 12:21:57'),
(74, 'seo_metatag', '', NULL, '2018-11-19 12:21:57'),
(75, 'seo_keyword', '', NULL, '2018-11-19 12:21:57'),
(76, 'seo_description', '', NULL, '2018-11-19 12:21:57'),
(77, 'before_head_tag', '', NULL, '2018-11-19 12:22:15'),
(78, 'end_body_tag', 'name', NULL, '2020-01-18 06:17:00'),
(79, 'sitename_logo', 'Everything2us', NULL, '2020-01-18 06:17:00'),
(80, 'website_name', '<strong>E</strong>COMMERCE', NULL, '2018-11-19 12:22:25'),
(81, 'web_home_pages_style', 'two', NULL, '2018-11-19 12:22:25'),
(82, 'web_color_style', 'app', NULL, '2020-01-27 10:58:05'),
(83, 'free_shipping_limit', '400', NULL, '2020-01-20 06:50:27'),
(84, 'app_icon_image', 'icon', NULL, '2019-02-05 15:12:59'),
(85, 'twilio_status', '0', NULL, NULL),
(86, 'twilio_authy_api_id', '1213213', NULL, NULL),
(87, 'favicon', '', NULL, NULL),
(88, 'Thumbnail_height', '400', NULL, NULL),
(89, 'Thumbnail_width', '400', NULL, NULL),
(90, 'Medium_height', '400', NULL, NULL),
(91, 'Medium_width', '400', NULL, NULL),
(92, 'Large_height', '900', NULL, NULL),
(93, 'Large_width', '900', NULL, NULL),
(94, 'environmentt', 'production', NULL, '2020-01-20 06:50:27'),
(95, 'maintenance_text', 'https://example.com', NULL, '2020-01-20 06:50:27'),
(96, 'package_charge_taxt', '0', NULL, NULL),
(97, 'order_commission', '0', NULL, NULL),
(98, 'all_items_price_included_tax', 'yes', NULL, NULL),
(99, 'all_items_price_included_tax_value', '0', NULL, NULL),
(100, 'driver_accept_multiple_order', '1', NULL, NULL),
(101, 'min_order_price', '100', NULL, '2020-01-20 06:50:27'),
(102, 'youtube_link', '0', NULL, NULL),
(103, 'external_website_link', 'https://everything2us.com', NULL, '2020-01-20 06:50:27'),
(104, 'google_map_api', '', NULL, '2020-01-20 06:50:27'),
(105, 'is_pos_purchased', '0', NULL, NULL),
(106, 'admin_version', '4.0.9', NULL, NULL),
(107, 'app_version', '4.0', NULL, NULL),
(108, 'web_version', '4.0.9', NULL, NULL),
(109, 'pos_version', '0', NULL, NULL),
(110, 'android_app_link', '#', NULL, NULL),
(111, 'iphone_app_link', '#', NULL, NULL),
(112, 'about_content', '', NULL, '2020-01-18 06:17:00'),
(113, 'contact_content', '', NULL, '2020-01-18 06:17:00'),
(114, 'testkh', '2654', NULL, NULL),
(115, 'fb_redirect_url', 'http://YOUR_DOMAIN_NAME/login/facebook/callback', NULL, '2019-11-01 10:58:53'),
(116, 'google_client_id', 'GOOGLE_CLIENT_ID', NULL, '2019-11-01 10:58:36'),
(117, 'google_client_secret', 'GOOGLE_SECRET_KEY', NULL, '2019-11-01 10:58:36'),
(118, 'google_redirect_url', 'http://YOUR_DOMAIN_NAME/login/google/callback', NULL, '2019-11-01 10:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_description`
--

CREATE TABLE `shipping_description` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` int(11) NOT NULL,
  `table_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_labels` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_description`
--

INSERT INTO `shipping_description` (`id`, `name`, `language_id`, `table_name`, `sub_labels`) VALUES
(1, 'Free Shipping', 1, 'free_shipping', ''),
(4, 'Local Pickup', 1, 'local_pickup', ''),
(7, 'Flat Rate', 1, 'flate_rate', ''),
(10, 'UPS Shipping', 1, 'ups_shipping', '{\"nextDayAir\":\"Next Day Air\",\"secondDayAir\":\"2nd Day Air\",\"ground\":\"Ground\",\"threeDaySelect\":\"3 Day Select\",\"nextDayAirSaver\":\"Next Day AirSaver\",\"nextDayAirEarlyAM\":\"Next Day Air Early A.M.\",\"secondndDayAirAM\":\"2nd Day Air A.M.\"}'),
(13, 'Shipping Price', 1, 'shipping_by_weight', '');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_methods`
--

CREATE TABLE `shipping_methods` (
  `shipping_methods_id` int(11) NOT NULL,
  `methods_type_link` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDefault` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_methods`
--

INSERT INTO `shipping_methods` (`shipping_methods_id`, `methods_type_link`, `isDefault`, `status`, `table_name`) VALUES
(1, 'upsShipping', 0, 0, 'ups_shipping'),
(2, 'freeShipping', 0, 1, 'free_shipping'),
(3, 'localPickup', 0, 1, 'local_pickup'),
(4, 'flateRate', 1, 1, 'flate_rate'),
(5, 'shippingByWeight', 0, 1, 'shipping_by_weight');

-- --------------------------------------------------------

--
-- Table structure for table `sliders_images`
--

CREATE TABLE `sliders_images` (
  `sliders_id` int(11) NOT NULL,
  `sliders_title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sliders_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carousel_id` int(11) DEFAULT NULL,
  `sliders_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sliders_group` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sliders_html_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expires_date` datetime NOT NULL,
  `date_added` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_status_change` datetime DEFAULT NULL,
  `languages_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders_images`
--

INSERT INTO `sliders_images` (`sliders_id`, `sliders_title`, `sliders_url`, `carousel_id`, `sliders_image`, `sliders_group`, `sliders_html_text`, `expires_date`, `date_added`, `status`, `type`, `date_status_change`, `languages_id`) VALUES
(1, 'ewgrege', '#', 5, '16', '', '', '2020-07-08 00:00:00', '2019-09-08 18:44:49', 1, 'product', NULL, 1),
(2, 'frgergege', '#', 5, '17', '', '', '2020-10-14 00:00:00', '2019-09-08 18:45:10', 1, 'product', NULL, 1),
(3, 'dgdthrh', '#', 5, '18', '', '', '2019-09-18 00:00:00', '2019-09-08 18:45:40', 1, 'product', NULL, 1),
(4, 'sdasdasdass', 'men-s-business-casual-yellow-shirts', 1, '125', '', '', '2020-07-15 00:00:00', '2020-01-17 04:51:17', 1, 'product', '2020-01-17 04:51:17', 1),
(5, 'fdsfds', 'men-s-business-casual-yellow-shirts', 1, '245', '', '', '2020-08-14 00:00:00', '2020-01-18 12:34:04', 1, 'product', '2020-01-18 12:34:04', 1),
(6, 'fsfsfsfss', '', 1, '127', '', '', '2030-01-30 00:00:00', '2020-01-12 06:20:23', 1, 'product', '2020-01-12 06:20:23', 1),
(7, 'fdssdfsf', '', 2, '108', '', '', '2020-11-19 00:00:00', '2019-09-10 08:28:18', 1, 'product', NULL, 1),
(8, 'dasdada', '', 2, '108', '', '', '2021-07-14 00:00:00', '2019-09-10 08:28:31', 1, 'product', NULL, 1),
(9, 'dad', '', 2, '108', '', '', '2020-06-24 00:00:00', '2019-09-10 08:28:49', 1, 'product', NULL, 1),
(10, 'daadsd', '', 3, '110', '', '', '2021-10-20 00:00:00', '2019-09-10 08:29:41', 1, 'product', NULL, 1),
(11, 'sasdasd', '', 3, '110', '', '', '2020-07-15 00:00:00', '2019-09-10 08:29:58', 1, 'product', NULL, 1),
(12, 'ewef', '', 3, '110', '', '', '2021-07-15 00:00:00', '2019-09-10 08:30:13', 1, 'product', NULL, 1),
(13, 'fvtrgr', '', 4, '109', '', '', '2021-06-15 00:00:00', '2019-09-10 12:29:16', 1, 'product', NULL, 1),
(14, 't4tt', '', 4, '109', '', '', '2021-10-25 00:00:00', '2019-09-10 12:29:33', 1, 'product', NULL, 1),
(15, '4t4t4', '', 4, '109', '', '', '2022-07-07 00:00:00', '2019-09-10 12:29:50', 1, 'product', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `specials_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `specials_new_products_price` decimal(15,2) NOT NULL,
  `specials_date_added` int(11) NOT NULL,
  `specials_last_modified` int(11) NOT NULL,
  `expires_date` int(11) NOT NULL,
  `date_status_change` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`specials_id`, `products_id`, `specials_new_products_price`, `specials_date_added`, `specials_last_modified`, `expires_date`, `date_status_change`, `status`) VALUES
(1, 2, '349.00', 1578889903, 2020, 1580428800, 2020, 0),
(2, 2, '349.00', 1578890637, 0, 1580428800, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tax_class`
--

CREATE TABLE `tax_class` (
  `tax_class_id` int(11) NOT NULL,
  `tax_class_title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_class_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tax_rates`
--

CREATE TABLE `tax_rates` (
  `tax_rates_id` int(11) NOT NULL,
  `tax_zone_id` int(11) NOT NULL,
  `tax_class_id` int(11) NOT NULL,
  `tax_priority` int(11) DEFAULT 1,
  `tax_rate` decimal(7,2) NOT NULL,
  `tax_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unit_id` int(10) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `is_active`, `date_added`, `last_modified`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, '2019-01-01 13:04:18', '2019-01-01 13:04:18'),
(2, 1, NULL, NULL, '2019-01-01 13:04:18', '2019-01-01 13:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `units_descriptions`
--

CREATE TABLE `units_descriptions` (
  `units_description_id` int(10) UNSIGNED NOT NULL,
  `units_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languages_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units_descriptions`
--

INSERT INTO `units_descriptions` (`units_description_id`, `units_name`, `languages_id`, `unit_id`, `created_at`, `updated_at`) VALUES
(1, 'Gram', 1, 1, '2019-01-01 13:04:18', '2019-01-01 13:04:18'),
(2, 'غرام', 2, 1, '2019-01-01 13:04:18', '2019-01-01 13:04:18'),
(3, 'Kilogram', 1, 2, '2019-01-01 13:04:18', '2019-01-01 13:04:18'),
(4, 'كيلوغرام', 2, 2, '2019-01-01 13:04:18', '2019-01-01 13:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `ups_shipping`
--

CREATE TABLE `ups_shipping` (
  `ups_id` int(11) NOT NULL,
  `pickup_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDisplayCal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviceType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippingEnvironment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line_2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_package` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parcel_height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parcel_width` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ups_shipping`
--

INSERT INTO `ups_shipping` (`ups_id`, `pickup_method`, `isDisplayCal`, `serviceType`, `shippingEnvironment`, `user_name`, `access_key`, `password`, `person_name`, `company_name`, `phone_number`, `address_line_1`, `address_line_2`, `country`, `state`, `post_code`, `city`, `no_of_package`, `parcel_height`, `parcel_width`, `title`) VALUES
(1, '07', '', 'US_01,US_02,US_03,US_12,US_13,US_14,US_59', '0', 'nyblueprint', 'FCD7C8F94CB5EF46', 'delfia11', '', '', '', 'D Ground', '', 'US', 'NY', '10312', 'New York City', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_address_id` int(11) NOT NULL DEFAULT 0,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_seen` tinyint(1) NOT NULL DEFAULT 0,
  `phone_verified` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_id_tiwilo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(33) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `user_name`, `first_name`, `last_name`, `gender`, `default_address_id`, `country_code`, `phone`, `email`, `password`, `avatar`, `status`, `is_seen`, `phone_verified`, `remember_token`, `auth_id_tiwilo`, `dob`, `created_at`, `updated_at`) VALUES
(1, 1, 'everything2us', 'renish', 'vaishnav', NULL, 0, NULL, NULL, 'vaishnav.renish1010@gmail.com', '$2y$12$1Q20Og2cCp7krGQ4ENHmUevmCbxte9rYSxiNWHOSmcxq.iZOCyf42', NULL, '1', 1, NULL, NULL, NULL, NULL, '2020-01-12 11:03:49', '2020-01-12 11:03:49'),
(2, 1, 'everything2us', 'renish', 'vaishnav', NULL, 0, NULL, NULL, 'vaishnav.renish1010@gmail.coms', '$2y$12$6eSA2mBo752uNeY7SeLdueoOZ8yKAeGGWeobuWQF/5IXUloQEuOZW\r\n', NULL, '1', 1, NULL, NULL, NULL, NULL, '2020-01-12 11:06:25', '2020-01-12 11:06:25'),
(3, 11, NULL, 'EVERYTHING', '2US', NULL, 0, NULL, '09582786799', 'fzinternational22@gmail.com', '$2y$10$pfAwIGChJHC7bHxdbH4k6udb1mF3QBKOAuAjvJSFbzGPR.Fb0QHai', NULL, '1', 1, NULL, NULL, NULL, NULL, NULL, '2020-01-12 10:07:30'),
(7, 2, NULL, 'Mohd', 'Shahnawaz', '0', 0, NULL, NULL, 'mshah8741@gmail.com', '$2y$10$SluTuxu9aePTdHxKTCBaeujDJhXWaWxnrdIx/oTbp1/gwgRK65zEO', NULL, '1', 0, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 2, NULL, 'renish', 'vrithub', '0', 0, NULL, NULL, 'admin@surat.com', '$2y$10$fnC7tKupv9d2mMT4hjbkzOiEpLXVPEOf8OItkKTZgZoy2LZ45s2z.', NULL, '1', 0, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 2, NULL, 'Bholu', 'Patel', '1', 0, NULL, NULL, 'Bholupatel140@gmail.com', '$2y$10$jueB/2ImhGvJvE68uI44n.RJF9HNquFiyhw3F6BWKWOGc1PeQv1bS', NULL, '1', 1, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '2020-01-18 17:25:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_to_address`
--

CREATE TABLE `user_to_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address_book_id` int(11) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `user_types_id` int(11) NOT NULL,
  `user_types_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`user_types_id`, `user_types_name`, `created_at`, `updated_at`, `isActive`) VALUES
(1, 'Super Admin', 1534774230, NULL, 1),
(2, 'Customers', 1534777027, NULL, 1),
(3, 'Vendors', 1538390209, NULL, 1),
(4, 'Delivery Guy', 1542965906, NULL, 1),
(5, 'Test 1', 1542965906, NULL, 1),
(6, 'Test 2', 1542965906, NULL, 1),
(7, 'Test 3', 1542965906, NULL, 1),
(8, 'Test 4', 1542965906, NULL, 1),
(9, 'Test 5', 1542965906, NULL, 1),
(10, 'Test 6', 1542965906, NULL, 1),
(11, 'Admin', 1578819875, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `whos_online`
--

CREATE TABLE `whos_online` (
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_entry` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_last_click` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_page_url` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `zone_id` int(11) NOT NULL,
  `zone_country_id` int(11) NOT NULL,
  `zone_code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`zone_id`, `zone_country_id`, `zone_code`, `zone_name`) VALUES
(1, 223, 'AL', 'Alabama'),
(2, 223, 'AK', 'Alaska'),
(3, 223, 'AS', 'American Samoa'),
(4, 223, 'AZ', 'Arizona'),
(5, 223, 'AR', 'Arkansas'),
(6, 223, 'AF', 'Armed Forces Africa'),
(7, 223, 'AA', 'Armed Forces Americas'),
(8, 223, 'AC', 'Armed Forces Canada'),
(9, 223, 'AE', 'Armed Forces Europe'),
(10, 223, 'AM', 'Armed Forces Middle East'),
(11, 223, 'AP', 'Armed Forces Pacific'),
(12, 223, 'CA', 'California'),
(13, 223, 'CO', 'Colorado'),
(14, 223, 'CT', 'Connecticut'),
(15, 223, 'DE', 'Delaware'),
(16, 223, 'DC', 'District of Columbia'),
(17, 223, 'FM', 'Federated States Of Micronesia'),
(18, 223, 'FL', 'Florida'),
(19, 223, 'GA', 'Georgia'),
(20, 223, 'GU', 'Guam'),
(21, 223, 'HI', 'Hawaii'),
(22, 223, 'ID', 'Idaho'),
(23, 223, 'IL', 'Illinois'),
(24, 223, 'IN', 'Indiana'),
(25, 223, 'IA', 'Iowa'),
(26, 223, 'KS', 'Kansas'),
(27, 223, 'KY', 'Kentucky'),
(28, 223, 'LA', 'Louisiana'),
(29, 223, 'ME', 'Maine'),
(30, 223, 'MH', 'Marshall Islands'),
(31, 223, 'MD', 'Maryland'),
(32, 223, 'MA', 'Massachusetts'),
(33, 223, 'MI', 'Michigan'),
(34, 223, 'MN', 'Minnesota'),
(35, 223, 'MS', 'Mississippi'),
(36, 223, 'MO', 'Missouri'),
(37, 223, 'MT', 'Montana'),
(38, 223, 'NE', 'Nebraska'),
(39, 223, 'NV', 'Nevada'),
(40, 223, 'NH', 'New Hampshire'),
(41, 223, 'NJ', 'New Jersey'),
(42, 223, 'NM', 'New Mexico'),
(43, 223, 'NY', 'New York'),
(44, 223, 'NC', 'North Carolina'),
(45, 223, 'ND', 'North Dakota'),
(46, 223, 'MP', 'Northern Mariana Islands'),
(47, 223, 'OH', 'Ohio'),
(48, 223, 'OK', 'Oklahoma'),
(49, 223, 'OR', 'Oregon'),
(50, 223, 'PW', 'Palau'),
(51, 223, 'PA', 'Pennsylvania'),
(52, 223, 'PR', 'Puerto Rico'),
(53, 223, 'RI', 'Rhode Island'),
(54, 223, 'SC', 'South Carolina'),
(55, 223, 'SD', 'South Dakota'),
(56, 223, 'TN', 'Tennessee'),
(57, 223, 'TX', 'Texas'),
(58, 223, 'UT', 'Utah'),
(59, 223, 'VT', 'Vermont'),
(60, 223, 'VI', 'Virgin Islands'),
(61, 223, 'VA', 'Virginia'),
(62, 223, 'WA', 'Washington'),
(63, 223, 'WV', 'West Virginia'),
(64, 223, 'WI', 'Wisconsin'),
(65, 223, 'WY', 'Wyoming'),
(66, 38, 'AB', 'Alberta'),
(67, 38, 'BC', 'British Columbia'),
(68, 38, 'MB', 'Manitoba'),
(69, 38, 'NF', 'Newfoundland'),
(70, 38, 'NB', 'New Brunswick'),
(71, 38, 'NS', 'Nova Scotia'),
(72, 38, 'NT', 'Northwest Territories'),
(73, 38, 'NU', 'Nunavut'),
(74, 38, 'ON', 'Ontario'),
(75, 38, 'PE', 'Prince Edward Island'),
(76, 38, 'QC', 'Quebec'),
(77, 38, 'SK', 'Saskatchewan'),
(78, 38, 'YT', 'Yukon Territory'),
(79, 81, 'NDS', 'Niedersachsen'),
(80, 81, 'BAW', 'Baden-Württemberg'),
(81, 81, 'BAY', 'Bayern'),
(82, 81, 'BER', 'Berlin'),
(83, 81, 'BRG', 'Brandenburg'),
(84, 81, 'BRE', 'Bremen'),
(85, 81, 'HAM', 'Hamburg'),
(86, 81, 'HES', 'Hessen'),
(87, 81, 'MEC', 'Mecklenburg-Vorpommern'),
(88, 81, 'NRW', 'Nordrhein-Westfalen'),
(89, 81, 'RHE', 'Rheinland-Pfalz'),
(90, 81, 'SAR', 'Saarland'),
(91, 81, 'SAS', 'Sachsen'),
(92, 81, 'SAC', 'Sachsen-Anhalt'),
(93, 81, 'SCN', 'Schleswig-Holstein'),
(94, 81, 'THE', 'Thüringen'),
(95, 14, 'WI', 'Wien'),
(96, 14, 'NO', 'Niederösterreich'),
(97, 14, 'OO', 'Oberösterreich'),
(98, 14, 'SB', 'Salzburg'),
(99, 14, 'KN', 'Kärnten'),
(100, 14, 'ST', 'Steiermark'),
(101, 14, 'TI', 'Tirol'),
(102, 14, 'BL', 'Burgenland'),
(103, 14, 'VB', 'Voralberg'),
(104, 204, 'AG', 'Aargau'),
(105, 204, 'AI', 'Appenzell Innerrhoden'),
(106, 204, 'AR', 'Appenzell Ausserrhoden'),
(107, 204, 'BE', 'Bern'),
(108, 204, 'BL', 'Basel-Landschaft'),
(109, 204, 'BS', 'Basel-Stadt'),
(110, 204, 'FR', 'Freiburg'),
(111, 204, 'GE', 'Genf'),
(112, 204, 'GL', 'Glarus'),
(113, 204, 'JU', 'Graubünden'),
(114, 204, 'JU', 'Jura'),
(115, 204, 'LU', 'Luzern'),
(116, 204, 'NE', 'Neuenburg'),
(117, 204, 'NW', 'Nidwalden'),
(118, 204, 'OW', 'Obwalden'),
(119, 204, 'SG', 'St. Gallen'),
(120, 204, 'SH', 'Schaffhausen'),
(121, 204, 'SO', 'Solothurn'),
(122, 204, 'SZ', 'Schwyz'),
(123, 204, 'TG', 'Thurgau'),
(124, 204, 'TI', 'Tessin'),
(125, 204, 'UR', 'Uri'),
(126, 204, 'VD', 'Waadt'),
(127, 204, 'VS', 'Wallis'),
(128, 204, 'ZG', 'Zug'),
(129, 204, 'ZH', 'Zürich'),
(130, 195, 'A Coruña', 'A Coruña'),
(131, 195, 'Alava', 'Alava'),
(132, 195, 'Albacete', 'Albacete'),
(133, 195, 'Alicante', 'Alicante'),
(134, 195, 'Almeria', 'Almeria'),
(135, 195, 'Asturias', 'Asturias'),
(136, 195, 'Avila', 'Avila'),
(137, 195, 'Badajoz', 'Badajoz'),
(138, 195, 'Baleares', 'Baleares'),
(139, 195, 'Barcelona', 'Barcelona'),
(140, 195, 'Burgos', 'Burgos'),
(141, 195, 'Caceres', 'Caceres'),
(142, 195, 'Cadiz', 'Cadiz'),
(143, 195, 'Cantabria', 'Cantabria'),
(144, 195, 'Castellon', 'Castellon'),
(145, 195, 'Ceuta', 'Ceuta'),
(146, 195, 'Ciudad Real', 'Ciudad Real'),
(147, 195, 'Cordoba', 'Cordoba'),
(148, 195, 'Cuenca', 'Cuenca'),
(149, 195, 'Girona', 'Girona'),
(150, 195, 'Granada', 'Granada'),
(151, 195, 'Guadalajara', 'Guadalajara'),
(152, 195, 'Guipuzcoa', 'Guipuzcoa'),
(153, 195, 'Huelva', 'Huelva'),
(154, 195, 'Huesca', 'Huesca'),
(155, 195, 'Jaen', 'Jaen'),
(156, 195, 'La Rioja', 'La Rioja'),
(157, 195, 'Las Palmas', 'Las Palmas'),
(158, 195, 'Leon', 'Leon'),
(159, 195, 'Lleida', 'Lleida'),
(160, 195, 'Lugo', 'Lugo'),
(161, 195, 'Madrid', 'Madrid'),
(162, 195, 'Malaga', 'Malaga'),
(163, 195, 'Melilla', 'Melilla'),
(164, 195, 'Murcia', 'Murcia'),
(165, 195, 'Navarra', 'Navarra'),
(166, 195, 'Ourense', 'Ourense'),
(167, 195, 'Palencia', 'Palencia'),
(168, 195, 'Pontevedra', 'Pontevedra'),
(169, 195, 'Salamanca', 'Salamanca'),
(170, 195, 'Santa Cruz de Tenerife', 'Santa Cruz de Tenerife'),
(171, 195, 'Segovia', 'Segovia'),
(172, 195, 'Sevilla', 'Sevilla'),
(173, 195, 'Soria', 'Soria'),
(174, 195, 'Tarragona', 'Tarragona'),
(175, 195, 'Teruel', 'Teruel'),
(176, 195, 'Toledo', 'Toledo'),
(177, 195, 'Valencia', 'Valencia'),
(178, 195, 'Valladolid', 'Valladolid'),
(179, 195, 'Vizcaya', 'Vizcaya'),
(180, 195, 'Zamora', 'Zamora'),
(181, 195, 'Zaragoza', 'Zaragoza'),
(182, 99, 'AN', 'ANDHRA PRADESH'),
(183, 99, 'AS', 'ASSAM'),
(184, 99, 'AR', 'ARUNACHAL PRADESH'),
(185, 99, 'GJ', 'GUJRAT'),
(186, 99, 'BI', 'BIHAR'),
(187, 99, 'HA', 'HARYANA'),
(188, 99, 'HI', 'HIMACHAL PRADESH'),
(189, 99, 'JA', 'JAMMU & KASHMIR'),
(190, 99, 'KA', 'KARNATAKA'),
(191, 99, 'KE', 'KERALA'),
(192, 99, 'MP', 'MADHYA PRADESH'),
(193, 99, 'MH', 'MAHARASHTRA'),
(194, 99, 'MA', 'MANIPUR'),
(195, 99, 'ME', 'MEGHALAYA'),
(196, 99, 'MI', 'MIZORAM'),
(197, 99, 'NAG', 'NAGALAND'),
(198, 99, 'ORI', 'ORISSA'),
(199, 99, 'PUN', 'PUNJAB'),
(200, 99, 'RAJ', 'RAJASTHAN'),
(201, 99, 'SKI', 'SIKKIM'),
(202, 99, 'TAM', 'TAMIL NADU'),
(203, 99, 'TRI', 'TRIPURA'),
(204, 99, 'UP', 'UTTAR PRADESH'),
(205, 99, 'WB', 'WEST BENGAL'),
(206, 99, 'GO', 'GOA'),
(207, 99, 'PON', 'PONDICHERY'),
(208, 99, 'LAK', 'LAKSHDWEEP'),
(209, 99, 'DD', 'DAMAN & DIU'),
(210, 99, 'DN', 'DADRA & NAGAR'),
(211, 99, 'CHA', 'CHANDIGARH'),
(212, 99, 'AI', 'ANDAMAN & NICOBAR'),
(213, 99, 'UTT', 'UTTARANCHAL'),
(214, 99, 'JHA', 'JHARKHAND'),
(215, 99, 'CHA', 'CHATTISGARH'),
(216, 99, 'ASS', 'ASSAM');

-- --------------------------------------------------------

--
-- Table structure for table `zones_to_geo_zones`
--

CREATE TABLE `zones_to_geo_zones` (
  `association_id` int(11) NOT NULL,
  `zone_country_id` int(11) NOT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `geo_zone_id` int(11) DEFAULT NULL,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_recorder`
--
ALTER TABLE `action_recorder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_action_recorder_module` (`module`),
  ADD KEY `idx_action_recorder_user_id` (`user_id`),
  ADD KEY `idx_action_recorder_identifier` (`identifier`),
  ADD KEY `idx_action_recorder_date_added` (`date_added`);

--
-- Indexes for table `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`address_book_id`),
  ADD KEY `idx_address_book_customers_id` (`user_id`);

--
-- Indexes for table `address_format`
--
ALTER TABLE `address_format`
  ADD PRIMARY KEY (`address_format_id`);

--
-- Indexes for table `alert_settings`
--
ALTER TABLE `alert_settings`
  ADD PRIMARY KEY (`alert_id`);

--
-- Indexes for table `api_calls_list`
--
ALTER TABLE `api_calls_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`banners_id`),
  ADD KEY `idx_banners_group` (`banners_group`);

--
-- Indexes for table `banners_history`
--
ALTER TABLE `banners_history`
  ADD PRIMARY KEY (`banners_history_id`),
  ADD KEY `idx_banners_history_banners_id` (`banners_id`);

--
-- Indexes for table `block_ips`
--
ALTER TABLE `block_ips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`),
  ADD KEY `idx_categories_parent_id` (`parent_id`);

--
-- Indexes for table `categories_description`
--
ALTER TABLE `categories_description`
  ADD PRIMARY KEY (`categories_description_id`),
  ADD KEY `idx_categories_name` (`categories_name`);

--
-- Indexes for table `categories_role`
--
ALTER TABLE `categories_role`
  ADD PRIMARY KEY (`categories_role_id`);

--
-- Indexes for table `compare`
--
ALTER TABLE `compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constant_banners`
--
ALTER TABLE `constant_banners`
  ADD PRIMARY KEY (`banners_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countries_id`),
  ADD KEY `IDX_COUNTRIES_NAME` (`countries_name`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupans_id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_currencies_code` (`code`);

--
-- Indexes for table `currency_record`
--
ALTER TABLE `currency_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_theme`
--
ALTER TABLE `current_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customers_id`);

--
-- Indexes for table `customers_basket`
--
ALTER TABLE `customers_basket`
  ADD PRIMARY KEY (`customers_basket_id`),
  ADD KEY `idx_customers_basket_customers_id` (`customers_id`);

--
-- Indexes for table `customers_basket_attributes`
--
ALTER TABLE `customers_basket_attributes`
  ADD PRIMARY KEY (`customers_basket_attributes_id`),
  ADD KEY `idx_customers_basket_att_customers_id` (`customers_id`);

--
-- Indexes for table `customers_info`
--
ALTER TABLE `customers_info`
  ADD PRIMARY KEY (`customers_info_id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fedex_shipping`
--
ALTER TABLE `fedex_shipping`
  ADD PRIMARY KEY (`fedex_id`);

--
-- Indexes for table `flash_sale`
--
ALTER TABLE `flash_sale`
  ADD PRIMARY KEY (`flash_sale_id`),
  ADD KEY `products_id` (`products_id`);

--
-- Indexes for table `flate_rate`
--
ALTER TABLE `flate_rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_end_theme_content`
--
ALTER TABLE `front_end_theme_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geo_zones`
--
ALTER TABLE `geo_zones`
  ADD PRIMARY KEY (`geo_zone_id`);

--
-- Indexes for table `http_call_record`
--
ALTER TABLE `http_call_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_ref_id`);

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`label_id`);

--
-- Indexes for table `label_value`
--
ALTER TABLE `label_value`
  ADD PRIMARY KEY (`label_value_id`);

--
-- Indexes for table `label_values`
--
ALTER TABLE `label_values`
  ADD PRIMARY KEY (`label_value_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`languages_id`),
  ADD KEY `IDX_LANGUAGES_NAME` (`name`);

--
-- Indexes for table `liked_products`
--
ALTER TABLE `liked_products`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `manage_min_max`
--
ALTER TABLE `manage_min_max`
  ADD PRIMARY KEY (`min_max_id`);

--
-- Indexes for table `manage_role`
--
ALTER TABLE `manage_role`
  ADD PRIMARY KEY (`manage_role_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturers_id`);

--
-- Indexes for table `manufacturers_info`
--
ALTER TABLE `manufacturers_info`
  ADD PRIMARY KEY (`manufacturers_id`,`languages_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_translation`
--
ALTER TABLE `menu_translation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `idx_products_date_added` (`news_date_added`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`newsletters_id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`categories_id`),
  ADD KEY `idx_categories_parent_id` (`parent_id`);

--
-- Indexes for table `news_categories_description`
--
ALTER TABLE `news_categories_description`
  ADD PRIMARY KEY (`categories_description_id`),
  ADD KEY `idx_categories_name` (`categories_name`);

--
-- Indexes for table `news_description`
--
ALTER TABLE `news_description`
  ADD KEY `products_name` (`news_name`);

--
-- Indexes for table `news_to_news_categories`
--
ALTER TABLE `news_to_news_categories`
  ADD PRIMARY KEY (`news_id`,`categories_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `idx_orders_customers_id` (`customers_id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`orders_products_id`),
  ADD KEY `idx_orders_products_orders_id` (`orders_id`),
  ADD KEY `idx_orders_products_products_id` (`products_id`);

--
-- Indexes for table `orders_products_attributes`
--
ALTER TABLE `orders_products_attributes`
  ADD PRIMARY KEY (`orders_products_attributes_id`),
  ADD KEY `idx_orders_products_att_orders_id` (`orders_id`);

--
-- Indexes for table `orders_products_download`
--
ALTER TABLE `orders_products_download`
  ADD PRIMARY KEY (`orders_products_download_id`),
  ADD KEY `idx_orders_products_download_orders_id` (`orders_id`);

--
-- Indexes for table `orders_status`
--
ALTER TABLE `orders_status`
  ADD PRIMARY KEY (`orders_status_id`);

--
-- Indexes for table `orders_status_description`
--
ALTER TABLE `orders_status_description`
  ADD PRIMARY KEY (`orders_status_description_id`);

--
-- Indexes for table `orders_status_history`
--
ALTER TABLE `orders_status_history`
  ADD PRIMARY KEY (`orders_status_history_id`),
  ADD KEY `idx_orders_status_history_orders_id` (`orders_id`);

--
-- Indexes for table `orders_total`
--
ALTER TABLE `orders_total`
  ADD PRIMARY KEY (`orders_total_id`),
  ADD KEY `idx_orders_total_orders_id` (`orders_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `pages_description`
--
ALTER TABLE `pages_description`
  ADD PRIMARY KEY (`page_description_id`);

--
-- Indexes for table `payment_description`
--
ALTER TABLE `payment_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`payment_methods_id`);

--
-- Indexes for table `payment_methods_detail`
--
ALTER TABLE `payment_methods_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD KEY `idx_products_model` (`products_model`),
  ADD KEY `idx_products_date_added` (`products_date_added`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`products_attributes_id`),
  ADD KEY `idx_products_attributes_products_id` (`products_id`);

--
-- Indexes for table `products_attributes_download`
--
ALTER TABLE `products_attributes_download`
  ADD PRIMARY KEY (`products_attributes_id`);

--
-- Indexes for table `products_description`
--
ALTER TABLE `products_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_name` (`products_name`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_images_prodid` (`products_id`);

--
-- Indexes for table `products_notifications`
--
ALTER TABLE `products_notifications`
  ADD PRIMARY KEY (`products_id`,`customers_id`);

--
-- Indexes for table `products_options`
--
ALTER TABLE `products_options`
  ADD PRIMARY KEY (`products_options_id`);

--
-- Indexes for table `products_options_descriptions`
--
ALTER TABLE `products_options_descriptions`
  ADD PRIMARY KEY (`products_options_descriptions_id`);

--
-- Indexes for table `products_options_values`
--
ALTER TABLE `products_options_values`
  ADD PRIMARY KEY (`products_options_values_id`);

--
-- Indexes for table `products_options_values_descriptions`
--
ALTER TABLE `products_options_values_descriptions`
  ADD PRIMARY KEY (`products_options_values_descriptions_id`);

--
-- Indexes for table `products_shipping_rates`
--
ALTER TABLE `products_shipping_rates`
  ADD PRIMARY KEY (`products_shipping_rates_id`);

--
-- Indexes for table `products_to_categories`
--
ALTER TABLE `products_to_categories`
  ADD PRIMARY KEY (`products_to_categories_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`),
  ADD KEY `idx_reviews_products_id` (`products_id`),
  ADD KEY `idx_reviews_customers_id` (`customers_id`);

--
-- Indexes for table `reviews_description`
--
ALTER TABLE `reviews_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sec_directory_whitelist`
--
ALTER TABLE `sec_directory_whitelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`sesskey`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_name_unique` (`name`);

--
-- Indexes for table `shipping_description`
--
ALTER TABLE `shipping_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_methods`
--
ALTER TABLE `shipping_methods`
  ADD PRIMARY KEY (`shipping_methods_id`);

--
-- Indexes for table `sliders_images`
--
ALTER TABLE `sliders_images`
  ADD PRIMARY KEY (`sliders_id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
  ADD PRIMARY KEY (`specials_id`),
  ADD KEY `idx_specials_products_id` (`products_id`);

--
-- Indexes for table `tax_class`
--
ALTER TABLE `tax_class`
  ADD PRIMARY KEY (`tax_class_id`);

--
-- Indexes for table `tax_rates`
--
ALTER TABLE `tax_rates`
  ADD PRIMARY KEY (`tax_rates_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `units_descriptions`
--
ALTER TABLE `units_descriptions`
  ADD PRIMARY KEY (`units_description_id`);

--
-- Indexes for table `ups_shipping`
--
ALTER TABLE `ups_shipping`
  ADD PRIMARY KEY (`ups_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_to_address`
--
ALTER TABLE `user_to_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_types_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
