-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2022 lúc 09:38 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dongho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'tiendung', '123456', '2021-12-01 00:00:00', '2021-12-30 00:00:00'),
(109, 'vanduc', '123456', '2021-12-09 17:54:23', '2021-12-09 17:54:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image_category` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name`, `image_category`, `created_at`, `updated_at`) VALUES
(6, 'CASIO', 'thh1.jpg', '2021-12-03 15:28:35', '2021-12-06 16:42:01'),
(7, 'G-SHOCK', 'thh2.jpg', '2021-12-06 16:38:00', '2021-12-06 16:07:02'),
(8, 'ORIENT', 'thh5.jpg', '2021-12-06 16:13:01', '2021-12-06 16:30:02'),
(9, 'CITIZEN', 'thh3.jpg', '2021-12-06 16:10:03', '2021-12-06 16:10:03'),
(10, 'SEIKO', 'thh6.jpg', '2021-12-06 16:32:03', '2021-12-06 16:32:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sdt` varchar(255) DEFAULT NULL,
  `product` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `fullname`, `email`, `sdt`, `product`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Vũ Văn Đức', 'ducvu10092001@gmai.com', '0347468262', 'Đồng hồ TISSOT', 'quan tâm', '2021-12-10 06:46:32', '2021-12-10 06:46:32'),
(3, 'Vũ Văn Đức', 'ducvu10092001@gmai.com', '0347468262', 'casio', 'no', '2021-12-22 15:02:19', '2021-12-22 15:02:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `anh` varchar(255) NOT NULL,
  `id_news` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(10000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`anh`, `id_news`, `title`, `text`, `created_at`, `updated_at`) VALUES
('cap21.png', 24, 'SALE UP TO 40% BLACK FRIDAY! Đợt SALE KHỦNG DUY NHẤT trong năm tại Đăng Quang Watch', 'Trong những năm 80 của thế kỷ trước, khi mà ngành công nghiệp đồng hồ Thụy Sĩ truyền thống trở nên bế tắc vì không thể cạnh tranh nổi với những đồng hồ Quartz đang làm mưa làm gió trên thị trường. Peter Hofer - một chuyên gia đầy kinh nghiệm trong sản xuất đồng hồ Thụy Sĩ, ông và vợ ông Erna quyết định thành lập công ty của riêng mình năm 1983: Montres EPOS SA. Tài sản chính của họ là một niềm đam mê đối với đồng hồ cơ khí và một bí quyết kỹ thuật trong lĩnh vực này.Ngay từ đầu, EPOS đã là một thương hiệu cơ khí với những đổi mới thú vị. Trong những năm qua, EPOS vẫn trung thành với lựa chọn của mình, phát triển bộ sưu tập đồng hồ tuyệt đẹp kết hợp các cơ hấp dẫn.Đạt được danh tiếng trên toàn thế giới qua nhiều thế kỷ, nhờ tinh thần tiên phong và ý nghĩ độc đáo trong sự gia công hoàn hảo của đồng hồ. Đồng hồ Thụy Sỹ EPOS đã trở thành một người giám hộ, là thước đo của các giá trị truyền thống và các tiêu chuẩn cao.Trong những năm gần đây, với sức thống lĩnh ở thị trường đồng hồ thế giới, EPOS đã ra mắt rất nhiều mẫu sản phẩm Limited – Phiên bản giới hạn toàn cầu. Với sự phá cách mạnh mẽ về thiết kế cũng như các tính năng vô cùng nổi bật, số lượng giới hạn đặc biệt khan hiếm khiến cho giới chơi đồng hồ đẳng cấp luôn muốn được sở hữu.Điều đặc biệt nhất của đồng hồ EPOS là chuyển động cơ học của nó. Các cơ chế cơ bản đến từ các nhà sản xuất Thụy Sĩ nổi tiếng, sau đó được biến đổi thêm với các chức năng đặc biệt và trang trí tuyệt đẹp. EPOS cung cấp nhiều sản phẩm đồng hồ cơ và pin với các chức năng thú vị nhưng vẫn có giá phải chăng, phân khúc giá từ 600 USD tương đương với từ 13.000.000 VND, hoàn toàn phù hợp với giá trị của thương hiệu.Sản phẩm mang vẻ trang nhã, lịch lãm cho khách hàng là các doanh nhân thành đạt. Khách hàng có thể xem và mua hàng tại Đăng Quang Watch là nhà nhập khẩu và phân phối độc quyền thương hiệu EPOS trên toàn quốc.', '2021-12-20 06:32:53', '2021-12-20 06:32:53'),
('cap2.png', 28, 'HẬU 20/10: MUA 1 - TẶNG 1. GIẢM GIÁ LÊN TỚI 20%', 'Hậu 20/10 Đăng Quang Watch trở lại với nhiều ưu đãi rất hấp dẫn cho quý khách hàng. Nếu như 20/10 vừa qua phái nữ đã nhận được rất nhiều ưu đãi đến từ Đăng Quang Watch, thì sau 20/10 sẽ là những chương trình hấp dẫn, ưu đãi hơn cho các quý ông. Từ ngày 21/10, Giảm giá lên tới 20% cho toàn bộ sản phẩm có mặt trên hệ thống. Với hệ thống lên tới gần 100 cửa hàng trên toàn quốc, Đăng Quang Watch hiện đang phân phối với rất nhiều dòng sản phẩm từ đồng hồ đeo tay, kính mắt, bút ký, hộp xoay...đến từ các thương hiệu nổi tiếng trên thế giới như Epos, Atlantic, Diamond D, .... Đặc biệt MUA 1 - TẶNG 1, tặng ngay kính mắt thời trang khi mua đồng hồ phiên bản Limited. Đồng hồ Limited được xem là một trong những vật phẩm được săn lùng nhiều nhất. Với đặc tính khan hiếm và giá trị khiến cho giới chơi đồng hồ đẳng cấp luôn muốn được sở hữu. Hiện tại hệ thống Đăng Quang đang phân phối rất nhiều mẫu phiên bản giới hạn đặc biệt để có thể chiều lòng quý khách hàng.  Ngoài ra khi mua dây da cùng đồng hồ trong 1 hóa đơn, sản phẩm dây da sẽ được giảm ngay 20% Quý khách có thể tham khảo thêm những mẫu sản phẩm siêu giảm giá đặc biệt lên tới 50% tại  https://www.dcdwatch.ga', '2021-12-20 16:39:08', '2021-12-20 16:39:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dongia` float DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `soluongod` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`id_order`, `id_product`, `id_user`, `phonenumber`, `fullname`, `address`, `dongia`, `note`, `soluongod`, `created_at`, `updated_at`) VALUES
(1, 7, 0, '0347468262', 'Vũ Văn Đức', '2 Lê Đức Thọ', 800000, 'no', 1, '2021-12-09 18:27:07', '2021-12-09 18:27:07'),
(4, 10, 3, '0347468262', 'Vũ Văn Đức', '2 Lê Đức Thọ', 13800000, 'no', 2, '2021-12-22 16:30:48', '2021-12-22 16:30:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `price_sale` float DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `tiltle` varchar(255) DEFAULT NULL,
  `tinhtrang` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `id_category`, `price`, `price_sale`, `soluong`, `thumbnail`, `tiltle`, `tinhtrang`, `content`, `created_at`, `updated_at`) VALUES
(7, 6, 1000000, 800000, 6, 'nam1.1.jpg', 'Đồng hồ nam cao cấp', 'còn', 'Sản Phẩm Cao Cấp', '2021-12-06 16:24:54', '2021-12-22 15:09:23'),
(8, 6, 53190000, 47871000, 6, 'nam15.png', 'Tissot PRX Powermatic 80 Steel & 18K', 'còn', 'Sản Phẩm Cao Cấp', '2021-12-10 05:08:15', '2021-12-20 16:20:18'),
(9, 7, 7773000, 6220000, 7, 'namnb-4.jpg', 'G-SHOCK GM-110G-1A9', 'mới', 'Gờ bằng thép không gỉ của dòng kim-số GM-110 này đã được rèn, cắt và đánh bóng để mang đến thiết kế đặc biệt cho mẫu này.  Mẫu GM-110G có diện mạo kim loại màu vàng.', '2021-12-10 05:20:21', '2021-12-10 05:20:21'),
(10, 6, 11910000, 6900000, 8, 'nam20.png', 'Orient Sun and Moon Gen 4 2021 ', 'cũ', ' Có lên cót tay và có Hacking stop', '2021-12-10 05:21:24', '2021-12-20 16:58:18'),
(11, 6, 53190000, 47871000, 10, 'namnb-6.jpg', 'SEIKO 5 SPORTS FIELD', 'mới', ' Có lên cót tay và có Hacking stop', '2021-12-20 15:16:46', '2021-12-20 15:48:52'),
(12, 6, 16940000, 15940000, 8, 'namnb-8.jpg', 'TISSOT PRX POWERMATIC 80', 'mới', 'T137.407.11.041.00', '2021-12-20 15:46:50', '2021-12-20 15:34:53'),
(13, 6, 1300000, 1283000, 6, '20.jpg', 'CASIO MTP-1302D-7A1VDF', 'mới', 'NAM – QUARTZ (PIN) – DÂY KIM LOẠI', '2021-12-20 15:33:59', '2021-12-20 16:15:01'),
(14, 6, 3950000, 3504000, 6, '21.jpg', 'CASIO NAM – QUARTZ (PIN)', 'mới', 'Đồng hồ nam Casio EF-129SG-1AVUDF sang trọng và mạnh mẽ với kiểu dáng dây đeo demi thời trang, mặt đồng hồ nền đen cùng với chữ số vạch mạ vàng, 3 kim chỉ vàng lớn và 3 ô phụ lịch ngày, thứ.', '2021-12-20 16:50:04', '2021-12-20 16:50:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productdetails`
--

CREATE TABLE `productdetails` (
  `matso` varchar(255) DEFAULT NULL,
  `doday` varchar(255) DEFAULT NULL,
  `chatlieukinh` varchar(255) DEFAULT NULL,
  `cochehoatdong` varchar(255) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `id_productdetail` int(11) NOT NULL,
  `chatlieuday` varchar(255) DEFAULT NULL,
  `loaimay` varchar(255) DEFAULT NULL,
  `baohanhchinhhang` varchar(255) DEFAULT NULL,
  `chatlieuvo` varchar(255) DEFAULT NULL,
  `kichco` varchar(255) DEFAULT NULL,
  `dongsanpham` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `productdetails`
--

INSERT INTO `productdetails` (`matso`, `doday`, `chatlieukinh`, `cochehoatdong`, `id_product`, `id_productdetail`, `chatlieuday`, `loaimay`, `baohanhchinhhang`, `chatlieuvo`, `kichco`, `dongsanpham`, `created_at`, `updated_at`) VALUES
('Sapphire chống trầy xước', '42.00 mm', 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Bộ máy tự động)', 2, 2, 'Thép không gỉ/Bọc vàng 18K', 'Classic (Phong cách Lịch lãm)', '5 năm', '10.30 mm', 'Năng lượng dự trữ lên đến 72 giờ (Khi dây cót được nạp đầy)', 'Swiss Made/Thụy Sĩ', '2021-12-09 17:37:59', '2021-12-09 18:49:44'),
('Sapphire chống trầy xước', '42.00 mm', 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Bộ máy tự động)', 7, 3, 'Thép không gỉ/Bọc vàng 18K', 'Classic (Phong cách Lịch lãm)', '5 năm', '10.30 mm', 'Năng lượng dự trữ lên đến 72 giờ (Khi dây cót được nạp đầy)', 'Swiss Made/Thụy Sĩ', '2021-12-09 18:26:46', '2021-12-09 18:26:46'),
('Sapphire chống trầy xước', '42.00 mm', 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Bộ máy tự động)', 8, 4, 'Thép không gỉ/Bọc vàng 18K', 'Classic (Phong cách Lịch lãm)', '3 năm', '10.30 mm', 'Năng lượng dự trữ lên đến 72 giờ (Khi dây cót được nạp đầy)', 'Swiss Made/Thụy Sĩ', '2021-12-10 06:31:28', '2021-12-10 06:31:28'),
('Sapphire chá»‘ng tráº§y xÆ°á»›c', '10.000mm', 'Sapphire chá»‘ng tráº§y xÆ°á»›c', 'Automatic', 10, 5, 'ThÃ©p khÃ´ng rá»‰ - bá»c vÃ ng 18k', 'Classic', '5 nÄƒm', 'ThÃ©p khÃ´ng rá»‰ - bá»c vÃ ng 18k', '42.00mm', 'Thá»¥y Sá»¹', '2021-12-13 17:02:29', '2021-12-13 17:02:29'),
('Sapphire chống trầy xước', '42.00 mm', 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Bộ máy tự động)', 9, 6, 'Thép không gỉ/Bọc vàng 18K', 'Classic (Phong cách Lịch lãm)', '3 năm', '10.30 mm', ' Năng lượng dự trữ lên đến 72 giờ (Khi dây cót được nạp đầy)', 'Swiss Made/Thụy Sĩ', '2021-12-20 15:04:41', '2021-12-20 15:04:41'),
('Hardlex Crystal', '13.2mm', 'Hardlex Crystal', 'Lịch thứ, lịch ngày. Caliber 4R36, 24 chân kính, trữ cót 41h. Khối lượng 77g.', 11, 7, 'Dây dù', 'Automatic (Máy cơ tự động)', '5 năm (đã bao gồm Bảo hành Quốc tế)', 'Thép không gỉ 316L', '39.4mm', 'SEIKO', '2021-12-20 15:14:48', '2021-12-20 15:14:48'),
('Xanh lam', '10.9mm', 'Sapphire', 'Automatic (Bộ máy tự động)', 12, 8, 'Thép không gỉ 316L', 'Automatic (Máy cơ tự động)', '5 năm (đã bao gồm Bảo hành Quốc tế)', 'Thép không gỉ 316L', '39.4mm', 'Swiss Made/Thụy Sĩ', '2021-12-20 15:05:52', '2021-12-20 15:05:52'),
('Sapphire chống trầy xước', '38.5mm', 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Bộ máy tự động)', 13, 9, 'Thép không gỉ 316L', 'Quartz (Pin)', '5 năm (đã bao gồm Bảo hành Quốc tế)', 'Thép không gỉ 316L', '39.4mm', 'MTP-1302D-7A1VDF', '2021-12-20 16:40:02', '2021-12-20 16:40:02'),
('Sapphire chống trầy xước', '10mm', 'Thép không gỉ/Bọc vàng 18K', 'Lịch thứ, lịch ngày. Caliber 4R36, 24 chân kính, trữ cót 41h. Khối lượng 77g.', 14, 10, 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Máy cơ tự động)', '5 năm (đã bao gồm Bảo hành Quốc tế)', 'Thép không gỉ 316L', '45mm', 'EF-129SG-1AVUDF', '2021-12-20 16:08:06', '2021-12-20 16:08:06'),
('Sapphire chống trầy xước', '42.00 mm', 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Bộ máy tự động)', 15, 11, 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Máy cơ tự động)', '5 năm (đã bao gồm Bảo hành Quốc tế)', 'Thép không gỉ 316L', '39.4mm', 'MTP-1302D-7A1VDF', '2021-12-22 15:44:35', '2021-12-22 15:44:35'),
('Sapphire chống trầy xước', '42.00 mm', 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Bộ máy tự động)', 16, 12, 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Máy cơ tự động)', '5 năm (đã bao gồm Bảo hành Quốc tế)', 'Thép không gỉ 316L', '39.4mm', 'Swiss Made/Thụy Sĩ', '2021-12-22 15:51:40', '2021-12-22 15:51:40'),
('Sapphire chống trầy xước', '42.00 mm', 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Bộ máy tự động)', 17, 14, 'Thép không gỉ/Bọc vàng 18K', 'Automatic (Máy cơ tự động)', '5 năm (đã bao gồm Bảo hành Quốc tế)', 'Thép không gỉ 316L', '39.4mm', 'Swiss Made/Thụy Sĩ', '2021-12-22 15:52:46', '2021-12-22 15:52:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useracc`
--

CREATE TABLE `useracc` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `useracc`
--

INSERT INTO `useracc` (`id`, `username`, `phonenumber`, `password`, `email`, `address`, `fullname`, `created_at`, `updated_at`) VALUES
(3, 'vanduc', '0347468262', '123456', 'ducvu10092001@gmai.com', '2 Lê Đức Thọ', 'Vũ Văn Đức', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`) USING BTREE;

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id_order`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`id_productdetail`);

--
-- Chỉ mục cho bảng `useracc`
--
ALTER TABLE `useracc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `productdetails`
--
ALTER TABLE `productdetails`
  MODIFY `id_productdetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `useracc`
--
ALTER TABLE `useracc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
