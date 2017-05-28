-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2017 at 08:50 PM
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
  `tipe_lapangan` text NOT NULL,
  `jumlah_lapangan` int(2) NOT NULL,
  `rating` int(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapangan`
--

INSERT INTO `lapangan` (`id_lapangan`, `id_penyedia`, `nama_lapangan`, `alamat_lapangan`, `harga_lapangan`, `tipe_lapangan`, `jumlah_lapangan`, `rating`) VALUES
(8, 2, 'asdasdqwdqwdcqacqacwq', 'yilfhvily', 23123, 'sepakbola', 10, NULL),
(9, 2, 'awdawd', '	asdasdad			\r\n			', 123, 'futsal', 12, NULL),
(10, 2, 'dbfawd', '				\r\nsdasdasd			', 21102, 'sepakbola', 51, NULL),
(11, 2, 'asdqqq', '				\r\n	ascasc		', 0, 'tipelapang', 0, NULL),
(12, 2, 'iii', '	ascascsacscasdqwqweqwqwdwqd						', 0, 'futsal', 1, NULL),
(13, 2, 'awawk', 'awawkakwkd							', 2147483647, 'futsal', 1232, NULL),
(14, 2, 'klonto', 'yametekudasai				\r\n			', 0, 'tipelapangan', 0, NULL),
(15, 2, 'saksah', '				\r\n		ajkadkdkaadad	', 0, 'tipelapangan', 0, NULL),
(16, 2, 'saksah', '				\r\n		ajkadkdkaadad	', 0, 'tipelapangan', 0, NULL),
(17, 2, 'reer', 'ndksdsjskd				\r\n			', 0, 'tipelapangan', 0, NULL),
(18, 2, 'ulala', '	waioefhweoifhweoifhewofhaweoi\r\n			', 1231, 'voli', 3, NULL),
(19, 2, 'GR', 'zgrag				\r\n			', 123, 'futsal', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penyedia_lapangan`
--

CREATE TABLE IF NOT EXISTS `penyedia_lapangan` (
  `id_penyedia` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penyedia_lapangan`
--

INSERT INTO `penyedia_lapangan` (`id_penyedia`, `id_user`) VALUES
(2, 3);

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
  `lama_sewa` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyewaan`
--

INSERT INTO `penyewaan` (`id_penyewaan`, `id_user`, `id_lapangan`, `tgl_sewa`, `bln_sewa`, `jam_sewa`, `lama_sewa`) VALUES
(4, 3, 8, 0, 6, 0, 0),
(5, 3, 8, 0, 6, 0, 0),
(6, 3, 8, 0, 6, 0, 0),
(7, 3, 8, 0, 6, 0, 0),
(8, 3, 8, 0, 6, 0, 0),
(9, 3, 8, 0, 6, 0, 0),
(10, 3, 8, 0, 6, 0, 0),
(11, 3, 8, 0, 6, 0, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `alamat`) VALUES
(1, 'asdasdasd@gmall', 'asdasdasd', 'Ulolo', NULL),
(2, '', '', '', NULL),
(3, 'asdasdasd@gmall.com', 'asdasdasd', 'ulololo', NULL),
(6, 'asdasda@gmall', 'asdasdasd', 'asdasd', NULL);

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
  MODIFY `id_lapangan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `penyedia_lapangan`
--
ALTER TABLE `penyedia_lapangan`
  MODIFY `id_penyedia` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `id_penyewaan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
