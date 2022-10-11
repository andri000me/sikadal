-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 07:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikadal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(11) NOT NULL,
  `kode_brg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nama_brg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_brg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stok_brg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `kode_brg`, `nama_brg`, `jenis_brg`, `stok_brg`, `foto`) VALUES
(1, 'BRG001', 'Batterai Sony NP-F970', 'Batterai', '10', 'batterai.jpg'),
(2, 'BRG002', 'Charger Canon LC-E6E', 'Charger', '10', 'charger.jpg'),
(3, 'BRG003', 'Kamera Canon 5D Mark IV', 'Kamera', '10', 'canon5d.jpg'),
(4, 'BRG004', 'Drone DJI Mavvic Air 2', 'Drone', '3', 'drone.jpg'),
(5, 'BRG005', 'Kamera Sony HXC-NX100', 'Kamera', '27', 'nx100.jpg'),
(6, 'BRG006', 'Kamera Sony HXC-NX200', 'Kamera', '10', 'nx200.jpg'),
(7, 'BRG007', 'Kamera Sony PMW EX-300', 'Kamera', '10', 'pmw300.jpg'),
(8, 'BRG008', 'Kamera Sony PXW - Z280', 'Kamera', '10', 'pxw.jpg'),
(9, 'BRG009', 'Lampu Apature AL-H198C', 'Lampu', '10', 'lampu.jpg'),
(10, 'BRG010', 'Tripod Libec TH-650 EX', 'Tripod', '10', 'tripod.jpg'),
(11, 'BRG011', 'Switcher Portable', 'Switcher', '3', 'switcher.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(10) NOT NULL,
  `kode_pinjam` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id_brg` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pinjam` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `keperluan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `kode_pinjam`, `id_brg`, `id_user`, `tgl_pinjam`, `keperluan`, `status`) VALUES
(1, 'KPJ00001', 4, 3, '09 October, 2022', 'KABAR NUSANTARA', 1),
(2, 'KPJ00002', 11, 3, '10 October, 2022', 'TVR DAYS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `id_brg`, `id_user`, `id_peminjaman`, `tgl_kembali`, `keterangan`) VALUES
(1, 4, 3, 1, '2022-10-10', 'Baling2 Rusak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `level` enum('admin','pengurus','user','') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `jabatan`, `kontak`, `level`) VALUES
(1, 'Selo Hidayat', 'admin', '12345678', 'Kasubbag Teknik', '0123456789', 'admin'),
(2, 'Aris Munandar', 'arismunandar', '12345678', 'Storage', '0123456789', 'pengurus'),
(3, 'Irvan Ramadhan', 'irvanramadhan', '12345678', 'Teknik', '085770499962', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_brg` (`id_brg`,`id_user`),
  ADD KEY `id_peminjam` (`id_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_brg_2` (`id_brg`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_brg` (`id_brg`,`id_user`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_peminjam` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
