-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2021 pada 01.03
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'abc5e48882cee85a6c336f5fa882617e', '2021-09-19 03:49:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regulator User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-19 03:49:47', 1),
(2, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-19 09:14:47', 1),
(3, '::1', 'betsyebamarbun359@gmail.com', NULL, '2021-09-20 09:03:20', 0),
(4, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-20 09:03:41', 1),
(5, '::1', 'betsyebamarbun359@gmail.com', NULL, '2021-09-21 07:39:55', 0),
(6, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-21 07:40:09', 1),
(7, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-22 08:35:38', 1),
(8, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-22 12:17:15', 1),
(9, '::1', 'betsyeb', NULL, '2021-09-23 07:44:04', 0),
(10, '::1', 'betsyeb', NULL, '2021-09-23 07:44:11', 0),
(11, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-23 07:44:26', 1),
(12, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-25 09:00:14', 1),
(13, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-25 09:01:24', 1),
(14, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-25 09:17:20', 1),
(15, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-25 11:31:32', 1),
(16, '::1', 'bets', NULL, '2021-09-30 09:49:03', 0),
(17, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-09-30 09:49:14', 1),
(18, '::1', 'betsyebamarbun359@gmail.com', NULL, '2021-10-01 09:00:53', 0),
(19, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-01 09:01:03', 1),
(20, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-03 02:35:11', 1),
(21, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-04 07:09:59', 1),
(22, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-04 07:18:30', 1),
(23, '::1', 'betsyebamarbun359@gmail.com', NULL, '2021-10-04 18:46:07', 0),
(24, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-04 18:46:18', 1),
(25, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-06 08:31:29', 1),
(26, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-07 08:37:35', 1),
(27, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-07 12:03:06', 1),
(28, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-10 00:48:59', 1),
(29, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-11 22:19:05', 1),
(30, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-12 08:12:00', 1),
(31, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-13 09:15:37', 1),
(32, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-14 08:57:09', 1),
(33, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-15 08:13:33', 1),
(34, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-15 18:30:27', 1),
(35, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-16 23:25:59', 1),
(36, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-18 09:34:58', 1),
(37, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-20 00:59:29', 1),
(38, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-22 17:31:08', 1),
(39, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-24 00:25:20', 1),
(40, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-25 09:17:57', 1),
(41, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-26 07:44:53', 1),
(42, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-27 08:51:37', 1),
(43, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-28 09:14:24', 1),
(44, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-28 09:26:01', 1),
(45, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-28 19:03:56', 1),
(46, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-29 07:26:16', 1),
(47, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-30 21:04:02', 1),
(48, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-31 01:47:16', 1),
(49, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-01 09:19:20', 1),
(50, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-04 08:13:13', 1),
(51, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-05 08:38:26', 1),
(52, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-07 00:12:58', 1),
(53, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-07 08:51:52', 1),
(54, '::1', 'betsye', NULL, '2021-11-08 07:19:36', 0),
(55, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-08 07:20:14', 1),
(56, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-08 11:59:06', 1),
(57, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-10 06:34:14', 1),
(58, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-11 08:20:26', 1),
(59, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-13 08:13:45', 1),
(60, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-14 00:09:57', 1),
(61, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-14 04:34:21', 1),
(62, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-21 01:06:15', 1),
(63, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-21 01:06:16', 1),
(64, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-21 06:09:54', 1),
(65, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-11-23 06:30:28', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-user', 'manage all user'),
(2, 'manage-profile', 'manage user profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakeluarga`
--

CREATE TABLE `datakeluarga` (
  `id` int(11) UNSIGNED NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `hubungan` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `nohp` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `tanggungan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `datakeluarga`
--

INSERT INTO `datakeluarga` (`id`, `userId`, `hubungan`, `nama`, `alamat`, `nohp`, `pendidikan`, `pekerjaan`, `tanggungan`) VALUES
(11, 3, ' Ayah', 'Martambah Marbun', 'Jl Hm Yamin Gang Ind', '-', 'SMA', 'Petani', 'tidak'),
(12, 3, 'Ibu', 'Tiaomin Tindaon', 'Langkat', '223126', 'SMA', 'Petani', 'tidak'),
(13, 3, 'Saudara', 'Desi Natalia Marbun', 'GB Joshua', '083642723', 'SMK', 'Siswa', 'ya'),
(14, 3, 'Istri', 'tungirnasdasg', 'sjldkaj', '9374827398', 'SMA', 'Marbao', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `isian`
--

CREATE TABLE `isian` (
  `id` int(11) UNSIGNED NOT NULL,
  `jenisTes` int(11) UNSIGNED NOT NULL,
  `soal` varchar(255) DEFAULT NULL,
  `kunci` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) UNSIGNED NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `jenisTes` int(11) UNSIGNED NOT NULL,
  `jawaban` text DEFAULT NULL,
  `kunci` text DEFAULT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id`, `userId`, `jenisTes`, `jawaban`, `kunci`, `nilai`) VALUES
(296, 3, 7, 'dua puluh satu ribu tiga ratus enam belas', 'dua puluh satu ribu tiga ratus enam belas', 1),
(297, 3, 7, 'tiga juta lima ratus tujuh puluh enam ribu tiga ratus tujuh belas', 'tiga juta lima ratus tujuh puluh enam ribu tiga ratus tujuh belas', 1),
(298, 3, 7, '', 'dua puluh delapan ribu tiga ratus dua belas', 0),
(299, 3, 7, '', 'tiga ribu dua ratus dua belas', 0),
(300, 3, 7, '', 'dua ribu tiga ratus dua belas', 0),
(301, 3, 7, '', 'dua puluh tiga ribu tiga ratus dua puluh satu', 0),
(302, 3, 7, '', 'dua ribu tiga ratus dua belas', 0),
(303, 3, 7, '', 'seratus dua puluh tiga', 0),
(304, 3, 7, '', 'dua puluh satu ribu dua ratus sebelas', 0),
(305, 3, 7, '', 'delapan ribu tujuh ratus dua puluh enam', 0),
(306, 3, 7, '', 'seratus dua puluh tiga ribu seratus dua puluh tiga', 0),
(307, 3, 7, '', 'lima puluh tiga ribu dua ratus empat puluh dua', 0),
(308, 3, 7, '', 'dua puluh tiga ribu seratus dua puluh tiga', 0),
(309, 3, 7, '', 'enam ribu tiga ratus empat puluh dua', 0),
(310, 3, 11, '70', NULL, 0),
(311, 3, 11, '80', NULL, 0),
(312, 3, 11, '54', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenistes`
--

CREATE TABLE `jenistes` (
  `id` int(11) UNSIGNED NOT NULL,
  `jenisTes` varchar(255) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenistes`
--

INSERT INTO `jenistes` (`id`, `jenisTes`, `keterangan`, `slug`) VALUES
(1, 'Tes Penalaran Logis', 'Tes Tahap 1 bagian D', 'tes-penalaran-logis'),
(2, 'Tes Penalaran Analisis', 'Tes Tahap 1 Bagian D', 'tes-penalaran-analisis'),
(6, 'Tahap 1 Bagian A', 'Berilah Tanda bagi yang benar', 'tahap-1-bagian-a'),
(7, 'Tahap 1 Bagian B', 'Tuliskan dalam bentuk kata-kata', 'tahap-1-bagian-b'),
(8, 'Tahap 1 Bagian C', 'Tuliskan dalam bentuk angka', 'tahap-1-bagian-c'),
(9, 'Tahap 1 Bagian F', 'Penjumlahan, Pengurangan, Perkalian dan Pembagian', 'tahap-1-bagian-f'),
(10, 'Tahap 1 Bagian G', 'Tes Kepribadian', 'tahap-1-bagian-g'),
(11, 'Tahap 2 Bagian B', 'Pertanyaan', 'tahap-2-bagian-b'),
(29, 'Tahap 2 Bagian A', 'Pilihan Berganda', 'tahap-2-bagian-a'),
(30, 'Test Psikologi', 'Tahap 2', 'test-psikologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterialowongan`
--

CREATE TABLE `kriterialowongan` (
  `id` int(11) UNSIGNED NOT NULL,
  `lowonganid` int(11) UNSIGNED NOT NULL,
  `kriteria` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `listlowongan`
--

CREATE TABLE `listlowongan` (
  `id` int(11) UNSIGNED NOT NULL,
  `namalowongan` varchar(255) DEFAULT NULL,
  `devisi` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1627980033, 1),
(2, '2021-08-20-133116', 'App\\Database\\Migrations\\UpdateUserTable', 'default', 'App', 1629608500, 2),
(3, '2021-08-22-144856', 'App\\Database\\Migrations\\UpdateTable2', 'default', 'App', 1629643929, 3),
(4, '2021-09-13-120038', 'App\\Database\\Migrations\\CreateUserProfile', 'default', 'App', 1631536785, 4),
(5, '2021-09-21-134823', 'App\\Database\\Migrations\\Createkeluarga', 'default', 'App', 1632233254, 5),
(6, '2021-09-25-163416', 'App\\Database\\Migrations\\Createujianganda', 'default', 'App', 1632588439, 6),
(7, '2021-10-04-133707', 'App\\Database\\Migrations\\CreateTahap1A', 'default', 'App', 1633355095, 7),
(8, '2021-10-04-235852', 'App\\Database\\Migrations\\CreateTest', 'default', 'App', 1633392201, 8),
(9, '2021-10-07-132553', 'App\\Database\\Migrations\\Createpertanyaanprofil', 'default', 'App', 1633613577, 9),
(10, '2021-10-07-133412', 'App\\Database\\Migrations\\Createjawaban', 'default', 'App', 1633613815, 10),
(11, '2021-11-07-083207', 'App\\Database\\Migrations\\Listlowongan', 'default', 'App', 1636274098, 11),
(12, '2021-11-07-145820', 'App\\Database\\Migrations\\DetailLowongan', 'default', 'App', 1636297323, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikanformal`
--

CREATE TABLE `pendidikanformal` (
  `id` int(11) UNSIGNED NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `tingkatan` varchar(30) DEFAULT NULL,
  `namaInstitut` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `jurusan` varchar(20) DEFAULT NULL,
  `tahunMulai` date DEFAULT NULL,
  `tahunAkhir` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `sertifikat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pendidikanformal`
--

INSERT INTO `pendidikanformal` (`id`, `userId`, `tingkatan`, `namaInstitut`, `kota`, `jurusan`, `tahunMulai`, `tahunAkhir`, `keterangan`, `sertifikat`) VALUES
(1, 1, 'SMA', 'SMAN1 Medan', 'Medan', 'IPA', '0000-00-00', '0000-00-00', NULL, NULL),
(4, 3, 'SD', 'SDN 12312 Tj Mangeda', 'Tj Mangedar', '-', '2021-10-13', '2021-10-22', '-', 'betsyebamarbunSD_1.j'),
(5, 3, 'SMP', 'SMP N 2 Medan', 'Medan', '-', '2021-11-09', '2021-11-18', '-', 'betsyebamarbunSMP.jp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikannonformal`
--

CREATE TABLE `pendidikannonformal` (
  `id` int(11) UNSIGNED NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `bidang` varchar(30) DEFAULT NULL,
  `namaInstitut` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `lamaKursus` int(10) UNSIGNED NOT NULL,
  `tahun` int(4) UNSIGNED NOT NULL,
  `keterangan` text DEFAULT NULL,
  `sertifikat` varchar(20) DEFAULT NULL,
  `dibiayaiOleh` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalamankerja`
--

CREATE TABLE `pengalamankerja` (
  `id` int(11) UNSIGNED NOT NULL,
  `userId` int(11) UNSIGNED NOT NULL,
  `namaPerusahaan` varchar(30) DEFAULT NULL,
  `jabatanAwal` varchar(20) DEFAULT NULL,
  `jabatanAkhir` varchar(20) DEFAULT NULL,
  `mulaiBekerja` date DEFAULT NULL,
  `akhirBekerja` date DEFAULT NULL,
  `waktubekerja` int(11) UNSIGNED NOT NULL,
  `gaji` int(11) UNSIGNED NOT NULL,
  `namaAtasan` varchar(30) NOT NULL,
  `alasanKeluar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengalamankerja`
--

INSERT INTO `pengalamankerja` (`id`, `userId`, `namaPerusahaan`, `jabatanAwal`, `jabatanAkhir`, `mulaiBekerja`, `akhirBekerja`, `waktubekerja`, `gaji`, `namaAtasan`, `alasanKeluar`) VALUES
(6, 3, 'Pt Asia SInar Inti Abadi', 'Kernek', 'Kernek', '2021-09-16', NULL, 0, 4294967295, 'Sukro', 'Manakko Roha Ni Si Seba nauliiiiiiiii'),
(44, 3, 'Pt. Simulator selatan', 'Staff', 'Staff', '2021-07-12', '2021-10-13', 0, 1231231231, 'Sitakko Manuk', 'PHK Besar-besaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaanessay`
--

CREATE TABLE `pertanyaanessay` (
  `id` int(11) UNSIGNED NOT NULL,
  `jenisTes` int(11) UNSIGNED NOT NULL,
  `pertanyaan` text DEFAULT NULL,
  `kunci` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pertanyaanessay`
--

INSERT INTO `pertanyaanessay` (`id`, `jenisTes`, `pertanyaan`, `kunci`) VALUES
(103, 7, '600', ''),
(104, 7, '1001', ''),
(105, 7, '2506', ''),
(106, 7, '1036', ''),
(107, 7, '10000', ''),
(108, 7, '450500', ''),
(109, 7, '60001', ''),
(110, 7, '98750', ''),
(111, 7, '12501', ''),
(112, 7, '7505', ''),
(113, 8, 'seribu dua ratus enam puluh tujuh', ''),
(114, 8, 'enam ratus tiga', ''),
(115, 8, 'seribu lima ratus enam', ''),
(116, 8, 'tiga ribu enam ratus tujuh puluh empat', ''),
(117, 8, 'satu juta enam ratus', ''),
(118, 8, 'enam ribu enam puluh ', ''),
(119, 8, 'dua puluh tiga juta seratus lima', ''),
(120, 8, 'tiga puluh ribu enam ratus', ''),
(121, 8, 'empat ratus lima puluh ribu', ''),
(122, 8, 'seratus satu ribu', ''),
(123, 11, 'Jika anda bekerja dengan rekan kerja lainnya, seberapa besar anda percaya bahwa rekan anda bekerja dengan baik?', ''),
(124, 11, 'Seberapa besar anda menghargai rekan-rekan kerja anda dalam perusahaan?', ''),
(125, 11, 'Seberapa besar anda peduli dengan kesulitan yang dihadapi rekan dalam tim kerja anda?', ''),
(126, 9, '9 x 0 + 25 +75 - 40', '60'),
(127, 9, '6 x 7 : 6 + 17 + 20', '44'),
(128, 9, '8 x 9 : 9 + 8 + 4 - 2', '18'),
(129, 9, '0.25 + 0.01 - 0.12 x 1.1', '0.128'),
(130, 9, '4 x 25 : 5 + 30 - 10', '40'),
(131, 9, '6 x 5 x 3 - 20 - 5', '65'),
(132, 9, '(7 + 17 + 6 - 5) : 25', '1'),
(133, 9, '0.78 - 0.03 + 2.51', '3.26'),
(134, 9, '(4 x 8 + 8 + 5) : 15', '3'),
(135, 9, '(3 x 20 x 20 - 10) : 10', '7'),
(146, 10, 'Saya iri kalau oran yang tidak pandai dari saya menjadi lebih berhasil dari saya', ''),
(147, 10, 'sangat penting bagi saya supaya orang lain menghargai keberhasilan saya', ''),
(148, 10, 'Saya suka melihat acara telebisi, walaupun tidak menarik, jika ada manfaat bagi saya', ''),
(149, 10, 'Saya berusaha mengembangkan bakat-bakat yang lemah melalui latihan', ''),
(150, 10, 'saya selalu menentukan sendiri sasaran yang akan saya capai', ''),
(151, 10, 'saya merasa memecahkan masalah yang suliit sangan menantang', ''),
(152, 10, 'saya sering bekerja dalam waktu sengang saya', ''),
(153, 10, 'saya ingin mengetahui cara untuk memperbaiki hasil yang saya capai', ''),
(154, 10, 'di sekolah saya tak pernah puas dengan hasil yang saya capai', ''),
(155, 10, 'saya bukan seseorang yang dapat menerima kekalahan', ''),
(156, 10, 'coba coab', ''),
(157, 11, 'Seberapa baik anda mengakomodasi cara-cara penyelesaian tugas yang diinginkan oleh mayoritas anggota tim?', ''),
(158, 11, 'Seberapa baik anda mengikuti jadwal kerja yang telah menjadi kesepakatan tim?', ''),
(159, 11, 'Seberapa baik anda berkmunikasi denan rekan kerja lainnya untuk kelancara tugas tim?', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahap_i_a`
--

CREATE TABLE `tahap_i_a` (
  `id` int(11) UNSIGNED NOT NULL,
  `jenisTes` int(11) UNSIGNED NOT NULL,
  `nilaiA` varchar(255) DEFAULT NULL,
  `nilaiB` varchar(255) DEFAULT NULL,
  `kunci` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tahap_i_a`
--

INSERT INTO `tahap_i_a` (`id`, `jenisTes`, `nilaiA`, `nilaiB`, `kunci`) VALUES
(54, 6, '123456', '124356', 'salah'),
(55, 6, '200', '200', 'benar'),
(56, 6, '305', '315', 'salah'),
(57, 6, '4008', '4080', 'salah'),
(58, 6, '11101', '1101', 'salah'),
(59, 6, '3575', '3575', 'benar'),
(60, 6, '505', '515', 'salah'),
(61, 6, '424', '442', 'salah'),
(62, 6, '7895', '79852', 'salah'),
(63, 6, '250', '250', 'benar'),
(64, 6, '11110', '11111', 'salah'),
(65, 6, '1000000', '100000', 'salah'),
(66, 6, '999853', '99853', 'salah'),
(67, 6, '2504', '2045', 'salah'),
(68, 6, '17785', '17758', 'salah'),
(69, 6, '5000', '5000', 'benar'),
(70, 6, '2398', '2398', 'benar'),
(71, 6, '78690', '78690', 'benar'),
(72, 6, '369852', '369825', 'salah'),
(73, 6, '456987', '456987', 'benar'),
(74, 6, '137852', '14582', 'salah'),
(75, 6, '45003', '45003', 'benar'),
(76, 6, '56230', '56203', 'salah'),
(77, 6, '45689', '8954', 'salah'),
(78, 6, '77777', '77717', 'salah'),
(79, 6, '12345', '12245', 'salah'),
(80, 6, '21282', '21382', 'salah'),
(81, 6, '8353', '8535', 'salah'),
(82, 6, '9090', '9090', 'benar'),
(83, 6, '56347', '56341', 'salah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujianpilihanberganda`
--

CREATE TABLE `ujianpilihanberganda` (
  `id` int(11) UNSIGNED NOT NULL,
  `jenisTes` int(11) UNSIGNED NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(255) DEFAULT NULL,
  `b` varchar(255) DEFAULT NULL,
  `c` varchar(255) DEFAULT NULL,
  `d` varchar(255) DEFAULT NULL,
  `e` varchar(255) DEFAULT NULL,
  `kunci` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `ujianpilihanberganda`
--

INSERT INTO `ujianpilihanberganda` (`id`, `jenisTes`, `soal`, `a`, `b`, `c`, `d`, `e`, `kunci`) VALUES
(29, 1, 'Tidak semua guru hidup sejahtera. Semua artis hidup berkecukupan', 'Sebagian guru dan artis berkecukupan', 'Gaji guru kecil, semenntara honor artis besar', 'Sebagian artis hidup seperti sebagian guru', 'Sebagian guru gajinya besar, sementara semua artis pnghasilannya besar', 'Semua artis dan guru hidup berkecukupan', 'b'),
(30, 1, 'Bendera indonesia berwana merah putih. Bendera belanda ditambah dengan warna biru', 'Warna bendera Indonesia dan Belanda serupa tapi tak sama', 'Warna bendera Indonesia  dan Belanda mirip-mirip', 'Warna bendera Indonesia bisa ditemukan dari bendera Belanda dengan cara merobek warna birunya', 'Warna bendera Belanda lebih bagus daripada warna bendera Indonesia', 'Warna bendera Indonesia lebih sederhana dari warna bendera Belanda', 'b'),
(31, 1, 'Pak eko suplier kerta PT margono adalah distributor kertas ternama. Pembayaran di pak Eko bisa mundur, sementara di PT margono harus cash', 'Harga kertas  pak Eko lebih mahal dari pada PT Margono', 'Harga kertas Pak Eko lebih mahal karena bisa dibayar mundur', 'Harga kertas PT Margono lebih murah karena dibayar cash', 'walaupun dibayar mundur, Pak Eko tetap memiliki banyak cash flow untuk beli cash di PT Margono sehingga tetap bisa menuplai kertas ke semua relasinya', 'baik Pak Eko dan PT Margono sama saja dalam segala hal', 'a'),
(32, 1, 'Rumahku di Villa Taman Bunga berlantai dua. Hotel sahid raya berlantai tujuh', 'Rumahku dan hotel sama enaknya', 'Rumahku menampun lebih sedikit orang daripada hotel sehinga lebih nyaman', 'Harga rumahku dan hotel sama mahalnya', 'Rumahku tak membutuhkan room boy karena hanya berlantai dua, sementara hotel Sahid Raya memiliki banyak room boy untuk merawat bangunannya', 'Rumahku dan hotel sama saja fungsinya', 'a'),
(33, 1, 'Semua elang adalah pemakan daging. Sebagian binatang adalah Elang', 'Semua pemakan daging adalah elang', 'Sebagian elang pemakan daging', 'Sebagian binatang adalah pemakan daging', 'Sebagian elang tidak makan daging', 'Semua binatang pemakan daging', 'a'),
(34, 1, 'Semua kepala sekolah adalah sarjana. Sementara kepala sekolah adalah guru', 'Sebagian guru dan artis hidup berkecukupan', 'Sementara sarjana adalah Kepala Sekolah', 'Sementara guru adalah Kepala Sekolah', 'Semua guru adalah sarjana', 'Semua tidak benar', 'a'),
(35, 1, 'Semua anjing suka makan tulang. Sapi tidak makan daging', 'Anjing tidak makan daging', 'Sapi memakan tulang', 'Anjing dan sapi tidak memakan tulang dan tidak makan daging', 'Anjing sama dengan sapi', 'Semua pernyataan salah', 'a'),
(36, 1, 'Semua jenis burung bisa terbang. Semua ayam memiliki sayap', 'Semua burung memiliki sayap', 'Semua ayam bisa terbang', 'Sementara ayam bisa terbang', 'Semua ayam termasuk jenis burung', 'Semua ayam bukan termasuk jenis burung', 'a'),
(37, 1, 'Semua penulis harus kreatif. Sementara novelis tidak kreatif. ', 'Sementara novelis bukan penulis', 'Tidak ada penulis yang Novelis', 'Sementara orang yang kreatif bukan penulis', 'Sementara novelis kreatif ', 'Semua novelis Kreatif', 'a'),
(38, 1, 'Semua orang yang bertitel MBA hidup dengan makmur. Sebagian orang yang bertitel MBA melakukan usaha wiraswasta', 'Semua wiraswastawan bertitel MBA', 'Semua wiraswasta hidup makmur', 'Semua wiraswastawan yang hidupnya makmur bertitel MBA', 'Semua MBA yang berwiraswasta  hidup dengan makmur', 'Salah semua', 'a'),
(39, 2, 'Umar Tika sepuluh tahun, Setengah umur Dina dan tiga tahun lebih muda dari Nurul. Siapakah yang paling tua?', 'Tika', 'Dina', 'Nurul', 'Tika dan Dina', 'Nurul dan Tika', 'b'),
(40, 2, 'Reno adiknya reni. Roni kakaknya renoo dan usianya lebih tua daru oada reni, Suaoajah yang usiany paling tua?', 'Reno', 'Roni', 'Reni', 'Romi', 'Remi', 'b'),
(41, 2, 'Profuksi kelapa sawit kita tahun ini merosot, tetapi kualitasnya lebih baik', 'Kualitas kelapa sawait tahun terdahulu kurang baik', 'Kelapa sawit kita pasti laku dipasaran', 'Kita tidak menderita kerugian', 'Ada yang besar dalam produksi kelapa sawit', 'semuanya salah', 'a'),
(42, 2, 'Jika B lewat C harus tambah D. Sebagian B tudaj punya D jadi', 'tak punya D', 'semua B lewat C', 'Semua C tak punya D', 'Sebagian B tak punya A', 'Sebagian B tidak lewat C', 'a'),
(43, 2, 'Bila A>B; Q>C; R>D, sedangkan A>Q>R dan B>C>D', 'R>B; Q>B', 'D<A; C>R; B>Q', 'D<A; C<R; B<Q', 'A>C>D; D<Q<A', 'semuanya salah', 'a'),
(44, 2, 'Lina lita dan bina senang tennis. Rika dan riga tidak suka tennis. Lita dan rika mmakai topi. Siapakah yang topinya  jatuh ketika bermain tennis', 'Lina', 'Lita', 'Vita ', 'Rika', 'semuanya salah', 'a'),
(45, 2, 'Kalau ada tamu, katakan saja bahwa saya akan kembali pukul tiga, kecuali ada urusan penting yang mendadak', 'Kalau saya kembali pukul tiga, pasti ada tamu', 'Akan ada tamu, tetapi saya tidak dapat menemuinya', 'Kalau jam tiga saya belum kembali, tamu tidak usah menunggu', 'Kalau ada urusan penting yang mendadak, saya akan kembali pukul tiga', 'semuanya benar', 'a'),
(46, 2, 'Setelah tiga tahun hidup menjanda, Susan menikah lagi. Akan tetapi perkawinan yang kedua tidak lebih berhasil dari yang pertama', 'Suaminya yang kedua juga meningal', 'Suaminya yang pertama meninggal', 'Perkawinannya yang pertama bahagia', 'Perkawinannya yang kedua bahagia', 'Perkawinannya yang kedua tidak bahagia', 'a'),
(47, 2, 'Lima pembalah sepeda saling berpacu mencapai garis finish. Sutaryo berhasil melewati Agus, tetapi tidak pernah dapat mengejar joko. Sedangkan Amir gagal mengejar Tono, tetapi berhasil melewati joko.  Pembalap manakah yang berada di urutan terakhir?', 'Amir', 'Agus', 'Joko', 'Tono', 'Satryo', 'a'),
(48, 2, 'Hari selasa kemarin hujan lebih deras daripada senin, tapi tidak sederas hari minggu. Hari apakah yang hujannya tidak deras', 'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'a'),
(49, 29, 'Ketika muncul suatu masalah dalam pekerjaan yang kebetulan ada kaitannya dengan hal-hal yang menjadi kewajiban saya, maka saya', 'Mencari kambing hitam penyebab masalah', 'Akan bertangung jawab', 'Membiarkan masalah tetap berlangsung', 'Melihat dulu adakah orang lain yang bersalah', 'Mungkin ada pihak lain harus bertanggung jawab', 'd'),
(50, 29, 'Kedua panitia kegiatan harus membuat laporan pertanggungjawaban. sebagai ketua maka', 'Saya menugaskan pembuatan laporan kepada anak buah', 'Saya bersama anak buah menyusun laporan', 'Saya sendiri yang menyusun laporan sebab tak ingin ada kesalahan yang dibuat oleh anak buah', 'Laporan dibuat oleh sekretaris', 'Tim khusus harus dibentuk untuk membuat laporan tersebut', 'a'),
(51, 29, 'Jika diberikan tugas kantor yang berat oleh atasan, maka saya', 'Jujur mengatakan pada atasan tugasnya terlalu berat', 'Memnta keringanan', 'Meminta rekan kerja membantu', 'Berusaha menyelesaikan sebaik-baiknya ', 'Menolak dan berterus terang tugasnya terlalu berat', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `informasikesehatan` text DEFAULT NULL,
  `statusperkawinan` varchar(255) DEFAULT NULL,
  `pendidikanterakhir` varchar(255) DEFAULT NULL,
  `golongandarah` varchar(3) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `jeniskelamin` varchar(10) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `informasikesehatan`, `statusperkawinan`, `pendidikanterakhir`, `golongandarah`, `agama`, `tanggallahir`, `avatar`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `nik`, `jeniskelamin`, `alamat`, `nohp`) VALUES
(1, 'togar', 'togarma29@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'asatogarmagultom@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'togarma', '$2y$10$c4WxjEmpc7mtemuIu1ccYe0Gb6Fs1orlBVTsRRRbzgmjwv5kTg/0i', NULL, NULL, NULL, '0b7c50ed9f03f1840a5e7a698acbdbba', NULL, NULL, 0, 0, '2021-09-19 03:14:01', '2021-09-19 03:14:01', NULL, NULL, NULL, NULL, NULL),
(3, 'Betsyeba Marbun', 'betsyebamarbun359@gmail.com', NULL, 'Belum Menikah', 'S1', 'B', 'Kristen', '1996-01-09', 'betsyeba.jpg', 'betsyebamarbun', '$2y$10$O4WlEO5DaN2yDBXbL7qLHOi5CrCQYpGTI0uEtuIrADzz/juaVJfVq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-19 03:17:44', '2021-10-29 08:25:12', NULL, 123432231, 'perempuan', 'Jl Hm Yamin Gang India No 2', '085212312312');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `datakeluarga`
--
ALTER TABLE `datakeluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datakeluarga_userId_foreign` (`userId`);

--
-- Indeks untuk tabel `isian`
--
ALTER TABLE `isian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `isian_jenisTes_foreign` (`jenisTes`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_userId_foreign` (`userId`),
  ADD KEY `jawaban_jenisTes_foreign` (`jenisTes`);

--
-- Indeks untuk tabel `jenistes`
--
ALTER TABLE `jenistes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriterialowongan`
--
ALTER TABLE `kriterialowongan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriterialowongan_lowonganid_foreign` (`lowonganid`);

--
-- Indeks untuk tabel `listlowongan`
--
ALTER TABLE `listlowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikanformal`
--
ALTER TABLE `pendidikanformal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendidikanFormal_userId_foreign` (`userId`);

--
-- Indeks untuk tabel `pendidikannonformal`
--
ALTER TABLE `pendidikannonformal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendidikanNonformal_userId_foreign` (`userId`);

--
-- Indeks untuk tabel `pengalamankerja`
--
ALTER TABLE `pengalamankerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengalamankerja_userId_foreign` (`userId`);

--
-- Indeks untuk tabel `pertanyaanessay`
--
ALTER TABLE `pertanyaanessay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaanessay_jenisTes_foreign` (`jenisTes`);

--
-- Indeks untuk tabel `tahap_i_a`
--
ALTER TABLE `tahap_i_a`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tahap_i_a_jenisTes_foreign` (`jenisTes`);

--
-- Indeks untuk tabel `ujianpilihanberganda`
--
ALTER TABLE `ujianpilihanberganda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ujianpilihanberganda_jenisTes_foreign` (`jenisTes`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datakeluarga`
--
ALTER TABLE `datakeluarga`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `isian`
--
ALTER TABLE `isian`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT untuk tabel `jenistes`
--
ALTER TABLE `jenistes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `kriterialowongan`
--
ALTER TABLE `kriterialowongan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `listlowongan`
--
ALTER TABLE `listlowongan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pendidikanformal`
--
ALTER TABLE `pendidikanformal`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pendidikannonformal`
--
ALTER TABLE `pendidikannonformal`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengalamankerja`
--
ALTER TABLE `pengalamankerja`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `pertanyaanessay`
--
ALTER TABLE `pertanyaanessay`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT untuk tabel `tahap_i_a`
--
ALTER TABLE `tahap_i_a`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT untuk tabel `ujianpilihanberganda`
--
ALTER TABLE `ujianpilihanberganda`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `datakeluarga`
--
ALTER TABLE `datakeluarga`
  ADD CONSTRAINT `datakeluarga_userId_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `isian`
--
ALTER TABLE `isian`
  ADD CONSTRAINT `isian_jenisTes_foreign` FOREIGN KEY (`jenisTes`) REFERENCES `jenistes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_jenisTes_foreign` FOREIGN KEY (`jenisTes`) REFERENCES `jenistes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jawaban_userId_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kriterialowongan`
--
ALTER TABLE `kriterialowongan`
  ADD CONSTRAINT `kriterialowongan_lowonganid_foreign` FOREIGN KEY (`lowonganid`) REFERENCES `listlowongan` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendidikanformal`
--
ALTER TABLE `pendidikanformal`
  ADD CONSTRAINT `pendidikanFormal_userId_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendidikannonformal`
--
ALTER TABLE `pendidikannonformal`
  ADD CONSTRAINT `pendidikanNonformal_userId_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengalamankerja`
--
ALTER TABLE `pengalamankerja`
  ADD CONSTRAINT `pengalamankerja_userId_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pertanyaanessay`
--
ALTER TABLE `pertanyaanessay`
  ADD CONSTRAINT `pertanyaanessay_jenisTes_foreign` FOREIGN KEY (`jenisTes`) REFERENCES `jenistes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tahap_i_a`
--
ALTER TABLE `tahap_i_a`
  ADD CONSTRAINT `tahap_i_a_jenisTes_foreign` FOREIGN KEY (`jenisTes`) REFERENCES `jenistes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ujianpilihanberganda`
--
ALTER TABLE `ujianpilihanberganda`
  ADD CONSTRAINT `ujianpilihanberganda_jenisTes_foreign` FOREIGN KEY (`jenisTes`) REFERENCES `jenistes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
