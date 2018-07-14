-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 07:55 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cinemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(111) NOT NULL,
  `aktor` varchar(111) NOT NULL,
  `sutradara` varchar(111) NOT NULL,
  `durasi` varchar(111) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `id_studio` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `aktor`, `sutradara`, `durasi`, `id_kategori`, `id_studio`) VALUES
(3, 'AVENGERS : INFINITY WAR', 'Robert Dawney Jr', 'Manusia Hebat', '129 menit', 'Remaja', 'STUDIO 1'),
(2, 'VENOM', 'Manusia Biasa', 'Orang Hebat', '120 menit', 'Dewasa', 'STUDIO 2'),
(4, 'NARUTO SHIPPUDEN', 'Naruto', 'Masashi Kishimoto', '90 menit', 'Remaja', 'STUDIO 1'),
(5, 'CAPTAIN MARVEL', 'Cah AYu', 'Kodew Cantik', '150 menit', 'Remaja', 'STUDIO 1'),
(6, 'Dragon Ball Movie', 'Goku', 'Vegeta', '200 menit', 'Remaja', 'STUDIO 2'),
(8, 'CAPTAIN AMERICA : CIVIL WAR', 'Tony Stark', 'Nick Fury', '130 menit', 'Remaja', 'STUDIO 1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(11) NOT NULL,
  `kategori` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
('Remaja', 'Remaja'),
('Dewasa', 'Dewasa');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` varchar(11) NOT NULL,
  `nomor_kursi` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `nomor_kursi`) VALUES
('10A', '5A'),
('1A', '1A'),
('2A', '2A'),
('3A', '3A'),
('4A', '4A'),
('5A', '5A'),
('6A', '1A'),
('7A', '2A'),
('8A', '3A'),
('9A', '4A');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_waktutayang` varchar(11) NOT NULL,
  `id_studio` varchar(11) NOT NULL,
  `id_kursi` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_user`, `id_film`, `id_waktutayang`, `id_studio`, `id_kursi`) VALUES
(1, 14, 3, '16:00', 'STUDIO 1', '2A'),
(2, 19, 5, '22:00', 'STUDIO 2', '9A');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id_studio` varchar(11) NOT NULL,
  `studio` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id_studio`, `studio`) VALUES
('STUDIO 1', 'STUDIO 1'),
('STUDIO 2', 'STUDIO 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `jeniskelamin` varchar(111) NOT NULL,
  `level` varchar(111) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `ttl`, `jeniskelamin`, `level`, `active`) VALUES
(16, 'Administrator', 'admin@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2018-05-08', 'Pria', 'admin', 1),
(19, 'Mokh Nugroho', 'nugiknugroho9897@gmail.com', 'nugik', 'a5178fba733b8c99b89533a33a2f3e3b', '1998-06-09', 'Pria', 'user', 1),
(9, 'fajar', 'fajar@gmail.com', 'fajar', '24bc50d85ad8fa9cda686145cf1f8aca', '2018-05-09', 'Pria', 'user', 1),
(12, 'uti', 'uti@email.com', 'uti', '4d2606237ea94965b5405c99863da39a', '2018-05-11', 'Wanita', 'user', 1),
(11, 'sam', 'sam@email.com', 'sam', 'd41d8cd98f00b204e9800998ecf8427e', '2018-05-18', 'Pria', 'user', 1),
(13, 'mikel', 'mikel@email.com', 'mikel', '8a8bc6f1f2e6762dae7780efd335c743', '2010-06-17', 'Pria', 'user', 1),
(14, 'Zaki muhammad', 'zaki@emial.com', 'zaki', '9784ea3da268563469df99b2e6593564', '1998-09-09', 'Pria', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `waktutayang`
--

CREATE TABLE `waktutayang` (
  `id_waktu` varchar(11) NOT NULL,
  `waktu` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktutayang`
--

INSERT INTO `waktutayang` (`id_waktu`, `waktu`) VALUES
('16:00', '16:00'),
('18:00', '18:00'),
('20:00', '20:00'),
('22:00', '22:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id_studio`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `waktutayang`
--
ALTER TABLE `waktutayang`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
