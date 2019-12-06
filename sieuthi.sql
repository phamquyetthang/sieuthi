-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2019 lúc 10:19 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `sieuthi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banhang`
--

CREATE TABLE `banhang` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `money` int(11) NOT NULL,
  `id_nv` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(11) NOT NULL,
  `chucvu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id`, `chucvu`) VALUES
(1, 'Nhân viên'),
(2, 'Quản lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanhthu`
--

CREATE TABLE `doanhthu` (
  `id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `id_nv` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `accname` varchar(100) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `avt` text NOT NULL DEFAULT 'library/img/avt0.jpg',
  `sdt` text NOT NULL DEFAULT '+84*********',
  `email` text NOT NULL DEFAULT '***@gmail.com',
  `password` int(11) NOT NULL,
  `start` time NOT NULL,
  `finish` time NOT NULL,
  `firstday` datetime NOT NULL,
  `position` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `accname`, `fullname`, `avt`, `sdt`, `email`, `password`, `start`, `finish`, `firstday`, `position`) VALUES
(1, 'phamthang', 'Phạm Quyết Thắng', 'library/img/vic1.jpg', '0388811206', 'quyetthang.phucchi@gmail.com', 17021033, '07:00:00', '12:00:00', '2019-12-06 07:00:00', 2),
(2, 'suphit', 'Suphit Phomachan', 'library/img/suphit1.jpg', '+84*********', '***@gmail.com', 123456, '12:00:00', '18:00:00', '2019-12-06 12:00:00', 2),
(3, 'ducphuc', 'Chu Đức Phúc', 'library/img/phuc1.jpg', '+84*********', '***@gmail.com', 456789, '18:00:00', '23:30:00', '2019-12-06 18:00:00', 2),
(4, 'anhson', 'Đặng Anh Sơn', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 987654, '07:00:00', '12:00:00', '2019-12-06 07:00:00', 1),
(5, 'vumay', 'Vũ Thị Mây', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 123456, '12:00:00', '18:00:00', '2019-12-06 12:00:00', 1),
(6, 'thuhoai', 'Phạm Thu Hoài', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 741852, '18:00:00', '23:30:00', '2019-12-06 18:30:00', 1),
(7, 'quangthuong', 'Tạ Quang Thưởng', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 456789, '07:00:00', '12:00:00', '2019-12-06 07:00:00', 1),
(8, 'duchuynh', 'Nguyễn Đức Huynh', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 987654, '12:00:00', '18:00:00', '2019-12-06 12:00:00', 1),
(9, 'hoaithanh', 'Ngô Thị Hoài Thanh', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 2, '18:00:00', '23:30:00', '2019-12-06 18:00:00', 1),
(10, 'baove', 'Bảo Văn Vệ', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 467913, '07:00:00', '23:30:00', '2019-12-06 07:00:00', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL DEFAULT 'library/img/img0.jpg',
  `giaban` int(11) NOT NULL,
  `giamgia` int(11) NOT NULL DEFAULT 0,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `giaban`, `giamgia`, `mota`) VALUES
(1, 'Vở ghi Hồng hà', 'library/img/vohh1.jpg', 10000, 2000, 'Vở ghi loại 300 trang'),
(2, 'Vở ghi chú', 'library/img/book1.jpg', 15000, 2000, 'Vở ghi nhật ký, sổ tay, sổ ghi chép'),
(3, 'Chậu Nhựa Xanh', 'library/img/chauxanh1.jpg', 58000, 0, 'Chậu giặt, Chậu nhựa'),
(4, 'Giày bitis Hunter X', 'library/img/giay1.jpg', 998000, 0, 'Hunter X 2019, Đen cam, Sơn Tùng MTP'),
(5, 'Nước Mắm Nhỉ', 'library/img/mamnhi1.jpg', 120000, 20000, 'Nước mắm Phú Quốc, Nước mắm truyền thống, 15 độ đạm'),
(6, 'Bột giặt OMO', 'library/img/omo1.jpg', 210000, 80000, 'Túi to, tặng kèm chậu'),
(7, 'Bánh Oreo', 'library/img/oreo1.jpg', 23000, 0, 'Bánh quy, oreo, xoay bánh liếm kem chấm sữa'),
(8, 'Quạt Cây', 'library/img/pan1.jpg', 250000, 40000, 'Quạt cây, cánh 5 lá'),
(9, 'Thịt heo 1kg', 'library/img/thitheo1.jpg', 150000, 0, 'Thịt heo nhập khẩu, thịt heo đông lạnh'),
(10, 'Xúc Xích', 'library/img/xucxich1.jpg', 50000, 0, 'Xúc xích chiên, Xúc xích Đức');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trahang`
--

CREATE TABLE `trahang` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `lydo` text NOT NULL,
  `id_ban` int(11) NOT NULL,
  `id_nv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banhang`
--
ALTER TABLE `banhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nv` (`id_nv`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `doanhthu`
--
ALTER TABLE `doanhthu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD KEY `id_nv` (`id_nv`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position` (`position`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trahang`
--
ALTER TABLE `trahang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ban` (`id_ban`),
  ADD KEY `id_nv` (`id_nv`),
  ADD KEY `id_sp` (`id_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banhang`
--
ALTER TABLE `banhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `doanhthu`
--
ALTER TABLE `doanhthu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `trahang`
--
ALTER TABLE `trahang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banhang`
--
ALTER TABLE `banhang`
  ADD CONSTRAINT `banhang_ibfk_1` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`),
  ADD CONSTRAINT `banhang_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`);

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`position`) REFERENCES `chucvu` (`id`);

--
-- Các ràng buộc cho bảng `trahang`
--
ALTER TABLE `trahang`
  ADD CONSTRAINT `trahang_ibfk_1` FOREIGN KEY (`id_ban`) REFERENCES `banhang` (`id`),
  ADD CONSTRAINT `trahang_ibfk_2` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`),
  ADD CONSTRAINT `trahang_ibfk_3` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
