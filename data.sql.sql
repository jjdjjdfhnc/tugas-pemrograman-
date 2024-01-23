-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 07:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` varchar(10) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` varchar(10) NOT NULL,
  `penerbit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `kategori`, `nama_buku`, `harga`, `stok`, `penerbit`) VALUES
('K1001', 'Keilmuan', 'Analisis & Perancangan Sistem Informasi', '50.000', '60', 'Penerbit Informatika'),
('K2002', 'Keilmuan ', 'Artifical Intrlrgence', '45.000', '60', 'Penerbit Informatika'),
('K2003', 'Keilmuan', 'Autocad 3 Dimensi', '40.000', '25', 'Penerbit Informatika'),
('K3004', 'Keilmuan ', 'Cloud Computing Technolgy', '85.000', '15', 'Penerbit Informatika'),
('N1001', 'Novel', 'Cahaya di penjuru Hati', '68.000', '10', 'Andi Offset'),
('N1002', 'Novel', 'Aku ingin Cerita', '48.000', '12', 'Danendra'),
('jaja', '', 'babahah', '38383883', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `telepon` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama`, `alamat`, `kota`, `telepon`) VALUES
('SP01', 'Penerbit Informatika', 'Jl. Buah Batu No.121', 'Bandung', 813),
('SP02', 'Andi Offset', 'Jl. Suryalaya IX No.3', 'Bandung', 878),
('SP03', 'Danendra', 'Jl Moch. Toha 44', 'Bandung', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
