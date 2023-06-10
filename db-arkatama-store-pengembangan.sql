-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 06:43 PM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-jualan-baju`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_05_27_015555_create_role_table', 1),
(4, '2023_05_27_015750_create_produk_table', 1),
(5, '2023_05_27_015801_create_produk_kategori_table', 1),
(6, '2023_05_27_112142_create_slider_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `id_produk_kategori` int NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `foto`, `nama`, `deskripsi`, `stok`, `harga`, `id_produk_kategori`, `status`, `created_at`, `updated_at`) VALUES
(30, '1686420134_kemeja1.jpeg', 'Kemeja Lengan Pendek Wanita - Biru', 'Park Shirt Top\r\nIDR 135.000\r\nMaterial: Premium Polyester Twill\r\nColors: Sage, Blue, White, Black, Marine Blue, Terracota, Beige, Fuschia, Pine Green, Milo\r\n\r\nSize\r\nSmall\r\nLingkar Dada: 100cm\r\nPanjang Baju: 57-64cm\r\n\r\nMedium\r\nLingkar Dada: 110cm\r\nPanjang Baju: 57-64cm\r\n\r\nLarge\r\nLingkar Dada: 120cm\r\nPanjang Baju: 57-64cm\r\n\r\nXL\r\nLD 130cm\r\nPanjang Baju: 57-64cm', '99', 149000, 12, '1', '2023-06-10 11:02:14', '2023-06-10 11:02:14'),
(31, '1686420181_kemeja2.jpeg', 'Kemeja Lengan Pendek Wanita - Putih', 'Park Shirt Top\r\nIDR 135.000\r\nMaterial: Premium Polyester Twill\r\nColors: Sage, Blue, White, Black, Marine Blue, Terracota, Beige, Fuschia, Pine Green, Milo\r\n\r\nSize\r\nSmall\r\nLingkar Dada: 100cm\r\nPanjang Baju: 57-64cm\r\n\r\nMedium\r\nLingkar Dada: 110cm\r\nPanjang Baju: 57-64cm\r\n\r\nLarge\r\nLingkar Dada: 120cm\r\nPanjang Baju: 57-64cm\r\n\r\nXL\r\nLD 130cm\r\nPanjang Baju: 57-64cm', '99', 149000, 12, '1', '2023-06-10 11:03:01', '2023-06-10 11:03:01'),
(32, '1686420341_199b1dd290fb09df27ab605f8f49f0ed.jpeg', 'Aplikasi Kasir Bengkel Service dan Spare Part Mobil dan Motor', 'Keunggulan Software Bengkel\r\n1. Mendukung peralatan Kasir seperti, barcode scanner, mini printer (epsin tmu220, dll), cash drawer, printer dot matrix, dll\r\n2. Bisa digunakan dalam jaringan komputer LAN/Wireless tanpa perlu sharing folder sehingga keamanan data lebih terjaga\r\n3. Mendukung sistem penjualan/pembelian secara tunai maupun kredit\r\n4. Bisa mengatur dan menyimpan komisi petugas service/bengkel\r\n5. Mendukung penjualan sistem satuan maupun grosir(multi satuan) dgn tingkatan hrg yg berbeda2\r\n6. Mendukung sistem harga member yg bisa diatur harga tiap level member\r\n7. Terintegrasi dgn laporan keuangan(Kas)\r\n8. Stok dan laporan transaksi real time\r\n9. Tersedia berbagai format laporan transaksi dan laba rugi yg cukup lengkap\r\n10. Bisa melakukan Import/Export data Excel\r\n11. Multi user yg bisa diatur hak akses masing2 user\r\n12. Master data dan transaksi unlimited tidak ada batasan jumlah data yang tersimpan', '99', 499000, 11, '1', '2023-06-10 11:05:41', '2023-06-10 11:05:41'),
(33, '1686420476_9c4bdef3ee65ab4ea85577a6a25e5a01.jpeg', 'Pena Gel Lancip Hitam Jarum Needle', 'Merek: Haris\r\nTipe: Gel\r\nKetebalan: 0.38mm\r\nWarna Hitam\r\nHarga Per Lusin isi 12 pcs \r\n\r\n\r\nTidak Mudah Bocor, Sangat Bagus dan Harga sangat Terjangkau Murah', '99', 11000, 15, '1', '2023-06-10 11:07:56', '2023-06-10 11:07:56'),
(34, '1686420642_d98851a59daf922cd578d35e9c2fdab0.jpeg', 'PIN Button Mini Musik', 'READY STOCK\r\nPIN BUTTON MINI 1 PACK ISI 12pcs\r\nUKURAN : 2,5cm\r\nBAHAN : KALENG+PLASTIK\r\nUNTUK DI PASANG DI TOPI JAKET TAS DLL. \r\n.. \r\nFREE STIKER', '99', 17000, 14, '1', '2023-06-10 11:10:42', '2023-06-10 11:10:42'),
(35, '1686420756_id-11134207-7qul5-lgkccj84zdih02.jpeg', 'Erigo T-Shirt Oversize Antelope Black Unisex', 'T-Shirt HD Oversize Erigo dapat digunakan dengan dipadukan outerwear ataupun tidak. Apapun pilihanmu, T-shirt HD Oversize dapat membuat tampilanmu lebih menarik.\r\n\r\n\r\n\r\nBahan : Cotton 20s\r\n\r\nLogo Erigo : High density print :\r\n\r\n- Water base pasta / Oekotex\r\n\r\n- 32 layer print\r\n\r\n- Coating layer\r\n\r\n- Transfer method\r\n\r\n- Fit oversize\r\n\r\n\r\n\r\nUntuk Model Pria: Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran XL\r\n\r\nUntuk Model Wanita: Tinggi 168-170 cm, Berat 55 kg, Menggunakan Ukuran M\r\n\r\n\r\n\r\nToleransi setiap size 1-2 cm', '99', 99000, 13, '0', '2023-06-10 11:12:36', '2023-06-10 11:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_kategori`
--

INSERT INTO `produk_kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(11, 'Software', '2023-06-10 10:56:06', '2023-06-10 10:56:06'),
(12, 'Kemeja', '2023-06-10 10:57:23', '2023-06-10 10:57:23'),
(13, 'Kaos', '2023-06-10 10:57:28', '2023-06-10 10:57:28'),
(14, 'Pin', '2023-06-10 10:58:11', '2023-06-10 10:58:11'),
(15, 'Pena', '2023-06-10 10:58:16', '2023-06-10 10:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `nama_role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2023-05-27 05:51:05', '2023-05-27 08:40:45'),
(2, 'Staff', '2023-06-01 06:17:01', '2023-06-01 06:17:01'),
(3, 'User', '2023-06-01 06:17:07', '2023-06-01 06:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint UNSIGNED NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `foto`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(9, '1686420805_d98851a59daf922cd578d35e9c2fdab0.jpeg', 'Slide 1', 1, '2023-06-09 23:25:02', '2023-06-10 11:13:25'),
(11, '1686420831_id-11134207-7qul5-lgkccj84zdih02.jpeg', 'Slide 2', 1, '2023-06-09 23:47:26', '2023-06-10 11:13:51'),
(12, '1686420850_199b1dd290fb09df27ab605f8f49f0ed.jpeg', 'Slide 3', 0, '2023-06-10 06:27:17', '2023-06-10 11:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `nohp`, `password`, `foto`, `alamat`, `id_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '088888888888', '$2y$10$U24mwaeYLuPcu0aHmdmKxeCdwYGiBmhiotyevLf3yTpqagRDjcQwG', '1685209546_Pashmina Inner 2in1 - Sage.png', 'kudus', 1, '2023-05-27 08:40:05', '2023-06-01 06:18:35'),
(5, 'Staff', 'staff@gmail.com', '087777777777', '$2y$10$pyPXTb.Lhy5zODgKavZqoeGhmtWOkDI7s4tFZ0hFy/08Y82lu1Fui', '1685625496_3.jpg', 'kudus', 2, '2023-06-01 06:18:16', '2023-06-01 06:18:16'),
(6, 'User', 'User@gmail.com', '089999999999', '$2y$10$ykVFYjy4MMx/pdeaDmtBxeFF0k3CeJrofpwrrGinXetc.sOVPQD8C', '1685625556_4.jpg', 'Pati', 3, '2023-06-01 06:19:16', '2023-06-01 06:19:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk_kategori` (`id_produk_kategori`);

--
-- Indexes for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_ibfk_1` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_produk_kategori`) REFERENCES `produk_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
