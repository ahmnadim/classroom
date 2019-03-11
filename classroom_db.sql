-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 08:00 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assignment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `student_id`, `teacher`, `course`, `assignment`, `created_at`, `updated_at`) VALUES
(8, 1, 'Teacher', 'Hypertext Preprocessor', '5c3eb9a585ebaqa.xlsx', '2019-01-15 22:57:09', '2019-01-15 22:57:09'),
(9, 1, 'John Doe', 'Hypertext Markup Language.', '5c3ebfaa430d2CV.docx', '2019-01-15 23:22:50', '2019-01-15 23:22:50'),
(10, 1, 'John Doe', 'Cascading style sheet', '5c6cd540a39eddocumentation.docx', '2019-02-19 22:19:13', '2019-02-19 22:19:13'),
(11, 1, 'John Doe', 'Hypertext Markup Language.', '5c6ce35e93f7cdocumentation.docx', '2019-02-19 23:19:26', '2019-02-19 23:19:26'),
(12, 1, 'John Doe', 'Cascading style sheet', '5c6cf0ac9699cdocumentation.docx', '2019-02-20 00:16:12', '2019-02-20 00:16:12'),
(13, 1, 'John Doe', 'Chemistry', '5c70437a58609notify-bg.jpg', '2019-02-22 12:46:18', '2019-02-22 12:46:18'),
(14, 1, 'John Doe', 'Hypertext Markup Language.', '5c750748f0b20Report.docx', '2019-02-26 03:30:49', '2019-02-26 03:30:49'),
(15, 1, 'John Doe', 'Chemistry', '5c751967ef345me.pdf', '2019-02-26 04:48:08', '2019-02-26 04:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Md. Tariqul Islam', 'tariqul@gmail.com', 'Test sms', 'Hello is am Tariqul', '2019-02-21 10:17:44', '2019-02-21 10:17:44'),
(5, 'System Analysis', 'admin@gmail.com', 'janina', 'dfgsgsdte', '2019-02-21 10:24:53', '2019-02-21 10:24:53'),
(6, 'Communication and Networking', 'teacher@gmail.com', 'Test sms', 'mhfhhf', '2019-02-21 10:28:05', '2019-02-21 10:28:05'),
(7, 'System Analysis', 'student@gmail.com', 'janina', 'sdvasdvav', '2019-02-21 10:30:53', '2019-02-21 10:30:53'),
(8, 'sdcXCZX', 'add@gmail.com', 'asdlja;l', '\'akd;aljda', '2019-02-21 10:31:59', '2019-02-21 10:31:59'),
(9, 'sdasdf', 'asdasd@gmail.com', 'asldkja', 'lasdkjfadf', '2019-02-21 10:33:41', '2019-02-21 10:33:41'),
(10, 'asdjh', 'ajsdh@fn.com', 'akdsjhlakh', 'aksdjhkad', '2019-02-21 10:35:37', '2019-02-21 10:35:37'),
(11, 'aksdhalk', 'adew@gmail.com', 'aksdhka', 'afga', '2019-02-21 10:38:07', '2019-02-21 10:38:07'),
(12, 'vvv', 'vvv@gmail.com', 'Test sms', 'ttt', '2019-02-21 14:04:19', '2019-02-21 14:04:19'),
(13, 'suma', 'suma@gmail.com', 'sss', 'hello, Tariqul', '2019-02-22 12:09:38', '2019-02-22 12:09:38');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `teacher_id`, `name`, `slug`, `details`, `image`, `created_at`, `updated_at`) VALUES
(13, 6, 'Codeigniter php framework', 'codeigniter-php-framework', 'Details about codeigniter php framework.', 'codeigniter-php-framework-2019-01-14-5c3c562a3e424.jpg', '2019-01-14 03:28:10', '2019-01-14 03:28:10'),
(17, 1, 'Hypertext Markup Language.', 'hypertext-markup-language', 'W3 standard html code.', 'hypertext-markup-language-2019-01-14-5c3c57c47d563.png', '2019-01-14 03:35:00', '2019-01-14 03:35:00'),
(24, 1, 'Chemistry', 'chemistry', 'Chemistry is the scientific discipline involved with elements and compounds composed of atoms, molecules and ions: their composition, structure, properties, behavior and the changes they undergo during a reaction with other substances.', 'chemistry-2019-02-20-5c6d2ec0ea941.jpg', '2019-02-20 04:41:05', '2019-02-20 04:41:05'),
(25, 1, 'Differential Equeation', 'differential-equeation', 'This course is intended to expose you to the basic ideas of Differential Equations combined with some ideas from Linear Algebra. To be successful, a student must be able at the end of the class to solve the majority of the problems with no external help .', 'differential-equeation-2019-02-21-5c6e652e5aae2.jpg', '2019-02-21 02:45:35', '2019-02-21 02:45:35'),
(26, 7, 'Discrete Mathematics', 'discrete-mathematics', 'Tree', 'discrete-mathematics-2019-02-23-5c70e8eda40f8.jpg', '2019-02-23 00:32:14', '2019-02-23 00:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `course_post`
--

CREATE TABLE `course_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_post`
--

INSERT INTO `course_post` (`id`, `course_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 12, 1, '2019-02-19 04:06:15', '2019-02-19 04:06:15'),
(2, 12, 1, '2019-02-19 05:49:33', '2019-02-19 05:49:33'),
(3, 12, 2, '2019-02-19 05:51:40', '2019-02-19 05:51:40'),
(4, 16, 3, '2019-02-19 23:08:09', '2019-02-19 23:08:09'),
(5, 17, 4, '2019-02-20 01:28:18', '2019-02-20 01:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`id`, `course_id`, `student_id`, `created_at`, `updated_at`) VALUES
(20, 17, 11, '2019-01-15 22:38:18', '2019-01-15 22:38:18'),
(21, 16, 11, '2019-01-15 22:38:26', '2019-01-15 22:38:26'),
(22, 17, 1, '2019-01-15 22:38:47', '2019-01-15 22:38:47'),
(23, 14, 1, '2019-01-15 22:38:52', '2019-01-15 22:38:52'),
(24, 16, 1, '2019-01-22 23:19:57', '2019-01-22 23:19:57'),
(25, 12, 1, '2019-02-19 22:29:01', '2019-02-19 22:29:01'),
(26, 24, 1, '2019-02-21 03:01:45', '2019-02-21 03:01:45'),
(27, 26, 1, '2019-02-26 04:48:55', '2019-02-26 04:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher`
--

CREATE TABLE `course_teacher` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_10_153519_create_courses_table', 1),
(4, '2019_01_11_071612_create_course_post_table', 1),
(5, '2019_01_11_114228_create_course_teacher_table', 1),
(6, '2019_01_13_060809_create_teachers_table', 1),
(7, '2019_01_13_065827_create_students_table', 1),
(8, '2019_01_14_062756_create_posts_table', 1),
(9, '2019_01_15_133051_create_course_student_table', 2),
(10, '2019_01_15_164038_create_course_students_table', 3),
(11, '2019_01_15_183131_create_assignments_table', 4),
(12, '2019_02_19_114056_create_posts_table', 5),
(13, '2019_02_21_075921_create_subscribers_table', 6),
(14, '2019_02_21_152146_create_contacts_table', 7),
(15, '2019_03_10_200043_create_jobs_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('teacher@gmail.com', '$2y$10$FW.lU4CmE/3KmgBPPJJ1LelSUjqV5pQuV.9.bd6WaSkAeinB7yL1G', '2019-03-11 00:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `teacher_id`, `course_id`, `title`, `slug`, `image`, `body`, `course_link`, `view_count`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 17, 'what is HTML?', 'what-is-html', 'what-is-html-2019-02-20-5c6d0191610ca.png', 'Hypertext Markup Language is the standard markup language for creating web pages and web applications. With Cascading Style Sheets and JavaScript, it forms a triad of cornerstone technologies for the World Wide Web.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/CKlh1lwe2rY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, '2019-02-20 01:28:18', '2019-02-20 01:28:18'),
(5, 6, 13, 'What is Codeigniter Framework?', 'what-is-codeigniter-framework', 'what-is-codeigniter-framework-2019-02-20-5c6d37448b3c4.png', 'CodeIgniter is an open-source software rapid development web framework, for use in building dynamic web sites with PHP.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/i3li9XeviVo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, '2019-02-20 05:17:24', '2019-02-20 05:17:24'),
(6, 1, 24, 'Chemistry', 'chemistry', 'chemistry-2019-02-22-5c703d700ba8c.jpg', 'What is Chemistry ?', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/t8x3wdXZGEY\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, '2019-02-22 12:20:32', '2019-02-22 12:20:32'),
(7, 1, 24, 'Periodic Table Song', 'periodic-table-song', 'periodic-table-song-2019-02-22-5c70403f2c46b.png', 'About Periodic Table', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/rz4Dd1I_fX0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0, 0, '2019-02-22 12:32:31', '2019-02-22 12:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'student',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `about`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Student', 'student@gmail.com', NULL, NULL, '$2y$10$/dEToU2atjZS9ZwJNGTlhO5AFWiZiiiqEit7ZQV3iTj1jWJn1dwqC', 'student', 'Wh0F1l8DG3IF0LWp9s4YwHWWORbeI0MJGgVXhyzBWnil1uIu1tZ8ZThBNtzu', '2019-01-14 00:31:18', '2019-01-14 00:31:18'),
(11, 'Student 1', 'student1@gmail.com', NULL, NULL, '$2y$10$5JdFdJ/6UCH5DeEuFWA7IOdkeCSufPHvRtK9AW7Fo27AVuLRCRp.y', 'student', 'PrsY5wQ1b41ep5jDliJ4l91LcquUZSXrou0SpVnq1ph0WGa58FUqnEuYaF6r', '2019-01-15 00:04:58', '2019-01-15 00:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sabbir@gmail.com', '2019-02-21 02:20:27', '2019-02-21 02:20:27'),
(2, 'abir@gmail.com', '2019-02-21 02:38:35', '2019-02-21 02:38:35'),
(3, 'kamal@gmail.com', '2019-02-22 12:48:21', '2019-02-22 12:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_valid` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'teacher',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `about`, `image`, `email_verified_at`, `password`, `is_valid`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'teacher@gmail.com', 'PHP Lecturer', 'john-doe-2019-02-19-5c6c402431ed3.jpg', NULL, '$2y$10$bHRsYx8WZPyF/.l7aKr4web.Mms4MhomNqFAiIm4o./p8DugfvZIy', 1, 'teacher', 'HPC00NeKIrE4tFTElZRzipegoKnMlkqGv4mEgq1t0b0mK2L6Xu3SaWbJ1LBI', '2019-01-14 00:34:01', '2019-03-11 00:13:08'),
(6, 'Debid Luich', 'teacher1@gmail.com', 'Physics', 'john-doe-2019-01-16-5c3ed80181efa.jpeg', NULL, '$2y$10$eXaXp7MiWMKEyJZy4Q6ptOGFvmhgcIGls2Ogh9CpfaDNAL1sUlLf2', 1, 'teacher', NULL, '2019-01-15 00:06:55', '2019-03-11 00:51:30'),
(20, 'Ahmad ul hoq Nadim', 'ahmadulhoqnadim@gamil.com', 'asdasd', 'default.jpg', NULL, '$2y$10$jIMwYwSlTWBkcjE0RejGnOGbveVchFsxw3Q17st5hlfh8Zgbq5K1S', 1, 'teacher', '56htSKx0KipPzE6kWKkpnmT0ssbz0dr1AtDAKhg01SqC1HVrZ9kPXTywOWxo', '2019-03-11 00:33:52', '2019-03-11 00:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$UFEEIvikSab5EkUcrq/rwu9Cr2x3EIEKr/80oapHBcBBluj8fxoRS', 'admin', 'k2FxD7nQPGnuravOd9BvJ2ZmbLfGZ7JqMFzcqwtwDmJLL2XGgkxHTvHeDTVG', '2019-01-14 00:33:18', '2019-03-10 14:30:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_post`
--
ALTER TABLE `course_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course_post`
--
ALTER TABLE `course_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `course_teacher`
--
ALTER TABLE `course_teacher`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
