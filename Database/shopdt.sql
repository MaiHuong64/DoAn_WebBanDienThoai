-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2024 at 03:04 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shopdt`
--
CREATE DATABASE `shopdt` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `shopdt`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoidung`
--

DROP TABLE IF EXISTS `tbl_nguoidung`;
CREATE TABLE IF NOT EXISTS `tbl_nguoidung` (
  `MaNguoiDung` int(10) NOT NULL,
  `TenNguoiDung` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TenDangNhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `QuyenHan` tinyint(1) NOT NULL,
  `Khoa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`MaNguoiDung`, `TenNguoiDung`, `TenDangNhap`, `MatKhau`, `QuyenHan`, `Khoa`) VALUES
(1, 'Trần Văn A', 'tva', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(2, 'Nguyễn Văn Hùng', 'nvhung', 'e10adc3949ba59abbe56e057f20f883e 	', 1, 0),
(3, 'Nguễn Thị D', 'ntd', 'e10adc3949ba59abbe56e057f20f883e', 2, 0),
(4, 'Trần Văn C', 'tvc123456', 'e10adc3949ba59abbe56e057f20f883e', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhasanxuat`
--

DROP TABLE IF EXISTS `tbl_nhasanxuat`;
CREATE TABLE IF NOT EXISTS `tbl_nhasanxuat` (
  `IdNhaSanXuat` int(20) NOT NULL AUTO_INCREMENT,
  `TenNhaSanXuat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IdNhaSanXuat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_nhasanxuat`
--

INSERT INTO `tbl_nhasanxuat` (`IdNhaSanXuat`, `TenNhaSanXuat`) VALUES
(1, 'Apple'),
(2, 'Nokia'),
(3, 'Huawei'),
(4, 'Itel'),
(5, 'Oppo'),
(6, 'Redmagic'),
(7, 'Sony'),
(8, 'Oneplus'),
(9, 'Realme'),
(10, 'Samsung'),
(11, 'Vivo'),
(12, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

DROP TABLE IF EXISTS `tbl_sanpham`;
CREATE TABLE IF NOT EXISTS `tbl_sanpham` (
  `IdSanPham` int(10) NOT NULL AUTO_INCREMENT,
  `MaSanPham` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenSanPham` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `IdNhaSanXuat` int(20) NOT NULL,
  `HinhAnh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` int(10) NOT NULL,
  `MoTa` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(10) NOT NULL,
  `TiLeGiamGia` int(4) NOT NULL,
  `CauHinh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `LuotXem` int(11) NOT NULL,
  PRIMARY KEY (`IdSanPham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`IdSanPham`, `MaSanPham`, `TenSanPham`, `IdNhaSanXuat`, `HinhAnh`, `DonGia`, `MoTa`, `SoLuong`, `TiLeGiamGia`, `CauHinh`, `LuotXem`) VALUES
(1, 'Apple001', 'iPhone 11 128GB', 1, 'Apple001.jpg', 10690000, 'iPhone 11 còn có thêm một camera góc siêu rộng và có độ phân giải tương tự, khiến hình ảnh trở nên sắc nét, tự nhiên hơn.', 10, 4, '<p>Màn hình: 6.1", Độ phân giải màn hình: 828 x 1792 Pixels, Chip xử lý (CPU): Apple A13 Bionic 6 nhân,  Bộ nhớ trong: 128GB, RAM: 4GB </p>\r\n', 8),
(3, 'Apple002', 'iPhone 11 256GB', 1, 'Apple002.jpg', 12500000, 'Laptop Dell Inspiron 14 7430 i5 1335U (N7430I58W1) sở hữu hiệu năng vượt trội từ con chip Intel gen 13 hiện đại, tính năng gập mở 360 độ độc đáo', 50, 5, '<p>Màn hình: 6.1",  Cấu hình camera gồm: cam góc rộng f/1.8, camera tele f/2.0, camera ultrawide 120 độ f/2.4.</p>\r\n', 4),
(4, 'Apple003', 'iPhone 11 Pro 256GB', 1, 'Apple003.jpg', 13990000, 'iPhone 11 Pro 256GB là mẫu smartphone cao cấp của Apple, ra mắt vào năm 2019. Với thiết kế sang trọng, hiệu năng mạnh mẽ và hệ thống camera chuyên nghiệp, đây là lựa chọn lý tưởng cho người dùng yêu thích nhiếp ảnh và trải nghiệm di động đỉnh cao.', 40, 5, '<p>Màn hình: 5.8 inch OLED Super Retina XDR, độ phân giải 1125 x 2436 pixels, hỗ trợ HDR10 và Dolby Vision.Bộ nhớ trong: 256GB (không hỗ trợ thẻ nhớ ngoài).</p>\r\n', 6),
(5, 'Apple004', 'iPhone 11 Pro Max 256GB', 1, 'Apple004.jpg', 9190000, 'iPhone 11 Pro Max 256GB vẫn là một lựa chọn hấp dẫn nếu bạn tìm kiếm một chiếc smartphone cao cấp với hiệu năng mạnh mẽ, camera chất lượng và thiết kế sang trọng', 100, 2, '<p>Màn hình: OLED Super Retina XDR 6.5 inch, độ phân giải 2688 x 1242 pixels, hỗ trợ HDR10 và Dolby Vision.</p>\r\n', 6),
(6, 'Apple005', 'iPhone 12 128GB', 1, 'Apple005.jpg', 7000000, 'iPhone 12 128GB là mẫu smartphone thuộc dòng iPhone 12 của Apple, được giới thiệu vào tháng 10 năm 2020. Máy nổi bật với thiết kế vuông vức, màn hình OLED 6.1 inch, hỗ trợ 5G và trang bị chip A14 Bionic mạnh mẽ.', 25, 8, '<p>Màn hình: 6.1 inch Super Retina XDR OLED, độ phân giải 2532 x 1170 pixels (~460 ppi), hỗ trợ HDR, True Tone và Wide color (P3) </p>\r\n', 27),
(7, 'Apple006', 'iPhone 12 256GB', 1, 'Apple006.jpg', 9000000, 'iPhone 12 128GB là một trong những mẫu điện thoại thông minh thuộc thế hệ thứ 14 của Apple, ra mắt vào tháng 10 năm 2020. Mặc dù đã bị ngừng sản xuất vào tháng 9 năm 2023, thiết bị này vẫn được ưa chuộng nhờ hiệu năng mạnh mẽ và thiết kế hiện đại.', 20, 1, '<p>Màn hình: Super Retina XDR OLED 6.1 inch, độ phân giải 2532 x 1170 pixel (~460 ppi), hỗ trợ HDR10 và Dolby Vision.</p>\r\n', 14),
(8, 'Apple007', 'iPhone 12 mini 128GB', 1, 'Apple007.jpg', 16550000, 'iPhone 12 mini là mẫu điện thoại nhỏ gọn nhất trong dòng iPhone 12. Dù có kích thước nhỏ, máy vẫn sở hữu thiết kế hiện đại với viền phẳng, hỗ trợ 5G, màn hình OLED chất lượng cao ', 90, 5, '<p>Màn hình: Super Retina XDR OLED 5.4 inch, độ phân giải 2340 x 1080 pixel (~476 ppi), hỗ trợ HDR, True Tone, dải màu rộng (P3) và Haptic Touch.</p>\r\n', 0),
(9, 'Apple008', 'iPhone 12 mini 256GB', 1, 'Apple008.jpg', 8100000, 'iPhone 12 mini là mẫu điện thoại nhỏ gọn nhất trong dòng iPhone 12. Với thiết kế viền phẳng, mặt trước bằng Ceramic Shield và mặt lưng kính, máy mang lại cảm giác cao cấp và hiện đại.', 50, 2, '<p>Màn hình: 5.4 inch Super Retina XDR OLED, độ phân giải 2340 x 1080 pixel (476 ppi), hỗ trợ HDR10 và Dolby Vision .</p>\r\n', 1),
(10, 'Nokia001', 'Nokia G21', 2, 'Nokia001.jpg', 3400000, 'Điện thoại phổ thông với thời lượng pin dài và thiết kế bền bỉ.', 10, 3, '<h1>Màn hình 6.5" HD+ 90Hz, Chip Unisoc T606, RAM 4–6GB, Camera sau 50MP + 2MP + 2MP, Pin 5.050 mAh, sạc 18W</h1>\r\n', 2),
(11, 'Nokia002', 'Nokia C31', 2, 'Nokia002.jpg', 7780000, 'Nokia C31 Dual-SIM 128GB ROM + 4GB RAM (Only GSM | No CDMA) Factory Unlocked 4G/LTE Smartphone (Charcoal)', 20, 2, '<p>Operating System Android, Ram Memory Installed Size  4 GB, Memory Storage Capacity 128 GB, Screen Size 22 Hundredths-Inches</p>\r\n', 0),
(12, 'Nokia003', 'Nokia XR20', 2, 'Nokia003.jpg', 8560000, 'Nokia XR20 Dual-SIM 128GB ROM + 6GB RAM GSM Unlocked - Granite Grey', 20, 5, '<p>Service provider unlocked, Sreen size: 6.8", HD capacity: 256GB, Ram memory: 12GB</p>\r\n', 1),
(13, 'Huawei001', 'Huawei P50 Pro', 3, 'Huawei001.jpg', 20700000, 'High end phone with beautiful design and quality camera.', 50, 6, '<h1>In Stock Original Huawei P50 Pro 4G Smart Phone 6.6'' OLED 120Hz FHD+2700x1228 Screen 4360mAh Battery 50MP Main Camera OTG NFC</h1>\r\n', 2),
(14, 'Huawei002', 'Huawei Mate 40 Pro', 3, 'Huawei002.jpg', 12700000, 'High-end smartphone with powerful performance and excellent camera.', 20, 8, '<h1>Màn hình: 6.76" OLED 90Hz, Chip: Kirin 9000, Camera sau: 50MP (chính) + 12MP (telephoto) + 20MP (ultrawide), Pin: 4.400 mAh, sạc nhanh 66W, RAM: 8GB</h1>\r\n', 1),
(15, 'Huawei003', 'Huawei nova 11i', 3, 'Huawei003.jpg', 10000000, 'Mid-range smartphone with modern design, large screen and high-resolution camera.', 10, 9, '<h1>Màn hình: 6.8" IPS LCD, độ phân giải 1080 x 2388 pixels, tần số quét 90Hz, Chip: Qualcomm Snapdragon 680 4G (6nm), Pin: 5000 mAh, sạc nhanh 40W, RAM: 8GB, Camera sau: 48MP (chính) + 2MP (độ sâu)</h1>\r\n', 0),
(16, 'Itel001', 'Itel A60', 4, 'itel001.jpg',3355000, 'Itel A70 A665L 256GB 4GB RAM Dual SIM 6.6 Screen Smartphone-Black (LTE BR)', 60, 8, '<h1>Màn hình: 6.6" HD+, Chip: Unisoc SC9832E, RAM: 2GB, Bộ nhớ trong: 32GB, Camera sau: 8MP + AI </h1>\r\n', 1),
(17, 'Itel002', 'Itel S23', 4, 'itel002.jpg', 4200000, 'itel S23 ( 256 G8 8GB RAM) 50MP 6.6" UFS 2.2 Dual Sim Global Version.', 78, 2, '<h1>Màn hình: 6.6" HD+, Chip: Unisoc T606, RAM: 4GB, Bộ nhớ trong: 128GB, Pin: 5000 mAh</h1>\r\n', 1),
(18, 'Itel003', 'Itel Vision 5', 4, 'itel003.jpg', 2000000, 'itel version 5( 64 GB) (4 GB RAM)50MP Camera 6.6 inch Dual Sim Global Version', 20, 9, '<h1><span style="font-size:18px">Màn hình: 6.6" HD+, Chip: Unisoc SC9863A, RAM: 3GB, Bộ nhớ trong: 32GB, Camera sau: 8MP + AI, Pin: 5000 mAh</span></h1>\r\n', 1),
(19, 'Oppo001', 'Oppo Reno11', 5, 'oppo001.jpg', 7950000, 'Mid-range smartphone with stylish design, powerful performance and quality camera system. ', 80, 10, '<p>Màn hình: 6.7" AMOLED cong, FHD+, 120Hz, Chip: MediaTek Dimensity 8200 (4nm), Camera sau: 50MP (chính, OIS) + 8MP (góc siêu rộng) + 32MP (tele), Pin: 4.800 mAh, sạc nhanh 67W </p>\r\n', 0),
(20, 'Oppo002', 'Oppo A78', 5, 'oppo002.jpg', 9400000, 'OPPO A78 5G (RAM 8GB, 128GB) 6.56" Dual SIM Google play Phone', 10, 7, '<h1>Màn hình: 6.43" AMOLED, độ phân giải Full HD+, Chip xử lý: Qualcomm Snapdragon 680, Bộ nhớ trong: 256GB, hỗ trợ thẻ nhớ microSD lên đến 1TB, Pin: 5000 mAh, hỗ trợ sạc nhanh 67W. </h1>\r\n', 1),
(21, 'Oppo003', 'Oppo Find X5 Pro', 5, 'oppo003.jpg', 28260000, 'This Smartphone is not compatible/will not work with any CDMA Networks including: VERIZON, SPRINT, US CELLULAR.', 70, 6, '<h1>Oppo Find X5 Pro 5G Dual 256GB 12GB RAM Factory Unlocked (GSM Only | No CDMA - not Compatible with Verizon/Sprint) China Version | No Google Play Installed - Black</h1>\r\n', 1),
(22, 'Redmagic001', 'Redmagic 10 Pro+', 6, 'redmagic001.jpg', 32280000, 'Hệ thống làm mát ICE-X, thiết kế không viền với camera ẩn dưới màn hình', 20, 9, '<h1>RedMagic 10 Pro+ Plus 7'' AMOLED 1.5K display Snapdragon 8 Elite 16+512GB 24+1TB 7000mAh 5G Gaming Smart phone</h1>\r\n', 2),
(23, 'Redmagic002', 'Redmagic 10 Pro', 6, 'redmagic002.jpg', 30500000, 'The device is optimized for seamless multitasking and gaming, setting a new standard for gaming smartphones.', 30, 6, '<h1>REDMAGIC 10 Pro Smartphone 5G, 144Hz Gaming Phone, 6.85" FHD+, Under Display Camera, 7050mAh Android Phone, Snapdragon 8 Elite, 24G+1TB, 80W Charger, Dual-Sim, Unlocked Phone Transparent</h1>\r\n', 0),
(24, 'Redmagic003', 'Redmagic 9 Pro', 6, 'redmagic003.jpg', 32550000, 'Chipset Snapdragon 8 Gen 3', 20, 9, '<h1>Red magic 9 Pro+ 9Pro Plus gaming android redmagic 5g with 6.8inch Snapdragon 8 Gen 3 16GB+512GB</h1>\r\n', 0),
(25, 'Sony001', ' Sony Xperia 1 VI', 7, 'sony001.jpg', 96670000, 'Sony Xperia 1 VI 5G Scarlet 512GB + 12GB Dual-SIM Unlocked Global NEW', 20, 8, '<h1>Màn hình: 6.5 inch OLED, độ phân giải 4K, tần số quét 120Hz, Chip xử lý: Qualcomm Snapdragon 8 Gen 3, Bộ nhớ trong: 256GB/512GB, hỗ trợ thẻ nhớ microSD, Camera sau: 48MP (chính) + 12MP (telephoto) + 12MP (ultrawide), Pin: 5000 mAh, hỗ trợ sạc nhanh 30W và sạc không dây 15W</h1>\r\n', 1),
(26, 'Sony002', 'Sony Xperia 5 V', 7, 'sony002.jpg', 25990000, 'Global Version. No Warranty. This device is globally unlocked and ready to be used with your preferred GSM Carrier', 10, 7, '<h1>Sony Xperia 5 V 5G Dual XQ-DE72 256GB 8GB RAM Unlocked (GSM Only | No CDMA - not Compatible with Verizon/Sprint) Global, Mobile Cell Phone - Blue</h1>\r\n', 1),
(27, 'Sony003', 'Sony Xperia Pro-I', 7, 'sony003.jpg', 13650000, 'Sony Xperia 5 V', 14, 8, '<h1>Xperia PRO-I -5G smartphone with 1-inch image sensor, triple camera array and120Hz 6.5” 21:9 4K HDR OLED Display</h1>\r\n', 0),
(28, 'Oneplus001', 'OnePlus 11 5G', 8, 'oneplus001.jpg', 21130000, '6.7" AMOLED LTPO3, độ phân giải QHD+ (3216 x 1440), tần số quét 1–120Hz', 100, 10, '<h1>OnePlus 11 5G | 16GB RAM+256GB | Dual-SIM | Titan Black | US Factory Unlocked Android Smartphone | 5000 mAh battery | 80W Fast charging | Hasselblad Camera | 120Hz Fluid Display | 4nm Processor</h1>\r\n', 0),
(29, 'Oneplus002', 'OnePlus - 13 512GB', 8, 'oneplus002.jpg', 25995000, 'OnePlus - 13 512GB (Unlocked) - Midnight Ocean', 40, 8, '<h1>6.7" AMOLED, độ phân giải FHD+ (1080 x 2412), tần số quét 120Hz</h1>\r\n', 1),
(30, 'Oneplus003', 'OnePlus 10 Pro', 8, 'oneplus003.jpg', 16887000, 'OnePlus - 10 Pro 5G 12GB+256GB - Volcanic Black (Unlocked)', 20, 8, '<h1>6.7" AMOLED LTPO2, độ phân giải QHD+ (3216 x 1440), tần số quét 120Hz</h1>\r\n', 2),
(31, 'Realme001', 'Realme 11 Pro+ 5G', 9, 'realme001.jpg', 20950000, 'Mẫu flagship của Realme với thiết kế cao cấp, camera 200MP và sạc nhanh 100W.', 100, 9, '<h1>6.7 inch AMOLED cong, độ phân giải FHD+ (2412 x 1080), tần số quét 120Hz, Vi xử lý: MediaTek Dimensity 7050 5G</h1>\r\n', 5),
(32, 'Realme002', 'Realme C67', 9, 'realme002.jpg',6450000, 'Điện thoại tầm trung với camera 108MP, thiết kế mỏng nhẹ và hiệu năng ổn định.', 35, 2, '<h1>6.72 inch IPS LCD, độ phân giải FHD+ (1080 x 2400), tần số quét 90Hz, Qualcomm Snapdragon 685 (6nm)</h1>\r\n', 0),
(33, 'Realme003', 'Realme Narzo 60 5G', 9, 'realme003.jpg', 8770000, 'Điện thoại 5G với thiết kế thời trang, camera 64MP và màn hình Super AMOLED', 20, 12, '<h1>6.43 inch Super AMOLED, độ phân giải FHD+ (1080 x 2400), tần số quét 90Hz, MediaTek Dimensity 6020 (7nm)</h1>\r\n', 1),
(34, 'Samsung001', 'Samsung Galaxy S24 Ultra 1TB', 10, 'samsung001.jpg', 43170000, 'Flagship cao cấp của Samsung với thiết kế khung titan, tích hợp bút S Pen và nhiều tính năng AI tiên tiến như "Circle to Search" và "Browsing Assist".', 70, 2, '<h1>6.8 inch Dynamic AMOLED 2X, độ phân giải 1440 x 3120, tần số quét 120Hz, Qualcomm Snapdragon 8 Gen 3</h1>\r\n', 2),
(35, 'Samsung002', 'Samsung Galaxy A54 5G 256GB', 10, 'samsung002.jpg', 12980000, 'Điện thoại tầm trung với thiết kế hiện đại, hiệu năng ổn định và hỗ trợ cập nhật phần mềm lâu dài.', 20, 5, '<h1>6.4 inch Super AMOLED, độ phân giải 1080 x 2340, tần số quét 120Hz, Vi xử lý: Exynos 1380</h1>\r\n', 2),
(36, 'Samsung003', 'Samsung Galaxy Z Fold5 1TB', 10, 'samsung003.jpg', 36404000, 'Điện thoại gập cao cấp với thiết kế mỏng nhẹ, hiệu năng mạnh mẽ và hỗ trợ bút S Pen.', 40, 9, '<h1>7.6 inch Dynamic AMOLED 2X, độ phân giải 1812 x 2176, tần số quét 120Hz, Qualcomm Snapdragon 8 Gen 2, Pin: 4400 mAh, sạc nhanh 25W, sạc không dây 15W</h1>\r\n', 1),
(37, 'Vivo001', 'Vivo V30 Pro 5G', 11, 'vivo0001.jpg', 15795000, ' Mẫu điện thoại tầm trung cao cấp với thiết kế mỏng nhẹ, hệ thống camera ZEISS 50MP và sạc nhanh 80W.', 70, 8, '<h1>6.78 inch AMOLED cong 3D, độ phân giải 2800 x 1260, tần số quét 120Hz, v</h1>\r\n', 1),
(38, 'Vivo002', 'Vivo Y100 5G', 11, 'vivo002.jpg', 14363000, 'Điện thoại tầm trung với thiết kế trẻ trung, hiệu năng ổn định và sạc nhanh 80W.', 70, 8, '<h1>6.67 inch AMOLED, độ phân giải 1080 x 2400, tần số quét 120Hz, Qualcomm Snapdragon 4 Gen 2</h1>\r\n', 0),
(39, 'Vivo003', 'Vivo X90 Pro', 11, 'vivo003.jpg', 35129000, 'Flagship cao cấp với hiệu năng mạnh mẽ, camera ZEISS và sạc siêu nhanh 120W.', 70, 9, '<h1>6.78 inch AMOLED, độ phân giải 1260 x 2800, tần số quét 120Hz, MediaTek Dimensity 9200, Android 13 với giao diện Funtouch OS 13</h1>\r\n', 1),
(40, 'Xiaomi001', 'Xiaomi 14', 12, 'xiaomi001.jpg', 17148000, 'Flagship cao cấp với thiết kế nhỏ gọn, hiệu năng mạnh mẽ và hệ thống camera hợp tác cùng Leica.', 70, 10, '<h1>6.36 inch LTPO OLED, độ phân giải 1200 x 2670, tần số quét 120Hz, hỗ trợ Dolby Vision và HDR10+, Qualcomm Snapdragon 8 Gen 3</h1>\r\n', 8),
(41, 'Xiaomi002', 'Xiaomi 13T', 12, 'xiaomi002.jpg', 27450000, 'Điện thoại tầm trung cao cấp với camera hợp tác cùng Leica và sạc nhanh 67W.', 20, 2, '<h1>6.67 inch AMOLED, độ phân giải 1220 x 2712, tần số quét 144Hz</h1>\r\n', 1),
(42, 'Xiaomi003', 'Xiaomi 15 5G 12Gb/512Gb 6.3 Black', 12, 'xiaomi003.jpg', 29482000, 'Xiaomi 15 5G là lựa chọn lý tưởng cho những ai tìm kiếm một chiếc điện thoại flagship nhỏ gọn nhưng vẫn mạnh mẽ.', 20, 9, '<h1>6.36 inch LTPO AMOLED, độ phân giải 2670 x 1200, tần số quét 120Hz, hỗ trợ Dolby Vision và HDR10+</h1>\r\n', 1),
(43, 'Xiaomi004', 'Xiaomi 13T 5G 256Gb', 12, 'xiaomi004.jpg', 10642000, 'Hỗ trợ quay video 4K, chế độ chụp Leica Authentic và Vibrant', 100, 8, '<h1>6.67 inch AMOLED CrystalRes, độ phân giải 1220 x 2712 pixels, tần số quét 144Hz, hỗ trợ HDR10+</h1>\r\n', 1);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

DROP TABLE IF EXISTS `tbl_khachhang`;
CREATE TABLE IF NOT EXISTS `tbl_khachhang` (
  `MaKH` int(10) NOT NULL AUTO_INCREMENT,
  `HoVaTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NamSinh` year(4) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `SoDienThoai` varchar(10) NOT NULL,
  `DiaChi` nvarchar(50) COLLATE utf8_unicode_ci,
  PRIMARY KEY (`MaKH`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`MaKH`, `HoVaTen`, `NamSinh`, `GioiTinh`, `SoDienThoai`, `DiaChi`) VALUES
(1, 'Trần Văn An', 2002, 0, '0893456243', 'An Giang'),
(2, 'Nguyễn Văn Hoàng', 2003, 0, '0989008792', 'Cần Thơ'),
(3, 'Lê Thị Mỵ', 2004, 1, '0736789273', 'Bạc Liêu'),
(4, 'Nguyễn Thị Hương', 2005, 1, '0987654321', 'Sóc Trăng'),
(5, 'Nguyễn Minh Huy', 1999, 0, '0901234567', 'Hà Nội'),
(6, 'Nguyễn Thị Mỹ Duyên', 1998, 1, '0912345678', 'Hà Tĩnh'),
(7, 'Bùi Đình Văn', 2000, 0, '0923456789', 'Đà Nẵng'),
(8, 'Trần Thị Mỹ Ngân', 1997, 1, '0934567890', 'TP Hồ Chí Minh'),
(9, 'Đoàn Văn Thành', 2000, 0, '0945678901', 'Đồng Nai'),
(10, 'Cao Chí Phong', 2002, 0, '0956789012', 'Bình Dương'),
(11, 'Trần Thị Mỹ Ngọc', 1993,1, '0967890123', 'Long An'),
(12, 'Phan Thị Như Ý', 2000, 1, '0978901234', 'Tiền Giang'),
(13, 'Phan Văn An', 1999, 0, '0989012345', 'Kiên Giang'),
(14, 'Lý Như Ý', 2000, 1, '0990123456', 'Cà Mau'),
(15, 'Nguyễn Ngọc An Khang', 2004, 0, '0901234567', 'Hậu Giang');
