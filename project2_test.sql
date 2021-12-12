-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2021 lúc 06:40 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project2_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'TTK', 'super@gmail.com', '$2a$12$l2bcMWkzygeMaFGt8Vt0JOAL.9a5sbcG7nzaqaD2dz7CEUKAMw/s.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemdanhs`
--

CREATE TABLE `diemdanhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_monhoc` int(10) UNSIGNED NOT NULL,
  `id_giaovien` int(10) UNSIGNED NOT NULL,
  `id_sinhvien` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ngaydiemdanh` datetime NOT NULL,
  `note` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diemdanhs`
--

INSERT INTO `diemdanhs` (`id`, `id_monhoc`, `id_giaovien`, `id_sinhvien`, `status`, `ngaydiemdanh`, `note`) VALUES
(1, 1, 1, 1, 0, '2021-09-17 14:00:00', ''),
(2, 1, 1, 2, 0, '2021-09-17 14:00:00', ''),
(3, 1, 1, 3, 0, '2021-09-17 14:00:00', ''),
(4, 1, 1, 4, 0, '2021-09-17 14:00:00', ''),
(5, 1, 1, 5, 0, '2021-09-17 14:00:00', ''),
(6, 1, 1, 1, 1, '2021-09-18 14:00:00', ''),
(7, 1, 1, 2, 1, '2021-09-18 14:00:00', ''),
(8, 1, 1, 3, 1, '2021-09-18 14:00:00', ''),
(9, 1, 1, 4, 1, '2021-09-18 14:00:00', ''),
(10, 1, 1, 5, 1, '2021-09-18 14:00:00', ''),
(11, 1, 1, 1, 1, '2021-09-19 14:00:00', ''),
(12, 1, 1, 2, 1, '2021-09-19 14:00:00', ''),
(13, 1, 1, 3, 1, '2021-09-19 14:00:00', ''),
(14, 1, 1, 4, 1, '2021-09-19 14:00:00', ''),
(15, 1, 1, 5, 1, '2021-09-19 14:00:00', ''),
(16, 1, 1, 1, 1, '2021-09-20 14:00:00', ''),
(17, 1, 1, 2, 1, '2021-09-20 14:00:00', ''),
(18, 1, 1, 3, 1, '2021-09-20 14:00:00', ''),
(19, 1, 1, 4, 1, '2021-09-20 14:00:00', ''),
(20, 1, 1, 5, 1, '2021-09-20 14:00:00', ''),
(21, 1, 1, 1, 1, '2021-09-21 14:00:00', ''),
(22, 1, 1, 2, 1, '2021-09-21 14:00:00', ''),
(23, 1, 1, 3, 1, '2021-09-21 14:00:00', ''),
(24, 1, 1, 4, 1, '2021-09-21 14:00:00', ''),
(25, 1, 1, 5, 1, '2021-09-21 14:00:00', ''),
(26, 1, 1, 1, 1, '2021-09-22 14:00:00', ''),
(27, 1, 1, 2, 1, '2021-09-22 14:00:00', ''),
(28, 1, 1, 3, 1, '2021-09-22 14:00:00', ''),
(29, 1, 1, 4, 1, '2021-09-22 14:00:00', ''),
(30, 1, 1, 5, 1, '2021-09-22 14:00:00', ''),
(31, 1, 1, 1, 1, '2021-09-23 14:00:00', ''),
(32, 1, 1, 2, 1, '2021-09-23 14:00:00', ''),
(33, 1, 1, 3, 1, '2021-09-23 14:00:00', ''),
(34, 1, 1, 4, 1, '2021-09-23 14:00:00', ''),
(35, 1, 1, 5, 1, '2021-09-23 14:00:00', ''),
(36, 1, 1, 1, 2, '2021-09-24 14:00:00', ''),
(37, 1, 1, 2, 2, '2021-09-24 14:00:00', ''),
(38, 1, 1, 3, 2, '2021-09-24 14:00:00', ''),
(39, 1, 1, 4, 2, '2021-09-24 14:00:00', ''),
(40, 1, 1, 5, 2, '2021-09-24 14:00:00', ''),
(41, 1, 1, 1, 0, '2021-09-25 14:00:00', NULL),
(42, 1, 1, 2, 0, '2021-09-25 14:00:00', 'ádasdsadsa'),
(43, 1, 1, 3, 1, '2021-09-25 14:00:00', NULL),
(44, 1, 1, 4, -1, '2021-09-25 14:00:00', NULL),
(45, 1, 1, 5, 0, '2021-09-25 14:00:00', NULL),
(46, 1, 1, 1, 2, '2021-09-26 14:00:00', NULL),
(47, 1, 1, 2, 2, '2021-09-26 14:00:00', NULL),
(48, 1, 1, 3, 2, '2021-09-26 14:00:00', NULL),
(49, 1, 1, 4, 2, '2021-09-26 14:00:00', NULL),
(50, 1, 1, 5, 2, '2021-09-26 14:00:00', NULL),
(51, 2, 5, 1, 0, '2021-09-17 15:00:00', ''),
(52, 2, 5, 2, 0, '2021-09-17 15:00:00', ''),
(53, 2, 5, 3, 0, '2021-09-17 15:00:00', ''),
(54, 2, 5, 4, 0, '2021-09-17 15:00:00', ''),
(55, 2, 5, 5, 0, '2021-09-17 15:00:00', ''),
(56, 2, 5, 1, 0, '2021-09-18 15:00:00', ''),
(57, 2, 5, 2, 0, '2021-09-18 15:00:00', ''),
(58, 2, 5, 3, 0, '2021-09-18 15:00:00', ''),
(59, 2, 5, 4, 0, '2021-09-18 15:00:00', ''),
(60, 2, 5, 5, 0, '2021-09-18 15:00:00', ''),
(61, 2, 5, 1, 0, '2021-09-19 15:00:00', ''),
(62, 2, 5, 2, 0, '2021-09-19 15:00:00', ''),
(63, 2, 5, 3, 0, '2021-09-19 15:00:00', ''),
(64, 2, 5, 4, 0, '2021-09-19 15:00:00', ''),
(65, 2, 5, 5, 0, '2021-09-19 15:00:00', ''),
(66, 2, 5, 1, 0, '2021-09-20 15:00:00', ''),
(67, 2, 5, 2, 0, '2021-09-20 15:00:00', ''),
(68, 2, 5, 3, 0, '2021-09-20 15:00:00', ''),
(69, 2, 5, 4, 0, '2021-09-20 15:00:00', ''),
(70, 2, 5, 5, 0, '2021-09-20 15:00:00', ''),
(71, 2, 5, 1, 0, '2021-09-21 15:00:00', ''),
(72, 2, 5, 2, 0, '2021-09-21 15:00:00', ''),
(73, 2, 5, 3, 0, '2021-09-21 15:00:00', ''),
(74, 2, 5, 4, 0, '2021-09-21 15:00:00', ''),
(75, 2, 5, 5, 0, '2021-09-21 15:00:00', ''),
(76, 2, 5, 1, 1, '2021-09-22 15:00:00', ''),
(77, 2, 5, 2, 1, '2021-09-22 15:00:00', ''),
(78, 2, 5, 3, 1, '2021-09-22 15:00:00', ''),
(79, 2, 5, 4, 1, '2021-09-22 15:00:00', ''),
(80, 2, 5, 5, 1, '2021-09-22 15:00:00', ''),
(81, 2, 5, 1, 1, '2021-09-23 15:00:00', ''),
(82, 2, 5, 2, 1, '2021-09-23 15:00:00', ''),
(83, 2, 5, 3, 1, '2021-09-23 15:00:00', ''),
(84, 2, 5, 4, 1, '2021-09-23 15:00:00', ''),
(85, 2, 5, 5, 1, '2021-09-23 15:00:00', ''),
(86, 2, 5, 1, 1, '2021-09-24 15:00:00', ''),
(87, 2, 5, 2, 1, '2021-09-24 15:00:00', ''),
(88, 2, 5, 3, 1, '2021-09-24 15:00:00', ''),
(89, 2, 5, 4, 1, '2021-09-24 15:00:00', ''),
(90, 2, 5, 5, 1, '2021-09-24 15:00:00', ''),
(91, 2, 5, 1, 1, '2021-09-25 15:00:00', ''),
(92, 2, 5, 2, 1, '2021-09-25 15:00:00', ''),
(93, 2, 5, 3, 1, '2021-09-25 15:00:00', ''),
(94, 2, 5, 4, 1, '2021-09-25 15:00:00', ''),
(95, 2, 5, 5, 1, '2021-09-25 15:00:00', ''),
(96, 2, 5, 1, 1, '2021-09-26 15:00:00', ''),
(97, 2, 5, 2, 1, '2021-09-26 15:00:00', ''),
(98, 2, 5, 3, 1, '2021-09-26 15:00:00', ''),
(99, 2, 5, 4, 1, '2021-09-26 15:00:00', ''),
(100, 2, 5, 5, 1, '2021-09-26 15:00:00', ''),
(101, 7, 7, 1, 0, '2021-09-11 16:00:00', ''),
(102, 7, 7, 2, 0, '2021-09-11 16:00:00', ''),
(103, 7, 7, 3, 0, '2021-09-11 16:00:00', ''),
(104, 7, 7, 4, 0, '2021-09-11 16:00:00', ''),
(105, 7, 7, 5, 0, '2021-09-11 16:00:00', ''),
(106, 7, 7, 1, 0, '2021-09-12 16:00:00', ''),
(107, 7, 7, 2, 0, '2021-09-12 16:00:00', ''),
(108, 7, 7, 3, 0, '2021-09-12 16:00:00', ''),
(109, 7, 7, 4, 0, '2021-09-12 16:00:00', ''),
(110, 7, 7, 5, 0, '2021-09-12 16:00:00', ''),
(111, 7, 7, 1, 0, '2021-09-13 16:00:00', ''),
(112, 7, 7, 2, 0, '2021-09-13 16:00:00', ''),
(113, 7, 7, 3, 0, '2021-09-13 16:00:00', ''),
(114, 7, 7, 4, 0, '2021-09-13 16:00:00', ''),
(115, 7, 7, 5, 0, '2021-09-13 16:00:00', ''),
(116, 7, 7, 1, 0, '2021-09-14 16:00:00', ''),
(117, 7, 7, 2, 0, '2021-09-14 16:00:00', ''),
(118, 7, 7, 3, 0, '2021-09-14 16:00:00', ''),
(119, 7, 7, 4, 0, '2021-09-14 16:00:00', ''),
(120, 7, 7, 5, 0, '2021-09-14 16:00:00', ''),
(121, 7, 7, 1, 0, '2021-09-15 16:00:00', ''),
(122, 7, 7, 2, 0, '2021-09-15 16:00:00', ''),
(123, 7, 7, 3, 0, '2021-09-15 16:00:00', ''),
(124, 7, 7, 4, 0, '2021-09-15 16:00:00', ''),
(125, 7, 7, 5, 0, '2021-09-15 16:00:00', ''),
(126, 7, 7, 1, 0, '2021-09-16 16:00:00', ''),
(127, 7, 7, 2, 0, '2021-09-16 16:00:00', ''),
(128, 7, 7, 3, 0, '2021-09-16 16:00:00', ''),
(129, 7, 7, 4, 0, '2021-09-16 16:00:00', ''),
(130, 7, 7, 5, 0, '2021-09-16 16:00:00', ''),
(131, 7, 7, 1, 0, '2021-09-18 16:00:00', ''),
(132, 7, 7, 2, 0, '2021-09-18 16:00:00', ''),
(133, 7, 7, 3, 0, '2021-09-18 16:00:00', ''),
(134, 7, 7, 4, 0, '2021-09-18 16:00:00', ''),
(135, 7, 7, 5, 0, '2021-09-18 16:00:00', ''),
(136, 7, 7, 1, 0, '2021-09-19 16:00:00', ''),
(137, 7, 7, 2, 0, '2021-09-19 16:00:00', ''),
(138, 7, 7, 3, 0, '2021-09-19 16:00:00', ''),
(139, 7, 7, 4, 0, '2021-09-19 16:00:00', ''),
(140, 7, 7, 5, 0, '2021-09-19 16:00:00', ''),
(141, 7, 7, 1, 0, '2021-09-20 16:00:00', ''),
(142, 7, 7, 2, 0, '2021-09-20 16:00:00', ''),
(143, 7, 7, 3, 0, '2021-09-20 16:00:00', ''),
(144, 7, 7, 4, 0, '2021-09-20 16:00:00', ''),
(145, 7, 7, 5, 0, '2021-09-20 16:00:00', ''),
(146, 7, 7, 1, 1, '2021-09-21 16:00:00', ''),
(147, 7, 7, 2, 1, '2021-09-21 16:00:00', ''),
(148, 7, 7, 3, 1, '2021-09-21 16:00:00', ''),
(149, 7, 7, 4, 1, '2021-09-21 16:00:00', ''),
(150, 7, 7, 5, 1, '2021-09-21 16:00:00', ''),
(151, 7, 7, 1, 1, '2021-09-22 16:00:00', ''),
(152, 7, 7, 2, 1, '2021-09-22 16:00:00', ''),
(153, 7, 7, 3, 1, '2021-09-22 16:00:00', ''),
(154, 7, 7, 4, 1, '2021-09-22 16:00:00', ''),
(155, 7, 7, 5, 1, '2021-09-22 16:00:00', ''),
(156, 7, 7, 1, 1, '2021-09-23 16:00:00', ''),
(157, 7, 7, 2, 1, '2021-09-23 16:00:00', ''),
(158, 7, 7, 3, 1, '2021-09-23 16:00:00', ''),
(159, 7, 7, 4, 1, '2021-09-23 16:00:00', ''),
(160, 7, 7, 5, 1, '2021-09-23 16:00:00', ''),
(161, 7, 7, 1, 1, '2021-09-24 16:00:00', ''),
(162, 7, 7, 2, 1, '2021-09-24 16:00:00', ''),
(163, 7, 7, 3, 1, '2021-09-24 16:00:00', ''),
(164, 7, 7, 4, 1, '2021-09-24 16:00:00', ''),
(165, 7, 7, 5, 1, '2021-09-24 16:00:00', ''),
(166, 7, 7, 1, 1, '2021-09-25 16:00:00', ''),
(167, 7, 7, 2, 1, '2021-09-25 16:00:00', ''),
(168, 7, 7, 3, 1, '2021-09-25 16:00:00', ''),
(169, 7, 7, 4, 1, '2021-09-25 16:00:00', ''),
(170, 7, 7, 5, 1, '2021-09-25 16:00:00', ''),
(171, 7, 7, 1, -1, '2021-09-26 16:00:00', ''),
(172, 7, 7, 2, -1, '2021-09-26 16:00:00', ''),
(173, 7, 7, 3, -1, '2021-09-26 16:00:00', ''),
(174, 7, 7, 4, -1, '2021-09-26 16:00:00', ''),
(175, 7, 7, 5, -1, '2021-09-26 16:00:00', ''),
(176, 1, 1, 1, 1, '2021-10-02 14:39:18', NULL),
(177, 1, 1, 2, 1, '2021-10-02 14:39:18', NULL),
(178, 1, 1, 3, 1, '2021-10-02 14:39:18', NULL),
(179, 1, 1, 4, -1, '2021-10-02 14:39:18', NULL),
(180, 1, 1, 5, 0, '2021-10-02 14:39:18', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giao_viens`
--

CREATE TABLE `giao_viens` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giao_viens`
--

INSERT INTO `giao_viens` (`id`, `name`, `phone`, `email`, `password`, `address`, `birthday`, `is_active`) VALUES
(1, 'Giáo viên 1', '012345678912', '1@gmail.com', '$2y$10$YwRaPllIQ4xJkV7xhmj9cerV4EqVtMWBCQ.BVBRS8uUQJGN/3WNt.', 'HN 1', '2000-01-01', 1),
(2, 'Giáo viên 2', '012345678912', '2@gmail.com', '$2y$10$seMWolu/JoGP6GxtaXKuhOQh38pEPaKX4ag2yfYggRe8zuDTGw56y', 'HN 2', '2000-01-01', 1),
(3, 'Giáo viên 3', '012345678912', '3@gmail.com', '$2y$10$dgdP.BVhzH6Cyn03IhxkPe8eqVajKR9BXCiDMt5u/hrNI3lrVirc6', 'HN 3', '2000-01-01', 1),
(4, 'Giáo viên 4', '012345678912', '4@gmail.com', '$2y$10$j9PhUN.47YmM5c73WXUQ/e8fjMNZ4tH32fpsiAAUYKnxz/0PAc5Dq', 'HN 4', '2000-01-01', 1),
(5, 'Giáo viên 5', '012345678912', '5@gmail.com', '$2y$10$jl80cdntLIdhdGaLErryIe2nn8ttCW.9o5jUvLHjjmYkx2y6vy0XK', 'HN 5', '2000-01-01', 1),
(6, 'Giáo viên 6', '012345678912', '6@gmail.com', '$2y$10$7vg.LfcY/wnPLGGWCyrxsOUPPnPtUF4UFttt.pZOCt.416CkOPNzi', 'HN 6', '2000-01-01', 1),
(7, 'Giáo viên 7', '012345678912', '7@gmail.com', '$2y$10$.7csy91SphJgQU30E7.fB.j/aOKxLWNAmUDpMSQ764YGdrd2P88Vy', 'HN 7', '2000-01-01', 1),
(8, 'Giáo viên 8', '12345678901', '8@gmail.com', '$2y$10$29jhqqumOi7M1Fc.KaSlMe1vCA4wZcBTCQQPf2ra8UOD4sZQRCmB.', 'Địa chỉ GV8', '2021-12-15', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahocs`
--

CREATE TABLE `khoahocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoahocs`
--

INSERT INTO `khoahocs` (`id`, `name`) VALUES
(1, 'K10'),
(2, 'K11'),
(3, 'K12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophocs`
--

CREATE TABLE `lophocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nganhhoc` int(10) UNSIGNED NOT NULL,
  `id_khoahoc` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lophocs`
--

INSERT INTO `lophocs` (`id`, `name`, `id_nganhhoc`, `id_khoahoc`) VALUES
(1, 'BKD01', 1, 1),
(2, 'BKD02', 1, 2),
(3, 'BKN02', 2, 3),
(4, 'BKN03', 2, 1),
(5, 'BKG03', 3, 2),
(6, 'BKG01', 3, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_07_03_065517_create_admins_table', 1),
(2, '2021_08_24_051445_create_giao_viens_table', 1),
(3, '2021_08_25_032419_create_nganhhocs_table', 1),
(4, '2021_08_25_032439_create_khoahocs_table', 1),
(5, '2021_08_25_032955_create_monhocs_table', 1),
(6, '2021_08_25_033217_create_lophocs_table', 1),
(7, '2021_08_25_033554_create_sinhviens_table', 1),
(8, '2021_08_25_034011_create_phancongs_table', 1),
(9, '2021_08_25_034104_create_diemdanhs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhocs`
--

CREATE TABLE `monhocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoiluong` double(8,2) NOT NULL,
  `id_nganhhoc` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhocs`
--

INSERT INTO `monhocs` (`id`, `name`, `thoiluong`, `id_nganhhoc`) VALUES
(1, 'Database', 60.00, 1),
(2, 'PHP', 72.00, 1),
(3, 'Mạng máy tính', 72.00, 2),
(4, 'Bảo trì máy tính', 60.00, 2),
(5, 'Photoshop', 60.00, 3),
(6, 'Quảng cáo', 60.00, 3),
(7, 'HTML', 72.00, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhhocs`
--

CREATE TABLE `nganhhocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganhhocs`
--

INSERT INTO `nganhhocs` (`id`, `name`) VALUES
(1, 'Lập trình Quốc tế'),
(2, 'Quản trị mạng'),
(3, 'Thiết kế đồ họa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phancongs`
--

CREATE TABLE `phancongs` (
  `id_giaovien` int(10) UNSIGNED NOT NULL,
  `id_lophoc` int(10) UNSIGNED NOT NULL,
  `id_monhoc` int(10) UNSIGNED NOT NULL,
  `ca_day` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starttime` time DEFAULT NULL,
  `endtime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phancongs`
--

INSERT INTO `phancongs` (`id_giaovien`, `id_lophoc`, `id_monhoc`, `ca_day`, `starttime`, `endtime`) VALUES
(1, 1, 1, '2, 3, 4, 5, 6, 7', '13:30:00', '17:30:00'),
(2, 4, 3, '2, 3, 4, 5, 6, 7', '13:30:00', '17:30:00'),
(3, 6, 6, '2, 3, 4, 5, 6, 7', '13:30:00', '17:30:00'),
(4, 3, 4, '2, 3, 4, 5, 6, 7', '13:30:00', '17:30:00'),
(5, 1, 2, '2, 3, 4, 5, 6, 7', '13:30:00', '17:30:00'),
(6, 5, 5, '2, 3, 4, 5, 6, 7', '13:30:00', '17:30:00'),
(7, 1, 7, '2, 3, 4, 5, 6, 7', '13:30:00', '17:30:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhviens`
--

CREATE TABLE `sinhviens` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `id_lophoc` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhviens`
--

INSERT INTO `sinhviens` (`id`, `name`, `phone`, `email`, `address`, `birthday`, `id_lophoc`) VALUES
(1, 'SV 1', '012398745619', '1@gmail.com', 'Hà Nội 1', '2000-01-01', 1),
(2, 'SV 2', '012398745619', '2@gmail.com', 'Hà Nội 2', '2000-01-01', 1),
(3, 'SV 3', '012398745619', '3@gmail.com', 'Hà Nội 3', '2000-01-01', 1),
(4, 'SV 4', '012398745619', '4@gmail.com', 'Hà Nội 4', '2000-01-01', 1),
(5, 'SV 5', '012398745619', '5@gmail.com', 'Hà Nội 5', '2000-01-01', 1),
(6, 'SV 6', '012398745619', '6@gmail.com', 'Sài Gòn 6', '2000-01-01', 2),
(7, 'SV 7', '012398745619', '7@gmail.com', 'Sài Gòn 7', '2000-01-01', 2),
(8, 'SV 8', '012398745619', '8@gmail.com', 'Sài Gòn 8', '2000-01-01', 2),
(9, 'SV 9', '012398745619', '9@gmail.com', 'Sài Gòn 9', '2000-01-01', 2),
(10, 'SV 10', '012398745619', '10@gmail.com', 'Sài Gòn 10', '2000-01-01', 2),
(11, 'SV 11', '012398745619', '11@gmail.com', 'Nam Định 11', '2000-01-01', 3),
(12, 'SV 12', '012398745619', '12@gmail.com', 'Nam Định 12', '2000-01-01', 3),
(13, 'SV 13', '012398745619', '13@gmail.com', 'Nam Định 13', '2000-01-01', 3),
(14, 'SV 14', '012398745619', '14@gmail.com', 'Nam Định 14', '2000-01-01', 3),
(15, 'SV 15', '012398745619', '15@gmail.com', 'Nam Định 15', '2000-01-01', 3),
(16, 'SV 16', '012398745619', '16@gmail.com', 'Đà Nẵng 16', '2000-01-01', 4),
(17, 'SV 17', '012398745619', '17@gmail.com', 'Đà Nẵng 17', '2000-01-01', 4),
(18, 'SV 18', '012398745619', '18@gmail.com', 'Đà Nẵng 18', '2000-01-01', 4),
(19, 'SV 19', '012398745619', '19@gmail.com', 'Đà Nẵng 19', '2000-01-01', 4),
(20, 'SV 20', '012398745619', '20@gmail.com', 'Đà Nẵng 20', '2000-01-01', 4),
(21, 'SV 21', '012398745619', '21@gmail.com', 'Nghệ An 21', '2000-01-01', 5),
(22, 'SV 22', '012398745619', '22@gmail.com', 'Nghệ An 22', '2000-01-01', 5),
(23, 'SV 23', '012398745619', '23@gmail.com', 'Nghệ An 23', '2000-01-01', 5),
(24, 'SV 24', '012398745619', '24@gmail.com', 'Nghệ An 24', '2000-01-01', 5),
(25, 'SV 25', '012398745619', '25@gmail.com', 'Nghệ An 25', '2000-01-01', 5),
(26, 'SV 26', '012398745619', '26@gmail.com', 'Quảng Bình 26', '2000-01-01', 6),
(27, 'SV 27', '012398745619', '27@gmail.com', 'Quảng Bình 27', '2000-01-01', 6),
(28, 'SV 28', '012398745619', '28@gmail.com', 'Quảng Bình 28', '2000-01-01', 6),
(29, 'SV 29', '012398745619', '29@gmail.com', 'Quảng Bình 29', '2000-01-01', 6),
(30, 'SV 30', '012398745619', '30@gmail.com', 'Quảng Bình 30', '2000-01-01', 6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Chỉ mục cho bảng `diemdanhs`
--
ALTER TABLE `diemdanhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diemdanhs_id_monhoc_foreign` (`id_monhoc`),
  ADD KEY `diemdanhs_id_giaovien_foreign` (`id_giaovien`),
  ADD KEY `diemdanhs_id_sinhvien_foreign` (`id_sinhvien`);

--
-- Chỉ mục cho bảng `giao_viens`
--
ALTER TABLE `giao_viens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `giao_viens_email_unique` (`email`);

--
-- Chỉ mục cho bảng `khoahocs`
--
ALTER TABLE `khoahocs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lophocs`
--
ALTER TABLE `lophocs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lophocs_id_nganhhoc_foreign` (`id_nganhhoc`),
  ADD KEY `lophocs_id_khoahoc_foreign` (`id_khoahoc`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monhocs`
--
ALTER TABLE `monhocs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monhocs_id_nganhhoc_foreign` (`id_nganhhoc`);

--
-- Chỉ mục cho bảng `nganhhocs`
--
ALTER TABLE `nganhhocs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phancongs`
--
ALTER TABLE `phancongs`
  ADD PRIMARY KEY (`id_giaovien`,`id_lophoc`,`id_monhoc`),
  ADD KEY `phancongs_id_lophoc_foreign` (`id_lophoc`),
  ADD KEY `phancongs_id_monhoc_foreign` (`id_monhoc`);

--
-- Chỉ mục cho bảng `sinhviens`
--
ALTER TABLE `sinhviens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sinhviens_email_unique` (`email`),
  ADD KEY `sinhviens_id_lophoc_foreign` (`id_lophoc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `diemdanhs`
--
ALTER TABLE `diemdanhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT cho bảng `giao_viens`
--
ALTER TABLE `giao_viens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `khoahocs`
--
ALTER TABLE `khoahocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lophocs`
--
ALTER TABLE `lophocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `monhocs`
--
ALTER TABLE `monhocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `nganhhocs`
--
ALTER TABLE `nganhhocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sinhviens`
--
ALTER TABLE `sinhviens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diemdanhs`
--
ALTER TABLE `diemdanhs`
  ADD CONSTRAINT `diemdanhs_id_giaovien_foreign` FOREIGN KEY (`id_giaovien`) REFERENCES `giao_viens` (`id`),
  ADD CONSTRAINT `diemdanhs_id_monhoc_foreign` FOREIGN KEY (`id_monhoc`) REFERENCES `monhocs` (`id`),
  ADD CONSTRAINT `diemdanhs_id_sinhvien_foreign` FOREIGN KEY (`id_sinhvien`) REFERENCES `sinhviens` (`id`);

--
-- Các ràng buộc cho bảng `lophocs`
--
ALTER TABLE `lophocs`
  ADD CONSTRAINT `lophocs_id_khoahoc_foreign` FOREIGN KEY (`id_khoahoc`) REFERENCES `khoahocs` (`id`),
  ADD CONSTRAINT `lophocs_id_nganhhoc_foreign` FOREIGN KEY (`id_nganhhoc`) REFERENCES `nganhhocs` (`id`);

--
-- Các ràng buộc cho bảng `monhocs`
--
ALTER TABLE `monhocs`
  ADD CONSTRAINT `monhocs_id_nganhhoc_foreign` FOREIGN KEY (`id_nganhhoc`) REFERENCES `nganhhocs` (`id`);

--
-- Các ràng buộc cho bảng `phancongs`
--
ALTER TABLE `phancongs`
  ADD CONSTRAINT `phancongs_id_giaovien_foreign` FOREIGN KEY (`id_giaovien`) REFERENCES `giao_viens` (`id`),
  ADD CONSTRAINT `phancongs_id_lophoc_foreign` FOREIGN KEY (`id_lophoc`) REFERENCES `lophocs` (`id`),
  ADD CONSTRAINT `phancongs_id_monhoc_foreign` FOREIGN KEY (`id_monhoc`) REFERENCES `monhocs` (`id`);

--
-- Các ràng buộc cho bảng `sinhviens`
--
ALTER TABLE `sinhviens`
  ADD CONSTRAINT `sinhviens_id_lophoc_foreign` FOREIGN KEY (`id_lophoc`) REFERENCES `lophocs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
