-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 09, 2023 lúc 12:13 PM
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
-- Cơ sở dữ liệu: `system_tickets`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `name_account` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password_account` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `book_ticket`
--

CREATE TABLE `book_ticket` (
  `id_booking` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `booking_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total_amount` float NOT NULL,
  `id_promotion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Lãng mạn'),
(2, 'Hành động'),
(3, 'Trinh thám'),
(4, 'Kinh dị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cinema`
--

CREATE TABLE `cinema` (
  `id_cinema` int(11) NOT NULL,
  `name_cinema` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `link_google` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cinema`
--

INSERT INTO `cinema` (`id_cinema`, `name_cinema`, `address`, `link_google`) VALUES
(1, 'Hà Đông', 'Hà Nội', 'gewrgwegwertywery'),
(2, 'lotte', 'HCM', 'ưefewrgwerytwey'),
(3, 'cinema Nam Kỳ', 'HCM', 'ghsrethreth'),
(4, 'GALAXY', 'HN', 'gsergerg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combo`
--

CREATE TABLE `combo` (
  `id_combo` int(11) NOT NULL,
  `name_combo` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `combo`
--

INSERT INTO `combo` (`id_combo`, `name_combo`, `description`, `price`) VALUES
(2, '2 bcs và 2 vé  1 bỏng', 'hời', 600000),
(3, 'Combo ve va nước', 'hời', 200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `combo_ticket`
--

CREATE TABLE `combo_ticket` (
  `id_combo_ticket` int(11) NOT NULL,
  `id_combo` int(11) NOT NULL,
  `id_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `combo_ticket`
--

INSERT INTO `combo_ticket` (`id_combo_ticket`, `id_combo`, `id_ticket`) VALUES
(1, 2, 3),
(2, 3, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie`
--

CREATE TABLE `movie` (
  `id_movie` int(11) NOT NULL,
  `name_movie` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `performer` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `year` int(11) NOT NULL,
  `vote_number` int(11) NOT NULL,
  `link_traller` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movie`
--

INSERT INTO `movie` (`id_movie`, `name_movie`, `image`, `time`, `author`, `performer`, `year`, `vote_number`, `link_traller`, `id_category`) VALUES
(1, 'conan', 'ưegfwgweg', '90 phút', 'Minh Anh', 'Minh Anh, Nam ,Thien', 2024, 999, 'conan', 3),
(2, '1 ngày của nghiện', 'ẻgergerg', '90', 'Lee Vu', 'mama , như hoa cô lương', 2023, 666, 'vfdsagersgerg', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotion`
--

CREATE TABLE `promotion` (
  `id_promotion` int(11) NOT NULL,
  `name_promotion` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `discount_percent` float NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `id_cinema` int(11) NOT NULL,
  `action` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `total_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id_room`, `id_cinema`, `action`, `total_seats`) VALUES
(1, 3, 'hoạt động', 100),
(2, 4, 'hoạt động', 90),
(3, 2, 'còn', 100),
(4, 1, 'hoạt động', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seats`
--

CREATE TABLE `seats` (
  `id_seats` int(11) NOT NULL,
  `seats_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `action` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showtime`
--

CREATE TABLE `showtime` (
  `id_movie` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `showtime`
--

INSERT INTO `showtime` (`id_movie`, `start_time`, `end_time`) VALUES
(1, '2023-11-08 22:16:01', '2023-11-08 22:16:01'),
(2, '2023-11-08 22:16:01', '2023-11-08 22:16:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `price` float NOT NULL,
  `ticket_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `id_movie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `price`, `ticket_type`, `id_movie`) VALUES
(3, 200000, 'Thành Viên', 2),
(4, 95000, 'Người lớn', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Chỉ mục cho bảng `book_ticket`
--
ALTER TABLE `book_ticket`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_account` (`id_account`),
  ADD KEY `book_ticket_ibfk_2` (`id_ticket`),
  ADD KEY `book_ticket_ibfk_3` (`id_promotion`);

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
  ADD PRIMARY KEY (`id_combo`);

--
-- Chỉ mục cho bảng `combo_ticket`
--
ALTER TABLE `combo_ticket`
  ADD PRIMARY KEY (`id_combo_ticket`),
  ADD KEY `id_combo` (`id_combo`),
  ADD KEY `id_ticket` (`id_ticket`);

--
-- Chỉ mục cho bảng `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`),
  ADD KEY `id_category` (`id_category`);

--
-- Chỉ mục cho bảng `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id_promotion`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`),
  ADD KEY `id_cinema` (`id_cinema`);

--
-- Chỉ mục cho bảng `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id_seats`),
  ADD KEY `id_ticket` (`id_ticket`),
  ADD KEY `id_room` (`id_room`);

--
-- Chỉ mục cho bảng `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`id_movie`);

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_movie` (`id_movie`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `book_ticket`
--
ALTER TABLE `book_ticket`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id_cinema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `combo`
--
ALTER TABLE `combo`
  MODIFY `id_combo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `combo_ticket`
--
ALTER TABLE `combo_ticket`
  MODIFY `id_combo_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id_promotion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `seats`
--
ALTER TABLE `seats`
  MODIFY `id_seats` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `showtime`
--
ALTER TABLE `showtime`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book_ticket`
--
ALTER TABLE `book_ticket`
  ADD CONSTRAINT `book_ticket_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`),
  ADD CONSTRAINT `book_ticket_ibfk_2` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`),
  ADD CONSTRAINT `book_ticket_ibfk_3` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id_promotion`);

--
-- Các ràng buộc cho bảng `combo_ticket`
--
ALTER TABLE `combo_ticket`
  ADD CONSTRAINT `combo_ticket_ibfk_1` FOREIGN KEY (`id_combo`) REFERENCES `combo` (`id_combo`),
  ADD CONSTRAINT `combo_ticket_ibfk_2` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`);

--
-- Các ràng buộc cho bảng `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);

--
-- Các ràng buộc cho bảng `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`id_cinema`) REFERENCES `cinema` (`id_cinema`);

--
-- Các ràng buộc cho bảng `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`),
  ADD CONSTRAINT `seats_ibfk_2` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`);

--
-- Các ràng buộc cho bảng `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`);

--
-- Các ràng buộc cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
