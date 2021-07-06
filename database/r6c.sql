-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Jul 2020 pada 12.07
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r6c`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `NPM` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`user`, `password`, `nama`, `NPM`, `kelas`, `prodi`) VALUES
('Adit', 'adit123', 'Muhammad Aditya Hardiansyah', '201743500148', 'R6C', 'Informatika'),
('bagus', 'bagus123', 'Bagus Rizky Febriyanto', '201743500177', 'R6C', 'Informatika'),
('Farhan', '123456', 'Farhan Shofwan', '201743500146', 'R6C', 'Informatika'),
('Jow', '123456', 'Jourgi Anggara', '201743500143', 'R6C', 'Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload`
--

CREATE TABLE `upload` (
  `id_upload` int(4) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `hits` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `upload`
--

INSERT INTO `upload` (`id_upload`, `nama_file`, `deskripsi`, `tgl_upload`, `hits`) VALUES
(3, 'bagus hal 1-4.docx', 'ghfgh', '2020-04-09', 0),
(4, 'gdtdhh.jpg', 'Tugas', '2020-04-15', 0),
(6, 'slim.docx', 'fdgedgdfgd', '2020-04-16', 0),
(7, 'BAB III revisi lagi .docx', 'Bab 3', '2020-05-22', 0),
(8, 'upload.sql', 'cobaa', '2020-05-31', 0),
(9, '12HTML dan PHP.rar', 'Materi KWU', '2020-06-03', 0),
(10, '12HTML dan PHP.rar', 'Materi KWU', '2020-06-03', 0),
(11, 'ALUR IMPOR NEW.vsdx', 'tes', '2020-06-06', 0),
(12, 'ALUR IMPOR NEW.vsdx', 'tess', '2020-06-06', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_upload`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_upload` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
