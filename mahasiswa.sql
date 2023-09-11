-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 05:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cuti`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` varchar(30) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_status_mahasiswa` int(12) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(50) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` set('Laki-laki','Perempuan') NOT NULL,
  `no_wa` int(40) NOT NULL,
  `email_simpkb` varchar(255) NOT NULL,
  `ptk_id` int(50) NOT NULL,
  `nama_darurat` varchar(255) NOT NULL,
  `no_darurat` int(50) NOT NULL,
  `no_peserta` int(255) NOT NULL,
  `nim` int(255) NOT NULL,
  `lptk` varchar(255) NOT NULL,
  `bidang_studi` set('Pendidikan Guru Sekolah dasar','Bahasa Indonesia','Matematika') NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kode_pos` int(15) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `npwp` int(50) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `bank_cabang` varchar(255) NOT NULL,
  `no_rekening` int(50) NOT NULL,
  `alasan_verifikasi` text DEFAULT NULL,
  `dokumen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `id_user`, `id_status_mahasiswa`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `no_wa`, `email_simpkb`, `ptk_id`, `nama_darurat`, `no_darurat`, `no_peserta`, `nim`, `lptk`, `bidang_studi`, `nama_kelas`, `alamat`, `provinsi`, `kabupaten`, `kode_pos`, `nama_rekening`, `npwp`, `nama_bank`, `bank_cabang`, `no_rekening`, `alasan_verifikasi`, `dokumen`) VALUES
('mahasiswa-2726a', '06aabe79415b71343793c9e1f26876b2', 1, 'Syahrul', 123123, 'Boyolali', '2023-01-30', 'Laki-laki', 123213, 'sy@mail.com', 12332, 'Lanjar', 21321, 123213, 123123, 'UNISSULA', 'Bahasa Indonesia', 'A', 'Boyolali', 'Jawa Tengah', 'Batang', 41121, 'Jadjit', 12321, 'BRI', 'Jateng', 12321312, '', '1676383017-cetak-magang_2.pdf'),
('mahasiswa-4e6f2', '06aabe79415b71343793c9e1f26876b2', 2, 'Lanjar Dwi Suparto', 12342, 'Bekasi', '2023-01-31', 'Perempuan', 2147483647, 'lanjar17@gmail.com', 12312, 'Lanjad', 12321, 1323123, 213123, 'SOLO', 'Bahasa Indonesia', 'A', 'Banjarjo 18/04, Gedangan, Cepogo, Boyolali', 'Jateng', 'Kab. Boyolali', 57362, 'Akai', 123213, 'Plecit', 'Jateng', 123, 'mantap semangat', '1676380190-UAS COPY.pdf'),
('mahasiswa-c1f37', '43b4ee2ed3b3a3086a06357389b6aa30', 1, 'Lanjar Dwi Saputro', 2147483647, 'Boyolali', '2002-11-29', 'Laki-laki', 2147483647, 'lanjar17@gmail.com', 7009, 'Syahrul', 2147483647, 20, 0, 'UNISSULA', 'Matematika', 'Matematika B', 'Banjarjo 18/04, Gedangan, Cepogo, Boyolali', 'Jawa Tengah', 'Boyolali', 57362, 'Lanjar Dwi Saputro', 24224, 'BNI', 'KCP Boyolali', 176, '', '1676388019-ktm.jpeg'),
('mahasiswa-c9f9a', '263a76c22eb8acf8c3e08edd55c1421d', 3, 'Coba', 123123123, 'Coba', '2023-01-31', 'Laki-laki', 123123, 'aa@a.com', 3123, 'Coba', 23123, 123123, 123123, 'UNISSULA', 'Pendidikan Guru Sekolah dasar', 'A', 'Jl Coba', 'Jawa Tengah', 'Batang', 231312, 'Coba', 123123, 'A', 'c', 231231, 'Kurang', ''),
('mahasiswa-d41d8', '', 1, '', 0, '', '0000-00-00', '', 0, '', 0, '', 0, 0, 0, '', '', '', '', '', '', 0, '', 0, '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
