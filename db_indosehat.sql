-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2021 pada 10.35
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_indosehat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_klinik`
--

CREATE TABLE `master_klinik` (
  `id_klinik` int(11) NOT NULL,
  `kode_klinik` varchar(200) NOT NULL,
  `nama_klinik` varchar(200) NOT NULL,
  `pemilik` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `master_klinik`
--

INSERT INTO `master_klinik` (`id_klinik`, `kode_klinik`, `nama_klinik`, `pemilik`, `status`) VALUES
(7, 'K0001', 'Indosehat 2003 - Warakas', 'DIdin Jaenudin', 'Beroperasi'),
(8, 'K0002', 'Indosehat 2003 -  Cilincing', 'Randi Hermawan', 'Beroperasi'),
(9, 'K0003', 'Indosehat 2003 - Tangerang', 'Wandi', 'Beroperasi'),
(10, 'K0004', 'Indosehat 2003 - Bekasi', 'Andre', 'Beroperasi'),
(11, 'K0005', 'Indosehat 2003 - Bogor', 'Atin', 'Beroperasi'),
(12, 'K0006', 'Indosehat 2003 - Pusat', 'Hasan Basri', 'Beroperasi'),
(13, 'K0007', 'Indosehat 2003 - Banten', 'Dandy Rahmat Zain', 'Beroperasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` varchar(200) NOT NULL,
  `creator` varchar(200) NOT NULL,
  `kode_klinik` varchar(200) NOT NULL,
  `no_identitas` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `file_dokumen` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `sertifikat_lab` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `tanggal_berlaku_sertifikat` date NOT NULL,
  `expired` varchar(200) NOT NULL,
  `qr_code` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `creator`, `kode_klinik`, `no_identitas`, `nama`, `file_dokumen`, `sertifikat_lab`, `tanggal_berlaku_sertifikat`, `expired`, `qr_code`) VALUES
('P0001', 'Zend', 'K0001', 12345, 'Dandy Rahmat Zain', 'P0001_1.jpg', 'P0001_2.jpg', '2021-04-30', 'Aktif', 'P0001.png'),
('P0002', 'Robert', 'K0002', 43534, 'Lord Zorc', 'P0002_Lord_Zorc2.jpg', 'P0002_Lord_Zorc1.jpg', '2021-04-24', 'Aktif', 'P0002.png'),
('P0003', 'Benjamin', 'K0001', 98754658, 'Zain', 'P0003_Zain.jpg', 'P0003_Zain1.jpg', '2021-04-21', 'Tidak Aktif', 'P0003.png'),
('P0004', 'Rohmat', 'K0001', 789234, 'Dany', 'P0004_aaa.jpg', 'P0004_aaa1.jpg', '2021-04-23', 'Aktif', 'P0004.png'),
('P0005', 'Zera', 'K0006', 10000, 'Udin Sudin Mudin', 'P0005_Udin_Sudin_Mudin.jpg', 'P0005_Udin_Sudin_Mudin1.jpg', '2021-04-22', 'Tidak Aktif', 'P0005.png'),
('P0006', 'Surbakti', 'K0005', 10000, 'Otong Markotong', 'P0006_Otong_Markotong.jpg', 'P0006_Otong_Markotong1.jpg', '2021-04-24', 'Aktif', 'P0006.png'),
('P0007', 'Badrul', 'K0002', 5000, 'Tok Dalang', 'P0007_Tok_Dalang.jpg', 'P0007_Tok_Dalang1.jpg', '2021-04-30', 'Aktif', 'P0007.png'),
('P0008', 'Kepin', 'K0005', 90000, 'Ijoh Surijoh Eek Nyebrot', 'P0008_Ijoh_Surijoh_Eek_Nyebrot.jpg', 'P0008_Ijoh_Surijoh_Eek_Nyebrot1.jpg', '2021-04-29', 'Aktif', 'P0008.png'),
('P0009', 'Boby', 'K0006', 5000, 'Ndoi Kondoy ', 'P0009_Ndoi_Kondoy_.jpg', 'P0009_Ndoi_Kondoy_1.jpg', '2021-04-29', 'Aktif', 'P0009.png'),
('P0010', 'Loen', 'K0003', 12446, 'Ngambay', 'P0010_Ngambay.jpg', 'P0010_Ngambay1.jpg', '2021-04-29', 'Aktif', 'P0010.png'),
('P0011', 'Bakti', 'K0005', 123901824, 'Surbakti Tak Berbakti', 'P0011_Surbakti_Tak_Berbakti.jpg', 'P0011_Surbakti_Tak_Berbakti1.jpg', '2021-04-22', 'Tidak Aktif', 'P0011.png'),
('P0012', 'Kumis', 'K0007', 142379, 'Kumis Lele', 'P0012_Kumis_Lele.jpg', 'P0012_Kumis_Lele1.jpg', '2021-04-21', 'Tidak Aktif', 'P0012.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user` varchar(20) NOT NULL,
  `pass` char(32) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user`, `pass`, `nama`, `level`) VALUES
('admin', 'admin', 'Dandy', 'Admin'),
('petugas', 'petugas', 'Dandy Rahmat Zain', 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `master_klinik`
--
ALTER TABLE `master_klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `master_klinik`
--
ALTER TABLE `master_klinik`
  MODIFY `id_klinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
