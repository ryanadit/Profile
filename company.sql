-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Feb 2019 pada 18.11
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(6, '2018-06-30', 'Kolowo', 'docx', '14400', 'files/Kolowo.docx'),
(16, '2018-06-30', 'Roy', 'docx', '22190', 'files/Roy.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(20) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `foto1` varchar(250) NOT NULL,
  `foto2` varchar(250) NOT NULL,
  `ket` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `foto`, `foto1`, `foto2`, `ket`) VALUES
(1, 'IT.png', 'AK_com.jpeg', 'CP1.jpg', 'Sebuah Usaha Kecil untuk membangun sebuah Software berkualitas dengan teknologi informasi sebagai pondasinya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nowa` varchar(16) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `apaitu1` varchar(1000) NOT NULL,
  `apaitu2` varchar(1000) NOT NULL,
  `tentang1` varchar(1000) NOT NULL,
  `tentang2` varchar(1000) NOT NULL,
  `tentang3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nowa`, `alamat`, `apaitu1`, `apaitu2`, `tentang1`, `tentang2`, `tentang3`) VALUES
(2, '+6285729759881', 'Jalan Godean Km.4,5 Gamping Sleman', 'Sebuah usaha kecil untuk membangun Software ( Aplikasi ) baik berupa aplikasi diperangakat mobile maupun aplikasi web ( Website).\r\n\r\n\r\nUntuk lebih lanjut bisa baca dibawah ini.', '5 lebih software yang kami buat dengan salah satunya aplikasi web, Native mobile apps dengan embeded system , dan software sederhana lainnya .', 'Bahasa pemrograman seperti Java untuk membangun aplikasi mobile, HTML,CSS,JavaScript untuk membangun aplikasi web dan Framework PHP untuk membangun web disisi servernya.', 'Project kami sudah kami sertakan pada halaman web ini beserta gambar reviewnya.\r\n\r\n', 'Programmer kami berlatar belakang di jurusan teknologi informasi (IT) dengan minimal menempuh pendidikan jenjang D3 (Diploma).');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `password`, `username`, `nama`) VALUES
('administrator', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'adminAK'),
('saya', '21232f297a57a5a743894a0e4a801fc3', 'bkn_admin', 'aku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id_upload` int(30) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(250) NOT NULL,
  `foto1` varchar(250) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id_upload`, `nama`, `tanggal`, `foto`, `foto1`, `keterangan`) VALUES
(39, 'Pro', '2018-11-06', 'images1.jpg', 'urutan_k.jpeg', 'Spongebob'),
(40, 'asfg', '2018-11-12', 'Hasil_SIG.png', 'kumpulan_web.jpg', 'apa aja deh'),
(42, 'asdss', '2018-11-12', 'images.jpg', 'Kupon_17.jpg', 'asdasdas'),
(45, 'asdahggff', '2018-11-12', 'lazada_bm4.JPG', 'Gmail.png', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_upload`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_upload` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
