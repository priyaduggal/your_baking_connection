-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 03:32 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmrs2`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_admin_meta`
--

CREATE TABLE `st_admin_meta` (
  `meta_id` int(14) NOT NULL,
  `meta_name` varchar(100) NOT NULL DEFAULT '',
  `meta_value` text,
  `meta_value1` text,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_admin_meta`
--

INSERT INTO `st_admin_meta` (`meta_id`, `meta_name`, `meta_value`, `meta_value1`, `date_modified`) VALUES
(1, 'rejection_list', 'Out of item(s)', '', '2022-01-26 22:46:48'),
(2, 'rejection_list', 'Kitchen closed', '', '2022-01-26 22:46:46'),
(3, 'rejection_list', 'There is no possibility of fullfilling the order.', '', '2022-01-26 22:46:44'),
(4, 'rejection_list', 'Today we are no longer delivering.', '', '2022-01-26 22:46:43'),
(5, 'rejection_list', 'Too long waiting time.', '', '2022-01-26 22:46:41'),
(6, 'rejection_list', 'No ingredient.', '', '2022-01-26 22:46:39'),
(7, 'rejection_list', 'Customer called to cancel', '', '2022-01-26 22:46:38'),
(8, 'rejection_list', 'Restaurant too busy', '', '2022-01-26 22:46:36'),
(9, 'rejection_list', 'other', '', '2022-01-26 22:46:32'),
(37, 'action_type', 'Notification to customer', 'notification_to_customer', '2022-01-26 22:47:25'),
(38, 'action_type', 'Notification to merchant', 'notification_to_merchant', '2022-01-26 22:47:24'),
(39, 'action_type', 'Notification to admin', 'notification_to_admin', '2022-01-26 22:47:22'),
(40, 'action_type', 'Notification to driver', 'notification_to_driver', '2022-01-26 22:47:20'),
(84, 'pause_reason', 'Store is too busy', '', '2022-01-26 22:47:10'),
(85, 'pause_reason', 'Problem in restaurant', '', '2022-01-26 22:47:08'),
(86, 'pause_reason', 'Store closed', '', '2022-01-26 22:47:07'),
(87, 'pause_reason', 'Out of item(s)', '', '2022-01-26 22:47:05'),
(133, 'payout_new_payout_template_id', '16', '', '2022-01-27 07:56:15'),
(134, 'payout_paid_template_id', '17', '', '2022-01-27 07:56:15'),
(135, 'payout_cancel_template_id', '18', '', '2022-01-27 07:56:15'),
(136, 'status_new_order', 'new', '', '2022-01-27 07:48:04'),
(137, 'status_cancel_order', 'cancelled', '', '2022-01-27 07:48:04'),
(138, 'status_delivered', 'delivered', '', '2022-01-27 07:48:04'),
(139, 'status_completed', 'complete', '', '2022-01-27 07:48:04'),
(140, 'status_rejection', 'rejected', '', '2022-01-27 07:48:05'),
(141, 'status_delivery_fail', 'delivery failed', '', '2022-01-27 07:48:05'),
(142, 'status_failed', 'cancelled', '', '2022-01-27 07:48:05'),
(143, 'tracking_status_receive', '', '', '2022-01-27 07:54:06'),
(144, 'tracking_status_process', 'accepted', '', '2022-01-27 07:54:06'),
(145, 'tracking_status_ready', 'ready for pickup', '', '2022-01-27 07:54:06'),
(146, 'tracking_status_in_transit', 'delivery on its way', '', '2022-01-27 07:54:06'),
(147, 'tracking_status_delivered', 'delivered', '', '2022-01-27 07:54:06'),
(148, 'tracking_status_delivery_failed', 'delivery failed', '', '2022-01-27 07:54:06'),
(149, 'tracking_status_completed', 'complete', '', '2022-01-27 07:54:06'),
(150, 'tracking_status_failed', 'cancelled', '', '2022-01-27 07:54:07'),
(151, 'invoice_create_template_id', '2', '', '2022-01-27 07:54:40'),
(152, 'refund_template_id', '3', '', '2022-01-27 07:54:40'),
(153, 'partial_refund_template_id', '11', '', '2022-01-27 07:54:40'),
(154, 'delayed_template_id', '8', '', '2022-01-27 07:54:40'),
(155, 'payout_request_auto_process', '1', '', '2022-01-27 07:55:53'),
(156, 'payout_request_enabled', '1', '', '2022-01-27 07:55:53'),
(157, 'payout_minimum_amount', '100', '', '2022-01-27 07:55:53'),
(158, 'payout_process_days', '5', '', '2022-01-27 07:55:53'),
(159, 'payout_number_can_request', '2', '', '2022-01-27 07:55:53'),
(160, 'theme_menu_active', '370', '', '2022-01-27 08:12:44'),
(161, 'tips', '3', NULL, NULL),
(162, 'tips', '4', NULL, NULL),
(163, 'tips', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `st_admin_meta_translation`
--

CREATE TABLE `st_admin_meta_translation` (
  `id` int(14) NOT NULL,
  `meta_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `meta_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_admin_meta_translation`
--

INSERT INTO `st_admin_meta_translation` (`id`, `meta_id`, `language`, `meta_value`) VALUES
(1, 9, 'ja', ''),
(2, 9, 'ar', ''),
(3, 9, 'en', 'other'),
(4, 8, 'ja', ''),
(5, 8, 'ar', ''),
(6, 8, 'en', 'Restaurant too busy'),
(7, 7, 'ja', ''),
(8, 7, 'ar', ''),
(9, 7, 'en', 'Customer called to cancel'),
(10, 6, 'ja', ''),
(11, 6, 'ar', ''),
(12, 6, 'en', 'No ingredient.'),
(13, 5, 'ja', ''),
(14, 5, 'ar', ''),
(15, 5, 'en', 'Too long waiting time.'),
(16, 4, 'ja', ''),
(17, 4, 'ar', ''),
(18, 4, 'en', 'Today we are no longer delivering.'),
(19, 3, 'ja', ''),
(20, 3, 'ar', ''),
(21, 3, 'en', 'There is no possibility of fullfilling the order.'),
(22, 2, 'ja', ''),
(23, 2, 'ar', ''),
(24, 2, 'en', 'Kitchen closed'),
(25, 1, 'ja', ''),
(26, 1, 'ar', ''),
(27, 1, 'en', 'Out of item(s)'),
(28, 132, 'ja', ''),
(29, 132, 'ar', ''),
(30, 132, 'en', 'test reason'),
(31, 87, 'ja', ''),
(32, 87, 'ar', ''),
(33, 87, 'en', 'Out of item(s)'),
(34, 86, 'ja', ''),
(35, 86, 'ar', ''),
(36, 86, 'en', 'Store closed'),
(37, 85, 'ja', ''),
(38, 85, 'ar', ''),
(39, 85, 'en', 'Problem in restaurant'),
(40, 84, 'ja', ''),
(41, 84, 'ar', ''),
(42, 84, 'en', 'Store is too busy'),
(43, 40, 'ja', ''),
(44, 40, 'ar', ''),
(45, 40, 'en', 'Notification to driver'),
(46, 39, 'ja', ''),
(47, 39, 'ar', ''),
(48, 39, 'en', 'Notification to admin'),
(49, 38, 'ja', ''),
(50, 38, 'ar', ''),
(51, 38, 'en', 'Notification to merchant'),
(52, 37, 'ja', ''),
(53, 37, 'ar', ''),
(54, 37, 'en', 'Notification to customer');

-- --------------------------------------------------------

--
-- Table structure for table `st_admin_user`
--

CREATE TABLE `st_admin_user` (
  `admin_id` int(14) NOT NULL,
  `admin_id_token` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `email_address` varchar(255) NOT NULL DEFAULT '',
  `contact_number` varchar(50) NOT NULL DEFAULT '',
  `profile_photo` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `role` varchar(100) NOT NULL DEFAULT '',
  `main_account` int(1) NOT NULL DEFAULT '1',
  `session_token` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_admin_user`
--

-- --------------------------------------------------------

--
-- Table structure for table `st_availability`
--

CREATE TABLE `st_availability` (
  `id` bigint(20) NOT NULL,
  `merchant_id` bigint(20) NOT NULL DEFAULT '0',
  `meta_name` varchar(100) NOT NULL DEFAULT '',
  `meta_value` varchar(100) NOT NULL DEFAULT '',
  `day_of_week` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_cache`
--

CREATE TABLE `st_cache` (
  `id` int(14) NOT NULL,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_cache`
--

INSERT INTO `st_cache` (`id`, `date_modified`) VALUES
(1, '2022-01-27 23:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `st_cart`
--

CREATE TABLE `st_cart` (
  `id` int(11) NOT NULL,
  `cart_row` varchar(100) NOT NULL DEFAULT '',
  `cart_uuid` varchar(100) NOT NULL DEFAULT '',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `cat_id` int(14) NOT NULL DEFAULT '0',
  `item_token` varchar(255) NOT NULL DEFAULT '',
  `item_size_id` int(14) NOT NULL DEFAULT '0',
  `qty` int(14) NOT NULL DEFAULT '0',
  `special_instructions` varchar(255) NOT NULL DEFAULT '',
  `if_sold_out` varchar(50) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_cart_addons`
--

CREATE TABLE `st_cart_addons` (
  `id` int(11) NOT NULL,
  `cart_row` varchar(100) NOT NULL DEFAULT '',
  `cart_uuid` varchar(100) NOT NULL DEFAULT '',
  `subcat_id` int(14) NOT NULL DEFAULT '0',
  `sub_item_id` int(14) NOT NULL DEFAULT '0',
  `qty` int(14) NOT NULL DEFAULT '0',
  `multi_option` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_cart_attributes`
--

CREATE TABLE `st_cart_attributes` (
  `id` int(11) NOT NULL,
  `cart_row` varchar(100) NOT NULL DEFAULT '',
  `cart_uuid` varchar(100) NOT NULL DEFAULT '',
  `meta_name` varchar(255) NOT NULL DEFAULT '',
  `meta_id` text,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_category`
--

CREATE TABLE `st_category` (
  `cat_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `category_name` varchar(255) NOT NULL DEFAULT '',
  `category_description` text,
  `photo` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `icon` varchar(255) DEFAULT '',
  `icon_path` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `available_at_specific` tinyint(1) NOT NULL DEFAULT '0',
  `date_created` varchar(50) NOT NULL DEFAULT '',
  `date_modified` varchar(50) DEFAULT '',
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_category_relationship_dish`
--

CREATE TABLE `st_category_relationship_dish` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `dish_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_category_translation`
--

CREATE TABLE `st_category_translation` (
  `id` int(11) NOT NULL,
  `cat_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `category_name` varchar(255) NOT NULL DEFAULT '',
  `category_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_client`
--

CREATE TABLE `st_client` (
  `client_id` int(14) NOT NULL,
  `client_uuid` varchar(100) NOT NULL DEFAULT '',
  `social_strategy` varchar(100) NOT NULL DEFAULT 'web',
  `merchant_id` int(10) NOT NULL DEFAULT '0',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `email_address` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `phone_prefix` varchar(5) NOT NULL DEFAULT '',
  `contact_phone` varchar(20) NOT NULL DEFAULT '',
  `avatar` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `social_id` varchar(255) NOT NULL DEFAULT '',
  `social_token` text,
  `token` varchar(255) NOT NULL DEFAULT '',
  `mobile_verification_code` int(14) NOT NULL DEFAULT '0',
  `account_verified` int(1) NOT NULL DEFAULT '0',
  `verify_code_requested` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reset_password_request` int(1) NOT NULL DEFAULT '0',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_client_address`
--

CREATE TABLE `st_client_address` (
  `address_id` int(11) NOT NULL,
  `client_id` int(14) NOT NULL DEFAULT '0',
  `address_uuid` varchar(100) NOT NULL DEFAULT '',
  `place_id` varchar(255) NOT NULL DEFAULT '',
  `address1` varchar(255) NOT NULL DEFAULT '',
  `address2` varchar(255) NOT NULL DEFAULT '',
  `postal_code` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `country_code` varchar(5) NOT NULL DEFAULT '',
  `formatted_address` text,
  `latitude` varchar(255) NOT NULL DEFAULT '',
  `longitude` varchar(255) NOT NULL DEFAULT '',
  `location_name` varchar(255) NOT NULL DEFAULT '',
  `delivery_options` varchar(255) NOT NULL DEFAULT '',
  `delivery_instructions` varchar(255) NOT NULL DEFAULT '',
  `address_label` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_client_cc`
--

CREATE TABLE `st_client_cc` (
  `cc_id` int(14) NOT NULL,
  `card_uuid` varchar(100) NOT NULL DEFAULT '',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `card_name` varchar(255) NOT NULL DEFAULT '',
  `credit_card_number` varchar(20) NOT NULL DEFAULT '',
  `encrypted_card` binary(255) DEFAULT NULL,
  `expiration_month` varchar(5) NOT NULL DEFAULT '',
  `expiration_yr` varchar(5) NOT NULL DEFAULT '',
  `cvv` varchar(20) NOT NULL DEFAULT '',
  `billing_address` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_client_meta`
--

CREATE TABLE `st_client_meta` (
  `id` bigint(20) NOT NULL,
  `client_id` bigint(20) NOT NULL DEFAULT '0',
  `meta1` varchar(255) NOT NULL DEFAULT '',
  `meta2` varchar(255) NOT NULL DEFAULT '',
  `meta3` varchar(255) DEFAULT '',
  `meta4` varchar(255) NOT NULL DEFAULT '',
  `date_created` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_client_payment_method`
--

CREATE TABLE `st_client_payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `payment_uuid` varchar(100) NOT NULL DEFAULT '',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `merchant_id` bigint(20) DEFAULT '0',
  `payment_code` varchar(100) NOT NULL DEFAULT '',
  `as_default` int(1) NOT NULL DEFAULT '0',
  `reference_id` int(14) NOT NULL DEFAULT '0',
  `attr1` varchar(255) NOT NULL DEFAULT '',
  `attr2` varchar(255) NOT NULL DEFAULT '',
  `attr3` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_cooking_ref`
--

CREATE TABLE `st_cooking_ref` (
  `cook_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `cooking_name` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'published',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_cooking_ref_translation`
--

CREATE TABLE `st_cooking_ref_translation` (
  `id` int(11) NOT NULL,
  `cook_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `cooking_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_cuisine`
--

CREATE TABLE `st_cuisine` (
  `cuisine_id` int(14) NOT NULL,
  `cuisine_name` varchar(255) NOT NULL DEFAULT '',
  `featured_image` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `color_hex` varchar(10) NOT NULL DEFAULT '',
  `font_color_hex` varchar(10) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_cuisine`
--

INSERT INTO `st_cuisine` (`cuisine_id`, `cuisine_name`, `featured_image`, `path`, `slug`, `color_hex`, `font_color_hex`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'American', '', '', 'american', '#bad5f2', '#444444', 0, 'publish', '2022-01-26 22:15:29', '2022-01-26 22:15:29', ''),
(2, 'Deli', '', '', '', '#d87f22', 'white', 0, 'publish', '2022-01-27 07:56:53', '2022-01-27 08:02:10', '127.0.0.1'),
(3, 'Indian', '', '', '', '#e69138', '#999999', 0, 'publish', '2022-01-27 07:57:02', '2022-01-27 08:02:03', '127.0.0.1'),
(4, 'Mediterranean', '', '', '', '#ffd966', '#999999', 0, 'publish', '2022-01-27 07:57:08', '2022-01-27 08:01:58', '127.0.0.1'),
(5, 'Sandwiches', '', '', '', '#bf9000', 'white', 0, 'publish', '2022-01-27 07:57:14', '2022-01-27 08:01:51', '127.0.0.1'),
(6, 'Barbeque', '', '', '', '#b27c45', 'white', 0, 'publish', '2022-01-27 07:57:19', '2022-01-27 08:01:46', '127.0.0.1'),
(7, 'Diner', '', '', '', '#3d85c6', '#5b5b5b', 0, 'publish', '2022-01-27 07:57:29', '2022-01-27 08:01:37', '127.0.0.1'),
(8, 'Italian', '', '', '', '#a2c4c9', '#5b5b5b', 0, 'publish', '2022-01-27 07:57:35', '2022-01-27 08:01:28', '127.0.0.1'),
(9, 'Mexican', '', '', '', '#ea9999', 'white', 0, 'publish', '2022-01-27 07:57:39', '2022-01-27 08:01:21', '127.0.0.1'),
(10, 'Sushi', '', '', '', '#2986cc', 'white', 0, 'publish', '2022-01-27 07:57:45', '2022-01-27 08:01:14', '127.0.0.1'),
(11, 'Burgers', '', '', '', '#990000', 'white', 0, 'publish', '2022-01-27 07:57:51', '2022-01-27 08:01:09', '127.0.0.1'),
(12, 'Greek', '', '', '', '#b45f06', 'white', 0, 'publish', '2022-01-27 07:57:59', '2022-01-27 08:01:03', '127.0.0.1'),
(13, 'Japanese', '', '', '', '#38761d', 'white', 0, 'publish', '2022-01-27 07:58:05', '2022-01-27 08:00:58', '127.0.0.1'),
(14, 'Middle Eastern', '', '', '', '#45818e', 'white', 0, 'publish', '2022-01-27 07:58:12', '2022-01-27 08:00:51', '127.0.0.1'),
(15, 'Thai', '', '', '', '#a2c4c9', 'black', 0, 'publish', '2022-01-27 07:58:17', '2022-01-27 08:00:45', '127.0.0.1'),
(16, 'Chinese', '', '', '', '#f6b26b', 'white', 0, 'publish', '2022-01-27 07:58:26', '2022-01-27 08:00:38', '127.0.0.1'),
(17, 'Healthy', '', '', '', '#8fce00', '#eeeeee', 0, 'publish', '2022-01-27 07:58:32', '2022-01-27 08:00:30', '127.0.0.1'),
(18, 'Korean', '', '', '', '#f9cb9c', '#5b5b5b', 0, 'publish', '2022-01-27 07:58:39', '2022-01-27 08:00:21', '127.0.0.1'),
(19, 'Pizza', '', '', '', '#fedc78', '#999999', 0, 'publish', '2022-01-27 07:58:45', '2022-01-27 08:00:10', '127.0.0.1'),
(20, 'Vegetarian', '', '', '', '#efe5ee', 'black', 0, 'publish', '2022-01-27 07:58:50', '2022-01-27 07:59:27', '127.0.0.1'),
(21, 'Steak', '', '', '', '#bad5f2', 'black', 0, 'publish', '2022-01-27 07:58:56', '2022-01-27 07:59:14', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_cuisine_merchant`
--

CREATE TABLE `st_cuisine_merchant` (
  `id` int(14) NOT NULL,
  `merchant_id` varchar(14) NOT NULL DEFAULT '0',
  `cuisine_id` varchar(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_cuisine_translation`
--

CREATE TABLE `st_cuisine_translation` (
  `id` int(11) NOT NULL,
  `cuisine_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `cuisine_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_cuisine_translation`
--

INSERT INTO `st_cuisine_translation` (`id`, `cuisine_id`, `language`, `cuisine_name`) VALUES
(61, 21, 'ja', ''),
(62, 21, 'ar', ''),
(63, 21, 'en', 'Steak'),
(64, 20, 'ja', ''),
(65, 20, 'ar', ''),
(66, 20, 'en', 'Vegetarian'),
(67, 19, 'ja', ''),
(68, 19, 'ar', ''),
(69, 19, 'en', 'Pizza'),
(73, 18, 'ja', ''),
(74, 18, 'ar', ''),
(75, 18, 'en', 'Korean'),
(76, 17, 'ja', ''),
(77, 17, 'ar', ''),
(78, 17, 'en', 'Healthy'),
(79, 16, 'ja', ''),
(80, 16, 'ar', ''),
(81, 16, 'en', 'Chinese'),
(82, 15, 'ja', ''),
(83, 15, 'ar', ''),
(84, 15, 'en', 'Thai'),
(85, 14, 'ja', ''),
(86, 14, 'ar', ''),
(87, 14, 'en', 'Middle Eastern'),
(88, 13, 'ja', ''),
(89, 13, 'ar', ''),
(90, 13, 'en', 'Japanese'),
(91, 12, 'ja', ''),
(92, 12, 'ar', ''),
(93, 12, 'en', 'Greek'),
(94, 11, 'ja', ''),
(95, 11, 'ar', ''),
(96, 11, 'en', 'Burgers'),
(97, 10, 'ja', ''),
(98, 10, 'ar', ''),
(99, 10, 'en', 'Sushi'),
(100, 9, 'ja', ''),
(101, 9, 'ar', ''),
(102, 9, 'en', 'Mexican'),
(103, 8, 'ja', ''),
(104, 8, 'ar', ''),
(105, 8, 'en', 'Italian'),
(106, 7, 'ja', ''),
(107, 7, 'ar', ''),
(108, 7, 'en', 'Diner'),
(109, 6, 'ja', ''),
(110, 6, 'ar', ''),
(111, 6, 'en', 'Barbeque'),
(112, 5, 'ja', ''),
(113, 5, 'ar', ''),
(114, 5, 'en', 'Sandwiches'),
(115, 4, 'ja', ''),
(116, 4, 'ar', ''),
(117, 4, 'en', 'Mediterranean'),
(118, 3, 'ja', ''),
(119, 3, 'ar', ''),
(120, 3, 'en', 'Indian'),
(121, 2, 'ja', ''),
(122, 2, 'ar', ''),
(123, 2, 'en', 'Deli');

-- --------------------------------------------------------

--
-- Table structure for table `st_currency`
--

CREATE TABLE `st_currency` (
  `id` int(14) NOT NULL,
  `currency_code` varchar(3) NOT NULL DEFAULT '',
  `currency_symbol` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `as_default` int(1) NOT NULL DEFAULT '0',
  `is_hidden` int(1) NOT NULL DEFAULT '0',
  `currency_position` varchar(100) NOT NULL DEFAULT 'left',
  `exchange_rate` float(14,4) NOT NULL DEFAULT '0.0000',
  `exchange_rate_fee` float(14,4) NOT NULL DEFAULT '0.0000',
  `number_decimal` int(14) NOT NULL DEFAULT '2',
  `decimal_separator` varchar(5) NOT NULL DEFAULT '.',
  `thousand_separator` varchar(5) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_currency`
--

INSERT INTO `st_currency` (`id`, `currency_code`, `currency_symbol`, `description`, `as_default`, `is_hidden`, `currency_position`, `exchange_rate`, `exchange_rate_fee`, `number_decimal`, `decimal_separator`, `thousand_separator`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'USD', '$', 'United States Dollar', 1, 0, 'right', 1.0000, 0.0000, 2, '', '', '2021-01-20 08:00:54', '2022-01-26 22:41:48', '127.0.0.1'),
(2, 'JPY', '¥', 'Japan Yen', 0, 0, 'left', 104.5940, 0.0000, 2, '.', ',', '2021-01-20 08:02:20', '2021-05-18 23:33:26', '127.0.0.1'),
(13, 'PHP', '₱', 'Philippine Peso', 0, 0, 'left', 48.0425, 0.0000, 2, '.', ',', '2021-01-20 22:51:46', '2021-05-18 23:33:26', '127.0.0.1'),
(16, 'VND', '₫', 'Vietnamese Dong', 0, 0, 'left_space', 23028.3281, 0.0000, 2, '.', ',', '2021-01-21 07:38:41', '2021-05-18 23:33:26', '127.0.0.1'),
(21, 'SAR', '﷼', 'Saudi Riyal', 0, 0, 'left', 3.7511, 0.0000, 3, '.', ',', '2021-01-22 10:34:06', '2021-05-18 23:33:26', '127.0.0.1'),
(22, 'KRW', '₩', 'South Korean Won', 0, 0, 'left', 1106.2035, 0.0000, 2, '.', ',', '2021-01-22 18:08:45', '2021-05-18 23:33:26', '127.0.0.1'),
(23, 'AED', 'د.إ', 'UAE Dirham', 0, 0, 'left', 3.6732, 0.0000, 2, '.', ',', '2021-01-27 15:04:01', '2021-05-18 23:33:26', '127.0.0.1'),
(39, 'SGD', '$', 'Singapore Dollar', 0, 0, 'left', 1.3264, 0.0000, 2, '.', ',', '2021-02-05 10:51:33', '2021-05-18 23:33:26', '127.0.0.1'),
(40, 'EUR', '€', 'Euro', 0, 0, 'left', 0.8252, 0.0000, 2, '.', ',', '2021-02-05 23:20:31', '2021-05-18 23:33:26', '127.0.0.1'),
(41, 'BRL', 'R$', 'Brazilian Real', 0, 0, 'left', 5.3866, 0.0000, 2, '.', ',', '2021-02-05 23:21:54', '2021-05-18 23:33:26', '127.0.0.1'),
(42, 'INR', '₹', 'Indian Rupee', 0, 0, 'left', 72.8289, 0.0000, 2, '.', ',', '2021-02-09 09:52:18', '2021-05-18 23:33:26', '127.0.0.1'),
(43, 'ZWL', '', 'Zimbabwean Dollar', 0, 0, 'left', 322.0000, 0.0000, 2, '.', '', '2021-05-18 23:33:19', '2022-01-26 15:44:44', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_device`
--

CREATE TABLE `st_device` (
  `device_id` bigint(20) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT '',
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `platform` varchar(50) NOT NULL DEFAULT '',
  `device_token` text,
  `device_uiid` varchar(255) NOT NULL DEFAULT '',
  `browser_agent` varchar(255) NOT NULL DEFAULT '',
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_device_meta`
--

CREATE TABLE `st_device_meta` (
  `id` bigint(20) NOT NULL,
  `device_id` bigint(20) NOT NULL DEFAULT '0',
  `meta_name` varchar(100) NOT NULL DEFAULT '',
  `meta_value` text,
  `meta_value1` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_dishes`
--

CREATE TABLE `st_dishes` (
  `dish_id` int(14) NOT NULL,
  `dish_name` varchar(255) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_dishes_translation`
--

CREATE TABLE `st_dishes_translation` (
  `id` int(11) NOT NULL,
  `dish_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `dish_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_email_logs`
--

CREATE TABLE `st_email_logs` (
  `id` int(14) NOT NULL,
  `email_address` varchar(255) NOT NULL DEFAULT '',
  `sender` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(255) NOT NULL DEFAULT '',
  `content` longtext,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `email_provider` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_email_provider`
--

CREATE TABLE `st_email_provider` (
  `id` int(11) NOT NULL,
  `provider_id` varchar(100) NOT NULL DEFAULT '',
  `provider_name` varchar(255) NOT NULL DEFAULT '',
  `as_default` int(1) NOT NULL DEFAULT '0',
  `sender_name` varchar(255) NOT NULL DEFAULT '',
  `sender` varchar(255) NOT NULL DEFAULT '',
  `api_key` varchar(255) NOT NULL DEFAULT '',
  `secret_key` varchar(255) NOT NULL DEFAULT '',
  `smtp_host` varchar(255) NOT NULL DEFAULT '',
  `smtp_port` varchar(255) NOT NULL DEFAULT '',
  `smtp_username` varchar(255) NOT NULL DEFAULT '',
  `smtp_password` varchar(255) NOT NULL DEFAULT '',
  `smtp_secure` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_email_provider`
--

INSERT INTO `st_email_provider` (`id`, `provider_id`, `provider_name`, `as_default`, `sender_name`, `sender`, `api_key`, `secret_key`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`, `smtp_secure`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'phpmail', 'PHP Mail', 0, '', '', '', '', '', '', '', '', '', NULL, '2021-11-28 14:20:01', '127.0.0.1'),
(2, 'smtp', 'SMTP', 0, '', '', '', '', '', '', '', '', '', NULL, '2021-10-08 09:26:57', '::1'),
(4, 'sendgrid', 'SendGrid', 0, '', '', '', '', '', '', '', '', '', NULL, '2021-11-27 01:54:53', '127.0.0.1'),
(5, 'mailjet', 'MailJet', 0, '', '', '', '', '', '', '', '', '', NULL, '2021-10-08 09:27:48', '::1'),
(6, 'elastic', 'Elastic Email', 0, '', '', '', '', '', '', '', '', '', NULL, '2021-10-08 09:28:06', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `st_favorites`
--

CREATE TABLE `st_favorites` (
  `id` int(14) NOT NULL,
  `fav_type` varchar(100) NOT NULL DEFAULT 'restaurant',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `item_id` int(14) NOT NULL DEFAULT '0',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_featured_location`
--

CREATE TABLE `st_featured_location` (
  `id` int(11) NOT NULL,
  `featured_name` varchar(50) NOT NULL DEFAULT '',
  `location_name` varchar(255) NOT NULL DEFAULT '',
  `latitude` varchar(20) NOT NULL DEFAULT '',
  `longitude` varchar(20) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_gpdr_request`
--

CREATE TABLE `st_gpdr_request` (
  `id` int(11) NOT NULL,
  `request_type` varchar(255) NOT NULL DEFAULT '',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `first_name` varchar(255) NOT NULL DEFAULT '',
  `last_name` varchar(255) NOT NULL DEFAULT '',
  `email_address` varchar(255) NOT NULL DEFAULT '',
  `message` text,
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ingredients`
--

CREATE TABLE `st_ingredients` (
  `ingredients_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `ingredients_name` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'published',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ingredients_translation`
--

CREATE TABLE `st_ingredients_translation` (
  `id` int(11) NOT NULL,
  `ingredients_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `ingredients_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_inventory_supplier`
--

CREATE TABLE `st_inventory_supplier` (
  `supplier_id` int(11) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `supplier_name` varchar(255) NOT NULL DEFAULT '',
  `contact_name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `phone_number` varchar(50) NOT NULL DEFAULT '',
  `address_1` varchar(255) NOT NULL DEFAULT '',
  `address_2` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(100) NOT NULL DEFAULT '',
  `postal_code` varchar(100) NOT NULL DEFAULT '',
  `country_code` varchar(5) NOT NULL DEFAULT '',
  `region` varchar(100) NOT NULL DEFAULT '',
  `notes` text,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_item`
--

CREATE TABLE `st_item` (
  `item_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `item_name` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `item_description` text,
  `item_short_description` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(50) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `is_featured` varchar(1) NOT NULL DEFAULT '',
  `non_taxable` int(1) NOT NULL DEFAULT '1',
  `available` int(1) NOT NULL DEFAULT '1',
  `points_earned` int(14) NOT NULL DEFAULT '0',
  `points_enabled` int(1) NOT NULL DEFAULT '1',
  `packaging_fee` float(14,4) NOT NULL DEFAULT '0.0000',
  `packaging_incremental` int(1) NOT NULL DEFAULT '0',
  `item_token` varchar(50) NOT NULL DEFAULT '',
  `sku` varchar(255) NOT NULL DEFAULT '',
  `track_stock` int(1) NOT NULL DEFAULT '1',
  `supplier_id` int(14) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) NOT NULL DEFAULT '',
  `meta_description` text,
  `meta_keywords` text,
  `meta_image` varchar(255) NOT NULL DEFAULT '',
  `meta_image_path` varchar(255) NOT NULL DEFAULT '',
  `cooking_ref_required` smallint(1) NOT NULL DEFAULT '0',
  `available_at_specific` tinyint(1) NOT NULL DEFAULT '0',
  `not_for_sale` tinyint(1) NOT NULL DEFAULT '0',
  `color_hex` varchar(10) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_item_meta`
--

CREATE TABLE `st_item_meta` (
  `id` int(11) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `item_id` int(14) NOT NULL DEFAULT '0',
  `meta_name` varchar(255) NOT NULL DEFAULT '',
  `meta_id` varchar(255) NOT NULL DEFAULT '',
  `meta_value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_item_promo`
--

CREATE TABLE `st_item_promo` (
  `promo_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL DEFAULT '0',
  `item_id` int(11) NOT NULL DEFAULT '0',
  `promo_type` varchar(50) NOT NULL DEFAULT '',
  `buy_qty` int(14) DEFAULT '0',
  `get_qty` int(14) DEFAULT '0',
  `item_id_promo` int(14) NOT NULL DEFAULT '0',
  `discount_start` date DEFAULT NULL,
  `discount_end` date DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_item_relationship_category`
--

CREATE TABLE `st_item_relationship_category` (
  `id` int(11) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `item_id` int(14) NOT NULL DEFAULT '0',
  `cat_id` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_item_relationship_size`
--

CREATE TABLE `st_item_relationship_size` (
  `item_size_id` int(11) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `item_token` varchar(255) NOT NULL DEFAULT '',
  `item_id` int(14) NOT NULL DEFAULT '0',
  `size_id` int(14) NOT NULL DEFAULT '0',
  `price` float(14,4) NOT NULL DEFAULT '0.0000',
  `cost_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `discount` float(14,4) NOT NULL DEFAULT '0.0000',
  `discount_type` varchar(50) NOT NULL DEFAULT 'fixed',
  `discount_start` date DEFAULT NULL,
  `discount_end` date DEFAULT NULL,
  `sequence` smallint(1) NOT NULL DEFAULT '0',
  `sku` varchar(255) NOT NULL DEFAULT '',
  `available` int(1) NOT NULL DEFAULT '1',
  `low_stock` float(14,2) NOT NULL DEFAULT '0.00',
  `created_at` varchar(50) NOT NULL DEFAULT '',
  `updated_at` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_item_relationship_subcategory`
--

CREATE TABLE `st_item_relationship_subcategory` (
  `id` int(11) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `item_id` int(14) NOT NULL DEFAULT '0',
  `item_size_id` int(14) NOT NULL DEFAULT '0',
  `subcat_id` int(14) NOT NULL DEFAULT '0',
  `multi_option` varchar(255) NOT NULL DEFAULT '',
  `multi_option_value` varchar(255) NOT NULL DEFAULT '',
  `require_addon` smallint(1) NOT NULL DEFAULT '0',
  `pre_selected` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_item_relationship_subcategory_item`
--

CREATE TABLE `st_item_relationship_subcategory_item` (
  `id` int(11) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `item_id` int(14) NOT NULL DEFAULT '0',
  `subcat_id` int(14) NOT NULL DEFAULT '0',
  `sub_item_id` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_item_translation`
--

CREATE TABLE `st_item_translation` (
  `id` int(11) NOT NULL,
  `item_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `item_name` varchar(255) NOT NULL DEFAULT '',
  `item_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_language`
--

CREATE TABLE `st_language` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `flag` varchar(100) NOT NULL DEFAULT '',
  `rtl` int(1) NOT NULL DEFAULT '0',
  `sequence` int(11) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_language`
--

INSERT INTO `st_language` (`id`, `code`, `title`, `description`, `flag`, `rtl`, `sequence`, `status`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'ar', 'Arabic', 'al-\'arabiyyah, العربية', 'AE', 1, 3, 'publish', '2021-05-08 14:46:23', '2022-01-27 08:05:31', '127.0.0.1'),
(2, 'en', 'English', 'american english', 'US', 0, 1, 'publish', '2021-05-08 14:46:23', '2022-01-27 08:05:25', '127.0.0.1'),
(4, 'ja', 'Japanese', 'nihongo', 'JP', 0, 2, 'publish', '2021-05-08 14:46:23', '2022-01-27 08:05:19', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_location_area`
--

CREATE TABLE `st_location_area` (
  `area_id` int(14) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `city_id` int(14) NOT NULL DEFAULT '0',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_location_cities`
--

CREATE TABLE `st_location_cities` (
  `city_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `postal_code` varchar(255) NOT NULL DEFAULT '',
  `state_id` int(11) NOT NULL,
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_location_countries`
--

CREATE TABLE `st_location_countries` (
  `country_id` int(11) NOT NULL,
  `shortcode` varchar(3) NOT NULL DEFAULT '',
  `country_name` varchar(150) NOT NULL DEFAULT '',
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_location_countries`
--

INSERT INTO `st_location_countries` (`country_id`, `shortcode`, `country_name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Congo', 242),
(50, 'CD', 'Congo The Democratic Republic Of The', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `st_location_rate`
--

CREATE TABLE `st_location_rate` (
  `rate_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `country_id` int(14) NOT NULL DEFAULT '0',
  `state_id` int(14) NOT NULL DEFAULT '0',
  `city_id` int(14) DEFAULT '0',
  `area_id` int(14) NOT NULL DEFAULT '0',
  `fee` float(14,5) NOT NULL DEFAULT '0.00000',
  `minimum_order` float(14,5) NOT NULL DEFAULT '0.00000',
  `free_above_subtotal` float(14,5) NOT NULL DEFAULT '0.00000',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_location_states`
--

CREATE TABLE `st_location_states` (
  `state_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `country_id` int(11) NOT NULL DEFAULT '1',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_map_places`
--

CREATE TABLE `st_map_places` (
  `id` int(11) NOT NULL,
  `reference_type` varchar(50) NOT NULL DEFAULT '',
  `reference_id` varchar(255) NOT NULL DEFAULT '',
  `latitude` varchar(20) NOT NULL DEFAULT '',
  `longitude` varchar(20) NOT NULL DEFAULT '',
  `address1` varchar(255) NOT NULL DEFAULT '',
  `address2` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `country_code` varchar(5) NOT NULL DEFAULT '',
  `postal_code` varchar(100) NOT NULL DEFAULT '',
  `formatted_address` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_media_files`
--

CREATE TABLE `st_media_files` (
  `id` int(11) NOT NULL,
  `upload_uuid` varchar(100) NOT NULL DEFAULT '',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `filename` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `size` varchar(50) NOT NULL DEFAULT '',
  `media_type` varchar(100) NOT NULL DEFAULT '',
  `meta_name` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_menu`
--

CREATE TABLE `st_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_type` varchar(100) NOT NULL DEFAULT 'admin',
  `menu_name` varchar(255) NOT NULL DEFAULT '',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `meta_value1` int(10) NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL DEFAULT '',
  `action_name` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1',
  `visible` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_menu`
--

INSERT INTO `st_menu` (`menu_id`, `menu_type`, `menu_name`, `parent_id`, `link`, `action_name`, `sequence`, `status`, `visible`) VALUES
(1, 'admin', 'Dashboard', 0, 'admin/dashboard', 'admin.dashboard', 1, 1, 1),
(2, 'admin', 'Merchant', 0, '', 'merchant', 3, 1, 1),
(3, 'admin', 'List', 2, 'vendor/list', 'vendor.list', 0, 1, 1),
(4, 'admin', 'Sponsored', 2, 'vendor/sponsored', 'vendor.sponsored', 11, 1, 1),
(5, 'admin', 'Users', 0, '', 'admin.user', 17, 1, 1),
(6, 'admin', 'Orders', 0, '', 'admin.orders', 5, 1, 1),
(7, 'admin', 'All order', 6, 'order/list', 'order.list', 1, 1, 1),
(8, 'admin', 'Order settings', 6, 'order/settings', 'order.settings', 4, 1, 1),
(9, 'admin', 'All User', 5, 'user/list', 'user.list', 1, 1, 1),
(10, 'admin', 'Add User', 5, 'user/create', 'user.create', 2, 1, 0),
(14, 'admin', 'Delete User', 5, 'user/delete', 'user.delete', 4, 1, 0),
(16, 'admin', 'Membership', 0, '', 'membership', 4, 1, 1),
(17, 'admin', 'Plans', 16, 'plans/list', 'plans.list', 1, 1, 1),
(18, 'admin', 'Add Plan', 16, 'plans/create', 'plans.create', 2, 1, 1),
(19, 'admin', 'Delete Plan', 16, 'admin/deleteplan', 'admin.deleteplan', 3, 1, 0),
(20, 'admin', 'Attributes', 0, '', 'attributes', 10, 1, 1),
(21, 'admin', 'Cuisine', 20, 'attributes/cuisine_list', 'attributes.cuisine_list', 1, 1, 1),
(22, 'admin', 'Dishes', 20, 'attributes/dish_list', 'attributes.dish_list', 2, 1, 1),
(23, 'admin', 'Tags', 20, 'attributes/tag_list', 'attributes.tag_list', 3, 1, 1),
(24, 'admin', 'All CSV Upload', 2, 'vendor/csvlist', 'vendor.csvlist', 9, 1, 0),
(25, 'admin', 'Order status', 20, 'attributes/order_status', 'attributes.order_status', 4, 1, 1),
(26, 'admin', 'Site configuration', 0, 'admin/site_information', 'admin.site_information', 2, 1, 1),
(27, 'admin', 'Currency', 20, 'attributes/currency', 'attributes.currency', 5, 1, 1),
(28, 'admin', 'Promo', 0, '', 'promo', 11, 1, 1),
(29, 'admin', 'Coupon', 28, 'promo/coupon', 'promo.coupon', 1, 1, 1),
(30, 'admin', 'Notifications', 0, '', 'notifications', 12, 1, 1),
(31, 'admin', 'Email provider', 30, 'notifications/provider', 'notifications.provider', 2, 1, 1),
(32, 'admin', 'Templates', 30, 'notifications/template', 'notifications.template', 6, 1, 1),
(34, 'admin', 'Email logs', 30, 'notifications/email_logs', 'notifications.email_logs', 10, 1, 1),
(35, 'admin', 'Pages', 20, 'attributes/pages_list', 'attributes.pages_list', 8, 1, 1),
(36, 'admin', 'Languages', 20, 'attributes/language_list', 'attributes.language_list', 9, 1, 1),
(37, 'admin', 'Buyers', 0, '', 'buyer', 13, 1, 1),
(38, 'admin', 'Customers', 37, 'buyer/customers', 'buyer.customers', 1, 1, 1),
(40, 'admin', 'All Roles', 5, 'user/roles_list', 'user.roles_list', 100, 1, 1),
(41, 'admin', 'Create Role', 5, 'user/role_create', 'user.role_create', 100, 1, 0),
(42, 'admin', 'Update Role', 5, 'user/role_update', 'user.role_update', 100, 1, 0),
(43, 'admin', 'Delete Role', 5, 'user/role_delete', 'user.role_delete', 100, 1, 0),
(44, 'admin', 'Reviews', 37, 'buyer/review_list', 'buyer.review_list', 12, 1, 1),
(45, 'admin', 'Manage Location', 20, 'location/country_list', 'location.country_list', 6, 1, 1),
(46, 'admin', 'SMS', 0, '', 'sms', 15, 1, 1),
(48, 'admin', 'Providers', 46, 'sms/settings', 'sms.settings', 1, 1, 1),
(50, 'admin', 'Logs', 46, 'sms/logs', 'sms.logs', 100, 1, 1),
(51, 'admin', 'Reports', 0, '', 'reports', 16, 1, 1),
(52, 'admin', 'Merchant Registration', 51, 'reports/merchant_registration', 'reports.merchant_registration', 1, 1, 1),
(53, 'admin', 'Membership Payment', 51, 'reports/merchant_payment', 'reports.merchant_payment', 2, 1, 1),
(54, 'admin', 'Merchant Sales', 51, 'reports/merchant_sales', 'reports.merchant_sales', 3, 1, 1),
(57, 'admin', 'Status Management', 20, 'attributes/status_mgt', 'attributes.status_mgt', 10, 1, 1),
(58, 'admin', 'Order Type', 20, 'attributes/services_list', 'attributes.services_list', 11, 1, 1),
(59, 'admin', 'Merchant Type', 20, 'attributes/merchant_type_list', 'attributes.merchant_type_list', 12, 1, 1),
(60, 'merchant', 'Dashboard', 0, 'merchant/dashboard', 'merchant.dashboard', 1, 1, 1),
(61, 'merchant', 'Merchant', 0, '', 'merchant', 2, 1, 1),
(62, 'merchant', 'Information', 61, 'merchant/edit', 'merchant.edit', 1, 1, 1),
(63, 'merchant', 'Settings', 61, 'merchant/settings', 'merchant.settings', 2, 1, 1),
(64, 'merchant', 'Orders', 0, '', 'merchant.orders', 3, 1, 1),
(65, 'merchant', 'New Orders', 64, 'orders/new', 'orders.new', 1, 1, 1),
(66, 'merchant', 'Orders Processing', 64, 'orders/processing', 'orders.processing', 2, 1, 1),
(69, 'merchant', 'Settings', 67, 'booking/settings', 'booking.settings', 2, 1, 1),
(70, 'merchant', 'Attributes', 0, '', 'attributes', 5, 1, 1),
(71, 'merchant', 'Order Limit', 61, 'merchant/time_management', 'merchant.time_management', 4, 1, 1),
(72, 'merchant', 'Size', 70, 'attrmerchant/size_list', 'attrmerchant.size_list', 1, 1, 1),
(73, 'merchant', 'Ingredients', 70, 'attrmerchant/ingredients_list', 'attrmerchant.ingredients_list', 5, 1, 1),
(74, 'merchant', 'Cooking Reference\r\n', 70, 'attrmerchant/cookingref_list', 'attrmerchant.cookingref_list', 9, 1, 1),
(75, 'merchant', 'Food', 0, '', 'food', 6, 1, 1),
(76, 'merchant', 'Category', 75, 'food/category', 'food.category', 1, 1, 1),
(77, 'merchant', 'Addon Category', 75, 'food/addoncategory', 'food.addoncategory', 6, 1, 1),
(78, 'merchant', 'Addon Items', 75, 'food/addonitem', 'food.addonitem', 10, 1, 1),
(79, 'merchant', 'Items', 75, 'food/items', 'food.items', 14, 1, 1),
(80, 'merchant', 'Order Type', 0, '', 'services.settings', 7, 1, 1),
(81, 'merchant', 'Delivery', 80, 'services/delivery_settings', 'services.delivery_settings', 1, 1, 1),
(82, 'merchant', 'Promo', 0, '', 'promo', 9, 1, 1),
(83, 'merchant', 'Coupon', 82, 'merchant/coupon', 'merchant.coupon', 1, 1, 1),
(84, 'merchant', 'Offers', 82, 'merchant/offers', 'merchant.offers', 5, 1, 1),
(85, 'merchant', 'Images', 0, '', 'merchant.images', 9, 1, 1),
(87, 'merchant', 'Account', 0, '', '', 10, 1, 1),
(88, 'merchant', 'Statement', 87, 'commission/statement', 'commission.statement', 1, 1, 1),
(89, 'merchant', 'Earnings', 87, 'commission/earnings', 'commission.earnings', 2, 0, 0),
(90, 'merchant', 'Withdrawals', 87, 'commission/withdrawals', 'commission.withdrawals', 3, 1, 1),
(91, 'merchant', 'SMS', 0, '', 'sms', 11, 1, 0),
(93, 'merchant', 'BroadCast', 91, 'smsmerchant/broadcast', 'smsmerchant.broadcast', 2, 1, 1),
(94, 'merchant', 'Buyers', 0, '', 'buyer', 12, 1, 1),
(96, 'merchant', 'Reviews', 94, 'customer/reviews', 'customer.reviews', 2, 1, 1),
(97, 'merchant', 'Users', 0, '', 'merchan.user', 13, 1, 1),
(98, 'merchant', 'All User', 97, 'usermerchant/user_list', 'usermerchant.user_list', 1, 1, 1),
(99, 'merchant', 'All Roles', 97, 'usermerchant/role_list', 'usermerchant.role_list', 5, 1, 1),
(100, 'merchant', 'Reports', 0, '', 'reports', 14, 1, 1),
(101, 'merchant', 'Sales Report', 100, 'merchantreport/sales', 'merchantreport.sales', 1, 1, 1),
(102, 'merchant', 'Sales Summary', 100, 'merchantreport/summary', 'merchantreport.summary', 2, 1, 1),
(104, 'merchant', 'Pickup', 80, 'services/settings_pickup', 'services.settings_pickup', 4, 1, 1),
(105, 'merchant', 'Dinein', 80, 'services/settings_dinein', 'services.settings_dinein', 6, 1, 1),
(106, 'merchant', 'Gallery', 85, 'images/gallery', 'images.gallery', 1, 1, 1),
(107, 'merchant', 'Media Library', 85, 'images/media_library', 'images.media_library', 2, 1, 1),
(108, 'merchant', 'Merchant information', 61, 'merchant/edit', 'merchant.edit', 2, 0, 0),
(109, 'merchant', 'Login information', 61, 'merchant/login', 'merchant.login', 3, 1, 0),
(110, 'merchant', 'Address', 61, 'merchant/address', 'merchant.address', 4, 1, 0),
(111, 'merchant', 'Merchant Type', 61, 'merchant/membership', 'merchant.membership', 5, 1, 0),
(112, 'merchant', 'Featured', 61, 'merchant/featured', 'merchant.featured', 6, 1, 0),
(113, 'merchant', 'Store Hours', 61, 'merchant/store_hours', 'merchant.store_hours', 9, 1, 0),
(114, 'merchant', 'Tracking Time', 61, 'merchant/tracking_estimation', 'merchant.tracking_estimation', 10, 1, 0),
(115, 'merchant', 'Add Store Hours', 61, 'merchant/store_hours_create', 'merchant.store_hours_create', 11, 1, 0),
(116, 'merchant', 'Payment history', 61, 'merchant/payment_history', 'merchant.payment_history', 12, 1, 0),
(117, 'merchant', 'Update Store Hours\r\n', 61, 'merchant/store_hours_update', 'merchant.store_hours_update', 13, 1, 0),
(118, 'merchant', 'Delete Store Hours', 61, 'merchant/store_hours_delete', 'merchant.store_hours_delete', 14, 1, 0),
(122, 'merchant', 'View Order', 64, 'orders/view', 'orders.view', 7, 1, 0),
(123, 'merchant', 'Delete Order', 64, 'merchant/delete', 'merchant.delete', 9, 1, 0),
(124, 'merchant', 'Create Time Management', 64, 'merchant/time_management_create', 'merchant.time_management_create', 10, 1, 0),
(125, 'merchant', 'Update Time Management', 64, 'merchant/time_management_update', 'merchant.time_management_update', 11, 1, 0),
(126, 'merchant', 'Delete Time Management', 64, 'merchant/time_mgt_delete', 'merchant.time_mgt_delete', 12, 1, 0),
(127, 'merchant', 'Inventory Management', 0, '', 'inventory.management', 15, 1, 1),
(128, 'merchant', 'Suppliers', 127, 'supplier/list', 'supplier.list', 1, 1, 1),
(132, 'merchant', 'Time Slot', 67, 'booking/time_slot', 'booking.time_slot', 6, 1, 0),
(133, 'merchant', 'Create Time Slot', 67, 'booking/timeslot_create', 'booking.timeslot_create', 7, 1, 0),
(134, 'merchant', 'Update Time Slot', 67, 'booking/timeslot_update', 'booking.timeslot_update', 8, 1, 0),
(135, 'merchant', 'Delete Time Slot', 67, 'booking/delete_timeslot', 'booking.delete_timeslot', 8, 1, 0),
(136, 'merchant', 'Create Size', 70, 'attrmerchant/size_create', 'attrmerchant.size_create', 2, 1, 0),
(137, 'merchant', 'Update Size', 70, 'attrmerchant/size_update', 'attrmerchant.size_update', 3, 1, 0),
(138, 'merchant', 'Delete Size', 70, 'attrmerchant/size_delete', 'attrmerchant.size_delete', 4, 1, 0),
(139, 'merchant', 'Ingredients create', 70, 'attrmerchant/ingredients_create', 'attrmerchant.ingredients_create', 6, 1, 0),
(140, 'admin', 'Featured Locations', 20, 'attributes/featured_loc', 'attributes.featured_loc', 7, 1, 1),
(141, 'admin', 'Payment gateway', 0, '', 'payment.gateway', 6, 1, 1),
(142, 'admin', 'All Payment', 141, 'payment_gateway/list', 'payment_gateway.list', 1, 1, 1),
(143, 'merchant', 'Payment gateway', 0, '', 'payment.gateway', 8, 1, 1),
(144, 'merchant', 'All payments', 143, 'merchant/payment_list', 'merchant.payment_list', 1, 1, 1),
(148, 'merchant', 'Orders Ready', 64, 'orders/ready', 'orders.ready', 3, 1, 1),
(149, 'merchant', 'Completed', 64, 'orders/completed', 'orders.completed', 4, 1, 1),
(150, 'admin', 'Rejection Reason', 20, 'attributes/rejection_list', 'attributes.rejection_list', 13, 1, 1),
(151, 'merchant', 'All Orders', 64, 'orders/history', 'orders.history', 6, 1, 1),
(152, 'admin', 'Account', 0, '', 'admin.account', 7, 1, 1),
(153, 'admin', 'Transactions', 152, 'account/transactions', 'account.transactions', 1, 1, 1),
(154, 'admin', 'Earnings', 0, '', 'admin.earnings', 8, 1, 1),
(155, 'admin', 'Merchant Earnings', 154, 'earnings/merchant', 'earnings.merchant', 1, 1, 1),
(156, 'admin', 'Withdrawals', 0, '', 'admin.withdrawals', 9, 1, 1),
(157, 'admin', 'Merchant withdrawals', 156, 'withdrawals/merchant', 'withdrawals.merchant', 1, 1, 1),
(159, 'admin', 'Settings', 156, 'withdrawals/settings', 'withdrawals.settings', 2, 1, 1),
(160, 'admin', 'Third Party App', 0, '', 'admin.thirdparty', 14, 1, 1),
(161, 'admin', 'Real time application', 160, 'thirdparty/realtime', 'thirdparty.realtime', 1, 1, 1),
(162, 'admin', 'Web push notification', 160, 'thirdparty/webpush', 'thirdparty.webpush', 2, 1, 1),
(163, 'admin', 'Push logs', 30, 'notifications/push_logs', 'notifications.push_logs', 12, 1, 1),
(164, 'merchant', 'Scheduled', 64, 'orders/scheduled', 'orders.scheduled', 5, 1, 1),
(165, 'admin', 'Media Library', 0, 'media/library', 'media.library', 18, 1, 1),
(166, 'admin', 'Zones', 20, 'attributes/zone_list', 'attributes.zone_list', 6, 1, 1),
(167, 'admin', 'Pause order reason', 20, 'attributes/pause_reason_list', 'attributes.pause_reason_list', 14, 1, 1),
(168, 'admin', 'Status Actions', 20, 'attributes/actions_list', 'attributes.actions_list', 15, 1, 1),
(169, 'admin', 'Order earnings', 51, 'reports/order_earnings', 'reports.order_earnings', 4, 1, 1),
(170, 'merchant', 'Refund Report', 100, 'merchantreport/refund', 'merchantreport.refund', 3, 1, 1),
(171, 'merchant', 'POS', 0, '', 'pos', 3, 1, 1),
(172, 'merchant', 'POS create order', 171, 'pos/create_order', 'pos.create_order', 1, 1, 1),
(173, 'merchant', 'Orders', 171, 'pos/orders', 'pos.orders', 2, 1, 1),
(174, 'admin', 'Refund Report', 51, 'reports/refund', 'reports.refund', 5, 1, 1),
(175, 'admin', 'Map API Keys', 26, 'admin/map_keys', 'admin.map_keys', 1, 1, 0),
(176, 'admin', 'Google Recaptcha', 26, 'admin/recaptcha', 'admin.recaptcha', 2, 1, 0),
(177, 'admin', 'Search mode', 26, 'admin/search_settings', 'admin.search_settings', 3, 1, 0),
(178, 'admin', 'Login & Signup', 26, 'admin/login_sigup', 'admin.login_sigup', 4, 1, 0),
(179, 'admin', 'Phone Settings', 26, 'admin/phone_settings', 'admin.phone_settings', 4, 1, 0),
(180, 'admin', 'Social Login', 26, 'admin/social_settings', 'admin.social_settings', 5, 1, 0),
(181, 'admin', 'Printing Settings', 26, 'admin/printing', 'admin.printing', 6, 1, 0),
(182, 'admin', 'Reviews', 26, 'admin/reviews', 'admin.reviews', 7, 1, 0),
(183, 'admin', 'Timezone', 26, 'admin/timezone', 'admin.timezone', 8, 1, 0),
(184, 'admin', 'Ordering', 26, 'admin/ordering', 'admin.ordering', 9, 1, 0),
(185, 'admin', 'Merchant Registration', 26, 'admin/merchant_registration', 'admin.merchant_registration', 10, 1, 0),
(186, 'admin', 'Notifications', 26, 'admin/notifications', 'admin.notifications', 11, 1, 0),
(187, 'admin', 'Contact Settings', 26, 'admin/contact_settings', 'admin.contact_settings', 12, 1, 0),
(188, 'admin', 'Analytics', 26, 'admin/analytics_settings', 'admin.analytics_settings', 13, 1, 0),
(189, 'admin', 'Merchant Information', 2, 'vendor/edit', 'vendor.edit', 1, 1, 0),
(190, 'admin', 'Login information', 2, 'vendor/login', 'vendor.login', 2, 1, 0),
(191, 'admin', 'Address', 2, 'vendor/address', 'vendor.address', 2, 1, 0),
(192, 'admin', 'Zone', 2, 'vendor/zone', 'vendor.zone', 3, 1, 0),
(193, 'admin', 'Merchant Type', 2, 'vendor/membership', 'vendor.membership', 4, 1, 0),
(194, 'admin', 'Featured', 2, 'vendor/featured', 'vendor.featured', 5, 1, 0),
(195, 'admin', 'Payment history', 2, 'vendor/payment_history', 'vendor.payment_history', 6, 1, 0),
(196, 'admin', 'Payment settings', 2, 'vendor/payment_settings', 'vendor.payment_settings', 7, 1, 0),
(197, 'admin', 'Others', 2, 'vendor/others', 'vendor.others', 8, 1, 0),
(198, 'admin', 'Upload CSV', 2, 'vendor/csv_upload', 'vendor.csv_upload', 10, 1, 0),
(199, 'admin', ' Add sponsored', 2, 'vendor/create_sponsored', 'vendor.create_sponsored', 12, 1, 0),
(200, 'admin', ' Update sponsored', 16, 'plans/update', 'plans.update', 4, 1, 0),
(201, 'admin', ' Update sponsored', 16, 'plans/features', 'plans.features', 5, 1, 0),
(202, 'admin', ' Update sponsored', 16, 'plans/payment_list', 'plans.payment_list', 6, 1, 0),
(203, 'admin', ' Update sponsored', 16, 'plans/feature_create', 'plans.feature_create', 7, 1, 0),
(204, 'admin', 'View order', 6, 'order/view', 'order.view', 2, 1, 0),
(205, 'admin', 'Print PDF', 6, 'preprint/pdf', 'preprint.pdf', 3, 1, 0),
(206, 'admin', 'Order Tabs', 6, 'order/settings_tabs', 'order.settings_tabs', 5, 1, 0),
(207, 'admin', 'Order Buttons', 6, 'order/settings_buttons', 'order.settings_buttons', 6, 1, 0),
(208, 'admin', 'Order Tracking', 6, 'order/settings_tracking', 'order.settings_tracking', 7, 1, 0),
(209, 'admin', 'Template', 6, 'order/settings_template', 'order.settings_template', 8, 1, 0),
(210, 'admin', 'Add Gateway', 141, 'payment_gateway/create', 'payment_gateway.create', 2, 1, 0),
(211, 'admin', 'Update Gateway', 141, 'payment_gateway/update', 'payment_gateway.update', 3, 1, 0),
(212, 'admin', 'Withdrawals Template', 156, 'withdrawals/settings_template', 'withdrawals.settings_template', 3, 1, 0),
(213, 'admin', 'Cuisine create', 20, 'attributes/cuisine_create', 'attributes.cuisine_create', 1, 1, 0),
(214, 'admin', 'Cuisine update', 20, 'attributes/cuisine_update', 'attributes.cuisine_update', 1, 1, 0),
(215, 'admin', 'Dishes create', 20, 'attributes/dish_create', 'attributes.dish_create', 2, 1, 0),
(216, 'admin', 'Dishes update', 20, 'attributes/dish_update', 'attributes.dish_update', 2, 1, 0),
(217, 'admin', 'Dishes delete', 20, 'attributes/dishes_delete', 'attributes.dishes_delete', 2, 1, 0),
(218, 'admin', 'Cuisine delete', 20, 'attributes/cuisine_delete', 'attributes.cuisine_delete', 1, 1, 0),
(219, 'admin', 'Tags create', 20, 'attributes/tags_create', 'attributes.tags_create', 3, 1, 0),
(220, 'admin', 'Tags update', 20, 'attributes/tags_update', 'attributes.tags_update', 3, 1, 0),
(221, 'admin', 'Tags delete', 20, 'attributes/tags_delete', 'attributes.tags_delete', 3, 1, 0),
(222, 'admin', 'Status create', 20, 'attributes/status_create', 'attributes.status_create', 4, 1, 0),
(223, 'admin', 'Status update', 20, 'attributes/status_update', 'attributes.status_update', 4, 1, 0),
(224, 'admin', 'Status delete', 20, 'attributes/status_delete', 'attributes.status_delete', 4, 1, 0),
(225, 'admin', 'Status actions', 20, 'attributes/status_actions', 'attributes.status_actions', 4, 1, 0),
(226, 'admin', 'Status actions create', 20, 'attributes/create_action', 'attributes.create_action', 4, 1, 0),
(227, 'admin', 'Status actions update', 20, 'attributes/update_action', 'attributes.update_action', 4, 1, 0),
(228, 'admin', 'Currency create', 20, 'attributes/currency_create', 'attributes.currency_create', 5, 1, 0),
(229, 'admin', 'Currency update', 20, 'attributes/currency_update', 'attributes.currency_update', 5, 1, 0),
(230, 'admin', 'Currency delete', 20, 'attributes/currency_delete', 'attributes.currency_delete', 5, 1, 0),
(231, 'admin', 'Country create', 20, 'location/country_create', 'location.country_create', 6, 1, 0),
(232, 'admin', 'Country update', 20, 'location/country_update', 'location.country_update', 6, 1, 0),
(233, 'admin', 'Currency delete', 20, 'location/delete_country', 'location.delete_country', 6, 1, 0),
(234, 'admin', 'State list', 20, 'location/state_list', 'location.state_list', 6, 1, 0),
(235, 'admin', 'State create', 20, 'location/state_create', 'location.state_create', 6, 1, 0),
(236, 'admin', 'State update', 20, 'location/state_update', 'location.state_update', 6, 1, 0),
(237, 'admin', 'State delete', 20, 'location/state_delete', 'location.state_delete', 6, 1, 0),
(238, 'admin', 'City list', 20, 'location/city_list', 'location.city_list', 6, 1, 0),
(239, 'admin', 'City create', 20, 'location/city_create', 'location.city_create', 6, 1, 0),
(240, 'admin', 'City delete', 20, 'location/city_delete', 'location.city_delete', 6, 1, 0),
(241, 'admin', 'Area list', 20, 'location/area_list', 'location.area_list', 6, 1, 0),
(242, 'admin', 'Area create', 20, 'location/area_create', 'location.area_create', 6, 1, 0),
(243, 'admin', 'Area update', 20, 'location/area_update', 'location.area_update', 6, 1, 0),
(244, 'admin', 'Area delete', 20, 'location/area_delete', 'location.area_delete', 6, 1, 0),
(245, 'admin', 'Zone create', 20, 'attributes/zone_create', 'attributes.zone_create', 6, 1, 0),
(246, 'admin', 'Zone update', 20, 'attributes/zone_update', 'attributes.zone_update', 6, 1, 0),
(247, 'admin', 'Zone delete', 20, 'attributes/zone_delete', 'attributes.zone_delete', 6, 1, 0),
(248, 'admin', 'Featured create', 20, 'attributes/featured_loc_create', 'attributes.featured_loc_create', 7, 1, 0),
(249, 'admin', 'Featured update', 20, 'attributes/featured_loc_update', 'attributes.featured_loc_update', 7, 1, 0),
(250, 'admin', 'Featured delete', 20, 'attributes/featured_loc_delete', 'attributes.featured_loc_delete', 7, 1, 0),
(254, 'admin', 'Pages create', 20, 'attributes/pages_create', 'attributes.pages_create', 8, 1, 0),
(255, 'admin', 'Pages update', 20, 'attributes/page_update', 'attributes.page_update', 8, 1, 0),
(256, 'admin', 'Pages delete', 20, 'attributes/pages_delete', 'attributes.pages_delete', 8, 1, 0),
(257, 'admin', 'Language create', 20, 'attributes/language_create', 'attributes.language_create', 9, 1, 0),
(258, 'admin', 'Language update', 20, 'attributes/language_update', 'attributes.language_update', 9, 1, 0),
(259, 'admin', 'Language delete', 20, 'attributes/language_delete', 'attributes.language_delete', 9, 1, 0),
(260, 'admin', 'Status Management create', 20, 'attributes/status_mgt_create', 'attributes.status_mgt_create', 10, 1, 0),
(261, 'admin', 'Status Management update', 20, 'attributes/status_mgt_update', 'attributes.status_mgt_update', 10, 1, 0),
(262, 'admin', 'Status Management delete', 20, 'attributes/status_mgt_delete', 'attributes.status_mgt_delete', 10, 1, 0),
(263, 'admin', 'Order type create', 20, 'attributes/services_create', 'attributes.services_create', 11, 1, 0),
(264, 'admin', 'Order type update', 20, 'attributes/services_update', 'attributes.services_update', 11, 1, 0),
(265, 'admin', 'Order type delete', 20, 'attributes/services_delete', 'attributes.services_delete', 11, 1, 0),
(266, 'admin', 'Merchant type create', 20, 'attributes/merchant_type_create', 'attributes.merchant_type_create', 12, 1, 0),
(267, 'admin', 'Merchant type update', 20, 'attributes/merchant_type_update', 'attributes.merchant_type_update', 12, 1, 0),
(268, 'admin', 'Merchant type delete', 20, 'attributes/merchant_type_delete', 'attributes.merchant_type_delete', 12, 1, 0),
(269, 'admin', 'Rejection reason create', 20, 'attributes/rejection_create', 'attributes.rejection_create', 13, 1, 0),
(270, 'admin', 'Rejection reason update', 20, 'attributes/rejection_update', 'attributes.rejection_update', 13, 1, 0),
(271, 'admin', 'Rejection reason delete', 20, 'attributes/rejection_reason_delete', 'attributes.rejection_reason_delete', 13, 1, 0),
(272, 'admin', 'Pause reason create', 20, 'attributes/pause_create', 'attributes.pause_create', 14, 1, 0),
(273, 'admin', 'Pause reason update', 20, 'attributes/pause_reason_update', 'attributes.pause_reason_update', 14, 1, 0),
(274, 'admin', 'Pause reason delete', 20, 'attributes/pause_reason_delete', 'attributes.pause_reason_delete', 14, 1, 0),
(275, 'admin', 'Status action create', 20, 'attributes/action_create', 'attributes.action_create', 15, 1, 0),
(276, 'admin', 'Status reason update', 20, 'attributes/action_update', 'attributes.action_update', 15, 1, 0),
(277, 'admin', 'Status reason delete', 20, 'attributes/action_delete', 'attributes.action_delete', 15, 1, 0),
(278, 'admin', 'Coupon create', 28, 'promo/coupon_create', 'promo.coupon_create', 2, 1, 0),
(279, 'admin', 'Coupon update', 28, 'promo/coupon_update', 'promo.coupon_update', 3, 1, 0),
(280, 'admin', 'Coupon delete', 28, 'promo/coupon_delete', 'promo.coupon_delete', 4, 1, 0),
(281, 'admin', 'Email Provider create', 30, 'notifications/provider_create', 'notifications.provider_create', 3, 1, 0),
(282, 'admin', 'Email Provider update', 30, 'notifications/provider_update', 'notifications.provider_update', 4, 1, 0),
(283, 'admin', 'Email Provider delete', 30, 'notifications/email_provider_delete', 'notifications.email_provider_delete', 5, 1, 0),
(284, 'admin', 'Templates create', 30, 'notifications/template_create', 'notifications.template_create', 7, 1, 0),
(285, 'admin', 'Templates update', 30, 'notifications/template_update', 'notifications.template_update', 8, 1, 0),
(286, 'admin', 'Templates delete', 30, 'notifications/template_delete', 'notifications.template_delete', 9, 1, 0),
(287, 'admin', 'Email Logs delete', 30, 'notifications/delete_email', 'notifications.delete_email', 11, 1, 0),
(288, 'admin', 'Push logs delete', 30, 'notifications/delete_push', 'notifications.delete_push', 13, 1, 0),
(289, 'admin', 'Customer create', 37, 'buyer/customer_create', 'buyer.customer_create', 2, 1, 0),
(290, 'admin', 'Customer update', 37, 'buyer/customer_update', 'buyer.customer_update', 3, 1, 0),
(291, 'admin', 'Customer delete', 37, 'buyer/customer_delete', 'buyer.customer_delete', 4, 1, 0),
(292, 'admin', 'Customer address', 37, 'buyer/address', 'buyer.address', 5, 1, 0),
(293, 'admin', 'Customer order history', 37, 'buyer/order_history', 'buyer.order_history', 6, 1, 0),
(294, 'admin', 'Address create', 37, 'buyer/address_create', 'buyer.address_create', 7, 1, 0),
(295, 'admin', 'Address delete', 37, 'buyer/address_delete', 'buyer.address_delete', 8, 1, 0),
(296, 'admin', 'Address update', 37, 'buyer/address_update', 'buyer.address_update', 9, 1, 0),
(298, 'admin', 'Review update', 37, 'buyer/review_update', 'buyer.review_update', 13, 1, 0),
(299, 'admin', 'Review delete', 37, 'buyer/review_delete', 'buyer.review_delete', 14, 1, 0),
(300, 'admin', 'SMS provider create', 46, 'sms/provider_create', 'sms.provider_create', 2, 1, 0),
(301, 'admin', 'SMS provider update', 46, 'sms/provider_update', 'sms.provider_update', 3, 1, 0),
(302, 'admin', 'SMS provider delete', 46, 'sms/provider_delete', 'sms.provider_delete', 4, 1, 0),
(303, 'admin', 'SMS delete logs', 46, 'sms/delete', 'sms.delete', 5, 1, 0),
(304, 'admin', 'Update User', 5, 'user/update', 'user.update', 3, 1, 0),
(305, 'admin', 'Change password', 5, 'user/change_password', 'user.change_password', 5, 1, 0),
(306, 'admin', 'Zone', 5, 'user/zone', 'user.zone', 6, 1, 0),
(307, 'merchant', 'Taxes', 61, 'merchant/taxes', 'merchant.taxes', 2, 1, 0),
(308, 'merchant', 'Social Settings', 61, 'merchant/social_settings', 'merchant.social_settings', 2, 1, 0),
(309, 'merchant', 'Notification Settings', 61, 'merchant/notification_settings', 'merchant.notification_settings', 2, 1, 0),
(310, 'merchant', 'Order Settings', 61, 'merchant/orders_settings', 'merchant.orders_settings', 2, 1, 0),
(311, 'merchant', 'Order limit create', 61, 'merchant/time_management_create', 'merchant.time_management_create', 4, 1, 0),
(312, 'merchant', 'Order view PDF', 64, 'print/pdf', 'print.pdf', 8, 1, 0),
(313, 'merchant', 'Ingredients update', 70, 'attrmerchant/ingredients_update', 'attrmerchant.ingredients_update', 7, 1, 0),
(314, 'merchant', 'Ingredients delete', 70, 'attrmerchant/ingredients_delete', 'attrmerchant.ingredients_delete', 8, 1, 0),
(315, 'merchant', 'Cooking create ', 70, 'attrmerchant/cookingref_create', 'attrmerchant.cookingref_create', 10, 1, 0),
(316, 'merchant', 'Cooking update', 70, 'attrmerchant/cookingref_update', 'attrmerchant.cookingref_update', 11, 1, 0),
(317, 'merchant', 'Cooking delete', 70, 'attrmerchant/cookingref_delete', 'attrmerchant.cookingref_delete', 12, 1, 0),
(318, 'merchant', 'Category create ', 75, 'food/category_create', 'food.category_create', 2, 1, 0),
(319, 'merchant', 'Category update', 75, 'food/category_update', 'food.category_update', 3, 1, 0),
(320, 'merchant', 'Category delete', 75, 'food/category_delete', 'food.category_delete', 4, 1, 0),
(321, 'merchant', 'Category availability', 75, 'food/category_availability', 'food.category_availability', 5, 1, 0),
(322, 'merchant', 'Addon Category create ', 75, 'food/addoncategory_create', 'food.addoncategory_create', 7, 1, 0),
(323, 'merchant', 'Addon Category update', 75, 'food/addoncategory_update', 'food.addoncategory_update', 8, 1, 0),
(324, 'merchant', 'Addon Category delete', 75, 'food/addoncategory_delete', 'food.addoncategory_delete', 9, 1, 0),
(325, 'merchant', 'Addon Item create ', 75, 'food/addonitem_create', 'food.addonitem_create', 11, 1, 0),
(326, 'merchant', 'Addon Item update', 75, 'food/addonitem_update', 'food.addonitem_update', 12, 1, 0),
(327, 'merchant', 'Addon Item delete', 75, 'food/addonitem_delete', 'food.addonitem_delete', 13, 1, 0),
(328, 'merchant', 'Item create ', 75, 'food/item_create', 'food.item_create', 15, 1, 0),
(329, 'merchant', 'Item update', 75, 'food/item_update', 'food.item_update', 16, 1, 0),
(330, 'merchant', 'Item delete', 75, 'food/item_delete', 'food.item_delete', 17, 1, 0),
(331, 'merchant', 'Item price', 75, 'food/item_price', 'food.item_price', 18, 1, 0),
(332, 'merchant', 'Item price delete', 75, 'food/itemprice_create', 'food.itemprice_create', 19, 1, 0),
(333, 'merchant', 'Item price update', 75, 'food/itemprice_update', 'food.itemprice_update', 20, 1, 0),
(334, 'merchant', 'Item price delete', 75, 'food/itemprice_delete', 'food.itemprice_delete', 21, 1, 0),
(335, 'merchant', 'Item addon', 75, 'food/item_addon', 'food.item_addon', 22, 1, 0),
(336, 'merchant', 'Item addon create', 75, 'food/itemaddon_create', 'food.itemaddon_create', 23, 1, 0),
(337, 'merchant', 'Item addon update', 75, 'food/itemaddon_update', 'food.itemaddon_update', 24, 1, 0),
(338, 'merchant', 'Item addon delete', 75, 'food/itemaddon_delete', 'food.itemaddon_delete', 25, 1, 0),
(339, 'merchant', 'Item attributes', 75, 'food/item_attributes', 'food.item_attributes', 26, 1, 0),
(340, 'merchant', 'Item availability', 75, 'food/item_availability', 'food.item_availability', 27, 1, 0),
(341, 'merchant', 'Item inventory', 75, 'food/item_inventory', 'food.item_inventory', 28, 1, 0),
(342, 'merchant', 'Item promo', 75, 'food/item_promos', 'food.item_promos', 29, 1, 0),
(343, 'merchant', 'Item promo create', 75, 'food/itempromo_create', 'food.itempromo_create', 30, 1, 0),
(344, 'merchant', 'Item promo update', 75, 'food/itempromo_update', 'food.itempromo_update', 31, 1, 0),
(345, 'merchant', 'Item promo delete', 75, 'food/itempromo_delete', 'food.itempromo_delete', 32, 1, 0),
(346, 'merchant', 'Item gallery', 75, 'food/item_gallery', 'food.item_gallery', 33, 1, 0),
(347, 'merchant', 'Item SEO', 75, 'food/item_seo', 'food.item_seo', 34, 1, 0),
(348, 'merchant', 'Dynamic Rates', 80, 'services/charges_table', 'services.charges_table', 2, 1, 0),
(349, 'merchant', 'Fixed Charge', 80, 'services/fixed_charge', 'services.fixed_charge', 3, 1, 0),
(350, 'merchant', 'Pickup instructions', 80, 'services/pickup_instructions', 'services.pickup_instructions', 5, 1, 0),
(351, 'merchant', 'Dinein instructions', 80, 'services/dinein_instructions', 'services.dinein_instructions', 7, 1, 0),
(352, 'merchant', 'Coupon create', 82, 'merchant/coupon_create', 'merchant.coupon_create', 2, 1, 0),
(353, 'merchant', 'Coupon update', 82, 'merchant/coupon_update', 'merchant.coupon_update', 3, 1, 0),
(354, 'merchant', 'Coupon delete', 82, 'merchant/coupon_delete', 'merchant.coupon_delete', 4, 1, 0),
(355, 'merchant', 'Offer create', 82, 'merchant/offer_create', 'merchant.offer_create', 6, 1, 0),
(356, 'merchant', 'Offer update', 82, 'merchant/offer_update', 'merchant.offer_update', 7, 1, 0),
(357, 'merchant', 'Offer delete', 82, 'merchant/offer_delete', 'merchant.offer_delete', 8, 1, 0),
(358, 'merchant', 'Review reply', 94, 'customer/review_reply', 'customer.review_reply', 3, 1, 0),
(359, 'merchant', 'User create', 97, 'usermerchant/user_create', 'usermerchant.user_create', 2, 1, 0),
(360, 'merchant', 'User update', 97, 'usermerchant/user_update', 'usermerchant.user_update', 3, 1, 0),
(361, 'merchant', 'User delete', 97, 'usermerchant/user_delete', 'usermerchant.user_delete', 4, 1, 0),
(362, 'merchant', 'Role create', 97, 'usermerchant/role_create', 'usermerchant.role_create', 6, 1, 0),
(363, 'merchant', 'Role update', 97, 'usermerchant/role_update', 'usermerchant.role_update', 7, 1, 0),
(364, 'merchant', 'Role delete', 97, 'usermerchant/role_delete', 'usermerchant.role_delete', 8, 1, 0),
(365, 'merchant', 'Supplier create', 127, 'supplier/create', 'supplier.create', 2, 1, 0),
(366, 'merchant', 'Supplier update', 127, 'supplier/update', 'supplier.update', 3, 1, 0),
(367, 'merchant', 'Supplier delete', 127, 'supplier/delete', 'supplier.delete', 4, 1, 0),
(368, 'admin', 'Website', 0, '', 'sales.channel', 17, 1, 1),
(369, 'admin', 'Theme', 368, 'theme/changer', 'theme.changer', 1, 1, 1),
(370, 'website', 'Company', 0, '', '', 0, 1, 1),
(371, 'website', 'Terms and conditions', 370, '{{site_url}}/terms-and-conditions', '', 0, 1, 1),
(372, 'website', 'Privacy policy', 370, '{{site_url}}/priva', '', 1, 1, 1),
(373, 'admin', 'Addon manager', 0, 'addon/manager', 'addon.manager', 19, 1, 1),
(374, 'merchant', 'Banner', 61, 'merchant/banner', 'merchant.banner', 15, 1, 1),
(375, 'merchant', 'Pages', 61, 'merchant/pages_list', 'merchant.pages_list', 16, 1, 1),
(376, 'merchant', 'Menu', 61, 'merchant/pages_menu', 'merchant.pages_menu', 17, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `st_merchant`
--

CREATE TABLE `st_merchant` (
  `merchant_id` int(14) NOT NULL,
  `merchant_uuid` varchar(100) NOT NULL DEFAULT '',
  `restaurant_slug` varchar(255) NOT NULL DEFAULT '',
  `restaurant_name` varchar(255) NOT NULL DEFAULT '',
  `restaurant_phone` varchar(100) NOT NULL DEFAULT '',
  `contact_name` varchar(255) NOT NULL DEFAULT '',
  `contact_phone` varchar(100) NOT NULL DEFAULT '',
  `contact_email` varchar(255) NOT NULL DEFAULT '',
  `address` text,
  `free_delivery` int(1) NOT NULL DEFAULT '2',
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) NOT NULL DEFAULT '',
  `activation_key` varchar(50) NOT NULL DEFAULT '',
  `activation_token` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `date_activated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_featured` int(1) NOT NULL DEFAULT '1',
  `is_ready` int(1) NOT NULL DEFAULT '1',
  `is_sponsored` int(2) NOT NULL DEFAULT '1',
  `sponsored_expiration` date DEFAULT NULL,
  `lost_password_code` varchar(50) NOT NULL DEFAULT '',
  `is_commission` int(1) NOT NULL DEFAULT '1',
  `percent_commision` decimal(10,2) NOT NULL DEFAULT '0.00',
  `commision_based` varchar(50) NOT NULL DEFAULT '',
  `latitude` varchar(50) NOT NULL DEFAULT '',
  `lontitude` varchar(50) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `merchant_type` int(1) NOT NULL DEFAULT '1',
  `membership_expired` date DEFAULT NULL,
  `commision_type` varchar(50) NOT NULL DEFAULT '',
  `package_id` int(14) NOT NULL DEFAULT '0',
  `distance_unit` varchar(20) NOT NULL DEFAULT 'mi',
  `delivery_distance_covered` float(14,2) NOT NULL DEFAULT '0.00',
  `header_image` varchar(255) NOT NULL DEFAULT '',
  `path2` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `short_description` text,
  `close_store` int(1) NOT NULL DEFAULT '0',
  `disabled_ordering` tinyint(1) NOT NULL DEFAULT '0',
  `pause_ordering` tinyint(1) NOT NULL DEFAULT '0',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_merchant_meta`
--

CREATE TABLE `st_merchant_meta` (
  `meta_id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL DEFAULT '0',
  `meta_name` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text,
  `meta_value1` text,
  `meta_value2` text,
  `meta_value3` text,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_merchant_payment_method`
--

CREATE TABLE `st_merchant_payment_method` (
  `payment_method_id` int(11) NOT NULL,
  `payment_uuid` varchar(100) NOT NULL DEFAULT '',
  `merchant_id` bigint(20) DEFAULT '0',
  `payment_code` varchar(100) NOT NULL DEFAULT '',
  `as_default` int(1) NOT NULL DEFAULT '0',
  `attr1` varchar(255) NOT NULL DEFAULT '',
  `attr2` varchar(255) NOT NULL DEFAULT '',
  `attr3` varchar(255) NOT NULL DEFAULT '',
  `attr4` varchar(255) NOT NULL DEFAULT '',
  `attr5` varchar(255) NOT NULL DEFAULT '',
  `payment_refence` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_merchant_type`
--

CREATE TABLE `st_merchant_type` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT '0',
  `type_name` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `commision_type` varchar(50) NOT NULL DEFAULT 'percentage',
  `commission` float(14,2) NOT NULL DEFAULT '0.00',
  `based_on` varchar(50) NOT NULL DEFAULT 'subtotal',
  `color_hex` varchar(10) NOT NULL DEFAULT '',
  `font_color_hex` varchar(10) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_merchant_type`
--

INSERT INTO `st_merchant_type` (`id`, `type_id`, `type_name`, `description`, `commision_type`, `commission`, `based_on`, `color_hex`, `font_color_hex`, `status`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 1, 'Membership', 'Membership', 'percentage', 0.00, 'subtotal', '#ffd6c4', '', 'publish', '2021-10-06 07:48:02', '2022-01-27 07:45:01', '127.0.0.1'),
(2, 2, 'Commission', 'Commission', 'percentage', 5.00, 'subtotal', '#e8989b', '', 'publish', '2021-10-06 07:48:02', '2022-01-27 07:44:56', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_merchant_type_translation`
--

CREATE TABLE `st_merchant_type_translation` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `type_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_merchant_type_translation`
--

INSERT INTO `st_merchant_type_translation` (`id`, `type_id`, `language`, `type_name`) VALUES
(1, 2, 'ja', ''),
(2, 2, 'ar', ''),
(3, 2, 'en', 'Commission'),
(4, 1, 'ja', ''),
(5, 1, 'ar', ''),
(6, 1, 'en', 'Membership');

-- --------------------------------------------------------

--
-- Table structure for table `st_merchant_user`
--

CREATE TABLE `st_merchant_user` (
  `merchant_user_id` int(14) NOT NULL,
  `user_uuid` varchar(50) NOT NULL DEFAULT '',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `role` int(14) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `contact_email` varchar(255) NOT NULL DEFAULT '',
  `session_token` varchar(255) NOT NULL DEFAULT '',
  `contact_number` varchar(20) NOT NULL DEFAULT '',
  `main_account` int(1) NOT NULL DEFAULT '0',
  `profile_photo` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_multicurrency_list`
--

CREATE TABLE `st_multicurrency_list` (
  `id` int(11) NOT NULL,
  `currency_name` varchar(50) NOT NULL DEFAULT '',
  `symbol` varchar(5) NOT NULL DEFAULT '',
  `code` varchar(50) NOT NULL DEFAULT '',
  `country_code` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_multicurrency_list`
--

INSERT INTO `st_multicurrency_list` (`id`, `currency_name`, `symbol`, `code`, `country_code`) VALUES
(1, 'Albanian Lek', 'Lek', 'ALL', 'AL'),
(2, 'East Caribbean Dollar', '$', 'XCD', 'LC'),
(3, 'Euro', '€', 'EUR', 'EU'),
(4, 'Barbadian Dollar', '$', 'BBD', 'BB'),
(5, 'Bhutanese Ngultrum', '', 'BTN', 'BT'),
(6, 'Brunei Dollar', '$', 'BND', 'BN'),
(7, 'Central African CFA Franc', '', 'XAF', 'CM'),
(8, 'Cuban Peso', '$', 'CUP', 'CU'),
(9, 'United States Dollar', '$', 'USD', 'US'),
(10, 'Falkland Islands Pound', '£', 'FKP', 'FK'),
(11, 'Gibraltar Pound', '£', 'GIP', 'GI'),
(12, 'Hungarian Forint', 'Ft', 'HUF', 'HU'),
(13, 'Iranian Rial', '﷼', 'IRR', 'IR'),
(14, 'Jamaican Dollar', 'J$', 'JMD', 'JM'),
(15, 'Australian Dollar', '$', 'AUD', 'AU'),
(16, 'Lao Kip', '₭', 'LAK', 'LA'),
(17, 'Libyan Dinar', '', 'LYD', 'LY'),
(18, 'Macedonian Denar', 'ден', 'MKD', 'MK'),
(19, 'West African CFA Franc', '', 'XOF', 'BJ'),
(20, 'New Zealand Dollar', '$', 'NZD', 'NZ'),
(21, 'Omani Rial', '﷼', 'OMR', 'OM'),
(22, 'Papua New Guinean Kina', '', 'PGK', 'PG'),
(23, 'Rwandan Franc', '', 'RWF', 'RW'),
(24, 'Samoan Tala', '', 'WST', 'WS'),
(25, 'Serbian Dinar', 'Дин.', 'RSD', 'RS'),
(26, 'Swedish Krona', 'kr', 'SEK', 'SE'),
(27, 'Tanzanian Shilling', 'TSh', 'TZS', 'TZ'),
(28, 'Armenian Dram', '', 'AMD', 'AM'),
(29, 'Bahamian Dollar', '$', 'BSD', 'BS'),
(30, 'Bosnia And Herzegovina Konvertibilna Marka', 'KM', 'BAM', 'BA'),
(31, 'Cape Verdean Escudo', '', 'CVE', 'CV'),
(32, 'Chinese Yuan', '¥', 'CNY', 'CN'),
(33, 'Costa Rican Colon', '₡', 'CRC', 'CR'),
(34, 'Czech Koruna', 'Kč', 'CZK', 'CZ'),
(35, 'Eritrean Nakfa', '', 'ERN', 'ER'),
(36, 'Georgian Lari', '', 'GEL', 'GE'),
(37, 'Haitian Gourde', '', 'HTG', 'HT'),
(38, 'Indian Rupee', '₹', 'INR', 'IN'),
(39, 'Jordanian Dinar', '', 'JOD', 'JO'),
(40, 'South Korean Won', '₩', 'KRW', 'KR'),
(41, 'Lebanese Lira', '£', 'LBP', 'LB'),
(42, 'Malawian Kwacha', '', 'MWK', 'MW'),
(43, 'Mauritanian Ouguiya', '', 'MRO', 'MR'),
(44, 'Mozambican Metical', '', 'MZN', 'MZ'),
(45, 'Netherlands Antillean Gulden', 'ƒ', 'ANG', 'AN'),
(46, 'Peruvian Nuevo Sol', 'S/.', 'PEN', 'PE'),
(47, 'Qatari Riyal', '﷼', 'QAR', 'QA'),
(48, 'Sao Tome And Principe Dobra', '', 'STD', 'ST'),
(49, 'Sierra Leonean Leone', '', 'SLL', 'SL'),
(50, 'Somali Shilling', 'S', 'SOS', 'SO'),
(51, 'Sudanese Pound', '', 'SDG', 'SD'),
(52, 'Syrian Pound', '£', 'SYP', 'SY'),
(53, 'Angolan Kwanza', '', 'AOA', 'AO'),
(54, 'Aruban Florin', 'ƒ', 'AWG', 'AW'),
(55, 'Bahraini Dinar', '', 'BHD', 'BH'),
(56, 'Belize Dollar', 'BZ$', 'BZD', 'BZ'),
(57, 'Botswana Pula', 'P', 'BWP', 'BW'),
(58, 'Burundi Franc', '', 'BIF', 'BI'),
(59, 'Cayman Islands Dollar', '$', 'KYD', 'KY'),
(60, 'Colombian Peso', '$', 'COP', 'CO'),
(61, 'Danish Krone', 'kr', 'DKK', 'DK'),
(62, 'Guatemalan Quetzal', 'Q', 'GTQ', ''),
(63, 'Honduran Lempira', 'L', 'HNL', 'HN'),
(64, 'Indonesian Rupiah', 'Rp', 'IDR', 'ID'),
(65, 'Israeli New Sheqel', '₪', 'ILS', 'IL'),
(66, 'Kazakhstani Tenge', 'лв', 'KZT', 'KZ'),
(67, 'Kuwaiti Dinar', '', 'KWD', 'KW'),
(68, 'Lesotho Loti', '', 'LSL', 'LS'),
(69, 'Malaysian Ringgit', 'RM', 'MYR', 'MY'),
(70, 'Mauritian Rupee', '₨', 'MUR', 'MU'),
(71, 'Mongolian Tugrik', '₮', 'MNT', 'MN'),
(72, 'Myanma Kyat', '', 'MMK', 'MM'),
(73, 'Nigerian Naira', '₦', 'NGN', 'NG'),
(74, 'Panamanian Balboa', 'B/.', 'PAB', 'PA'),
(75, 'Philippine Peso', '₱', 'PHP', 'PH'),
(76, 'Romanian Leu', 'lei', 'RON', 'RO'),
(77, 'Saudi Riyal', '﷼', 'SAR', 'SA'),
(78, 'Singapore Dollar', '$', 'SGD', 'SG'),
(79, 'South African Rand', 'R', 'ZAR', 'ZA'),
(80, 'Surinamese Dollar', '$', 'SRD', 'SR'),
(81, 'New Taiwan Dollar', 'NT$', 'TWD', 'TW'),
(82, 'Paanga', '', 'TOP', 'TO'),
(83, 'Venezuelan Bolivar', '', 'VEF', 'VE'),
(84, 'Algerian Dinar', '', 'DZD', 'DZ'),
(85, 'Argentine Peso', '$', 'ARS', 'AR'),
(86, 'Azerbaijani Manat', 'ман', 'AZN', 'AZ'),
(87, 'Belarusian Ruble', 'p.', 'BYR', 'BY'),
(88, 'Bolivian Boliviano', '$ b', 'BOB', 'BO'),
(89, 'Bulgarian Lev', 'лв', 'BGN', 'BG'),
(90, 'Canadian Dollar', '$', 'CAD', 'CA'),
(91, 'Chilean Peso', '$', 'CLP', 'CL'),
(92, 'Congolese Franc', '', 'CDF', 'CD'),
(93, 'Dominican Peso', 'RD$', 'DOP', 'DO'),
(94, 'Fijian Dollar', '$', 'FJD', 'FJ'),
(95, 'Gambian Dalasi', '', 'GMD', 'GM'),
(96, 'Guyanese Dollar', '$', 'GYD', 'GY'),
(97, 'Icelandic Króna', 'kr', 'ISK', 'IS'),
(98, 'Iraqi Dinar', '', 'IQD', 'IQ'),
(99, 'Japanese Yen', '¥', 'JPY', 'JP'),
(100, 'North Korean Won', '₩', 'KPW', 'KP'),
(101, 'Latvian Lats', 'Ls', 'LVL', ''),
(102, 'Swiss Franc', 'Fr.', 'CHF', 'CH'),
(103, 'Malagasy Ariary', '', 'MGA', ''),
(104, 'Moldovan Leu', '', 'MDL', 'MD'),
(105, 'Moroccan Dirham', '', 'MAD', 'MA'),
(106, 'Nepalese Rupee', '₨', 'NPR', 'NP'),
(107, 'Nicaraguan Cordoba', 'C$', 'NIO', 'NI'),
(108, 'Pakistani Rupee', '₨', 'PKR', 'PK'),
(109, 'Paraguayan Guarani', 'Gs', 'PYG', 'PY'),
(110, 'Saint Helena Pound', '£', 'SHP', 'SH'),
(111, 'Seychellois Rupee', '₨', 'SCR', 'SC'),
(112, 'Solomon Islands Dollar', '$', 'SBD', 'SB'),
(113, 'Sri Lankan Rupee', '₨', 'LKR', 'LK'),
(114, 'Thai Baht', '฿', 'THB', 'TH'),
(115, 'Turkish New Lira', '', 'TRY', 'TR'),
(116, 'UAE Dirham', '', 'AED', 'AE'),
(117, 'Vanuatu Vatu', '', 'VUV', 'VU'),
(118, 'Yemeni Rial', '﷼', 'YER', 'YE'),
(119, 'Afghan Afghani', '؋', 'AFN', 'AF'),
(120, 'Bangladeshi Taka', '', 'BDT', 'BD'),
(121, 'Brazilian Real', 'R$', 'BRL', 'BR'),
(122, 'Cambodian Riel', '៛', 'KHR', 'KH'),
(123, 'Comorian Franc', '', 'KMF', 'KM'),
(124, 'Croatian Kuna', 'kn', 'HRK', 'HR'),
(125, 'Djiboutian Franc', '', 'DJF', 'DJ'),
(126, 'Egyptian Pound', '£', 'EGP', 'EG'),
(127, 'Ethiopian Birr', '', 'ETB', 'ET'),
(128, 'CFP Franc', '', 'XPF', 'WF'),
(129, 'Ghanaian Cedi', '', 'GHS', 'GH'),
(130, 'Guinean Franc', '', 'GNF', 'GN'),
(131, 'Hong Kong Dollar', '$', 'HKD', 'HK'),
(132, 'Special Drawing Rights', '', 'XDR', ''),
(133, 'Kenyan Shilling', 'KSh', 'KES', 'KE'),
(134, 'Kyrgyzstani Som', 'лв', 'KGS', 'KG'),
(135, 'Liberian Dollar', '$', 'LRD', 'LR'),
(136, 'Macanese Pataca', '', 'MOP', ''),
(137, 'Maldivian Rufiyaa', '', 'MVR', 'MV'),
(138, 'Mexican Peso', '$', 'MXN', 'MX'),
(139, 'Namibian Dollar', '$', 'NAD', 'NA'),
(140, 'Norwegian Krone', 'kr', 'NOK', 'NO'),
(141, 'Polish Zloty', 'zł', 'PLN', 'PL'),
(142, 'Russian Ruble', 'руб', 'RUB', 'RU'),
(143, 'Swazi Lilangeni', '', 'SZL', 'SZ'),
(144, 'Tajikistani Somoni', '', 'TJS', 'TJ'),
(145, 'Trinidad and Tobago Dollar', 'TT$', 'TTD', 'TT'),
(146, 'Ugandan Shilling', 'USh', 'UGX', 'UG'),
(147, 'Uruguayan Peso', '$ U', 'UYU', 'UY'),
(148, 'Vietnamese Dong', '₫', 'VND', 'VN'),
(149, 'Tunisian Dinar', '', 'TND', 'TN'),
(150, 'Ukrainian Hryvnia', '₴', 'UAH', 'UA'),
(151, 'Uzbekistani Som', 'лв', 'UZS', 'UZ'),
(152, 'Turkmenistan Manat', '', 'TMT', 'TM'),
(153, 'British Pound', '£', 'GBP', 'GB'),
(154, 'Zambian Kwacha', '', 'ZMW', 'ZM'),
(155, 'Bitcoin', 'BTC', 'BTC', 'XBT'),
(156, 'New Belarusian Ruble', 'p.', 'BYN', 'BY'),
(157, 'Bermudan Dollar', '', 'BMD', 'BM'),
(158, 'Guernsey Pound', '', 'GGP', 'GG'),
(159, 'Chilean Unit Of Account', '', 'CLF', 'CL'),
(160, 'Cuban Convertible Peso', '', 'CUC', 'CU'),
(161, 'Manx pound', '', 'IMP', 'IM'),
(162, 'Jersey Pound', '', 'JEP', 'JE'),
(163, 'Salvadoran Colón', '', 'SVC', 'SV'),
(164, 'Old Zambian Kwacha', '', 'ZMK', 'ZM'),
(165, 'Silver (troy ounce)', '', 'XAG', 'XA'),
(166, 'Zimbabwean Dollar', '', 'ZWL', 'ZW');

-- --------------------------------------------------------

--
-- Table structure for table `st_notifications`
--

CREATE TABLE `st_notifications` (
  `notification_uuid` varchar(100) NOT NULL,
  `notication_channel` varchar(50) NOT NULL DEFAULT 'admin',
  `notification_event` varchar(100) NOT NULL DEFAULT '',
  `notification_type` varchar(100) NOT NULL DEFAULT '',
  `message` text,
  `message_parameters` text,
  `image_type` varchar(50) NOT NULL DEFAULT 'icon',
  `image` varchar(100) NOT NULL DEFAULT '',
  `image_path` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `response` text,
  `date_created` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_offers`
--

CREATE TABLE `st_offers` (
  `offers_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `offer_percentage` float(14,4) NOT NULL DEFAULT '0.0000',
  `offer_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `valid_from` date DEFAULT NULL,
  `valid_to` date DEFAULT NULL,
  `applicable_to` varchar(100) NOT NULL DEFAULT 'all',
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_opening_hours`
--

CREATE TABLE `st_opening_hours` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `day` varchar(20) NOT NULL DEFAULT '',
  `day_of_week` int(1) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT 'open',
  `start_time` varchar(14) NOT NULL DEFAULT '',
  `end_time` varchar(14) NOT NULL DEFAULT '',
  `start_time_pm` varchar(14) NOT NULL DEFAULT '',
  `end_time_pm` varchar(14) NOT NULL DEFAULT '',
  `custom_text` varchar(255) NOT NULL DEFAULT '',
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_opening_hours`
--

INSERT INTO `st_opening_hours` (`id`, `merchant_id`, `day`, `day_of_week`, `status`, `start_time`, `end_time`, `start_time_pm`, `end_time_pm`, `custom_text`, `last_update`) VALUES
(1, 0, 'monday', 1, 'open', '1:00', '23:55', '', '', '', '2022-01-29 15:55:16'),
(2, 0, 'tuesday', 2, 'open', '1:00', '23:55', '', '', '', '2022-01-29 15:55:32'),
(3, 0, 'wednesday', 3, 'open', '1:00', '23:55', '', '', '', '2022-01-29 15:55:47'),
(4, 0, 'thursday', 4, 'open', '1:00', '23:55', '', '', '', '2022-01-29 15:56:04'),
(5, 0, 'friday', 5, 'open', '1:00', '23:55', '', '', '', '2022-01-29 15:56:16'),
(6, 0, 'saturday', 6, 'open', '1:00', '23:55', '', '', '', '2022-01-29 15:56:34'),
(7, 0, 'sunday', 7, 'open', '1:00', '23:55', '', '', '', '2022-01-29 15:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `st_option`
--

CREATE TABLE `st_option` (
  `id` int(14) UNSIGNED NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `option_name` varchar(255) NOT NULL DEFAULT '',
  `option_value` text,
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_option`
--

INSERT INTO `st_option` (`id`, `merchant_id`, `option_name`, `option_value`, `last_update`) VALUES
(57, 0, 'website_timezone_new', 'Asia/Manila', '2022-01-27 07:44:21'),
(58, 0, 'website_date_format_new', 'EEE, MMMM d, y', '2022-01-27 07:44:21'),
(59, 0, 'website_time_format_new', 'h:mm a', '2022-01-27 07:44:21'),
(60, 0, 'website_time_picker_interval', '15', '2022-01-27 07:44:21'),
(61, 0, 'disabled_website_ordering', NULL, '2022-01-27 07:44:32'),
(62, 0, 'website_hide_foodprice', NULL, '2022-01-27 07:44:32'),
(63, 0, 'website_disbaled_auto_cart', NULL, '2022-01-27 07:44:32'),
(64, 0, 'website_disabled_cart_validation', NULL, '2022-01-27 07:44:32'),
(65, 0, 'enabled_merchant_check_closing_time', NULL, '2022-01-27 07:44:32'),
(66, 0, 'disabled_order_confirm_page', NULL, '2022-01-27 07:44:32'),
(67, 0, 'restrict_order_by_status', '', '2022-01-27 07:44:32'),
(68, 0, 'enabled_map_selection_delivery', NULL, '2022-01-27 07:44:32'),
(69, 0, 'admin_service_fee', NULL, '2022-01-27 07:44:32'),
(70, 0, 'admin_service_fee_applytax', NULL, '2022-01-27 07:44:32'),
(71, 0, 'cancel_order_enabled', '1', '2022-01-27 07:44:32'),
(72, 0, 'cancel_order_days_applied', NULL, '2022-01-27 07:44:32'),
(73, 0, 'cancel_order_hours', NULL, '2022-01-27 07:44:32'),
(74, 0, 'cancel_order_status_accepted', '', '2022-01-27 07:44:32'),
(75, 0, 'website_review_approved_status', NULL, '2022-01-27 07:44:32'),
(76, 0, 'enabled_website_ordering', '1', '2022-01-27 07:44:32'),
(90, 0, 'merchant_enabled_registration', '1', '2022-01-27 07:45:47'),
(91, 0, 'merchant_default_country', NULL, '2022-01-27 07:45:47'),
(92, 0, 'merchant_specific_country', '[\"PH\"]', '2022-01-27 07:45:47'),
(93, 0, 'pre_configure_size', 'small,medium,large', '2022-01-27 07:45:47'),
(94, 0, 'merchant_enabled_registration_capcha', '0', '2022-01-27 07:45:47'),
(95, 0, 'registration_program', '[\"2\",\"1\"]', '2022-01-27 07:45:47'),
(96, 0, 'registration_confirm_account_tpl', '25', '2022-01-27 07:45:47'),
(97, 0, 'registration_welcome_tpl', NULL, '2022-01-27 07:45:47'),
(98, 0, 'registration_terms_condition', 'By clicking \"Submit,\" you agree to <a href=\"\" class=\"text-green\">Karenderia General Terms and Conditions</a>\r\n     and acknowledge you have read the <a href=\"\" class=\"text-green\">Privacy Policy</a>.', '2022-01-27 07:45:47'),
(99, 0, 'merchant_registration_new_tpl', '26', '2022-01-27 07:45:47'),
(100, 0, 'merchant_registration_welcome_tpl', '24', '2022-01-27 07:45:47'),
(101, 0, 'merchant_plan_expired_tpl', '27', '2022-01-27 07:45:47'),
(102, 0, 'merchant_plan_near_expired_tpl', '28', '2022-01-27 07:45:47'),
(103, 0, 'website_title', 'Karenderia', '2022-01-27 16:09:32'),
(104, 0, 'home_search_unit_type', 'mi', '2022-01-27 16:09:57'),
(105, 0, 'map_provider', 'google.maps', '2022-01-28 07:38:48'),
(106, 0, 'google_geo_api_key', 'XXXX', '2022-01-28 07:38:48'),
(107, 0, 'google_maps_api_key', 'XXXX', '2022-01-28 07:38:48'),
(108, 0, 'mapbox_access_token', 'XXXX', '2022-01-28 07:38:48'),
(109, 0, 'signup_enabled_verification', '0', '2022-01-28 07:49:14'),
(110, 0, 'signup_verification_type', NULL, '2022-01-28 07:49:14'),
(111, 0, 'blocked_email_add', '', '2022-01-28 07:49:14'),
(112, 0, 'blocked_mobile', '', '2022-01-28 07:49:14'),
(113, 0, 'signup_type', 'mobile_phone', '2022-01-28 07:49:14'),
(114, 0, 'signup_enabled_terms', '0', '2022-01-28 07:49:14'),
(115, 0, 'signup_terms', 'By clicking \"Submit,\" you agree to <a href=\"\" class=\"text-green\">Karenderia General Terms and Conditions</a>\r\n	     and acknowledge you have read the <a href=\"\" class=\"text-green\">Privacy Policy</a>.', '2022-01-28 07:49:14'),
(116, 0, 'signup_enabled_capcha', '0', '2022-01-28 07:49:14'),
(117, 0, 'signup_welcome_tpl', '12', '2022-01-28 07:49:14'),
(118, 0, 'signup_verification_tpl', '13', '2022-01-28 07:49:14'),
(119, 0, 'signup_resetpass_tpl', '14', '2022-01-28 07:49:14'),
(120, 0, 'signup_resend_counter', '', '2022-01-28 07:49:14'),
(121, 0, 'signupnew_tpl', '19', '2022-01-28 07:49:14'),
(122, 0, 'image_resizing', '1', '2022-01-28 07:49:14'),
(null, 0, 'backend_version', '1.0.2', now()),
(123, 0, 'backend_forgot_password_tpl', 50, now());

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew`
--

CREATE TABLE `st_ordernew` (
  `order_id` int(11) NOT NULL,
  `order_uuid` varchar(100) NOT NULL DEFAULT '',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT 'draft',
  `payment_status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `service_code` varchar(255) NOT NULL DEFAULT '',
  `payment_code` varchar(255) NOT NULL DEFAULT '',
  `total_discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `points` decimal(10,2) NOT NULL DEFAULT '0.00',
  `sub_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `sub_total_less_discount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `service_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `delivery_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `packaging_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax_type` varchar(50) NOT NULL DEFAULT '',
  `tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `courier_tip` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `promo_code` varchar(100) NOT NULL DEFAULT '',
  `promo_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `offer_discount` varchar(100) NOT NULL DEFAULT '',
  `offer_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `whento_deliver` varchar(100) NOT NULL DEFAULT '',
  `delivery_date` date DEFAULT NULL,
  `delivery_time` varchar(50) NOT NULL DEFAULT '',
  `delivery_time_end` varchar(50) NOT NULL DEFAULT '',
  `commission_type` varchar(100) NOT NULL DEFAULT '',
  `commission_value` decimal(10,2) NOT NULL DEFAULT '0.00',
  `commission_based` varchar(100) NOT NULL DEFAULT '',
  `commission` decimal(10,2) NOT NULL DEFAULT '0.00',
  `merchant_earning` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_original` decimal(10,2) NOT NULL DEFAULT '0.00',
  `commission_original` decimal(10,2) DEFAULT '0.00',
  `merchant_earning_original` decimal(10,2) NOT NULL DEFAULT '0.00',
  `adjustment_commission` decimal(10,2) DEFAULT '0.00',
  `adjustment_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `use_currency_code` varchar(5) NOT NULL DEFAULT '',
  `base_currency_code` varchar(5) NOT NULL DEFAULT '',
  `exchange_rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `formatted_address` varchar(255) NOT NULL DEFAULT '',
  `driver_id` bigint(20) NOT NULL DEFAULT '0',
  `date_cancelled` timestamp NULL DEFAULT NULL,
  `is_view` int(1) NOT NULL DEFAULT '0',
  `is_critical` int(1) NOT NULL DEFAULT '0',
  `earning_approve` int(1) NOT NULL DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew_additional_charge`
--

CREATE TABLE `st_ordernew_additional_charge` (
  `id` int(14) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `item_row` varchar(100) NOT NULL DEFAULT '',
  `charge_name` varchar(200) NOT NULL DEFAULT '',
  `additional_charge` float(14,4) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew_addons`
--

CREATE TABLE `st_ordernew_addons` (
  `id` int(11) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `item_row` varchar(100) NOT NULL DEFAULT '',
  `subcat_id` int(14) NOT NULL DEFAULT '0',
  `sub_item_id` int(14) NOT NULL DEFAULT '0',
  `qty` int(14) NOT NULL DEFAULT '0',
  `price` float(14,4) NOT NULL DEFAULT '0.0000',
  `addons_total` float(14,4) NOT NULL DEFAULT '0.0000',
  `multi_option` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew_attributes`
--

CREATE TABLE `st_ordernew_attributes` (
  `id` int(11) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `item_row` varchar(100) NOT NULL DEFAULT '',
  `meta_name` varchar(255) NOT NULL DEFAULT '',
  `meta_value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew_history`
--

CREATE TABLE `st_ordernew_history` (
  `id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT '',
  `remarks` text,
  `ramarks_trans` text,
  `change_by` varchar(100) NOT NULL DEFAULT '',
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew_item`
--

CREATE TABLE `st_ordernew_item` (
  `id` int(11) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `item_row` varchar(100) NOT NULL DEFAULT '',
  `cat_id` int(14) NOT NULL DEFAULT '0',
  `item_id` int(14) NOT NULL DEFAULT '0',
  `item_token` varchar(255) NOT NULL DEFAULT '',
  `item_size_id` int(14) NOT NULL DEFAULT '0',
  `qty` int(14) NOT NULL DEFAULT '0',
  `special_instructions` varchar(255) NOT NULL DEFAULT '',
  `if_sold_out` varchar(50) NOT NULL DEFAULT '',
  `price` float(14,5) NOT NULL DEFAULT '0.00000',
  `discount` float(14,5) NOT NULL DEFAULT '0.00000',
  `discount_type` varchar(100) NOT NULL DEFAULT '',
  `item_changes` varchar(100) NOT NULL DEFAULT '1',
  `item_changes_meta1` varchar(100) NOT NULL DEFAULT '',
  `tax_use` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew_meta`
--

CREATE TABLE `st_ordernew_meta` (
  `meta_id` int(11) NOT NULL,
  `order_id` int(14) NOT NULL DEFAULT '0',
  `meta_name` varchar(255) NOT NULL DEFAULT '',
  `meta_value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew_summary_transaction`
--

CREATE TABLE `st_ordernew_summary_transaction` (
  `transaction_id` bigint(20) NOT NULL,
  `transaction_uuid` varchar(50) NOT NULL DEFAULT '',
  `order_id` bigint(20) DEFAULT '0',
  `transaction_date` timestamp NULL DEFAULT NULL,
  `transaction_type` varchar(50) NOT NULL DEFAULT 'debit',
  `transaction_description` varchar(255) NOT NULL DEFAULT '',
  `transaction_description_parameters` varchar(255) NOT NULL DEFAULT '',
  `transaction_amount` float(14,4) NOT NULL DEFAULT '0.0000',
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew_transaction`
--

CREATE TABLE `st_ordernew_transaction` (
  `transaction_id` int(11) NOT NULL,
  `transaction_uuid` varchar(50) NOT NULL DEFAULT '',
  `payment_uuid` varchar(50) DEFAULT '',
  `order_id` int(14) NOT NULL DEFAULT '0',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `payment_code` varchar(100) NOT NULL DEFAULT '',
  `transaction_name` varchar(20) NOT NULL DEFAULT 'payment',
  `transaction_type` varchar(100) NOT NULL DEFAULT 'credit',
  `transaction_description` varchar(255) NOT NULL DEFAULT 'Payment',
  `trans_amount` float(14,4) NOT NULL DEFAULT '0.0000',
  `currency_code` varchar(5) NOT NULL DEFAULT '',
  `payment_reference` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `reason` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_ordernew_trans_meta`
--

CREATE TABLE `st_ordernew_trans_meta` (
  `meta_id` int(11) NOT NULL,
  `transaction_id` int(14) NOT NULL DEFAULT '0',
  `order_id` int(14) NOT NULL DEFAULT '0',
  `meta_name` varchar(255) NOT NULL DEFAULT '',
  `meta_value` longtext,
  `meta_binary` binary(255) NOT NULL DEFAULT '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_order_settings_buttons`
--

CREATE TABLE `st_order_settings_buttons` (
  `id` int(14) NOT NULL,
  `uuid` varchar(100) DEFAULT NULL,
  `group_name` varchar(100) NOT NULL DEFAULT '',
  `button_name` varchar(100) NOT NULL DEFAULT '',
  `class_name` varchar(100) DEFAULT 'btn-green',
  `stats_id` int(14) NOT NULL DEFAULT '0',
  `do_actions` varchar(100) NOT NULL DEFAULT '',
  `order_type` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_order_settings_buttons`
--

INSERT INTO `st_order_settings_buttons` (`id`, `uuid`, `group_name`, `button_name`, `class_name`, `stats_id`, `do_actions`, `order_type`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'b6dbed53-7f02-11ec-9bf7-9c5c8e164c2c', 'new_order', 'Accepted', 'btn-green', 24, '', '', '2022-01-27 07:50:17', '2022-01-29 15:51:14', '127.0.0.1'),
(2, 'bbdc9fee-7f02-11ec-9bf7-9c5c8e164c2c', 'new_order', 'Reject', 'btn-black', 16, 'reject_form', '', '2022-01-27 07:50:26', '2022-01-27 16:03:07', '127.0.0.1'),
(3, 'c6861876-7f02-11ec-9bf7-9c5c8e164c2c', 'order_processing', 'Ready for pickup', 'btn-green', 18, '', '', '2022-01-27 07:50:43', '2022-01-27 16:03:14', '127.0.0.1'),
(4, 'cea57e92-7f02-11ec-9bf7-9c5c8e164c2c', 'order_ready', 'Delivery on its way', 'btn-green', 21, '', 'delivery', '2022-01-27 07:50:57', '2022-01-27 16:03:19', '127.0.0.1'),
(5, 'd3c615ba-7f02-11ec-9bf7-9c5c8e164c2c', 'order_ready', 'Delivered', 'btn-yellow', 19, '', 'delivery', '2022-01-27 07:51:06', '2022-01-27 16:03:30', '127.0.0.1'),
(6, 'd83d3544-7f02-11ec-9bf7-9c5c8e164c2c', 'order_ready', 'Delivery Failed', 'btn-black', 23, '', 'delivery', '2022-01-27 07:51:13', '2022-01-27 16:03:35', '127.0.0.1'),
(7, 'dd882377-7f02-11ec-9bf7-9c5c8e164c2c', 'order_ready', 'Complete', 'btn-green', 26, '', 'pickup', '2022-01-27 07:51:22', '2022-01-27 16:03:49', '127.0.0.1'),
(8, 'ead61c30-7f02-11ec-9bf7-9c5c8e164c2c', 'order_ready', 'Order failed', 'btn-black', 16, '', 'pickup', '2022-01-27 07:51:44', '2022-01-27 16:03:58', '127.0.0.1'),
(9, '17b16356-7f03-11ec-9bf7-9c5c8e164c2c', 'order_ready', 'Complete', 'btn-green', 26, '', 'dinein', '2022-01-27 07:53:00', '2022-01-27 16:04:03', '127.0.0.1'),
(10, '2156afbe-7f03-11ec-9bf7-9c5c8e164c2c', 'order_ready', 'Order failed', 'btn-black', 16, '', 'dinein', '2022-01-27 07:53:16', '2022-01-27 16:04:13', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_order_settings_tabs`
--

CREATE TABLE `st_order_settings_tabs` (
  `id` int(14) NOT NULL,
  `group_name` varchar(100) NOT NULL DEFAULT 'new_order',
  `stats_id` int(14) NOT NULL DEFAULT '0',
  `date_modified` datetime DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_order_settings_tabs`
--

INSERT INTO `st_order_settings_tabs` (`id`, `group_name`, `stats_id`, `date_modified`, `ip_address`) VALUES
(2, 'new_order', 13, '2022-01-27 07:49:07', '127.0.0.1'),
(3, 'order_processing', 24, '2022-01-27 07:49:11', '127.0.0.1'),
(4, 'order_ready', 21, '2022-01-27 07:49:22', '127.0.0.1'),
(5, 'order_ready', 18, '2022-01-27 07:49:22', '127.0.0.1'),
(6, 'completed_today', 26, '2022-01-27 07:49:38', '127.0.0.1'),
(7, 'completed_today', 19, '2022-01-27 07:49:38', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_order_status`
--

CREATE TABLE `st_order_status` (
  `stats_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `description` varchar(200) NOT NULL DEFAULT '',
  `font_color_hex` varchar(10) NOT NULL DEFAULT '',
  `background_color_hex` varchar(10) NOT NULL DEFAULT '',
  `date_created` date DEFAULT NULL,
  `date_modified` date DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_order_status`
--

INSERT INTO `st_order_status` (`stats_id`, `merchant_id`, `description`, `font_color_hex`, `background_color_hex`, `date_created`, `date_modified`, `ip_address`) VALUES
(13, 0, 'new', 'black', '#d4ecdc', '2021-10-11', '2022-01-26', '127.0.0.1'),
(16, 0, 'rejected', 'white', '#ea9895', '2021-10-31', '2022-01-26', '127.0.0.1'),
(18, 0, 'ready for pickup', 'black', '#efe5ee', '2021-11-01', '2022-01-26', '127.0.0.1'),
(19, 0, 'delivered', 'white', '#3ecf8e', '2021-11-01', '2022-01-26', '127.0.0.1'),
(20, 0, 'cancelled', 'white', '#f44336', '2021-11-01', '2022-01-26', '127.0.0.1'),
(21, 0, 'delivery on its way', 'black', '#fbd7af', '2021-11-01', '2022-01-26', '127.0.0.1'),
(22, 0, 'delayed', '#5b5b5b', '#cfe2f3', '2021-11-01', '2022-01-26', '127.0.0.1'),
(23, 0, 'delivery failed', 'white', '#d34f45', '2021-11-01', '2022-01-26', '127.0.0.1'),
(24, 0, 'accepted', 'black', '#fedc79', '2021-11-01', '2022-01-26', '127.0.0.1'),
(25, 0, 'delayed', 'white', '#b6d7a8', '2021-11-03', '2022-01-26', '127.0.0.1'),
(26, 0, 'complete', '#f3f6f4', '#8fce00', '2021-12-16', '2022-01-26', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_order_status_actions`
--

CREATE TABLE `st_order_status_actions` (
  `action_id` bigint(20) NOT NULL,
  `stats_id` bigint(20) NOT NULL DEFAULT '0',
  `action_type` varchar(50) NOT NULL DEFAULT '',
  `action_value` varchar(100) NOT NULL DEFAULT '',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_order_status_actions`
--

INSERT INTO `st_order_status_actions` (`action_id`, `stats_id`, `action_type`, `action_value`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 13, 'notification_to_customer', '4', '2022-01-27 00:07:12', NULL, '127.0.0.1'),
(2, 13, 'notification_to_merchant', '5', '2022-01-27 00:07:22', NULL, '127.0.0.1'),
(3, 13, 'notification_to_admin', '5', '2022-01-27 00:07:31', NULL, '127.0.0.1'),
(4, 16, 'notification_to_customer', '6', '2022-01-27 00:08:48', NULL, '127.0.0.1'),
(5, 19, 'notification_to_customer', '22', '2022-01-27 00:09:14', NULL, '127.0.0.1'),
(6, 20, 'notification_to_customer', '7', '2022-01-27 00:09:37', NULL, '127.0.0.1'),
(7, 20, 'notification_to_merchant', '20', '2022-01-27 00:09:47', NULL, '127.0.0.1'),
(8, 20, 'notification_to_admin', '20', '2022-01-27 00:09:55', NULL, '127.0.0.1'),
(9, 21, 'notification_to_customer', '21', '2022-01-27 00:10:22', NULL, '127.0.0.1'),
(10, 23, 'notification_to_customer', '23', '2022-01-27 00:10:51', NULL, '127.0.0.1'),
(11, 24, 'notification_to_customer', '9', '2022-01-27 00:11:09', NULL, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_order_status_translation`
--

CREATE TABLE `st_order_status_translation` (
  `id` int(11) NOT NULL,
  `stats_id` int(1) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_order_status_translation`
--

INSERT INTO `st_order_status_translation` (`id`, `stats_id`, `language`, `description`) VALUES
(1, 13, 'ja', ''),
(2, 13, 'ar', ''),
(3, 13, 'en', 'new'),
(4, 26, 'ja', ''),
(5, 26, 'ar', ''),
(6, 26, 'en', 'complete'),
(7, 25, 'ja', ''),
(8, 25, 'ar', ''),
(9, 25, 'en', 'delayed'),
(10, 24, 'ja', ''),
(11, 24, 'ar', ''),
(12, 24, 'en', 'accepted'),
(13, 23, 'ja', ''),
(14, 23, 'ar', ''),
(15, 23, 'en', 'delivery failed'),
(16, 22, 'ja', ''),
(17, 22, 'ar', ''),
(18, 22, 'en', 'delayed'),
(19, 21, 'ja', ''),
(20, 21, 'ar', ''),
(21, 21, 'en', 'delivery on its way'),
(22, 20, 'ja', ''),
(23, 20, 'ar', ''),
(24, 20, 'en', 'cancelled'),
(25, 19, 'ja', ''),
(26, 19, 'ar', ''),
(27, 19, 'en', 'delivered'),
(28, 18, 'ja', ''),
(29, 18, 'ar', ''),
(30, 18, 'en', 'ready for pickup'),
(31, 16, 'ja', ''),
(32, 16, 'ar', ''),
(33, 16, 'en', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `st_order_time_management`
--

CREATE TABLE `st_order_time_management` (
  `id` int(11) NOT NULL,
  `group_id` int(14) NOT NULL DEFAULT '0',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `transaction_type` varchar(100) NOT NULL DEFAULT '',
  `days` varchar(200) NOT NULL DEFAULT '',
  `start_time` varchar(5) NOT NULL DEFAULT '',
  `end_time` varchar(5) NOT NULL DEFAULT '',
  `number_order_allowed` int(14) NOT NULL DEFAULT '0',
  `order_status` text,
  `status` varchar(255) NOT NULL DEFAULT 'publish'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_package_details`
--

CREATE TABLE `st_package_details` (
  `id` int(14) NOT NULL,
  `package_id` int(14) NOT NULL DEFAULT '0',
  `description` text,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_pages`
--

CREATE TABLE `st_pages` (
  `page_id` int(11) NOT NULL,
  `owner` varchar(50) NOT NULL DEFAULT 'admin',
  `merchant_id` int(10) NOT NULL DEFAULT '0',
  `page_type` varchar(255) NOT NULL DEFAULT 'page',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `long_content` text,
  `short_content` varchar(255) NOT NULL DEFAULT '',
  `meta_title` varchar(255) NOT NULL DEFAULT '',
  `meta_description` text,
  `meta_keywords` text,
  `meta_image` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_pages`
--

INSERT INTO `st_pages` (`page_id`, `page_type`, `slug`, `title`, `long_content`, `short_content`, `meta_title`, `meta_description`, `meta_keywords`, `meta_image`, `path`, `status`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'page', 'terms-and-conditions', 'Terms and conditions', '<div>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id \r\nsapien massa. Sed porta interdum nulla sed accumsan. Proin lacinia vel \r\nnulla eget porttitor. In varius vehicula facilisis. Maecenas non \r\nvehicula massa. Maecenas vel eros nec ante rutrum fringilla vel sit amet\r\n ipsum. Sed ut tellus nisl. Aenean vehicula, diam nec sollicitudin \r\nporttitor, purus augue mattis risus, porta elementum augue nibh eget \r\nsapien. Fusce a efficitur ipsum. In urna mi, ullamcorper ut ultrices sit\r\n amet, faucibus et risus. Maecenas vestibulum molestie ex.\r\n</p>\r\n<p>\r\nMaecenas ut lectus eget ante faucibus tristique. In sodales turpis orci,\r\n quis commodo lectus feugiat quis. Aliquam varius metus diam, id luctus \r\neros sagittis vel. Nulla facilisi. Suspendisse mollis eros lacus, at \r\nmaximus enim imperdiet quis. Nulla eget diam ac diam condimentum \r\nelementum. Ut at ipsum vitae ipsum ullamcorper vestibulum. Aliquam \r\neuismod enim vitae blandit tristique.\r\n</p>\r\n<p>\r\nVestibulum malesuada, diam sit amet tristique finibus, sem lacus \r\nelementum diam, et semper ipsum odio eu quam. Sed hendrerit tincidunt \r\neuismod. Aliquam finibus quis elit at sollicitudin. In at magna euismod,\r\n tincidunt lectus sed, posuere dui. Curabitur congue ante non ligula \r\nsagittis, non blandit metus consectetur. Nunc nisi purus, ultrices in \r\nodio quis, mattis condimentum quam. Nullam vestibulum ex et erat \r\nvolutpat hendrerit. Vestibulum luctus quam vestibulum mollis euismod. \r\nEtiam efficitur mauris vel mi pretium iaculis. Donec sed erat tincidunt,\r\n elementum sem in, consectetur ipsum. Nulla pellentesque porta sapien, \r\neu venenatis justo vulputate vitae. Nunc et finibus ex, non finibus \r\nmassa. Nulla non turpis rutrum, molestie dui id, pharetra massa.\r\n</p>\r\n<p>\r\nDuis a arcu quis quam sodales dapibus. Curabitur consectetur sit amet \r\ndiam sed consectetur. Sed facilisis ultricies odio, nec sagittis enim \r\nlacinia non. Maecenas non congue est, sed condimentum mi. Cras a \r\nporttitor libero. Praesent massa risus, sollicitudin eget accumsan \r\nelementum, ornare nec felis. Vestibulum porttitor imperdiet rhoncus. \r\nMauris consequat fermentum metus feugiat facilisis. Sed eleifend mollis \r\nmattis. Nunc imperdiet lectus non quam ullamcorper, at ultrices ante \r\ncongue. Etiam aliquam arcu felis. Class aptent taciti sociosqu ad litora\r\n torquent per conubia nostra, per inceptos himenaeos. Nulla consequat, \r\nturpis sit amet pharetra elementum, quam lacus placerat sapien, at \r\nsagittis nunc erat in sem. Nulla sed aliquet neque, a tempor leo. \r\nAliquam erat volutpat. Sed tempor libero neque, condimentum feugiat \r\ndolor lobortis in.\r\n</p>\r\n<p>\r\nFusce convallis quis augue vitae scelerisque. Sed auctor lectus a odio \r\neleifend, eget auctor enim vestibulum. Integer neque urna, eleifend in \r\nporta a, vehicula et risus. Vestibulum vehicula placerat ante sed \r\nlaoreet. Integer varius felis a magna tempor, a efficitur ex fringilla. \r\nDonec in diam a diam placerat luctus et nec nisi. Sed efficitur lacus \r\nfelis, vitae rutrum nibh eleifend in.\r\n</p></div>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id sapien massa. Sed porta interdum nulla sed accumsan. Proin lacinia vel nulla eget porttitor. In varius vehicula facilisis.', '', '', '', '', '', 'publish', '2022-01-27 08:03:58', '2022-01-27 08:03:58', '127.0.0.1'),
(2, 'page', 'privacy-policy', 'Privacy policy', '<div>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id \r\nsapien massa. Sed porta interdum nulla sed accumsan. Proin lacinia vel \r\nnulla eget porttitor. In varius vehicula facilisis. Maecenas non \r\nvehicula massa. Maecenas vel eros nec ante rutrum fringilla vel sit amet\r\n ipsum. Sed ut tellus nisl. Aenean vehicula, diam nec sollicitudin \r\nporttitor, purus augue mattis risus, porta elementum augue nibh eget \r\nsapien. Fusce a efficitur ipsum. In urna mi, ullamcorper ut ultrices sit\r\n amet, faucibus et risus. Maecenas vestibulum molestie ex.\r\n</p>\r\n<p>\r\nMaecenas ut lectus eget ante faucibus tristique. In sodales turpis orci,\r\n quis commodo lectus feugiat quis. Aliquam varius metus diam, id luctus \r\neros sagittis vel. Nulla facilisi. Suspendisse mollis eros lacus, at \r\nmaximus enim imperdiet quis. Nulla eget diam ac diam condimentum \r\nelementum. Ut at ipsum vitae ipsum ullamcorper vestibulum. Aliquam \r\neuismod enim vitae blandit tristique.\r\n</p>\r\n<p>\r\nVestibulum malesuada, diam sit amet tristique finibus, sem lacus \r\nelementum diam, et semper ipsum odio eu quam. Sed hendrerit tincidunt \r\neuismod. Aliquam finibus quis elit at sollicitudin. In at magna euismod,\r\n tincidunt lectus sed, posuere dui. Curabitur congue ante non ligula \r\nsagittis, non blandit metus consectetur. Nunc nisi purus, ultrices in \r\nodio quis, mattis condimentum quam. Nullam vestibulum ex et erat \r\nvolutpat hendrerit. Vestibulum luctus quam vestibulum mollis euismod. \r\nEtiam efficitur mauris vel mi pretium iaculis. Donec sed erat tincidunt,\r\n elementum sem in, consectetur ipsum. Nulla pellentesque porta sapien, \r\neu venenatis justo vulputate vitae. Nunc et finibus ex, non finibus \r\nmassa. Nulla non turpis rutrum, molestie dui id, pharetra massa.\r\n</p>\r\n<p>\r\nDuis a arcu quis quam sodales dapibus. Curabitur consectetur sit amet \r\ndiam sed consectetur. Sed facilisis ultricies odio, nec sagittis enim \r\nlacinia non. Maecenas non congue est, sed condimentum mi. Cras a \r\nporttitor libero. Praesent massa risus, sollicitudin eget accumsan \r\nelementum, ornare nec felis. Vestibulum porttitor imperdiet rhoncus. \r\nMauris consequat fermentum metus feugiat facilisis. Sed eleifend mollis \r\nmattis. Nunc imperdiet lectus non quam ullamcorper, at ultrices ante \r\ncongue. Etiam aliquam arcu felis. Class aptent taciti sociosqu ad litora\r\n torquent per conubia nostra, per inceptos himenaeos. Nulla consequat, \r\nturpis sit amet pharetra elementum, quam lacus placerat sapien, at \r\nsagittis nunc erat in sem. Nulla sed aliquet neque, a tempor leo. \r\nAliquam erat volutpat. Sed tempor libero neque, condimentum feugiat \r\ndolor lobortis in.\r\n</p>\r\n<p>\r\nFusce convallis quis augue vitae scelerisque. Sed auctor lectus a odio \r\neleifend, eget auctor enim vestibulum. Integer neque urna, eleifend in \r\nporta a, vehicula et risus. Vestibulum vehicula placerat ante sed \r\nlaoreet. Integer varius felis a magna tempor, a efficitur ex fringilla. \r\nDonec in diam a diam placerat luctus et nec nisi. Sed efficitur lacus \r\nfelis, vitae rutrum nibh eleifend in.\r\n</p></div>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id sapien massa. Sed porta interdum nulla sed accumsan. Proin lacinia vel nulla eget porttitor. In varius vehicula facilisis. ', '', '', '', '', '', 'publish', '2022-01-27 08:05:00', '2022-01-27 08:05:00', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_pages_translation`
--

CREATE TABLE `st_pages_translation` (
  `id` int(11) NOT NULL,
  `page_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `long_content` text,
  `meta_title` varchar(255) NOT NULL DEFAULT '',
  `meta_description` varchar(255) NOT NULL DEFAULT '',
  `meta_keywords` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_pages_translation`
--

INSERT INTO `st_pages_translation` (`id`, `page_id`, `language`, `title`, `long_content`, `meta_title`, `meta_description`, `meta_keywords`) VALUES
(1, 1, 'ja', '', '', '', '', ''),
(2, 1, 'ar', '', '', '', '', ''),
(3, 1, 'en', 'Terms and conditions', '<div>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id \r\nsapien massa. Sed porta interdum nulla sed accumsan. Proin lacinia vel \r\nnulla eget porttitor. In varius vehicula facilisis. Maecenas non \r\nvehicula massa. Maecenas vel eros nec ante rutrum fringilla vel sit amet\r\n ipsum. Sed ut tellus nisl. Aenean vehicula, diam nec sollicitudin \r\nporttitor, purus augue mattis risus, porta elementum augue nibh eget \r\nsapien. Fusce a efficitur ipsum. In urna mi, ullamcorper ut ultrices sit\r\n amet, faucibus et risus. Maecenas vestibulum molestie ex.\r\n</p>\r\n<p>\r\nMaecenas ut lectus eget ante faucibus tristique. In sodales turpis orci,\r\n quis commodo lectus feugiat quis. Aliquam varius metus diam, id luctus \r\neros sagittis vel. Nulla facilisi. Suspendisse mollis eros lacus, at \r\nmaximus enim imperdiet quis. Nulla eget diam ac diam condimentum \r\nelementum. Ut at ipsum vitae ipsum ullamcorper vestibulum. Aliquam \r\neuismod enim vitae blandit tristique.\r\n</p>\r\n<p>\r\nVestibulum malesuada, diam sit amet tristique finibus, sem lacus \r\nelementum diam, et semper ipsum odio eu quam. Sed hendrerit tincidunt \r\neuismod. Aliquam finibus quis elit at sollicitudin. In at magna euismod,\r\n tincidunt lectus sed, posuere dui. Curabitur congue ante non ligula \r\nsagittis, non blandit metus consectetur. Nunc nisi purus, ultrices in \r\nodio quis, mattis condimentum quam. Nullam vestibulum ex et erat \r\nvolutpat hendrerit. Vestibulum luctus quam vestibulum mollis euismod. \r\nEtiam efficitur mauris vel mi pretium iaculis. Donec sed erat tincidunt,\r\n elementum sem in, consectetur ipsum. Nulla pellentesque porta sapien, \r\neu venenatis justo vulputate vitae. Nunc et finibus ex, non finibus \r\nmassa. Nulla non turpis rutrum, molestie dui id, pharetra massa.\r\n</p>\r\n<p>\r\nDuis a arcu quis quam sodales dapibus. Curabitur consectetur sit amet \r\ndiam sed consectetur. Sed facilisis ultricies odio, nec sagittis enim \r\nlacinia non. Maecenas non congue est, sed condimentum mi. Cras a \r\nporttitor libero. Praesent massa risus, sollicitudin eget accumsan \r\nelementum, ornare nec felis. Vestibulum porttitor imperdiet rhoncus. \r\nMauris consequat fermentum metus feugiat facilisis. Sed eleifend mollis \r\nmattis. Nunc imperdiet lectus non quam ullamcorper, at ultrices ante \r\ncongue. Etiam aliquam arcu felis. Class aptent taciti sociosqu ad litora\r\n torquent per conubia nostra, per inceptos himenaeos. Nulla consequat, \r\nturpis sit amet pharetra elementum, quam lacus placerat sapien, at \r\nsagittis nunc erat in sem. Nulla sed aliquet neque, a tempor leo. \r\nAliquam erat volutpat. Sed tempor libero neque, condimentum feugiat \r\ndolor lobortis in.\r\n</p>\r\n<p>\r\nFusce convallis quis augue vitae scelerisque. Sed auctor lectus a odio \r\neleifend, eget auctor enim vestibulum. Integer neque urna, eleifend in \r\nporta a, vehicula et risus. Vestibulum vehicula placerat ante sed \r\nlaoreet. Integer varius felis a magna tempor, a efficitur ex fringilla. \r\nDonec in diam a diam placerat luctus et nec nisi. Sed efficitur lacus \r\nfelis, vitae rutrum nibh eleifend in.\r\n</p></div>', '', '', ''),
(4, 2, 'ja', '', '', '', '', ''),
(5, 2, 'ar', '', '', '', '', ''),
(6, 2, 'en', 'Privacy policy', '<div>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id \r\nsapien massa. Sed porta interdum nulla sed accumsan. Proin lacinia vel \r\nnulla eget porttitor. In varius vehicula facilisis. Maecenas non \r\nvehicula massa. Maecenas vel eros nec ante rutrum fringilla vel sit amet\r\n ipsum. Sed ut tellus nisl. Aenean vehicula, diam nec sollicitudin \r\nporttitor, purus augue mattis risus, porta elementum augue nibh eget \r\nsapien. Fusce a efficitur ipsum. In urna mi, ullamcorper ut ultrices sit\r\n amet, faucibus et risus. Maecenas vestibulum molestie ex.\r\n</p>\r\n<p>\r\nMaecenas ut lectus eget ante faucibus tristique. In sodales turpis orci,\r\n quis commodo lectus feugiat quis. Aliquam varius metus diam, id luctus \r\neros sagittis vel. Nulla facilisi. Suspendisse mollis eros lacus, at \r\nmaximus enim imperdiet quis. Nulla eget diam ac diam condimentum \r\nelementum. Ut at ipsum vitae ipsum ullamcorper vestibulum. Aliquam \r\neuismod enim vitae blandit tristique.\r\n</p>\r\n<p>\r\nVestibulum malesuada, diam sit amet tristique finibus, sem lacus \r\nelementum diam, et semper ipsum odio eu quam. Sed hendrerit tincidunt \r\neuismod. Aliquam finibus quis elit at sollicitudin. In at magna euismod,\r\n tincidunt lectus sed, posuere dui. Curabitur congue ante non ligula \r\nsagittis, non blandit metus consectetur. Nunc nisi purus, ultrices in \r\nodio quis, mattis condimentum quam. Nullam vestibulum ex et erat \r\nvolutpat hendrerit. Vestibulum luctus quam vestibulum mollis euismod. \r\nEtiam efficitur mauris vel mi pretium iaculis. Donec sed erat tincidunt,\r\n elementum sem in, consectetur ipsum. Nulla pellentesque porta sapien, \r\neu venenatis justo vulputate vitae. Nunc et finibus ex, non finibus \r\nmassa. Nulla non turpis rutrum, molestie dui id, pharetra massa.\r\n</p>\r\n<p>\r\nDuis a arcu quis quam sodales dapibus. Curabitur consectetur sit amet \r\ndiam sed consectetur. Sed facilisis ultricies odio, nec sagittis enim \r\nlacinia non. Maecenas non congue est, sed condimentum mi. Cras a \r\nporttitor libero. Praesent massa risus, sollicitudin eget accumsan \r\nelementum, ornare nec felis. Vestibulum porttitor imperdiet rhoncus. \r\nMauris consequat fermentum metus feugiat facilisis. Sed eleifend mollis \r\nmattis. Nunc imperdiet lectus non quam ullamcorper, at ultrices ante \r\ncongue. Etiam aliquam arcu felis. Class aptent taciti sociosqu ad litora\r\n torquent per conubia nostra, per inceptos himenaeos. Nulla consequat, \r\nturpis sit amet pharetra elementum, quam lacus placerat sapien, at \r\nsagittis nunc erat in sem. Nulla sed aliquet neque, a tempor leo. \r\nAliquam erat volutpat. Sed tempor libero neque, condimentum feugiat \r\ndolor lobortis in.\r\n</p>\r\n<p>\r\nFusce convallis quis augue vitae scelerisque. Sed auctor lectus a odio \r\neleifend, eget auctor enim vestibulum. Integer neque urna, eleifend in \r\nporta a, vehicula et risus. Vestibulum vehicula placerat ante sed \r\nlaoreet. Integer varius felis a magna tempor, a efficitur ex fringilla. \r\nDonec in diam a diam placerat luctus et nec nisi. Sed efficitur lacus \r\nfelis, vitae rutrum nibh eleifend in.\r\n</p></div>', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `st_payment_gateway`
--

CREATE TABLE `st_payment_gateway` (
  `payment_id` int(11) NOT NULL,
  `payment_name` varchar(255) NOT NULL DEFAULT '',
  `payment_code` varchar(255) NOT NULL DEFAULT '',
  `is_online` tinyint(1) NOT NULL DEFAULT '0',
  `is_payout` tinyint(1) NOT NULL DEFAULT '0',
  `is_plan` tinyint(1) NOT NULL DEFAULT '0',
  `logo_type` varchar(50) NOT NULL DEFAULT 'icon',
  `logo_class` varchar(100) NOT NULL DEFAULT '',
  `logo_image` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `sequence` int(11) NOT NULL DEFAULT '0',
  `is_live` tinyint(1) NOT NULL DEFAULT '1',
  `attr_json` text,
  `attr_json1` text,
  `attr1` varchar(255) NOT NULL DEFAULT '',
  `attr2` varchar(255) NOT NULL DEFAULT '',
  `attr3` varchar(255) NOT NULL DEFAULT '',
  `attr4` varchar(255) NOT NULL DEFAULT '',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_payment_gateway`
--

INSERT INTO `st_payment_gateway` (`payment_id`, `payment_name`, `payment_code`, `is_online`, `is_payout`, `is_plan`, `logo_type`, `logo_class`, `logo_image`, `path`, `status`, `sequence`, `is_live`, `attr_json`, `attr_json1`, `attr1`, `attr2`, `attr3`, `attr4`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'Cash On delivery', 'cod', 0, 0, 0, 'icon', 'zmdi zmdi-money-box', '', '', 'active', 1, 1, NULL, NULL, '', '', '', '', NULL, NULL, ''),
(2, 'Credit/Debit Card', 'ocr', 0, 0, 0, 'icon', 'zmdi zmdi-card', '', '', 'active', 2, 1, NULL, NULL, '', '', '', '', NULL, '2021-10-11 21:01:47', '127.0.0.1'),
(5, 'Paypal', 'paypal', 1, 1, 1, 'icon', 'zmdi zmdi-paypal', '', '', 'active', 3, 0, '{\"attr1\":{\"label\":\"Client ID\"},\"attr2\":{\"label\":\"Secret ID\"}}', '{\"email_address\":\"Email Address\"}', 'AYRVpqULm7QjvzJj7u093RSVIfZgd_bf8_AfIqOrpWoF2Pnud7YcwCb-XR3N3y5ybvgXxWwUYEPlgMwR', 'EN1lO-ILp4do4g_k6oPUGcciPxXoU2qdSwPe_HpW1AB_pxm8-Ax9SQbnn97OiTkx9ZadVbQg9jQ-QSv8', '', '', NULL, '2021-12-21 09:10:43', '127.0.0.1'),
(6, 'Stripe', 'stripe', 1, 1, 1, 'image', '', 'dde53ae2-62bb-11ec-afba-9c5c8e164c2c.png', 'upload/all', 'active', 4, 0, '{\"attr1\":{\"label\":\"Secret key\"},\"attr2\":{\"label\":\"Publishable Key\"},\"attr3\":{\"label\":\"Webhooks Signing secret\"}}', '{\"account_number\":\"Account number\",\"account_holder_name\":\"Account name\",\"account_holder_type\":\"Account type\",\"currency\":\"Currency\",\"routing_number\":\"Routing number\",\"country\":\"Country\"}', 'sk_test_f95wSoGGaVzxbOgxcUXV0dvx', 'pk_test_svqQz6KfEyJ8S0UO3ac0wAn0', 'whsec_AqWgmsnyAHoTAuyhG91os0ce2RfdteKj', '{\"webhooks\":\"{{site_url}}/stripe/webhooks\"}', NULL, '2021-12-24 00:26:28', '127.0.0.1'),
(7, 'Razorpay', 'razorpay', 1, 0, 1, 'image', '', 'ea4b122c-62bb-11ec-afba-9c5c8e164c2c.png', 'upload/all', 'active', 6, 0, '{\"attr1\":{\"label\":\"Key ID\"},\"attr2\":{\"label\":\"Key Secret\"}}', NULL, 'rzp_test_fUeXTtpM4rngDl', 't37LVcdi49KVjj1AE2WCtjkD', '', '', '2021-10-14 20:42:19', '2021-12-21 09:13:01', '127.0.0.1'),
(8, 'Mercadopago', 'mercadopago', 1, 0, 0, 'image', 'x', 'f49ba2af-62bb-11ec-afba-9c5c8e164c2c.png', 'upload/all', 'active', 7, 0, '{\"attr1\":{\"label\":\"Public Key\"},\"attr2\":{\"label\":\"Access Token\"}}', NULL, 'TEST-287c4601-0425-4eff-84ec-e42f05006d29', 'TEST-3846096499578652-050720-4c7dbc49ba67bf1f86b0594cd222bfaa-131280449', '', '', '2021-10-19 10:16:21', '2021-12-21 10:32:29', '127.0.0.1'),
(9, 'Bank Transfer', 'bank', 0, 1, 0, 'icon', 'zmdi zmdi-store', '', '', 'active', 0, 1, NULL, '{\"full_name\":\"Full Name\",\"billing_address1\":\"Billing Address Line 1\",\"billing_address2\":\"Billing Address Line 2\",\"city\":\"City\",\"state\":\"State\",\"post_code\":\"Postcode\",\"country\":\"Country\",\"account_name\":\"Bank Account Holder\'s Name\",\"account_number\":\"Bank Account Number\\/IBAN\",\"swift_code\":\"SWIFT Code\",\"bank_name\":\"Bank Name in Full\",\"bank_branch\":\"Bank Branch City\"}', '', '', '', '', '2021-11-17 03:32:31', NULL, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_payment_gateway_merchant`
--

CREATE TABLE `st_payment_gateway_merchant` (
  `id` bigint(20) NOT NULL,
  `payment_uuid` varchar(100) NOT NULL DEFAULT '',
  `merchant_id` bigint(14) NOT NULL DEFAULT '0',
  `payment_id` bigint(20) DEFAULT '0',
  `payment_code` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT 'active',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `is_live` int(1) NOT NULL DEFAULT '1',
  `attr_json` text,
  `attr1` varchar(255) NOT NULL DEFAULT '',
  `attr2` varchar(255) NOT NULL DEFAULT '',
  `attr3` varchar(255) NOT NULL DEFAULT '',
  `attr4` varchar(255) NOT NULL DEFAULT '',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_payment_method_meta`
--

CREATE TABLE `st_payment_method_meta` (
  `id` bigint(14) NOT NULL,
  `payment_method_id` bigint(20) DEFAULT NULL,
  `meta_name` varchar(255) NOT NULL DEFAULT '',
  `meta_value` longtext,
  `date_created` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_plans`
--

CREATE TABLE `st_plans` (
  `package_id` int(14) NOT NULL,
  `package_uuid` varchar(50) NOT NULL DEFAULT '',
  `plan_type` varchar(50) NOT NULL DEFAULT 'membership',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `price` float(14,4) NOT NULL DEFAULT '0.0000',
  `promo_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `package_period` varchar(50) NOT NULL DEFAULT 'monthly',
  `ordering_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `item_limit` int(14) NOT NULL DEFAULT '0',
  `order_limit` int(14) NOT NULL DEFAULT '0',
  `trial_period` int(14) NOT NULL DEFAULT '0',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_plans_invoice`
--

CREATE TABLE `st_plans_invoice` (
  `invoice_number` bigint(20) NOT NULL,
  `invoice_uuid` varchar(50) NOT NULL DEFAULT '',
  `invoice_type` varchar(50) NOT NULL DEFAULT 'membership',
  `payment_code` varchar(10) NOT NULL DEFAULT '',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` varchar(100) NOT NULL DEFAULT '',
  `merchant_id` bigint(20) DEFAULT '0',
  `package_id` bigint(20) DEFAULT '0',
  `invoice_ref_number` varchar(50) NOT NULL DEFAULT '',
  `payment_ref1` varchar(100) NOT NULL DEFAULT '',
  `created` timestamp NULL DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_plans_translation`
--

CREATE TABLE `st_plans_translation` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_push`
--

CREATE TABLE `st_push` (
  `push_uuid` varchar(100) NOT NULL DEFAULT '',
  `push_type` varchar(50) NOT NULL DEFAULT '',
  `provider` varchar(50) NOT NULL DEFAULT '',
  `channel_device_id` text,
  `platform` varchar(50) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `body` text,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `response` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_review`
--

CREATE TABLE `st_review` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `review` text,
  `rating` float(14,1) NOT NULL DEFAULT '0.0',
  `status` varchar(100) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `order_id` varchar(14) NOT NULL DEFAULT '',
  `parent_id` int(14) NOT NULL DEFAULT '0',
  `reply_from` varchar(255) NOT NULL DEFAULT '',
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `as_anonymous` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_review_meta`
--

CREATE TABLE `st_review_meta` (
  `id` int(11) NOT NULL,
  `review_id` int(14) NOT NULL DEFAULT '0',
  `meta_name` varchar(100) NOT NULL DEFAULT '',
  `meta_value` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_role`
--

CREATE TABLE `st_role` (
  `role_id` int(11) NOT NULL,
  `role_type` varchar(50) NOT NULL DEFAULT 'admin',
  `merchant_id` int(11) NOT NULL DEFAULT '0',
  `role_name` varchar(255) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_role_access`
--

CREATE TABLE `st_role_access` (
  `role_access_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `action_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_services`
--

CREATE TABLE `st_services` (
  `service_id` int(11) NOT NULL,
  `service_code` varchar(255) NOT NULL DEFAULT '',
  `service_name` varchar(255) NOT NULL DEFAULT '',
  `color_hex` varchar(10) NOT NULL DEFAULT '',
  `font_color_hex` varchar(10) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_services`
--

INSERT INTO `st_services` (`service_id`, `service_code`, `service_name`, `color_hex`, `font_color_hex`, `status`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'delivery', 'Delivery', '#9fc5e8', 'white', 'publish', '2021-08-03 10:12:43', '2022-01-27 16:10:39', '127.0.0.1'),
(2, 'pickup', 'Pickup', '#e8989b', 'white', 'publish', '2021-08-03 10:12:43', '2022-01-27 16:10:35', '127.0.0.1'),
(3, 'dinein', 'Dinein', '#ffd966', '#bcbcbc', 'publish', '2021-08-03 10:12:43', '2022-01-27 16:10:30', '127.0.0.1'),
(4, 'pos', 'POS', '#6a329f', 'white', 'pending', '2022-01-18 02:18:35', '2022-01-27 16:10:25', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_services_fee`
--

CREATE TABLE `st_services_fee` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL DEFAULT '0',
  `merchant_id` int(11) NOT NULL DEFAULT '0',
  `service_fee` float(14,4) NOT NULL DEFAULT '0.0000',
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_services_fee`
--

INSERT INTO `st_services_fee` (`id`, `service_id`, `merchant_id`, `service_fee`, `date_modified`) VALUES
(1, 4, 0, 0.0000, '2022-01-27 16:10:25'),
(2, 3, 0, 0.0000, '2022-01-27 16:10:30'),
(3, 2, 0, 0.0000, '2022-01-27 16:10:35'),
(4, 1, 0, 0.0000, '2022-01-27 16:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `st_services_translation`
--

CREATE TABLE `st_services_translation` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `service_name` varchar(255) NOT NULL DEFAULT '',
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_services_translation`
--

INSERT INTO `st_services_translation` (`id`, `service_id`, `language`, `service_name`, `date_modified`) VALUES
(16, 4, 'ja', '', '2022-01-27 16:10:25'),
(17, 4, 'ar', '', '2022-01-27 16:10:25'),
(18, 4, 'en', 'POS', '2022-01-27 16:10:25'),
(19, 3, 'ja', '', '2022-01-27 16:10:30'),
(20, 3, 'ar', '', '2022-01-27 16:10:30'),
(21, 3, 'en', 'Dinein', '2022-01-27 16:10:30'),
(22, 2, 'ja', '', '2022-01-27 16:10:35'),
(23, 2, 'ar', '', '2022-01-27 16:10:35'),
(24, 2, 'en', 'Pickup', '2022-01-27 16:10:35'),
(25, 1, 'ja', '', '2022-01-27 16:10:39'),
(26, 1, 'ar', '', '2022-01-27 16:10:39'),
(27, 1, 'en', 'Delivery', '2022-01-27 16:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `st_shipping_rate`
--

CREATE TABLE `st_shipping_rate` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `service_code` varchar(255) NOT NULL DEFAULT 'delivery',
  `charge_type` varchar(100) NOT NULL DEFAULT 'dynamic',
  `shipping_type` varchar(100) NOT NULL DEFAULT 'standard',
  `distance_from` float(14,2) NOT NULL DEFAULT '0.00',
  `distance_to` float(14,2) NOT NULL DEFAULT '0.00',
  `shipping_units` varchar(5) NOT NULL DEFAULT '',
  `distance_price` float(14,4) NOT NULL DEFAULT '0.0000',
  `minimum_order` float(14,4) NOT NULL DEFAULT '0.0000',
  `maximum_order` float(14,4) NOT NULL DEFAULT '0.0000',
  `estimation` varchar(20) NOT NULL DEFAULT '',
  `last_update` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_size`
--

CREATE TABLE `st_size` (
  `size_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `size_name` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT 'published',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_size_translation`
--

CREATE TABLE `st_size_translation` (
  `id` int(11) NOT NULL,
  `size_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `size_name` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_sms_broadcast`
--

CREATE TABLE `st_sms_broadcast` (
  `broadcast_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `send_to` int(14) NOT NULL DEFAULT '0',
  `list_mobile_number` text NOT NULL,
  `sms_alert_message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_sms_broadcast_details`
--

CREATE TABLE `st_sms_broadcast_details` (
  `id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `broadcast_id` int(14) NOT NULL DEFAULT '0',
  `client_id` int(14) NOT NULL DEFAULT '0',
  `client_name` varchar(255) NOT NULL DEFAULT '',
  `contact_phone` varchar(50) NOT NULL DEFAULT '',
  `sms_message` text,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `gateway_response` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_executed` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT '',
  `gateway` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_sms_provider`
--

CREATE TABLE `st_sms_provider` (
  `id` int(11) NOT NULL,
  `provider_id` varchar(100) NOT NULL DEFAULT '',
  `provider_name` varchar(255) NOT NULL DEFAULT '',
  `as_default` int(1) NOT NULL DEFAULT '0',
  `key1` varchar(255) NOT NULL DEFAULT '',
  `key2` varchar(255) NOT NULL DEFAULT '',
  `key3` varchar(255) NOT NULL DEFAULT '',
  `key4` varchar(255) NOT NULL DEFAULT '',
  `key5` varchar(255) NOT NULL DEFAULT '',
  `key6` varchar(255) NOT NULL DEFAULT '',
  `key7` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_sms_provider`
--

INSERT INTO `st_sms_provider` (`id`, `provider_id`, `provider_name`, `as_default`, `key1`, `key2`, `key3`, `key4`, `key5`, `key6`, `key7`) VALUES
(1, 'twilio', 'Twilio', 0, '', '', '', '', '', '', ''),
(2, 'nexmo', 'Nexmo', 0, '', '', '', '', '', '', ''),
(3, 'clickatell', 'Clickatell', 0, '', '', '', '', '', '', ''),
(5, 'smsglobal', 'SMS Global', 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `st_status_management`
--

CREATE TABLE `st_status_management` (
  `status_id` int(11) NOT NULL,
  `group_name` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `color_hex` varchar(10) NOT NULL DEFAULT '',
  `font_color_hex` varchar(10) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_status_management`
--

INSERT INTO `st_status_management` (`status_id`, `group_name`, `status`, `title`, `color_hex`, `font_color_hex`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, 'customer', 'pending', 'Pending for approval', '#ffd6c4', '', '2021-05-19 08:35:32', '2022-01-26 22:44:35', '127.0.0.1'),
(2, 'customer', 'active', 'active', '#ffd966', '', '2021-05-19 08:35:32', '2022-01-26 22:45:04', '127.0.0.1'),
(3, 'customer', 'suspended', 'suspended', '#ea9895', 'white', '2021-05-19 08:35:32', '2022-01-26 22:45:01', '127.0.0.1'),
(4, 'customer', 'blocked', 'blocked', '#e8989b', 'white', '2021-05-19 08:35:32', '2022-01-26 22:44:59', '127.0.0.1'),
(5, 'customer', 'expired', 'Expired', '#ea9895', 'white', '2021-05-19 08:35:32', '2022-01-26 22:44:57', '127.0.0.1'),
(6, 'post', 'publish', 'Publish', '#ffd966', '', '2021-05-19 08:35:32', '2022-01-26 22:44:53', '127.0.0.1'),
(7, 'post', 'pending', 'Pending for review', '#ffd6c4', '', '2021-05-19 08:35:32', '2022-01-26 22:44:50', '127.0.0.1'),
(8, 'post', 'draft', 'Draft', '#e8989b', 'white', '2021-05-19 08:35:32', '2022-01-26 22:44:47', '127.0.0.1'),
(9, 'booking', 'pending', 'pending', '#ffd6c4', '', '2021-05-19 08:35:32', '2022-01-26 22:44:44', '127.0.0.1'),
(10, 'booking', 'approved', 'approved', '#d4ecdc', '', '2021-05-19 08:35:32', '2022-01-26 22:44:40', '127.0.0.1'),
(11, 'booking', 'denied', 'denied', '#e8989b', '', '2021-05-19 08:35:32', '2022-01-26 22:44:37', '127.0.0.1'),
(12, 'booking', 'request_cancel_booking', 'request cancel booking', '#d4ecdc', '', '2021-05-19 08:35:32', '2022-01-26 22:44:09', '127.0.0.1'),
(13, 'booking', 'cancel_booking_approved', 'cancel booking approved', '#efe5ee', '', '2021-05-19 08:35:32', '2022-01-26 22:44:07', '127.0.0.1'),
(15, 'transaction', 'process', 'Process', '#ffd966', '', '2021-05-19 02:46:46', '2022-01-26 22:44:05', '127.0.0.1'),
(16, 'payment', 'paid', 'Paid', '#ffd966', '', '2021-05-19 05:12:47', '2022-01-26 22:44:03', '127.0.0.1'),
(19, 'payment', 'unpaid', 'Unpaid', '#2986cc', 'white', '2021-10-12 04:55:38', '2022-01-26 22:44:01', '127.0.0.1'),
(20, 'payment', 'failed', 'Failed', '#f44336', 'white', '2021-10-12 04:55:53', '2022-01-26 22:43:58', '127.0.0.1'),
(21, 'gateway', 'active', 'Active', '#8fce00', 'white', '2021-10-12 04:57:21', '2022-01-26 22:43:56', '127.0.0.1'),
(22, 'gateway', 'inactive', 'Inactive', '#f44336', 'white', '2021-10-12 04:58:12', '2022-01-26 22:43:54', '127.0.0.1'),
(23, 'payment', 'pending', 'Pending', '#8fce00', 'white', '2021-11-20 02:23:22', '2022-01-26 22:43:52', '127.0.0.1'),
(24, 'payment', 'cancelled', 'Cancelled', '#eb786f', 'white', '2021-12-03 14:44:59', '2022-01-26 22:43:33', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_status_management_translation`
--

CREATE TABLE `st_status_management_translation` (
  `id` int(11) NOT NULL,
  `status_id` int(1) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_status_management_translation`
--

INSERT INTO `st_status_management_translation` (`id`, `status_id`, `language`, `title`) VALUES
(1, 24, 'ja', ''),
(2, 24, 'ar', ''),
(3, 24, 'en', 'Cancelled'),
(4, 23, 'ja', ''),
(5, 23, 'ar', ''),
(6, 23, 'en', 'Pending'),
(7, 22, 'ja', ''),
(8, 22, 'ar', ''),
(9, 22, 'en', 'Inactive'),
(10, 21, 'ja', ''),
(11, 21, 'ar', ''),
(12, 21, 'en', 'Active'),
(13, 20, 'ja', ''),
(14, 20, 'ar', ''),
(15, 20, 'en', 'Failed'),
(16, 19, 'ja', ''),
(17, 19, 'ar', ''),
(18, 19, 'en', 'Unpaid'),
(19, 16, 'ja', ''),
(20, 16, 'ar', ''),
(21, 16, 'en', 'Paid'),
(22, 15, 'ja', ''),
(23, 15, 'ar', ''),
(24, 15, 'en', 'Process'),
(25, 13, 'ja', ''),
(26, 13, 'ar', ''),
(27, 13, 'en', 'cancel booking approved'),
(28, 12, 'ja', ''),
(29, 12, 'ar', ''),
(30, 12, 'en', 'request cancel booking'),
(31, 1, 'ja', ''),
(32, 1, 'ar', ''),
(33, 1, 'en', 'Pending for approval'),
(34, 11, 'ja', ''),
(35, 11, 'ar', ''),
(36, 11, 'en', 'denied'),
(37, 10, 'ja', ''),
(38, 10, 'ar', ''),
(39, 10, 'en', 'approved'),
(40, 9, 'ja', ''),
(41, 9, 'ar', ''),
(42, 9, 'en', 'pending'),
(43, 8, 'ja', ''),
(44, 8, 'ar', ''),
(45, 8, 'en', 'Draft'),
(46, 7, 'ja', ''),
(47, 7, 'ar', ''),
(48, 7, 'en', 'Pending for review'),
(49, 6, 'ja', ''),
(50, 6, 'ar', ''),
(51, 6, 'en', 'Publish'),
(52, 5, 'ja', ''),
(53, 5, 'ar', ''),
(54, 5, 'en', 'Expired'),
(55, 4, 'ja', ''),
(56, 4, 'ar', ''),
(57, 4, 'en', 'blocked'),
(58, 3, 'ja', ''),
(59, 3, 'ar', ''),
(60, 3, 'en', 'suspended'),
(61, 2, 'ja', ''),
(62, 2, 'ar', ''),
(63, 2, 'en', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `st_subcategory`
--

CREATE TABLE `st_subcategory` (
  `subcat_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `subcategory_name` varchar(255) NOT NULL DEFAULT '',
  `subcategory_description` text,
  `featured_image` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `discount` varchar(20) NOT NULL DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL DEFAULT 'publish',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_subcategory_item`
--

CREATE TABLE `st_subcategory_item` (
  `sub_item_id` int(14) NOT NULL,
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `sub_item_name` varchar(255) NOT NULL DEFAULT '',
  `item_description` text,
  `category` varchar(255) NOT NULL DEFAULT '',
  `price` varchar(15) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `path` varchar(255) DEFAULT '',
  `sequence` int(14) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_subcategory_item_relationships`
--

CREATE TABLE `st_subcategory_item_relationships` (
  `id` int(11) NOT NULL,
  `subcat_id` int(14) NOT NULL DEFAULT '0',
  `sub_item_id` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_subcategory_item_translation`
--

CREATE TABLE `st_subcategory_item_translation` (
  `id` int(11) NOT NULL,
  `sub_item_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `sub_item_name` varchar(255) NOT NULL DEFAULT '',
  `item_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_subcategory_translation`
--

CREATE TABLE `st_subcategory_translation` (
  `id` int(11) NOT NULL,
  `subcat_id` int(14) NOT NULL DEFAULT '0',
  `language` varchar(10) NOT NULL DEFAULT '',
  `subcategory_name` varchar(255) NOT NULL DEFAULT '',
  `subcategory_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_tags`
--

CREATE TABLE `st_tags` (
  `tag_id` bigint(20) NOT NULL,
  `tag_name` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `description` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_tags_relationship`
--

CREATE TABLE `st_tags_relationship` (
  `id` int(11) NOT NULL,
  `banner_id` int(14) NOT NULL DEFAULT '0',
  `tag_id` int(14) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_tags_translation`
--

CREATE TABLE `st_tags_translation` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(100) NOT NULL DEFAULT '',
  `tag_name` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_tax`
--

CREATE TABLE `st_tax` (
  `tax_id` bigint(20) NOT NULL,
  `tax_uuid` varchar(100) DEFAULT '',
  `merchant_id` bigint(20) DEFAULT '0',
  `tax_type` varchar(50) DEFAULT 'standard',
  `tax_name` varchar(100) NOT NULL DEFAULT '',
  `tax_in_price` tinyint(1) NOT NULL DEFAULT '0',
  `tax_rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `tax_rate_type` varchar(50) NOT NULL DEFAULT 'percent',
  `default_tax` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_templates`
--

CREATE TABLE `st_templates` (
  `template_id` int(11) NOT NULL,
  `template_key` varchar(255) NOT NULL DEFAULT '',
  `template_name` varchar(255) NOT NULL DEFAULT '',
  `enabled_email` int(1) NOT NULL DEFAULT '0',
  `enabled_sms` int(1) NOT NULL DEFAULT '0',
  `enabled_push` int(1) NOT NULL DEFAULT '0',
  `tags` text,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_templates`
--

INSERT INTO `st_templates` (`template_id`, `template_key`, `template_name`, `enabled_email`, `enabled_sms`, `enabled_push`, `tags`, `date_created`, `date_modified`, `ip_address`) VALUES
(2, '', 'Order Invoice', 1, 1, 1, NULL, '2021-11-26 14:52:10', '2021-11-26 21:52:10', '127.0.0.1'),
(3, '', 'Customer Full Refund', 1, 0, 1, NULL, '2021-11-27 04:43:58', '2021-11-27 11:43:58', '127.0.0.1'),
(4, '', 'Receipt', 1, 0, 0, NULL, '2021-11-27 15:47:38', '2021-11-27 22:47:38', '127.0.0.1'),
(5, '', 'New Order', 0, 0, 1, NULL, '2021-11-27 15:54:09', '2021-11-27 22:54:09', '127.0.0.1'),
(6, '', 'Order rejected', 1, 0, 1, NULL, '2021-11-27 16:02:27', '2021-11-27 23:02:27', '127.0.0.1'),
(7, '', 'Order Cancel', 1, 0, 1, NULL, '2021-11-29 02:10:41', '2021-11-29 09:10:41', '127.0.0.1'),
(8, '', 'Delay Order', 1, 0, 1, NULL, '2021-11-29 03:11:41', '2021-11-29 10:11:41', '127.0.0.1'),
(9, '', 'Order Accepted', 1, 0, 1, NULL, '2021-11-29 08:01:07', '2021-11-29 15:01:07', '127.0.0.1'),
(10, '', 'Driver on its way', 1, 0, 1, NULL, '2021-11-29 08:11:06', '2021-11-29 15:11:06', '127.0.0.1'),
(11, '', 'Customer Partial Full Refund', 1, 0, 1, NULL, '2021-11-29 10:44:22', '2021-11-29 17:44:22', '127.0.0.1'),
(12, '', 'Customer Welcome', 1, 0, 0, NULL, '2021-11-29 15:19:51', '2021-11-29 22:19:51', '127.0.0.1'),
(13, '', 'Customer Verification', 1, 1, 0, NULL, '2021-11-29 15:20:09', '2021-11-29 22:20:09', '127.0.0.1'),
(14, '', 'Customer Reset Password', 1, 0, 0, NULL, '2021-11-29 15:20:19', '2021-11-29 22:20:19', '127.0.0.1'),
(15, '', 'Review', 1, 0, 0, NULL, '2021-12-01 07:53:27', '2021-12-01 14:53:27', '127.0.0.1'),
(16, '', 'Payout new request', 1, 0, 1, NULL, '2021-12-04 03:35:08', '2021-12-04 10:35:08', '127.0.0.1'),
(17, '', 'Payout paid', 1, 0, 0, NULL, '2021-12-04 03:35:18', '2021-12-04 10:35:18', '127.0.0.1'),
(18, '', 'Payout Cancel', 1, 0, 1, NULL, '2021-12-04 03:35:24', '2021-12-04 10:35:24', '127.0.0.1'),
(19, '', 'New customer signup', 0, 0, 1, NULL, '2021-12-10 02:00:54', '2021-12-10 09:00:54', '127.0.0.1'),
(20, '', 'New cancell order', 0, 0, 1, NULL, '2021-12-10 04:44:40', '2021-12-10 11:44:40', '127.0.0.1'),
(21, '', 'Order on its way', 0, 0, 1, NULL, '2021-12-14 09:43:19', '2021-12-14 16:43:19', '127.0.0.1'),
(22, '', 'Order delivered', 0, 0, 1, NULL, '2021-12-14 09:43:44', '2021-12-14 16:43:44', '127.0.0.1'),
(23, '', 'Order delivery failed', 0, 0, 1, NULL, '2021-12-14 09:44:34', '2021-12-14 16:44:34', '127.0.0.1'),
(24, '', 'Merchant Welcome Email', 1, 0, 0, NULL, '2021-12-23 02:10:07', '2021-12-23 09:10:07', '127.0.0.1'),
(25, '', 'Merchant Confirm account', 1, 0, 1, NULL, '2021-12-23 02:13:15', '2021-12-23 09:13:15', '127.0.0.1'),
(26, '', 'Merchant new signup', 1, 0, 1, NULL, '2021-12-23 11:50:50', '2021-12-23 18:50:50', '127.0.0.1'),
(27, '', 'Merchant plan expired', 1, 0, 1, NULL, '2021-12-29 16:09:44', '2021-12-29 23:09:44', '127.0.0.1'),
(28, '', 'Merchant plan near expiration', 1, 0, 1, NULL, '2021-12-29 16:17:51', '2021-12-29 23:17:51', '127.0.0.1'),
(29, '', 'Forgot password', 1, 0, 0, NULL, '2022-02-20 18:07:48', '2022-02-20 18:07:48', '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_templates_translation`
--

CREATE TABLE `st_templates_translation` (
  `id` int(11) NOT NULL,
  `template_id` int(14) NOT NULL DEFAULT '0',
  `template_type` varchar(100) NOT NULL DEFAULT '',
  `language` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `content` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_templates_translation`
--

INSERT INTO `st_templates_translation` (`id`, `template_id`, `template_type`, `language`, `title`, `content`) VALUES
(1279, 4, 'email', 'en', 'Order Summary', '{% include \'header.html\' %}\r\n\r\n\r\n\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:15%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"center\">\r\n    <h2 style=\"margin:0;\">Thanks for your order</h2>\r\n    <p style=\"padding:10px;\">You\'ll receive an email when your food are ready to deliver. If you have any questions, Call us {{merchant.contact_phone}}.</p>\r\n    <br>    \r\n    <a href=\"{{order.order_info.tracking_link}}\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;\r\n     text-decoration:none;font-size:18px;font-weight:bold;\">\r\n     Track Order\r\n     </a>\r\n    \r\n   </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n      {% include \'summary.html\' %}\r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td style=\"background:#ffffff;\">\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n    <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	    {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n\r\n{% include \'footer.html\' %}'),
(1280, 4, 'email', 'ja', '', ''),
(1281, 4, 'email', 'ar', '', ''),
(1282, 4, 'sms', 'en', '', 'Your Order Being Processed #{{order_info.order_id}}'),
(1283, 4, 'sms', 'ja', '', ''),
(1284, 4, 'sms', 'ar', '', ''),
(1285, 4, 'push', 'en', '', 'Order Being Processed #{{order_info.order_id}}'),
(1286, 4, 'push', 'ja', '', ''),
(1287, 4, 'push', 'ar', '', ''),
(1423, 11, 'email', 'en', 'Partial refund for your #{{order_info.order_id}}', '{% include \'header.html\' %}\r\n\r\n\r\n\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:15%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n   \r\n\r\n    <p style=\"padding-bottom:15px\">Hi {{order_info.customer_name}},</p>\r\n	<p style=\"line-height:20px;\">\r\n	Good News! We’ve processed your partial refund of {{additional_data.refund_amount}} for your item(s) from order #{{order_info.order_id}}.\r\n	</p>\r\n	\r\n	<p style=\"line-height:20px;\">Reversal may take 1 to 2 billing cycles or 5 to 15 banking days for local credit cards, and up to 45 banking days for international credit and debit cards, depending on your bank\'s processing time.</p>\r\n    \r\n   </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n      {% include \'summary.html\' %}\r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td style=\"background:#ffffff;\">\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n    <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	    {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n\r\n{% include \'footer.html\' %}'),
(1424, 11, 'email', 'ja', '', ''),
(1425, 11, 'email', 'ar', '', ''),
(1426, 11, 'sms', 'en', '', ''),
(1427, 11, 'sms', 'ja', '', ''),
(1428, 11, 'sms', 'ar', '', ''),
(1429, 11, 'push', 'en', '', ''),
(1430, 11, 'push', 'ja', '', ''),
(1431, 11, 'push', 'ar', '', ''),
(1495, 13, 'email', 'en', 'OTP!', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p>Hi <br></p>\r\n	\r\n	<p>Your OTP is {{code}}.</p>		\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(1496, 13, 'email', 'ja', '', ''),
(1497, 13, 'email', 'ar', '', ''),
(1498, 13, 'sms', 'en', '', 'Your OTP is {{code}}.'),
(1499, 13, 'sms', 'ja', '', ''),
(1500, 13, 'sms', 'ar', '', ''),
(1501, 13, 'push', 'en', '', ''),
(1502, 13, 'push', 'ja', '', ''),
(1503, 13, 'push', 'ar', '', ''),
(1522, 12, 'email', 'en', '{{site.title}} - Registration', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p style=\"margin-bottom:10px;\">Hi {{first_name}} {{last_name}},</p>\r\n	\r\n	<p>You\'ve successfully signed up for a {{site.title}} account! You can use this next time you order through {{site.title}},</p>		\r\n	<p>and you’ll get the latest promos, news, and updates.</p>\r\n	\r\n	<div style=\"padding-top:20px;\">\r\n	<p>Thank You!</p>\r\n	<p>{{site.title}} Team</p>\r\n	</div>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(1523, 12, 'email', 'ja', '', ''),
(1524, 12, 'email', 'ar', '', ''),
(1525, 12, 'sms', 'en', '', ''),
(1526, 12, 'sms', 'ja', '', ''),
(1527, 12, 'sms', 'ar', '', ''),
(1528, 12, 'push', 'en', '', ''),
(1529, 12, 'push', 'ja', '', ''),
(1530, 12, 'push', 'ar', '', ''),
(1531, 15, 'email', 'en', 'Review your order {{order_info.order_id}}', ''),
(1532, 15, 'email', 'ja', '', ''),
(1533, 15, 'email', 'ar', '', ''),
(1534, 15, 'sms', 'en', '', ''),
(1535, 15, 'sms', 'ja', '', ''),
(1536, 15, 'sms', 'ar', '', ''),
(1537, 15, 'push', 'en', '', ''),
(1538, 15, 'push', 'ja', '', ''),
(1539, 15, 'push', 'ar', '', ''),
(1585, 14, 'email', 'en', 'Password change instructions', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n   <table width=\"50%\" align=\"center\">\r\n   <tbody><tr>\r\n    <td>\r\n	\r\n	<p style=\"margin-bottom:10px;\">Hi {{first_name}} {{last_name}},</p>\r\n	\r\n	 <p style=\"margin-bottom:10px;\">It looks like you have forgotten your password. We can help you to create a new password.</p>\r\n	\r\n	<div style=\"margin:auto;text-align:center;padding-top:10px; padding-bottom:10px;\">\r\n	 <a href=\"{{reset_password_link}}\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;\r\n     text-decoration:none;font-size:18px;font-weight:bold;\">\r\n     Reset Password\r\n     </a>\r\n	</div>\r\n	 \r\n	<p style=\"text-align:center;\">or click this link:</p>\r\n	<p style=\"text-align:center;\"><a href=\"{{reset_password_link}}\">{{reset_password_link}}</a></p>\r\n	\r\n	</td>\r\n   </tr>\r\n   </tbody></table>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(1586, 14, 'email', 'ja', '', ''),
(1587, 14, 'email', 'ar', '', ''),
(1588, 14, 'sms', 'en', '', ''),
(1589, 14, 'sms', 'ja', '', ''),
(1590, 14, 'sms', 'ar', '', ''),
(1591, 14, 'push', 'en', '', ''),
(1592, 14, 'push', 'ja', '', ''),
(1593, 14, 'push', 'ar', '', ''),
(1639, 17, 'email', 'en', 'Payout paid', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p style=\"margin-bottom:15px;\">Hi {{restaurant_name}}<br></p>\r\n	\r\n	<p>Your Payout with transaction #{{transaction_id}} has been paid.</p>	\r\n	\r\n	<h5>Payout Details</h5>\r\n	<table width=\"60%\">\r\n	 <tbody><tr>\r\n	  <td width=\"25%\">Amount</td>\r\n	  <td>{{transaction_amount}}</td>\r\n	 </tr>\r\n	 <tr>\r\n	  <td>Payment Method</td>\r\n	  <td>{{payment_methood}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Transaction</td>\r\n	  <td>{{transaction_description}}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Date requested</td>\r\n	  <td>{{transaction_date}}</td>\r\n	 </tr>	 \r\n	</tbody></table>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(1640, 17, 'email', 'ja', '', ''),
(1641, 17, 'email', 'ar', '', ''),
(1642, 17, 'sms', 'en', '', ''),
(1643, 17, 'sms', 'ja', '', ''),
(1644, 17, 'sms', 'ar', '', ''),
(1645, 17, 'push', 'en', '', ''),
(1646, 17, 'push', 'ja', '', ''),
(1647, 17, 'push', 'ar', '', ''),
(1738, 5, 'email', 'en', 'New order #{{order_info.order_id}} from {{order_info.customer_name}}', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr> \r\n <tr>\r\n  <td style=\"background:#ffffff;\">\r\n  \r\n    {% include \'summary.html\' %}\r\n   \r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td>\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(1739, 5, 'email', 'ja', '', ''),
(1740, 5, 'email', 'ar', '', ''),
(1741, 5, 'sms', 'en', '', 'New order #{{order_info.order_id}} from {{order_info.customer_name}}'),
(1742, 5, 'sms', 'ja', '', ''),
(1743, 5, 'sms', 'ar', '', ''),
(1744, 5, 'push', 'en', 'You have new order from {{customer_name}}', 'Order#{{order_id}} from {{customer_name}}'),
(1745, 5, 'push', 'ja', '', ''),
(1746, 5, 'push', 'ar', '', ''),
(1837, 19, 'email', 'en', 'You have new customer signup', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p style=\"margin-bottom:15px;\">Hi <br></p>\r\n	\r\n	<p>You have new customer signup.</p>	\r\n	\r\n	<h5>Customer Details</h5>\r\n	<table width=\"60%\">\r\n	 <tbody><tr>\r\n	  <td width=\"25%\">First name</td>\r\n	  <td>{{first_name}}</td>\r\n	 </tr>\r\n	 <tr>\r\n	  <td>Last name</td>\r\n	  <td>{{last_name}}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Email address</td>\r\n	  <td>{{email_address}}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Phone number</td>\r\n	  <td>{{contact_phone}}</td>\r\n	 </tr>	 \r\n	</tbody></table>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(1838, 19, 'email', 'ja', '', ''),
(1839, 19, 'email', 'ar', '', ''),
(1840, 19, 'sms', 'en', '', 'You have new customer signup'),
(1841, 19, 'sms', 'ja', '', ''),
(1842, 19, 'sms', 'ar', '', ''),
(1843, 19, 'push', 'en', 'You have new customer signup', '{{first_name}} {{last_name}} has signup'),
(1844, 19, 'push', 'ja', '', ''),
(1845, 19, 'push', 'ar', '', ''),
(1864, 20, 'email', 'en', '', ''),
(1865, 20, 'email', 'ja', '', ''),
(1866, 20, 'email', 'ar', '', ''),
(1867, 20, 'sms', 'en', '', ''),
(1868, 20, 'sms', 'ja', '', ''),
(1869, 20, 'sms', 'ar', '', ''),
(1870, 20, 'push', 'en', 'Order #{{order_id}} from {{customer_name}} is cancelled', 'Order #{{order_id}} from {{customer_name}} is cancelled'),
(1871, 20, 'push', 'ja', '', ''),
(1872, 20, 'push', 'ar', '', ''),
(1909, 16, 'email', 'en', 'Payout new request', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p style=\"margin-bottom:15px;\">Hi <br></p>\r\n	\r\n	<p style=\"margin-bottom:10px;\">New payout request by merchant details below.</p>	\r\n	\r\n	<h5>Payout Details</h5>\r\n	<table width=\"60%\">\r\n	 <tbody><tr>\r\n	  <td width=\"25%\">Amount</td>\r\n	  <td>{{transaction_amount}}</td>\r\n	 </tr>\r\n	 <tr>\r\n	  <td>Payment Method</td>\r\n	  <td>{{payment_method}}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Transaction</td>\r\n	  <td>{{transaction_description}}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Date requested</td>\r\n	  <td>{{transaction_date}}</td>\r\n	 </tr>	 \r\n	</tbody></table>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(1910, 16, 'email', 'ja', '', ''),
(1911, 16, 'email', 'ar', '', ''),
(1912, 16, 'sms', 'en', '', ''),
(1913, 16, 'sms', 'ja', '', ''),
(1914, 16, 'sms', 'ar', '', ''),
(1915, 16, 'push', 'en', 'New payout new request', 'New payout new request from {{restaurant_name}}'),
(1916, 16, 'push', 'ja', '', ''),
(1917, 16, 'push', 'ar', '', ''),
(1927, 18, 'email', 'en', 'Payout cancelled', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p style=\"margin-bottom:15px;\">Hi {{restaurant_name}}<br></p>\r\n	\r\n	<p>Your Payout with transaction #{{transaction_id}} has been cancelled.</p>	\r\n	\r\n	<h5>Payout Details</h5>\r\n	<table width=\"60%\">\r\n	 <tbody><tr>\r\n	  <td width=\"25%\">Amount</td>\r\n	  <td>{{transaction_amount}}</td>\r\n	 </tr>\r\n	 <tr>\r\n	  <td>Payment Method</td>\r\n	  <td>{{payment_methood}}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Transaction</td>\r\n	  <td>{{transaction_description}}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Date requested</td>\r\n	  <td>{{transaction_date}}</td>\r\n	 </tr>	 \r\n	</tbody></table>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(1928, 18, 'email', 'ja', '', ''),
(1929, 18, 'email', 'ar', '', ''),
(1930, 18, 'sms', 'en', '', ''),
(1931, 18, 'sms', 'ja', '', ''),
(1932, 18, 'sms', 'ar', '', ''),
(1933, 18, 'push', 'en', 'Your payout request is cancelled', '{{restaurant_name}} Your payout request with the amount of {{transaction_amount}} is cancel'),
(1934, 18, 'push', 'ja', '', ''),
(1935, 18, 'push', 'ar', '', ''),
(1981, 8, 'email', 'en', 'Sorry for the delay in delivery!', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p>Hi {{order_info.customer_name}},</p>\r\n	\r\n	<p>We are sorry the item(s) from your order {{order_info.order_id}} is taking longer than expected. \r\n	We are working closely with the restaurant team to deliver this order as soon as possible.​</p>\r\n	\r\n	<p><b>{{order_info.delayed_order}}</b></p>\r\n	\r\n	<p>\r\n	Please make sure to turn on your App notification to get the latest updates on your order. \r\n	</p>\r\n    \r\n   </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n  \r\n     {% include \'summary.html\' %}\r\n   \r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td style=\"background:#ffffff;\">\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(1982, 8, 'email', 'ja', '', ''),
(1983, 8, 'email', 'ar', '', ''),
(1984, 8, 'sms', 'en', '', ''),
(1985, 8, 'sms', 'ja', '', ''),
(1986, 8, 'sms', 'ar', '', ''),
(1987, 8, 'push', 'en', 'Order #{{order_id}} will be late, {{delayed_order_mins}}min(s)', 'Your order@{{order_id}} will be late, in {{delayed_order_mins}}min(s)'),
(1988, 8, 'push', 'ja', '', ''),
(1989, 8, 'push', 'ar', '', ''),
(2008, 7, 'email', 'en', 'Your order #{{order_info.order_id}} is cancelled', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"center\">\r\n    <h2 style=\"margin:0;\">Your order #{{order_id}} has been cancelled</h2>\r\n    <p style=\"padding:10px;\">unfortunately merchant cannot fulfill your order, merchant says <b>{{order_info.rejetion_reason}}</b></p>\r\n    \r\n   </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n  \r\n     {% include \'summary.html\' %}\r\n   \r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td style=\"background:#ffffff;\">\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(2009, 7, 'email', 'ja', '', ''),
(2010, 7, 'email', 'ar', '', ''),
(2011, 7, 'sms', 'en', '', ''),
(2012, 7, 'sms', 'ja', '', ''),
(2013, 7, 'sms', 'ar', '', ''),
(2014, 7, 'push', 'en', 'Your order #{{order_id}} is cancelled', 'Your order #{{order_id}} is cancelled'),
(2015, 7, 'push', 'ja', '', ''),
(2016, 7, 'push', 'ar', '', ''),
(2017, 9, 'email', 'en', 'Your order #{{order_info.order_id}} is accepted by {{merchant.restaurant_name}}', '{% include \'header.html\' %}\r\n\r\n\r\n\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:15%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"center\">\r\n    <h2 style=\"margin:0;\">Order Accepted<br></h2>\r\n    <p>Your order is confirmed and is now being prepared by the store. We\'ll let you know once our rider is on his way to you.</p><p>Conveniently track your order by clicking track order.<br></p>\r\n    <a href=\"{{order.order_info.tracking_link}}\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;\r\n     text-decoration:none;font-size:18px;font-weight:bold;\">\r\n     Track Order\r\n     </a>\r\n    \r\n   </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n      {% include \'summary.html\' %}\r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td style=\"background:#ffffff;\">\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n    <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	    {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n\r\n{% include \'footer.html\' %}'),
(2018, 9, 'email', 'ja', '', ''),
(2019, 9, 'email', 'ar', '', ''),
(2020, 9, 'sms', 'en', '', ''),
(2021, 9, 'sms', 'ja', '', ''),
(2022, 9, 'sms', 'ar', '', ''),
(2023, 9, 'push', 'en', 'Your order #{{order_id}} is accepted by {{restaurant_name}}', 'Your order #{{order_id}} is accepted by {{restaurant_name}}'),
(2024, 9, 'push', 'ja', '', ''),
(2025, 9, 'push', 'ar', '', ''),
(2035, 6, 'email', 'en', 'Your order #{{order_id}} has been rejected', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"center\">\r\n    <h2 style=\"margin:0;\">Your order #{{order_id}} has been rejected</h2>\r\n    <p style=\"padding:10px;\">unfortunately merchant cannot fulfill your order, merchant says <b>{{order_info.rejetion_reason}}</b></p>\r\n    \r\n   </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n  \r\n     {% include \'summary.html\' %}\r\n   \r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td style=\"background:#ffffff;\">\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(2036, 6, 'email', 'ja', '', ''),
(2037, 6, 'email', 'ar', '', ''),
(2038, 6, 'sms', 'en', '', ''),
(2039, 6, 'sms', 'ja', '', ''),
(2040, 6, 'sms', 'ar', '', ''),
(2041, 6, 'push', 'en', 'Your order #{{order_id}} has been rejected', 'Your order #{{order_id}} has been rejected'),
(2042, 6, 'push', 'ja', '', ''),
(2043, 6, 'push', 'ar', '', ''),
(2053, 22, 'email', 'en', '', ''),
(2054, 22, 'email', 'ja', '', ''),
(2055, 22, 'email', 'ar', '', ''),
(2056, 22, 'sms', 'en', '', ''),
(2057, 22, 'sms', 'ja', '', ''),
(2058, 22, 'sms', 'ar', '', ''),
(2059, 22, 'push', 'en', 'Your order #{{order_id}} successfully delivered', 'Your order #{{order_id}} successfully delivered'),
(2060, 22, 'push', 'ja', '', ''),
(2061, 22, 'push', 'ar', '', ''),
(2071, 10, 'email', 'en', 'Order is on the way!', '{% include \'header.html\' %}\r\n\r\n\r\n\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:15%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"center\">\r\n    <h2 style=\"margin:0;\">Order is on the way!<br></h2>\r\n    <p style=\"padding:10px;\">For everyone safety is our priority so remember to wash your hands before and after receiving your order<br></p>\r\n    <br>    \r\n    <a href=\"{{order.order_info.tracking_link}}\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;\r\n     text-decoration:none;font-size:18px;font-weight:bold;\">\r\n     Track Order\r\n     </a>\r\n    \r\n   </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n      {% include \'summary.html\' %}\r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td style=\"background:#ffffff;\">\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n    <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	    {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n\r\n{% include \'footer.html\' %}'),
(2072, 10, 'email', 'ja', '', ''),
(2073, 10, 'email', 'ar', '', ''),
(2074, 10, 'sms', 'en', '', ''),
(2075, 10, 'sms', 'ja', '', ''),
(2076, 10, 'sms', 'ar', '', ''),
(2077, 10, 'push', 'en', 'Your order #{{order_id}} is on its way!', 'Your order #{{order_id}} is on its way!'),
(2078, 10, 'push', 'ja', '', ''),
(2079, 10, 'push', 'ar', '', ''),
(2080, 21, 'email', 'en', 'Order is on the way!', '{% include \'header.html\' %}\r\n\r\n\r\n\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:15%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"center\">\r\n    <h2 style=\"margin:0;\">Order is on the way!<br></h2>\r\n    <p style=\"padding:10px;\">For everyone safety is our priority so remember to wash your hands before and after receiving your order<br></p>\r\n    <br>    \r\n    <a href=\"{{order.order_info.tracking_link}}\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;\r\n     text-decoration:none;font-size:18px;font-weight:bold;\">\r\n     Track Order\r\n     </a>\r\n    \r\n   </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n      {% include \'summary.html\' %}\r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td style=\"background:#ffffff;\">\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n    <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	    {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n\r\n{% include \'footer.html\' %}'),
(2081, 21, 'email', 'ja', '', ''),
(2082, 21, 'email', 'ar', '', ''),
(2083, 21, 'sms', 'en', '', ''),
(2084, 21, 'sms', 'ja', '', ''),
(2085, 21, 'sms', 'ar', '', ''),
(2086, 21, 'push', 'en', 'Your order #{{order_id}} is on its way!', 'Your order #{{order_id}} is on its way!'),
(2087, 21, 'push', 'ja', '', ''),
(2088, 21, 'push', 'ar', '', ''),
(2089, 23, 'email', 'en', '', ''),
(2090, 23, 'email', 'ja', '', ''),
(2091, 23, 'email', 'ar', '', ''),
(2092, 23, 'sms', 'en', '', ''),
(2093, 23, 'sms', 'ja', '', ''),
(2094, 23, 'sms', 'ar', '', ''),
(2095, 23, 'push', 'en', 'unfortunately your order#{{order_id}} has failed to deliver', 'unfortunately your order#{{order_id}} has failed to deliver'),
(2096, 23, 'push', 'ja', '', ''),
(2097, 23, 'push', 'ar', '', ''),
(2170, 2, 'email', 'en', 'Invoice for your order #{{order_info.order_id}}', '{% include \'header.html\' %}\r\n\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;padding-bottom:10px;background:#ffffff;\" valign=\"middle\" align=\"center\">\r\n    <h2 style=\"margin:0;\">Invoice #{{additional_data.invoice_number}}</h2>    \r\n   </td>   \r\n </tr>\r\n <tr>\r\n   <td style=\"padding-bottom:10px;background:#ffffff;\" valign=\"middle\">\r\n     <table width=\"80%\" align=\"center\">\r\n      <tbody><tr> \r\n       <td>\r\n        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper sapien ullamcorper nibh aliquam, non rutrum orci vulputate. Donec congue ac tortor eu dignissim. Cras a libero lobortis tellus elementum consequat eget vitae turpis. Mauris non lorem odio. Integer in lacus bibendum, accumsan risus nec, pretium felis. Aliquam auctor nec eros a mattis. Praesent eu ligula vitae ex rhoncus aliquam. Pellentesque ut mattis lectus. Maecenas ultrices a lorem et interdum. Mauris lacinia nec libero id tincidunt. Nunc accumsan quis enim vitae pellentesque.</p>        \r\n       </td>\r\n      </tr>\r\n     </tbody></table>\r\n   </td>   \r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n  \r\n     {% include \'summary.html\' %}\r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"padding:30px;\" align=\"center\">\r\n     <a href=\"{{additional_data.payment_link}}\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;\r\n     text-decoration:none;font-size:18px;font-weight:bold;\">\r\n     Pay Now\r\n     </a>\r\n  </td>\r\n </tr>\r\n \r\n  <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n     <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	    {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n\r\n\r\n{% include \'footer.html\' %}\r\n'),
(2171, 2, 'email', 'ja', '', ''),
(2172, 2, 'email', 'ar', '', ''),
(2173, 2, 'sms', 'en', '', 'Your order #{{order_info.order_id}}, has a balance of {{additional_data.balance}}.\r\npay here {{additional_data.payment_link}}'),
(2174, 2, 'sms', 'ja', '', ''),
(2175, 2, 'sms', 'ar', '', ''),
(2176, 2, 'push', 'en', 'Your order #{{order_id}}, has a balance of {{balance}}. pay here {{payment_link}}', 'Your order #{{order_id}}, has a balance of {{balance}}.\r\npay here {{payment_link}}'),
(2177, 2, 'push', 'ja', '', ''),
(2178, 2, 'push', 'ar', '', ''),
(2179, 24, 'email', 'en', 'Your registration is complete!', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n   <table width=\"50%\" align=\"center\">\r\n   <tbody><tr>\r\n    <td>\r\n	\r\n	<p style=\"margin-bottom:10px;\">Hi {{restaurant_name}},</p>\r\n	\r\n	 <p style=\"margin-bottom:10px;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis nunc ut metus vulputate imperdiet at eget ipsum. Duis pharetra eros nec purus auctor, ut dapibus nunc convallis. Phasellus pellentesque lorem eros, et molestie velit pulvinar eget. Praesent orci orci, pulvinar ac nisi sit amet, cursus imperdiet mauris. Sed pharetra, nibh non maximus blandit, ex felis sagittis turpis, et porttitor dui nibh a eros. Donec imperdiet non ex molestie consequat. Duis posuere tortor eget nibh imperdiet sollicitudin. Curabitur porta placerat ex, vitae consequat turpis semper in. Integer non nulla justo. Phasellus posuere faucibus erat, ac ornare odio suscipit sed. Cras et erat dui. </p>		\r\n	\r\n	</td>\r\n   </tr>\r\n   </tbody></table>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(2180, 24, 'email', 'ja', '', ''),
(2181, 24, 'email', 'ar', '', ''),
(2182, 24, 'sms', 'en', '', ''),
(2183, 24, 'sms', 'ja', '', ''),
(2184, 24, 'sms', 'ar', '', ''),
(2185, 24, 'push', 'en', '', ''),
(2186, 24, 'push', 'ja', '', ''),
(2187, 24, 'push', 'ar', '', '');
INSERT INTO `st_templates_translation` (`id`, `template_id`, `template_type`, `language`, `title`, `content`) VALUES
(2305, 25, 'email', 'en', 'Welcome to {{site.site_name}}. Confirm your account!', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n   <table width=\"50%\" align=\"center\">\r\n   <tbody><tr>\r\n    <td>\r\n	\r\n	<p style=\"margin-bottom:10px;\">Hi {{restaurant_name}},</p>\r\n	\r\n	 <p style=\"margin-bottom:10px;\">Welcome</p>\r\n	 <p>Before you get full access to all features of your restaurant in {{site.site_name}}, please confirm your email address</p>\r\n	\r\n	<div style=\"margin:auto;text-align:center;padding-top:10px; padding-bottom:10px;\">\r\n	 <a href=\"{{confirm_link}}\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;\r\n     text-decoration:none;font-size:18px;font-weight:bold;\">\r\n     Confirm email\r\n     </a>\r\n	</div>\r\n	 \r\n	<p style=\"text-align:center;\">or click this link:</p>\r\n	<p style=\"text-align:center;\"><a href=\"{{confirm_link}}\">{{confirm_link}}</a></p>\r\n	\r\n	</td>\r\n   </tr>\r\n   </tbody></table>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(2306, 25, 'email', 'ja', '', ''),
(2307, 25, 'email', 'ar', '', ''),
(2308, 25, 'sms', 'en', '', ''),
(2309, 25, 'sms', 'ja', '', ''),
(2310, 25, 'sms', 'ar', '', ''),
(2311, 25, 'push', 'en', 'Welcome to {{site_name}}. Confirm your account!', 'Welcome to {{site_name}}. Confirm your account!'),
(2312, 25, 'push', 'ja', '', ''),
(2313, 25, 'push', 'ar', '', ''),
(2332, 26, 'email', 'en', 'You have new merchant signup', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p style=\"margin-bottom:15px;\">Hi <br></p>\r\n	\r\n	<p style=\"margin-bottom: 15px;\">You have new merchant signup.</p>	\r\n	\r\n	<h5>Customer Details</h5>\r\n	<table width=\"60%\">\r\n	 <tbody><tr>\r\n	  <td width=\"25%\">Restaurant name<br></td>\r\n	  <td>{{restaurant_name}}</td>\r\n	 </tr>\r\n	 <tr>\r\n	  <td>Address<br></td>\r\n	  <td>{{address}}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Membership Program<br></td>\r\n	  <td>{{plan_title}}</td>\r\n	 </tr>	\r\n	  <tr>\r\n	  <td>Phone number</td>\r\n	  <td>{{contact_phone}}</td>\r\n	 </tr><tr><td>Email address<br></td><td>{{contact_email}}<br></td></tr>	 \r\n	</tbody></table>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(2333, 26, 'email', 'ja', '', ''),
(2334, 26, 'email', 'ar', '', ''),
(2335, 26, 'sms', 'en', '', ''),
(2336, 26, 'sms', 'ja', '', ''),
(2337, 26, 'sms', 'ar', '', ''),
(2338, 26, 'push', 'en', 'You have new merchant signup', 'You have new merchant signup'),
(2339, 26, 'push', 'ja', '', ''),
(2340, 26, 'push', 'ar', '', ''),
(2350, 28, 'email', 'en', 'Your membership will expired on {{expiration_date}}', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p style=\"margin-bottom:15px;\">Hi {{restaurant_name}}<br></p>\r\n	\r\n	<p>Your&nbsp; membership will expired on {{expiration_date}}.</p>	\r\n	\r\n	\r\n	\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(2351, 28, 'email', 'ja', '', ''),
(2352, 28, 'email', 'ar', '', ''),
(2353, 28, 'sms', 'en', '', ''),
(2354, 28, 'sms', 'ja', '', ''),
(2355, 28, 'sms', 'ar', '', ''),
(2356, 28, 'push', 'en', 'Your membership will expired on {{expiration_date}}', 'Your membership will expired on {{expiration_date}}'),
(2357, 28, 'push', 'ja', '', ''),
(2358, 28, 'push', 'ar', '', ''),
(2359, 27, 'email', 'en', 'Your membership has expired', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n    <p style=\"margin-bottom:15px;\">Hi {{restaurant_name}}<br></p>\r\n	\r\n	<p>Your&nbsp; membership has expired.</p>	\r\n	\r\n	\r\n	\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(2360, 27, 'email', 'ja', '', ''),
(2361, 27, 'email', 'ar', '', ''),
(2362, 27, 'sms', 'en', '', ''),
(2363, 27, 'sms', 'ja', '', ''),
(2364, 27, 'sms', 'ar', '', ''),
(2365, 27, 'push', 'en', 'Your membership has expired', 'Your membership has expired'),
(2366, 27, 'push', 'ja', '', ''),
(2367, 27, 'push', 'ar', '', ''),
(2377, 3, 'email', 'en', 'Refund for your #{{order_info.order_id}}', '{% include \'header.html\' %}\r\n\r\n\r\n\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:15%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n   \r\n\r\n    <p style=\"padding-bottom:15px\">Hi {{order_info.customer_name}},</p>\r\n	<p style=\"line-height:20px;\">\r\n	Good News! We’ve processed your full refund of {{additional_data.refund_amount}} for your item(s) from order #{{order_info.order_id}}.\r\n	</p>\r\n	\r\n	<p style=\"line-height:20px;\">Reversal may take 1 to 2 billing cycles or 5 to 15 banking days for local credit cards, and up to 45 banking days for international credit and debit cards, depending on your bank\'s processing time.</p>\r\n    \r\n   </td>\r\n </tr>\r\n \r\n <tr>\r\n  <td style=\"background:#fef9ef;\">\r\n      {% include \'summary.html\' %}\r\n  </td>\r\n </tr>\r\n \r\n <tr>\r\n   <td style=\"background:#ffffff;\">\r\n     {% include \'items.html\' %}\r\n   </td>\r\n </tr>\r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n    <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	    {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n\r\n{% include \'footer.html\' %}'),
(2378, 3, 'email', 'ja', '', ''),
(2379, 3, 'email', 'ar', '', ''),
(2380, 3, 'sms', 'en', '', ''),
(2381, 3, 'sms', 'ja', '', ''),
(2382, 3, 'sms', 'ar', '', ''),
(2383, 3, 'push', 'en', 'Your refund has been process for order #{{order_info.order_id}} ', 'Your refund has been process for order #{{order_info.order_id}} '),
(2384, 3, 'push', 'ja', '', ''),
(2385, 3, 'push', 'ar', '', ''),
(2386, 29, 'email', 'en', 'Forgot password', '{% include \'header.html\' %}\r\n<table style=\"width:100%;\">\r\n <tbody><tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    <img style=\"max-width:20%;max-height:50px;\" src=\"{{logo}}\">\r\n  </td>\r\n </tr>\r\n <tr>\r\n   <td style=\"padding:30px;background:#ffffff;\" valign=\"middle\" align=\"left\">\r\n    \r\n   <table width=\"50%\" align=\"center\">\r\n   <tbody><tr>\r\n    <td>\r\n	\r\n	<p style=\"margin-bottom:10px;\">Hi {{first_name}} {{last_name}},</p>\r\n	\r\n	 <p style=\"margin-bottom:10px;\">It looks like you have forgotten your password. We can help you to create a new password.</p>\r\n	\r\n	<div style=\"margin:auto;text-align:center;padding-top:10px; padding-bottom:10px;\">\r\n	 <a href=\"{{reset_password_link}}\" target=\"_blank\" style=\"display:block;margin:auto;max-width:200px;padding:10px;background:#3ecf8e;color:#fff;\r\n     text-decoration:none;font-size:18px;font-weight:bold;\">\r\n     Reset Password\r\n     </a>\r\n	</div>\r\n	 \r\n	<p style=\"text-align:center;\">or click this link:</p>\r\n	<p style=\"text-align:center;\"><a href=\"{{reset_password_link}}\">{{reset_password_link}}</a></p>\r\n	\r\n	</td>\r\n   </tr>\r\n   </tbody></table>\r\n	\r\n   </td>\r\n </tr>\r\n \r\n \r\n \r\n  \r\n <tr>\r\n  <td style=\"background:#fef9ef;padding:20px 30px;\">\r\n    \r\n   <table style=\"width:100%; table-layout: fixed;\">\r\n	  <tbody><tr>\r\n	    <th colspan=\"3\" style=\"text-align: left;\"><h5>Contact Us</h5></th>\r\n	    <th colspan=\"7\" style=\"text-align: left;\"><h5>For  promos, news, and updates, follow us on:</h5></th>\r\n	  </tr>\r\n	  <tr>\r\n	    <td colspan=\"3\" style=\"text-align: left; padding:0 3px;\" valign=\"top\">\r\n	     <p>{{site.address}}</p>\r\n         <p>{{site.contact}}</p>\r\n         <p>{{site.email}}</p>\r\n	    </td><td colspan=\"7\" style=\"padding:0 3px;\" valign=\"top\">\r\n	    \r\n	      {% include \'social_link.html\' %}\r\n	     \r\n	     <table>\r\n	      <tbody><tr>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Terms and Conditions</a></td>\r\n	      <td>●</td>\r\n	      <td style=\"padding:0;\"><a href=\"#\" style=\"color:#000;font-size:16px;\">Privacy Policy</a></td>\r\n	      </tr>\r\n	     </tbody></table>\r\n	    \r\n	    </td>\r\n	  </tr>\r\n	</tbody></table>\r\n  \r\n  </td>\r\n </tr>\r\n \r\n</tbody></table>\r\n{% include \'footer.html\' %}\r\n'),
(2387, 29, 'email', 'ar', '', ''),
(2388, 29, 'email', 'ja', '', ''),
(2389, 29, 'sms', 'en', '', ''),
(2390, 29, 'sms', 'ar', '', ''),
(2391, 29, 'sms', 'ja', '', ''),
(2392, 29, 'push', 'en', '', ''),
(2393, 29, 'push', 'ar', '', ''),
(2394, 29, 'push', 'ja', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `st_voucher_new`
--

CREATE TABLE `st_voucher_new` (
  `voucher_id` int(14) NOT NULL,
  `voucher_owner` varchar(255) NOT NULL DEFAULT 'merchant',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `joining_merchant` text,
  `voucher_name` varchar(255) NOT NULL DEFAULT '',
  `voucher_type` varchar(255) NOT NULL DEFAULT '',
  `amount` float(14,4) NOT NULL DEFAULT '0.0000',
  `expiration` date DEFAULT NULL,
  `used_once` int(1) NOT NULL DEFAULT '1',
  `min_order` float(14,5) NOT NULL DEFAULT '0.00000',
  `monday` int(1) NOT NULL DEFAULT '0',
  `tuesday` int(1) NOT NULL DEFAULT '0',
  `wednesday` int(1) NOT NULL DEFAULT '0',
  `thursday` int(1) NOT NULL DEFAULT '0',
  `friday` int(1) NOT NULL DEFAULT '0',
  `saturday` int(1) NOT NULL DEFAULT '0',
  `sunday` int(1) NOT NULL DEFAULT '0',
  `max_number_use` int(14) NOT NULL DEFAULT '0',
  `selected_customer` text,
  `status` varchar(100) NOT NULL DEFAULT '',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_wallet_cards`
--

CREATE TABLE `st_wallet_cards` (
  `card_id` bigint(20) NOT NULL,
  `card_uuid` varchar(50) NOT NULL DEFAULT '',
  `account_type` varchar(50) NOT NULL DEFAULT '',
  `account_id` bigint(20) NOT NULL DEFAULT '0',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `st_wallet_cards`
--

INSERT INTO `st_wallet_cards` (`card_id`, `card_uuid`, `account_type`, `account_id`, `date_created`, `date_modified`, `ip_address`) VALUES
(1, '8722736e-7eb4-11ec-aa6d-9c5c8e164c2c', 'admin', 0, '2022-01-26 14:30:36', NULL, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `st_wallet_transactions`
--

CREATE TABLE `st_wallet_transactions` (
  `transaction_id` bigint(20) NOT NULL,
  `transaction_uuid` varchar(100) NOT NULL DEFAULT '',
  `card_id` bigint(20) NOT NULL DEFAULT '0',
  `transaction_date` timestamp NULL DEFAULT NULL,
  `transaction_description` varchar(255) NOT NULL DEFAULT '',
  `transaction_description_parameters` varchar(255) NOT NULL DEFAULT '',
  `transaction_type` varchar(50) NOT NULL DEFAULT '',
  `transaction_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `running_balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` varchar(100) NOT NULL DEFAULT 'paid',
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_wallet_transactions_meta`
--

CREATE TABLE `st_wallet_transactions_meta` (
  `id` bigint(20) NOT NULL,
  `transaction_id` bigint(20) NOT NULL DEFAULT '0',
  `meta_name` varchar(100) NOT NULL DEFAULT '',
  `meta_value` text,
  `date_created` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_zones`
--

CREATE TABLE `st_zones` (
  `zone_id` bigint(20) NOT NULL,
  `zone_uuid` varchar(50) NOT NULL DEFAULT '',
  `merchant_id` bigint(20) DEFAULT '0',
  `zone_name` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `st_message`
--

CREATE TABLE `st_message` (
  `id` int(11) NOT NULL,
  `language` varchar(16) NOT NULL,
  `translation` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `st_sourcemessage`
--

CREATE TABLE `st_sourcemessage` (
  `id` int(11) NOT NULL,
  `category` varchar(32) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `st_subscriber`
--

CREATE TABLE `st_subscriber` (
  `id` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL DEFAULT '',
  `merchant_id` int(14) NOT NULL DEFAULT '0',
  `subcsribe_type` varchar(50) NOT NULL DEFAULT 'website',
  `date_created` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `st_banner`
--

CREATE TABLE `st_banner` (
  `banner_id` int(14) NOT NULL,
  `banner_uuid` varchar(100) NOT NULL DEFAULT '',
  `owner` varchar(50) NOT NULL DEFAULT 'admin',
  `title` varchar(255) NOT NULL DEFAULT '',
  `banner_type` varchar(100) NOT NULL DEFAULT '',
  `meta_value1` int(10) NOT NULL DEFAULT '0',
  `meta_value2` int(10) NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '',
  `photo` varchar(255) NOT NULL DEFAULT '',
  `sequence` int(10) NOT NULL DEFAULT '0',
  `status` int(10) NOT NULL DEFAULT '1',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Table structure for table `st_addons`
--

CREATE TABLE `st_addons` (
  `id` int(11) NOT NULL,
  `addon_name` varchar(255) NOT NULL DEFAULT '',
  `uuid` varchar(255) NOT NULL DEFAULT '',
  `version` varchar(5) NOT NULL DEFAULT '',
  `activated` int(1) NOT NULL DEFAULT '0',
  `image` varchar(100) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `purchase_code` varchar(50) NOT NULL DEFAULT '',
  `date_created` timestamp NULL DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- END OF CREATING TABLE
--

--
-- Dumping data for table `st_sourcemessage`
--

INSERT INTO `st_sourcemessage` (`id`, `category`, `message`) VALUES
(1, 'backend', 'Total Sales'),
(2, 'backend', 'Total Merchant'),
(3, 'backend', 'Total Commission'),
(4, 'backend', 'Total Subscriptions'),
(5, 'backend', 'Commission this week'),
(6, 'backend', 'Commission this month'),
(7, 'backend', 'Subscriptions this month'),
(8, 'backend', 'Order received'),
(9, 'backend', 'Today delivered'),
(10, 'backend', 'New customer'),
(11, 'backend', 'Total refund'),
(12, 'backend', 'Last Orders'),
(13, 'backend', 'Quick management of the last {{limit}} orders'),
(14, 'backend', 'Block Customer'),
(15, 'backend', 'You are about to block this customer from ordering to your restaurant, click confirm to continue?'),
(16, 'backend', 'Cancel'),
(17, 'backend', 'Confirm'),
(18, 'backend', 'Sold'),
(19, 'backend', 'sales'),
(20, 'backend', 'Sales overview'),
(21, 'backend', 'Top Customers'),
(22, 'backend', 'Overview of Review'),
(23, 'backend', 'Star'),
(24, 'backend', 'Checkout All Reviews'),
(25, 'backend', 'Recent payout'),
(26, 'backend', 'Withdrawals Details'),
(27, 'backend', 'Close'),
(28, 'backend', 'Process this payout'),
(29, 'backend', 'Cancel this payout'),
(30, 'backend', 'Set status to paid'),
(31, 'backend', 'All'),
(32, 'backend', 'Processing'),
(33, 'backend', 'Ready'),
(34, 'backend', 'Completed'),
(35, 'backend', 'Popular items'),
(36, 'backend', 'latest popular items'),
(37, 'backend', 'Last 30 days sales'),
(38, 'backend', 'sales for last 30 days'),
(39, 'backend', 'Popular merchants'),
(40, 'backend', 'best selling restaurant'),
(41, 'backend', 'Popular by review'),
(42, 'backend', 'most reviewed'),
(45, 'backend', 'The difference between the DateTimes is NaN.'),
(46, 'backend', 'Moments ago'),
(47, 'backend', 'Seconds from now'),
(48, 'backend', 'Yesterday'),
(49, 'backend', 'Tomorrow'),
(50, 'backend', 'year'),
(51, 'backend', 'minutes'),
(52, 'backend', 'ago'),
(53, 'backend', 'hours'),
(54, 'backend', 'days'),
(55, 'backend', 'minute'),
(56, 'backend', 'hour'),
(57, 'backend', 'day'),
(58, 'backend', 'Member since {{date_created}}'),
(59, 'backend', '{{total_sold}} orders'),
(60, 'backend', '{{total_sold}} sold'),
(61, 'backend', 'This month you got {{count}} New Reviews'),
(62, 'backend', 'You don\'t have current orders.'),
(63, 'backend', 'Order #{{order_id}}'),
(64, 'backend', '{{sold}} sold'),
(65, 'backend', 'ratings'),
(66, 'backend', 'Title'),
(67, 'backend', 'Select File'),
(68, 'backend', 'Upload New'),
(69, 'backend', 'Website logo'),
(70, 'backend', 'Add Files'),
(71, 'backend', 'Previous'),
(72, 'backend', 'Next'),
(73, 'backend', 'Search'),
(74, 'backend', 'Business Address'),
(75, 'backend', 'Address'),
(76, 'backend', 'Contact Phone Number'),
(77, 'backend', 'Contact email'),
(78, 'backend', 'Save'),
(79, 'backend', 'Site information'),
(80, 'backend', 'Map API Keys'),
(81, 'backend', 'Google Recaptcha'),
(82, 'backend', 'Search Mode'),
(83, 'backend', 'Login & Signup'),
(84, 'backend', 'Phone Settings'),
(85, 'backend', 'Social Login'),
(86, 'backend', 'Printing Settings'),
(87, 'backend', 'Reviews'),
(88, 'backend', 'Timezone'),
(89, 'backend', 'Ordering'),
(90, 'backend', 'Merchant Registration'),
(91, 'backend', 'Notifications'),
(92, 'backend', 'Contact Settings'),
(93, 'backend', 'Analytics'),
(94, 'backend', 'Choose Map Provider'),
(95, 'backend', 'Google Maps'),
(96, 'backend', 'Mapbox'),
(97, 'backend', 'Google Maps (default)'),
(98, 'backend', 'Geocoding API Key'),
(99, 'backend', 'Google Maps JavaScript API'),
(100, 'backend', 'Mapbox Access Token'),
(101, 'backend', 'Site configuration'),
(102, 'backend', 'reCAPTCHA v2'),
(103, 'backend', 'Captcha Site Key'),
(104, 'backend', 'Captcha Secret'),
(105, 'backend', 'Captcha Lang'),
(106, 'backend', 'default is = en'),
(107, 'backend', 'Administration login'),
(108, 'backend', 'Enabled'),
(109, 'backend', 'Merchant login'),
(111, 'backend', 'Address using map provider'),
(112, 'backend', 'Zone'),
(113, 'backend', 'Location using define address'),
(114, 'backend', 'Settings for Address'),
(115, 'backend', 'Enabled choose address from map'),
(116, 'backend', 'Set Specific Country'),
(117, 'backend', 'leave empty to show all country'),
(118, 'backend', 'Settings for define locations'),
(119, 'backend', 'City / Area'),
(120, 'backend', 'State / City'),
(121, 'backend', 'PostalCode/ZipCode'),
(122, 'backend', 'All Country'),
(123, 'backend', 'No results.'),
(124, 'backend', 'Key'),
(125, 'backend', 'Value'),
(126, 'backend', 'Search key'),
(127, 'backend', 'Add Key'),
(128, 'backend', 'First'),
(129, 'backend', 'Last'),
(130, 'backend', 'Signup Type'),
(131, 'backend', 'Standard signup'),
(132, 'backend', 'Mobile phone signup'),
(133, 'backend', 'Signup Verifications'),
(134, 'backend', 'This settings only works in standard signup'),
(135, 'backend', 'Resend code interval'),
(136, 'backend', 'Google reCapcha'),
(137, 'backend', 'Terms and condition'),
(138, 'backend', 'Welcome Template'),
(139, 'backend', 'New Signup Template'),
(140, 'backend', 'this template will send to admin user'),
(141, 'backend', 'Verification Template'),
(142, 'backend', 'Reset Password Template'),
(143, 'backend', 'Block user from registering'),
(144, 'backend', 'Multiple email separated by comma'),
(145, 'backend', 'Multiple mobile separated by comma'),
(146, 'backend', 'Phone country list'),
(147, 'backend', 'define the country selection for mobile phone, empty means will show all.'),
(148, 'backend', 'Default country'),
(149, 'backend', 'default mobile country'),
(150, 'backend', 'Facebook'),
(151, 'backend', 'Enabled Facebook Login'),
(152, 'backend', 'App ID'),
(153, 'backend', 'App Secret'),
(154, 'backend', 'Enabled Google Login'),
(155, 'backend', 'Client ID'),
(156, 'backend', 'Client Secret'),
(157, 'backend', 'Google'),
(158, 'backend', 'Receipt Thank you text'),
(159, 'backend', 'Receipt Footer text'),
(160, 'backend', 'Receipt Logo'),
(161, 'backend', 'Item translations'),
(162, 'backend', 'Merchant can edit/delete review'),
(163, 'backend', 'Resize image width'),
(164, 'backend', 'upload review image will resize to set width, if below set width no resizing will happen.'),
(165, 'backend', 'Template review'),
(166, 'backend', 'Send email reminder to customer to review there order.'),
(167, 'backend', 'Time Zone'),
(168, 'backend', 'Date Format'),
(169, 'backend', 'Time Format'),
(170, 'backend', 'Time interval'),
(171, 'backend', 'Enabled Ordering'),
(172, 'backend', 'Cannot do order again if previous order status is'),
(173, 'backend', 'Order Cancellation'),
(174, 'backend', 'Enabled cancellation of order'),
(175, 'backend', 'Enabled Registration'),
(176, 'backend', 'Enabled CAPTCHA'),
(177, 'backend', 'Membership Program'),
(178, 'backend', 'Terms and conditions'),
(179, 'backend', 'Pre-configure food item size'),
(180, 'backend', 'Templates'),
(181, 'backend', 'this will be added as default food item size to merchant during registration. value must be separated by comma eg. small,medium,large'),
(182, 'backend', 'Confirm Account'),
(183, 'backend', 'Welcome email'),
(184, 'backend', 'Plan Near Expiration'),
(185, 'backend', 'Plan Expired'),
(186, 'backend', 'New Signup'),
(187, 'backend', 'this template will send to admin'),
(188, 'backend', 'Enabled Notification'),
(189, 'backend', 'Email and Mobile number who will receive notifications like new order and cancel order.'),
(190, 'backend', 'Multiple email/mobile must be separated by comma.'),
(191, 'backend', 'Email address'),
(192, 'backend', 'Mobile number'),
(193, 'backend', 'Receiver Email Address'),
(194, 'backend', 'Content'),
(195, 'backend', 'Contact Fields'),
(196, 'backend', 'Facebook Pixel Setting'),
(197, 'backend', 'Facebook Pixel ID'),
(198, 'backend', 'Google Analytics Setting'),
(199, 'backend', 'Tracking ID'),
(200, 'backend', 'All Merchant'),
(201, 'backend', 'Name'),
(202, 'backend', 'Charge Type'),
(203, 'backend', 'Actions'),
(204, 'backend', 'Add new'),
(205, 'backend', 'Update'),
(206, 'backend', 'Delete'),
(207, 'backend', 'Edit Merchant'),
(208, 'backend', 'Restaurant name'),
(209, 'backend', 'Restaurant Slug'),
(210, 'backend', 'Contact Name'),
(211, 'backend', 'Contact Phone'),
(212, 'backend', 'Header'),
(213, 'backend', 'About'),
(214, 'backend', 'Short About'),
(215, 'backend', 'Cuisine'),
(216, 'backend', 'Services'),
(217, 'backend', 'Tags'),
(218, 'backend', 'Featured'),
(219, 'backend', 'Delivery Distance Covered'),
(220, 'backend', 'Published Merchant'),
(221, 'backend', 'Miles'),
(222, 'backend', 'Kilometers'),
(223, 'backend', 'Status'),
(224, 'backend', 'Logo'),
(225, 'backend', 'Merchant information'),
(226, 'backend', 'Login information'),
(227, 'backend', 'Merchant Type'),
(229, 'backend', 'Payment history'),
(230, 'backend', 'Payment settings'),
(231, 'backend', 'Others'),
(232, 'backend', 'First Name'),
(233, 'backend', 'Last Name'),
(235, 'backend', 'Contact number'),
(236, 'backend', 'Username'),
(237, 'backend', 'New Password'),
(238, 'backend', 'Confirm Password'),
(239, 'backend', 'Address details'),
(241, 'backend', 'Geolocation'),
(242, 'backend', 'Latitude'),
(243, 'backend', 'Lontitude'),
(244, 'backend', 'Radius distance covered'),
(245, 'backend', 'Get your address geolocation via service like [link] or [link2], entering invalid coordinates will make your store not available for ordering'),
(246, 'backend', 'No results'),
(247, 'backend', 'Searching...'),
(248, 'backend', 'Type'),
(249, 'backend', 'commission on orders'),
(250, 'backend', 'Percent Commision'),
(251, 'backend', 'Plan'),
(252, 'backend', 'Created'),
(253, 'backend', 'Payment'),
(254, 'backend', 'Invoice #'),
(255, 'backend', 'No data available in table'),
(256, 'backend', 'Showing [start] to [end] of [total] entries'),
(257, 'backend', 'Showing 0 to 0 of 0 entries'),
(258, 'backend', '(filtered from [max] total entries)'),
(259, 'backend', 'Show [menu] entries'),
(260, 'backend', 'Loading...'),
(261, 'backend', 'Search:'),
(262, 'backend', 'No matching records found'),
(266, 'backend', ': activate to sort column ascending'),
(267, 'backend', ': activate to sort column descending'),
(268, 'backend', 'Enabled Payment gateway'),
(269, 'backend', 'Check All'),
(270, 'backend', 'Close this store'),
(272, 'backend', 'Add Merchant'),
(273, 'backend', 'Edit Merchant - information'),
(274, 'backend', 'Edit Merchant - login'),
(275, 'backend', 'Edit Merchant - Merchant type'),
(276, 'backend', 'Edit Merchant - Featured'),
(277, 'backend', 'Edit Merchant - Address'),
(278, 'backend', 'Edit Merchant - Zone'),
(280, 'backend', 'Merchant - Payment Settings'),
(281, 'backend', 'Merchant - Others'),
(282, 'backend', 'Merchant - Access'),
(283, 'backend', 'All Sponsored'),
(284, 'backend', 'Expiration Date'),
(285, 'backend', 'Plan list'),
(286, 'backend', 'Description'),
(287, 'backend', 'Price'),
(288, 'backend', 'Promo'),
(289, 'backend', 'All Plans'),
(290, 'backend', 'Add'),
(291, 'backend', 'Promo Price'),
(292, 'backend', 'Plan period'),
(293, 'backend', 'Item limit'),
(294, 'backend', '0 is unlimited numbers of items'),
(295, 'backend', 'Order limit'),
(296, 'backend', 'Trial Period'),
(297, 'backend', '0 is unlimited numbers of orders per period'),
(298, 'backend', 'trial period number of days'),
(299, 'backend', 'Unlimited'),
(300, 'backend', 'Limited'),
(301, 'backend', 'Daily'),
(302, 'backend', 'Monthly'),
(303, 'backend', 'Anually'),
(304, 'backend', 'Weekly'),
(305, 'backend', 'Details'),
(306, 'backend', 'Features'),
(307, 'backend', 'Plans Payment ID'),
(308, 'backend', 'Paypal'),
(309, 'backend', 'Plan ID'),
(310, 'backend', 'Stripe'),
(311, 'backend', 'Price IDs'),
(312, 'backend', 'Razorpay'),
(313, 'backend', 'No payment yet available'),
(314, 'backend', 'Order Information'),
(315, 'backend', 'Order ID'),
(316, 'backend', 'Merchant'),
(317, 'backend', 'Customer'),
(318, 'backend', 'Orders'),
(320, 'backend', 'Total Orders'),
(321, 'backend', 'All Orders'),
(322, 'backend', 'Filters'),
(323, 'backend', '{{total_items}} items'),
(324, 'backend', 'Order Type.'),
(325, 'backend', 'Total. {{total}}'),
(326, 'backend', 'Place on {{date}}'),
(327, 'backend', 'Start date -- End date'),
(328, 'backend', 'to'),
(329, 'backend', 'Order type'),
(330, 'backend', 'Su'),
(331, 'backend', 'Mo'),
(332, 'backend', 'Tu'),
(333, 'backend', 'We'),
(334, 'backend', 'Th'),
(335, 'backend', 'Fr'),
(336, 'backend', 'Sa'),
(337, 'backend', 'January'),
(338, 'backend', 'February'),
(339, 'backend', 'March'),
(340, 'backend', 'April'),
(341, 'backend', 'May'),
(342, 'backend', 'June'),
(343, 'backend', 'July'),
(344, 'backend', 'August'),
(345, 'backend', 'September'),
(346, 'backend', 'October'),
(347, 'backend', 'November'),
(348, 'backend', 'December'),
(349, 'backend', 'Today'),
(351, 'backend', 'Last 7 Days'),
(352, 'backend', 'Last 30 Days'),
(353, 'backend', 'This Month'),
(354, 'backend', 'Last Month'),
(355, 'backend', 'Custom Range'),
(357, 'backend', 'By Merchant'),
(358, 'backend', 'By customer'),
(359, 'backend', 'By Status'),
(360, 'backend', 'By Order Type'),
(361, 'backend', 'Clear Filters'),
(362, 'backend', 'Apply Filters'),
(363, 'backend', 'Status for new order'),
(364, 'backend', 'Status for delivered order'),
(365, 'backend', 'Status for completed pickup/dinein order'),
(366, 'backend', 'Status for cancel order'),
(367, 'backend', 'Status for order rejection'),
(368, 'backend', 'Status for delivery failed'),
(369, 'backend', 'Status for failed pickup/dinein order'),
(370, 'backend', 'Order Status'),
(371, 'backend', 'Order Tabs'),
(372, 'backend', 'Order Buttons'),
(373, 'backend', 'Order Tracking'),
(374, 'backend', 'Template'),
(375, 'backend', 'Settings'),
(376, 'backend', 'New Orders'),
(377, 'backend', 'select the status that will show on this tab.'),
(378, 'backend', 'Orders Processing'),
(380, 'backend', 'Orders Ready'),
(381, 'backend', 'Completed Today'),
(382, 'backend', 'define the buttons for this tab'),
(383, 'backend', 'Button Name'),
(385, 'backend', 'Order Processing'),
(386, 'backend', 'Button CSS class name eg. btn-green, btn-black'),
(387, 'backend', 'Status for order processing'),
(388, 'backend', 'Status for food ready'),
(389, 'backend', 'Status for in transit'),
(390, 'backend', 'Status for delivered'),
(391, 'backend', 'Template Invoice'),
(392, 'backend', 'Template Refund'),
(393, 'backend', 'Template Partial Refund'),
(394, 'backend', 'Delay Order'),
(395, 'backend', 'All Payment gateway'),
(396, 'backend', 'Add Gateway'),
(397, 'backend', 'Payment gateway list'),
(398, 'backend', 'Online Payment'),
(399, 'backend', 'Available for payout'),
(400, 'backend', 'Available for plan'),
(401, 'backend', 'Payment code'),
(402, 'backend', 'This fields must not have spaces'),
(403, 'backend', 'Payment name'),
(404, 'backend', 'Logo type'),
(405, 'backend', 'Logo class icon'),
(406, 'backend', 'Get icon here'),
(407, 'backend', 'Featured Image'),
(408, 'backend', 'Drop files anywhere to upload'),
(409, 'backend', 'or'),
(410, 'backend', 'Select Files'),
(411, 'backend', 'Icon'),
(412, 'backend', 'Image'),
(413, 'backend', 'Click here'),
(414, 'backend', 'Transaction History'),
(415, 'backend', 'Earnings'),
(416, 'backend', 'Your commission transaction for all orders'),
(418, 'backend', 'Create a Transaction'),
(419, 'backend', 'Adjustment'),
(420, 'backend', 'Date'),
(421, 'backend', 'Transaction'),
(422, 'backend', 'Debit/Credit'),
(423, 'backend', 'Running Balance'),
(424, 'backend', 'Credit'),
(425, 'backend', 'Debit'),
(426, 'backend', 'Payout'),
(427, 'backend', 'Cash In'),
(428, 'backend', 'All transactions'),
(429, 'backend', 'Statement'),
(430, 'backend', 'Total Balance'),
(431, 'backend', 'Merchant Earnings'),
(432, 'backend', 'Balance'),
(435, 'backend', 'Deactivate Merchant'),
(436, 'backend', 'You are about to deactivate this merchant, click confirm to continue?'),
(437, 'backend', 'Create adjustment'),
(438, 'backend', 'Transaction Description'),
(439, 'backend', 'Amount'),
(441, 'backend', 'Submit'),
(442, 'backend', 'Membership History'),
(445, 'backend', 'Refund'),
(446, 'backend', 'Total'),
(447, 'backend', 'Contact'),
(448, 'backend', 'Email'),
(449, 'backend', 'Member since'),
(450, 'backend', 'Activate Merchant'),
(451, 'backend', 'Merchant Info'),
(452, 'backend', 'Withdrawals'),
(453, 'backend', 'Unpaid'),
(454, 'backend', 'Paid'),
(455, 'backend', 'Total Unpaid'),
(456, 'backend', 'Total Paid'),
(457, 'backend', 'Payment status'),
(458, 'backend', 'Account number'),
(459, 'backend', 'Account name'),
(460, 'backend', 'Account type'),
(461, 'backend', 'Account currency'),
(462, 'backend', 'Routing number'),
(463, 'backend', 'Country'),
(464, 'backend', 'Account Holders Name'),
(465, 'backend', 'Bank Account Number/IBAN'),
(466, 'backend', 'SWIFT Code'),
(467, 'backend', 'Bank Name in Full'),
(468, 'backend', 'Bank Branch City'),
(469, 'backend', 'Date requested'),
(470, 'backend', 'Payment Method'),
(472, 'backend', 'offline payment'),
(473, 'backend', 'Emabled request payout'),
(474, 'backend', 'Payout request auto process'),
(475, 'backend', 'Payout number of days to process'),
(476, 'backend', 'number of days that payout will automatically process (this works only if payout auto process is enabled). count starts from the day of request of merchant'),
(477, 'backend', 'Payout minimum amount'),
(478, 'backend', 'Number of payouts'),
(479, 'backend', 'Number of payouts can request per month.'),
(480, 'backend', 'Template new payout request - for admin'),
(481, 'backend', 'Template Payout paid'),
(482, 'backend', 'Template Payout Cancel'),
(483, 'backend', 'Cuisine list'),
(484, 'backend', 'All Cuisine'),
(485, 'backend', 'Add Cuisine'),
(486, 'backend', 'Cuisine Name'),
(487, 'backend', 'Background Color Hex'),
(488, 'backend', 'Font Color Hex'),
(489, 'backend', '{{lang}} translation'),
(490, 'backend', 'Enter {{lang}} name here'),
(491, 'backend', 'Update Cuisine'),
(492, 'backend', 'Dishes list'),
(493, 'backend', 'Add Dishes'),
(494, 'backend', 'Dish Name'),
(495, 'backend', 'All Dishes'),
(496, 'backend', 'Update Dishes'),
(497, 'backend', 'Tags list'),
(498, 'backend', 'Tag Name'),
(499, 'backend', 'All Tags'),
(500, 'backend', 'Add Tags'),
(501, 'backend', 'Update Tags'),
(502, 'backend', 'Status list'),
(503, 'backend', 'Color Hex'),
(505, 'backend', 'Update Status'),
(506, 'backend', 'Status actions'),
(507, 'backend', 'ID'),
(508, 'backend', 'Action Type'),
(509, 'backend', 'Add actions'),
(510, 'backend', 'Update actions'),
(511, 'backend', 'Delete Confirmation'),
(512, 'backend', 'Are you sure you want to permanently delete the selected item?'),
(513, 'backend', 'Currency list'),
(514, 'backend', 'Default'),
(515, 'backend', 'All Currency'),
(516, 'backend', 'Add Currency'),
(517, 'backend', 'Set as Default'),
(518, 'backend', 'Currency'),
(519, 'backend', 'Position'),
(520, 'backend', 'Rate'),
(521, 'backend', '+ Exchange fee'),
(522, 'backend', 'Decimals'),
(523, 'backend', 'Decimal Separator'),
(524, 'backend', 'Thousand Separator'),
(525, 'backend', 'Please select'),
(526, 'backend', 'Left $11'),
(527, 'backend', 'Right 11$'),
(528, 'backend', 'Left with space $ 11'),
(529, 'backend', 'Right with space 11 $'),
(530, 'backend', 'Update Currency'),
(531, 'backend', 'Country List'),
(532, 'backend', 'Add Country'),
(533, 'backend', 'Phone Code'),
(534, 'backend', 'Code'),
(535, 'backend', 'Update Country'),
(536, 'backend', 'State List'),
(537, 'backend', 'City List'),
(538, 'backend', 'District/Area List'),
(539, 'backend', 'Sequence'),
(540, 'backend', 'Add State'),
(542, 'backend', 'State Name'),
(543, 'backend', 'All State'),
(544, 'backend', 'City'),
(545, 'backend', 'State'),
(546, 'backend', 'City Name'),
(547, 'backend', 'Postal Code/Zip code'),
(548, 'backend', 'Select State'),
(549, 'backend', 'Add City'),
(550, 'backend', 'All City'),
(551, 'backend', 'Area List'),
(552, 'backend', 'Area Name'),
(553, 'backend', 'Select City'),
(554, 'backend', 'Add Area'),
(555, 'backend', 'All Area'),
(556, 'backend', 'Zones list'),
(557, 'backend', 'Create Zones'),
(558, 'backend', 'Featured locations'),
(559, 'backend', 'All featured locations'),
(562, 'backend', 'Location name'),
(563, 'backend', 'Longitude'),
(564, 'backend', 'Featured name'),
(565, 'backend', 'Update featured locations'),
(566, 'backend', 'New Restaurant'),
(567, 'backend', 'Popular'),
(568, 'backend', 'Best Seller'),
(569, 'backend', 'Recommended'),
(570, 'backend', 'Pages list'),
(571, 'backend', 'All Pages'),
(572, 'backend', 'Add Page'),
(573, 'backend', 'Short Description'),
(574, 'backend', 'SEO'),
(575, 'backend', 'Meta Title'),
(576, 'backend', 'Meta description'),
(577, 'backend', 'Keywords'),
(578, 'backend', 'Update Page'),
(579, 'backend', 'Languages list'),
(580, 'backend', 'All Language'),
(581, 'backend', 'Add Language'),
(582, 'backend', 'Locale'),
(583, 'backend', 'Select Flag'),
(584, 'backend', 'RTL'),
(585, 'backend', 'Translation'),
(586, 'backend', 'Translation Key'),
(587, 'backend', 'Status Management list'),
(588, 'backend', 'Group'),
(589, 'backend', 'Group Name'),
(590, 'backend', 'Status Key'),
(591, 'backend', 'All Status'),
(592, 'backend', 'Add Status'),
(593, 'backend', 'Date Created. {{date_created}}'),
(594, 'backend', 'Services list'),
(595, 'backend', 'Service fee'),
(596, 'backend', 'All Services'),
(597, 'backend', 'Add Services'),
(598, 'backend', 'Update Services'),
(599, 'backend', 'All Type'),
(600, 'backend', 'Update Merchant Type'),
(601, 'backend', 'Commission Type'),
(602, 'backend', 'Commission based on Subtotal / Total'),
(603, 'backend', 'Commission'),
(604, 'backend', 'Add Merchant Type'),
(605, 'backend', 'Rejection Reason List'),
(606, 'backend', 'Reason'),
(607, 'backend', 'Add Rejection'),
(608, 'backend', 'Update Rejection'),
(609, 'backend', 'Pause Reason List'),
(610, 'backend', 'Add Pause reason'),
(611, 'backend', 'Update Pause reason'),
(612, 'backend', 'Status action List'),
(614, 'backend', 'Key must not have spaces'),
(616, 'backend', 'Update action status'),
(617, 'backend', 'Add action status'),
(618, 'backend', 'Coupon list'),
(619, 'backend', '#Used'),
(620, 'backend', 'All Coupon'),
(621, 'backend', 'Add Coupon'),
(622, 'backend', 'Coupon Type'),
(623, 'backend', 'Days Available'),
(625, 'backend', 'Min Order'),
(626, 'backend', 'Applicable to merchant'),
(627, 'backend', 'Expiration'),
(628, 'backend', 'Coupon Options'),
(629, 'backend', 'Coupon name'),
(630, 'backend', 'fixed amount'),
(631, 'backend', 'percentage'),
(632, 'backend', 'Unlimited for all user'),
(633, 'backend', 'Use only once'),
(634, 'backend', 'Once per user'),
(635, 'backend', 'Once for new user first order'),
(636, 'backend', 'Custom limit per user'),
(637, 'backend', 'Only to selected customer'),
(638, 'backend', 'Define max number of use'),
(639, 'backend', 'Select Customer'),
(640, 'backend', 'Email Provider'),
(641, 'backend', 'All Provider'),
(642, 'backend', 'Add Provider'),
(643, 'backend', 'Provider ID'),
(644, 'backend', 'Provider name'),
(645, 'backend', 'Sender email'),
(646, 'backend', 'Sender name'),
(648, 'backend', 'Update Provider'),
(649, 'backend', 'API KEY'),
(650, 'backend', 'Create your account [url]'),
(651, 'backend', 'SECRET KEY'),
(652, 'backend', 'SMTP host'),
(653, 'backend', 'SMTP port'),
(654, 'backend', 'Password'),
(655, 'backend', 'Secure Connection'),
(656, 'backend', 'TLS'),
(657, 'backend', 'SSL'),
(658, 'backend', 'normal'),
(659, 'backend', 'flash'),
(660, 'backend', 'unicode'),
(661, 'backend', 'ndnd'),
(662, 'backend', 'dnd'),
(663, 'backend', 'premium'),
(664, 'backend', 'lowcost'),
(665, 'backend', 'SMS'),
(666, 'backend', 'Push'),
(667, 'backend', 'All Templates'),
(668, 'backend', 'Add Template'),
(669, 'backend', 'Template name'),
(670, 'backend', 'Enabled Email'),
(671, 'backend', 'Enabled SMS'),
(672, 'backend', 'Enabled Push'),
(673, 'backend', 'Email Templates'),
(674, 'backend', 'SMS Templates'),
(675, 'backend', 'Push Templates'),
(676, 'backend', '{{lang}} Template'),
(677, 'backend', 'Enter {{lang}} Type here'),
(678, 'backend', 'Enter {{lang}} Subject here'),
(679, 'backend', 'Enter {{lang}} Title here'),
(680, 'backend', 'Enter {{lang}} Content here'),
(681, 'backend', 'Update Template'),
(682, 'backend', 'Email Logs'),
(684, 'backend', 'View SMS'),
(685, 'backend', 'Push logs'),
(686, 'backend', 'Platform'),
(687, 'backend', 'Message'),
(688, 'backend', 'Channel/Device'),
(689, 'backend', 'View Push'),
(690, 'backend', 'Customer list'),
(691, 'backend', 'All Customer'),
(692, 'backend', 'Add Customer'),
(694, 'backend', 'Update Customer'),
(695, 'backend', 'Basic Details'),
(696, 'backend', 'Order history'),
(697, 'backend', 'Address list'),
(700, 'backend', 'Places ID'),
(701, 'backend', 'Aparment, suite or floor'),
(702, 'backend', 'Add delivery instructions'),
(703, 'backend', 'Address label'),
(704, 'backend', 'Home'),
(705, 'backend', 'Work'),
(706, 'backend', 'School'),
(707, 'backend', 'Friend house'),
(708, 'backend', 'Other'),
(709, 'backend', 'Leave it at my door'),
(710, 'backend', 'Hand it to me'),
(711, 'backend', 'Meet outside'),
(712, 'backend', 'Order list'),
(713, 'backend', 'Phone'),
(714, 'backend', 'All Review'),
(715, 'backend', 'Update Review'),
(716, 'backend', 'Customer reviews'),
(718, 'backend', 'Customer. [customer_name]'),
(719, 'backend', 'Rating. [rating]'),
(720, 'backend', 'Date. [date_created]'),
(721, 'backend', 'Real time applications'),
(722, 'backend', 'Select Realtime Provider'),
(723, 'backend', 'Pusher App Id'),
(724, 'backend', 'Pusher Key'),
(725, 'backend', 'Pusher Secret'),
(726, 'backend', 'Pusher Cluster'),
(727, 'backend', 'Private API Key'),
(728, 'backend', 'Cluster ID'),
(730, 'backend', 'API secret'),
(731, 'backend', 'WebSocket API endpoint'),
(732, 'backend', 'signup and get your credentials in'),
(733, 'backend', 'Web push notifications'),
(734, 'backend', 'Select Web Push Provider'),
(735, 'backend', 'Instance ID'),
(736, 'backend', 'Primary key'),
(737, 'backend', 'SMS Provider List'),
(739, 'backend', 'Sender ID'),
(740, 'backend', 'API username'),
(741, 'backend', 'API password'),
(743, 'backend', 'Account SID'),
(744, 'backend', 'AUTH Token'),
(745, 'backend', 'Secret'),
(746, 'backend', 'Provider'),
(747, 'backend', 'SMS Logs'),
(748, 'backend', 'Total Registered'),
(749, 'backend', 'Commission Total'),
(750, 'backend', 'Membership Total'),
(751, 'backend', 'Total Active'),
(752, 'backend', 'Total Inactive'),
(753, 'backend', 'Membership Payment'),
(754, 'backend', 'Payment type'),
(755, 'backend', 'Merchant Sales Report'),
(756, 'backend', 'Order earnings report'),
(757, 'backend', 'Count'),
(758, 'backend', 'Admin earned'),
(759, 'backend', 'Merchant earned'),
(760, 'backend', 'Total sell'),
(762, 'backend', 'Subtotal'),
(764, 'backend', 'Admin commission'),
(765, 'backend', 'Refund Report'),
(766, 'backend', 'All Payment status'),
(767, 'backend', 'Payment reference# {{payment_reference}}'),
(768, 'backend', 'Refund on {{date}}'),
(769, 'backend', 'Full refund'),
(770, 'backend', 'Partial refund'),
(771, 'backend', 'All User'),
(772, 'backend', 'Role'),
(773, 'backend', 'Confirm New Password'),
(774, 'backend', 'Edit User'),
(775, 'backend', 'All Roles'),
(776, 'backend', 'Access'),
(777, 'backend', 'Add Role'),
(778, 'backend', 'Themes'),
(779, 'backend', 'Active theme'),
(780, 'backend', 'Customize'),
(781, 'backend', 'Organize your menu'),
(782, 'backend', 'Menu'),
(783, 'backend', 'Setting'),
(784, 'backend', 'Media Library'),
(785, 'backend', 'Media List'),
(786, 'backend', 'Delete File'),
(787, 'backend', 'Notification'),
(788, 'backend', 'Clear all'),
(789, 'backend', 'View all'),
(790, 'backend', 'Profile'),
(791, 'backend', 'Logout'),
(792, 'backend', 'Change Password'),
(793, 'backend', 'Web Notifications'),
(794, 'backend', 'Old Password'),
(795, 'backend', 'Notifications Settings'),
(797, 'backend', 'Select notification type'),
(798, 'backend', 'Order updates'),
(799, 'backend', 'Customer new signup'),
(800, 'backend', 'Merchant new signup'),
(801, 'backend', 'Payout request'),
(802, 'backend', 'All notifications'),
(803, 'backend', 'Order #'),
(804, 'backend', 'Restaurant'),
(806, 'backend', 'Delivery information'),
(807, 'backend', 'Get direction'),
(809, 'backend', 'Delivery Date/Time'),
(810, 'backend', 'Include utensils'),
(815, 'backend', 'Summary'),
(816, 'backend', 'Print'),
(817, 'backend', 'Contact customer'),
(819, 'backend', 'Cancel order'),
(820, 'backend', 'Timeline'),
(821, 'backend', 'Download PDF (A4)'),
(822, 'backend', 'Yes'),
(823, 'backend', 'Okay'),
(824, 'backend', 'Customer Info'),
(825, 'backend', 'Action'),
(826, 'backend', 'Customer ID'),
(827, 'backend', 'Addresses'),
(828, 'backend', 'Unblock Custome'),
(830, 'backend', 'Customer information not found'),
(831, 'backend', 'Are you sure you want to continue'),
(832, 'backend', 'Refund this item'),
(833, 'backend', 'This automatically remove this item from your active orders.'),
(834, 'backend', 'Go back'),
(836, 'backend', 'Remove this item'),
(837, 'backend', 'This will remove this item from your active orders.'),
(840, 'backend', 'Item is Out of Stock'),
(841, 'backend', 'Order decrease'),
(842, 'backend', 'Order Increase'),
(843, 'backend', 'By accepting this order, we will refund the amount of {{amount}} to customer.'),
(844, 'backend', 'Total amount for this order has increase, Send invoice to customer or less from your account with total amount of {{amount}}.'),
(847, 'backend', 'Send invoice'),
(848, 'backend', 'Less on my account'),
(849, 'backend', 'This order has unpaid invoice, until its paid you cannot change the order status.'),
(851, 'backend', 'How much additional time you need?'),
(852, 'backend', 'We\'ll notify the customer about the delay.'),
(854, 'backend', 'Enter why you cannot make this order.'),
(855, 'backend', 'Reject order'),
(856, 'backend', 'Are you sure you want to continue?'),
(857, 'backend', 'Delivery fee'),
(858, 'backend', 'Sub total ([count] items)'),
(859, 'backend', 'Courier tip'),
(860, 'backend', 'Dashboard'),
(862, 'backend', 'List'),
(863, 'backend', 'Sponsored'),
(864, 'backend', 'Users'),
(866, 'backend', 'All order'),
(867, 'backend', 'Order settings'),
(869, 'backend', 'Add User'),
(870, 'backend', 'Delete User'),
(871, 'backend', 'Membership'),
(872, 'backend', 'Plans'),
(873, 'backend', 'Add Plan'),
(874, 'backend', 'Delete Plan'),
(875, 'backend', 'Attributes'),
(880, 'backend', 'Pages'),
(881, 'backend', 'Languages'),
(882, 'backend', 'Buyers'),
(883, 'backend', 'Customers'),
(885, 'backend', 'Create Role'),
(886, 'backend', 'Update Role'),
(887, 'backend', 'Delete Role'),
(889, 'backend', 'Manage Location'),
(891, 'backend', 'Providers'),
(892, 'backend', 'Logs'),
(893, 'backend', 'Reports'),
(896, 'backend', 'Merchant Sales'),
(897, 'backend', 'Status Management'),
(899, 'backend', 'Information'),
(903, 'backend', 'Size'),
(904, 'backend', 'Ingredients'),
(905, 'backend', 'Cooking Reference'),
(906, 'backend', 'Food'),
(907, 'backend', 'Category'),
(908, 'backend', 'Addon Category'),
(909, 'backend', 'Addon Items'),
(910, 'backend', 'Items'),
(911, 'backend', 'Delivery'),
(913, 'backend', 'Coupon'),
(914, 'backend', 'Offers'),
(915, 'backend', 'Images'),
(916, 'backend', 'Account'),
(920, 'backend', 'BroadCast'),
(925, 'backend', 'Sales Report'),
(926, 'backend', 'Sales Summary'),
(927, 'backend', 'Pickup'),
(928, 'backend', 'Dinein'),
(929, 'backend', 'Gallery'),
(933, 'backend', 'Store Hours'),
(934, 'backend', 'Tracking Time'),
(935, 'backend', 'Add Store Hours'),
(936, 'backend', 'Update Store Hours'),
(937, 'backend', 'Delete Store Hours'),
(938, 'backend', 'View Order'),
(939, 'backend', 'Delete Order'),
(940, 'backend', 'Create Time Management'),
(941, 'backend', 'Update Time Management'),
(942, 'backend', 'Delete Time Management'),
(943, 'backend', 'Inventory Management'),
(944, 'backend', 'Suppliers'),
(945, 'backend', 'Time Slot'),
(946, 'backend', 'Create Time Slot'),
(947, 'backend', 'Update Time Slot'),
(948, 'backend', 'Delete Time Slot'),
(949, 'backend', 'Create Size'),
(950, 'backend', 'Update Size'),
(951, 'backend', 'Delete Size'),
(952, 'backend', 'Ingredients create'),
(953, 'backend', 'Payment gateway'),
(954, 'backend', 'All Payment'),
(956, 'backend', 'All payments'),
(957, 'backend', 'Archive'),
(959, 'backend', 'Rejection Reason'),
(962, 'backend', 'Transactions'),
(965, 'backend', 'Merchant withdrawals'),
(967, 'backend', 'Third Party App'),
(968, 'backend', 'Real time application'),
(969, 'backend', 'Web push notification'),
(971, 'backend', 'Scheduled'),
(973, 'backend', 'Zones'),
(974, 'backend', 'Pause order reason'),
(976, 'backend', 'Order earnings'),
(978, 'backend', 'POS'),
(979, 'backend', 'POS create order'),
(983, 'backend', 'Login &amp; Signup'),
(989, 'backend', 'Upload CSV'),
(990, 'backend', 'Add sponsored'),
(991, 'backend', 'Update sponsored'),
(993, 'backend', 'Print PDF'),
(996, 'backend', 'Update Gateway'),
(997, 'backend', 'Withdrawals Template'),
(998, 'backend', 'Cuisine create'),
(999, 'backend', 'Cuisine update'),
(1000, 'backend', 'Dishes create'),
(1001, 'backend', 'Dishes update'),
(1002, 'backend', 'Dishes delete'),
(1003, 'backend', 'Cuisine delete'),
(1004, 'backend', 'Tags create'),
(1005, 'backend', 'Tags update'),
(1006, 'backend', 'Tags delete'),
(1007, 'backend', 'Status create'),
(1008, 'backend', 'Status update'),
(1009, 'backend', 'Status delete'),
(1011, 'backend', 'Status actions create'),
(1012, 'backend', 'Status actions update'),
(1013, 'backend', 'Currency create'),
(1014, 'backend', 'Currency update'),
(1015, 'backend', 'Currency delete'),
(1016, 'backend', 'Country create'),
(1017, 'backend', 'Country update'),
(1020, 'backend', 'State create'),
(1021, 'backend', 'State update'),
(1022, 'backend', 'State delete'),
(1024, 'backend', 'City create'),
(1025, 'backend', 'City delete'),
(1027, 'backend', 'Area create'),
(1028, 'backend', 'Area update'),
(1029, 'backend', 'Area delete'),
(1030, 'backend', 'Zone create'),
(1031, 'backend', 'Zone update'),
(1032, 'backend', 'Zone delete'),
(1033, 'backend', 'Featured create'),
(1034, 'backend', 'Featured update'),
(1035, 'backend', 'Featured delete'),
(1036, 'backend', 'Pages create'),
(1037, 'backend', 'Pages update'),
(1038, 'backend', 'Pages delete'),
(1039, 'backend', 'Language create'),
(1040, 'backend', 'Language update'),
(1041, 'backend', 'Language delete'),
(1042, 'backend', 'Status Management create'),
(1043, 'backend', 'Status Management update'),
(1044, 'backend', 'Status Management delete'),
(1045, 'backend', 'Order type create'),
(1046, 'backend', 'Order type update'),
(1047, 'backend', 'Order type delete'),
(1048, 'backend', 'Merchant type create'),
(1049, 'backend', 'Merchant type update'),
(1050, 'backend', 'Merchant type delete'),
(1051, 'backend', 'Rejection reason create'),
(1052, 'backend', 'Rejection reason update'),
(1054, 'backend', 'Rejection reason delete'),
(1055, 'backend', 'Pause reason create'),
(1056, 'backend', 'Pause reason update'),
(1057, 'backend', 'Pause reason delete'),
(1058, 'backend', 'Status action create'),
(1059, 'backend', 'Status reason update'),
(1060, 'backend', 'Status reason delete'),
(1061, 'backend', 'Coupon create'),
(1062, 'backend', 'Coupon update'),
(1063, 'backend', 'Coupon delete'),
(1064, 'backend', 'Email Provider create'),
(1065, 'backend', 'Email Provider update'),
(1066, 'backend', 'Email Provider delete'),
(1067, 'backend', 'Templates create'),
(1068, 'backend', 'Templates update'),
(1069, 'backend', 'Templates delete'),
(1070, 'backend', 'Email Logs delete'),
(1071, 'backend', 'Push logs delete'),
(1072, 'backend', 'Customer create'),
(1073, 'backend', 'Customer update'),
(1074, 'backend', 'Customer delete'),
(1075, 'backend', 'Customer address'),
(1076, 'backend', 'Customer order history'),
(1077, 'backend', 'Address create'),
(1078, 'backend', 'Address delete'),
(1079, 'backend', 'Address update'),
(1080, 'backend', 'Review update'),
(1081, 'backend', 'Review delete'),
(1082, 'backend', 'SMS provider create'),
(1083, 'backend', 'SMS provider update'),
(1084, 'backend', 'SMS provider delete'),
(1085, 'backend', 'SMS delete logs'),
(1086, 'backend', 'Update User'),
(1088, 'backend', 'Taxes'),
(1089, 'backend', 'Social Settings'),
(1090, 'backend', 'Notification Settings'),
(1091, 'backend', 'Order limit create'),
(1092, 'backend', 'Order view PDF'),
(1093, 'backend', 'Ingredients update'),
(1094, 'backend', 'Cooking create'),
(1095, 'backend', 'Ingredients delete'),
(1096, 'backend', 'Cooking update'),
(1097, 'backend', 'Cooking delete'),
(1098, 'backend', 'Category create'),
(1099, 'backend', 'Category update'),
(1100, 'backend', 'Category delete'),
(1101, 'backend', 'Category availability'),
(1102, 'backend', 'Addon Category create'),
(1103, 'backend', 'Addon Category update'),
(1104, 'backend', 'Addon Category delete'),
(1105, 'backend', 'Addon Item create'),
(1106, 'backend', 'Addon Item update'),
(1107, 'backend', 'Addon Item delete'),
(1108, 'backend', 'Item create'),
(1109, 'backend', 'Item update'),
(1110, 'backend', 'Item delete'),
(1111, 'backend', 'Item price'),
(1112, 'backend', 'Item price delete'),
(1113, 'backend', 'Item price update'),
(1114, 'backend', 'Item addon'),
(1115, 'backend', 'Item addon create'),
(1116, 'backend', 'Item addon update'),
(1117, 'backend', 'Item addon delete'),
(1118, 'backend', 'Item attributes'),
(1119, 'backend', 'Item availability'),
(1120, 'backend', 'Item inventory'),
(1121, 'backend', 'Item promo'),
(1122, 'backend', 'Item promo create'),
(1123, 'backend', 'Item promo update'),
(1124, 'backend', 'Item promo delete'),
(1125, 'backend', 'Item gallery'),
(1126, 'backend', 'Item SEO'),
(1127, 'backend', 'Dynamic Rates'),
(1128, 'backend', 'Fixed Charge'),
(1129, 'backend', 'Pickup instructions'),
(1130, 'backend', 'Dinein instructions'),
(1132, 'backend', 'Offer create'),
(1133, 'backend', 'Offer update'),
(1134, 'backend', 'Offer delete'),
(1135, 'backend', 'Review reply'),
(1136, 'backend', 'User create'),
(1137, 'backend', 'User update'),
(1138, 'backend', 'User delete'),
(1139, 'backend', 'Role create'),
(1140, 'backend', 'Role update'),
(1141, 'backend', 'Role delete'),
(1142, 'backend', 'Supplier create'),
(1143, 'backend', 'Supplier update'),
(1144, 'backend', 'Supplier delete'),
(1145, 'backend', 'Website'),
(1146, 'backend', 'Theme'),
(1147, 'backend', 'Company'),
(1148, 'backend', 'Service'),
(1149, 'backend', 'Find a store'),
(1151, 'backend', 'Contact Us'),
(1152, 'backend', 'Categories'),
(1153, 'backend', 'Grocery'),
(1154, 'backend', 'Parcel Delivery'),
(1155, 'backend', 'Fast Food'),
(1157, 'backend', 'Privacy policy'),
(1158, 'backend', 'Dishes'),
(1159, 'backend', 'No notifications yet'),
(1160, 'backend', 'When you get notifications, they\'ll show up here'),
(1161, 'backend', 'active'),
(1162, 'backend', 'Total Cancel'),
(1163, 'backend', 'Sales this week'),
(1164, 'backend', 'Earning this week'),
(1165, 'backend', 'Your balance'),
(1166, 'backend', 'Today sales'),
(1167, 'backend', 'Today refund'),
(1168, 'backend', 'days ago'),
(1169, 'backend', 'Accepting Orders'),
(1170, 'backend', 'Update Information'),
(1171, 'backend', 'Basic Settings'),
(1172, 'backend', 'Orders Settings'),
(1173, 'backend', 'This will appear in your receipt'),
(1174, 'backend', 'Two Flavor Options'),
(1175, 'backend', 'Close Store'),
(1176, 'backend', 'Enabled Voucher'),
(1177, 'backend', 'Enabled Tips'),
(1178, 'backend', 'Default Tip'),
(1179, 'backend', 'Please select...'),
(1180, 'backend', 'Website address'),
(1181, 'backend', 'Tax number'),
(1182, 'backend', 'All Store Hours'),
(1184, 'backend', 'Open'),
(1185, 'backend', 'From'),
(1187, 'backend', 'Custom Message'),
(1188, 'backend', 'Tax enabled'),
(1189, 'backend', 'Tax on service fee'),
(1190, 'backend', 'Tax on delivery fee'),
(1191, 'backend', 'Tax on packaging fee'),
(1192, 'backend', 'Tax Type'),
(1193, 'backend', 'Standard'),
(1194, 'backend', 'Multiple tax'),
(1195, 'backend', 'Tax not in prices (prices does not include tax)'),
(1197, 'backend', 'Add new tax'),
(1198, 'backend', 'Tax name'),
(1199, 'backend', 'Rate %'),
(1200, 'backend', 'Default tax'),
(1201, 'backend', 'Facebook Page'),
(1202, 'backend', 'Twitter Page'),
(1203, 'backend', 'Google Page'),
(1204, 'backend', 'Merchant Mobile Alert'),
(1205, 'backend', 'Define how many minutes that order set to critical order and needs attentions.'),
(1206, 'backend', 'Critical minutes'),
(1207, 'backend', 'Define how many minutes that order will auto rejected.'),
(1208, 'backend', 'Reject order minutes'),
(1210, 'backend', 'Days/Time'),
(1211, 'backend', 'All Time'),
(1212, 'backend', 'Add Time Management'),
(1213, 'backend', 'Transaction Type'),
(1215, 'backend', 'Start Time'),
(1216, 'backend', 'End Time'),
(1217, 'backend', 'Number Order Allowed'),
(1219, 'backend', 'Status that will count the existing order, if empty will use all status.'),
(1220, 'backend', 'Orders as of today {{date}}'),
(1221, 'backend', 'How to manage orders'),
(1222, 'backend', 'Filter by order number or customer name'),
(1226, 'backend', 'Sort'),
(1227, 'backend', 'Order ID - Ascending'),
(1228, 'backend', 'Order ID - Descending'),
(1229, 'backend', 'Delivery Time - Ascending'),
(1230, 'backend', 'Delivery Time - Descending'),
(1231, 'backend', 'no results\''),
(1232, 'backend', 'Order Details will show here'),
(1233, 'backend', 'Not accepting orders'),
(1234, 'backend', 'Store pause for'),
(1235, 'backend', 'Store Pause'),
(1236, 'backend', 'Would you like to resume accepting orders?'),
(1237, 'backend', 'Pause New Orders'),
(1238, 'backend', 'How long you would like to pause new orders?'),
(1241, 'backend', 'Reason for pausing'),
(1242, 'backend', '{{mins}} min(s)'),
(1243, 'backend', '{{total}} results'),
(1244, 'backend', 'Discount'),
(1245, 'backend', 'Reset'),
(1246, 'backend', 'Proceed to pay'),
(1247, 'backend', 'Clear all items'),
(1248, 'backend', 'Have a promo code?'),
(1249, 'backend', 'Add promo code'),
(1250, 'backend', 'Apply'),
(1251, 'backend', 'Create Payment'),
(1252, 'backend', 'Total Due'),
(1253, 'backend', 'are you sure?'),
(1254, 'backend', 'Walk-in Customer'),
(1255, 'backend', 'Optional'),
(1256, 'backend', 'Special Instructions'),
(1257, 'backend', 'Add a note (extra cheese, no onions, etc.)'),
(1258, 'backend', 'If sold out'),
(1259, 'backend', 'Add to order'),
(1260, 'backend', 'Choose up to'),
(1261, 'backend', 'Select flavor'),
(1262, 'backend', 'Select 1'),
(1263, 'backend', 'POS Orders'),
(1264, 'backend', 'Size List'),
(1265, 'backend', 'Ingredients List'),
(1266, 'backend', 'All Size'),
(1267, 'backend', 'Add Size'),
(1268, 'backend', 'Size Name'),
(1269, 'backend', 'All Ingredients'),
(1270, 'backend', 'Add Ingredients'),
(1271, 'backend', 'Ingredients Name'),
(1272, 'backend', 'Update Ingredients'),
(1273, 'backend', 'Cooking Reference List'),
(1274, 'backend', 'All Cooking Reference'),
(1275, 'backend', 'Add Cooking Reference'),
(1276, 'backend', 'Update Cooking Reference'),
(1277, 'backend', 'Category List'),
(1278, 'backend', 'All Category'),
(1279, 'backend', 'Add Category'),
(1280, 'backend', 'Dish'),
(1281, 'backend', 'Update Category'),
(1282, 'backend', 'Availability'),
(1283, 'backend', 'Available at specified times'),
(1284, 'backend', 'Addon Category List'),
(1285, 'backend', 'All Addon Category'),
(1286, 'backend', 'Add Addon Category'),
(1287, 'backend', 'Update Addon Category'),
(1288, 'backend', 'monday'),
(1289, 'backend', 'tuesday'),
(1290, 'backend', 'wednesday'),
(1291, 'backend', 'thursday'),
(1292, 'backend', 'friday'),
(1293, 'backend', 'saturday'),
(1294, 'backend', 'sunday'),
(1295, 'backend', 'Addon Item List'),
(1296, 'backend', 'All Addon Item'),
(1297, 'backend', 'Add Addon Item'),
(1298, 'backend', 'AddOn Item'),
(1300, 'backend', 'Update Addon Item'),
(1301, 'backend', 'Item List'),
(1302, 'backend', 'All Item'),
(1303, 'backend', 'Add Item'),
(1304, 'backend', 'Long Description'),
(1306, 'backend', 'Select Unit'),
(1307, 'backend', 'Item Name'),
(1308, 'backend', 'Available'),
(1309, 'backend', 'Update Item'),
(1310, 'backend', 'Addon'),
(1311, 'backend', 'Inventory'),
(1312, 'backend', 'Sales Promotion'),
(1314, 'backend', 'Add Price'),
(1315, 'backend', 'Cost Price'),
(1316, 'backend', 'Discount Start'),
(1317, 'backend', 'Discount End'),
(1318, 'backend', 'Discount Type'),
(1319, 'backend', 'SKU'),
(1320, 'backend', 'Fixed'),
(1322, 'backend', 'Select Type'),
(1323, 'backend', 'Select Value'),
(1324, 'backend', 'Required'),
(1325, 'backend', 'No'),
(1326, 'backend', 'multiple'),
(1327, 'backend', 'All Addon'),
(1330, 'backend', 'Pre-selected'),
(1331, 'backend', 'Select Item Price'),
(1332, 'backend', 'Can Select Only One'),
(1333, 'backend', 'Can Select Multiple'),
(1334, 'backend', 'Two Flavors'),
(1335, 'backend', 'Custom'),
(1336, 'backend', 'Enabled Points'),
(1337, 'backend', 'Enabled Packaging Incrementals'),
(1338, 'backend', 'Cooking Reference Mandatory'),
(1339, 'backend', 'Points earned'),
(1340, 'backend', 'Packaging fee'),
(1341, 'backend', 'Delivery options'),
(1342, 'backend', 'Select vehicle type for this item can be used for delivery'),
(1343, 'backend', 'Not for sale'),
(1344, 'backend', 'Track Stock'),
(1345, 'backend', 'Supplier'),
(1346, 'backend', 'Select Supplier'),
(1347, 'backend', 'Add Item Promo'),
(1348, 'backend', 'Buy (qty)'),
(1349, 'backend', 'Get (qty'),
(1350, 'backend', 'Select Item'),
(1351, 'backend', 'Buy (qty) to get the (qty) item free'),
(1352, 'backend', 'Buy (qty) and get 1 at (percen)% off'),
(1353, 'backend', 'Promo Type'),
(1355, 'backend', 'Gallery Image'),
(1356, 'backend', 'Enabled Opt in for no contact delivery'),
(1357, 'backend', 'Free Delivery On First Order'),
(1358, 'backend', 'Delivery Charge Type'),
(1359, 'backend', 'Standard delivery fee'),
(1360, 'backend', 'Delivery Settings'),
(1361, 'backend', 'Delivery estimation'),
(1362, 'backend', 'in minutes example 10-20mins'),
(1363, 'backend', 'Minimum Order'),
(1364, 'backend', 'Maximum Order'),
(1365, 'backend', 'Pickup estimation'),
(1366, 'backend', 'Instructions'),
(1367, 'backend', 'Customer Pickup Instructions'),
(1368, 'backend', 'Describe how a customer will pickup their order when they arrive to your store. Instructions will be displayed on a customer\'s order status page.'),
(1369, 'backend', 'Dinein estimation'),
(1370, 'backend', 'Customer Dinein Instructions'),
(1371, 'backend', 'Describe how customer will dinein in your restaurant. Instructions will be displayed on a customer\'s order status page'),
(1372, 'backend', 'Page not found'),
(1373, 'backend', 'This page is not available in your account.'),
(1374, 'backend', 'Update Coupon'),
(1375, 'backend', 'Offers list'),
(1376, 'backend', 'Valid'),
(1377, 'backend', 'All Offers'),
(1378, 'backend', 'Add Offers'),
(1379, 'backend', 'Offer Percentage'),
(1380, 'backend', 'Orders Over'),
(1381, 'backend', 'Valid From'),
(1382, 'backend', 'Valid To'),
(1383, 'backend', 'Applicable to'),
(1384, 'backend', 'Gallery list'),
(1385, 'backend', 'Your sales, cash in and referral earnings'),
(1386, 'backend', 'Available Balance'),
(1388, 'backend', 'Request Payout'),
(1389, 'backend', 'Add to your balance'),
(1390, 'backend', 'Minimum amount'),
(1391, 'backend', 'how much do you want to add to your account?'),
(1392, 'backend', 'Enter top up amount'),
(1394, 'backend', 'Continue'),
(1395, 'backend', 'Minimum amount {{amonut}}'),
(1396, 'backend', 'Adjustment commission order #{{order_id}}'),
(1397, 'backend', 'Refund commission order #{{order_id}}'),
(1398, 'backend', 'Commission on order #{{order_id}}'),
(1399, 'backend', 'Sales on order #{{order_id}}'),
(1400, 'backend', 'Payment to order #{{order_id}}'),
(1401, 'backend', 'Payout to {{account}}'),
(1402, 'backend', 'Payout History'),
(1404, 'backend', 'Payout account'),
(1406, 'backend', 'Set Account'),
(1407, 'backend', 'Date Processed'),
(1408, 'backend', 'Set your default payout account'),
(1410, 'backend', 'Individual'),
(1411, 'backend', 'Account information'),
(1412, 'backend', 'Bank Account Holders Name'),
(1413, 'backend', 'Reply'),
(1414, 'backend', 'Customer review'),
(1415, 'backend', 'Your Reply'),
(1416, 'backend', 'Comments ([number_comments])'),
(1417, 'backend', 'Date Created. [date_created]'),
(1418, 'backend', 'User List'),
(1419, 'backend', 'Sales Summary Report'),
(1420, 'backend', 'Average price'),
(1421, 'backend', 'Total qty sold'),
(1423, 'backend', 'Sales chart'),
(1424, 'backend', 'All Items'),
(1425, 'backend', 'Supplier List'),
(1426, 'backend', 'Contacts'),
(1427, 'backend', 'Add Supplier'),
(1428, 'backend', 'Phone Number'),
(1429, 'backend', 'Address 1'),
(1430, 'backend', 'Address 2'),
(1431, 'backend', 'Postal/zip code'),
(1432, 'backend', 'Region'),
(1433, 'backend', 'Notes'),
(1434, 'backend', 'Supplier Name'),
(1435, 'backend', 'Archive Order List'),
(1436, 'backend', 'Order has the same status'),
(1437, 'backend', 'Status Updated'),
(1438, 'backend', 'Amount to refund cannot be less than 0'),
(1439, 'backend', 'You don\'t have enough balance in your account. please load your account to process this order.'),
(1440, 'backend', 'Amount to less cannot be less than 0'),
(1441, 'backend', 'Less on account'),
(1445, 'backend', 'Status not found'),
(1447, 'backend', 'Order is cancelled'),
(1448, 'backend', 'Order is delayed by [mins]min(s)'),
(1449, 'backend', 'Customer is notified about the delayed.'),
(1450, 'backend', 'Item row not found'),
(1451, 'backend', 'Succesful'),
(1452, 'backend', 'Additional charge must be greater than zero'),
(1453, 'backend', 'Item added to order'),
(1454, 'backend', 'Customer name is requied'),
(1455, 'backend', 'Customer contact number is requied'),
(1456, 'backend', 'Delivery address is requied'),
(1457, 'backend', 'Delivery coordinates is requied'),
(1459, 'backend', 'Order Information updated'),
(1460, 'backend', 'Client information not found'),
(1461, 'backend', 'Invalid email address'),
(1462, 'backend', 'Account number is required'),
(1463, 'backend', 'Account name is required'),
(1464, 'backend', 'Bank name is required'),
(1465, 'backend', 'Swift code is required'),
(1466, 'backend', 'Country is required'),
(1467, 'backend', 'Payout account saved'),
(1468, 'backend', 'Payout request successfully logged'),
(1470, 'backend', 'Setting saved'),
(1471, 'backend', 'Tax not found'),
(1473, 'backend', 'No item solds yet'),
(1474, 'backend', 'You don\'t have customer yet'),
(1475, 'backend', 'You don\'t have sales yet'),
(1477, 'backend', 'Voucher code not found'),
(1478, 'backend', 'Customer succesfully created'),
(1479, 'backend', 'Order created by {{merchant_user}}'),
(1482, 'backend', 'Record not found'),
(1483, 'backend', 'Merchant not found'),
(1484, 'backend', 'Payout status set to paid'),
(1485, 'backend', 'Transaction not found'),
(1486, 'backend', 'Payout cancelled'),
(1487, 'backend', 'Payout will process in a minute or two'),
(1488, 'backend', 'device updated'),
(1489, 'backend', 'user device not found'),
(1494, 'backend', 'No recent payout request'),
(1495, 'backend', 'Sort menu saved'),
(1496, 'backend', 'Invalid ID'),
(1497, 'backend', 'View'),
(1500, 'backend', 'History'),
(1501, 'backend', 'Manage Plan'),
(1502, 'backend', 'Avatar'),
(1503, 'backend', 'Order#{{order_id}} from {{customer_name}}'),
(1504, 'backend', 'Your order #{{order_id}} is accepted by {{restaurant_name}}'),
(1505, 'backend', 'Go with merchant recommendation'),
(1506, 'backend', 'Contact me'),
(1507, 'backend', 'Cancel the entire order'),
(1508, 'backend', 'Order Details'),
(1509, 'backend', 'Merchant - information'),
(1510, 'backend', 'Merchant - login'),
(1514, 'backend', 'Merchant - Payment history'),
(1517, 'backend', 'View Order #[order_id]'),
(1519, 'backend', 'Cancel Orders'),
(1524, 'backend', 'Update Offers'),
(1530, 'backend', 'Printing Options'),
(1534, 'backend', 'Security'),
(1535, 'backend', 'Menu Options'),
(1538, 'backend', 'Booking'),
(1541, 'backend', 'Update Language'),
(1545, 'backend', 'Add featured locations'),
(1546, 'backend', 'Succesfully updated'),
(1547, 'backend', 'This field is required'),
(1549, 'backend', 'Initial Password must be repeated exactly.'),
(1550, 'backend', 'Email address already exist.'),
(1551, 'backend', '{value}\" has already been taken.'),
(1552, 'backend', '{value}\" has already been added.'),
(1553, 'backend', '{attribute} is not a valid URL.'),
(1554, 'backend', 'This field must be a number.'),
(1555, 'backend', '{attribute} is too small (minimum is {min}).'),
(1556, 'backend', '{attribute} is too big (maximum is {max}).'),
(1557, 'backend', 'this field must be time example hh:mm.'),
(1560, 'backend', 'Succesfully created'),
(1561, 'backend', 'Settings saved');
INSERT INTO `st_sourcemessage` (`id`, `category`, `message`) VALUES
(1562, 'backend', 'Failed cannot update'),
(1563, 'backend', 'Failed cannot save'),
(1564, 'backend', 'The file was larger than 10MB. Please upload a smaller file.'),
(1565, 'backend', 'The file \"{file}\" cannot be uploaded. Only files with these extensions are allowed: {extensions}.'),
(1566, 'backend', 'This field cannot be blank.'),
(1567, 'backend', 'New Password must be repeated exactly'),
(1568, 'backend', 'this field is too short (minimum is {min} characters).'),
(1569, 'backend', 'this field is too long (maximum is {max} characters).'),
(1570, 'backend', 'Record not found.'),
(1572, 'backend', 'Please correct the forms'),
(1573, 'backend', 'You are not authorized to perform this action'),
(1574, 'backend', 'This field is not a valid URL'),
(1575, 'backend', 'Front Translation'),
(1576, 'front', 'Let\'s find best food for you'),
(1577, 'front', 'Enter delivery address'),
(1578, 'front', 'Cuisine type'),
(1579, 'front', 'No Minimum Order'),
(1580, 'front', 'Order in for yourself or for the group, with no restrictions on order value'),
(1581, 'front', 'Live Order Tracking'),
(1582, 'front', 'Know where your order is at all times, from the restaurant to your doorstep'),
(1583, 'front', 'Lightning-Fast Delivery'),
(1584, 'front', 'Experience karenderia superfast delivery for food delivered fresh & on time'),
(1585, 'front', 'Best promotions in your area'),
(1586, 'front', 'Rising stars restaurants'),
(1587, 'front', 'Fastest delivery for you!'),
(1588, 'front', 'Party night?'),
(1589, 'front', 'Popular nearby'),
(1590, 'front', 'Up to'),
(1591, 'front', 'Try something'),
(1592, 'front', 'Best quick'),
(1593, 'front', 'Maybe'),
(1594, 'front', 'New'),
(1595, 'front', 'Lunch'),
(1596, 'front', 'Snacks?'),
(1597, 'front', 'Check'),
(1598, 'front', 'New restaurant'),
(1599, 'front', 'Are you a restaurant owner?'),
(1600, 'front', 'Join us and reach new customers'),
(1601, 'front', 'Just a few steps to join our family'),
(1602, 'front', 'Join'),
(1603, 'front', 'Best restaurants'),
(1604, 'front', 'In your pocket'),
(1606, 'front', 'Download'),
(1607, 'front', 'K mobile app'),
(1608, 'front', 'Order from your favorite restaurants & track on the go, with the all-new K app.'),
(1609, 'front', 'Website'),
(1610, 'front', 'Cart'),
(1611, 'front', 'Sign in'),
(1612, 'front', 'You don\'t have any orders here!'),
(1613, 'front', 'let\'s change that!'),
(1614, 'front', 'Login'),
(1615, 'front', 'Remember me'),
(1616, 'front', 'Forgot password?'),
(1617, 'front', 'Mobile number or email'),
(1618, 'front', 'Password'),
(1619, 'front', 'Don\'t have an account?'),
(1620, 'front', 'Sign Up'),
(1621, 'front', 'User cancelled login or did not fully authorize.'),
(1622, 'front', 'Login with Facebook'),
(1624, 'front', 'Login with Google'),
(1625, 'front', 'Let\'s get started'),
(1626, 'front', 'Enter your phone number'),
(1627, 'front', 'Next'),
(1628, 'front', 'Have an account?'),
(1629, 'front', 'Enter the code sent to'),
(1630, 'front', 'Resend Code'),
(1631, 'front', 'Resend Code in'),
(1633, 'front', 'Fill your information'),
(1634, 'front', 'First name'),
(1635, 'front', 'Last name'),
(1636, 'front', 'Email address'),
(1638, 'front', 'Confirm Password'),
(1639, 'front', 'Submit'),
(1640, 'front', 'Clear all'),
(1641, 'front', 'Filter'),
(1642, 'front', 'Over'),
(1643, 'front', 'Free delivery'),
(1644, 'front', 'end of result'),
(1645, 'front', 'Fastest delivery in'),
(1646, 'front', 'Receive food in less than 20 minutes'),
(1647, 'front', 'Sorry! We\'re not there yet'),
(1648, 'front', 'We\'re working hard to expand our area. However, we\'re not in this location yet. So sorry about this, we\'d still love to have you as a customer.'),
(1649, 'front', 'Try something new in'),
(1650, 'front', 'Most popular'),
(1651, 'front', 'Rating'),
(1652, 'front', 'Promo'),
(1653, 'front', 'Free delivery first order'),
(1654, 'front', 'Price range'),
(1655, 'front', 'Cuisines'),
(1656, 'front', 'Max Delivery Fee'),
(1657, 'front', 'Delivery Fee'),
(1658, 'front', 'Ratings'),
(1659, 'front', 'Search'),
(1660, 'front', 'Now'),
(1661, 'front', 'No default map provider, check your settings.'),
(1662, 'front', 'No results'),
(1663, 'front', 'Invalid file'),
(1664, 'front', 'Record not found'),
(1665, 'front', 'invalid error'),
(1666, 'front', 'You already added review for this order'),
(1667, 'front', 'Login successful'),
(1668, 'front', 'Please wait until we redirect you'),
(1669, 'front', 'Registration successful'),
(1670, 'front', 'Discount {{discount}}%'),
(1671, 'front', 'Pin location is too far from the address'),
(1672, 'front', 'User not login or session has expired'),
(1673, 'front', 'We sent a code to {{email_address}}.'),
(1674, 'front', 'Your verification code is {{code}}'),
(1676, 'front', 'Your session has expired please relogin'),
(1677, 'front', 'Invalid 6 digit code'),
(1678, 'front', 'Succesfull change contact number'),
(1679, 'front', 'Voucher code not found'),
(1680, 'front', 'Payment provider not found'),
(1681, 'front', 'This store is close right now, but you can schedulean order later.'),
(1682, 'front', 'Your Order has been place'),
(1683, 'front', 'Your order from'),
(1684, 'front', 'Summary'),
(1685, 'front', 'Track'),
(1686, 'front', 'Buy again'),
(1687, 'front', 'Customer cancel this order'),
(1688, 'front', 'Your order is now cancel. your refund is on its way.'),
(1689, 'front', 'Your order is now cancel. your partial refund is on its way.'),
(1690, 'front', 'This order has already been cancelled'),
(1691, 'front', 'Customer cancell this order'),
(1692, 'front', 'Your order is now cancel.'),
(1693, 'front', 'not login'),
(1694, 'front', 'You must login to save this store'),
(1695, 'front', 'Merchant has not set time opening yet'),
(1696, 'front', 'Phone number already exist'),
(1697, 'front', 'Accout not verified'),
(1698, 'front', 'Your account is {{status}}'),
(1699, 'front', 'Check {{email_address}} for an email to reset your password.'),
(1700, 'front', 'Your account is either inactive or not verified.'),
(1701, 'front', 'No email address found in our records. please verify your email.'),
(1703, 'front', 'Your password is now updated.'),
(1704, 'front', 'You have already existing request.'),
(1706, 'front', 'Invalid file extension'),
(1707, 'front', 'Invalid file size, allowed size are {{size}}'),
(1708, 'front', 'Failed cannot upload file.'),
(1709, 'front', 'Profile photo saved'),
(1710, 'front', 'Invalid data'),
(1711, 'front', 'File not found'),
(1712, 'front', 'ID is empty'),
(1714, 'front', 'Payment not found'),
(1715, 'front', '{{count}} store'),
(1716, 'front', '{{count}} stores'),
(1717, 'front', 'low cost restaurant'),
(1718, 'front', '{{review_count}} reviews'),
(1719, 'front', 'Save store'),
(1720, 'front', 'Saved'),
(1721, 'front', 'Enter your address'),
(1722, 'front', 'Gallery'),
(1723, 'front', 'Reviews'),
(1724, 'front', 'Based on'),
(1726, 'front', 'Load more'),
(1727, 'front', 'Few words about {{restaurant_name}}'),
(1728, 'front', 'Address'),
(1729, 'front', 'Get direction'),
(1730, 'front', 'Opening hours'),
(1731, 'front', 'Add to cart'),
(1732, 'front', 'Menu'),
(1735, 'front', 'Clear'),
(1736, 'front', 'Place Order'),
(1737, 'front', 'Checkout'),
(1738, 'front', 'Delivery details'),
(1739, 'front', 'Change address'),
(1740, 'front', 'Pick a time'),
(1741, 'front', 'Schedule for later'),
(1742, 'front', 'Done'),
(1743, 'front', 'Save'),
(1744, 'front', 'Optional'),
(1745, 'front', 'Special Instructions'),
(1746, 'front', 'Add a note (extra cheese, no onions, etc.)'),
(1747, 'front', 'If sold out'),
(1748, 'front', 'Go with merchant recommendation'),
(1749, 'front', 'Refund this item'),
(1750, 'front', 'Contact me'),
(1751, 'front', 'Cancel the entire order'),
(1752, 'front', 'Select 1'),
(1753, 'front', 'Choose up to'),
(1754, 'front', 'Select flavor'),
(1755, 'front', 'Required'),
(1756, 'front', 'monday'),
(1757, 'front', 'tuesday'),
(1758, 'front', 'wednesday'),
(1759, 'front', 'thursday'),
(1760, 'front', 'friday'),
(1761, 'front', 'saturday'),
(1762, 'front', 'sunday'),
(1763, 'front', 'You\'re out of range'),
(1764, 'front', 'This restaurant cannot deliver to'),
(1768, 'front', 'We\'ll confirm that you can have this restaurant delivered.'),
(1769, 'front', 'add Address'),
(1770, 'front', 'Delivery Address'),
(1772, 'front', 'Store is close'),
(1774, 'front', 'Schedule Order'),
(1775, 'front', 'min'),
(1776, 'front', 'Cooking Reference'),
(1777, 'front', 'Ingredients'),
(1778, 'front', 'Order type and time'),
(1779, 'front', 'Include utensils and condoments'),
(1780, 'front', 'Tip the courier'),
(1781, 'front', 'Optional tip for the courier'),
(1782, 'front', 'People also ordered'),
(1783, 'front', 'Choose a delivery address'),
(1784, 'front', 'Add new address'),
(1785, 'front', 'Payment Methods'),
(1786, 'front', 'Saved Payment Methods'),
(1787, 'front', 'Sub total'),
(1788, 'front', 'Service fee'),
(1789, 'front', 'Courier tip'),
(1790, 'front', 'Total'),
(1791, 'front', 'Add New Payment Method'),
(1792, 'front', 'Promotion available'),
(1793, 'front', '{{tax_name}} {{tax}}%'),
(1794, 'front', '{{tax_name}} ({{tax}}% included)'),
(1795, 'front', 'Packaging fee'),
(1797, 'front', 'minimum order is {{minimum_order}}'),
(1798, 'front', 'maximum order is {{maximum_order}}'),
(1800, 'front', 'This restaurant cannot deliver to your location.'),
(1801, 'front', 'Back to Menu'),
(1802, 'front', 'Confirming your order'),
(1803, 'front', 'Write A Review'),
(1804, 'front', 'What did you like?'),
(1805, 'front', 'What did you not like?'),
(1806, 'front', 'Add Photos'),
(1807, 'front', 'Write your review'),
(1808, 'front', 'post review as anonymous'),
(1809, 'front', 'Your review helps us to make better choices'),
(1810, 'front', 'Drop files here to upload'),
(1811, 'front', 'Add Review'),
(1812, 'front', 'Maximum files exceeded'),
(1813, 'front', 'Your browser does not support drag\'n\'drop file uploads.'),
(1814, 'front', 'Please use the fallback form below to upload your files like in the olden days.'),
(1815, 'front', 'File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.w'),
(1816, 'front', 'You can\'t upload files of this type.'),
(1817, 'front', 'Server responded with {{statusCode}} code.'),
(1818, 'front', 'Cancel upload'),
(1819, 'front', 'Are you sure you want to cancel this upload?'),
(1820, 'front', 'Remove file'),
(1821, 'front', 'You can not upload any more files.'),
(1822, 'front', 'HOWS WAS YOUR ORDER?'),
(1823, 'front', 'let us know how your delivery wen and how you liked your order!'),
(1824, 'front', 'Rate Your Order'),
(1825, 'front', 'UPON ARRIVAL'),
(1826, 'front', 'Order #'),
(1827, 'front', 'Subtotal'),
(1828, 'front', 'Preparing your order'),
(1829, 'front', '{{restaurant_name}} is preparing your  order.'),
(1830, 'front', 'Your order is ready'),
(1831, 'front', 'Your order is ready to pickup by driver.'),
(1832, 'front', 'Pickup your order'),
(1833, 'front', 'Your order is ready. Time to go to {{restaurant_name}} to pickup your order.'),
(1835, 'front', 'Your order is ready. Time to go to {{restaurant_name}} to eat your order.'),
(1836, 'front', 'Heading to you'),
(1837, 'front', 'Your delivery guy is heading to you with your order.'),
(1838, 'front', 'Order Complete'),
(1839, 'front', 'Your order is completed. Enjoy!'),
(1840, 'front', 'Order cancelled'),
(1841, 'front', 'Unfortunately, the restaurant is not able to complete this order due to the following reason: {{rejetion_reason}}'),
(1842, 'front', 'Order rejected'),
(1845, 'front', 'Your order failed to complete'),
(1846, 'front', 'Unfortunately, the restaurant is not able to complete your order.'),
(1847, 'front', 'We sent your order to {{restaurant_name}} for final confirmation.'),
(1848, 'front', 'Notification'),
(1849, 'front', 'View all'),
(1850, 'front', 'All notifications'),
(1851, 'front', 'end of results'),
(1852, 'front', 'Manage my account'),
(1853, 'front', 'Orders'),
(1854, 'front', 'Addresses'),
(1855, 'front', 'Payments'),
(1856, 'front', 'Saved Stores'),
(1857, 'front', 'Order#{{order_id}} from {{customer_name}}'),
(1858, 'front', 'Your order #{{order_id}} is accepted by {{restaurant_name}}'),
(1859, 'front', 'days ago'),
(1860, 'front', 'day'),
(1861, 'front', 'days'),
(1862, 'front', 'ago'),
(1863, 'front', 'Profile'),
(1864, 'front', 'Basic Details'),
(1865, 'front', 'Change Password'),
(1866, 'front', 'Notifications'),
(1867, 'front', 'Manage Account'),
(1868, 'front', 'For your security, we want to make sure it\'s really you.'),
(1869, 'front', 'Enter 6-digit code'),
(1872, 'front', 'Code'),
(1873, 'front', 'Confirm account deletion'),
(1874, 'front', '(\"Are you sure you want to delete your account and customer data from {{site_title}}?{{new_line}} This action is permanent and cannot be undone.'),
(1875, 'front', 'Delete Account'),
(1876, 'front', 'Don\'t Delete'),
(1877, 'front', 'Okay'),
(1878, 'front', '2-Step Verification'),
(1879, 'front', 'Profile updated'),
(1880, 'front', 'Old password'),
(1881, 'front', 'New password'),
(1882, 'front', 'Notifications Settings'),
(1883, 'front', 'Enabled'),
(1884, 'front', 'Communication preferences'),
(1885, 'front', 'Could not get device interests'),
(1886, 'front', 'notifications enabled'),
(1887, 'front', 'notifications disabled'),
(1888, 'front', 'Could not stop Beams SDK'),
(1889, 'front', 'Could not start Beams SDK'),
(1890, 'front', 'Notification type save'),
(1891, 'front', 'Could not set device interests'),
(1893, 'front', 'Select only the marketing messages you would like to receive from {{settings.site_name}}. You will still receive transactional emails including but not limited to information about your account and certain other updates such as those related to safety and privacy.'),
(1895, 'front', 'Account Data'),
(1896, 'front', 'You can request an archive of your personal information. We\'ll notify you when it\'s ready to download.'),
(1897, 'front', 'Request archive'),
(1898, 'front', 'We received your data request'),
(1899, 'front', 'we\'ll send your data as soon as we can. this process may take a few days. You will receive an email once your data is ready.'),
(1901, 'front', 'You can request to have your account deleted and personal information removed. If you have both a DoorDash and Caviar account, then the information associated with both will be affected to the extent we can identify that the accounts are owned by the same user.'),
(1902, 'front', 'Your account is being deleted'),
(1903, 'front', 'You will be automatically logged out. Your account will be deleted in the next few minutes.'),
(1904, 'front', 'Note: We may retain some information when permitted by law.'),
(1905, 'front', 'Search order'),
(1910, 'front', 'Sorry we cannot find what your looking for'),
(1911, 'front', 'Order now'),
(1912, 'front', 'We like each other'),
(1913, 'front', 'Let\'s not change this!'),
(1914, 'front', 'Orders Qty'),
(1915, 'front', 'Total amount'),
(1916, 'front', 'Place on'),
(1917, 'front', 'View'),
(1920, 'front', 'Download PDF'),
(1921, 'front', 'Cancel order'),
(1924, 'front', 'Refund Issued'),
(1925, 'front', 'Date issued'),
(1926, 'front', 'Issued to'),
(1927, 'front', 'Amount'),
(1928, 'front', 'Description'),
(1929, 'front', 'Replacement'),
(1931, 'front', 'Don\'t cancel'),
(1932, 'front', 'How would you like to proceed?'),
(1933, 'front', 'Are you sure?'),
(1934, 'front', 'Order #{{order_id}}'),
(1935, 'front', '{{total}} item'),
(1936, 'front', '{{total}} items'),
(1937, 'front', 'Sub total ({{count}} items)'),
(1938, 'front', 'Place on {{date}}'),
(1939, 'front', 'Payment by {{payment_name}}'),
(1940, 'front', 'Go to checkout'),
(1941, 'front', 'Your cart from'),
(1942, 'front', 'Your order has not been accepted so there is no charge to cancel. Your payment will be refunded to your account.'),
(1943, 'front', 'Your total refund will be {{amount}}'),
(1944, 'front', 'Your driver is already on their way to pick up your order, so we can only refund the subtotal and tax'),
(1946, 'front', 'The store has started preparing this order so we can only refund the delivery charges and driver tip'),
(1947, 'front', 'Store has confirmed order and a driver has been assigned, so we cannot cancel this order'),
(1948, 'front', 'Refund is not available for this order'),
(1949, 'front', 'Your order has not been accepted so there is no charge to cancel, click cancel order to proceed'),
(1950, 'front', 'The driver has already on the way to pickup your order so we cannot cannot cancel this order'),
(1951, 'front', 'The restaurant has started preparing this order so we cannot cancel this order'),
(1953, 'front', 'this order has no items available'),
(1954, 'front', 'order not found'),
(1955, 'front', 'Discount {{discount}}'),
(1957, 'front', 'Item refund for {{item_name}}'),
(1958, 'front', 'Item out of stock for {{item_name}}'),
(1959, 'front', 'Cannot cancel this order, this order has existing refund.'),
(1960, 'front', 'transaction not found'),
(1961, 'front', 'No invoice payment found'),
(1962, 'front', 'no payment has found'),
(1963, 'front', 'Wow, man of many places :)'),
(1964, 'front', 'No address, lets change that!'),
(1967, 'front', 'Adjust pin'),
(1968, 'front', 'Delivery options'),
(1969, 'front', 'Add delivery instructions'),
(1970, 'front', 'eg. ring the bell after dropoff, leave next to the porch, call upon arrival, etc'),
(1971, 'front', 'Address label'),
(1973, 'front', 'Cancel'),
(1974, 'front', 'Aparment, suite or floor'),
(1976, 'front', 'Confirm'),
(1977, 'front', 'Yes'),
(1978, 'front', 'Are you sure you want to continue?'),
(1979, 'front', 'Complete Address'),
(1980, 'front', 'Edit'),
(1981, 'front', 'Delete'),
(1982, 'front', 'Address details'),
(1984, 'front', 'Home'),
(1985, 'front', 'Work'),
(1986, 'front', 'School'),
(1987, 'front', 'Friend house'),
(1988, 'front', 'Other'),
(1989, 'front', 'Payment'),
(1990, 'front', 'You can add your payment info here'),
(1991, 'front', 'Add new payment'),
(1992, 'front', 'Close Payment'),
(1993, 'front', 'Set Default'),
(1995, 'front', 'Your collection of restaurant and foods'),
(1996, 'front', 'You don\'t have any save stores here!'),
(1997, 'front', 'My orders'),
(1998, 'front', 'Payments Options'),
(1999, 'front', 'Logout'),
(2003, 'front', 'You\'ll be contacted soon!'),
(2004, 'front', '{{website_title}} needs to be contact you for more information. You can expect a phone call or email in 1-3 business days'),
(2005, 'front', 'THANKS FOR LOADING'),
(2006, 'front', 'Payment successful.'),
(2007, 'front', 'check your account statements account.'),
(2008, 'front', 'Go to statement'),
(2009, 'front', 'Cash In'),
(2010, 'front', 'Cash In Amount'),
(2011, 'front', 'Continue'),
(2012, 'front', 'Confirm cash in'),
(2013, 'front', 'Cash in amount {{amount}}, click yes to continue.'),
(2016, 'front', 'Back to dashboard'),
(2017, 'front', 'Subscription Plans'),
(2018, 'front', 'Privacy Notice'),
(2019, 'front', 'Become Restaurant partner'),
(2020, 'front', 'Get a sales boost of up to 30% from takeaways'),
(2022, 'front', 'Why partner with Us?'),
(2023, 'front', 'Increase sales'),
(2024, 'front', 'Keep the kitchen busy'),
(2025, 'front', 'Join a well-oiled marketing machine and watch the orders come in through your door and online.'),
(2026, 'front', 'Meet them and keep them'),
(2027, 'front', 'Attract new local customers and keep them coming back for more.'),
(2028, 'front', 'Use our services'),
(2029, 'front', 'For businesses big and small'),
(2030, 'front', 'Whatever your size we have tools, business support and savings to help grow your business.'),
(2031, 'front', 'Overtake competitors'),
(2032, 'front', 'Become a Multi Restaurant partner today.'),
(2033, 'front', 'Store name'),
(2034, 'front', 'Store address'),
(2035, 'front', 'Choose your membership program'),
(2036, 'front', 'Register user'),
(2037, 'front', 'Signup'),
(2039, 'front', 'Username'),
(2040, 'front', 'Select Payment'),
(2041, 'front', 'Select'),
(2042, 'front', 'weekly'),
(2043, 'front', 'monthly'),
(2044, 'front', 'anually'),
(2045, 'front', 'Enter your card details'),
(2046, 'front', 'Subscribe'),
(2048, 'front', 'Cardholder name'),
(2049, 'front', 'THANKS FOR JOINING'),
(2050, 'front', 'Your registration is complete!'),
(2051, 'front', 'You can login to merchant portal by clicking {{start_link}}here{{end_link}}'),
(2052, 'front', 'Something went wrong.'),
(2053, 'front', 'uh-oh! Looks like the page you are trying to access, doesn\'t exist. Please start afresh.'),
(2054, 'front', 'Processing payment..'),
(2055, 'front', 'don\'t close this window'),
(2056, 'front', '{{estimation}} mins'),
(2057, 'front', '{{distance}} {{unit}} delivery distance'),
(2058, 'front', 'Leave it at my door'),
(2059, 'front', 'Hand it to me'),
(2060, 'front', 'Meet outside'),
(2061, 'front', 'Add tip'),
(2062, 'front', 'Default'),
(2063, 'front', 'Add Cash On delivery'),
(2064, 'front', 'Cash on Delivery or COD is a payment method that allows pay for the items you have ordered only when it gets delivered.'),
(2065, 'front', 'Add Cash'),
(2066, 'front', 'Add New Card'),
(2067, 'front', 'Card Number'),
(2068, 'front', 'Exp. Date'),
(2069, 'front', 'Security Code'),
(2070, 'front', 'Card Name'),
(2071, 'front', 'Billing Address'),
(2072, 'front', 'Add Card'),
(2073, 'front', 'Add Paypal'),
(2074, 'front', 'Pay using your paypal account'),
(2075, 'front', 'Add Stripe'),
(2076, 'front', 'Add your stripe account'),
(2077, 'front', 'You will re-direct to Stripe account to login to your account.'),
(2079, 'front', 'I authorise {{website_name}} to send instructions to the financial institution that issued my card to take payments from my card account in accordance with the terms of my agreement with {{website_name}}'),
(2080, 'front', 'An error has occured'),
(2081, 'front', 'Add Razorpay'),
(2082, 'front', 'Pay using your Razorpay account'),
(2083, 'front', 'Pay using Razorpay'),
(2084, 'front', 'You will re-direct to Razorpay account to login to your account.'),
(2085, 'front', 'Pay with Razorpay'),
(2086, 'front', 'Creating account'),
(2087, 'front', 'Getting payment information....'),
(2088, 'front', 'Add mercadopago'),
(2089, 'front', 'Pay using your mercadopago account'),
(2090, 'front', 'Exp. Date MM/YYYY'),
(2091, 'front', 'Identification Number'),
(2092, 'front', 'Identification'),
(2093, 'front', 'Enter CVV for card'),
(2095, 'front', 'Verification'),
(2096, 'front', 'Order Type'),
(2097, 'front', 'Desired delivery time'),
(2098, 'front', 'Edit phone number'),
(2099, 'front', 'Promotions'),
(2100, 'front', 'Have a promo code?'),
(2101, 'front', 'Add promo code'),
(2102, 'front', 'Apply'),
(2103, 'front', 'Add promo'),
(2104, 'front', 'Not available'),
(2105, 'front', 'You\'re saving {{discount}}'),
(2106, 'front', 'Use until {{date}}'),
(2107, 'front', '({{coupon_name}}) {{amount}}% off'),
(2108, 'front', '({{coupon_name}}) {{amount}} off'),
(2109, 'front', 'Min. spend {{amount}}'),
(2110, 'front', '{{amount}}% off over {{order_over}} on {{transaction}}'),
(2111, 'front', 'valid {{from}} to {{to}}'),
(2112, 'front', 'row not found'),
(2113, 'front', 'cart uuid not found'),
(2114, 'front', 'order has no item'),
(2115, 'front', 'Address not found'),
(2116, 'front', 'no default email provider'),
(2117, 'front', 'Place ID is empty'),
(2118, 'front', 'Map provider not set'),
(2119, 'front', 'merchant not found'),
(2120, 'front', 'Place id not found'),
(2121, 'front', 'Invalid filter'),
(2122, 'front', 'Invalid coordinates'),
(2123, 'front', 'Invalid distance unit'),
(2124, 'front', 'Selected delivery time is already past'),
(2125, 'front', 'Currently unavailable'),
(2126, 'front', 'no memberhisp program'),
(2127, 'front', 'no available payment method'),
(2128, 'front', 'no results payment credentials'),
(2129, 'front', 'no available saved payment'),
(2130, 'front', 'cannot delete records please try again.'),
(2131, 'front', 'No payment method meta found'),
(2133, 'front', 'Please validated captcha'),
(2134, 'front', 'Invalid recaptcha secret key'),
(2135, 'front', 'Invalid google recaptcha error'),
(2136, 'front', 'Invalid response from google recaptcha'),
(2138, 'front', 'invalid response'),
(2139, 'front', 'no sms provider set in admin panel'),
(2140, 'front', 'Undefined facebook response'),
(2141, 'front', 'Invalid ID token'),
(2142, 'front', 'Invalid api keys'),
(2143, 'front', 'undefined map provider'),
(2144, 'front', 'invalid place id parameters'),
(2145, 'front', 'over query limit'),
(2146, 'front', 'input parameter is missing'),
(2147, 'front', 'unknow error'),
(2148, 'front', 'undefined error'),
(2149, 'front', 'miles'),
(2150, 'front', 'km'),
(2151, 'front', 'ft'),
(2152, 'front', 'invalid latitude parameters'),
(2153, 'front', 'invalid longitude parameters'),
(2154, 'front', 'Search tag'),
(2155, 'front', 'Reach more customers'),
(2156, 'backend', 'Replace Item'),
(2157, 'backend', 'Refund payment'),
(2158, 'backend', 'Refund the full amount'),
(2159, 'backend', 'Show language selection'),
(2160, 'backend', 'Languages settings'),
(2161, 'backend', 'Default language'),
(2162, 'backend', 'Backend Translation'),
(2164, 'backend', 'Export Backend translation'),
(2165, 'backend', 'Export Front translation'),
(2166, 'backend', 'Backend'),
(2167, 'backend', 'Front end'),
(2168, 'backend', 'Import language file'),
(2169, 'backend', 'Succesfully imported'),
(2170, 'backend', 'Invalid csv data'),
(2171, 'backend', 'Important notice, all the previous save words will be replace by the csv you uploaded.'),
(2172, 'backend', 'Import'),
(2173, 'front', 'Filters'),
(2174, 'front', 'Restaurant'),
(2175, 'front', 'Food'),
(2176, 'front', 'View order'),
(2177, 'front', 'Tap for hours,address, and more'),
(2178, 'front', 'Add your restaurant'),
(2179, 'front', 'Sign up to deliver'),
(2180, 'front', 'Best restaurants In your pocket'),
(2181, 'front', 'Get the app'),
(2182, 'backend', 'An error has occured.'),
(2183, 'backend', 'Your password has been reset.'),
(2184, 'backend', 'Forgot Backend Password Template'),
(2185, 'backend', 'Allow return to home'),
(2186, 'backend', 'Version {{version}}');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `st_admin_meta`
--
ALTER TABLE `st_admin_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_admin_meta_translation`
--
ALTER TABLE `st_admin_meta_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `meta_id` (`meta_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_admin_user`
--
ALTER TABLE `st_admin_user`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `admin_id_token` (`admin_id_token`),
  ADD KEY `email_address` (`email_address`),
  ADD KEY `contact_number` (`contact_number`);

--
-- Indexes for table `st_availability`
--
ALTER TABLE `st_availability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `meta_name` (`meta_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_cache`
--
ALTER TABLE `st_cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_cart`
--
ALTER TABLE `st_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_uuid` (`cart_uuid`),
  ADD KEY `item_token` (`item_token`),
  ADD KEY `item_size_id` (`item_size_id`),
  ADD KEY `cart_row` (`cart_row`);

--
-- Indexes for table `st_cart_addons`
--
ALTER TABLE `st_cart_addons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_row` (`cart_row`),
  ADD KEY `cart_uuid` (`cart_uuid`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `sub_item_id` (`sub_item_id`);

--
-- Indexes for table `st_cart_attributes`
--
ALTER TABLE `st_cart_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_row` (`cart_row`),
  ADD KEY `cart_uuid` (`cart_uuid`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_category`
--
ALTER TABLE `st_category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `category_name` (`category_name`),
  ADD KEY `status` (`status`),
  ADD KEY `sequence` (`sequence`);

--
-- Indexes for table `st_category_relationship_dish`
--
ALTER TABLE `st_category_relationship_dish`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `dish_id` (`dish_id`);

--
-- Indexes for table `st_category_translation`
--
ALTER TABLE `st_category_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_client`
--
ALTER TABLE `st_client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `social_strategy` (`social_strategy`),
  ADD KEY `email_address` (`email_address`),
  ADD KEY `password` (`password`),
  ADD KEY `contact_phone` (`contact_phone`),
  ADD KEY `status` (`status`),
  ADD KEY `token` (`token`),
  ADD KEY `mobile_verification_code` (`mobile_verification_code`),
  ADD KEY `social_id` (`social_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_client_address`
--
ALTER TABLE `st_client_address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `place_id` (`place_id`),
  ADD KEY `address_uuid` (`address_uuid`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `st_client_cc`
--
ALTER TABLE `st_client_cc`
  ADD PRIMARY KEY (`cc_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `st_client_meta`
--
ALTER TABLE `st_client_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `meta1` (`meta1`),
  ADD KEY `meta2` (`meta2`),
  ADD KEY `meta3` (`meta3`),
  ADD KEY `meta4` (`meta4`);

--
-- Indexes for table `st_client_payment_method`
--
ALTER TABLE `st_client_payment_method`
  ADD PRIMARY KEY (`payment_method_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `reference_id` (`reference_id`),
  ADD KEY `payment_uuid` (`payment_uuid`),
  ADD KEY `payment_code` (`payment_code`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_cooking_ref`
--
ALTER TABLE `st_cooking_ref`
  ADD PRIMARY KEY (`cook_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `cooking_name` (`cooking_name`),
  ADD KEY `sequence` (`sequence`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_cooking_ref_translation`
--
ALTER TABLE `st_cooking_ref_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cook_id` (`cook_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_cuisine`
--
ALTER TABLE `st_cuisine`
  ADD PRIMARY KEY (`cuisine_id`),
  ADD KEY `cuisine_name` (`cuisine_name`),
  ADD KEY `sequence` (`sequence`);

--
-- Indexes for table `st_cuisine_merchant`
--
ALTER TABLE `st_cuisine_merchant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `cuisine_id` (`cuisine_id`);

--
-- Indexes for table `st_cuisine_translation`
--
ALTER TABLE `st_cuisine_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cuisine_id` (`cuisine_id`),
  ADD KEY `language` (`language`),
  ADD KEY `cuisine_name` (`cuisine_name`);

--
-- Indexes for table `st_currency`
--
ALTER TABLE `st_currency`
  ADD PRIMARY KEY (`id`),
  ADD KEY `currency_symbol` (`currency_symbol`),
  ADD KEY `currency_code` (`currency_code`);

--
-- Indexes for table `st_device`
--
ALTER TABLE `st_device`
  ADD PRIMARY KEY (`device_id`),
  ADD KEY `user_type` (`user_type`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `platform` (`platform`),
  ADD KEY `device_uiid` (`device_uiid`),
  ADD KEY `enabled` (`enabled`);

--
-- Indexes for table `st_device_meta`
--
ALTER TABLE `st_device_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `device_id` (`device_id`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_dishes`
--
ALTER TABLE `st_dishes`
  ADD PRIMARY KEY (`dish_id`),
  ADD KEY `dish_name` (`dish_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_dishes_translation`
--
ALTER TABLE `st_dishes_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dish_id` (`dish_id`),
  ADD KEY `language` (`language`),
  ADD KEY `dish_name` (`dish_name`);

--
-- Indexes for table `st_email_logs`
--
ALTER TABLE `st_email_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_address` (`email_address`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_email_provider`
--
ALTER TABLE `st_email_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_id` (`provider_id`),
  ADD KEY `provider_name` (`provider_name`);

--
-- Indexes for table `st_favorites`
--
ALTER TABLE `st_favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fav_type` (`fav_type`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `st_featured_location`
--
ALTER TABLE `st_featured_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `featured_name` (`featured_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_gpdr_request`
--
ALTER TABLE `st_gpdr_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_type` (`request_type`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_ingredients`
--
ALTER TABLE `st_ingredients`
  ADD PRIMARY KEY (`ingredients_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `status` (`status`),
  ADD KEY `ingredients_name` (`ingredients_name`);

--
-- Indexes for table `st_ingredients_translation`
--
ALTER TABLE `st_ingredients_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredients_id` (`ingredients_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_inventory_supplier`
--
ALTER TABLE `st_inventory_supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_item`
--
ALTER TABLE `st_item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `item_name` (`item_name`),
  ADD KEY `status` (`status`),
  ADD KEY `is_featured` (`is_featured`),
  ADD KEY `points_earned` (`points_earned`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `st_item_meta`
--
ALTER TABLE `st_item_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `meta_name` (`meta_name`),
  ADD KEY `meta_id` (`meta_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_item_promo`
--
ALTER TABLE `st_item_promo`
  ADD PRIMARY KEY (`promo_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `item_id_promo` (`item_id_promo`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_item_relationship_category`
--
ALTER TABLE `st_item_relationship_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `st_item_relationship_size`
--
ALTER TABLE `st_item_relationship_size`
  ADD PRIMARY KEY (`item_size_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `item_token` (`item_token`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Indexes for table `st_item_relationship_subcategory`
--
ALTER TABLE `st_item_relationship_subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `subcat_id` (`subcat_id`);

--
-- Indexes for table `st_item_relationship_subcategory_item`
--
ALTER TABLE `st_item_relationship_subcategory_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `sub_item_id` (`sub_item_id`);

--
-- Indexes for table `st_item_translation`
--
ALTER TABLE `st_item_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `language` (`language`),
  ADD KEY `item_name` (`item_name`);

--
-- Indexes for table `st_language`
--
ALTER TABLE `st_language`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_location_area`
--
ALTER TABLE `st_location_area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `sequence` (`sequence`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `st_location_cities`
--
ALTER TABLE `st_location_cities`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `postal_code` (`postal_code`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `sequence` (`sequence`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `st_location_countries`
--
ALTER TABLE `st_location_countries`
  ADD PRIMARY KEY (`country_id`),
  ADD KEY `shortcode` (`shortcode`);

--
-- Indexes for table `st_location_rate`
--
ALTER TABLE `st_location_rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `st_location_states`
--
ALTER TABLE `st_location_states`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `sequence` (`sequence`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `st_map_places`
--
ALTER TABLE `st_map_places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reference_type` (`reference_type`),
  ADD KEY `reference_id` (`reference_id`);

--
-- Indexes for table `st_media_files`
--
ALTER TABLE `st_media_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_menu`
--
ALTER TABLE `st_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `menu_type` (`menu_type`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `status` (`status`),
  ADD KEY `visible` (`visible`);

--
-- Indexes for table `st_merchant`
--
ALTER TABLE `st_merchant`
  ADD PRIMARY KEY (`merchant_id`),
  ADD KEY `restaurant_slug` (`restaurant_slug`),
  ADD KEY `restaurant_name` (`restaurant_name`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `status` (`status`),
  ADD KEY `is_featured` (`is_featured`),
  ADD KEY `is_ready` (`is_ready`),
  ADD KEY `is_sponsored` (`is_sponsored`),
  ADD KEY `is_commission` (`is_commission`),
  ADD KEY `percent_commision` (`percent_commision`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `latitude` (`latitude`),
  ADD KEY `lontitude` (`lontitude`),
  ADD KEY `merchant_type` (`merchant_type`),
  ADD KEY `close_store` (`close_store`);

--
-- Indexes for table `st_merchant_meta`
--
ALTER TABLE `st_merchant_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_merchant_payment_method`
--
ALTER TABLE `st_merchant_payment_method`
  ADD PRIMARY KEY (`payment_method_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_merchant_type`
--
ALTER TABLE `st_merchant_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `commision_type` (`commision_type`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_merchant_type_translation`
--
ALTER TABLE `st_merchant_type_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_merchant_user`
--
ALTER TABLE `st_merchant_user`
  ADD PRIMARY KEY (`merchant_user_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `username` (`username`),
  ADD KEY `password` (`password`),
  ADD KEY `status` (`status`),
  ADD KEY `session_token` (`session_token`),
  ADD KEY `user_uuid` (`user_uuid`);

--
-- Indexes for table `st_notifications`
--
ALTER TABLE `st_notifications`
  ADD PRIMARY KEY (`notification_uuid`),
  ADD KEY `notication_channel` (`notication_channel`),
  ADD KEY `notification_type` (`notification_type`);

--
-- Indexes for table `st_offers`
--
ALTER TABLE `st_offers`
  ADD PRIMARY KEY (`offers_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_opening_hours`
--
ALTER TABLE `st_opening_hours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `day` (`day`),
  ADD KEY `status` (`status`),
  ADD KEY `start_time` (`start_time`),
  ADD KEY `end_time` (`end_time`),
  ADD KEY `start_time_pm` (`start_time_pm`),
  ADD KEY `end_time_pm` (`end_time_pm`),
  ADD KEY `custom_text` (`custom_text`),
  ADD KEY `day_of_week` (`day_of_week`);

--
-- Indexes for table `st_option`
--
ALTER TABLE `st_option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `option_name` (`option_name`);

--
-- Indexes for table `st_ordernew`
--
ALTER TABLE `st_ordernew`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_uuid` (`order_uuid`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `service_code` (`service_code`),
  ADD KEY `payment_code` (`payment_code`),
  ADD KEY `status` (`status`),
  ADD KEY `payment_status` (`payment_status`),
  ADD KEY `is_critical` (`is_critical`);

--
-- Indexes for table `st_ordernew_additional_charge`
--
ALTER TABLE `st_ordernew_additional_charge`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `item_row` (`item_row`);

--
-- Indexes for table `st_ordernew_addons`
--
ALTER TABLE `st_ordernew_addons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `item_row` (`item_row`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `sub_item_id` (`sub_item_id`);

--
-- Indexes for table `st_ordernew_attributes`
--
ALTER TABLE `st_ordernew_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `item_row` (`item_row`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_ordernew_history`
--
ALTER TABLE `st_ordernew_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `st_ordernew_item`
--
ALTER TABLE `st_ordernew_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `item_row` (`item_row`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `item_token` (`item_token`),
  ADD KEY `item_size_id` (`item_size_id`);

--
-- Indexes for table `st_ordernew_meta`
--
ALTER TABLE `st_ordernew_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_ordernew_summary_transaction`
--
ALTER TABLE `st_ordernew_summary_transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transaction_uuid` (`transaction_uuid`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_ordernew_transaction`
--
ALTER TABLE `st_ordernew_transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `payment_code` (`payment_code`),
  ADD KEY `status` (`status`),
  ADD KEY `transaction_type` (`transaction_type`);

--
-- Indexes for table `st_ordernew_trans_meta`
--
ALTER TABLE `st_ordernew_trans_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_order_settings_buttons`
--
ALTER TABLE `st_order_settings_buttons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uuid` (`uuid`),
  ADD KEY `group_name` (`group_name`),
  ADD KEY `stats_id` (`stats_id`),
  ADD KEY `do_actions` (`do_actions`),
  ADD KEY `order_type` (`order_type`);

--
-- Indexes for table `st_order_settings_tabs`
--
ALTER TABLE `st_order_settings_tabs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_name` (`group_name`),
  ADD KEY `stats_id` (`stats_id`);

--
-- Indexes for table `st_order_status`
--
ALTER TABLE `st_order_status`
  ADD PRIMARY KEY (`stats_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_order_status_actions`
--
ALTER TABLE `st_order_status_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `stats_id` (`stats_id`);

--
-- Indexes for table `st_order_status_translation`
--
ALTER TABLE `st_order_status_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stats_id` (`stats_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_order_time_management`
--
ALTER TABLE `st_order_time_management`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `transaction_type` (`transaction_type`),
  ADD KEY `days` (`days`),
  ADD KEY `start_time` (`start_time`),
  ADD KEY `end_time` (`end_time`);

--
-- Indexes for table `st_package_details`
--
ALTER TABLE `st_package_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `st_pages`
--
ALTER TABLE `st_pages`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `slug` (`slug`),
  ADD KEY `title` (`title`),
  ADD KEY `page_type` (`page_type`),
  ADD KEY `status` (`status`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `owner` (`owner`);

--
-- Indexes for table `st_pages_translation`
--
ALTER TABLE `st_pages_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_payment_gateway`
--
ALTER TABLE `st_payment_gateway`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payment_code` (`payment_code`),
  ADD KEY `is_online` (`is_online`),
  ADD KEY `is_payout` (`is_payout`),
  ADD KEY `is_plan` (`is_plan`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_payment_gateway_merchant`
--
ALTER TABLE `st_payment_gateway_merchant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_uuid` (`payment_uuid`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `payment_code` (`payment_code`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_payment_method_meta`
--
ALTER TABLE `st_payment_method_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_method_id` (`payment_method_id`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_plans`
--
ALTER TABLE `st_plans`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `status` (`status`),
  ADD KEY `package_uuid` (`package_uuid`),
  ADD KEY `plan_type` (`plan_type`);

--
-- Indexes for table `st_plans_invoice`
--
ALTER TABLE `st_plans_invoice`
  ADD PRIMARY KEY (`invoice_number`),
  ADD KEY `invoice_uuid` (`invoice_uuid`),
  ADD KEY `invoice_type` (`invoice_type`),
  ADD KEY `payment_code` (`payment_code`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_plans_translation`
--
ALTER TABLE `st_plans_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_push`
--
ALTER TABLE `st_push`
  ADD PRIMARY KEY (`push_uuid`),
  ADD KEY `push_type` (`push_type`),
  ADD KEY `provider` (`provider`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_review`
--
ALTER TABLE `st_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `rating` (`rating`),
  ADD KEY `status` (`status`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `st_review_meta`
--
ALTER TABLE `st_review_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_id` (`review_id`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_role`
--
ALTER TABLE `st_role`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `role_type` (`role_type`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_role_access`
--
ALTER TABLE `st_role_access`
  ADD PRIMARY KEY (`role_access_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `st_services`
--
ALTER TABLE `st_services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `service_code` (`service_code`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_services_fee`
--
ALTER TABLE `st_services_fee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_services_translation`
--
ALTER TABLE `st_services_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_shipping_rate`
--
ALTER TABLE `st_shipping_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `service_code` (`service_code`),
  ADD KEY `charge_type` (`charge_type`),
  ADD KEY `shipping_type` (`shipping_type`);

--
-- Indexes for table `st_size`
--
ALTER TABLE `st_size`
  ADD PRIMARY KEY (`size_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `size_name` (`size_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_size_translation`
--
ALTER TABLE `st_size_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_sms_broadcast`
--
ALTER TABLE `st_sms_broadcast`
  ADD PRIMARY KEY (`broadcast_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `send_to` (`send_to`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_sms_broadcast_details`
--
ALTER TABLE `st_sms_broadcast_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `broadcast_id` (`broadcast_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `status` (`status`),
  ADD KEY `gateway` (`gateway`);

--
-- Indexes for table `st_sms_provider`
--
ALTER TABLE `st_sms_provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_id` (`provider_id`),
  ADD KEY `as_default` (`as_default`);

--
-- Indexes for table `st_status_management`
--
ALTER TABLE `st_status_management`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `group_name` (`group_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_status_management_translation`
--
ALTER TABLE `st_status_management_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `language` (`language`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `st_subcategory`
--
ALTER TABLE `st_subcategory`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `subcategory_name` (`subcategory_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_subcategory_item`
--
ALTER TABLE `st_subcategory_item`
  ADD PRIMARY KEY (`sub_item_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `sub_item_name` (`sub_item_name`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_subcategory_item_relationships`
--
ALTER TABLE `st_subcategory_item_relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_item_id` (`sub_item_id`),
  ADD KEY `subcat_id` (`subcat_id`);

--
-- Indexes for table `st_subcategory_item_translation`
--
ALTER TABLE `st_subcategory_item_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_item_id` (`sub_item_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_subcategory_translation`
--
ALTER TABLE `st_subcategory_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_tags`
--
ALTER TABLE `st_tags`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `tag_name` (`tag_name`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `st_tags_relationship`
--
ALTER TABLE `st_tags_relationship`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banner_id` (`banner_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `st_tags_translation`
--
ALTER TABLE `st_tags_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `st_tax`
--
ALTER TABLE `st_tax`
  ADD PRIMARY KEY (`tax_id`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `active` (`active`);

--
-- Indexes for table `st_templates`
--
ALTER TABLE `st_templates`
  ADD PRIMARY KEY (`template_id`),
  ADD KEY `template_key` (`template_key`),
  ADD KEY `enabled_email` (`enabled_email`),
  ADD KEY `enabled_sms` (`enabled_sms`),
  ADD KEY `enabled_push` (`enabled_push`);

--
-- Indexes for table `st_templates_translation`
--
ALTER TABLE `st_templates_translation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `template_id` (`template_id`),
  ADD KEY `language` (`language`),
  ADD KEY `template_type` (`template_type`);

--
-- Indexes for table `st_voucher_new`
--
ALTER TABLE `st_voucher_new`
  ADD PRIMARY KEY (`voucher_id`),
  ADD KEY `voucher_name` (`voucher_name`),
  ADD KEY `status` (`status`),
  ADD KEY `voucher_owner` (`voucher_owner`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `voucher_type` (`voucher_type`);

--
-- Indexes for table `st_wallet_cards`
--
ALTER TABLE `st_wallet_cards`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `card_uuid` (`card_uuid`),
  ADD KEY `account_type` (`account_type`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `st_wallet_transactions`
--
ALTER TABLE `st_wallet_transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `card_id` (`card_id`),
  ADD KEY `transaction_uuid` (`transaction_uuid`),
  ADD KEY `transaction_type` (`transaction_type`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `st_wallet_transactions_meta`
--
ALTER TABLE `st_wallet_transactions_meta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `meta_name` (`meta_name`);

--
-- Indexes for table `st_zones`
--
ALTER TABLE `st_zones`
  ADD PRIMARY KEY (`zone_id`),
  ADD KEY `zone_name` (`zone_name`),
  ADD KEY `zone_uuid` (`zone_uuid`),
  ADD KEY `merchant_id` (`merchant_id`);

--
-- Indexes for table `st_subscriber`
--
ALTER TABLE `st_subscriber`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_address` (`email_address`),
  ADD KEY `merchant_id` (`merchant_id`),
  ADD KEY `subcsribe_type` (`subcsribe_type`);


ALTER TABLE `st_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `st_addons`
--
ALTER TABLE `st_addons`
  ADD PRIMARY KEY (`id`);


--
-- END OF ADD KEY
--  

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st_admin_meta`
--
ALTER TABLE `st_admin_meta`
  MODIFY `meta_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `st_admin_meta_translation`
--
ALTER TABLE `st_admin_meta_translation`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `st_admin_user`
--
ALTER TABLE `st_admin_user`
  MODIFY `admin_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `st_availability`
--
ALTER TABLE `st_availability`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_cache`
--
ALTER TABLE `st_cache`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `st_cart`
--
ALTER TABLE `st_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_cart_addons`
--
ALTER TABLE `st_cart_addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_cart_attributes`
--
ALTER TABLE `st_cart_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_category`
--
ALTER TABLE `st_category`
  MODIFY `cat_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_category_relationship_dish`
--
ALTER TABLE `st_category_relationship_dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_category_translation`
--
ALTER TABLE `st_category_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_client`
--
ALTER TABLE `st_client`
  MODIFY `client_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_client_address`
--
ALTER TABLE `st_client_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_client_cc`
--
ALTER TABLE `st_client_cc`
  MODIFY `cc_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_client_meta`
--
ALTER TABLE `st_client_meta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_client_payment_method`
--
ALTER TABLE `st_client_payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_cooking_ref`
--
ALTER TABLE `st_cooking_ref`
  MODIFY `cook_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_cooking_ref_translation`
--
ALTER TABLE `st_cooking_ref_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_cuisine`
--
ALTER TABLE `st_cuisine`
  MODIFY `cuisine_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `st_cuisine_merchant`
--
ALTER TABLE `st_cuisine_merchant`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_cuisine_translation`
--
ALTER TABLE `st_cuisine_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `st_currency`
--
ALTER TABLE `st_currency`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `st_device`
--
ALTER TABLE `st_device`
  MODIFY `device_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_device_meta`
--
ALTER TABLE `st_device_meta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_dishes`
--
ALTER TABLE `st_dishes`
  MODIFY `dish_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_dishes_translation`
--
ALTER TABLE `st_dishes_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_email_logs`
--
ALTER TABLE `st_email_logs`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_email_provider`
--
ALTER TABLE `st_email_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `st_favorites`
--
ALTER TABLE `st_favorites`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_featured_location`
--
ALTER TABLE `st_featured_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_gpdr_request`
--
ALTER TABLE `st_gpdr_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ingredients`
--
ALTER TABLE `st_ingredients`
  MODIFY `ingredients_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ingredients_translation`
--
ALTER TABLE `st_ingredients_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_inventory_supplier`
--
ALTER TABLE `st_inventory_supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_item`
--
ALTER TABLE `st_item`
  MODIFY `item_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_item_meta`
--
ALTER TABLE `st_item_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_item_promo`
--
ALTER TABLE `st_item_promo`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_item_relationship_category`
--
ALTER TABLE `st_item_relationship_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_item_relationship_size`
--
ALTER TABLE `st_item_relationship_size`
  MODIFY `item_size_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_item_relationship_subcategory`
--
ALTER TABLE `st_item_relationship_subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_item_relationship_subcategory_item`
--
ALTER TABLE `st_item_relationship_subcategory_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_item_translation`
--
ALTER TABLE `st_item_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_language`
--
ALTER TABLE `st_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `st_location_area`
--
ALTER TABLE `st_location_area`
  MODIFY `area_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_location_cities`
--
ALTER TABLE `st_location_cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_location_countries`
--
ALTER TABLE `st_location_countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `st_location_rate`
--
ALTER TABLE `st_location_rate`
  MODIFY `rate_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_location_states`
--
ALTER TABLE `st_location_states`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_map_places`
--
ALTER TABLE `st_map_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_media_files`
--
ALTER TABLE `st_media_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_menu`
--
ALTER TABLE `st_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=373;

--
-- AUTO_INCREMENT for table `st_merchant`
--
ALTER TABLE `st_merchant`
  MODIFY `merchant_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_merchant_meta`
--
ALTER TABLE `st_merchant_meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_merchant_payment_method`
--
ALTER TABLE `st_merchant_payment_method`
  MODIFY `payment_method_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_merchant_type`
--
ALTER TABLE `st_merchant_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `st_merchant_type_translation`
--
ALTER TABLE `st_merchant_type_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `st_merchant_user`
--
ALTER TABLE `st_merchant_user`
  MODIFY `merchant_user_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_offers`
--
ALTER TABLE `st_offers`
  MODIFY `offers_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_opening_hours`
--
ALTER TABLE `st_opening_hours`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `st_option`
--
ALTER TABLE `st_option`
  MODIFY `id` int(14) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `st_ordernew`
--
ALTER TABLE `st_ordernew`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ordernew_additional_charge`
--
ALTER TABLE `st_ordernew_additional_charge`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ordernew_addons`
--
ALTER TABLE `st_ordernew_addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ordernew_attributes`
--
ALTER TABLE `st_ordernew_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ordernew_history`
--
ALTER TABLE `st_ordernew_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ordernew_item`
--
ALTER TABLE `st_ordernew_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ordernew_meta`
--
ALTER TABLE `st_ordernew_meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ordernew_summary_transaction`
--
ALTER TABLE `st_ordernew_summary_transaction`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ordernew_transaction`
--
ALTER TABLE `st_ordernew_transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_ordernew_trans_meta`
--
ALTER TABLE `st_ordernew_trans_meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_order_settings_buttons`
--
ALTER TABLE `st_order_settings_buttons`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `st_order_settings_tabs`
--
ALTER TABLE `st_order_settings_tabs`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `st_order_status`
--
ALTER TABLE `st_order_status`
  MODIFY `stats_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `st_order_status_actions`
--
ALTER TABLE `st_order_status_actions`
  MODIFY `action_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `st_order_status_translation`
--
ALTER TABLE `st_order_status_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `st_order_time_management`
--
ALTER TABLE `st_order_time_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_package_details`
--
ALTER TABLE `st_package_details`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_pages`
--
ALTER TABLE `st_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `st_pages_translation`
--
ALTER TABLE `st_pages_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `st_payment_gateway`
--
ALTER TABLE `st_payment_gateway`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `st_payment_gateway_merchant`
--
ALTER TABLE `st_payment_gateway_merchant`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_payment_method_meta`
--
ALTER TABLE `st_payment_method_meta`
  MODIFY `id` bigint(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_plans`
--
ALTER TABLE `st_plans`
  MODIFY `package_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_plans_invoice`
--
ALTER TABLE `st_plans_invoice`
  MODIFY `invoice_number` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_plans_translation`
--
ALTER TABLE `st_plans_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_review`
--
ALTER TABLE `st_review`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_review_meta`
--
ALTER TABLE `st_review_meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_role`
--
ALTER TABLE `st_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_role_access`
--
ALTER TABLE `st_role_access`
  MODIFY `role_access_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_services`
--
ALTER TABLE `st_services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `st_services_fee`
--
ALTER TABLE `st_services_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `st_services_translation`
--
ALTER TABLE `st_services_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `st_shipping_rate`
--
ALTER TABLE `st_shipping_rate`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_size`
--
ALTER TABLE `st_size`
  MODIFY `size_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_size_translation`
--
ALTER TABLE `st_size_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_sms_broadcast`
--
ALTER TABLE `st_sms_broadcast`
  MODIFY `broadcast_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_sms_broadcast_details`
--
ALTER TABLE `st_sms_broadcast_details`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_sms_provider`
--
ALTER TABLE `st_sms_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `st_status_management`
--
ALTER TABLE `st_status_management`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `st_status_management_translation`
--
ALTER TABLE `st_status_management_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `st_subcategory`
--
ALTER TABLE `st_subcategory`
  MODIFY `subcat_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_subcategory_item`
--
ALTER TABLE `st_subcategory_item`
  MODIFY `sub_item_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_subcategory_item_relationships`
--
ALTER TABLE `st_subcategory_item_relationships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_subcategory_item_translation`
--
ALTER TABLE `st_subcategory_item_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_subcategory_translation`
--
ALTER TABLE `st_subcategory_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_tags`
--
ALTER TABLE `st_tags`
  MODIFY `tag_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_tags_relationship`
--
ALTER TABLE `st_tags_relationship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_tags_translation`
--
ALTER TABLE `st_tags_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_tax`
--
ALTER TABLE `st_tax`
  MODIFY `tax_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_templates`
--
ALTER TABLE `st_templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `st_templates_translation`
--
ALTER TABLE `st_templates_translation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2386;

--
-- AUTO_INCREMENT for table `st_voucher_new`
--
ALTER TABLE `st_voucher_new`
  MODIFY `voucher_id` int(14) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_wallet_cards`
--
ALTER TABLE `st_wallet_cards`
  MODIFY `card_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `st_wallet_transactions`
--
ALTER TABLE `st_wallet_transactions`
  MODIFY `transaction_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_wallet_transactions_meta`
--
ALTER TABLE `st_wallet_transactions_meta`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_zones`
--
ALTER TABLE `st_zones`
  MODIFY `zone_id` bigint(20) NOT NULL AUTO_INCREMENT;


--
ALTER TABLE `st_message`
  ADD PRIMARY KEY (`id`,`language`);

--
-- Indexes for table `st_sourcemessage`
--
ALTER TABLE `st_sourcemessage`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `st_message`
--
ALTER TABLE `st_message`
  ADD CONSTRAINT `FK_Message_SourceMessage` FOREIGN KEY (`id`) REFERENCES `st_sourcemessage` (`id`) ON DELETE CASCADE;

ALTER TABLE `st_subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;  


ALTER TABLE `st_banner`
  MODIFY `banner_id` int(14) NOT NULL AUTO_INCREMENT; 

--
-- AUTO_INCREMENT for table `st_addons`
--
ALTER TABLE `st_addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;   

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
