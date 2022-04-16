-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 09:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
(1, 'دووهەمین کۆنفڕانسی بەخشینی گرانت بۆ باشترین پڕۆژەی دەرچوون و ئایدیا', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', 'uploads/announcements/confrance.jpg', 'uploads/announcements/docker.pdf', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(2, '2 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(3, '3 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(4, '4 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(5, '5 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(6, '6 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(7, '7 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(8, '8 Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus\n                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ', NULL, 'uploads/announcements/docker.pdf', '2022-04-16 16:23:30', '2022-04-16 16:23:30');

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
(1, 'an expert system for students graduation project in salahaddin university', 'home', 'a website for facilitating  the work of students and academic staff to perform their work better and easier!', 'uploads/banners/1.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(2, 'an expert system for students graduation project in salahaddin university', 'home', 'a website for facilitating  the work of students and academic staff to perform their work better and easier!', 'uploads/banners/2.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(3, 'an expert system for students graduation project in salahaddin university', 'home', 'a website for facilitating  the work of students and academic staff to perform their work better and easier!', 'uploads/banners/3.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(4, 'Expert Systems', 'expert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.', 'uploads/banners/4.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(5, 'Find Out The best Ranked One', 'expert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.', 'uploads/banners/5.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(6, 'Get Idea From Others Project', 'expert', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.', 'uploads/banners/6.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(7, 'Explore Students Projects', 'gallery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.', 'uploads/banners/7.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(8, 'Find Out The best Ranked One', 'gallery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.', 'uploads/banners/8.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(9, 'Get Idea From Others Project', 'gallery', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.', 'uploads/banners/9.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29');

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
(1, 'College of Science', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(2, 'College of Engineering ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(3, 'College of Agriculture Engineering Sciences', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(4, 'College of Education ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(5, 'College of Arts ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(6, 'College of Languages ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(7, 'College of Administration and Economics', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(8, 'College of Law', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(9, 'College of Basic Education ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(10, 'College of Physical Education & Sport Sciences', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(11, 'College of Fine Arts ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(12, 'College of Islamic Sciences ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(13, 'College of Education-Makhmour ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(14, 'College of Education-Shaqlawa ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(15, 'College of Political Sciences', '2022-04-16 16:23:29', '2022-04-16 16:23:29');

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
(1, 1, 'Department of Biology', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(2, 1, 'Department of Geology', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(3, 1, 'Department of Chemistry', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(4, 1, 'Department of Computer Science', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(5, 1, 'Department of Environmental Science', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(6, 1, 'Department of Mathematics', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(7, 1, 'Department of Physics', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(8, 2, 'Department of Architecture Engineering', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(9, 2, 'Department of Civil Engineering', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(10, 2, 'Department of Software and Informatics Engineering', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(11, 2, 'Department of Electrical Engineering', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(12, 2, 'Department of Geomatics (Surveying) Engineering', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(13, 2, 'Department of Mechanical Engineering', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(14, 2, 'Department of Water Resources Engineering', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(15, 2, 'Department of Chemical and Petrochemical Engineering', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(16, 2, 'Department of Aviation Engineering ', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(17, 3, 'Department of Animal Resources', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(18, 3, 'Department of Soil and water', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(19, 3, 'Department of Food technology', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(20, 3, 'Department of Forestry', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(21, 3, 'Department of Plant Protection', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(22, 3, 'Department of Horticulture', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(23, 3, 'Department of Field crops', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(24, 3, 'Department of Fish Resources and Aquatic Animals', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(25, 4, 'Department of Biology', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(26, 4, 'Department of Chemistry', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(27, 4, 'Department of Physics', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(28, 4, 'Department of Mathematics', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(29, 4, 'Department of English', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(30, 4, 'Department of Arabic', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(31, 4, 'Department of Kurdish', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(32, 4, 'Department of Psychology and Educational Sciences', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(33, 4, 'Department of Special Education', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(34, 4, 'Department of Syriac', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(35, 5, 'Department of Archaeology', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(36, 5, 'Department of Geography', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(37, 5, 'Department of History', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(38, 5, 'Department of Media', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(39, 5, 'Department of Philosophy', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(40, 5, 'Department of Psychology', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(41, 5, 'Department of Social Work', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(42, 5, 'Department of Sociology', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(43, 6, 'Department of English', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(44, 6, 'Department of German', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(45, 6, 'Department of French', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(46, 6, 'Department of Kurdish', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(47, 6, 'Department of Arabic', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(48, 6, 'Department of Turkish', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(49, 6, 'Department of Persian', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(50, 6, 'Department of Chinese', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(51, 7, 'Department of Accounting', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(52, 7, 'Department of Administration', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(53, 7, 'Department of Economics', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(54, 7, 'Department of Finance and Banking', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(55, 7, 'Department of Statistics', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(56, 7, 'Department of Tourism Organizations Administration', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(57, 8, 'Department of Law', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(58, 9, 'Department of General Science', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(59, 9, 'Department of Mathematics', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(60, 9, 'Department of English Language', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(61, 9, 'Department of Kurdish Language', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(62, 9, 'Department of Social Sciences', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(63, 9, 'Department of Kindergarten', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(64, 9, 'Department of Arabic', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(65, 10, 'Department of Physical Education & Sport Sciences', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(66, 11, 'Department of Music Arts', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(67, 11, 'Department of Cinema and Theater Arts', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(68, 11, 'Department of Plastic Arts', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(69, 12, 'Department of Religious Education', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(70, 12, 'Department of Islamic studies', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(71, 12, 'Department of Principle of religion', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(72, 12, 'Department of Sharia', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(73, 13, 'Department of Arabic', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(74, 13, 'Department of Kurdish', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(75, 14, 'Department of Biology', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(76, 14, 'Department of Physics', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(77, 14, 'Department of Arabic', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(78, 14, 'Department of Kurdish', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(79, 14, 'Department of Physical Education', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(80, 14, 'Department of English', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(81, 15, 'Department of Political Systems and Public Policy', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(82, 15, 'Department of International Relations & Diplomacy', '2022-04-16 16:23:30', '2022-04-16 16:23:30');

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
(1, '4th class Project  Sample - writing Desigen.docx', 'uploads/experts/4th class Project  Sample - writing Desigen.docx', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(2, '4th student project.pptx', 'uploads/experts/4th student project.pptx', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(3, 'Grant Project (image)', 'uploads/experts/grant-project.jpg', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(4, 'Grant Idea Image', 'uploads/experts/grant-idea.jpg', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(5, 'Grant-template.pptx', 'uploads/experts/Grant-template.pptx', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(6, 'Title-of-research-project-temp-ku.pptx', 'uploads/experts/Title-of-research-project-temp-ku.pptx', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(7, 'Send Student Name (image)', 'uploads/experts/viber_image_2022-03-03_14-26-15-200.jpg', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(8, 'Project Board (image)', 'uploads/experts/viber_image_2022-03-03_14-26-16-057.jpg', '2022-04-16 16:23:30', '2022-04-16 16:23:30');

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
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'Students Graduation Projects', ' We are fourth-year students in the Department of Computer Science and IT at the College of Science.\r\n                We designed a graduation project under the title (Design an expert system for student’s graduation\r\n                projects of Salahaddin university)\r\n                This system offers to build a web-based graduation project management system as well as build a\r\n                smart database with data set and also manage and monitor activities such as the submission of\r\n                project and idea deliverables, grades, assessments, and announcements to the system of salahaddin\r\n                university\r\n                This system serves the centralization of the quality assurance department in the university\r\n                presidency.', 'fourth', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'D. Haider Haddad', '\"[\\\"Sanah\\\", \\\"Sozan\\\", \\\"Bushra\\\"]\"', 5, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(2, 'lorem ut aliquam iaculis, lacus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'sixth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'monty', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 27, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(3, 'diam at pretium aliquet, metus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fourth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'jeremy', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 65, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(4, 'lobortis, nisi nibh lacinia orci,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fourth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'kierin', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 14, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(5, 'Duis at lacus. Quisque purus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fourth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'humza', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 60, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(6, 'Quisque fringilla euismod enim. Etiam', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'first', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'atli', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 39, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(7, 'enim. Mauris quis turpis vitae', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fifth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'owain', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 11, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(8, 'In condimentum. Donec at arcu.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'second', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'aiden-jack', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 48, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(9, 'semper pretium neque. Morbi quis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'first', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'morris', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 35, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(10, 'placerat. Cras dictum ultricies ligula.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'sixth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'andrea', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 18, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(11, 'et, magna. Praesent interdum ligula', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'first', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'henry', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 20, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(12, 'est. Nunc ullamcorper, velit in', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fifth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'macaulay', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 63, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(13, 'sem, consequat nec, mollis vitae,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fifth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'wen', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 21, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(14, 'Nunc ullamcorper, velit in aliquet', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'third', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'chiron', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 16, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(15, 'ut aliquam iaculis, lacus pede', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'third', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'sachkirat', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 49, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(16, 'gravida mauris ut mi. Duis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'fifth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'zhi', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 58, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(17, 'eu tellus. Phasellus elit pede,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', 'sixth', '/uploads/ideas/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'sajjad', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 29, '2022-04-16 16:23:36', '2022-04-16 16:23:36');

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
(16, '2022_04_10_123950_create_ideas_table', 1),
(17, '2022_04_16_094628_create_settings_table', 1);

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
(4, 'App\\Models\\User', 3),
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
(5, 'App\\Models\\User', 58),
(5, 'App\\Models\\User', 59),
(5, 'App\\Models\\User', 60),
(5, 'App\\Models\\User', 61),
(5, 'App\\Models\\User', 62),
(5, 'App\\Models\\User', 63),
(5, 'App\\Models\\User', 64),
(5, 'App\\Models\\User', 65),
(5, 'App\\Models\\User', 66),
(5, 'App\\Models\\User', 67),
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
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Project Description',
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
(1, 'Students Graduation Projects', ' We are fourth-year students in the Department of Computer Science and IT at the College of Science.\r\n                We designed a graduation project under the title (Design an expert system for student’s graduation\r\n                projects of Salahaddin university)\r\n                This system offers to build a web-based graduation project management system as well as build a\r\n                smart database with data set and also manage and monitor activities such as the submission of\r\n                project and idea deliverables, grades, assessments, and announcements to the system of salahaddin\r\n                university\r\n                This system serves the centralization of the quality assurance department in the university\r\n                presidency.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'D. Haider Haddad', '\"[\\\"Sanah\\\", \\\"Sozan\\\", \\\"Bushra\\\"]\"', 5, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(2, 'lorem ut aliquam iaculis, lacus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'dan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 35, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(3, 'diam at pretium aliquet, metus', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'meftah', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 65, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(4, 'lobortis, nisi nibh lacinia orci,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'ayaan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 16, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(5, 'Quisque fringilla euismod enim. Etiam', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'eidhan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 32, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(6, 'enim. Mauris quis turpis vitae', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'd\'arcy', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 61, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(7, 'In condimentum. Donec at arcu.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'dailey', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 64, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(8, 'semper pretium neque. Morbi quis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'daniels', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 40, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(9, 'dictum cursus. Nunc mauris elit,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'wabuya', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 7, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(10, 'et, magna. Praesent interdum ligula', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'johnpaul', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 38, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(11, 'est. Nunc ullamcorper, velit in', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'wen', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 21, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(12, 'sem, consequat nec, mollis vitae,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'callyn', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 44, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(13, 'Nunc ullamcorper, velit in aliquet', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'deagan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 49, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(14, 'ut aliquam iaculis, lacus pede', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'reiss', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 17, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(15, 'gravida mauris ut mi. Duis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'tisloh', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 23, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(16, 'eu tellus. Phasellus elit pede,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'kaleem', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 8, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(17, 'Cras sed leo. Cras vehicula', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'dougray', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 66, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(18, 'Donec feugiat metus sit amet', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'breogan', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 42, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(19, 'vehicula. Pellentesque tincidunt tempus risus.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'lennex', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 30, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(20, 'enim. Suspendisse aliquet, sem ut', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'beinn', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 34, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(21, 'risus. Nunc ac sem ut', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'brehme', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 12, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(22, 'eget magna. Suspendisse tristique neque', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'thom', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 20, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(23, 'interdum. Sed auctor odio a', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'lepeng', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 59, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(24, 'vel turpis. Aliquam adipiscing lobortis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'celik', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 54, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(25, 'vitae erat vel pede blandit', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'taonga', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 29, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(26, 'id sapien. Cras dolor dolor,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'leonardo', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 53, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(27, 'nisl sem, consequat nec, mollis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'maximus', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 52, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(28, 'lacus. Etiam bibendum fermentum metus.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'dane', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 14, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(29, 'erat. Sed nunc est, mollis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'myles', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 57, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(30, 'vitae purus gravida sagittis. Duis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'prentice', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 50, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(31, 'vitae velit egestas lacinia. Sed', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'kalum', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 55, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(32, 'lobortis, nisi nibh lacinia orci,', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'zion', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 37, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(33, 'mollis dui, in sodales elit', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'gursees', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 67, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(34, 'ut odio vel est tempor', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'abdirahman', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 58, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(35, 'augue eu tellus. Phasellus elit', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'makin', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 47, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(36, 'egestas a, scelerisque sed, sapien.', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. In error ea facere expedita. Unde repudiandae maiores tenetur. Architecto enim, beatae minus sint sit iusto at autem aut cupiditate? Nemo, quas.', '/uploads/projects/dentcare.zip', '/uploads/reports/dummy.pdf', '/uploads/posters/poster.jpg', 'maison', '\"[\\\"Emma R. Quinn\\\", \\\"Karen N. Wheeler\\\", \\\"Herma T. Brown\\\" , \\\"Howard D. Fields\\\"]\"', 41, '2022-04-16 16:23:36', '2022-04-16 16:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `project_announcements`
--

CREATE TABLE `project_announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_announcements`
--

INSERT INTO `project_announcements` (`id`, `title`, `college_id`, `dept_id`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 12, 72, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 3, 17, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 8, 57, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 4, 33, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 1, 1, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 7, 52, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 7, 52, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(8, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 14, 77, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(9, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 5, 37, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 8, 57, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(11, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 9, 58, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(12, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 14, 76, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(13, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 8, 57, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(14, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 7, 56, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(15, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 5, 40, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(16, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 6, 46, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 4, 26, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(18, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 9, 61, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(19, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 4, 34, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(20, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, ea?', 10, 65, '2022-04-16 16:23:30', '2022-04-16 16:23:30');

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
(1, 'admin', 'web', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(2, 'team', 'web', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(3, 'teacher', 'web', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(4, 'manager', 'web', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(5, 'student', 'web', '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(6, 'council', 'web', '2022-04-16 16:23:30', '2022-04-16 16:23:30');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'project_upload', 1, '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(2, 'idea_upload', 1, '2022-04-16 16:23:29', '2022-04-16 16:23:29');

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
(1, 'Dr.Nabil', 'nabil.fakhre@su.edu.krd', 'uploads/teams/dr.nabil.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(2, 'Dr.Haider', 'haider.haddad@su.edu.krd', 'uploads/teams/dr.haider.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(3, 'Sanah', 'sccs02417@student.su.edu.krd', 'uploads/teams/1.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(4, 'Sozan', 'sccs10917@student.su.edu.krd', 'uploads/teams/2.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29'),
(5, 'Bushra', 'sccs11517@student.su.edu.krd', 'uploads/teams/3.jpg', '2022-04-16 16:23:29', '2022-04-16 16:23:29');

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
(1, 'dr.haider', 'haider.haddad@su.edu.krd', NULL, NULL, 0, 0, 0, NULL, '$2y$10$HTa8b5rFEwCj3goGnTIbIe3eXiEmfmxrk2S05pI1vW/o5Rxq.G2uy', NULL, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(2, 'admin', 'admin@admin.com', NULL, NULL, 0, 0, 0, NULL, '$2y$10$Yo.4u/mc4i4W1yA3yyGZyugxuHQXh8o0NcubcJUPVNSVN8YlbOBrS', NULL, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(3, 'dr.nabil', 'nabil.fakhre@su.edu.krd', NULL, NULL, 0, 0, 0, NULL, '$2y$10$Gw4xKO65fxwPDGfWqJiWwuRj71sRl9JVCfnLhr3XsvGYBYPzBC.P6', NULL, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(4, 'ahmad', 'council@su.edu.krd', NULL, NULL, 0, 0, 0, NULL, '$2y$10$4UmMWsY3WPGNmiLdfZ7LduhK3MEOeJ5OqT4PgI4m/7QJt56b.0Awm', NULL, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(5, 'sanah', 'sccs02417@student.su.edu.krd', 1, 7, 1, 0, 0, NULL, '$2y$10$eWx4zhnkzQbcRcephDrqRuhTtU/BZdgCg8H5lysbZGlrO9UceBQA6', NULL, '2022-04-16 16:23:30', '2022-04-16 16:23:30'),
(6, 'sozan', 'sccs10917@student.su.edu.krd', 1, 7, 1, 0, 0, NULL, '$2y$10$XmuYuSUdZlpSEN3KRh6Hke2oaLhKS5H0KHGYSXRmokyTYhw68UyZ6', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:31'),
(7, 'bushra', 'sccs11517@student.su.edu.krd', 1, 7, 1, 1, 0, NULL, '$2y$10$03aYZ8w7NepC3kj5pkBYjOMwplpBMLAiPAxOyfeCm.1P85kgRZsVC', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:36'),
(8, 'lloyde', 'lloyde1@su.edu.krd', 5, 42, 1, 1, 0, NULL, '$2y$10$YDB39riZ.C5ovLfx1/59Iu8p/19L6ruJcxhmZLYjNPxzRu68x3QDm', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:36'),
(9, 'taylor-lee', 'taylor-lee2@su.edu.krd', 4, 32, 1, 0, 0, NULL, '$2y$10$oT10mYhNaOfC/qM1ayTyWeqz67n4sV8tTlkXi/gMV6F.8gXM1AuPe', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:31'),
(10, 'jensen', 'jensen3@su.edu.krd', 7, 54, 1, 0, 0, NULL, '$2y$10$fyhqbKCi3KK/yfoDT.Ful.CNlRczAaTIsAXvyvJ5460CBD.TkYyg.', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:31'),
(11, 'lawrie', 'lawrie4@su.edu.krd', 11, 68, 1, 0, 1, NULL, '$2y$10$VYkZlqR85Ke09sleGx891O1z8Zg4JIyMk0FSkyiXtd/a61QDR95Y2', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:36'),
(12, 'j', 'j5@su.edu.krd', 11, 68, 1, 1, 0, NULL, '$2y$10$wJjPNIQwXLIdwXhyAn6IfOhiKYYGW/Uvx4FtaBqHxy5Vadjd/6rTa', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:36'),
(13, 'subhaan', 'subhaan6@su.edu.krd', 11, 68, 1, 0, 0, NULL, '$2y$10$GweO3sr3o1FjUaZuVIPWQeBjEpfkbN6FHlTvRJbjnvW2bTYxt5HEW', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:31'),
(14, 'corey', 'corey7@su.edu.krd', 6, 46, 1, 1, 1, NULL, '$2y$10$GD3MotTC/kqnDPC9wokCVe28ufnI8xS4XivGSJwWklw3ue1Ryr4vq', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:36'),
(15, 'zayn', 'zayn8@su.edu.krd', 12, 69, 1, 0, 0, NULL, '$2y$10$rkX5alhoYanWZKklHV7G0eB8SwwOUhEnVMrIG2reMuJG4hupihroW', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:31'),
(16, 'lleyton', 'lleyton9@su.edu.krd', 12, 70, 1, 1, 1, NULL, '$2y$10$7MlNRZhV0apjJaxdcaQKGe2VLliadIZK.yhKzE6D2nVOxLkbE283S', NULL, '2022-04-16 16:23:31', '2022-04-16 16:23:36'),
(17, 'firaaz', 'firaaz10@su.edu.krd', 5, 42, 1, 1, 0, NULL, '$2y$10$5h/inV8ewTrldtONug8fiekgS4Qm22b4YmFiZShetxd1uMPi3.Elu', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:36'),
(18, 'drakeo', 'drakeo1@student.su.edu.krd', 10, 65, 1, 0, 1, NULL, '$2y$10$pcZv8Jq6M8QogdqH4da8mu1MrkyG32gnUM9sue73ZOJeUDlzBhH7K', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:36'),
(19, 'tian', 'tian2@student.su.edu.krd', 6, 46, 1, 0, 0, NULL, '$2y$10$yJUOV6d1xwMiKq9yCls1m.xiCK9h.nAFV/znX02cn0p0FBGhUnTcK', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:32'),
(20, 'josef', 'josef3@student.su.edu.krd', 5, 41, 1, 1, 1, NULL, '$2y$10$2taDgBZIy9CpcFA7gKf1pORs6AhxHV4WT8gfjSG0MWFHTtU3GUPne', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:36'),
(21, 'kaiden', 'kaiden4@student.su.edu.krd', 6, 43, 1, 1, 1, NULL, '$2y$10$bmGbgU6sq3nsAa1lGeEoVONrBD13lswPUS0z7RVEyq1/csMJq70R2', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:36'),
(22, 'loui', 'loui5@student.su.edu.krd', 10, 65, 1, 0, 0, NULL, '$2y$10$Qq5g3Mxhha.fV9QB4PsoaeGrfF5dTTqBRh1TBxi6SUUxcGgALderG', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:32'),
(23, 'shannon', 'shannon6@student.su.edu.krd', 14, 79, 1, 1, 0, NULL, '$2y$10$ZvUENyJjX01fEHA1AYkikeV.LCrft7sHWYoAJwNGftEG5CYTvww.a', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:36'),
(24, 'youcef', 'youcef7@student.su.edu.krd', 15, 82, 1, 0, 0, NULL, '$2y$10$9aoS1YUYk7Ca24CdB5IAx.16UOHTBW0nng.gvImLw7RzEHgzCkPdO', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:32'),
(25, 'rhys-bernard', 'rhys-bernard8@student.su.edu.krd', 2, 12, 1, 0, 0, NULL, '$2y$10$7GJy/0QUgFm/iVKA8dCqXezOJXvf2MbhM8vi4Z7ycImLP.XdeHO0S', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:32'),
(26, 'sukhpal', 'sukhpal9@student.su.edu.krd', 9, 62, 1, 0, 0, NULL, '$2y$10$o7aRceWe2P0ctMbhVxfdDuaGteDNesKPrgC10UGu.ZsNduAfQ5W.a', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:32'),
(27, 'hugo', 'hugo10@student.su.edu.krd', 15, 82, 1, 0, 1, NULL, '$2y$10$oTDNm.T5qLtJ9mH0KIW40.fxJkhDRVLnGCca4/Pu/hWncX4dco8qm', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:36'),
(28, 'siergiej', 'siergiej11@student.su.edu.krd', 6, 49, 1, 0, 0, NULL, '$2y$10$fftaGWYkyLQNet0oZ1ic5OivmKrQLeQzYK9IjeAR3WgD8F3mB7kGm', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:32'),
(29, 'cadan', 'cadan12@student.su.edu.krd', 3, 23, 1, 1, 1, NULL, '$2y$10$CsrpbNMspXBR/UIYeoGN9.NpoGNT6E4sPiuqk/NS/k1j17gUwT7Sy', NULL, '2022-04-16 16:23:32', '2022-04-16 16:23:36'),
(30, 'makin', 'makin13@student.su.edu.krd', 11, 68, 1, 1, 0, NULL, '$2y$10$HS6B3d1nwdgLsDOb77vZz.nEpYsx3vgX8i0zk5FX5AiKD5dvghCwW', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:36'),
(31, 'shahmir', 'shahmir14@student.su.edu.krd', 6, 46, 1, 0, 0, NULL, '$2y$10$9P5VUb2ibgbibXUBAPcGR.Nak2klrwBsQQY2SW/jwcuiQbPzY.O9e', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:33'),
(32, 'arihant', 'arihant15@student.su.edu.krd', 12, 72, 1, 1, 0, NULL, '$2y$10$lVlKKBF2GVK7LgTUlTytmuypZqgl2n/FjVM/eVPRRW.eVeTntZtcy', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:36'),
(33, 'luis', 'luis16@student.su.edu.krd', 10, 65, 1, 0, 0, NULL, '$2y$10$QEkO9/fexB1SOxuQJuSKsulyOJPIVEGiTTD/j43LotrkQbvDJqR2y', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:33'),
(34, 'eadie', 'eadie17@student.su.edu.krd', 2, 11, 1, 1, 0, NULL, '$2y$10$nVAFILP1M7JDj9/5YOyyHOQcv4vj64GX4HHQH8PPf1RjXLSBKBlum', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:36'),
(35, 'shaun', 'shaun18@student.su.edu.krd', 11, 67, 1, 1, 1, NULL, '$2y$10$sF6wDOH3GbNxuJ59A2jAweWdMbZjqA/9/E6C8ByvmvKgGKRbypIW6', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:36'),
(36, 'dharam', 'dharam19@student.su.edu.krd', 10, 65, 1, 0, 0, NULL, '$2y$10$E8eVkL.Df.huOKpGkdJalOfs.vcheh6dUudcr4AVlIBu.H.ksJkDa', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:33'),
(37, 'mac', 'mac20@student.su.edu.krd', 6, 43, 1, 1, 0, NULL, '$2y$10$N38LPmRCxqwZdHKkfCdzDOt2fIIi1pPTfpP9IWYmssQgTq7AkWJMG', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:36'),
(38, 'ruaridh', 'ruaridh21@student.su.edu.krd', 3, 24, 1, 1, 0, NULL, '$2y$10$wOdoNLi1wEoxtNi.4eMVxuARnpN7R.O5NzRecvluFZfbss0B2t7X2', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:36'),
(39, 'tymom', 'tymom22@student.su.edu.krd', 15, 82, 1, 0, 1, NULL, '$2y$10$hym3N1vp2pO/JJ6t2KHKY.TNNJMtyPbf27xFiRLOPzyBOZWgtzgUy', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:36'),
(40, 'mueez', 'mueez23@student.su.edu.krd', 6, 47, 1, 1, 0, NULL, '$2y$10$Q8A9ghFyiRE/olT4LAW33uVCbWNyM8Mto0tr8eWbRVnDy1hyOQxoG', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:36'),
(41, 'abdisalam', 'abdisalam24@student.su.edu.krd', 1, 6, 1, 1, 0, NULL, '$2y$10$D7/fZs6gxIFk90doFJ8bZOKrVwJzjFgfefTiEKui7hGeAdqaTEkr.', NULL, '2022-04-16 16:23:33', '2022-04-16 16:23:36'),
(42, 'william-john', 'william-john25@student.su.edu.krd', 3, 22, 1, 1, 0, NULL, '$2y$10$.Fgksmpec2hizKMlJrsuOehxvRLRQjIJlB1YrKS5R0iNN4.g5OZI2', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:36'),
(43, 'eoghan', 'eoghan26@student.su.edu.krd', 12, 71, 1, 0, 0, NULL, '$2y$10$W77SRYpAmmT1K2ho78AEue55NwP.XhngY/xXCmvdoOU2Z4aPW8W2S', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:34'),
(44, 'abdulkarem', 'abdulkarem27@student.su.edu.krd', 8, 57, 1, 1, 0, NULL, '$2y$10$x9083lrjvk6RsOfiZ6AO0.T.iSlPz/pzf1AaGr1UCi6L.QLKY45a6', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:36'),
(45, 'rorie', 'rorie28@student.su.edu.krd', 2, 10, 1, 0, 0, NULL, '$2y$10$NNYa4vdBqmrrallE5.H6x.B0tb4n74t0UlFMfNqEInX1ZdHTOWsam', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:34'),
(46, 'daniels', 'daniels29@student.su.edu.krd', 6, 47, 1, 0, 0, NULL, '$2y$10$/X1TWQWS3atIZfVWZJj/zeyXAvT7roJgwiM9meMUMVSb43p8sX7j2', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:34'),
(47, 'jacky', 'jacky30@student.su.edu.krd', 8, 57, 1, 1, 0, NULL, '$2y$10$qcW38yqPTnGUH28rfIlqLuVNl6dZlv8M7ykcTiHpFtrsNDGhEwZTS', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:36'),
(48, 'haydon', 'haydon31@student.su.edu.krd', 5, 35, 1, 0, 1, NULL, '$2y$10$d/ugqUgz.ee.uEuusCexW.9PGfFId3T3NLcTGKy8DORNQAOV.eBt.', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:36'),
(49, 'eroni', 'eroni32@student.su.edu.krd', 15, 81, 1, 1, 1, NULL, '$2y$10$J1IZi71GziDyhafkS82ncu1bSDneKKxyJMin2HHN97n8vrh4ypTpm', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:36'),
(50, 'chu', 'chu33@student.su.edu.krd', 8, 57, 1, 1, 0, NULL, '$2y$10$ukScjK0XkOI8iP8gbLKyP.gp5SGvEMUY27FrMAyugjWJrtVJBLhg.', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:36'),
(51, 'wayne', 'wayne34@student.su.edu.krd', 2, 15, 1, 0, 0, NULL, '$2y$10$NQo9UvO8XchPIUcdzyJL9uvVPtqncHhtDWMbZj11qn/IAxwSQYgvq', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:34'),
(52, 'muhammed', 'muhammed35@student.su.edu.krd', 12, 69, 1, 1, 0, NULL, '$2y$10$Cto4xsJ2ZodQlgXptHpNBOoXJ0zxvRFGEwFYp2e16OaRrKZ6AIUVK', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:36'),
(53, 'connel', 'connel36@student.su.edu.krd', 14, 79, 1, 1, 0, NULL, '$2y$10$UEf5VAvhi9Wl/0/aahe8OuxL.Bl/8C.POh3c7WlZLJzsDQGvLPSDW', NULL, '2022-04-16 16:23:34', '2022-04-16 16:23:36'),
(54, 'osesenagha', 'osesenagha37@student.su.edu.krd', 3, 18, 1, 1, 0, NULL, '$2y$10$wuUgxBQQa5PeXbRBecdn4uRT4uPtpaXXiJyA6yX5rOfPXZXLi3zm2', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:36'),
(55, 'abir', 'abir38@student.su.edu.krd', 12, 72, 1, 1, 0, NULL, '$2y$10$lyU3g9oYlQBDSYccO6BWZ.a4O86hVgk9vuAXYcG4Z6U5YXRjptoZG', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:36'),
(56, 'denton', 'denton39@student.su.edu.krd', 15, 81, 1, 0, 0, NULL, '$2y$10$DFnejAXN1cUtFJifHXQxme./epPCmiYxGODBgzxSoyT2g17szuva6', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:35'),
(57, 'bruno', 'bruno40@student.su.edu.krd', 13, 74, 1, 1, 0, NULL, '$2y$10$UO/hfbH/a4QEyrXyJ4YbYuwLXEk88m52p/pemeGWYuNY4pW8k7.Fm', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:36'),
(58, 'zohair', 'zohair41@student.su.edu.krd', 8, 57, 1, 1, 1, NULL, '$2y$10$ioBSM.tiwambaUhvMyDSPe8Kzt2f3W421iBqfazLPwVBtGvNIePtW', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:36'),
(59, 'jack', 'jack42@student.su.edu.krd', 7, 52, 1, 1, 0, NULL, '$2y$10$22837q45LYDDznPGLhMCeuIi28dNHDC9VWKh3qCuf4ci6vVPUbpb2', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:36'),
(60, 'conall', 'conall43@student.su.edu.krd', 12, 71, 1, 0, 1, NULL, '$2y$10$2vF3tZ60cya8qmDPAnG13O0DdOxewvStg8ibyqv6WqJX1gccQXU0O', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:36'),
(61, 'madox', 'madox44@student.su.edu.krd', 13, 73, 1, 1, 0, NULL, '$2y$10$kE9WqwsWn4ZSdSWesPgYwuFeFQyv33Zj7cZPWzDpes2dIZEGZIpX2', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:36'),
(62, 'rhett', 'rhett45@student.su.edu.krd', 5, 38, 1, 0, 0, NULL, '$2y$10$Hgyy7oFhqhyNMcVHecPAm.AfAIBTqeRexVb0.LVh41JMqgqKyenem', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:35'),
(63, 'sami', 'sami46@student.su.edu.krd', 10, 65, 1, 0, 1, NULL, '$2y$10$cU2FJHVy.K.twmVhCaBfvOnjS91xFYmL0kxR7sO3/6EE3vGVtrt6e', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:36'),
(64, 'jedd', 'jedd47@student.su.edu.krd', 11, 68, 1, 1, 0, NULL, '$2y$10$Tqkz5UlZ59qEISYgPLJy6ec.eugLVGsopRRcFFbU08mT1SMWGTRvG', NULL, '2022-04-16 16:23:35', '2022-04-16 16:23:36'),
(65, 'reid', 'reid48@student.su.edu.krd', 13, 73, 1, 1, 1, NULL, '$2y$10$1JgBvyD05VeKUEkej1G2HubvDEQL3N1l4RoCg6EdnATkM8oS/EjYy', NULL, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(66, 'struan', 'struan49@student.su.edu.krd', 11, 67, 1, 1, 0, NULL, '$2y$10$m5ffcR.oYMhBUJfp7j2lYegzU5hRYll3Ym6K2l4r7RDcZwZeaa55i', NULL, '2022-04-16 16:23:36', '2022-04-16 16:23:36'),
(67, 'bhaaldeen', 'bhaaldeen50@student.su.edu.krd', 14, 78, 1, 1, 0, NULL, '$2y$10$BRW3Hr0jK4a0W788K2ZGrOK3751FN4M7nN9whWNJjhMYOFKbsz87u', NULL, '2022-04-16 16:23:36', '2022-04-16 16:23:36');

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

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
