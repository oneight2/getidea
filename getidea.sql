-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Okt 2019 pada 05.14
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getidea`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(11) NOT NULL,
  `nama_app` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `photo_preview` varchar(255) NOT NULL,
  `video_preview` varchar(255) NOT NULL DEFAULT 'video.mkv'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `nama_app`, `detail`, `photo_preview`, `video_preview`) VALUES
(1, 'Simak Unwim', 'simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim simak unwim ', 'photo.jpg', 'video.mkv'),
(2, 'aaa', 'aaaa', 'photo.jpg', 'video.mkv'),
(3, 'aan', 'masd', 'photo.jpg', 'video.mkv'),
(4, 'asdasd', 'asdasdqwqdq', 'photo.jpg', 'video.mkv'),
(5, 'asdas', 'asdwasdasd', 'photo.jpg', 'video.mkv'),
(6, 'asdasdasda', 'malsmdalsm', 'photo.jpg', 'video.mkv'),
(7, 'asdasd', 'msd asd', 'photo.jpg', 'video.mkv'),
(8, 'asd', 'mashdasd', 'photo.jpg', 'video.mkv'),
(9, 'masdas', ',samdas', 'photo.jpg', 'video.mkv'),
(10, 'bnasdn', 'mnas', 'photo.jpg', 'video.mkv'),
(11, 'basmdasdm', 'm,mnasdoas', '', 'video.mkv'),
(12, 'bajsd', 'bjas', '', 'video.mkv'),
(13, 'nasd', 'kd', '', 'video.mkv'),
(14, 'assad', 'mnasda', '', 'video.mkv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `id_aplikasi` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambar_ibfk_1` (`id_aplikasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_aplikasi`) REFERENCES `aplikasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
