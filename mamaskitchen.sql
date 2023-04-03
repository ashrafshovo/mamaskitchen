-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2022 at 06:42 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mamaskitchen`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `paragraph`, `created_at`, `updated_at`) VALUES
(1, 'Astronomy compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.', '2022-05-25 14:48:41', '2022-05-26 16:32:58'),
(2, 'beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man. Where ignorance lurks, so too do the frontiers of discovery and imagination.Astronomy compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.', '2022-05-25 14:48:56', '2022-05-25 14:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `beers`
--

CREATE TABLE `beers` (
  `id` int(10) UNSIGNED NOT NULL,
  `paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beers`
--

INSERT INTO `beers` (`id`, `paragraph`, `created_at`, `updated_at`) VALUES
(1, 'Astronomy compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.', '2022-05-25 14:42:16', '2022-05-25 14:42:16'),
(2, 'beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man. Where ignorance lurks, so too do the frontiers of discovery and imagination.Astronomy compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.', '2022-05-25 14:42:50', '2022-05-25 14:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `breads`
--

CREATE TABLE `breads` (
  `id` int(10) UNSIGNED NOT NULL,
  `paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breads`
--

INSERT INTO `breads` (`id`, `paragraph`, `created_at`, `updated_at`) VALUES
(1, 'Astronomy compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.', '2022-05-25 14:43:31', '2022-05-25 14:43:31'),
(2, 'beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man. Where ignorance lurks, so too do the frontiers of discovery and imagination.Astronomy compels the soul to look upward, and leads us from this world to another. Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.', '2022-05-25 14:43:49', '2022-05-25 14:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', 'breakfast', '2022-05-25 14:24:09', '2022-05-25 14:24:09'),
(4, 'Special', 'special', '2022-05-25 14:26:15', '2022-05-25 14:26:15'),
(5, 'Desert', 'desert', '2022-05-25 14:26:22', '2022-05-25 14:26:22'),
(6, 'Dinner', 'dinner', '2022-05-25 14:26:28', '2022-05-25 14:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Nazmul Hossan Ovi', 'ovi2015@gmail.com', 'Want to book a table', 'Hello,\r\nI want to book a table for a special couple dinner. Will there be any available seats for us on 3oth next?', '2022-05-26 14:39:04', '2022-05-26 14:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_dishes`
--

CREATE TABLE `featured_dishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_category_id` int(10) UNSIGNED NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ple` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_dishes`
--

INSERT INTO `featured_dishes` (`id`, `title`, `menu_category_id`, `about`, `peo`, `ple`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'French Bread', 1, 'Astronomy compels the soul', '1', '1', 149, 0, '2022-05-26 15:03:53', '2022-05-28 12:36:01'),
(2, 'Italian Bread', 1, 'Astronomy compels the soul', '1', '1', 149, 0, '2022-05-26 15:05:31', '2022-05-26 15:05:31'),
(3, 'Regular Bread', 1, 'Astronomy compels the soul', '1', '1', 149, 0, '2022-05-26 15:06:36', '2022-05-26 15:06:36'),
(4, 'Regular Tea', 2, 'Astronomy compels the soul', '1', '1', 20, 0, '2022-05-26 15:07:38', '2022-05-26 15:07:38'),
(5, 'Garlic Tea', 2, 'Astronomy compels the soul', '1', '1', 30, 0, '2022-05-26 15:08:00', '2022-05-26 15:08:00'),
(6, 'Black Coffee', 2, 'Astronomy compels the soul', '1', '1', 40, 0, '2022-05-26 15:08:20', '2022-05-28 07:38:57'),
(10, 'Bacon', 3, 'Astronomy compels the soul', '1', '1', 70, 1, '2022-05-27 11:50:59', '2022-05-28 07:40:37'),
(11, 'Sausage', 3, 'Astronomy compels the soul', '1', '1', 50, 1, '2022-05-27 12:01:05', '2022-05-27 12:02:29'),
(12, 'Chicken Balls', 3, 'Astronomy compels the soul', '1', '1', 90, 1, '2022-05-27 12:01:28', '2022-05-28 07:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `developer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_by_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `app_name`, `developer_link`, `developer_name`, `theme_by`, `theme_by_name`, `created_at`, `updated_at`) VALUES
(1, 'Mama\'s Kitchen', 'https://ashrafshovo.github.io', 'Ashraf Hossan Shovo', 'https://themewagon.com/themes/mammas-kitchen-free-responsive-html5-bootstrap-restaurant-template/', 'ThemeWagon', '2022-05-25 14:45:02', '2022-05-25 14:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `have_a_look_sliders`
--

CREATE TABLE `have_a_look_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `have_a_look_sliders`
--

INSERT INTO `have_a_look_sliders` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Menu 1', 'menu-1-2022-05-28-6292708e8fa3e.png', '2022-05-28 12:57:18', '2022-05-28 12:57:18'),
(3, 'Menu 2', 'menu-2-2022-05-28-6292709925175.jpg', '2022-05-28 12:57:29', '2022-05-28 12:57:29'),
(4, 'Menu 3', 'menu-3-2022-05-28-629270a4309bc.png', '2022-05-28 12:57:40', '2022-05-28 12:57:40'),
(5, 'Menu 4', 'menu-4-2022-05-28-629270ada68fc.jpg', '2022-05-28 12:57:49', '2022-05-28 12:57:49'),
(6, 'Menu 5', 'menu-5-2022-05-28-629270b92bc05.jpg', '2022-05-28 12:58:01', '2022-05-28 12:58:01'),
(7, 'Menu 6', 'menu-6-2022-05-28-629270c4445db.jpg', '2022-05-28 12:58:12', '2022-05-28 12:58:12'),
(8, 'Menu 7', 'menu-7-2022-05-28-629270d0b5e88.jpg', '2022-05-28 12:58:24', '2022-05-28 12:58:24'),
(9, 'Menu 8', 'menu-8-2022-05-28-629270dc9069d.jpg', '2022-05-28 12:58:36', '2022-05-28 12:58:36'),
(10, 'Menu 9', 'menu-9-2022-05-28-629270e8ddfc3.jpg', '2022-05-28 12:58:49', '2022-05-28 12:58:49'),
(11, 'Menu 10', 'menu-10-2022-05-28-629270f66ca11.jpg', '2022-05-28 12:59:02', '2022-05-28 12:59:02'),
(12, 'Menu 11', 'menu-11-2022-05-28-62927101ad9e9.jpg', '2022-05-28 12:59:13', '2022-05-28 12:59:13'),
(13, 'Menu 12', 'menu-12-2022-05-28-6292710e04ab0.jpg', '2022-05-28 12:59:26', '2022-05-28 12:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Prawn Dish', 'Lorem ipsum dolor sit amet', 20, 'prawn-dish-2022-05-25-628e918564070.jpg', '2022-05-25 14:28:53', '2022-05-25 14:28:53'),
(2, 1, 'Prawn Dish', 'Tempor incididunt ut labore et dolore', 15, 'prawn-dish-2022-05-25-628e942d9c52a.jpg', '2022-05-25 14:40:13', '2022-05-25 14:40:13'),
(3, 1, 'Vegetable Dish', 'Magna aliqua. Ut enim ad minim veniam', 20, 'vegetable-dish-2022-05-25-628e946b9ac2d.jpg', '2022-05-25 14:41:15', '2022-05-25 14:41:15'),
(4, 4, 'Prawn Dish', 'Tempor incididunt ut labore et dolore', 15, 'prawn-dish-2022-05-25-628e96c991f33.jpg', '2022-05-25 14:51:21', '2022-05-25 14:51:21'),
(5, 4, 'Chicken Dish', 'Quis nostrud exercitation ullamco laboris', 22, 'chicken-dish-2022-05-25-628e97214922f.jpg', '2022-05-25 14:52:49', '2022-05-25 14:52:49'),
(6, 4, 'Ice-cream', 'Excepteur sint occaecat cupidatat non', 38, 'ice-cream-2022-05-25-628e976adf69f.jpg', '2022-05-25 14:54:03', '2022-05-25 14:54:03'),
(7, 5, 'Salad Dish', 'Consectetur adipisicing elit, sed do eiusmod', 18, 'salad-dish-2022-05-25-628e97d32a175.jpg', '2022-05-25 14:55:47', '2022-05-25 14:55:47'),
(8, 5, 'Vegetable Noodles', 'Nisi ut aliquip ex ea commodo', 32, 'vegetable-noodles-2022-05-25-628e982727122.jpg', '2022-05-25 14:57:11', '2022-05-25 14:57:11'),
(9, 5, 'Ice-cream', 'Excepteur sint occaecat cupidatat non', 38, 'ice-cream-2022-05-25-628e98727ec4c.jpg', '2022-05-25 14:58:26', '2022-05-25 14:58:26'),
(10, 6, 'Tomato Curry', 'Natalie & Justin Cleaning by Justin Younger', 20, 'tomato-curry-2022-05-25-628e98f33ac76.jpg', '2022-05-25 15:00:35', '2022-05-25 15:00:35'),
(11, 6, 'Chicken Dish', 'Quis nostrud exercitation ullamco laboris', 22, 'chicken-dish-2022-05-25-628e991f49eea.jpg', '2022-05-25 15:01:19', '2022-05-25 15:01:19'),
(12, 6, 'Special Salad', 'Duis aute irure dolor in reprehenderit', 38, 'special-salad-2022-05-25-628e9968a377c.jpg', '2022-05-25 15:02:32', '2022-05-25 15:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `menu_categories`
--

CREATE TABLE `menu_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_categories`
--

INSERT INTO `menu_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bread', '2022-05-26 15:00:22', '2022-05-26 15:00:22'),
(2, 'Drinks', '2022-05-26 15:00:30', '2022-05-26 15:00:30'),
(3, 'Meat', '2022-05-26 15:00:36', '2022-05-26 15:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2018_02_22_212118_create_sliders_table', 3),
(6, '2018_05_07_200317_create_categories_table', 4),
(7, '2018_05_09_194415_create_items_table', 5),
(8, '2018_11_02_170858_create_reservations_table', 6),
(9, '2018_11_09_173614_create_contacts_table', 6),
(10, '2018_12_15_192741_create_have_a_look_sliders_table', 7),
(11, '2018_12_16_190811_create_menu_categories_table', 8),
(12, '2018_12_16_190147_create_featured_dishes_table', 9),
(13, '2018_12_21_153059_create_abouts_table', 10),
(14, '2018_12_21_153344_create_beers_table', 11),
(15, '2018_12_21_153358_create_breads_table', 12),
(16, '2018_12_21_153424_create_footers_table', 13),
(17, '2018_12_22_165818_create_socials_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_and_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phone`, `email`, `date_and_time`, `message`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Aysha Naznin Nila', '01777626968', 'ashrafshovo@yandex.com', '30 May 2022 - 08:11 pm', 'dvnbsdcasc;saoci', 1, '2022-05-26 15:27:26', '2022-05-26 15:27:42'),
(4, 'Nazmul Hossan Ovi', '0123456789', 'admin@code.co', '03 May 2022 - 02:11 am', ',mnkgiug', 1, '2022-05-27 11:09:08', '2022-05-27 11:10:47'),
(5, 'Sabbir Hossan Bappy', '01777626968', 'sabbirbappy2020@gmail.com', '01 June 2022 - 08:11 pm', 'I want a table.', 0, '2022-05-28 12:39:02', '2022-05-28 12:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Best Food', 'Create Your Own Slogan', 'best-food-2022-05-25-628e90222ac31.jpg', '2022-05-25 14:22:58', '2022-05-25 14:22:58'),
(2, 'Best Snacks', 'Create Your Own Slogan', 'best-snacks-2022-05-25-628e903f0c98e.jpg', '2022-05-25 14:23:27', '2022-05-25 14:23:27'),
(3, 'Best Drinks', 'Create Your Own Slogan', 'best-drinks-2022-05-25-628e90581a2c5.jpg', '2022-05-25 14:23:52', '2022-05-25 14:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `google_plus`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'https://facebook.com/ashraf.hossanshovo', 'https://twitter.com/NameIsShovo', 'https://plus.google.com/+AshrafHossanShovo', 'https://www.linkedin.com/in/ashraf-hossan-shovo/', '2022-05-25 14:47:12', '2022-05-25 14:47:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `role` enum('admin','moderator','editor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirm_email` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `role`, `about`, `remember_token`, `confirm_email`, `created_at`, `updated_at`) VALUES
(1, 'Ashraf Hossan Shovo', 'ashrafshovo@gmail.com', '$2y$10$8JK4Q7GrAipB8m6g.oizdOcTx/L3Su/X832M9br5lZ9tfrAVXOOpe', 'default.png', 'admin', '<p>I am working on my <em>profile</em>, please be patient about that. <strong>Thanks. </strong></p>', NULL, 0, '2022-05-25 14:20:52', '2022-05-29 13:33:45'),
(2, 'Ashraf Shovo', 'ashrafhossanshovo@gmail.com', '$2y$10$Au2xIE9afzDW5v.i3/2CSeEJim9H84GaC/3W0tV.9bHI.YLVR4qSe', 'default.png', 'admin', '<p>N/A</p>', '', 1, '2022-05-29 14:10:39', '2022-05-29 14:13:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beers`
--
ALTER TABLE `beers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breads`
--
ALTER TABLE `breads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featured_dishes`
--
ALTER TABLE `featured_dishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `featured_dishes_menu_category_id_foreign` (`menu_category_id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `have_a_look_sliders`
--
ALTER TABLE `have_a_look_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Indexes for table `menu_categories`
--
ALTER TABLE `menu_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `beers`
--
ALTER TABLE `beers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `breads`
--
ALTER TABLE `breads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_dishes`
--
ALTER TABLE `featured_dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `have_a_look_sliders`
--
ALTER TABLE `have_a_look_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu_categories`
--
ALTER TABLE `menu_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `featured_dishes`
--
ALTER TABLE `featured_dishes`
  ADD CONSTRAINT `featured_dishes_menu_category_id_foreign` FOREIGN KEY (`menu_category_id`) REFERENCES `menu_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
