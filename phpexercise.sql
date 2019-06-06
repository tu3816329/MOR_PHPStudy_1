-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 06, 2019 lúc 11:55 AM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpexercise`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exc2_image`
--

CREATE TABLE `exc2_image` (
  `username` varchar(100) NOT NULL,
  `imageUrl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `exc2_image`
--

INSERT INTO `exc2_image` (`username`, `imageUrl`) VALUES
('tu3816329', 'tu3816329.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exc2_user`
--

CREATE TABLE `exc2_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `birthday` date NOT NULL,
  `registerDay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `exc2_user`
--

INSERT INTO `exc2_user` (`id`, `name`, `birthday`, `registerDay`) VALUES
(12, 'Do Thien Tu', '1996-02-23', '2019-06-05 12:55:03'),
(13, 'Bui Thanh Thien', '1996-12-12', '2019-06-05 12:56:27'),
(16, 'Truong Hai Nguyen', '1995-02-14', '2019-06-05 12:59:20'),
(17, 'Luong Nguyen Bao Tran', '1971-04-11', '2019-06-05 13:31:34'),
(18, 'Do Thien An', '2011-02-09', '2019-06-05 13:32:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `exc3_user`
--

CREATE TABLE `exc3_user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `avatarUrl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `exc3_user`
--

INSERT INTO `exc3_user` (`username`, `password`, `fullname`, `email`, `birthday`, `avatarUrl`) VALUES
('nguyenth', '$2y$10$Ca4kpQuFGqCSOnx76ZSrwOugvB.cqfDub5E.qQWvF4ykk.TukwDKC', 'Truong Hai Nguyen', 'nguyen@gmail.com', '1995-02-14', 'nguyenth.jpg'),
('pug', '$2y$10$fp/sDjLOrXbAbco1PKZLJeviOKng6vj/Jnaq3uzsbM/Ha9pi1tvuC', 'PUG mat xe', 'pugNo1@gmail.com', '1996-02-23', NULL),
('thienbt', '$2y$10$4p.NMWTk6zGAHfdl6RMPr.Ds3yNYeIS20XXgX5hkVJ6Z9qWaY4Wj6', 'Bui Thanh Thien', 'buithanhthien@gmail.com', '1996-12-12', NULL),
('tu3816329', '$2y$10$e1VRBpf1E4/YUxwuP8T7..an.HxIavE1IGTROFRk5xueXl6Yg4JDW', 'Do Thien Tu', 'tu3816329@gmail.com', '1996-02-23', 'tu3816329.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `fullname`, `email`, `birthday`) VALUES
('tu3816329', '$2y$10$lp1uO4c7vuCtYnt7DUT2XuljKZ0ZFDeHq3Rdb/RNs9M1m/23Y82oy', 'Do Thien Tu', 'tu3816329@gmail.com', '1996-02-23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `exc2_image`
--
ALTER TABLE `exc2_image`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `exc2_user`
--
ALTER TABLE `exc2_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `exc3_user`
--
ALTER TABLE `exc3_user`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `exc2_user`
--
ALTER TABLE `exc2_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
