-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 10:17 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(2) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_identitas`
--

CREATE TABLE `tbl_identitas` (
  `nm_identitas` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_identitas`
--

INSERT INTO `tbl_identitas` (`nm_identitas`) VALUES
('KTP'),
('Pasport'),
('SIM C');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id_jenis` int(11) NOT NULL,
  `nm_jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id_jenis`, `nm_jenis`) VALUES
(1, 'motor metik'),
(2, 'motor gigi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jk`
--

CREATE TABLE `tbl_jk` (
  `jenis_kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jk`
--

INSERT INTO `tbl_jk` (`jenis_kelamin`) VALUES
('Laki-Laki'),
('Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_motor`
--

CREATE TABLE `tbl_motor` (
  `id_motor` int(11) NOT NULL,
  `nm_motor` varchar(50) NOT NULL,
  `foto_motor` varchar(150) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `harga_rental` int(11) NOT NULL,
  `no_polisi` int(11) NOT NULL,
  `thn_buat` int(11) NOT NULL,
  `nm_warna` varchar(50) NOT NULL,
  `nm_merek` varchar(50) NOT NULL,
  `cc_motor` int(11) DEFAULT NULL,
  `stok_motor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_motor`
--

INSERT INTO `tbl_motor` (`id_motor`, `nm_motor`, `foto_motor`, `id_jenis`, `harga_rental`, `no_polisi`, `thn_buat`, `nm_warna`, `nm_merek`, `cc_motor`, `stok_motor`) VALUES
(1, 'vario', 'yamaha-lexi-2015.jpg', 1, 60000, 123456, 2012, 'hitam', 'honda', 125, 0),
(2, 'Beat', 'beat-esp-cbs-funk-red-white-300x300.jpg', 1, 50000, 123456, 2010, 'putih', 'honda', 125, 0),
(3, 'verza', 'Honda-Verza-150-CW-Advance-White-300x300.jpg', 2, 80000, 1234567, 2016, 'putih', 'honda', 150, 0),
(4, 'Spacy', 'Honda-Spacy-Hitam-300x300.jpg', 1, 50000, 123456, 2012, 'merah', 'honda', 125, 0),
(5, 'Genio', 'honda-vario-125-esp-cbs-sonic-white-red-300x300.jpg', 1, 500000, 2345, 2020, 'putih', 'Honda', 2000, 0),
(6, 'Nmax', 'yamaha-nmax.jpg', 1, 500000, 2345, 2020, 'Hitam', 'Honda', 2000, 0),
(7, 'Nmax', 'berita-motor-di-indonesia-300x300.jpg', 1, 500000, 2345, 2020, 'Hitam', 'Honda', 2000, 0),
(8, 'Motor PCX', 'yamaha-lexi-2015.jpg', 1, 500000, 2345, 2016, 'putih', 'honda', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` varchar(30) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `status_pemesanan` enum('Menunggu','Proses','Dirental','Dikembalikan','Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id_pemesanan`, `id_customer`, `pembayaran`, `tgl_pemesanan`, `status_pemesanan`) VALUES
('Pm001', 6, 100000, '2023-06-25', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan_detail`
--

CREATE TABLE `tbl_pemesanan_detail` (
  `id` int(11) NOT NULL,
  `id_pemesanan` varchar(30) NOT NULL,
  `id_motor` int(11) NOT NULL,
  `hari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemesanan_detail`
--

INSERT INTO `tbl_pemesanan_detail` (`id`, `id_pemesanan`, `id_motor`, `hari`) VALUES
(3, 'Pm001', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(80) NOT NULL,
  `lvl_user` enum('admin','customer') NOT NULL,
  `nm_user` varchar(80) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nm_identitas` varchar(15) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `almt_user` varchar(80) NOT NULL,
  `notelp_user` varchar(12) NOT NULL,
  `email_user` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `lvl_user`, `nm_user`, `jenis_kelamin`, `nm_identitas`, `no_identitas`, `almt_user`, `notelp_user`, `email_user`) VALUES
(1, 'devanils', 'Devanils12345', 'customer', 'Devani Laras Sati', 'Perempuan ', 'KTP ', '3303136009012000', 'LOSARI REMBANG', '2147483647', 'devani@gmail.com'),
(2, 'Devinalarassita2001', 'Devina2001', 'customer', 'Devina', 'Perempuan ', 'Pasport ', '3303162537123123', 'Purbalingga', '082265107472', 'devina2001@gmail.com'),
(3, 'admin', 'Valid12345', 'admin', 'Laras', 'Perempuan', 'KTP', '33031360073625', 'Purwokerto', '082265102321', 'adminrental@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD PRIMARY KEY (`nm_identitas`);

--
-- Indexes for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_jk`
--
ALTER TABLE `tbl_jk`
  ADD PRIMARY KEY (`jenis_kelamin`);

--
-- Indexes for table `tbl_motor`
--
ALTER TABLE `tbl_motor`
  ADD PRIMARY KEY (`id_motor`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tbl_pemesanan_detail`
--
ALTER TABLE `tbl_pemesanan_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_motor` (`id_motor`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `jenis_kelamin` (`jenis_kelamin`),
  ADD KEY `id_identitas` (`nm_identitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_motor`
--
ALTER TABLE `tbl_motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pemesanan_detail`
--
ALTER TABLE `tbl_pemesanan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_motor`
--
ALTER TABLE `tbl_motor`
  ADD CONSTRAINT `tbl_motor_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `tbl_jenis` (`id_jenis`);

--
-- Constraints for table `tbl_pemesanan_detail`
--
ALTER TABLE `tbl_pemesanan_detail`
  ADD CONSTRAINT `fk_idMotor` FOREIGN KEY (`id_motor`) REFERENCES `tbl_motor` (`id_motor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idPemesanan` FOREIGN KEY (`id_pemesanan`) REFERENCES `tbl_pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_idIdentitas` FOREIGN KEY (`nm_identitas`) REFERENCES `tbl_identitas` (`nm_identitas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jk` FOREIGN KEY (`jenis_kelamin`) REFERENCES `tbl_jk` (`jenis_kelamin`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
