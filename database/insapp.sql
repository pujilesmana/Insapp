-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2021 pada 05.32
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insapp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `komentar_tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `komentar`, `user_id`, `post_id`, `komentar_tanggal`) VALUES
(1, 'mantap nian oooooooo', 3, 4, '2021-05-27 02:42:33'),
(2, 'Congrats puji', 2, 4, '2021-05-27 02:47:35'),
(4, 'Emang lah gg puji ini', 3, 4, '2021-05-27 02:53:00'),
(5, 'Mantap semangat terus', 3, 3, '2021-05-27 02:59:43'),
(6, 'top nian ini', 3, 4, '2021-05-27 03:10:09'),
(7, 'puji', 3, 4, '2021-05-27 03:10:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `likey`
--

CREATE TABLE `likey` (
  `likey_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `likey_tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `likey`
--

INSERT INTO `likey` (`likey_id`, `post_id`, `user_id`, `likey_tanggal`) VALUES
(27, 3, 3, '2021-05-27 01:52:15'),
(28, 2, 3, '2021-05-27 02:59:57'),
(29, 1, 3, '2021-05-27 03:00:02'),
(31, 4, 3, '2021-05-27 03:20:29'),
(32, 2, 2, '2021-05-27 03:29:13'),
(33, 4, 2, '2021-05-27 03:29:35'),
(34, 1, 2, '2021-05-27 03:30:04'),
(35, 3, 2, '2021-05-27 03:32:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_caption` text NOT NULL,
  `post_image` varchar(50) NOT NULL,
  `post_tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `post_caption`, `post_image`, `post_tanggal`) VALUES
(1, 3, 'Alhamdulillah transkip keluar bangga dengan nilai hasil sendiri :D', 'transkip_nilai3.jpg', '2021-05-26 17:31:43'),
(2, 3, 'KTP ku sudah keluar dari kelurahan tapi kok lecek ya, Hmmmmmmm ~~~~~', 'ktp.jpg', '2021-05-26 17:32:48'),
(3, 3, 'Waw transkip ku warna putih abu abu, hahahahahaha!!!!!', 'transkip_nilaiAB.jpg', '2021-05-26 17:34:21'),
(4, 3, 'Transkip puji', 'transkip_nilaiAB1.jpg', '2021-05-26 23:03:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_peran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_nama`, `user_email`, `user_password`, `user_peran`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456', 'admin'),
(2, 'Puji', 'pujilesmana@gmail.com', '123456', 'user'),
(3, 'muhammad', 'muhammadpuji63@gmail.com', '123456', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentar_id`);

--
-- Indeks untuk tabel `likey`
--
ALTER TABLE `likey`
  ADD PRIMARY KEY (`likey_id`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `likey`
--
ALTER TABLE `likey`
  MODIFY `likey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
