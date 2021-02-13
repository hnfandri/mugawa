-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2021 pada 11.50
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mugawa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `multimedia` int(100) NOT NULL,
  `desain_grafis` int(100) NOT NULL,
  `hardware_software` int(100) NOT NULL,
  `inggris` int(100) NOT NULL,
  `so` int(100) NOT NULL,
  `videografi` int(100) NOT NULL,
  `fotografi` int(100) NOT NULL,
  `editting` int(100) NOT NULL,
  `teamwork` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`, `alamat`, `telp`, `multimedia`, `desain_grafis`, `hardware_software`, `inggris`, `so`, `videografi`, `fotografi`, `editting`, `teamwork`) VALUES
(1, 'Evio Multimedia', 'Jl. Palagan Tentara Pelajar Jl. Karya Utama No.22, Panggung Sari, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581', '081804010484', 80, 70, 70, 80, 60, 90, 70, 70, 80),
(2, 'Engar Jaya Multimedia', 'turi, sleman, yogyakarta', '087423456182', 90, 90, 90, 90, 90, 90, 90, 90, 90),
(3, 'YAYAYA', 'KULWARU PENGASIH', '089976537849', 80, 80, 80, 80, 80, 80, 80, 80, 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `multimedia` int(5) NOT NULL,
  `desain_grafis` int(5) NOT NULL,
  `hardware_software` int(5) NOT NULL,
  `inggris` int(5) NOT NULL,
  `so` int(5) NOT NULL,
  `videografi` int(5) NOT NULL,
  `fotografi` int(5) NOT NULL,
  `editting` int(5) NOT NULL,
  `teamwork` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `alamat`, `telp`, `multimedia`, `desain_grafis`, `hardware_software`, `inggris`, `so`, `videografi`, `fotografi`, `editting`, `teamwork`) VALUES
(1, 'Rizki Arifudin', 'Pemalang, jawatimur', '081256789345', 3, 3, 5, 4, 3, 5, 3, 4, 4),
(2, 'Deny Arisman', 'Kokap, Kulon Progo', '089167356712', 5, 2, 3, 4, 3, 4, 4, 4, 4),
(3, 'Eka Ismawati', 'Panjatan, Kulon progo', '08317835678267', 4, 4, 4, 5, 4, 3, 5, 4, 4),
(5, 'Aira Zafrina Daniah', 'Pengasih,pengasih, Kulon Progo', '081676254389', 3, 4, 5, 5, 5, 5, 3, 3, 5),
(6, 'Indra Rasendriya', 'Demakan Baru, tegal rejo', '081367893652', 4, 5, 5, 2, 3, 4, 4, 3, 3),
(7, 'Palya Sadana', 'Kliwonan, Magelang', '087167489302', 3, 3, 3, 5, 4, 4, 3, 2, 3),
(8, 'Alfonso Aryando', 'Mlati, sleman', '089156378902', 3, 4, 5, 3, 4, 3, 5, 4, 2),
(9, 'Hanif Andri Wibowo', 'Pengasih,pengasih, Kulon Progo', '081392627068', 4, 4, 3, 4, 3, 4, 5, 5, 4),
(10, 'Ferdian Paleka', 'Terbah, Wates, Kulon Progo', '081367489302', 5, 4, 4, 4, 4, 5, 3, 3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(288) NOT NULL,
  `email` varchar(288) NOT NULL,
  `password` varchar(288) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(2, 'Hanif Andri Wibowo', 'hanifandri140399@gmail.com', '$2y$10$HnBxBrzW63rlAFIVmd4IIex0db3b2.Bz1dv7u.VC8A3IEgcDdIRDS', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
