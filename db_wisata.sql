-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 24, 2023 at 11:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` varchar(10) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `idKabupaten` varchar(10) NOT NULL,
  `namaKabupaten` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idKota` varchar(10) NOT NULL,
  `namaKota` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `idPengunjung` varchar(10) NOT NULL,
  `namaPengunjung` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `noHP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `idProvinsi` varchar(10) NOT NULL,
  `namaProvinsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `idRating` varchar(10) NOT NULL,
  `nilaiRating` varchar(45) DEFAULT NULL,
  `tgl_rating` varchar(100) DEFAULT NULL,
  `idPengunjung` varchar(10) DEFAULT NULL,
  `idTempatWisata` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tempatWisata`
--

CREATE TABLE `tempatWisata` (
  `idTempatWisata` varchar(10) NOT NULL,
  `namaTempatWisata` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `idKota` varchar(10) DEFAULT NULL,
  `idKabupaten` varchar(10) DEFAULT NULL,
  `idProvinsi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `idUlasan` varchar(10) NOT NULL,
  `komentar` text DEFAULT NULL,
  `tgl_ulasan` varchar(100) DEFAULT NULL,
  `idPengunjung` varchar(10) DEFAULT NULL,
  `idTempatWisata` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`idKabupaten`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idKota`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`idPengunjung`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`idProvinsi`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`idRating`),
  ADD KEY `idTempatWisata` (`idTempatWisata`),
  ADD KEY `idPengunjung` (`idPengunjung`);

--
-- Indexes for table `tempatWisata`
--
ALTER TABLE `tempatWisata`
  ADD PRIMARY KEY (`idTempatWisata`),
  ADD KEY `idKota` (`idKota`),
  ADD KEY `idKabupaten` (`idKabupaten`),
  ADD KEY `idProvinsi` (`idProvinsi`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`idUlasan`),
  ADD KEY `idPengunjung` (`idPengunjung`),
  ADD KEY `idTempatWisata` (`idTempatWisata`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`idTempatWisata`) REFERENCES `tempatWisata` (`idTempatWisata`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`idPengunjung`) REFERENCES `pengunjung` (`idPengunjung`);

--
-- Constraints for table `tempatWisata`
--
ALTER TABLE `tempatWisata`
  ADD CONSTRAINT `tempatWisata_ibfk_1` FOREIGN KEY (`idKota`) REFERENCES `kota` (`idKota`),
  ADD CONSTRAINT `tempatWisata_ibfk_2` FOREIGN KEY (`idKabupaten`) REFERENCES `kabupaten` (`idKabupaten`),
  ADD CONSTRAINT `tempatWisata_ibfk_3` FOREIGN KEY (`idProvinsi`) REFERENCES `provinsi` (`idProvinsi`);

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`idPengunjung`) REFERENCES `pengunjung` (`idPengunjung`),
  ADD CONSTRAINT `ulasan_ibfk_2` FOREIGN KEY (`idTempatWisata`) REFERENCES `tempatWisata` (`idTempatWisata`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
