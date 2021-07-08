-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2021 pada 15.01
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdanadesa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggaran_dana`
--

CREATE TABLE `anggaran_dana` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `target` varchar(128) NOT NULL,
  `realisasi` varchar(128) NOT NULL,
  `lebih_kurang` varchar(128) NOT NULL,
  `tgl_masuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggaran_dana`
--

INSERT INTO `anggaran_dana` (`id`, `nama`, `target`, `realisasi`, `lebih_kurang`, `tgl_masuk`) VALUES
(1, 'Dana Desa', '748903000', '748903000', '0.00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan_dana`
--

CREATE TABLE `pemasukan_dana` (
  `id` int(11) NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `jumlah` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemasukan_dana`
--

INSERT INTO `pemasukan_dana` (`id`, `tgl_masuk`, `bidang`, `jumlah`) VALUES
(1, '2020-12-31 20:27:32', 'Dapat Dana Bantuan Pemilihan Terpilih Kepala Desa', 900000000),
(2, '0000-00-00 00:00:00', 'Sponsor Dana Dari Walinagari', 50000000),
(3, '2020-12-31 00:00:00', 'Kegiatan pembangunan masjid', 200000000),
(7, '2021-01-02 21:18:00', 'Pengelolaan dan pembinaan sd', 2000000),
(8, '2020-12-16 02:25:00', 'Kegiatan pembangunan jembatan', 400000000),
(9, '2021-01-03 02:00:00', 'Kegiatan pembangunan jalan desa', 40000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran_dana`
--

CREATE TABLE `pengeluaran_dana` (
  `id` int(11) NOT NULL,
  `tgl_keluar` datetime NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `jumlah` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran_dana`
--

INSERT INTO `pengeluaran_dana` (`id`, `tgl_keluar`, `bidang`, `jumlah`) VALUES
(2, '2020-12-16 15:45:12', 'Kegiatan pembangunan jalan desa', 28917000),
(3, '2020-12-06 15:45:22', 'Kegiatan Pengadaan saran dan prasaran sanitasi', 28917000),
(4, '2021-01-17 15:45:31', 'Kegiatan pembangunan saluran drainase', 291455500),
(6, '2021-01-01 15:45:39', 'Pengelolaan dan pembinaan pasar', 100000000),
(7, '2021-01-12 11:29:51', 'Pembangunan Pasar', 50000000),
(12, '2021-01-20 10:25:00', 'biaya obat-obatan', 30000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `date_created`) VALUES
(1, 'alfir', 'pubgm.row@gmail.com', 'default.jpg', '$2y$10$eXhEQ2pAD3QKl5Z9HENXQuer7yFwi8uRCQwCGUEGOni2kgSQxd8ye', 1608951574),
(2, 'asd', 'asd@gmail.com', 'default.jpg', '$2y$10$9twOkb9oXOLQ36Az27qW2.D1M80/Wsy0HWEqLpC.d9DMoMLuXniJW', 1608952235),
(3, 'urang', 'urang@gmail.com', 'default.jpg', '$2y$10$3RfUXa7IvR/Im1jS0pIC0ec4U7ztFAeZh5rKunIf0S1ErXy2MkAue', 1609052958),
(4, 'admin123', 'admin@gmail.com', 'default.jpg', '$2y$10$hOZqSP0KlfKfL0rEiNxlKuVxJQry00dtOyY4eL776hA8NspGJ61CG', 1610507013),
(5, 'walinagari1234', 'walinagari@gmail.com', 'default.jpg', '$2y$10$MdqcdzDdZSRRI/y2Fy92tuuetqdLIq0IQfQB1tuQ3gGLJ/VJnuk5m', 1610507469),
(6, 'adm12345', 'adm@gmail.com', 'default.jpg', '$2y$10$0kYbPPsiOq0wUVcObZcmkujmmvfwP4ohNrJRpXmHb6QHfvPSuwoFa', 1610508088);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggaran_dana`
--
ALTER TABLE `anggaran_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemasukan_dana`
--
ALTER TABLE `pemasukan_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengeluaran_dana`
--
ALTER TABLE `pengeluaran_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggaran_dana`
--
ALTER TABLE `anggaran_dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemasukan_dana`
--
ALTER TABLE `pemasukan_dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran_dana`
--
ALTER TABLE `pengeluaran_dana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
