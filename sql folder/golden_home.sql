-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 04:21 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golden_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'كراسى', '2020-01-23 05:07:21', '2020-01-23 05:07:21'),
(2, 'طشت', '2020-01-23 05:07:45', '2020-01-23 05:08:28'),
(4, 'ماجور', '2020-01-23 09:40:33', '2020-01-23 09:40:33'),
(5, 'بستلة', '2020-02-21 13:13:14', '2020-02-21 13:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `text`, `image`, `created_at`, `updated_at`) VALUES
('about', '<p style=\"text-align:center\"><span style=\"font-size:48px\"><span dir=\"rtl\" lang=\"ar\">شركة جولدن هوم هى شركه مصريه</span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:48px\"><span dir=\"rtl\" lang=\"ar\">تسعى الى الرقى بمستوى الخدمات البلاستيكيه</span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:48px\"><span dir=\"rtl\" lang=\"ar\">&nbsp;عن طريق تقديم افضل المنتجات المصنوعه من اجود الخامات</span></span></p>', 'header-bg.jpg', '2020-01-22 15:42:48', '2020-01-23 10:06:10'),
('header', '<p style=\"text-align:center\"><span dir=\"rtl\" lang=\"ar\"><span style=\"font-size:48px\">مرحبا بكم فى شركة</span></span></p>\r\n\r\n<p style=\"text-align:center\"><span dir=\"rtl\" lang=\"ar\"><span style=\"font-size:72px\"><strong>جولدن هوم المتحده</strong></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span dir=\"rtl\" lang=\"ar\"><span style=\"font-size:48px\">نتمنى لكم تصفح ممتع</span></span></p>', 'outer-space-red-planet.jpg', '2020-01-22 15:39:07', '2020-02-21 10:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 'الحاج أحمد حافظ', 'رئيس مجلس الأداره', '18076653_1920806454866916_4618428195163489051_o.jpg', '2020-02-21 10:38:07', '2020-02-21 10:38:07'),
(6, 'الحاج عبده حافظ', 'نائب رئيس مجلس الأداره', '22104707_1772590213033275_7141795352310533932_o.jpg', '2020-02-21 10:38:44', '2020-02-21 10:38:44');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_07_192759_create_products_table', 1),
(5, '2019_12_07_192956_create_categories_table', 1),
(6, '2019_12_07_193152_create_contact_uses_table', 1),
(7, '2019_12_23_203551_create_groups_table', 1),
(8, '2019_12_24_103550_create_managers_table', 1),
(9, '2020_01_13_171335_create_product_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width-name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `length-name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` int(11) NOT NULL,
  `hight-name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hight` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `image`, `width-name`, `width`, `length-name`, `length`, `hight-name`, `hight`, `created_at`, `updated_at`) VALUES
(10, 1, 'كرسى سكر', 'asffg.JPG', 'العرض', 50, 'الطول', 20, 'الارتفاع', 100, '2020-02-21 13:05:21', '2020-02-21 13:05:21'),
(11, 1, 'كرسى فوتيه', 'dsgfg.JPG', 'العرض', 30, 'الطول', 20, 'الارتفاع', 50, '2020-02-21 13:06:52', '2020-02-21 13:06:52'),
(12, 1, 'كرسى سفره', 'NR10 copy4.JPG', 'العرض', 50, 'الطول', 20, 'الارتفاع', 30, '2020-02-21 13:08:01', '2020-02-21 13:08:01'),
(13, 2, 'طشت 62', '03.JPG', 'العرض', 30, 'الطول', 20, 'القطر', 62, '2020-02-21 13:09:00', '2020-02-21 13:09:00'),
(14, 1, 'كرسى الباشا', '0 (6).JPG', 'العرض', 30, 'الطول', 20, 'الارتفاع', 50, '2020-02-21 13:10:11', '2020-02-21 13:10:11'),
(15, 4, 'ماجور 3 ديكور', '05.JPG', 'العرض', 30, 'الطول', 20, 'الارتفاع', 50, '2020-02-21 13:11:56', '2020-02-21 13:11:56'),
(16, 5, 'بستله 35 لتر ديكور', 'Untitled-1 copy.jpg', 'العرض', 50, 'الطول', 20, 'الارتفاع', 20, '2020-02-21 13:14:39', '2020-02-21 13:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `name`, `created_at`, `updated_at`) VALUES
(37, 10, 'adf copy.jpg', '2020-02-21 13:05:22', '2020-02-21 13:05:22'),
(38, 10, 'adf.JPG', '2020-02-21 13:05:23', '2020-02-21 13:05:23'),
(39, 10, 'asd.JPG', '2020-02-21 13:05:24', '2020-02-21 13:05:24'),
(40, 10, 'fgh.JPG', '2020-02-21 13:05:25', '2020-02-21 13:05:25'),
(41, 11, 'dfg.JPG', '2020-02-21 13:06:53', '2020-02-21 13:06:53'),
(42, 11, 'dsgfg.JPG', '2020-02-21 13:06:54', '2020-02-21 13:06:54'),
(43, 11, 'sd.JPG', '2020-02-21 13:06:55', '2020-02-21 13:06:55'),
(44, 12, 's.JPG', '2020-02-21 13:08:02', '2020-02-21 13:08:02'),
(45, 13, '0 (7).JPG', '2020-02-21 13:09:01', '2020-02-21 13:09:01'),
(46, 13, '03.JPG', '2020-02-21 13:09:01', '2020-02-21 13:09:01'),
(47, 13, '04.JPG', '2020-02-21 13:09:02', '2020-02-21 13:09:02'),
(48, 15, '05.JPG', '2020-02-21 13:11:56', '2020-02-21 13:11:56'),
(49, 15, '07.JPG', '2020-02-21 13:11:57', '2020-02-21 13:11:57'),
(50, 15, '08.JPG', '2020-02-21 13:11:58', '2020-02-21 13:11:58'),
(51, 16, 'Untitled-1 copy.jpg', '2020-02-21 13:14:40', '2020-02-21 13:14:40'),
(52, 16, 'Untitled-1 copy.JPG55.JPG', '2020-02-21 13:14:40', '2020-02-21 13:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Golden Home', '$2y$10$ZBVfu.E2IP4Rr2Aea/EcIOqQVwpHzYUUP50euL1aoYgCKF3E3hakO', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD UNIQUE KEY `groups_id_unique` (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
