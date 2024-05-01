-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th5 01, 2024 lúc 11:32 AM
-- Phiên bản máy phục vụ: 10.6.17-MariaDB-cll-lve
-- Phiên bản PHP: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thanhly1_kygui`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_title` varchar(200) NOT NULL,
  `blog_des` text NOT NULL,
  `blog_content` text NOT NULL,
  `blog_image` varchar(500) NOT NULL,
  `blog_created_at` timestamp NULL DEFAULT current_timestamp(),
  `blog_updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_des`, `blog_content`, `blog_image`, `blog_created_at`, `blog_updated_at`) VALUES
(10, 'ĐỒ 2HAND VÀ BÍ QUYẾT PHỐI ĐỒ 2HAND KHÔNG BỊ LỖI THỜI', 'Trong Thời Đại Ngày Nay, Việc Sử Dụng Đồ 2hand Đã Trở Thành Một Xu Hướng Phổ Biến Không Chỉ Tại Việt Nam Mà Còn Ở Nhiều Quốc Gia Khác.', '<p>Trong thời đại ngày nay, việc sử dụng <a href=\"https://www.facebook.com/NhaDewi.vn\">đồ 2hand</a> đã trở thành một xu hướng phổ biến không chỉ tại Việt Nam mà còn ở nhiều quốc gia khác. Điều này không chỉ giúp tiết kiệm chi phí mà còn đem lại sự đa dạng và phong cách cho bộ sưu tập trang phục của bạn. Tuy nhiên, để phối hợp đồ 2hand một cách hợp lý và không bị lỗi thời vẫn là một thách thức đối với nhiều người. Dưới đây là một số gợi ý từ Comi để giúp bạn tỏa sáng với trang phục 2hand một cách tự tin và sang trọng.</p><h3><strong>Khám phá về đồ 2hand</strong></h3><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/160;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/do-2hand-la-gi-300x160.jpg\" alt=\"\" width=\"300\" height=\"160\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><p>Đồ 2hand là những món đồ đã qua sử dụng nhưng vẫn còn có thể tái sử dụng được. Đây có thể là quần áo, giày dép, phụ kiện, túi xách, đồ trang trí, nội thất, và nhiều loại hàng khác. Ưu điểm của đồ 2hand là sự đa dạng về mẫu mã, giá thành hợp lý và đặc biệt, giúp bảo vệ môi trường bằng cách tái sử dụng sản phẩm.</p><h3><strong>Ưu điểm và nhược điểm của đồ 2hand</strong></h3><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/200;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/hang-2hand-la-gi-4-1-300x200.jpg\" alt=\"\" width=\"300\" height=\"200\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><h4><strong>Ưu điểm đồ 2hand</strong></h4><ul><li><span class=\"ck-list-bogus-paragraph\">Mẫu mã đa dạng: Những loại hàng secondhand rất đa dạng, có rất nhiều mẫu mã đẹp nên bạn không phải lo lắng là mình sẽ không chọn được mẫu phù hợp với mình. Vậy nên có rất nhiều<strong>&nbsp;cách phối đồ 2hand</strong>&nbsp;đẹp và sang trọng mà bạn không nên bỏ lỡ.</span></li><li><span class=\"ck-list-bogus-paragraph\">Giá thành siêu rẻ: Khác với những mặt hàng còn mới thì 2hand là các mẫu hàng đã qua sử dụng và được thanh lý lại, cho nên việc bán ra thị trường sẽ có mức giá siêu rẻ. Thường một mặt hàng 2hand sẽ có giá bằng ½ hay thậm chí là bằng 1/10 so với giá gốc. 2hand chính là “thiên đường mua sắm” cho những bạn có ngân sách hạn hẹp, không những thế 2hand còn được rất nhiều giới thượng lưu để mắt đến.</span></li><li><span class=\"ck-list-bogus-paragraph\">Giúp bảo vệ môi trường: Thay vì chúng ta bỏ đi, thì giờ đây những hàng 2hand là hàng tái sử dụng lại, điều này giúp giảm thiểu tình trải bỏ các chất thải ra bên ngoài. Những sản phẩm 2hand thường không quá chú trọng về nhãn mác, bao bì hay túi đựng quá nhiều, nên cũng đã giảm một phần chất thải nilon độc hại. Sử dụng đồ 2hand là bạn đang góp phần bảo vệ môi trường, gìn giữ một thế giới màu xanh.</span></li></ul><h4><strong>Nhược điểm đồ 2hand</strong></h4><ul><li><span class=\"ck-list-bogus-paragraph\">Nguồn gốc xuất xứ: Hiện tại, đa phần người kinh doanh 2hand rất nhiều nhưng về nguồn gốc xuất xứ vẫn đang là một dấu chấm hỏi, Có những nơi họ không công khai rõ ràng nguồn gốc, nhưng lại bán với mức giá cao hoặc giá rẻ. Điều này cũng là một vấn đề đáng lo ngại với những tín đồ mê hàng 2hand.</span></li><li><span class=\"ck-list-bogus-paragraph\">Thời gian lựa chọn khá lâu: Những mặt hàng 2hand rất đa dạng và thường được chất đống khá lộn xộn, không những vậy khách hàng mang tâm lý hàng cũ nên kéo theo việc khi lựa chọn sẽ rất tốn thời gian.</span></li><li><span class=\"ck-list-bogus-paragraph\">Dẫn đến các bệnh ngoài da (nếu không được xử lý cẩn thận): Đối với những mặt hàng 2hand không được xử lý kỹ càng, rất có thể sẽ dẫn đến các bệnh ngoài da đối với những bạn có cơ địa không được tốt. Vậy nên khi đi mua sắm bạn nên hạn chế thử đồ luôn nhé, để chắc chắn hãy xử lý kỹ tại nhà sau khi mua về để tránh điều không mong muốn xảy ra.</span></li></ul><h3><strong>Mách bạn những cách phối đồ 2hand không bị lỗi thời</strong></h3><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/194;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/82144-khong-mac-qua-ba-lop-ao-300x194.jpg\" alt=\"\" width=\"300\" height=\"194\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><h4><strong>Kết hợp phụ kiện:</strong></h4><p>Để làm cho trang phục 2hand trở nên độc đáo và nổi bật, bạn có thể kết hợp chúng với các phụ kiện như khăn, hoa tai, dây chuyền, đồng hồ, và túi xách phù hợp.</p><h4><strong>Lựa chọn áo khoác phù hợp:</strong></h4><p>Áo khoác không chỉ giúp bổ sung cho trang phục mà còn là điểm nhấn quan trọng. Hãy chọn áo khoác phù hợp với phong cách của bạn để tạo điểm nhấn và tôn lên vẻ thanh lịch</p><h4><strong>Phối màu sắc và kiểu dáng:</strong></h4><p>Khi phối đồ 2hand, hãy chọn những màu sắc và kiểu dáng phù hợp với nhau để tạo ra sự ăn ý và hài hòa.</p><h4><strong>Sử dụng thắt lưng và thắt vạt áo:</strong></h4><p>Thắt lưng và thắt vạt áo là những phụ kiện không thể thiếu giúp tạo điểm nhấn và tôn lên vẻ nữ tính và thanh lịch cho trang phục.</p><p>Như vậy, việc phối đồ 2hand một cách tinh tế và sáng tạo không chỉ giúp bạn tiết kiệm chi phí mà còn giữ được phong cách cá nhân và góp phần bảo vệ môi trường. Hãy tham khảo những gợi ý trên và khám phá thêm nhiều cách phối đồ 2hand đẹp mắt khác tại <a href=\"https://thanhlykyguidewi.site/kygui/index.php\">DEWI</a> để tỏa sáng trong mọi dịp.</p>', 'https://res.cloudinary.com/dcweof28t/image/upload/v1712827132/xycxjd5heao0ike4jsk4.jpg', '2024-04-11 09:18:57', '2024-04-11 15:07:25'),
(11, 'CHIA SẺ CÁCH THANH LÝ QUẦN ÁO CŨ NHANH NHẤT – BÍ QUYẾT THANH LÝ QUẦN ÁO GIÁ CAO', 'Thanh Lý Ký Gửi Quần Áo Là Một Trong Những Hình Thức Vô Cùng Phổ Biến Hiện Nay. DEWI Có Những Bí Quyết Thanh Lý Quần Áo Cũ Nhanh Chóng Với Giá Cao.', '<p>Thanh lý ký gửi quần áo là một trong những hình thức vô cùng phổ biến hiện nay. Nếu bạn đang chưa biết<strong>&nbsp;cách thanh lý quần áo cũ nhanh nhất</strong> như thế nào. Hãy đọc ngay bài viết sau của <strong>DEWI&nbsp;</strong>để nắm được những bí quyết&nbsp;<i>thanh lý </i>nhanh chóng với giá cao nhé!</p><h3><strong>Khi nào bạn cần thanh lý quần áo cũ</strong></h3><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/201;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/image-5-cac-dia-diem-quyen-gop-quan-ao-tu-thien-tai-ha-noi-2023-50ed2c217235bd724ed1153dd34471d3-300x201.jpg\" alt=\"Thanh lý quần áo - giải pháp cho tủ đồ của bạn\" width=\"300\" height=\"201\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><p>Có những dấu hiệu rõ ràng cho thấy bạn cần sắp xếp lại tủ quần áo của mình và tìm cách thanh lý những món đồ đã qua sử dụng. Đây là những điều bạn nên lưu ý:</p><ul><li><span class=\"ck-list-bogus-paragraph\">Tủ quần áo quá đầy, không còn chỗ trống để sắp xếp gọn gàng và thêm món mới.</span></li><li><span class=\"ck-list-bogus-paragraph\">Sở hữu quá nhiều quần áo mà bạn không sử dụng hoặc ít khi mặc đến.</span></li><li><span class=\"ck-list-bogus-paragraph\">Mong muốn thay đổi phong cách thời trang, làm mới bản thân và tủ đồ của bạn.</span></li><li><span class=\"ck-list-bogus-paragraph\">Khi dọn dẹp nhà cửa, bạn nhận ra có quá nhiều quần áo, trong đó có những món chưa từng mặc lần nào.</span></li><li><span class=\"ck-list-bogus-paragraph\">Cần một khoản tiền dư để đầu tư vào những bộ quần áo mới.</span></li></ul><p>Nếu bạn gặp phải một hoặc nhiều trường hợp trên, đừng ngần ngại đưa quần áo cũ của mình ra khỏi tủ và tìm cách thanh lý chúng. DEWI sẽ hướng dẫn bạn cách tiếp cận và thanh lý một cách hiệu quả nhất.</p><h3><strong>Các cách thanh lý quần áo cũ</strong></h3><h4><strong>Thanh lý cũ tại những địa chỉ chuyên thanh lý ký gửi</strong></h4><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/225;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/quan-ao449478-300x225.jpg\" alt=\"Thanh lý quần áo - giải pháp cho tủ đồ của bạn\" width=\"300\" height=\"225\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><p>Nếu như bạn là một người khá bận rộn cũng như không có nhiều thời gian để tự thanh lý. Hãy nghĩ ngay đến việc thanh lý ký gửi chúng tại các địa chỉ chuyên mua bán quần áo cũ.</p><p>Tại đây, họ sẽ giúp bạn tân trang lại những bộ quần áo cũ, chụp hình đăng bán cũng như bày trí trực tiếp tại cửa hàng. Đây là một trong những&nbsp;<i>cách thanh lý </i>nhanh nhất giúp bạn mau chóng bán được quần áo cũ.</p><p>Hiện nay, ở Việt Nam, hình thức này đã khá phổ biến và những điểm chuyên thanh lý như vậy cũng ngày càng nhiều.</p><h4><strong>Thanh lý online</strong></h4><p>Theo hình thức này, bạn có thể tự chụp hình và đăng bán các quần áo cũ hoặc livestream để&nbsp; thanh lý hàng cũ trên trang cá nhân facebook hoặc trong các hội nhóm</p><p>Và&nbsp;<strong>cách thanh lý quần áo cũ nhanh nhất</strong>&nbsp;là bạn phải chọn được nơi đăng bán những bộ quần áo đó thật phù hợp. Các nhóm chuyên thanh lý đồ cũ online hiện rất đa dạng. Từ những bạn sinh viên tới các bà mẹ bỉm sữa hay người có thu nhập thấp,… đều có thể là đối tượng mua hàng thanh lý của bạn.</p><h3><strong>Bí quyết giúp bạn thanh lý quần áo cũ nhanh nhất với mức giá hấp dẫn</strong></h3><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/195;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/thanh-ly-ky-gui-300x195.jpg\" alt=\"Thanh lý quần áo - giải pháp cho tủ đồ của bạn\" width=\"300\" height=\"195\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><h4><strong>Thanh lý đồ vẫn còn sử dụng được</strong></h4><p>Những món đồ chỉ mặc một vài lần hoặc còn nguyên tem mác thường có giá trị cao hơn và được thanh lý nhanh chóng. Hãy tận dụng những món đồ này để tăng giá trị cho quần áo của bạn.</p><p>Chọn lựa những bộ quần áo còn đẹp, không bị sờn chỉ, phai màu, và được ủi phẳng phiu. Điều này giúp thu hút sự quan tâm từ phía người mua và tăng khả năng bán hàng.</p><h4><strong>Làm sạch và kiểm tra kỹ trước khi bán</strong></h4><p>Trước khi đưa sản phẩm lên sàn giao dịch, hãy đảm bảo rằng chúng đã được làm sạch sẽ và ủi phẳng. Điều này tạo ấn tượng tốt đối với người mua và giúp tăng cơ hội bán hàng thành công.</p><h4><strong>Thanh lý theo mùa</strong></h4><p>Sắp xếp quần áo theo mùa để tận dụng xu hướng thời trang và nhu cầu của người tiêu dùng. Ví dụ, bán bớt những bộ quần áo thu đông khi mùa hè đến, hoặc thanh lý sớm những món quần áo với kiểu mẫu đang hot khi bạn cảm thấy chán chường.</p><h3><strong>Ưu điểm khi lựa chọn DEWI làm nơi thanh lý đồ</strong></h3><p>Nếu bạn có nhu cầu đem quần áo cũ đi bán theo<strong> cách thanh lý nhanh nhất</strong>, hãy tìm đến DEWI, địa chỉ chuyên nhận ký gửi quần áo cũ uy tín với các ưu điểm nổi bật:</p><ul><li><span class=\"ck-list-bogus-paragraph\">Thanh toán ngay chi phí khi thu mua quần áo cũ của khách hàng, không để khách hàng chờ đợi lâu như những đơn vị khác.</span></li><li><span class=\"ck-list-bogus-paragraph\">Phí ký gửi được dựa trên sản phẩm cụ thể, đảm bảo mức giá hợp lý và xứng đáng với giá trị của sản phẩm.</span></li><li><span class=\"ck-list-bogus-paragraph\">Nhân viên hỗ trợ khách hàng luôn tư vấn và giúp đỡ các bạn một cách nhiệt tình, niềm nở.</span></li><li><span class=\"ck-list-bogus-paragraph\">Thỏa thuận và quy định rõ ràng, minh bạch, bảo đảm lợi ích của khách hàng.</span></li><li><span class=\"ck-list-bogus-paragraph\">Quy trình thanh lý ký gửi được diễn ra nhanh chóng và chuyên nghiệp, khách hàng luôn có thể yên tâm khi sử dụng dịch vụ của chúng tôi.</span></li></ul><p>Hy vọng qua những chia sẻ trên của <a href=\"https://thanhlykyguidewi.site/kygui/index.php\">DEWI</a>,&nbsp;các bạn đã biết được&nbsp;<a href=\"https://thanhlykyguidewi.site/kygui/src/pages/registersend.php\"><strong>cách thanh lý nhanh nhất</strong></a> với giá cao. Nếu bạn có nhu cầu ký gửi quần áo tại DEWI, có thể liên hệ với chúng tôi qua <a href=\"https://www.facebook.com/NhaDewi.vn\">Facebook</a> hoặc <a href=\"https://docs.google.com/forms/d/e/1FAIpQLSetnWZ7AR6R-_dztAJRqZxvuRtyUgtDj0qKkmf7GXQxswMCSw/viewform\" class=\"ck-link_selected\">điền form đăng ký</a> để đặt lịch nhé!</p>', 'https://res.cloudinary.com/dcweof28t/image/upload/v1712847782/zeqaha7wnwyle1uog8bi.jpg', '2024-04-11 15:05:38', '2024-04-11 15:05:38'),
(12, 'PHONG CÁCH 2HAND – XU HƯỚNG CỦA GIỚI TRẺ NGÀY NAY', 'Mặc Dù Được Coi Là \"Đã Cũ\" Trong Sự Thay Đổi Không Ngừng Của Ngành Thời Trang, Nhưng Phong Cách 2hand Vẫn Ngày Càng Thu Hút Và Phát Triển Mạnh Mẽ.', '<p>Mặc dù được coi là \"đã cũ\" trong sự thay đổi không ngừng của ngành thời trang, nhưng phong cách 2hand vẫn ngày càng thu hút và phát triển mạnh mẽ, đặc biệt là trong cộng đồng tín đồ thời trang. Vậy điều gì khiến cho phong cách 2hand trở nên phổ biến như vậy? Cùng DEWI khám phá điều này nhé!</p><h3><strong>Phong cách 2hand là gì?</strong></h3><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/174;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/ANH-dai-dien-blog-3-300x174.jpg\" alt=\"Phong cách 2hand - xu hướng mới của giới trẻ\" width=\"300\" height=\"174\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><p>Phong cách 2hand là việc mua sắm những món đồ đã qua sử dụng, nhưng vẫn giữ được chất lượng và khả năng sử dụng. Trái với quan niệm trước đây, đồ 2hand không còn là những sản phẩm kém chất lượng được bày bán tại các sạp ngoài chợ. Ngày nay, thị trường đồ 2hand phát triển mạnh mẽ với sự đa dạng và chất lượng của các sản phẩm.</p><p>Trong thời gian gần đây, xu hướng đồ 2hand đã trở nên phổ biến và được nhiều người yêu thích, đặc biệt là các tín đồ thời trang. Không khó để bắt gặp những bộ trang phục ấn tượng được tạo ra từ các món đồ 2hand.</p><p>Tất cả các sản phẩm 2hand có thể là quần áo, túi xách, giày dép hoặc bất kỳ món đồ nào có thể tái sử dụng. Với sự sáng tạo, bạn có thể biến chúng thành những trang phục độc đáo và phù hợp với phong cách thời trang riêng của mình.</p><h3><strong>Tại sao phong cách 2hand đang được giới trẻ ưa chuộng?</strong></h3><p>Giữa rất nhiều phong cách thời trang, vậy tại sao&nbsp;<strong>phong cách 2hand</strong>&nbsp;lại đang trở thành xu hướng toàn cầu – được rất nhiều giới trẻ ưa chuộng?</p><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/225;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/shop-si-quan-ao-300x225.jpg\" alt=\"Phong cách 2hand - xu hướng mới của giới trẻ\" width=\"300\" height=\"225\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><h4><strong>Thứ nhất: Giá thành phải chăng</strong></h4><p>Một trong những lý do khiến phong cách 2hand thu hút đông đảo người hâm mộ là vì giá cả phải chăng. Chỉ cần chi một phần nhỏ của giá gốc, bạn có thể sở hữu những món đồ ưa thích mà không cần phải gánh nặng về chi phí. Điều này giúp bạn tiết kiệm được một khoản lớn tiền và có thể dành cho việc mua sắm thêm các món đồ khác.</p><h4><strong>Thứ 2: Phong cách độc đáo</strong></h4><p>Phong cách 2hand mang đến những món đồ \"độc nhất vô nhị\", giúp bạn tạo dựng phong cách cá nhân không trùng lặp. Đối với những người yêu thích thời trang, đây là cơ hội để biến tấu và thể hiện bản thân qua các bộ cánh độc đáo và sáng tạo. Đặc biệt, phong cách vintage luôn là lựa chọn ưa thích của giới trẻ, với những mẫu quần áo/đầm vintage độc đáo mà không thể tìm thấy ở các thương hiệu mới.</p><h4><strong>Thứ 3: Bảo vệ môi trường</strong></h4><p>Xu hướng sử dụng đồ phong cách 2hand cũng đồng nghĩa với việc bảo vệ môi trường. Việc tái sử dụng các món đồ đã qua sử dụng giúp giảm thiểu lượng chất thải và tiết kiệm tài nguyên. Đây là một thông điệp quan trọng góp phần làm cho môi trường sống trở nên xanh hơn, sạch đẹp hơn.</p><h3><strong>Những lưu ý trong phong cách 2hand mà bạn cần biết</strong></h3><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/169;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/anh-blog-3.1-300x169.jpg\" alt=\"Phong cách 2hand - xu hướng mới của giới trẻ\" width=\"300\" height=\"169\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><p>Ngoài những ưu điểm của phong cách 2hand, cũng cần lưu ý một số điều nhỏ sau:</p><ul><li><span class=\"ck-list-bogus-paragraph\">Kiểm tra kỹ trước khi mua: Hàng 2hand đã qua sử dụng nên bạn cần kiểm tra kỹ lưỡng để tránh mua phải sản phẩm có lỗi, hư hỏng hoặc rách.</span></li><li><span class=\"ck-list-bogus-paragraph\">Vệ sinh kỹ trước khi sử dụng: Sau khi mua về, bạn nên ngâm sản phẩm trong nước nóng, giặt và phơi nắng để loại bỏ vi khuẩn. Hạn chế sử dụng ngay sau khi mua!</span></li><li><span class=\"ck-list-bogus-paragraph\">Tìm địa chỉ mua uy tín: Để đảm bảo chất lượng của các sản phẩm 2hand, hãy tìm kiếm đến các cửa hàng có uy tín và tin cậy để mua sắm.</span></li><li><span class=\"ck-list-bogus-paragraph\">Dành thời gian tìm kiếm: Để tìm được những món đồ phong cách 2hand chất lượng và độc đáo, bạn cần dành thời gian khám phá và lùng sục khắp các cửa hàng 2hand.</span></li></ul><h3><strong>Cửa hàng bán hàng 2hand độc đáo tại TP. Hồ Chí Minh</strong></h3><p>Có rất nhiều cửa hàng bán đồ second hand mọc khắp nơi, vì vậy bạn không cần phải tốn quá nhiều thời gian để tìm kiếm. Tuy nhiên, việc tìm được cửa hàng với phong cách 2hand uy tín và chất lượng không phải là điều dễ dàng. Thị trường hàng second hand thường gặp phải những vấn đề như \"giá không xứng đáng với chất lượng\" hoặc hàng bị hỏng, rách nhưng người bán cố tình giấu giếm.</p><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/195;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/thanh-ly-ky-gui-300x195.jpg\" alt=\"Thanh lý ký gửi Dewi\" width=\"300\" height=\"195\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><p>Nếu bạn đang phân vân không biết nên tìm mua đồ 2hand ở đâu, hãy liên hệ ngay với <a href=\"https://thanhlykyguidewi.site/kygui/index.php\">DEWI</a>. Chúng tôi là cửa hàng thanh lý ký gửi ở TP. Hồ Chí Minh. Dưới đây là 3 lý do mà bạn có thể tin tưởng vào DEWI:</p><ul><li><span class=\"ck-list-bogus-paragraph\">Tình trạng hàng hóa từ 80% trở lên mới. Chúng tôi lựa chọn sản phẩm 2hand một cách cẩn thận và chi tiết.</span></li><li><span class=\"ck-list-bogus-paragraph\">DEWI thu mua các món đồ không còn sử dụng với giá cao, và thanh toán ngay lập tức mà không làm bạn mất thêm thời gian chờ đợi.</span></li><li><span class=\"ck-list-bogus-paragraph\">Chúng tôi cam kết không bán các sản phẩm bị lỗi. Vậy còn chần chừ gì mà bạn không liên hệ ngay với DEWI để tìm kiếm những món đồ phong cách 2hand đa dạng và độc đáo.</span></li></ul>', 'https://res.cloudinary.com/dcweof28t/image/upload/v1712848594/mibw5fqgaiplvz7ikp9z.jpg', '2024-04-11 15:17:09', '2024-04-11 15:17:09'),
(13, 'TIPS DỌN DẸP TỦ QUẦN ÁO GỌN GÀNG TỪ A-Z', 'Dọn Dẹp Tủ Quần Áo Là Một Trong Những Điều Mà Hầu Như Ai Cũng Phải Làm Khi Thấy Mình Có Quá Nhiều Đồ NHƯNG Vẫn Cảm Thấy Không Có Gì Để Mặc.', '<p><strong>Dọn tủ tủ quần áo là một trong những điều mà hầu như ai cũng phải làm khi thấy mình có quá nhiều đồ NHƯNG vẫn cảm thấy không có gì để mặc, hay khi cảm thấy tủ đồ của mình quá chật chọi và bừa bộn. Vậy làm thế nào để tủ quần áo của mình được dọn một cách nhanh chóng và gọn gàng nhất? Cùng </strong><a href=\"https://thanhlykyguidewi.site/kygui/index.php\"><strong>DEWI</strong></a><strong> học tập một số tips dọn dẹp sau giúp tiết kiệm thời gian và “giải tán” được đống đồ cũ ngay sau đây nhé. </strong></p><h3><strong>Tại sao nên dọn dẹp tủ quần áo?</strong></h3><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:225/225;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/don-dep-tu-quan-ao.jpg\" alt=\"Dọn dẹp tủ quần áo gọn gàng và nhanh chóng\" width=\"225\" height=\"225\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><p><strong>Khi tủ đồ được dọn dẹp một cách ngăn nắp, bạn sẽ tiết kiệm được rất nhiều thời gian tìm kiếm và chọn đồ. Điều này cũng giúp tinh thần của bạn tốt hơn rất nhiều khi nhìn mọi thứ được gọn gàng, ngăn nắp. Và đặc biết có chỗ cho những món đồ mới mua.</strong></p><h3><strong>Tips dọn dẹp tủ quần áo mà mọi người nên biết</strong></h3><p>Bạn cảm thấy căn phòng của mình đang tràn ngập quần áo mà không biết phải làm sao? Hãy thử áp dụng phương pháp dọn dẹp của chuyên gia người Nhật Bản, Marie Kondo.</p><h4><strong>Bước 1: Tập Kết</strong></h4><p>Hãy bắt đầu bằng việc lôi tất cả quần áo ra khỏi tủ, giá treo, túi đựng và vali. Đây có thể là một quá trình choáng ngợp, nhưng nó giúp bạn nhận ra số lượng đồ mình sở hữu và những món thừa thãi cần loại bỏ. Đây cũng là cơ hội để thay đổi tư duy và dũng cảm hơn trong việc tối giản đồ đạc.</p><h4><strong>Bước 2: Phân Loại</strong></h4><p>Sau khi đã tập kết được đống đồ, hãy phân loại chúng thành ba nhóm: Giữ, Bỏ và Chưa Xác Định. Những món bạn muốn giữ lại, những món bạn muốn loại bỏ và những món bạn chưa quyết định. Đây là bước quan trọng để định hình lại không gian sống của bạn.</p><h4><strong>Bước 3: Sắp Xếp</strong></h4><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:277/182;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/thanh-ly-ky-gui-quan-ao-1.jpg\" alt=\"Dọn dẹp tủ quần áo gọn gàng và nhanh chóng\" width=\"277\" height=\"182\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><p>Sau khi đã quyết định được những món đồ muốn giữ lại, hãy sắp xếp chúng lại một cách khoa học và tiện lợi. Cân nhắc hệ thống sắp xếp của mình và tạo label (thẻ tên đánh dấu) để dễ dàng tìm kiếm. Điều này giúp không gian của bạn trở nên ngăn nắp và tiện lợi hơn.</p><p>Cuối cùng, sau khi hoàn thành việc sắp xếp, hãy tận hưởng thành quả của mình và rút ra những bài học quý giá từ quá trình tối giản. Hãy chia sẻ những trải nghiệm của bạn và học hỏi từ những người khác để tiếp tục duy trì không gian sống sạch sẽ và gọn gàng.</p><p>Với phương pháp dọn dẹp của Marie Kondo, bạn sẽ trải qua một hành trình từ hỗn độn đến sắp xếp khoa học và tiện lợi. Hãy để không gian sống của bạn trở nên thoải mái và thư giãn hơn với những bước đơn giản này.</p><h3><strong>SAU KHI DỌN DẸP TỦ QUẦN ÁO</strong></h3><p><i>Làm gì với số quần áo dư thừa?</i> Sau đây là một số ý tưởng để bạn cân nhắc khi xử lý quần áo dư thừa của mình:</p><p><strong>Cho/tặng:</strong> Người Việt có câu “cũ người, mới ta” - ý nói món đồ bạn không cần nữa có thể lại là món người khác cần và muốn sở hữu. Bởi vậy, cho/tặng ai đó quần áo cũ là một điều tốt. Tuy nhiên, trước khi mang đồ đến cho ai đó, bạn cần hỏi ý kiến người ta trước xem họ có thực sự cần món đồ đó không. Điều này giúp cho người ta không cảm thấy bị ép buộc khi nhận đồ bạn cho và tránh cho họ rơi vào tình huống khó xử nếu không thích món đồ của bạn.</p><p><strong>Thiện nguyện</strong>: Cũng với tinh thần “cũ người, mới ta”, bạn có thể gửi quần áo dư thừa của mình đến các trung tâm từ thiện hoặc tới các chiến dịch quyên góp quần áo cũ. Tuy nhiên, bạn cần lưu ý chỉ gửi đi từ thiện quần áo lành lặn, sạch sẽ, phù hợp với lứa tuổi và văn hoá của đối tượng nhận đồ của bạn.</p><p><strong>Bán</strong>: Bạn cũng có thể bán quần áo dư thừa của mình để tạo thêm thu nhập hoặc đơn giản là “gỡ gạc” lại phần nào số tiền bạn đã bỏ ra để mua những món đồ này ban đầu. Có hai hình thức bán quần áo cũ thường gặp là:&nbsp;<strong>(1) tự bán</strong>&nbsp;và&nbsp;<strong>(2) ký gửi.</strong> Tự bán có nghĩa là bạn chủ động bán quần áo của mình trên mạng xã hội, forum, group thanh lý. Nhưng nếu bạn không có thời gian cũng như không biết cách bán, bạn có thể đem đi <strong>ký gửi </strong>- là hình thức bạn bán lại (hoặc gửi lại) quần áo của mình cho cửa hàng đồ cũ và nhận được một tỷ lệ phần trăm nhất định từ việc bán hàng.</p><figure class=\"image ck-widget\" contenteditable=\"false\"><img style=\"aspect-ratio:300/138;\" src=\"https://thanhlykyguidewi.site/wp-content/uploads/2024/03/Dewi-Logo-web-1-300x138.png\" alt=\"Dọn dẹp tủ quần áo gọn gàng và nhanh chóng\" width=\"300\" height=\"138\"><div class=\"ck ck-reset_all ck-widget__type-around\"><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_before\" title=\"Insert paragraph before block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__button ck-widget__type-around__button_after\" title=\"Insert paragraph after block\" aria-hidden=\"true\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 10 8\"><path d=\"M9.055.263v3.972h-6.77M1 4.216l2-2.038m-2 2 2 2.038\"></path></svg></div><div class=\"ck ck-widget__type-around__fake-caret\"></div></div></figure><p>Hy vọng bài viết trên đây giúp bạn có cái nhìn tổng quan hơn về quá trình dọn dẹp tủ quần áo và có thêm ý tưởng để thanh lý quần áo cũ. Bạn có thể tìm hiểu cách thức ký gửi qua <a href=\"https://thanhlykyguidewi.site/kygui/src/pages/registersend.php\">DEWI</a> và <a href=\"https://www.facebook.com/NhaDewi.vn\">Fanpage</a>.</p><p> </p>', 'https://res.cloudinary.com/dcweof28t/image/upload/v1712848981/kcaxjrrodn3mtas4il4z.jpg', '2024-04-11 15:23:17', '2024-04-11 15:23:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `phone_user` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `ship` varchar(100) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `payment` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_info`
--

INSERT INTO `order_info` (`order_id`, `name_user`, `phone_user`, `address`, `ship`, `note`, `payment`, `created_at`) VALUES
(815477, 'n', '0382149601', 'Bình Định', 'Giao hàng tiết kiệm', '', 'Thanh toán khi nhận hàng', '2024-04-17 15:11:43'),
(864514, 'Linh Thị Mỹ Nguyễn', '0382438931', '116/32 đường 17', 'Giao hàng tiết kiệm', '', 'Thanh toán khi nhận hàng', '2024-04-08 05:24:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `quantity`) VALUES
(3, 864514, 'thC0hz8bUT', 4),
(4, 815477, '3yOkmSiBP8', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_receives`
--

CREATE TABLE `order_receives` (
  `order_receive_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `receives_date` date DEFAULT NULL,
  `expired_date` date NOT NULL,
  `product_stock` int(11) NOT NULL,
  `price` float NOT NULL,
  `state` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_receives`
--

INSERT INTO `order_receives` (`order_receive_id`, `user_name`, `user_id`, `receives_date`, `expired_date`, `product_stock`, `price`, `state`) VALUES
(17, 'Nguyễn Thị Mỹ Linh', 'NTML8931', '2024-04-08', '2024-04-08', 2, 100000, b'1'),
(22, 'Ngô Phương Thảo', 'NPT4061', '2024-04-08', '2024-04-08', 0, 120000, b'0'),
(23, 'Nguyễn Văn A', '123321', '2003-10-10', '2003-12-10', 20, 500000, b'0'),
(24, 'Nguyễn Văn A', '123321', '2003-10-10', '2024-08-04', 20, 500000, b'0'),
(25, 'Nguyễn Văn A', 'NTML8931', '2003-10-11', '2024-08-05', 10, 400000, b'0'),
(26, 'Nguyễn Văn A', '123321', '2003-10-10', '2024-08-04', 20, 500000, b'0'),
(27, 'Nguyễn Văn A', 'NTML8931', '2003-10-11', '2024-08-05', 10, 400000, b'0'),
(28, 'Nguyễn Văn A', '123321', '2003-10-10', '2024-08-04', 20, 500000, b'0'),
(29, 'Nguyễn Văn A', 'NTML8931', '2003-10-11', '2024-08-05', 10, 400000, b'0'),
(30, 'Nguyễn Văn A', '123321', '2003-10-10', '2024-08-04', 20, 500000, b'0'),
(31, 'Nguyễn Văn A', 'NTML8931', '2003-10-11', '2024-08-05', 10, 400000, b'0'),
(32, 'Nguyễn Văn A', '12344321', '2003-10-10', '2003-12-10', 20, 500000, b'0'),
(33, 'Nguyễn Văn A', '12344321', '2003-10-10', '2003-12-10', 20, 500000, b'0'),
(34, 'Nguyễn Văn A', '123321', '2003-10-10', '2024-08-04', 20, 500000, b'0'),
(35, 'Nguyễn Văn A', 'NTML8931', '2003-10-11', '2024-08-05', 10, 400000, b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` varchar(50) NOT NULL,
  `product_name` varchar(400) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_trademark` varchar(50) NOT NULL,
  `product_sub_type` varchar(50) NOT NULL,
  `product_sold` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_description`, `product_price`, `product_quantity`, `product_size`, `product_trademark`, `product_sub_type`, `product_sold`) VALUES
('3yOkmSiBP8', 'Váy nâu ZYM\'S HOUSE sát nách', 'Váy nâu ZYM\'S HOUSE sát nách ,chất liệu: Sợi tổng hợp-S, màu sắc: Nâu Dài: 87 Ngực: 86 Eo: 70 Mông: 106 Ghi chú: có lót', 160000, 3, 'M', 'Zym’s House', 'Nữ', 3),
('thC0hz8bUT', 'Set dạ', 'sgdhsgdiwuedhi', 100000, 0, 'S', 'Không có', 'Nữ', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `product_image_id` int(11) NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `product_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`product_image_id`, `product_id`, `product_image`) VALUES
(64, 'thC0hz8bUT', 'https://res.cloudinary.com/dcweof28t/image/upload/v1712553374/o9s8karnh7rvtoz8suqt.jpg'),
(65, '3yOkmSiBP8', 'https://res.cloudinary.com/dcweof28t/image/upload/v1712418338/cpuak0smoyqzidl948bx.jpg'),
(66, '3yOkmSiBP8', 'https://res.cloudinary.com/dcweof28t/image/upload/v1712418341/ktidj9nqxarrsglqh70b.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `product_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `type`
--

INSERT INTO `type` (`type_id`, `name`, `product_id`) VALUES
(17, 'Váy đầm', '3yOkmSiBP8'),
(19, 'Set đồ', 'thC0hz8bUT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` varchar(50) NOT NULL,
  `user_firstname` varchar(100) NOT NULL,
  `user_lastname` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_username`, `user_password`, `user_role`, `created_at`) VALUES
('123321', 'Lê', 'Trường', 'lexuantruong098', '$2y$10$oFXy.Oq5FNhvMO0lqbUfzumDQKZKgz10sxb2HPdeEO90IxoEF5dL6', 'admin', '2024-04-06 01:02:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Chỉ mục cho bảng `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `order_receives`
--
ALTER TABLE `order_receives`
  ADD PRIMARY KEY (`order_receive_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `order_receives`
--
ALTER TABLE `order_receives`
  MODIFY `order_receive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `order_info` (`order_id`),
  ADD CONSTRAINT `fk_product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Các ràng buộc cho bảng `type`
--
ALTER TABLE `type`
  ADD CONSTRAINT `type_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
