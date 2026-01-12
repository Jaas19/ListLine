-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-01-2026 a las 05:24:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `listline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-boost.roster.scan', 'a:2:{s:6:\"roster\";O:21:\"Laravel\\Roster\\Roster\":3:{s:13:\"\0*\0approaches\";O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:11:\"\0*\0packages\";O:32:\"Laravel\\Roster\\PackageCollection\":2:{s:8:\"\0*\0items\";a:8:{i:0;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^12.0\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:LARAVEL\";s:14:\"\0*\0packageName\";s:17:\"laravel/framework\";s:10:\"\0*\0version\";s:7:\"12.36.1\";s:6:\"\0*\0dev\";b:0;}i:1;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"v0.3.7\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:PROMPTS\";s:14:\"\0*\0packageName\";s:15:\"laravel/prompts\";s:10:\"\0*\0version\";s:5:\"0.3.7\";s:6:\"\0*\0dev\";b:0;}i:2;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"v0.3.2\";s:10:\"\0*\0package\";E:33:\"Laravel\\Roster\\Enums\\Packages:MCP\";s:14:\"\0*\0packageName\";s:11:\"laravel/mcp\";s:10:\"\0*\0version\";s:5:\"0.3.2\";s:6:\"\0*\0dev\";b:1;}i:3;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.24\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:PINT\";s:14:\"\0*\0packageName\";s:12:\"laravel/pint\";s:10:\"\0*\0version\";s:6:\"1.25.1\";s:6:\"\0*\0dev\";b:1;}i:4;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.41\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:SAIL\";s:14:\"\0*\0packageName\";s:12:\"laravel/sail\";s:10:\"\0*\0version\";s:6:\"1.47.0\";s:6:\"\0*\0dev\";b:1;}i:5;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:4:\"^3.8\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:PEST\";s:14:\"\0*\0packageName\";s:12:\"pestphp/pest\";s:10:\"\0*\0version\";s:5:\"3.8.4\";s:6:\"\0*\0dev\";b:1;}i:6;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:7:\"11.5.33\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:PHPUNIT\";s:14:\"\0*\0packageName\";s:15:\"phpunit/phpunit\";s:10:\"\0*\0version\";s:7:\"11.5.33\";s:6:\"\0*\0dev\";b:1;}i:7;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:0:\"\";s:10:\"\0*\0package\";E:41:\"Laravel\\Roster\\Enums\\Packages:TAILWINDCSS\";s:14:\"\0*\0packageName\";s:11:\"tailwindcss\";s:10:\"\0*\0version\";s:6:\"4.1.16\";s:6:\"\0*\0dev\";b:1;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:21:\"\0*\0nodePackageManager\";E:43:\"Laravel\\Roster\\Enums\\NodePackageManager:NPM\";}s:9:\"timestamp\";i:1762294386;}', 1762380786);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transmissor_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `header` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `transmissor_id`, `receiver_id`, `header`, `body`, `image`, `created_at`, `updated_at`) VALUES
(1, 5, 4, 'Saludos', 'Saludos', '', '2026-01-12 03:36:27', '2026-01-12 03:36:27'),
(2, 5, 4, 'Saludos', 'Saludos', 'messages/K6gOXGhWniu3tbWzDeXLZUBJOTfawDoXjaBf1N9U.png', '2026-01-12 04:16:51', '2026-01-12 04:16:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '0001_01_01_000000_create_users_table', 1),
(5, '0001_01_01_000001_create_cache_table', 1),
(6, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `programs`
--

INSERT INTO `programs` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Gato', 1, NULL, NULL),
(2, 'Premier Plus', 1, NULL, NULL),
(3, 'Venta Activa', 1, NULL, NULL),
(4, 'Maxplay', 1, NULL, NULL),
(5, 'Maticlot', 1, NULL, NULL),
(6, 'Parley', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kuguQwILgmhM1NBsg1NIwWeAlndQQUQBsy3bc7ML', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:146.0) Gecko/20100101 Firefox/146.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQkJRMWVDaE1CV1BOUGhQN1RNZTZ2TmFvRTFjSDdzTnl2MkZOVzVDaSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czoxMDoiYXV0aC5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1768191793);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `totals`
--

CREATE TABLE `totals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `day` date NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `totals`
--

INSERT INTO `totals` (`id`, `type_id`, `user_id`, `program_id`, `day`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(2, 2, 5, 1, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(3, 3, 5, 1, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(4, 4, 5, 1, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(5, 5, 5, 1, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(6, 1, 5, 2, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(7, 2, 5, 2, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(8, 3, 5, 2, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(9, 4, 5, 2, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(10, 5, 5, 2, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(11, 1, 5, 3, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(12, 2, 5, 3, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(13, 3, 5, 3, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(14, 4, 5, 3, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(15, 5, 5, 3, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(16, 1, 5, 4, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(17, 2, 5, 4, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(18, 3, 5, 4, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(19, 4, 5, 4, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(20, 5, 5, 4, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(21, 1, 5, 5, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(22, 2, 5, 5, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(23, 3, 5, 5, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(24, 4, 5, 5, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(25, 5, 5, 5, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(26, 1, 5, 6, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(27, 2, 5, 6, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(28, 3, 5, 6, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(29, 4, 5, 6, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(30, 5, 5, 6, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(31, 1, 6, 1, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(32, 2, 6, 1, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(33, 3, 6, 1, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(34, 4, 6, 1, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(35, 5, 6, 1, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(36, 1, 6, 2, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(37, 2, 6, 2, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(38, 3, 6, 2, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(39, 4, 6, 2, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(40, 5, 6, 2, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(41, 1, 6, 3, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(42, 2, 6, 3, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(43, 3, 6, 3, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(44, 4, 6, 3, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(45, 5, 6, 3, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(46, 1, 6, 4, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(47, 2, 6, 4, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(48, 3, 6, 4, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(49, 4, 6, 4, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(50, 5, 6, 4, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(51, 1, 6, 5, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(52, 2, 6, 5, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(53, 3, 6, 5, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(54, 4, 6, 5, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(55, 5, 6, 5, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(56, 1, 6, 6, '2026-01-11', 100, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(57, 2, 6, 6, '2026-01-11', 10, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(58, 3, 6, 6, '2026-01-11', 40, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(59, 4, 6, 6, '2026-01-11', 60, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(60, 5, 6, 6, '2026-01-11', 1, '2026-01-12 04:29:26', '2026-01-12 04:29:26'),
(61, 3, 6, 1, '2026-01-12', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `total_types`
--

CREATE TABLE `total_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `total_types`
--

INSERT INTO `total_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Venta', 1, NULL, NULL),
(2, 'Premios', 1, NULL, NULL),
(3, 'Comisión', 1, NULL, NULL),
(4, 'Saldo', 1, NULL, NULL),
(5, 'Ganadores', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `photo`, `password`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Bulmara', 'bulmara@gmail.com', 'admin', 'public/profilePictures/KU3xP9D4IkyfXak1GiJvTigHU7svOGPBFskFNfJg.png', '$2y$12$3WhXJZoWZAhZz7bvyrqmOO66fe.GxNOdrh98Q8OzzwY4EWdC3muaq', 1, '2025-11-05 02:56:46', '2025-11-05 02:56:46'),
(5, 'Tauro', 'Tauro@gmail.com', 'user', 'profilePictures/tgqthT6z8VqoayCV0UZgCWAR9mGQcqIO0bdvAvqi.png', '$2y$12$BGMFjJ0cjrYPykFNaktbYOV7dkxGZ5tZq7tPEVfyHwcYRgdBdGaJG', 1, '2026-01-12 00:29:52', '2026-01-12 00:29:52'),
(6, 'La Victoria', 'Victoria@gmail.com', 'user', 'profilePictures/XD2C7aZVTjU78DnvWKTUqPICPMYAsQe6TVkUvQKG.png', '$2y$12$GYHjqf4TXzWFkEZxSZamiOcMAW2Wz9XCeZ9V9sqZ0rWU/b82rdgZ.', 1, '2026-01-12 00:30:19', '2026-01-12 00:30:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receiver_id` (`receiver_id`),
  ADD KEY `transmissor_id` (`transmissor_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `totals`
--
ALTER TABLE `totals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indices de la tabla `total_types`
--
ALTER TABLE `total_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `totals`
--
ALTER TABLE `totals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT de la tabla `total_types`
--
ALTER TABLE `total_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`transmissor_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `totals`
--
ALTER TABLE `totals`
  ADD CONSTRAINT `totals_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `totals_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `total_types` (`id`),
  ADD CONSTRAINT `totals_ibfk_4` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
