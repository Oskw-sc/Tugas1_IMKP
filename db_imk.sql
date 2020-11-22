-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 05:10 AM
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
-- Table structure for table `db_imk`
--

CREATE TABLE `db_imk` (
  `Id_catatan` int(6) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL,
  `Tanggal_brh` date DEFAULT NULL,
  `Judul` varchar(30) NOT NULL,
  `Catatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_imk`
--

INSERT INTO `db_imk` (`Id_catatan`, `Author`, `Tanggal`, `Tanggal_brh`, `Judul`, `Catatan`) VALUES
(112345, 'Willioms', '2020-11-24', NULL, 'Tugas Lab IMK', 'Saya yang mengerjakan tugas '),
(111111, 'Jeff', '2020-11-25', '0000-00-00', 'Hari ini membuat TUGAS ', 'Sebenarnya ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
