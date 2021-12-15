-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2021 lúc 04:29 AM
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
(1, 'TTK', 'super@gmail.com', '$2y$10$w2dBLzZgAi7kX4Cs2Vls5.bUo4thrHpfNADTjbtRrdxFgYjGlhq2y');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemdanhs`
--

CREATE TABLE `diemdanhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_monhoc` int(10) UNSIGNED NOT NULL,
  `id_lophoc` int(10) UNSIGNED NOT NULL,
  `id_giaovien` int(10) UNSIGNED NOT NULL,
  `id_sinhvien` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL,
  `ngaydiemdanh` datetime NOT NULL,
  `note` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diemdanhs`
--

INSERT INTO `diemdanhs` (`id`, `id_monhoc`, `id_lophoc`, `id_giaovien`, `id_sinhvien`, `status`, `ngaydiemdanh`, `note`) VALUES
(1, 1, 2, 1, 1, 1, '2021-09-17 14:00:00', ''),
(2, 1, 2, 1, 2, 1, '2021-09-17 14:00:00', ''),
(3, 1, 2, 1, 3, 1, '2021-09-17 14:00:00', ''),
(4, 1, 2, 1, 4, 1, '2021-09-17 14:00:00', ''),
(5, 1, 2, 1, 5, 1, '2021-09-17 14:00:00', ''),
(6, 1, 2, 1, 4, 1, '2021-09-18 14:00:00', ''),
(7, 1, 2, 1, 5, 1, '2021-09-18 14:00:00', ''),
(8, 1, 2, 1, 4, 1, '2021-09-19 14:00:00', ''),
(9, 1, 2, 1, 5, 1, '2021-09-19 14:00:00', ''),
(10, 1, 2, 1, 4, 1, '2021-09-20 14:00:00', ''),
(11, 1, 2, 1, 5, 1, '2021-09-20 14:00:00', ''),
(12, 1, 2, 1, 4, 1, '2021-09-21 14:00:00', ''),
(13, 1, 2, 1, 5, 1, '2021-09-21 14:00:00', ''),
(14, 1, 2, 5, 4, 1, '2021-09-22 14:00:00', ''),
(15, 1, 2, 5, 5, 1, '2021-09-22 14:00:00', ''),
(16, 1, 2, 5, 4, 1, '2021-09-23 14:00:00', ''),
(17, 1, 2, 5, 5, 1, '2021-09-23 14:00:00', ''),
(18, 1, 2, 5, 4, 1, '2021-09-24 14:00:00', ''),
(19, 1, 2, 5, 5, 1, '2021-09-24 14:00:00', ''),
(20, 1, 2, 1, 4, 1, '2021-09-25 14:00:00', ''),
(21, 1, 2, 1, 5, 1, '2021-09-25 14:00:00', ''),
(22, 1, 2, 1, 4, 1, '2021-09-26 14:00:00', ''),
(23, 1, 2, 1, 5, 1, '2021-09-26 14:00:00', ''),
(24, 1, 2, 1, 1, 1, '2021-09-18 14:00:00', ''),
(25, 1, 2, 1, 2, 1, '2021-09-18 14:00:00', ''),
(26, 1, 2, 1, 1, 1, '2021-09-19 14:00:00', ''),
(27, 1, 2, 1, 2, 1, '2021-09-19 14:00:00', ''),
(28, 1, 2, 1, 1, 1, '2021-09-20 14:00:00', ''),
(29, 1, 2, 1, 2, 1, '2021-09-20 14:00:00', ''),
(30, 1, 2, 1, 1, 1, '2021-09-21 14:00:00', ''),
(31, 1, 2, 1, 2, 1, '2021-09-21 14:00:00', ''),
(32, 1, 2, 5, 1, 1, '2021-09-22 14:00:00', ''),
(33, 1, 2, 5, 1, 1, '2021-09-23 14:00:00', ''),
(34, 1, 2, 5, 1, 1, '2021-09-24 14:00:00', ''),
(35, 1, 2, 1, 1, 0, '2021-09-25 14:00:00', ''),
(36, 1, 2, 1, 2, 0, '2021-09-25 14:00:00', ''),
(37, 1, 2, 1, 3, 0, '2021-09-25 14:00:00', ''),
(38, 1, 2, 1, 1, 0, '2021-09-26 14:00:00', ''),
(39, 1, 2, 1, 2, 0, '2021-09-26 14:00:00', ''),
(40, 1, 2, 1, 3, 0, '2021-09-26 14:00:00', ''),
(41, 1, 2, 5, 2, 0, '2021-09-24 14:00:00', ''),
(42, 1, 2, 5, 3, 0, '2021-09-24 14:00:00', ''),
(43, 1, 2, 5, 2, 0, '2021-09-23 14:00:00', ''),
(44, 1, 2, 5, 3, 0, '2021-09-23 14:00:00', ''),
(45, 1, 2, 5, 2, 0, '2021-09-22 14:00:00', ''),
(46, 1, 2, 5, 3, 0, '2021-09-22 14:00:00', ''),
(47, 1, 2, 1, 3, 0, '2021-09-21 14:00:00', ''),
(48, 1, 2, 1, 3, 0, '2021-09-20 14:00:00', ''),
(49, 1, 2, 1, 3, 0, '2021-09-19 14:00:00', ''),
(50, 1, 2, 1, 3, -1, '2021-09-18 14:00:00', ''),
(51, 2, 3, 1, 6, 1, '2021-09-17 18:00:00', ''),
(52, 2, 3, 1, 7, 1, '2021-09-17 18:00:00', ''),
(53, 2, 3, 1, 8, 1, '2021-09-17 18:00:00', ''),
(54, 2, 3, 1, 9, 1, '2021-09-17 18:00:00', ''),
(55, 2, 3, 1, 10, 1, '2021-09-17 18:00:00', ''),
(56, 2, 3, 1, 6, 1, '2021-09-18 18:00:00', ''),
(57, 2, 3, 1, 7, 1, '2021-09-18 18:00:00', ''),
(58, 2, 3, 1, 8, 1, '2021-09-18 18:00:00', ''),
(59, 2, 3, 1, 9, 1, '2021-09-18 18:00:00', ''),
(60, 2, 3, 1, 10, 1, '2021-09-18 18:00:00', ''),
(61, 2, 3, 1, 6, 1, '2021-09-19 18:00:00', ''),
(62, 2, 3, 1, 7, 1, '2021-09-19 18:00:00', ''),
(63, 2, 3, 1, 8, 1, '2021-09-19 18:00:00', ''),
(64, 2, 3, 1, 9, 1, '2021-09-19 18:00:00', ''),
(65, 2, 3, 1, 10, 1, '2021-09-19 18:00:00', ''),
(66, 2, 3, 1, 6, 1, '2021-09-20 18:00:00', ''),
(67, 2, 3, 1, 7, 1, '2021-09-20 18:00:00', ''),
(68, 2, 3, 1, 8, 1, '2021-09-20 18:00:00', ''),
(69, 2, 3, 1, 9, 1, '2021-09-20 18:00:00', ''),
(70, 2, 3, 1, 10, 1, '2021-09-20 18:00:00', ''),
(71, 2, 3, 1, 6, 1, '2021-09-21 18:00:00', ''),
(72, 2, 3, 1, 7, 1, '2021-09-21 18:00:00', ''),
(73, 2, 3, 1, 8, 1, '2021-09-21 18:00:00', ''),
(74, 2, 3, 1, 9, 1, '2021-09-21 18:00:00', ''),
(75, 2, 3, 1, 10, 1, '2021-09-21 18:00:00', ''),
(76, 2, 3, 1, 6, 1, '2021-09-22 18:00:00', ''),
(77, 2, 3, 1, 7, 1, '2021-09-22 18:00:00', ''),
(78, 2, 3, 1, 8, 1, '2021-09-22 18:00:00', ''),
(79, 2, 3, 1, 9, 1, '2021-09-22 18:00:00', ''),
(80, 2, 3, 1, 10, 1, '2021-09-22 18:00:00', ''),
(81, 2, 3, 1, 6, 1, '2021-09-23 18:00:00', ''),
(82, 2, 3, 1, 7, 1, '2021-09-23 18:00:00', ''),
(83, 2, 3, 1, 8, 1, '2021-09-23 18:00:00', ''),
(84, 2, 3, 1, 9, 1, '2021-09-23 18:00:00', ''),
(85, 2, 3, 1, 10, 1, '2021-09-23 18:00:00', ''),
(86, 2, 3, 1, 6, 1, '2021-09-24 18:00:00', ''),
(87, 2, 3, 1, 7, 1, '2021-09-24 18:00:00', ''),
(88, 2, 3, 1, 8, 1, '2021-09-24 18:00:00', ''),
(89, 2, 3, 1, 9, 1, '2021-09-24 18:00:00', ''),
(90, 2, 3, 1, 10, 1, '2021-09-24 18:00:00', ''),
(91, 2, 3, 1, 6, 1, '2021-09-25 18:00:00', ''),
(92, 2, 3, 1, 7, 1, '2021-09-25 18:00:00', ''),
(93, 2, 3, 1, 8, 1, '2021-09-25 18:00:00', ''),
(94, 2, 3, 1, 9, 1, '2021-09-25 18:00:00', ''),
(95, 2, 3, 1, 10, 1, '2021-09-25 18:00:00', ''),
(96, 2, 3, 1, 6, 1, '2021-09-26 18:00:00', ''),
(97, 2, 3, 1, 7, 1, '2021-09-26 18:00:00', ''),
(98, 2, 3, 1, 8, 1, '2021-09-26 18:00:00', ''),
(99, 2, 3, 1, 9, 1, '2021-09-26 18:00:00', ''),
(100, 2, 3, 1, 10, 1, '2021-09-26 18:00:00', '');

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
(1, 'Giáo viên 1', '012345678912', '1@gmail.com', '$2y$10$Igxh0RvGV.2T7xSVjfq4K.LpZBDU54pv0YBkcK2mMDUD5YMqwEPp.', 'HN 1', '2000-01-01', 1),
(2, 'Giáo viên 2', '012345678912', '2@gmail.com', '$2y$10$Dj2NvqdBoUDZPDErQmbWOeD.ktkJwdLjDxEuPwt9CB/DYmRkk/nxS', 'HN 2', '2000-01-01', 1),
(3, 'Giáo viên 3', '012345678912', '3@gmail.com', '$2y$10$xxKhS6c5It5.FMfUc1Kic.VVFy5ednTX.0c329G7KKwH7M.dEByG2', 'HN 3', '2000-01-01', 1),
(4, 'Giáo viên 4', '012345678912', '4@gmail.com', '$2y$10$RAy5rNXiUAN/bvkBx3XqmOaI83.kF.YENkznbKAnohVfVybaLLOjO', 'HN 4', '2000-01-01', 1),
(5, 'Giáo viên 5', '012345678912', '5@gmail.com', '$2y$10$MxwonlcMeiyYAatuq6VmY.vxYNCgVKHtPTbw5lmtYy.yFI1kxyPuW', 'HN 5', '2000-01-01', 1),
(6, 'Giáo viên 6', '012345678912', '6@gmail.com', '$2y$10$qthXO6ITe98.3N4bmVBwYei5NrRjCJ8seTEBow3MQteb9pYID3h1y', 'HN 6', '2000-01-01', 1),
(7, 'Giáo viên 7', '012345678912', '7@gmail.com', '$2y$10$CkXwXnXQi5mGedIZ1BZx3OxkaSGFuzCaQsz4IAo.CIGPyKzZifvbO', 'HN 7', '2000-01-01', 1),
(8, 'Giáo viên 8', '012345678912', '8@gmail.com', '$2y$10$ScY.4Ng/cN2IqN/tdAiCre6eYeFlLZ6KM2B4YhRtj/qOxHE3xATfO', 'HN 8', '2000-01-01', 1);

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
(1, 'K0'),
(2, 'K10'),
(3, 'K11'),
(4, 'K12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophocs`
--

CREATE TABLE `lophocs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nganhhoc` int(10) UNSIGNED DEFAULT NULL,
  `id_khoahoc` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lophocs`
--

INSERT INTO `lophocs` (`id`, `name`, `id_nganhhoc`, `id_khoahoc`) VALUES
(1, 'Không', 1, 1),
(2, 'BKD01', 2, 2),
(3, 'BKD02', 2, 3),
(4, 'BKN02', 3, 4),
(5, 'BKN03', 3, 2),
(6, 'BKG03', 4, 3),
(7, 'BKG01', 4, 4);

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
(1, 'Database', 60.00, 2),
(2, 'PHP', 72.00, 2),
(3, 'Mạng máy tính', 72.00, 3),
(4, 'Bảo trì máy tính', 60.00, 3),
(5, 'Photoshop', 60.00, 4),
(6, 'Quảng cáo', 60.00, 4),
(7, 'HTML', 72.00, 2);

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
(1, 'Ngành 0'),
(2, 'Lập trình Quốc tế'),
(3, 'Quản trị mạng'),
(4, 'Thiết kế đồ họa');

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
  `endtime` time DEFAULT NULL,
  `enddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phancongs`
--

INSERT INTO `phancongs` (`id_giaovien`, `id_lophoc`, `id_monhoc`, `ca_day`, `starttime`, `endtime`, `enddate`) VALUES
(1, 2, 1, '2, 3, 4, 5, 6, 7, CN', '13:30:00', '17:30:00', '2022-06-30'),
(1, 3, 2, '2, 3, 4, 5, 6, 7, CN', '07:30:00', '11:30:00', '2022-06-30'),
(2, 4, 3, '2, 3, 4, 5, 6, 7, CN', '13:30:00', '17:30:00', '2022-06-30'),
(2, 5, 3, '2, 3, 4, 5, 6, 7, CN', '13:30:00', '17:30:00', '2022-06-30'),
(3, 7, 6, '2, 3, 4, 5, 6, 7, CN', '13:30:00', '17:30:00', '2022-06-30'),
(4, 4, 4, '2, 3, 4, 5, 6, 7, CN', '13:30:00', '17:30:00', '2022-06-30'),
(5, 2, 2, '2, 3, 4, 5, 6, 7, CN', '13:30:00', '17:30:00', '2022-06-30'),
(6, 6, 5, '2, 3, 4, 5, 6, 7, CN', '13:30:00', '17:30:00', '2022-06-30'),
(7, 2, 7, '2, 3, 4, 5, 6, 7, CN', '13:30:00', '17:30:00', '2022-06-30');

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
  `id_lophoc` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhviens`
--

INSERT INTO `sinhviens` (`id`, `name`, `phone`, `email`, `address`, `birthday`, `id_lophoc`) VALUES
(1, 'SV 1', '012398745619', '1@gmail.com', 'Hà Nội 1', '2000-01-01', 2),
(2, 'SV 2', '012398745619', '2@gmail.com', 'Hà Nội 2', '2000-01-01', 2),
(3, 'SV 3', '012398745619', '3@gmail.com', 'Hà Nội 3', '2000-01-01', 2),
(4, 'SV 4', '012398745619', '4@gmail.com', 'Hà Nội 4', '2000-01-01', 2),
(5, 'SV 5', '012398745619', '5@gmail.com', 'Hà Nội 5', '2000-01-01', 2),
(6, 'SV 6', '012398745619', '6@gmail.com', 'Sài Gòn 6', '2000-01-01', 3),
(7, 'SV 7', '012398745619', '7@gmail.com', 'Sài Gòn 7', '2000-01-01', 3),
(8, 'SV 8', '012398745619', '8@gmail.com', 'Sài Gòn 8', '2000-01-01', 3),
(9, 'SV 9', '012398745619', '9@gmail.com', 'Sài Gòn 9', '2000-01-01', 3),
(10, 'SV 10', '012398745619', '10@gmail.com', 'Sài Gòn 10', '2000-01-01', 3),
(11, 'SV 11', '012398745619', '11@gmail.com', 'Nam Định 11', '2000-01-01', 4),
(12, 'SV 12', '012398745619', '12@gmail.com', 'Nam Định 12', '2000-01-01', 4),
(13, 'SV 13', '012398745619', '13@gmail.com', 'Nam Định 13', '2000-01-01', 4),
(14, 'SV 14', '012398745619', '14@gmail.com', 'Nam Định 14', '2000-01-01', 4),
(15, 'SV 15', '012398745619', '15@gmail.com', 'Nam Định 15', '2000-01-01', 4),
(16, 'SV 16', '012398745619', '16@gmail.com', 'Nam Định 16', '2000-01-01', 4),
(17, 'SV 17', '012398745619', '17@gmail.com', 'Nam Định 17', '2000-01-01', 4),
(18, 'SV 18', '012398745619', '18@gmail.com', 'Đà Nẵng 18', '2000-01-01', 5),
(19, 'SV 19', '012398745619', '19@gmail.com', 'Đà Nẵng 19', '2000-01-01', 5),
(20, 'SV 20', '012398745619', '20@gmail.com', 'Đà Nẵng 20', '2000-01-01', 5),
(21, 'SV 21', '012398745619', '21@gmail.com', 'Nghệ An 21', '2000-01-01', 6),
(22, 'SV 22', '012398745619', '22@gmail.com', 'Nghệ An 22', '2000-01-01', 6),
(23, 'SV 23', '012398745619', '23@gmail.com', 'Nghệ An 23', '2000-01-01', 6),
(24, 'SV 24', '012398745619', '24@gmail.com', 'Nghệ An 24', '2000-01-01', 6),
(25, 'SV 25', '012398745619', '25@gmail.com', 'Quảng Bình 25', '2000-01-01', 7),
(26, 'SV 26', '012398745619', '26@gmail.com', 'Quảng Bình 26', '2000-01-01', 7),
(27, 'SV 27', '012398745619', '27@gmail.com', 'Quảng Bình 27', '2000-01-01', 7),
(28, 'SV 28', '012398745619', '28@gmail.com', 'Quảng Bình 28', '2000-01-01', 7),
(29, 'SV 29', '012398745619', '29@gmail.com', 'Quảng Bình 29', '2000-01-01', 7),
(30, 'SV 30', '012398745619', '30@gmail.com', 'Quảng Bình 30', '2000-01-01', 7),
(31, 'SV 31', '012398745619', '31@gmail.com', 'Quảng Bình 31', '2000-01-01', 1),
(32, 'SV 32', '012398745619', '32@gmail.com', 'Quảng Bình 32', '2000-01-01', 1),
(33, 'SV 33', '012398745619', '33@gmail.com', 'Quảng Bình 33', '2000-01-01', 1),
(34, 'SV 34', '012398745619', '34@gmail.com', 'Quảng Bình 34', '2000-01-01', 1),
(35, 'SV 35', '012398745619', '35@gmail.com', 'Quảng Bình 35', '2000-01-01', 1),
(36, 'SV 36', '012398745619', '36@gmail.com', 'Quảng Bình 36', '2000-01-01', 1),
(37, 'SV 37', '012398745619', '37@gmail.com', 'Quảng Bình 37', '2000-01-01', 1),
(38, 'SV 38', '012398745619', '38@gmail.com', 'Quảng Bình 38', '2000-01-01', 1),
(39, 'SV 39', '012398745619', '39@gmail.com', 'Quảng Bình 39', '2000-01-01', 1),
(40, 'SV 40', '012398745619', '40@gmail.com', 'Quảng Bình 40', '2000-01-01', 1),
(41, 'SV 41', '012398745619', '41@gmail.com', 'Quảng Bình 41', '2000-01-01', 1);

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
  ADD KEY `diemdanhs_id_lophoc_foreign` (`id_lophoc`),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `giao_viens`
--
ALTER TABLE `giao_viens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `khoahocs`
--
ALTER TABLE `khoahocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lophocs`
--
ALTER TABLE `lophocs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `sinhviens`
--
ALTER TABLE `sinhviens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diemdanhs`
--
ALTER TABLE `diemdanhs`
  ADD CONSTRAINT `diemdanhs_id_giaovien_foreign` FOREIGN KEY (`id_giaovien`) REFERENCES `giao_viens` (`id`),
  ADD CONSTRAINT `diemdanhs_id_lophoc_foreign` FOREIGN KEY (`id_lophoc`) REFERENCES `lophocs` (`id`),
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
