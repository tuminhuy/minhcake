-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 04:56 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bakery_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `bk_binh_luan`
--

CREATE TABLE IF NOT EXISTS `bk_binh_luan` (
  `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT,
  `ma_san_pham` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ma_nhan_vien` int(11) NOT NULL,
  `tieu_de` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_binh_luan` datetime NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`ma_binh_luan`),
  KEY `ma_san_pham` (`ma_san_pham`),
  KEY `ma_san_pham_2` (`ma_san_pham`),
  KEY `ma_khach_hang` (`ma_khach_hang`),
  KEY `ma_nhan_vien` (`ma_nhan_vien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bk_chi_tiet_don_hang`
--

CREATE TABLE IF NOT EXISTS `bk_chi_tiet_don_hang` (
  `ma_don_hang` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `ma_don_hang` (`ma_don_hang`),
  KEY `ma_san_pham` (`ma_san_pham`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bk_chu_de`
--

CREATE TABLE IF NOT EXISTS `bk_chu_de` (
  `ma_chu_de` varchar(10) CHARACTER SET latin1 NOT NULL,
  `ten_chu_de` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ma_chu_de`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bk_chu_de`
--

INSERT INTO `bk_chu_de` (`ma_chu_de`, `ten_chu_de`) VALUES
('01', 'Bánh cưới'),
('02', 'Bánh sinh nhật'),
('03', 'Bánh lễ tiệc'),
('04', 'Loại bánh khác');

-- --------------------------------------------------------

--
-- Table structure for table `bk_don_hang`
--

CREATE TABLE IF NOT EXISTS `bk_don_hang` (
  `ma_don_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ma_khach_hang` int(11) NOT NULL,
  `ho_ten_nguoi_nhan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email_nguoi_nhan` varchar(100) NOT NULL,
  `sdt_nguoi_nhan` int(11) NOT NULL,
  `dia_diem_giao` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dat_hang` datetime NOT NULL,
  `ngay_giao_hang` datetime NOT NULL,
  `trang_thai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phi_van_chuyen` int(11) NOT NULL,
  `tong_gia` double NOT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_don_hang`),
  KEY `ma_khach_hang` (`ma_khach_hang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bk_huong_vi`
--

CREATE TABLE IF NOT EXISTS `bk_huong_vi` (
  `ma_huong_vi` varchar(10) CHARACTER SET latin1 NOT NULL,
  `ten_huong_vi` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`ma_huong_vi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bk_huong_vi`
--

INSERT INTO `bk_huong_vi` (`ma_huong_vi`, `ten_huong_vi`) VALUES
('D01', 'Dâu'),
('N01', 'Nho'),
('SCL01', 'Socola'),
('TX01', 'Trà xanh'),
('VN01', 'Vani');

-- --------------------------------------------------------

--
-- Table structure for table `bk_khach_hang`
--

CREATE TABLE IF NOT EXISTS `bk_khach_hang` (
  `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khach_hang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `gioi_tinh` tinyint(1) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `so_tien` int(11) DEFAULT NULL,
  PRIMARY KEY (`ma_khach_hang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bk_khach_hang`
--

INSERT INTO `bk_khach_hang` (`ma_khach_hang`, `ten_khach_hang`, `dia_chi`, `sdt`, `gioi_tinh`, `email`, `username`, `password`, `so_tien`) VALUES
(1, 'user1', 'hcm', 122123456, 0, 'user1@gmail.com', 'user1', '123456', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `bk_khuyen_mai`
--

CREATE TABLE IF NOT EXISTS `bk_khuyen_mai` (
  `ma_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khuyen_mai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_ap_dung` datetime DEFAULT NULL,
  `ngay_ket_thuc` datetime DEFAULT NULL,
  `chiet_khau` double DEFAULT NULL,
  PRIMARY KEY (`ma_khuyen_mai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bk_khuyen_mai`
--

INSERT INTO `bk_khuyen_mai` (`ma_khuyen_mai`, `ten_khuyen_mai`, `ngay_ap_dung`, `ngay_ket_thuc`, `chiet_khau`) VALUES
(1, 'Khuyến mãi 14/2', '2017-02-12 00:00:00', '2017-02-16 00:00:00', 5),
(3, 'Khuyến mãi 8/3', '2017-03-06 00:00:00', '2017-02-11 00:00:00', 10),
(4, 'Giảm giá 5%', '2017-02-09 00:00:00', NULL, 5),
(5, 'Giảm giá 10%', '2017-02-16 00:00:00', NULL, 10),
(6, 'Giảm giá 15%', '2017-02-07 00:00:00', NULL, 15),
(7, 'Giảm giá 20%', '2017-02-23 00:00:00', '2017-04-05 00:00:00', 20),
(8, 'Không giảm giá', '2017-02-10 00:00:00', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bk_loai_nhan_vien`
--

CREATE TABLE IF NOT EXISTS `bk_loai_nhan_vien` (
  `ma_loai_nhan_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loai_nhan_vien` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_loai_nhan_vien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bk_loai_nhan_vien`
--

INSERT INTO `bk_loai_nhan_vien` (`ma_loai_nhan_vien`, `ten_loai_nhan_vien`, `ghi_chu`) VALUES
(1, 'Admin', 'Quyền cao nhất'),
(2, 'Quản trị tin tức', 'Quản lý việc viết tin tức'),
(3, 'Quản trị đơn hàng', 'Quản lý đơn hàng, cập nhật trạng thái đơn hàng'),
(4, 'Quản trị sản phẩm', 'Quản lý việc đăng sản phẩm và chỉnh sửa nội dung sản phẩm');

-- --------------------------------------------------------

--
-- Table structure for table `bk_nhan_vien`
--

CREATE TABLE IF NOT EXISTS `bk_nhan_vien` (
  `ma_nhan_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ma_loai_nhan_vien` int(11) DEFAULT NULL,
  `ten_nhan_vien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `gioi_tinh` tinyint(1) DEFAULT NULL,
  `username` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`ma_nhan_vien`),
  KEY `ma_loai_nhan_vien` (`ma_loai_nhan_vien`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bk_nhan_vien`
--

INSERT INTO `bk_nhan_vien` (`ma_nhan_vien`, `ma_loai_nhan_vien`, `ten_nhan_vien`, `dia_chi`, `sdt`, `gioi_tinh`, `username`, `password`, `email`) VALUES
(1, 3, 'Minh', 'bông sao', 1226981610, 0, 'tienminh1', '123456', 'wil.bro12@gmail.com'),
(2, 2, 'Duy', 'tphcm', 909090909, 0, 'anhduy1', '123456', 'duy@gmail.com'),
(3, 2, 'Quỳnh', 'tphcm', 906060606, 1, 'nhuquynh', '123456', 'quynh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bk_san_pham`
--

CREATE TABLE IF NOT EXISTS `bk_san_pham` (
  `ma_san_pham` int(11) NOT NULL AUTO_INCREMENT,
  `ma_chu_de` varchar(10) CHARACTER SET latin1 NOT NULL,
  `ma_nhan_vien` int(11) NOT NULL,
  `ma_khuyen_mai` int(11) NOT NULL,
  `ma_huong_vi` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ten_san_pham` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung_tom_tat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung_chi_tiet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `hinh_anh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `don_gia` double DEFAULT NULL,
  `ngay_them_san_pham` datetime DEFAULT NULL,
  PRIMARY KEY (`ma_san_pham`),
  KEY `MA_CHU_DE` (`ma_chu_de`),
  KEY `MA_NV` (`ma_nhan_vien`),
  KEY `MA_KM` (`ma_khuyen_mai`),
  KEY `MA_HUONGVI` (`ma_huong_vi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `bk_san_pham`
--

INSERT INTO `bk_san_pham` (`ma_san_pham`, `ma_chu_de`, `ma_nhan_vien`, `ma_khuyen_mai`, `ma_huong_vi`, `ten_san_pham`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `so_luong`, `hinh_anh`, `don_gia`, `ngay_them_san_pham`) VALUES
(1, '01', 1, 1, 'VN01', 'Bánh cưới ', 'Bánh cưới hoa tím hương vani...', 'Bánh cưới hoa tím hương vani đẹp mắt, ngon', 1, 'banhcuoi/bcuoi1.jpg', 250000, '2017-02-27 13:31:10'),
(2, '01', 1, 1, 'VN01', 'Bánh cưới hoa tím 2', 'Bánh cưới hoa tím hương vani...', 'Bánh cưới hoa tím hương vani đẹp mắt, ngon', 1, 'banhcuoi/bcuoi2.jpg', 250000, '2017-02-27 13:33:10'),
(3, '01', 1, 1, 'VN01', 'Bánh cưới 3 tầng ', 'Bánh cưới 3 tầng hương vani...', 'Bánh cưới 3 tằng hương vani đẹp mắt, ngon, trang trọng trong các lễ cưới', 1, 'banhcuoi/bcuoi3.jpg', 500000, '2017-02-27 13:35:10'),
(4, '02', 1, 3, 'SCL01', 'Bánh sinh nhật socola', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được trang trí bắt mắt, có thêm quả dâu tươi..', 1, 'banhsinhnhat/bsnhat1.jpg', 300000, '2017-02-27 13:36:10'),
(5, '02', 1, 3, 'SCL01', 'Bánh sinh nhật socola 2', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được trang trí bắt mắt, có thêm quả dâu tươi..', 1, 'banhsinhnhat/bsnhat7.jpg', 300000, '2017-02-27 13:37:10'),
(6, '02', 1, 8, 'SCL01', 'Bánh sinh nhật socola 3', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được trang trí bắt mắt, có thêm quả dâu tươi..', 1, 'banhsinhnhat/bsnhat2.jpg', 300000, '2017-02-27 13:37:10'),
(7, '03', 2, 7, 'VN01', 'Bánh ông già Noel', 'Bánh hình tròn được vẽ mặt ông già noel', 'Bánh hình tròn được vẽ mặt ông già noel trông rất dễ thương', 1, 'banhletiec/btiec3.jpg', 500000, '2017-02-27 14:01:12'),
(8, '03', 2, 7, 'SCL01', 'Bánh khúc cây 2', 'Bánh khúc cây có ông già noel....', 'Bánh khúc cây được trang trí có ông già noel ở phía trên,và khúc cây bên cạnh trông rất dễ thương', 1, 'banhletiec/btiec4.jpg', 500000, '2017-02-27 19:58:10'),
(9, '02', 1, 8, 'SCL01', 'Bánh sinh nhật socola trái tim', 'Bánh sinh nhật hương socola trái tim...', 'Bánh sinh nhật hương socola được trang trí hình trái tim ở trên, có thêm quả dâu tươi..', 1, 'banhsinhnhat/bsnhat3.jpg', 350000, '2017-02-27 13:38:10'),
(10, '02', 1, 5, 'SCL01', 'Bánh socola', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được bao phủ bởi socola, có thêm quả dâu tươi trang trí ở phía trên..', 1, 'banhsinhnhat/bsnhat4.jpg', 380000, '2017-02-27 13:39:10'),
(11, '02', 1, 6, 'SCL01', 'Bánh socola 5', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được bao phủ bởi socola, có thêm quả dâu tươi trang trí ở phía trên và thanh socola sắp xếp hình quạt..', 1, 'banhsinhnhat/bsnhat5.jpg', 400000, '2017-02-27 13:40:10'),
(12, '01', 1, 8, 'D01', 'Bánh cưới 2 tầng ', 'Bánh cưới 2 tầng hương dâu...', 'Bánh cưới 2 tằng hương dâu đẹp mắt, ngon, trang trọng', 1, 'banhcuoi/bcuoi4.jpg', 400000, '2017-02-27 13:41:10'),
(13, '01', 1, 8, 'D01', 'Bánh cưới 3 tầng(2)', 'Bánh cưới 3 tầng hương dâu...', 'Bánh cưới 2 tằng hương dâu đẹp mắt, ngon, trang trọng rất phù hợp trong lễ cưới', 1, 'banhcuoi/bcuoi5.jpg', 500000, '2017-02-27 13:42:10'),
(14, '01', 1, 1, 'D01', 'Bánh cưới hoa hồng', 'Bánh cưới hoa hồng nhiều tầng...', 'Bánh cưới được trang trí hoa hồng xung quanh, trông vừa đẹp mắt và sang trọng', 1, 'banhcuoi/bcuoi7.jpg', 800000, '2017-02-27 13:45:10'),
(15, '01', 1, 1, 'VN01', 'Bánh cưới cô dâu chú rể', 'Bánh cưới trang trí có cô dâu và chú rể', 'Bánh cưới được trang trí dễ thương, có cô dâu và chú rể ở trên', 1, 'banhcuoi/bcuoi8.jpg', 800000, '2017-02-27 13:45:10'),
(16, '02', 1, 1, 'VN01', 'Bánh sinh nhật HCN', 'Bánh sinh nhật hương vani.....', 'Bánh sinh nhật hương vani có trang trí quả dâu tươi xung quanh, đơn giản nhưng đẹp mắt', 1, 'banhsinhnhat/bsnhat6.jpg', 280000, '2017-02-27 13:49:10'),
(17, '02', 1, 1, 'VN01', 'Bánh sinh nhật tròn 002', 'Bánh sinh nhật trang trí đơn giản.....', 'Bánh sinh nhật được trang trí đơn giản nhưng đẹp mắt', 1, 'banhsinhnhat/bsnhat8.jpg', 250000, '2017-02-27 13:51:10'),
(18, '02', 1, 1, 'SCL01', 'Bánh sinh nhật Cherry', 'Bánh sinh nhật trang trí bới.....', 'Bánh sinh nhật được trang trí bởi socola xung quanh và được trang trí cherry và mâm xôi ở phía trên', 1, 'banhsinhnhat/bsnhat9.jpg', 300000, '2017-02-27 13:54:10'),
(19, '03', 1, 3, 'SCL01', 'Bánh khúc cây', 'Bánh được làm hình khúc cây....', 'Bánh được làm hình khúc cây, được bao phủ bởi socola', 1, 'banhletiec/btiec1.jpg', 250000, '2017-02-27 13:56:10'),
(20, '03', 2, 8, 'SCL01', 'Bánh ngôi nhà', 'Bánh hình ngôi nhà gỗ....', 'Bánh hình ngôi nhà gỗ có trang trí cây thông xung quanh', 1, 'banhletiec/btiec2.jpg', 500000, '2017-02-27 13:58:10'),
(21, '03', 2, 8, 'TX01', 'Bánh 20/10', 'Bánh chiếc giỏ 20/10....', 'Bánh hình tròn trang trí hình chiếc giỏ ở trên mừng 20/10', 1, 'banhletiec/btiec5.jpg', 500000, '2017-02-27 14:03:18'),
(22, '03', 2, 7, 'N01', 'Bánh 20/10(2)', 'Bánh chiếc giỏ 20/10....', 'Bánh hình tròn trang trí hình chiếc giỏ ở trên mừng 20/10', 1, 'banhletiec/btiec6.jpg', 400000, '2017-02-27 14:03:18'),
(23, '03', 2, 7, 'VN01', 'Bánh quyển sách', 'Bánh quyển sách màu xanh....', 'Bánh quyển sách Bắt đầu từ một kết thúc cho những ai yêu quyển sách này', 1, 'banhletiec/btiec7.jpg', 400000, '2017-02-27 14:04:30'),
(24, '03', 2, 7, 'VN01', 'Bánh FCB', 'Bánh biểu tượng FCB.....', 'Bánh biểu tượng FCB co những ai yêu đội bóng này', 1, 'banhletiec/btiec8.jpg', 400000, '2017-02-27 14:05:30'),
(25, '03', 3, 8, 'VN01', 'Bánh ManchesterUnited', 'Bánh biểu tượng ManchesterUnited...', 'Bánh biểu tượng Manchester United cho những ai yêu đội bóng này', 1, 'banhletiec/btiec9.jpg', 400000, '2017-02-27 14:06:35'),
(26, '03', 3, 7, 'VN01', 'Bánh ACM', 'Bánh biểu tượng ACM...', 'Bánh biểu tượng ACM cho những ai yêu đội bóng này', 1, 'banhletiec/btiec10.jpg', 400000, '2017-02-27 14:07:29'),
(27, '03', 3, 7, 'VN01', 'Bánh xe hơi', 'Bánh hình xe hơi...', 'Bánh hình xe hơi cho những ai đam mê chơi xe hơi', 1, 'banhletiec/btiec11.jpg', 450000, '2017-02-27 14:06:35'),
(28, '04', 3, 4, 'SCL01', 'Bánh mặt gấu', 'Bánh hình mặt gấu....', 'Bánh hình mặt gấu dành cho các bạn trẻ với hương vị đặc sắc', 1, 'banhkhac/bkhac1.jpg', 250000, '2017-02-27 14:07:39'),
(29, '04', 3, 4, 'VN01', 'Bánh mặt gấu', 'Bánh hình con heo....', 'Bánh hình con heo dành cho các bạn trẻ với hương vị đặc sắc', 1, 'banhkhac/bkhac3.jpg', 250000, '2017-02-27 14:07:39'),
(30, '04', 3, 4, 'TX01', 'Bánh mặt cô gái', 'Bánh hình cô gái....', 'Bánh hình cô gái dành cho các bạn trẻ với hương vị đặc sắc', 1, 'banhkhac/bkhac5.jpg', 250000, '2017-02-27 14:08:39'),
(31, '04', 3, 4, 'TX01', 'Bánh Doraemon', 'Bánh hình Doraemon....', 'Bánh hình Doraemon dành cho các bé nhỏ, và những bạn yêu thích Doraemon', 1, 'banhkhac/bkhac6.jpg', 250000, '2017-02-27 14:10:39'),
(32, '04', 3, 4, 'TX01', 'Bánh chú vịt vàng', 'Bánh hình chú vịt vàng....', 'Bánh hình chú vịt vàng dành cho các bé nhỏ, và những bạn yêu thích Doraemon', 1, 'banhkhac/bkhac7.jpg', 300000, '2017-02-27 14:15:29'),
(33, '04', 3, 4, 'TX01', 'Bánh hình mặt ếch xanh', 'Bánh hình mặt ếch xanh....', 'Bánh hình mặt ếch xanh dành cho các bé nhỏ, và những bạn yêu thích trông rất dễ thương', 1, 'banhkhac/bkhac8.jpg', 300000, '2017-02-27 14:15:29'),
(34, '04', 3, 4, 'TX01', 'Bánh chú vịt vàng', 'Bánh hình chú vịt vàng....', 'Bánh hình chú vịt vàng dành cho các bé nhỏ, và những bạn yêu thích', 1, 'banhkhac/bkhac7.jpg', 300000, '2017-02-27 14:15:29'),
(35, '04', 3, 4, 'TX01', 'Bánh chú chuột con', 'Bánh hình chú chuột con....', 'Bánh hình chú chuột con dành cho các bé nhỏ, và những bạn yêu thích', 1, 'banhkhac/bkhac9.jpg', 250000, '2017-02-27 14:15:29'),
(36, '04', 3, 4, 'VN01', 'Bánh quả cam', 'Bánh hình quả cam....', 'Bánh hình quả cam vàng dành cho các bé nhỏ, và những bạn yêu thích', 1, 'banhkhac/bkhac10.jpg', 250000, '2017-02-27 14:18:29'),
(37, '01', 1, 1, 'VN01', 'Bánh cưới cô dâu chú rể(2)', 'Bánh cưới trang trí có cô dâu và chú rể', 'Bánh cưới được trang trí dễ thương, có cô dâu và chú rể ở trên', 1, 'banhcuoi/bcuoi9.jpg', 800000, '2017-02-28 13:45:10'),
(38, '01', 3, 1, 'TX01', 'Bánh cưới hoa hồng(2)', 'Bánh cưới hoa hồng nhiều tầng...', 'Bánh cưới được trang trí hoa hồng xung quanh, trông vừa đẹp mắt và sang trọng', 1, 'banhcuoi/bcuoi10.jpg', 800000, '2017-02-27 13:45:10'),
(39, '01', 2, 8, 'VN01', 'Bánh cưới xanh ngọc', 'Bánh có 3 tầng', 'Bánh có 3 tầng, màu xanh nhẹ dịu', 1, 'banhcuoi/bcuoi11.jpg', 800000, '2017-03-05 19:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `bk_slider_banner`
--

CREATE TABLE IF NOT EXISTS `bk_slider_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hinh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_slide` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bk_tin_tuc`
--

CREATE TABLE IF NOT EXISTS `bk_tin_tuc` (
  `ma_tin_tuc` varchar(10) CHARACTER SET latin1 NOT NULL,
  `ma_nhan_vien` int(11) DEFAULT NULL,
  `ten_tin_tuc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung_chi_tiet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_anh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ngay_dang_tin` datetime DEFAULT NULL,
  `noi_dung_tom_tat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ma_tin_tuc`),
  KEY `MA_NV` (`ma_nhan_vien`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bk_san_pham`
--
ALTER TABLE `bk_san_pham`
  ADD CONSTRAINT `fk_sanpham_huongvi` FOREIGN KEY (`ma_huong_vi`) REFERENCES `bk_huong_vi` (`ma_huong_vi`),
  ADD CONSTRAINT `fk_sanpham_chude` FOREIGN KEY (`ma_chu_de`) REFERENCES `bk_chu_de` (`ma_chu_de`),
  ADD CONSTRAINT `fk_sanpham_khuyenmai` FOREIGN KEY (`ma_khuyen_mai`) REFERENCES `bk_khuyen_mai` (`ma_khuyen_mai`),
  ADD CONSTRAINT `fk_sanpham_nhanvien` FOREIGN KEY (`ma_nhan_vien`) REFERENCES `bk_nhan_vien` (`ma_nhan_vien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
