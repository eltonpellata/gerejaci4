-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 11:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gereja`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jenisklm` varchar(225) NOT NULL,
  `tmlahir` varchar(225) NOT NULL,
  `tgllahir` date NOT NULL,
  `pekerjaan` varchar(225) NOT NULL,
  `tmmeninggal` varchar(225) NOT NULL,
  `tglmeninggal` date NOT NULL,
  `pddk` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `jenisklm`, `tmlahir`, `tgllahir`, `pekerjaan`, `tmmeninggal`, `tglmeninggal`, `pddk`) VALUES
(42, 'sadas', 'LAKI-LAKI', 'sadasd', '2021-11-26', 'progeming', 'sadasd', '2021-11-24', 'SMA'),
(43, 'asdsadas', 'LAKI-LAKI', 'sdfsdf', '2021-11-25', 'proplayer', 'sdsdfsd', '2021-11-17', 'SMP'),
(44, 'asdsadsa', 'LAKI-LAKI', 'sadsad', '2021-11-17', 'proplayer', 'sadasd', '2021-11-17', 'SMP'),
(45, 'adasd', 'LAKI-LAKI', 'asdas', '2021-11-23', 'progeming', 'awaw', '2021-11-23', 'SMP');

-- --------------------------------------------------------

--
-- Table structure for table `datagereja`
--

CREATE TABLE `datagereja` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenisklm` varchar(255) NOT NULL,
  `tmlahir` date NOT NULL,
  `tgllahir` date NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `tmmeninggal` varchar(225) NOT NULL,
  `tglmeninggal` date NOT NULL,
  `pddk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-09-16-131738', 'App\\Database\\Migrations\\Tb', 'default', 'App', 1631799471, 1),
(2, '2021-09-29-152747', 'App\\Database\\Migrations\\CreateUsers', 'default', 'App', 1632929736, 2);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `sektor` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `norumah` varchar(255) NOT NULL,
  `nokeluarga` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `sektor`, `unit`, `norumah`, `nokeluarga`, `alamat`) VALUES
(1, 'asa', 'asdas', 'sada', 'asda', 'sads');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `password`) VALUES
(2, 'administrator', 'aduuuu@gmail.com', '$2y$10$2ijdk.aIOWTSEXLg1l0EX.77VFg.ZITU/a7q4bArNyVVrKX10n1Ka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datagereja`
--
ALTER TABLE `datagereja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `datagereja`
--
ALTER TABLE `datagereja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
