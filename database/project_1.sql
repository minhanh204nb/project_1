-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 04, 2023 lúc 08:28 PM
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
  `id_account` int(11) NOT NULL,
  `name_account` varchar(50) NOT NULL,
  `password_account` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `total_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cinema`
--

CREATE TABLE `cinema` (
  `id_cinema` int(11) NOT NULL,
  `name_cinema` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `link_google` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `movie`
--

CREATE TABLE `movie` (
  `id_movie` int(11) NOT NULL,
  `name_movie` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` varchar(10) NOT NULL,
  `author` varchar(20) NOT NULL,
  `performer` int(20) NOT NULL,
  `year` int(11) NOT NULL,
  `vote_number` int(11) NOT NULL,
  `link_traller` varchar(255) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `id_cinema` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `total_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seats`
--

CREATE TABLE `seats` (
  `id_seats` int(11) NOT NULL,
  `seats_type` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `id_room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showtime`
--

CREATE TABLE `showtime` (
  `id_movie` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `price` float NOT NULL,
  `ticket_type` varchar(20) NOT NULL,
  `id_movie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  ADD KEY `book_ticket_ibfk_2` (`id_ticket`);

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
-- Chỉ mục cho bảng `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`),
  ADD KEY `id_category` (`id_category`);

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
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id_cinema` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `seats`
--
ALTER TABLE `seats`
  MODIFY `id_seats` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `showtime`
--
ALTER TABLE `showtime`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `book_ticket`
--
ALTER TABLE `book_ticket`
  ADD CONSTRAINT `book_ticket_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`),
  ADD CONSTRAINT `book_ticket_ibfk_2` FOREIGN KEY (`id_ticket`) REFERENCES `ticket` (`id_ticket`);

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
