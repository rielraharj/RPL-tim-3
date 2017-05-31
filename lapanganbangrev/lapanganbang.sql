-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2017 at 10:23 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapanganbang`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapangan`
--

CREATE TABLE IF NOT EXISTS `lapangan` (
  `id_lapangan` int(5) NOT NULL,
  `id_penyedia` int(10) NOT NULL,
  `nama_lapangan` varchar(30) NOT NULL,
  `alamat_lapangan` text NOT NULL,
  `harga_lapangan` int(6) NOT NULL,
  `tipe_lapangan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `id_penyedia`, `nama_lapangan`, `alamat_lapangan`, `harga_lapangan`, `tipe_lapangan`) VALUES
(22, 5, 'GOR IPB', 'Kampus IPB', 20000, 'futsal'),
(23, 5, 'GOR Lama IPB', 'Kampus IPB', 23000, 'badminton'),
(24, 5, 'Lapangan Basket Gor Lama', 'Kampus IPB', 30000, 'basket');

-- --------------------------------------------------------

--
-- Table structure for table `penyedia_lapangan`
--

CREATE TABLE IF NOT EXISTS `penyedia_lapangan` (
  `id_penyedia` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penyedia_lapangan`
--

INSERT INTO `penyedia_lapangan` (`id_penyedia`, `id_user`) VALUES
(5, 11);

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan`
--

CREATE TABLE IF NOT EXISTS `penyewaan` (
  `id_penyewaan` int(5) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_lapangan` int(10) NOT NULL,
  `tgl_sewa` int(2) NOT NULL,
  `bln_sewa` int(2) NOT NULL,
  `jam_sewa` int(2) NOT NULL,
  `lama_sewa` int(2) NOT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewaan`
--

INSERT INTO `penyewaan` (`id_penyewaan`, `id_user`, `id_lapangan`, `tgl_sewa`, `bln_sewa`, `jam_sewa`, `lama_sewa`, `status`) VALUES
(22, 12, 22, 1, 6, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `alamat`) VALUES
(11, 'tespenyedia@gmail.com', 'penyedia', 'SangPenyedia', 'Babakan raya'),
(12, 'kumau@gmail.com', 'aduhmau', 'maumaumau', 'Babakan tengah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`id_lapangan`),
  ADD KEY `id_penyedia` (`id_penyedia`);

--
-- Indexes for table `penyedia_lapangan`
--
ALTER TABLE `penyedia_lapangan`
  ADD PRIMARY KEY (`id_penyedia`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`id_penyewaan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_lapangan` (`id_lapangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapangan`
--
ALTER TABLE `lapangan`
  MODIFY `id_lapangan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `penyedia_lapangan`
--
ALTER TABLE `penyedia_lapangan`
  MODIFY `id_penyedia` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `id_penyewaan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD CONSTRAINT `lapangan_ibfk_1` FOREIGN KEY (`id_penyedia`) REFERENCES `penyedia_lapangan` (`id_penyedia`);

--
-- Constraints for table `penyedia_lapangan`
--
ALTER TABLE `penyedia_lapangan`
  ADD CONSTRAINT `penyedia_lapangan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD CONSTRAINT `penyewaan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `penyewaan_ibfk_2` FOREIGN KEY (`id_lapangan`) REFERENCES `lapangan` (`id_lapangan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
