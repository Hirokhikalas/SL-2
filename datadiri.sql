-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2022 pada 16.36
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbank`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datadiri`
--

CREATE TABLE `datadiri` (
  `NIK` varchar(20) NOT NULL,
  `NamaDepan` varchar(20) NOT NULL,
  `NamaTengah` varchar(20) NOT NULL,
  `NamaBelakang` varchar(20) NOT NULL,
  `TempatLahir` varchar(50) NOT NULL,
  `TglLahir` date NOT NULL,
  `WargaNegara` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NOHP` varchar(20) NOT NULL,
  `Alamat` text NOT NULL,
  `KodePost` int(7) NOT NULL,
  `Gambar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datadiri`
--
ALTER TABLE `datadiri`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
