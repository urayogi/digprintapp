-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2018 at 09:41 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digprintapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_groups`
--

CREATE TABLE IF NOT EXISTS `admin_groups` (
  `group_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin_groups`
--

INSERT INTO `admin_groups` (`group_id`, `name`, `description`) VALUES
(1, 'webmaster', 'Webmaster'),
(2, 'admin', 'Admininstrasi '),
(3, 'operator', 'operator'),
(4, 'design', 'designer');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_logout` timestamp NULL DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `online_status` tinyint(1) DEFAULT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `email`, `password`, `group_id`, `active`, `created_on`, `last_login`, `last_logout`, `first_name`, `last_name`, `online_status`, `ref`) VALUES
(2, 'admin', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 1, NULL, NULL, '2018-03-13 23:35:23', '2018-03-12 02:44:57', 'Admin', 'nistrator', NULL, 0),
(10, 'user', 'user@user', '12dea96fec20593566ab75692c9949596833adc9', 3, NULL, '2017-12-09 04:21:37', '2018-01-12 23:21:48', NULL, 'user', 'user', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat_anak`
--

CREATE TABLE IF NOT EXISTS `tb_kat_anak` (
  `id_anak` int(11) NOT NULL AUTO_INCREMENT,
  `id_induk` int(11) NOT NULL,
  `nama_anak` varchar(200) NOT NULL,
  PRIMARY KEY (`id_anak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat_induk`
--

CREATE TABLE IF NOT EXISTS `tb_kat_induk` (
  `id_induk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_induk` varchar(200) NOT NULL,
  PRIMARY KEY (`id_induk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE IF NOT EXISTS `tb_order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_order` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tot_penjualan` double NOT NULL,
  `tunai` double NOT NULL,
  `kembali` double NOT NULL,
  `nm_konsumen` varchar(100) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` varchar(111) NOT NULL,
  `alamat` text NOT NULL,
  `waktu_masuk_order` date NOT NULL,
  `waktu_selesai_order` date NOT NULL,
  `status` enum('Cetak_s','Cetak_b') NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE IF NOT EXISTS `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(200) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `ket` text NOT NULL,
  `status` enum('Aktif','No_Aktif') NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian_barang`
--

CREATE TABLE IF NOT EXISTS `tb_pembelian_barang` (
  `id_pembelian_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_anak` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `jumlah_beli` double NOT NULL,
  `tgl_proses` date NOT NULL,
  `ket` text NOT NULL,
  `status` enum('Aktif','No_Aktif') NOT NULL,
  PRIMARY KEY (`id_pembelian_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok_barang`
--

CREATE TABLE IF NOT EXISTS `tb_stok_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_anak` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `harga_beli` double NOT NULL,
  `harga_jual` double NOT NULL,
  `stok` double NOT NULL,
  `status` enum('Aktif','No_Aktif') NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id_trasaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_modal` double NOT NULL,
  `file` varchar(200) NOT NULL,
  `size` int(11) NOT NULL,
  `p` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `waktu` date NOT NULL,
  `keterangan` text NOT NULL,
  `status_level` enum('admin','operator','desainer') NOT NULL,
  PRIMARY KEY (`id_trasaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
