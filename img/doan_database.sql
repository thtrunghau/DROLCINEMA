-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 08:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `bapnuoc`
--

CREATE TABLE `bapnuoc` (
  `maBapNuoc` int(11) NOT NULL,
  `tenSP` varchar(100) DEFAULT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bapnuoc`
--

INSERT INTO `bapnuoc` (`maBapNuoc`, `tenSP`, `gia`) VALUES
(1, '100', 120);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `maBL` int(11) NOT NULL,
  `maPhim` int(11) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `maHD` int(11) NOT NULL,
  `soluongXC` int(11) NOT NULL,
  `maXC` int(11) NOT NULL,
  `maBapNuoc` int(11) NOT NULL,
  `soluongBapNuoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ghe`
--

CREATE TABLE `ghe` (
  `maGhe` int(11) NOT NULL,
  `tinhtrang` bit(1) DEFAULT NULL,
  `loaiGhe` varchar(20) NOT NULL DEFAULT 'Thường'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ghe`
--

INSERT INTO `ghe` (`maGhe`, `tinhtrang`, `loaiGhe`) VALUES
(1, b'0', 'Thường'),
(2, b'0', 'Couple'),
(3, b'0', 'Thường'),
(4, b'0', 'Couple'),
(5, b'0', 'Thường'),
(6, b'0', 'VIP'),
(7, b'0', 'Thường'),
(8, b'0', 'VIP'),
(9, b'0', 'Thường'),
(10, b'0', 'Couple'),
(11, b'0', 'Thường'),
(12, b'0', 'VIP'),
(13, b'0', 'Thường'),
(14, b'0', 'Couple'),
(15, b'0', 'Thường'),
(16, b'0', 'VIP'),
(17, b'0', 'Thường'),
(18, b'0', 'VIP'),
(19, b'0', 'Thường'),
(20, b'0', 'VIP'),
(21, b'0', 'Thường'),
(22, b'0', 'Couple'),
(23, b'0', 'Thường'),
(24, b'0', 'Couple'),
(25, b'0', 'Thường'),
(26, b'0', 'Thường'),
(27, b'0', 'VIP'),
(28, b'0', 'Thường'),
(29, b'0', 'Thường'),
(30, b'0', 'VIP');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `maHD` int(11) NOT NULL,
  `ngayDat` date NOT NULL,
  `email` varchar(256) NOT NULL,
  `tongTien` int(11) DEFAULT NULL,
  `maKM` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`maHD`, `ngayDat`, `email`, `tongTien`, `maKM`) VALUES
(1, '2022-12-17', 'admin@gmail.com', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `maKM` int(11) NOT NULL,
  `chuDe` varchar(255) NOT NULL,
  `noiDung` varchar(1000) NOT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `ngayBD` date NOT NULL,
  `ngayKT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`maKM`, `chuDe`, `noiDung`, `anh`, `ngayBD`, `ngayKT`) VALUES
(1, 'Khuyến mãi', 'CHƯƠNG TRÌNH ƯU ĐÃI DÀNH CHO CHỦ THẺ VPBANK', NULL, '2022-12-15', '2022-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `loaighe`
--

CREATE TABLE `loaighe` (
  `maLoai` int(11) NOT NULL,
  `tenLoai` varchar(20) DEFAULT NULL,
  `phuThu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaighe`
--

INSERT INTO `loaighe` (`maLoai`, `tenLoai`, `phuThu`) VALUES
(1, 'Thường', 0),
(2, 'Couple', 20),
(3, 'VIP', 40);

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE `phim` (
  `maPhim` int(11) NOT NULL,
  `ngayBD` date NOT NULL,
  `ngayKT` date NOT NULL,
  `anh` varchar(255) DEFAULT './img/imgCard.jpg',
  `daoDien` varchar(255) DEFAULT NULL,
  `dienVien` varchar(255) DEFAULT NULL,
  `gia` int(11) NOT NULL,
  `hangPhim` varchar(255) DEFAULT NULL,
  `phienBan` varchar(255) DEFAULT NULL,
  `quocGia` varchar(255) NOT NULL,
  `tenPhim` varchar(255) NOT NULL,
  `theLoai` varchar(255) NOT NULL,
  `thoiLuong` int(11) NOT NULL,
  `trangThai` bit(1) NOT NULL DEFAULT b'0',
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`maPhim`, `ngayBD`, `ngayKT`, `anh`, `daoDien`, `dienVien`, `gia`, `hangPhim`, `phienBan`, `quocGia`, `tenPhim`, `theLoai`, `thoiLuong`, `trangThai`, `video`) VALUES
(0, '2023-04-21', '2023-04-30', './img/phimsapchieu/ghost-station_main_fin_viethoa(1).jpg', NULL, NULL, 10000, NULL, NULL, 'Mỹ', 'TRẠM TÀU MA', 'Kinh Dị', 90, b'0', NULL),
(1, '2023-04-21', '2023-04-30', './img/phimsapchieu/amvucchet.jpg', NULL, NULL, 10000, NULL, NULL, 'Ý', 'ÂM VỰC CHẾT', 'Kinh Dị', 120, b'0', NULL),
(2, '2023-04-21', '2023-04-30', './img/phimsapchieu/cxt-nmc.jpg', NULL, NULL, 10000, NULL, NULL, 'Việt Nam', 'CHUYỆN XÓM TUI CON - NHÓT MÓT CHỒNG', 'Hài, Tình cảm', 90, b'0', NULL),
(3, '2023-04-21', '2023-04-30', './img/phimsapchieu/dgddd.jpg', NULL, NULL, 10000, NULL, NULL, 'Hàn Quốc', 'ĐẦU GẤU ĐỤNG ĐẦU ĐẤT', 'Hài, Hành động', 120, b'0', NULL),
(4, '2023-04-21', '2023-04-30', './img/phimsapchieu/poster_payoff_khe_uoc_12(1).jpg', NULL, NULL, 10000, NULL, NULL, 'Mỹ', 'KHẾ ƯỚC', 'Hành Động, Hồi hộp, Tội phạm', 180, b'0', NULL),
(5, '2023-04-21', '2023-04-30', './img/phimsapchieu/tamvedinhmenh.jpg', NULL, NULL, 10000, NULL, NULL, 'Việt Nam', 'LẬT MẶT 6 - TẤM VÉ ĐỊNH MỆNH', 'Hài, Hành Động, Hồi hộp, Tâm Lý', 180, b'0', NULL),
(6, '2023-04-21', '2023-04-30', './img/phimsapchieu/malairutruot.jpg', NULL, NULL, 10000, NULL, NULL, 'Thái', 'MA LAI RÚT RUỘT', 'Kinh Dị', 120, b'0', NULL),
(7, '2023-04-21', '2023-04-30', './img/phimsapchieu/poster_payoff_cats_in_the_museum(1).jpg', NULL, NULL, 10000, NULL, NULL, 'Mỹ', 'MÈO SIÊU QUẬY Ở VIỆN BẢO TÀNG', 'Hài, Hoạt Hình, Phiêu Lưu', 120, b'0', NULL),
(8, '2023-04-21', '2023-04-30', './img/phimsapchieu/nguctoivarong.jpg', NULL, NULL, 10000, NULL, NULL, 'Mỹ', 'NGỤC TỐI & RỒNG - DANH DỰ CỦA KẺ TRỘM', 'Hành Động, Phiêu Lưu, Thần thoại', 120, b'0', NULL),
(11, '2023-04-21', '2023-04-30', './img/phimdangchieu/teaser_poster_1-marry-my-dead-body(1).jpg', NULL, NULL, 10000, NULL, NULL, 'Hàn Quốc', 'CHUYỆN TÔI VÀ MA QUỶ THÀNH NGƯỜI MỘT NHÀ', 'Bí ẩn, Hài, Hành Động', 120, b'1', NULL),
(12, '2023-04-21', '2023-04-30', './img/phimdangchieu/pope_sexorcist_poster_h_m_ng_c(1).jpg', NULL, NULL, 10000, NULL, NULL, 'Mỹ', 'KHẮC TINH CỦA QUỶ', 'Kinh dị', 120, b'1', NULL),
(13, '2023-04-21', '2023-04-30', './img/phimdangchieu/super_mario_bros._payoff_poster(1).jpg', NULL, NULL, 10000, NULL, NULL, 'Mỹ', 'PHIM ANH EM SUPER MARIO', 'Hài, Hoạt Hình, Phiêu Lưu', 120, b'1', NULL),
(14, '2023-04-21', '2023-04-30', './img/phimdangchieu/the_first_slam_dunk_-_key_visual_1_(1).jpg', NULL, NULL, 10000, NULL, NULL, 'Nhật Bản', 'PHIM CÚ ÚP RỔ ĐẦU TIÊN', 'Hài, Hoạt Hình', 180, b'1', NULL),
(15, '2023-04-21', '2023-04-30', './img/phimdangchieu/renfield_700x1000px(1).jpg', NULL, NULL, 10000, NULL, NULL, 'Mỹ', 'RENFIELD TAY SAI CỦA QUỶ', 'Hài, Kinh Dị', 90, b'1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phong`
--

CREATE TABLE `phong` (
  `maPhong` int(11) NOT NULL,
  `maGhe` int(11) NOT NULL,
  `trangthai` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phong`
--

INSERT INTO `phong` (`maPhong`, `maGhe`, `trangthai`) VALUES
(1, 1, b'0'),
(1, 2, b'0'),
(1, 3, b'0'),
(1, 4, b'0'),
(1, 5, b'0'),
(1, 6, b'0'),
(1, 7, b'0'),
(1, 8, b'0'),
(1, 9, b'0'),
(1, 10, b'0'),
(2, 11, b'0'),
(2, 12, b'0'),
(2, 13, b'0'),
(2, 14, b'0'),
(2, 15, b'0'),
(2, 16, b'0'),
(2, 17, b'0'),
(2, 18, b'0'),
(2, 19, b'0'),
(2, 20, b'0'),
(3, 21, b'0'),
(3, 22, b'0'),
(3, 23, b'0'),
(3, 24, b'0'),
(3, 25, b'0'),
(3, 26, b'0'),
(3, 27, b'0'),
(3, 28, b'0'),
(3, 29, b'0'),
(3, 30, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `rap`
--

CREATE TABLE `rap` (
  `maRap` int(11) NOT NULL,
  `maPhong` int(11) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rap`
--

INSERT INTO `rap` (`maRap`, `maPhong`, `diachi`) VALUES
(1, 1, '123 Hai Bà Trưng Quận 1 TPHCM'),
(2, 2, '72 Thành Thái Quận 10 TPHCM');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `email` varchar(256) NOT NULL,
  `matKhau` varchar(255) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `admin` bit(1) NOT NULL DEFAULT b'0',
  `sdt` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`email`, `matKhau`, `ten`, `admin`, `sdt`) VALUES
('admin@gmail.com', '1234', 'hanh', b'1', '0878053999');

-- --------------------------------------------------------

--
-- Table structure for table `xuatchieu`
--

CREATE TABLE `xuatchieu` (
  `maXC` int(11) NOT NULL,
  `ngaygio` date NOT NULL,
  `maPhong` int(11) NOT NULL,
  `maPhim` int(11) NOT NULL,
  `maRap` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bapnuoc`
--
ALTER TABLE `bapnuoc`
  ADD PRIMARY KEY (`maBapNuoc`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`maBL`),
  ADD KEY `maPhim` (`maPhim`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`maHD`,`maXC`,`maBapNuoc`),
  ADD KEY `maXC` (`maXC`),
  ADD KEY `maBapNuoc` (`maBapNuoc`);

--
-- Indexes for table `ghe`
--
ALTER TABLE `ghe`
  ADD PRIMARY KEY (`maGhe`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`maHD`),
  ADD KEY `maKM` (`maKM`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`maKM`);

--
-- Indexes for table `loaighe`
--
ALTER TABLE `loaighe`
  ADD PRIMARY KEY (`maLoai`);

--
-- Indexes for table `phim`
--
ALTER TABLE `phim`
  ADD PRIMARY KEY (`maPhim`);

--
-- Indexes for table `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`maPhong`,`maGhe`),
  ADD KEY `maGhe` (`maGhe`);

--
-- Indexes for table `rap`
--
ALTER TABLE `rap`
  ADD PRIMARY KEY (`maRap`,`maPhong`),
  ADD KEY `maPhong` (`maPhong`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `xuatchieu`
--
ALTER TABLE `xuatchieu`
  ADD PRIMARY KEY (`maXC`),
  ADD KEY `maPhong` (`maPhong`),
  ADD KEY `maPhim` (`maPhim`),
  ADD KEY `maRap` (`maRap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bapnuoc`
--
ALTER TABLE `bapnuoc`
  MODIFY `maBapNuoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `maBL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ghe`
--
ALTER TABLE `ghe`
  MODIFY `maGhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `maHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `maKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loaighe`
--
ALTER TABLE `loaighe`
  MODIFY `maLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phim`
--
ALTER TABLE `phim`
  MODIFY `maPhim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `phong`
--
ALTER TABLE `phong`
  MODIFY `maPhong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rap`
--
ALTER TABLE `rap`
  MODIFY `maRap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `xuatchieu`
--
ALTER TABLE `xuatchieu`
  MODIFY `maXC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`maPhim`) REFERENCES `phim` (`maPhim`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`email`) REFERENCES `taikhoan` (`email`);

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`maXC`) REFERENCES `xuatchieu` (`maXC`),
  ADD CONSTRAINT `chitiethoadon_ibfk_3` FOREIGN KEY (`maBapNuoc`) REFERENCES `bapnuoc` (`maBapNuoc`),
  ADD CONSTRAINT `chitiethoadon_ibfk_4` FOREIGN KEY (`maHD`) REFERENCES `hoadon` (`maHD`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`maKM`) REFERENCES `khuyenmai` (`maKM`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`email`) REFERENCES `taikhoan` (`email`);

--
-- Constraints for table `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`maGhe`) REFERENCES `ghe` (`maGhe`);

--
-- Constraints for table `rap`
--
ALTER TABLE `rap`
  ADD CONSTRAINT `rap_ibfk_1` FOREIGN KEY (`maPhong`) REFERENCES `phong` (`maPhong`);

--
-- Constraints for table `xuatchieu`
--
ALTER TABLE `xuatchieu`
  ADD CONSTRAINT `xuatchieu_ibfk_1` FOREIGN KEY (`maPhong`) REFERENCES `phong` (`maPhong`),
  ADD CONSTRAINT `xuatchieu_ibfk_2` FOREIGN KEY (`maPhim`) REFERENCES `phim` (`maPhim`),
  ADD CONSTRAINT `xuatchieu_ibfk_3` FOREIGN KEY (`maRap`) REFERENCES `rap` (`maRap`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
