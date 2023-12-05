-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 01, 2023 lúc 09:00 PM
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
  `name_clinet` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_account`, `name_clinet`, `user`, `password`, `phone_number`, `email`, `address`, `action`, `role`) VALUES
(2, '23424', 'admin', '123', '0979620125', 'minhanh24hihi@gmail.com', 'NB', 'hoạt động', 1),
(39, 'Anh Trần', 'admin2', '123', '0979620125', 'minhanh24hihi@gmail.com', 'Hà Nội', 'Hoạt động', 1),
(42, '1111111', 'user', '123', '0986272685', 'account_test@gmail.com', 'HCM', 'HOẠT ĐỘNG', 0);

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
  `id_account` int(11) NOT NULL,
  `vnp_TxnRef` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price_tickets` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price_combo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_movie` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cinema` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `seats` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `show_day` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `showtime` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `total_price` float NOT NULL,
  `booking_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Đã thanh toán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_account`, `vnp_TxnRef`, `price_tickets`, `price_combo`, `name_movie`, `cinema`, `room`, `seats`, `show_day`, `showtime`, `total_price`, `booking_date`, `action`) VALUES
(1, 2, '1114', '30.000 VND', '85.000 VND', 'MOVIE 23', 'CGV', 'A-P1', 'A2,A3,', '3', '11:45:00', 115000, '2023-11-30 04:44:41', 'Đã thanh toán'),
(3, 42, '6105', '30.000 VND', '43.000 VND', 'MOVIE 23', 'CGV', 'L-P1', 'A4,B4,', '10/12', '10:00:00', 73000, '2023-12-02 03:24:34', 'Đã thanh toán');

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
(1, 'Hành Động'),
(2, 'Hoạt Hình'),
(3, 'Kinh Dị'),
(4, 'Gia đình'),
(5, 'Phim xã hội đen'),
(6, 'Chiến tranh'),
(7, 'Tragedy'),
(8, 'Historical'),
(9, 'Drama'),
(10, 'Western'),
(11, 'Comedy'),
(12, 'Phim ca nhạc'),
(14, 'Phim tài liệu'),
(15, 'Hài'),
(16, 'Lãng mạn'),
(17, 'Phưu lưu'),
(18, 'Viễn tưởng'),
(20, 'Trinh thám');

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
  `img_combo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price_combo` float NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `combo`
--

INSERT INTO `combo` (`id_combo`, `name_combo`, `img_combo`, `price_combo`, `mota`, `id_product`) VALUES
(4, 'Combo Xúc Xích cùng nước', '1.jfif', 43000, '1 Xúc xích + 1 nước lớn chỉ 55.000đ', 2),
(6, '1 Hotdog', 'CFD.png', 42000, 'nóng hổi thơm ngon', 4),
(7, 'Nước lớn', 'CFD.png', 25000, 'Uống thả ga nào', 5),
(13, '1 Hotdog', 'CFD.png', 42000, 'nóng hổi thơm ngon', 4),
(14, 'Combo Xúc Xích cùng nước', '1.jfif', 43000, '1 Xúc xích + 1 nước lớn chỉ 55.000đ', 2),
(15, '1 Hotdog', 'CFD.png', 42000, 'nóng hổi thơm ngon', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `name_user` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_submit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `id_movie`, `name_user`, `date_submit`, `content`) VALUES
(2, 64, 'TRAN MINH ANH', '2023-12-01 02:24:53', 'gergerg jkdssg dfgd fg df gd fg df g dfg d fg df gdf gẻg ẻ g e grerg ẻ ge rg ẻ ggdfgdfger g ẻg ẻg ẻgergerger  ge rg'),
(3, 64, 'TRAN MINH ANH', '2023-12-01 02:24:53', 'gergerg jkdssg dfgd fg df gd fg df g dfg d fg df gdf gẻg ẻ g e grerg ẻ ge rg ẻ ggdfgdfger g ẻg ẻg ẻgergerger  ge rg'),
(14, 64, 'minh anh', '2023-12-01 05:03:09', 'child'),
(18, 64, 'minh anh', '2023-12-01 05:04:13', 'wtert'),
(19, 64, 'minh anh', '2023-12-01 22:33:08', '1231234234'),
(20, 64, 'minh anh', '2023-12-01 22:46:08', 'ertert'),
(21, 64, 'minh anh', '2023-12-01 22:46:39', 'ergergerg'),
(22, 64, 'minh anh', '2023-12-01 22:47:09', 'hrthrthrrthrth'),
(23, 64, 'minh anh', '2023-12-01 22:47:51', '34543523452345'),
(24, 64, 'minh anh', '2023-12-01 22:48:13', 'dfgdfg'),
(25, 64, 'minh anh', '2023-12-01 22:48:55', '123123123'),
(26, 64, 'minh anh', '2023-12-01 22:49:07', 'weffwe'),
(27, 65, 'user12234234234234', '2023-12-02 03:04:16', 'werwer'),
(28, 65, 'user12234234234234', '2023-12-02 03:04:33', 'haha');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_times` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `title`, `content`, `create_times`) VALUES
(14, 'Anh Trần', 'minhanh24hihi@gmail.com', 'hõ trọ', 'sgfsdgdfg', '2023-12-02 03:45:54');

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
-- Cấu trúc bảng cho bảng `movie`
--

CREATE TABLE `movie` (
  `id_movie` int(11) NOT NULL,
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
(40, 'MOVIE 1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 3, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster01.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 3, 'action'),
(41, 'MOVIE 2', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2020, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster02.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(42, 'MOVIE 3', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster03.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(43, 'MOVIE 4', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster04.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(44, 'MOVIE 5', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster05.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(45, 'MOVIE 6', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 12, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster06.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 12, 'action'),
(47, 'MOVIE 7', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 9, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster07.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 9, 'action'),
(48, 'MOVIE 8', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 4, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster08.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 4, 'action'),
(50, 'MOVIE 9', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 3, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster09.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 3, 'action'),
(51, 'MOVIE 10', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 3, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster10.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 3, 'action'),
(57, 'MOVIE 13', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 12, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster08.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 12, 'action'),
(58, 'MOVIE 14', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 9, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster10.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 9, 'action'),
(59, 'MOVIE 15', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster09.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(60, 'MOVIE 16', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster03.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(61, 'MOVIE 17', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster05.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(62, 'MOVIE 18', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster07.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(63, 'MOVIE 19', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster06.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(64, 'MOVIE 20', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 1, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster02.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 1, 'action'),
(65, 'MOVIE 23', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 9, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster04.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 9, 'action');

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
  `name_room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `action` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'hoạt động'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id_room`, `name_room`, `action`) VALUES
(9, 'A-P1', 'hoạt động'),
(10, 'A-P2', 'hoạt động'),
(11, 'G-P1', 'hoạt động'),
(12, 'G-P2', 'hoạt động'),
(13, 'V-P1', 'hoạt động'),
(14, 'V-P2', 'hoạt động'),
(15, 'L-P1', 'hoạt động');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seat`
--

CREATE TABLE `seat` (
  `id_seat` int(10) NOT NULL,
  `id_showtime` int(10) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `custom_seat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `action` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `seat`
--

INSERT INTO `seat` (`id_seat`, `id_showtime`, `id_movie`, `custom_seat`, `action`) VALUES
(1, 15, 65, 'A2,A3,', 0),
(2, 15, 65, 'A4,B4,', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showtime`
--

CREATE TABLE `showtime` (
  `id_showtime` int(10) NOT NULL,
  `id_room` int(10) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `show_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `id_action` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `showtime`
--

INSERT INTO `showtime` (`id_showtime`, `id_room`, `id_movie`, `show_date`, `start_time`, `end_time`, `id_action`) VALUES
(3, 9, 40, '2023-11-22', '10:00:09', '12:00:11', 2),
(4, 9, 41, '0000-00-00', '00:00:12', '00:00:00', 2),
(5, 9, 65, '0000-00-00', '00:00:00', '00:00:00', 2),
(8, 9, 41, '0000-00-00', '00:00:00', '00:00:00', 2),
(9, 10, 62, '2023-11-23', '15:04:20', '00:00:00', 1),
(10, 11, 65, '2023-11-23', '11:11:11', '14:14:14', 2),
(13, 9, 65, '2023-11-27', '11:45:00', '23:49:00', 3),
(15, 15, 65, '2023-11-29', '10:00:00', '11:55:00', 1),
(16, 11, 62, '2023-12-01', '04:48:00', '07:51:00', 1);

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(11) NOT NULL,
  `vnp_Amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'tổng số tiền',
  `vnp_BankCode` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_BankTranNo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_CardType` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_OrderInfo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_PayDate` datetime NOT NULL,
  `vnp_ResponseCode` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_TmnCode` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_TransactionNo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_TransactionStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '0 là thanh toán thành công còn lại là thất bại',
  `vnp_TxnRef` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_SecureHash` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_ResponseCode`, `vnp_TmnCode`, `vnp_TransactionNo`, `vnp_TransactionStatus`, `vnp_TxnRef`, `vnp_SecureHash`) VALUES
(1, '11500000', 'NCB', 'VNP14210349', 'ATM', 'Thanh toán giao dịch : 1114', '2023-11-30 04:44:34', '00', 'I1MTCNW2', '14210349', '00', '1114', 'ddaa9b45f19eb22a49457b8e21583c6135f8fa94bd6072a7aaebda7591fe29956d6270fc269a49808cd5b1be13cddb72e5cca0a93673f388b8f19ece87c8a437'),
(2, '7300000', 'NCB', 'VNP14215235', 'ATM', 'Thanh toán giao dịch : 6105', '2023-12-02 03:24:19', '00', 'I1MTCNW2', '14215235', '00', '6105', '321476785a97964627647504b19371c6b82113d21b326a0b59d4d34d98feb55f635c34e3087ce4c92788c631279ac6716d1c6403d3346b948eeccbce6bd72640');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

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
  ADD KEY `bill_ibfk_1` (`id_account`);

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
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

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
  ADD PRIMARY KEY (`id_room`);

--
-- Chỉ mục cho bảng `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id_seat`),
  ADD KEY `seat_ibfk_1` (`id_showtime`);

--
-- Chỉ mục cho bảng `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`id_showtime`),
  ADD KEY `showtime_ibfk_2` (`id_movie`),
  ADD KEY `showtime_ibfk_3` (`id_action`),
  ADD KEY `id_cinema` (`id_room`) USING BTREE;

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_showtime` (`id_showtime`),
  ADD KEY `ticket_ibfk_2` (`id_type`),
  ADD KEY `ticket_ibfk_3` (`id_seat`);

--
-- Chỉ mục cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `action`
--
ALTER TABLE `action`
  MODIFY `id_action` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id_cinema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `combo`
--
ALTER TABLE `combo`
  MODIFY `id_combo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `country`
--
ALTER TABLE `country`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `price`
--
ALTER TABLE `price`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `seat`
--
ALTER TABLE `seat`
  MODIFY `id_seat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `showtime`
--
ALTER TABLE `showtime`
  MODIFY `id_showtime` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`) ON DELETE CASCADE ON UPDATE RESTRICT;

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
-- Các ràng buộc cho bảng `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `seat_ibfk_1` FOREIGN KEY (`id_showtime`) REFERENCES `showtime` (`id_showtime`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`id_movie`) REFERENCES `movie` (`id_movie`) ON DELETE CASCADE ON UPDATE RESTRICT,
  ADD CONSTRAINT `showtime_ibfk_2` FOREIGN KEY (`id_room`) REFERENCES `room` (`id_room`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `showtime_ibfk_3` FOREIGN KEY (`id_action`) REFERENCES `action` (`id_action`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
