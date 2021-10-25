-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2021 pada 09.01
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landing_page_dbase`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_relation`
--

CREATE TABLE `company_relation` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `company_relation`
--

INSERT INTO `company_relation` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(2, '389-client-4.png', '2021-10-08 18:41:57', '2021-10-08 22:13:34'),
(3, 'client-2.png', '2021-10-08 20:11:11', '2021-10-08 20:11:11'),
(5, 'client-6.png', '2021-10-08 22:21:19', '2021-10-08 22:21:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_popup`
--

CREATE TABLE `data_popup` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_popup`
--

INSERT INTO `data_popup` (`id`, `nama`, `email`, `instansi`, `created_at`, `updated_at`) VALUES
(2, 'Khabibul Umam', 'khabibul123@gmail.com', 'Pustakawann', '2021-10-09 00:12:44', '2021-10-09 00:12:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_testimoni`
--

CREATE TABLE `data_testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_testimoni`
--

INSERT INTO `data_testimoni` (`id`, `nama`, `role`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Khabibul Umam', 'Pustakawan', 'testo-01.jpg', 'Pustaka Tungga Lengkap dalam segi pelayanan \r\n                              ', '2021-10-08 23:14:44', '2021-10-08 23:14:44'),
(3, 'Wirandra Alaya Rahman', 'DevOps', 'testo-02.jpg', 'Inspirasi..\r\n                              ', '2021-10-09 01:38:32', '2021-10-09 01:38:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_perpus`
--

CREATE TABLE `info_perpus` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `info_perpus`
--

INSERT INTO `info_perpus` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Berenang bersama sama kuy', 'Mari Kita Berenang Bersama sama yuuuksss\r\n                              ', '248-box-01.jpg', '2021-10-08 23:38:27', '2021-10-08 23:49:56'),
(2, 'Judul Aja', 'Bersatu kita teguh bercerai kita ke kua\r\n                              ', 'box-04.jpg', '2021-10-09 00:25:01', '2021-10-09 00:25:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `company_relation`
--
ALTER TABLE `company_relation`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_popup`
--
ALTER TABLE `data_popup`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_testimoni`
--
ALTER TABLE `data_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `info_perpus`
--
ALTER TABLE `info_perpus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `company_relation`
--
ALTER TABLE `company_relation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_popup`
--
ALTER TABLE `data_popup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_testimoni`
--
ALTER TABLE `data_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `info_perpus`
--
ALTER TABLE `info_perpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
