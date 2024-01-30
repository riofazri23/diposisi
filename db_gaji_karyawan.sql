-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2023 pada 16.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gaji_karyawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `kodeadmin` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`kodeadmin`, `nama`, `username`, `password`, `level`) VALUES
('ADM002', 'dedi G.', 'dedi', '123', 'admin'),
('ICP001', 'admin', 'admin', '123', ''),
('ICP002', 'nil', 'nil', '123', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `kodejabatan` varchar(50) NOT NULL,
  `namajabatan` varchar(50) NOT NULL,
  `gajipokok` int(50) NOT NULL,
  `uangmakan` int(50) NOT NULL,
  `tunjanganbpjs` int(50) NOT NULL,
  `totalgaji` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`kodejabatan`, `namajabatan`, `gajipokok`, `uangmakan`, `tunjanganbpjs`, `totalgaji`) VALUES
('COBA1', 'OB', 500000, 4000, 50000, 554000),
('COBA10', 'admin', 1000000, 1000000, 1000000, 3000000),
('KJB001', 'JUNIOR ENGGINER 1', 4500000, 300000, 100000, 4900000),
('KJB002', 'JUNIOR ENGGINER 2', 4500000, 300000, 300000, 5100000),
('KJB003', 'MANAGER', 7500000, 3500000, 300000, 11300000),
('KJB005', 'STAFF MANAGER', 7000000, 400000, 300000, 7700000),
('KJB006', 'Sekretaris', 5000000, 250000, 100000, 5350000),
('KJB007', 'OB', 3200000, 250000, 150000, 3600000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `namakaryawan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `notlp` varchar(50) NOT NULL,
  `kodekaryawan` varchar(50) NOT NULL,
  `namajabatan` varchar(50) NOT NULL,
  `gajipokok` int(50) NOT NULL,
  `uangmakan` int(50) NOT NULL,
  `tunjanganbpjs` int(50) NOT NULL,
  `totalgaji` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`namakaryawan`, `alamat`, `notlp`, `kodekaryawan`, `namajabatan`, `gajipokok`, `uangmakan`, `tunjanganbpjs`, `totalgaji`) VALUES
('dedi gunawan', 'depok', '0285848', '002', 'OB', 500000, 4000, 50000, 554000),
('LATHIFFAH', 'DEPOK', '083746273', 'KK003', 'STAFF MANAGER', 7000000, 400000, 300000, 7700000),
('widiya', 'jakarta', '089765432', 'KK004', 'Sekretaris', 5000000, 250000, 100000, 5350000),
('Eka', 'Jl Halim', '08120009900', 'KK005', 'OB', 3200000, 250000, 150000, 3600000),
('WIDIYA', 'JALAN', '08675789', 'KK006', 'JUNIOR ENGGINER 2', 4500000, 300000, 300000, 5100000),
('dedi', 'argentina', '089734583', 'KK007', 'MANAGER', 7500000, 3500000, 300000, 11300000),
('test', 'depok', '0293029302', 'KK008', 'STAFF MANAGER', 7000000, 400000, 300000, 7700000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `kodetransaksi` varchar(50) NOT NULL,
  `kodekaryawan` varchar(50) NOT NULL,
  `namakaryawan` varchar(50) NOT NULL,
  `namajabatan` varchar(50) NOT NULL,
  `tglinput` date NOT NULL,
  `gajipokok` int(50) NOT NULL,
  `uangmakan` int(50) NOT NULL,
  `tunjanganbpjs` int(50) NOT NULL,
  `totalgaji` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`kodetransaksi`, `kodekaryawan`, `namakaryawan`, `namajabatan`, `tglinput`, `gajipokok`, `uangmakan`, `tunjanganbpjs`, `totalgaji`) VALUES
('KTR001', 'KK001', 'DANIEL HARRY RAMADHAN', 'JUNIOR ENGGINER 1', '2023-06-10', 4500000, 300000, 100000, 4900000),
('KTR003', 'KK003', 'LATHIFFAH', 'STAFF MANAGER', '2023-06-11', 7000000, 400000, 300000, 7700000),
('KTR004', 'KK004', 'widiya', 'Sekretaris', '2023-06-13', 5000000, 250000, 100000, 5350000),
('KTR005', 'KK005', 'Eka', 'OB', '2023-06-13', 3200000, 250000, 150000, 3600000),
('KTR006', 'KK006', 'WIDIYA', 'JUNIOR ENGGINER 2', '2023-06-20', 4500000, 300000, 300000, 5100000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`kodeadmin`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`kodejabatan`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`kodekaryawan`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`kodetransaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
