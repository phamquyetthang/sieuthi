-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2019 lúc 02:59 AM
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

--
-- Đang đổ dữ liệu cho bảng `banhang`
--

INSERT INTO `banhang` (`id`, `id_sp`, `time`, `money`, `id_nv`, `soluong`) VALUES
(2, 3, '2019-12-08 08:26:08', 58000, 10, 1),
(3, 10, '2019-12-08 08:29:56', 0, 10, 0),
(8, 5, '2019-12-08 08:35:16', 200000, 10, 2),
(9, 2, '2019-12-09 05:38:08', 10000, 10, 2),
(10, 7, '2019-12-08 08:37:52', 46000, 10, 2),
(13, 6, '2019-12-10 01:29:27', 500000, 10, 1),
(14, 6, '2019-12-08 08:55:48', 630000, 10, 3),
(15, 6, '2019-12-08 08:56:47', 630000, 10, 3),
(16, 4, '2019-12-08 08:57:45', 1996000, 10, 2),
(17, 7, '2019-12-08 09:08:01', 444442, 10, 2),
(18, 3, '2019-12-08 09:08:51', 212321, 10, 12),
(19, 3, '2019-12-08 09:16:54', 116000, 10, 2),
(20, 2, '2019-12-08 09:17:39', 156000, 10, 12),
(21, 5, '2019-12-08 09:18:18', 200000, 10, 2),
(22, 4, '2019-12-10 01:34:43', 1996000, 10, 1),
(23, 5, '2019-12-09 08:41:17', 100000, 10, 1),
(24, 3, '2019-12-08 10:29:39', 116000, 10, 2),
(25, 5, '2019-12-08 10:31:14', 300000, 10, 3),
(26, 1, '2019-12-08 10:49:17', 176000, 10, 22),
(27, 3, '2019-12-09 03:48:44', 58000, 4, 1),
(29, 4, '2019-12-09 04:50:52', 1996000, 10, 2),
(30, 9, '2019-12-09 05:40:15', 150000, 4, 1),
(32, 2, '2019-12-09 07:39:18', 117000, 5, 9),
(33, 10, '2019-12-09 07:54:34', 100000, 5, 2),
(34, 2, '2019-12-09 08:40:43', 247000, 5, 19),
(35, 9, '2019-12-09 12:50:05', 8400000, 10, 56),
(36, 9, '2019-12-09 12:50:14', 8400000, 10, 56),
(37, 9, '2019-12-09 12:50:17', 8400000, 10, 56),
(38, 8, '2019-12-10 01:00:12', 2520000, 4, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chat`
--

INSERT INTO `chat` (`id`, `id_emp`, `message`, `timestamp`) VALUES
(1, 10, 'l&ocirc;', '2019-12-07 13:44:20'),
(2, 10, 'hi', '2019-12-07 13:45:51'),
(3, 10, 'em ơi nếu c&ograve;n hiểu nhau', '2019-12-07 13:46:18'),
(4, 10, 'l&ocirc;', '2019-12-07 13:48:50'),
(5, 10, 'Ng&agrave;y 7/12 tại s&acirc;n bay quốc tế Nội B&agrave;i, Tổng c&ocirc;ng ty Quản l&yacute; bay Việt Nam (VATM) tổ chức lễ đ&oacute;n chuyến bay thứ 900.000 trong năm 2019. Ng&agrave;nh h&agrave;ng kh&ocirc;ng Việt Nam dự kiến kết th&uacute;c năm nay với gần 1 triệu chuyến bay được quản l&yacute;, điều h&agrave;nh.', '2019-12-07 13:50:00'),
(6, 10, 'l&ocirc;', '2019-12-07 14:18:35'),
(7, 10, 'hello', '2019-12-08 09:30:40'),
(8, 1, 'l&agrave;m việc đ&ecirc;', '2019-12-08 09:34:57'),
(9, 4, 'l&ocirc;', '2019-12-09 03:46:12'),
(10, 5, 'hello', '2019-12-09 06:39:24'),
(11, 10, 'mic check, mic check', '2019-12-09 08:07:17'),
(12, 5, 'l&ocirc; cc', '2019-12-09 08:39:46');

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
  `img` text DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `id_nv`, `title`, `content`, `img`, `time`) VALUES
(1, 4, 'hello', '0', 'library/img/mamnhi1.jpg', '2019-12-07 01:55:12'),
(3, 4, 'hello 2', '0', NULL, '2019-12-07 01:55:12'),
(4, 4, 'hello 3', '0', NULL, '2019-12-07 01:55:12'),
(5, 4, 'hello 4', '0', 'library/img/oreo1.jpg', '2019-12-07 01:55:12'),
(6, 4, 'hello 5', '0', NULL, '2019-12-07 01:55:12'),
(7, 4, 'hello 7', '0', NULL, '2019-12-07 01:55:12'),
(8, 4, 'hello world', '0', NULL, '2019-12-07 01:55:12'),
(9, 4, 'hello', '0', NULL, '2019-12-07 01:55:12'),
(10, 4, 'hello 8', 'Check check check', NULL, '2019-12-07 01:55:12'),
(11, 10, 'check check', 'lololololo', 'library/img/1_zing.jpg', '2019-12-08 01:44:53'),
(12, 10, 'Gần 100 xe VinFast tham gia hành trình \'Chinh phục địa đầu Tổ quốc\'', 'Gần 100 xe gồm cả 3 dòng VinFast Lux A 2.0, VinFast Lux SA 2.0 và xe đô thị Fadil có mặt tại quảng trường Vinhomes Ocean Park để cùng tham gia hành trình “Chinh phục địa đầu Tổ quốc”.t', 'library/img/1_zing.jpg', '2019-12-08 02:04:42'),
(13, 10, 'Gà Mỹ nhập 19.800 đồng/kg, giá tăng bao nhiêu sau khi cộng thuế phí?', 'Theo thông tin từ Tổng cục Hải quan, 9 tháng đầu năm, nhập khẩu thịt gà các loại đạt 215.700 tấn, trị giá 186 triệu USD. Mỹ là nước xuất khẩu thịt gà sang Việt Nam nhiều nhất với tỷ trọng 61,8%, tiếp theo là Brazil (13,1%) và Hàn Quốc (12,3%).', 'library/img/156886616110chot15688141125771406187604_1.jpg', '2019-12-08 02:07:09'),
(15, 10, 'test nhập v&agrave;o code html', '&lt;form action=&quot;model/postnews.php&quot; method=&quot;post&quot;&gt;\r\n            &lt;input type=&quot;text&quot; name=&quot;titlenews&quot; id=&quot;tieuden&quot; placeholder=&quot;Ti&ecirc;u đề&quot; required=&quot;required&quot;&gt;\r\n            &lt;textarea name=&quot;contentnews&quot; id=&quot;noidungn&quot; cols=&quot;30&quot; rows=&quot;10&quot; placeholder=&quot;Nội dung&quot; required=&quot;required&quot;&gt;&lt;/textarea&gt;\r\n            &lt;span&gt;Ảnh minh họa:&lt;/span&gt;\r\n            &lt;input type=&quot;file&quot; name=&quot;imgnews&quot; id=&quot;anhn&quot;&gt;\r\n            &lt;input type=&quot;submit&quot; value=&quot;Đăng&quot; name=&quot;postnews&quot; id=&quot;postn&quot;&gt;\r\n        &lt;/form&gt;', NULL, '2019-12-08 02:09:54'),
(16, 10, 'G&agrave; Mỹ nhập 19.800 đồng/kg, gi&aacute; tăng bao nhi&ecirc;u sau khi cộng thuế ph&iacute;?', 'Theo th&ocirc;ng tin từ Tổng cục Hải quan, 9 th&aacute;ng đầu năm, nhập khẩu thịt g&agrave; c&aacute;c loại đạt 215.700 tấn, trị gi&aacute; 186 triệu USD. Mỹ l&agrave; nước xuất khẩu thịt g&agrave; sang Việt Nam nhiều nhất với tỷ trọng 61,8%, tiếp theo l&agrave; Brazil (13,1%) v&agrave; H&agrave;n Quốc (12,3%).\r\n\r\nGi&aacute; nhập khẩu b&igrave;nh qu&acirc;n mặt h&agrave;ng n&agrave;y l&agrave; 861 USD/tấn, tương đương khoảng 19.800 đồng/kg. Mức gi&aacute; n&agrave;y chưa bao gồm thuế nhập khẩu, thuế gi&aacute; trị gia tăng, vận chuyển, bảo quản kho lạnh...', 'library/img/156886616110chot15688141125771406187604_1.jpg', '2019-12-08 02:11:05'),
(17, 10, 'test xuống d&ograve;ng', '&lt;form action=&quot;model/postnews.php&quot; method=&quot;post&quot;&gt;<br />\r\n            &lt;input type=&quot;text&quot; name=&quot;titlenews&quot; id=&quot;tieuden&quot; placeholder=&quot;Ti&ecirc;u đề&quot; required=&quot;required&quot;&gt;<br />\r\n            &lt;textarea name=&quot;contentnews&quot; id=&quot;noidungn&quot; cols=&quot;30&quot; rows=&quot;10&quot; placeholder=&quot;Nội dung&quot; required=&quot;required&quot;&gt;&lt;/textarea&gt;<br />\r\n            &lt;span&gt;Ảnh minh họa:&lt;/span&gt;<br />\r\n            &lt;input type=&quot;file&quot; name=&quot;imgnews&quot; id=&quot;anhn&quot;&gt;<br />\r\n            &lt;input type=&quot;submit&quot; value=&quot;Đăng&quot; name=&quot;postnews&quot; id=&quot;postn&quot;&gt;<br />\r\n        &lt;/form&gt;', NULL, '2019-12-08 02:13:03'),
(18, 1, '\'Thi&ecirc;n h&agrave; lồng trong thi&ecirc;n h&agrave;\' n&agrave;y l&agrave; b&iacute; ẩn chưa c&oacute; lời giải', 'Được ph&aacute;t hiện đ&atilde; gần 70 năm, nhưng c&aacute;c nh&agrave; khoa học vẫn chưa thể giải th&iacute;ch h&igrave;nh tr&ograve;n ho&agrave;n hảo của thi&ecirc;n h&agrave; Hoag.<br />\r\nKhi nh&igrave;n thật kỹ ch&ograve;m sao Cự x&agrave;, bạn c&oacute; thể nh&igrave;n thấy một v&ograve;ng tr&ograve;n gần như ho&agrave;n hảo tr&ecirc;n trời. Đ&oacute; ch&iacute;nh l&agrave; thi&ecirc;n h&agrave; b&iacute; ẩn m&agrave; c&aacute;c nh&agrave; khoa học vẫn chưa giải th&iacute;ch được, c&oacute; t&ecirc;n vật thể Hoag.<br />\r\n<br />\r\nĐược đặt theo t&ecirc;n của nh&agrave; thi&ecirc;n văn học Arthur Hoag, người đ&atilde; ph&aacute;t hiện thi&ecirc;n h&agrave; n&agrave;y v&agrave;o năm 1950, h&igrave;nh tr&ograve;n ho&agrave;n hảo của Hoag vẫn chưa c&oacute; lời giải th&iacute;ch.', 'library/img/C:xampphtdocssieuthilibraryimghoag_1.jpg', '2019-12-08 03:00:16'),
(19, 1, 'test final', 'open news adscript.js:46:12<br />\r\nopen news adscript.js:46:12<br />\r\nopen news 2 adscript.js:46:12<br />\r\nopen news adscript.js:46:12<br />\r\nopen any tab', 'library/img/pan1.jpg', '2019-12-08 03:15:15'),
(20, 5, 'Thủ tướng dự Hội nghị Qu&acirc;n ch&iacute;nh to&agrave;n qu&acirc;n', 'S&aacute;ng 9/12, Thủ tướng Nguyễn Xu&acirc;n Ph&uacute;c dự v&agrave; ph&aacute;t biểu tại Hội nghị Qu&acirc;n ch&iacute;nh to&agrave;n qu&acirc;n năm 2019. Hội nghị tổng kết c&ocirc;ng t&aacute;c qu&acirc;n sự, quốc ph&ograve;ng 2019, triển khai nhiệm vụ 2020.<br />\r\n<br />\r\nĐại tướng Ng&ocirc; Xu&acirc;n Lịch, Ủy vi&ecirc;n Bộ Ch&iacute;nh trị, Ph&oacute; b&iacute; thư Qu&acirc;n ủy Trung ương, Bộ trưởng Quốc ph&ograve;ng chủ tr&igrave; hội nghị.', 'library/img/NQH06492.jpg', '2019-12-09 08:03:54'),
(21, 5, 'tẻthfvbkjlml', 'awzesxdcfgv hbjnkm kjiyuftcydr', NULL, '2019-12-09 09:41:58'),
(22, 4, 'ALO', 'Test test test', NULL, '2019-12-10 01:01:14'),
(23, 1, 'check , 10/12/2019', 'C&aacute;c thứ c&aacute;c thứ', NULL, '2019-12-10 01:23:04');

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
  `position` int(11) NOT NULL DEFAULT 1,
  `salary` int(11) NOT NULL DEFAULT 100000
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `accname`, `fullname`, `avt`, `sdt`, `email`, `password`, `start`, `finish`, `firstday`, `position`, `salary`) VALUES
(1, 'phamthang', 'Phạm Quyết Thắng', 'library/img/vic1.jpg', '0388811206', 'quyetthang.phucchi@gmail.com', 17021033, '07:00:00', '12:00:00', '2019-12-06 07:00:00', 2, 100000),
(2, 'suphit', 'Suphit Phomachan', 'library/img/suphit1.jpg', '+84*********', '***@gmail.com', 123456, '12:00:00', '18:00:00', '2019-12-06 12:00:00', 2, 100000),
(3, 'ducphuc', 'Chu Đức Phúc', 'library/img/phuc1.jpg', '+84*********', '***@gmail.com', 456789, '18:00:00', '23:30:00', '2019-12-06 18:00:00', 2, 100000),
(4, 'anhson', 'Đặng Anh Sơn', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 987654, '07:00:00', '12:00:00', '2019-12-06 07:00:00', 1, 100000),
(5, 'vumay', 'Vũ Thị Mây', 'library/img/may1.jpg', '+84*********', '***@gmail.com', 123456, '12:00:00', '18:00:00', '2019-12-06 12:00:00', 1, 100000),
(6, 'thuhoai', 'Phạm Thu Hoài', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 741852, '18:00:00', '23:30:00', '2019-12-06 18:30:00', 1, 100000),
(7, 'quangthuong', 'Tạ Quang Thưởng', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 456789, '07:00:00', '12:00:00', '2019-12-06 07:00:00', 1, 100000),
(8, 'duchuynh', 'Nguyễn Đức Huynh', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 987654, '12:00:00', '18:00:00', '2019-12-06 12:00:00', 1, 100000),
(9, 'hoaithanh', 'Ngô Thị Hoài Thanh', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 258963, '18:00:00', '23:30:00', '2019-12-06 18:00:00', 1, 100000),
(10, 'baove', 'Bảo Văn Vệ', 'library/img/avt0.jpg', '+84*********', '***@gmail.com', 467913, '07:00:00', '23:30:00', '2019-12-06 07:00:00', 1, 100000);

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
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lydo` text DEFAULT NULL,
  `id_ban` int(11) NOT NULL,
  `id_nv` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trahang`
--

INSERT INTO `trahang` (`id`, `id_sp`, `time`, `lydo`, `id_ban`, `id_nv`, `soluong`) VALUES
(2, 6, '2019-12-09 07:33:43', '', 1, 5, 2),
(3, 9, '2019-12-09 07:33:49', 'thích', 30, 5, 2),
(4, 10, '2019-12-09 07:56:52', 'chưa nghĩ ra', 4, 5, 0),
(5, 5, '2019-12-09 08:41:17', '', 23, 5, 0),
(6, 2, '2019-12-10 01:00:38', '', 12, 4, 0),
(7, 6, '2019-12-10 01:29:27', 'không', 13, 4, 0),
(8, 4, '2019-12-10 01:34:44', 'test', 22, 4, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banhang`
--
ALTER TABLE `banhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_nv` (`id_nv`);

--
-- Chỉ mục cho bảng `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
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
  ADD KEY `id_nv` (`id_nv`),
  ADD KEY `id_sp` (`id_sp`),
  ADD KEY `id_ban` (`id_ban`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banhang`
--
ALTER TABLE `banhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `banhang`
--
ALTER TABLE `banhang`
  ADD CONSTRAINT `banhang_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `banhang_ibfk_2` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`);

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
  ADD CONSTRAINT `trahang_ibfk_2` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`),
  ADD CONSTRAINT `trahang_ibfk_3` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
