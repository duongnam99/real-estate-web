-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 20, 2018 lúc 08:28 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `real_estate_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `pass`) VALUES
(1, 'duongnam', 'tamphuong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(1, 'Dương Minh Nam', 'nam.duongminh99@gmail.com', '964765727', '@@@', 1526570017),
(8, 'Dương Minh Nam', 'nam.duongminh99@gmail.com', '964765727', 'lần 8', 1526571088),
(9, 'Dương Moon', 'moonduongblog@gmail.com', '0964765727', 'test cái nào =))', 1526574181),
(11, 'Dương Moon', 'moonduongblog@gmail.com', '964765727', 'không có lời nhắn part 2 =))', 1526576083),
(12, 'Dương Moon', 'moonduongblog@gmail.com', '0964765727', '', 1526632546);

--
-- Bẫy `contact`
--
DELIMITER $$
CREATE TRIGGER `thêm thời gian` BEFORE INSERT ON `contact` FOR EACH ROW BEGIN
	SET NEW.date = UNIX_TIMESTAMP();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `tenthuoctinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatrithuoctinh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data`
--

INSERT INTO `data` (`id`, `tenthuoctinh`, `giatrithuoctinh`) VALUES
(1, 'slides', '[{\"slide_image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/house0.jpeg\"},{\"slide_image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/house1.jpg\"},{\"slide_image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/house2.jpg\"}]'),
(2, 'landscape', '[{\"landscape_image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/landscape_image\\/pic1.jpg\"},{\"landscape_image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/landscape_image\\/pic0.jpeg\"},{\"landscape_image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/landscape_image\\/pic2.jpeg\"},{\"landscape_image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/landscape_image\\/\"},{\"landscape_image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/landscape_image\\/\"}]'),
(3, 'landscape_text', 'Nằm tọa lạc tại cuối đường A, thuộc quận Hà Đông-Hà Nội, với vị trí đắc địa, khu đô thị Z có cảnh quan thoáng đãng, là không gian sống thích hợp cho cá nhân hay hộ gia đình ở mọi lứa tuổi:'),
(4, 'villa', '[{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/villa_image\\/house5.jpg\",\"text1\":\"D\\u01b0\\u01a1ng Minh Nam\",\"text2\":\"T-bone ground round jowl tenderloin andouille chicken filet mignon turducken shankle. Drumstick picanha chicken pork pork belly pig sirloin kielbasa bacon shoulder buffalo short loin doner chuck turkey. Strip steak t-bone picanha porchetta. Pancetta jowl ground round, fatback tenderloin swine burgdoggen andouille t-bone corned beef chuck turducken sirloin brisket.\"},{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/villa_image\\/house9.jpg\",\"text1\":\"Turkey picanha strip steak frankfurter\",\"text2\":\"ground round jowl tenderloin andouille chicken filet mignon turducken shankle. Drumstick picanha chicken pork pork belly pig sirloin kielbasa bacon shoulder buffalo short loin doner chuck turkey. Strip steak t-bone picanha porchetta. Pancetta jowl ground round, fatback tenderloin swine burgdoggen andouille t-bone corned beef chuck turducken sirloin brisket.\"}]'),
(5, 'apartment', '[{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/apartment_image\\/pic6.jpeg\",\"text1\":\"D\\u01b0\\u01a1ng Minh Nam\",\"text2\":\"Drumstick picanha chicken pork pork belly pig sirloin kielbasa bacon shoulder buffalo short loin doner chuck turkey. Strip steak t-bone picanha porchetta. Pancetta jowl ground round\"},{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/apartment_image\\/pic2.jpeg\",\"text1\":\"D\\u01b0\\u01a1ng Minh Nam\",\"text2\":\"Drumstick picanha chicken pork pork belly pig sirloin kielbasa bacon shoulder buffalo short loin doner chuck turkey. Strip steak t-bone picanha porchetta. Pancetta jowl ground round\"},{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/apartment_image\\/pic11.jpeg\",\"text1\":\"D\\u01b0\\u01a1ng Nam\",\"text2\":\"Drumstick picanha chicken pork pork belly pig sirloin kielbasa bacon shoulder buffalo short loin doner chuck turkey. Strip steak t-bone picanha porchetta. Pancetta jowl ground round\"}]'),
(6, 'price_text1', ' -70m2:  20-22tr/m2. \r\n- 86m2:  19-21tr/m2. \r\n- 112m2: 18-21tr/m2. \r\n- 154m2 (penHouse): 25tr/m2.\r\n'),
(7, 'price_text2', '-150m2: 40-44tr/m2. \r\n- 200m2: 40-44tr/m2. \r\n- 250m2: 38-44tr/m2/m2. '),
(8, 'price_image', '[{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/price_image\\/tk1.jpg\"},{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/price_image\\/tk2.jpg\"},{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/price_image\\/tk3.jpg\"},{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/price_image\\/tk4.jpg\"}]'),
(9, 'aboutus_img_text', '[{\"image\":\"http:\\/\\/localhost\\/RealEstateWeb\\/uploads\\/aboutus_image\\/anhabu.jpeg\",\"text\":\"GIcompany \\u0111\\u00e3 tr\\u00fang th\\u1ea7u v\\u00e0 ho\\u00e0n th\\u00e0nh nhi\\u1ec1u d\\u1ef1 \\u00e1n b\\u1ea5t \\u0111\\u1ed9ng s\\u1ea3n, n\\u1ed5i l\\u00ean nh\\u01b0 m\\u1ed9t c\\u00f4ng ty tr\\u1ebb \\u0111\\u1ea7y ti\\u1ec1m n\\u0103ng t\\u1ea1i Vi\\u1ec7t Nam \"}]');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
