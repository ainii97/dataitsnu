-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2020 pada 02.33
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataitsnu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mhstahun`
--

CREATE TABLE `data_mhstahun` (
  `id_mhstahun` int(11) NOT NULL,
  `tahun_akademik` varchar(120) NOT NULL,
  `tekind` varchar(255) NOT NULL,
  `tekkim` varchar(255) NOT NULL,
  `thp` varchar(220) NOT NULL,
  `penfis` varchar(220) NOT NULL,
  `penbio` varchar(220) NOT NULL,
  `penmat` varchar(120) NOT NULL,
  `dkv` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_mhstahun`
--

INSERT INTO `data_mhstahun` (`id_mhstahun`, `tahun_akademik`, `tekind`, `tekkim`, `thp`, `penfis`, `penbio`, `penmat`, `dkv`) VALUES
(1, '2018', '17', '5', '7', '7', '17', '24', '22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_mhstahun`
--
ALTER TABLE `data_mhstahun`
  ADD PRIMARY KEY (`id_mhstahun`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_mhstahun`
--
ALTER TABLE `data_mhstahun`
  MODIFY `id_mhstahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
