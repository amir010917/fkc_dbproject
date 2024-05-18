-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 02:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkp_dbprojectt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tempah_db`
--

CREATE TABLE `tempah_db` (
  `id_tempah` int(10) NOT NULL,
  `tarikh_pohon` date NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `urusan_kerja` varchar(50) NOT NULL,
  `tempat_urusan` varchar(50) NOT NULL,
  `tarikh_urusan` date NOT NULL,
  `tarikh_tamat` date NOT NULL,
  `masa_urusan` varchar(50) NOT NULL,
  `status_pohon` varchar(10) NOT NULL,
  `nama_pemandu` varchar(10) NOT NULL,
  `pengguna_id` int(10) NOT NULL,
  `no_telefon` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `masa_tamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tempah_db`
--

INSERT INTO `tempah_db` (`id_tempah`, `tarikh_pohon`, `nama_pegawai`, `urusan_kerja`, `tempat_urusan`, `tarikh_urusan`, `tarikh_tamat`, `masa_urusan`, `status_pohon`, `nama_pemandu`, `pengguna_id`, `no_telefon`, `jabatan`, `masa_tamat`) VALUES
(1, '2024-03-05', 'En Mustapa', 'Rondaan SOP', 'Jajahan Setiu', '2024-03-05', '2024-03-05', '04:44', '', '', 2, '0199608911', 'Perhubungan Awam & Korporat', '04:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempah_db`
--
ALTER TABLE `tempah_db`
  ADD PRIMARY KEY (`id_tempah`),
  ADD KEY `usertempah` (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempah_db`
--
ALTER TABLE `tempah_db`
  MODIFY `id_tempah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tempah_db`
--
ALTER TABLE `tempah_db`
  ADD CONSTRAINT `usertempah` FOREIGN KEY (`pengguna_id`) REFERENCES `user` (`pengguna_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
