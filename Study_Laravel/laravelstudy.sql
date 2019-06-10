-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2019 lúc 06:12 AM
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
-- Cơ sở dữ liệu: `laravelstudy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `lastModified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `description`, `lastModified`) VALUES
(3, 'Tòa Cấp cao xét kháng cáo của hai cựu thứ trưởng công an', 'https://i-vnexpress.vnecdn.net/2019/06/10/buivanthanh51851550147163-1560-8051-2373-1560120069_500x300.jpg', 'Hai cựu thứ trưởng Công an Bùi Văn Thành, Trần Việt Tân cùng đề nghị cấp phúc thẩm xem xét lại tội danh, mức hình phạt.', '2019-06-10 00:00:00'),
(4, 'Quốc hội sẽ giám sát việc phòng, chống xâm hại trẻ em', 'https://i-vnexpress.vnecdn.net/2019/06/10/201711201549320779NDN7180HaBnh-6228-9794-1560133855_140x84.jpg', 'Trước tình trạng xâm hại trẻ em đang là vấn đề nóng của xã hội, Quốc hội sẽ lập đoàn giám sát về nội dung này.', '2019-06-10 00:00:00'),
(5, 'Biểu tình phản đối dẫn độ sang Trung Quốc biến thành bạo lực ở Hong Kong', 'https://i-vnexpress.vnecdn.net/2019/06/10/hongkong1-1560124404-4897-1560124744_140x84.jpg', 'Cảnh sát dùng dùi cui và hơi cay giải tán đám đông sau khi một nhóm người biểu tình mang khẩu trang cố xông vào cơ quan lập pháp.', '2019-06-10 00:00:00'),
(6, 'Ôtô CSGT Bình Dương tông chết người trên vỉa hè', 'https://i-vnexpress.vnecdn.net/2019/06/09/xeCSGT1-1560099574-5485-1560099593_140x84.jpg', 'Chiếc xe 7 chỗ mang biển xanh do người đàn ông mặc thường phục lái đã lao lên vỉa hè, tông chết nam thanh niên bán trái cây.', '2019-06-10 00:00:00'),
(7, 'Bồ Đào Nha vô địch Nations League ', 'https://i-thethao.vnecdn.net/2019/06/10/rona-1560122656-6435-1560122668_140x84.jpg', '\r\nRonaldo và đồng đội hạ Hà Lan 1-0 trong trận chung kết trên sân nhà tối 9/6.', '2019-06-10 00:00:00'),
(8, 'Nadal lần thứ 12 vô địch Roland Garros', 'https://i-thethao.vnecdn.net/2019/06/09/145693087121511imagea511560097-2049-1998-1560099551_140x84.jpg', 'Hạt giống số hai thắng Thiem sau 4 set, với tỷ số lần lượt là 6-3, 5-7, 6-1, 6-1 ở chung kết tối 9/6.', '2019-06-10 00:00:00'),
(9, 'Robot cảnh sát xử phạt người vi phạm giao thông  ', 'https://i-vnexpress.vnecdn.net/2019/06/09/robocop-1560056504-9248-1560056970_140x84.jpg', 'Robot trang bị camera, loa giúp CSGT xử phạt người vi phạm ngay tại ghế lái, không cần ra khỏi xe.', '2019-06-10 00:00:00'),
(10, 'Bất động sản Đà Nẵng lộ dấu hiệu giảm tốc', 'https://i-kinhdoanh.vnecdn.net/2019/06/09/da-nang-3736-1560078355_140x84.png', 'Sau cơn sốt đầu năm, giá một số phân khúc bất động sản bắt đầu sụt giảm trên thị trường địa ốc thứ cấp tại Đà Nẵng.', '2019-06-10 00:00:00'),
(11, '\'Dark Phoenix\' - hồi kết gây thất vọng của các X-Men  ', 'https://i-giaitri.vnecdn.net/2019/06/09/settopvnexpressreviewdarkphoen-7556-8039-1560099516_140x84.jpg', 'Tác phẩm do Simon Kinberg đạo diễn có kịch bản rời rạc, phát triển nhân vật không rõ ràng.', '2019-06-10 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
