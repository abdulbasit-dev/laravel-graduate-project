-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 07:37 AM
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
(1, 'دووهەمین کۆنفڕانسی بەخشینی گرانت بۆ باشترین پڕۆژەی دەرچوون و ئایدیا', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', 'uploads/announcements/confrance.jpg', 'uploads/announcements/docker.pdf', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(2, '2 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(3, '3 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(4, '4 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(5, '5 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(6, '6 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(7, '7 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(8, '8 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\r\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-14 09:17:32', '2022-04-14 09:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `page`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Explore Students Projects', 'home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/1.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(2, 'Find Out The best Ranked One', 'home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/2.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(3, 'Get Idea From Others Project', 'home', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/3.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(4, 'Expert Systems', 'expert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/4.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(5, 'Find Out The best Ranked One', 'expert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/5.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(6, 'Get Idea From Others Project', 'expert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/6.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(7, 'Explore Students Projects', 'gallery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/5.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(8, 'Find Out The best Ranked One', 'gallery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/6.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(9, 'Get Idea From Others Project', 'gallery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus. ', 'uploads/banners/2.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(10, 'Suscipit qui laudant', 'expert', 'Eos cumque a delect', 'uploads/banners/1649940815_youtube notification.png', '2022-04-14 09:53:35', '2022-04-14 09:54:19');

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
(1, 'College of Science', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(2, 'College of Engineering ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(3, 'College of Agriculture Engineering Sciences', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(4, 'College of Education ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(5, 'College of Arts ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(6, 'College of Languages ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(7, 'College of Administration and Economics', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(8, 'College of Law', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(9, 'College of Basic Education ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(10, 'College of Physical Education & Sport Sciences', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(11, 'College of Fine Arts ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(12, 'College of Islamic Sciences ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(13, 'College of Education-Makhmour ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(14, 'College of Education-Shaqlawa ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(15, 'College of Political Sciences', '2022-04-14 09:17:32', '2022-04-14 09:17:32');

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
(1, 1, 'Department of Biology', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(2, 1, 'Department of Geology', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(3, 1, 'Department of Chemistry', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(4, 1, 'Department of Computer Science', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(5, 1, 'Department of Environmental Science', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(6, 1, 'Department of Mathematics', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(7, 1, 'Department of Physics', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(8, 2, 'Department of Architecture Engineering', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(9, 2, 'Department of Civil Engineering', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(10, 2, 'Department of Software and Informatics Engineering', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(11, 2, 'Department of Electrical Engineering', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(12, 2, 'Department of Geomatics (Surveying) Engineering', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(13, 2, 'Department of Mechanical Engineering', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(14, 2, 'Department of Water Resources Engineering', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(15, 2, 'Department of Chemical and Petrochemical Engineering', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(16, 2, 'Department of Aviation Engineering ', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(17, 3, 'Department of Animal Resources', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(18, 3, 'Department of Soil and water', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(19, 3, 'Department of Food technology', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(20, 3, 'Department of Forestry', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(21, 3, 'Department of Plant Protection', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(22, 3, 'Department of Horticulture', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(23, 3, 'Department of Field crops', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(24, 3, 'Department of Fish Resources and Aquatic Animals', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(25, 4, 'Department of Biology', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(26, 4, 'Department of Chemistry', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(27, 4, 'Department of Physics', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(28, 4, 'Department of Mathematics', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(29, 4, 'Department of English', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(30, 4, 'Department of Arabic', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(31, 4, 'Department of Kurdish', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(32, 4, 'Department of Psychology and Educational Sciences', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(33, 4, 'Department of Special Education', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(34, 4, 'Department of Syriac', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(35, 5, 'Department of Archaeology', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(36, 5, 'Department of Geography', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(37, 5, 'Department of History', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(38, 5, 'Department of Media', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(39, 5, 'Department of Philosophy', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(40, 5, 'Department of Psychology', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(41, 5, 'Department of Social Work', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(42, 5, 'Department of Sociology', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(43, 6, 'Department of English', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(44, 6, 'Department of German', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(45, 6, 'Department of French', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(46, 6, 'Department of Kurdish', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(47, 6, 'Department of Arabic', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(48, 6, 'Department of Turkish', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(49, 6, 'Department of Persian', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(50, 6, 'Department of Chinese', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(51, 7, 'Department of Accounting', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(52, 7, 'Department of Administration', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(53, 7, 'Department of Economics', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(54, 7, 'Department of Finance and Banking', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(55, 7, 'Department of Statistics', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(56, 7, 'Department of Tourism Organizations Administration', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(57, 8, 'Department of Law', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(58, 9, 'Department of General Science', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(59, 9, 'Department of Mathematics', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(60, 9, 'Department of English Language', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(61, 9, 'Department of Kurdish Language', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(62, 9, 'Department of Social Sciences', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(63, 9, 'Department of Kindergarten', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(64, 9, 'Department of Arabic', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(65, 10, 'Department of Physical Education & Sport Sciences', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(66, 11, 'Department of Music Arts', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(67, 11, 'Department of Cinema and Theater Arts', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(68, 11, 'Department of Plastic Arts', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(69, 12, 'Department of Religious Education', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(70, 12, 'Department of Islamic studies', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(71, 12, 'Department of Principle of religion', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(72, 12, 'Department of Sharia', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(73, 13, 'Department of Arabic', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(74, 13, 'Department of Kurdish', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(75, 14, 'Department of Biology', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(76, 14, 'Department of Physics', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(77, 14, 'Department of Arabic', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(78, 14, 'Department of Kurdish', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(79, 14, 'Department of Physical Education', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(80, 14, 'Department of English', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(81, 15, 'Department of Political Systems and Public Policy', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(82, 15, 'Department of International Relations & Diplomacy', '2022-04-14 09:17:32', '2022-04-14 09:17:32');

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
(1, '4th class Project  Sample - writing Desigen.docx', 'uploads/experts/4th class Project  Sample - writing Desigen.docx', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(2, '4th student project.pptx', 'uploads/experts/4th student project.pptx', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(3, 'Grant Project (image)', 'uploads/experts/grant-project.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(4, 'Grant Idea Image', 'uploads/experts/grant-idea.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(5, 'Grant-template.pptx', 'uploads/experts/Grant-template.pptx', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(6, 'Title-of-research-project-temp-ku.pptx', 'uploads/experts/Title-of-research-project-temp-ku.pptx', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(7, 'Send Student Name (image)', 'uploads/experts/viber_image_2022-03-03_14-26-15-200.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(8, 'Project Board (image)', 'uploads/experts/viber_image_2022-03-03_14-26-16-057.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32');

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `title`, `description`, `stage`, `project`, `report`, `poster`, `supervisor_name`, `team_members`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'lorem ut aliquam iaculis, lacus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fifth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'muhsin', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 56, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(2, 'diam at pretium aliquet, metus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fifth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'logan-rhys', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 25, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(3, 'lobortis, nisi nibh lacinia orci,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'first', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'matthias', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 37, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(4, 'Duis at lacus. Quisque purus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'first', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'jian', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 10, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(5, 'Quisque fringilla euismod enim. Etiam', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'second', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'aria', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 36, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(6, 'enim. Mauris quis turpis vitae', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'second', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'brodi', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 16, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(7, 'velit eu sem. Pellentesque ut', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'second', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'prithvi', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 18, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(8, 'In condimentum. Donec at arcu.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'first', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'davie', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 38, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(9, 'semper pretium neque. Morbi quis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'second', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'jad', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 11, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(10, 'dictum cursus. Nunc mauris elit,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fourth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'jazz', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 48, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(11, 'placerat. Cras dictum ultricies ligula.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'first', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'grady', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 45, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(12, 'et, magna. Praesent interdum ligula', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'first', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'kenton', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 7, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(13, 'est. Nunc ullamcorper, velit in', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'sixth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'dharam', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 32, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(14, 'sem, consequat nec, mollis vitae,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'second', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'zachery', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 5, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(15, 'vitae, posuere at, velit. Cras', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fifth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'khaleel', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 21, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(16, 'Nunc ullamcorper, velit in aliquet', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'first', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'kaydn', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 9, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(17, 'ut aliquam iaculis, lacus pede', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fifth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'pedram', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 49, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(18, 'gravida mauris ut mi. Duis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'third', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'franklin', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 12, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(19, 'eu tellus. Phasellus elit pede,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fourth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'wylie', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 17, '2022-04-14 09:17:36', '2022-04-14 09:17:36');

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
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(4, 'App\\Models\\User', 3),
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
(5, 'App\\Models\\User', 56),
(5, 'App\\Models\\User', 57),
(6, 'App\\Models\\User', 4);

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
(1, 'lorem ut aliquam iaculis, lacus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'jean', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 52, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(2, 'diam at pretium aliquet, metus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'elvin', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 42, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(3, 'lobortis, nisi nibh lacinia orci,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'fyn', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 48, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(4, 'Duis at lacus. Quisque purus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'travis', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 9, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(5, 'Quisque fringilla euismod enim. Etiam', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'daud', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 40, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(6, 'enim. Mauris quis turpis vitae', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'wiktor', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 14, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(7, 'velit eu sem. Pellentesque ut', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'mark', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 21, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(8, 'In condimentum. Donec at arcu.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'abdalroof', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 11, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(9, 'semper pretium neque. Morbi quis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'lenny', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 43, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(10, 'dictum cursus. Nunc mauris elit,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'dhyia', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 13, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(11, 'placerat. Cras dictum ultricies ligula.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'caelen', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 12, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(12, 'et, magna. Praesent interdum ligula', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'brandon-lee', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 56, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(13, 'est. Nunc ullamcorper, velit in', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'christian', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 33, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(14, 'sem, consequat nec, mollis vitae,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'brad', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 50, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(15, 'vitae, posuere at, velit. Cras', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'aydon', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 39, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(16, 'eu tellus. Phasellus elit pede,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'bailley', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 17, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(17, 'Cras sed leo. Cras vehicula', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'aaryn', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 29, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(18, 'Donec feugiat metus sit amet', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'kern', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 32, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(19, 'Donec est. Nunc ullamcorper, velit', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'levon', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 36, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(20, 'elit, pretium et, rutrum non,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'kelvan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 41, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(21, 'nunc nulla vulputate dui, nec', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'latif', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 25, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(22, 'gravida sit amet, dapibus id,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'arfin', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 51, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(23, 'enim. Suspendisse aliquet, sem ut', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'tyrnan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 15, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(24, 'risus. Nunc ac sem ut', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'ateeq', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 18, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(25, 'interdum. Sed auctor odio a', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'franko', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 19, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(26, 'vel turpis. Aliquam adipiscing lobortis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'coray', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 45, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(27, 'erat. Sed nunc est, mollis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'marcos', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 38, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(28, 'nonummy ac, feugiat non, lobortis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'william-john', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 31, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(29, 'faucibus. Morbi vehicula. Pellentesque tincidunt', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'tanay', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 27, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(30, 'ut odio vel est tempor', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'folarinwa', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 23, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(31, 'augue eu tellus. Phasellus elit', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'laughlan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 5, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(32, 'iaculis odio. Nam interdum enim', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'alasdair', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 30, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(33, 'egestas a, scelerisque sed, sapien.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'teiyib', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 57, '2022-04-14 09:17:36', '2022-04-14 09:17:36');

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
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 15, 82, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 5, 38, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 3, 21, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 6, 47, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 14, 78, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 10, 65, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 8, 57, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 4, 27, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 5, 37, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 15, 82, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(11, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 6, 44, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 2, 11, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 4, 25, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(14, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 14, 77, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(15, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 15, 81, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(16, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 1, 5, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 9, 59, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 10, 65, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(19, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 2, 11, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 13, 73, '2022-04-14 09:17:32', '2022-04-14 09:17:32');

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
(1, 'admin', 'web', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(2, 'team', 'web', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(3, 'teacher', 'web', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(4, 'manager', 'web', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(5, 'student', 'web', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(6, 'council', 'web', '2022-04-14 09:17:32', '2022-04-14 09:17:32');

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
(1, 'Dr.Nabil', 'nabil.fakhre@su.edu.krd', 'uploads/teams/dr.nabil.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(2, 'Dr.Haider', 'haider.haddad@su.edu.krd', 'uploads/teams/dr.haider.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(3, 'Sanah', 'sccs02417@student.su.edu.krd', 'uploads/teams/1.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(4, 'Sozan', 'sccs10917@student.su.edu.krd', 'uploads/teams/2.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(5, 'Bushra', 'sccs11517@student.su.edu.krd', 'uploads/teams/3.jpg', '2022-04-14 09:17:32', '2022-04-14 09:17:32');

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
(1, 'dr.haider', 'haider.haddad@su.edu.krd', NULL, NULL, 0, 0, 0, NULL, '$2y$10$ydr9NATZDBHLyo75HXldXesB0mTb6gbU9V.ZtVIliwfYUzTJZesTq', NULL, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(2, 'admin', 'admin@admin.com', NULL, NULL, 0, 0, 0, NULL, '$2y$10$YdnsNtWJ5DH2O6FVUYjugu3n7XNUaVHmoWtnTO0cuApKq2YdxOylK', NULL, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(3, 'dr.nabil', 'nabil.fakhre@su.edu.krd', NULL, NULL, 0, 0, 0, NULL, '$2y$10$LkToDo6rBWc62oT8cNOdjeCha.T.t924GAsFxRK/F1Sb4Bw2l.1H2', NULL, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(4, 'ahmad', 'council@su.edu.krd', NULL, NULL, 0, 0, 0, NULL, '$2y$10$G.f4a1.lWSRkoUbsbBo4DO7AQDzX/8mKMIWa1DndbLT8MNZnuBA5C', NULL, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(5, 'sanah', 'sccs02417@student.su.edu.krd', 1, 7, 1, 1, 1, NULL, '$2y$10$4tCMEJyF9.jM3jyQ/nDJKeNSmxHYUVT1q/tudLZ8I8PhO62MRPi.u', NULL, '2022-04-14 09:17:32', '2022-04-14 09:17:36'),
(6, 'sozan', 'sccs10917@student.su.edu.krd', 1, 7, 1, 0, 0, NULL, '$2y$10$keducZoKfF79ZkAr9ih/kOLPWZnbl.JszjK5djNiiGTIuw3ArEz3W', NULL, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(7, 'bushra', 'sccs11517@student.su.edu.krd', 1, 7, 1, 0, 1, NULL, '$2y$10$o0GBFMb5lAWWLQ58twZb3.cRs59ueIXm3.Kdk8yGc.ICs1kDpeuUG', NULL, '2022-04-14 09:17:32', '2022-04-14 09:17:36'),
(8, 'jordi', 'jordi1@student.su.edu.krd', 9, 61, 1, 0, 0, NULL, '$2y$10$AXPA3P81o1.d8g9UXTZh9ucfD1NoghiB5w1H3Jee.2aCRX6otODju', NULL, '2022-04-14 09:17:32', '2022-04-14 09:17:32'),
(9, 'hately', 'hately2@student.su.edu.krd', 2, 9, 1, 1, 1, NULL, '$2y$10$pyHTqzAVEvQXiNaZdXaMI.ZfYZT2ZJy8YJUAWtLgKY0uRo9mhlnXu', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(10, 'jamaal', 'jamaal3@student.su.edu.krd', 8, 57, 1, 0, 1, NULL, '$2y$10$OwBS1wT2ouc7huyjYBfvC.qympFAtrxPWXWtrAkLxdPa9XLuwM2n6', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(11, 'koushik', 'koushik4@student.su.edu.krd', 13, 73, 1, 1, 1, NULL, '$2y$10$nWaYhhzeZLlx2D0vZBDXG.bnXFwJvqqrCeYZ8/qefGJRnrQ4emaTC', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(12, 'arryn', 'arryn5@student.su.edu.krd', 14, 79, 1, 1, 1, NULL, '$2y$10$iipodQ.zX5eOy5kQegtf9uXEAP30SBLDIkm0o9qt1IQOU0zaDr0UG', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(13, 'darwyn', 'darwyn6@student.su.edu.krd', 9, 59, 1, 1, 0, NULL, '$2y$10$dSJcHALlHpNxqkAOLxJuDupw/9Xgl9.TlllwlS07HKdyycSoxVDfC', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(14, 'calean', 'calean7@student.su.edu.krd', 14, 77, 1, 1, 0, NULL, '$2y$10$83FpB9hyZVLXdr2N0vKW0u7QI46BsWdgUQqMaONOh0zxd3tkEPqi2', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(15, 'moayd', 'moayd8@student.su.edu.krd', 13, 73, 1, 1, 0, NULL, '$2y$10$pCUrEu3BLPpLWJwXqPKgyuTt9H3QN/b0dZixSQjcJwtapsZoee.rq', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(16, 'cormack', 'cormack9@student.su.edu.krd', 14, 75, 1, 0, 1, NULL, '$2y$10$tTf/nO0VWhpKKOn4jlYV2es0L0IL.5fIV5oX4I5Y1ZkS0hXbHi62i', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(17, 'camerin', 'camerin10@student.su.edu.krd', 7, 55, 1, 1, 1, NULL, '$2y$10$9MvEPNO1XBTS.blr20hhF.5WJaLKGRy2gTiddjnVU8MZd3iCCUa3i', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(18, 'manus', 'manus11@student.su.edu.krd', 8, 57, 1, 1, 1, NULL, '$2y$10$G30N3R2Q4oXsEqpQvHR8G.QeclkZdgwzI8.7sgcDa1I8yEGbz5qhW', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(19, 'kairn', 'kairn12@student.su.edu.krd', 5, 35, 1, 1, 0, NULL, '$2y$10$51rVbAB/wjfehgdiCZk0/OOOg5y81WfYP3S.NLrBgncqCJFuy7ebG', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(20, 'cameron', 'cameron13@student.su.edu.krd', 1, 3, 1, 0, 0, NULL, '$2y$10$n0uWZlImlrS3k/9M0zzFNe0L/FgQtp78eN8VkJ2LlIroRnQryC3Ty', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:33'),
(21, 'alister', 'alister14@student.su.edu.krd', 13, 74, 1, 1, 1, NULL, '$2y$10$ZJDlstvB/mvMnwNh07rZ2el75pP70.c8EuonTT/5bFaM8b9flBZCa', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(22, 'laughlan', 'laughlan15@student.su.edu.krd', 15, 82, 1, 0, 0, NULL, '$2y$10$aeSOei1fXECsnWp6nStXtepXpof2Vup4uePUGo43L28It37xBu.ie', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:33'),
(23, 'axel', 'axel16@student.su.edu.krd', 2, 12, 1, 1, 0, NULL, '$2y$10$/AhjsqmOtsL6OZRVuvvbketNoOJIWl9W/VAveN1UrryI5UjmhHdX6', NULL, '2022-04-14 09:17:33', '2022-04-14 09:17:36'),
(24, 'duncan', 'duncan17@student.su.edu.krd', 8, 57, 1, 0, 0, NULL, '$2y$10$VYwCtiNdlzoimGiSZ3vNiOW4W7i5o1cF0TZpoBzPn9ZBlTcxyspEO', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:34'),
(25, 'connall', 'connall18@student.su.edu.krd', 12, 69, 1, 1, 1, NULL, '$2y$10$Lj6RYQ5EA6zf1yDV3BvPkOUs.cGp5nD1p.8DLjRlrW4aZWuPR2S0m', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(26, 'lenny', 'lenny19@student.su.edu.krd', 3, 22, 1, 0, 0, NULL, '$2y$10$ipIhYR7Ka..0cK97s/yWAe1KvAM7.zeT8qwKZz43u/LihE277uLbG', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:34'),
(27, 'stanislaw', 'stanislaw20@student.su.edu.krd', 3, 20, 1, 1, 0, NULL, '$2y$10$3VnoQ/wP3T8h37GiEYgD6OJu/qhitQPgkcDP//sMBdYu7W4R9G6NS', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(28, 'reiss', 'reiss21@student.su.edu.krd', 4, 27, 1, 0, 0, NULL, '$2y$10$UD4Xi1AEtLYPWuUBe.YBD.FghxAyfxaoH95dpgm5D/0ARq.yQaFbO', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:34'),
(29, 'aliekber', 'aliekber22@student.su.edu.krd', 9, 61, 1, 1, 0, NULL, '$2y$10$.XQExbK4dNFFaKTWzlyegOpUyOH4xhRTqiNyNWXJ2.DnwVO5RzGb.', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(30, 'boab', 'boab23@student.su.edu.krd', 12, 69, 1, 1, 0, NULL, '$2y$10$rStlHKjtTmjjcybNiBbkB.D1AI3h3Q5g3wkSQr6pwYhBbVOrUq.Hu', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(31, 'finnan', 'finnan24@student.su.edu.krd', 15, 82, 1, 1, 0, NULL, '$2y$10$r/nIcE7l1kSgbYVPcWsI5.E8jID546ik.Mtf9XnpBBLCwywd0DkLW', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(32, 'moray', 'moray25@student.su.edu.krd', 8, 57, 1, 1, 1, NULL, '$2y$10$mG0CclEFhmr4guJaVq9VbuewxbxluHzzsQPxY6bb6bQ8dUv2w4ela', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(33, 'jadon', 'jadon26@student.su.edu.krd', 3, 19, 1, 1, 0, NULL, '$2y$10$UPfJ0yfQ4UElG/bK3oVdKuYqBe9CPynkhVZwk.Nuzc7ZXDKmmvdJ2', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(34, 'olaf', 'olaf27@student.su.edu.krd', 3, 23, 1, 0, 0, NULL, '$2y$10$BWXsQ9J5pXieRveFpbbzouWb4sP5GfK50.EqhFncsu90650UYTtlG', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:34'),
(35, 'simon', 'simon28@student.su.edu.krd', 8, 57, 1, 0, 0, NULL, '$2y$10$e5rQFexoQzmV49YaCz5XHegMIqi2y3dVgRYAjkn/Di8.lZFlLo88W', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:34'),
(36, 'martyn', 'martyn29@student.su.edu.krd', 8, 57, 1, 1, 1, NULL, '$2y$10$m5pKdlAsW119KJOwH0ydV.c9J1fQKsj1asn1t0d18fGw87LIGeLGK', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(37, 'aaran', 'aaran30@student.su.edu.krd', 3, 19, 1, 0, 1, NULL, '$2y$10$mabfVAjSgjU/nCsmIeWps.OoVxfU1kylaNdCXEgT02Fm./MzwI4D.', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(38, 'bradan', 'bradan31@student.su.edu.krd', 6, 45, 1, 1, 1, NULL, '$2y$10$waHZR60RT6xZuwfnWP4fEe5vMb/aWsC31C3.nx.FATX5yaPwK5nlm', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(39, 'stephenjunior', 'stephenjunior32@student.su.edu.krd', 6, 43, 1, 1, 0, NULL, '$2y$10$lwHOWf2Uj8KLPDgFSyoaJuqNd1ehTPZ29s6Qhekpi7LxaFqGFDrI2', NULL, '2022-04-14 09:17:34', '2022-04-14 09:17:36'),
(40, 'leno', 'leno33@student.su.edu.krd', 6, 49, 1, 1, 0, NULL, '$2y$10$eOcunrI12Pi.LvkG0QaauOfydviIS4Qh5cuSYyVEwT2oRSDDYGVES', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(41, 'rhuairidh', 'rhuairidh34@student.su.edu.krd', 7, 51, 1, 1, 0, NULL, '$2y$10$RPoZOa7ionrsdY/KJOZb5OQSpYl34RFz4ZgoHs3tt6gZ3uy7m9P3S', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(42, 'zac', 'zac35@student.su.edu.krd', 10, 65, 1, 1, 0, NULL, '$2y$10$cGCgYiw8drBIO9kCbjO.UuBXxkMiz.oyCtd1gKRtmZYW.rnaQfUYG', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(43, 'cian', 'cian36@student.su.edu.krd', 15, 81, 1, 1, 0, NULL, '$2y$10$YsOzwx6P7Ona/7Ak7ul0Ee9OKmxd4fySRWeJjc1gjKu/JUETdRwK6', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(44, 'fletcher', 'fletcher37@student.su.edu.krd', 10, 65, 1, 0, 0, NULL, '$2y$10$BcBM0q13PIO3WNKjXe7mJOiBY/9BLFiyTbvVzQTYkLKk5w3tjpCv2', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:35'),
(45, 'lachlann', 'lachlann38@student.su.edu.krd', 7, 55, 1, 1, 1, NULL, '$2y$10$.2gPAhOJVCYWRIqCRkOE3uOfKJSLsJ9i/hysapReA.1On6iWXnawq', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(46, 'yu', 'yu39@student.su.edu.krd', 6, 45, 1, 0, 0, NULL, '$2y$10$eQaCODsj6ogAZpuHgr3NUuLbURbh6sA/gLDsYQ/I4uwrvGlGd/f6C', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:35'),
(47, 'aleem', 'aleem40@student.su.edu.krd', 6, 46, 1, 0, 0, NULL, '$2y$10$Xk0vLuvt2GjtjK/FmDgUqOTToSh5AJeExJbpcHQSYX.Bk9bu9z8yW', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:35'),
(48, 'rees', 'rees41@student.su.edu.krd', 7, 55, 1, 1, 1, NULL, '$2y$10$i89nHaPPABAX1AN1bStTj.PZA/gIYL0QGLv5G5M.PjpznkZb/xsyu', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(49, 'luka', 'luka42@student.su.edu.krd', 7, 52, 1, 0, 1, NULL, '$2y$10$PNARO6.fgD4Ne26DmkKnAu8nXwLEard.vUdGx4A0OOrpVz5DFFP0y', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(50, 'idris', 'idris43@student.su.edu.krd', 14, 75, 1, 1, 0, NULL, '$2y$10$o3ZaCzL70u8S1m8/g0njSuNOP3zrfQHKqQ6wYwVFjW74WeyoT6Zsu', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(51, 'leilan', 'leilan44@student.su.edu.krd', 1, 7, 1, 1, 0, NULL, '$2y$10$TaAgZfISCviahVfp6MU64uVNnq/sGuP86G.4Yisdfq92jJWD2kJDK', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(52, 'darroch', 'darroch45@student.su.edu.krd', 4, 28, 1, 1, 0, NULL, '$2y$10$F7xFwbx8iAAHXpAyqhI05.JIYNNdjdAphQ0ckMUyOpxqlxGVs6Y2O', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:36'),
(53, 'aaren', 'aaren46@student.su.edu.krd', 5, 35, 1, 0, 0, NULL, '$2y$10$BLExUNbd..TSwdC2t7kpmO87KccmoZZxlGSPMfKK7MkhE8XEpebMu', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:35'),
(54, 'latif', 'latif47@student.su.edu.krd', 7, 51, 1, 0, 0, NULL, '$2y$10$MayA8I5xyiDiDL3ws6OnkOfghX9dEmpTmLxur/dwyIM1QWxRUkZxC', NULL, '2022-04-14 09:17:35', '2022-04-14 09:17:35'),
(55, 'aytug', 'aytug48@student.su.edu.krd', 13, 74, 1, 0, 0, NULL, '$2y$10$S46Y6.Wy3kazCRv5t5v8VuPk4wKtmejxkOFDpUmzd13nzVHfN5uru', NULL, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(56, 'mayson', 'mayson49@student.su.edu.krd', 11, 67, 1, 1, 1, NULL, '$2y$10$CDM/zlH.9hnkEzG6IcCuhuAz1s7DrNYrJ6.iA3sM.14RB5wl6whse', NULL, '2022-04-14 09:17:36', '2022-04-14 09:17:36'),
(57, 'muzammil', 'muzammil50@student.su.edu.krd', 8, 57, 1, 1, 0, NULL, '$2y$10$6VzKGoBnDEzOdK0ZWSP07esOeKUVS49QZKGUdScPn08feUjChKYr2', NULL, '2022-04-14 09:17:36', '2022-04-14 09:17:36');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
