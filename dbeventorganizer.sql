-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 03:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeventorganizer`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `alasan` varchar(200) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL,
  `kategori_peserta_id` int(11) NOT NULL,
  `nosertifikat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `tanggal_daftar`, `alasan`, `users_id`, `kegiatan_id`, `kategori_peserta_id`, `nosertifikat`) VALUES
(3, '2022-06-12', 'ingin kuliah di luar negeri', 2, 1, 2, 'S-2022-VI-001'),
(4, '2022-07-07', 'Ingin belajar memulai bisnis dengan benar', 2, 6, 2, 'S-2022-VI-002'),
(5, '2022-07-01', 'Ingin belajar public speaking', 2, 2, 2, ''),
(6, '2022-01-18', 'Belanja bund', 2, 1, 1, 'S-2022-Voucher-102'),
(7, '2022-07-07', 'Mencari buku dengan harga murah alias diskonan', 9, 4, 5, ''),
(8, '2022-07-07', 'Seru-seruan aja sih', 10, 9, 5, ''),
(9, '2022-07-07', 'Meningkatkan softkill', 11, 10, 2, ''),
(10, '2022-07-07', 'Belajar membangun bisnis sendiri', 9, 6, 1, ''),
(11, '2022-07-07', 'Ingin menambah ilmu baru ', 9, 10, 1, ''),
(12, '2022-07-07', 'Mencari informasi mengenai perkuliahan di luar negeri', 11, 1, 2, ''),
(13, '2022-07-07', 'Sedang mencari buku latihan soal yang ramah dikantong', 13, 4, 1, ''),
(14, '2022-07-07', 'Mencari pakaian dengan harga murah', 10, 8, 5, ''),
(15, '2022-07-07', 'Cari novel diskonan', 12, 4, 1, ''),
(16, '2022-07-07', 'Belanja bund', 13, 8, 5, ''),
(17, '2022-07-07', 'Lihat sejauh mana kemampuan saya dan teman-teman dalam bermain futsal', 11, 5, 5, ''),
(19, '2022-07-07', 'ingin membangun bisnis sendiri', 14, 3, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kegiatan`
--

CREATE TABLE `jenis_kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_kegiatan`
--

INSERT INTO `jenis_kegiatan` (`id`, `nama`) VALUES
(1, 'Seminar'),
(2, 'Workshop'),
(3, 'Event Olah Raga'),
(4, 'Bazaar'),
(5, 'Pelatihan'),
(7, 'Pekerja Kantoran'),
(8, 'Dokter');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_peserta`
--

CREATE TABLE `kategori_peserta` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_peserta`
--

INSERT INTO `kategori_peserta` (`id`, `nama`) VALUES
(1, 'Pelajar'),
(2, 'Mahasiswa'),
(3, 'Karyawan Swasta'),
(4, 'Guru/Dosen'),
(5, 'Umum'),
(6, 'ASN');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `harga_tiket` double DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `narasumber` varchar(200) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `pic` varchar(45) DEFAULT NULL,
  `foto_flyer` varchar(30) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `kapasitas`, `harga_tiket`, `tanggal`, `narasumber`, `tempat`, `pic`, `foto_flyer`, `jenis_id`) VALUES
(1, 'Seminar Sukses Kuliah di Luar Negeri', 200, 25000, '2022-06-30', 'Dr. Seto Waluyo', 'Aula Kampus B2 STT-NF', 'Ahmad Fathan', '1.jpg', 1),
(2, 'How Strong Words of Mouth Can Influence Other', 50, 30000, '2022-03-10', 'Prof. Greta Mae', 'Sentul Conference Center', 'Nurmila Fauziyah', '2.png', 1),
(3, 'How to Start Your Own Business', 20, 200000, '2022-08-01', 'Nadiem Makarim', 'Zoom Meeting', 'Reza Fauzan Pratama', '3.jpg', 5),
(4, 'Jakarta Gramedia Bazaar', 300, 12000, '2022-05-02', 'Gramedia ', 'The PIM Hall', 'Reizuka Rei', '4.jpg', 1),
(5, 'Futsal Competition', 16, 400000, '2023-02-24', 'Larana School ', 'Larana School', 'Kurnia Mega', '5.jpg', 3),
(6, 'Learn the Steps to Start a Business', 100, 15000, '2022-03-23', 'Daniel Gallego', 'Anywhere City', 'Pangeran Achmad', '6.png', 2),
(7, 'Make Our Business Grow Together', 130, 100000, '2023-12-10', 'Rosa Maria Aguado, Pedro Fernandes', 'Pacific Century Place Tower Lt. 26 SCBD', 'Reza Fauzan', '7.jpg', 2),
(8, 'Ramayana Bazaar 2022', 1000, 0, '2022-04-10', 'Ramayana', 'Jl. Rio No. 1 (Jl. Alun-Alun Timur)', 'Muhammad Mukhlis', '8.jpg', 4),
(9, 'Fun Soccer Camp JKT', 20, 500000, '2022-07-10', 'E-JKT', 'Warner and Spencer Stadium MPR DPR RI', 'Rizky Billar', '9.jpg', 3),
(10, 'Support Growth and Job Creation', 250, 350000, '2022-07-08', 'Maudy Ayunda', 'Rose Hotel Hall Central Jakarta', 'Cece Maharani', '10.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', '2022-06-12 00:07:42', '2022-06-12 00:07:42', 1, 'administrator'),
(2, 'aminah', '90b74c589f46e8f3a484082d659308bd', 'aminah@gmail.com', '2022-06-12 00:07:44', '2022-06-12 00:07:44', 1, 'public'),
(4, 'reza', '827ccb0eea8a706c4c34a16891f84e7b', 'reza@gmail.com', '2022-07-06 03:42:15', '2022-07-06 03:43:17', 1, 'administrator'),
(7, 'mila', '827ccb0eea8a706c4c34a16891f84e7b', 'milakece@gmail.com', '2022-07-06 03:46:30', '2022-07-06 03:46:30', 1, 'administrator'),
(8, 'orang', '827ccb0eea8a706c4c34a16891f84e7b', 'orang@gmail.com', '2022-07-06 03:51:56', '2022-07-06 03:51:56', 1, 'public'),
(9, 'Zidane', '827ccb0eea8a706c4c34a16891f84e7b', 'zidanpakee@gmail.com', '2022-07-07 08:11:09', '2022-07-07 08:11:09', 1, 'public'),
(10, 'ayyas', '542c621fd3f6f2972525209c3eda87d3', 'ayyas@gmail.com', '2022-07-07 08:28:58', '2022-07-07 08:28:58', 1, 'public'),
(11, 'prince', '827ccb0eea8a706c4c34a16891f84e7b', 'pangeran@gmail.com', '2022-07-07 08:33:20', '2022-07-07 08:33:20', 1, 'public'),
(12, 'naura', '610b1ef8195b341dd60a8fbadda254de', 'naura@gmail.com', '2022-07-07 09:14:22', '2022-07-07 09:14:22', 1, 'public'),
(13, 'bila', '827ccb0eea8a706c4c34a16891f84e7b', 'bilala@gmail.com', '2022-07-07 13:32:41', '2022-07-07 13:32:41', 1, 'public'),
(14, 'pratama', '827ccb0eea8a706c4c34a16891f84e7b', 'pratama@gmail.com', '2022-07-07 15:44:55', '2022-07-07 15:44:55', 1, 'public');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`kegiatan_id`),
  ADD KEY `fk_daftar_kategori_peserta1_idx` (`kategori_peserta_id`);

--
-- Indexes for table `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_peserta`
--
ALTER TABLE `kategori_peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jenis_kegiatan`
--
ALTER TABLE `jenis_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori_peserta`
--
ALTER TABLE `kategori_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `fk_daftar_kategori_peserta1` FOREIGN KEY (`kategori_peserta_id`) REFERENCES `kategori_peserta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_kegiatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
