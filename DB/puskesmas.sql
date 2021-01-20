-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 03:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `diagnosa` varchar(25) NOT NULL,
  `obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id`, `nama`, `tanggal`, `diagnosa`, `obat`) VALUES
(1, 'Lutfi Agizal', '2020-11-24', 'Sakit Kepala', 'Obat Kuat'),
(4, 'Albert Subagyono', '2020-11-11', 'Maag', 'Jamu kuat'),
(6, 'Alexander', '2020-11-30', 'Maag', 'Jamu kuat'),
(7, 'Revisi', '2020-11-30', 'Sakit Kepala', 'Jamu kuat');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomorkartu` varchar(25) NOT NULL,
  `status` varchar(6) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(3) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `nomorkartu`, `status`, `tgl_lahir`, `umur`, `jenis_kelamin`, `alamat`) VALUES
(1, 'Lutfi Agizal', '1345-12012012-121', 'Lansia', '1990-01-10', 30, 'Laki-laki', 'Planet Pluto'),
(3, 'Albert Subagyono', '090203-12305-0990', 'Kader', '2000-08-12', 20, 'Laki-laki', 'Mars'),
(8, 'Alexander', '0203-0405-09234', 'BPJS', '1998-08-20', 22, 'Laki-laki', 'aaaa'),
(9, 'Revisi', '010203-0405-0990', 'BPJS', '1997-08-20', 23, 'Laki-laki', 'Bumi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `tipe_user` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `tipe_user`, `password`) VALUES
(1, 'panji', 'Panji BP', 'Admin', '$2y$10$Lw7uBuG1qw0ZGweCr44jtuFpggYRqRebKC92ARVGUAL3zRGUx97qi'),
(4, 'agizal', 'Agizal Anjayani', 'Petugas Pendaftaran', '$2y$10$k25rKitKCM/2AzdeF3Ldb.e4ts.V.QVMVu.ux54IZeNenK3tEEmc2'),
(5, 'boyke', 'Dr. Boyke', 'Dokter', '$2y$10$2nX8y.DTm6oXjMx/vjdjQuSqRX1b35urfFd3tw5aGYbHyqhAzvswq'),
(6, 'irwanda', 'Irwanda', 'Admin', '$2y$10$j2LPAsHKcr/2cLQnzv4JS.1JvlMMhEqSX9eZMgW0GWkVznf2FNmuS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
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
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
