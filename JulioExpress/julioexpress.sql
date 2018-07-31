-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2018 pada 06.04
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `julioexpress`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `resi_produk`
--

CREATE TABLE `resi_produk` (
  `id` int(4) NOT NULL,
  `no_resi` varchar(8) NOT NULL,
  `nama_pengirim` varchar(15) NOT NULL,
  `produk` varchar(255) NOT NULL,
  `nama_tujuan` varchar(255) NOT NULL,
  `alamat_tujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `resi_produk`
--

INSERT INTO `resi_produk` (`id`, `no_resi`, `nama_pengirim`, `produk`, `nama_tujuan`, `alamat_tujuan`) VALUES
(1, '12345678', 'Julio P', 'Beras Kecantikan', 'Faiz NFI', 'Jl. Safir 3 no 6 PPS'),
(2, '87654321', 'Coba gan', 'Coba', 'Coba', 'Coba'),
(6, '87654322', '123123', 'Coba', '124124', 'arqwrwqr'),
(7, '87654323', 'dasdsad', 'asdasd', 'asdasd', 'asdadasd'),
(8, '87654324', 'dasdsad', 'asdasd', 'asdasd', 'asdadasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_resi`
--

CREATE TABLE `status_resi` (
  `id` int(11) NOT NULL,
  `no_resi` int(8) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_resi`
--

INSERT INTO `status_resi` (`id`, `no_resi`, `status`, `date`) VALUES
(1, 12345678, 'Transit Jakarta', '2018-05-01'),
(2, 12345678, 'Transit Surabaya', '2018-05-10'),
(3, 12345678, 'Transit Gresik', '2018-05-25'),
(4, 12345678, 'Barang Tiba di tujuan', '2018-05-31'),
(5, 87654321, 'di Jakarta', '2018-06-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `date_created`) VALUES
(1, 'admin', 'admin', '2018-06-08 02:44:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `resi_produk`
--
ALTER TABLE `resi_produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `no_resi` (`no_resi`);

--
-- Indeks untuk tabel `status_resi`
--
ALTER TABLE `status_resi`
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
-- AUTO_INCREMENT untuk tabel `resi_produk`
--
ALTER TABLE `resi_produk`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `status_resi`
--
ALTER TABLE `status_resi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
