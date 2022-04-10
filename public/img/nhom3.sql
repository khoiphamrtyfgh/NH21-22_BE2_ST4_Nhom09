-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 24, 2021 lúc 02:39 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `pty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_user`, `id_product`, `pty`) VALUES
(4, 65, 1),
(5, 44, 3),
(5, 66, 3),
(4, 62, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Oppo'),
(4, 'Xiaomi'),
(5, 'Asus');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `feature` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(1, 'OPPO Reno6 Z 5G\r\n', 3, 1, 9490000, 'oppo-reno6-z-5g-aurora-1-600x600.jpg', 'Cấu hình Điện thoại OPPO Reno6 Z 5G\r\nMàn hình: AMOLED,6.43\",Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 2 MP\r\nCamera trước:32 MP\r\nChip: MediaTek Dimensity 800U 5G\r\nRAM: 8 GB\r\nBộ nhớ trong: 128 GB\r\nSIM:2 Nano SIM, Hỗ trợ 5G\r\nPin, Sạc:4310 mAh,30 W', 1, '2021-09-30 17:00:00'),
(2, 'OPPO Find X3 Pro 5G\r\n', 3, 1, 26990000, 'oppo-find-x3-pro-black-001-1-600x600.jpg', 'Cấu hình Điện thoại OPPO Find X3 Pro 5G\r\nMàn hình:AMOLED,6.7\",Quad HD+ (2K+)\r\nHệ điều hành:Android 11\r\nCamera sau:Chính 50 MP & Phụ 50 MP, 13 MP, 3 MP\r\nCamera trước:32 MP\r\nChip:Snapdragon 888\r\nRAM:12 GB\r\nBộ nhớ trong:256 GB\r\nSIM:2 Nano SIM,Hỗ trợ 5G\r\nPin, Sạc:4500 mAh,65 W', 0, '2021-09-16 17:00:00'),
(3, 'Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81', 3, 4, 790000, 'bluetooth-tws-oppo-enco-buds-eti81-ava-1-600x600.jpg', 'Thông số kỹ thuật Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81\r\nThời gian tai nghe: Dùng 6 giờ - Sạc 2.5 giờ\r\nThời gian hộp sạc: Dùng 24 giờ - Sạc 2.5 giờ\r\nCổng sạc: Type-C\r\nTương thích: Android, iOS (iPhone, iPad), Windows\r\nTiện ích: Chống nước\r\nĐiều khiển bằng: Cảm ứng chạm\r\nHãng: OPPO.', 1, '2021-10-12 17:00:00'),
(4, 'Oppo Watch 46mm dây silicone', 3, 5, 7990000, 'oppo-watch-46mm-day-silicone-thumb-1-1-600x600.jpg', 'Cấu hình Oppo Watch 46mm dây silicone vàng đồng\r\nMàn hình:AMOLED,1.91 inch\r\nThời lượng pin: Khoảng 21 ngày (chế độ tiết kiệm pin),Khoảng 36 giờ (chế độ thường)\r\nKết nối với hệ điều hành: Android 6.0 trở lên, iOS 12 trở lên\r\nMặt: Kính cường lực,46 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đếm số bước chân', 1, '2021-10-06 03:46:50'),
(5, 'Oppo Watch 41mm dây silicone', 3, 5, 5990000, 'oppo-watch-41mm-day-silicone-thumb-1-1-600x600.jpg', 'Cấu hình Oppo Watch 41mm dây silicone đen\r\nMàn hình:AMOLED,1.6 inch\r\nThời lượng pin: Khoảng 14 ngày (chế độ tiết kiệm pin),Khoảng 24 giờ (chế độ thường)\r\nKết nối với hệ điều hành: Android 6.0 trở lên, iOS 12 trở lên\r\nMặt: Kính cường lực,41 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đếm số bước chân', 1, '2021-10-13 03:48:30'),
(6, 'Xiaomi 11 Lite 5G NE', 4, 1, 9490000, 'xiaomi-11-lite-5g-ne-pink-600x600.jpg', 'Cấu hình Điện thoại Xiaomi 11 Lite 5G NE\r\nMàn hình:AMOLED,6.55\",Full HD+\r\nHệ điều hành:Android 11\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 5 MP\r\nCamera trước: 20 MP\r\nChip: Snapdragon 778G 5G 8 nhân\r\nRAM:8 GB\r\nBộ nhớ trong:128 GB\r\nSIM:2 Nano SIM (SIM 2 chung khe thẻ nhớ),Hỗ trợ 5G\r\nPin, Sạc:4250 mAh,33 W\r\nHãng: Xiaomi. ', 0, '2021-10-06 03:51:10'),
(7, 'Xiaomi Pad 5 256GB', 4, 3, 10490000, 'xiaomi-pad-5-grey-600x600.jpg', 'Cấu hình Máy tính bảng Xiaomi Pad 5 256GB\r\nMàn hình:11\",IPS LCD\r\nHệ điều hành: Android 11\r\nChip: Snapdragon 860 8 nhân\r\nRAM:6 GB\r\nBộ nhớ trong:256 GB\r\nCamera sau:13 MP\r\nCamera trước:8 MP\r\nPin, Sạc:8720 mAh,33 W\r\nHãng: Xiaomi.', 0, '2021-10-05 03:51:10'),
(8, 'Xiaomi Pad 5 128GB', 4, 3, 8990000, 'xiaomi-pad-5-white-600x600.jpg', 'Cấu hình Máy tính bảng Xiaomi Pad 5 128GB\r\nMàn hình:11\",IPS LCD\r\nHệ điều hành: Android 11\r\nChip: Snapdragon 860 8 nhân\r\nRAM:6 GB\r\nBộ nhớ trong:128 GB\r\nCamera sau:13 MP\r\nCamera trước:8 MP\r\nPin, Sạc:8720 mAh,33 W\r\nHãng: Xiaomi.', 0, '2021-10-18 03:51:10'),
(9, 'Camera IP Mi Home 360 Độ 1080P Xiaomi BHR4885GL\r\n', 4, 4, 949000, 'camera-ip-mi-home-360-do-1080p-xiaomi-bhr4885gl-ava-600x600.jpg', 'Thông số kỹ thuật Camera IP Mi Home 360 Độ 1080P Xiaomi BHR4885GL\r\nĐộ phân giải: Full HD 1080p\r\nGóc camera: Xoay dọc 108 độ, Xoay ngang 360 độ\r\nLưu trữ: MicroSD ≤ 32GB (4-5 ngày)\r\nTầm nhìn xa hồng ngoại: 10 m trong tối\r\nKết nối: Wifi\r\nHỗ trợ thiết bị: Android, iOS (iPhone, iPad)\r\nĐiều khiển và xem trên điện thoại: Ứng dụng Mi Home\r\nTiện ích: Phát hiện chuyển động\r\nVị trí lắp đặt: Trong nhà\r\nĐàm thoại 2 chiều: Có\r\nAdapter kèm theo: Không kèm Adapter\r\nKích thước: Dài 7 cm - Rộng 7 cm - Cao 11 cm\r\nThương hiệu của: Trung Quốc\r\nSản xuất tại: Trung Quốc\r\nHãng:Xiaomi.', 1, '2021-10-14 03:51:10'),
(14, 'Pin sạc dự phòng Polymer 20.000 mAh Type C PD Samsung EB-P5300', 2, 4, 1192000, 'polymer-20000mah-type-c-25w-samsung-eb-p5300-avatar-1-600x600.jpg', 'Thông số kỹ thuật Pin sạc dự phòng Polymer 20.000 mAh Type C PD Samsung EB-P5300\r\nHiệu suất sạc: 60%\r\nDung lượng pin: 20.000 mAh\r\nThời gian sạc đầy pin: 12 - 14 giờ (dùng Adapter 2A)\r\nNguồn vào: Type C: 5V - 3A, 9V - 2.77A, 12V - 2.1A, 15V - 1.66A, 20V - 1.25A\r\nNguồn ra: Type C (PD): 5V - 3A, 9V - 2.77A, 15V - 1.66A, 20V - 1.25A, (PPS) 3.3-5.9V - 3A, 3.3-11V - 2.25A, USB: 5V - 2A, 9V - 2A, 12V - 2.1A\r\nLõi pin: Polymer\r\nCông nghệ/Tiện ích: Đèn LED báo hiệu, Power Delivery\r\nKích thước: Dài 14.3 cm - Rộng 7 cm - Dày 2.5 cm\r\nTrọng lượng:392 g\r\nThương hiệu của: Hàn Quốc\r\nSản xuất tại: Trung Quốc\r\nHãng: Samsung. ', 1, '2020-06-05 03:00:00'),
(13, 'iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021)', 1, 3, 38490000, 'ipad-pro-2021-129-inch-silver-600x600.jpg', 'Cấu hình Máy tính bảng iPad Pro M1 12.9 inch WiFi Cellular 256GB (2021)\r\nMàn hình:12.9\", Liquid Retina XDR mini-LED LCD\r\nHệ điều hành:iPadOS 14\r\nChip:Apple M1 8 nhân\r\nRAM:8 GB\r\nBộ nhớ trong:256 GB\r\nKết nối:5G, Nghe gọi qua FaceTime\r\nSIM:1 Nano SIM hoặc 1 eSIM\r\nCamera sau:Chính 12 MP & Phụ 10 MP, TOF 3D LiDAR\r\nCamera trước:12 MP\r\nPin, Sạc:40.88 Wh (~ 10.835 mAh),20 W', 0, '2021-10-26 10:00:00'),
(12, 'Samsung Galaxy Watch 3 45mm viền thép bạc dây da', 2, 5, 4990000, 'samsung-galaxy-watch-3-45mm-bac-thumb-1-1-600x600.jpg', 'Cấu hình Samsung Galaxy Watch 3 45mm viền thép bạc dây da\r\nMàn hình: SUPER AMOLED,1.4 inch\r\nThời lượng pin: Khoảng 2 ngày\r\nKết nối với hệ điều hành: Android 5.0 trở lên, iOS 9 trở lên\r\nMặt: Kính cường lực Gorrilla Glass Dx+ ,45 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đo nồng độ oxy (SpO2)Đếm số bước chân\r\nHãng: Samsung.', 1, '2021-03-26 10:00:00'),
(11, 'Samsung Galaxy Tab S7', 2, 3, 15990000, 'samsung-galaxy-tab-s7-thumb-xanh-600x600-600x600.jpg', 'Cấu hình Máy tính bảng Samsung Galaxy Tab S7\r\nMàn hình:11\",LTPS IPS LCD\r\nHệ điều hành:Android 10\r\nChip:Snapdragon 865+\r\nRAM:6 GB\r\nBộ nhớ trong:128 GB\r\nKết nối:Hỗ trợ 4G,Có nghe gọi\r\nSIM:1 Nano SIM (chung thẻ nhớ)\r\nCamera sau:Chính 13 MP & Phụ 5 MP\r\nCamera trước:8 MP\r\nPin, Sạc:8000 mAh,45 W\r\nHãng: Samsung. ', 0, '2021-03-14 10:00:00'),
(10, 'Bàn phím Magic Keyboard US Apple MLA22 ', 1, 4, 899000, 'ban-phim-magic-keyboard-us-apple-mla22-ava-600x600.jpg', 'Thông số kỹ thuật Bàn phím Magic Keyboard US Apple MLA22\r\nTrọng lượng: Khoảng 231 g\r\nTương thích thiết bị: iPad Pro 11 inch 2020, iPad Air 4 10.9 inch.\r\nWifi: Không có WiFi\r\nCách kết nối: Sạc qua cổng Lightning', 1, '2021-09-08 10:00:00'),
(15, 'MacBook Pro 16 M1 Max 2021/32 core-GPU', 1, 2, 90990000, 'apple-macbook-pro-16-m1-max-2021-600x600.jpg', 'Cấu hình Laptop Apple MacBook Pro 16 M1 Max 2021 10 core-CPU/32GB/1TB SSD/32 core-GPU\r\nCPU: Apple M1 Max, 400GB/s memory bandwidth\r\nRAM: 32 GB\r\nỔ cứng: 1 TB SSD\r\nMàn hình: 16.2 inch, Liquid Retina XDR display (3456 x 2234), 120Hz\r\nCard màn hình: Card tích hợp, 32 core-GPU\r\nCổng kết nối: 3 x Thunderbolt 4 USB-C, HDMI, Jack tai nghe 3.5 mm\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Mac OS\r\nThiết kế: Vỏ kim loại nguyên khối\r\nKích thước, trọng lượng: Dài 355.7 mm - Rộng 248.1 mm - Dày 16.8 mm - Nặng 2.2 kg\r\nThời điểm ra mắt: 10/2021', 0, '2021-10-18 03:00:00'),
(16, 'Apple Watch S6 40mm viền nhôm dây cao su', 1, 5, 9592000, 'apple-watch-s6-40mm-vien-nhom-day-cao-su-hong-thumb-1-600x600.jpg', 'Cấu hình Apple Watch S6 40mm viền nhôm dây cao su\r\nMàn hình: OLED, 1.57 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: iOS 14 trở lên\r\nMặt: Ion-X strengthened glass, 40 mm\r\nTính năng cho sức khỏe:Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Điện tâm đồ, Đo nhịp tim, Đo nồng độ oxy (SpO2), Đếm số bước chân\r\nHãng: Apple.', 0, '2020-09-14 03:00:00'),
(17, 'Galaxy Z Fold3 5G 512GB', 2, 1, 44990000, 'samsung-galaxy-z-fold-3-green-1-600x600.jpg', 'Cấu hình Điện thoại Samsung Galaxy Z Fold3 5G 512GB\r\nMàn hình: Dynamic AMOLED 2X, Chính 7.6\" & Phụ 6.2\", Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: 3 camera 12 MP\r\nCamera trước: 10 MP & 4 MP\r\nChip: Snapdragon 888\r\nRAM: 12 GB\r\nBộ nhớ trong: 512 GB\r\nSIM: 2 Nano SIM + 1 eSIM, Hỗ trợ 5G\r\nPin, Sạc: 4400 mAh, 25 W', 1, '2021-09-14 03:00:00'),
(18, 'Cáp sạc không dây Apple Watch Magnetic 0.3m Apple MX2G2 Trắng', 1, 4, 790000, '2-cap-sac-apple-watch-magnetic-03m-apple-mx2g2-avatar-600x600.jpg', 'Thông số kỹ thuật Cáp sạc không dây Apple Watch Magnetic 0.3m Apple MX2G2 Trắng\r\nCông nghệ/Tiện ích: Magsafe\r\nChức năng: Sạc\r\nĐầu vào: USB Type-A\r\nĐầu ra: Đế nam châm từ tính\r\nĐộ dài dây: 30 cm\r\nSản xuất tại: Việt Nam/Trung Quốc (tùy lô hàng)\r\nThương hiệu của : Mỹ\r\nHãng: Apple.', 1, '2020-09-14 10:00:00'),
(19, 'Điện thoại Samsung Galaxy Z Flip3 5G 256GB', 2, 1, 25990000, 'samsung-galaxy-z-flip-3-violet-1-600x600.jpg', 'Cấu hình Điện thoại Samsung Galaxy Z Flip3 5G 256GB\r\nMàn hình: Dynamic AMOLED 2X, Chính 6.7\" & Phụ 1.9\", Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 10 MP\r\nChip: Snapdragon 888\r\nRAM: 8 GB\r\nBộ nhớ trong: 256 GB\r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 5G\r\nPin, Sạc: 3300 mAh, 15 W', 1, '2021-08-17 03:00:00'),
(20, 'iPhone 12 Pro Max 128GB', 1, 1, 31499000, 'iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg', 'Cấu hình Điện thoại iPhone 12 Pro Max 128GB\r\nMàn hình: OLED, 6.7\", Super Retina XDR\r\nHệ điều hành: iOS 14\r\nCamera sau: 3 camera 12 MP\r\nCamera trước: 12 MP\r\nChip: Apple A14 Bionic\r\nRAM: 6 GB\r\nBộ nhớ trong: 128 GB\r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 5G\r\nPin, Sạc: 3687 mAh, 20 W', 1, '2020-12-31 03:00:00'),
(21, 'Laptop Asus VivoBook X515MA N4020/4GB/256GB/Win10 (EJ504T)', 5, 2, 8990000, 'asus-vivobook-x515ma-n4020-ej504t-600x600.jpg', 'Cấu hình Laptop Asus VivoBook X515MA N4020/4GB/256GB/Win10 (EJ504T)\r\nCPU: Celeron, N4020, 1.1GHz\r\nRAM: 4 GB, DDR4 (1 khe), 2400 MHz\r\nỔ cứng: Hỗ trợ khe cắm HDD SATA, SSD 256 GB NVMe PCIe\r\nMàn hình: 15.6\", Full HD (1920 x 1200)\r\nCard màn hình: Card tích hợp, Intel UHD 600\r\nCổng kết nối: 1 x USB 3.2, 2 x USB 2.0, HDMI, Jack tai nghe 3.5 mm, USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa\r\nKích thước, trọng lượng: Dài 360.2 mm - Rộng 234.9 mm - Dày 19.9 mm - Nặng 1.8 kg\r\nThời điểm ra mắt: 2020', 0, '2021-10-06 03:51:10'),
(22, 'Laptop Asus ZenBook UX425EA i7 1165G7/16GB/512GB/Cáp/Túi/Win10 (KI439T)', 5, 2, 30190000, 'asus-zenbook-ux425ea-i7-ki439t-600x600.jpg', 'Cấu hình Laptop Asus ZenBook UX425EA i7 1165G7/16GB/512GB/Cáp/Túi/Win10 (KI439T)\r\nCPU: i7, 1165G7, 2.8GHz\r\nRAM: 16 GB, LPDDR4X (On board), 4266 MHz\r\nỔ cứng: SSD 512 GB NVMe PCIe\r\nMàn hình: 14\", Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợp, Intel Iris Xe\r\nCổng kết nối: 2 x Thunderbolt 4 USB-C, 1 x USB 3.2HDMI\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại nguyên khối\r\nKích thước, trọng lượng: Dài 319 mm - Rộng 208 mm - Dày 13.9 mm - Nặng 1.17 kg\r\nThời điểm ra mắt: 2020', 0, '2021-10-06 03:51:10'),
(23, 'Laptop Asus ZenBook UX425EA i5 1135G7/8GB/512GBCáp/Túi/Win10 (KI429T)', 5, 2, 23490000, 'asus-zenbook-ux425ea-i5-ki429t-600x600.jpg', 'Cấu hình Laptop Asus ZenBook UX425EA i5 1135G7/8GB/512GBCáp/Túi/Win10 (KI429T)\r\nCPU: i5, 1135G7, 2.4GHz\r\nRAM: 8 GB, LPDDR4X (On board), 4266 MHz\r\nỔ cứng: SSD 512 GB NVMe PCIe\r\nMàn hình: 14\", Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợp, Intel Iris Xe\r\nCổng kết nối: 1 x USB 3.2, 2 x Thunderbolt 4 USB-C, HDMI\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại nguyên khối\r\nKích thước, trọng lượng: Dài 319 mm - Rộng 208 mm - Dày 13.9 mm - Nặng 1.17 kg\r\nThời điểm ra mắt:2020', 0, '2021-10-06 03:51:10'),
(24, 'Laptop Asus TUF Gaming FX506HC i5 11400H/8GB/512GB/4GB RTX3050/144Hz/Win10 (HN002T)', 5, 2, 25690000, 'asus-tuf-gaming-fx506hc-i5-hn002t-15-600x600.jpg', 'Cấu hình Laptop Asus TUF Gaming FX506HC i5 11400H/8GB/512GB/4GB RTX3050/144Hz/Win10 (HN002T)\r\nCPU: i5, 11400H, 2.7GHz\r\nRAM: 8 GB, DDR4 2 khe (1 khe 8GB + 1 khe rời), 2933 MHz\r\nỔ cứng: SSD 512 GB NVMe PCIe, Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng\r\nMàn hình: 15.6\", Full HD (1920 x 1080), 144Hz\r\nCard màn hình: Card rời, RTX 3050 4GB\r\nCổng kết nối: Jack tai nghe 3.5 mm, Thunderbolt 4 USB-C, 3 x USB 3.2, HDMI, LAN (RJ45)\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại\r\nKích thước, trọng lượng: Dài 359 mm - Rộng 256 mm - Dày 24.9 mm - Nặng 2.3 kg\r\nThời điểm ra mắt: 2020', 0, '2021-10-06 03:51:10'),
(25, 'Laptop Asus VivoBook X515EP i5 1135G7/8GB/512GB/2GB MX330/Win10 (BQ186T)', 5, 2, 18690000, 'asus-vivobook-x515ep-i5-1135g7-8gb-512gb-1-600x600.jpg', 'Cấu hình Laptop Asus VivoBook X515EP i5 1135G7/8GB/512GB/2GB MX330/Win10 (BQ186T)\r\n\r\nCPU: i5, 1135G7, 2.4GHz\r\nRAM: 8 GB, DDR4 (On board 4GB +1 khe 4GB), 3200 MHz\r\nỔ cứng: Hỗ trợ khe cắm HDD SATA, 512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1TB)\r\nMàn hình:15.6\", Full HD (1920 x 1080)\r\nCard màn hình: Card rời, MX330 2GB\r\nCổng kết nối: 1 x USB 3.2, 2 x USB 2.0, HDMI, Jack tai nghe 3.5 mm, USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa\r\nKích thước, trọng lượng: Dài 360.2 mm - Rộng 234.9 mm - Dày 19.9 mm - Nặng 1.8 kg\r\nThời điểm ra mắt: 2021', 0, '2021-10-06 03:51:10'),
(26, 'Laptop Asus ZenBook Flip UX363EA i7 1165G7/16GB/512GB/OLED/Touch/Pen/Cáp/Túi/Win10 (HP548T)', 5, 2, 33490000, 'asus-zenbook-flip-ux363ea-i7-1165g7-16gb-512gb-600x600.jpg', 'Cấu hình Laptop Asus ZenBook Flip UX363EA i7 1165G7/16GB/512GB/OLED/Touch/Pen/Cáp/Túi/Win10 (HP548T)\r\nCPU: i7, 1165G7, 2.8GHz\r\nRAM: 16 GB, LPDDR4X (On board), 4267 MHz\r\nỔ cứng: SSD 512 GB NVMe PCIe\r\nMàn hình: 13.3\", Full HD (1920 x 1080),  OLED\r\nCard màn hình: Card tích hợp, Intel Iris Xe\r\nCổng kết nối: 1 x USB 3.2, 2 x Thunderbolt 4 USB-C, HDMI\r\nĐặc biệt: Có màn hình cảm ứng, Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại nguyên khối\r\nKích thước, trọng lượng: Dài 305 mm - Rộng 211 mm - Dày 11.9 mm - Nặng 1.3 kg\r\nThời điểm ra mắt: 2021', 0, '2021-10-06 03:51:10'),
(27, 'Laptop Asus ZenBook Duo UX482EA i5 1135G7/8GB/512GB/Touch/Pen/Túi/Stand/Win10 (KA081T)', 5, 2, 32490000, 'asus-zenbook-ux482ea-i5-ka081t-600x600.jpg', 'Cấu hình Laptop Asus ZenBook Duo UX482EA i5 1135G7/8GB/512GB/Touch/Pen/Túi/Stand/Win10 (KA081T)\r\nCPU: i5, 1135G7, 2.4GHz\r\nRAM: 8 GB, LPDDR4X (On board), 4267 MHz\r\nỔ cứng: SSD 512 GB NVMe PCIe\r\nMàn hình: 14\", Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợp, Intel Iris Xe\r\nCổng kết nối: 1 x USB 3.2, 2 x Thunderbolt 4 USB-C, HDMI, Jack tai nghe 3.5 mm\r\nĐặc biệt: Có màn hình cảm ứng, Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 324 mm - Rộng 222 mm - Dày 17.3 mm - Nặng 1.62 kg\r\nThời điểm ra mắt: 2021', 0, '2021-10-06 03:51:10'),
(28, 'Laptop Asus VivoBook S433EA i5 1135G7/8GB/512GB/Win10 (AM439T)', 5, 2, 19490000, 'asus-600x400.jpg', 'Cấu hình Laptop Asus VivoBook S433EA i5 1135G7/8GB/512GB/Win10 (AM439T)\r\nCPU: i5, 1135G7, 2.4GHz\r\nRAM: 8 GB, DDR4 (On board), 3200 MHz\r\nỔ cứng: SSD 512 GB NVMe PCIe, Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng\r\nMàn hình: 14\", Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợp, Intel Iris Xe\r\nCổng kết nối: 1 x USB 3.2, 2 x USB 2.0, HDMI, Thunderbolt 4 USB-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại\r\nKích thước, trọng lượng: Dài 324 mm - Rộng 213 mm - Dày 15.9 mm - Nặng 1.4 kg\r\nThời điểm ra mắt: 2020', 0, '2021-10-06 03:51:10'),
(29, 'Laptop Asus ROG Zephyrus G14 Alan Walker GA401QEC R9 5900HS/16GB 1TB/4GB RTX3050Ti/120Hz/Túi/Win10 (K2064T)', 5, 2, 44990000, 'asus-rog-zephyrus-gaming-g14-ga401qec-r9-k2064t-17-600x600.jpg', 'Cấu hình Laptop Asus ROG Zephyrus G14 Alan Walker GA401QEC R9 5900HS/16GB 1TB/4GB RTX3050Ti/120Hz/Túi/Win10 (K2064T)\r\nCPU: Ryzen 9, 5900HS, 3GHz\r\nRAM: 16 GB, DDR4 2 khe (8GB onboard+ 1 khe 8GB), 3200 MHz\r\nỔ cứng: Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe 3.0 mở rộng (nâng cấp dung lượng không giới hạn), 1 TB SSD M.2 PCIe 3.0 (Có thể tháo ra, lắp thanh khác dung lượng không giới hạn)\r\nMàn hình: 14\", QHD (2560 x 1440), 120Hz\r\nCard màn hình: Card rời, RTX 3050Ti 4GB\r\nCổng kết nối: 1x USB 3.2 Gen 2 Type-C support DisplayPort / power delivery / G-SYNC, 2 x USB 3.2, HDMI, Jack tai nghe 3.5 mm, USB Type-C\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa - nắp lưng bằng kim loại\r\nKích thước, trọng lượng: Dài 324 mm - Rộng 220 mm - Dày 19.9 mm - Nặng 1.7 kg\r\nThời điểm ra mắt: 2021', 0, '2021-10-06 03:51:10'),
(30, 'iPhone 12 64GB', 1, 1, 20990000, 'iphone-12-do-new-2-600x600.jpg', 'Cấu hình Điện thoại iPhone 12 64GB\r\nMàn hình: OLED, 6.1\", Super Retina XDR\r\nHệ điều hành: iOS 14\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 12 MP\r\nChip: Apple A14 Bionic\r\nRAM: 4 GB\r\nBộ nhớ trong: 64 GB\r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 5G\r\nPin, Sạc: 2815 mAh, 20 W', 1, '2020-12-31 03:00:00'),
(31, 'iPhone 13 mini 128GB', 1, 1, 20990000, 'iphone-13-mini-midnight-1-600x600.jpg', 'Cấu hình Điện thoại iPhone 13 mini 128GB\r\nMàn hình: OLED, 5.4\", Super Retina XDR\r\nHệ điều hành: iOS 15\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 12 MP\r\nChip: Apple A15 Bionic\r\nRAM: 4 GB\r\nBộ nhớ trong: 128 GB\r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 5G\r\nPin, Sạc: 2438 mAh, 20 W', 1, '2020-12-31 03:00:00'),
(32, 'iPhone 13 Pro Max 1TB', 1, 1, 48490000, 'iphone-13-pro-max-silver-600x600.jpg', 'Cấu hình Điện thoại iPhone 13 Pro Max 1TB\r\nMàn hình: OLED, 6.7\", Super Retina XDR\r\nHệ điều hành: iOS 15\r\nCamera sau: 3 camera 12 MP\r\nCamera trước: 12 MP\r\nChip: Apple A15 Bionic\r\nRAM: 6 GB\r\nBộ nhớ trong: 1 TB\r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 5G\r\nPin, Sạc: 4352 mAh, 20 W', 1, '2020-12-31 03:00:00'),
(33, 'iPhone 11 64GB', 1, 1, 17990000, 'iphone-xi-xanhla-600x600.jpg', 'Cấu hình Điện thoại iPhone 11 64GB\r\nMàn hình: IPS LCD, 6.1\", Liquid Retina\r\nHệ điều hành: iOS 14\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 12 MP\r\nChip: Apple A13 Bionic\r\nRAM: 4 GB\r\nBộ nhớ trong: 64 GB\r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 4G\r\nPin, Sạc: 3110 mAh, 18 W', 1, '2020-12-31 03:00:00'),
(34, 'iPhone SE 128GB (2020)', 1, 1, 12490000, 'iphone-se-128gb-2020-do-600x600.jpg', 'Cấu hình Điện thoại iPhone SE 128GB (2020)\r\nMàn hình: IPS LCD, 4.7\"\r\nHệ điều hành: iOS 14\r\nCamera sau: 12 MP\r\nCamera trước: 7 MP\r\nChip: Apple A13 Bionic\r\nRAM: 3 GB\r\nBộ nhớ trong: 128 GB\r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 4G\r\nPin, Sạc: 1821 mAh, 18 W', 1, '2020-12-31 03:00:00'),
(35, 'iPhone 13 512GB', 1, 1, 32990000, 'iphone-13-pink-1-600x600.jpg', 'Cấu hình Điện thoại iPhone 13 512GB\r\nMàn hình: OLED, 6.1\", Super Retina XDR\r\nHệ điều hành: iOS 15\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 12 MP\r\nChip: Apple A15 Bionic\r\nRAM: 4 GB\r\nBộ nhớ trong: 512 GB\r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 5G\r\nPin, Sạc: 3240 mAh, 20 W', 1, '2020-12-31 03:00:00'),
(36, 'Apple Watch SE 40mm viền nhôm dây cao su', 1, 5, 8450000, 'se-40mm-vien-nhom-day-cao-su-hong-thumb-1-600x600.jpg', 'Cấu hình Apple Watch SE 40mm viền nhôm dây cao su\r\nMàn hình: OLED, 1.57 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: iOS 14 trở lên\r\nMặt: Ion-X strengthened glass, 40 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đếm số bước chân\r\nHãng: Apple.', 0, '2020-09-14 03:00:00'),
(37, 'Apple Watch S6 LTE 40mm viền thép dây thép', 1, 5, 17841000, 'apple-watch-s6-lte-40mm-vien-thep-day-thep-vang-thumb-1-600x600.jpg', 'Cấu hình Apple Watch S6 LTE 40mm viền thép dây thép\r\nMàn hình: OLED, 1.57 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: iOS 14 trở lên\r\nMặt: Kính cường lực Sapphire, 40 mm\r\nTính năng cho sức khỏe: Chế độ luyện tậpTheo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đếm số bước chân\r\nHãng: Apple.', 0, '2020-09-14 03:00:00'),
(38, 'Apple Watch Series 7 LTE 45mm viền thép', 1, 5, 21990000, 'apple-watch-series-7-lte-45mm-vien-thep-vang-thumb-660x600.jpg', 'Cấu hình Apple Watch Series 7 LTE 45mm viền thép\r\nMàn hình: OLED, 1.77 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: iOS 15 trở lên\r\nMặt: Kính Sapphire, 45 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Điện tâm đồ, Đo nhịp tim, Đo nồng độ oxy (SpO2), Đếm số bước chân\r\nHãng: Apple.', 0, '2020-09-14 03:00:00'),
(39, 'Apple Watch S6 LTE 40mm viền thép dây cao su', 1, 5, 16991000, 'apple-watch-s6-lte-40mm-vien-thep-day-cao-su-xanh-la-thumb-600x600.jpg', 'Cấu hình Apple Watch S6 LTE 40mm viền thép dây cao su\r\nMàn hình: OLED, 1.57 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: iOS 14 trở lên\r\nMặt: Kính cường lực Sapphire, 40 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Điện tâm đồ, Đo nhịp tim, Đo nồng độ oxy (SpO2), Đếm số bước chân\r\nHãng: Apple.', 0, '2020-09-14 03:00:00'),
(40, 'Apple Watch Series 7 LTE 45mm', 1, 5, 15990000, 'apple-watch-series-7-lte-45mm-vien-nhom-xanh-la-thumb-1-660x600.jpg', 'Cấu hình Apple Watch Series 7 LTE 45mm\r\nMàn hình: OLED, 1.77 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: iOS 15 trở lên\r\nMặt: Ion-X strengthened glass, 45 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Điện tâm đồ, Đo nhịp tim, Đo nồng độ oxy (SpO2), Đếm số bước chân\r\nHãng: Apple.', 0, '2020-09-14 03:00:00'),
(41, 'iPad Air 4 Wifi Cellular 256GB (2020)', 1, 3, 25790000, 'ipad-4-cellular-hong-new-600x600-600x600.jpg', 'Cấu hình Máy tính bảng iPad Air 4 Wifi Cellular 256GB (2020)\r\nMàn hình: 10.9\", Liquid Retina\r\nHệ điều hành: iPadOS 14\r\nChip: Apple A14 Bionic\r\nRAM: 4 GB\r\nBộ nhớ trong: 256 GB\r\nKết nối: Hỗ trợ 4G, Nghe gọi qua FaceTime\r\nSIM: 1 Nano SIM hoặc 1 eSIM\r\nCamera sau: 12 MP\r\nCamera trước: 7 MP\r\nPin, Sạc: 28.65 Wh (~ 7600 mAh), 20 W', 0, '2021-10-26 10:00:00'),
(42, ' iPad mini 7.9 inch Wifi Cellular 64GB (2019)', 1, 3, 15790000, 'ipad-mini-79-inch-wifi-cellular-64gb-2019-gold-600x600-1-600x600.jpg', 'Cấu hình Máy tính bảng iPad mini 7.9 inch Wifi Cellular 64GB (2019)\r\nMàn hình: 7.9\", LED-backlit IPS LCD\r\nHệ điều hành: iPadOS 14\r\nChip: Apple A12 Bionic\r\nRAM: 3 GB\r\nBộ nhớ trong: 64 GB\r\nKết nối: Hỗ trợ 4G, Nghe gọi qua FaceTime\r\nSIM: 1 Nano SIM & 1 eSIM\r\nCamera sau: 8 MP\r\nCamera trước: 7 MP\r\nPin, Sạc: 19.1 Wh (~ 5124 mAh), 10 W', 0, '2021-10-26 10:00:00'),
(44, 'iPad mini 6 WiFi Cellular 256GB', 1, 3, 24990000, 'ipad-mini-6-wifi-cellular-starlight-1-600x600.jpg', 'Cấu hình Máy tính bảng iPad mini 6 WiFi Cellular 256GB\r\nMàn hình: 8.3\", LED-backlit IPS LCD\r\nHệ điều hành: iPadOS 15\r\nChip: Apple A15 Bionic\r\nRAM: 4 GB\r\nBộ nhớ trong: 256 GB\r\nKết nối: 5G, Nghe gọi qua FaceTime\r\nSIM: 1 Nano SIM & 1 eSIM\r\nCamera sau: 12 MP\r\nCamera trước: 12 MP\r\nPin, Sạc: 19.3 Wh, 20 W', 0, '2021-10-26 10:00:00'),
(45, ' iPad Air 4 Wifi 256GB (2020)', 1, 3, 22290000, 'ipad-air-4-wifi-64gb-2020-xanhla-600x600-600x600.jpg', 'Cấu hình Máy tính bảng iPad Air 4 Wifi 256GB (2020)\r\nMàn hình: 10.9\", Liquid Retina\r\nHệ điều hành: iPadOS 14\r\nChip: Apple A14 Bionic\r\nRAM: 4 GB\r\nBộ nhớ trong: 256 GB\r\nKết nối: Nghe gọi qua FaceTime\r\nCamera sau: 12 MP\r\nCamera trước: 7 MP\r\nPin, Sạc: 28.65 Wh (~ 7600 mAh), 20 W', 0, '2021-10-26 10:00:00'),
(46, 'Laptop Apple MacBook Pro 14 M1 Pro 2021 10-core CPU/16GB/1TB SSD/16-core GPU (MKGQ3SA/A)', 1, 2, 64990000, 'apple-macbook-pro-14-m1-pro-2021-10-core-cpu-1-1-600x600.jpg', 'Cấu hình Laptop Apple MacBook Pro 14 M1 Pro 2021 10-core CPU/16GB/1TB SSD/16-core GPU\r\nCPU: Apple M1 Pro, 200GB/s memory bandwidth\r\nRAM: 16 GB\r\nỔ cứng: 1 TB SSD\r\nMàn hình: 14.2 inchLiquid Retina XDR display (3024 x 1964), 120Hz\r\nCard màn hình: Card tích hợp, 16 core-GPU\r\nCổng kết nối: 3 x Thunderbolt 4 USB-C, HDMI, Jack tai nghe 3.5 mm\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Mac OS\r\nThiết kế: Vỏ kim loại nguyên khối\r\nKích thước, trọng lượng: Dài 312.6 mm - Rộng 221.2 mm - Dày 15.5 mm - Nặng 1.6 kg\r\nThời điểm ra mắt: 10/2021', 1, '2021-11-28 05:49:13'),
(47, 'Apple TV 4K 64GB MXH02', 1, 4, 5990000, 'apple-tv-4k-64gb-thumb-600x600.jpg', 'Thông số kỹ thuật Apple TV 4K 64GB MXH02\r\nĐộ phân giải: 4K\r\nCPU/ GPU: Chip A12 Bionic\r\nHệ điều hành: TVOS\r\nRAM/ ROM: 64 GB\r\nKết nối: Bluetooth 5.0, HDMI 2.1\r\nHỗ trợ Wifi:\r\nWi-Fi 6 802.11ax với MIMO\r\nThương hiệu của: Mỹ', 0, '2021-10-21 05:42:58'),
(48, 'Samsung Galaxy Watch Active 2 44mm viền thép dây da', 2, 5, 5490000, 'samsung-galaxy-watch-active-2-44-mm-day-da-thumb-1-1-600x600.jpg', 'Cấu hình Samsung Galaxy Watch Active 2 44mm viền thép dây da\r\nMàn hình: SUPER AMOLED, 1.4 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: Android 5.0, iOS 10 trở lên\r\nMặt: Kính cường lực Gorrilla Glass Dx+, 44 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đếm số bước chân\r\nHãng: Samsung.', 1, '2021-11-09 05:39:02'),
(49, 'Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc', 2, 4, 4990000, 'bluetooth-true-wireless-galaxy-buds-pro-bac-ava-600x600.jpg', 'Thông số kỹ thuật Tai nghe Bluetooth True Wireless Galaxy Buds Pro Bạc\r\nThời gian tai nghe: Dùng 8 giờ - Sạc 3 giờ\r\nThời gian hộp sạc: Dùng 20 giờ - Sạc 3 giờ\r\nCổng sạc: Type-C\r\nCông nghệ âm thanh: Active Noise Cancellation, Dolby Head Tracking\r\nTương thích: Android, iOS (iPhone), Windows\r\nTiện ích: Chống nước, Chống ồn\r\nĐiều khiển bằng: Cảm ứng chạm\r\nHãng: Samsung.', 0, '2021-10-03 05:36:43'),
(50, 'Máy tính bảng Samsung Galaxy Tab A7 (2020)', 2, 3, 7990000, 'samsung-galaxy-tab-a7-2020-vangdong-600x600.jpg', 'Cấu hình Máy tính bảng Samsung Galaxy Tab A7 (2020)\r\nMàn hình: 10.4\", TFT LCD\r\nHệ điều hành: Android 10\r\nChip: Snapdragon 662\r\nRAM: 3 GB\r\nBộ nhớ trong: 64 GB\r\nKết nối: Hỗ trợ 4G, Có nghe gọi\r\nSIM: 1 Nano SIM\r\nCamera sau: 8 MP\r\nCamera trước: 5 MP\r\nPin, Sạc: 7040 mAh, 10 W\r\nHãng: Samsung.', 1, '2021-11-02 05:33:21'),
(51, 'Điện thoại Samsung Galaxy Z Flip3 5G 128GB', 2, 1, 24990000, 'samsung-galaxy-z-flip-3-cream-1-600x600.jpg', 'Cấu hình Điện thoại Samsung Galaxy Z Flip3 5G 128GB\r\nMàn hình: Dynamic AMOLED 2X, Chính 6.7\" & Phụ 1.9\", Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: 2 camera 12 MP\r\nCamera trước: 10 MP\r\nChip: Snapdragon 888\r\nRAM: 8 GB\r\nBộ nhớ trong: 128 GB\r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 5G\r\nPin, Sạc: 3300 mAh, 15 W', 1, '2021-11-15 10:00:00'),
(52, 'Máy tính bảng Samsung Galaxy Tab A7 Lite', 2, 3, 4490000, 'samsung-galaxy-tab-a7-lite-gray-600x600.jpg', 'Cấu hình Máy tính bảng Samsung Galaxy Tab A7 Lite\r\nMàn hình: 8.7\", TFT LCD\r\nHệ điều hành: Android 11\r\nChip: MediaTek MT8768T 8 nhân\r\nRAM: 3 GB\r\nBộ nhớ trong: 32 GB\r\nKết nối: Hỗ trợ 4G, Có nghe gọi\r\nSIM: 1 Nano SIM\r\nCamera sau: 8 MP\r\nCamera trước: 2 MP\r\nPin, Sạc: 5100 mAh, 15 W\r\nHãng: Samsung.', 0, '2021-11-01 05:27:57'),
(53, 'Vòng tay thông minh Samsung Galaxy Fit2 đen', 2, 5, 750000, 'samsung-galaxy-fit2-den-thumb-1-1-600x600.jpg', 'Cấu hình Vòng tay thông minh Samsung Galaxy Fit2 đen\r\nMàn hình: AMOLED, 1.1 inch\r\nThời lượng pin: Khoảng 15 ngày\r\nKết nối với hệ điều hành: Android 5.0 trở lên, iOS 12 trở lên, iPhone 7 trở lên\r\nMặt: Kính cường lực, 27.8 mm\r\nDây: 24 cm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đếm số bước chân\r\nTiện ích: Cài đặt thời gian rửa tay, Có chống nước, Rung thông báo, Thay mặt đồng hồ, Trả lời nhanh tin nhắn có sẵn, Điều khiển chơi nhạc\r\nHãng: Samsung.', 1, '2021-11-14 21:19:31'),
(54, 'Samsung Galaxy Watch 4 Classic 42mm', 2, 5, 8490000, 'samsung-galaxy-watch-4-classic-42mm-den-thumb-600x600.jpg', 'Cấu hình Samsung Galaxy Watch 4 Classic 42mm\r\nMàn hình: SUPER AMOLED1.19 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: Android dùng Google Mobile Service\r\nMặt: Kính cường lực Gorrilla Glass Dx+42 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Đo nhịp tim, Đo nồng độ oxy (SpO2), Đếm số bước chân\r\nHãng: Samsung.', 0, '2021-11-02 21:18:00'),
(55, 'Samsung Galaxy Watch 3 45mm titanium', 2, 5, 10990000, 'samsung-galaxy-watch-3-45mm-titanium-thum-1-1-600x600.jpg', 'Cấu hình Samsung Galaxy Watch 3 45mm titanium\r\nMàn hình: SUPER AMOLED, 1.4 inch\r\nThời lượng pin: Khoảng 2 ngày\r\nKết nối với hệ điều hành: Android 5.0 trở lên, iOS 9 trở lên\r\nMặt: Kính cường lực Gorrilla Glass Dx+, 45 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đo nồng độ oxy (SpO2), Đếm số bước chân\r\nHãng: Samsung.', 1, '2021-11-15 21:16:47'),
(56, 'Samsung Galaxy Watch 4 LTE Classic 42mm', 2, 5, 9490000, 'samsung-galaxy-watch-4-lte-classic-42mm-thumb-1-1-600x600.jpg', 'Cấu hình Samsung Galaxy Watch 4 LTE Classic 42mm\r\nMàn hình: SUPER AMOLED, 1.19 inch\r\nThời lượng pin: Khoảng 1.5 ngày\r\nKết nối với hệ điều hành: Android dùng Google Mobile Service\r\nMặt: Kính cường lực Gorrilla Glass Dx+, 42 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Đo nhịp tim, Đo nồng độ oxy (SpO2), Đếm số bước chân\r\nHãng: Samsung.', 1, '2021-11-15 21:15:19'),
(57, 'Bộ adapter sạc 15W kèm cáp Micro Samsung TA20HW', 2, 4, 290000, 'bo-adapter-sac-kem-cap-micro-samsung-ta20hw-600x600.jpg', 'Thông số kỹ thuật Bộ adapter sạc 15W kèm cáp Micro Samsung TA20HW\r\nModel: TA20HW\r\nChức năng: Sạc\r\nĐầu vào: USB\r\nĐầu ra: Micro USB: 9V - 1.67A, 5V - 2A\r\nDòng sạc tối đa: 15 W\r\nKích thước: Cáp dài 1.5 m\r\nCông nghệ/Tiện ích: Sạc nhanh\r\nThương hiệu của: Hàn Quốc\r\nSản xuất tại: Trung Quốc\r\nHãng: Samsung.', 1, '2021-10-03 05:36:43'),
(58, 'Cáp 3 đầu 3 Micro 1 Type-C 1.3 m Samsung MN930G', 2, 4, 400000, 'cap-3-dau-3-micro-1-type-c-13m-samsung-mn930g-600x600.jpg', 'Thông số kỹ thuật Cáp 3 đầu 3 Micro 1 Type-C 1.3 m Samsung MN930G\r\nChức năng: Sạc, Truyền dữ liệu\r\nĐầu vào: USB Type-A\r\nĐầu ra: 3 cổng: 2A\r\nĐộ dài dây: 1.3 m\r\nSản xuất tại: Việt Nam\r\nThương hiệu của: Hàn Quốc\r\nHãng: Samsung.', 1, '2021-11-15 21:12:23'),
(59, 'Đế sạc không dây Type C Qi 9W Samsung EP-P1100 Đen', 2, 4, 500000, 'sac-khong-day-9w-qi-type-c-samsung-ep-p1100-den-avatar-1-1-600x600.jpg', 'Thông số kỹ thuật Đế sạc không dây Type C Qi 9W Samsung EP-P1100 Đen\r\nModel: EP-P1100\r\nChức năng: Sạc\r\nĐầu vào: Type C: 5V - 2A, 9V - 1.67A\r\nĐầu ra: Không dây: 5V - 1A, 10V - 0.9A\r\nDòng sạc tối đa: 9 W\r\nKích thước: Đường kính: 9 cm, Dày 1.2 cm\r\nThương hiệu của: Hàn Quốc\r\nSản xuất tại: Việt Nam\r\nHãng: Samsung.', 1, '2021-11-01 21:11:30'),
(60, 'Adapter Sạc Type C PD 25W Samsung EP-TA800N', 2, 4, 490000, 'type-c-pd-25w-samsung-ep-ta800n-den-thumb-1-2-600x600.jpg', 'Thông số kỹ thuật Adapter Sạc Type C PD 25W Samsung EP-TA800N\r\nModel: EP-TA800N\r\nChức năng: Sạc\r\nĐầu ra: Type C 25W\r\nDòng sạc tối đa: 25 W\r\nKích thước: Dài 7.8 cm - Ngang 4.7 cm - Cao 2.6 cm\r\nCông nghệ/Tiện ích: Power Delivery\r\nThương hiệu của: Hàn Quốc\r\nSản xuất tại: Việt Nam\r\nHãng: Samsung.', 1, '2021-10-09 21:10:18'),
(61, 'Máy tính bảng Samsung Galaxy Tab S6 Lite', 2, 3, 9990000, 'samsung-galaxy-tab-s6-lite-600x600-2-600x600.jpg', 'Cấu hình Máy tính bảng Samsung Galaxy Tab S6 Lite\r\nMàn hình: 10.4\", PLS LCD\r\nHệ điều hành: Android 10\r\nChip: Exynos 9611\r\nRAM: 4 GB\r\nBộ nhớ trong: 64 GB\r\nKết nối: Hỗ trợ 4G, Có nghe gọi\r\nSIM: 1 Nano SIM\r\nCamera sau: 8 MP\r\nCamera trước: 5 MP\r\nPin, Sạc: 7040 mAh, 10 W\r\nHãng: Samsung.', 0, '2021-10-31 21:07:07'),
(62, 'Điện thoại Samsung Galaxy A72', 2, 1, 10490000, 'samsung-galaxy-a72-thumb-balck-600x600-600x600.jpg', 'Cấu hình Điện thoại Samsung Galaxy A72\r\nMàn hình: Super AMOLED, 6.7\", Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 64 MP & Phụ 12 MP, 8 MP, 5 MP\r\nCamera trước: 32 MP\r\nChip: Snapdragon 720G\r\nRAM: 8 GB\r\nBộ nhớ trong: 256 GB\r\nSIM: 2 Nano SIM, Hỗ trợ 4G\r\nPin, Sạc: 5000 mAh, 25 W', 0, '2021-10-31 21:04:51'),
(63, 'Điện thoại Samsung Galaxy S21+ 5G 256GB', 2, 1, 20990000, 'samsung-galaxy-s21-ultra-bac-600x600-1-600x600.jpg', 'Cấu hình Điện thoại Samsung Galaxy S21+ 5G 256GB\r\nMàn hình: Dynamic AMOLED 2X6.7\"Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 12 MP & Phụ 64 MP, 12 MP\r\nCamera trước: 10 MP\r\nChip: Exynos 2100\r\nRAM: 8 GB\r\nBộ nhớ trong: 256 GB\r\nSIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 5G\r\nPin, Sạc: 4800 mAh, 25 W', 1, '2021-10-21 05:42:58'),
(64, 'Điện thoại Samsung Galaxy A52s 5G ', 2, 1, 10990000, 'samsung-galaxy-a52s-5g-mint-600x600.jpg', 'Cấu hình Điện thoại Samsung Galaxy A52s 5G\r\nMàn hình: Super AMOLED, 6.5\", Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP\r\nCamera trước: 32 MP\r\nChip: Snapdragon 778G 5G 8 nhân\r\nRAM: 8 GB\r\nBộ nhớ trong: 128 GB\r\nSIM: 2 Nano SIM, Hỗ trợ 5G\r\nPin, Sạc: 4500 mAh, 25 W', 1, '2021-11-15 21:01:40'),
(65, 'Điện thoại Samsung Galaxy A03s', 2, 1, 3690000, 'samsung-galaxy-a03s-blue-600x600.jpg', 'Cấu hình Điện thoại Samsung Galaxy A03s\r\nMàn hình: PLS LCD, 6.5\", HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 13 MP & Phụ 2 MP, 2 MP\r\nCamera trước: 5 MP\r\nChip: MediaTek MT6765\r\nRAM: 4 GB\r\nBộ nhớ trong: 64 GB\r\nSIM: 2 Nano SIM, Hỗ trợ 4G\r\nPin, Sạc: 5000 mAh, 7.75 W', 1, '2021-11-21 21:00:38'),
(69, 'Tai nghe Bluetooth AirPods Pro Wireless Charge Apple MWP22', 1, 4, 5490000, 'airpods-pro-wireless-charge-apple-mwp22-ava-600x600.jpg', 'Thông số kỹ thuật Tai nghe Bluetooth AirPods Pro Wireless Charge Apple MWP22\r\nThời gian tai nghe: Dùng 4.5 giờ - Sạc 2 giờ\r\nThời gian hộp sạc: Dùng 24 giờ - Sạc 3 giờ\r\nCổng sạc: Lightning, Sạc không dây\r\nCông nghệ âm thanh: Active Noise Cancellation, Adaptive EQ, Transparency Mode\r\nTương thích: Android, iOS (iPhone)\r\nỨng dụng kết nối: Siri\r\nTiện ích: Chống nước, Chống ồn, Có mic thoại\r\nHỗ trợ kết nối: Bluetooth 5.0\r\nĐiều khiển bằng: Cảm ứng chạm\r\nHãng: Apple.', 0, '2021-11-15 21:21:06'),
(70, 'Chuột Bluetooth Apple MK2E3 Trắng', 1, 4, 2365000, 'chuot-bluetooth-apple-mk2e3-trang-avatar-600x600.jpg', 'Thông số kỹ thuật Chuột Bluetooth Apple MK2E3 Trắng\r\nTương thích: iPadOS 13.4 trở lên, MacOS (MacBook, iMac)\r\nĐộ phân giải mặc định: 1300 DPI\r\nCách kết nối: Bluetooth, Lightning, Wireless\r\nĐèn LED: Hãng không thông báo\r\nThời gian: Dùng 1 tháng\r\nCổng sạc: Lightning\r\nTrọng lượng: 99 g\r\nThương hiệu của: Mỹ\r\nSản xuất tại: Trung Quốc\r\nHãng: Apple.', 0, '2021-11-22 21:23:41'),
(71, 'Tai nghe chụp tai Bluetooth AirPods Max Apple MGYH3 ', 1, 4, 13990000, 'bluetooth-airpods-max-apple-ava-600x600.jpg', 'Thông số kỹ thuật Tai nghe chụp tai Bluetooth AirPods Max Apple MGYH3\r\nPin: Dùng 20 giờ - Sạc 3 giờ\r\nCổng sạc: Lightning\r\nCông nghệ âm thanh: Active Noise Cancellation, Adaptive EQ, Spatial Audio, Transparency Mode\r\nTương thích: Android, iOS (iPhone)\r\nTiện ích: Chống ồn\r\nĐiều khiển bằng: Phím nhấn\r\nHãng: Apple.', 1, '2021-10-21 05:42:58'),
(72, 'Tai nghe nhét tai Earpods Apple MNHF2', 1, 4, 790000, 'tai-nghe-earpods-apple-md827fea-avatar-1-600x600.jpg', 'Thông số kỹ thuật Tai nghe nhét tai Earpods Apple MNHF2 \r\nJack cắm: 3.5 mm\r\nTương thích: Android, iOS (iPhone), Windows, Windows Phone\r\nTiện ích: Có mic thoại\r\nĐiều khiển bằng: Phím nhấn\r\nPhím điều khiển: Chuyển bài hát, Mic thoại, Nghe/nhận cuộc gọi, Phát/dừng chơi nhạc, Tăng/giảm âm lượng\r\nHãng: Apple.', 0, '2021-10-21 05:42:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'Phụ kiện'),
(5, 'Đồng hồ thông minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`, `fullname`, `address`, `email`, `phone`) VALUES
(4, 'misa', 'e10adc3949ba59abbe56e057f20f883e', 1, 'misa', 'djsg', 'rt@gmai.com', '0456789120'),
(5, 'khoi', 'e10adc3949ba59abbe56e057f20f883e', 1, 'kkk', 'Quảng Ninh', 'd@gmail.com', '1234567890'),
(6, 'admin', '202cb962ac59075b964b07152d234b70', 0, '', '', '', ''),
(7, 'khoi123', 'e10adc3949ba59abbe56e057f20f883e', 1, 'afadf', 'Quảng Ninh', 'd@gmail.com', '1234567890');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
