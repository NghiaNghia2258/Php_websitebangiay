-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 10:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btlphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctdh`
--

CREATE TABLE `ctdh` (
  `Ctdh_id` int(11) NOT NULL,
  `Donhang_id` int(11) DEFAULT NULL,
  `Sanpham_id` int(11) DEFAULT NULL,
  `Tensanpham` varchar(100) NOT NULL,
  `Anh` varchar(1000) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Gia` decimal(10,3) DEFAULT NULL,
  `Tongtien` float DEFAULT NULL,
  `Giakhuyenmai` decimal(10,3) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `ctdh`
--

INSERT INTO `ctdh` (`Ctdh_id`, `Donhang_id`, `Sanpham_id`, `Tensanpham`, `Anh`, `Soluong`, `Gia`, `Tongtien`, `Giakhuyenmai`, `created_at`, `updated_at`) VALUES
(21, 21, 2, 'Air Blade 125/160', 'xetayga1.png', 3, 41324.000, 123972, NULL, '2023-04-21 00:58:47', '2023-04-21 00:58:47'),
(22, 21, 3, 'LEAD 125cc', 'xe8.png', 2, 41324.000, 82648, NULL, '2023-04-21 00:58:47', '2023-04-21 00:58:47'),
(23, 22, 7, 'CB150R The Streetster', 'xe23.jpg', 1, 105500.000, 105500, NULL, '2023-04-21 01:00:29', '2023-04-21 01:00:29'),
(24, 22, 4, 'Air Blade 125/160', 'xetayga1.png', 2, 39066.000, 78132, NULL, '2023-04-21 01:00:29', '2023-04-21 01:00:29'),
(25, 23, 3, 'LEAD 125cc', 'xe8.png', 1, 41324.000, 41324, NULL, '2023-04-21 01:02:21', '2023-04-21 01:02:21'),
(26, 24, 7, 'CB150R The Streetster', 'xe23.jpg', 1, 105500.000, 105500, NULL, '2023-04-21 01:57:19', '2023-04-21 01:57:19'),
(27, 24, 2, 'Air Blade 125/160', 'xetayga1.png', 4, 41324.000, 165296, NULL, '2023-04-21 01:57:19', '2023-04-21 01:57:19'),
(28, 25, 2, 'Air Blade 125/160', 'xetayga1.png', 2, 41324.000, 82648, NULL, '2023-04-22 18:38:09', '2023-04-22 18:38:09'),
(30, 26, 2, 'Air Blade 125/160', 'xetayga1.png', 1, 41324.000, 41324, NULL, '2023-05-11 07:40:35', '2023-05-11 07:40:35'),
(31, 26, 3, 'LEAD 125cc', 'xe8.png', 1, 41324.000, 41324, NULL, '2023-05-11 07:40:35', '2023-05-11 07:40:35'),
(34, 28, 2, 'Air Blade 125/160', 'xetayga1.png', 1, 41324.000, 41324, NULL, '2023-05-11 07:52:54', '2023-05-11 07:52:54'),
(36, 29, 2, 'Air Blade 125/160', 'xetayga1.png', 2, 41324.000, 82648, NULL, '2023-05-11 07:54:25', '2023-05-11 07:54:25'),
(37, 30, 2, 'Air Blade 125/160', 'xe1.png', 1, 41324.000, 41324, NULL, '2023-05-11 08:23:27', '2023-05-11 08:23:27'),
(38, 31, 2, 'Air Blade 125/160', 'xe1.png', 1, 41324.000, 41324, NULL, '2023-05-11 08:27:54', '2023-05-11 08:27:54'),
(39, 32, 2, 'Air Blade 125/160', 'xe1.png', 5, 41324.000, 206620, NULL, '2023-05-11 08:35:42', '2023-05-11 08:35:42'),
(40, 33, 2, 'Air Blade 125/160', 'xe1.png', 1, 41324.000, 41324, NULL, '2023-05-11 17:28:33', '2023-05-11 17:28:33'),
(41, 34, 2, 'Air Blade 125/160', 'xe1.png', 1, 41324.000, 41324, NULL, '2023-05-12 06:15:29', '2023-05-12 06:15:29'),
(42, 36, 2, 'Air Blade 125/160', 'xe1.png', 1, 41324.000, 41324, NULL, '2023-05-12 06:23:55', '2023-05-12 06:23:55'),
(47, 41, 2, 'Air Blade 125/160', 'xe1.png', 1, 41324.000, 41324, NULL, '2023-05-12 06:33:58', '2023-05-12 06:33:58'),
(49, 43, 2, 'Air Blade 125/160', 'xe1.png', 2, 41324.000, 82648, NULL, '2023-05-24 06:54:56', '2023-05-24 06:54:56'),
(50, 44, 2, 'Air Blade 125/160', 'xe2.png', 2, 41324.000, 82648, NULL, '2023-05-25 20:22:25', '2023-05-25 20:22:25'),
(51, 44, 3, 'LEAD 125cc', 'xe8.png', 1, 41324.000, 41324, NULL, '2023-05-25 20:22:25', '2023-05-25 20:22:25'),
(52, 45, 2, 'Air Blade 125/160', 'xe2.png', 2, 41324.000, 82648, NULL, '2023-05-25 20:37:44', '2023-05-25 20:37:44'),
(53, 46, 4, 'Air Blade 125/160', 'xetayga1.png', 2, 39066.000, 78132, NULL, '2023-10-20 20:18:59', '2023-10-20 20:18:59'),
(54, 47, 3, 'LEAD 125cc', 'xe8.png', 1, 41324.000, 41324, NULL, '2023-10-20 20:20:25', '2023-10-20 20:20:25'),
(55, 47, 7, 'CB150R The Streetster', 'xe23.jpg', 1, 105500.000, 105500, NULL, '2023-10-20 20:20:25', '2023-10-20 20:20:25'),
(56, 48, 3, 'LEAD 125cc', 'xe8.png', 1, 41324.000, 41324, NULL, '2023-10-21 17:26:02', '2023-10-21 17:26:02'),
(57, 48, 4, 'Air Blade 125/160', 'xetayga1.png', 2, 39066.000, 78132, NULL, '2023-10-21 17:26:02', '2023-10-21 17:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `cthdn`
--

CREATE TABLE `cthdn` (
  `Macthdn_id` int(11) NOT NULL,
  `Hoadonnhap_id` int(11) DEFAULT NULL,
  `Sanpham_id` int(11) DEFAULT NULL,
  `Dongia` float DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `cthdn`
--

INSERT INTO `cthdn` (`Macthdn_id`, `Hoadonnhap_id`, `Sanpham_id`, `Dongia`, `Soluong`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 20000, 4, '2023-05-06 14:42:52', NULL),
(2, 1, 15, 21244, 24, '2023-05-06 14:42:52', NULL),
(4, 1, 2, 20000, 2, '2023-05-06 14:54:59', NULL),
(5, 1, 2, 20888, 2, '2023-05-06 08:20:12', '2023-05-06 08:20:12'),
(8, 1, 12, 20888, 2, '2023-05-06 08:29:08', '2023-05-06 08:29:08'),
(10, NULL, NULL, NULL, NULL, '2023-05-06 08:34:49', '2023-05-06 08:34:49'),
(15, 9, 5, 20888, 2, '2023-05-06 08:48:37', '2023-05-06 08:48:37'),
(16, 1, 5, 20888, 10, '2023-05-06 08:49:50', '2023-05-06 08:49:50'),
(17, 1, 4, 20888, 2, '2023-05-06 08:52:51', '2023-05-06 08:52:51'),
(18, 8, 28, 20888, 5, '2023-05-10 05:20:04', '2023-05-10 05:20:04'),
(19, 7, 28, 20888, 5, '2023-05-10 05:28:39', '2023-05-10 05:28:39'),
(21, 10, 18, 20888, 6, '2023-05-10 05:39:48', '2023-05-10 05:39:48'),
(22, 11, 15, NULL, 7, '2023-05-10 05:45:32', '2023-05-10 05:45:32'),
(23, 1, 22, NULL, 7, '2023-05-10 05:46:40', '2023-05-10 05:46:40'),
(24, 12, 30, NULL, 10, '2023-05-10 07:15:42', '2023-05-10 07:15:42'),
(25, 12, 29, NULL, 10, '2023-05-10 07:19:12', '2023-05-10 07:19:12'),
(26, 12, 13, NULL, 5, '2023-05-10 07:20:02', '2023-05-10 07:20:02'),
(27, 12, 24, NULL, 10, '2023-05-10 07:20:41', '2023-05-10 07:20:41'),
(28, 11, 21, NULL, 5, '2023-05-10 07:23:49', '2023-05-10 07:23:49'),
(29, 10, 19, 20888, 1, '2023-05-10 07:29:57', '2023-05-10 07:29:57'),
(30, 10, 6, 20888, 3, '2023-05-10 07:33:17', '2023-05-10 07:33:17'),
(31, 10, 6, 20888, 10, '2023-05-10 07:34:39', '2023-05-10 07:34:39'),
(32, 13, 3, 20888, 10, '2023-05-10 07:42:58', '2023-05-10 07:42:58'),
(33, 13, 3, 20888, 10, '2023-05-10 07:43:33', '2023-05-10 07:43:33'),
(34, 13, 3, 20888, 10, '2023-05-10 07:47:30', '2023-05-10 07:47:30'),
(35, 13, 2, 20888, 7, '2023-05-10 07:48:58', '2023-05-10 07:48:58'),
(36, 13, 2, 20888, 12, '2023-05-10 07:49:54', '2023-05-10 07:49:54'),
(38, 13, 3, 20888, 23, '2023-05-10 07:50:40', '2023-05-10 07:50:40'),
(39, 14, 2, 20888, 10, '2023-05-10 07:52:24', '2023-05-10 07:52:24'),
(40, 14, 2, 20888, 10, '2023-05-11 17:29:03', '2023-05-11 17:29:03'),
(41, 14, 2, 20000, 10, '2023-05-24 06:59:08', '2023-05-24 06:59:08'),
(42, 14, 2, 20888, 2, '2023-05-24 06:59:46', '2023-05-24 06:59:46'),
(43, 14, 2, 20000, 2, '2023-12-09 02:18:49', '2023-12-09 02:18:49'),
(44, 14, 2, 20000, 2, '2023-12-09 02:20:11', '2023-12-09 02:20:11'),
(45, 14, 2, 20000, 2, '2023-12-09 02:22:35', '2023-12-09 02:22:35'),
(46, 14, 2, 20000, 2, '2023-12-09 02:22:47', '2023-12-09 02:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `Donhang_id` int(11) NOT NULL,
  `Khachhang_id` int(11) DEFAULT NULL,
  `Hoten` varchar(50) DEFAULT NULL,
  `Sdt` char(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Diachi` varchar(50) DEFAULT NULL,
  `Ngaydat` datetime DEFAULT NULL,
  `Tongtien` float DEFAULT NULL,
  `Trangthai` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`Donhang_id`, `Khachhang_id`, `Hoten`, `Sdt`, `Email`, `Diachi`, `Ngaydat`, `Tongtien`, `Trangthai`, `created_at`, `updated_at`) VALUES
(20, NULL, 'Ã„ÂÃ¡Â»â€” NhÃ†Â° NghÃ„Â©a', '0986545454', 'nghia9x02@gmail.com', 'HÃ†Â°ng YÃƒÂªn', '2023-04-21 00:00:00', 55659, 1, '2023-04-21 00:56:36', '2023-04-21 07:57:55'),
(21, NULL, 'TrÃ¡ÂºÂ§n Quang Trung', '0989536321', NULL, 'Ãƒâ€šn Thi', '2023-04-21 00:00:00', 262279, NULL, '2023-04-21 00:58:47', '2023-04-21 00:58:47'),
(22, NULL, 'Ae', '0989536321', NULL, 'Ãƒâ€šn Thi', '2023-04-21 00:00:00', 183632, NULL, '2023-04-21 01:00:29', '2023-04-21 01:00:29'),
(23, NULL, 'TrÃ¡ÂºÂ§n Quang Trung', '0989536321', 'trungruoi747@gmail.com', 'Ãƒâ€šn Thi', '2023-04-21 00:00:00', 41324, NULL, '2023-04-21 01:02:21', '2023-04-21 01:02:21'),
(24, NULL, 'TrÃ¡ÂºÂ§n ThÃ¡Â»â€¹ HuyÃ¡Â»Ân', '0989536321', 'cuongcon@gmail.com', 'Lai ChÃƒÂ¢u', '2023-04-21 00:00:00', 270796, NULL, '2023-04-21 01:57:19', '2023-04-21 01:57:19'),
(25, NULL, 'Ã„ÂÃ¡Â»â€” NhÃ†Â° HiÃ¡Â»â€¡p', '0989536321', 'nghiadonhu96@gmail.com', 'YÃƒÂªn MÃ¡Â»Â¹', '2023-04-23 00:00:00', 193966, NULL, '2023-04-22 18:38:09', '2023-04-22 18:38:09'),
(26, NULL, 'Ã„ÂÃ¡Â»â€” NhÃ†Â° NghÃ„Â©a', '0989536321', 'nghiadonhu96@gmail.com', 'Ãƒâ€šn Thi', '2023-05-11 00:00:00', 82648, NULL, '2023-05-11 07:40:35', '2023-05-11 07:40:35'),
(27, NULL, '2 sÃ¡ÂºÂ£n phÃ¡ÂºÂ©m', '0989536321', 'nghia9x02@gmail.com', 'Ãƒâ€šn Thi', '2023-05-11 00:00:00', 55659, NULL, '2023-05-11 07:51:03', '2023-05-11 07:51:03'),
(28, NULL, 'TrÃ¡ÂºÂ§n Quang Trung', '0989536321', 'cuongcon@gmail.com', 'HÃƒÂ  NÃ¡Â»â„¢i', '2023-05-11 00:00:00', 96983, NULL, '2023-05-11 07:52:54', '2023-05-11 07:52:54'),
(29, NULL, 'adadada', '0989536321', 'daonhatviet2912@gmail.com', 'HÃ¡ÂºÂ£i DÃ†Â°Ã†Â¡ng', '2023-05-11 00:00:00', 193966, NULL, '2023-05-11 07:54:25', '2023-05-11 07:54:25'),
(30, NULL, 'TrÃ¡ÂºÂ§n Quang Trung', '0989536321', 'nghia10x02@gmail.com', 'Ãƒâ€šn Thi', '2023-05-11 00:00:00', 41324, NULL, '2023-05-11 08:23:27', '2023-05-11 08:23:27'),
(31, NULL, 'Ã„ÂÃ¡Â»â€” NhÃ†Â° NghÃ„Â©a', '0989536321', 'trantrung2002hy89@gmail.com', 'Ãƒâ€šn Thi', '2023-05-11 00:00:00', 41324, NULL, '2023-05-11 08:27:54', '2023-05-11 08:27:54'),
(32, NULL, 'Ae', '0989536321', 'daonhatviet2912@gmail.comom', 'Ãƒâ€šn Thi', '2023-05-11 00:00:00', 206620, NULL, '2023-05-11 08:35:42', '2023-05-11 08:35:42'),
(33, NULL, 'Ã„ÂÃ¡Â»â€” NhÃ†Â° NghÃ„Â©a', '0989536321', 'trantrung2002hy89@gmail.com', 'Ãƒâ€šn Thi', '2023-05-12 00:00:00', 41324, NULL, '2023-05-11 17:28:33', '2023-05-11 17:28:33'),
(34, NULL, 'TrÃ¡ÂºÂ§n Quang Trung', '0989536321', 'daonhatviet2912@gmail.com', 'Ãƒâ€šn Thi', '2023-05-12 00:00:00', 41324, NULL, '2023-05-12 06:15:28', '2023-05-12 06:15:28'),
(35, NULL, 'TrÃ¡ÂºÂ§n Quang Trung', '0989536321', 'daonhatviet2912@gmail.com', 'YÃƒÂªn MÃ¡Â»Â¹', '2023-05-12 00:00:00', 41324, NULL, '2023-05-12 06:18:41', '2023-05-12 06:18:41'),
(36, NULL, '2 sÃ¡ÂºÂ£n phÃ¡ÂºÂ©m', '0989536321', 'cuongcon@gmail.com', 'Ãƒâ€šn Thi', '2023-05-12 00:00:00', 41324, NULL, '2023-05-12 06:23:55', '2023-05-12 06:23:55'),
(37, NULL, 'Ã„ÂÃ¡Â»â€” NhÃ†Â° NghÃ„Â©a', '0989536321', 'daonhatviet2912@gmail.com', 'Ãƒâ€šn Thi', '2023-05-12 00:00:00', 111318, NULL, '2023-05-12 06:28:16', '2023-05-12 06:28:16'),
(38, NULL, 'Ae', '0989536321', 'cuongcon@gmail.com', 'Ãƒâ€šn Thi', '2023-05-12 00:00:00', 55659, NULL, '2023-05-12 06:29:20', '2023-05-12 06:29:20'),
(39, NULL, 'adadada', '0989536321', 'trantrung2002hy89@gmail.com', 'Ãƒâ€šn Thi', '2023-05-12 00:00:00', 55659, NULL, '2023-05-12 06:30:24', '2023-05-12 06:30:24'),
(40, NULL, 'TrÃ¡ÂºÂ§n Quang Trung', '0989536321', 'trantrung2002hy89@gmail.com', 'adÃ„â€˜', '2023-05-12 00:00:00', 55659, NULL, '2023-05-12 06:33:17', '2023-05-12 06:33:17'),
(41, NULL, '7', '0989536321', 'trantrung2002hy89@gmail.com', 'Ãƒâ€šn Thi', '2023-05-12 00:00:00', 41324, NULL, '2023-05-12 06:33:58', '2023-05-12 06:33:58'),
(42, NULL, 'ae', '0989536321', 'daonhatviet2912@gmail.com', 'YÃƒÂªn MÃ¡Â»Â¹', '2023-05-12 00:00:00', 111318, NULL, '2023-05-12 06:42:18', '2023-05-12 06:42:18'),
(43, NULL, '2 sÃ¡ÂºÂ£n phÃ¡ÂºÂ©m', '0989536321', 'daonhatviet2912@gmail.com', 'Ãƒâ€šn Thi', '2023-05-24 00:00:00', 82648, NULL, '2023-05-24 06:54:56', '2023-05-24 06:54:56'),
(44, NULL, 'Ã„ÂÃ¡Â»â€” NhÃ†Â° NghÃ„Â©a', '0989536321', 'trungruoi747@gmail.com', 'Ãƒâ€šn Thi', '2023-05-26 00:00:00', 123972, NULL, '2023-05-25 20:22:25', '2023-05-25 20:22:25'),
(45, NULL, 'nghia', '09832123', 'daonhatviet2912@gmail.com', 'nghÃ„Â©a', '2023-05-26 00:00:00', 82648, NULL, '2023-05-25 20:37:44', '2023-05-25 20:37:44'),
(46, NULL, '3sÃ¡ÂºÂ£n phÃ¡ÂºÂ©m', '0989536321', 'nghiadonhu96@gmail.com', 'Ãƒâ€šn Thi', '2023-10-21 00:00:00', 78132, NULL, '2023-10-20 20:18:59', '2023-10-20 20:18:59'),
(47, NULL, '4 sÃ¡ÂºÂ£n phÃ¡ÂºÂ©m', '0989536321', 'daonhatviet2912@gmail.comom', 'Ãƒâ€šn Thi', '2023-10-21 00:00:00', 146824, NULL, '2023-10-20 20:20:25', '2023-10-20 20:20:25'),
(48, NULL, 'KiÃƒÂªn', '0989536321', 'trungruoi747@gmail.com', 'Ãƒâ€šn Thi', '2023-10-22 00:00:00', 119456, NULL, '2023-10-21 17:26:02', '2023-10-21 17:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `hoadonnhap`
--

CREATE TABLE `hoadonnhap` (
  `id` int(11) NOT NULL,
  `Nhanvien_id` int(11) DEFAULT NULL,
  `Thanhtien` float DEFAULT NULL,
  `Ngaynhap` datetime DEFAULT NULL,
  `Ncc_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `hoadonnhap`
--

INSERT INTO `hoadonnhap` (`id`, `Nhanvien_id`, `Thanhtien`, `Ngaynhap`, `Ncc_id`, `created_at`, `updated_at`) VALUES
(1, 1, 20000, '2023-05-02 21:39:17', 1, '2023-05-06 14:39:31', NULL),
(2, 1, 20000, '2023-05-02 00:00:00', 1, '2023-05-06 08:06:14', '2023-05-06 08:06:14'),
(4, 1, 2000, '2023-05-02 00:00:00', 1, '2023-05-06 08:16:27', '2023-05-10 14:54:53'),
(5, 1, 2000, '2023-05-02 00:00:00', 1, '2023-05-06 08:17:54', '2023-05-10 14:54:56'),
(6, 1, 2000, '2023-05-02 00:00:00', 1, '2023-05-06 08:19:03', '2023-05-10 14:54:57'),
(7, 1, 20000, '2023-03-03 00:00:00', 1, '2023-05-06 08:20:49', '2023-05-06 08:20:49'),
(8, 1, 20000, '2023-03-03 00:00:00', 1, '2023-05-06 08:29:26', '2023-05-06 08:29:26'),
(9, 1, 20000, '2023-03-03 00:00:00', 1, '2023-05-06 08:34:49', '2023-05-06 08:34:49'),
(10, 1, 20000, '2023-03-03 00:00:00', 1, '2023-05-10 05:39:28', '2023-05-10 05:39:28'),
(11, 1, 20000, '2023-03-03 00:00:00', 1, '2023-05-10 05:45:14', '2023-05-10 05:45:14'),
(12, 1, 20000, '2023-03-03 00:00:00', 1, '2023-05-10 05:46:27', '2023-05-10 05:46:27'),
(13, 1, 20000, '2023-03-03 00:00:00', 1, '2023-05-10 07:42:43', '2023-05-10 07:42:43'),
(14, 2, 20000, '2023-03-03 00:00:00', 1, '2023-05-10 07:51:54', '2023-05-10 07:51:54');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `Khachhang_id` int(11) NOT NULL,
  `Tenkhachhang` varchar(100) DEFAULT NULL,
  `Anhdaidien` varchar(100) DEFAULT NULL,
  `Ngaysinh` datetime DEFAULT NULL,
  `Sdt` char(20) DEFAULT NULL,
  `Diachi` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`Khachhang_id`, `Tenkhachhang`, `Anhdaidien`, `Ngaysinh`, `Sdt`, `Diachi`, `Email`, `created_at`, `updated_at`) VALUES
(1, 'VÃ…Â© Quang CÃ†Â°Ã¡Â»Âng', 'xe1.png', '2002-05-01 00:00:00', '09783322123', 'Ãƒâ€šn Thi', 'nghia10x02@gmail.com', '2023-04-18 02:57:41', '2023-04-18 02:57:41'),
(2, 'NghÄ©a hehe', 'NghÄ©aadada', '0000-00-00 00:00:00', '0978332212', 'HÆ°ng YÃªn', 'nghia9x02Gmail.com', '2023-12-09 01:19:52', '2023-12-09 01:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `Maloai_id` int(11) NOT NULL,
  `Tenloai` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`Maloai_id`, `Tenloai`, `created_at`, `updated_at`) VALUES
(1, 'Xe sá»‘', '2023-04-18 08:04:48', '2023-12-08 15:22:57'),
(2, 'Xe tay ga', '2023-04-18 08:04:48', NULL),
(3, 'Xe cÃ´n tay', '2023-04-18 08:04:48', '2023-12-08 15:23:05'),
(4, 'Xe mÃ´ tÃ´', '2023-04-18 08:04:48', '2023-12-08 15:23:11'),
(7, 'h thucÄ‘', '2023-12-08 15:31:31', '2023-12-09 14:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `ncc`
--

CREATE TABLE `ncc` (
  `Ncc_id` int(11) NOT NULL,
  `Tenncc` varchar(100) DEFAULT NULL,
  `Diachi` varchar(100) DEFAULT NULL,
  `Sdt` char(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `ncc`
--

INSERT INTO `ncc` (`Ncc_id`, `Tenncc`, `Diachi`, `Sdt`, `created_at`, `updated_at`) VALUES
(1, 'Honda', 'HÆ°ng YÃªn', '09783322123', '2023-04-18 02:27:03', '2023-12-09 00:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `Nhanvien_id` int(11) NOT NULL,
  `Tennhanvien` varchar(100) DEFAULT NULL,
  `Ngaysinh` datetime DEFAULT NULL,
  `Sdt` char(20) DEFAULT NULL,
  `Diachi` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Anh` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`Nhanvien_id`, `Tennhanvien`, `Ngaysinh`, `Sdt`, `Diachi`, `Email`, `Anh`, `created_at`, `updated_at`) VALUES
(1, 'Ã„ÂÃƒÂ o NhÃ¡ÂºÂ­t ViÃ¡Â»â€¡t', '2002-06-05 00:00:00', '0989321312', 'Ãƒâ€šn Thi', 'daonhatviet2912@gmail.comom', 'xe2.png', '2023-04-18 02:30:14', '2023-04-18 02:30:20'),
(2, 'NguyÃ¡Â»â€¦n ThÃ¡ÂºÂ¿ DÃ…Â©ng', '2002-06-05 00:00:00', '09783322123', 'YÃƒÂªn MÃ¡Â»Â¹', 'trungruoi747@gmail.com', 'xetayga1.png', '2023-04-18 02:30:54', '2023-04-18 02:30:54'),
(3, 'NghÄ©a hoho', '0000-00-00 00:00:00', '0978332212', 'HÆ°ng YÃªn', 'nghia9x02Gmail.com', NULL, '2023-12-09 01:27:19', '2023-12-09 01:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `Sanpham_id` int(11) NOT NULL,
  `Maloai_id` int(11) DEFAULT NULL,
  `Tensanpham` varchar(100) NOT NULL,
  `Anh` varchar(1000) DEFAULT NULL,
  `Soluong` int(11) DEFAULT NULL,
  `Gia` decimal(10,3) DEFAULT NULL,
  `Maluc` varchar(1000) DEFAULT NULL,
  `PhanKhuc` varchar(1000) DEFAULT NULL,
  `VongTuaMay` varchar(1000) DEFAULT NULL,
  `MoMenXoan` varchar(1000) DEFAULT NULL,
  `Giakhuyenmai` decimal(10,3) DEFAULT NULL,
  `ViewCount` int(11) DEFAULT NULL,
  `ReducePrice` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`Sanpham_id`, `Maloai_id`, `Tensanpham`, `Anh`, `Soluong`, `Gia`, `Maluc`, `PhanKhuc`, `VongTuaMay`, `MoMenXoan`, `Giakhuyenmai`, `ViewCount`, `ReducePrice`, `created_at`, `updated_at`) VALUES
(2, 1, 'Air Blade 125/160', 'xe2.png', 21, 41324.000, '144hz', '2020', '30', 'Ko', 40324.000, NULL, 15, '2023-04-18 08:05:05', '2023-12-09 02:22:47'),
(3, 2, 'LEAD 125cc', 'xe8.png', 20, 41324.000, '144hz', '2020', '30', 'Ko', 40324.000, 20, 15, '2023-04-18 08:05:05', '2023-10-21 17:26:02'),
(4, 2, 'Air Blade 125/160', 'xetayga1.png', 38, 39066.000, '144hz', '2020', '30', 'Ko', 38066.000, 20, 15, '2023-04-18 08:05:05', '2023-10-21 17:26:02'),
(5, 2, 'SH350i', 'xe9.jpg', 156, 14899.000, '144hz', '2020', '30', 'Ko', 13899.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:29:50'),
(6, 1, 'SH125i/150i', 'xe20.jpg', 16, 71957.000, '144hz', '2020', '30', 'Ko', 70957.000, NULL, 15, '2023-04-18 08:05:05', '2023-10-21 17:27:35'),
(7, 3, 'CB150R The Streetster', 'xe23.jpg', 15, 105500.000, '144hz', '2020', '30', 'Ko', 95500.000, 20, 15, '2023-04-18 08:05:05', '2023-10-20 20:20:25'),
(8, 3, 'CBR150R', 'xe26.png', 16, 30328.000, '144hz', '2020', '30', 'Ko', 29328.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:29:50'),
(9, 3, 'Winner X', 'xe25.png', 16, 46160.000, '144hz', '2020', '30', 'Ko', 45160.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:29:50'),
(10, 2, 'CBR500R 2022', 'CB150R THE STREETSTER.jpg', 2, 1924900.000, '144hz', '2020', '30', 'Ko', 1824900.000, NULL, 15, '2023-04-18 08:05:05', '2023-04-18 02:20:31'),
(11, 4, 'CB500X 2022', 'xemoto2.jpg', 16, 1937900.000, '144hz', '2020', '30', 'Ko', 1837900.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:29:50'),
(12, 4, 'CB500F 2022', 'xemoto3.jpg', 46, 1844900.000, '144hz', '2020', '30', 'Ko', 1744900.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:18:48'),
(13, 4, 'CB650R', 'xemoto4.png', 16, 246490.000, '144hz', '2020', '30', 'Ko', 246490.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:29:50'),
(14, 4, 'Rebel 500', 'xemoto5.png', 4, 180800.000, '144hz', '2020', '30', 'Ko', 180800.000, 20, 15, '2023-04-18 08:05:05', NULL),
(15, 4, 'Gold Wing', 'xemoto6.png', 748, 989124.000, '144hz', '2020', '30', 'Ko', 989114.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:18:48'),
(16, 4, 'CB1000R 2021', 'xemoto7.png', 64, 5100000.000, '144hz', '2020', '30', 'Ko', 5000000.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:29:50'),
(17, 4, 'CBR650R', 'xemoto8.png', 16, 2544900.000, '144hz', '2020', '30', 'Ko', 2454900.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:29:50'),
(18, 4, 'Africa Twin Adventu', 'xemoto9.jpg', 4, 2544900.000, '144hz', '2020', '30', 'Ko', 2454900.000, 20, 15, '2023-04-18 08:05:05', NULL),
(19, 4, 'Africa Twin 2021', 'xemoto10.jpg', 4, 5904900.000, '144hz', '2020', '30', 'Ko', 5804900.000, 20, 15, '2023-04-18 08:05:05', NULL),
(20, 4, 'CBR1000RR-R', 'xemoto11.png', 128, 9550000.000, '144hz', '2020', '30', 'Ko', 9450000.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:18:48'),
(21, 4, 'Tracer 9', '2021-Yamaha-Tracer-9-2.jpg', 28, 369000.000, '144hz', '2020', '30', 'Ko', 3790000.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:34:29'),
(22, 4, 'R7', 'ymh-motor-vn-2022_yzf690_dpbmc_usa_team-yamaha-blue_s3_cmyk.png', 32, 2690000.000, '144hz', '2020', '30', 'Ko', 2590000.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:18:48'),
(23, 1, 'Exciter 150 Pearl White', 'Exciter-150-Pearl-White-004.png', 46, 458000.000, '144hz', '2020', '30', 'Ko', 448000.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:29:50'),
(24, 1, 'JUPITER FI', 'Jupiter-Mat-Black-004.png', 4, 369000.000, '144hz', '2020', '30', 'Ko', 3790000.000, 20, 15, '2023-04-18 08:05:05', NULL),
(25, 1, 'JUPITER FINN', 'Jupiter-Finn-Silver-Metallic-004.png', 4, 280000.000, '144hz', '2020', '30', 'Ko', 270000.000, 20, 15, '2023-04-18 08:05:05', NULL),
(26, 1, 'NVX 155 VVA', 'Latte-Dark-Grey-004.png', 4, 54500.000, '144hz', '2020', '30', 'Ko', 53500.000, 20, 15, '2023-04-18 08:05:05', NULL),
(27, 2, 'LATTE', 'NVX-Bluish-Gray-004.png', 4, 54500.000, '144hz', '2020', '30', 'Ko', 53500.000, 20, 15, '2023-04-18 08:05:05', NULL),
(28, 2, 'JANUS', 'New-Janus-Black-Metallic-SMK-004.png', 19, 54500.000, '144hz', '2020', '30', 'Ko', 53500.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 12:33:42'),
(29, 2, 'FREEGO S', 'FreeGo-Mat-Red-SMK-004.png', 8, 54500.000, '144hz', '2020', '30', 'Ko', 53500.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:34:29'),
(30, 2, 'MONSTER ENERGY', 'X30-Monster-004.png', 13, 54500.000, '144hz', '2020', '30', 'Ko', 53500.000, 20, 15, '2023-04-18 08:05:05', '2023-05-10 07:34:29'),
(31, 1, 'Gold Wing', NULL, 2, 20000.000, '144hz', 'ko', 'ko', 'ko', 200000.000, 14, 2, '2023-04-18 02:18:50', '2023-04-18 08:11:37'),
(32, 1, 'Gold Wing', 'NVX-Bluish-Gray-004.png', 2, 300000.000, '144hz', 'ko', 'ko', 'ko', 210000.000, NULL, 23, '2023-04-18 02:21:21', '2023-04-18 08:09:02'),
(33, 1, 'Sh Mode 125cc', 'xe7.png', 10, 222200.000, 'ko', 'ko', 'ko', 'ko', 210000.000, NULL, 3, '2023-05-25 06:43:05', '2023-05-25 06:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `Nhanvien_id` int(11) DEFAULT NULL,
  `Ngaynhap` datetime DEFAULT NULL,
  `Anh` varchar(500) DEFAULT NULL,
  `Mota` varchar(1000) DEFAULT NULL,
  `Tentieude` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id`, `Nhanvien_id`, `Ngaynhap`, `Anh`, `Mota`, `Tentieude`, `created_at`, `updated_at`) VALUES
(1, 2, '2023-03-03 00:00:00', 'dongco1.png', 'Blade 110 Ã„â€˜Ã†Â°Ã¡Â»Â£c thiÃ¡ÂºÂ¿t kÃ¡ÂºÂ¿ hÃ†Â°Ã¡Â»â€ºng Ã„â€˜Ã¡ÂºÂ¿n sÃ¡Â»Â± Ã¢â‚¬Å“Thanh thoÃƒÂ¡t vÃƒÂ  SÃ¡ÂºÂ¯c nÃƒÂ©tÃ¢â‚¬Â vÃƒÂ  sÃ¡Â»Â± hÃƒÂ i hÃƒÂ²a giÃ¡Â»Â¯a tÃ†Â° thÃ¡ÂºÂ¿ ngÃ†Â°Ã¡Â»Âi Ã„â€˜iÃ¡Â»Âu khiÃ¡Â»Æ’n vÃƒÂ  chiÃ¡ÂºÂ¿c xe Ã„â€˜Ã¡Â»Æ’ Ã„â€˜Ã¡ÂºÂ£m bÃ¡ÂºÂ£o tÃ†Â° thÃ¡ÂºÂ¿ khÃƒÂ¡ch hÃƒÂ ng lÃƒÂ¡i xe Ã„â€˜Ã¡ÂºÂ¹p, tÃ¡Â»Â± tin vÃƒÂ  thoÃ¡ÂºÂ£i mÃƒÂ¡i', 'Blead', '2023-04-18 02:31:18', '2023-04-18 02:31:18'),
(2, 3, '0000-00-00 00:00:00', '0978332212', 'HÆ°ng YÃªn', 'nghia11.com', '2023-12-09 01:34:31', '2023-12-09 01:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'nghiadonhu', 'nghia9x02@gmail.com', '$2y$10$tSg1yl5bqExp/L7eTl1GOu.D8QKWCJVofuvMldp1dqxf2An3kz0eO', '2023-05-24 09:15:37', '2023-05-24 09:15:37'),
(2, 'viet', 'daoviet@gmail.com', '$2y$10$d7It23JlL13dVYjycqK6FenLwxfQSId8GXARK09ACIe.caLARyoLC', '2023-05-24 19:04:49', '2023-05-24 19:04:49'),
(3, 'NghÄ©aadada', 'nghia9x02@gmail.com', '1223', '2023-12-09 01:58:59', '2023-12-09 01:59:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ctdh`
--
ALTER TABLE `ctdh`
  ADD PRIMARY KEY (`Ctdh_id`),
  ADD KEY `Donhang_id` (`Donhang_id`),
  ADD KEY `Sanpham_id` (`Sanpham_id`);

--
-- Indexes for table `cthdn`
--
ALTER TABLE `cthdn`
  ADD PRIMARY KEY (`Macthdn_id`),
  ADD KEY `Hoadonnhap_id` (`Hoadonnhap_id`),
  ADD KEY `Sanpham_id` (`Sanpham_id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`Donhang_id`),
  ADD KEY `Khachhang_id` (`Khachhang_id`);

--
-- Indexes for table `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Nhanvien_id` (`Nhanvien_id`),
  ADD KEY `Ncc_id` (`Ncc_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Khachhang_id`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`Maloai_id`);

--
-- Indexes for table `ncc`
--
ALTER TABLE `ncc`
  ADD PRIMARY KEY (`Ncc_id`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`Nhanvien_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`Sanpham_id`),
  ADD KEY `Maloai_id` (`Maloai_id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Nhanvien_id` (`Nhanvien_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ctdh`
--
ALTER TABLE `ctdh`
  MODIFY `Ctdh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `cthdn`
--
ALTER TABLE `cthdn`
  MODIFY `Macthdn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `Donhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `Khachhang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `Maloai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ncc`
--
ALTER TABLE `ncc`
  MODIFY `Ncc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `Nhanvien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `Sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ctdh`
--
ALTER TABLE `ctdh`
  ADD CONSTRAINT `ctdh_ibfk_1` FOREIGN KEY (`Donhang_id`) REFERENCES `donhang` (`Donhang_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ctdh_ibfk_2` FOREIGN KEY (`Sanpham_id`) REFERENCES `sanpham` (`Sanpham_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cthdn`
--
ALTER TABLE `cthdn`
  ADD CONSTRAINT `cthdn_ibfk_1` FOREIGN KEY (`Hoadonnhap_id`) REFERENCES `hoadonnhap` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cthdn_ibfk_2` FOREIGN KEY (`Sanpham_id`) REFERENCES `sanpham` (`Sanpham_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`Khachhang_id`) REFERENCES `khachhang` (`Khachhang_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadonnhap`
--
ALTER TABLE `hoadonnhap`
  ADD CONSTRAINT `hoadonnhap_ibfk_1` FOREIGN KEY (`Nhanvien_id`) REFERENCES `nhanvien` (`Nhanvien_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadonnhap_ibfk_2` FOREIGN KEY (`Ncc_id`) REFERENCES `ncc` (`Ncc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`Maloai_id`) REFERENCES `loaisanpham` (`Maloai_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`Nhanvien_id`) REFERENCES `nhanvien` (`Nhanvien_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
