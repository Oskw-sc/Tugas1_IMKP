-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 04:03 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labimk`
--

-- --------------------------------------------------------

--
-- Table structure for table `diary_aktivitas`
--

CREATE TABLE `diary_aktivitas` (
  `id` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `date_add` date NOT NULL,
  `date_update` date DEFAULT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diary_aktivitas`
--

INSERT INTO `diary_aktivitas` (`id`, `author`, `date_add`, `date_update`, `title`, `content`) VALUES
(2, 'Willioms Sanjaya', '2020-11-22', NULL, 'Mencoba Prototype', 'Hari ini saya mencoba mengikuti mata pelajaran prototype\r\nSangat seru sekali!!!\r\nSaat kami membuat prototype, kami juga mencoba github untuk pertama kalinya sebagai penghubung berkas antar anggota.\r\nGitHub itu Dalam :) . Semoga kedepannya kami dapat bertahan ...\r\n\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diary_aktivitas`
--
ALTER TABLE `diary_aktivitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diary_aktivitas`
--
ALTER TABLE `diary_aktivitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
