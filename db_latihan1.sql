-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 03:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_attempt`
--

CREATE TABLE `tabel_attempt` (
  `id` int(11) NOT NULL,
  `id_ujian` varchar(100) NOT NULL,
  `nama_ujian` varchar(100) NOT NULL,
  `informasi_ujian` varchar(1000) NOT NULL,
  `maximal_attempt` varchar(100) NOT NULL,
  `batas_waktu` varchar(100) NOT NULL,
  `status_aktif` varchar(100) NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `tanggal_attempt` varchar(100) NOT NULL,
  `jam_attempt` varchar(100) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `url_profile_facebook` varchar(1000) NOT NULL,
  `url_profile_instagram` varchar(1000) NOT NULL,
  `url_profile_twitter` varchar(1000) NOT NULL,
  `url_profile_youtube` varchar(1000) NOT NULL,
  `tempat_tinggal` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_attempt`
--

INSERT INTO `tabel_attempt` (`id`, `id_ujian`, `nama_ujian`, `informasi_ujian`, `maximal_attempt`, `batas_waktu`, `status_aktif`, `timestamp`, `tanggal_attempt`, `jam_attempt`, `id_user`, `nama_lengkap`, `email`, `hp`, `url_profile_facebook`, `url_profile_instagram`, `url_profile_twitter`, `url_profile_youtube`, `tempat_tinggal`) VALUES
(4, '6', 'USM', 'Soal TPA dengan batas waktu pengerjaan 2 jam', '2', '7200', 'AKTIF', '1619398647', '2021-04-26', '07:57:27', '12', 'Admin USM', 'admin1@gmail.com', '1234', 'admin1@facebook', 'admin1@instagram', 'admin1@twitter', 'admin1@youtube', 'Tempat tinggal admin 1'),
(25, '6', 'USM', 'Soal TPA dengan batas waktu pengerjaan 2 jam', '2', '7200', 'AKTIF', '1620271940', '2021-05-06', '10:32:20', '12', 'Admin USM', 'admin1@gmail.com', '1234', 'admin1@facebook', 'admin1@instagram', 'admin1@twitter', 'admin1@youtube', 'Tempat tinggal admin 1'),
(26, '7', 'USM Politeknik Meta Industri Cikarang', 'Soal TPA dengan batas waktu 2 jam', '1', '7200', 'AKTIF', '1620393377', '2021-05-07', '20:16:17', '12', 'Admin USM', 'admin1@gmail.com', '1234', 'admin1@facebook', 'admin1@instagram', 'admin1@twitter', 'admin1@youtube', 'Tempat tinggal admin 1');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_attempt_cache`
--

CREATE TABLE `tabel_attempt_cache` (
  `id` bigint(20) NOT NULL,
  `id_attempt` varchar(100) NOT NULL,
  `id_ujian` varchar(100) NOT NULL,
  `id_ujian_soal` varchar(100) NOT NULL,
  `nomor_halaman` varchar(100) NOT NULL,
  `nomor_soal` varchar(100) NOT NULL,
  `id_soal` varchar(100) NOT NULL,
  `jenis_soal` varchar(100) NOT NULL,
  `nama_soal` varchar(100) NOT NULL,
  `teks_soal` varchar(1000) NOT NULL,
  `pilihan_ke` varchar(100) NOT NULL,
  `teks_jawaban` varchar(1000) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `umpanbalik` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_attempt_cache`
--

INSERT INTO `tabel_attempt_cache` (`id`, `id_attempt`, `id_ujian`, `id_ujian_soal`, `nomor_halaman`, `nomor_soal`, `id_soal`, `jenis_soal`, `nama_soal`, `teks_soal`, `pilihan_ke`, `teks_jawaban`, `nilai`, `umpanbalik`) VALUES
(3088, '25', '6', '19', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '2', '2', '100', 'benar'),
(3089, '25', '6', '20', '2', '2', '17', 'multiplechoice', 'Soal 4', '1+4=?', '5', '5', '100', 'benar'),
(3106, '26', '7', '21', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '2', '2', '100', 'benar'),
(3107, '26', '7', '22', '2', '2', '14', 'multiplechoice', 'Soal 2', '1+2=?', '3', '3', '100', 'benar');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_attempt_detail`
--

CREATE TABLE `tabel_attempt_detail` (
  `id_attempt` varchar(100) DEFAULT NULL,
  `id_ujian` varchar(100) DEFAULT NULL,
  `id_ujian_soal` varchar(100) DEFAULT NULL,
  `nomor_halaman` varchar(100) DEFAULT NULL,
  `nomor_soal` varchar(100) DEFAULT NULL,
  `id_soal` varchar(100) DEFAULT NULL,
  `jenis_soal` varchar(100) DEFAULT NULL,
  `nama_soal` varchar(100) DEFAULT NULL,
  `teks_soal` varchar(100) DEFAULT NULL,
  `pilihan_ke` varchar(100) DEFAULT NULL,
  `teks_jawaban` varchar(100) DEFAULT NULL,
  `nilai` varchar(100) DEFAULT NULL,
  `umpanbalik` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_attempt_detail`
--

INSERT INTO `tabel_attempt_detail` (`id_attempt`, `id_ujian`, `id_ujian_soal`, `nomor_halaman`, `nomor_soal`, `id_soal`, `jenis_soal`, `nama_soal`, `teks_soal`, `pilihan_ke`, `teks_jawaban`, `nilai`, `umpanbalik`) VALUES
('26', '7', '21', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '2', '2', '100', 'benar'),
('26', '7', '22', '2', '2', '14', 'multiplechoice', 'Soal 2', '1+2=?', '3', '3', '100', 'benar');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_mahasiswa`
--

CREATE TABLE `tabel_mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `angkatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_mahasiswa`
--

INSERT INTO `tabel_mahasiswa` (`id`, `nim`, `namalengkap`, `prodi`, `angkatan`) VALUES
(2, '001', 'Ronald', 'Bahasa', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_soal`
--

CREATE TABLE `tabel_soal` (
  `id` int(11) NOT NULL,
  `jenis_soal` varchar(1000) DEFAULT NULL,
  `nama_soal` varchar(1000) DEFAULT NULL,
  `teks_soal` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_soal`
--

INSERT INTO `tabel_soal` (`id`, `jenis_soal`, `nama_soal`, `teks_soal`) VALUES
(13, 'multiplechoice', 'Soal 1', '1+1=?'),
(14, 'multiplechoice', 'Soal 2', '1+2=?'),
(17, 'multiplechoice', 'Soal 4', '1+4=?'),
(20, 'multiplechoice', 'Soal 6', '1+1=?'),
(21, 'multiplechoice', 'Soal 6', '1+1=?'),
(22, 'multiplechoice', 'Soal 6', '1+1=?'),
(23, 'multiplechoice', 'Soal 6', '1+1=?');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_soal_kuncijawabanmultiplechoice`
--

CREATE TABLE `tabel_soal_kuncijawabanmultiplechoice` (
  `id` int(11) NOT NULL,
  `id_soal` varchar(100) DEFAULT NULL,
  `jenis_soal` varchar(1000) DEFAULT NULL,
  `nama_soal` varchar(1000) DEFAULT NULL,
  `teks_soal` varchar(1000) DEFAULT NULL,
  `pilihan_ke` varchar(100) DEFAULT NULL,
  `teks_pilihan` varchar(1000) DEFAULT NULL,
  `nilai` varchar(100) DEFAULT NULL,
  `umpanbalik` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_soal_kuncijawabanmultiplechoice`
--

INSERT INTO `tabel_soal_kuncijawabanmultiplechoice` (`id`, `id_soal`, `jenis_soal`, `nama_soal`, `teks_soal`, `pilihan_ke`, `teks_pilihan`, `nilai`, `umpanbalik`) VALUES
(52, '13', 'multiplechoice', 'Soal 1', '1+1=?', '1', '1', '0', 'salah'),
(53, '13', 'multiplechoice', 'Soal 1', '1+1=?', '2', '2', '100', 'benar'),
(54, '13', 'multiplechoice', 'Soal 1', '1+1=?', '3', '3', '0', 'salah'),
(55, '13', 'multiplechoice', 'Soal 1', '1+1=?', '4', '4', '0', 'salah'),
(56, '13', 'multiplechoice', 'Soal 1', '1+1=?', '5', '5', '0', 'salah'),
(57, '14', 'multiplechoice', 'Soal 2', '1+2=?', '1', '1', '0', 'salah'),
(58, '14', 'multiplechoice', 'Soal 2', '1+2=?', '2', '2', '0', 'benar'),
(59, '14', 'multiplechoice', 'Soal 2', '1+2=?', '3', '3', '100', 'benar'),
(60, '14', 'multiplechoice', 'Soal 2', '1+2=?', '4', '4', '0', 'salah'),
(61, '14', 'multiplechoice', 'Soal 2', '1+2=?', '5', '5', '0', 'salah'),
(72, '17', 'multiplechoice', 'Soal 4', '1+4=?', '1', '1', '0', 'salah'),
(73, '17', 'multiplechoice', 'Soal 4', '1+4=?', '2', '2', '0', 'salah'),
(74, '17', 'multiplechoice', 'Soal 4', '1+4=?', '3', '3', '0', 'salah'),
(75, '17', 'multiplechoice', 'Soal 4', '1+4=?', '4', '4', '0', 'salah'),
(76, '17', 'multiplechoice', 'Soal 4', '1+4=?', '5', '5', '100', 'benar'),
(85, '20', 'multiplechoice', 'Soal 6', '1+1=?', '1', '1', '0', 'salah'),
(86, '20', 'multiplechoice', 'Soal 6', '1+1=?', '2', '2', '100', 'benar'),
(87, '20', 'multiplechoice', 'Soal 6', '1+1=?', '3', '3', '0', 'salah'),
(88, '20', 'multiplechoice', 'Soal 6', '1+1=?', '4', '4', '0', 'salah'),
(89, '20', 'multiplechoice', 'Soal 6', '1+1=?', '5', '5', '0', 'salah'),
(90, '21', 'multiplechoice', 'Soal 6', '1+1=?', '1', '1', '0', 'salah'),
(91, '21', 'multiplechoice', 'Soal 6', '1+1=?', '2', '2', '100', 'benar'),
(92, '21', 'multiplechoice', 'Soal 6', '1+1=?', '3', '3', '0', 'salah'),
(93, '21', 'multiplechoice', 'Soal 6', '1+1=?', '4', '4', '0', 'salah'),
(94, '21', 'multiplechoice', 'Soal 6', '1+1=?', '5', '5', '0', 'salah'),
(95, '22', 'multiplechoice', 'Soal 6', '1+1=?', '1', '1', '0', 'salah'),
(96, '22', 'multiplechoice', 'Soal 6', '1+1=?', '2', '2', '100', 'benar'),
(97, '22', 'multiplechoice', 'Soal 6', '1+1=?', '3', '3', '0', 'salah'),
(98, '22', 'multiplechoice', 'Soal 6', '1+1=?', '4', '4', '0', 'salah'),
(99, '22', 'multiplechoice', 'Soal 6', '1+1=?', '5', '5', '0', 'salah'),
(100, '23', 'multiplechoice', 'Soal 6', '1+1=?', '1', '1', '0', 'salah'),
(101, '23', 'multiplechoice', 'Soal 6', '1+1=?', '2', '2', '100', 'benar'),
(102, '23', 'multiplechoice', 'Soal 6', '1+1=?', '3', '3', '0', 'salah'),
(103, '23', 'multiplechoice', 'Soal 6', '1+1=?', '4', '4', '0', 'salah'),
(104, '23', 'multiplechoice', 'Soal 6', '1+1=?', '5', '5', '0', 'salah');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ujian`
--

CREATE TABLE `tabel_ujian` (
  `id` int(11) NOT NULL,
  `nama_ujian` varchar(1000) DEFAULT NULL,
  `informasi_ujian` varchar(1000) DEFAULT NULL,
  `maximal_attempt` varchar(10) DEFAULT NULL,
  `batas_waktu` varchar(10) DEFAULT NULL,
  `status_aktif` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_ujian`
--

INSERT INTO `tabel_ujian` (`id`, `nama_ujian`, `informasi_ujian`, `maximal_attempt`, `batas_waktu`, `status_aktif`) VALUES
(6, 'USM', 'Soal TPA dengan batas waktu pengerjaan 2 jam', '2', '7200', 'AKTIF'),
(7, 'USM Politeknik Meta Industri Cikarang', 'Soal TPA dengan batas waktu 2 jam', '1', '7200', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ujian_kuncijawabanmultiplechoice`
--

CREATE TABLE `tabel_ujian_kuncijawabanmultiplechoice` (
  `id` int(11) NOT NULL,
  `id_ujian` varchar(100) NOT NULL,
  `id_ujian_soal` varchar(100) NOT NULL,
  `nomor_halaman` varchar(100) NOT NULL,
  `nomor_soal` varchar(100) NOT NULL,
  `id_soal` varchar(100) NOT NULL,
  `jenis_soal` varchar(100) NOT NULL,
  `nama_soal` varchar(100) NOT NULL,
  `teks_soal` varchar(1000) NOT NULL,
  `pilihan_ke` varchar(100) NOT NULL,
  `teks_pilihan` varchar(1000) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `umpanbalik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_ujian_kuncijawabanmultiplechoice`
--

INSERT INTO `tabel_ujian_kuncijawabanmultiplechoice` (`id`, `id_ujian`, `id_ujian_soal`, `nomor_halaman`, `nomor_soal`, `id_soal`, `jenis_soal`, `nama_soal`, `teks_soal`, `pilihan_ke`, `teks_pilihan`, `nilai`, `umpanbalik`) VALUES
(91, '6', '19', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '1', '1', '0', 'salah'),
(92, '6', '19', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '2', '2', '100', 'benar'),
(93, '6', '19', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '3', '3', '0', 'salah'),
(94, '6', '19', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '4', '4', '0', 'salah'),
(95, '6', '19', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '5', '5', '0', 'salah'),
(96, '6', '20', '2', '2', '17', 'multiplechoice', 'Soal 4', '1+4=?', '1', '1', '0', 'salah'),
(97, '6', '20', '2', '2', '17', 'multiplechoice', 'Soal 4', '1+4=?', '2', '2', '0', 'salah'),
(98, '6', '20', '2', '2', '17', 'multiplechoice', 'Soal 4', '1+4=?', '3', '3', '0', 'salah'),
(99, '6', '20', '2', '2', '17', 'multiplechoice', 'Soal 4', '1+4=?', '4', '4', '0', 'salah'),
(100, '6', '20', '2', '2', '17', 'multiplechoice', 'Soal 4', '1+4=?', '5', '5', '100', 'benar'),
(101, '7', '21', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '1', '1', '0', 'salah'),
(102, '7', '21', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '2', '2', '100', 'benar'),
(103, '7', '21', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '3', '3', '0', 'salah'),
(104, '7', '21', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '4', '4', '0', 'salah'),
(105, '7', '21', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?', '5', '5', '0', 'salah'),
(106, '7', '22', '2', '2', '14', 'multiplechoice', 'Soal 2', '1+2=?', '1', '1', '0', 'salah'),
(107, '7', '22', '2', '2', '14', 'multiplechoice', 'Soal 2', '1+2=?', '2', '2', '0', 'benar'),
(108, '7', '22', '2', '2', '14', 'multiplechoice', 'Soal 2', '1+2=?', '3', '3', '100', 'benar'),
(109, '7', '22', '2', '2', '14', 'multiplechoice', 'Soal 2', '1+2=?', '4', '4', '0', 'salah'),
(110, '7', '22', '2', '2', '14', 'multiplechoice', 'Soal 2', '1+2=?', '5', '5', '0', 'salah'),
(111, '7', '23', '3', '3', '17', 'multiplechoice', 'Soal 4', '1+4=?', '1', '1', '0', 'salah'),
(112, '7', '23', '3', '3', '17', 'multiplechoice', 'Soal 4', '1+4=?', '2', '2', '0', 'salah'),
(113, '7', '23', '3', '3', '17', 'multiplechoice', 'Soal 4', '1+4=?', '3', '3', '0', 'salah'),
(114, '7', '23', '3', '3', '17', 'multiplechoice', 'Soal 4', '1+4=?', '4', '4', '0', 'salah'),
(115, '7', '23', '3', '3', '17', 'multiplechoice', 'Soal 4', '1+4=?', '5', '5', '100', 'benar');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ujian_soal`
--

CREATE TABLE `tabel_ujian_soal` (
  `id` int(11) NOT NULL,
  `id_ujian` varchar(100) NOT NULL,
  `nomor_halaman` varchar(100) NOT NULL,
  `nomor_soal` varchar(100) NOT NULL,
  `id_soal` varchar(100) NOT NULL,
  `jenis_soal` varchar(100) NOT NULL,
  `nama_soal` varchar(100) NOT NULL,
  `teks_soal` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_ujian_soal`
--

INSERT INTO `tabel_ujian_soal` (`id`, `id_ujian`, `nomor_halaman`, `nomor_soal`, `id_soal`, `jenis_soal`, `nama_soal`, `teks_soal`) VALUES
(19, '6', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?'),
(20, '6', '2', '2', '17', 'multiplechoice', 'Soal 4', '1+4=?'),
(21, '7', '1', '1', '13', 'multiplechoice', 'Soal 1', '1+1=?'),
(22, '7', '2', '2', '14', 'multiplechoice', 'Soal 2', '1+2=?'),
(23, '7', '3', '3', '17', 'multiplechoice', 'Soal 4', '1+4=?');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialite_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socialite_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_profile_facebook` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_profile_instagram` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_profile_twitter` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_profile_youtube` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_tinggal` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hakakses` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`, `socialite_id`, `socialite_name`, `photo`, `remember_token`, `hp`, `url_profile_facebook`, `url_profile_instagram`, `url_profile_twitter`, `url_profile_youtube`, `tempat_tinggal`, `hakakses`) VALUES
(12, 'admin1', '1234', 'Admin USM', 'admin1@gmail.com', '', '', '', '', '1234', 'admin1@facebook', 'admin1@instagram', 'admin1@twitter', 'admin1@youtube', 'Tempat tinggal admin 1', 'admin');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `users_beforeinsert` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
    DECLARE jumlah INT;
    
    SET jumlah= (SELECT COUNT(username) FROM users WHERE username=NEW.username);
    
    IF jumlah > 0 THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Registrasi gagal';
    END IF; 

END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tabel_attempt`
--
ALTER TABLE `tabel_attempt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_attempt_cache`
--
ALTER TABLE `tabel_attempt_cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_soal`
--
ALTER TABLE `tabel_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_soal_kuncijawabanmultiplechoice`
--
ALTER TABLE `tabel_soal_kuncijawabanmultiplechoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_ujian`
--
ALTER TABLE `tabel_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_ujian_kuncijawabanmultiplechoice`
--
ALTER TABLE `tabel_ujian_kuncijawabanmultiplechoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_ujian_soal`
--
ALTER TABLE `tabel_ujian_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_attempt`
--
ALTER TABLE `tabel_attempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tabel_attempt_cache`
--
ALTER TABLE `tabel_attempt_cache`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3108;

--
-- AUTO_INCREMENT for table `tabel_mahasiswa`
--
ALTER TABLE `tabel_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_soal`
--
ALTER TABLE `tabel_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tabel_soal_kuncijawabanmultiplechoice`
--
ALTER TABLE `tabel_soal_kuncijawabanmultiplechoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `tabel_ujian`
--
ALTER TABLE `tabel_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tabel_ujian_kuncijawabanmultiplechoice`
--
ALTER TABLE `tabel_ujian_kuncijawabanmultiplechoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tabel_ujian_soal`
--
ALTER TABLE `tabel_ujian_soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
