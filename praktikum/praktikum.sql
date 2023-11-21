-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2023 pada 07.43
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_general_ci DEFAULT NULL,
  `password` varchar(10) CHARACTER SET armscii8 COLLATE armscii8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`id`, `username`, `password`) VALUES
(1, 'abraar', '1234'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_orang`
--

CREATE TABLE `data_orang` (
  `nomor` int(100) NOT NULL,
  `nama` varchar(30) CHARACTER SET armscii8 COLLATE armscii8_general_ci DEFAULT NULL,
  `alamat` varchar(30) CHARACTER SET armscii8 COLLATE armscii8_general_ci DEFAULT NULL,
  `nohp` varchar(12) CHARACTER SET armscii8 COLLATE armscii8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_orang`
--

INSERT INTO `data_orang` (`nomor`, `nama`, `alamat`, `nohp`) VALUES
(13, 'abraar', 'karangsari', '0123123213'),
(20, 'mamah', 'aku takut', '081111111111'),
(24, 'agus', 'juga', '53653656546');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_orang`
--
ALTER TABLE `data_orang`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_orang`
--
ALTER TABLE `data_orang`
  MODIFY `nomor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
