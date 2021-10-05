-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Okt 2021 pada 02.04
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
(24, '::1', 'betsyebamarbun359@gmail.com', 3, '2021-10-04 18:46:18', 1);

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
-- Struktur dari tabel `jenistes`
--

CREATE TABLE `jenistes` (
  `id` int(11) UNSIGNED NOT NULL,
  `jenisTes` varchar(255) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenistes`
--

INSERT INTO `jenistes` (`id`, `jenisTes`, `keterangan`) VALUES
(1, 'Tes Penalaran Logis', 'Tes Tahap 1'),
(2, 'Tes Penalaran Analisis', 'Tahap 2'),
(6, 'Tahap 1 Bagian A', 'Berilah Tanda bagi y'),
(7, 'Tahap 1 Bagian B', 'Tuliskan dalam bentu'),
(8, 'Tahap 1 Bagian C', 'Tuliskan dalam bentu'),
(9, 'Tahap 1 Bagian F', 'Penjumlahan, Pengurangan, Perkalian dan Pembagian'),
(10, 'Tahap 1 Bagian G', 'Tes Kepribadian'),
(11, 'Tahap 2 Bagian B', 'Pertanyaan');

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
(8, '2021-10-04-235852', 'App\\Database\\Migrations\\CreateTest', 'default', 'App', 1633392201, 8);

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
  `tahunMulai` datetime DEFAULT NULL,
  `tahunAkhir` datetime DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `sertifikat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pendidikanformal`
--

INSERT INTO `pendidikanformal` (`id`, `userId`, `tingkatan`, `namaInstitut`, `kota`, `jurusan`, `tahunMulai`, `tahunAkhir`, `keterangan`, `sertifikat`) VALUES
(1, 1, 'SMA', 'SMAN1 Medan', 'Medan', 'IPA', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, NULL);

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
  `mulaiBekerja` datetime DEFAULT NULL,
  `akhirBekerja` datetime DEFAULT NULL,
  `gaji` int(11) UNSIGNED NOT NULL,
  `namaAtasan` varchar(30) NOT NULL,
  `alasanKeluar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengalamankerja`
--

INSERT INTO `pengalamankerja` (`id`, `userId`, `namaPerusahaan`, `jabatanAwal`, `jabatanAkhir`, `mulaiBekerja`, `akhirBekerja`, `gaji`, `namaAtasan`, `alasanKeluar`) VALUES
(6, 3, 'Pt Asia SInar Inti Abadi', 'Kernek', 'Kernek', '2021-09-16 00:00:00', NULL, 4294967295, 'Sukro', 'Manakko Roha Ni Si Seba nauliiiiiiiii');

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
(5, 1, 'Tidak semua guru hidup sejahtera. Semua artis hidup berkecukupan.', 'Sebagian guru dan artis hidup berkecukupan', 'Gaji guru kecil, sementara honor artis besar', 'Sebagian artis hidup seperti sebagian guru', 'Sebagian guru gajinya besar, sementara semua artis pnghasilannya besar', 'Semua artis dann guru hidup berkecukupan', 'a'),
(6, 1, 'Bendera Indonesia berwarna merah-putih. Bendera belanda ditambah dengan warna biru.', 'Warna bendera Indonesia dan Belanda serupa tapi tak sama', 'Warna bendera Indonesia  dan Belanda mirip-mirip', 'Warna bendera Indonesia bisa ditemukan dari bendera Belanda dengan cara merobek warna birunya', 'Warna bendera Belanda lebih bagus daripada warna bendera Indonesia', 'Warna bendera Indonesia lebih sederhana dari warna bendera Belanda', 'a'),
(7, 1, 'Pk Eko suplier kertas PT. Margono adalah distributor kertas ternama. Pembayaran di Pak Eko bisa mndur, sementara di PT Margono harus cash', 'Harga kertas Pak Eko lebih mahal daripada PT. Margono', 'Harga kertas Pak Eko lebih mahal karena bisa dibayar mundur', 'Harga kertas PT Margono lebih murah karena dibayar cash', 'walaupun dibayar mundur, Pak Eko tetap memiliki banyak cash flow untuk beli cash di PT Margono sehingga tetap bisa menuplai kertas ke semua relasinya', 'baik Pak Eko dan PT Margono sama saja dalam segala hal', 'a'),
(8, 1, 'Rumahku di Billa Taman Bunga berlantai dua. Hotel Sahid Raya berlantai tujuh.', 'Rumahku dan hotel sama enaknya', 'Rumahku menampun lebih sedikit orang daripada hotel sehinga lebih nyaman', 'Harga rumahku dan hotel sama mahalnya', 'Rumahku tak membutuhkan room boy karena hanya berlantai dua, sementara hotel Sahid Raya memiliki banyak room boy untuk merawat bangunannya', 'Rumahku dan hotel sama saja fungsinya', 'a'),
(9, 1, 'Semua elang adalah pemakan daging. Sebagian binatang adalah Elang.', 'Semua pemakan daging adalah elang', 'Sebagian elang pemakan daging', 'Sebagian binatang adalah pemakan daging', 'Sebagian elang tidak makan daging', 'Semua binatang pemakan daging', 'a'),
(10, 1, 'Semua Kepala Sekolah adalah sarjana. Sementara Kepala Sekolah adalah guru', 'Sementara guru adalah sarjana', 'Sementara sarjana adalah Kepala Sekolah', 'Sementara guru adalah Kepala Sekolah', 'Semua guru adalah sarjana', 'Semua tidak benar', 'a'),
(11, 1, 'Semua anjing suka makan tulang. Sapi tidak makan daging', 'Anjing tidak makan daging', 'Sapi memakan tulang', 'Anjing dan sapi tidak memakan tulang dan tidak makan daging', 'Anjing sama dengan sapi', 'Semua pernyataan salah', 'a'),
(12, 1, 'Semua jenis burung bisa terbang. Semua ayam memili sayap.', 'Semua burung memiliki sayap', 'Semua ayam bisa terbang', 'Sementara ayam bisa terbang', 'Semua ayam termasuk jenis burung', 'Semua ayam bukan termasuk jenis burung', 'a'),
(13, 1, 'Semua Penulis harus kreatif. Sementara novelis tidak kreatif. Semua kambing adalah pemakan rumput. Sebagian binantang adalah kambing, Makan:', 'Sementara novelis bukan penulis', 'Tidak ada penulis yang Novelis', 'Sementara orang yang kreatif bukan penulis', 'Sementara novelis kreatif ', 'Semua novelis Kreatif', 'a'),
(14, 1, 'Semua orang yang bertitel MBA hidup dengan makmur. Sebagian orang yang bertitel MBA melakukan usaha wiraswasta.', 'Semua wiraswastawan bertitel MBA', 'Semua wiraswasta hidup makmur', 'Semua wiraswastawan yang hidupnya makmur bertitel MBA', 'Semua MBA yang berwiraswasta  hidup dengan makmur', 'Salah semua', 'a'),
(15, 2, 'Umur Tika sepuluh tahun, setengah dari umur Fina dan tiga tahun lebih muda dari Nurul. Siapakah yang paling tua', 'Tika', 'Dina', 'Nurul', 'Tika dan Dina', 'Nurul dan Tika', 'a'),
(16, 2, 'Reno adiknya Reni. Ronu kakanya Reno dan usianya lebih tua daripada Reni, Siapakah yang usianya paling tua', 'Reno', 'Roni', 'Reni', 'Romi', 'Remi', 'a'),
(17, 2, 'Produksi kelapa sawit kita tahun ini merosot, tetapi kualitasnya lebih baik.', 'Kualitas kelapa sawait tahun terdahulu kurang baik', 'Kelapa sawit kita pasti laku dipasaran', 'Kita tidak menderita kerugian', 'Ada yang besar dalam produksi kelapa sawit', 'Smuanya salah', 'a'),
(18, 2, 'Jika B lewat C harus tambah D. Sebagian B tak punya D jadi:', 'Tidak punya D', 'semua B lewat C', 'Semua C tak punya D', 'Sebagian B tak punya A', 'Sebagian B tidak lewat C', 'a'),
(19, 2, 'Bila A>B: Q>C; R>D, sefangkan A>Q>R dan B>C>D maka', 'R>B; Q>B', 'D<A; C>R; B>Q', 'D<A; C<R; B<Q', 'A>C>D; D<Q<A', 'Salah semua', 'a'),
(20, 2, 'Lina, Lita dan Vita senang tennis. Rika dan Rifa tidak suka tennis. Lita dan Rika memakai topi. Siapakah yang topinya jatuh ketika bermain tennis', 'Lina', 'Lita', 'Vita ', 'Rika', 'Semuanya Salah', 'a'),
(21, 2, 'Kalau ada tamu, Katakan saja bahwa saya akan kemabli pukul tifa, kecuali ada urusan penting yang mendadak', 'Klau saya kembali pukul tiga, pasti ada tamu', 'Akan ada tamu, tetapi saya tidak dapat menemuinya', 'Kalau jam tiga saya belum kembali, tamu tidak usah menunggu', 'Kalau ada urusan penting yang mendadak, saya akan kembali pukul tiga', 'Semua benar', 'a'),
(22, 2, 'Setelah tiga tahun bisa hidup menjanda, Susan menikah lagi. Akan tetapi perkawinannya yang kedua tidak lebih berhasil dari yang pertama.', 'Suaminya yang kedua juga meningal', 'Suaminya yang pertama meninggal', 'Perkawinannya yang pertama bahagia', 'Perkawinannya yang kedua bahagia', 'Perkawinannya yang kedua tidak bahagia', 'a'),
(23, 2, 'Lima pembalap sepeda saling berpacu mencapai garis finish. satryo berhasil melewati Agus, tetapi tidak pernah dapat mengajar Joko. Sedangkan Amir gagal mengajar Tono, tetapi berhasil melewati Joko. Pembalap manakah yang berada di urutan terakhir?', 'Amir', 'Agus', 'Joko', 'Tono', 'Satryo', 'a'),
(24, 2, 'Hari Selasa kemarin hujan lebih deras daripada hujan hari senin, tapi tidak sederas hari Minggu. Hari apakah yang hujan tidak deras', 'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'a');

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
  `provider_id` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `user_image` varchar(30) NOT NULL DEFAULT 'default.svg',
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

INSERT INTO `users` (`id`, `name`, `email`, `informasikesehatan`, `statusperkawinan`, `pendidikanterakhir`, `golongandarah`, `agama`, `tanggallahir`, `avatar`, `provider_id`, `username`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `nik`, `jeniskelamin`, `alamat`, `nohp`) VALUES
(1, 'togar', 'togarma29@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.svg', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'asatogarmagultom@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'togarma', 'default.svg', '$2y$10$c4WxjEmpc7mtemuIu1ccYe0Gb6Fs1orlBVTsRRRbzgmjwv5kTg/0i', NULL, NULL, NULL, '0b7c50ed9f03f1840a5e7a698acbdbba', NULL, NULL, 0, 0, '2021-09-19 03:14:01', '2021-09-19 03:14:01', NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'betsyebamarbun359@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'betsyebamarbun', 'default.svg', '$2y$10$O4WlEO5DaN2yDBXbL7qLHOi5CrCQYpGTI0uEtuIrADzz/juaVJfVq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-19 03:17:44', '2021-09-19 03:49:30', NULL, NULL, NULL, NULL, NULL);

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
-- Indeks untuk tabel `jenistes`
--
ALTER TABLE `jenistes`
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `isian`
--
ALTER TABLE `isian`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenistes`
--
ALTER TABLE `jenistes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pendidikanformal`
--
ALTER TABLE `pendidikanformal`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendidikannonformal`
--
ALTER TABLE `pendidikannonformal`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengalamankerja`
--
ALTER TABLE `pengalamankerja`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tahap_i_a`
--
ALTER TABLE `tahap_i_a`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ujianpilihanberganda`
--
ALTER TABLE `ujianpilihanberganda`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
