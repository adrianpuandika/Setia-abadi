-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 11:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setibadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `judul`, `konten`, `kategori`, `created_at`) VALUES
(1, 1, 'PT. Setia Abadi menjadi salah satu dari Perusahaan Terbaik Versi OJK', 'Jakarta, Indonesia Institute for Corporate Directorship (IICD) dan Otoritas Jasa Keuangan (OJK) mengumumkan penilaian dari 50 Perusahaan terbuka di Indonesia dan tercatat di Bursa Efek Indonesia (BEI). Penilaian berdasarkan ASEAN Corporate Governance Scorecard. Selain itu bertujuan untuk mensosialisasikan secara umum kinerja tata kelola korporasi perusahaan besar di Indonesia kepada publik. Leksono Poeranto, Director Corporate Affairs, PT Indo Tambangraya Megah, Tbk, mengatakan dalam diskusi itu sudah mengimplementasikan sistem Corporate Government (CG) di PT Indo Tambangraya Megah. “Sistem CG sudah dimulai dari infrakstuktur dalam sistem perusahaan,” katanya.\n\n', 'About', '2023-01-23'),
(2, 1, 'Sertifikasi dan Penghargaan', 'Jakarta, Indonesia Institute for Corporate Directorship (IICD) dan Otoritas Jasa Keuangan (OJK) mengumumkan penilaian dari 50 Perusahaan terbuka di Indonesia dan tercatat di Bursa Efek Indonesia (BEI). Penilaian berdasarkan ASEAN Corporate Governance Scorecard. Selain itu bertujuan untuk mensosialisasikan secara umum kinerja tata kelola korporasi perusahaan besar di Indonesia kepada publik. Leksono Poeranto, Director Corporate Affairs, PT Indo Tambangraya Megah, Tbk, mengatakan dalam diskusi itu sudah mengimplementasikan sistem Corporate Government (CG) di PT Indo Tambangraya Megah. “Sistem CG sudah dimulai dari infrakstuktur dalam sistem perusahaan,” katanya.\n\n', 'Insight', '2023-01-23'),
(3, 1, 'Donasi untuk korban gempa Cianjur', 'Jakarta, Indonesia Institute for Corporate Directorship (IICD) dan Otoritas Jasa Keuangan (OJK) mengumumkan penilaian dari 50 Perusahaan terbuka di Indonesia dan tercatat di Bursa Efek Indonesia (BEI). Penilaian berdasarkan ASEAN Corporate Governance Scorecard. Selain itu bertujuan untuk mensosialisasikan secara umum kinerja tata kelola korporasi perusahaan besar di Indonesia kepada publik. Leksono Poeranto, Director Corporate Affairs, PT Indo Tambangraya Megah, Tbk, mengatakan dalam diskusi itu sudah mengimplementasikan sistem Corporate Government (CG) di PT Indo Tambangraya Megah. “Sistem CG sudah dimulai dari infrakstuktur dalam sistem perusahaan,” katanya.\n\n', 'Sosial', '2023-01-23'),
(4, 1, 'Donasi untuk korban gempa Cianjur', 'Jakarta, Indonesia Institute for Corporate Directorship (IICD) dan Otoritas Jasa Keuangan (OJK) mengumumkan penilaian dari 50 Perusahaan terbuka di Indonesia dan tercatat di Bursa Efek Indonesia (BEI). Penilaian berdasarkan ASEAN Corporate Governance Scorecard. Selain itu bertujuan untuk mensosialisasikan secara umum kinerja tata kelola korporasi perusahaan besar di Indonesia kepada publik. Leksono Poeranto, Director Corporate Affairs, PT Indo Tambangraya Megah, Tbk, mengatakan dalam diskusi itu sudah mengimplementasikan sistem Corporate Government (CG) di PT Indo Tambangraya Megah. “Sistem CG sudah dimulai dari infrakstuktur dalam sistem perusahaan,” katanya.\n\n', 'Sosial', '2023-01-23'),
(5, 1, 'Donasi untuk korban gempa Cianjur', 'Jakarta, Indonesia Institute for Corporate Directorship (IICD) dan Otoritas Jasa Keuangan (OJK) mengumumkan penilaian dari 50 Perusahaan terbuka di Indonesia dan tercatat di Bursa Efek Indonesia (BEI). Penilaian berdasarkan ASEAN Corporate Governance Scorecard. Selain itu bertujuan untuk mensosialisasikan secara umum kinerja tata kelola korporasi perusahaan besar di Indonesia kepada publik. Leksono Poeranto, Director Corporate Affairs, PT Indo Tambangraya Megah, Tbk, mengatakan dalam diskusi itu sudah mengimplementasikan sistem Corporate Government (CG) di PT Indo Tambangraya Megah. “Sistem CG sudah dimulai dari infrakstuktur dalam sistem perusahaan,” katanya.\n\n', 'Sosial', '2023-01-23'),
(6, 1, 'Donasi untuk korban gempa Cianjur (Edit)', 'Jakarta, Indonesia Institute for Corporate Directorship (IICD) dan Otoritas Jasa Keuangan (OJK) mengumumkan penilaian dari 50 Perusahaan terbuka di Indonesia dan tercatat di Bursa Efek Indonesia (BEI). Penilaian berdasarkan ASEAN Corporate Governance Scorecard. Selain itu bertujuan untuk mensosialisasikan secara umum kinerja tata kelola korporasi perusahaan besar di Indonesia kepada publik. Leksono Poeranto, Director Corporate Affairs, PT Indo Tambangraya Megah, Tbk, mengatakan dalam diskusi itu sudah mengimplementasikan sistem Corporate Government (CG) di PT Indo Tambangraya Megah. “Sistem CG sudah dimulai dari infrakstuktur dalam sistem perusahaan,” katanya.\r\n\r\n', 'Sosial', '2023-01-23'),
(9, 1, 'judul baru', 'aksdjlak', 'Rass', '2023-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(180) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_id_fk` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
