-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 23, 2023 lúc 04:20 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blank`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Account-address`
--

CREATE TABLE `Account-address` (
  `account_address_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `account_address_phonenumber` varchar(10) NOT NULL,
  `account_address_username` varchar(20) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `account_address_content` varchar(50) NOT NULL,
  `account_address_default` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `namePro` varchar(250) NOT NULL,
  `soluongSp` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(300) NOT NULL,
  `payment` tinyint(1) NOT NULL COMMENT '1.COD 2.MOMO',
  `paydate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list`
--

CREATE TABLE `list` (
  `id` int(10) NOT NULL,
  `catename` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `list`
--

INSERT INTO `list` (`id`, `catename`) VALUES
(3, 'Sản phẩm mới'),
(4, 'Quần áo'),
(5, 'Túi xách'),
(6, 'Sale');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order-address`
--

CREATE TABLE `order-address` (
  `order_address_id` int(10) NOT NULL,
  `name-kh` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order-sp`
--

CREATE TABLE `order-sp` (
  `Order_id` int(11) NOT NULL,
  `Payment_id` int(11) NOT NULL,
  `Order_address_id` int(11) NOT NULL,
  `Account_id` int(11) NOT NULL,
  `Order_date` datetime NOT NULL,
  `Status` char(1) NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provinces`
--

CREATE TABLE `provinces` (
  `province_id` int(11) NOT NULL,
  `province_name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `res-user`
--

CREATE TABLE `res-user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `cfpassword` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `res-user`
--

INSERT INTO `res-user` (`id`, `fullname`, `phone`, `email`, `password`, `cfpassword`) VALUES
(37, 'Nguyễn Hữu Lộc', '099999999', '2051150142@gmail.com', '12345678', '12345678'),
(50, 'nguyen huu loc km20a', '0942201037', 'loc123@gmail.com', '12345678', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san-pham`
--

CREATE TABLE `san-pham` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mota` text NOT NULL,
  `price` int(10) DEFAULT 0,
  `img` varchar(250) NOT NULL,
  `iddm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san-pham`
--

INSERT INTO `san-pham` (`id`, `name`, `mota`, `price`, `img`, `iddm`) VALUES
(62, 'ÁO BCOOL', 'Chất liệu: Thun cotton, dập xù dầy dặn.Màu sắc: Beige/Đen/Nâu/Xanh mint/Xanh blue ', 300000, 'bcool.webp', 3),
(64, 'ÁO RABBIT', 'Chất liệu: Thun cotton, dập xù dầy dặn.Màu sắc: Beige/Đen/Nâu/Xanh mint/Xanh blue ', 450000, 'rabbit.webp', 3),
(65, 'Áo 4-PIECE', ' Chất liệu: Thun cotton, dập xù dầy dặn.Màu sắc: Beige/Đen/Nâu/Xanh mint/Xanh blue ', 300000, '4piece.webp', 3),
(66, 'Quần AE', 'THÔNG TIN SẢN PHẨM: - Size S: >1m65, 60kg- Size M: 1m65-1m70, 60kg-65kg - Size L: 1m70-1m75, 65kg-70kg LƯU Ý KHI SỬ DỤNG SẢN PHẨM:- Đồ trắng, đen giặt riêng với các loại đồ màu khác- Ủi và giặt nên lật mặt trái của sản phẩm, không ủi trực tiếp lên hình in/thêu- .', 350000, 'AE-1.webp', 3),
(67, 'Áo ANDY', ' Chất liệu: Thun cotton, dập xù dầy dặn.Màu sắc: Beige/Đen/Nâu/Xanh mint/Xanh blue ', 300000, 'andy2.webp', 3),
(68, 'Áo ARIZONA', 'Chất liệu: Thun cotton, dập xù dầy dặn.Màu sắc: Beige/Đen/Nâu/Xanh mint/Xanh blue ', 450000, 'arizona.webp', 3),
(69, 'Quần SCRO', 'THÔNG TIN SẢN PHẨM: - Size S: >1m65, 60kg- Size M: 1m65-1m70, 60kg-65kg - Size L: 1m70-1m75, 65kg-70kg LƯU Ý KHI SỬ DỤNG SẢN PHẨM:- Đồ trắng, đen giặt riêng với các loại đồ màu khác- Ủi và giặt nên lật mặt trái của sản phẩm, không ủi trực tiếp lên hình in/thêu- .', 300000, 'SCRO-1.webp', 3),
(73, 'Quần FS', 'THÔNG TIN SẢN PHẨM: - Size S: >1m65, 60kg- Size M: 1m65-1m70, 60kg-65kg - Size L: 1m70-1m75, 65kg-70kg LƯU Ý KHI SỬ DỤNG SẢN PHẨM:- Đồ trắng, đen giặt riêng với các loại đồ màu khác- Ủi và giặt nên lật mặt trái của sản phẩm, không ủi trực tiếp lên hình in/thêu- .', 300000, 'FS-1.webp', 3),
(75, 'Áo AURORA', 'Chất liệu: Thun cotton, dập xù dầy dặn.Màu sắc: Beige/Đen/Nâu/Xanh mint/Xanh blue ', 350000, 'aurora.webp', 3),
(76, 'Túi BLAKE', 'Chất liệu: PU LeatherMàu sắc: BlackKích thước: 14x21x6cm—————————CHÍNH SÁCH BẢO HÀNH:- Bảo hành dây kéo 3 tháng miễn phí với điều kiện còn giữ hóa đơn - Sau 3 tháng hoặc không có hóa đơn shop sẽ bảo hành tính phí.CHÍNH SÁCH ĐỔI TRẢ:- Để đảm bảo quyền lợi cho...', 300000, 'blake-1.webp', 5),
(77, 'Túi CROSS', 'Chất liệu: PU LeatherMàu sắc: BlackKích thước: 14x21x6cm—————————CHÍNH SÁCH BẢO HÀNH:- Bảo hành dây kéo 3 tháng miễn phí với điều kiện còn giữ hóa đơn - Sau 3 tháng hoặc không có hóa đơn shop sẽ bảo hành tính phí.CHÍNH SÁCH ĐỔI TRẢ:- Để đảm bảo quyền lợi cho...', 450000, 'cross1.webp', 5),
(78, 'Tui CHAIN', 'Chất liệu: PU LeatherMàu sắc: BlackKích thước: 14x21x6cm—————————CHÍNH SÁCH BẢO HÀNH:- Bảo hành dây kéo 3 tháng miễn phí với điều kiện còn giữ hóa đơn - Sau 3 tháng hoặc không có hóa đơn shop sẽ bảo hành tính phí.CHÍNH SÁCH ĐỔI TRẢ:- Để đảm bảo quyền lợi cho...', 250000, 'chain1.webp', 5),
(79, 'Túi DENIM', 'Chất liệu: PU LeatherMàu sắc: BlackKích thước: 14x21x6cm—————————CHÍNH SÁCH BẢO HÀNH:- Bảo hành dây kéo 3 tháng miễn phí với điều kiện còn giữ hóa đơn - Sau 3 tháng hoặc không có hóa đơn shop sẽ bảo hành tính phí.CHÍNH SÁCH ĐỔI TRẢ:- Để đảm bảo quyền lợi cho...', 350000, 'denim1.jpeg', 5),
(80, 'Áo ARIZONA', 'Chất liệu: Thun cotton, dập xù dầy dặn.Màu sắc: Beige/Đen/Nâu/Xanh mint/Xanh blue ', 300000, 'arizona.webp', 6),
(81, 'Quần SCRO', 'Chất liệu: Làm từ da pu dập xù dầy dặn.Màu sắc: Beige/Đen/Nâu/Xanh mint/Xanh blue ', 250000, 'SCRO-1.webp', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wards`
--

CREATE TABLE `wards` (
  `ward_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `ward_name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `Account-address`
--
ALTER TABLE `Account-address`
  ADD PRIMARY KEY (`account_address_id`),
  ADD KEY `lk_accadd_ward` (`ward_id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `province_id` (`province_id`),
  ADD KEY `district_id` (`district_id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_bill` (`idbill`),
  ADD KEY `cart_user` (`iduser`),
  ADD KEY `cart_pro` (`idpro`);

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`),
  ADD KEY `lk_dis_provin` (`province_id`);

--
-- Chỉ mục cho bảng `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order-address`
--
ALTER TABLE `order-address`
  ADD PRIMARY KEY (`order_address_id`);

--
-- Chỉ mục cho bảng `order-sp`
--
ALTER TABLE `order-sp`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `lk_ordsp_ordadd` (`Order_address_id`),
  ADD KEY `Account_id` (`Account_id`);

--
-- Chỉ mục cho bảng `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`province_id`);

--
-- Chỉ mục cho bảng `res-user`
--
ALTER TABLE `res-user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san-pham`
--
ALTER TABLE `san-pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sp_list` (`iddm`);

--
-- Chỉ mục cho bảng `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`ward_id`),
  ADD KEY `lk_ward_district` (`district_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `Account-address`
--
ALTER TABLE `Account-address`
  MODIFY `account_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `list`
--
ALTER TABLE `list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `order-address`
--
ALTER TABLE `order-address`
  MODIFY `order_address_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order-sp`
--
ALTER TABLE `order-sp`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `provinces`
--
ALTER TABLE `provinces`
  MODIFY `province_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `res-user`
--
ALTER TABLE `res-user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `san-pham`
--
ALTER TABLE `san-pham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `wards`
--
ALTER TABLE `wards`
  MODIFY `ward_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `Account-address`
--
ALTER TABLE `Account-address`
  ADD CONSTRAINT `account-address_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `res-user` (`id`),
  ADD CONSTRAINT `account-address_ibfk_2` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`province_id`),
  ADD CONSTRAINT `account-address_ibfk_3` FOREIGN KEY (`district_id`) REFERENCES `districts` (`district_id`),
  ADD CONSTRAINT `lk_accadd_ward` FOREIGN KEY (`ward_id`) REFERENCES `wards` (`ward_id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_pro` FOREIGN KEY (`idpro`) REFERENCES `san-pham` (`id`);

--
-- Các ràng buộc cho bảng `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `lk_dis_provin` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`province_id`);

--
-- Các ràng buộc cho bảng `order-sp`
--
ALTER TABLE `order-sp`
  ADD CONSTRAINT `lk_ordsp_ordadd` FOREIGN KEY (`Order_address_id`) REFERENCES `order-address` (`order_address_id`),
  ADD CONSTRAINT `order-sp_ibfk_1` FOREIGN KEY (`Account_id`) REFERENCES `res-user` (`id`),
  ADD CONSTRAINT `order-sp_ibfk_2` FOREIGN KEY (`Order_id`) REFERENCES `san-pham` (`id`);

--
-- Các ràng buộc cho bảng `san-pham`
--
ALTER TABLE `san-pham`
  ADD CONSTRAINT `lk_sp_list` FOREIGN KEY (`iddm`) REFERENCES `list` (`id`);

--
-- Các ràng buộc cho bảng `wards`
--
ALTER TABLE `wards`
  ADD CONSTRAINT `lk_ward_district` FOREIGN KEY (`district_id`) REFERENCES `districts` (`district_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
