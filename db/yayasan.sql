-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2021 at 02:46 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kerjakami`
--

CREATE TABLE `kerjakami` (
  `id` int(11) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `lokasi_kegiatan` varchar(255) NOT NULL,
  `sub_kegiatan1` varchar(255) NOT NULL,
  `nama_foto1` varchar(255) NOT NULL,
  `nama_foto2` varchar(255) NOT NULL,
  `sub_kegiatan2` varchar(255) DEFAULT NULL,
  `nama_foto3` varchar(255) DEFAULT NULL,
  `nama_foto4` varchar(255) DEFAULT NULL,
  `sub_kegiatan3` varchar(255) DEFAULT NULL,
  `nama_foto5` varchar(255) DEFAULT NULL,
  `nama_foto6` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerjakami`
--

INSERT INTO `kerjakami` (`id`, `kategori`, `lokasi_kegiatan`, `sub_kegiatan1`, `nama_foto1`, `nama_foto2`, `sub_kegiatan2`, `nama_foto3`, `nama_foto4`, `sub_kegiatan3`, `nama_foto5`, `nama_foto6`) VALUES
(1, 'sd', 'SD Negeri 7 Manukaya, Kabupaten Gianyar', 'Pemberian Rak Buku Pengganti', 'sd-1-b.jpg', 'sd-1-a.jpg', 'SD Negeri 7 Manukaya, menerima buku bacaan, papan tulis, container boxes', 'sd-1-st1.jpg', '', 'Serah Terima Materials kepada SD Negeri 7 Manukaya', 'sd-1-st2.jpg', 'sd-1-st3.jpg'),
(2, 'tk', 'TK Sekolah Jauh Desa Pedawa, Singaraja, Kabupaten Buleleng', 'Perbaikan Tangga tanpa pegangan yang Beresiko bagi anak anak TK', 'tk-1-b.jpg', 'tk-1-a.jpg', '', '', '', '', '', ''),
(3, 'sd', 'SD Negeri 4 Sukawana, Kintamani, Kabupaten Bangli', 'Pemberian 20 sets Meja belajar serta kursi bagi sisawa/i  Kelas 1 SD', 'sd-2-b.jpg', 'sd-2-a.jpg', 'Serah Terima Materials kepada SD Negeri 4 Sukawana', 'sd-2-st1.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `publikasi`
--

CREATE TABLE `publikasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `jenis_file` varchar(10) DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publikasi`
--

INSERT INTO `publikasi` (`id`, `judul`, `jenis_file`, `nama_file`) VALUES
(1, 'Kepala Sekolah SD Negeri 7 Gianyar, Bpk.I Gusti Ngurah Mideh S. Pd sedang berbincang kepada Penasihat Akshara Linia Indonesia, \" Sri Dharen S.H., M.B.A,\" mengucapkan terima kasih telah memperhatikan kebutuhan sekolah kami di Manukaya, Kabupaten Gianyar.', 'foto', 'pb1.jpg'),
(2, 'Photo Bersama para guru di sekolah SD Negeri 7 Manukaya Gianyar, didampingi oleh Pak I Ketut Arinata Yasa, Tampak Siring.', 'foto', 'pb2.jpg'),
(3, 'Ketua Yayasan Akshara Linia Indonesia \"Manmagilan S.E, M.Si.,\" menyampaikan kepada ibu Kepala sekolah SD 4 Negeri Sukawana tentang Rencana beberapa program Yayasan Akshara Linia kedepannya.', 'foto', 'pb3.jpg'),
(4, 'Penasihat Yayasan Akshara Linia Indonesia, \" Sri Dharen S.H., M.B.A \", sedang memaparkan makna Philopsopy dari Logo Yayasan kepada kepala sekolah SD Negeri 4 Sukawana, \"Ibu Ni Made Sukareni S.Pd.\"', 'foto', 'pb4.jpg'),
(5, 'Perjalanan menuju Lokasi SD Negeri 4 Sukawana, Kabupaten Bangli dengan lokasi pendakian dan penurunan yang terjal.', 'foto', 'pb5.jpg'),
(6, 'Awal pembelajaran tatap muka pada minggu pertama bulan November, murid-murid SD Negeri 4 Sukawana merasa senang mendapatkan fasilitas meja belajar dan kursi yang baru dari Yayasan Akshara Linia Indonesia.', 'video', 'pb6.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kerjakami`
--
ALTER TABLE `kerjakami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kerjakami`
--
ALTER TABLE `kerjakami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
