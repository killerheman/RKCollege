-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 06:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rkcollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `aqar_sessions`
--

CREATE TABLE `aqar_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner`, `title1`, `title2`, `link`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'upload/banner/banner1.jpg', 'Welcome to Ram Krishna College, Madhubani', 'We Design the Future and Set Trends for others to follow.', '#', NULL, '2022-11-27 12:08:40', '2022-11-27 12:30:32'),
(2, 'upload/banner/banner3.jpg', 'Welcome to Ram Krishna College, Madhubani', 'We Design the Future and Set Trends for others to follow.', '#', NULL, '2022-11-27 12:08:40', '2022-11-27 12:30:32'),
(3, 'upload/banner/banner5.jpg', 'Welcome to Ram Krishna College, Madhubani', 'We Design the Future and Set Trends for others to follow.', '#', NULL, '2022-11-27 12:08:40', '2022-11-27 12:30:32'),
(4, 'upload/banner/banner4.jpg', 'Welcome to Ram Krishna College, Madhubani', 'We Design the Future and Set Trends for others to follow.', '#', NULL, '2022-11-27 12:08:40', '2022-11-27 12:30:32'),
(5, 'upload/banner/banner2.jpg', 'Welcome to Ram Krishna College, Madhubani', 'We Design the Future and Set Trends for others to follow.', '#', NULL, '2022-11-27 12:08:40', '2022-11-27 12:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `criterias`
--

CREATE TABLE `criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `errors`
--

CREATE TABLE `errors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_galleries`
--

CREATE TABLE `event_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_30_081504_create_permission_names_table', 1),
(6, '2022_09_30_082543_create_permission_tables', 2),
(7, '2022_09_30_090330_add_column_perm_id_permissions', 2),
(8, '2022_10_01_103836_create_errors_table', 2),
(9, '2022_10_17_130201_create_notices_table', 3),
(10, '2022_10_17_164156_create_events_table', 4),
(13, '2022_10_20_125341_create_criterias_table', 5),
(14, '2022_10_30_085801_create_aqar_sessions_table', 6),
(17, '2022_10_30_101430_create_banners_table', 7),
(18, '2022_11_03_162313_create_event_galleries_table', 8),
(19, '2022_12_11_162418_create_session_wise_models_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `category`, `type`, `filename`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Demo Notice', '1', 'link', 'fsdf', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `perm_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `perm_id`) VALUES
(1, 'user', 'web', '2022-11-27 13:19:45', '2022-11-27 13:19:45', 1),
(2, 'user_create', 'web', '2022-11-27 13:19:46', '2022-11-27 13:19:46', 1),
(3, 'user_read', 'web', '2022-11-27 13:19:46', '2022-11-27 13:19:46', 1),
(4, 'user_edit', 'web', '2022-11-27 13:19:47', '2022-11-27 13:19:47', 1),
(5, 'user_delete', 'web', '2022-11-27 13:19:47', '2022-11-27 13:19:47', 1),
(6, 'notice', 'web', '2022-11-27 13:20:18', '2022-11-27 13:20:18', 2),
(7, 'notice_create', 'web', '2022-11-27 13:20:18', '2022-11-27 13:20:18', 2),
(8, 'notice_read', 'web', '2022-11-27 13:20:18', '2022-11-27 13:20:18', 2),
(9, 'notice_edit', 'web', '2022-11-27 13:20:18', '2022-11-27 13:20:18', 2),
(10, 'notice_delete', 'web', '2022-11-27 13:20:18', '2022-11-27 13:20:18', 2),
(11, 'event', 'web', '2022-11-27 13:20:23', '2022-11-27 13:20:23', 3),
(12, 'event_create', 'web', '2022-11-27 13:20:24', '2022-11-27 13:20:24', 3),
(13, 'event_read', 'web', '2022-11-27 13:20:24', '2022-11-27 13:20:24', 3),
(14, 'event_edit', 'web', '2022-11-27 13:20:24', '2022-11-27 13:20:24', 3),
(15, 'event_delete', 'web', '2022-11-27 13:20:24', '2022-11-27 13:20:24', 3),
(16, 'banner', 'web', '2022-11-27 13:20:30', '2022-11-27 13:20:30', 4),
(17, 'banner_create', 'web', '2022-11-27 13:20:30', '2022-11-27 13:20:30', 4),
(18, 'banner_read', 'web', '2022-11-27 13:20:30', '2022-11-27 13:20:30', 4),
(19, 'banner_edit', 'web', '2022-11-27 13:20:30', '2022-11-27 13:20:30', 4),
(20, 'banner_delete', 'web', '2022-11-27 13:20:30', '2022-11-27 13:20:30', 4),
(21, 'role', 'web', '2022-11-27 13:20:40', '2022-11-27 13:20:40', 5),
(22, 'role_create', 'web', '2022-11-27 13:20:40', '2022-11-27 13:20:40', 5),
(23, 'role_read', 'web', '2022-11-27 13:20:40', '2022-11-27 13:20:40', 5),
(24, 'role_edit', 'web', '2022-11-27 13:20:40', '2022-11-27 13:20:40', 5),
(25, 'role_delete', 'web', '2022-11-27 13:20:40', '2022-11-27 13:20:40', 5),
(26, 'permission', 'web', '2022-11-27 13:20:48', '2022-11-27 13:20:48', 6),
(27, 'permission_create', 'web', '2022-11-27 13:20:48', '2022-11-27 13:20:48', 6),
(28, 'permission_read', 'web', '2022-11-27 13:20:48', '2022-11-27 13:20:48', 6),
(29, 'permission_edit', 'web', '2022-11-27 13:20:48', '2022-11-27 13:20:48', 6),
(30, 'permission_delete', 'web', '2022-11-27 13:20:48', '2022-11-27 13:20:48', 6),
(31, 'aqar', 'web', '2022-11-27 13:20:58', '2022-11-27 13:20:58', 7),
(32, 'aqar_create', 'web', '2022-11-27 13:20:58', '2022-11-27 13:20:58', 7),
(33, 'aqar_read', 'web', '2022-11-27 13:20:58', '2022-11-27 13:20:58', 7),
(34, 'aqar_edit', 'web', '2022-11-27 13:20:58', '2022-11-27 13:20:58', 7),
(35, 'aqar_delete', 'web', '2022-11-27 13:20:58', '2022-11-27 13:20:58', 7);

-- --------------------------------------------------------

--
-- Table structure for table `permission_names`
--

CREATE TABLE `permission_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_names`
--

INSERT INTO `permission_names` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, '2022-11-27 13:19:45', '2022-11-27 13:19:45'),
(2, 'notice', NULL, '2022-11-27 13:20:18', '2022-11-27 13:20:18'),
(3, 'event', NULL, '2022-11-27 13:20:23', '2022-11-27 13:20:23'),
(4, 'banner', NULL, '2022-11-27 13:20:30', '2022-11-27 13:20:30'),
(5, 'role', NULL, '2022-11-27 13:20:40', '2022-11-27 13:20:40'),
(6, 'permission', NULL, '2022-11-27 13:20:48', '2022-11-27 13:20:48'),
(7, 'aqar', NULL, '2022-11-27 13:20:58', '2022-11-27 13:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-10-17 16:24:28', '2022-10-17 16:24:28'),
(2, 'Teacher', 'web', '2022-11-27 16:37:24', '2022-11-27 16:37:24'),
(3, 'Staff', 'web', '2023-01-27 11:02:28', '2023-01-27 11:02:28'),
(4, 'Test', 'web', '2023-01-27 11:04:04', '2023-01-27 11:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(34, 1),
(35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `session_wise_models`
--

CREATE TABLE `session_wise_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `upload` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `session_wise_models`
--

INSERT INTO `session_wise_models` (`id`, `session`, `title`, `upload`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2019-20', 'test', 'upload/AQAR/Session/session-1673199572-84.png', '2023-01-08 17:40:01', '2023-01-08 17:39:32', '2023-01-08 17:40:01'),
(2, '2019-20', 'AQAR 2019-20', 'upload/AQAR/Session/session-1676476198-27.pdf', NULL, '2023-02-15 15:49:58', '2023-02-15 15:49:58'),
(3, '2018-19', 'AQAR 2018-19', 'upload/AQAR/Session/session-1676476251-54.pdf', NULL, '2023-02-15 15:50:51', '2023-02-15 15:50:51'),
(4, '2017-18', 'AQAR 2017-18', 'upload/AQAR/Session/session-1676476270-17.pdf', NULL, '2023-02-15 15:51:10', '2023-02-15 15:51:10'),
(5, '2016-17', 'AQAR 2016-17', 'upload/AQAR/Session/session-1676476286-93.pdf', NULL, '2023-02-15 15:51:26', '2023-02-15 15:51:26'),
(6, '2016-17', 'AQAR 2015-16', 'upload/AQAR/Session/session-1682574376-69.pdf', NULL, '2023-04-27 05:46:16', '2023-04-27 05:46:16'),
(7, '2020-21', 'AQAR 2020-21', 'upload/AQAR/Session/session-1682659205-7.pdf', NULL, '2023-04-28 05:20:05', '2023-04-28 05:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `customer_code` varchar(255) DEFAULT NULL,
  `customer_type` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `phone`, `password`, `pic`, `address`, `customer_code`, `customer_type`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'dfgd', 'dfgd', 'admin@gmail.com', NULL, '235235', '$2a$12$AJMFVQAt7.LDc3yJH5FJve.OQk9BD/29WXrqj4xMlshVq8OC.mKxW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aqar_sessions`
--
ALTER TABLE `aqar_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `errors`
--
ALTER TABLE `errors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_galleries`
--
ALTER TABLE `event_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `permission_names`
--
ALTER TABLE `permission_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `session_wise_models`
--
ALTER TABLE `session_wise_models`
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
-- AUTO_INCREMENT for table `aqar_sessions`
--
ALTER TABLE `aqar_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `errors`
--
ALTER TABLE `errors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_galleries`
--
ALTER TABLE `event_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `permission_names`
--
ALTER TABLE `permission_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `session_wise_models`
--
ALTER TABLE `session_wise_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
