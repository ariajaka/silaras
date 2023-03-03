-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 05:07 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_silaras2`
--
CREATE DATABASE IF NOT EXISTS `db_silaras2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_silaras2`;

-- --------------------------------------------------------

--
-- Table structure for table `detail_pelanggaran_la`
--

CREATE TABLE IF NOT EXISTS `detail_pelanggaran_la` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_la` varchar(25) NOT NULL,
  `jenis_pelanggaran` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_produk_la`
--

CREATE TABLE IF NOT EXISTS `detail_produk_la` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_la` varchar(25) NOT NULL,
  `produk_dijual` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detail_rekomendasi_la`
--

CREATE TABLE IF NOT EXISTS `detail_rekomendasi_la` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_la` varchar(25) NOT NULL,
  `nip_perekomendasi` varchar(100) NOT NULL,
  `rekomendasi` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_awal`
--

CREATE TABLE IF NOT EXISTS `laporan_awal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_la` varchar(25) NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `nama_sarana` varchar(50) NOT NULL,
  `nama_pemilik_sarana` varchar(50) NOT NULL,
  `link_akun_medsos` varchar(150) NOT NULL,
  `jenis_platform` varchar(256) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `alamat_sarana` varchar(100) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `kandungan` varchar(128) NOT NULL,
  `produsen` varchar(128) NOT NULL,
  `golongan` varchar(128) NOT NULL,
  `kelas_terapi` varchar(128) NOT NULL,
  `status` varchar(64) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `informasi_awal` varchar(256) NOT NULL,
  `file` varchar(100) NOT NULL,
  `tgl_lapor` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(64) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `no_hp`, `username`, `password`, `status`) VALUES
(1, 'admin', '', 'admin', 'Cobaaja321', 3),
(2, 'Novva Reddy Naldo, S.Farm,Apt', '08131111111', '198009072007121001', 'Bermultimedia203', 2),
(3, 'Ade Afrilia Ardinda, S. Sos', '08122222222', '199504182019032006', 'Bermultimedia203', 1),
(4, 'Sumarsono', '085233333333', '196805291991031002', 'Bermultimedia203', 1),
(5, 'Mursidah, SH', '08191111111', '196806111994022001', 'Bermultimedia203', 2),
(6, 'Fadrianto, SE', '0852660282640', '111', 'Bermultimedia203', 1),
(7, 'Delyuvin Nasution, S.Farm., Apt', '081375741742', '198407312007121001', 'Bermultimedia203', 1),
(8, 'Malhan Zaldi', '085367875275', '197506181995031001', 'Bermultimedia203', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
