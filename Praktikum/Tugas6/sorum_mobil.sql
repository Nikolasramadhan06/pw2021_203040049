-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2021 pada 05.53
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
-- Database: `pw_tubes_203040049`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sorum_mobil`
--

CREATE TABLE `sorum_mobil` (
  `id` int(11) NOT NULL,
  `Jenis` varchar(50) NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `harga` int(20) NOT NULL,
  `Stok` int(20) NOT NULL,
  `Foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sorum_mobil`
--

INSERT INTO `sorum_mobil` (`id`, `Jenis`, `deskripsi`, `harga`, `Stok`, `Foto`) VALUES
(1, 'Honda Jazz', 'Honda Jazz tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Honda hadir dalam 8 Varian', 256000000, 5, '1.jpg'),
(2, 'Honda Brio', 'Honda Brio tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Honda hadir dalam 12 Varian', 151000000, 7, '2.jpg'),
(3, 'Honda BRV', 'Honda BRV tersedia dalam pilihan mesin Bensin di Indonesia SUV baru dari Honda hadir dalam 8 varian', 255000000, 4, '3.jpg'),
(4, 'Honda HRV', 'Honda HRV tersedia dalam pilihan mesin Bensin di Indonesia Crossover baru dari Honda hadir dalam 10 varian', 306000000, 2, '4.jpg'),
(5, 'Honda CRV', 'Honda CRV tersedia dalam pilihan mesin Bensin di Indonesia Crossover baru dari Honda hadir dalam 6 Varian', 489000000, 13, '5.jpg'),
(6, 'Honda Civic', 'Honda Civic tersedia dalam pilihan mesin Bensin di Indonesia Sedan baru dari Honda hadir dalam 2 Varian', 536000000, 3, '6.jpg'),
(7, 'Hond Mobilio', 'Honda Mobilio tersedia dalam pilihan mesin Bensin di Indonesia MPV baru dari Honda hadir dalam 10 Varian', 290000000, 4, '7.jpg'),
(8, 'Honda Hatchback', 'Honda City Hatchback tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Honda hadir dalam 4 varian', 230000000, 3, '8.jpg'),
(9, 'Civic Type R', 'Honda Civic Type R tersedia dalam pilihan mesin Bensin di Indonesia Hatchback baru dari Honda hadir dalam 2 varian', 1000000000, 2, '9.jpg'),
(10, 'Honda WRV', 'Honda WRV tersedia dalam 6 warna yang berbeda - Alabaster Silver Metallic, White Orchid Pearl, Modern Steel Matallic', 200000000, 6, '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sorum_mobil`
--
ALTER TABLE `sorum_mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sorum_mobil`
--
ALTER TABLE `sorum_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
