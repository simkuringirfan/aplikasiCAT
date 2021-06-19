-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 10:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cat`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'manage Administrator'),
(2, 'Operator', 'Manage Operator'),
(3, 'User', 'Akses untuk Lihat Saja'),
(4, 'Ujian', 'Login Ujian');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(3, 2),
(4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'irfan@gmail.com', 1, '2021-04-08 21:34:11', 1),
(2, '::1', 'irfan@gmail.com', 1, '2021-04-08 21:49:57', 1),
(3, '::1', 'irfan@gmail.com', 1, '2021-04-08 22:34:41', 1),
(4, '::1', 'henti@gmail.com', 2, '2021-04-08 22:36:06', 1),
(5, '::1', 'irfan@gmail.com', 1, '2021-04-08 22:36:17', 1),
(6, '::1', 'irfan@gmail.com', 1, '2021-04-08 22:37:41', 1),
(7, '::1', 'irfan@gmail.com', 1, '2021-04-08 22:38:30', 1),
(8, '::1', 'irfan@gmail.com', 1, '2021-04-08 22:38:49', 1),
(9, '::1', 'henti@gmail.com', 2, '2021-04-08 22:38:59', 1),
(10, '::1', 'jafar@gmail.com', 4, '2021-04-08 22:44:38', 1),
(11, '::1', 'henti@gmail.com', 2, '2021-04-08 22:44:51', 1),
(12, '::1', 'irfan@gmail.com', 1, '2021-04-08 22:45:00', 1),
(13, '::1', 'henti@gmail.com', 2, '2021-04-08 22:51:20', 1),
(14, '::1', 'irfan@gmail.com', 1, '2021-04-08 23:11:48', 1),
(15, '::1', 'jafar@gmail.com', 4, '2021-04-08 23:13:43', 1),
(16, '::1', 'henti@gmail.com', 2, '2021-04-08 23:14:01', 1),
(17, '::1', 'irfan@gmail.com', 1, '2021-04-08 23:22:45', 1),
(18, '::1', 'jafar@gmail.com', 4, '2021-04-08 23:24:22', 1),
(19, '::1', 'hrnti', NULL, '2021-04-08 23:32:03', 0),
(20, '::1', 'henti@gmail.com', 2, '2021-04-08 23:32:06', 1),
(21, '::1', 'irfan@gmail.com', 1, '2021-04-08 23:34:47', 1),
(22, '::1', 'henti@gmail.com', 2, '2021-04-08 23:36:02', 1),
(23, '::1', 'irfan@gmail.com', 1, '2021-04-09 21:41:16', 1),
(24, '::1', 'henti@gmail.com', 2, '2021-04-09 21:41:32', 1),
(25, '::1', 'irfan@gmail.com', 1, '2021-04-09 22:42:20', 1),
(26, '::1', 'jafar@gmail.com', 4, '2021-04-09 22:42:46', 1),
(27, '::1', 'hent', NULL, '2021-04-09 22:44:10', 0),
(28, '::1', 'henti@gmail.com', 2, '2021-04-09 22:44:13', 1),
(29, '::1', 'irfan@gmail.com', 1, '2021-04-10 20:51:09', 1),
(30, '::1', 'henti@gmail.com', 2, '2021-04-11 10:39:48', 1),
(31, '::1', 'irfan@gmail.com', 1, '2021-04-11 10:39:52', 1),
(32, '::1', 'henti@gmail.com', 2, '2021-04-11 10:44:00', 1),
(33, '::1', 'irfan@gmail.com', 1, '2021-04-11 10:44:32', 1),
(34, '::1', 'irfan@gmail.com', 1, '2021-04-11 10:52:07', 1),
(35, '::1', 'irfan@gmail.com', 1, '2021-04-11 16:16:55', 1),
(36, '::1', 'irfan@gmail.com', 1, '2021-04-11 20:37:58', 1),
(37, '::1', 'irfan@gmail.com', 1, '2021-04-11 21:11:16', 1),
(38, '::1', 'irfan@gmail.com', 1, '2021-04-15 21:16:04', 1),
(39, '::1', 'irfan@gmail.com', 1, '2021-04-15 21:31:16', 1),
(40, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:07:33', 1),
(41, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:26:48', 1),
(42, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:27:59', 1),
(43, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:29:14', 1),
(44, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:30:33', 1),
(45, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:31:26', 1),
(46, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:32:09', 1),
(47, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:34:12', 1),
(48, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:35:36', 1),
(49, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:46:01', 1),
(50, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:47:12', 1),
(51, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:47:43', 1),
(52, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:50:51', 1),
(53, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:53:01', 1),
(54, '::1', 'irfan@gmail.com', 1, '2021-04-15 22:55:29', 1),
(55, '::1', 'irfan@gmail.com', 1, '2021-04-15 23:14:08', 1),
(56, '::1', 'irfan@gmail.com', 1, '2021-04-16 10:07:55', 1),
(57, '::1', 'irfan@gmail.com', 1, '2021-04-16 10:13:04', 1),
(58, '::1', 'irfan@gmail.com', 1, '2021-04-16 10:13:32', 1),
(59, '::1', 'irfan@gmail.com', 1, '2021-04-16 10:16:39', 1),
(60, '::1', 'irfan@gmail.com', 1, '2021-04-16 10:20:58', 1),
(61, '::1', 'henti@gmail.com', 2, '2021-04-16 10:22:06', 1),
(62, '::1', 'irfan@gmail.com', 1, '2021-04-16 10:26:13', 1),
(63, '::1', 'irfan@gmail.com', 1, '2021-04-16 10:26:55', 1),
(64, '::1', 'ujian@gmail.com', 6, '2021-04-16 10:31:09', 1),
(65, '::1', 'henti@gmail.com', 2, '2021-04-16 10:35:46', 1),
(66, '::1', 'ujian@gmail.com', 6, '2021-04-16 10:36:26', 1),
(67, '::1', 'irfan@gmail.com', 1, '2021-04-16 21:30:11', 1),
(68, '::1', 'ujian@gmail.com', 6, '2021-04-16 21:38:19', 1),
(69, '::1', 'irfan@gmail.com', 1, '2021-04-17 12:43:30', 1),
(70, '::1', 'ujian@gmail.com', 6, '2021-04-17 16:39:26', 1),
(71, '::1', 'irfan@gmail.com', 1, '2021-04-17 17:20:16', 1),
(72, '::1', 'ujian@gmail.com', 6, '2021-04-17 17:20:46', 1),
(73, '::1', 'ujian@gmail.com', 6, '2021-04-17 19:55:32', 1),
(74, '::1', 'irfan@gmail.com', 1, '2021-04-18 13:47:41', 1),
(75, '::1', 'ujian@gmail.com', 6, '2021-04-18 13:47:50', 1),
(76, '::1', 'irfan@gmail.com', 1, '2021-04-18 14:28:07', 1),
(77, '::1', 'ujian@gmail.com', 6, '2021-04-18 14:31:26', 1),
(78, '::1', 'ujian@gmail.com', 6, '2021-04-18 19:55:47', 1),
(79, '::1', 'ujian@gmail.com', 6, '2021-04-20 21:02:57', 1),
(80, '::1', 'ujian@gmail.com', 6, '2021-04-21 05:25:23', 1),
(81, '::1', 'irfan@gmail.com', 1, '2021-04-21 05:26:49', 1),
(82, '::1', 'ujian@gmail.com', 6, '2021-04-21 05:38:20', 1),
(83, '::1', 'ujian@gmail.com', 6, '2021-04-21 12:25:48', 1),
(84, '::1', 'ujian@gmail.com', 6, '2021-04-21 15:43:42', 1),
(85, '::1', 'ujian@gmail.com', 6, '2021-04-21 21:23:18', 1),
(86, '::1', 'ujian@gmail.com', 6, '2021-04-22 13:57:41', 1),
(87, '::1', 'ujian@gmail.com', 6, '2021-04-22 17:42:06', 1),
(88, '::1', 'ujian@gmail.com', 6, '2021-04-22 23:25:16', 1),
(89, '::1', 'ujian@gmail.com', 6, '2021-04-23 10:08:25', 1),
(90, '::1', 'ujian@gmail.com', 6, '2021-04-23 13:44:35', 1),
(91, '::1', 'ujian@gmail.com', 6, '2021-04-23 20:41:04', 1),
(92, '::1', 'ujian@gmail.com', 6, '2021-04-23 21:13:14', 1),
(93, '::1', 'ujian@gmail.com', 6, '2021-04-23 21:13:26', 1),
(94, '::1', 'ujian@gmail.com', 6, '2021-04-23 21:13:33', 1),
(95, '::1', 'ujian@gmail.com', 6, '2021-04-23 21:18:34', 1),
(96, '::1', 'ujian@gmail.com', 6, '2021-04-23 21:26:08', 1),
(97, '::1', 'irfan@gmail.com', 1, '2021-04-23 22:43:27', 1),
(98, '::1', 'irfan@gmail.com', 1, '2021-04-24 10:27:18', 1),
(99, '::1', 'irfan@gmail.com', 1, '2021-04-24 14:09:20', 1),
(100, '::1', 'heri@gmai.com', 7, '2021-04-24 14:14:46', 1),
(101, '::1', 'irfan@gmail.com', 1, '2021-04-24 14:33:07', 1),
(102, '::1', 'ujian@gmail.com', 6, '2021-04-24 14:40:26', 1),
(103, '::1', 'irfan@gmail.com', 1, '2021-04-24 14:41:14', 1),
(104, '::1', 'ujian@gmail.com', 6, '2021-04-24 15:40:43', 1),
(105, '::1', 'irfan@gmail.com', 1, '2021-04-24 15:44:23', 1),
(106, '::1', 'irfan@gmail.com', 1, '2021-04-24 15:44:41', 1),
(107, '::1', 'ujian@gmail.com', 6, '2021-04-24 15:48:00', 1),
(108, '::1', 'ujian@gmail.com', 6, '2021-04-24 15:48:12', 1),
(109, '::1', 'irfan@gmail.com', 1, '2021-04-24 15:48:20', 1),
(110, '::1', 'irfan@gmail.com', 1, '2021-04-24 21:00:31', 1),
(111, '::1', 'irfan@gmail.com', 1, '2021-04-24 21:42:27', 1),
(112, '::1', 'irfan@gmail.com', 1, '2021-04-24 21:45:55', 1),
(113, '::1', 'ujian@gmail.com', 6, '2021-04-24 21:46:47', 1),
(114, '::1', 'irfan@gmail.com', 1, '2021-04-24 22:13:24', 1),
(115, '::1', 'ujian@gmail.com', 6, '2021-04-24 22:17:11', 1),
(116, '::1', 'ujian@gmail.com', 6, '2021-04-27 22:58:54', 1),
(117, '::1', 'ujian@gmail.com', 6, '2021-04-27 23:23:30', 1),
(118, '::1', 'irfan@gmail.com', 1, '2021-04-27 23:32:35', 1),
(119, '::1', 'irfan@gmail.com', 1, '2021-04-27 23:33:47', 1),
(120, '::1', 'ujian@gmail.com', 6, '2021-04-27 23:36:23', 1),
(121, '::1', 'ujian@gmail.com', 6, '2021-04-27 23:37:24', 1),
(122, '::1', 'irfan@gmail.com', 1, '2021-04-27 23:44:42', 1),
(123, '::1', 'irfan@gmail.com', 1, '2021-04-28 21:35:27', 1),
(124, '::1', 'irfan@gmail.com', 1, '2021-04-28 21:36:22', 1),
(125, '::1', 'irfan@gmail.com', 1, '2021-04-28 21:53:56', 1),
(126, '::1', 'irfan@gmail.com', 1, '2021-04-29 22:14:52', 1),
(127, '::1', 'irfan@gmail.com', 1, '2021-05-01 21:31:35', 1),
(128, '::1', 'ujian@gmail.com', 6, '2021-05-01 21:45:36', 1),
(129, '::1', 'irfan@gmail.com', 1, '2021-05-01 21:45:44', 1),
(130, '::1', 'irfan@gmail.com', 1, '2021-05-02 14:26:35', 1),
(131, '::1', 'irfan@gmail.com', 1, '2021-05-02 22:54:32', 1),
(132, '::1', 'irfan@gmail.com', 1, '2021-05-03 23:58:35', 1),
(133, '::1', 'irfan@gmail.com', 1, '2021-05-05 21:56:21', 1),
(134, '::1', 'irfan@gmail.com', 1, '2021-05-05 23:02:34', 1),
(135, '::1', 'irfan@gmail.com', 1, '2021-05-06 20:51:45', 1),
(136, '::1', 'ujian@gmail.com', 6, '2021-05-06 20:52:30', 1),
(137, '::1', 'ujian@gmail.com', 6, '2021-05-07 22:18:26', 1),
(138, '::1', 'irfan@gmail.com', 1, '2021-05-08 11:06:28', 1),
(139, '::1', 'irfan@gmail.com', 1, '2021-05-08 22:58:17', 1),
(140, '::1', 'ujian@gmail.com', 6, '2021-05-08 23:46:05', 1),
(141, '::1', 'irfan@gmail.com', 1, '2021-05-09 21:28:44', 1),
(142, '::1', 'irfan@gmail.com', 1, '2021-05-10 21:26:36', 1),
(143, '::1', 'irfan@gmail.com', 1, '2021-05-11 21:48:19', 1),
(144, '::1', 'ujian@gmail.com', 6, '2021-05-11 22:08:49', 1),
(145, '::1', 'ujian@gmail.com', 6, '2021-05-11 22:22:23', 1),
(146, '::1', 'irfan@gmail.com', 1, '2021-05-11 23:25:38', 1),
(147, '::1', 'irfan@gmail.com', 1, '2021-05-21 10:22:17', 1),
(148, '::1', 'irfan@gmail.com', 1, '2021-05-21 18:13:40', 1),
(149, '::1', 'irfan@gmail.com', 1, '2021-05-21 20:58:38', 1),
(150, '::1', 'ujian@gmail.com', 6, '2021-05-22 22:48:20', 1),
(151, '::1', 'irfan@gmail.com', 1, '2021-05-23 10:18:34', 1),
(152, '::1', 'ujian@gmail.com', 6, '2021-05-23 11:16:11', 1),
(153, '::1', 'irfan@gmail.com', 1, '2021-05-23 11:17:19', 1),
(154, '::1', 'irfan@gmail.com', 1, '2021-05-23 11:30:12', 1),
(155, '::1', 'irfan@gmail.com', 1, '2021-05-23 11:30:44', 1),
(156, '::1', 'irfan@gmail.com', 1, '2021-05-23 11:31:24', 1),
(157, '::1', 'irfan@gmail.com', 1, '2021-05-23 11:32:04', 1),
(158, '::1', 'irfan@gmail.com', 1, '2021-05-23 11:32:41', 1),
(159, '::1', 'ujian@gmail.com', 6, '2021-05-23 13:56:04', 1),
(160, '::1', 'irfan@gmail.com', 1, '2021-05-23 15:53:47', 1),
(161, '::1', 'irfan@gmail.com', 1, '2021-05-23 15:54:57', 1),
(162, '::1', 'irfan@gmail.com', 1, '2021-05-23 15:55:21', 1),
(163, '::1', 'irfan@gmail.com', 1, '2021-05-23 15:55:50', 1),
(164, '::1', 'irfan@gmail.com', 1, '2021-05-23 15:57:39', 1),
(165, '::1', 'irfan@gmail.com', 1, '2021-05-23 16:01:52', 1),
(166, '::1', 'irfan@gmail.com', 1, '2021-05-23 16:03:22', 1),
(167, '::1', 'irfan@gmail.com', 1, '2021-05-23 17:03:03', 1),
(168, '::1', 'irfan@gmail.com', 1, '2021-05-23 17:04:26', 1),
(169, '::1', 'irfan@gmail.com', 1, '2021-05-23 21:39:10', 1),
(170, '::1', 'ujian@gmail.com', 6, '2021-05-23 21:39:47', 1),
(171, '::1', 'ujian@gmail.com', 6, '2021-05-23 21:40:00', 1),
(172, '::1', 'ujian@gmail.com', 6, '2021-05-23 21:40:53', 1),
(173, '::1', 'irfan@gmail.com', 1, '2021-05-23 21:41:16', 1),
(174, '::1', 'ujian@gmail.com', 6, '2021-05-23 21:51:04', 1),
(175, '::1', 'irfan@gmail.com', 1, '2021-05-23 21:51:26', 1),
(176, '::1', 'irfan@gmail.com', 1, '2021-05-24 23:24:25', 1),
(177, '::1', 'irfan', NULL, '2021-05-26 17:16:43', 0),
(178, '::1', 'cidut93@gmail.com', NULL, '2021-05-26 17:16:56', 0),
(179, '::1', 'irfan@gmail.com', 1, '2021-05-26 17:17:18', 1),
(180, '::1', 'ujian@gmail.com', 6, '2021-05-26 19:28:31', 1),
(181, '::1', 'irfan@gmail.com', 1, '2021-05-26 19:32:19', 1),
(182, '::1', 'irfan@gmail.com', 1, '2021-05-26 21:03:53', 1),
(183, '::1', 'irfan@gmail.com', 1, '2021-05-26 21:04:38', 1),
(184, '::1', 'ujian@gmail.com', 6, '2021-05-26 21:04:47', 1),
(185, '::1', 'ujian@gmail.com', 6, '2021-05-26 21:06:04', 1),
(186, '::1', 'irfan@gmail.com', 1, '2021-05-26 21:07:16', 1),
(187, '::1', 'ujian@gmail.com', 6, '2021-05-26 21:07:33', 1),
(188, '::1', 'ujian@gmail.com', 6, '2021-05-26 21:10:35', 1),
(189, '::1', 'ujian@gmail.com', 6, '2021-05-26 21:11:08', 1),
(190, '::1', 'irfan@gmail.com', 1, '2021-06-02 21:48:16', 1),
(191, '::1', 'irfan@gmail.com', 1, '2021-06-03 21:04:30', 1),
(192, '::1', 'irfan@gmail.com', 1, '2021-06-04 07:08:43', 1),
(193, '::1', 'irfan@gmail.com', 1, '2021-06-04 07:51:30', 1),
(194, '::1', 'irfan', NULL, '2021-06-04 22:13:53', 0),
(195, '::1', 'irfan', NULL, '2021-06-04 22:13:58', 0),
(196, '::1', 'irfan@gmail.com', 1, '2021-06-04 22:14:09', 1),
(197, '::1', 'irfan@gmail.com', 1, '2021-06-05 08:14:29', 1),
(198, '::1', 'irfan@gmail.com', 1, '2021-06-05 10:00:22', 1),
(199, '::1', 'ujian@gmail.com', 6, '2021-06-05 10:29:59', 1),
(200, '::1', 'irfan@gmail.com', 1, '2021-06-05 10:33:59', 1),
(201, '::1', 'irfan@gmail.com', 1, '2021-06-05 11:14:40', 1),
(202, '::1', 'ujian@gmail.com', 6, '2021-06-05 11:22:43', 1),
(203, '::1', 'ujian@gmail.com', 6, '2021-06-05 11:30:51', 1),
(204, '::1', 'ujian@gmail.com', 6, '2021-06-05 11:38:00', 1),
(205, '::1', 'irfan@gmail.com', 1, '2021-06-05 13:48:20', 1),
(206, '::1', 'ujian@gmail.com', 6, '2021-06-05 14:48:54', 1),
(207, '::1', 'ujian@gmail.com', 6, '2021-06-05 14:50:00', 1),
(208, '::1', 'irfan@gmail.com', 1, '2021-06-05 16:13:43', 1),
(209, '::1', 'ujian@gmail.com', 6, '2021-06-05 16:27:55', 1),
(210, '::1', 'ujian@gmail.com', 6, '2021-06-05 16:32:26', 1),
(211, '::1', 'ujian@gmail.com', 6, '2021-06-05 16:36:35', 1),
(212, '::1', 'ujian@gmail.com', 6, '2021-06-05 18:10:49', 1),
(213, '::1', 'ujian@gmail.com', 6, '2021-06-05 18:13:42', 1),
(214, '::1', 'ujian@gmail.com', 6, '2021-06-05 18:17:39', 1),
(215, '::1', 'ujian@gmail.com', 6, '2021-06-05 18:21:35', 1),
(216, '::1', 'ujian@gmail.com', 6, '2021-06-05 18:22:57', 1),
(217, '::1', 'ujian@gmail.com', 6, '2021-06-05 20:41:22', 1),
(218, '::1', 'irfan@gmail.com', 1, '2021-06-06 21:34:04', 1),
(219, '::1', 'ujian@gmail.com', 6, '2021-06-06 21:34:32', 1),
(220, '::1', 'ujian@gmail.com', 6, '2021-06-07 10:30:55', 1),
(221, '::1', 'irfan@gmail.com', 1, '2021-06-07 10:37:24', 1),
(222, '::1', 'irfan@gmail.com', 1, '2021-06-07 11:30:53', 1),
(223, '::1', 'irfan@gmail.com', 1, '2021-06-07 12:48:00', 1),
(224, '::1', 'irfan@gmail.com', 1, '2021-06-07 20:49:01', 1),
(225, '::1', 'irfan@gmail.com', 1, '2021-06-12 10:55:57', 1),
(226, '::1', 'irfan@gmail.com', 1, '2021-06-13 20:55:00', 1),
(227, '::1', 'irfan@gmail.com', 1, '2021-06-13 21:41:37', 1),
(228, '::1', '20210405185029', NULL, '2021-06-13 22:35:15', 0),
(229, '::1', 'ujian@gmail.com', 6, '2021-06-13 22:35:17', 1),
(230, '::1', 'irfan@gmail.com', 1, '2021-06-18 16:49:02', 1),
(231, '::1', 'ujian@gmail.com', 6, '2021-06-18 17:20:15', 1),
(232, '::1', 'ujian@gmail.com', 6, '2021-06-18 18:26:28', 1),
(233, '::1', 'irfan@gmail.com', 1, '2021-06-18 21:08:13', 1),
(234, '::1', 'irfan@gmail.com', 1, '2021-06-18 22:01:16', 1),
(235, '::1', 'ujian@gmail.com', 6, '2021-06-18 22:02:59', 1),
(236, '::1', 'irfan@gmail.com', 1, '2021-06-18 22:04:09', 1),
(237, '::1', 'irfan@gmail.com', 1, '2021-06-18 23:44:22', 1),
(238, '::1', 'irfan@gmail.com', 1, '2021-06-18 23:47:53', 1),
(239, '::1', 'irfan@gmail.com', 1, '2021-06-19 12:36:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-all', 'Adminitrator'),
(2, 'manage-operator', 'Operator'),
(3, 'manage-user', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bidang_test`
--

CREATE TABLE `bidang_test` (
  `id` int(11) NOT NULL,
  `bidang_test` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidang_test`
--

INSERT INTO `bidang_test` (`id`, `bidang_test`, `create_date`, `update_date`) VALUES
(11, 'q', '2021-03-22 04:40:30', '2021-04-24 10:49:55'),
(12, 'w', '2021-03-22 04:40:32', '2021-04-29 23:14:54'),
(13, 'e', '2021-03-22 04:40:36', '2021-03-22 04:40:36'),
(15, 't', '2021-03-22 04:40:40', '2021-03-22 04:40:40'),
(16, 'y', '2021-03-22 04:40:41', '2021-03-22 04:40:41'),
(17, 'u', '2021-03-22 04:40:43', '2021-03-22 04:40:43'),
(18, 'i', '2021-03-22 04:40:45', '2021-03-22 04:40:45'),
(19, 'o', '2021-03-22 04:40:46', '2021-03-22 04:40:46'),
(20, '7', '2021-03-22 04:40:51', '2021-03-22 04:40:51'),
(21, '8', '2021-03-22 04:40:53', '2021-03-22 04:40:53'),
(22, 'da', '2021-03-22 04:40:56', '2021-03-22 04:40:56'),
(23, 'f', '2021-03-22 04:40:59', '2021-03-22 04:40:59'),
(24, 'g', '2021-03-22 04:41:01', '2021-03-22 04:41:01'),
(26, 'kkk', '2021-04-10 21:27:12', '2021-04-10 21:27:12'),
(27, 'Bidang Pendidikan', '2021-04-10 23:17:54', '2021-04-10 23:17:54'),
(28, 'Bidang Pertanian', '2021-04-11 10:45:34', '2021-04-11 10:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `jumlah_soal` int(11) NOT NULL,
  `waktu_ujian` varchar(200) NOT NULL,
  `kode_test` int(11) NOT NULL,
  `id_bidang_test` int(11) NOT NULL,
  `id_sub_bidang_test` int(11) NOT NULL,
  `id_unit_kerja` int(11) NOT NULL,
  `tata_tertib` varchar(1000) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `jumlah_soal`, `waktu_ujian`, `kode_test`, `id_bidang_test`, `id_sub_bidang_test`, `id_unit_kerja`, `tata_tertib`, `create_date`, `update_date`) VALUES
(6, 10, '120', 2, 0, 0, 0, 'Bismillaahirrohmaanirrohiim <br>                                                    Assalamu\'alaikum <br><br>                                                      Bagi para peserta harap melakukan ujian dengan tenang , InsyaAllah agar tidak mengganggu ketengan peserta lain', '2021-05-04 02:00:53', '2021-05-04 02:00:53'),
(7, 50, '30', 1, 0, 0, 0, 'Bismillaahirrohmaanirrohiim <br>                                                     Assalamu\'alaikum <br><br>                                                      Bagi para peserta harap melakukan ujian dengan tenang , InsyaAllah agar tidak mengganggu ketengan peserta lain', '2021-05-23 10:24:13', '2021-05-23 10:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `detail_ujian_cat`
--

CREATE TABLE `detail_ujian_cat` (
  `id` int(11) NOT NULL,
  `no_reg_ujian` char(14) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `jawab` varchar(200) NOT NULL,
  `hasil` varchar(10) NOT NULL,
  `point` float NOT NULL,
  `status` char(1) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_ujian_cat`
--

INSERT INTO `detail_ujian_cat` (`id`, `no_reg_ujian`, `no_soal`, `no`, `jawab`, `hasil`, `point`, `status`, `create_date`, `update_date`) VALUES
(77, '20210405185712', 7, 1, '', '', 0, '', '2021-05-26 17:17:48', '2021-05-26 17:17:48'),
(78, '20210405185712', 8, 2, 'a. Penggagas', 'Salah', 0, '1', '2021-05-26 17:17:48', '2021-05-26 19:28:14'),
(79, '20210405185712', 9, 3, '', '', 0, '', '2021-05-26 17:17:48', '2021-05-26 17:17:48'),
(80, '20210405185712', 10, 4, '', '', 0, '', '2021-05-26 17:17:48', '2021-05-26 17:17:48'),
(81, '20210405185712', 11, 5, '', '', 0, '', '2021-05-26 17:17:48', '2021-05-26 17:17:48'),
(82, '20210405185712', 12, 6, '', '', 0, '', '2021-05-26 17:17:48', '2021-05-26 17:17:48'),
(83, '20210405185712', 13, 7, '', '', 0, '', '2021-05-26 17:17:48', '2021-05-26 17:17:48'),
(84, '20210502230249', 1, 1, '', '', 0, '', '2021-05-26 19:28:44', '2021-05-26 19:28:44'),
(85, '20210502230249', 5, 2, '', '', 0, '', '2021-05-26 19:28:44', '2021-05-26 19:28:44'),
(86, '20210502230249', 6, 3, '', '', 0, '', '2021-05-26 19:28:44', '2021-05-26 19:28:44'),
(223, '20210405185029', 1, 1, 'a.kartu keluarga', 'Benar', 7.5, '1', '2021-06-13 21:43:14', '2021-06-18 19:33:00'),
(224, '20210405185029', 5, 2, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(225, '20210405185029', 6, 3, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(226, '20210405185029', 14, 4, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(227, '20210405185029', 15, 5, 'd.kartu kemana', 'Salah', 0, '1', '2021-06-13 21:43:14', '2021-06-18 22:08:29'),
(228, '20210405185029', 16, 6, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(229, '20210405185029', 17, 7, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(230, '20210405185029', 18, 8, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(231, '20210405185029', 19, 9, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(232, '20210405185029', 20, 10, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(233, '20210405185029', 21, 11, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(234, '20210405185029', 22, 12, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(235, '20210405185029', 23, 13, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(236, '20210405185029', 24, 14, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(237, '20210405185029', 25, 15, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(238, '20210405185029', 26, 16, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(239, '20210405185029', 27, 17, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(240, '20210405185029', 28, 18, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(241, '20210405185029', 29, 19, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(242, '20210405185029', 30, 20, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(243, '20210405185029', 31, 21, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(244, '20210405185029', 32, 22, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(245, '20210405185029', 33, 23, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(246, '20210405185029', 34, 24, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(247, '20210405185029', 35, 25, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(248, '20210405185029', 36, 26, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(249, '20210405185029', 37, 27, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(250, '20210405185029', 38, 28, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(251, '20210405185029', 39, 29, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(252, '20210405185029', 40, 30, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(253, '20210405185029', 41, 31, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(254, '20210405185029', 42, 32, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(255, '20210405185029', 43, 33, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(256, '20210405185029', 44, 34, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(257, '20210405185029', 45, 35, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(258, '20210405185029', 46, 36, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(259, '20210405185029', 47, 37, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(260, '20210405185029', 48, 38, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(261, '20210405185029', 49, 39, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(262, '20210405185029', 50, 40, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(263, '20210405185029', 51, 41, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(264, '20210405185029', 52, 42, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(265, '20210405185029', 53, 43, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(266, '20210405185029', 54, 44, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(267, '20210405185029', 55, 45, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(268, '20210405185029', 56, 46, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(269, '20210405185029', 57, 47, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14'),
(270, '20210405185029', 58, 48, '', '', 0, '', '2021-06-13 21:43:14', '2021-06-13 21:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_soal`, `jawaban`, `create_date`, `update_date`) VALUES
(3, 1, 'kartu kencana', '2021-03-28 05:36:38', '2021-03-28 05:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_test`
--

CREATE TABLE `jenis_test` (
  `id` int(11) NOT NULL,
  `nama_test` varchar(200) NOT NULL,
  `hasil_cat` varchar(10) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_test`
--

INSERT INTO `jenis_test` (`id`, `nama_test`, `hasil_cat`, `create_date`, `update_date`) VALUES
(1, 'Test Kepintaran', 'Ya', '2021-03-22 02:18:33', '2021-04-24 10:52:30'),
(2, 'Kenaikan Pangkat', 'Tidak', '2021-04-24 21:07:55', '2021-04-24 21:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1617878913, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_ujian`
--

CREATE TABLE `registrasi_ujian` (
  `id` int(11) NOT NULL,
  `no_reg_ujian` char(14) NOT NULL,
  `nik` char(16) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `jenis_kelamin` char(9) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pin_reg` char(6) NOT NULL,
  `kode_test` char(5) NOT NULL,
  `id_bidang_test` char(5) NOT NULL,
  `id_sub_bidang_test` char(5) NOT NULL,
  `id_unit_kerja` char(5) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi_ujian`
--

INSERT INTO `registrasi_ujian` (`id`, `no_reg_ujian`, `nik`, `nip`, `nama_peserta`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `pin_reg`, `kode_test`, `id_bidang_test`, `id_sub_bidang_test`, `id_unit_kerja`, `create_date`, `update_date`) VALUES
(2, '20210405185029', '-', '08672728222', 'Johari', 'option1', 'Tasikmalaya', '1993-09-15', '400022', '1', '1 - B', '5 - t', 'IKS', '2021-04-05 06:51:39', '2021-04-05 06:51:39'),
(3, '20210405185712', '-', '88399', 'DD', 'option2', 'Tasikmalaya', '2021-03-31', '726202', '2', '5', '5', 'TT', '2021-04-05 06:57:44', '2021-04-05 06:57:44'),
(7, '20210502230249', '-', '91829182', 'Heri', 'Laki-Laki', 'Bandung', '1995-05-09', '523502', '1', '27', '5', '1', '2021-05-02 23:05:00', '2021-05-02 23:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `soal` varchar(500) NOT NULL,
  `jawaban` varchar(500) NOT NULL,
  `jenis_soal` varchar(200) NOT NULL,
  `point_soal` varchar(20) NOT NULL,
  `point_max` varchar(20) NOT NULL,
  `jawaban_benar` varchar(200) NOT NULL,
  `kode_test` int(11) NOT NULL,
  `id_bidang_test` char(5) NOT NULL,
  `id_sub_bidang_test` char(5) NOT NULL,
  `id_unit_kerja` char(5) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `soal`, `jawaban`, `jenis_soal`, `point_soal`, `point_max`, `jawaban_benar`, `kode_test`, `id_bidang_test`, `id_sub_bidang_test`, `id_unit_kerja`, `create_date`, `update_date`) VALUES
(1, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.kartu kartuan;d. kartu kemana', 'pengetahuan', '10;15', '15', 'a.kartu keluarga;c.kartu kartuan', 1, '4', '5', '5', '2021-03-27 23:43:36', '2021-06-18 23:37:24'),
(5, 'Siapa penakluk Konstantinopel ?', 'a.Muhammad Al-Fatih;b.Abdul hamid II;c.Mehmet I;d.Khalid bin Walid', 'pengetahuan', '9', '9', 'a.Muhammad Al-Fatih', 1, '11', '5', 'A', '2021-04-24 21:18:42', '2021-06-18 23:47:08'),
(6, 'Dispensasi', 'a. Pelarangan;b. Kelonggaran;c. Perizinan;d. Pencegahan', 'TIU', '10', '10', 'b. Kelonggaran', 1, '11', '5', 'A', '2021-04-24 21:23:13', '2021-04-24 21:25:40'),
(7, 'Mortalitas', 'a. Angka Kematian;b. Angka Kelahiran;c. Sebangsa Hewan;d. Gerak', 'TIU', '10', '10', 'a. Angka Kematian', 2, '27', '5', 'B', '2021-04-24 21:25:28', '2021-04-24 21:25:28'),
(8, 'Kampiun', 'a. Penggagas;b. Ahli;c. Sejarah;d. Penerima;e. Juara', 'TIU', '10', '10', 'e. Juara', 2, '27', '5', 'A', '2021-04-24 21:26:29', '2021-04-24 21:26:29'),
(9, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d. kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 2, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Siapa penakluk Konstantinopel ?', 'a.Muhammad Al-Fatih;b.Abdul hamid II;c.Mehmet I;d.Khalid bin Walid', 'pengetahuan', '10', '10', 'a.Muhammad Al-Fatih', 2, '11', '5', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Dispensasi', 'a. Pelarangan;b. Kelonggaran;c. Perizinan;d. Pencegahan', 'TIU', '10', '10', 'b. Kelonggaran', 2, '11', '5', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Mortalitas', 'a. Angka Kematian;b. Angka Kelahiran;c. Sebangsa Hewan;d. Gerak', 'TIU', '10', '10', 'a. Angka Kematian', 2, '27', '5', 'B', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Kampiun', 'a. Penggagas;b. Ahli;c. Sejarah;d. Penerima;e. Juara', 'TIU', '10', '10', 'e. Juara', 2, '27', '5', 'A', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kemana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'apa kepanjangan kk?', 'a.kartu keluarga;b.kartu kencana;c.karta kartuan;d.kartu kencana', 'pengetahuan', '10', '10', 'a.kartu keluarga', 1, '4', '5', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_bidang_test`
--

CREATE TABLE `sub_bidang_test` (
  `id` int(11) NOT NULL,
  `sub_bidang_test` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_bidang_test`
--

INSERT INTO `sub_bidang_test` (`id`, `sub_bidang_test`, `create_date`, `update_date`) VALUES
(5, 'Bidang Ternak', '2021-03-27 11:45:40', '2021-04-11 12:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_cat`
--

CREATE TABLE `ujian_cat` (
  `id` int(11) NOT NULL,
  `no_reg_ujian` char(14) NOT NULL,
  `id_config` int(11) NOT NULL,
  `soal_dijawab` int(11) NOT NULL,
  `belum_jawab` int(11) NOT NULL,
  `selesai_ujian` varchar(50) NOT NULL,
  `nilai_total` float NOT NULL,
  `nilai_tambah` float NOT NULL,
  `detail_nilai_tambah` varchar(500) NOT NULL,
  `grade` char(1) NOT NULL,
  `status_ujian` varchar(15) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ujian_cat`
--

INSERT INTO `ujian_cat` (`id`, `no_reg_ujian`, `id_config`, `soal_dijawab`, `belum_jawab`, `selesai_ujian`, `nilai_total`, `nilai_tambah`, `detail_nilai_tambah`, `grade`, `status_ujian`, `create_date`, `update_date`) VALUES
(13, '20210405185712', 6, 1, 6, '130.43333333333 Menit', 0, 160, 'Presentasi = 90;  Speaking = 70; ', 'C', 'Selesai', '2021-05-26 17:17:48', '2021-06-05 09:54:02'),
(14, '20210502230249', 7, 0, 3, '81.266666666667 Menit', 0, 0, '', 'C', 'Selesai', '2021-05-26 19:28:44', '2021-05-26 21:03:30'),
(21, '20210405185029', 7, 2, 46, '99.383333333333 Menit', 2, 0, '', 'C', 'Selesai', '2021-06-13 21:43:14', '2021-06-18 23:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id` int(11) NOT NULL,
  `unit_kerja` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id`, `unit_kerja`, `create_date`, `update_date`) VALUES
(1, 'SMP N 1 Panumbangan', '2021-05-01 21:41:49', '2021-05-01 21:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `user_image`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'default.jpg', 'irfan@gmail.com', 'irfan', '$2y$10$DTtgtICAG2/TwoFPoaYSp./zyF46kYVN31Vn0moWQ.dbF7HVtDrf6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-08 21:34:06', '2021-04-08 21:34:06', NULL),
(2, NULL, 'default.jpg', 'henti@gmail.com', 'henti', '$2y$10$VGyFIjFrekdXieNVxjzDaeQNSFL1ZBdQMwWTFvcEoXPpbA2AvqMtm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-08 22:14:28', '2021-04-08 22:14:28', NULL),
(6, NULL, 'default.jpg', 'ujian@gmail.com', 'ujian', '$2y$10$H6Hb5nJ7aGJ9fyfL7444POc03tCa6Bjue/2OGvj8Oo3nJZZq.QeAO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-04-16 10:30:29', '2021-04-16 10:30:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `bidang_test`
--
ALTER TABLE `bidang_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_ujian_cat`
--
ALTER TABLE `detail_ujian_cat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_reg_ujian` (`no_reg_ujian`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_test`
--
ALTER TABLE `jenis_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi_ujian`
--
ALTER TABLE `registrasi_ujian`
  ADD PRIMARY KEY (`no_reg_ujian`),
  ADD KEY `id_reg_ujian` (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_bidang_test`
--
ALTER TABLE `sub_bidang_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ujian_cat`
--
ALTER TABLE `ujian_cat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_no_reg_ujian` (`no_reg_ujian`);

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bidang_test`
--
ALTER TABLE `bidang_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_ujian_cat`
--
ALTER TABLE `detail_ujian_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_test`
--
ALTER TABLE `jenis_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrasi_ujian`
--
ALTER TABLE `registrasi_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `sub_bidang_test`
--
ALTER TABLE `sub_bidang_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ujian_cat`
--
ALTER TABLE `ujian_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
