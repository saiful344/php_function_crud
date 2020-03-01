-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2020 at 11:51 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `rb_pembayaran`
--

CREATE TABLE `rb_pembayaran` (
  `id_pembayaran` int(5) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `nominal_pembayaran` int(12) NOT NULL,
  `nis` int(6) NOT NULL,
  `id_jenispembayaran` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rb_pembayaran`
--

INSERT INTO `rb_pembayaran` (`id_pembayaran`, `tgl_pembayaran`, `nominal_pembayaran`, `nis`, `id_jenispembayaran`) VALUES
(5, '2020-03-10', 290000, 12345444, 1),
(11, '2020-03-01', 300000, 12345444, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenispembayaran`
--

CREATE TABLE `tb_jenispembayaran` (
  `id_jenispembayaran` int(5) NOT NULL,
  `nama_jenispembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenispembayaran`
--

INSERT INTO `tb_jenispembayaran` (`id_jenispembayaran`, `nama_jenispembayaran`) VALUES
(1, 'Britama'),
(2, 'SPP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nis` int(6) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nis`, `nama_siswa`, `kelas`) VALUES
(1, 123, 'Muhammad Saiful', 12),
(2, 12345444, 'Abdul Kodir', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rb_pembayaran`
--
ALTER TABLE `rb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `tb_jenispembayaran`
--
ALTER TABLE `tb_jenispembayaran`
  ADD PRIMARY KEY (`id_jenispembayaran`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`,`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rb_pembayaran`
--
ALTER TABLE `rb_pembayaran`
  MODIFY `id_pembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_jenispembayaran`
--
ALTER TABLE `tb_jenispembayaran`
  MODIFY `id_jenispembayaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
