-- Adminer 4.8.1 MySQL 8.0.33-0ubuntu0.22.04.2 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(3,	'2023_05_27_015555_create_role_table',	1),
(4,	'2023_05_27_015750_create_produk_table',	1),
(5,	'2023_05_27_015801_create_produk_kategori_table',	1),
(6,	'2023_05_27_112142_create_slider_table',	1);

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk_kategori` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produk_kategori` (`id_produk_kategori`),
  CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_produk_kategori`) REFERENCES `produk_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produk` (`id`, `foto`, `nama`, `deskripsi`, `stok`, `harga`, `id_produk_kategori`, `created_at`, `updated_at`) VALUES
(3,	'1685235530_Pashmina Inner 2in1 - Sage.png',	'Pashmina Inner 2in1 - Sage',	'Hijab nyaman di pakai',	'100',	'99000',	1,	'2023-05-27 17:58:50',	'2023-05-27 17:58:50'),
(4,	'1685235568_1.jpg',	'Pashmina Inner 2in1 - Iron Grey',	'Nyaman dipakai',	'100',	'99000',	1,	'2023-05-27 17:59:28',	'2023-05-27 17:59:28'),
(5,	'1685235635_3.jpg',	'Pashmina Inner 2in1 - Choca',	'Nyaman dipakai',	'100',	'99000',	1,	'2023-05-27 18:00:35',	'2023-05-27 18:00:35'),
(6,	'1685235660_4.jpg',	'Pashmina Inner 2in1 - Burgundy',	'Nyaman dipakai',	'100',	'99000',	1,	'2023-05-27 18:01:00',	'2023-05-27 18:01:00');

DROP TABLE IF EXISTS `produk_kategori`;
CREATE TABLE `produk_kategori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produk_kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1,	'Hijab',	NULL,	'2023-05-27 10:09:25');

DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `role` (`id`, `nama_role`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'2023-05-27 05:51:05',	'2023-05-27 08:40:45'),
(2,	'Staff',	'2023-06-01 06:17:01',	'2023-06-01 06:17:01'),
(3,	'User',	'2023-06-01 06:17:07',	'2023-06-01 06:17:07');

DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `slider` (`id`, `foto`, `keterangan`, `created_at`, `updated_at`) VALUES
(3,	'1685209050_slider.jpg',	'slide 1',	'2023-05-27 10:36:59',	'2023-05-27 10:37:30');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_ibfk_1` (`id_role`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `nama`, `email`, `nohp`, `password`, `foto`, `alamat`, `id_role`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'admin@gmail.com',	'088888888888',	'$2y$10$U24mwaeYLuPcu0aHmdmKxeCdwYGiBmhiotyevLf3yTpqagRDjcQwG',	'1685209546_Pashmina Inner 2in1 - Sage.png',	'kudus',	1,	'2023-05-27 08:40:05',	'2023-06-01 06:18:35'),
(5,	'Staff',	'staff@gmail.com',	'087777777777',	'$2y$10$pyPXTb.Lhy5zODgKavZqoeGhmtWOkDI7s4tFZ0hFy/08Y82lu1Fui',	'1685625496_3.jpg',	'kudus',	2,	'2023-06-01 06:18:16',	'2023-06-01 06:18:16'),
(6,	'User',	'User@gmail.com',	'089999999999',	'$2y$10$ykVFYjy4MMx/pdeaDmtBxeFF0k3CeJrofpwrrGinXetc.sOVPQD8C',	'1685625556_4.jpg',	'Pati',	3,	'2023-06-01 06:19:16',	'2023-06-01 06:19:16');

-- 2023-06-09 01:33:50
