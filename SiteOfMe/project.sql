-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 05:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`id_anggota`, `username`, `name`, `email`) VALUES
(4, 'wendy_', 'Wendy', 'wendy@gmail.com'),
(5, 'taeyeon_ss', 'Kim Taeyeon', 'kimtaeyeon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_faq`
--

CREATE TABLE `tb_faq` (
  `id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pertanyaan` text NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_faq`
--

INSERT INTO `tb_faq` (`id`, `email`, `pertanyaan`, `komentar`) VALUES
(1, 'grace@gmail.com', 'No Question', 'Belum sempurna'),
(2, 'grace@gmail.com', 'Sudah diupdate?', 'No Comment'),
(5, 'grace@gmail.com', 'No Question', 'Sistem 80% selesai'),
(12, 'wendy@gmail.com', 'No Question', 'No Comment'),
(13, 'grace@gmail.com', 'No Question', 'Belum sempurna'),
(14, 'grace@gmail.com', 'No Question', 'Site Of Me selesai di build'),
(16, 'susi@gmail.com', 'Bagaimana menulis yang baik?', 'No Comment');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karya`
--

CREATE TABLE `tb_karya` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `karyanya` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karya`
--

INSERT INTO `tb_karya` (`id`, `username`, `kategori`, `karyanya`, `tanggal`) VALUES
(1, 'taeyeon_ss', 'quotes', 'From Zero to Hero', '0000-00-00'),
(6, 'jessica_jung', 'pantun', 'Berakit rakit ke hulu\r\nBerenang renang ketepian\r\nBesakit sakit dahulu\r\nBersenang senang kemudian', '0000-00-00'),
(7, 'wendy_', 'puisi', 'oh iya deh', '0000-00-00'),
(8, 'taeyeon_ss', 'quotes', 'Hemat pangkal Kaya', '2020-06-08'),
(9, 'irene_', 'quotes', 'rajin pangkal pandai', '2020-06-08'),
(10, 'tiffany_ss', 'quotes', 'From Nothing to Something', '2020-06-08'),
(12, 'susi_', 'quotes', 'Bagai air di daun talas', '2020-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tulisan`
--

CREATE TABLE `tb_tulisan` (
  `id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `tulisan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tulisan`
--

INSERT INTO `tb_tulisan` (`id`, `username`, `email`, `kategori`, `tulisan`) VALUES
(2, 'jessica_jung', 'jungjessica@gmail.com', 'pantun', 'Beribu ribu bunga di taman\r\nHanya satu yang ku petik\r\nBeribu ribu orang di jalan\r\nHanya aku yang paling cantik'),
(3, 'grace_', 'grace@gmail.com', 'puisi', 'Hampir seluruh bunga di taman bermekaran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`name`, `username`, `email`, `password`, `level`) VALUES
('Grace', 'grace_', 'grace@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
('Irene', 'irene_', 'irene@gmail.com', 'c444858e0aaeb727da73d2eae62321ad', 2),
('Jessica Jung', 'jessica_jung', 'jungjessica@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2),
('Krystal', 'krystal_fx', 'krystal@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 2),
('Susi', 'susi_', 'susi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2),
('Kim Taeyeon', 'taeyeon_ss', 'kimtaeyeon@gmail.com', '377d308946dc954bd8c03e88e7c39057', 2),
('Tiffany Young', 'tiffany_ss', 'tiffany@gmail.com', '5653c6b1f51852a6351ec69c8452abc6', 2),
('Wendy', 'wendy_', 'wendy@gmail.com', 'a8a0c3c997c7946043fbcb277fff41d7', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karya`
--
ALTER TABLE `tb_karya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tulisan`
--
ALTER TABLE `tb_tulisan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_karya`
--
ALTER TABLE `tb_karya`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_tulisan`
--
ALTER TABLE `tb_tulisan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
