-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2021 pada 16.17
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2021_203040049`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_buku`
--

CREATE TABLE `category_buku` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category_buku`
--

INSERT INTO `category_buku` (`id`, `nama_buku`, `deskripsi`, `harga`, `stok`, `foto`) VALUES
(1, 'Buku Administrasi Umum', 'Buku ADMINISTRASI UMUM SMK/MAK KELAS 10 revisi kurikulum 2013Terbitan ErlanggaKarangan Sri Endang', 100000, 44, '60ac60461ba78.jpg'),
(2, 'Buku Kearsipan', 'Buku Kearsipan SMK/MAK KELAS 10 revisi kurikulum 2013 Terbitan Erlangga Karangan Sri Endang', 129000, 16, 'arsip.jpg'),
(3, 'Buku Teknologi Perkantoran', 'Buku untuk siswa/guru SMK edisi revisi sesuai KIKD Terbaru., Kelas: SMK Kelas X, Kurikulum : 2013 Revisi 2017', 60000, 7, 'tekper.jpg'),
(4, 'Buku Korespondesni', 'Buku Korespondesni SMK/MAK KELAS 10 revisi kurikulum 2013 Terbitan Erlangga Karangan Sri Endang', 130000, 3, 'korespondensi.jpg'),
(5, 'Buku Otomatisasi Tata Kelola Humas Daaan Keprotokolan', 'Otomatisasi Tata Kelola Humas Daaan Keprotokolan SMK/MAK KELAS 11 revisi kurikulum 2013 Terbitan Erlangga Karangan Sri Endang', 130000, 10, 'otomatisasi.jpg'),
(6, 'Buku Administrasi Kepegawaian', 'Buku Administrasi Kepegawaian SMK/MAK KELAS 11 revisi kurikulum 2013', 60000, 14, '60a86fa92f6a6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category_buku`
--
ALTER TABLE `category_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category_buku`
--
ALTER TABLE `category_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
