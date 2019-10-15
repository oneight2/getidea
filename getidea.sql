-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2019 pada 03.43
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
(19, 'SIMAK Fahutan UNWIM', 'Aplikasi SIMAK(Sistem Akademik) berbasis web dengan menggunakan php, materialize berguna untuk mengcover kegiatan konvensional akdemik seperti \r\n-Kontrak mata kuliah\r\n-Penilaian matapelajaran per mahasiswa\r\n-Pengelolaan mahasiswa, dosen dan semua yang mengikuti proses bisnis akademik.\r\n-dll', '5da01a968d662png.PNG', 'video.mkv'),
(20, 'Koperasi Sadang Maju', 'Aplikasi koperasi sadang maju adalah aplikasi pengelolaan proses bisnis koperasi simpan pinjam serta pengelolaan anggota koperasi berbasis web dengan menggunakan html, css, js, php serta framework bootsrap 4 untuk frontendnya.', '5da01b1aeaafepng.PNG', 'video.mkv');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_komplain`
--

CREATE TABLE `detail_komplain` (
  `id_komplain` int(11) NOT NULL,
  `bukti_komplain` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id`, `id_aplikasi`, `gambar`) VALUES
(1, 19, '5da33246541b6jpg.jpg'),
(3, 19, '5da332465b5acjpg.jpg'),
(5, 19, '5da3324660f19jpg.jpg'),
(6, 20, '5da3386455795png.png'),
(7, 20, '5da33864590b6jpg.jpg'),
(8, 19, '5da33af95b2f9jpg.jpg'),
(9, 19, '5da4598e35981jpg.jpg'),
(10, 19, '5da4598e4a31djpg.jpg'),
(11, 19, '5da4598e4daa5jpg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komplain`
--

CREATE TABLE `komplain` (
  `id` int(11) NOT NULL,
  `nama_client` varchar(255) NOT NULL,
  `nomor_client` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `komplain` text NOT NULL
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
-- Indeks untuk tabel `detail_komplain`
--
ALTER TABLE `detail_komplain`
  ADD KEY `id_komplain` (`id_komplain`);

--
-- Indeks untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambar_ibfk_1` (`id_aplikasi`);

--
-- Indeks untuk tabel `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `komplain`
--
ALTER TABLE `komplain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_komplain`
--
ALTER TABLE `detail_komplain`
  ADD CONSTRAINT `detail_komplain_ibfk_1` FOREIGN KEY (`id_komplain`) REFERENCES `komplain` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `gambar_ibfk_1` FOREIGN KEY (`id_aplikasi`) REFERENCES `aplikasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
