/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `answers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `siswa_code_id` bigint(20) unsigned NOT NULL,
  `option_id` bigint(20) unsigned NOT NULL,
  `question_id` bigint(20) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `codes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quiz_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codes_code_unique` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `mapels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mapels_user_id_foreign` (`user_id`),
  CONSTRAINT `mapels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `materi_videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `submateri_id` bigint(20) unsigned NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `materi_videos_submateri_id_foreign` (`submateri_id`),
  CONSTRAINT `materi_videos_submateri_id_foreign` FOREIGN KEY (`submateri_id`) REFERENCES `sub_materis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `materis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mapel_id` bigint(20) unsigned NOT NULL,
  `bab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `materis_mapel_id_foreign` (`mapel_id`),
  CONSTRAINT `materis_mapel_id_foreign` FOREIGN KEY (`mapel_id`) REFERENCES `mapels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `options` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` bigint(20) unsigned NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `questions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `quiz_id` bigint(20) unsigned NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `quiz_times` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `quizzes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `materi_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `quizzes_materi_id_foreign` (`materi_id`),
  CONSTRAINT `quizzes_materi_id_foreign` FOREIGN KEY (`materi_id`) REFERENCES `materis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `scores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sub_materis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `materi_id` bigint(20) unsigned NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_materis_materi_id_foreign` (`materi_id`),
  CONSTRAINT `sub_materis_materi_id_foreign` FOREIGN KEY (`materi_id`) REFERENCES `materis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('siswa','guru','kurikulum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_valid` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_nisn_unique` (`nisn`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;







INSERT INTO `mapels` (`id`, `user_id`, `mapel`, `icon`, `video`, `created_at`, `updated_at`) VALUES
(1, 1, 'Olahraga', 'ICONMAPEL_1738653286.png', 'jKtbnLoYJe8', '2025-01-29 01:14:36', '2025-02-04 07:17:53');
INSERT INTO `mapels` (`id`, `user_id`, `mapel`, `icon`, `video`, `created_at`, `updated_at`) VALUES
(2, 9, 'Matematika', 'ICONMAPEL_1738642499.png', 'jKtbnLoYJe8', '2025-02-04 04:14:59', '2025-02-04 04:14:59');
INSERT INTO `mapels` (`id`, `user_id`, `mapel`, `icon`, `video`, `created_at`, `updated_at`) VALUES
(3, 9, 'Bahasa Inggris', 'ICONMAPEL_1738643373.png', 'jKtbnLoYJe8', '2025-02-04 04:29:33', '2025-02-04 04:29:33');



INSERT INTO `materis` (`id`, `mapel_id`, `bab`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 'I', 'Permainan Invasi', 'materi1.jpg', '2025-01-29 01:14:36', '2025-01-29 01:14:36');
INSERT INTO `materis` (`id`, `mapel_id`, `bab`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 1, 'II', 'Permainan Net', 'materi2.jpg', '2025-01-29 01:14:36', '2025-01-29 01:14:36');
INSERT INTO `materis` (`id`, `mapel_id`, `bab`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 1, 'III', 'Atletik', 'materi3.jpg', '2025-01-29 01:14:36', '2025-01-29 01:14:36');
INSERT INTO `materis` (`id`, `mapel_id`, `bab`, `judul`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 1, 'IV', 'Pencak Silat', 'materi4.jpg', '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(5, 1, 'V', 'Kebugaran Jasmani', 'materi5.jpg', '2025-01-29 01:14:36', '2025-01-29 01:14:36');

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_07_113525_create_codes_table', 1),
(6, '2024_02_07_113548_create_questions_table', 1),
(7, '2024_02_07_113611_create_options_table', 1),
(8, '2024_02_07_113617_create_answers_table', 1),
(9, '2024_02_25_035003_create_scores_table', 1),
(10, '2024_06_20_055959_create_quiz_times_table', 1),
(11, '2024_08_25_010120_create_mapels_table', 1),
(12, '2024_08_26_023057_create_materis_table', 1),
(13, '2024_08_26_023103_create_sub_materis_table', 1),
(14, '2025_02_05_021935_create_materi_videos_table', 1),
(15, '2025_02_07_113532_create_quizzes_table', 1);















INSERT INTO `sub_materis` (`id`, `materi_id`, `judul`, `gambar`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'SEPAK BOLA (FOOTBALL)', 'materi1_1.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36');
INSERT INTO `sub_materis` (`id`, `materi_id`, `judul`, `gambar`, `content`, `created_at`, `updated_at`) VALUES
(2, 1, 'BOLA BASKET (BASKET BALL)', 'materi1_2.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36');
INSERT INTO `sub_materis` (`id`, `materi_id`, `judul`, `gambar`, `content`, `created_at`, `updated_at`) VALUES
(3, 1, 'BOLA TANGAN INDOOR', 'materi1_3.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36');
INSERT INTO `sub_materis` (`id`, `materi_id`, `judul`, `gambar`, `content`, `created_at`, `updated_at`) VALUES
(4, 2, 'BOLA VOLI (VOLLEY BALL)', 'materi2_1.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(5, 2, 'BULU TANGKIS (BADMINTON)', 'materi2_2.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(6, 2, 'TENIS MEJA', 'materi2_3.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(7, 3, 'HAKIKAT ATLETIK', 'materi3_1.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(8, 3, 'LARI JARAK PENDEK', 'materi3_2.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(9, 3, 'LARI JARAK MENENGAH', 'materi3_3.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(10, 3, 'LAIR JARAK JAUH', 'materi3_4.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(11, 4, 'HAKIKAT PENCAK SILAT', 'materi4_1.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(12, 4, 'KETERAMPILAM GERAK', 'materi4_2.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(13, 4, 'KETERAMPILAN GERAK BELAAN', 'materi4_3.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(14, 5, 'MANIPULATIF SENAM LANTAI', 'materi5_1.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(15, 5, 'SENAM LANTAI LOKOMOTOR', 'materi5_2.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36'),
(16, 5, 'SENAM LANTAI NON-LOKOMOTOR', 'materi5_3.jpg', NULL, '2025-01-29 01:14:36', '2025-01-29 01:14:36');

INSERT INTO `users` (`id`, `name`, `email`, `username`, `nisn`, `role`, `email_verified_at`, `password`, `remember_token`, `is_valid`, `created_at`, `updated_at`) VALUES
(1, 'Bpk/Ibu Guru', 'guru@email.com', 'guru123', NULL, 'guru', NULL, '$2y$12$cKzwdZBzhHcIPj4zsmSHPuO8RrbDkQiXXv/6j4gXKE76yDH2xlVFe', NULL, 1, '2025-01-29 01:14:35', '2025-01-29 01:14:35');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `nisn`, `role`, `email_verified_at`, `password`, `remember_token`, `is_valid`, `created_at`, `updated_at`) VALUES
(2, 'Siswa', 'siswa@email.com', 'siswa123', '123456', 'siswa', NULL, '$2y$12$MEyJ8T5KSl6aaFPeMwlzVOxj3ERhWDqmDGyXETzaVlRj3HbU6lq4K', NULL, 1, '2025-01-29 01:14:36', '2025-01-29 01:14:36');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `nisn`, `role`, `email_verified_at`, `password`, `remember_token`, `is_valid`, `created_at`, `updated_at`) VALUES
(3, 'Kurikulum', 'kurikulum@email.com', 'kurikulum123', '', 'kurikulum', NULL, '$2y$12$ukTdEkFMsqhsPNQ4bPV2wuCm14hhxsjQgl7RP88KSi/wSCYzyULm.', NULL, 1, '2025-01-29 01:14:36', '2025-01-29 01:14:36');
INSERT INTO `users` (`id`, `name`, `email`, `username`, `nisn`, `role`, `email_verified_at`, `password`, `remember_token`, `is_valid`, `created_at`, `updated_at`) VALUES
(4, 'Budi Hariyanto', 'budi@gmail.com', 'budi123', '45678', 'siswa', NULL, '$2y$12$pVY8GLiZhp.VaC1I8loD6O16muu9o1QzMwEWTiKqmzyy90ifEyPl2', NULL, 1, '2025-01-29 01:28:25', '2025-01-29 01:28:25'),
(5, 'Yaria Kusuma', 'yaria@gmail.com', 'yaria123', '9889', 'siswa', NULL, '$2y$12$JpPw1JjKMiZhtcqhN97M7OIUage1qzj/wTLT.UCWVj/rGwmEO68HK', NULL, 1, '2025-01-29 02:41:22', '2025-01-29 02:41:22'),
(6, 'Hani Mariska', 'hani@gmail.com', 'hani123', '9009', 'siswa', NULL, '$2y$12$HJlZ55dOqPJhP8FUKyJ9a.iBWgtwvBwb7i5xawHbqTbQ.qRxFOUoy', NULL, 1, '2025-01-29 02:53:55', '2025-01-29 02:53:55'),
(7, 'Jerermi', 'jeremi@gmail.com', 'jeremi123', '5667', 'siswa', NULL, '$2y$12$q7ZZpU5tJzTuYODuVVkM8eBtOkeiux4zr.imfcdx2W9U6EzhhYALS', NULL, 0, '2025-01-29 02:55:20', '2025-01-29 04:20:50'),
(8, 'Riska', 'riska@gmail.com', 'riska123', '12678', 'siswa', NULL, '$2y$12$JC2B1gXOQe6SCC/7d8dDkuNhtd.UrYXqHcJaLaFrADmZJAsjB21eG', NULL, 1, '2025-01-29 02:56:30', '2025-01-29 04:21:00'),
(9, 'Rosi Maulana', 'rosi@email.com', 'rosi123', NULL, 'guru', NULL, '$2y$12$jZntXHVJXrB7J3tnYjrqK.cLL2Ll.a9Ex8qzWwdaRan8C0AORRKNS', NULL, 1, '2025-01-29 04:03:17', '2025-01-29 04:03:17');


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;