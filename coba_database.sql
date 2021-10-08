-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2021 pada 16.03
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_03_113329_create_dashboards_table', 1),
(6, '2021_10_07_131833_create_suppliers_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_join` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `company`, `name`, `no_hp`, `alamat`, `tgl_join`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Perum Wacana', 'Pardi Maulana S.IP', '0791 7439 7307', 'Ds. Bagas Pati No. 998, Palembang 70761, DKI', '2021-07-14', 'fKNZUYRvHV', '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(2, 'Perum Wibowo', 'Gamani Budi Natsir S.E.I', '(+62) 902 8240 3443', 'Ds. Ters. Buah Batu No. 445, Sungai Penuh 49301, Banten', '2021-07-09', 'mZjlE7E4DD', '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(3, 'PD Aryani', 'Dinda Yolanda S.H.', '0899 6401 6801', 'Psr. Hasanuddin No. 2, Ternate 60511, Sulut', '2021-09-05', 'Lfc0CN8AJ0', '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(4, 'PT Haryanto Latupono Tbk', 'Zizi Rahimah', '0234 7565 7642', 'Gg. Salak No. 644, Bontang 61720, Lampung', '2021-05-12', 'Tz7QK841pO', '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(5, 'CV Hariyah (Persero) Tbk', 'Hafshah Nurdiyanti', '(+62) 29 3750 964', 'Dk. W.R. Supratman No. 252, Salatiga 49923, Babel', '2021-08-10', 'bqVLWfcRjP', '2021-10-07 07:14:41', '2021-10-07 07:14:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIK` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kerja` date NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `NIK`, `born`, `no_hp`, `alamat`, `tgl_kerja`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Indra Kuswoyo S.E.I', '7317211307075579', '2000-06-20 19:10:39', '0316 0542 6422', 'Ki. Baha No. 430, Tangerang Selatan 10556, Gorontalo', '2021-03-23', '2021-10-07 07:14:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HrJmKDwLU8', '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(2, 'Usyi Nurdiyanti', '6310816003941456', '1994-01-15 22:50:37', '(+62) 552 3330 903', 'Ki. Yap Tjwan Bing No. 47, Administrasi Jakarta Pusat 24938, Jatim', '2021-09-11', '2021-10-07 07:14:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ScEVcYbNb6', '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(3, 'Kasiyah Dina Utami', '3210104307137865', '1999-11-29 03:20:52', '0502 8073 9063', 'Ds. Bacang No. 289, Tarakan 28267, Sulut', '2021-02-01', '2021-10-07 07:14:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lD5GvyZIZY', '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(4, 'Latika Kuswandari M.Pd', '3208832912051768', '1996-09-24 12:42:21', '0901 5106 6976', 'Gg. Tubagus Ismail No. 89, Payakumbuh 94454, Malut', '2021-04-21', '2021-10-07 07:14:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CRhWYam7jm', '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(5, 'Betania Yuniar S.E.', '7372411708014170', '1998-03-18 01:59:01', '0288 1050 9353', 'Ki. Flores No. 93, Bitung 38925, NTB', '2021-05-16', '2021-10-07 07:14:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'aIbdkXyGwN', '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(6, 'Hilal Rusdi', '351511', '31 agustus 2001', '0826347263', 'sidoarjo', '2008-09-24', NULL, '$2y$10$VitrulfAV2p/5vJnMYIIAOtcWZbAyYq3O8R6hMoRYzsmuqdyi/e3q', NULL, '2021-10-07 07:14:41', '2021-10-07 07:14:41'),
(7, 'Amanda', '123333', '2021-10-08', '70908', 'bbbbbbb', '2021-10-28', NULL, '$2y$10$d7Lu8yYIivkE0PmkKx9LYu2S5rxjGI2hUl6siNlg/gCxjyyhn.N5W', NULL, '2021-10-07 10:18:21', '2021-10-07 10:18:21'),
(8, 'bendick', '222', '2021-10-16', '08456456878787', 'bbbbbbb', '2021-11-02', NULL, '$2y$10$QMi1wI6W4PBdhhVQGBNbOOeBRWI9lbNsMcwpC2Sa0JnsIVuT.V4ES', NULL, '2021-10-07 10:19:57', '2021-10-07 10:19:57'),
(9, 'Amanda', '54', '2021-10-09', '08456456878787', 'bbbbbbb', '2021-11-02', NULL, '$2y$10$NQe8KnKDTNolU55LwDJ1yO/ERBEKpmhYxrPxiVlNvnVnjzJjoycQi', NULL, '2021-10-07 10:21:14', '2021-10-07 10:21:14'),
(10, 'hilal rusdi', '1', '2021-09-30', '08456456', 'asdsd', '2021-11-06', NULL, '$2y$10$JgqP6w2pgVg4eN/tSOD0k.haKRCXbYHdl.lRG.GU4FFCB7c7GfQq6', NULL, '2021-10-07 10:23:05', '2021-10-07 10:23:05');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_company_unique` (`company`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nik_unique` (`NIK`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
