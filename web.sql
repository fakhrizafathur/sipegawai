-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2023 pada 05.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_post`
--

CREATE TABLE `category_post` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_karyawan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `pendidikan_terakhir` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `no_karyawan`, `nama`, `jabatan`, `pendidikan_terakhir`, `created_at`, `updated_at`) VALUES
(1, 2021121001, 'Yudhistira Yongki Kurniawan Budiman, S.Kom, M.Cs', 'Direktur Utama', 'S-2 Universitas Gajah Mada', NULL, NULL),
(2, 2022012002, 'Maria Cynthia Purnamasari', 'Direktur Operasional', 'SMA N 11 Yogyakarta', NULL, '2023-07-08 03:17:47'),
(3, 2022033003, 'Cantika Amalia Jovanda', 'Manager', 'SMKN 2 Kasihan Bantul (SMM)', NULL, '2023-07-08 03:18:24'),
(4, 2022054004, 'Tuwuh Rejeki Hambawani', 'Asisten Manager', 'SMKN 2 Kasihan Bantul (SMM)', NULL, '2023-07-08 03:19:06'),
(5, 2023015005, 'Dian Elvita Lusiana', 'Hubungan Masyarakat', 'SMKN 2 Kasihan Bantul (SMM)', NULL, '2023-07-08 03:19:33'),
(6, 2023067007, 'Amelia Sandra', 'Staff Umum', 'SMA Ma\'arif Kroya', NULL, NULL),
(7, 2023026006, 'Kristin Yulia Setyowati', 'Staff IT', 'S-1 Universitas Sarjanawiyata Tamansiswa', NULL, NULL),
(9, 2023071201, 'Sandri Maulana Rifa\'i Martin', 'Intern', 'MTS Islamiyah Ciawi', NULL, '2023-07-26 01:36:51'),
(10, 2023071202, 'Robby Rudiansyah Budiman', 'Intern', 'MTS 2 Tasikmalaya', NULL, '2023-07-26 01:48:07'),
(11, 2023071203, 'Zaki Syahrizar', 'Intern', 'SMP Rajapolah', NULL, '2023-07-26 01:46:41'),
(12, 2023071204, 'Muhammad Isya Anshory', 'Intern', 'MTS Persis Cempaka Warna', NULL, '2023-07-26 01:37:58'),
(13, 2023070901, 'Mahendra Wibisono', 'Intern', 'SMK N 2 Klaten', NULL, '2023-08-01 00:06:11'),
(29, 2023070902, 'Cynthia Nata Widiastuti', 'Intern', 'MAN 1 Kebumen', NULL, '2023-07-09 11:42:29'),
(30, 2023070903, 'Febri Fionita', 'Intern', 'SMA N 01 Samalantan', NULL, '2023-08-01 00:06:59'),
(31, 2023070904, 'Lilis Triyani', 'Intern', 'SMA N 1 Kawali', NULL, '2023-08-01 00:06:24'),
(32, 2023070905, 'Apinda Paru', 'Intern', 'SMA N 1 Pringgabaya', NULL, '2023-08-01 00:05:30'),
(33, 2023070906, 'Fathur Fakhriza', 'Intern', 'SMA N 1 Banjarharjo', NULL, NULL),
(34, 2023070907, 'Aria Nanda Praditya Jati', 'Intern', 'SMA N 1 Sapuran', NULL, '2023-07-09 19:40:41'),
(35, 2023070908, 'Rahmat Rifai Arsandi', 'Intern', 'SMK YKP Magetan', NULL, '2023-07-09 11:41:46'),
(36, 2023070909, 'Immanuel Parsaoran Siagian', 'Intern', 'SMA N 4 Pematangsiantar', NULL, '2023-07-17 22:34:22'),
(37, 2023071001, 'Muhamad Faiz Gifari', 'Intern', 'SMA N 4 Semarang', NULL, '2023-08-02 01:56:43'),
(38, 2023071002, 'Alif Muhammad Hanif', 'Intern', 'SMK N 1 Cilegon', NULL, '2023-08-02 01:57:14'),
(39, 2023071003, 'Raven Fajar Febriano', 'Intern', 'SMA N 1 Salatiga', NULL, '2023-08-02 01:57:35'),
(40, 2023071004, 'Muhammad Kaisan Aulia Ridwan', 'Intern', 'SMA N 109 Jakarta', NULL, '2023-08-02 01:58:01'),
(42, 2023071005, 'Yoga Pratama Kusendi', 'Intern', 'MAN 3 Blitar', '2023-07-26 01:51:27', '2023-08-02 00:23:55'),
(43, 2023071006, 'Riski Waluyojati', 'Intern', 'MAN Kota Blitar', '2023-07-26 01:58:59', '2023-08-02 00:24:24'),
(44, 2023081201, 'Fadlan Rizky Muttaqien', 'Intern', 'MTS Al-Amin', '2023-08-02 00:09:22', '2023-08-02 00:09:22'),
(45, 2023081202, 'Muhammad Nizar Attamimi', 'Intern', 'SMP', '2023-08-02 00:10:53', '2023-08-02 00:15:57'),
(46, 2023081203, 'M Randy Cahya Putra', 'Intern', 'SMP N 19 Tasikmalaya', '2023-08-02 00:12:04', '2023-08-02 00:13:16'),
(47, 2023081204, 'Sofan Ilham', 'Intern', 'SMP N 1 Singaparna', '2023-08-02 00:12:59', '2023-08-02 00:12:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2022_09_16_154610_create_posts_table', 1),
(6, '2022_09_17_221325_create_post_metas_table', 1),
(7, '2022_09_18_000754_create_categories_table', 1),
(8, '2022_09_18_001156_create_category_post_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `excerpt` text DEFAULT NULL,
  `body` text NOT NULL,
  `min_to_read` int(11) NOT NULL DEFAULT 1,
  `image_path` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_metas`
--

CREATE TABLE `post_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_robots` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_post`
--
ALTER TABLE `category_post`
  ADD KEY `category_post_category_id_foreign` (`category_id`),
  ADD KEY `category_post_post_id_foreign` (`post_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `karyawan_no_karyawan_unique` (`no_karyawan`);

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
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `post_metas`
--
ALTER TABLE `post_metas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_metas_post_id_foreign` (`post_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `post_metas`
--
ALTER TABLE `post_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `post_metas`
--
ALTER TABLE `post_metas`
  ADD CONSTRAINT `post_metas_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
