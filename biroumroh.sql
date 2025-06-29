-- phpMyAdmin SQL Dump - Rearranged
-- Database: `biroumroh`

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Charset settings
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- -------------------------
-- Create Tables
-- -------------------------

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_pt` varchar(255) DEFAULT NULL,
  `pemilik` varchar(255) DEFAULT NULL,
  `ijin_biro` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','biro','jamaah') NOT NULL DEFAULT 'biro',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `paket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `media` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `tanggal_keberangkatan` date NOT NULL,
  `tanggal_kepulangan` date NOT NULL,
  `bandara` varchar(255) NOT NULL,
  `airline` varchar(255) NOT NULL,
  `flight` enum('direct','transit') NOT NULL DEFAULT 'direct',
  `kota_transit` varchar(255) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `tiket` enum('yes','no') NOT NULL DEFAULT 'no',
  `visa` enum('yes','no') NOT NULL DEFAULT 'no',
  `akomodasi` enum('yes','no') NOT NULL DEFAULT 'no',
  `makan` enum('yes','no') NOT NULL DEFAULT 'no',
  `umroh` enum('yes','no') NOT NULL DEFAULT 'no',
  `tour` varchar(255) DEFAULT NULL,
  `airpot_handling` enum('yes','no') NOT NULL DEFAULT 'no',
  `bus` enum('yes','no') NOT NULL DEFAULT 'no',
  `zam` enum('yes','no') NOT NULL DEFAULT 'no',
  `passport` enum('yes','no') NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- -------------------------
-- Insert Data
-- -------------------------

INSERT INTO `users` (`id`, `nama`, `nama_pt`, `pemilik`, `ijin_biro`, `alamat`, `telepon`, `email`, `password`, `email_verified_at`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AyoUmrah', 'PT. Umrahin', 'Gunardi', 'HS - 4512678', 'surabaya', '0210000', 'ayoumrah@mail.com', '$2y$10$S6qKsPjWqnO8GDm/4yJyIujZQ8bDro.GqDSlYsnEeTCH1izo1UpJG', NULL, 'biro', NULL, NULL, NULL),
(2, 'admin', '', '', '', '', '0210000', 'admin@mail.com', '$2y$10$7.JMlVN4OFmgRhvtAGxhu.bfw3bu6dTstIu6K4Qn88lki6Ra71JwK', NULL, 'admin', NULL, NULL, NULL);

INSERT INTO `paket` (`id`, `name`, `media`, `user_id`, `kode`, `kota`, `tanggal_keberangkatan`, `tanggal_kepulangan`, `bandara`, `airline`, `flight`, `kota_transit`, `harga`, `tiket`, `visa`, `akomodasi`, `makan`, `umroh`, `tour`, `airpot_handling`, `bus`, `zam`, `passport`, `created_at`, `updated_at`) VALUES
(1, 'Umrah Asik', 'contoh', 1, 'UA - 001', 'Surabaya', '2012-12-24', '2012-12-25', 'Soekarno Hatta', 'Lion Air', 'direct', '', 1000000, 'yes', 'yes', 'yes', 'yes', 'yes', 'kemana ya', 'yes', 'no', 'no', 'no', NULL, NULL),
(2, 'Umrah Transit', 'contoh', 1, 'UA - 001', 'Surabaya', '2012-12-24', '2012-12-25', 'Soekarno Hatta', 'Lion Air', 'transit', 'transit dimana ya', 1000000, 'no', 'no', 'no', 'no', 'no', 'transit kemana ya', 'yes', 'yes', 'yes', 'yes', NULL, NULL);

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_15_095806_create_biro_table', 1),
(7, '2024_05_15_030923_create_carousels_table', 1);

-- -------------------------
-- Add Indexes
-- -------------------------

ALTER TABLE `carousels` ADD PRIMARY KEY (`id`);
ALTER TABLE `failed_jobs` ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);
ALTER TABLE `migrations` ADD PRIMARY KEY (`id`);
ALTER TABLE `paket` ADD PRIMARY KEY (`id`), ADD KEY `paket_user_id_foreign` (`user_id`);
ALTER TABLE `password_resets` ADD KEY `password_resets_email_index` (`email`);
ALTER TABLE `password_reset_tokens` ADD PRIMARY KEY (`email`);
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

-- -------------------------
-- Auto Increment
-- -------------------------

ALTER TABLE `carousels` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
ALTER TABLE `failed_jobs` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `migrations` MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
ALTER TABLE `paket` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `personal_access_tokens` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `users` MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

-- -------------------------
-- Add Foreign Key Constraints
-- -------------------------

ALTER TABLE `paket`
  ADD CONSTRAINT `paket_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

COMMIT;

-- Charset reset
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
