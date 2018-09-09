-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 02:50 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inti_kp`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkins`
--

CREATE TABLE `checkins` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkins`
--

INSERT INTO `checkins` (`id`, `id_barang`, `qty`, `created_at`, `updated_at`) VALUES
(1, 3, 3, '2018-08-31 10:08:12', '2018-08-31 10:08:12'),
(2, 3, 3, '2018-08-31 10:10:40', '2018-08-31 10:10:40'),
(3, 6, 5, '2018-09-09 12:13:13', '2018-09-09 12:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `id_barang`, `qty`, `created_at`, `updated_at`) VALUES
(2, 3, 1, '2018-08-24 07:48:46', '2018-08-24 07:48:46'),
(3, 4, 2, '2018-08-24 08:22:21', '2018-08-24 08:22:21'),
(4, 3, 1, '2018-08-24 09:15:25', '2018-08-24 09:15:25'),
(5, 3, 1, '2018-08-24 09:19:54', '2018-08-24 09:19:54'),
(6, 3, 1, '2018-08-24 09:20:11', '2018-08-24 09:20:11'),
(7, 3, 6, '2018-08-31 10:09:48', '2018-08-31 10:09:48');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `lokasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `kode_barang`, `nama`, `stock`, `lokasi`, `created_at`, `updated_at`) VALUES
(3, '12W-1206', 'pcb', 6, 'rak biru', '2018-08-20 02:59:33', '2018-08-31 10:10:40'),
(4, '2,4W-1206', 'resistor', 212, 'rak biru', '2018-08-20 10:05:19', '2018-08-24 08:47:41'),
(5, '1K-1206', 'resitor', 4, 'rak hijau', '2018-08-24 08:25:23', '2018-08-24 08:25:23'),
(6, '6,81K-120', 'resitor', 7, 'rak hijau', '2018-08-24 08:25:51', '2018-09-09 12:13:13'),
(7, '182K-1206', 'resistor', 70, 'rak hijau', '2018-08-24 08:26:26', '2018-08-24 08:26:26'),
(8, '9,1K-1206', 'resistor', 60, 'rak hijau', '2018-08-24 08:26:53', '2018-08-24 08:26:53'),
(9, '33,2K-1206', 'resistor', 50, 'rak hijau', '2018-08-24 08:27:19', '2018-08-24 08:27:19'),
(10, '56K-1206', 'resistor', 40, 'rak hijau', '2018-08-24 08:28:38', '2018-08-24 08:28:38'),
(11, '243-1206', 'resistor', 60, 'rak hijau', '2018-08-24 08:29:16', '2018-08-24 08:29:16'),
(12, '470-1206', 'resistor', 40, 'rak hijau', '2018-08-24 08:29:38', '2018-08-24 08:29:38'),
(13, '140K-1206', 'resistor', 40, 'rak hijau', '2018-08-24 08:29:54', '2018-08-24 08:29:54'),
(14, '21-1206', 'resistor', 34, 'rak hijau', '2018-08-24 08:30:09', '2018-08-24 08:30:09'),
(17, '10K-1206', 'resistor', 70, 'rak hijau', '2018-08-24 08:30:58', '2018-08-24 08:30:58'),
(18, '26,1K-1206', 'resistor', 60, 'rak hijau', '2018-08-24 08:31:16', '2018-08-24 08:31:16'),
(19, '7,5K-1206', 'resistor', 39, 'rak hijau', '2018-08-24 08:31:42', '2018-08-24 08:31:42'),
(20, '150-1206', 'resistor', 80, 'rak hijau', '2018-08-24 08:31:56', '2018-08-24 08:31:56'),
(21, '1N47', 'resistor', 90, 'rak hijau', '2018-08-24 08:33:23', '2018-08-24 08:33:23'),
(22, '226K-1206', 'resistor', 54, 'rak hijau', '2018-08-24 08:33:48', '2018-08-24 08:33:48'),
(23, '10-1206', 'resistor', 78, 'rak hijau', '2018-08-24 08:34:13', '2018-08-24 08:34:13'),
(24, '27K-1206', 'resistor', 69, 'rak hijau', '2018-08-24 08:34:47', '2018-08-24 08:34:47'),
(25, '1590K', 'resistor', 2, 'rak biru', '2018-09-05 08:51:11', '2018-09-05 08:51:11');

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
(3, '2018_08_20_030514_create_items_table', 1),
(4, '2018_08_20_065501_create_checkouts_table', 1),
(5, '2018_08_24_155604_create_checkins_table', 2),
(6, '2018_08_24_182803_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 2),
(1, 'App\\User', 3),
(2, 'App\\User', 1),
(2, 'App\\User', 3),
(3, 'App\\User', 3),
(4, 'App\\User', 1),
(4, 'App\\User', 2),
(4, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 14),
(2, 'App\\User', 16),
(2, 'App\\User', 17),
(2, 'App\\User', 18),
(2, 'App\\User', 19),
(3, 'App\\User', 2),
(3, 'App\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ramdan@develop.com', '$2y$10$EHMtICtKClUNgo71hfUGnuw4YsH5Xuzxy4OlMl7958WGqH1WaunS.', '2018-09-05 15:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add post', 'web', '2018-08-24 12:23:09', '2018-08-24 12:23:09'),
(2, 'edit post', 'web', '2018-08-24 12:23:18', '2018-08-24 12:23:18'),
(3, 'delete post', 'web', '2018-08-24 12:23:35', '2018-08-24 12:23:35'),
(4, 'view post', 'web', '2018-08-24 12:49:57', '2018-08-24 12:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2018-08-24 11:44:55', '2018-08-24 11:44:55'),
(2, 'user', 'web', '2018-08-24 11:45:13', '2018-08-24 11:45:13'),
(3, 'superadmin', 'web', '2018-08-25 14:31:30', '2018-08-25 14:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 3),
(3, 3),
(4, 1),
(4, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin125', 'admin@gmail.com', '$2y$10$Dih6c5J4MCnfjQK79fyeiu20kzuBUtgR4j9jRyl9URQRlToKFtwlG', 'a7HysezEHJZu1JrjgJV6fj9Gbvsc6VRR32rZMs5YeSqBCiSiukyXu46AXFiC', '2018-08-20 00:29:28', '2018-09-09 07:08:52'),
(2, 'ramdan', 'ramdan@develop.com', '$2y$10$cD6GfjLQ8S80m7KtRuoB5OtCRU7Rq6ctQ0LkSAVp6S4cfkV0.PBRu', 'W5zj4MHrooHxyi0E6fhYrNllxoebjASBT1iZANZXJ24NR5kb5doUOtIhzUKo', '2018-08-24 13:12:49', '2018-08-24 13:12:49'),
(3, 'Super Admin', 'superadmin@gmail.com', '$2y$10$Dih6c5J4MCnfjQK79fyeiu20kzuBUtgR4j9jRyl9URQRlToKFtwlG', '0JdzAnc3OgbLWIqrNEzawdaqjZieplvcQ71H03Rx1gjQRScCmBgNHVxRgwBx', '2018-08-25 14:36:05', '2018-09-09 07:10:06'),
(14, '1234555', '555@mail.com', '$2y$10$J3LolDEOHyKBm4aAkjBvCejx6JOp2CLMx2NaJo.9YBZJVRUDpOAmy', '6zjIcXgnMc9pSNYIQAsOFtfz7DiH3o4cCWlCh6zzWEyzQOZrt4ZOlGeycz8r', '2018-09-09 09:26:29', '2018-09-09 09:26:29'),
(16, 'denda', 'denda@gmail.com', '$2y$10$Sff7UzzYy5TvXMGrefj/IeLUxmRHJcoG2Db/LgtamOo8bTq8EEC22', 'D8VXxBRUJr72HSdvqjcnor58KLuHIaGARuyyY9a2ixvM4T8X7Hxbv0c5RcML', '2018-09-09 11:24:49', '2018-09-09 11:24:49'),
(17, 'denda', 'ramdan@ymail.com', '$2y$10$ZZQXyupQ9gaLFGG0dEBZWecg7Onng3KPDUf8ToCA11Dt53h8EPcnG', 'op1gi9Pg798OiDJoHPV9Yde36z68h36mIOoNyHuxymAUV83xanvGD3W9KJ0E', '2018-09-09 11:30:16', '2018-09-09 11:30:16'),
(18, 'asdasd', 'asdasd@asd.com', '$2y$10$LMnV/868/APup3ChwgldT.gmkoINviFs6xgyo3zeu12C46xz.uxKy', '6PyHGbn8fxui4ro5a2DaijPdUH4Avbk4ZvfxoOdcrz2CpChfTMFEyIvl2yuD', '2018-09-09 11:46:13', '2018-09-09 11:46:13'),
(19, 'lois', 'lois@gmail.com', '$2y$10$ke/2pcxuGvynAHtPme66KeGdBxTghvhCfNZyUjY6xhpJm6dvcdkki', '61bsDGVWvDRPPvnCpiagrGZb5YUSJP2SpQUnZeYLI6R77cjdzCBRAIMuxRYE', '2018-09-09 12:12:37', '2018-09-09 12:12:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkins`
--
ALTER TABLE `checkins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkins_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkouts_id_barang_foreign` (`id_barang`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `checkins`
--
ALTER TABLE `checkins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkins`
--
ALTER TABLE `checkins`
  ADD CONSTRAINT `checkins_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD CONSTRAINT `checkouts_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `items` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
