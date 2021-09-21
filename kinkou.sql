-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 07:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinkou`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namabarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) NOT NULL,
  `hargabarang` double(8,2) NOT NULL,
  `stokbarang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `namabarang`, `kategori_id`, `hargabarang`, `stokbarang`, `created_at`, `updated_at`) VALUES
(1, 'Whiskas', 1, 120000.00, 100, '2021-09-19 16:59:32', '2021-09-19 17:02:57'),
(2, 'King', 2, 99000.00, 50, '2021-09-19 17:09:18', '2021-09-19 17:09:18'),
(3, 'King', 1, 150000.00, 10, '2021-09-19 17:29:37', '2021-09-19 17:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namacust` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamatcust` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpcust` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `namacust`, `alamatcust`, `telpcust`, `created_at`, `updated_at`) VALUES
(1, 'ABDAN', 'YOGYAKARTA', '082255728584', '2021-09-19 04:52:04', '2021-09-19 16:04:35'),
(2, 'SYAKURO', 'TARAKAN', '085156868501', '2021-09-19 04:56:33', '2021-09-19 16:04:22'),
(9, 'A', 'BALIKPAPAN', '0265', '2021-09-20 17:36:05', '2021-09-20 17:36:05');

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
-- Table structure for table `grooming`
--

CREATE TABLE `grooming` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namagrooming` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargagrooming` double(8,2) NOT NULL,
  `ketgrooming` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grooming`
--

INSERT INTO `grooming` (`id`, `namagrooming`, `hargagrooming`, `ketgrooming`, `created_at`, `updated_at`) VALUES
(1, 'Grooming Biasa', 100000.00, 'Grooming Biasa', '2021-09-19 20:08:32', '2021-09-19 20:58:54'),
(2, 'Grooming Kutu/Jamur', 150000.00, 'Grooming Kutu/Jamur', '2021-09-19 20:58:40', '2021-09-19 20:58:40'),
(3, 'Grooming Lengkap', 200000.00, 'Grooming Lengkap', '2021-09-19 20:59:11', '2021-09-19 20:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namahewan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenishewan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id`, `namahewan`, `jenishewan`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 'XIXI', 'ANJING', 1, '2021-09-19 16:38:27', '2021-09-20 19:00:44'),
(3, 'KURO', 'ANJING', 1, '2021-09-19 18:11:14', '2021-09-19 21:17:24'),
(4, 'ASYA', 'KUCING', 2, '2021-09-19 18:19:44', '2021-09-19 22:30:35'),
(5, 'ABIL', 'KUCING', 2, '2021-09-19 23:18:31', '2021-09-19 23:18:31'),
(6, 'LYLYX', 'ANJING', 1, '2021-09-19 23:18:56', '2021-09-19 23:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `namakategori`, `created_at`, `updated_at`) VALUES
(1, 'Makanan', NULL, NULL),
(2, 'Aksesoris', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `layanan_berobat`
--

CREATE TABLE `layanan_berobat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hewan_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `penyakit_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan_berobat`
--

INSERT INTO `layanan_berobat` (`id`, `hewan_id`, `customer_id`, `penyakit_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 2, '2021-09-20 19:36:37', '2021-09-20 19:39:26'),
(2, 4, 2, 3, '2021-09-20 19:41:34', '2021-09-20 19:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_grooming`
--

CREATE TABLE `layanan_grooming` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `grooming_id` bigint(20) NOT NULL,
  `hewan_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan_grooming`
--

INSERT INTO `layanan_grooming` (`id`, `grooming_id`, `hewan_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 1, '2021-09-19 22:30:04', '2021-09-20 19:00:44'),
(5, 2, 6, 2, '2021-09-19 23:23:32', '2021-09-19 23:23:32'),
(6, 3, 1, 1, '2021-09-20 18:49:04', '2021-09-20 19:08:10'),
(7, 3, 1, 1, '2021-09-20 18:49:16', '2021-09-20 18:49:16'),
(8, 1, 3, 9, '2021-09-20 19:50:43', '2021-09-20 19:50:51');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_19_022217_create_customers_table', 1),
(6, '2021_09_20_000936_create_hewans_table', 2),
(7, '2021_09_20_004551_create_barangs_table', 3),
(8, '2021_09_20_010946_create_kategoris_table', 4),
(9, '2021_09_20_035237_create_groomings_table', 5),
(10, '2021_09_20_050706_create_layanan-_groomings_table', 6),
(11, '2021_09_20_052152_create_penyakits_table', 7),
(12, '2021_09_20_052547_create_penyakits_table', 8),
(13, '2021_09_20_054839_create_layanan__groomings_table', 9),
(14, '2021_09_21_031837_create_layanan__berobats_table', 10),
(15, '2021_09_21_032306_create_layanan__berobats_table', 11);

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
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namapenyakit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketpenyakit` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `namapenyakit`, `ketpenyakit`, `created_at`, `updated_at`) VALUES
(2, 'Muntah Kuning', 'Kucing selalu muntah kuning sehabis makan dan minum', '2021-09-19 21:40:35', '2021-09-19 21:40:35'),
(3, 'FEI', 'Kucing dengan gejala demam, depresi, dll', '2021-09-20 19:41:24', '2021-09-20 19:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_berobat`
--
ALTER TABLE `layanan_berobat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_grooming`
--
ALTER TABLE `layanan_grooming`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grooming`
--
ALTER TABLE `grooming`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `layanan_berobat`
--
ALTER TABLE `layanan_berobat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `layanan_grooming`
--
ALTER TABLE `layanan_grooming`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
