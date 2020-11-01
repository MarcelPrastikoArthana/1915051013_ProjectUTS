-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 05:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pemrograman_web_dasar_marcel`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL COMMENT 'Album ID',
  `featured` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Featured Image',
  `title` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Album Title',
  `created_on` date NOT NULL COMMENT 'Created Date'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `featured`, `title`, `created_on`) VALUES
(7, 'VvH6MRq95X201030032047.jpg', 'Pria', '2020-10-30'),
(8, '2bDmNmkU3d201030032100.png', 'Wanita', '2020-10-30'),
(9, 'qPYpjHLVJ5201030055559.jpg', 'Foto Kelas', '2020-10-30'),
(11, 'tWksfKChQQ201031101444.jpg', 'Taman', '2020-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `album_pictures`
--

CREATE TABLE `album_pictures` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Image ID',
  `album_id` int(11) NOT NULL DEFAULT 0 COMMENT 'Album ID',
  `image` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Image Name',
  `title` varchar(50) NOT NULL DEFAULT '0' COMMENT 'Image Title'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_pictures`
--

INSERT INTO `album_pictures` (`id`, `album_id`, `image`, `title`) VALUES
(74, 9, 'sinif-tele1.jpg', ''),
(75, 9, 'Ruang-Kelas-SMA-1150x767.jpg', ''),
(76, 11, 'taman_minimalis_gcvoyr.jpg', ''),
(83, 7, '1158084c-9379-4400-8acc-1954372c0a2c_169.jpeg', 'Gede Satriadi Utama'),
(84, 7, 'ang-7-b0320d02875569af202f0d12ff09d3ce_600x400.jpg', 'Marcel Prastiko Arthana'),
(85, 7, 'portrait-419946_960_720.jpg', 'I Gusti Ngurah Darma'),
(86, 7, 'x-tanda-pubertas-pada-remaja-lakilaki.jpg', 'I Made Aditya Wira'),
(87, 7, 'nbregijohnforeisythe001paging.jpg', 'Gede Bayu Budiarta'),
(88, 7, 'Biodata-Billy-Davidson.jpg', 'Kevin'),
(89, 8, '80319-anak-takuya-kimura-koki-instagramatkoki.jpg', 'Lysandra Simamora'),
(90, 8, 'GvOt6zY.jpg', ''),
(91, 8, 'Donna-Visca-idn-times-600x490.jpg', ''),
(92, 8, 'LJvXqLRu_400x400.jpg', ''),
(93, 8, '584909848.jpg', ''),
(94, 8, '73b05c24-a5bd-43e0-845d-9062be20e7b2_43.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `level`, `foto`) VALUES
(1, 'marcelprastiko99', 'prastiko99', 'admin', 'marcel.jpg'),
(2, 'prastiko2001', 'marcel2001', 'admin', 'prastiko.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(20) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `alamat_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `alamat_siswa`) VALUES
(3, 'Made Edi Irawan', 'Jl. Serma Karma, No. 20 Panji'),
(5, 'I Made Bhisma Putra', 'Jl. Kaswari, No. 4 Singaraja'),
(7, 'Marcel Prastiko Arth', 'Gg. Durian, No. 1 Sambangan'),
(8, 'Putu Wisnu Ardia ', 'Jl. Tegal Sari, No. 18 Bungkulan'),
(9, 'Gede Satriadi Utama', 'Jl. Melur, No. 1 Singaraja '),
(10, 'Gede Bayu Budi Arta', 'Jl. Flamboyan, No. 3 Singaraja'),
(12, 'I Gusti Ngurah Darma', 'Jl. Gelatik, No. 14 Singaraja'),
(13, 'Komang Adi Pradana ', 'Jl. Pulau Komodo, No. 1 Banyuning '),
(14, 'I Made Aditya Wira ', 'Jl. Jatayu, No. 25 Singaraja'),
(15, 'Ketut Alit Winggasap', 'Jl. Ngurah Rai, No. 18 Seririt'),
(16, 'Lysandra Simamora', 'Jl.  Arjuna No. 15 A, Singaraja'),
(17, 'Josephine Imannuel', 'Jl. Arjuna No. 12 Singaraja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_pictures`
--
ALTER TABLE `album_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Album ID', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `album_pictures`
--
ALTER TABLE `album_pictures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Image ID', AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
