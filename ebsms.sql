-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2022 at 08:53 PM
-- Server version: 10.3.31-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebsms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Software', 'Include all software cases', NULL, NULL),
(2, 'Hardware', 'Includes All Hardware Needs', '2022-06-25 10:40:57', '2022-06-25 10:40:57');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_20_135314_laratrust_setup_tables', 1),
(5, '2021_05_20_150519_create_sessions_table', 1),
(6, '2021_05_20_150544_create_cache_table', 1),
(7, '2021_09_28_161812_create_categories_table', 1),
(8, '2021_09_28_162006_create_problems_table', 1),
(9, '2021_09_28_162030_create_solutions_table', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(2, 'users-read', 'Read Users', 'Read Users', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(3, 'users-update', 'Update Users', 'Update Users', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-06-25 08:22:32', '2022-06-25 08:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `problem_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `booker_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`p_id`, `problem_description`, `problem_image`, `category_id`, `booker_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Knowing new Technology', NULL, 1, 3, 0, '2021-11-07 09:28:58', '2021-11-07 09:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', 'Administrator', '2022-06-25 08:22:32', '2022-06-25 08:22:32'),
(2, 'expert', 'Expert', 'Expert', '2022-06-25 08:22:33', '2022-06-25 08:22:33'),
(3, 'user', 'User', 'User', '2022-06-25 08:22:34', '2022-06-25 08:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(3, 3, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('385xnUF0qKdADerU3CEMr1aV5WadXC5CoW9TMXBb', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia0o2M2JDV3pkVldZdVlzVlRDdEhycXJSeUI2Q0IxUDFadUx3cG4ydCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655756712),
('3AAZE8ueyJGH7wQxXiPsKMsXRwEGC7QYoSUZH2fw', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzRVMTcwZzlTWVprNzNRMnd1NjlMWmtDY0UwVFhHOE41UXptTnVncCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655756703),
('7hw1IBvju4AyMLEBPZzWZmkUnQHQPhpZG4ajsQji', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEVPZWM1NkFndnByZGxOUlhJcnJtWmdmbVFGRUc5aUdZWXZrYVZySCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758153),
('9Slk11IU9H2N2qzI5oPuVwhBrseBnLCTPd3KQRYw', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS05ZSkpreGdXS0NXVXpVUXp2Q21mQ3dQRklPOHNsNkNab2ZpcXJreiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1655759187),
('ArFSpbVHgLVBgKq5dbb8atceYe2YTIBjd9KEcOBb', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0FBd3dpdUVIMjZ1QzhOY3ZZTDVMMm9XR0RRaGtIdGRXVTlxcm9FdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758075),
('CbtzGw9FUt3Ra2quZTPc9Vb06QYDzghzNlF9is79', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0ZxWGlGWEgxT0xtbG4yN0t0dldWRTFnMkJBR29mOUhlNWg1dU9EWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655759008),
('CLv4GyaoVLEDRd8MdoRyv37NevPw8QtDorSrnexZ', 5, '192.168.43.114', 'Mozilla/5.0 (Linux; Android 10; TECNO KC8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Mobile Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicFRzTFJtOVpoSU5BcEpFRHFPbGl3bjBMUlFqb2k5UXhlNkJYZXU3TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xOTIuMTY4LjQzLjEwMzo4MDAwL2hvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=', 1655716302),
('eL9qY1ytu8gErKc2Y1tVHAtfFW0gyhXdSr4KLV9D', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzJCeGNaSldiTWpLY0dRdjlPQjV5Vzl2T2I1ZXc4aXMyUDM1eTNkeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1655756578),
('eO0otzMrfLNNarKHg8udNFMuV2ifGAPpep3TsjdV', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWm1hejFaaUJBcDlSR3A2Y05XT0ZOeXUyM0hGTFNRV0pUeW5LeVBqaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1655756578),
('eZhHBrkxKhZ4m5GI3iV2NjB6JEvIicmnUhZa8iks', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS2J4Q0JMQ3lVTzAzNFFrZ0lFRDNodmhycW9mbjd4ZkFENkNuQmJpcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1655717480),
('GNBDzzkXVEhFSDUfQi3wyjrYW0AOJ0fjamsYDNYS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieTVrZlQ1WUx5d2YxbHJaY2pZalJaRHBIQ002UkxkZTI4TExUbEhiaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758098),
('HFYpgU4X0eWX9yTdnpVzjDUTbYjgFTo693zad9us', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMG9COXBvRFFYTkJmUDA0VWRXZHEzc1FlRmdwU0U3d3F5RW9HRDBDQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655759150),
('l4afj3cJIBaEbxJQXeVkPBw0uIu1vT935hN3CE2N', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWExsMzVzVDVyTUxoRmduUjZmRlRDaDNOdWZjeTRMdFc4Q2VneVhBeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655759156),
('Lxzzumr6NiUXOwQ7oqUUcWISAsYibMZqXiFhN3VU', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjcwM2x2QzN3Z2RBSFNpNmRtS0o1MzZDSTBQRFpKV1BZN3FFY280dyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655759010),
('MBpg2qZgptYHXoLXU8K67OkPHt3jMnt4H0hWcuv6', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkxrZU9wWjd6WDFlTk5MVjBZbkRZaHg1bno3dEcyQmlFTXExV0dVSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758892),
('mOp0FnNSzBXz1wm3MfIVj0ASvScifr1mHFuNA5Eb', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibTA4M1p5Q1h6NGZGa0NQOVhUQk52QW5SRHpMekZ2RkZuaUY4cXdjNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655715515),
('NgXm6pCDRlZUbnsm2Uq0kItIR12O3zmcPL5Fc2zB', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUm1RVnpEclEyU2NvNzk5OU1RRWg4MGNwaG9iMWlDYWpCT0xqZnY4MCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758886),
('q5OVIa2CtBFZYUeTGwjB5IZU9cJDv1sJeDO9E2Ac', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnRkcXhlNzIyeENJR0o1REJNN1VUWW5iRm9GMnR4YzZNazhFWWNHSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758114),
('QgJzcI0rTjipoktbr3eFJZ9AVfBWqnkHVRwr932y', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNElYSUtOUG5tSXFPbXdtMXVtdHNXWGZvUzRiZ3VEaDhGT3lRV3RrbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758094),
('R7fGcjlOQ81I2yXDzbToTJcgkXFPPNIwmzSriKUX', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVBiM3RsMUZ1czQ2dXJSdndKVERwRG9hb0hCRXkzZzhxcjg1MnBwUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758016),
('RiAfW4yXCyiFiawxexSYZ555EsVyfO9wOpU3MwPZ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUkxaUE1WdWN3Q2NHa2JrcVB1ZG5VcnVvdEt2QVBXV3VUTlllNDNrZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758133),
('rwaVCj4KNvzTsXjW0meLs85RnxFCQVL5KXYh2tnJ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiblJSYXV0Q2t6UTBQcTM5c3pacHNXVUM0dHE5YkdYcHNwZUM3U0twZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758967),
('Tkfmr9IVkD31uBQVZPgCEV3bGwlQkQ4N2sQehoor', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOW1vSFh6OElHRVVOcGVTV2JLNmlUd1ptVE0ydDdFbzRhN2dCc2IxUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655756658),
('U0kOIfNgtQok0lmcMXGJBxHAWS7v9X4n5QLhPaCO', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHVNdjJ2RExlYllRMjJPY0FNT3ZWUGJrcUcwcHVSQmZlOHhkVHdFTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758158),
('UAlojJAh6KppMCw79H4VpmzYlM2aFPa7vnE11kcE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnZvUUNZREFzSmtOSmxrelBmZkJOUVFReWkzMmZaRTlzRUxwWnoxbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758178),
('Ubqdx1byatTinhro6au0z7gUHhXAkU4A68FEr7hi', NULL, '10.42.0.163', 'Mozilla/5.0 (Linux; Android 10; TECNO KC8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Mobile Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicUZ0Uk56bFhpdmQ5czRRdUt3bmQwRW9aVDRQSWh2TjlacjdlUGZYRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1655716680),
('v9fZrhT6QBMEZIOdixrWVkWBTMuHSamFWeEiajmZ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidXRnNGQyZ3BvRDZPMHZ4SXIwMW9PUTI5RFJ5NXV2ZmcyeEJWYnpDNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655756673),
('WcUn3jHHQgv5OTud2tf8sNxhhenLy4SajAmTmtD5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0lLa1lwVEdHZFlyM0NGN2ZVOVY0anVJcGZzeVdoQUpVTVVTRUhPNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655758875),
('zdvGqLkckt6xeh32ZTp8fF30wWnY1fepIPoHOWp7', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSnYwTEZoZlN2UDY2YWllckRPYVlvTXB1ZVhMek5zMldEQ1VvMnFsRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655759038);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `s_id` bigint(20) UNSIGNED NOT NULL,
  `solution_descritpion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem_id` bigint(20) UNSIGNED NOT NULL,
  `recorder` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approval` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`s_id`, `solution_descritpion`, `problem_id`, `recorder`, `approval`, `created_at`, `updated_at`) VALUES
(1, 'Try To contanct us via this no 0622183130', 1, '2', 1, NULL, '2022-06-25 14:19:11'),
(2, 'Train Model Then Come Back For Further Helps...', 1, 'Expert', 1, '2022-06-25 13:54:27', '2022-06-25 14:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `address1`, `location`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator@app.com', NULL, NULL, NULL, NULL, '$2y$10$WwIca5ydJGpkK73oDJLjkOjH3pdAuAOn9.r3RDNLEg1atZ9a8WLu.', NULL, '2022-06-25 08:22:33', '2022-06-25 08:22:33'),
(2, 'Expert', 'expert@app.com', NULL, NULL, NULL, NULL, '$2y$10$sMWCnAXJS/ymP03rpo6vJu0YBX9Yr86CZz9/.ZJfOeHBAfwvqsC2y', NULL, '2022-06-25 08:22:33', '2022-06-25 08:22:33'),
(3, 'User', 'user@app.com', NULL, NULL, NULL, NULL, '$2y$10$vSgp.haAA.6HnvCJeCyqE.nozXONZDavnnwdYiRxWpbi2aTtG1J7.', NULL, '2022-06-25 08:22:34', '2022-06-25 08:22:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD UNIQUE KEY `cache_key_unique` (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `problems_category_id_foreign` (`category_id`),
  ADD KEY `problems_booker_id_foreign` (`booker_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `solutions_problem_id_foreign` (`problem_id`),
  ADD KEY `solutions_user_id_index` (`recorder`),
  ADD KEY `created_at` (`created_at`),
  ADD KEY `updated_at` (`updated_at`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `p_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `s_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `problems`
--
ALTER TABLE `problems`
  ADD CONSTRAINT `problems_booker_id_foreign` FOREIGN KEY (`booker_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `problems_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `solutions`
--
ALTER TABLE `solutions`
  ADD CONSTRAINT `solutions_problem_id_foreign` FOREIGN KEY (`problem_id`) REFERENCES `problems` (`p_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
