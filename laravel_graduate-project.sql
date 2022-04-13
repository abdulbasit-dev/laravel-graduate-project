-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 06:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `description`, `image`, `attachment`, `created_at`, `updated_at`) VALUES
(1, 'دووهەمین کۆنفڕانسی بەخشینی گرانت بۆ باشترین پڕۆژەی دەرچوون و ئایدیا', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', 'uploads/announcements/confrance.jpg', 'uploads/announcements/docker.pdf', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(2, '2 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(3, '3 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(4, '4 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(5, '5 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(6, '6 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(7, '7 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(8, '8 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-11 01:29:15', '2022-04-11 01:29:15');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Explore Students Projects', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/1.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(2, 'Find Out The best Ranked One', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/2.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(3, 'Get Idea From Others Project', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/3.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'College of Science', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(2, 'College of Engineering ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(3, 'College of Agriculture Engineering Sciences', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(4, 'College of Education ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(5, 'College of Arts ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(6, 'College of Languages ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(7, 'College of Administration and Economics', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(8, 'College of Law', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(9, 'College of Basic Education ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(10, 'College of Physical Education & Sport Sciences', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(11, 'College of Fine Arts ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(12, 'College of Islamic Sciences ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(13, 'College of Education-Makhmour ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(14, 'College of Education-Shaqlawa ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(15, 'College of Political Sciences', '2022-04-11 01:29:15', '2022-04-11 01:29:15');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `college_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Department of Biology', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(2, 1, 'Department of Geology', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(3, 1, 'Department of Chemistry', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(4, 1, 'Department of Computer Science', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(5, 1, 'Department of Environmental Science', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(6, 1, 'Department of Mathematics', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(7, 1, 'Department of Physics', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(8, 2, 'Department of Architecture Engineering', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(9, 2, 'Department of Civil Engineering', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(10, 2, 'Department of Software and Informatics Engineering', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(11, 2, 'Department of Electrical Engineering', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(12, 2, 'Department of Geomatics (Surveying) Engineering', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(13, 2, 'Department of Mechanical Engineering', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(14, 2, 'Department of Water Resources Engineering', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(15, 2, 'Department of Chemical and Petrochemical Engineering', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(16, 2, 'Department of Aviation Engineering ', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(17, 3, 'Department of Animal Resources', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(18, 3, 'Department of Soil and water', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(19, 3, 'Department of Food technology', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(20, 3, 'Department of Forestry', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(21, 3, 'Department of Plant Protection', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(22, 3, 'Department of Horticulture', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(23, 3, 'Department of Field crops', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(24, 3, 'Department of Fish Resources and Aquatic Animals', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(25, 4, 'Department of Biology', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(26, 4, 'Department of Chemistry', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(27, 4, 'Department of Physics', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(28, 4, 'Department of Mathematics', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(29, 4, 'Department of English', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(30, 4, 'Department of Arabic', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(31, 4, 'Department of Kurdish', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(32, 4, 'Department of Psychology and Educational Sciences', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(33, 4, 'Department of Special Education', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(34, 4, 'Department of Syriac', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(35, 5, 'Department of Archaeology', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(36, 5, 'Department of Geography', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(37, 5, 'Department of History', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(38, 5, 'Department of Media', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(39, 5, 'Department of Philosophy', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(40, 5, 'Department of Psychology', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(41, 5, 'Department of Social Work', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(42, 5, 'Department of Sociology', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(43, 6, 'Department of English', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(44, 6, 'Department of German', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(45, 6, 'Department of French', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(46, 6, 'Department of Kurdish', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(47, 6, 'Department of Arabic', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(48, 6, 'Department of Turkish', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(49, 6, 'Department of Persian', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(50, 6, 'Department of Chinese', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(51, 7, 'Department of Accounting', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(52, 7, 'Department of Administration', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(53, 7, 'Department of Economics', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(54, 7, 'Department of Finance and Banking', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(55, 7, 'Department of Statistics', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(56, 7, 'Department of Tourism Organizations Administration', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(57, 8, 'Department of Law', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(58, 9, 'Department of General Science', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(59, 9, 'Department of Mathematics', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(60, 9, 'Department of English Language', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(61, 9, 'Department of Kurdish Language', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(62, 9, 'Department of Social Sciences', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(63, 9, 'Department of Kindergarten', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(64, 9, 'Department of Arabic', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(65, 10, 'Department of Physical Education & Sport Sciences', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(66, 11, 'Department of Music Arts', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(67, 11, 'Department of Cinema and Theater Arts', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(68, 11, 'Department of Plastic Arts', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(69, 12, 'Department of Religious Education', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(70, 12, 'Department of Islamic studies', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(71, 12, 'Department of Principle of religion', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(72, 12, 'Department of Sharia', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(73, 13, 'Department of Arabic', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(74, 13, 'Department of Kurdish', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(75, 14, 'Department of Biology', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(76, 14, 'Department of Physics', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(77, 14, 'Department of Arabic', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(78, 14, 'Department of Kurdish', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(79, 14, 'Department of Physical Education', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(80, 14, 'Department of English', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(81, 15, 'Department of Political Systems and Public Policy', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(82, 15, 'Department of International Relations & Diplomacy', '2022-04-11 01:29:15', '2022-04-11 01:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, '4th class Project  Sample - writing Desigen.docx', 'uploads/experts/4th class Project  Sample - writing Desigen.docx', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(2, '4th student project.pptx', 'uploads/experts/4th student project.pptx', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(3, 'Grant Project', 'uploads/experts/grant-project.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(4, 'Grant Idea', 'uploads/experts/grant-idea.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15');

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
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supervisor_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_members` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_01_04_122545_create_permission_tables', 1),
(5, '2022_01_05_134244_create_colleges_table', 1),
(6, '2022_01_05_134309_create_departments_table', 1),
(7, '2022_02_02_000000_create_users_table', 1),
(8, '2022_02_21_051650_create_projects_table', 1),
(9, '2022_03_19_211154_create_banners_table', 1),
(10, '2022_03_19_211245_create_teams_table', 1),
(11, '2022_03_24_225337_create_announcements_table', 1),
(12, '2022_03_26_185618_create_grants_table', 1),
(13, '2022_03_30_031358_create_forms_table', 1),
(14, '2022_04_08_081530_create_experts_table', 1),
(15, '2022_04_08_103523_create_project_announcements_table', 1),
(16, '2022_04_10_123950_create_ideas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 8),
(5, 'App\\Models\\User', 9),
(5, 'App\\Models\\User', 10),
(5, 'App\\Models\\User', 11),
(5, 'App\\Models\\User', 12),
(5, 'App\\Models\\User', 13),
(5, 'App\\Models\\User', 14),
(5, 'App\\Models\\User', 15),
(5, 'App\\Models\\User', 16),
(5, 'App\\Models\\User', 17),
(5, 'App\\Models\\User', 18),
(5, 'App\\Models\\User', 19),
(5, 'App\\Models\\User', 20),
(5, 'App\\Models\\User', 21),
(5, 'App\\Models\\User', 22),
(5, 'App\\Models\\User', 23),
(5, 'App\\Models\\User', 24),
(5, 'App\\Models\\User', 25),
(5, 'App\\Models\\User', 26),
(5, 'App\\Models\\User', 27),
(5, 'App\\Models\\User', 28),
(5, 'App\\Models\\User', 29),
(5, 'App\\Models\\User', 30),
(5, 'App\\Models\\User', 31),
(5, 'App\\Models\\User', 32),
(5, 'App\\Models\\User', 33),
(5, 'App\\Models\\User', 34),
(5, 'App\\Models\\User', 35),
(5, 'App\\Models\\User', 36),
(5, 'App\\Models\\User', 37),
(5, 'App\\Models\\User', 38),
(5, 'App\\Models\\User', 39),
(5, 'App\\Models\\User', 40),
(5, 'App\\Models\\User', 41),
(5, 'App\\Models\\User', 42),
(5, 'App\\Models\\User', 43),
(5, 'App\\Models\\User', 44),
(5, 'App\\Models\\User', 45),
(5, 'App\\Models\\User', 46),
(5, 'App\\Models\\User', 47),
(5, 'App\\Models\\User', 48),
(5, 'App\\Models\\User', 49),
(5, 'App\\Models\\User', 50),
(5, 'App\\Models\\User', 51),
(5, 'App\\Models\\User', 52),
(5, 'App\\Models\\User', 53),
(5, 'App\\Models\\User', 54),
(5, 'App\\Models\\User', 55),
(5, 'App\\Models\\User', 56);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `project`, `report`, `poster`, `supervisor_name`, `team_members`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'lorem ut aliquam iaculis, lacus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'johnson', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 51, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(2, 'diam at pretium aliquet, metus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'reece', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 45, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(3, 'lobortis, nisi nibh lacinia orci,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'jordon', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 13, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(4, 'Duis at lacus. Quisque purus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'boyd', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 38, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(5, 'Quisque fringilla euismod enim. Etiam', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'arrham', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 47, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(6, 'enim. Mauris quis turpis vitae', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'ellisandro', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 30, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(7, 'In condimentum. Donec at arcu.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'isaac', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 22, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(8, 'semper pretium neque. Morbi quis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'jahid', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 41, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(9, 'dictum cursus. Nunc mauris elit,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'ren', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 36, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(10, 'placerat. Cras dictum ultricies ligula.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'rehan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 31, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(11, 'est. Nunc ullamcorper, velit in', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'luciano', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 7, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(12, 'vitae, posuere at, velit. Cras', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'selasi', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 11, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(13, 'Nunc ullamcorper, velit in aliquet', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'bryson', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 25, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(14, 'ut aliquam iaculis, lacus pede', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'jerry', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 52, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(15, 'eu tellus. Phasellus elit pede,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'brandon-lee', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 26, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(16, 'Donec est. Nunc ullamcorper, velit', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'ardeshir', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 5, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(17, 'elit, pretium et, rutrum non,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'davie', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 40, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(18, 'vehicula. Pellentesque tincidunt tempus risus.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'arved', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 35, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(19, 'Nullam suscipit, est ac facilisis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'jarno', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 18, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(20, 'enim. Suspendisse aliquet, sem ut', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'joynul', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 15, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(21, 'risus. Nunc ac sem ut', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'shayaan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 21, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(22, 'eget magna. Suspendisse tristique neque', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'johannes', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 43, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(23, 'vitae erat vel pede blandit', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'shiloh', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 56, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(24, 'nisl sem, consequat nec, mollis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'geordie', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 34, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(25, 'vitae odio sagittis semper. Nam', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'tisloh', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 6, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(26, 'erat. Sed nunc est, mollis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'finnlay', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 49, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(27, 'vitae purus gravida sagittis. Duis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'kajally', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 37, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(28, 'nonummy ac, feugiat non, lobortis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'brodi', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 48, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(29, 'faucibus. Morbi vehicula. Pellentesque tincidunt', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'teos', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 8, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(30, 'ut odio vel est tempor', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'sudais', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 10, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(31, 'augue eu tellus. Phasellus elit', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'kaeden', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 23, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(32, 'iaculis odio. Nam interdum enim', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'eamon', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 46, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(33, 'non dui nec urna suscipit', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'olie', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 20, '2022-04-11 01:29:19', '2022-04-11 01:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `project_announcements`
--

CREATE TABLE `project_announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_announcements`
--

INSERT INTO `project_announcements` (`id`, `title`, `college_id`, `dept_id`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 10, 65, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 14, 75, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 6, 49, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 4, 25, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 13, 73, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 14, 76, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 11, 66, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 4, 34, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 8, 57, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 7, 51, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(11, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 14, 78, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 10, 65, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 4, 28, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(14, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 10, 65, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(15, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 10, 65, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(16, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 7, 55, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 10, 65, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 13, 73, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(19, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 11, 66, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 5, 37, '2022-04-11 01:29:15', '2022-04-11 01:29:15');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(2, 'team', 'web', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(3, 'teacher', 'web', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(4, 'manager', 'web', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(5, 'student', 'web', '2022-04-11 01:29:15', '2022-04-11 01:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dr.Nabil', 'nabil.fakhre@su.edu.krd', 'uploads/teams/dr.nabil.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(2, 'Dr.Haider', 'haider.haddad@su.edu.krd', 'uploads/teams/dr.haider.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(3, 'Sanah', 'sccs02417@student.su.edu.krd', 'uploads/teams/1.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(4, 'Sozan', 'sccs10917@student.su.edu.krd', 'uploads/teams/2.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(5, 'Bushra', 'sccs11517@student.su.edu.krd', 'uploads/teams/3.jpg', '2022-04-11 01:29:15', '2022-04-11 01:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_student` tinyint(1) NOT NULL DEFAULT 1,
  `is_submited` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'is student submit his project',
  `is_submited_idea` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'is student submit his idea',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `college_id`, `dept_id`, `is_student`, `is_submited`, `is_submited_idea`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dr.haider', 'haider.haddad@su.edu.krd', NULL, NULL, 0, 0, 0, NULL, '$2y$10$YGM73PR4sRAVBJ1yXtg.cuscYzqQSojyY19jUZNvlyGDiTfX5EhJO', NULL, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(2, 'admin', 'admin@admin.com', NULL, NULL, 0, 0, 0, NULL, '$2y$10$wcZfeZgOn2SFnLPYjypQ0.VQBIguCLMB/BK2nnRh9DKfUJdCs5CBa', NULL, '2022-04-11 01:29:15', '2022-04-11 01:29:15'),
(3, 'dr.nabil', 'nabil.fakhre@su.edu.krd', NULL, NULL, 0, 0, 0, NULL, '$2y$10$6NpABTs2JNCnICns.QoGN.29CFWmyo2NQ5Uzr3L/W.vpyaU3m25K6', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:16'),
(4, 'sanah', 'sccs02417@student.su.edu.krd', 1, 7, 1, 0, 0, NULL, '$2y$10$S4xFp1R5PdEluwFxbMIH9OJK39kUhSEgCYs.0vfwSCoMRb0V2g/lC', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:16'),
(5, 'sozan', 'sccs10917@student.su.edu.krd', 1, 7, 1, 1, 0, NULL, '$2y$10$GO.lcwGK23N3TEGreL1M6unN90uDsjuGJQ.2DL6knU.bA9v3pDJLS', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:19'),
(6, 'bushra', 'sccs11517@student.su.edu.krd', 1, 7, 1, 1, 0, NULL, '$2y$10$tHTvV2M09BN1CrlGydSz.eJ1Bx3BCJckeGjKrZchb48eHdv6zj4Re', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:19'),
(7, 'ajayraj', 'ajayraj1@student.su.edu.krd', 15, 81, 1, 1, 0, NULL, '$2y$10$GN/iPTq8540s6WftqFtdbueS62XZOBJjfzaauBiZiCA6MGVm/jGuq', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:19'),
(8, 'okeoghene', 'okeoghene2@student.su.edu.krd', 9, 64, 1, 1, 0, NULL, '$2y$10$dkRoRls4VGAKXPH9iRP/quReRSCR6etVLM/eEkIsT5/1cx6tssoK2', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:19'),
(9, 'nial', 'nial3@student.su.edu.krd', 6, 47, 1, 0, 0, NULL, '$2y$10$I72XMN1gFwxnwAY8bgNjn.qqB6RUwy3k.1vk46Bb6oERxEF.CTgoW', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:16'),
(10, 'szymon', 'szymon4@student.su.edu.krd', 3, 17, 1, 1, 0, NULL, '$2y$10$.yVKg3DxXxaLoCwYr26c7Ocp8FH5rjj7hCUtDtc3XxkVMUjb71ni2', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:19'),
(11, 'mccaulley', 'mccaulley5@student.su.edu.krd', 3, 17, 1, 1, 0, NULL, '$2y$10$nBhIDPMSvbw9BHrFHTzOu.iBoDKcAZa1.Waq75A9TaaAHbVRDHsOa', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:19'),
(12, 'daksh', 'daksh6@student.su.edu.krd', 13, 74, 1, 0, 0, NULL, '$2y$10$8fZDRwxIB1AgqSpFHj1bNu2F6Eu.BxSeZw5y2J1E0Bu1szDUWghTy', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:16'),
(13, 'sunny', 'sunny7@student.su.edu.krd', 15, 82, 1, 1, 0, NULL, '$2y$10$j5G0JH6pmyKhLA4smuoVWu5lrLW4EEuiXVY1CDS2guupHMKiwYjza', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:19'),
(14, 'kyle-derek', 'kyle-derek8@student.su.edu.krd', 9, 62, 1, 0, 0, NULL, '$2y$10$5jmdQbLuxYGKjpfj33nOO.ZG6AEReBFr10AENAbE.5VNewJ.UeWAa', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:16'),
(15, 'corey', 'corey9@student.su.edu.krd', 3, 22, 1, 1, 0, NULL, '$2y$10$ISrtukKpP5zXdOZpT5uDy.I9oyZB/GqPYoH5eISOJECra8qN6zDn.', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:19'),
(16, 'daegan', 'daegan10@student.su.edu.krd', 3, 24, 1, 0, 0, NULL, '$2y$10$PLUMNr5YHw0VIdbdVDy.w.Os5vMr5v9i0/BjZ.zzBqO9QuLGVZnIe', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:16'),
(17, 'jaosha', 'jaosha11@student.su.edu.krd', 5, 42, 1, 0, 0, NULL, '$2y$10$AIEhWNwG1V.ucyohSqxpiOAzcz1Y6yUyyrbBJsQFSnPm8DYdN.kFK', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:16'),
(18, 'travis', 'travis12@student.su.edu.krd', 15, 81, 1, 1, 0, NULL, '$2y$10$6iofB9xc.fnm1nPE4jZLAOkbpbvTd7LaMuuR58PxLLAaQJcxYGFCK', NULL, '2022-04-11 01:29:16', '2022-04-11 01:29:19'),
(19, 'jubin', 'jubin13@student.su.edu.krd', 12, 70, 1, 0, 0, NULL, '$2y$10$/T6YfR94vqJa6YwKx45txelSyW9p0l0emMSHAFcBExm6.cfM7JpTi', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:17'),
(20, 'moshy', 'moshy14@student.su.edu.krd', 6, 49, 1, 1, 0, NULL, '$2y$10$6kGuGYELUtLxJLvqU2XqK.lMl.0odfU/T8QWmoTMw.BbFu7UWKWyu', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:19'),
(21, 'oisin', 'oisin15@student.su.edu.krd', 13, 74, 1, 1, 0, NULL, '$2y$10$QlCANCs8d9RjJo8NpQ.Lv.MHQBg9sVjAyxqq87cOk.XkCxhCMvu/2', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:19'),
(22, 'coby', 'coby16@student.su.edu.krd', 8, 57, 1, 1, 0, NULL, '$2y$10$XB5FTtZHqEqsa98tJv/RjO4SCcbRetceVkMAioZLx74NVeheHcXwq', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:19'),
(23, 'aristomenis', 'aristomenis17@student.su.edu.krd', 12, 70, 1, 1, 0, NULL, '$2y$10$D9lpdHv2ogzzntzJsMVcU.f2If2wtJ398kHRvvl3DvjDz/mlvKMUm', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:19'),
(24, 'hamza', 'hamza18@student.su.edu.krd', 11, 67, 1, 0, 0, NULL, '$2y$10$3M32ktasQwBeBIs.2f2/k.YxLTwT54tR2e4uqUckcizAuyAqEo2Ta', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:17'),
(25, 'uzair', 'uzair19@student.su.edu.krd', 5, 39, 1, 1, 0, NULL, '$2y$10$zz8SZ7s70lcTAYKdrbQjXOYF0ij79WEbNWY/92dQ/l30V5latgkrS', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:19'),
(26, 'spencer', 'spencer20@student.su.edu.krd', 13, 73, 1, 1, 0, NULL, '$2y$10$YkuBy5k6ELT.9uMzyc4EFu.4NOPqEkvsowsmMAxY/mubdIy1Xo2zK', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:19'),
(27, 'andy', 'andy21@student.su.edu.krd', 5, 37, 1, 0, 0, NULL, '$2y$10$ktF5h2/r6qrM5ihUiTYOZub6d0CHmt4epQOy4maD.22cNKknmLM5.', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:17'),
(28, 'dhani', 'dhani22@student.su.edu.krd', 9, 63, 1, 0, 0, NULL, '$2y$10$NUtyRjlgZmhbmRZKETceAOIvcGLzTE9opcEM5l.XEl7dbROq1MkfK', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:17'),
(29, 'meftah', 'meftah23@student.su.edu.krd', 11, 66, 1, 0, 0, NULL, '$2y$10$Z.ckiOPswyp8YW2T1Yq59eHYN9.8aIj6AkBLJ0PH7e81bhw1KSJG6', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:17'),
(30, 'euan', 'euan24@student.su.edu.krd', 15, 82, 1, 1, 0, NULL, '$2y$10$.aXs0xUhXtjKd9g5I4kCoOg/syCfzDd89zBjE2irBgL7QhQkQtuzC', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:19'),
(31, 'connar', 'connar25@student.su.edu.krd', 6, 49, 1, 1, 0, NULL, '$2y$10$6dO0aKfNQZfKoqo39bOoVuM9UeXCMaXDj4cJqsh2fLak312IJFmQW', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:19'),
(32, 'aaren', 'aaren26@student.su.edu.krd', 6, 43, 1, 0, 0, NULL, '$2y$10$r1p3jQtvtjNbr1PmehSpBeBnimNAb7vI1KmXTZabNYBzpUlKpeD3S', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:17'),
(33, 'iain', 'iain27@student.su.edu.krd', 4, 29, 1, 0, 0, NULL, '$2y$10$PHr50n/KsD0mLAZ.Vvd6QegRyyhFaFrutpgJmBd7/V.on.PkzoSpW', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:17'),
(34, 'troy', 'troy28@student.su.edu.krd', 4, 26, 1, 1, 0, NULL, '$2y$10$CJ8A7ThcsSTOPIHYWZBjbO0XuEx.vncC4dew0Z.L//RPiNQzAcDn2', NULL, '2022-04-11 01:29:17', '2022-04-11 01:29:19'),
(35, 'bryan', 'bryan29@student.su.edu.krd', 4, 32, 1, 1, 0, NULL, '$2y$10$VXYdXTOoV39YamdSNT0sqeF6lhCpOJZM1W19ajPoQbtHmysHATF7C', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(36, 'dion', 'dion30@student.su.edu.krd', 10, 65, 1, 1, 0, NULL, '$2y$10$xiN.ol4gISwrF/SV.DP3BufIlukuPU81Yt1iiwze/6ny3gcnwdSBK', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(37, 'doire', 'doire31@student.su.edu.krd', 1, 5, 1, 1, 0, NULL, '$2y$10$hBzdsuy/XRCFMml.HPrSFOf9QDa68Z03qQwdCoPVSVnUokhG97XoG', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(38, 'carson', 'carson32@student.su.edu.krd', 2, 10, 1, 1, 0, NULL, '$2y$10$uDS.DwOuuLnClySGd8QHg.b83Yxyn1gtUu.dS3ZcOZX.49rDSFsMG', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(39, 'zack', 'zack33@student.su.edu.krd', 10, 65, 1, 0, 0, NULL, '$2y$10$.T.JynlyGOt95XmfV/8mk.daRWDqDryTpGhpgkNN8FF4dmMK.2IS6', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:18'),
(40, 'danny', 'danny34@student.su.edu.krd', 5, 40, 1, 1, 0, NULL, '$2y$10$BoIssGCod.xwGvUJ7jsFdu/4rRaZ4ok/DzIh1l3Qw0rB3xt08HH3O', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(41, 'yusef', 'yusef35@student.su.edu.krd', 10, 65, 1, 1, 0, NULL, '$2y$10$eeJplnpSN2Qie9J6OIRNme9hzsyzNixahn0F3CINLyp4BBPtiVAWG', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(42, 'dyllan', 'dyllan36@student.su.edu.krd', 7, 54, 1, 0, 0, NULL, '$2y$10$Gl4foOC2bCOe5dCyFdMFpuypfs4PRiqMdMTgNrYmVbFC/taQcd2X.', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:18'),
(43, 'bryan', 'bryan37@student.su.edu.krd', 2, 16, 1, 1, 0, NULL, '$2y$10$GmgsAEjOu2Uq6E7Q.wTEu.UQrjs1p4/7wtj1yFPBeK1EGOMuaC3cK', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(44, 'hamid', 'hamid38@student.su.edu.krd', 4, 31, 1, 0, 0, NULL, '$2y$10$dXS4CsHQg0e4oNVOZ5xL..eCTKGLjFgeW7EUb.ux.BVA1g1CvQqB2', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:18'),
(45, 'drew', 'drew39@student.su.edu.krd', 2, 9, 1, 1, 0, NULL, '$2y$10$CwMS4oDkj9x9/Owz0piDqu1gIiyfVF/Wy9QCEq050.tQiwroM43ei', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(46, 'cameron', 'cameron40@student.su.edu.krd', 13, 73, 1, 1, 0, NULL, '$2y$10$2qLJMJ9KdaP16RSrolE/QeHv4JUh4gTn.0kcGdUMdKFjabEC0phSK', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(47, 'rayan', 'rayan41@student.su.edu.krd', 14, 77, 1, 1, 0, NULL, '$2y$10$uQ2.biJdzKbAQYAyPi3Gu.q2GFMJjh9v272Del3ZgxnvhIYdgtZfy', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(48, 'kienan', 'kienan42@student.su.edu.krd', 3, 22, 1, 1, 0, NULL, '$2y$10$KxKTJo9LsIVFBYylzm8a/.if5R8GTw8rc/X4oQTreDH8/IYN1.BI.', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(49, 'ceiran', 'ceiran43@student.su.edu.krd', 3, 17, 1, 1, 0, NULL, '$2y$10$MMie7vuWUS2XrahddKjOpOeNRq2rB6pmVs5JaOBlgefcGu2AyiG.m', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(50, 'bryson', 'bryson44@student.su.edu.krd', 10, 65, 1, 0, 0, NULL, '$2y$10$/MlGK406trDrg/3omnFFhuZ4i9J77rD8rPv0YCq5ptjhhdsO4TkaS', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:18'),
(51, 'haydn', 'haydn45@student.su.edu.krd', 9, 64, 1, 1, 0, NULL, '$2y$10$DrFqG1s61PX9X7Ow0mKC6uhY9NZOaHxsfVeezmHM4Qc43oxoTUB3y', NULL, '2022-04-11 01:29:18', '2022-04-11 01:29:19'),
(52, 'jonathan', 'jonathan46@student.su.edu.krd', 14, 79, 1, 1, 0, NULL, '$2y$10$Kdr6IMC2TKAZEPmpdcMV2.UDWL9bPVOBEEM60CRydSNbIlF/23Yuy', NULL, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(53, 'jock', 'jock47@student.su.edu.krd', 13, 74, 1, 0, 0, NULL, '$2y$10$B5hbmJ/Xpj7tOXousSKBGOgCP8zUQvXlCKRb56zfYmOigMiiEn13G', NULL, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(54, 'harjeevan', 'harjeevan48@student.su.edu.krd', 13, 74, 1, 0, 0, NULL, '$2y$10$/JctJQkeKAXC23do0MkaiOMN2h6hPXtF84QjYqrq0GRMx3oA102ly', NULL, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(55, 'scott-alexander', 'scott-alexander49@student.su.edu.krd', 11, 66, 1, 0, 0, NULL, '$2y$10$S9Ox93hPqsMW8nTpbXhtLOE1AaMAFgI/Oji.IWYIOoq8fyMBnpMTe', NULL, '2022-04-11 01:29:19', '2022-04-11 01:29:19'),
(56, 'rowen', 'rowen50@student.su.edu.krd', 15, 82, 1, 1, 0, NULL, '$2y$10$7ol3Jr4TvuEy9VnnzJWMK.7mughn7Zp3LCgcPNkSj3E9deWOr/4z2', NULL, '2022-04-11 01:29:19', '2022-04-11 01:29:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_college_id_foreign` (`college_id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grants`
--
ALTER TABLE `grants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grants_college_id_foreign` (`college_id`),
  ADD KEY `grants_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ideas_created_by_foreign` (`created_by`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_created_by_foreign` (`created_by`);

--
-- Indexes for table `project_announcements`
--
ALTER TABLE `project_announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_announcements_college_id_foreign` (`college_id`),
  ADD KEY `project_announcements_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_college_id_foreign` (`college_id`),
  ADD KEY `users_dept_id_foreign` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grants`
--
ALTER TABLE `grants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `project_announcements`
--
ALTER TABLE `project_announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `grants`
--
ALTER TABLE `grants`
  ADD CONSTRAINT `grants_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`),
  ADD CONSTRAINT `grants_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `ideas`
--
ALTER TABLE `ideas`
  ADD CONSTRAINT `ideas_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_announcements`
--
ALTER TABLE `project_announcements`
  ADD CONSTRAINT `project_announcements_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`),
  ADD CONSTRAINT `project_announcements_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_college_id_foreign` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`),
  ADD CONSTRAINT `users_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
