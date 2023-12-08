-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 08, 2023 lúc 07:24 PM
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
-- Cơ sở dữ liệu: `project_01`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int(10) NOT NULL,
  `name_clinet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'hoạt động',
  `role` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_account`, `name_clinet`, `user`, `password`, `phone_number`, `email`, `address`, `action`, `role`) VALUES
(2, 'TRAN MINH ANH', 'admin', '123', '0979620125', 'minhanh24hihi@gmail.com', 'NB', 'hoạt động', 1),
(39, 'Anh Trần', 'user', '123', '0979620125', 'anhtmph41558@fpt.edu.vn', 'Hà Nội', 'Hoạt động', 0),
(42, 'Minh Anh Trần', 'user1', '123', '0979620125', 'anhtmph41558@fpt.edu.vn', 'Minh Khai', 'meomeo', 0),
(45, 'Myranda Dyble', 'mdyble0', 'VG4/!W<', '+33 228 639 6194', 'mdyble0@ovh.net', 'Pau', 'hoạt động', 0),
(46, 'Cathleen Heffron', 'cheffron1', 'lFKyMDc', '+504 222 880 7349', 'cheffron1@sogou.com', 'Bálsamo Oriental', 'hoạt động', 0),
(47, 'Reina Belvin', 'rbelvin2', 'DK\'9Fto', '+7 577 698 1840', 'rbelvin2@fema.gov', 'Velizh', 'hoạt động', 0),
(48, 'Kim Sibray', 'ksibray3', 'Nu_aY5ddb', '+86 455 778 0862', 'ksibray3@wikimedia.org', 'Damaishan', 'hoạt động', 0),
(49, 'Reuven Parade', 'rparade4', 'XqpI77', '+234 122 579 7738', 'rparade4@wix.com', 'Orita Eruwa', 'hoạt động', 0),
(50, 'Ginnie Sanbrook', 'gsanbrook5', 'TawTs,', '+48 661 861 3765', 'gsanbrook5@vimeo.com', 'Czarnowąsy', 'hoạt động', 0),
(51, 'Jacquenetta Poore', 'jpoore6', '4P3.NveseRxP', '+357 606 444 9047', 'jpoore6@nationalgeographic.com', 'Rizokárpaso', 'hoạt động', 0),
(52, 'Skyler Findlay', 'sfindlay7', 'U&`_)duDqj', '+86 869 407 8509', 'sfindlay7@theatlantic.com', 'Jomda', 'hoạt động', 0),
(53, 'Bartel Checchetelli', 'bchecchetelli8', '.8<veVP$|', '+261 124 356 1104', 'bchecchetelli8@bing.com', 'Vavatenina', 'hoạt động', 0),
(54, 'Nadine Benois', 'nbenois9', 'o<!!t_jh3', '+33 259 173 5679', 'nbenois9@accuweather.com', 'Évry', 'hoạt động', 0),
(55, 'Lorrie Lightbody', 'llightbodya', '#J(mJdNffR*L', '+351 359 856 7493', 'llightbodya@fc2.com', 'Gondomar', 'hoạt động', 0),
(56, 'Harli Di Bartolommeo', 'hdib', 'IhX6(E)0N|', '+7 515 368 1368', 'hdib@apple.com', 'Ilyich', 'hoạt động', 0),
(57, 'Abbey Decroix', 'adecroixc', 'mpBuU2', '+55 852 708 0430', 'adecroixc@google.com.au', 'Caraguatatuba', 'hoạt động', 0),
(58, 'Melony Bizzey', 'mbizzeyd', 'g3b88ziJGu', '+380 291 833 6346', 'mbizzeyd@psu.edu', 'Kamyshevka Vtoraya', 'hoạt động', 0),
(59, 'Saul Lanchbury', 'slanchburye', 'AQ3jv_`{9Bp(', '+62 954 500 8254', 'slanchburye@google.co.uk', 'Tumpakkepuh', 'hoạt động', 0),
(60, 'Amory Dyte', 'adytef', '}V=N\"5>GDu', '+82 126 357 4404', 'adytef@wufoo.com', 'Pubal', 'hoạt động', 0),
(61, 'Neala Lehr', 'nlehrg', 'Faa{zMu', '+351 700 994 8810', 'nlehrg@jalbum.net', 'Chã', 'hoạt động', 0),
(62, 'Bartie Rolland', 'brollandh', 'GdNC3c3\'w8`', '+66 470 934 5458', 'brollandh@sciencedaily.com', 'Khlong Luang', 'hoạt động', 0),
(63, 'Natala Berre', 'nberrei', 'W+_It`IL', '+62 314 247 5565', 'nberrei@dropbox.com', 'Busalangga', 'hoạt động', 0),
(64, 'Peder Fountain', 'pfountainj', '+I4P,xX*', '+86 239 987 6199', 'pfountainj@oaic.gov.au', 'Xingdian', 'hoạt động', 0),
(65, 'Caria Racher', 'cracherk', 'e2lNO#=jG', '+63 882 367 5083', 'cracherk@flickr.com', 'Union', 'hoạt động', 0),
(66, 'Davy Wedon', 'dwedonl', 'Euj,fQR#L', '+55 572 269 4779', 'dwedonl@google.com', 'Rio das Pedras', 'hoạt động', 0),
(67, 'Devi Baszkiewicz', 'dbaszkiewiczm', 'v26Erx@4g5N', '+93 702 458 9743', 'dbaszkiewiczm@blogtalkradio.com', 'Sang-e Chārak', 'hoạt động', 0),
(68, 'Ede Menier', 'emeniern', 'ZqDmI~%aP', '+46 722 386 8455', 'emeniern@shop-pro.jp', 'Hägersten', 'hoạt động', 0),
(69, 'Rudie Ion', 'riono', 'z4/)*XC', '+371 454 939 9112', 'riono@uiuc.edu', 'Dagda', 'hoạt động', 0),
(70, 'Jase Morter', 'jmorterp', 'P,\'eQv', '+1 571 946 6589', 'jmorterp@google.nl', 'Vienna', 'hoạt động', 0),
(71, 'Abbey Piddocke', 'apiddockeq', 'o&yph&ZJ', '+1 916 833 0628', 'apiddockeq@newsvine.com', 'Sacramento', 'hoạt động', 0),
(72, 'Homerus Reck', 'hreckr', '4665p', '+86 996 973 7596', 'hreckr@desdev.cn', 'Jin’an', 'hoạt động', 0),
(73, 'Leone Alyukin', 'lalyukins', 'b4!<$J{@', '+81 143 548 7494', 'lalyukins@craigslist.org', 'Yuzawa', 'hoạt động', 0),
(74, 'Sandy Covotti', 'scovottit', 'MU1HRMh`v<1=', '+84 772 770 8383', 'scovottit@google.co.uk', 'Ea Drăng', 'hoạt động', 0),
(75, 'Drusy Goodwyn', 'dgoodwynu', 'qls~.s@', '+57 295 143 8163', 'dgoodwynu@yale.edu', 'Belén de Umbría', 'hoạt động', 0),
(76, 'Thomasine Gauchier', 'tgauchierv', 'hw31}3*0`', '+57 349 160 0128', 'tgauchierv@newsvine.com', 'Remedios', 'hoạt động', 0),
(77, 'Abbot Dumphries', 'adumphriesw', 'r3m<$GtPZ0k', '+62 501 247 1834', 'adumphriesw@bandcamp.com', 'Detik Satu', 'hoạt động', 0),
(78, 'Kareem Bittlestone', 'kbittlestonex', 'o3k9I?o9', '+351 537 681 0065', 'kbittlestonex@pcworld.com', 'Altares', 'hoạt động', 0),
(79, 'Alasteir Lowdham', 'alowdhamy', '3?!*N@vSng/S', '+60 151 668 7762', 'alowdhamy@bing.com', 'Petaling Jaya', 'hoạt động', 0),
(80, 'Rooney Yashnov', 'ryashnovz', 'H<!<U~9R', '+62 835 180 8107', 'ryashnovz@salon.com', 'Mandala', 'hoạt động', 0),
(81, 'Adeline Corro', 'acorro10', '?|jGwuKYxy', '+55 565 453 3937', 'acorro10@feedburner.com', 'Taquari', 'hoạt động', 0),
(82, 'Ida Favelle', 'ifavelle11', 'hC<MC(X', '+971 990 638 0972', 'ifavelle11@biblegateway.com', 'Muzayri‘', 'hoạt động', 0),
(83, 'Aurlie Maliffe', 'amaliffe12', '/%8TMERlkXu', '+86 498 588 1304', 'amaliffe12@loc.gov', 'Dawan', 'hoạt động', 0),
(84, 'Imogene Massy', 'imassy13', '9ZrOK/nQ+Is', '+86 475 590 9449', 'imassy13@bbb.org', 'Zhonghe', 'hoạt động', 0),
(85, 'Melicent Sandell', 'msandell14', '=bs,s7y)}1&', '+98 179 259 7161', 'msandell14@ucoz.com', 'Zābolī', 'hoạt động', 0),
(86, 'Blancha Sommerton', 'bsommerton15', '<.3IOH', '+33 571 755 9595', 'bsommerton15@amazon.de', 'Châlons-en-Champagne', 'hoạt động', 0),
(87, 'Jackquelin Fuller', 'jfuller16', 'bk/{@E#\"c', '+86 521 579 0656', 'jfuller16@naver.com', 'Changma', 'hoạt động', 0),
(88, 'Ophelie Issac', 'oissac17', 'Tsf,LJ', '+255 548 243 3136', 'oissac17@sfgate.com', 'Sikonge', 'hoạt động', 0),
(89, 'Ruthy Bagger', 'rbagger18', '*X=xyL', '+850 729 590 5450', 'rbagger18@shop-pro.jp', 'Kilju', 'hoạt động', 0),
(90, 'Bondon Darlow', 'bdarlow19', '!pVIZH(GN$nf', '+964 776 311 8044', 'bdarlow19@archive.org', 'Kufa', 'hoạt động', 0),
(91, 'Donnamarie Domsalla', 'ddomsalla1a', 'OkPV6SY\Z', '+963 407 638 8577', 'ddomsalla1a@istockphoto.com', 'Nawá', 'hoạt động', 0),
(92, 'Hatti Thake', 'hthake1b', 'Pnro+*l7`', '+62 180 684 2095', 'hthake1b@1688.com', 'Kertosari', 'hoạt động', 0),
(93, 'Pall Harnetty', 'pharnetty1c', 'yVydGn)+J', '+86 624 982 0507', 'pharnetty1c@disqus.com', 'Moyuan', 'hoạt động', 0),
(94, 'Celestyn Louch', 'clouch1d', '6mXm{3Na', '+351 943 230 1675', 'clouch1d@odnoklassniki.ru', 'Carvoeira', 'hoạt động', 0),
(95, 'Merralee Coatts', 'mcoatts1e', 'E+=}hg&/o|!L', '+1 816 356 6704', 'mcoatts1e@mozilla.org', 'Kansas City', 'hoạt động', 0),
(96, 'Bamby Filipczynski', 'bfilipczynski1f', '\"VSc~H\"', '+52 721 642 9560', 'bfilipczynski1f@cpanel.net', 'San Francisco', 'hoạt động', 0),
(97, 'Sibelle Cratere', 'scratere1g', 'Xy1c)>', '+33 908 721 2437', 'scratere1g@unc.edu', 'Reims', 'hoạt động', 0),
(98, 'Pavlov Maccrea', 'pmaccrea1h', 'P!>=HW5fnp/', '+255 373 781 1499', 'pmaccrea1h@businesswire.com', 'Hedaru', 'hoạt động', 0),
(99, 'Dewain Bampton', 'dbampton1i', '?R0{!2GH', '+86 818 269 9413', 'dbampton1i@imageshack.us', 'Yetang', 'hoạt động', 0),
(100, 'Dorine Heater', 'dheater1j', 'Ym~.9.nc~E', '+55 618 609 6973', 'dheater1j@geocities.jp', 'Altos', 'hoạt động', 0),
(101, 'Miner Duffy', 'mduffy1k', 'mICtI@g!2$', '+51 470 845 5389', 'mduffy1k@godaddy.com', 'Lloque', 'hoạt động', 0),
(102, 'Janelle Conew', 'jconew1l', '<to,Zw&3sME', '+385 451 453 4966', 'jconew1l@hp.com', 'Stari Grad', 'hoạt động', 0),
(103, 'Nickie Sowersby', 'nsowersby1m', 'j?J6LIx{', '+374 801 645 9633', 'nsowersby1m@w3.org', 'Myasnikyan', 'hoạt động', 0),
(104, 'Herculie Willas', 'hwillas1n', '(oE&#FB/en', '+86 454 954 2365', 'hwillas1n@admin.ch', 'Songjianghe', 'hoạt động', 0),
(105, 'Linn Brandes', 'lbrandes1o', '*?\'(n\"', '+63 932 293 4365', 'lbrandes1o@myspace.com', 'Kalawit', 'hoạt động', 0),
(106, 'Markus Whitcher', 'mwhitcher1p', '{ig=1fCJ_p', '+351 292 600 2454', 'mwhitcher1p@nps.gov', 'Figueiró dos Vinhos', 'hoạt động', 0),
(107, 'Zorina Blackborow', 'zblackborow1q', '2GCsEho', '+62 676 616 5886', 'zblackborow1q@cbc.ca', 'Pasrukrajan Satu', 'hoạt động', 0),
(108, 'Byrle Aiton', 'baiton1r', '`++l,%>y', '+260 318 451 3401', 'baiton1r@gnu.org', 'Luwingu', 'hoạt động', 0),
(109, 'Kory Tennock', 'ktennock1s', '$jLI$|', '+58 541 834 4885', 'ktennock1s@mail.ru', 'San Fernando Apure', 'hoạt động', 0),
(110, 'Melita Diprose', 'mdiprose1t', 'IB\'+_n<\"9y.\'', '+86 223 430 6719', 'mdiprose1t@jimdo.com', 'Xichang', 'hoạt động', 0),
(111, 'Shelia Toovey', 'stoovey1u', 'L89vglvI,\'', '+46 902 298 4250', 'stoovey1u@uol.com.br', 'Borås', 'hoạt động', 0),
(112, 'Jervis Broxis', 'jbroxis1v', 'HeC\"4)kqjX2r', '+62 754 106 3190', 'jbroxis1v@samsung.com', 'Tetebatu', 'hoạt động', 0),
(113, 'Dani McDermot', 'dmcdermot1w', '(T1!x5', '+55 267 739 9041', 'dmcdermot1w@typepad.com', 'Artur Nogueira', 'hoạt động', 0),
(114, 'Cayla Callacher', 'ccallacher1x', '<TwVX8eFs#)Z', '+62 942 691 7757', 'ccallacher1x@google.com', 'Suwatu', 'hoạt động', 0),
(115, 'Elva De Cruze', 'ede1y', 'o9yVQt@7B', '+352 933 564 6730', 'ede1y@washington.edu', 'Larochette', 'hoạt động', 0),
(116, 'Eberto Stallion', 'estallion1z', 'f(Kh%(', '+374 256 840 8284', 'estallion1z@scientificamerican.com', 'Shenavan', 'hoạt động', 0),
(117, 'Lorraine Challenor', 'lchallenor20', 'Vp*|00dt', '+62 857 734 1898', 'lchallenor20@europa.eu', 'Sumberan', 'hoạt động', 0),
(118, 'Laureen Janda', 'ljanda21', '78IDaVnI<xTG', '+84 530 934 3284', 'ljanda21@netlog.com', 'Yên Mỹ', 'hoạt động', 0),
(119, 'Nathalia Abate', 'nabate22', 'Y+8i\'H2dkx', '+46 194 992 8822', 'nabate22@canalblog.com', 'Stockholm', 'hoạt động', 0),
(120, 'Sharline Ciccerale', 'sciccerale23', 'g<MV\")M', '+351 968 463 9207', 'sciccerale23@unblog.fr', 'Vale de Santarém', 'hoạt động', 0),
(121, 'Pablo Wethered', 'pwethered24', 'y.`HFX', '+1 256 105 2011', 'pwethered24@wunderground.com', 'Huntsville', 'hoạt động', 0),
(122, 'Leland Grewe', 'lgrewe25', 'pnj!.fPA', '+62 383 159 3078', 'lgrewe25@cpanel.net', 'Jelat', 'hoạt động', 0),
(123, 'Dirk Checo', 'dcheco26', 'aBvZitlz.+g', '+86 173 554 3072', 'dcheco26@pinterest.com', 'Shaoguan', 'hoạt động', 0),
(124, 'Bailey Ferrer', 'bferrer27', 'C6t>H5', '+1 702 607 9443', 'bferrer27@buzzfeed.com', 'Las Vegas', 'hoạt động', 0),
(125, 'Gustav Bog', 'gbog28', 'EaGpF\'0e', '+27 996 955 4332', 'gbog28@comsenz.com', 'Willowmore', 'hoạt động', 0),
(126, 'Allison Flores', 'aflores29', 'T,Dpt.6f}', '+51 821 350 3206', 'aflores29@house.gov', 'Sacanche', 'hoạt động', 0),
(127, 'Keen Babbe', 'kbabbe2a', 'Ob+_j{\'e', '+595 601 911 2330', 'kbabbe2a@nih.gov', 'Eusebio Ayala', 'hoạt động', 0),
(128, 'Andreas Colbert', 'acolbert2b', '9><nS~vQ', '+60 203 169 6650', 'acolbert2b@slate.com', 'Sandakan', 'hoạt động', 0),
(129, 'Lyssa Eicheler', 'leicheler2c', '2p\'rFjp', '+66 912 601 4538', 'leicheler2c@spotify.com', 'Tak', 'hoạt động', 0),
(130, 'Hermione Forten', 'hforten2d', 'j$x0&U', '+86 145 680 1278', 'hforten2d@baidu.com', 'Qingshan', 'hoạt động', 0),
(131, 'Megan Bartocci', 'mbartocci2e', 'zG<k~', '+55 601 693 3916', 'mbartocci2e@wikimedia.org', 'Alenquer', 'hoạt động', 0),
(132, 'Emmalyn Nurcombe', 'enurcombe2f', '>Nr>E2~!or27', '+86 830 577 3317', 'enurcombe2f@merriam-webster.com', 'Xigangzi', 'hoạt động', 0),
(133, 'Carmina Linkin', 'clinkin2g', '?<QC!m+vmv', '+46 345 937 7732', 'clinkin2g@guardian.co.uk', 'Gävle', 'hoạt động', 0),
(134, 'Rorie Frear', 'rfrear2h', 'mn+|%A', '+52 283 781 1697', 'rfrear2h@homestead.com', 'Fovissste', 'hoạt động', 0),
(135, 'Joli Rennicks', 'jrennicks2i', 'Mc89=>', '+48 282 132 6957', 'jrennicks2i@meetup.com', 'Rzyki', 'hoạt động', 0),
(136, 'Kennie Baptista', 'kbaptista2j', 'J/3ea>\"<M!{', '+62 224 263 2423', 'kbaptista2j@mapquest.com', 'Sidaraja', 'hoạt động', 0),
(137, 'Robert Smale', 'rsmale2k', '`I/+4vdt=pdP', '+62 379 759 3111', 'rsmale2k@nymag.com', 'Krajan', 'hoạt động', 0),
(138, 'Germaine Crennan', 'gcrennan2l', '}0SFU1k', '+420 526 385 0645', 'gcrennan2l@nhs.uk', 'Sobotka', 'hoạt động', 0),
(139, 'Ferrel Rummery', 'frummery2m', 'f~4vlE1,', '+33 801 541 1729', 'frummery2m@amazon.co.uk', 'Dijon', 'hoạt động', 0),
(140, 'Alvy Dowbiggin', 'adowbiggin2n', '55~8UfPX', '+380 286 175 6849', 'adowbiggin2n@jugem.jp', 'Okhtyrka', 'hoạt động', 0),
(141, 'Alisun Veldens', 'aveldens2o', 'uy0#RB', '+7 115 595 0723', 'aveldens2o@sciencedirect.com', 'Sokolovyy', 'hoạt động', 0),
(142, 'Orly Spours', 'ospours2p', 'sb54w|!', '+7 728 893 3905', 'ospours2p@simplemachines.org', 'Gavrilov-Yam', 'hoạt động', 0),
(143, 'Alyse D\'Ambrogio', 'adambrogio2q', '2{H`{Nl6P|', '+7 315 895 7134', 'adambrogio2q@indiatimes.com', 'Spas-Klepiki', 'hoạt động', 0),
(144, 'Orton Hungerford', 'ohungerford2r', 'TV+mujX', '+86 542 730 3950', 'ohungerford2r@t-online.de', 'Hongcheng', 'hoạt động', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `action`
--

CREATE TABLE `action` (
  `id_action` int(10) NOT NULL,
  `action` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
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
  `vnp_TxnRef` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price_tickets` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price_combo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name_movie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cinema` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `seats` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `show_day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `showtime` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `total_price` float NOT NULL,
  `booking_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Đã thanh toán',
  `note` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Nhận vé tại quầy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `id_account`, `vnp_TxnRef`, `price_tickets`, `price_combo`, `name_movie`, `cinema`, `room`, `seats`, `show_day`, `showtime`, `total_price`, `booking_date`, `action`, `note`) VALUES
(1, 2, '1114', '30.000 VND', '85.000 VND', 'MOVIE 23', 'CGV', 'A-P1', 'A2,A3,', '3', '11:45:00', 115000, '2023-11-30 04:44:41', 'Chưa thanh toán', 'Nhận vé tại quầy'),
(2, 2, '1114', '30.000 VND', '85.000 VND', 'MOVIE 23', 'CGV', 'A-P1', 'A2,A3,', '3', '11:45:00', 1150000, '2023-11-30 04:44:41', 'Đã thanh toán', 'Nhận vé tại quầy'),
(6, 42, '8882', '158.000 VND', '43.000 VND', 'MOVIE 23', 'CGV', 'G-P1', 'D34,', '', '', 201000, '2023-12-07 07:34:50', 'Đã thanh toán', 'Đã nhận vé'),
(9, 42, '2476', '158.000 VND', '0', 'MOVIE 23', 'CGV', '', 'C11,', '', '', 158000, '2023-12-07 07:38:00', 'Đã thanh toán', 'Nhận vé tại quầy'),
(10, 42, '7082', '158.000 VND', '0', 'MOVIE 23', 'CGV', '', 'F21,', '', '', 158000, '2023-12-07 07:40:31', 'Đã thanh toán', 'Nhận vé tại quầy'),
(11, 42, '7181', '395.000 VND', '0', 'MEOMEO', 'CGV', '2D', 'A1,B2,B3,C19,', '14/12', '10:00:00', 395000, '2023-12-07 07:46:25', 'Đã hủy', 'đã nhận vé\r\n'),
(12, 42, '6149', '474.000 VND', '42.000 VND', 'MEOMEO', 'CGV', '2D', 'H11,H10,H9,H8,H7,', '15/12', '10:00:00', 516000, '2023-12-07 18:14:49', 'Chưa thanh toán', 'Nhận vé tại quầy'),
(13, 42, '4273', '395.000 VND', '0', 'MEOMEO', 'CGV', '', 'H12,H13,H36,H40,', '', '', 395000, '2023-12-07 22:00:51', 'Đã thanh toán', 'Nhận vé tại quầy'),
(14, 42, '6048', '395.000 VND', '43.000 VND', 'MEOMEO', 'CGV', '', 'H35,G35,F35,E35,', '', '', 438000, '2023-12-07 23:45:17', 'Đã thanh toán', 'Nhận vé tại quầy'),
(15, 42, '746', '158.000 VND', '0', 'MEOMEO', 'CGV', '', 'H34,', '', '', 158000, '2023-12-07 23:50:10', 'Đã thanh toán', 'Nhận vé tại quầy'),
(16, 42, '6268', '158.000 VND', '0', 'MEOMEO', 'CGV', '', 'A40,', '', '', 158000, '2023-12-07 23:52:18', 'Đã thanh toán', 'Nhận vé tại quầy'),
(17, 42, '5105', '158.000 VND', '0', 'MEOMEO', 'CGV', '', 'A27,', '', '', 158000, '2023-12-07 23:52:52', 'Đã thanh toán', 'Nhận vé tại quầy'),
(18, 42, '4077', '158.000 VND', '0', 'MEOMEO', 'CGV', '', 'H33,', '', '', 158000, '2023-12-07 23:58:55', 'Đã thanh toán', 'Nhận vé tại quầy'),
(19, 42, '6043', '158.000 VND', '0', 'MEOMEO', 'CGV', '', 'H14,', '', '', 158000, '2023-12-08 00:02:28', 'Đã thanh toán', 'Nhận vé tại quầy'),
(20, 42, '5212', '158.000 VND', '0', 'MEOMEO', 'CGV', '', 'H26,', '', '', 158000, '2023-12-08 00:03:29', 'Đã thanh toán', 'Nhận vé tại quầy'),
(21, 42, '3136', '158.000 VND', '0', 'MEOMEO', 'CGV', '', 'A6,', '', '', 158000, '2023-12-08 00:16:00', 'Đã thanh toán', 'Nhận vé tại quầy'),
(22, 42, '7419', '158.000 VND', '0', 'MEOMEO', 'CGV', '', 'H6,', '', '', 158000, '2023-12-08 00:22:50', 'Đã thanh toán', 'Nhận vé tại quầy'),
(23, 42, '3566', '316.000 VND', '110.000 VND', 'MEOMEO', 'CGV', '2D', 'H19,G19,F19,', '08/12', '10:00:00', 426000, '2023-12-08 00:31:46', 'Đã thanh toán', 'Nhận vé tại quầy'),
(24, 42, '1992', '158.000 VND', '43.000 VND', 'MEOMEO', 'CGV', '2D', 'A15,', '17/12', '10:00:00', 201000, '2023-12-08 00:38:32', 'Đã thanh toán', 'Nhận vé tại quầy'),
(25, 42, '1992', '158.000 VND', '43.000 VND', 'MEOMEO', 'CGV', '2D', 'A15,', '17/12', '10:00:00', 201000, '2023-12-08 00:55:52', 'Đã thanh toán', 'Nhận vé tại quầy'),
(26, 42, '6896', '158.000 VND', '86.000 VND', 'MEOMEO', 'CGV', '2D', 'H5,', '10/12', '10:00:00', 244000, '2023-12-08 01:55:05', 'Đã thanh toán', 'Nhận vé tại quầy'),
(27, 42, '805', '316.000 VND', '0', 'MEOMEO', 'CGV', '2D', 'E4,D4,E6,', '13/12', '', 316000, '2023-12-08 03:39:58', 'Đã thanh toán', 'Nhận vé tại quầy'),
(28, 42, '34', '158.000 VND', '70.000 VND', 'MEOMEO', 'CGV', '2D', 'F10,', '14/12', '10:00:00', 228000, '2023-12-08 05:05:38', 'Đã hủy', 'Nhận vé tại quầy'),
(29, 42, '5307', '158.000 VND', '140.000 VND', 'MEOMEO', 'CGV', '2D', 'E26,', '16/12', '11:45:00', 298000, '2023-12-08 05:20:26', 'Đã thanh toán', 'Nhận vé tại quầy'),
(30, 39, '6815', '237.000 VND', '0', 'MEOMEO', 'CGV', '', 'G12,F12,', '11/12', '', 237000, '2023-12-08 22:22:18', 'Đã thanh toán', 'Nhận vé tại quầy'),
(31, 39, '2994', '316.000 VND', '210.000 VND', 'MEOMEO', 'CGV', '', 'H10,G10,F10,', '', '', 526000, '2023-12-08 23:56:11', 'Đã thanh toán', 'Nhận vé tại quầy'),
(32, 39, '7250', '237.000 VND', '280.000 VND', 'MEOMEO', 'CGV', 'VIP', 'H14,G14,', '11/12', '06:05:00', 517000, '2023-12-09 00:11:09', 'Đã thanh toán', 'Nhận vé tại quầy'),
(33, 39, '847', '237.000 VND', '70.000 VND', 'MEOMEO', 'CGV', '', 'F29,E13,', '', '', 307000, '2023-12-09 01:03:55', 'Đã thanh toán', 'Nhận vé tại quầy'),
(34, 39, '7859', '237.000 VND', '520.000 VND', 'MEOMEO', 'CGV', 'VIP', 'E22,F22H6,', '14/12', '23:00:00', 757000, '2023-12-09 01:35:12', 'Đã thanh toán', 'Nhận vé tại quầy'),
(35, 39, '1834', '158.000 VND', '420.000 VND', 'Yêu Lại Vợ Ngầu', 'CGV', 'VIP', 'A1,', '09/12', '21:00:00', 578000, '2023-12-09 02:14:07', 'Đã thanh toán', 'Nhận vé tại quầy');

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
(2, 'Hoạt Hình'),
(3, 'Kinh Dị'),
(6, 'Chiến tranh'),
(84, 'Gia đình'),
(85, 'Hành Động'),
(86, 'Khoa học viễn tưởng'),
(87, 'Tình cảm , lãng mạn'),
(88, 'Võ thuật'),
(89, 'Trinh thám'),
(90, 'Tâm lý'),
(91, 'Hình sự'),
(92, '18+'),
(94, 'Cổ Trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cinema`
--

CREATE TABLE `cinema` (
  `id_cinema` int(11) NOT NULL,
  `name_cinema` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
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
  `img_combo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price_combo` float NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `combo`
--

INSERT INTO `combo` (`id_combo`, `name_combo`, `img_combo`, `price_combo`, `mota`) VALUES
(4, 'Bánh mỳ siêu to', '1.jfif', 43000, 'Không lo bị đói'),
(6, '1 nước cỡ lớn', 'CFD.png', 42000, 'Giải tỏa cơn khát'),
(7, 'Bánh ngọt', 'MOUSSECACAO.png', 25000, 'Một chút ngọt ngào'),
(14, 'Bánh ngọt', 'SOCOLAHL.png', 43000, 'Một bữa ăn nhẹ , không lo đói'),
(15, 'Trà chanh', 'TRATHACHVAI_1.png', 42000, 'Đập tan cơn khát'),
(17, 'Bắp cỡ lơn', 'images.jfif', 60000, 'Ăn thả ga'),
(18, 'Combo 2 nước', '2.jfif', 70000, 'Xem phim không lo đói bụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_movie` int(11) NOT NULL,
  `name_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_submit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `id_movie`, `name_user`, `date_submit`, `content`) VALUES
(2, 64, 'TRAN MINH ANH', '2023-12-01 02:24:53', 'gergerg jkdssg dfgd fg df gd fg df g dfg d fg df gdf gẻg ẻ g e grerg ẻ ge rg ẻ ggdfgdfger g ẻg ẻg ẻgergerger  ge rg'),
(3, 64, 'TRAN MINH ANH', '2023-12-01 02:24:53', 'gergerg jkdssg dfgd fg df gd fg df g dfg d fg df gdf gẻg ẻ g e grerg ẻ ge rg ẻ ggdfgdfger g ẻg ẻg ẻgergerger  ge rg'),
(13, 64, 'minh anh', '2023-12-01 04:59:34', 'haha'),
(14, 64, 'minh anh', '2023-12-01 05:03:09', 'child'),
(18, 64, 'minh anh', '2023-12-01 05:04:13', 'wtert'),
(19, 51, 'Minh Anh Trần', '2023-12-08 03:07:59', 'ẻwtyu\r\n');

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `country`
--

CREATE TABLE `country` (
  `id_country` int(11) NOT NULL,
  `name_country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
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
  `time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `reviews` float NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `performer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `age_limit` int(11) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trailer_movie` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_category` int(10) NOT NULL,
  `action` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `movie`
--

INSERT INTO `movie` (`id_movie`, `name_movie`, `content`, `id_country`, `year`, `time`, `reviews`, `author`, `performer`, `age_limit`, `image`, `trailer_movie`, `id_category`, `action`) VALUES
(40, 'The godfather', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 3, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster01.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 3, 'action'),
(50, 'The dark knight', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 3, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster02.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 3, 'action'),
(51, '12 angry men', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 3, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster03.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 3, 'action'),
(65, 'Pulp fiction', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster04.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 3, 'action'),
(72, 'Inception', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster06.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 2, 'action'),
(73, 'Fight club ', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster07.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 2, 'action'),
(74, 'The Lion King', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster08.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 2, 'action'),
(76, 'Saving Private Ryan', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 's_ucm_poster10.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 2, 'action'),
(77, 'The Matrix', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'movie_details_img.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 6, 'action'),
(78, '3 Idiots', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster01.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 6, 'action'),
(80, 'Parasite', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster03.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 6, 'action'),
(81, 'Spirited away', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster04.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 6, 'action'),
(82, 'Whiplash', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster05.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 84, 'action'),
(83, 'Rear window', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster06.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 84, 'action'),
(84, 'Your name', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster07.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 84, 'action'),
(85, 'Wall-E', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster08.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 84, 'action'),
(87, 'Planet Terror', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'ucm_poster10.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 85, 'action'),
(88, 'Vẹt Cò Phưu Lưu Ký', 'Richard – chú vẹt lớn lên giữa đàn cò luôn tự tin sẽ có được vị trí dẫn đàn trở về phương Bắc. Thế nhưng, vị trí ấy lại được trao cho một chú cò khác, khiến Richard ấm ức và quyết định một mình phiêu lưu. Chú gặp một đàn chim sẻ bị giam cầm bởi chim công ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'vet-co-500_1701851295590.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 85, 'action'),
(89, 'WISH Điều Ước', '“Wish” là bộ phim hoạt hình kỷ niệm 100 năm thành lập của Walt Disney Studios (sự kiện toàn cầu D100). \"Điều Ước\" lấy bối cảnh tại một vương quốc diệu kỳ tên Rosas. Ở đây, Asha - một cô gái thông minh và mơ mộng đã ước một điều ước quá sức mạnh mẽ, đến nỗ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'wish-500_1698658410148.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 85, 'action'),
(90, 'Wonka', 'Dựa trên nhân vật từ quyến sách gối đầu giường của các em nhỏ trên toàn thế giới \"Charlie và Nhà Máy Sôcôla\" và phiên bản phim điện ảnh cùng tên vào năm 2005, WONKA kể câu chuyện kỳ diệu về hành trình của nhà phát minh, ảo thuật gia và nhà sản xuất sôcôla', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'wonka-2_1702003033035.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 85, 'action'),
(92, 'Thiếu Niên Và Chim Diệc', 'Đến từ Studio Ghibli và đạo diễn Miyazaki Hayao, bộ phim là câu chuyện về hành trình kỳ diệu của cậu thiếu niên Mahito trong một thế giới hoàn toàn mới lạ. Trải qua nỗi đau mất mẹ cùng mối quan hệ chẳng mấy vui vẻ với gia đình cũng như bạn học, Mahito dần', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'the-boy-and-the-heron-7_1702049721844.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 86, 'action'),
(93, 'Quỷ Lùn Tinh Nghịch', 'Sự xuất hiện đột ngột của John Dory, anh trai thất lạc đã lâu của Branch mở ra quá khứ bí mật được che giấu bấy lâu nay của Branch. Đó là quá khứ về một ban nhạc có tên BroZone từng rất nổi tiếng nhưng đã tan rã. Hành trình đi tìm lại các thành viên để là', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'trolls-500_1699000954176.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 86, 'action'),
(94, 'MEOMEO', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'not-friends-5_1701399031863.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 86, 'action'),
(95, 'NAPOLEON', 'Bộ phim là cái nhìn nguyên bản và cá nhân về nguồn gốc của Napoléon Bonaparte và quá trình leo lên ngôi hoàng đế nhanh chóng, tàn nhẫn của ông. Câu chuyện được kể qua lăng kính của vợ ông, mối quan hệ phức tạp và thường xuyên bất ổn, cùng Josephine, một t', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'napoleon-500_1700127400263.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 86, 'action'),
(97, 'Quỷ Cẩu', 'Nam về quê để lo đám tang cho bố sau cái chết kinh hoàng của ông, trong khi phải che giấu bạn gái đang mang thai. Nam mơ thấy gia đình bị giết sau khi mai táng bố, và Mít – con chó trắng của gia đình có biểu hiện kì lạ. Ông Quyết, bà Thúy, và bà Liễu thì ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'qu-cau-500_1700626264171.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 87, 'action'),
(98, 'Điều Cấm Kỵ Kinh Hoàng', 'Câu chuyện xoay quanh về 3 nhân vật chính. Đó là 2 chị em và Bà Cóc. 2 đứa trẻ chúng rất hiếu động và tinh nghịch. Chúng khám phá tất cả những gì mà những đứa bé thành thị được về quê chơi và chưa hề biết về một vùng quê yên ả nhưng vẫn ẩn sâu những mối n', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'taboo-500_1701829695327.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 87, 'action'),
(99, 'Tiễn Vong', 'Sẽ ra sao khi người yếu bóng vía trở thành “hậu duệ” nghề mai táng Joed sau khi tốt nghiệp trường Luật bỗng nhận hung tin rằng người cha của anh mắc bệnh nan y cũng là lúc anh đối diện với nỗi ám ảnh kế nghiệp nghề gia truyền - thay cha trở thành một Ngườ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'tien-vong-500_1702010004767.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 87, 'action'),
(100, 'Người Vợ Cuối Cùng', 'Lấy cảm hứng từ tiểu thuyết Hồ Oán Hận, của nhà văn Hồng Thái, Người Vợ Cuối Cùng là một bộ phim tâm lý cổ trang, lấy bối cảnh Việt Nam vào triều Nguyễn. LINH - Người vợ bất đắc dĩ của một viên quan tri huyện, xuất thân là con của một gia đình nông dân ng', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, '500x750-nvcc_1698985267862.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 87, 'action'),
(102, 'Tuổi Mới Tập Yêu', 'Gặp lại mối tình đầu sau nhiều năm, bộ đôi hoàn cảnh Gib - Tor vô tình trở thành \"bảo mẫu\" cho đám nhóc 14 tuổi. Như được hồi xuân, cặp gà bông Gib - Tor nhớ về năm tháng tuổi 14 cùng nhau, và một lần nữa, họ được đắm chìm trong những \"gia vị\" ngọt ngào n', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, '700x1000_1_.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 88, 'action'),
(103, 'Cuộc Chiến Xuyên Không', 'Năm 2022, hai người ngoài hành tinh là Guard (Kim Woo-bin) và Thunder sinh sống tại Trái Đất đang tìm kiếm những tù nhân vượt ngục, vốn bị họ giam giữ trong cơ thể con người. Cảnh sát Moon (So Ji-sub) vô tình trở thành đối tượng bị truy đuổi mà không rõ l', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'alienoid_-_teaser_poster_1_.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 88, 'action'),
(104, 'AQUAMEN', 'Câu chuyện của Đế Vương Atlantis tiếp nối sau những sự kiện xảy ra trong Justice League – Liên Minh Công Lý. Theo đó, Arthur Curry/Aquaman bắt đầu trị vì vương quốc dưới biển sâu Atlantics, và đứng trong tình thế khó xử là những cư dân trên cạn luôn gây ô', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'aquaman-500_1701246168372.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 88, 'action'),
(105, 'Cầu Hồn', 'Cầu Hồn bắt đầu trong bối cảnh kỳ lạ của những câu chuyện siêu nhiên được lưu hành trong trường. Các địa điểm chính của trường bao gồm thư viện, phòng tập nhảy và thang máy đều toát lên sự kinh dị về những điềm báo đen tối sẽ diễn ra. Điểm đặc biệt của ph', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'cau-hon-3_1700804277832.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 88, 'action'),
(107, 'Đắt Rừng Phương Nam', 'Đất Rừng Phương Nam phiên bản điện ảnh được kế thừa và phát triển từ tiểu thuyết cùng tên của nhà văn Đoàn Giỏi. Bộ phim kể về hành trình phiêu lưu của An - một cậu bé chẳng may mất mẹ trên đường đi tìm cha. Cùng với An, khán giả sẽ trải nghiệm sự trù phú', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'datrungpn-3_1697433762119.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 89, 'action'),
(108, 'Điệp Vụ Kỳ Lạ', 'Phim lấy bối cảnh vị thám tử Lemmy Caution trong một lần thực hiện nhiệm vụ tại Alphaville - một thành phố vị lai với chính quyền, dân cư và cách thành phố vận hành khác xa với thành phố New York truyền thống. Nhiệm vụ của Caution trong phi vụ lần này là ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'diep-vu-ki-la-cua-lemmy-caution---copy_1701761398642.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 89, 'action'),
(109, 'Gặp Lại Chị Bầu', 'Bộ phim là tác phẩm mới của đạo diễn Nhất Trung - người đứng sau loạt phim điện ảnh thành công rực rỡ tại phòng vé như Cua Lại Vợ Bầu, 49 Ngày… Mới đây, ê kíp đã hé lộ những hình ảnh đầu tiên về bộ phim với sự góp mặt của Anh Tú - Diệu Nhi cùng màn xuất h', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'gap-lai-chi-bau-2_1701401267010.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 89, 'action'),
(110, 'MEOMEO', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'nct_700x1000.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 89, 'action'),
(112, 'Đấu Trường Sinh Tử', 'Đấu Trường Sinh Tử: Khúc Hát Của Chim Ca Và Rắn Độc là phần tiền truyện của mạch truyện chính, lấy bối cảnh 64 năm trước phần phim đầu tiên. Mạch phim theo chân Coriolanus Snow trẻ tuổi, chính là vị Tổng thống Snow trong loạt phim sau này. Lúc này Coriola', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'poster_payoff_1_.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 90, 'action'),
(113, 'Biêt Đội Marvel', 'Carol Danvers bị vướng vào sức mạnh của Kamala Khan và Monica Rambeau, buộc họ phải hợp tác với nhau để cứu vũ trụ.\r\n\r\n', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'rsz_56245l07_goat_vietnam_apac_poster_1sht.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 90, 'action'),
(114, 'Good Day', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur sint laborum quidem architecto accusantium est itaque soluta vel doloremque veritatis! Et deserunt debitis quae beatae, excepturi possimus repellat. Delectus, soluta. ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'rsz_aw-ctkc-700x1000.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 90, 'action'),
(115, 'Vẹt Cò Phưu Lưu Ký', 'Richard – chú vẹt lớn lên giữa đàn cò luôn tự tin sẽ có được vị trí dẫn đàn trở về phương Bắc. Thế nhưng, vị trí ấy lại được trao cho một chú cò khác, khiến Richard ấm ức và quyết định một mình phiêu lưu. Chú gặp một đàn chim sẻ bị giam cầm bởi chim công ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'vet-co-500_1701851295590.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 90, 'action'),
(117, 'Thiếu Niên Và Chim Diệc', 'Đến từ Studio Ghibli và đạo diễn Miyazaki Hayao, bộ phim là câu chuyện về hành trình kỳ diệu của cậu thiếu niên Mahito trong một thế giới hoàn toàn mới lạ. Trải qua nỗi đau mất mẹ cùng mối quan hệ chẳng mấy vui vẻ với gia đình cũng như bạn học, Mahito dần', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'vietnam_-_poster_-_15.12.2023_1_.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 91, 'action'),
(118, 'Âm Hồn SIAM', 'Bộ phim kể về mối tình tay ba của hai người bạn thân cùng phải lòng một chàng trai, nhưng cuối cùng chuyện tình này lại động chạm đến ma thuật hắc ám. Điều này đã dẫn đến một thảm kịch khi cuộc trả thù kinh hoàng kéo dài và liên lụy đến đời sau.', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, '500x750_1701158602118.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 91, 'action'),
(119, 'Cô Giáo Em Là Số Một', 'Si-min (do Shin Hae-sun thủ vai) là một võ sĩ quyền anh đầy triển vọng nhưng đã từ bỏ quyền thi đấu tại kỳ Thế vận hội Olympic để lấy tiền trả nợ cho cha. Từ đó, Si-min cũng nhận ra rằng, cuộc sống vốn không công bằng và “công lý không thể mài ra cơm”. Si', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, '500x750_1699500910364.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 91, 'action'),
(120, 'Chiếm Đoạt', 'Kể về người vợ của một gia đình thượng lưu thuê cô bảo mẫu “trong mơ” để chăm sóc con trai mình. Nhưng cô không ngờ rằng, phía sau sự trong sáng, tinh khiết kia, cô bảo mẫu luôn che giấu âm mưu nhằm phá hoại hạnh phúc gia đình và khiến cuộc sống của cô th', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'chiem-doat-3_1700793170763.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 91, 'action'),
(122, 'Xin Chào Jadoo', 'Bộ phim Hello Jadoo nổi bật với cốt truyện vô cùng khác biệt, đưa nhân vật Jadoo bước đến cuộc hành trình phiêu lưu vào một thế giới cổ tích tuyệt vời thông qua cuốn sách ma thuật mà Jadoo phát hiện ra trong chuyến thăm công viên giải trí.', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'jadoo-500_1700557239127.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 92, 'action'),
(123, 'Yêu Lại Vợ Ngầu', 'Cặp vợ chồng trẻ No Jung Yeol (Kang Ha-neul) và Hong Na Ra (Jung So-min) từ cuộc sống hôn nhân màu hồng dần “hiện nguyên hình” trở thành cái gai trong mắt đối phương với vô vàn thói hư, tật xấu. Không thể đi đến tiếng nói chung, Jung Yeol và Na Ra quyết đ', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'lr-500_1699256438199.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 92, 'action'),
(124, 'Nhà Vịt Di Cư', 'Nhà Vịt Di Cư theo chân một gia đình vịt trời gồm vịt bố, vịt mẹ, cậu con trai tuổi teen Dax và vịt út Gwen, trong lần đầu tiên trải nghiệm chuyến di cư tiến về phía nam để trú đông. Thế nhưng, niềm vui vẻ sự háo hức kéo dài không bao lâu, gia đình vịt nh', 13, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, 'migration-500_1699868235963.webp', 'https://www.youtube.com/watch?v=yi363I5MoAk', 92, 'action'),
(125, 'Đường Hầm Mùa Hạ', 'Dựa trên cuốn tiểu thuyết đạt giải thưởng. Bộ phim chuyển thể giành giải thưởng Paul Grimault tại Liên hoan phim hoạt hình quốc tế Annecy 2023. Một đường hầm bí ẩn tên Urashima có thể thực hiện bất kỳ điều ước nào…nhưng bạn sẽ phải đánh đổi bằng thời gian', 7, 2023, '120 phút', 9.3, 'Frank Darabont', 'Morgan Freeman, Tim Robbins, Bob Gunton…', 16, '_ng_h_m_t_i_m_a_h_-_payoff_poster_-_d_ki_n_kh_i_chi_u_01.12.2023.jpg', 'https://www.youtube.com/watch?v=yi363I5MoAk', 92, 'action');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price`
--

CREATE TABLE `price` (
  `id_type` int(10) NOT NULL,
  `type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
  `action_room` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`id_room`, `name_room`, `action_room`) VALUES
(9, '2D', '0'),
(10, '3D', '0'),
(11, '4D', '0'),
(12, 'VIP', '0');

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
(2, 15, 65, 'D12,', 0),
(3, 15, 65, 'D12,', 0),
(4, 15, 65, 'D12,', 0),
(5, 15, 65, 'D34,', 0),
(6, 15, 100, 'D7,D9,B26,', 0),
(7, 15, 100, 'D7,D9,B26,', 0),
(8, 15, 65, 'C11,', 0),
(9, 15, 65, 'F21,', 0),
(10, 15, 65, 'A1,B2,B3,C19,', 0),
(11, 15, 65, 'H11,H10,H9,H8,H7,', 0),
(12, 15, 65, 'H12,H13,H36,H40,', 0),
(13, 15, 65, 'H35,G35,F35,E35,', 0),
(14, 15, 65, 'H34,', 0),
(15, 15, 65, 'A40,', 0),
(16, 15, 65, 'A27,', 0),
(17, 15, 65, 'H33,', 0),
(18, 15, 65, 'H14,', 0),
(19, 15, 65, 'H26,', 0),
(20, 15, 65, 'A6,', 0),
(21, 15, 65, 'H6,', 0),
(22, 15, 65, 'H19,G19,F19,', 0),
(23, 15, 65, 'A15,', 0),
(24, 15, 65, 'A15,', 0),
(25, 15, 65, 'H5,', 0),
(26, 15, 65, 'E4,D4,E6,', 0),
(27, 15, 65, 'F10,', 0),
(28, 15, 65, 'E26,', 0),
(29, 15, 126, 'G12,F12,', 0),
(30, 15, 125, 'H10,G10,F10,', 0),
(31, 15, 122, 'H14,G14,', 0),
(32, 15, 65, 'F29,E13,', 0),
(33, 15, 124, 'E22,F22H6,', 0),
(34, 15, 123, 'A1,', 0);

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
  `id_action` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `showtime`
--

INSERT INTO `showtime` (`id_showtime`, `id_room`, `id_movie`, `show_date`, `start_time`, `id_action`) VALUES
(13, 9, 65, '2023-11-27', '09:00:00', 3),
(15, 9, 65, '2023-11-29', '10:00:00', 2),
(24, 9, 65, '2023-11-27', '11:00:00', 3),
(25, 9, 65, '2023-11-27', '12:00:00', 3),
(26, 10, 65, '2023-11-27', '13:00:00', 3),
(27, 10, 65, '2023-11-27', '14:00:00', 3),
(28, 10, 65, '2023-11-27', '15:00:00', 3),
(29, 10, 65, '2023-11-27', '16:00:00', 3),
(30, 11, 65, '2023-11-27', '17:00:00', 3),
(31, 11, 65, '2023-11-27', '18:00:00', 3),
(32, 11, 65, '2023-11-27', '19:00:00', 3),
(33, 11, 65, '2023-11-27', '20:00:00', 3),
(34, 12, 65, '2023-11-27', '21:00:00', 3),
(35, 12, 65, '2023-11-27', '22:00:00', 3),
(36, 12, 65, '2023-11-27', '23:00:00', 3),
(37, 9, 40, '2023-11-27', '09:00:00', 3),
(38, 9, 40, '2023-11-29', '10:00:00', 2),
(39, 9, 40, '2023-11-27', '11:00:00', 3),
(40, 9, 40, '2023-11-27', '12:00:00', 3),
(41, 10, 40, '2023-11-27', '13:00:00', 3),
(42, 10, 40, '2023-11-27', '14:00:00', 3),
(43, 10, 40, '2023-11-27', '15:00:00', 3),
(44, 10, 40, '2023-11-27', '16:00:00', 3),
(45, 11, 40, '2023-11-27', '17:00:00', 3),
(46, 11, 40, '2023-11-27', '18:00:00', 3),
(47, 11, 40, '2023-11-27', '19:00:00', 3),
(48, 11, 40, '2023-11-27', '20:00:00', 3),
(49, 12, 40, '2023-11-27', '21:00:00', 3),
(50, 12, 40, '2023-11-27', '22:00:00', 3),
(51, 12, 40, '2023-11-27', '23:00:00', 3),
(52, 9, 50, '2023-11-27', '09:00:00', 3),
(53, 9, 50, '2023-11-29', '10:00:00', 2),
(54, 9, 50, '2023-11-27', '11:00:00', 3),
(55, 9, 50, '2023-11-27', '12:00:00', 3),
(56, 10, 50, '2023-11-27', '13:00:00', 3),
(57, 10, 50, '2023-11-27', '14:00:00', 3),
(58, 10, 50, '2023-11-27', '15:00:00', 3),
(59, 10, 50, '2023-11-27', '16:00:00', 3),
(60, 11, 50, '2023-11-27', '17:00:00', 3),
(61, 11, 50, '2023-11-27', '18:00:00', 3),
(62, 11, 50, '2023-11-27', '19:00:00', 3),
(63, 11, 50, '2023-11-27', '20:00:00', 3),
(64, 12, 50, '2023-11-27', '21:00:00', 3),
(65, 12, 50, '2023-11-27', '22:00:00', 3),
(66, 12, 50, '2023-11-27', '23:00:00', 3),
(67, 9, 51, '2023-11-27', '09:00:00', 3),
(68, 9, 51, '2023-11-29', '10:00:00', 2),
(69, 9, 51, '2023-11-27', '11:00:00', 3),
(70, 9, 51, '2023-11-27', '12:00:00', 3),
(71, 10, 51, '2023-11-27', '13:00:00', 3),
(72, 10, 51, '2023-11-27', '14:00:00', 3),
(73, 10, 51, '2023-11-27', '15:00:00', 3),
(74, 10, 51, '2023-11-27', '16:00:00', 3),
(75, 11, 51, '2023-11-27', '17:00:00', 3),
(76, 11, 51, '2023-11-27', '18:00:00', 3),
(77, 11, 51, '2023-11-27', '19:00:00', 3),
(78, 11, 51, '2023-11-27', '20:00:00', 3),
(79, 12, 51, '2023-11-27', '21:00:00', 3),
(80, 12, 51, '2023-11-27', '22:00:00', 3),
(81, 12, 51, '2023-11-27', '23:00:00', 3),
(82, 9, 72, '2023-11-27', '09:00:00', 3),
(83, 9, 72, '2023-11-29', '10:00:00', 2),
(84, 9, 72, '2023-11-27', '11:00:00', 3),
(85, 9, 72, '2023-11-27', '12:00:00', 3),
(86, 10, 72, '2023-11-27', '13:00:00', 3),
(87, 10, 72, '2023-11-27', '14:00:00', 3),
(88, 10, 72, '2023-11-27', '15:00:00', 3),
(89, 10, 72, '2023-11-27', '16:00:00', 3),
(90, 11, 72, '2023-11-27', '17:00:00', 3),
(91, 11, 72, '2023-11-27', '18:00:00', 3),
(92, 11, 72, '2023-11-27', '19:00:00', 3),
(93, 11, 72, '2023-11-27', '20:00:00', 3),
(94, 12, 72, '2023-11-27', '21:00:00', 3),
(95, 12, 72, '2023-11-27', '22:00:00', 3),
(96, 12, 72, '2023-11-27', '23:00:00', 3),
(97, 9, 73, '2023-11-27', '09:00:00', 3),
(98, 9, 73, '2023-11-29', '10:00:00', 2),
(99, 9, 73, '2023-11-27', '11:00:00', 3),
(100, 9, 73, '2023-11-27', '12:00:00', 3),
(101, 10, 73, '2023-11-27', '13:00:00', 3),
(102, 10, 73, '2023-11-27', '14:00:00', 3),
(103, 10, 73, '2023-11-27', '15:00:00', 3),
(104, 10, 73, '2023-11-27', '16:00:00', 3),
(105, 11, 73, '2023-11-27', '17:00:00', 3),
(106, 11, 73, '2023-11-27', '18:00:00', 3),
(107, 11, 73, '2023-11-27', '19:00:00', 3),
(108, 11, 73, '2023-11-27', '20:00:00', 3),
(109, 12, 73, '2023-11-27', '21:00:00', 3),
(110, 12, 73, '2023-11-27', '22:00:00', 3),
(111, 12, 73, '2023-11-27', '23:00:00', 3),
(112, 9, 74, '2023-11-27', '09:00:00', 3),
(113, 9, 74, '2023-11-29', '10:00:00', 2),
(114, 9, 74, '2023-11-27', '11:00:00', 3),
(115, 9, 74, '2023-11-27', '12:00:00', 3),
(116, 10, 74, '2023-11-27', '13:00:00', 3),
(117, 10, 74, '2023-11-27', '14:00:00', 3),
(118, 10, 74, '2023-11-27', '15:00:00', 3),
(119, 10, 74, '2023-11-27', '16:00:00', 3),
(120, 11, 74, '2023-11-27', '17:00:00', 3),
(121, 11, 74, '2023-11-27', '18:00:00', 3),
(122, 11, 74, '2023-11-27', '19:00:00', 3),
(123, 11, 74, '2023-11-27', '20:00:00', 3),
(124, 12, 74, '2023-11-27', '21:00:00', 3),
(125, 12, 74, '2023-11-27', '22:00:00', 3),
(126, 12, 74, '2023-11-27', '23:00:00', 3),
(127, 9, 76, '2023-11-27', '09:00:00', 3),
(128, 9, 76, '2023-11-29', '10:00:00', 2),
(129, 9, 76, '2023-11-27', '11:00:00', 3),
(130, 9, 76, '2023-11-27', '12:00:00', 3),
(131, 10, 76, '2023-11-27', '13:00:00', 3),
(132, 10, 76, '2023-11-27', '14:00:00', 3),
(133, 10, 76, '2023-11-27', '15:00:00', 3),
(134, 10, 76, '2023-11-27', '16:00:00', 3),
(135, 11, 76, '2023-11-27', '17:00:00', 3),
(136, 11, 76, '2023-11-27', '18:00:00', 3),
(137, 11, 76, '2023-11-27', '19:00:00', 3),
(138, 11, 76, '2023-11-27', '20:00:00', 3),
(139, 12, 76, '2023-11-27', '21:00:00', 3),
(140, 12, 76, '2023-11-27', '22:00:00', 3),
(141, 12, 76, '2023-11-27', '23:00:00', 3),
(142, 9, 77, '2023-11-27', '09:00:00', 3),
(143, 9, 77, '2023-11-29', '10:00:00', 2),
(144, 9, 77, '2023-11-27', '11:00:00', 3),
(145, 9, 77, '2023-11-27', '12:00:00', 3),
(146, 10, 77, '2023-11-27', '13:00:00', 3),
(147, 10, 77, '2023-11-27', '14:00:00', 3),
(148, 10, 77, '2023-11-27', '15:00:00', 3),
(149, 10, 77, '2023-11-27', '16:00:00', 3),
(150, 11, 77, '2023-11-27', '17:00:00', 3),
(151, 11, 77, '2023-11-27', '18:00:00', 3),
(152, 11, 77, '2023-11-27', '19:00:00', 3),
(153, 11, 77, '2023-11-27', '20:00:00', 3),
(154, 12, 77, '2023-11-27', '21:00:00', 3),
(155, 12, 77, '2023-11-27', '22:00:00', 3),
(156, 12, 77, '2023-11-27', '23:00:00', 3),
(157, 9, 78, '2023-11-27', '09:00:00', 3),
(158, 9, 78, '2023-11-29', '10:00:00', 2),
(159, 9, 78, '2023-11-27', '11:00:00', 3),
(160, 9, 78, '2023-11-27', '12:00:00', 3),
(161, 10, 78, '2023-11-27', '13:00:00', 3),
(162, 10, 78, '2023-11-27', '14:00:00', 3),
(163, 10, 78, '2023-11-27', '15:00:00', 3),
(164, 10, 78, '2023-11-27', '16:00:00', 3),
(165, 11, 78, '2023-11-27', '17:00:00', 3),
(166, 11, 78, '2023-11-27', '18:00:00', 3),
(167, 11, 78, '2023-11-27', '19:00:00', 3),
(168, 11, 78, '2023-11-27', '20:00:00', 3),
(169, 12, 78, '2023-11-27', '21:00:00', 3),
(170, 12, 78, '2023-11-27', '22:00:00', 3),
(171, 12, 78, '2023-11-27', '23:00:00', 3),
(172, 9, 80, '2023-11-27', '09:00:00', 3),
(173, 9, 80, '2023-11-29', '10:00:00', 2),
(174, 9, 80, '2023-11-27', '11:00:00', 3),
(175, 9, 80, '2023-11-27', '12:00:00', 3),
(176, 10, 80, '2023-11-27', '13:00:00', 3),
(177, 10, 80, '2023-11-27', '14:00:00', 3),
(178, 10, 80, '2023-11-27', '15:00:00', 3),
(179, 10, 80, '2023-11-27', '16:00:00', 3),
(180, 11, 80, '2023-11-27', '17:00:00', 3),
(181, 11, 80, '2023-11-27', '18:00:00', 3),
(182, 11, 80, '2023-11-27', '19:00:00', 3),
(183, 11, 80, '2023-11-27', '20:00:00', 3),
(184, 12, 80, '2023-11-27', '21:00:00', 3),
(185, 12, 80, '2023-11-27', '22:00:00', 3),
(186, 12, 80, '2023-11-27', '23:00:00', 3),
(187, 9, 85, '2023-11-27', '09:00:00', 3),
(188, 9, 85, '2023-11-29', '10:00:00', 2),
(189, 9, 85, '2023-11-27', '11:00:00', 3),
(190, 9, 85, '2023-11-27', '12:00:00', 3),
(191, 10, 85, '2023-11-27', '13:00:00', 3),
(192, 10, 85, '2023-11-27', '14:00:00', 3),
(193, 10, 85, '2023-11-27', '15:00:00', 3),
(194, 10, 85, '2023-11-27', '16:00:00', 3),
(195, 11, 85, '2023-11-27', '17:00:00', 3),
(196, 11, 85, '2023-11-27', '18:00:00', 3),
(197, 11, 85, '2023-11-27', '19:00:00', 3),
(198, 11, 85, '2023-11-27', '20:00:00', 3),
(199, 12, 85, '2023-11-27', '21:00:00', 3),
(200, 12, 85, '2023-11-27', '22:00:00', 3),
(201, 12, 85, '2023-11-27', '23:00:00', 3),
(202, 9, 81, '2023-11-27', '09:00:00', 3),
(203, 9, 81, '2023-11-29', '10:00:00', 2),
(204, 9, 81, '2023-11-27', '11:00:00', 3),
(205, 9, 81, '2023-11-27', '12:00:00', 3),
(206, 10, 81, '2023-11-27', '13:00:00', 3),
(207, 10, 81, '2023-11-27', '14:00:00', 3),
(208, 10, 81, '2023-11-27', '15:00:00', 3),
(209, 10, 81, '2023-11-27', '16:00:00', 3),
(210, 11, 81, '2023-11-27', '17:00:00', 3),
(211, 11, 81, '2023-11-27', '18:00:00', 3),
(212, 11, 81, '2023-11-27', '19:00:00', 3),
(213, 11, 81, '2023-11-27', '20:00:00', 3),
(214, 12, 81, '2023-11-27', '21:00:00', 3),
(215, 12, 81, '2023-11-27', '22:00:00', 3),
(216, 12, 81, '2023-11-27', '23:00:00', 3),
(217, 9, 82, '2023-11-27', '09:00:00', 3),
(218, 9, 82, '2023-11-29', '10:00:00', 2),
(219, 9, 82, '2023-11-27', '11:00:00', 3),
(220, 9, 82, '2023-11-27', '12:00:00', 3),
(221, 10, 82, '2023-11-27', '13:00:00', 3),
(222, 10, 82, '2023-11-27', '14:00:00', 3),
(223, 10, 82, '2023-11-27', '15:00:00', 3),
(224, 10, 82, '2023-11-27', '16:00:00', 3),
(225, 11, 82, '2023-11-27', '17:00:00', 3),
(226, 11, 82, '2023-11-27', '18:00:00', 3),
(227, 11, 82, '2023-11-27', '19:00:00', 3),
(228, 11, 82, '2023-11-27', '20:00:00', 3),
(229, 12, 82, '2023-11-27', '21:00:00', 3),
(230, 12, 82, '2023-11-27', '22:00:00', 3),
(231, 12, 82, '2023-11-27', '23:00:00', 3),
(232, 9, 83, '2023-11-27', '09:00:00', 3),
(233, 9, 83, '2023-11-29', '10:00:00', 2),
(234, 9, 83, '2023-11-27', '11:00:00', 3),
(235, 9, 83, '2023-11-27', '12:00:00', 3),
(236, 10, 83, '2023-11-27', '13:00:00', 3),
(237, 10, 83, '2023-11-27', '14:00:00', 3),
(238, 10, 83, '2023-11-27', '15:00:00', 3),
(239, 10, 83, '2023-11-27', '16:00:00', 3),
(240, 11, 83, '2023-11-27', '17:00:00', 3),
(241, 11, 83, '2023-11-27', '18:00:00', 3),
(242, 11, 83, '2023-11-27', '19:00:00', 3),
(243, 11, 83, '2023-11-27', '20:00:00', 3),
(244, 12, 83, '2023-11-27', '21:00:00', 3),
(245, 12, 83, '2023-11-27', '22:00:00', 3),
(246, 12, 83, '2023-11-27', '23:00:00', 3),
(247, 9, 84, '2023-11-27', '09:00:00', 3),
(248, 9, 84, '2023-11-29', '10:00:00', 2),
(249, 9, 84, '2023-11-27', '11:00:00', 3),
(250, 9, 84, '2023-11-27', '12:00:00', 3),
(251, 10, 84, '2023-11-27', '13:00:00', 3),
(252, 10, 84, '2023-11-27', '14:00:00', 3),
(253, 10, 84, '2023-11-27', '15:00:00', 3),
(254, 10, 84, '2023-11-27', '16:00:00', 3),
(255, 11, 84, '2023-11-27', '17:00:00', 3),
(256, 11, 84, '2023-11-27', '18:00:00', 3),
(257, 11, 84, '2023-11-27', '19:00:00', 3),
(258, 11, 84, '2023-11-27', '20:00:00', 3),
(259, 12, 84, '2023-11-27', '21:00:00', 3),
(260, 12, 84, '2023-11-27', '22:00:00', 3),
(261, 12, 84, '2023-11-27', '23:00:00', 3),
(262, 9, 87, '2023-11-27', '09:00:00', 3),
(263, 9, 87, '2023-11-29', '10:00:00', 2),
(264, 9, 87, '2023-11-27', '11:00:00', 3),
(265, 9, 87, '2023-11-27', '12:00:00', 3),
(266, 10, 87, '2023-11-27', '13:00:00', 3),
(267, 10, 87, '2023-11-27', '14:00:00', 3),
(268, 10, 87, '2023-11-27', '15:00:00', 3),
(269, 10, 87, '2023-11-27', '16:00:00', 3),
(270, 11, 87, '2023-11-27', '17:00:00', 3),
(271, 11, 87, '2023-11-27', '18:00:00', 3),
(272, 11, 87, '2023-11-27', '19:00:00', 3),
(273, 11, 87, '2023-11-27', '20:00:00', 3),
(274, 12, 87, '2023-11-27', '21:00:00', 3),
(275, 12, 87, '2023-11-27', '22:00:00', 3),
(276, 12, 87, '2023-11-27', '23:00:00', 3),
(277, 9, 88, '2023-11-27', '09:00:00', 3),
(278, 9, 88, '2023-11-29', '10:00:00', 2),
(279, 9, 88, '2023-11-27', '11:00:00', 3),
(280, 9, 88, '2023-11-27', '12:00:00', 3),
(281, 10, 88, '2023-11-27', '13:00:00', 3),
(282, 10, 88, '2023-11-27', '14:00:00', 3),
(283, 10, 88, '2023-11-27', '15:00:00', 3),
(284, 10, 88, '2023-11-27', '16:00:00', 3),
(285, 11, 88, '2023-11-27', '17:00:00', 3),
(286, 11, 88, '2023-11-27', '18:00:00', 3),
(287, 11, 88, '2023-11-27', '19:00:00', 3),
(288, 11, 88, '2023-11-27', '20:00:00', 3),
(289, 12, 88, '2023-11-27', '21:00:00', 3),
(290, 12, 88, '2023-11-27', '22:00:00', 3),
(291, 12, 88, '2023-11-27', '23:00:00', 3),
(292, 9, 89, '2023-11-27', '09:00:00', 3),
(293, 9, 89, '2023-11-29', '10:00:00', 2),
(294, 9, 89, '2023-11-27', '11:00:00', 3),
(295, 9, 89, '2023-11-27', '12:00:00', 3),
(296, 10, 89, '2023-11-27', '13:00:00', 3),
(297, 10, 89, '2023-11-27', '14:00:00', 3),
(298, 10, 89, '2023-11-27', '15:00:00', 3),
(299, 10, 89, '2023-11-27', '16:00:00', 3),
(300, 11, 89, '2023-11-27', '17:00:00', 3),
(301, 11, 89, '2023-11-27', '18:00:00', 3),
(302, 11, 89, '2023-11-27', '19:00:00', 3),
(303, 11, 89, '2023-11-27', '20:00:00', 3),
(304, 12, 89, '2023-11-27', '21:00:00', 3),
(305, 12, 89, '2023-11-27', '22:00:00', 3),
(306, 12, 89, '2023-11-27', '23:00:00', 3),
(307, 9, 90, '2023-11-27', '09:00:00', 3),
(308, 9, 90, '2023-11-29', '10:00:00', 2),
(309, 9, 90, '2023-11-27', '11:00:00', 3),
(310, 9, 90, '2023-11-27', '12:00:00', 3),
(311, 10, 90, '2023-11-27', '13:00:00', 3),
(312, 10, 90, '2023-11-27', '14:00:00', 3),
(313, 10, 90, '2023-11-27', '15:00:00', 3),
(314, 10, 90, '2023-11-27', '16:00:00', 3),
(315, 11, 90, '2023-11-27', '17:00:00', 3),
(316, 11, 90, '2023-11-27', '18:00:00', 3),
(317, 11, 90, '2023-11-27', '19:00:00', 3),
(318, 11, 90, '2023-11-27', '20:00:00', 3),
(319, 12, 90, '2023-11-27', '21:00:00', 3),
(320, 12, 90, '2023-11-27', '22:00:00', 3),
(321, 12, 90, '2023-11-27', '23:00:00', 3),
(322, 9, 92, '2023-11-27', '09:00:00', 3),
(323, 9, 92, '2023-11-29', '10:00:00', 2),
(324, 9, 92, '2023-11-27', '11:00:00', 3),
(325, 9, 92, '2023-11-27', '12:00:00', 3),
(326, 10, 92, '2023-11-27', '13:00:00', 3),
(327, 10, 92, '2023-11-27', '14:00:00', 3),
(328, 10, 92, '2023-11-27', '15:00:00', 3),
(329, 10, 92, '2023-11-27', '16:00:00', 3),
(330, 11, 92, '2023-11-27', '17:00:00', 3),
(331, 11, 92, '2023-11-27', '18:00:00', 3),
(332, 11, 92, '2023-11-27', '19:00:00', 3),
(333, 11, 92, '2023-11-27', '20:00:00', 3),
(334, 12, 92, '2023-11-27', '21:00:00', 3),
(335, 12, 92, '2023-11-27', '22:00:00', 3),
(336, 12, 92, '2023-11-27', '23:00:00', 3),
(337, 9, 93, '2023-11-27', '09:00:00', 3),
(338, 9, 93, '2023-11-29', '10:00:00', 2),
(339, 9, 93, '2023-11-27', '11:00:00', 3),
(340, 9, 93, '2023-11-27', '12:00:00', 3),
(341, 10, 93, '2023-11-27', '13:00:00', 3),
(342, 10, 93, '2023-11-27', '14:00:00', 3),
(343, 10, 93, '2023-11-27', '15:00:00', 3),
(344, 10, 93, '2023-11-27', '16:00:00', 3),
(345, 11, 93, '2023-11-27', '17:00:00', 3),
(346, 11, 93, '2023-11-27', '18:00:00', 3),
(347, 11, 93, '2023-11-27', '19:00:00', 3),
(348, 11, 93, '2023-11-27', '20:00:00', 3),
(349, 12, 93, '2023-11-27', '21:00:00', 3),
(350, 12, 93, '2023-11-27', '22:00:00', 3),
(351, 12, 93, '2023-11-27', '23:00:00', 3),
(352, 9, 94, '2023-11-27', '09:00:00', 3),
(353, 9, 94, '2023-11-29', '10:00:00', 2),
(354, 9, 94, '2023-11-27', '11:00:00', 3),
(355, 9, 94, '2023-11-27', '12:00:00', 3),
(356, 10, 94, '2023-11-27', '13:00:00', 3),
(357, 10, 94, '2023-11-27', '14:00:00', 3),
(358, 10, 94, '2023-11-27', '15:00:00', 3),
(359, 10, 94, '2023-11-27', '16:00:00', 3),
(360, 11, 94, '2023-11-27', '17:00:00', 3),
(361, 11, 94, '2023-11-27', '18:00:00', 3),
(362, 11, 94, '2023-11-27', '19:00:00', 3),
(363, 11, 94, '2023-11-27', '20:00:00', 3),
(364, 12, 94, '2023-11-27', '21:00:00', 3),
(365, 12, 94, '2023-11-27', '22:00:00', 3),
(366, 12, 94, '2023-11-27', '23:00:00', 3),
(367, 9, 95, '2023-11-27', '09:00:00', 3),
(368, 9, 95, '2023-11-29', '10:00:00', 2),
(369, 9, 95, '2023-11-27', '11:00:00', 3),
(370, 9, 95, '2023-11-27', '12:00:00', 3),
(371, 10, 95, '2023-11-27', '13:00:00', 3),
(372, 10, 95, '2023-11-27', '14:00:00', 3),
(373, 10, 95, '2023-11-27', '15:00:00', 3),
(374, 10, 95, '2023-11-27', '16:00:00', 3),
(375, 11, 95, '2023-11-27', '17:00:00', 3),
(376, 11, 95, '2023-11-27', '18:00:00', 3),
(377, 11, 95, '2023-11-27', '19:00:00', 3),
(378, 11, 95, '2023-11-27', '20:00:00', 3),
(379, 12, 95, '2023-11-27', '21:00:00', 3),
(380, 12, 95, '2023-11-27', '22:00:00', 3),
(381, 12, 95, '2023-11-27', '23:00:00', 3),
(382, 9, 97, '2023-11-27', '09:00:00', 3),
(383, 9, 97, '2023-11-29', '10:00:00', 2),
(384, 9, 97, '2023-11-27', '11:00:00', 3),
(385, 9, 97, '2023-11-27', '12:00:00', 3),
(386, 10, 97, '2023-11-27', '13:00:00', 3),
(387, 10, 97, '2023-11-27', '14:00:00', 3),
(388, 10, 97, '2023-11-27', '15:00:00', 3),
(389, 10, 97, '2023-11-27', '16:00:00', 3),
(390, 11, 97, '2023-11-27', '17:00:00', 3),
(391, 11, 97, '2023-11-27', '18:00:00', 3),
(392, 11, 97, '2023-11-27', '19:00:00', 3),
(393, 11, 97, '2023-11-27', '20:00:00', 3),
(394, 12, 97, '2023-11-27', '21:00:00', 3),
(395, 12, 97, '2023-11-27', '22:00:00', 3),
(396, 12, 97, '2023-11-27', '23:00:00', 3),
(397, 9, 98, '2023-11-27', '09:00:00', 3),
(398, 9, 98, '2023-11-29', '10:00:00', 2),
(399, 9, 98, '2023-11-27', '11:00:00', 3),
(400, 9, 98, '2023-11-27', '12:00:00', 3),
(401, 10, 98, '2023-11-27', '13:00:00', 3),
(402, 10, 98, '2023-11-27', '14:00:00', 3),
(403, 10, 98, '2023-11-27', '15:00:00', 3),
(404, 10, 98, '2023-11-27', '16:00:00', 3),
(405, 11, 98, '2023-11-27', '17:00:00', 3),
(406, 11, 98, '2023-11-27', '18:00:00', 3),
(407, 11, 98, '2023-11-27', '19:00:00', 3),
(408, 11, 98, '2023-11-27', '20:00:00', 3),
(409, 12, 98, '2023-11-27', '21:00:00', 3),
(410, 12, 98, '2023-11-27', '22:00:00', 3),
(411, 12, 98, '2023-11-27', '23:00:00', 3),
(412, 9, 99, '2023-11-27', '09:00:00', 3),
(413, 9, 99, '2023-11-29', '10:00:00', 2),
(414, 9, 99, '2023-11-27', '11:00:00', 3),
(415, 9, 99, '2023-11-27', '12:00:00', 3),
(416, 10, 99, '2023-11-27', '13:00:00', 3),
(417, 10, 99, '2023-11-27', '14:00:00', 3),
(418, 10, 99, '2023-11-27', '15:00:00', 3),
(419, 10, 99, '2023-11-27', '16:00:00', 3),
(420, 11, 99, '2023-11-27', '17:00:00', 3),
(421, 11, 99, '2023-11-27', '18:00:00', 3),
(422, 11, 99, '2023-11-27', '19:00:00', 3),
(423, 11, 99, '2023-11-27', '20:00:00', 3),
(424, 12, 99, '2023-11-27', '21:00:00', 3),
(425, 12, 99, '2023-11-27', '22:00:00', 3),
(426, 12, 99, '2023-11-27', '23:00:00', 3),
(427, 9, 100, '2023-11-27', '09:00:00', 3),
(428, 9, 100, '2023-11-29', '10:00:00', 2),
(429, 9, 100, '2023-11-27', '11:00:00', 3),
(430, 9, 100, '2023-11-27', '12:00:00', 3),
(431, 10, 100, '2023-11-27', '13:00:00', 3),
(432, 10, 100, '2023-11-27', '14:00:00', 3),
(433, 10, 100, '2023-11-27', '15:00:00', 3),
(434, 10, 100, '2023-11-27', '16:00:00', 3),
(435, 11, 100, '2023-11-27', '17:00:00', 3),
(436, 11, 100, '2023-11-27', '18:00:00', 3),
(437, 11, 100, '2023-11-27', '19:00:00', 3),
(438, 11, 100, '2023-11-27', '20:00:00', 3),
(439, 12, 100, '2023-11-27', '21:00:00', 3),
(440, 12, 100, '2023-11-27', '22:00:00', 3),
(441, 12, 100, '2023-11-27', '23:00:00', 3),
(442, 9, 102, '2023-11-27', '09:00:00', 3),
(443, 9, 102, '2023-11-29', '10:00:00', 2),
(444, 9, 102, '2023-11-27', '11:00:00', 3),
(445, 9, 102, '2023-11-27', '12:00:00', 3),
(446, 10, 102, '2023-11-27', '13:00:00', 3),
(447, 10, 102, '2023-11-27', '14:00:00', 3),
(448, 10, 102, '2023-11-27', '15:00:00', 3),
(449, 10, 102, '2023-11-27', '16:00:00', 3),
(450, 11, 102, '2023-11-27', '17:00:00', 3),
(451, 11, 102, '2023-11-27', '18:00:00', 3),
(452, 11, 102, '2023-11-27', '19:00:00', 3),
(453, 11, 102, '2023-11-27', '20:00:00', 3),
(454, 12, 102, '2023-11-27', '21:00:00', 3),
(455, 12, 102, '2023-11-27', '22:00:00', 3),
(456, 12, 102, '2023-11-27', '23:00:00', 3),
(457, 9, 103, '2023-11-27', '09:00:00', 3),
(458, 9, 103, '2023-11-29', '10:00:00', 2),
(459, 9, 103, '2023-11-27', '11:00:00', 3),
(460, 9, 103, '2023-11-27', '12:00:00', 3),
(461, 10, 103, '2023-11-27', '13:00:00', 3),
(462, 10, 103, '2023-11-27', '14:00:00', 3),
(463, 10, 103, '2023-11-27', '15:00:00', 3),
(464, 10, 103, '2023-11-27', '16:00:00', 3),
(465, 11, 103, '2023-11-27', '17:00:00', 3),
(466, 11, 103, '2023-11-27', '18:00:00', 3),
(467, 11, 103, '2023-11-27', '19:00:00', 3),
(468, 11, 103, '2023-11-27', '20:00:00', 3),
(469, 12, 103, '2023-11-27', '21:00:00', 3),
(470, 12, 103, '2023-11-27', '22:00:00', 3),
(471, 12, 103, '2023-11-27', '23:00:00', 3),
(472, 9, 104, '2023-11-27', '09:00:00', 3),
(473, 9, 104, '2023-11-29', '10:00:00', 2),
(474, 9, 104, '2023-11-27', '11:00:00', 3),
(475, 9, 104, '2023-11-27', '12:00:00', 3),
(476, 10, 104, '2023-11-27', '13:00:00', 3),
(477, 10, 104, '2023-11-27', '14:00:00', 3),
(478, 10, 104, '2023-11-27', '15:00:00', 3),
(479, 10, 104, '2023-11-27', '16:00:00', 3),
(480, 11, 104, '2023-11-27', '17:00:00', 3),
(481, 11, 104, '2023-11-27', '18:00:00', 3),
(482, 11, 104, '2023-11-27', '19:00:00', 3),
(483, 11, 104, '2023-11-27', '20:00:00', 3),
(484, 12, 104, '2023-11-27', '21:00:00', 3),
(485, 12, 104, '2023-11-27', '22:00:00', 3),
(486, 12, 104, '2023-11-27', '23:00:00', 3),
(487, 9, 105, '2023-11-27', '09:00:00', 3),
(488, 9, 105, '2023-11-29', '10:00:00', 2),
(489, 9, 105, '2023-11-27', '11:00:00', 3),
(490, 9, 105, '2023-11-27', '12:00:00', 3),
(491, 10, 105, '2023-11-27', '13:00:00', 3),
(492, 10, 105, '2023-11-27', '14:00:00', 3),
(493, 10, 105, '2023-11-27', '15:00:00', 3),
(494, 10, 105, '2023-11-27', '16:00:00', 3),
(495, 11, 105, '2023-11-27', '17:00:00', 3),
(496, 11, 105, '2023-11-27', '18:00:00', 3),
(497, 11, 105, '2023-11-27', '19:00:00', 3),
(498, 11, 105, '2023-11-27', '20:00:00', 3),
(499, 12, 105, '2023-11-27', '21:00:00', 3),
(500, 12, 105, '2023-11-27', '22:00:00', 3),
(501, 12, 105, '2023-11-27', '23:00:00', 3),
(502, 9, 107, '2023-11-27', '09:00:00', 3),
(503, 9, 107, '2023-11-29', '10:00:00', 2),
(504, 9, 107, '2023-11-27', '11:00:00', 3),
(505, 9, 107, '2023-11-27', '12:00:00', 3),
(506, 10, 107, '2023-11-27', '13:00:00', 3),
(507, 10, 107, '2023-11-27', '14:00:00', 3),
(508, 10, 107, '2023-11-27', '15:00:00', 3),
(509, 10, 107, '2023-11-27', '16:00:00', 3),
(510, 11, 107, '2023-11-27', '17:00:00', 3),
(511, 11, 107, '2023-11-27', '18:00:00', 3),
(512, 11, 107, '2023-11-27', '19:00:00', 3),
(513, 11, 107, '2023-11-27', '20:00:00', 3),
(514, 12, 107, '2023-11-27', '21:00:00', 3),
(515, 12, 107, '2023-11-27', '22:00:00', 3),
(516, 12, 107, '2023-11-27', '23:00:00', 3),
(517, 9, 108, '2023-11-27', '09:00:00', 3),
(518, 9, 108, '2023-11-29', '10:00:00', 2),
(519, 9, 108, '2023-11-27', '11:00:00', 3),
(520, 9, 108, '2023-11-27', '12:00:00', 3),
(521, 10, 108, '2023-11-27', '13:00:00', 3),
(522, 10, 108, '2023-11-27', '14:00:00', 3),
(523, 10, 108, '2023-11-27', '15:00:00', 3),
(524, 10, 108, '2023-11-27', '16:00:00', 3),
(525, 11, 108, '2023-11-27', '17:00:00', 3),
(526, 11, 108, '2023-11-27', '18:00:00', 3),
(527, 11, 108, '2023-11-27', '19:00:00', 3),
(528, 11, 108, '2023-11-27', '20:00:00', 3),
(529, 12, 108, '2023-11-27', '21:00:00', 3),
(530, 12, 108, '2023-11-27', '22:00:00', 3),
(531, 12, 108, '2023-11-27', '23:00:00', 3),
(532, 9, 109, '2023-11-27', '09:00:00', 3),
(533, 9, 109, '2023-11-29', '10:00:00', 2),
(534, 9, 109, '2023-11-27', '11:00:00', 3),
(535, 9, 109, '2023-11-27', '12:00:00', 3),
(536, 10, 109, '2023-11-27', '13:00:00', 3),
(537, 10, 109, '2023-11-27', '14:00:00', 3),
(538, 10, 109, '2023-11-27', '15:00:00', 3),
(539, 10, 109, '2023-11-27', '16:00:00', 3),
(540, 11, 109, '2023-11-27', '17:00:00', 3),
(541, 11, 109, '2023-11-27', '18:00:00', 3),
(542, 11, 109, '2023-11-27', '19:00:00', 3),
(543, 11, 109, '2023-11-27', '20:00:00', 3),
(544, 12, 109, '2023-11-27', '21:00:00', 3),
(545, 12, 109, '2023-11-27', '22:00:00', 3),
(546, 12, 109, '2023-11-27', '23:00:00', 3),
(547, 9, 110, '2023-11-27', '09:00:00', 3),
(548, 9, 110, '2023-11-29', '10:00:00', 2),
(549, 9, 110, '2023-11-27', '11:00:00', 3),
(550, 9, 110, '2023-11-27', '12:00:00', 3),
(551, 10, 110, '2023-11-27', '13:00:00', 3),
(552, 10, 110, '2023-11-27', '14:00:00', 3),
(553, 10, 110, '2023-11-27', '15:00:00', 3),
(554, 10, 110, '2023-11-27', '16:00:00', 3),
(555, 11, 110, '2023-11-27', '17:00:00', 3),
(556, 11, 110, '2023-11-27', '18:00:00', 3),
(557, 11, 110, '2023-11-27', '19:00:00', 3),
(558, 11, 110, '2023-11-27', '20:00:00', 3),
(559, 12, 110, '2023-11-27', '21:00:00', 3),
(560, 12, 110, '2023-11-27', '22:00:00', 3),
(561, 12, 110, '2023-11-27', '23:00:00', 3),
(562, 9, 112, '2023-11-27', '09:00:00', 3),
(563, 9, 112, '2023-11-29', '10:00:00', 2),
(564, 9, 112, '2023-11-27', '11:00:00', 3),
(565, 9, 112, '2023-11-27', '12:00:00', 3),
(566, 10, 112, '2023-11-27', '13:00:00', 3),
(567, 10, 112, '2023-11-27', '14:00:00', 3),
(568, 10, 112, '2023-11-27', '15:00:00', 3),
(569, 10, 112, '2023-11-27', '16:00:00', 3),
(570, 11, 112, '2023-11-27', '17:00:00', 3),
(571, 11, 112, '2023-11-27', '18:00:00', 3),
(572, 11, 112, '2023-11-27', '19:00:00', 3),
(573, 11, 112, '2023-11-27', '20:00:00', 3),
(574, 12, 112, '2023-11-27', '21:00:00', 3),
(575, 12, 112, '2023-11-27', '22:00:00', 3),
(576, 12, 112, '2023-11-27', '23:00:00', 3),
(577, 9, 113, '2023-11-27', '09:00:00', 3),
(578, 9, 113, '2023-11-29', '10:00:00', 2),
(579, 9, 113, '2023-11-27', '11:00:00', 3),
(580, 9, 113, '2023-11-27', '12:00:00', 3),
(581, 10, 113, '2023-11-27', '13:00:00', 3),
(582, 10, 113, '2023-11-27', '14:00:00', 3),
(583, 10, 113, '2023-11-27', '15:00:00', 3),
(584, 10, 113, '2023-11-27', '16:00:00', 3),
(585, 11, 113, '2023-11-27', '17:00:00', 3),
(586, 11, 113, '2023-11-27', '18:00:00', 3),
(587, 11, 113, '2023-11-27', '19:00:00', 3),
(588, 11, 113, '2023-11-27', '20:00:00', 3),
(589, 12, 113, '2023-11-27', '21:00:00', 3),
(590, 12, 113, '2023-11-27', '22:00:00', 3),
(591, 12, 113, '2023-11-27', '23:00:00', 3),
(592, 9, 114, '2023-11-27', '09:00:00', 3),
(593, 9, 114, '2023-11-29', '10:00:00', 2),
(594, 9, 114, '2023-11-27', '11:00:00', 3),
(595, 9, 114, '2023-11-27', '12:00:00', 3),
(596, 10, 114, '2023-11-27', '13:00:00', 3),
(597, 10, 114, '2023-11-27', '14:00:00', 3),
(598, 10, 114, '2023-11-27', '15:00:00', 3),
(599, 10, 114, '2023-11-27', '16:00:00', 3),
(600, 11, 114, '2023-11-27', '17:00:00', 3),
(601, 11, 114, '2023-11-27', '18:00:00', 3),
(602, 11, 114, '2023-11-27', '19:00:00', 3),
(603, 11, 114, '2023-11-27', '20:00:00', 3),
(604, 12, 114, '2023-11-27', '21:00:00', 3),
(605, 12, 114, '2023-11-27', '22:00:00', 3),
(606, 12, 114, '2023-11-27', '23:00:00', 3),
(607, 9, 115, '2023-11-27', '09:00:00', 3),
(608, 9, 115, '2023-11-29', '10:00:00', 2),
(609, 9, 115, '2023-11-27', '11:00:00', 3),
(610, 9, 115, '2023-11-27', '12:00:00', 3),
(611, 10, 115, '2023-11-27', '13:00:00', 3),
(612, 10, 115, '2023-11-27', '14:00:00', 3),
(613, 10, 115, '2023-11-27', '15:00:00', 3),
(614, 10, 115, '2023-11-27', '16:00:00', 3),
(615, 11, 115, '2023-11-27', '17:00:00', 3),
(616, 11, 115, '2023-11-27', '18:00:00', 3),
(617, 11, 115, '2023-11-27', '19:00:00', 3),
(618, 11, 115, '2023-11-27', '20:00:00', 3),
(619, 12, 115, '2023-11-27', '21:00:00', 3),
(620, 12, 115, '2023-11-27', '22:00:00', 3),
(621, 12, 115, '2023-11-27', '23:00:00', 3),
(622, 9, 117, '2023-11-27', '09:00:00', 3),
(623, 9, 117, '2023-11-29', '10:00:00', 2),
(624, 9, 117, '2023-11-27', '11:00:00', 3),
(625, 9, 117, '2023-11-27', '12:00:00', 3),
(626, 10, 117, '2023-11-27', '13:00:00', 3),
(627, 10, 117, '2023-11-27', '14:00:00', 3),
(628, 10, 117, '2023-11-27', '15:00:00', 3),
(629, 10, 117, '2023-11-27', '16:00:00', 3),
(630, 11, 117, '2023-11-27', '17:00:00', 3),
(631, 11, 117, '2023-11-27', '18:00:00', 3),
(632, 11, 117, '2023-11-27', '19:00:00', 3),
(633, 11, 117, '2023-11-27', '20:00:00', 3),
(634, 12, 117, '2023-11-27', '21:00:00', 3),
(635, 12, 117, '2023-11-27', '22:00:00', 3),
(636, 12, 117, '2023-11-27', '23:00:00', 3),
(637, 9, 118, '2023-11-27', '09:00:00', 3),
(638, 9, 118, '2023-11-29', '10:00:00', 2),
(639, 9, 118, '2023-11-27', '11:00:00', 3),
(640, 9, 118, '2023-11-27', '12:00:00', 3),
(641, 10, 118, '2023-11-27', '13:00:00', 3),
(642, 10, 118, '2023-11-27', '14:00:00', 3),
(643, 10, 118, '2023-11-27', '15:00:00', 3),
(644, 10, 118, '2023-11-27', '16:00:00', 3),
(645, 11, 118, '2023-11-27', '17:00:00', 3),
(646, 11, 118, '2023-11-27', '18:00:00', 3),
(647, 11, 118, '2023-11-27', '19:00:00', 3),
(648, 11, 118, '2023-11-27', '20:00:00', 3),
(649, 12, 118, '2023-11-27', '21:00:00', 3),
(650, 12, 118, '2023-11-27', '22:00:00', 3),
(651, 12, 118, '2023-11-27', '23:00:00', 3),
(652, 9, 119, '2023-11-27', '09:00:00', 3),
(653, 9, 119, '2023-11-29', '10:00:00', 2),
(654, 9, 119, '2023-11-27', '11:00:00', 3),
(655, 9, 119, '2023-11-27', '12:00:00', 3),
(656, 10, 119, '2023-11-27', '13:00:00', 3),
(657, 10, 119, '2023-11-27', '14:00:00', 3),
(658, 10, 119, '2023-11-27', '15:00:00', 3),
(659, 10, 119, '2023-11-27', '16:00:00', 3),
(660, 11, 119, '2023-11-27', '17:00:00', 3),
(661, 11, 119, '2023-11-27', '18:00:00', 3),
(662, 11, 119, '2023-11-27', '19:00:00', 3),
(663, 11, 119, '2023-11-27', '20:00:00', 3),
(664, 12, 119, '2023-11-27', '21:00:00', 3),
(665, 12, 119, '2023-11-27', '22:00:00', 3),
(666, 12, 119, '2023-11-27', '23:00:00', 3),
(667, 9, 120, '2023-11-27', '09:00:00', 3),
(668, 9, 120, '2023-11-29', '10:00:00', 2),
(669, 9, 120, '2023-11-27', '11:00:00', 3),
(670, 9, 120, '2023-11-27', '12:00:00', 3),
(671, 10, 120, '2023-11-27', '13:00:00', 3),
(672, 10, 120, '2023-11-27', '14:00:00', 3),
(673, 10, 120, '2023-11-27', '15:00:00', 3),
(674, 10, 120, '2023-11-27', '16:00:00', 3),
(675, 11, 120, '2023-11-27', '17:00:00', 3),
(676, 11, 120, '2023-11-27', '18:00:00', 3),
(677, 11, 120, '2023-11-27', '19:00:00', 3),
(678, 11, 120, '2023-11-27', '20:00:00', 3),
(679, 12, 120, '2023-11-27', '21:00:00', 3),
(680, 12, 120, '2023-11-27', '22:00:00', 3),
(681, 12, 120, '2023-11-27', '23:00:00', 3),
(682, 9, 122, '2023-11-27', '09:00:00', 3),
(683, 9, 122, '2023-11-29', '10:00:00', 2),
(684, 9, 122, '2023-11-27', '11:00:00', 3),
(685, 9, 122, '2023-11-27', '12:00:00', 3),
(686, 10, 122, '2023-11-27', '13:00:00', 3),
(687, 10, 122, '2023-11-27', '14:00:00', 3),
(688, 10, 122, '2023-11-27', '15:00:00', 3),
(689, 10, 122, '2023-11-27', '16:00:00', 3),
(690, 11, 122, '2023-11-27', '17:00:00', 3),
(691, 11, 122, '2023-11-27', '18:00:00', 3),
(692, 11, 122, '2023-11-27', '19:00:00', 3),
(693, 11, 122, '2023-11-27', '20:00:00', 3),
(694, 12, 122, '2023-11-27', '21:00:00', 3),
(695, 12, 122, '2023-11-27', '22:00:00', 3),
(696, 12, 122, '2023-11-27', '23:00:00', 3),
(697, 9, 123, '2023-11-27', '09:00:00', 3),
(698, 9, 123, '2023-11-29', '10:00:00', 2),
(699, 9, 123, '2023-11-27', '11:00:00', 3),
(700, 9, 123, '2023-11-27', '12:00:00', 3),
(701, 10, 123, '2023-11-27', '13:00:00', 3),
(702, 10, 123, '2023-11-27', '14:00:00', 3),
(703, 10, 123, '2023-11-27', '15:00:00', 3),
(704, 10, 123, '2023-11-27', '16:00:00', 3),
(705, 11, 123, '2023-11-27', '17:00:00', 3),
(706, 11, 123, '2023-11-27', '18:00:00', 3),
(707, 11, 123, '2023-11-27', '19:00:00', 3),
(708, 11, 123, '2023-11-27', '20:00:00', 3),
(709, 12, 123, '2023-11-27', '21:00:00', 3),
(710, 12, 123, '2023-11-27', '22:00:00', 3),
(711, 12, 123, '2023-11-27', '23:00:00', 3),
(712, 9, 124, '2023-11-27', '09:00:00', 3),
(713, 9, 124, '2023-11-29', '10:00:00', 2),
(714, 9, 124, '2023-11-27', '11:00:00', 3),
(715, 9, 124, '2023-11-27', '12:00:00', 3),
(716, 10, 124, '2023-11-27', '13:00:00', 3),
(717, 10, 124, '2023-11-27', '14:00:00', 3),
(718, 10, 124, '2023-11-27', '15:00:00', 3),
(719, 10, 124, '2023-11-27', '16:00:00', 3),
(720, 11, 124, '2023-11-27', '17:00:00', 3),
(721, 11, 124, '2023-11-27', '18:00:00', 3),
(722, 11, 124, '2023-11-27', '19:00:00', 3),
(723, 11, 124, '2023-11-27', '20:00:00', 3),
(724, 12, 124, '2023-11-27', '21:00:00', 3),
(725, 12, 124, '2023-11-27', '22:00:00', 3),
(726, 12, 124, '2023-11-27', '23:00:00', 3),
(727, 9, 125, '2023-11-27', '09:00:00', 3),
(728, 9, 125, '2023-11-29', '10:00:00', 2),
(729, 9, 125, '2023-11-27', '11:00:00', 3),
(730, 9, 125, '2023-11-27', '12:00:00', 3),
(731, 10, 125, '2023-11-27', '13:00:00', 3),
(732, 10, 125, '2023-11-27', '14:00:00', 3),
(733, 10, 125, '2023-11-27', '15:00:00', 3),
(734, 10, 125, '2023-11-27', '16:00:00', 3),
(735, 11, 125, '2023-11-27', '17:00:00', 3),
(736, 11, 125, '2023-11-27', '18:00:00', 3),
(737, 11, 125, '2023-11-27', '19:00:00', 3),
(738, 11, 125, '2023-11-27', '20:00:00', 3),
(739, 12, 125, '2023-11-27', '21:00:00', 3),
(740, 12, 125, '2023-11-27', '22:00:00', 3),
(741, 12, 125, '2023-11-27', '23:00:00', 3);

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
  `vnp_BankCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_BankTranNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_CardType` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_OrderInfo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_PayDate` datetime NOT NULL,
  `vnp_ResponseCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_TmnCode` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_TransactionNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_TransactionStatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT '0 là thanh toán thành công còn lại là thất bại',
  `vnp_TxnRef` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `vnp_SecureHash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_Amount`, `vnp_BankCode`, `vnp_BankTranNo`, `vnp_CardType`, `vnp_OrderInfo`, `vnp_PayDate`, `vnp_ResponseCode`, `vnp_TmnCode`, `vnp_TransactionNo`, `vnp_TransactionStatus`, `vnp_TxnRef`, `vnp_SecureHash`) VALUES
(1, '11500000', 'NCB', 'VNP14210349', 'ATM', 'Thanh toán giao dịch : 1114', '2023-11-30 04:44:34', '00', 'I1MTCNW2', '14210349', '00', '1114', 'ddaa9b45f19eb22a49457b8e21583c6135f8fa94bd6072a7aaebda7591fe29956d6270fc269a49808cd5b1be13cddb72e5cca0a93673f388b8f19ece87c8a437'),
(2, '20100000', 'NCB', 'VNP14224524', 'ATM', 'Thanh toán giao dịch : 8882', '2023-12-07 07:34:45', '00', 'I1MTCNW2', '14224524', '00', '8882', '1c655c1b3b9dd0a8843d9f27c1be914ad8920a20f44345c0314f598c866391dc0d10849571e1d67d5ebc4de16a058512da868da98a453cfc42fda292da8f91d2'),
(3, '15800000', 'NCB', 'VNP14224530', 'ATM', 'Thanh toán giao dịch : 2476', '2023-12-07 07:37:56', '00', 'I1MTCNW2', '14224530', '00', '2476', '0c2ab396740cc956055cdbdbe8d56497cdc553cbc626d470cae91fdaa9d1406fa50ebd0f8cc57841e9b391400736e15717e7d2201cf7dd8717da9be7a603a1fc'),
(4, '15800000', 'NCB', 'VNP14224534', 'ATM', 'Thanh toán giao dịch : 7082', '2023-12-07 07:40:23', '00', 'I1MTCNW2', '14224534', '00', '7082', '287ae90d8a5e61986114715a8c11e7489197e72bae99af4ff11277a2ebcb5371f42f9097eab59593ffa6b00da2c045d78bb7375ce0755286617d4c8b65d5e2f5'),
(5, '39500000', 'NCB', 'VNP14224538', 'ATM', 'Thanh toán giao dịch : 7181', '2023-12-07 07:46:20', '00', 'I1MTCNW2', '14224538', '00', '7181', '41cb0d288a8ee72bc1098315d470ff57fd1e1c9b5fdc2e23b1062a660137007837a73228b2d1622ca28fbc3d49b51545533441e98ee6e9880be020a76c1c4190'),
(6, '51600000', 'NCB', 'VNP14226299', 'ATM', 'Thanh toán giao dịch : 6149', '2023-12-07 18:14:43', '00', 'I1MTCNW2', '14226299', '00', '6149', '32916274f9e1b4258a2a647de27300e11e81445c9f7990ceaa628f6f95996baf52b756b99cc04c095ade2782602580ef72a53a6938a12982777fa2fdfe6b8da4'),
(7, '39500000', 'NCB', 'VNP14226837', 'ATM', 'Thanh toán giao dịch : 4273', '2023-12-07 22:00:46', '00', 'I1MTCNW2', '14226837', '00', '4273', '189367174883608a904c69f50b53d0522938acd36db93b704b2d2e29b7404678ff5042d601d64f95cbd35407cae67cd34a96312ff28b4a08a4b746e0b71a01fd'),
(8, '43800000', 'NCB', 'VNP14227140', 'ATM', 'Thanh toán giao dịch : 6048', '2023-12-07 23:45:05', '00', 'I1MTCNW2', '14227140', '00', '6048', 'cc205b39e363988c285a5825857100e4c7aa98662f5a464466c1142949a1417834c813e202800e160b4b02503ae682a7702d4ad736ab3746c2e9b9b1fc41d6d1'),
(9, '15800000', 'NCB', 'VNP14227147', 'ATM', 'Thanh toán giao dịch : 746', '2023-12-07 23:49:48', '00', 'I1MTCNW2', '14227147', '00', '746', '7c2f1138439e9dc5ca4367ff6ff90ecffeb6b4151b063711100c00774a04100d54d46118cded8269c1178471f2c81b9b1d5398a7564b520be946bd151ed7e95c'),
(10, '15800000', 'NCB', 'VNP14227151', 'ATM', 'Thanh toán giao dịch : 6268', '2023-12-07 23:51:18', '00', 'I1MTCNW2', '14227151', '00', '6268', '05385225b29b6e8200e40b454d3e62bda0cf1bde3fe57764eec4d9b01d0708333362553835d9abc2473e4f5deefb0dbd383ed154b718d443b586a56f944d1437'),
(11, '15800000', 'NCB', 'VNP14227153', 'ATM', 'Thanh toán giao dịch : 5105', '2023-12-07 23:52:42', '00', 'I1MTCNW2', '14227153', '00', '5105', '7a8515d0097894766bce29411f6a0bc5987f08d7207c33e7c19076576a3565709760da83e833652895a017ab577917df21b44288bf036956035fd7da9f8fa53c'),
(12, '15800000', 'NCB', 'VNP14227158', 'ATM', 'Thanh toán giao dịch : 4077', '2023-12-07 23:54:31', '00', 'I1MTCNW2', '14227158', '00', '4077', '9181975d87cad28e8615d5883e7e5d8773cd6ec26d2638015a6d22a3720dd53940a84c5b9f04e8a9441816ebdd4dc1a73f7d03fcb5177247f4151917b021fb0a'),
(13, '15800000', 'NCB', 'VNP14227175', 'ATM', 'Thanh toán giao dịch : 6043', '2023-12-08 00:02:19', '00', 'I1MTCNW2', '14227175', '00', '6043', '6cd0bd6be79e52b59558b1f670bfb56cf1d4095ec67cb1c202b48cf9ab1d7cb5a4f6905a3e899ef26271ca6e7fa07d00e5e9c0a6103db82b2488d37512b4798c'),
(14, '15800000', 'NCB', 'VNP14227180', 'ATM', 'Thanh toán giao dịch : 5212', '2023-12-08 00:03:15', '00', 'I1MTCNW2', '14227180', '00', '5212', '0c06e83030086efb090820136d0a9d04adc7d180c24e56aaa4a1d5a5026476f2cfff6fc51cdf5154d74f24f7fde1d7c3e7a9e9a1fed17428d8c15b81127b5d9c'),
(15, '15800000', 'NCB', 'VNP14227206', 'ATM', 'Thanh toán giao dịch : 3136', '2023-12-08 00:15:46', '00', 'I1MTCNW2', '14227206', '00', '3136', '9f901232f1037bc703b6e2d1517aaab61098229f8d6b6524e8c5767cbec89fe86d59ff1725cd4c3ad9922d355a1203dd5d63d797e9a0c36a6fda3d9fc3c44761'),
(16, '15800000', 'NCB', 'VNP14227211', 'ATM', 'Thanh toán giao dịch : 7419', '2023-12-08 00:18:16', '00', 'I1MTCNW2', '14227211', '00', '7419', '4e10cbd189773f675b8005517e04199dfbc2f9048dee4dd51b6171fd183c474a2ae4894955b42266492efd27180c8c0d569d55309841b651fe1d1c1eb8f11d0d'),
(17, '42600000', 'NCB', 'VNP14227223', 'ATM', 'Thanh toán giao dịch : 3566', '2023-12-08 00:23:43', '00', 'I1MTCNW2', '14227223', '00', '3566', '480df640a968634dd26dbc391b9f02a5de9e17ec754fed6d16598b62fac46dca67c84963151e87db4b2ca1296d8f0974831e99ba8cbb0fe351d3c38a70330c37'),
(18, '20100000', 'NCB', 'VNP14227252', 'ATM', 'Thanh toán giao dịch : 1992', '2023-12-08 00:38:22', '00', 'I1MTCNW2', '14227252', '00', '1992', 'f0de43a10be3c98f66269a7854caf8eff17999c0304b29093fda28040445c41c6d608b88d3946555ecb0b3761191d91badfd572a5e5fe7a93a81d6e3e7e61121'),
(19, '20100000', 'NCB', 'VNP14227252', 'ATM', 'Thanh toán giao dịch : 1992', '2023-12-08 00:38:22', '00', 'I1MTCNW2', '14227252', '00', '1992', 'f0de43a10be3c98f66269a7854caf8eff17999c0304b29093fda28040445c41c6d608b88d3946555ecb0b3761191d91badfd572a5e5fe7a93a81d6e3e7e61121'),
(20, '24400000', 'NCB', 'VNP14227360', 'ATM', 'Thanh toán giao dịch : 6896', '2023-12-08 01:53:16', '00', 'I1MTCNW2', '14227360', '00', '6896', '1b1ece932f2087ad09f61b87b22d7dbf0802036b8c9a8cccc4a8c289ee98227be0eee25de255cc8c6c00d7a7411e9d523cd9d1c1f1c825b5a33c2446888f4cca'),
(21, '31600000', 'NCB', 'VNP14227445', 'ATM', 'Thanh toán giao dịch : 805', '2023-12-08 03:39:14', '00', 'I1MTCNW2', '14227445', '00', '805', '293c9e250aad72e948654e1f74c0bd7a358fbc08714628225eef67e817b35b9b46d1135055a50f1b5024e8df7a6c007f6a75071e4e8b0707c62a5a26e99d6d8d'),
(22, '22800000', 'NCB', 'VNP14227503', 'ATM', 'Thanh toán giao dịch : 34', '2023-12-08 05:05:25', '00', 'I1MTCNW2', '14227503', '00', '34', '2955b8d0796559ba2f4c6c22343683949cd1d514d1d00a044954b6b9212e047f9324220a4ca28b4121550fe675bb4df6c5c864cb17e6736b47d107762048ef75'),
(23, '29800000', 'NCB', 'VNP14227516', 'ATM', 'Thanh toán giao dịch : 5307', '2023-12-08 05:20:15', '00', 'I1MTCNW2', '14227516', '00', '5307', 'a7c08483bea856407aea50f38e292265ad18a498eabfb32c659f2c79fc11d461fd36eb0b9aabb83acc0f8e5d1eb3a0f82d946af55250411b888d985f7dc9c925'),
(24, '23700000', 'NCB', 'VNP14229484', 'ATM', 'Thanh toán giao dịch : 6815', '2023-12-08 22:22:08', '00', 'I1MTCNW2', '14229484', '00', '6815', 'b0f3921f050e46176bc3c9487a3cb8141cad204dd8e438476ccf633b07d01c307140bb50b6938d082b9deb75faffa5dc8b97f43844d39c4e958f0efc81600af4'),
(25, '52600000', 'NCB', 'VNP14229647', 'ATM', 'Thanh toán giao dịch : 2994', '2023-12-08 23:56:00', '00', 'I1MTCNW2', '14229647', '00', '2994', '7a42fca572b3b8c5b1af5ec27f119970d2d4df857a3b415557c7bb3e39d996e0b1adcc25049b44936f8ad95819d300c0cade47335ff1d718eca3e3fe91e4a756'),
(26, '51700000', 'NCB', 'VNP14229686', 'ATM', 'Thanh toán giao dịch : 7250', '2023-12-09 00:10:56', '00', 'I1MTCNW2', '14229686', '00', '7250', 'a60a28e426c2ee12a2a397efa8479d412cf1ddc997a85030c7600fe36aa4dc2f6fbd2ad52d7a5dbd7069b0158baaca35fd7c875c89db2a717509520dde7a60f1'),
(27, '30700000', 'NCB', 'VNP14229777', 'ATM', 'Thanh toán giao dịch : 847', '2023-12-09 01:03:46', '00', 'I1MTCNW2', '14229777', '00', '847', 'd423e35714e916710140d7e88d246b3fc289d5bacb84149004b48ef922a1d44e9243c7cf054b11a9f92316f1f6dcc08142e584ddf46717e5810f86e39eeea8c5'),
(28, '75700000', 'NCB', 'VNP14229813', 'ATM', 'Thanh toán giao dịch : 7859', '2023-12-09 01:35:01', '00', 'I1MTCNW2', '14229813', '00', '7859', 'c2930250fd80ba080e04389ffb6e206871ba5f2ec02fa63dbc17b19d023ef1e93b939954a8c2611e6453bef954fb1417dbe840ae24ead10017a391ffb6f3df36'),
(29, '57800000', 'NCB', 'VNP14229849', 'ATM', 'Thanh toán giao dịch : 1834', '2023-12-09 02:13:57', '00', 'I1MTCNW2', '14229849', '00', '1834', 'b3eb4f329dce5725345ad60fb636137b47a4d5f62d4afa439549474080ccb2e445176664714a04a10d02cb01e9c3da44cae59cebbc1ceb3560e057192f68a237');

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
  ADD PRIMARY KEY (`id_combo`);

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
  MODIFY `id_account` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT cho bảng `action`
--
ALTER TABLE `action`
  MODIFY `id_action` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT cho bảng `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id_cinema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `combo`
--
ALTER TABLE `combo`
  MODIFY `id_combo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `country`
--
ALTER TABLE `country`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

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
  MODIFY `id_room` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `seat`
--
ALTER TABLE `seat`
  MODIFY `id_seat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `showtime`
--
ALTER TABLE `showtime`
  MODIFY `id_showtime` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=742;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id_account`) ON DELETE CASCADE ON UPDATE RESTRICT;

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
