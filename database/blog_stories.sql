-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 06, 2024 lúc 03:56 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blog_stories`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet_the`
--

CREATE TABLE `baiviet_the` (
  `id_bv_the` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  `id_bv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id_bv` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `anh_bia` varchar(255) NOT NULL,
  `tom_tat` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_capnhat` date NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `noi_bat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id_bv`, `tieu_de`, `anh_bia`, `tom_tat`, `noi_dung`, `ngay_capnhat`, `luot_xem`, `noi_bat`) VALUES
(1, 'Ngôn ngữ lập trình PHP là gì? Tất tần tật những điều bạn cần biết về PHP', 'public/image/post/php-image.jpg', 'Ngôn ngữ PHP thường được dùng trong việc xây dựng và phát triển website bởi nó có thể kết nối dễ dàng với các website khác có sử dụng HTML. PHP cũng là ngôn ngữ lập trình có mã nguồn mở, tương thích với nhiều nền tảng khác nhau như MacOS, Linux, Windows,…', 'Một số ứng dụng phổ biến của PHP trong ngành IT:\r\n\r\nThiết lập chương trình cho hệ thống máy chủ: Đây là một ứng dụng chủ yếu nhất của PHP. Các PHP Developer sẽ phải thực hiện các thao tác như phân tích ngôn ngữ lập trình PHP, xây dựng máy chủ web và trình duyệt web.\r\nTạo các dòng tập lệnh: Các lập trình viên sẽ tạo ra một dòng tập lệnh để vận hành chương trình PHP mà không cần đến máy chủ. Kiểu lập trình này được sử dụng trên các hệ điều hành phổ biến như Linux hay Windows.\r\nXây dựng các ứng dụng làm việc: Bạn có thể ứng dụng những điểm mạnh vốn có của PHP để xây dựng ứng dụng phần mềm. Các lập trình viên thường dùng PHP – GTK làm nền tảng xây dựng phần mềm vì đây là nhánh mở rộng của ngôn ngữ lập trình này và không có sẵn trong các bản phân phối chính thức hiện nay.\r\nHỗ trợ cho mọi loại cơ sở dữ liệu khác nhau: Khi một website có hỗ trợ cơ sở dữ liệu tốt sẽ giúp ích cho việc vận hành, sao lưu và đặc biệt là backup dữ liệu đề phòng trường hợp xảy ra an ninh mạng.\r\nƯu nhược điểm của ngôn ngữ lập trình PHP\r\nƯu điểm\r\nPHP được sử dụng phổ biến bởi nhiều lợi ích mà nó mang lại. Dưới đây là một số ưu điểm cơ bản của ngôn ngữ PHP:\r\n\r\nMã nguồn mở và miễn phí: PHP sử dụng miễn phí nên giúp tiết kiệm đáng kể ngân sách dự án. Việc cài đặt và sử dụng ngôn ngữ này cũng rất dễ dàng, bạn chỉ cần học chăm chỉ trong 3 – 6 tháng là đã có thể sử dụng thuần thục.\r\nTính linh hoạt: PHP là một ngôn ngữ đa nền tảng, có thể hoạt động trên bất kỳ hệ điều hành nào (Windows, Linux, macOS,…). Hơn nữa, PHP còn có thể kết hợp với nhiều ngôn ngữ lập trình khác để xây dựng các tính năng công nghệ một cách hiệu quả nhất.\r\nHệ thống thư viện phong phú, tính cộng đồng cao: Do sự phổ biến của ngôn ngữ PHP nên việc tìm các thư viện code hay hàm liên quan đến PHP sẽ cực kỳ đơn giản. Chưa kể, bạn sẽ nhận được sự trợ giúp từ các diễn đàn, đội nhóm chuyên sâu của PHP giúp việc học tập hay làm việc trở nên dễ dàng.\r\nCơ sở dữ liệu đa dạng: PHP cho phép kết nối với hầu hết các cơ sở dữ liệu khác như mySQL, SQLite, PostgreSQL, MS-SQL,…\r\nưu nhược điểm của ngôn ngữ lập trình php\r\nNhược điểm \r\nMặc dù sở hữu nhiều lợi ích nhưng ngôn ngữ PHP vẫn có một số hạn chế nhất định, trong đó vấn đề bảo mật được nhiều người quan tâm nhất. Bởi bản chất của PHP có mã nguồn mở nên các lỗ hổng của mã nguồn sẽ bị công khai ngay sau khi chúng được tìm thấy. Và các lỗ hổng này có thể bị khai thác cho các mục đích xấu trước khi chúng ta kịp sửa chữa.\r\n\r\nBên cạnh đó, ngôn ngữ lập trình PHP chỉ hoạt động được trên các website và giao diện không được gọn gàng, đẹp mắt. Độ bảo mật và hiệu suất của ngôn ngữ này cũng chưa tốt.\r\n\r\nĐừng bở lỡ việc làm PHP Hồ Chí Minh\r\n\r\nSự khác biệt giữa PHP với các ngôn ngữ lập trình khác\r\nNgôn ngữ lập trình PHP không chạy trên một trình duyệt mà chủ yếu tương thích với một máy chủ web. Nếu bạn mở một trang web bất kỳ, máy chủ sẽ chạy tập lệnh PHP được liên kết sau đó trả lại website cho bạn.\r\n\r\nVới HTML: Ngôn ngữ này được dùng để tạo cấu trúc cơ bản của một trang web. Hầu hết các trang web hiện nay đều cần sử dụng ngôn ngữ này để xây dựng website.\r\n\r\nVới CSS: Sử dụng với mục đích trang trí cho website thêm sinh động, đẹp mắt. Các lập trình viên sử dụng nhiều hiệu ứng khác nhau giúp website bạn trở nên ấn tượng và thu hút người dùng.\r\n\r\nVới Javascript: Các lập trình viên sẽ sử dụng ngôn ngữ này đặt các phép tính, điều kiện khác nhau để kiểm tra khả năng phản ứng của website trong điều kiện thực tế.\r\n\r\nThu nhập của lập trình viên PHP là bao nhiêu?\r\nMức lương của các lập trình viên tại Việt Nam khá cao so với các ngành nghề khác. Nếu bạn là một lập trình viên PHP chưa có nhiều kinh nghiệm thì mức lương sẽ dao động từ 14 – 16 triệu đồng/tháng. Còn đối với những người đã trên 1 năm kinh nghiệm, mức lương trung bình có thể hơn 24 triệu đồng/tháng.\r\n\r\nmức lương lập trình viên php\r\nCó thể thấy, mức lương của nghề lập trình PHP là vô cùng hấp dẫn, bạn sẽ được trả lương rất cao nếu như thật sự có năng lực tốt. Các nhà tuyển dụng sẵn sàng bỏ ra số tiền lớn để chiêu mộ được nhân tài về lập trình PHP. Tuy nhiên, đây chỉ là mức lương để bạn tham khảo, mức lương này có thể tăng cao hơn hoặc thấp hơn tùy vào quy mô công ty, vị trí, yêu cầu công việc,…\r\n\r\nKết bài\r\nNhư vậy, bài viết này đã giúp bạn trả lời được câu hỏi ngôn ngữ lập trình PHP là gì và những kiến thức xoay quanh ngôn ngữ này. Với PHP bạn có thể dễ dàng xây dựng bất kỳ loại trang web nào một cách hiệu quả và nhanh chóng.\r\n\r\nNhu cầu tuyển lập trình viên PHP vẫn đang rất cao, mức thu nhập khá hấp dẫn. Nếu bạn quan tâm đến công việc này, hãy truy cập TopDev để lựa chọn cho mình công việc phù hợp nhé!', '2024-05-06', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_xet`
--

CREATE TABLE `nhan_xet` (
  `id_cmt` int(11) NOT NULL,
  `id_bv` int(11) NOT NULL,
  `id_tk` int(11) NOT NULL,
  `id_cmt_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id_tk` int(11) NOT NULL,
  `ten_tk` varchar(100) NOT NULL,
  `ho` varchar(30) NOT NULL,
  `ten` varchar(30) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `vai_tro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the`
--

CREATE TABLE `the` (
  `id_tag` int(11) NOT NULL,
  `ten_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `the`
--

INSERT INTO `the` (`id_tag`, `ten_tag`) VALUES
(1, 'PHP');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet_the`
--
ALTER TABLE `baiviet_the`
  ADD PRIMARY KEY (`id_bv_the`);

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bv`);

--
-- Chỉ mục cho bảng `nhan_xet`
--
ALTER TABLE `nhan_xet`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- Chỉ mục cho bảng `the`
--
ALTER TABLE `the`
  ADD PRIMARY KEY (`id_tag`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet_the`
--
ALTER TABLE `baiviet_the`
  MODIFY `id_bv_the` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id_bv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhan_xet`
--
ALTER TABLE `nhan_xet`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `the`
--
ALTER TABLE `the`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
