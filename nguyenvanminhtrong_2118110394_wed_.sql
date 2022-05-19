-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 14, 2022 lúc 07:12 AM
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
-- Cơ sở dữ liệu: `nguyenvanminhtrong_2118110394(wed)`
--
CREATE DATABASE IF NOT EXISTS `nguyenvanminhtrong_2118110394(wed)` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `nguyenvanminhtrong_2118110394(wed)`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_admin`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_admin`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `adminname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` char(32) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `trash` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_admin`
--

INSERT INTO `nguyenvanminhtrong_admin` (`adminID`, `username`, `adminname`, `email`, `pass`, `level`, `trash`) VALUES
(1, 'Trong', 'Nguyen Van Minh Trong', 'nguyentrong7870@gmail.com', 'd9b1d7db4cd6e70935368a1efb10e377', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_brand`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_brand`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_brand` (
  `brandId` int(11) NOT NULL AUTO_INCREMENT,
  `brandName` varchar(100) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(100) CHARACTER SET utf8 NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`brandId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_brand`
--

INSERT INTO `nguyenvanminhtrong_brand` (`brandId`, `brandName`, `alias`, `trash`, `status`) VALUES
(1, 'Chó AlasKa', 'cho', 0, 1),
(3, 'Mèo Ba Tư', 'meo-ba-tu', 0, 1),
(6, 'Chó HusKy', 'cho-husky', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_cart`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_cart`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_cart` (
  `cartId` int(11) NOT NULL AUTO_INCREMENT,
  `sId` varchar(255) CHARACTER SET utf8 NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,3) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`cartId`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_cart`
--

INSERT INTO `nguyenvanminhtrong_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(28, 'hb1dkvk8ptdfhleq375m01e891', 1, ' Ariyan Lorem Ipsum fsdfasdaf', 525.000, 1, 'upload/a2d9ff0c56.png'),
(42, 'ki70g8rmb4mfqs7cmei2l3qpi3', 10, 'Woman Tshirt 03', 300.000, 1, 'upload/a2fccb0144.png'),
(43, 'e6r6avk209clao063d5p18i597', 7, 'Mans Tshirt 02', 400.000, 1, 'upload/4b2b2f0556.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_category`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_category`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_category` (
  `catId` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 NOT NULL,
  `parentId` int(11) NOT NULL,
  `trash` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`catId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_category`
--

INSERT INTO `nguyenvanminhtrong_category` (`catId`, `catName`, `alias`, `parentId`, `trash`, `status`) VALUES
(1, 'Supper Dog', 'Cho', 0, 0, 1),
(2, 'Supper Cat', 'meo', 0, 0, 1),
(3, 'Thức Ăn', 'thuc an', 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_contact`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_contact`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_contact` (
  `contactId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`contactId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_customer`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_customer`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_customer` (
  `customerId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_customer`
--

INSERT INTO `nguyenvanminhtrong_customer` (`customerId`, `userId`, `fullname`, `address`, `phone`, `email`, `trash`) VALUES
(2, 0, '', 'thuduc vietnam', '0388277872', 'nguyentrong7870@gmail.com', 0),
(16, 0, 'Trong', '12 le loi', '10931290', 'qwqwqw@xn--das-dla', 0),
(17, 0, 'Trong', 'Gò Công', '038822828', 'nguyentrong@gmail.com', 0),
(18, 0, 'Trong', 'Gc', '21312', 'qwqwqw@xn--das-dla', 0),
(19, 0, 'Trong', 'Gc', '2121', 'qwqwqw@xn--das-dla', 0),
(20, 0, 'Trong123', 'Gc', '2121', 'qwqwqw@xn--das-dla', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_image`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_image`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `position` tinyint(4) NOT NULL,
  `trash` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_image`
--

INSERT INTO `nguyenvanminhtrong_image` (`id`, `title`, `image`, `imageName`, `position`, `trash`, `status`) VALUES
(1, 'Slider1', '333.jpg', 'hinhanh', 1, 0, 1),
(2, 'Slider2', '12.jpg', 'slider', 1, 0, 1),
(3, 'Slider3', 'shlie.jpg', 'honh slider', 1, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_link`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_link`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_link` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `order` tinyint(4) NOT NULL,
  `trash` tinyint(4) NOT NULL DEFAULT '1',
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_link`
--

INSERT INTO `nguyenvanminhtrong_link` (`Id`, `Title`, `Position`, `Image`, `link`, `order`, `trash`, `status`) VALUES
(1, 'Link FB', 'header', 'minhtrong.png', '', 3, 0, 1),
(2, 'Trong', 'header', '', '#', 3, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_order`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_order`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_order` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `customerId` int(11) NOT NULL,
  `orderDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` float(10,2) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_order`
--

INSERT INTO `nguyenvanminhtrong_order` (`orderId`, `customerId`, `orderDate`, `total`, `note`, `status`, `trash`) VALUES
(8, 2, '0000-00-00 00:00:00', 500.00, '', 1, 0),
(9, 2, '0000-00-00 00:00:00', 400.00, '', 0, 0),
(10, 2, '0000-00-00 00:00:00', 450.00, '', 1, 0),
(11, 16, '2021-12-03 13:42:20', 68749.00, 'ad', 1, 0),
(12, 17, '2021-12-03 13:44:17', 21000.00, 'giao hang ngay cho tui', 1, 0),
(13, 18, '2021-12-03 14:32:27', 6998.00, 'saqd', 1, 0),
(14, 19, '2021-12-06 12:33:07', 4750.00, '54', 1, 0),
(15, 20, '2022-01-12 07:56:37', 8000.00, 'sdsaa', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_orderdetail`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_orderdetail`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_orderdetail` (
  `orderDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `price` float NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  PRIMARY KEY (`orderDetailId`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_orderdetail`
--

INSERT INTO `nguyenvanminhtrong_orderdetail` (`orderDetailId`, `orderId`, `productId`, `price`, `quantity`, `trash`) VALUES
(1, 8, 3, 5000, 4, 0),
(2, 8, 2, 2000, 2, 0),
(3, 8, 1, 3499, 1, 0),
(4, 8, 4, 8000, 2, 0),
(5, 8, 7, 4000, 3, 0),
(6, 8, 32, 4250, 3, 0),
(7, 8, 8, 250, 2, 0),
(8, 11, 3, 5000, 4, 0),
(9, 11, 2, 2000, 2, 0),
(10, 11, 1, 3499, 1, 0),
(11, 11, 4, 8000, 2, 0),
(12, 11, 7, 4000, 3, 0),
(13, 11, 32, 4250, 3, 0),
(14, 11, 8, 250, 2, 0),
(15, 12, 2, 2000, 3, 0),
(16, 12, 3, 5000, 3, 0),
(17, 13, 1, 3499, 2, 0),
(18, 14, 2, 2000, 2, 0),
(19, 14, 8, 250, 3, 0),
(20, 15, 2, 2000, 4, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_page`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_page`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_page` (
  `pageId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `createBy` int(11) NOT NULL,
  `createDate` datetime NOT NULL,
  `updateDate` datetime NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`pageId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_page`
--

INSERT INTO `nguyenvanminhtrong_page` (`pageId`, `title`, `content`, `createBy`, `createDate`, `updateDate`, `trash`, `status`) VALUES
(1, 'Về chúng tôi', 'Được thành lập vào năm 2011 ,trải qua 9 năm hoạt động ShopPet  đã cung cấp cún đến đủ 64 tỉnh thành trên cả nước và trở thành kênh thú cưng lớn mạnh nhất Việt Nam \r\n\r\nĐối với ShopPet , người thanh lập nên ShopPet   thì chó mèo không chỉ là vật nuôi mà còn là người bạn đồng hành trong cuộc sống , vậy nên ngoài việc bán chó mèo cảnh , mình đã xây dựng ShopPet  thành một nơi để các bạn yêu cún có thể chia sẻ kinh nghiệm nuôi dạy cũng như lưu giữ những khoảnh khắc của bé cưng . Đến nay ShopPet  đã trở thành cộng đồng thú cưng lớn nhất tại Việt Nam, xuất hiện thường xuyên trên truyền hình và vinh dự là thương hiệu thú cưng. Đó là một điều rất đáng tự hào đối với bản thân mình , trong tương lai mình sẽ luôn phấn đấu cũng như phát triển thêm các dịch vụ khác để phục vụ tốt nhẩt cho cộng đồng yêu thú cưng !', 1, '2021-03-02 23:09:19', '0000-00-00 00:00:00', 0, 1),
(2, 'Chính Sách Bảo Mật', '1-Mục đích và phạm vi thu thập thông tin\r\n\r\nMục đích của việc thu thập thông tin hay thuật ngữ”thông tin cá nhân” trong điều khoản chính sách bảo mật này nghĩa là thông tin nhận diện hoặc có khả năng nhận diện danh tính cá nhân của khách hàng. Những loại thông tin cá nhân mà chúng tôi thu thập xử lý(có thể khác  nhau theo pham vị quyền hạn dựa trên pháp luật hiện hành tại Việt Nam) bào gồm:\r\n\r\nHọ và Tên khách hàng, địa chỉ liên lạc, Email, số điện thoại di động, số điện thoại bàn. Chúng tôi luôn thông báo cho khách hàng biết về mục đích cụ thể của việc thu thập thông tin khách hàng. Những thông tin được thu thập từ khách hàng, đều được sự đồng ý và tự nguyện của khách hàng cung cấp.\r\n\r\n2- Phạm vi sử dụng thông tin\r\n\r\nThông tin khách hàng được thu thập sẽ chỉ được sử dụng trong nội bộ CỬA HÀNG THÚ CƯNG DOGS MOM. Thông tin cá nhân khách hàng được bảo mật tuyệt đối không cung cấp cho bên thứ 3, ngoài nội bộ Công ty TNHH Hưng Thuận Phát. Trừ trường hợp được cơ quan có thẩm quyền yêu cầu theo các quy định của pháp luật.\r\n\r\nKhi cần thiết, chúng tôi có thể sử dụng những thông tin này để liên hệ trực tiếp với khách hàng dưới các hình thức như: xác nhận thông tin đơn hàng,xác chuyển sản phẩm cho khách hàng,xác nhận thời gian giao nhận sản phẩm theo thông tin khách hàng,xác nhận địa điểm giao nhận sản phẩm', 1, '2021-03-02 23:09:19', '2022-01-20 15:35:35', 0, 1),
(3, 'Chính Sách Bán Hàng', '1. Mở cửa hàng thú cưng là gì?\r\nĐể hiểu rõ hơn về kinh doanh thú cưng chúng ta nên hiểu rõ thế nào là thú cưng.\r\n\r\nThú cưng là những loài động vật được nuôi để làm cảnh, ôm ấp, nâng niu chăm sóc của con người trái ngược với động vật dùng để lao động, ăn thịt, thí nghiệm. Nuôi thú cưng là một sở thích, thú vui của chủ sở hữu.\r\n\r\nkinh doanh thú cưng là việc buôn bán liên quan đến thú cưng nhằm mục đích sinh lợi cho cá nhân, thường bao gồm mở cửa hàng chăm sóc thú cưng, quần áo, mở cửa hàng phụ kiện thú cưng, đồ chơi dành cho thú cưng, thức ăn và các dịch vụ chăm sóc thú cưng.\r\n\r\n2. Kinh doanh thú cưng có lợi nhuận không?\r\nNếu bạn biết cách kinh doanh thì mở cửa hàng thú cưng sẽ mang đến cho bạn nhiều cơ hội để “hái ra tiền”. Bởi xu hướng phát triển ngày nay, mọi người có lối sống hưởng thụ hơn, biết tìm niềm vui cho bản thân hơn. \r\n\r\nBên cạnh đó, trào lưu nuôi thú cưng đang phát triển mạnh nên mô hình kinh doanh thú cưng chắc chắn sẽ mang lại lợi nhuận cho bạn nếu bạn biết cách kinh doanh. \r\n\r\nCụ thể hiện nay, giống chó Pug, mèo Anh lông ngắn bán từ 4-7 triệu đồng/con, còn chó Poodle khoảng 7-14 triệu đồng/con. Các dịch vụ chăm sóc thú cưng như: tắm gội, cắt tỉa lông, khám chữa bệnh có giá khoảng 350.000-500.000 đồng/thú cưng.\r\n\r\n3. Yếu tố cần thiết khi mở cửa hàng thú cưng\r\nKhi muốn kinh doanh thú cưng bạn cần hiểu rõ các yếu tố cần thiết để mở được cửa hàng cũng như xác định được chi phí mở pet shop để dự trù kinh phí cho phù hợp.\r\n\r\nvốn mở cửa hàng thú cưng cần hoạch định những khoản chi phí mở shop thú cưng liên quan sau: \r\n\r\nTiền nhập hàng\r\nChi phí thuê mặt bằng\r\nChi phí trang trí cửa hàng \r\nTrước khi chính thức mở cửa hàng thú cưng việc đầu tiên bạn cần làm chính là tìm nhà phân phối các sản phẩm cần bán với giá tốt nhất và có những chính sách ưu đãi dành cho shop của bạn. \r\n\r\nĐơn vị phân phối sản phẩm uy tín, chất lượng là nơi cung cấp hàng hóa có nguồn gốc xuất xứ rõ ràng, sản phẩm chất lượng tốt, đa dạng các mẫu mã mặt hàng khác nhau. Để tìm nhà phân phối bạn cần bỏ thời gian tìm hiểu và cần có sự so sánh với nhau.\r\n\r\nNếu không có sẵn mặt bằng để mở cửa hàng kinh doanh thú cưng thì tất nhiên bạn cần tìm và lựa chọn địa điểm thuê mặt bằng phù hợp. Cần tính toán chi phí này vào phần chi phí đầu tư để tính ra lãi thuần sau khi thu từng tháng. \r\n\r\nHiện tại xu hướng bán hàng online đang rất được ưa chuộng vì thế bạn hoàn toàn có thể khởi nghiệp qua hình thức này mà không cần mất chi phí thuê mặt bằng.\r\n\r\nTuy nhiên kinh nghiệm mở cửa hàng thú cưng của chúng tôi là bạn nên có cửa hàng trực tiếp tại các địa điểm thì bạn sẽ có nhiều lợi thế hơn khi tiếp cận được đối tượng mua hàng vãng lai – đây là những khách hàng tiềm năng nhất khi mở shop. Khách hàng mua trực tiếp nhìn tận mắt sản phẩm sẽ dễ để chốt đơn hơn và tỉ lệ quay lại ở lần tiếp theo là rất lớn.\r\n\r\nMột trong những kinh nghiệm mở pet shop là phải chọn địa điểm thuê mặt bằng mở cửa hàng thú cưng là rất quan trọng, bạn cần tìm kiếm khu vực tập trung dân cư đông và đối tượng khách hàng hướng tới là người có thu nhập cao nuôi chó mèo. Đây là yếu tố quan trọng quyết định đến doanh số bán hàng của bạn. \r\n\r\nKhông chỉ riêng cửa hàng thú cưng mà khi mở bất kỳ shop nào thì phần chi phí trang trí, tu sửa mặt bằng là hạng mục bắt buộc. Bạn nên chú ý đến chi tiết này một chút bởi việc trang trí sẽ tạo được ấn tượng tốt đối với khách hàng của bạn. ', 1, '2021-03-02 23:09:19', '2022-01-06 15:40:14', 0, 1),
(4, 'Chính Sách Vận Chuyển', '1. Phương thức giao hàng\r\nKhi mua hàng tại Yolo.vn, có một số hình thức vận chuyển như sau:\r\n\r\n1.1. Đối với mặt hàng phụ kiện:\r\nNgười mua trực tiếp tới cửa hàng lựa chọn sản phẩm và tự vận chuyển về nhà.\r\nNgười mua online đặt hàng trên Website, Facbook hoặc qua Hotline:\r\nNội thành: Yolo.vn sẽ giao hàng trong ngày nếu đơn được đặt trước 2h chiều. Những đơn sau sẽ giao vào sáng ngày kế tiếp.\r\nNgoại thành: Yolo.vn sẽ gửi chuyển phát nhanh COD đến tận nhà quý khách từ 2 – 3 ngày.\r\n1.2. Đối với mặt hàng thú cưng:\r\nNgười mua trực tiếp tới cửa hàng lựa chọn các bé và tự vận chuyển về nhà.\r\nNgười mua online đặt hàng trên Website, Facbook hoặc qua Hotline:\r\nNội thành: Yolo.vn sẽ giao hàng trong ngày nếu đơn được đặt trước 2h chiều. Những đơn sau sẽ giao vào sáng ngày kế tiếp.\r\nNgoại thành: Yolo.vn sẽ gửi xe khách đến khu vực gần nhà quý khách, nhà xe sẽ liên hệ để tiến hành giao hàng. Thời gian từ 2 – 4 ngày.\r\n2. Thời gian giao hàng\r\n2.1. Đối với mặt hàng phụ kiện\r\nNội thành: Giao hàng trong ngày cho đơn hàng đặt trước 2h chiều. Những đơn sau giờ này sẽ giao vào sáng ngày hôm sau.\r\nNgoại thành: Chuyển phát nhanh COD từ 2 – 3 ngày.\r\n2.2. Đối với mặt hàng thú cưng\r\nNội thành: Giao hàng trong ngày cho đơn hàng đặt trước 2h chiều. Những đơn sau giờ này sẽ giao vào sáng ngày hôm sau.\r\nNgoại thành: Giao hàng bằng xe khách từ 2 – 4 ngày.\r\n3. Chi phí giao nhận\r\n3.1. Đối với mặt hàng phụ kiện\r\nNội thành: Miễn phí vận chuyển cho đơn hàng trên 300.000 vnđ. Tính phí từ 20.000 – 30.000 vnđ cho đơn hàng dưới 300.000 vnđ.\r\nNgoại thành: Tính phí từ 40.000 đến 80.000 vnđ tuỳ theo trọng lượng đơn hàng và địa điểm giao hàng.\r\n3.2. Đối với mặt hàng thú cưng\r\nNội thành: Miễn phí vận chuyển cho đơn hàng trên 500.000 vnđ. Tính phí từ 20.000 – 30.000 vnđ cho đơn hàng dưới 500.000 vnđ.\r\nNgoại thành: Tính phí từ 40.000 đến 80.000 vnđ tuỳ theo trọng lượng đơn hàng và địa điểm giao hàng.\r\n4. Các giới hạn về mặt địa lý cho việc giao hàng\r\nYolo.vn hiện tại sẽ vận chuyển sản phẩm trên toàn quốc bao gồm 64 tỉnh thành trực thuộc lãnh thổ Việt Nam.\r\nĐối với những khách hàng sinh sống ngoài lãnh thổ Việt Nam muốn mua sản phẩm hoặc sử dụng dịch vụ của Yolo.vn vui lòng chọn phương thức khác như nhờ người thân, bạn bè tại Việt Nam mua hộ sau đó tự vận chuyển ra nước ngoài.', 1, '2021-03-02 23:09:19', '2022-01-06 15:40:14', 0, 1),
(5, 'Hướng Dẫn Thanh Toán', 'Trong trường hợp khách hàng cần phương thức thanh toán khác, vui lòng liên hệ trực tiếp với Petshop.vn.\r\n\r\nThanh toán khi nhận hàng (COD) cho nhân viên giao hàng.\r\nThanh toán trước qua chuyển khoản ngân hàng: Quý khách có thể chuyển khoản qua STK 0511000441806 – Lê Trọng Nhân – Chi nhánh Vietcombank\r\nThanh toán qua ứng dụng thanh toán/ví điện tử: Quý khách có thể thanh toán qua ví điện tử Momo/Airpay – 0976299155\r\nSau khi chuyển khoản xong, quý khách hàng vui lòng gửi ủy nhiệm chi, sao kê hoặc chụp ảnh màn hình gửi PetshopSaigon.vn qua zalo, viber, inbox fanpage. \r\n\r\nNếu khách hàng cần số tài khoản ngân hàng khác các ngân hàng bên dưới, vui lòng liên hệ trực tiếp với PetshopSaigon.vn. \r\n\r\nLưu ý: PetshopSaigon.vn chỉ chuẩn bị và đóng hàng khi nhận được thông báo chuyển tiền từ ngân hàng.', 1, '2021-03-02 23:09:19', '2022-01-06 15:40:14', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_product`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_product`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(100) NOT NULL,
  `Alias` varchar(100) NOT NULL,
  `catID` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `Detail` text NOT NULL,
  `Price` float(10,3) NOT NULL,
  `salePrice` float(10,3) NOT NULL,
  `image` varchar(100) NOT NULL,
  `trash` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`productID`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_product`
--

INSERT INTO `nguyenvanminhtrong_product` (`productID`, `productname`, `Alias`, `catID`, `brandId`, `Detail`, `Price`, `salePrice`, `image`, `trash`, `status`) VALUES
(1, 'Chó Corgi', 'cho-corghi', 1, 1, 'orgi có thân hình rất đáng yêu, mình dài, chân ngắn và quả mông trái tim siêu bự. Bản tính của Corgi rất năng động, thông minh và hết sức trung thành có thể sẵn sàng hi sinh để bảo vệ chủ của mình. Chú chó chân ngắn mông to này gồm 2 dòng chó cơ bản là Pembroke Welsh Corgi và Cardigan Corgi. Sự khác nhau giữa 2 dòng chó này là Cardigan có đuôi còn Pembroke thì cụt đuôi.. Cân nặng và chiều cao cũng có sự khác nhau đáng kể, Cadigan cao khoảng 25-33 cm và nặng 11-14 kg; Pembroke cao 25-30 cm và nặng 11-13kg. Tuổi thọ 12-15 năm.', 3499.000, 2995.000, 'cho-phoc-soc-long-mau-nau-cute-de-thuong.jpg', 0, 1),
(2, 'Mèo Pari', 'meo-pari', 1, 2, 'Mèo pari là giống mèo cổ xưa của Vương quốc Anh. Với thân hình mũm mím, cái đầu và đôi mắt tròn xoe màu hổ phách, mèo Aln dễ dàng “đốn tim” bạn ngay từ lần đầu gặp mặt.', 2000.000, 1500.000, 'cup kem.jpg', 0, 1),
(3, 'Mèo Tai Cụt', 'meo-tai-cut', 1, 3, 'Mèo Scottish Fold – mèo tai cụp có nguồn gốc từ đất nước Scotland. Những năm thuộc thập kỷ 60 của thế kỷ 20, một người chăn cừu có tên William Ross tình cờ phát hiện ra giống mèo này.\r\n\r\nQuá trình nhân giống mèo Scottish Fold không hề đơn giản, được tạo ra trên cơ sở một đột biến gen tự nhiên ở mèo nhà thông thường. Trước kia, cá thể mèo có tai cụp rất hiếm với tỷ lệ 10 con ra đời mới có 1 đến 2 con tai cụp. Nhờ vào sự chắt lọc của Ross mà những chú mèo tai cụp mới xuất hiện với tần suất dày hơn cùng nhiều mức độ cụp hơn.', 5000.000, 4500.000, '5.jpg', 0, 1),
(4, 'Mèo Ba Tư ', 'meo-himalaya', 1, 5, 'Mèo Thân thiên vui vẻ \r\nChân: Ngắn, bàn chân dẹt.', 8000.000, 7500.000, '2.jpg', 0, 1),
(5, 'Mèo tai cụp Scottish Fold', 'tai-cup-Scottish-fold', 1, 6, 'Phần đầu của những chú mèo tai Scottish Fold rất tròn và to khiến cho gương mặt của chúng dễ thương hơn.\r\nĐôi mắt to tròn thường có màu xanh xám, xanh đen, xanh ngọc bích, xanh dương, màu khói….\r\nTai của những chú mèo Scottish không phải tất cả đều cụp mà vẫn có những chú tai thẳng.\r\nLông của mèo Scottish Fold có 2 dạng: lông dài và lông ngắn.\r\nĐuôi của chúng rất dài, to, thẳng được phủ 1 lớp lông dài vô cùng nhẹ nhàng giống như những bông hoa lau.\r\nThông thường, bộ lông của những chú mèo tai cụp sẽ có màu sau đây: màu xám, mèo scottish tabby, mèo scottish golden, mèo scottish straight, mèo scottish classic tabby, màu lilac, màu xám xanh, màu sliver….', 4000.000, 3500.000, 'cup vang trang.jpg', 0, 1),
(6, 'Chó AlasKa', 'alaska', 1, 1, 'Alaska là loại chó được yêu thích trên toàn thế giới bởi dáng vẻ oai hùng nhưng không kém phần đáng yêu. Kế thừa bộ gen của dòng chó sói tuyết hoang dã và được thuần hoá bởi tộc Malamute, Alaska nhanh chóng trở thành một trong những giống chó được nhiều người yêu thích nhất. Để hiểu rõ hơn về giống chó Alaska huyền thoại này, hãy cùng Petroom tìm hiểu tất tần tật các thông tin về chúng qua bài viết dưới đây.', 5000.000, 3000.000, 'xsdt7x-20180329-hinh-anh-cho-thay-husky-la-giong-cho-ngao-ngo-nhat-qua-dat.jpg', 0, 1),
(8, 'Chó HusKy', 'hus-ky', 2, 1, 'Chó Husky, tên gọi đầy đủ Husky Sibir là một loài chó hiền lành với một khuôn mặt vô cùng dễ thương được rất nhiều người yêu thích và lựa chọn làm thú cưng của mình. Bạn đã biết gì về những chú chó được mệnh danh là “thánh biểu cảm” này chưa ? Hãy cùng Petroom tìm hiểu trong bài viết  này nhé.', 250.000, 200.000, 'ảnh-nền-husky.jpg', 0, 1),
(49, 'sanpham11', '2', 2, 1, 'ádas', 2222.000, 222.000, '2021-12-18 (19).png', 1, 1),
(7, 'Mèo Quản Loạn', 'meo-vui', 0, 3, 'Chú Mèo Sợ Sệt, sợ hãi mọi thứ, Hay Quạo Quọ, Hay La Khi có vật thể lạ, sợ nhất là ma và dưa chuột, rất thích nhảy sông-ao-hồ khi có cơ hội\r\n', 4000.000, 3800.000, '10.jpg', 0, 1),
(30, 'Chó Husky Siêu Phẩm', 'cho-pug', 1, 1, 'Dễ Thương Thân hien', 4500.000, 3500.000, '0_yP7NdX2wWQVilq1_.png', 0, 1),
(32, 'Mèo Ba Tư Chinchilla đen', 'ba-tu-chinchilla-đen', 0, 4, 'Lông đen, mặt tịt\r\nCần tìm cha mẹ nuôi', 4250.000, 4150.000, '121.jpg', 0, 1),
(10, 'Pug Pháp', 'pug', 2, 0, 'Loài cực kỳ thông minh thường được dùng trong quận đội', 5500.000, 4500.000, '11.jpg', 0, 1),
(11, 'GolDel', 'goldel', 2, 0, 'Lìa cực kỳ thân thiên ', 8000.000, 8000.000, 'seach.jpg', 0, 1),
(12, 'Pug Anh', 'pug-anh', 3, 0, 'Thân thiên', 6500.000, 5500.000, 'tuimeo2.jpg', 0, 1),
(13, 'pate Chó', 'pate', 3, 0, '', 180.000, 150.000, 'thucancho.png', 0, 1),
(14, 'Thức Ăn CORO', 'thuc-an', 3, 0, '', 230.000, 200.000, 'thucancho1.jpg', 0, 1),
(9, 'adsad', 'sad', 22, 22, 'ádsa', 222222.000, 222.000, '', 2, 0),
(42, 'Chó Nhật', 'cho-nhat', 2, 1, 'Chó Shiba inu được nước Nhật xem là quốc khuyển của xứ xở mặt trời mọc. Với bản tính vốn rất mạnh dạn lại lanh lợi và dũng cảm, Shiba chính là giống chó nổi tiếng nhất tại đất nước Nhật Bản.\r\n\r\nLà giống chó Nhật sở hữu một thân hình không quá lớn, nhỏ nhắn. Chúng được bao phủ bởi một bộ lông dày cùng với “đôi tai” dài khiến cho người khác nhìn vào đều thấy cảm mến.\r\n\r\n', 450000.000, 3000.000, '8-giong-cho-nhat-ban-duoc-ua-chuong-nhat-tai-viet-nam.jpg', 0, 1),
(43, 'Chó helo HusKy', '2', 1, 1, 'Sự tinh nghịch của các chú chó luôn làm cho chủ nhân của chúng cảm thấy vui, tuy nhiên “vui thôi đừng vui quá” là câu nói mà đa phần những người nuôi giống chó Husky thường nói với chúng mỗi lần chúng “quẩy” banh nhà. Cùng xem các đặc điểm của những anh chàng Husky đại ngáo dưới đây nhé!', 2121.000, 1121.000, 'ád.png', 0, 1),
(44, 'Chó SeKi', '2', 1, 1, 'Sự tinh nghịch của các chú chó luôn làm cho chủ nhân của chúng cảm thấy vui, tuy nhiên “vui thôi đừng vui quá” là câu nói mà đa phần những người nuôi giống chó Husky thường nói với chúng mỗi lần chúng “quẩy” banh nhà. Cùng xem các đặc điểm của những anh chàng Husky đại ngáo dưới đây nhé!', 2222.000, 22.000, 'aeadb1d8116ad2ae833775cab2f2b487.png', 0, 1),
(45, 'Cho My Friend', 'cho-123424', 2, 1, 'Sự tinh nghịch của các chú chó luôn làm cho chủ nhân của chúng cảm thấy vui, tuy nhiên “vui thôi đừng vui quá” là câu nói mà đa phần những người nuôi giống chó Husky thường nói với chúng mỗi lần chúng “quẩy” banh nhà. Cùng xem các đặc điểm của những anh chàng Husky đại ngáo dưới đây nhé!', 2121.000, 21.000, '5b1a7e05cd16be7d427d62544418fffd.jpg', 0, 1),
(46, 'Chó MoCA', '2', 1, 1, 'Sự tinh nghịch của các chú chó luôn làm cho chủ nhân của chúng cảm thấy vui, tuy nhiên “vui thôi đừng vui quá” là câu nói mà đa phần những người nuôi giống chó Husky thường nói với chúng mỗi lần chúng “quẩy” banh nhà. Cùng xem các đặc điểm của những anh chàng Husky đại ngáo dưới đây nhé!', 2222.000, 22.000, '16202714122197-Moca 2.jpg', 0, 1),
(47, 'Chó Corgi1', 'sad', 2, 1, 'sadsad', 3444.000, 2333.000, '2021-11-22 (1).png', 0, 0),
(48, 'Chó Pug Buồn', 'ưqe', 1, 1, 'Sự tinh nghịch của các chú chó luôn làm cho chủ nhân của chúng cảm thấy vui, tuy nhiên “vui thôi đừng vui quá” là câu nói mà đa phần những người nuôi giống chó Husky thường nói với chúng mỗi lần chúng “quẩy” banh nhà. Cùng xem các đặc điểm của những anh chàng Husky đại ngáo dưới đây nhé!', 2222.000, 222.000, 'hinh-anh-cho-buon-anh-cho-khoc-tam-trang-nhat-1.jpg', 0, 1),
(16, 'Thức ăn cho mèo', 'thuc-an', 3, 0, 'adsa', 50.000, 48.000, 'thucanmeo.jpg', 0, 1),
(17, 'Vòng Đeo Mèo', 'vong-deo', 3, 0, 'Thông tin\r\n<br>\r\nChất liệu nhựa cao cấp bền đẹp , màu sắc bắt mắt.\r\n<br>\r\nKích thước : đường kính 21cm, cao 7.5cm', 60.000, 55.000, 'v.jpg', 0, 1),
(18, 'BaLo Mèo\r\n', 'balo', 3, 0, 'đựng chó mèo đi dạo', 130.000, 120.000, 'tuimeo.jpg', 0, 1),
(19, 'Bát Thức ăn\r\n', 'bat', 3, 0, 'dụng cụ cho thú cưng ăn', 45.000, 40.000, 'chen.png', 0, 1),
(20, 'Mèo Anh Lông ngắn', 'meo-anh', 0, 2, 'Lông ngắn, trắng\r\n<br>\r\n6 tháng tuổi', 4500.000, 4200.000, '20.jpg', 0, 1),
(21, 'Chó AlsKa lai', 'cho-lai', 0, 2, '', 6000.000, 5500.000, '43.jpg', 0, 1),
(22, 'Chó AlasKa Thuần ', 'cho-thuan', 0, 2, 'thân thiên ', 6900.000, 6350.000, '42.jpg', 0, 1),
(23, 'Chó Bông Smile', 'bong', 0, 2, '', 5200.000, 5150.000, '41.jpg', 0, 1),
(24, 'Chó Poide', 'cho-poide', 0, 1, 'lông sọc trắng đen siu cute', 6800.000, 6560.000, '12.jpg', 0, 1),
(27, 'Mèo Ba Tư lông Xám', 'ba-tu-xam', 0, 3, 'Lông vàng, giống exotic', 3500.000, 2950.000, 'ngan xam.jpg', 0, 1),
(31, 'Mèo Ba Tư Chinchilla lông vàng', 'ba-tu-chinchilla-vang', 0, 4, 'Lông vàng. Chinchilla có phần lông đen thưa, mọc xen kẽ. ', 3000.000, 2985.000, 'ngan vang.jpg', 0, 1),
(40, 'Gấu Bông Cao', 'gau-bong-cao', 3, 1, 'gấu bông dành cho mèo', 150.000, 125.000, '22.jpg', 0, 1),
(33, 'Mèo Ba Tư Himalaya lông trắng đen', 'ba-tu-himalaya-trang-den', 0, 5, 'Lông trắng đem, dài\r\n<br>\r\nCần tìm chủ nuôi ạ', 4630.000, 4560.000, 'himalya den trang.jpg', 0, 1),
(34, 'Mèo Ba Tư Himalaya xám', 'ba-tu-himalaya-xam', 0, 5, 'Lông xám, dài\r\n<br>\r\n8 tháng tuổi\r\n<br>\r\nCần tìm ba mẹ nuôi ạ', 4875.000, 4750.000, '31.jpg', 0, 1),
(35, 'Mèo Ba Tư Himalaya trắng', 'meo-ba-tu-himalaya-trang', 0, 5, 'Lông trắng', 3800.000, 3750.000, 'himalaya-6.jpg', 0, 1),
(36, 'Mèo tai cụp lông vàng', 'meo-fold-vang', 0, 6, 'Lông vàng, trắng\r\n<br>\r\nLà một trong những giống mèo được yêu thích nhất hiện nay\r\n', 6000.000, 5800.000, 'cup vang trang.jpg', 0, 1),
(37, 'Mèo tai cụp màu tabby', 'tai-cup-scottish-fold-tabby', 0, 6, 'Lông trắng pha vằn đen\r\n<br>\r\nCần tìm ba mẹ nuôi ạ', 5900.000, 5780.000, 'cup trang.jpg', 0, 1),
(38, 'Mèo tai cụpFold trắng', 'tai-cup-fold', 0, 6, 'Lông trắng, dài, mượt\r\n<br>\r\nCần tìm ba mẹ nuôi', 5950.000, 5700.000, '2.jpg', 0, 1),
(39, 'Mèo tai cụp Scottish ', 'tai-cup-scottish', 0, 6, 'Lông xám đen\r\n<br>\r\n5 tháng tuổi\r\n', 4500.000, 3850.000, 'xam.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_test`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_test`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_test` (
  `id` int(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguyenvanminhtrong_test`
--

INSERT INTO `nguyenvanminhtrong_test` (`id`, `name`, `description`) VALUES
(NULL, '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguyenvanminhtrong_user`
--

DROP TABLE IF EXISTS `nguyenvanminhtrong_user`;
CREATE TABLE IF NOT EXISTS `nguyenvanminhtrong_user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` char(32) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL,
  `trash` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
