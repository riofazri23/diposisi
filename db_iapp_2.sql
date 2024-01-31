-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 07:10 AM
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
-- Database: `db_iapp_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

CREATE TABLE `tb_disposisi` (
  `notiket` varchar(20) NOT NULL,
  `idteknisi` varchar(20) NOT NULL,
  `updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_disposisi`
--

INSERT INTO `tb_disposisi` (`notiket`, `idteknisi`, `updated`, `created`) VALUES
('A001', 'A0001', '2024-01-29 20:44:27', '2024-01-29 20:26:58'),
('A002', 'A0001', '2024-01-29 20:44:38', '2024-01-29 20:32:27'),
('A003', 'A0002', '2024-01-29 20:45:35', '2024-01-29 20:35:46'),
('A004', 'A0002', '2024-01-29 21:57:25', '2024-01-29 20:50:00'),
('A005', 'A0003', '2024-01-29 21:38:29', '2024-01-29 21:36:00'),
('A006', 'A005', '2024-01-31 12:01:25', '2024-01-31 11:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `idpengguna` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`idpengguna`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Suci', 'Suci', 'Suci000', 1),
(2, 'Jajang', 'Kamu', 'Aku123', 2),
(3, 'rio', 'Rio', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `idteknisi` varchar(20) NOT NULL,
  `namateknisi` varchar(50) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`idteknisi`, `namateknisi`, `keahlian`, `status`) VALUES
('A0001', 'Sakti', 'FOT', 'IDLE'),
('A0002', 'Fandi', 'FOT', 'IDLE'),
('A0003', 'Wahyu', 'FOC', 'IDLE'),
('A004', 'Rio F', 'Mikrotik', 'IDLE'),
('A005', 'Daniel H R', 'Cisco', 'IDLE'),
('A006', 'R Thoriq', 'Configuration', 'IDLE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD PRIMARY KEY (`notiket`),
  ADD KEY `idteknisi` (`idteknisi`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  ADD PRIMARY KEY (`idteknisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
