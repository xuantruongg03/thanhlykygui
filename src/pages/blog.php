<?php
    include '../components/header.php';
    $sql = "SELECT * FROM blogs";
	$result = mysqli_query($conn, $sql);
    
?>
<script>
    document.title = "Bài viết - Dịch vụ thanh lý ký gửi DEWI";
</script>
	<script>
		let hdmn = document.querySelectorAll(".main-menu > li");
		console.log(hdmn);
		for(let i=0;i<hdmn.length;i++) {
			if(i==3){
				hdmn[i].classList.add("active-menu");
			}else{
				hdmn[i].classList.remove("active-menu");
			}
		}
	</script>
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/kygui/src/images/bg-02.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Blog
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-62 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!-- item blog -->
						

<?php
// Số lượng item mỗi trang
$items_per_page = 5;

// Kiểm tra xem đã gửi dữ liệu tìm kiếm chưa
if (isset($_POST['search'])) {
    // Lấy từ khóa tìm kiếm
    $search_keyword = $_POST['search'];

    // Truy vấn SQL để đếm số lượng bài viết phù hợp với từ khóa tìm kiếm
    $count_query = "SELECT COUNT(*) AS total FROM blogs WHERE blog_title LIKE '%$search_keyword%' OR blog_des LIKE '%$search_keyword%'";
    $count_result = mysqli_query($conn, $count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $total_items = $count_row['total'];

    // Tính số trang
    $total_pages = ceil($total_items / $items_per_page);

    // Xác định trang hiện tại
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $current_page = max(1, min($current_page, $total_pages));

    // Tính vị trí bắt đầu của dữ liệu trong truy vấn
    $start_index = ($current_page - 1) * $items_per_page;

    // Truy vấn dữ liệu từ bảng blogs với phân trang và từ khóa tìm kiếm
    $sql = "SELECT * FROM blogs WHERE blog_title LIKE '%$search_keyword%' OR blog_des LIKE '%$search_keyword%' LIMIT $start_index, $items_per_page";
} else {
    // Nếu không có dữ liệu tìm kiếm, truy vấn tất cả bài viết
    $sql = "SELECT * FROM blogs";

    // Truy vấn SQL để đếm tổng số lượng bài viết
    $count_query = "SELECT COUNT(*) AS total FROM blogs";
    $count_result = mysqli_query($conn, $count_query);
    $count_row = mysqli_fetch_assoc($count_result);
    $total_items = $count_row['total'];

    // Tính số trang
    $total_pages = ceil($total_items / $items_per_page);

    // Xác định trang hiện tại
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $current_page = max(1, min($current_page, $total_pages));

    // Tính vị trí bắt đầu của dữ liệu trong truy vấn
    $start_index = ($current_page - 1) * $items_per_page;

    // Truy vấn dữ liệu từ bảng blogs với phân trang
    $sql .= " LIMIT $start_index, $items_per_page";
}

// Thực hiện truy vấn
$result = mysqli_query($conn, $sql);

// Hiển thị dữ liệu
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        // Hiển thị dữ liệu từng blog
        // Code hiển thị blog ở đây, tương tự như phần trước

        // Ví dụ:
		$blog_id = $row['blog_id'];
		$blog_title = $row['blog_title'];
		$blog_des = $row['blog_des'];
		$blog_image = $row['blog_image'];
		$blog_created_at = $row['blog_created_at'];
		include '../components/item_blog/item_blog.php';
    }

    // Hiển thị phân trang
    echo '<div class="flex-l-m flex-w w-full p-t-10 m-lr--7">';
    for ($page = 1; $page <= $total_pages; $page++) {
        $active_class = ($page == $current_page) ? 'active-pagination1' : '';
        echo '<a href="?page=' . $page . '" class="flex-c-m how-pagination1 trans-04 m-all-7 ' . $active_class . '">' . $page . '</a>';
    }
    echo '</div>';
}

// Giải phóng kết quả
mysqli_free_result($result);
?>


					</div>
				</div>

				

				<?php include '../components/item_blog/item_category_blog.php' ?>
			</div>
		</div>
	</section>	


    <?php include '../components/footer.php' ?>