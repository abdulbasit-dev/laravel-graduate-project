-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 05:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
  time_zone = "+00:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;
--
  -- Database: `laravel_graduate-project`
  --
  -- --------------------------------------------------------
  --
  -- Table structure for table `announcements`
  --
  CREATE TABLE `announcements` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
    `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
    `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `announcements`
  --
INSERT INTO
  `announcements` (
    `id`,
    `title`,
    `description`,
    `attachment`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ',
    'uploads/announcements/docker.pdf',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    2,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ',
    'uploads/announcements/docker.pdf',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    3,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ',
    'uploads/announcements/docker.pdf',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    4,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ',
    'uploads/announcements/docker.pdf',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    5,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ',
    'uploads/announcements/docker.pdf',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `banners`
  --
  CREATE TABLE `banners` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `banners`
  --
INSERT INTO
  `banners` (
    `id`,
    `title`,
    `description`,
    `image`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    'Explore Students Projects',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ',
    'uploads/banners/1.jpg',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    2,
    'Find Out The best Ranked One',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ',
    'uploads/banners/2.jpg',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    3,
    'Get Idea From Others Project',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ',
    'uploads/banners/3.jpg',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `colleges`
  --
  CREATE TABLE `colleges` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `colleges`
  --
INSERT INTO
  `colleges` (`id`, `name`, `created_at`, `updated_at`)
VALUES
  (
    1,
    'Science',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    2,
    'Engineering',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    3,
    'Education',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `departments`
  --
  CREATE TABLE `departments` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `college_id` bigint(20) UNSIGNED DEFAULT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `departments`
  --
INSERT INTO
  `departments` (
    `id`,
    `college_id`,
    `name`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    1,
    'Biology Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    2,
    1,
    'Chemistry Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    3,
    1,
    'Physics Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    4,
    1,
    'Mathematics Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    5,
    1,
    'Geology Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    6,
    1,
    'Computer Science and IT Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    7,
    1,
    'Environmental Health and Science Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    8,
    2,
    'Civil Engineering Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    9,
    2,
    'Electrical Engineering Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    10,
    2,
    'Mechanical and Mechatronics Engineering',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    11,
    2,
    'Architectural Engineering Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    12,
    2,
    'Software and Informatics Engineering',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    13,
    2,
    'Water Resources Engineering',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    14,
    2,
    'Geomatics (Surveying) Engineering',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    15,
    2,
    'Chemical and Petrochemical Engineering',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    16,
    2,
    'Aviation Engineering Department',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    17,
    3,
    'Chemistry',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    18,
    3,
    'Mathematics',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    19,
    3,
    'Physics',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    20,
    3,
    'Biology',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    21,
    3,
    'Kurdish Language',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    22,
    3,
    'English Language',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    23,
    3,
    'Syriac Language',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    24,
    3,
    'Arabic Language',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    25,
    3,
    'Special Education',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    26,
    3,
    'Educational and Psychological Counselings',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  );
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
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- --------------------------------------------------------
  --
  -- Table structure for table `grants`
  --
  CREATE TABLE `grants` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `college_id` bigint(20) UNSIGNED DEFAULT NULL,
    `dept_id` bigint(20) UNSIGNED DEFAULT NULL,
    `grant_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0 => graduate project | 1 => idea',
    `rank` int(11) NOT NULL DEFAULT 0 COMMENT 'rank of idea or project',
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `money` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `sponsor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `field` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
    `teams` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
    `plan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
    `advantage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- --------------------------------------------------------
  --
  -- Table structure for table `migrations`
  --
  CREATE TABLE `migrations` (
    `id` int(10) UNSIGNED NOT NULL,
    `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `batch` int(11) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `migrations`
  --
INSERT INTO
  `migrations` (`id`, `migration`, `batch`)
VALUES
  (
    1,
    '2014_10_12_100000_create_password_resets_table',
    1
  ),
  (
    2,
    '2019_08_19_000000_create_failed_jobs_table',
    1
  ),
  (
    3,
    '2019_12_14_000001_create_personal_access_tokens_table',
    1
  ),
  (
    4,
    '2022_01_04_122545_create_permission_tables',
    1
  ),
  (5, '2022_01_05_134244_create_colleges_table', 1),
  (
    6,
    '2022_01_05_134309_create_departments_table',
    1
  ),
  (7, '2022_02_02_000000_create_users_table', 1),
  (8, '2022_02_21_051650_create_projects_table', 1),
  (9, '2022_03_19_211154_create_banners_table', 1),
  (10, '2022_03_19_211245_create_teams_table', 1),
  (
    11,
    '2022_03_24_225337_create_announcements_table',
    1
  ),
  (12, '2022_03_26_185618_create_grants_table', 2);
-- --------------------------------------------------------
  --
  -- Table structure for table `model_has_permissions`
  --
  CREATE TABLE `model_has_permissions` (
    `permission_id` bigint(20) UNSIGNED NOT NULL,
    `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `model_id` bigint(20) UNSIGNED NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- --------------------------------------------------------
  --
  -- Table structure for table `model_has_roles`
  --
  CREATE TABLE `model_has_roles` (
    `role_id` bigint(20) UNSIGNED NOT NULL,
    `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `model_id` bigint(20) UNSIGNED NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `model_has_roles`
  --
INSERT INTO
  `model_has_roles` (`role_id`, `model_type`, `model_id`)
VALUES
  (1, 'App\\Models\\User', 1),
  (2, 'App\\Models\\User', 2),
  (3, 'App\\Models\\User', 3),
  (3, 'App\\Models\\User', 4),
  (3, 'App\\Models\\User', 5),
  (3, 'App\\Models\\User', 6),
  (3, 'App\\Models\\User', 7),
  (3, 'App\\Models\\User', 8),
  (3, 'App\\Models\\User', 9),
  (3, 'App\\Models\\User', 10),
  (3, 'App\\Models\\User', 11),
  (3, 'App\\Models\\User', 12),
  (3, 'App\\Models\\User', 13),
  (3, 'App\\Models\\User', 14),
  (3, 'App\\Models\\User', 15),
  (3, 'App\\Models\\User', 16),
  (3, 'App\\Models\\User', 17),
  (3, 'App\\Models\\User', 18),
  (3, 'App\\Models\\User', 19),
  (3, 'App\\Models\\User', 20),
  (3, 'App\\Models\\User', 21),
  (3, 'App\\Models\\User', 22),
  (3, 'App\\Models\\User', 23),
  (3, 'App\\Models\\User', 24),
  (3, 'App\\Models\\User', 25),
  (3, 'App\\Models\\User', 26),
  (3, 'App\\Models\\User', 27),
  (3, 'App\\Models\\User', 28),
  (3, 'App\\Models\\User', 29),
  (3, 'App\\Models\\User', 30),
  (3, 'App\\Models\\User', 31),
  (3, 'App\\Models\\User', 32),
  (3, 'App\\Models\\User', 33),
  (3, 'App\\Models\\User', 34),
  (3, 'App\\Models\\User', 35),
  (3, 'App\\Models\\User', 36),
  (3, 'App\\Models\\User', 37),
  (3, 'App\\Models\\User', 38),
  (3, 'App\\Models\\User', 39),
  (3, 'App\\Models\\User', 40),
  (3, 'App\\Models\\User', 41),
  (3, 'App\\Models\\User', 42),
  (3, 'App\\Models\\User', 43),
  (3, 'App\\Models\\User', 44),
  (3, 'App\\Models\\User', 45),
  (3, 'App\\Models\\User', 46),
  (3, 'App\\Models\\User', 47),
  (3, 'App\\Models\\User', 48),
  (3, 'App\\Models\\User', 49),
  (3, 'App\\Models\\User', 50),
  (3, 'App\\Models\\User', 51),
  (3, 'App\\Models\\User', 52),
  (3, 'App\\Models\\User', 53),
  (3, 'App\\Models\\User', 54);
-- --------------------------------------------------------
  --
  -- Table structure for table `password_resets`
  --
  CREATE TABLE `password_resets` (
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- --------------------------------------------------------
  --
  -- Table structure for table `permissions`
  --
  CREATE TABLE `permissions` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
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
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- --------------------------------------------------------
  --
  -- Table structure for table `projects`
  --
  CREATE TABLE `projects` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Project Title',
    `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Project Description',
    `project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `report` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `poster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `supervisor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `team_members` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_by` bigint(20) UNSIGNED NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `projects`
  --
INSERT INTO
  `projects` (
    `id`,
    `title`,
    `description`,
    `project`,
    `report`,
    `poster`,
    `supervisor_name`,
    `team_members`,
    `created_by`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'naif',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    30,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    2,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'kurtis-jae',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    46,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    3,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'oscar',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    40,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    4,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'toby',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    50,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    5,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'oscar',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    4,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    6,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'dalton',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    52,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    7,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'omri',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    51,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    9,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'tyler-jay',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    39,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    10,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'clark',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    32,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    11,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'torsten',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    36,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    12,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'tanay',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    37,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    13,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'brooklyn',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    15,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    14,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'john-michael',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    29,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    15,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'firaaz',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    43,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    16,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'atapattu',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    42,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    17,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'theo',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    9,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    18,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'aun',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    34,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    19,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'jaydyn',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    6,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    20,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'karandeep',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    31,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    21,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'aleksandar',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    35,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    22,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'jaosha',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    25,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    23,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'ewing',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    11,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    24,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'a-jay',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    38,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    25,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'shyam',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    24,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    26,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'leven',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    21,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    27,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'robbi',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    8,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    28,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'anthony',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    14,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    29,
    ' Lorem ipsum dolor sit amet.',
    'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.',
    '/uploads/projects/dentcare.zip',
    '/uploads/reports/dummy.pdf',
    '/uploads/posters/poster.jpg',
    'preston-jay',
    '\"[\\\"Magnam ducimus vel\\\", \\\"Laborum aut velit il\\\", \\\"Aperiam voluptatibus\\\"]\"',
    49,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    30,
    'Provident qui do eu',
    'Id consectetur moll',
    '/uploads/projects/1648217837_dentcare.zip',
    '/uploads/reports/',
    '/uploads/posters/',
    'Prescott Garza',
    '[\"Blanditiis molestias\",\"Illo sed dolores ips\",\"Aut aut debitis illo\",\"Eu dolore nostrud ea\"]',
    54,
    '2022-03-25 11:17:17',
    '2022-03-25 11:17:17'
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `roles`
  --
  CREATE TABLE `roles` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `roles`
  --
INSERT INTO
  `roles` (
    `id`,
    `name`,
    `guard_name`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    'admin',
    'web',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    2,
    'manager',
    'web',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    3,
    'student',
    'web',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `role_has_permissions`
  --
  CREATE TABLE `role_has_permissions` (
    `permission_id` bigint(20) UNSIGNED NOT NULL,
    `role_id` bigint(20) UNSIGNED NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
-- --------------------------------------------------------
  --
  -- Table structure for table `teams`
  --
  CREATE TABLE `teams` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `teams`
  --
INSERT INTO
  `teams` (
    `id`,
    `name`,
    `description`,
    `image`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    'Sara',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ',
    'uploads/teams/1.jpg',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    2,
    'Sanah',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ',
    'uploads/teams/2.jpg',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    3,
    'Jane',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ',
    'uploads/teams/3.jpg',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    4,
    'Helin',
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ',
    'uploads/teams/4.jpg',
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  );
-- --------------------------------------------------------
  --
  -- Table structure for table `users`
  --
  CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL,
    `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `college_id` bigint(20) UNSIGNED DEFAULT NULL,
    `dept_id` bigint(20) UNSIGNED DEFAULT NULL,
    `is_student` tinyint(1) NOT NULL DEFAULT 1,
    `is_submited` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'is student submit his project',
    `email_verified_at` timestamp NULL DEFAULT NULL,
    `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
    `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
--
  -- Dumping data for table `users`
  --
INSERT INTO
  `users` (
    `id`,
    `name`,
    `username`,
    `email`,
    `college_id`,
    `dept_id`,
    `is_student`,
    `is_submited`,
    `email_verified_at`,
    `password`,
    `remember_token`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    'admin',
    NULL,
    'admin@admin.com',
    NULL,
    NULL,
    0,
    0,
    NULL,
    '$2y$10$4DRQFvQM6WXR5pmPTSGDo.8rEMR6okwf/hz4xOevo4v5dzSlsJ.mm',
    NULL,
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    2,
    'manager',
    NULL,
    'manager@admin.com',
    NULL,
    NULL,
    0,
    0,
    NULL,
    '$2y$10$/SVJkeKV5Ie15SWhBYSI6eoQvuAItmTvYFTrMkcmOeZeNoElmmZDy',
    NULL,
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    3,
    'sara',
    NULL,
    'sara@student.su.edu.krd',
    1,
    7,
    1,
    0,
    NULL,
    '$2y$10$nidKvKcQlNWppRvBdjx/aeb7eYrUokm2jTOY7vOOsoC8007kmEW0u',
    NULL,
    '2022-03-25 06:20:51',
    '2022-03-25 17:26:32'
  ),
  (
    4,
    'ajayraj',
    NULL,
    'ajayraj1@student.su.edu.krd',
    1,
    5,
    1,
    1,
    NULL,
    '$2y$10$/cJOH1TTTSXZqIaNIcLMmObvtPtDH2kw7YTwjuX4URmxGl3mIGSBS',
    NULL,
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:54'
  ),
  (
    5,
    'rayden',
    NULL,
    'rayden2@student.su.edu.krd',
    3,
    23,
    1,
    0,
    NULL,
    '$2y$10$R8M7NTB8WlD2FPHySwP26.jzrrYOO1BIqN7WpERYD7GP8qP1ZNESS',
    NULL,
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    6,
    'sergei',
    NULL,
    'sergei3@student.su.edu.krd',
    1,
    5,
    1,
    1,
    NULL,
    '$2y$10$uHkDbP4D88Zq9qLC90Brx.j1n9TCy8WPVKJngd022e3UNySCYObhC',
    NULL,
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:54'
  ),
  (
    7,
    'eduards',
    NULL,
    'eduards4@student.su.edu.krd',
    3,
    23,
    1,
    0,
    NULL,
    '$2y$10$4.f7vBYWrdT96OX9kBU5guODWood8LVzes1ka16tpMLLU37M/0FQ2',
    NULL,
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:51'
  ),
  (
    8,
    'ayyub',
    NULL,
    'ayyub5@student.su.edu.krd',
    1,
    4,
    1,
    1,
    NULL,
    '$2y$10$mbsisYpt67gdIILfn2/Dc.46.l.o/26ZfxLbUIoD6/bVAkP0qOOk.',
    NULL,
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:54'
  ),
  (
    9,
    'shergo',
    NULL,
    'shergo6@student.su.edu.krd',
    2,
    10,
    1,
    1,
    NULL,
    '$2y$10$8oQyR9gSM3V3Snjgg/2a9uA5V.yl84OAgefeFynVVU.m5ZKXV9kl2',
    NULL,
    '2022-03-25 06:20:51',
    '2022-03-25 06:20:54'
  ),
  (
    10,
    'eugene',
    NULL,
    'eugene7@student.su.edu.krd',
    1,
    1,
    1,
    0,
    NULL,
    '$2y$10$5Air8XY.AElNj8EdJl3Eae1ytM9ytsxR9R9hhn23n80LNiA4RilkS',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    11,
    'aryian',
    NULL,
    'aryian8@student.su.edu.krd',
    2,
    9,
    1,
    1,
    NULL,
    '$2y$10$bTVKi5eacI44XvXTIRjj3uAPny3kO/09.8YSQKBbBtur1P1sBkEKa',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:54'
  ),
  (
    12,
    'thomas',
    NULL,
    'thomas9@student.su.edu.krd',
    2,
    8,
    1,
    0,
    NULL,
    '$2y$10$tFz.cbpPJ94Rb1999VfhleBcUkTUGOArOIjq3Flh9YJftlHO9yRUO',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    13,
    'benjamin',
    NULL,
    'benjamin10@student.su.edu.krd',
    3,
    20,
    1,
    0,
    NULL,
    '$2y$10$DeH9nbcfXUNJbuhnoaHh6O62sLVpV8o8AMCh8qcbUSQEHi0n6.1yS',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    14,
    'fikret',
    NULL,
    'fikret11@student.su.edu.krd',
    1,
    2,
    1,
    1,
    NULL,
    '$2y$10$avDSe6YL1ozmiSgU4/.eZeHRHVwIZmIcm6CxhjEf0BYS3UVRQW0YO',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:54'
  ),
  (
    15,
    'bhaaldeen',
    NULL,
    'bhaaldeen12@student.su.edu.krd',
    3,
    24,
    1,
    1,
    NULL,
    '$2y$10$YrB7k04dQEZyknVyuVeMj..y0tMXj.m756y0cUvtKGFLXjvvSu832',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:54'
  ),
  (
    16,
    'kalum',
    NULL,
    'kalum13@student.su.edu.krd',
    3,
    21,
    1,
    0,
    NULL,
    '$2y$10$utOo7acNk7LBFfwc4Ql3hOSVZhnaO6jnkxJQ9aY9rThuy6SEepyCC',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    17,
    'suilven',
    NULL,
    'suilven14@student.su.edu.krd',
    2,
    8,
    1,
    0,
    NULL,
    '$2y$10$mJtK33osoSs.mLGPcC2FDeUvAdAw6YVGDFjEMpbSg/HOA7sdOl/t.',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    18,
    'danyal',
    NULL,
    'danyal15@student.su.edu.krd',
    2,
    14,
    1,
    0,
    NULL,
    '$2y$10$p23wMAYmGRk69TbLDGXHQuFnej2ii2RtmyFcGtFzMf/ONCe.Ua7sC',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    19,
    'rennie',
    NULL,
    'rennie16@student.su.edu.krd',
    3,
    17,
    1,
    0,
    NULL,
    '$2y$10$Sa9vP3lEp1sfNkAzvUduEezBzT1EMsbX16f81.qKcq9KmvAF6Ig4u',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    20,
    'gallagher',
    NULL,
    'gallagher17@student.su.edu.krd',
    2,
    10,
    1,
    0,
    NULL,
    '$2y$10$4Zwsi.6GMwbnuI78HkyRw.3DIn52ckqzZXTakOMspJlzAyuaMGywy',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    21,
    'hassan',
    NULL,
    'hassan18@student.su.edu.krd',
    3,
    19,
    1,
    1,
    NULL,
    '$2y$10$AH1BPQduaFKot5C7lUO2eOvL5m6xhrJrrGZ2J4Ud0FBLuG8/.ZUiS',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:54'
  ),
  (
    22,
    'cuillin',
    NULL,
    'cuillin19@student.su.edu.krd',
    2,
    8,
    1,
    0,
    NULL,
    '$2y$10$h4uNuoDFLuRhgpZW8ihOWOzqfYn1lYFjlgTea5gFRDKCV3MwQl0/m',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    23,
    'cormak',
    NULL,
    'cormak20@student.su.edu.krd',
    2,
    13,
    1,
    0,
    NULL,
    '$2y$10$a7AhezK4H9ENk6qy1B4mJ.KDjfjMfT6t80A809.aLe7zEfdwDq.0i',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:52'
  ),
  (
    24,
    'faysal',
    NULL,
    'faysal21@student.su.edu.krd',
    1,
    6,
    1,
    1,
    NULL,
    '$2y$10$.anXKqBrrlXK.EFBfaK/eeyLcWsBGywxkA4YpMGaLw.6yQo05q5Zi',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:54'
  ),
  (
    25,
    'blyth',
    NULL,
    'blyth22@student.su.edu.krd',
    3,
    17,
    1,
    1,
    NULL,
    '$2y$10$D5/1aM.3xPKH2E24yKj.yeE2Wd8daNWcQzWFSaDO2oSdvcWen1dWa',
    NULL,
    '2022-03-25 06:20:52',
    '2022-03-25 06:20:54'
  ),
  (
    26,
    'alastair',
    NULL,
    'alastair23@student.su.edu.krd',
    1,
    3,
    1,
    0,
    NULL,
    '$2y$10$aM2PWmjK4DcORKniHmUUfelHatdZOWTPeb/HbMnC1RgMveAL3KS4G',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:53'
  ),
  (
    27,
    'wojciech',
    NULL,
    'wojciech24@student.su.edu.krd',
    3,
    22,
    1,
    0,
    NULL,
    '$2y$10$wILDL8a7WQ9.uYF5aUtK2uoFw8BpiPqCmiC2wneDBs/guKFWJ2o.y',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:53'
  ),
  (
    28,
    'alekzander',
    NULL,
    'alekzander25@student.su.edu.krd',
    3,
    18,
    1,
    0,
    NULL,
    '$2y$10$FK80jk7Pubycg5C.eeT3ouTJRlwcle7g4su1s1epba9rVKS8WZgEG',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:53'
  ),
  (
    29,
    'muneeb',
    NULL,
    'muneeb26@student.su.edu.krd',
    1,
    3,
    1,
    1,
    NULL,
    '$2y$10$A3XrDKzBG29zI1SBntUinu.NCkixe4ERWE0adyZ5W8RyMS0rqkRBq',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    30,
    'rhuairidh',
    NULL,
    'rhuairidh27@student.su.edu.krd',
    2,
    9,
    1,
    1,
    NULL,
    '$2y$10$Qw/Oild4wPNQvLGGIg/xV.6tFZVBl5TLtpI27JAHOxzI9E9QFztey',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    31,
    'kamran',
    NULL,
    'kamran28@student.su.edu.krd',
    1,
    3,
    1,
    1,
    NULL,
    '$2y$10$3VDwWtQkaYv991WpxdpErOEmh7mnbFluJvG2vY.mFuC4QJM.FAAfi',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    32,
    'leithen',
    NULL,
    'leithen29@student.su.edu.krd',
    1,
    1,
    1,
    1,
    NULL,
    '$2y$10$KOdXWNwil8xbCpuQbxJE3.gXyiCCLMYg0h/UWhTp8F0Vg4Et1PhjW',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    33,
    'jon',
    NULL,
    'jon30@student.su.edu.krd',
    3,
    25,
    1,
    0,
    NULL,
    '$2y$10$S3RuS8VSQ02GuRR2gc3dJOpzQWoHP8ihq9gFOTU/t/y5ENyp5ZhUK',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:53'
  ),
  (
    34,
    'calvin',
    NULL,
    'calvin31@student.su.edu.krd',
    1,
    5,
    1,
    1,
    NULL,
    '$2y$10$Ov82Rv8lQJ91X0Ve2tdXUueIM8uT3mBuW6IKfrAVv0M4vH1WcYq9K',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    35,
    'dustin',
    NULL,
    'dustin32@student.su.edu.krd',
    3,
    23,
    1,
    1,
    NULL,
    '$2y$10$fPDj9XQFiZTk6gHsjoUw0uHbdgsiWJAJH2gSHgUXa.Wx2K0OKEEFe',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    36,
    'carlo',
    NULL,
    'carlo33@student.su.edu.krd',
    3,
    21,
    1,
    1,
    NULL,
    '$2y$10$.FNhuYytlaJVpfIIbbanFuc76nyJNRnyXbwev.PAiYU/ZJo4izorK',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    37,
    'abel',
    NULL,
    'abel34@student.su.edu.krd',
    3,
    24,
    1,
    1,
    NULL,
    '$2y$10$szrpz1qPDjyuvoPiw.70p.zB11sJBK.g.UoSzwWa.HNL.8Hbmxcn2',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    38,
    'hashim',
    NULL,
    'hashim35@student.su.edu.krd',
    1,
    5,
    1,
    1,
    NULL,
    '$2y$10$PBOmdT/SMeWiYULlXHW8v.6AhlIFpQtoC/okM4hvQWnBa7LJrKE0G',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    39,
    'sethu',
    NULL,
    'sethu36@student.su.edu.krd',
    1,
    6,
    1,
    1,
    NULL,
    '$2y$10$yzn6kje9od8rMEGYOBkvmuqPKDF6zV5eYKUeU813MIhRbsXzcxzyW',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    40,
    'creag',
    NULL,
    'creag37@student.su.edu.krd',
    1,
    5,
    1,
    1,
    NULL,
    '$2y$10$mAkmdOAKol9lYQVpKEK4U.E4Otymg243zKvGlB14QaAjLNCfPkUHK',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:54'
  ),
  (
    41,
    'mitch',
    NULL,
    'mitch38@student.su.edu.krd',
    1,
    2,
    1,
    0,
    NULL,
    '$2y$10$iRJ/EF0LKEFTXRwbKUHESegmaUujZD1aNadeS6ZcWprcSUGiQTPge',
    NULL,
    '2022-03-25 06:20:53',
    '2022-03-25 06:20:53'
  ),
  (
    42,
    'renars',
    NULL,
    'renars39@student.su.edu.krd',
    3,
    21,
    1,
    1,
    NULL,
    '$2y$10$TOA2k86FgzMXSCD1dIveIejYUZ708KdWw.2DQ8zvYwhqw//bwbPoO',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    43,
    'giacomo',
    NULL,
    'giacomo40@student.su.edu.krd',
    1,
    2,
    1,
    1,
    NULL,
    '$2y$10$UVlDfodyNWnqFA/s.Gje.epd7SmplA81N230RmECV4z2.gcM/Wrki',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    44,
    'conar',
    NULL,
    'conar41@student.su.edu.krd',
    3,
    22,
    1,
    0,
    NULL,
    '$2y$10$7c6ZJSBlTdHJrExz0b5lBe8ME0wBOYnAgTba9XZQL4cLaPPor9.rq',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    45,
    'kristoffer',
    NULL,
    'kristoffer42@student.su.edu.krd',
    2,
    14,
    1,
    0,
    NULL,
    '$2y$10$bjTvUv/ibVo.w6ul3k7vSu6xx1j8O0HWX8fGuEEXK6ycTuGgmTMHe',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    46,
    'coby',
    NULL,
    'coby43@student.su.edu.krd',
    3,
    22,
    1,
    1,
    NULL,
    '$2y$10$fx9OO7mMNfgQR7CKCTtBFuJhVoJxIds3wPwToELqWMgGKDCTq8vRW',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    47,
    'wabuya',
    NULL,
    'wabuya44@student.su.edu.krd',
    3,
    23,
    1,
    0,
    NULL,
    '$2y$10$F/eo1t9gx2ZEnRM3i7xjTeEuho.rrmgbvat.E5z7.mYSBD0vBPT36',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    48,
    'stephenjunior',
    NULL,
    'stephenjunior45@student.su.edu.krd',
    3,
    21,
    1,
    0,
    NULL,
    '$2y$10$GspfsyHXQbTYQyFffW3Z/OOMkkE0yg4p94HPCi/g.GeP7VSYRKZ56',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    49,
    'brydon',
    NULL,
    'brydon46@student.su.edu.krd',
    1,
    5,
    1,
    1,
    NULL,
    '$2y$10$1uezQVGOSbiw3X6i5Rt8aeNJubKFvUI07a36theztu2K1WY3reseC',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    50,
    'gallagher',
    NULL,
    'gallagher47@student.su.edu.krd',
    1,
    7,
    1,
    1,
    NULL,
    '$2y$10$vCrwEE.h4xl4fwjK9Uqa9uhdjNQyHxxilQIOWgA72x/T6b0N3EvFK',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    51,
    'anay',
    NULL,
    'anay48@student.su.edu.krd',
    3,
    24,
    1,
    1,
    NULL,
    '$2y$10$YW.1T8WS1sMjEB5cb6YsAe2oeGQW0zrHn0It91DLi/rcZCIc.NMy6',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    52,
    'tristain',
    NULL,
    'tristain49@student.su.edu.krd',
    1,
    2,
    1,
    1,
    NULL,
    '$2y$10$Ag/O6FL1D6WJEErpz.a6L.DPOxXzj5x4rDhPzDtGrGSsKyr4YyVOS',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    53,
    'stefano',
    NULL,
    'stefano50@student.su.edu.krd',
    3,
    22,
    1,
    0,
    NULL,
    '$2y$10$n5qFfqbV6Bhf56JFnRIBTuQCR.HuNkWba67hCHnp3QZy2ZEmH.7dG',
    NULL,
    '2022-03-25 06:20:54',
    '2022-03-25 06:20:54'
  ),
  (
    54,
    'jane',
    NULL,
    'jane@student.su.edu.krd',
    1,
    6,
    1,
    1,
    NULL,
    '$2y$10$fw.OksVV/pkUdbsBhx4FMufeO3wUbl5.ZmpF0EHJmU.CWA0/nnD2W',
    NULL,
    '2022-03-25 11:16:47',
    '2022-03-25 11:17:17'
  );
--
  -- Indexes for dumped tables
  --
  --
  -- Indexes for table `announcements`
  --
ALTER TABLE
  `announcements`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `banners`
  --
ALTER TABLE
  `banners`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `colleges`
  --
ALTER TABLE
  `colleges`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `departments`
  --
ALTER TABLE
  `departments`
ADD
  PRIMARY KEY (`id`),
ADD
  KEY `departments_college_id_foreign` (`college_id`);
--
  -- Indexes for table `failed_jobs`
  --
ALTER TABLE
  `failed_jobs`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);
--
  -- Indexes for table `grants`
  --
ALTER TABLE
  `grants`
ADD
  PRIMARY KEY (`id`),
ADD
  KEY `grants_college_id_foreign` (`college_id`),
ADD
  KEY `grants_dept_id_foreign` (`dept_id`);
--
  -- Indexes for table `migrations`
  --
ALTER TABLE
  `migrations`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `model_has_permissions`
  --
ALTER TABLE
  `model_has_permissions`
ADD
  PRIMARY KEY (`permission_id`, `model_id`, `model_type`),
ADD
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`, `model_type`);
--
  -- Indexes for table `model_has_roles`
  --
ALTER TABLE
  `model_has_roles`
ADD
  PRIMARY KEY (`role_id`, `model_id`, `model_type`),
ADD
  KEY `model_has_roles_model_id_model_type_index` (`model_id`, `model_type`);
--
  -- Indexes for table `password_resets`
  --
ALTER TABLE
  `password_resets`
ADD
  KEY `password_resets_email_index` (`email`);
--
  -- Indexes for table `permissions`
  --
ALTER TABLE
  `permissions`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`, `guard_name`);
--
  -- Indexes for table `personal_access_tokens`
  --
ALTER TABLE
  `personal_access_tokens`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
ADD
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`, `tokenable_id`);
--
  -- Indexes for table `projects`
  --
ALTER TABLE
  `projects`
ADD
  PRIMARY KEY (`id`),
ADD
  KEY `projects_created_by_foreign` (`created_by`);
--
  -- Indexes for table `roles`
  --
ALTER TABLE
  `roles`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `roles_name_guard_name_unique` (`name`, `guard_name`);
--
  -- Indexes for table `role_has_permissions`
  --
ALTER TABLE
  `role_has_permissions`
ADD
  PRIMARY KEY (`permission_id`, `role_id`),
ADD
  KEY `role_has_permissions_role_id_foreign` (`role_id`);
--
  -- Indexes for table `teams`
  --
ALTER TABLE
  `teams`
ADD
  PRIMARY KEY (`id`);
--
  -- Indexes for table `users`
  --
ALTER TABLE
  `users`
ADD
  PRIMARY KEY (`id`),
ADD
  UNIQUE KEY `users_email_unique` (`email`),
ADD
  KEY `users_college_id_foreign` (`college_id`),
ADD
  KEY `users_dept_id_foreign` (`dept_id`);
--
  -- AUTO_INCREMENT for dumped tables
  --
  --
  -- AUTO_INCREMENT for table `announcements`
  --
ALTER TABLE
  `announcements`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;
--
  -- AUTO_INCREMENT for table `banners`
  --
ALTER TABLE
  `banners`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;
--
  -- AUTO_INCREMENT for table `colleges`
  --
ALTER TABLE
  `colleges`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;
--
  -- AUTO_INCREMENT for table `departments`
  --
ALTER TABLE
  `departments`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 27;
--
  -- AUTO_INCREMENT for table `failed_jobs`
  --
ALTER TABLE
  `failed_jobs`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
  -- AUTO_INCREMENT for table `grants`
  --
ALTER TABLE
  `grants`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
--
  -- AUTO_INCREMENT for table `migrations`
  --
ALTER TABLE
  `migrations`
MODIFY
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 13;
--
  -- AUTO_INCREMENT for table `permissions`
  --
ALTER TABLE
  `permissions`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
  -- AUTO_INCREMENT for table `personal_access_tokens`
  --
ALTER TABLE
  `personal_access_tokens`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
  -- AUTO_INCREMENT for table `projects`
  --
ALTER TABLE
  `projects`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 31;
--
  -- AUTO_INCREMENT for table `roles`
  --
ALTER TABLE
  `roles`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;
--
  -- AUTO_INCREMENT for table `teams`
  --
ALTER TABLE
  `teams`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 5;
--
  -- AUTO_INCREMENT for table `users`
  --
ALTER TABLE
  `users`
MODIFY
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 55;
--
  -- Constraints for dumped tables
  --
  --
  -- Constraints for table `departments`
  --
ALTER TABLE
  `departments`
ADD
  CONSTRAINT `departments_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE
SET
  NULL ON UPDATE CASCADE;
--
  -- Constraints for table `grants`
  --
ALTER TABLE
  `grants`
ADD
  CONSTRAINT `grants_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`),
ADD
  CONSTRAINT `grants_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`);
--
  -- Constraints for table `model_has_permissions`
  --
ALTER TABLE
  `model_has_permissions`
ADD
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;
--
  -- Constraints for table `model_has_roles`
  --
ALTER TABLE
  `model_has_roles`
ADD
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
--
  -- Constraints for table `projects`
  --
ALTER TABLE
  `projects`
ADD
  CONSTRAINT `projects_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;
--
  -- Constraints for table `role_has_permissions`
  --
ALTER TABLE
  `role_has_permissions`
ADD
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
--
  -- Constraints for table `users`
  --
ALTER TABLE
  `users`
ADD
  CONSTRAINT `users_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`),
ADD
  CONSTRAINT `users_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`);
COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;