-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 12, 2023 lúc 09:15 PM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int(10) NOT NULL,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_info` int(11) NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_account`, `user`, `pass`, `id_info`, `action`, `role`) VALUES
(2, 'admin', '123', 2, 'hoạt động', 0),
(3, 'user_fpt', '123', 3, 'hoạt động', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `action`
--

CREATE TABLE `action` (
  `id_action` int(10) NOT NULL,
  `action` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `action`
--

INSERT INTO `action` (`id_action`, `action`) VALUES
(1, 'Đang chiếu'),
(2, 'Sắp chiếu'),
(3, 'Đã chiếu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(10) NOT NULL,
  `id_info` int(11) NOT NULL,
  `id_ticket` int(10) NOT NULL,
  `id_combo` int(10) NOT NULL,
  `name_combo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name_movie` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` datetime NOT NULL,
  `total_price` float NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(10) NOT NULL,
  `name_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Khoa học viễn tưởng'),
(2, 'Hài'),
(3, 'Lãng mạn'),
(4, 'Drama'),
(5, 'Hành động'),
(6, 'Kinh dị'),
(7, 'Kỳ ảo'),
(8, 'Cổ trang'),
(9, 'Hoạt hình'),
(10, 'Phưu Lưu'),
(11, 'Chiến tranh'),
(12, 'Thể thao');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cinema`
--

CREATE TABLE `cinema` (
  `id_cinema` int(11) NOT NULL,
  `name_cinema` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cinema`
--

INSERT INTO `cinema` (`id_cinema`, `name_cinema`) VALUES
(1, 'Lotte'),
(2, 'Galaxy'),
(3, 'Aeon'),
(4, 'Vincom Center');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combo`
--

CREATE TABLE `combo` (
  `id_combo` int(10) NOT NULL,
  `name_combo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price_combo` float NOT NULL,
  `describe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `combo`
--

INSERT INTO `combo` (`id_combo`, `name_combo`, `price_combo`, `describe`, `id_product`) VALUES
(1, 'Combo bắp nước', 127000, 'Ưu đãi hấp dẫn tại CGV - Combo bắp nước khi mua Combo Coca, bao gồm 1 bắp lớn, 2 nước siêu lớn  và 1 snack, với giá chỉ từ 127,000 VNĐ ( miễn phí đổi vị bắp caramel, phụ thu thêm tiền với vị bắp phô mai).', 8),
(2, 'Combo bắp nước thường', 113000, 'Trong danh sách ưu đãi thú vị tại CGV, Combo bắp nước thường luôn là lựa chọn hấp dẫn cho những ai đam mê điện ảnh. Combo 2 nước một bắp CGV (2 nước siêu lớn +1 bắp lớn) với giá thường là 113,000 VNĐ (cập nhật giá ngày 8/9/2023). Tuy nhiên, với thẻ thành ', 7),
(3, 'Combo Hotdog cùng nước ', 65000, '1 Hotdog + 1 nước lớn chỉ 65.000đ', 1),
(4, 'Combo Xúc Xích cùng nước', 55000, '1 Xúc xích + 1 nước lớn chỉ 55.000đ', 2),
(5, '1 Xúc xích', 32000, 'giòn tan trong miẹng', 3),
(6, '1 Hotdog', 42000, 'nóng hổi thơm ngon', 4),
(7, 'Nước lớn', 25000, 'Uống thả ga nào', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `country`
--

CREATE TABLE `country` (
  `id_country` int(11) NOT NULL,
  `name_country` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `country`
--

INSERT INTO `country` (`id_country`, `name_country`) VALUES
(1, 'English'),
(2, 'Việt Nam'),
(3, 'China'),
(4, 'France'),
(5, 'Germany'),
(6, 'India'),
(7, 'Japan'),
(8, 'Korea'),
(9, 'Taiwan'),
(10, 'Singapore'),
(11, 'Thailand'),
(12, 'Laos'),
(13, 'America');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information`
--

CREATE TABLE `information` (
  `id_info` int(11) NOT NULL,
  `nane_clinet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `information`
--

INSERT INTO `information` (`id_info`, `nane_clinet`, `phone_number`, `email`, `address`) VALUES
(2, 'TRẦN MINH ANH', '0979620125', 'minhanh24hihi@gmail.com', 'NB'),
(3, 'TRẦN MINH ANH', '113', 'anhtmph41558@fpt.edu.vn', 'NB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie`
--

CREATE TABLE `movie` (
  `id_movie` int(10) NOT NULL,
  `name_movie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_country` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `reviews` float NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `performer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `age_limit` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trailer_movie` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_category` int(10) NOT NULL,
  `action` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movie`
--

INSERT INTO `movie` (`id_movie`, `name_movie`, `content`, `id_country`, `year`, `time`, `reviews`, `author`, `performer`, `age_limit`, `image`, `trailer_movie`, `id_category`, `action`) VALUES
(4, 'The ', 'Batman: Vạch trần sự thật đưa khán giả theo chân nhân vật người Dơi Batman (Robert Pattinson) trong cuộc chiến mới.\r\n\r\nLần này, trong thành phố xuất hiện một tên giết người hàng loạt có biệt danh là Riddler (Paul Dano). Hắn chuyên nhắm vào các thành viên ', 13, 2022, '120 phút', 7.9, 'Matt Reeves', 'Robert Pattinson, Zoë Kravitz, Paul Dano, Jeffrey Wright, John Turturro…', 0, '', '', 5, '0'),
(5, 'Bỗng dưng trúng số', 'Bỗng dưng trúng số xoay quanh cuộc gặp gỡ hài hước giữa những người lính Nam và Bắc Triều Tiên khi tranh chấp một tờ vé số độc đắc.\r\n\r\nCâu chuyện bắt đầu khi anh lính Hàn Quốc Park Chun Woo (Go Kyung Pyo đóng) may mắn có được tờ vé số trúng giải độc đắc. ', 8, 2022, '113 phút', 7.1, 'Park Gyu Tae', 'Go Kyung Pyo, Lee Yi Kyung, Eum Moon Suk, Park Se Wan, Kwak Dong Yeon…', 0, '', '', 2, '0'),
(6, 'Dune', 'Hành tinh cát lấy bối cảnh ở tương lai xa và nói về cuộc chiến tranh giành hành tinh Arrakis. Đây là một hành tinh sa mạc khắc nghiệt, nhưng lại là nơi cung cấp một loại tài nguyên quý giá với khả năng duy trì tuổi thọ, nâng cao ý thức và có khả năng du h', 13, 2021, '156 phút', 8, 'Denis Villeneuve', ' Timothée Chalamet, Rebecca Ferguson, Oscar Isaac, Josh Brolin…', 0, '', '', 1, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price`
--

CREATE TABLE `price` (
  `id_type` int(10) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `price`
--

INSERT INTO `price` (`id_type`, `type`, `price`) VALUES
(1, 'Vé Người Lớn', 150000),
(2, 'Vé trẻ em', 50000),
(3, 'Vé người cao tuổi', 20000),
(4, 'Vé sinh viên', 100000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price_product` float NOT NULL,
  `describe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price_product`, `describe`) VALUES
(1, '1 Hotdog + 1 nước lớn', 0, 0),
(2, '1 Xúc xích + 1 nước lớn', 0, 0),
(3, '1 Hotdog', 0, 0),
(4, '1 Xúc xích', 0, 0),
(5, '1 nước lớn', 0, 0),
(6, '1 bắp lớn, 2 nước siêu lớn  và 1 snack', 0, 0),
(7, '2 nước siêu lớn +1 bắp lớn', 0, 0),
(8, '1 bắp lớn + 1 nước siêu lớn', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id_room` int(10) NOT NULL,
  `id_cinema` int(10) NOT NULL,
  `name_room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `action` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id_room`, `id_cinema`, `name_room`, `action`) VALUES
(9, 3, 'A-P1', 'hoạt động'),
(10, 3, 'A-P2', 'hoạt động'),
(11, 2, 'G-P1', 'hoạt động'),
(12, 2, 'G-P2', 'hoạt động'),
(13, 4, 'V-P1', 'hoạt động'),
(14, 4, 'V-P2', 'hoạt động'),
(15, 1, 'L-P1', 'hoạt động'),
(16, 1, 'L-P2', 'hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seat`
--

CREATE TABLE `seat` (
  `id_seat` int(10) NOT NULL,
  `id_room` int(10) NOT NULL,
  `row` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `column` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showtime`
--

CREATE TABLE `showtime` (
  `id_showtime` int(10) NOT NULL,
  `id_room` int(10) NOT NULL,
  `id_movie` int(10) NOT NULL,
  `show_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `id_action` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `showtime`
--

INSERT INTO `showtime` (`id_showtime`, `id_room`, `id_movie`, `show_date`, `start_time`, `end_time`, `id_action`) VALUES
(1, 9, 5, '2023-11-14', '21:50:26', '23:50:26', 2),
(2, 10, 6, '2023-11-15', '17:50:26', '18:50:26', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(10) NOT NULL,
  `id_showtime` int(10) NOT NULL,
  `id_seat` int(10) NOT NULL,
  `id_type` int(10) NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `id_showtime`, `id_seat`, `id_type`, `action`) VALUES
(1, 2, 0, 3, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`),
  ADD KEY `account_ibfk_1` (`id_info`);

--
-- Chỉ mục cho bảng `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id_action`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `bill_ibfk_2` (`id_combo`),
  ADD KEY `bill_ibfk_3` (`id_ticket`),
  ADD KEY `bill_ibfk_1` (`id_info`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`id_cinema`);

--
-- Chỉ mục cho bảng `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id_combo`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id_country`);

--
-- Chỉ mục cho bảng `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id_info`);

--
-- Chỉ mục cho bảng `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `movie_ibfk_2` (`id_country`);

--
-- Chỉ mục cho bảng `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id_type`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`),
  ADD KEY `id_cinema` (`id_cinema`);

--
-- Chỉ mục cho bảng `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id_seat`),
  ADD KEY `id_room` (`id_room`);

--
-- Chỉ mục cho bảng `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`id_showtime`),
  ADD KEY `id_cinema` (`id_room`),
  ADD KEY `showtime_ibfk_2` (`id_movie`),
  ADD KEY `showtime_ibfk_3` (`id_action`);

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_showtime` (`id_showtime`),
  ADD KEY `ticket_ibfk_2` (`id_type`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `action`
--
ALTER TABLE `action`
  MODIFY `id_action` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id_cinema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `combo`
--
ALTER TABLE `combo`
  MODIFY `id_combo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `country`
--
ALTER TABLE `country`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `information`
--
ALTER TABLE `information`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `price`
--
ALTER TABLE `price`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `seat`
--
ALTER TABLE `seat`
  MODIFY `id_seat` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `showtime`
--
ALTER TABLE `showtime`
  MODIFY `id_showtime` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`id_info`) REFERENCES `information` (`id_info`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_info`) REFERENCES `information` (`id_info`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`id_combo`) REFERENCES `combo` (`id_combo`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `combo`
--
ALTER TABLE `combo`
  ADD CONSTRAINT `combo_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE,
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`id_country`) REFERENCES `country` (`id_country`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`id_cinema`) REFERENCES `cinema` (`id_cinema`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `showtime_ibfk_2` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `showtime_ibfk_3` FOREIGN KEY (`id_action`) REFERENCES `action` (`id_action`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_showtime`) REFERENCES `showtime` (`id_showtime`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `price` (`id_type`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
