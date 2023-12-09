-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2023 pada 12.23
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bed`
--

CREATE TABLE `bed` (
  `id_bed` int(255) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bed`
--

INSERT INTO `bed` (`id_bed`, `jenis`, `harga`, `img`) VALUES
(1, 'Single', 100000, '1.jpg'),
(2, 'Double', 300000, '2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_C` int(100) NOT NULL,
  `id_RS` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id_C`, `id_RS`) VALUES
(12, 10),
(14, 32),
(16, 33),
(17, 38),
(18, 39);

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `id_H` int(100) NOT NULL,
  `id_C` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history`
--

INSERT INTO `history` (`id_H`, `id_C`) VALUES
(3, 12),
(5, 14),
(6, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_k` int(100) NOT NULL,
  `no_kamar` varchar(100) NOT NULL,
  `id_bed` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_k`, `no_kamar`, `id_bed`) VALUES
(29, '1', 1),
(30, '2', 1),
(31, '6', 2),
(32, '7', 2),
(33, '15', 2),
(34, '10', 2),
(35, '10', 2),
(36, '14', 2),
(37, '69', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reserfasi`
--

CREATE TABLE `reserfasi` (
  `id_RS` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `inap` int(100) NOT NULL,
  `checkout` date NOT NULL,
  `id_bed` int(10) NOT NULL,
  `hasil_H` int(255) NOT NULL,
  `id_k` int(100) NOT NULL,
  `checkin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reserfasi`
--

INSERT INTO `reserfasi` (`id_RS`, `id`, `inap`, `checkout`, `id_bed`, `hasil_H`, `id_k`, `checkin`) VALUES
(10, 13, 12, '2023-10-08', 1, 1200000, 30, '0000-00-00'),
(32, 13, 122222, '2023-10-31', 1, 2147483647, 29, '0000-00-00'),
(33, 14, 122, '2023-10-30', 1, 12200000, 29, '0000-00-00'),
(38, 14, 1222, '0000-00-00', 2, 366600000, 31, '0000-00-00'),
(39, 14, 1222, '2027-02-15', 2, 366600000, 31, '2023-10-12'),
(40, 14, 1222, '2027-02-21', 2, 366600000, 31, '2023-10-18'),
(41, 14, 12222, '2057-04-13', 2, 2147483647, 31, '2023-10-27'),
(42, 14, 22222, '2084-08-21', 2, 2147483647, 31, '2023-10-19'),
(43, 14, 2222, '2029-11-26', 2, 666600000, 31, '2023-10-27'),
(44, 14, 2222, '2029-10-30', 2, 666600000, 31, '2023-09-30'),
(45, 13, 1234, '2027-04-10', 2, 370200000, 31, '2023-11-23'),
(46, 13, 1, '0000-00-00', 2, 300000, 35, '0000-00-00'),
(47, 17, 2, '2023-12-17', 1, 200000, 30, '2023-12-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe`
--

CREATE TABLE `tipe` (
  `id_T` int(255) NOT NULL,
  `tipe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tipe`
--

INSERT INTO `tipe` (`id_T`, `tipe`) VALUES
(1, 'guest'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` varchar(999) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_T` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_T`, `email`) VALUES
(13, 'namakuapa', '$2y$10$5zSzN2kr/82PvwIX7QTedOlCLoOWBA7ZKCq90GZUo1aPQyhzzDbUm', 1, '123123@gmail.com'),
(14, 'admin', '$2y$10$5zSzN2kr/82PvwIX7QTedOlCLoOWBA7ZKCq90GZUo1aPQyhzzDbUm', 2, 'admin@gmail.com'),
(15, '1111', '$2y$10$bc5LuCaj9VFnVUl3FKLKouJ.DfmunQd.fTQlf28pNxY8epULmSwA2', 1, '111@gmail.com'),
(16, '111', '$2y$10$L8nCL7tZBS9wJ4My5qHUHu8kjPMCaXkrdcSmV1ExoUvgAwtuBYlxK', 1, '111@gmail.com'),
(17, 'kontolEnak123', 'kontolEnak', 1, 'heavenofdestiny01@duck.com'),
(19, 'thr3nody', '$2y$10$7jrqysNx06AfaPqewlY8c.mqqL9IsgD3.HMFhEm95C7F.eU2FgRU6', 1, 'heavenofdesnity01@duck.com'),
(20, 'BuDindaUwU', '$2y$10$CTMhnUp/tEN2oj2bZ5.BuO69rH.ejrsL72GRHz4E6xvduRLP4NWdK', 1, 'uuuu@duck.com'),
(21, 'aku', '$2y$10$IT0sH3RvG4p8VvJHVjtpgO4EV.OwJdBXQKaDoI0Qis8t9KvxWGO1a', 1, 'aku@gmail.com'),
(23, 'namakuKontol', '$2y$10$6frPK8zA0y2YPb2V.6.HTuh6hyjlHJtKntcLI96TxN55zQkpVoZfK', 1, 'kontolBakar@proton.me'),
(24, 'namakuapa', '$2y$10$F7vFaWGY5vlr.21b5ioJK.aaR4rLkbSHuXg3i1fg6S6bUjis7eebS', 1, '1@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`id_bed`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_C`),
  ADD KEY `id_RS` (`id_RS`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_H`),
  ADD KEY `id_C` (`id_C`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_k`),
  ADD KEY `id_bed` (`id_bed`);

--
-- Indeks untuk tabel `reserfasi`
--
ALTER TABLE `reserfasi`
  ADD PRIMARY KEY (`id_RS`),
  ADD KEY `id` (`id`),
  ADD KEY `id_k` (`id_k`),
  ADD KEY `id_bed` (`id_bed`);

--
-- Indeks untuk tabel `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_T`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_T` (`id_T`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bed`
--
ALTER TABLE `bed`
  MODIFY `id_bed` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_C` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `history`
--
ALTER TABLE `history`
  MODIFY `id_H` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_k` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `reserfasi`
--
ALTER TABLE `reserfasi`
  MODIFY `id_RS` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_T` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_RS`) REFERENCES `reserfasi` (`id_RS`);

--
-- Ketidakleluasaan untuk tabel `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`id_C`) REFERENCES `checkout` (`id_C`);

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`id_bed`) REFERENCES `bed` (`id_bed`);

--
-- Ketidakleluasaan untuk tabel `reserfasi`
--
ALTER TABLE `reserfasi`
  ADD CONSTRAINT `reserfasi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `reserfasi_ibfk_2` FOREIGN KEY (`id_k`) REFERENCES `kamar` (`id_k`),
  ADD CONSTRAINT `reserfasi_ibfk_3` FOREIGN KEY (`id_bed`) REFERENCES `bed` (`id_bed`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_T`) REFERENCES `tipe` (`id_T`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
