-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 11:25 AM
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
-- Database: `children_cares`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_anak`
--

CREATE TABLE `kategori_anak` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_anak`
--

INSERT INTO `kategori_anak` (`id`, `kategori`) VALUES
(1, 'Janin (Ibu Hamil)'),
(2, 'Bayi'),
(3, 'Balita'),
(4, 'Anak (>5 Tahun)');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(256) NOT NULL,
  `alamat_pasien` varchar(256) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `kategori_anak` varchar(128) NOT NULL,
  `berat_badan` float NOT NULL,
  `tinggi_badan` float NOT NULL,
  `tgl_konsultasi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `nama_pasien`, `alamat_pasien`, `jenis_kelamin`, `tgl_lahir`, `kategori_anak`, `berat_badan`, `tinggi_badan`, `tgl_konsultasi`) VALUES
(2, 'Waldino', 'Karadenan, Bogor, Jawa Barat', 'Laki-laki', '2002-11-25', '3', 66, 168, '2022-12-04 15:57:25');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(128) NOT NULL,
  `email_petugas` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `email_petugas`, `jabatan`, `alamat`, `no_telepon`, `image`) VALUES
(1, 'Dr. George', 'george@gmail.com', 'Dokter Kandungan', 'Jl. Merak 20A Blok A', '085654525351', 'janin.jpg'),
(2, 'Dr. Sheldon', 'sheldon@gmail.com', 'Dokter Kandungan', 'Jl. Ciawi A No 20', '085214365623', 'janin1.jpg'),
(3, 'Dr. Phillips', 'phillips@gmail.com', 'Dokter Bayi', 'Jl. Washington DC Cilebut', '08754564154', 'bayi.jpg'),
(4, 'Dr. Anna', 'anna@gmail.com', 'Dokter Bayi', 'Jl. Paris Leuwiliang', '081654856412', 'bayi2.jpg'),
(5, 'Dr. Cooper', 'cooper@gmail.com', 'Dokter Balita', 'Jl. Bubulak', '08765354146', 'balita.jpg'),
(6, 'Dr. Alex', 'alexsexy@gmail.com', 'Dokter Balita', 'Jl. Karadenan German', '089513215313', 'balita2.jpg'),
(7, 'Dr. Lavender', 'lavender@gmail.com', 'Dokter Anak', 'Jl. Kayu Manis Prancis', '087313215631', 'anak.jpg'),
(8, 'Dr. Thanos', 'thanos@gmail.com', 'Dokter Anak', 'Jl. Infinity Stones', '087512131312131', 'anak1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'Gunawan', '12211015@bsi.ac.id', 'pro1670133189.jpg', '$2y$10$2IEu3JeyCVAvRyXrUjTWEe2Th5FhkQ6PnnmSkUE7dCRkkSi6xwPBi', 2, 1, 1670130413),
(2, 'Admin', 'admin123@gmail.com', 'default.jpg', '$2y$10$PXNEKAtPXBAPiXq21XxRIuGMMM2pbM78Bok8scLIBch.EV.DOWFXO', 1, 1, 1670146223);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_anak`
--
ALTER TABLE `kategori_anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_anak`
--
ALTER TABLE `kategori_anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
