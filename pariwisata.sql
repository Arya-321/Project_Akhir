-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 02:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT pariwisatapariwisatapariwisatad5('default_password')
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_pengunjung`
--

CREATE TABLE `table_pengunjung` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(11) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_pengunjung`
--

INSERT INTO `table_pengunjung` (`id`, `nama`, `username`, `password`, `nohp`, `email`, `alamat`, `jk`) VALUES
(10, 'Ani', 'ani', 'a6c45362cf65dee14014c5396509ba22', '123456', 'ani@gmail.com', 'bandung kimpling', 'P'),
(12, 'budi', 'budi@gmail.com', '9c5fa085ce256c7c598f6710584ab25d', '123456', 'budi@gmail.com', 'kemantran tegal', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `table_rating`
--

CREATE TABLE `table_rating` (
  `id` int(11) NOT NULL,
  `pengunjung_id` int(11) DEFAULT NULL,
  `wisata_id` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_rating`
--

INSERT INTO `table_rating` (`id`, `pengunjung_id`, `wisata_id`, `nama`, `created_at`, `updated_at`) VALUES
(20, 10, 9, 'Sangat Bagus', '2023-06-12 03:39:02', '2023-06-12 03:39:02'),
(21, NULL, NULL, NULL, '2023-06-11 20:43:47', '2023-06-11 20:43:47'),
(22, 10, 9, 'Cukup Bagus', '2023-06-11 20:43:47', '2023-06-15 06:53:53'),
(23, 12, 12, 'Cukup Bagus', '2023-06-15 17:49:16', '2023-06-15 17:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `table_ulasan`
--

CREATE TABLE `table_ulasan` (
  `id` int(11) NOT NULL,
  `pengunjung_id` int(11) DEFAULT NULL,
  `wisata_id` int(11) DEFAULT NULL,
  `komentar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_ulasan`
--

INSERT INTO `table_ulasan` (`id`, `pengunjung_id`, `wisata_id`, `komentar`, `created_at`, `updated_at`) VALUES
(23, 10, 12, 'Perlu diketahui bahwa di kawasan Taman Nasional Gunung Halimun Salak terdapat banyak sekali wisata alam yang recommended untuk dikunjungi, dan tentu saja semuanya sudah kami review secara lengkap.', '2023-06-11 20:13:13', '2023-06-11 20:13:13'),
(24, 10, 10, 'keren banget tempatnya', '2023-06-14 11:05:32', '2023-06-14 11:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `table_wisata`
--

CREATE TABLE `table_wisata` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deksripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_wisata`
--

INSERT INTO `table_wisata` (`id`, `nama`, `deksripsi`, `alamat`, `foto`) VALUES
(9, 'Air Terjun Randusari', 'Harga tiket masuk Air Terjun Randusari terbilang sangat murah yaitu hanya Rp 2.000/orang pengunjung dapat menikmati air terjun yang indah', 'Jl. Randusari No.Rt 03, Rejosari, Jatimulyo, Kec. Dlingo, Kabupaten Bantul, Daerah Istimewa Yogyakarta', 'foto-9.jpg'),
(10, 'Pantai Singkil Indah', 'Pantai ini menjadi favorit liburan yang murah meriah bagi keluarga. Saat ini di sekitar gerbang masuk juga ada kolam renang kecil untuk anak-anak dengan tiket hanya Rp. 5000,-.', 'Jln. Karangpakis, Nusawungu, Cilacap Regency, Central Java 53283', 'foto-10.jpg'),
(12, 'Lembah Tepus Bogor', 'Lembah Tepus adalah destinasi wisata berupa sungai dan air terjun bertingkat di Bogor. Harga Tiket Masuk Rp.10.000', 'Jalan raya, Cibadak, Kec. Sukamakmur, Kabupaten Bogor, Jawa Barat', 'foto-12.jpg'),
(13, 'Air Terjun Luweng Sampang', 'air terjun ini juga dihiasi dengan batuan-batuan cadas yang berwarna putih, dan terlihat kontras dengan birunya air. Batuannya yang terkena erosi air sehingga terkikis alami dan membentuk garis garis yang unik.  Untuk memasuki kawasan wisata Air Terjun Luweng Sampang ini para pengunjung tidak dikenakan biaya alias gratis.  Sedangkan untuk parkir di Air Terjun Luweng Sampang pengunjung dikenakan tarif sebesar Rp 2.000 untuk Sepeda Motor dan Rp 5.000 untuk Mobil.', 'Gedang Sari, Kabupaten Gunung Kidul, Daerah Istimewa Yogyakarta', 'foto-13.jpg'),
(16, 'Pantai Cemara Cidaun', 'Pantai Cemara Cidaun merupakan salah satu tempat wisata terbaik yang ada di Cianjur. biaya masuk ke Pantai Cemara Cipanglay atau Pantai Cemara Cidaun yakni dikenakan biaya Rp 5000/motor dan Rp 15.000/ mobil.', 'Jl. Cipanglay Desa, Cidamar, Kec. Cidaun, Kabupaten Cianjur, Jawa Barat 43275', 'foto-16.jpg'),
(19, 'Pantai madasari', 'Pantai ini mempunyai teluk yang indah disertai dengan gulungan ombak yang besar sehingga akan melengkapi suasana harmoni bagi para wisatawan. Tarip tiket masuk pantai madasari bagi pejalan kaki dibanderol seharga Rp. 2.500. Bagi wisatawan yang naik sepeda motor dibanderol seharga Rp. 7.500.', 'Jl. Pantai Wisata, Masawah, Kec. Cimerak, Kab. Pangandaran, Jawa Barat 46595', 'foto-.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','pengunjung') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pengunjung',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$APg63yJkyn220rhsib./C.Pp4zI5rR0y2LsggLwXgD.87pgI.th/u', 'admin', NULL, '2023-06-09 09:42:34', '2023-06-09 09:42:34'),
(2, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$o5qpqmKROiYNnuMma24uSOn3jmbEgSdhj1hFcZ4XUnD0TmPbkg86G', 'pengunjung', NULL, '2023-06-12 05:51:13', '2023-06-12 05:51:13'),
(3, 'pengunjung1', 'pengunjung1@gmail.com', NULL, '$2y$10$AW2ugTAJZTpBpWPgV7fcWu7S5aZPE/ANLUzu7iTPUKvvp0mh6THQe', 'pengunjung', NULL, '2023-06-13 10:33:48', '2023-06-13 10:33:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_pengunjung`
--
ALTER TABLE `table_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_rating`
--
ALTER TABLE `table_rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_pengunjung_ibfk_1` (`pengunjung_id`),
  ADD KEY `table_wisata_ibfk_2` (`wisata_id`);

--
-- Indexes for table `table_ulasan`
--
ALTER TABLE `table_ulasan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_ulasan_ibfk_1` (`pengunjung_id`),
  ADD KEY `table_ulasan_ibfk_2` (`wisata_id`);

--
-- Indexes for table `table_wisata`
--
ALTER TABLE `table_wisata`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_pengunjung`
--
ALTER TABLE `table_pengunjung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_rating`
--
ALTER TABLE `table_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `table_ulasan`
--
ALTER TABLE `table_ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `table_wisata`
--
ALTER TABLE `table_wisata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_rating`
--
ALTER TABLE `table_rating`
  ADD CONSTRAINT `table_pengunjung_ibfk_1` FOREIGN KEY (`pengunjung_id`) REFERENCES `table_pengunjung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `table_wisata_ibfk_2` FOREIGN KEY (`wisata_id`) REFERENCES `table_wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `table_ulasan`
--
ALTER TABLE `table_ulasan`
  ADD CONSTRAINT `table_ulasan_ibfk_1` FOREIGN KEY (`pengunjung_id`) REFERENCES `table_pengunjung` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `table_ulasan_ibfk_2` FOREIGN KEY (`wisata_id`) REFERENCES `table_wisata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
pariwisatapariwisata