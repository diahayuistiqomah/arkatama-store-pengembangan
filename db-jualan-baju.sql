-- Adminer 4.8.1 MySQL 8.0.33-0ubuntu0.22.04.2 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `id` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `id_produk_kategori` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produk_kategori` (`id_produk_kategori`),
  CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_produk_kategori`) REFERENCES `produk_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produk` (`id`, `foto`, `nama`, `deskripsi`, `stok`, `harga`, `id_produk_kategori`, `status`, `created_at`, `updated_at`) VALUES
(20,	'1686402210_aila-dress-masala-coral-bloom-scaled.jpg',	'AILA DRESS IN MASALA',	'MATERIALS : COTTON VOILLE 80s\r\n\r\nAila dress is designed for looks and ease, made to breathablee and built for comfort. This dress has a embroidery detail in front make the dress looks so beautifull and classy, the knee length make this charming dress perfect.',	'99',	599000,	8,	'1',	'2023-06-10 06:03:30',	'2023-06-10 06:03:30'),
(21,	'1686402277_aila-dress-black-coral-bloom-scaled.jpg',	'AILA DRESS IN BLACK',	'MATERIALS : COTTON VOILLE 80s\r\n\r\nAila dress is designed for looks and ease, made to breathablee and built for comfort. This dress has a embroidery detail in front make the dress looks so beautifull and classy, the knee length make this charming dress perfect.',	'99',	599000,	8,	'1',	'2023-06-10 06:04:37',	'2023-06-10 06:04:37'),
(23,	'1686402419_athalia-dress-masala-coral-bloom-scaled.jpg',	'ATHALIA DRESS IN MASALA',	'MATERIALS : COTTON VOILLE 80s\r\n\r\nA mini dress with beautiful designed. The mini dress is short enough to flirty but still long enough to be appropriate for most event. Athalia dress has pretty detail at the front.\r\n\r\nColor available in black, masala & pink clay',	'99',	399000,	8,	'1',	'2023-06-10 06:06:59',	'2023-06-10 06:06:59'),
(24,	'1686402499_AMB09847_1616669301301-scaled.jpg',	'AORA KIMONO IN MAROON',	'MATERIAL : FUJET\r\n\r\nBeautiful kimono style with a really high-quality fabric, really loose silhouette, you can use is as a dress, cardigan. Color: Available in Olive, Peach & Fired Brick\r\n\r\n*please allow 1-2 cm differences due to manual measurement*',	'99',	499000,	9,	'1',	'2023-06-10 06:08:19',	'2023-06-10 06:08:19'),
(25,	'1686402565_3893ADAA-34BE-4AEE-B40B-31AB4049C384_1616850955610-scaled.jpeg',	'AORA KIMONO IN OLIVE',	'MATERIAL : FUJET\r\n\r\nBeautiful kimono style with a really high-quality fabric, really loose silhouette, you can use is as a dress, cardigan. Color: Available in Olive, Peach & Fired Brick\r\n\r\n*please allow 1-2 cm differences due to manual measurement*',	'99',	499000,	9,	'1',	'2023-06-10 06:09:25',	'2023-06-10 06:09:25'),
(26,	'1686402703_coral-bloom-darla-jumpsuit-peach-01_1629265352900-scaled.jpg',	'DARLA JUMPSUIT IN DUSTY PINK',	'MATERIAL : LINEN L612\r\n\r\nDarla Jumpsuit, a linen jumpsuit that can be worn on any occasions. Also comes with convenience pocket and tie belt. (color available in: blue, sand, and dusty pink)\r\n\r\n*please allow 1-2 cm differences due to manual measurement*',	'99',	899000,	10,	'1',	'2023-06-10 06:11:43',	'2023-06-10 06:11:43'),
(27,	'1686402871_coral-bloom-darla-jumpsuit-blue-01_1629265920436-scaled.jpg',	'DARLA JUMPSUIT IN BLUE',	'MATERIAL : LINEN L612\r\n\r\nDarla Jumpsuit, a linen jumpsuit that can be worn on any occasions. Also comes with convenience pocket and tie belt. (color available in: blue, sand, and dusty pink)\r\n\r\n*please allow 1-2 cm differences due to manual measurement*',	'99',	899000,	10,	'1',	'2023-06-10 06:14:31',	'2023-06-10 06:14:31'),
(28,	'1686403042_ELENA_JUMPSUIT_6_1616639649007-scaled.jpg',	'ELENA PLAYSUIT',	'Materials : rayon mosscrepe\r\n\r\nElena jumpsuit has a button on the front that allows you to determine the size of the V-shaped opening on your neck.\r\n\r\n*please allow 1-2 cm differences due to manual measurement*',	'99',	299000,	10,	'1',	'2023-06-10 06:17:22',	'2023-06-10 06:17:22'),
(29,	'1686403148_calista-kimono-ivory-coral-bloom-scaled.jpg',	'CALISTA KIMONO IN IVORY',	'MATERIALS : P 400\r\n\r\nBeautiful kimono style with a really high-quality fabric, Beautiful embroidery details, this kimono looks more pretty and different because the embroidery is made by hand, you can use is as a cardigan with short pant and Bra top or Bikini.\r\n\r\n**PLEASE NOTE THIS IS A PRE-ORDER ITEM, IT WILL TAKE 1 – 2 WEEKS PRODUCTION TIME**',	'99',	999000,	9,	'1',	'2023-06-10 06:19:08',	'2023-06-10 06:19:08');

DROP TABLE IF EXISTS `produk_kategori`;
CREATE TABLE `produk_kategori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produk_kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(8,	'Dresses',	'2023-06-10 06:01:57',	'2023-06-10 06:02:13'),
(9,	'Kimono',	'2023-06-10 06:07:18',	'2023-06-10 06:07:18'),
(10,	'Jumpsuit',	'2023-06-10 06:10:25',	'2023-06-10 06:10:25');

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
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `slider` (`id`, `foto`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(9,	'1686403838_349355365_1438972726848161_4474327533264155631_nfull.jpg',	'Slide 1',	1,	'2023-06-09 23:25:02',	'2023-06-10 06:30:38'),
(11,	'1686403856_346124487_6205462149490864_2626043438930804477_nfull.jpg',	'Slide 2',	1,	'2023-06-09 23:47:26',	'2023-06-10 06:31:15'),
(12,	'1686403869_340032575_193871426727814_7510321803697140873_nfull.jpg',	'Slide 3',	1,	'2023-06-10 06:27:17',	'2023-06-10 06:31:09');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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

-- 2023-06-10 13:52:46
