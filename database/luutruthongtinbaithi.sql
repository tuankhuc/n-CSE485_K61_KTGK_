-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 22, 2021 lúc 03:18 AM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hệ thống quản lý thi trắc nghiệm trực tuyến`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lưu trữ thông tin bài thi`
--

CREATE TABLE `lưu trữ thông tin bài thi` (
  `id,` int(11) NOT NULL,
  `exam_title,` text NOT NULL,
  `exam_datetime` datetime NOT NULL,
  `duration` timestamp NOT NULL,
  `total_question` char(50) NOT NULL,
  `marks_per_right_answer` varchar(10) NOT NULL,
  `created_on` date NOT NULL,
  `status` text NOT NULL,
  `exam_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `lưu trữ thông tin bài thi`
--

INSERT INTO `lưu trữ thông tin bài thi` (`id,`, `exam_title,`, `exam_datetime`, `duration`, `total_question`, `marks_per_right_answer`, `created_on`, `status`, `exam_code`) VALUES
(99856, 'hệ thống quản lý', '2021-10-22 00:00:00', '2021-10-22 02:00:00', '40', '0.25', '2021-10-21', '0', 7788),
(99851, 'hệ thống quản lý nhà hàng\r\n', '2021-10-22 00:00:00', '2021-10-22 02:00:00', '40', '0.25', '0000-00-00', 'Pending', 7788),
(99858, 'hệ thống xử lý nguồn nước', '2021-10-22 00:00:00', '2021-10-22 02:00:00', '40', '0.25', '2021-10-22', 'Created', 7788),
(99859, 'xây dựng trang web', '2021-10-22 00:00:00', '2021-10-22 02:00:00', '40', '0.25', '2021-10-22', 'Started', 7799);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
