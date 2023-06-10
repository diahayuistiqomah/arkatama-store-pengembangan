-- Adminer 4.8.1 MySQL 8.0.33-0ubuntu0.22.04.2 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(3,	'2023_05_27_015555_create_role_table',	1),
(4,	'2023_05_27_015750_create_produk_table',	1),
(5,	'2023_05_27_015801_create_produk_kategori_table',	1),
(6,	'2023_05_27_112142_create_slider_table',	1);


DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk_kategori` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produk_kategori` (`id_produk_kategori`),
  CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_produk_kategori`) REFERENCES `produk_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produk` (`id`, `foto`, `nama`, `deskripsi`, `stok`, `harga`, `id_produk_kategori`, `status`, `created_at`, `updated_at`) VALUES
(18,	'1686380166_Kemeja.png',	'Kemeja Wanita',	'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',	'100',	'99999',	5,	'1',	'2023-06-09 23:56:06',	'2023-06-10 02:50:14'),
(19,	'1686380338_hijab.jpeg',	'Hijab',	'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',	'100',	'99000',	6,	'1',	'2023-06-09 23:58:58',	'2023-06-10 02:50:20');

INSERT INTO `produk_kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(5,	'Kemeja',	'2023-06-09 23:51:03',	'2023-06-09 23:51:03'),
(6,	'Gamis',	'2023-06-09 23:51:10',	'2023-06-09 23:51:10'),
(7,	'Celana',	'2023-06-09 23:51:15',	'2023-06-09 23:51:15');

INSERT INTO `role` (`id`, `nama_role`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'2023-05-27 05:51:05',	'2023-05-27 08:40:45'),
(2,	'Staff',	'2023-06-01 06:17:01',	'2023-06-01 06:17:01'),
(3,	'User',	'2023-06-01 06:17:07',	'2023-06-01 06:17:07');

INSERT INTO `slider` (`id`, `foto`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(9,	'1686378302_pngtree-celtic-life-tree-decoration-pattern-png-image_3933227.jpg',	'Gamis',	1,	'2023-06-09 23:25:02',	'2023-06-09 23:48:16'),
(11,	'1686379646_Kemeja.png',	'Kemeja',	1,	'2023-06-09 23:47:26',	'2023-06-09 23:47:26');

INSERT INTO `users` (`id`, `nama`, `email`, `nohp`, `password`, `foto`, `alamat`, `id_role`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'admin@gmail.com',	'088888888888',	'$2y$10$U24mwaeYLuPcu0aHmdmKxeCdwYGiBmhiotyevLf3yTpqagRDjcQwG',	'1685209546_Pashmina Inner 2in1 - Sage.png',	'kudus',	1,	'2023-05-27 08:40:05',	'2023-06-01 06:18:35'),
(5,	'Staff',	'staff@gmail.com',	'087777777777',	'$2y$10$pyPXTb.Lhy5zODgKavZqoeGhmtWOkDI7s4tFZ0hFy/08Y82lu1Fui',	'1685625496_3.jpg',	'kudus',	2,	'2023-06-01 06:18:16',	'2023-06-01 06:18:16'),
(6,	'User',	'User@gmail.com',	'089999999999',	'$2y$10$ykVFYjy4MMx/pdeaDmtBxeFF0k3CeJrofpwrrGinXetc.sOVPQD8C',	'1685625556_4.jpg',	'Pati',	3,	'2023-06-01 06:19:16',	'2023-06-01 06:19:16');

-- 2023-06-10 09:51:08
