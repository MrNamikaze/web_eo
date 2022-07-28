-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2022 pada 08.15
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dp`
--

CREATE TABLE `dp` (
  `id` int(11) NOT NULL,
  `id_dp` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_paket` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  `jumlah_dp` float NOT NULL,
  `no_wa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `id_history` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_paket` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  `no_wa` varchar(20) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id`, `id_history`, `nama`, `alamat`, `jenis_paket`, `harga`, `no_wa`, `tanggal`) VALUES
(1, '1655022895', 'Syahrul Ramadhan', 'Kutorejo 3', 'Paket Hemat', 14500000, '082837281734', '2022-06-12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderan`
--

CREATE TABLE `orderan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_paket` varchar(50) NOT NULL,
  `harga` varchar(25) NOT NULL DEFAULT '0',
  `no_wa` varchar(20) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  `gedung` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `gedung`, `kategori`, `id_kategori`) VALUES
(38, 'Jack', 1, '', 'engagement', 0),
(39, 'Queen', 1.5, '', 'engagement', 0),
(40, 'King', 1.8, '', 'engagement', 0),
(50, 'Dekorasi 2,4 - 3 meter', 1, '', '', 38),
(51, 'Bunga artificial', 1, '', '', 38),
(52, '2 pcs kursi ', 1, '', '', 38),
(53, 'Alas karpet', 1, '', '', 38),
(54, 'Lighting', 1, '', '', 38),
(55, '2 pcs standing flowers', 1, '', '', 38),
(56, 'Stiker nama / inisial', 1, '', '', 38),
(57, 'Dekorasi 2,4 - 3 meter', 1.5, '', '', 39),
(58, 'Bunga MIX', 1.5, '', '', 39),
(59, '2 pcs kursi ', 1.5, '', '', 39),
(60, 'Alas karpet ', 1.5, '', '', 39),
(61, 'Lighting', 1.5, '', '', 39),
(62, '2 pcs standing flowers', 1.5, '', '', 39),
(63, 'Stiker nama / inisial', 1.5, '', '', 39),
(64, 'Free standing seserahan', 1.5, '', '', 39),
(65, 'Dekorasi 2,4 - 3 meter', 1.8, '', '', 40),
(66, 'Fresh flowers', 1.8, '', '', 40),
(67, '6 pcs kursi + 1 pcs meja', 1.8, '', '', 40),
(68, 'Alas melamin', 1.8, '', '', 40),
(69, 'Lighting', 1.8, '', '', 40),
(70, '2 pcs standing flowers', 1.8, '', '', 40),
(71, 'Stiker nama / inisial', 1.8, '', '', 40),
(72, 'Papan akrilik', 1.8, '', '', 40),
(73, 'Free standing seserahan', 1.8, '', '', 40),
(74, 'ace', 2, '', 'akad_only', 0),
(75, 'ace II', 2.5, '', 'akad_only', 0),
(76, 'Backdrop 2,4 - 3,6 meter', 2, '', '', 74),
(77, 'Bunga mix', 2, '', '', 74),
(78, '6pcskursi', 2, '', '', 74),
(79, '1 pcs meja akad', 2, '', '', 74),
(80, 'Alas melamin', 2, '', '', 74),
(81, 'Lighting', 2, '', '', 74),
(82, 'Standing flowers', 2, '', '', 74),
(83, 'Stiker nama / inisial', 2, '', '', 74),
(84, 'Backdrop 2,4 - 3,6 meter', 2.5, '', '', 75),
(85, 'Bunga mix', 2.5, '', '', 75),
(86, '6pcskursi', 2.5, '', '', 75),
(87, '1 pcs meja akad', 2.5, '', '', 75),
(88, 'Alas melamin', 2.5, '', '', 75),
(89, 'Lighting', 2.5, '', '', 75),
(90, 'Standing flowers', 2.5, '', '', 75),
(91, 'Stiker nama/inisial', 2.5, '', '', 75),
(92, 'Papan akrilik', 2.5, '', '', 75),
(93, 'Pintu masuk', 2.5, '', '', 75),
(94, 'ichigou', 3.5, '', 'home_wedding', 0),
(95, 'nigou', 6, '', 'home_wedding', 0),
(105, 'Dekor max 6 meter (model by request)', 3.5, '', '', 94),
(106, 'Bunga mix', 3.5, '', '', 94),
(107, 'Alas melamin', 3.5, '', '', 94),
(108, 'Taman mini bunga artifisial', 3.5, '', '', 94),
(109, 'Pintu masuk', 3.5, '', '', 94),
(110, 'Karpet jalan max 8 meter', 3.5, '', '', 94),
(111, '6 pcs kursi', 3.5, '', '', 94),
(113, '2 pcs Standing flowers', 3.5, '', '', 94),
(114, '1 pcs standing photo (tanpa foto)', 3.5, '', '', 94),
(115, 'Lighting', 3.5, '', '', 94),
(116, 'Stiker nama / inisial', 3.5, '', '', 94),
(117, 'Dekor max 6 meter (model by request)', 6, '', '', 95),
(118, 'Fresh flowers', 6, '', '', 95),
(119, 'Alas melamin', 6, '', '', 95),
(120, 'Taman mini bunga mix', 6, '', '', 95),
(121, 'Pintu masuk', 6, '', '', 95),
(122, 'Karpet jalan max 8 meter', 6, '', '', 95),
(123, '6 pcs kursi', 6, '', '', 95),
(125, '2 pcs standing photo (tanpa foto)', 6, '', '', 95),
(126, '1 pcs photo display max 8 foto (3R. Free cetak)', 6, '', '', 95),
(127, '4 pcs standing flowers', 6, '', '', 95),
(128, 'Papan wedding akrilik', 6, '', '', 95),
(129, 'Lighting', 6, '', '', 95),
(130, 'Stiker nama / inisial', 6, '', '', 95),
(131, 'sangou', 7.2, '', 'home_wedding', 0),
(132, 'Dekor max 6 - 8 meter (model by request) ', 7.2, '', '', 131),
(133, 'Fresh flowers', 7.2, '', '', 131),
(134, 'Alas melamin', 7.2, '', '', 131),
(135, 'Taman mini bunga artifisal', 7.2, '', '', 131),
(136, 'Pintu masuk', 7.2, '', '', 131),
(137, 'Karpet jalan max 8 meter', 7.2, '', '', 131),
(138, '6 pcs kursi', 7.2, '', '', 131),
(139, '2 pcs standing photo (tanpa foto)', 7.2, '', '', 131),
(140, '1 pcs photo display max 8foto (3R Free cetak)', 7.2, '', '', 131),
(141, '6 pcs standingflowers', 7.2, '', '', 131),
(142, 'Papan wedding akrilik', 7.2, '', '', 131),
(143, '2 pcs kotak angpao', 7.2, '', '', 131),
(144, 'Lighting', 7.2, '', '', 131),
(145, 'Stikernama/inisial', 7.2, '', '', 131),
(146, 'Freefirework & dryice', 7.2, '', '', 131),
(147, 'premium', 11.5, '', 'hall_wedding', 0),
(148, 'basic', 6, '', 'hall_wedding', 0),
(149, 'Dekor max 12 meter (model by request)', 11.5, '', '', 147),
(150, 'Fresh flowers', 11.5, '', '', 147),
(151, 'Alas melamin', 11.5, '', '', 147),
(152, 'Taman (bunga mix)', 11.5, '', '', 147),
(153, 'Pintu masuk', 11.5, '', '', 147),
(154, 'Karpet / melamin jalan 10 m', 11.5, '', '', 147),
(155, '2 pcs standing photo (tanpa foto)', 11.5, '', '', 147),
(157, '1 pcs Photo display 6-8 foto (3R freecetak)', 11.5, '', '', 147),
(158, '6 pcs standing flowers', 11.5, '', '', 147),
(159, '2 pcs kotak angpao', 11.5, '', '', 147),
(160, 'Papan weding akrilik', 11.5, '', '', 147),
(161, 'Lighting', 11.5, '', '', 147),
(162, 'Beam lighting', 11.5, '', '', 147),
(163, 'Stiker nama/inisial', 11.5, '', '', 147),
(164, 'Freefirework & dry ice', 11.5, '', '', 147),
(165, 'Free mejaakad', 11.5, '', '', 147),
(166, 'Free backdrop', 11.5, '', '', 147),
(167, 'Dekor max 6 meter', 6, '', '', 148),
(168, 'Fresh flowers', 6, '', '', 148),
(169, 'Alas melamin', 6, '', '', 148),
(170, 'Taman(bungamix)', 6, '', '', 148),
(171, 'Pintu masuk', 6, '', '', 148),
(172, 'Karpet jalan 10 meter', 6, '', '', 148),
(173, '2 pcs standing photo (tanpa foto)', 6, '', '', 148),
(174, '2 pcs standing flowers', 6, '', '', 148),
(175, '2 pcs kotak angpao', 6, '', '', 148),
(176, 'Papan weding akrilik', 6, '', '', 148),
(177, 'Lighting', 6, '', '', 148),
(178, 'Stiker nama / inisial', 6, '', '', 148),
(179, 'outdoor', 10, '', 'outdoor_wedding', 0),
(180, 'Dekor max 8 meter (model by request)', 10, '', '', 179),
(181, 'Bunga mix', 10, '', '', 179),
(182, 'Alas melamin ', 10, '', '', 179),
(183, 'Taman(bungamix)', 10, '', '', 179),
(184, 'Pintu masuk', 10, '', '', 179),
(185, 'Karpet / melamin jalan 10 m', 10, '', '', 179),
(186, '2 pcs standing photo (tanpa foto)', 10, '', '', 179),
(187, '1 pcs Photo display 6 - 8 foto (3R free cetak)', 10, '', '', 179),
(188, '6 pcs standing flowers', 10, '', '', 179),
(189, '2 pcs kotak angpao', 10, '', '', 179),
(190, 'Papan weding akrilik', 10, '', '', 179),
(191, 'Lighting', 10, '', '', 179),
(192, 'Beam lighting', 10, '', '', 179),
(193, 'Stiker nama/inisial', 10, '', '', 179),
(194, 'Free firework & dry ice ', 10, '', '', 179),
(195, 'Free meja akad', 10, '', '', 179);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_wa` varchar(50) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rating`
--

INSERT INTO `rating` (`id`, `nama`, `no_wa`, `ulasan`, `rating`) VALUES
(1, 'Syahrul Ramadhan', '082837281734', 'Mantab', 4),
(2, 'Budi Eko', '082837281734', 'sangat mantab\r\nsaya suka', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `orderan` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `id_ket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `tanggal`, `orderan`, `gambar`, `id_ket`) VALUES
(20, 'Dinda', '2022-06-02', 'Queen', '1655148899.jpg', 0),
(21, 'ayu', '2022-06-05', 'Jack', '1655149617.jpg', 0),
(22, 'dewa', '2022-06-12', 'King', '1655149637.png', 0),
(23, 'eko', '2022-06-19', 'Queen', '1655149652.png', 0),
(24, 'Eko Prasetyo', '2022-06-12', 'Queen', '1655149881.png', 0),
(25, 'Paket Sultan', '2022-06-05', 'King', '1655149898.PNG', 0),
(26, 'Syahrul Ramadhan', '2022-06-19', 'Jack', '1655149927.png', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `foto`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$zxdSnpILIinf6uAI.ssBZ.vvhuhofZygfcX.zehjuPlwQWWa7pGIy', '1648986963.jpg', 1),
(3, 'Wahyu', 'wahyu@gmail.com', '$2y$10$XnssA.GrxWf4OtsEGB6O/OC4zP4gPoH0JigthBocrN3yCOzeLWGcS', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dp`
--
ALTER TABLE `dp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
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
-- AUTO_INCREMENT untuk tabel `dp`
--
ALTER TABLE `dp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
