-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 01:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_0014`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_0014`
--

CREATE TABLE `tb_user_0014` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `gender` set('laki-laki','perempuan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user_0014`
--

INSERT INTO `tb_user_0014` (`id`, `nama`, `alamat`, `nohp`, `gender`) VALUES
(24, 'Joni', 'Pekalongan kota', '086568646521', 'laki-laki'),
(26, 'Aditya setiawan', 'Batank', '987655435792', 'laki-laki'),
(30, 'okarun', 'jepun', '08652637232', 'laki-laki'),
(31, 'rara', 'Wonotunggal', '08756523213', 'perempuan'),
(32, 'rima', 'Wonotunggal', '08657523423', 'perempuan'),
(33, 'winda', 'Wates', '085273526352', 'perempuan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user_0014`
--
ALTER TABLE `tb_user_0014`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user_0014`
--
ALTER TABLE `tb_user_0014`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
