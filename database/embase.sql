-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 02:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `embase`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_agen` varchar(255) NOT NULL,
  `nomor_agen` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id`, `nama_agen`, `nomor_agen`, `alamat`) VALUES
(1, 'Sumber Jaya Elpiji', '0813116131098', 'Perumdam Blok L-13 RT03, RW12, Singosari, Kab. Malang');

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
-- Table structure for table `gudang`
--

CREATE TABLE `gudang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(255) NOT NULL
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_14_015608_petugas', 1),
(6, '2023_11_18_041643_pangkalan', 2),
(7, '2023_11_18_043822_transaksi', 3),
(8, '2023_11_18_044601_pangkalann', 4),
(9, '2023_11_18_045058_gudang', 5),
(10, '2023_11_18_050300_gudang', 6),
(11, '2023_11_18_052758_pembayaran', 7),
(12, '2023_11_18_052942_pembayaran', 8),
(13, '2023_11_18_053116_pembayaran', 9),
(14, '2023_11_19_073507_agen', 10),
(15, '2023_11_19_073746_agen', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pangkalan`
--

CREATE TABLE `pangkalan` (
  `id` int(20) NOT NULL,
  `nama_pangkalan` varchar(255) NOT NULL,
  `qty_kontrak` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama_provinsi` varchar(70) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `nama_kelurahan` varchar(50) NOT NULL,
  `kode_pos` int(6) NOT NULL,
  `alamat` text NOT NULL,
  `latitude` int(20) NOT NULL,
  `longitude` int(20) NOT NULL,
  `tipe_pembayaran` varchar(20) NOT NULL,
  `nomor_pangkalan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pangkalan`
--

INSERT INTO `pangkalan` (`id`, `nama_pangkalan`, `qty_kontrak`, `status`, `nama_provinsi`, `nama_kota`, `nama_kecamatan`, `nama_kelurahan`, `kode_pos`, `alamat`, `latitude`, `longitude`, `tipe_pembayaran`, `nomor_pangkalan`) VALUES
(8, 'Firga Shop', 1000, 'Aktif', 'Jawa Timur', 'Malang', 'Singosari', 'Randuagung', 65153, 'Perum Alam Hijau Lestari', 12424, 232424, 'Cashless', '0819647141'),
(9, 'Karman Shop', 1000, 'Aktif', 'Jawa Timur', 'Malang', 'Singosari', 'Pagentan', 65153, 'Jl. Candirenggo No.5', -8, 113, 'Cashless', '085427632623'),
(10, 'Toko Jainal\r\n\r\n', 3000, 'Aktif', 'Jawa Timur', 'Malang', 'Kedungkandang', 'Cemorokandang', 65138, 'Jl. Raya Sudimoro Blok L-11', -8, 113, 'Cashless', '085155423247');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_petugas` int(20) NOT NULL,
  `id_pangkalan` int(20) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `status` enum('Belum Dibayar','Sudah Dibayar','','') NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_petugas`, `id_pangkalan`, `id_transaksi`, `harga_total`, `status`, `date`) VALUES
(2, 1, 8, 2, 1400000, 'Belum Dibayar', '2023-12-03'),
(3, 4, 10, 3, 15000000, 'Belum Dibayar', '2023-12-04'),
(4, 1, 8, 4, 14000000, 'Sudah Dibayar', '2023-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `id_petugas` int(20) NOT NULL,
  `id_pangkalan` int(20) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `status_pengiriman` enum('Siap Dikirim','Dalam Pengiriman','Selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(20) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `nomor_petugas` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `nomor_petugas`, `alamat`) VALUES
(1, 'M Daffa Farrell', '085155442305', 'Alam Hijau, Singosari'),
(3, 'Nafa', '450722', 'Jl. Soekarno Hatta, Malang'),
(4, 'Abed', '085134838953', 'Shopify Rebellion'),
(5, 'Samsul', '3082472422', 'Pasuruan');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_petugas` int(20) NOT NULL,
  `id_pangkalan` int(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `date` date NOT NULL,
  `status_pengiriman` enum('Siap Dikirim','Dalam Pengiriman','Diterima Pangkalan') NOT NULL,
  `status_transaksi` enum('Dalam Proses','Selesai','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_petugas`, `id_pangkalan`, `jumlah`, `harga`, `date`, `status_pengiriman`, `status_transaksi`) VALUES
(2, 1, 8, 100, 14000, '2023-12-03', 'Siap Dikirim', 'Dalam Proses'),
(3, 4, 10, 1000, 15000, '2023-12-04', 'Siap Dikirim', 'Dalam Proses'),
(4, 1, 8, 1000, 14000, '2023-12-04', 'Siap Dikirim', 'Dalam Proses');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `after_insert_transaksi` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
  -- Hitung harga total
  DECLARE total_harga INT;
  SET total_harga = NEW.jumlah * NEW.harga;

  -- Masukkan data ke tabel pembayaran
  INSERT INTO pembayaran (id_petugas, id_pangkalan, id_transaksi, harga_total, status, date)
  VALUES (NEW.id_petugas, NEW.id_pangkalan, NEW.id, total_harga, 'Belum Dibayar', NEW.date);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangkalan`
--
ALTER TABLE `pangkalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_pangkalan` (`id_pangkalan`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pangkalan` (`id_pangkalan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_petugas` (`id_petugas`),
  ADD KEY `fk_transaksi_pangkalan` (`id_pangkalan`);

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
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pangkalan`
--
ALTER TABLE `pangkalan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_pangkalan`) REFERENCES `pangkalan` (`id`),
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`);

--
-- Constraints for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `pengiriman_ibfk_1` FOREIGN KEY (`id_pangkalan`) REFERENCES `pangkalan` (`id`),
  ADD CONSTRAINT `pengiriman_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`),
  ADD CONSTRAINT `pengiriman_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`),
  ADD CONSTRAINT `pengiriman_ibfk_4` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_pangkalan` FOREIGN KEY (`id_pangkalan`) REFERENCES `pangkalan` (`id`),
  ADD CONSTRAINT `fk_transaksi_petugas` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
