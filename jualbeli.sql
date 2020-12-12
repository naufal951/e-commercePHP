-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2019 at 07:28 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jualbeli`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id_about` int(11) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `about`) VALUES
(1, 'ELMA HIJAB adalah sebuah bisnis fashion muslimah yang mengedepankan kualitas terbaik dengan harga terjangkau. Berdiri pada juni tahun 2018, ELMA HIJAB di bangun oleh Desi Zuli Andriyani sebagai Founder dan M.Gilang Feriyanto Putra sebagai CEO. Desi Zuli Andriyani yang memiliki paham bahwa tiap wanita muslimah dapat bergaya dan tetap menjaga nilai-nilai agama.\r\nMaka dari itu kami mendirikan ELMA HIJAB ini untuk mempermudah para wanita muslimah  untuk mendapatkan hijab yang sesuai syariat islam\r\nnamun masih tetap bisa tampil modis dan bergaya sesuai fashion masa kini\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `pass`) VALUES
(138, 'admin', 'admin'),
(139, 'gilang', 'gilang');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat_kontak` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `alamat_kontak`, `no_telp`, `email`) VALUES
(1, 'Desa Santren, Kel. Banaran 62271, Kec Babat , Kab. Lamongan', '085733924380', 'gilangferiyanto92@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id_mail` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subjek` varchar(300) NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE IF NOT EXISTS `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `tgl_pembeli` date NOT NULL,
  `id_prdk` int(11) NOT NULL,
  `jumlah` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `nama_pembeli`, `alamat`, `no_telp`, `tgl_pembeli`, `id_prdk`, `jumlah`, `status`) VALUES
(27, 'Okta', 'Gresik', 2147483647, '2019-02-08', 5, '1', 'Belum Terkirim'),
(28, 'Sandi', 'Lamongan', 2147483647, '2019-02-08', 11, '1', 'Belum Terkirim'),
(30, 'desy', 'babat', 8123123, '2019-02-09', 22, '2', 'TERKIRIM');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_prdk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(12) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_prdk`, `nama`, `harga`, `foto`, `deskripsi`, `stok`, `jenis`) VALUES
(3, 'Hijab Beria 1', '130000', 'beria 3.jpg', 'Size : XL, L, S', 0, 'Hijab Beria'),
(4, 'Hijab Beria 2', '130000', 'beria.jpg', 'Size : XL, L, S', 0, 'Hijab Beria'),
(5, 'Hijab Beria 3', '130000', 'beria 4.jpg', 'Size : XL, L, S', 20, 'Hijab Beria'),
(6, 'Hijab Beria 4', '130000', 'beria 5.jpg', 'Size : XL, L, S', 0, 'Hijab Beria'),
(7, 'Hijab Beria 5', '130000', 'beria 2.jpg', 'Size : XXL, XL, L, S', 0, 'Hijab Beria'),
(8, 'Hijab Amira 1', '130000', 'amira 1.jpg', 'Size : XL, L, S', 0, 'Hijab Amira'),
(9, 'Hijab Amira 2', '130000', 'amira 2.jpg', 'Size : XL, L, S', 20, 'Hijab Amira'),
(10, 'Hijab Amira 3', '130000', 'amira 3.jpg', 'Size : XL, L, S', 30, 'Hijab Amira'),
(11, 'Hijab Amira 4', '130000', 'amira 4.jpg', 'Size : XL, L, S', 47, 'Hijab Amira'),
(12, 'Hijab Amira 5', '130000', 'amira 5.jpg', 'Size : XL, L, S', 30, 'Hijab Amira'),
(13, 'Hijab Siera 1', '130000', 'seria 1.jpg', 'Size : XL, L, S', 50, 'Hijab Siera'),
(14, 'Hijab Siera 2', '130000', 'seria 2.jpg', 'Size : XL, L, S', 50, 'Hijab Siera'),
(15, 'Hijab Siera 3', '130000', 'seria 3.jpg', 'Size : XL, L, S', 30, 'Hijab Siera'),
(16, 'Hijab Siera 4', '130000', 'seria 4.jpg', 'Size : XL, L, S', 50, 'Hijab Siera'),
(17, 'Hijab Siera 5', '130000', 'seria 5.jpg', 'Size : XL, L, S', 50, 'Hijab Siera'),
(18, 'Beria 6', '130000', 'beria 3.jpg', 'Hijab Bagus', 25, 'Hijab Beria'),
(22, 'Hijab 211', '130000', 'siera.jpg', 'Size : XL, L, S', 18, 'Hijab Siera');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD UNIQUE KEY `id_prdk` (`id_prdk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_prdk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_prdk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk` FOREIGN KEY (`id_prdk`) REFERENCES `produk` (`id_prdk`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
