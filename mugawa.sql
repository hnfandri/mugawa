-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Feb 2021 pada 04.20
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
(1, 'EVIO Multimedia', 'Jl. Palagan Tentara Pelajar Jl. Karya Utama No.22, Panggung Sari, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581', '083445362718', 4, 3, 3, 4, 2, 5, 3, 3, 5),
(2, 'Engar Jaya Multimedia', 'Terbah, Wates, Kulon Progo', '081734562781', 4, 3, 3, 2, 4, 5, 4, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `dev_n1` double DEFAULT NULL,
  `dev_n2` double DEFAULT NULL,
  `dev_n3` double DEFAULT NULL,
  `dev_n4` double DEFAULT NULL,
  `dev_n5` double DEFAULT NULL,
  `dev_n6` double DEFAULT NULL,
  `dev_n7` double DEFAULT NULL,
  `dev_n8` double DEFAULT NULL,
  `dev_n9` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_siswa`, `id_lokasi`, `dev_n1`, `dev_n2`, `dev_n3`, `dev_n4`, `dev_n5`, `dev_n6`, `dev_n7`, `dev_n8`, `dev_n9`) VALUES
(1, 1, 2, -1, 0, 2, 2, -1, 0, -1, 1, 2),
(2, 2, 2, 1, -1, 0, 2, -1, -1, 0, 1, 2),
(3, 5, 2, -1, 1, 2, 3, 1, 0, -1, 0, 3),
(4, 6, 2, 0, 2, 2, 0, -1, -1, 0, 0, 1),
(5, 9, 2, 0, 1, 0, 2, -1, -1, 1, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ranking`
--

CREATE TABLE `ranking` (
  `id_rank` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai_akhir` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ranking`
--

INSERT INTO `ranking` (`id_rank`, `id_siswa`, `nilai_akhir`) VALUES
(1, 1, 4.05),
(2, 2, 4.19),
(3, 5, 3.79);

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
  `password` varchar(288) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(2, 'Hanif Andri Wibowo', 'hanifandri140399@gmail.com', '$2y$10$HnBxBrzW63rlAFIVmd4IIex0db3b2.Bz1dv7u.VC8A3IEgcDdIRDS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_rank`);

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ranking`
--
ALTER TABLE `ranking`
  MODIFY `id_rank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
