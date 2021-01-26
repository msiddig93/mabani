-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2021 at 09:32 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'الخرطوم', '2020-10-12 23:34:20', '2020-10-12 23:34:20'),
(2, 'أمدرمان', '2020-10-12 23:34:33', '2020-10-12 23:34:33'),
(4, 'بحري', '2020-10-13 06:30:32', '2020-10-13 06:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `area_caluclates`
--

CREATE TABLE `area_caluclates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `licence_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_area` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area_caluclates`
--

INSERT INTO `area_caluclates` (`id`, `licence_id`, `name`, `total_area`, `created_at`, `updated_at`) VALUES
(1, 2, 'tetxv', 123456, '2020-11-23 09:50:54', '2020-11-23 09:50:54'),
(2, 3, 'طابق اول', 200, '2020-12-15 06:54:56', '2020-12-15 06:54:56'),
(3, 3, 'طابق ثاني', 205, '2020-12-15 06:55:24', '2020-12-15 06:55:24');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` double(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `client_name`, `account_no`, `balance`, `created_at`, `updated_at`) VALUES
(1, 'مازن عثمان', '1203431', 200000.00, '2020-10-31 10:02:45', '2020-10-31 10:02:45'),
(2, 'أبوبكر أدم', '2202031', 0.00, '2020-10-31 10:04:51', '2021-01-26 18:29:19'),
(3, 'أنور أدم يعقوب', '3202031', 200000.00, '2020-10-31 10:04:51', '2020-10-31 10:05:38'),
(4, 'عبدالعزيز محمود', '4202031', 200000.00, '2020-10-31 10:04:51', '2020-10-31 10:05:54'),
(5, 'علي عبدالله', '5202031', 200000.00, '2020-10-31 10:04:51', '2020-10-31 10:06:03'),
(6, 'جمعة حامد جمعة', '6202031', 200000.00, '2020-10-31 10:04:51', '2020-10-31 10:06:19'),
(7, 'وزارة التخطيط العمراني', '7202031', 186418560.00, '2020-10-31 10:04:51', '2021-01-26 18:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `area_id`, `created_at`, `updated_at`) VALUES
(4, 'النزه', 1, '2020-10-13 06:12:13', '2020-10-13 06:12:13'),
(7, 'ام بدة', 2, '2020-10-13 06:28:17', '2020-10-13 06:28:17'),
(8, 'المهندسن', 2, '2020-10-13 06:28:41', '2020-10-13 06:28:41'),
(9, 'الثورات', 2, '2020-10-13 06:29:45', '2020-10-13 06:29:45'),
(10, 'الشقلة', 2, '2020-10-13 06:30:13', '2020-10-13 06:30:13'),
(11, 'شمبات', 4, '2020-10-13 06:34:14', '2020-10-13 06:34:14'),
(12, 'المزاد', 4, '2020-10-13 06:34:27', '2020-10-13 06:34:27'),
(13, 'الشعبية', 4, '2020-10-13 06:34:39', '2020-10-13 06:34:39'),
(14, 'الحلفايا', 4, '2020-10-13 06:34:54', '2020-10-13 06:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `licences`
--

CREATE TABLE `licences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpose_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) DEFAULT 0,
  `land_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `part` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prototype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blueprint` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `licences`
--

INSERT INTO `licences` (`id`, `owner_name`, `phone`, `purpose_id`, `district_id`, `user_id`, `land_number`, `part`, `certificate`, `prototype`, `blueprint`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Malik Ali', '12344567', 2, 7, 4, '1212-656', '23', 'licence/1_certificate.jpg', 'licence/1_prototype.jpg', 'licence/1_blueprint.jpg', 0, '2020-10-16 21:47:29', '2020-10-16 22:21:16'),
(2, 'Mohamed Siddig', '0926055492', 2, 11, 0, '1234567', '15', 'licence/2_certificate.jpg', 'licence/2_prototype.jpg', 'licence/2_blueprint.jpg', 1, '2020-11-23 05:41:12', '2021-01-26 18:29:20'),
(3, 'Zool Lucky', '0926055492', 2, 11, 0, '12341234', '15', 'licence/3_certificate.jpeg', 'licence/3_prototype.jpeg', 'licence/3_blueprint.jpeg', 1, '2020-12-15 06:30:25', '2020-12-15 07:43:31');

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
(3, '2020_10_10_202541_create_purposes_table', 2),
(4, '2020_10_12_160002_create_licences_table', 3),
(5, '2020_10_12_162043_create_areas_table', 3),
(6, '2020_10_12_165025_create_districts_table', 4),
(8, '2020_10_13_160002_create_licences_table', 5),
(9, '2020_10_16_170557_create_reports_table', 6),
(10, '2020_10_17_052335_create_tests_table', 7),
(11, '2020_10_18_222220_create_area_caluclates_table', 7),
(12, '2020_10_31_115209_create_banks_table', 7),
(13, '2020_12_15_084059_create_payments_table', 8);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licence_id` bigint(20) DEFAULT NULL,
  `amount` double(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `client_name`, `from`, `to`, `licence_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'أبوبكر أدم', '2202031', '7202031', 3, 611550.00, '2020-12-15 07:14:58', '2020-12-15 07:14:58'),
(2, 'أبوبكر أدم', '2202031', '7202031', 3, 611550.00, '2020-12-15 07:39:57', '2020-12-15 07:39:57'),
(3, 'أبوبكر أدم', '2202031', '7202031', 3, 611550.00, '2020-12-15 07:43:31', '2020-12-15 07:43:31'),
(4, 'أبوبكر أدم', '2202031', '7202031', 2, 186418560.00, '2021-01-26 18:29:19', '2021-01-26 18:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `purposes`
--

CREATE TABLE `purposes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purposes`
--

INSERT INTO `purposes` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(2, 'ترخيص بناء جديد', 1500, '2020-10-11 04:10:27', '2020-10-12 21:44:08'),
(4, 'تجديد ترخيص', 1000, '2020-10-11 04:10:57', '2020-10-12 21:44:52'),
(7, 'ترخيص بناء بدل فاقد', 150, '2020-10-12 21:35:05', '2020-10-12 21:45:18'),
(8, 'اضافة طوابق عليا', 100, '2020-10-12 21:42:37', '2020-10-12 21:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clause` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licence_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `clause`, `note`, `status`, `licence_id`, `created_at`, `updated_at`) VALUES
(1, 'test 1', 'this a test report', 'غير مطابق', 1, '2020-10-17 01:09:07', '2020-10-17 01:09:07'),
(2, 'test 11', 'zdvnzmvn', 'مطابق', 1, '2020-10-17 01:11:37', '2020-10-17 01:11:37'),
(3, 'dsjdksjds', 'lkhjlkjhfklahfaf', 'غير مطابق', 3, '2020-12-15 06:32:33', '2020-12-15 06:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clause` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licence_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'مازن عثمان', 'mzee@gmail.com', NULL, '$2y$10$Em84NmfbpAwo/q4aRGUkOeDGQ6Z3ZdmM6wUwagzE.lauWqB/Wt4J.', 1, NULL, '2020-10-08 20:50:41', '2020-10-08 20:50:41'),
(4, 'ابوبكر ادم سليمان', 'bkre@gmail.com', NULL, '$2y$10$396osqz72jYjIKNYpU5LyemuNz.VA0EQFncpzWdRKSmdjVNvqkxWy', 1, NULL, '2020-10-08 23:10:37', '2020-10-10 22:08:14'),
(6, 'سراميك', 'mohamedsiddig915@gmail.com', NULL, '$2y$10$t0szQdPhH3h2WRTVKK6H0ur0AZaEEQPFUlWii6M/l6W.Mo/4g2dgO', 2, NULL, '2020-10-10 22:12:37', '2020-10-10 22:12:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area_caluclates`
--
ALTER TABLE `area_caluclates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_area_id_foreign` (`area_id`);

--
-- Indexes for table `licences`
--
ALTER TABLE `licences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `licences_purpose_id_foreign` (`purpose_id`),
  ADD KEY `licences_district_id_foreign` (`district_id`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purposes`
--
ALTER TABLE `purposes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `area_caluclates`
--
ALTER TABLE `area_caluclates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `licences`
--
ALTER TABLE `licences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purposes`
--
ALTER TABLE `purposes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `licences`
--
ALTER TABLE `licences`
  ADD CONSTRAINT `licences_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `licences_purpose_id_foreign` FOREIGN KEY (`purpose_id`) REFERENCES `purposes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
