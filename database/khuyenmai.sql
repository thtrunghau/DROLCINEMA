-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2023 lúc 10:12 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xemphimthat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

-- CREATE TABLE `khuyenmai` (
--   `maKM` int(11) NOT NULL,
--   `chuDe` varchar(255) NOT NULL,
--   `noiDung` varchar(1000) NOT NULL,
--   `anh` varchar(255) DEFAULT NULL,
--   `ngayBD` date NOT NULL,
--   `ngayKT` date NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`maKM`, `chuDe`, `noiDung`, `anh`, `ngayBD`, `ngayKT`) VALUES
(2, 'Khuyến mãi', 'CHƯƠNG TRÌNH ƯU ĐÃI DÀNH CHO CHỦ THẺ VPBANK', NULL, '2022-12-15', '2022-12-31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `khuyenmai`
--
-- ALTER TABLE `khuyenmai`
--   ADD PRIMARY KEY (`maKM`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
-- ALTER TABLE `khuyenmai`
--   MODIFY `maKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
-- COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
