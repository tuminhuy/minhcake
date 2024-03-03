-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 05:41 PM
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
  `ngay_binh_luan` date NOT NULL,
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
  `don_gia` double NOT NULL,
  KEY `ma_don_hang` (`ma_don_hang`),
  KEY `ma_san_pham` (`ma_san_pham`),
  KEY `ma_don_hang_2` (`ma_don_hang`),
  KEY `ma_don_hang_3` (`ma_don_hang`),
  KEY `ma_don_hang_4` (`ma_don_hang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bk_chi_tiet_don_hang`
--

INSERT INTO `bk_chi_tiet_don_hang` (`ma_don_hang`, `ma_san_pham`, `so_luong`, `don_gia`) VALUES
(1, 2, 1, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `bk_chu_de`
--

CREATE TABLE IF NOT EXISTS `bk_chu_de` (
  `ma_chu_de` int(10) NOT NULL AUTO_INCREMENT,
  `ten_chu_de` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ma_chu_de`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bk_chu_de`
--

INSERT INTO `bk_chu_de` (`ma_chu_de`, `ten_chu_de`) VALUES
(1, 'Bánh cưới'),
(2, 'Bánh sinh nhật'),
(3, 'Bánh lễ tiệc'),
(4, 'Loại bánh khác');

-- --------------------------------------------------------

--
-- Table structure for table `bk_don_hang`
--

CREATE TABLE IF NOT EXISTS `bk_don_hang` (
  `ma_don_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ma_san_pham` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ho_ten_nguoi_nhan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt_nguoi_nhan` int(11) NOT NULL,
  `dia_diem_giao` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dat_hang` datetime NOT NULL,
  `ngay_giao_hang` datetime NOT NULL,
  `trang_thai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tong_gia` double NOT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_don_hang`),
  KEY `ma_khach_hang` (`ma_khach_hang`),
  KEY `ma_san_pham` (`ma_san_pham`),
  KEY `ma_don_hang` (`ma_don_hang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `bk_don_hang`
--

INSERT INTO `bk_don_hang` (`ma_don_hang`, `ma_san_pham`, `ma_khach_hang`, `ho_ten_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_diem_giao`, `ngay_dat_hang`, `ngay_giao_hang`, `trang_thai`, `tong_gia`, `ghi_chu`) VALUES
(1, 1, 1, 'minh', 909787, 'hcm', '2017-03-26 00:00:00', '2017-03-30 00:00:00', '0', 200000, '');

-- --------------------------------------------------------

--
-- Table structure for table `bk_huong_vi`
--

CREATE TABLE IF NOT EXISTS `bk_huong_vi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_huong_vi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ten_huong_vi` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bk_huong_vi`
--

INSERT INTO `bk_huong_vi` (`id`, `ma_huong_vi`, `ten_huong_vi`) VALUES
(1, 'DAU', 'Dâu'),
(2, 'NHO', 'Nho'),
(3, 'SCL', 'Socola'),
(4, 'TX', 'Trà xanh'),
(5, 'VANI', 'Vani'),
(8, 'SCL_VN', 'Socola và Vani');

-- --------------------------------------------------------

--
-- Table structure for table `bk_khach_hang`
--

CREATE TABLE IF NOT EXISTS `bk_khach_hang` (
  `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khach_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `so_tien` int(11) DEFAULT NULL,
  PRIMARY KEY (`ma_khach_hang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `bk_khach_hang`
--

INSERT INTO `bk_khach_hang` (`ma_khach_hang`, `ten_khach_hang`, `dia_chi`, `sdt`, `gioi_tinh`, `email`, `username`, `password`, `so_tien`) VALUES
(1, 'user1', 'hcm', 122123456, 0, 'user1@gmail.com', 'user1', '123456', 500000),
(13, 'minh', 'hcm', 21213, 0, 'a@gmail.com', 'minhh', '123', 0),
(25, 'tienminh', 'hcm', 9212121, 0, 'aa@gmail.com', 'minh123', '4297f44b13955235245b2497399d7a93', NULL),
(30, 'tienminh', 'hcm', 1212121, 0, 'a@gmail.com', 'minh1', '827ccb0eea8a706c4c34a16891f84e7b', 0),
(31, 'quynh', 'hcm', 9212121, 0, 'quynh@gmail.com', '1212', 'd9b1d7db4cd6e70935368a1efb10e377', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bk_khuyen_mai`
--

CREATE TABLE IF NOT EXISTS `bk_khuyen_mai` (
  `ma_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT,
  `ten_khuyen_mai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_ap_dung` date DEFAULT NULL,
  `ngay_ket_thuc` date DEFAULT NULL,
  `chiet_khau` double DEFAULT NULL,
  PRIMARY KEY (`ma_khuyen_mai`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bk_khuyen_mai`
--

INSERT INTO `bk_khuyen_mai` (`ma_khuyen_mai`, `ten_khuyen_mai`, `ngay_ap_dung`, `ngay_ket_thuc`, `chiet_khau`) VALUES
(1, 'Khuyến mãi 14/2', '2017-02-12', '2017-02-16', 5),
(3, 'Khuyến mãi 8/3', '2017-03-06', '2017-02-11', 10),
(4, 'Giảm giá 5%', '2017-02-09', NULL, 5),
(5, 'Giảm giá 10%', '2017-02-16', NULL, 10),
(6, 'Giảm giá 15%', '2017-02-07', NULL, 15),
(7, 'Giảm giá 20%', '2017-02-23', '2017-04-05', 20),
(8, 'Không giảm giá', '2017-02-10', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bk_loai_nhan_vien`
--

CREATE TABLE IF NOT EXISTS `bk_loai_nhan_vien` (
  `ma_loai_nhan_vien` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loai_nhan_vien` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ma_loai_nhan_vien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bk_loai_nhan_vien`
--

INSERT INTO `bk_loai_nhan_vien` (`ma_loai_nhan_vien`, `ten_loai_nhan_vien`, `ghi_chu`) VALUES
(1, 'Admin', 'Quyền cao nhất'),
(2, 'Quản trị tin tức', 'Quản lý việc viết tin tức'),
(3, 'Quản trị đơn hàng', 'Quản lý đơn hàng, cập nhật trạng thái đơn hàng');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bk_nhan_vien`
--

INSERT INTO `bk_nhan_vien` (`ma_nhan_vien`, `ma_loai_nhan_vien`, `ten_nhan_vien`, `dia_chi`, `sdt`, `gioi_tinh`, `username`, `password`, `email`) VALUES
(1, 3, 'Minh', 'bông sao', 1226981610, 0, 'tienminh1', 'e10adc3949ba59abbe56e057f20f883e', 'wil.bro12@gmail.com'),
(2, 2, 'Duy', 'tphcm', 909090909, 0, 'anhduy1', 'e10adc3949ba59abbe56e057f20f883e', 'duy@gmail.com'),
(3, 2, 'Quỳnh', 'tphcm', 906060606, 1, 'nhuquynh', 'e10adc3949ba59abbe56e057f20f883e', 'quynh@gmail.com'),
(7, 1, 'Tiến Minh', 'hcm', 923132131, 0, 'minh', 'e10adc3949ba59abbe56e057f20f883e', 'midada');

-- --------------------------------------------------------

--
-- Table structure for table `bk_san_pham`
--

CREATE TABLE IF NOT EXISTS `bk_san_pham` (
  `ma_san_pham` int(11) NOT NULL AUTO_INCREMENT,
  `ma_chu_de` int(11) NOT NULL,
  `ma_nhan_vien` int(11) NOT NULL,
  `ma_khuyen_mai` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung_tom_tat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung_chi_tiet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `hinh_anh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `don_gia` double DEFAULT NULL,
  `ngay_them_san_pham` date DEFAULT NULL,
  PRIMARY KEY (`ma_san_pham`),
  KEY `MA_CHU_DE` (`ma_chu_de`),
  KEY `MA_NV` (`ma_nhan_vien`),
  KEY `MA_KM` (`ma_khuyen_mai`),
  KEY `MA_HUONGVI` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- Dumping data for table `bk_san_pham`
--

INSERT INTO `bk_san_pham` (`ma_san_pham`, `ma_chu_de`, `ma_nhan_vien`, `ma_khuyen_mai`, `id`, `ten_san_pham`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `so_luong`, `hinh_anh`, `don_gia`, `ngay_them_san_pham`) VALUES
(1, 1, 2, 8, 1, 'Bánh cưới C1', 'Bánh cưới', 'Bánh cưới mẫu 1', 1, 'banhcuoi/bcuoi1.jpg', 800000, '2017-03-07'),
(2, 1, 1, 8, 1, 'Bánh cưới hoa tím 2', 'Bánh cưới hoa tím hương vani...', 'Bánh cưới hoa tím hương vani đẹp mắt, ngon', 1, 'banhcuoi/bcuoi2.jpg', 250000, '2017-02-27'),
(3, 1, 1, 8, 1, 'Bánh cưới 3 tầng ', 'Bánh cưới 3 tầng hương vani...', 'Bánh cưới 3 tằng hương vani đẹp mắt, ngon, trang trọng trong các lễ cưới', 1, 'banhcuoi/bcuoi3.jpg', 500000, '2017-02-27'),
(4, 2, 1, 8, 3, 'Bánh sinh nhật socola', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được trang trí bắt mắt, có thêm quả dâu tươi..', 1, 'banhsinhnhat/bsnhat1.jpg', 300000, '2017-02-27'),
(5, 2, 1, 8, 4, 'Bánh sinh nhật socola 2', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được trang trí bắt mắt, có thêm quả dâu tươi..', 1, 'banhsinhnhat/bsnhat7.jpg', 300000, '2017-02-27'),
(6, 2, 1, 8, 2, 'Bánh sinh nhật socola 3', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được trang trí bắt mắt, có thêm quả dâu tươi..', 1, 'banhsinhnhat/bsnhat2.jpg', 300000, '2017-02-27'),
(7, 3, 2, 8, 3, 'Bánh ông già Noel', 'Bánh hình tròn được vẽ mặt ông già noel', 'Bánh hình tròn được vẽ mặt ông già noel trông rất dễ thương', 1, 'banhletiec/btiec3.jpg', 500000, '2017-02-27'),
(8, 3, 2, 7, 1, 'Bánh khúc cây 2', 'Bánh khúc cây có ông già noel....', 'Bánh khúc cây được trang trí có ông già noel ở phía trên,và khúc cây bên cạnh trông rất dễ thương', 1, 'banhletiec/btiec4.jpg', 500000, '2017-02-27'),
(9, 2, 1, 8, 2, 'Bánh sinh nhật socola trái tim', 'Bánh sinh nhật hương socola trái tim...', 'Bánh sinh nhật hương socola được trang trí hình trái tim ở trên, có thêm quả dâu tươi..', 1, 'banhsinhnhat/bsnhat3.jpg', 350000, '2017-02-27'),
(10, 2, 1, 5, 3, 'Bánh socola', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được bao phủ bởi socola, có thêm quả dâu tươi trang trí ở phía trên..', 1, 'banhsinhnhat/bsnhat4.jpg', 380000, '2017-02-27'),
(11, 2, 1, 6, 1, 'Bánh socola 5', 'Bánh sinh nhật hương socola...', 'Bánh sinh nhật hương socola được bao phủ bởi socola, có thêm quả dâu tươi trang trí ở phía trên và thanh socola sắp xếp hình quạt..', 1, 'banhsinhnhat/bsnhat5.jpg', 400000, '2017-02-27'),
(12, 1, 1, 8, 2, 'Bánh cưới 2 tầng ', 'Bánh cưới 2 tầng hương dâu...', 'Bánh cưới 2 tằng hương dâu đẹp mắt, ngon, trang trọng', 1, 'banhcuoi/bcuoi4.jpg', 400000, '2017-02-27'),
(13, 1, 1, 8, 4, 'Bánh cưới 3 tầng(2)', 'Bánh cưới 3 tầng hương dâu...', 'Bánh cưới 2 tằng hương dâu đẹp mắt, ngon, trang trọng rất phù hợp trong lễ cưới', 1, 'banhcuoi/bcuoi5.jpg', 500000, '2017-02-27'),
(14, 1, 1, 8, 3, 'Bánh cưới hoa hồng', 'Bánh cưới hoa hồng nhiều tầng...', 'Bánh cưới được trang trí hoa hồng xung quanh, trông vừa đẹp mắt và sang trọng', 1, 'banhcuoi/bcuoi7.jpg', 800000, '2017-02-27'),
(15, 1, 1, 8, 2, 'Bánh cưới cô dâu chú rể', 'Bánh cưới trang trí có cô dâu và chú rể', 'Bánh cưới được trang trí dễ thương, có cô dâu và chú rể ở trên', 1, 'banhcuoi/bcuoi8.jpg', 800000, '2017-02-27'),
(16, 2, 1, 8, 4, 'Bánh sinh nhật HCN', 'Bánh sinh nhật hương vani.....', 'Bánh sinh nhật hương vani có trang trí quả dâu tươi xung quanh, đơn giản nhưng đẹp mắt', 1, 'banhsinhnhat/bsnhat6.jpg', 280000, '2017-02-27'),
(17, 2, 1, 8, 4, 'Bánh sinh nhật tròn 002', 'Bánh sinh nhật trang trí đơn giản.....', 'Bánh sinh nhật được trang trí đơn giản nhưng đẹp mắt', 1, 'banhsinhnhat/bsnhat8.jpg', 250000, '2017-02-27'),
(18, 2, 1, 1, 4, 'Bánh sinh nhật Cherry', 'Bánh sinh nhật trang trí bới.....', 'Bánh sinh nhật được trang trí bởi socola xung quanh và được trang trí cherry và mâm xôi ở phía trên', 1, 'banhsinhnhat/bsnhat9.jpg', 300000, '2017-02-27'),
(19, 3, 1, 8, 2, 'Bánh khúc cây', 'Bánh được làm hình khúc cây....', 'Bánh được làm hình khúc cây, được bao phủ bởi socola', 1, 'banhletiec/btiec1.jpg', 250000, '2017-02-27'),
(20, 3, 2, 8, 1, 'Bánh ngôi nhà', 'Bánh hình ngôi nhà gỗ....', 'Bánh hình ngôi nhà gỗ có trang trí cây thông xung quanh', 1, 'banhletiec/btiec2.jpg', 500000, '2017-02-27'),
(21, 3, 2, 8, 2, 'Bánh 20/10', 'Bánh chiếc giỏ 20/10....', 'Bánh hình tròn trang trí hình chiếc giỏ ở trên mừng 20/10', 1, 'banhletiec/btiec5.jpg', 500000, '2017-02-27'),
(22, 3, 2, 7, 3, 'Bánh 20/10(2)', 'Bánh chiếc giỏ 20/10....', 'Bánh hình tròn trang trí hình chiếc giỏ ở trên mừng 20/10', 1, 'banhletiec/btiec6.jpg', 400000, '2017-02-27'),
(23, 3, 2, 8, 2, 'Bánh quyển sách', 'Bánh quyển sách màu xanh....', 'Bánh quyển sách Bắt đầu từ một kết thúc cho những ai yêu quyển sách này', 1, 'banhletiec/btiec7.jpg', 400000, '2017-02-27'),
(24, 3, 2, 8, 3, 'Bánh FCB', 'Bánh biểu tượng FCB.....', 'Bánh biểu tượng FCB co những ai yêu đội bóng này', 1, 'banhletiec/btiec8.jpg', 0, '2017-02-27'),
(25, 3, 3, 8, 2, 'Bánh ManchesterUnited', 'Bánh biểu tượng ManchesterUnited...', 'Bánh biểu tượng Manchester United cho những ai yêu đội bóng này', 1, 'banhletiec/btiec9.jpg', 400000, '2017-02-27'),
(26, 3, 3, 7, 3, 'Bánh ACM', 'Bánh biểu tượng ACM...', 'Bánh biểu tượng ACM cho những ai yêu đội bóng này', 1, 'banhletiec/btiec10.jpg', 400000, '2017-02-27'),
(27, 3, 3, 7, 2, 'Bánh xe hơi', 'Bánh hình xe hơi...', 'Bánh hình xe hơi cho những ai đam mê chơi xe hơi', 1, 'banhletiec/btiec11.jpg', 450000, '2017-02-27'),
(28, 4, 3, 8, 1, 'Bánh mặt gấu', 'Bánh hình mặt gấu....', 'Bánh hình mặt gấu dành cho các bạn trẻ với hương vị đặc sắc', 1, 'banhkhac/bkhac1.jpg', 250000, '2017-02-27'),
(29, 4, 3, 8, 4, 'Bánh mặt gấu', 'Bánh hình con heo....', 'Bánh hình con heo dành cho các bạn trẻ với hương vị đặc sắc', 1, 'banhkhac/bkhac3.jpg', 250000, '2017-02-27'),
(30, 4, 3, 8, 2, 'Bánh mặt cô gái', 'Bánh hình cô gái....', 'Bánh hình cô gái dành cho các bạn trẻ với hương vị đặc sắc', 1, 'banhkhac/bkhac5.jpg', 250000, '2017-02-27'),
(31, 4, 3, 4, 1, 'Bánh Doraemon', 'Bánh hình Doraemon....', 'Bánh hình Doraemon dành cho các bé nhỏ, và những bạn yêu thích Doraemon', 1, 'banhkhac/bkhac6.jpg', 250000, '2017-02-27'),
(32, 4, 3, 8, 2, 'Bánh chú vịt vàng', 'Bánh hình chú vịt vàng....', 'Bánh hình chú vịt vàng dành cho các bé nhỏ, và những bạn yêu thích Doraemon', 1, 'banhkhac/bkhac7.jpg', 300000, '2017-02-27'),
(33, 4, 3, 4, 4, 'Bánh hình mặt ếch xanh', 'Bánh hình mặt ếch xanh....', 'Bánh hình mặt ếch xanh dành cho các bé nhỏ, và những bạn yêu thích trông rất dễ thương', 1, 'banhkhac/bkhac8.jpg', 300000, '2017-02-27'),
(34, 4, 3, 4, 2, 'Bánh chú vịt vàng', 'Bánh hình chú vịt vàng....', 'Bánh hình chú vịt vàng dành cho các bé nhỏ, và những bạn yêu thích', 1, 'banhkhac/bkhac7.jpg', 300000, '2017-02-27'),
(35, 4, 3, 4, 3, 'Bánh chú chuột con', 'Bánh hình chú chuột con....', 'Bánh hình chú chuột con dành cho các bé nhỏ, và những bạn yêu thích', 1, 'banhkhac/bkhac9.jpg', 250000, '2017-02-27'),
(36, 4, 3, 8, 2, 'Bánh quả cam', 'Bánh hình quả cam....', 'Bánh hình quả cam vàng dành cho các bé nhỏ, và những bạn yêu thích', 1, 'banhkhac/bkhac10.jpg', 250000, '2017-02-27'),
(37, 1, 1, 8, 2, 'Bánh cưới(2)', 'Bánh cưới trang trí có cô dâu và chú rể', 'Bánh cưới được trang trí dễ thương, có cô dâu và chú rể ở trên', 1, 'banhcuoi/bcuoi9.jpg', 800000, '2017-02-28'),
(38, 1, 3, 1, 3, 'Bánh cưới hoa hồng(2)', 'Bánh cưới hoa hồng nhiều tầng...', 'Bánh cưới được trang trí hoa hồng xung quanh, trông vừa đẹp mắt và sang trọng', 1, 'banhcuoi/bcuoi10.jpg', 800000, '2017-02-27'),
(39, 1, 2, 8, 4, 'Bánh cưới xanh ngọc', 'Bánh có 3 tầng', 'Bánh có 3 tầng, màu xanh nhẹ dịu', 1, 'banhcuoi/bcuoi11.jpg', 800000, '2017-03-05');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bk_slider_banner`
--

INSERT INTO `bk_slider_banner` (`id`, `hinh`, `ten_slide`, `trang_thai`) VALUES
(1, 'layout/bnr.jpg', 'Banner 1', 0),
(2, 'layout/bnr2.jpg', 'Banner 2', 0),
(3, 'layout/bnr3.jpg', 'Banner 3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bk_tin_tuc`
--

CREATE TABLE IF NOT EXISTS `bk_tin_tuc` (
  `ma_tin_tuc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_tin_tuc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noi_dung_chi_tiet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_anh` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ngay_dang_tin` date DEFAULT NULL,
  `noi_dung_tom_tat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ma_tin_tuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `bk_tin_tuc`
--

INSERT INTO `bk_tin_tuc` (`ma_tin_tuc`, `ten_tin_tuc`, `noi_dung_chi_tiet`, `hinh_anh`, `ngay_dang_tin`, `noi_dung_tom_tat`) VALUES
(1, 'Mừng ngày 8/3', '<p>Mừng ngày quốc tế phụ nữ 8/3</p>\r\n', '3temps.jpg', '2017-03-08', 'Mừng ngày 8/3'),
(34, 'ấ', '<p>sdas</p>\r\n', 'p1.jpg', '2017-03-24', 'đâsda'),
(35, 'Khuyến mãi 8/3', '<p>Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;', 'Wallpaper (2).jpg', '2017-03-15', 'khuyến mãi'),
(36, 'Khuyến mãi 30-4', '<p>Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;', 'Wallpaper (3).jpg', '2017-03-22', 'Nhân dịp khuyến mãi 8/3 Nhân dịp khuyến mãi 8/3 '),
(37, 'Nhân dịp khuyến mãi 8/3 ', '<p>Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;Nh&acirc;n dịp khuyến m&atilde;i 8/3&nbsp;</p>\r\n', '', '2017-03-22', 'Nhân dịp khuyến mãi 8/3 Nhân dịp khuyến mãi 8/3 Nhân dịp khuyến mãi 8/3 ');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bk_chi_tiet_don_hang`
--
ALTER TABLE `bk_chi_tiet_don_hang`
  ADD CONSTRAINT `fk_sanpham_chitiet` FOREIGN KEY (`ma_san_pham`) REFERENCES `bk_san_pham` (`ma_san_pham`);

--
-- Constraints for table `bk_don_hang`
--
ALTER TABLE `bk_don_hang`
  ADD CONSTRAINT `fk_donhang_khachhang` FOREIGN KEY (`ma_khach_hang`) REFERENCES `bk_khach_hang` (`ma_khach_hang`),
  ADD CONSTRAINT `fk_donhang_sanpham` FOREIGN KEY (`ma_san_pham`) REFERENCES `bk_san_pham` (`ma_san_pham`);

--
-- Constraints for table `bk_san_pham`
--
ALTER TABLE `bk_san_pham`
  ADD CONSTRAINT `fk_sanpham_chude` FOREIGN KEY (`ma_chu_de`) REFERENCES `bk_chu_de` (`ma_chu_de`),
  ADD CONSTRAINT `fk_sanpham_huongvi` FOREIGN KEY (`id`) REFERENCES `bk_huong_vi` (`id`),
  ADD CONSTRAINT `fk_sanpham_khuyenmai` FOREIGN KEY (`ma_khuyen_mai`) REFERENCES `bk_khuyen_mai` (`ma_khuyen_mai`),
  ADD CONSTRAINT `fk_sanpham_nhanvien` FOREIGN KEY (`ma_nhan_vien`) REFERENCES `bk_nhan_vien` (`ma_nhan_vien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
