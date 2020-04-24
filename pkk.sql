-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Apr 2020 pada 07.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2020_04_22_093610_create_posts_table', 1),
(2, '2020_04_22_095119_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','tutor','pelajar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama_petugas`, `no_telp`, `email`, `password`, `level`) VALUES
(1, 'Talitha', '089284921', 'talitha@gmail.com', '12345', 'admin'),
(2, 'dia', '02308298', 'dia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(3, 'aku', '08928397', 'aku@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'tutor'),
(4, 'Nisrina', '082145678903', 'Niap1102@gmail.com', '87c69e8553387dc1c3cd1798f83ca08a', 'pelajar'),
(5, 'INI', '082145678903', 'ini@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', ''),
(6, 'Nisrina', '082145678903', 'niap1502@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'pelajar'),
(8, 'Hihihi', '072573752', 'hi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Voluptas est molestiae vero quo. Deserunt unde aut nihil magnam facilis ut. Sequi sed molestiae dolores iure doloremque. Reprehenderit voluptatibus et excepturi sint. Rerum odit est non facere voluptatem.', 'voluptas-est-molestiae-vero-quo-deserunt-unde-aut-nihil-magnam-facilis-ut-sequi-sed-molestiae-dolores-iure-doloremque-reprehenderit-voluptatibus-et-excepturi-sint-rerum-odit-est-non-facere-voluptatem', 'Sed ut eum est. Facere distinctio ut sint. Et laborum mollitia eos vitae ipsam. Ipsam provident reiciendis nobis sint perferendis deserunt nobis.', '2020-04-22 02:48:58', '2020-04-22 02:48:58'),
(2, 'Qui molestiae velit fugiat assumenda. Voluptatem eligendi accusantium incidunt modi et. Eius aut quae provident excepturi.', 'qui-molestiae-velit-fugiat-assumenda-voluptatem-eligendi-accusantium-incidunt-modi-et-eius-aut-quae-provident-excepturi', 'Blanditiis totam tempore at porro. Fugit id consequatur nemo dolores eos. Sint adipisci tempore consequuntur laboriosam aut laborum qui. Odit consectetur maxime possimus voluptas.', '2020-04-22 02:48:58', '2020-04-22 02:48:58'),
(3, 'Natus ullam dolorem porro rerum qui. Sit hic necessitatibus inventore est voluptatem. Ratione perspiciatis nihil eveniet maiores accusantium. Veritatis et recusandae dignissimos et inventore.', 'natus-ullam-dolorem-porro-rerum-qui-sit-hic-necessitatibus-inventore-est-voluptatem-ratione-perspiciatis-nihil-eveniet-maiores-accusantium-veritatis-et-recusandae-dignissimos-et-inventore', 'Facere eos est qui possimus atque consectetur commodi. Consequuntur facere repellendus est. Atque officiis sed eaque qui cupiditate voluptas. Ipsum consequatur soluta ipsum ullam et ut aperiam.', '2020-04-22 02:48:58', '2020-04-22 02:48:58'),
(4, 'Est eaque voluptas natus consequatur quis. Et iusto fugiat asperiores dignissimos tempora voluptatem velit. Ut et eos aliquam qui doloribus.', 'est-eaque-voluptas-natus-consequatur-quis-et-iusto-fugiat-asperiores-dignissimos-tempora-voluptatem-velit-ut-et-eos-aliquam-qui-doloribus', 'Nisi sunt et assumenda ipsum aut dolorem. Voluptatem soluta aliquam dicta molestiae dolorem provident delectus recusandae. Et odit tempora consequuntur beatae pariatur eos rerum.', '2020-04-22 02:48:58', '2020-04-22 02:48:58'),
(5, 'Deserunt eaque ut qui sed magnam debitis. Vero est assumenda est fuga impedit at. Ipsam at debitis ut et ab. Dolorem labore et dolorum aut itaque.', 'deserunt-eaque-ut-qui-sed-magnam-debitis-vero-est-assumenda-est-fuga-impedit-at-ipsam-at-debitis-ut-et-ab-dolorem-labore-et-dolorum-aut-itaque', 'Rerum expedita aut recusandae earum blanditiis. Expedita cum blanditiis ut reiciendis blanditiis eligendi. Aut eveniet rerum nostrum. Fugiat quasi vitae omnis omnis sit non.', '2020-04-22 02:48:58', '2020-04-22 02:48:58'),
(6, 'Molestiae sequi ullam ea voluptatum voluptas error. Laudantium eaque debitis deleniti vel odit ipsam. Sapiente atque ea quibusdam voluptatem repellendus dolor. Repudiandae optio aut quo quas sit.', 'molestiae-sequi-ullam-ea-voluptatum-voluptas-error-laudantium-eaque-debitis-deleniti-vel-odit-ipsam-sapiente-atque-ea-quibusdam-voluptatem-repellendus-dolor-repudiandae-optio-aut-quo-quas-sit', 'Eligendi enim repudiandae ut cumque quia. Vel tenetur quibusdam molestias alias.', '2020-04-22 02:48:58', '2020-04-22 02:48:58'),
(7, 'Nemo ut aut vel cumque voluptatem dolores. Molestiae hic aut et illo nostrum. Ducimus impedit corrupti natus praesentium. Vero aut quod consequatur nihil. Molestiae molestiae quia dolorum quis quos.', 'nemo-ut-aut-vel-cumque-voluptatem-dolores-molestiae-hic-aut-et-illo-nostrum-ducimus-impedit-corrupti-natus-praesentium-vero-aut-quod-consequatur-nihil-molestiae-molestiae-quia-dolorum-quis-quos', 'Aut tempora velit laudantium ducimus rerum omnis. Quia harum sit rerum omnis ex ut omnis cupiditate. Velit ut aut doloribus voluptate.', '2020-04-22 02:48:58', '2020-04-22 02:48:58'),
(8, 'Libero similique est aut. Provident vel ad et saepe nihil aut. Et nobis sequi fugit.', 'libero-similique-est-aut-provident-vel-ad-et-saepe-nihil-aut-et-nobis-sequi-fugit', 'Vel laudantium voluptatem delectus asperiores. Eligendi exercitationem sed et eum itaque saepe. Quis placeat assumenda corrupti quo.', '2020-04-22 02:48:58', '2020-04-22 02:48:58'),
(9, 'Similique non quia quaerat rerum vero repellat. Aut et enim autem dolorem. Ducimus et id nihil quos alias ab saepe voluptas. Molestias deleniti inventore aliquam.', 'similique-non-quia-quaerat-rerum-vero-repellat-aut-et-enim-autem-dolorem-ducimus-et-id-nihil-quos-alias-ab-saepe-voluptas-molestias-deleniti-inventore-aliquam', 'Veritatis voluptate voluptatibus quidem mollitia ut vero aut quis. Deserunt aliquid et porro dolore fuga. Nesciunt sint id natus voluptates cumque est.', '2020-04-22 02:48:58', '2020-04-22 02:48:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
