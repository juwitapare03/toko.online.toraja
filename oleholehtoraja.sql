-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2023 pada 15.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oleholehtoraja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aksesoris`
--

CREATE TABLE `aksesoris` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `aksesoris`
--

INSERT INTO `aksesoris` (`id`, `nama`, `harga`) VALUES
(1, 'Anting Toraja', 'Rp 50.000'),
(3, 'Kandore', 'Rp 1.000.000'),
(4, 'Kalung Toraja', 'Rp 100.000'),
(5, 'Gelang Toraja', 'Rp 50.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kaintenun`
--

CREATE TABLE `kaintenun` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id`, `nama`, `harga`) VALUES
(2, 'Stelan Baju Toraja Putih', 'Rp. 500.000'),
(3, 'Satu Set Pakaian Toraja Wanita warna Cream', 'Rp 650.000'),
(4, 'Stelan Baju Toraja Orange', 'Rp 450.000'),
(5, 'Stelan Baju Toraja Biru', 'Rp 600.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tas`
--

CREATE TABLE `tas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` char(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tas`
--

INSERT INTO `tas` (`id`, `nama`, `harga`) VALUES
(1, 'Tas Salempang Varian 1', 'Rp 100.000'),
(2, 'Tas Salempang Wanita', 'Rp 250.000'),
(3, 'Tas Totebag', 'Rp 150.000'),
(4, 'Tas Salempang Varian 2', 'Rp 80.000'),
(5, 'Tas Salempang Wanita Cantik', 'Rp 300.000'),
(6, 'Tas Salempang Wanita Varian 2', 'Rp 200.000'),
(7, 'Tas Salempang Wanita Varian 3', 'Rp 280.000'),
(8, 'Tas Salempang Wanita Varian 4', 'Rp 300.000'),
(9, 'Tas Salempang Wanita Varian 5', 'Rp 200.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kaintenun`
--
ALTER TABLE `kaintenun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tas`
--
ALTER TABLE `tas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aksesoris`
--
ALTER TABLE `aksesoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kaintenun`
--
ALTER TABLE `kaintenun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tas`
--
ALTER TABLE `tas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
