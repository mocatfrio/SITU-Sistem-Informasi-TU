-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2018 pada 18.24
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `situ`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keperluan_surat`
--

CREATE TABLE `keperluan_surat` (
  `id_surat` int(11) NOT NULL,
  `jenis_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keperluan_surat`
--

INSERT INTO `keperluan_surat` (`id_surat`, `jenis_surat`) VALUES
(1, 'Ijin Survey dan Wawancara'),
(2, 'Rekomendasi Pengajuan Magang'),
(3, 'Kerja Praktik'),
(4, 'Bantuan Data Tugas Akhir'),
(5, 'Rekomendasi Beasiswa'),
(6, 'Keterangan Mahasiswa Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` date NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ortu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ortu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp_ortu` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ortu` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `alamat`, `ttl`, `no_hp`, `email`, `nama_ortu`, `pekerjaan_ortu`, `no_hp_ortu`, `alamat_ortu`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arij Nafi\'atul Mashuda', '5115100013', 'Jalan Kejawan Putih BMA 14 Mulyorejo, Surabaya', '1997-06-21', '085334663230', 'arijnafi@gmail.com', 'Samsul Huda', 'PNS', '08563834972947', 'Jalan Mawar 12, Probolinggo', 'shaggy', NULL, '2018-05-14 22:35:49', '2018-05-14 22:35:49'),
(3, 'Hafara Firdausi', '5115100053', 'Jalan Kejawan Putih BMA 14 Mulyorejo, Surabaya', '1998-06-21', '085334663230', 'hafara@gmail.com', 'Wasis', 'Dosen', '08563834972947', 'Jalan Mawar 12, Sidoarjo', 'shaggy', NULL, '2018-05-14 22:36:59', '2018-05-14 22:36:59'),
(4, 'cocil', '5115100033', 'Jalan Rotowijayan, Panembahan, Jogja', '2000-03-12', '02453369723', 'cocil@gmail.com', 'asa', 'asa', '12345', 'asa', 'cocil', NULL, '2018-05-23 01:22:29', '2018-05-23 01:22:29'),
(6, 'Ajeng', '5115100050', 'Jalan Rotowijayan, Panembahan, Jogja', '2000-03-21', '087342756138', 'ajeng@gmail.com', 'sukam', 'pns', '0987744938', 'Jalan Mawar 12, Probolinggo', 'shaggy', NULL, '2018-05-23 02:01:46', '2018-05-23 02:01:46'),
(7, 'Kober mie setan', '5115100022', 'Jalan Rotowijayan, Panembahan, Jogja', '2000-03-21', '2466357', 'arij_nafi@yahoo.co.id', 'Samsul Huda', 'kdhdkgh', '224463757', 'Jalan Mawar 12, Probolinggo', 'shaggy', NULL, '2018-05-23 06:42:00', '2018-05-23 06:42:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_05_13_061730_create_mahasiswa_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_surat`
--

CREATE TABLE `permohonan_surat` (
  `id_permohonan` int(11) NOT NULL,
  `mhs_id` int(11) NOT NULL,
  `surat_id` int(11) NOT NULL,
  `tujuan` text NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `permohonan_surat`
--

INSERT INTO `permohonan_surat` (`id_permohonan`, `mhs_id`, `surat_id`, `tujuan`, `nama_perusahaan`, `alamat_perusahaan`, `status_id`) VALUES
(1, 4, 2, 'sgsha', 'ada', 'ada', 2),
(2, 6, 2, 'ada aja', 'adaaaaa', 'ada pokok', 1),
(3, 1, 3, 'sdgd', 'sags', 'fsagsa', 1),
(4, 1, 2, 'sdhdjh', 'dhdhg', 'rthfjfgj', 1),
(5, 1, 2, 'HRD', 'Telkom', 'jalan iya', 1),
(6, 1, 3, 'aafadf', 'fadf', 'afaf', 1),
(7, 1, 6, 'faf', 'daadg', 'dafda', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'Belum Diproses'),
(2, 'Sedang Diproses'),
(3, 'Selesai Diproses');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keperluan_surat`
--
ALTER TABLE `keperluan_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_nrp_unique` (`nrp`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `permohonan_surat`
--
ALTER TABLE `permohonan_surat`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keperluan_surat`
--
ALTER TABLE `keperluan_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `permohonan_surat`
--
ALTER TABLE `permohonan_surat`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
