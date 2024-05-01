



<div class="col-md-4 col-lg-3 p-b-80">
					<div class="side-menu">
						<form method="post" action="/kygui/src/pages/blog.php">
							<div class="bor17 of-hidden pos-relative">
								<input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">
								
								<button typr="submit" class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
									<i class="zmdi zmdi-search"></i>
								</button>
							</div>
						</form>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-33">
								Categories
							</h4>

							<ul>
								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Fashion
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Beauty
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Street Style
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										Life Style
									</a>
								</li>

								<li class="bor18">
									<a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
										DIY & Crafts
									</a>
								</li>
							</ul>
						</div>

						<div class="p-t-65">
							<h4 class="mtext-112 cl2 p-b-33">
								Featured Products
							</h4>

							<ul>
							<?php
// Truy vấn SQL để lấy dữ liệu từ bảng products và product_images
$sql = "SELECT p.product_id, p.product_name, p.product_description, p.product_price, p.product_sub_type, MAX(pi.product_image) AS product_image
FROM products p
JOIN product_images pi ON p.product_id = pi.product_id
GROUP BY p.product_id
ORDER BY RAND()
LIMIT 3";
$result = mysqli_query($conn, $sql);

// Kiểm tra số hàng dữ liệu trả về từ truy vấn
if (mysqli_num_rows($result) > 0) {
    // Lặp qua các hàng dữ liệu
    while ($row = mysqli_fetch_assoc($result)) {
        // Lấy dữ liệu từ hàng hiện tại
        $product_id = $row['product_id'];
        $product_name = $row['product_name'];
        $product_price = number_format($row['product_price'], 0, '', '.');
        $product_image = $row['product_image'];

        // Hiển thị dữ liệu trong mẫu HTML
?>
<li class="flex-w flex-t p-b-30">
    <a href="/kygui/src/pages/product-detail.php?id=<?php echo $product_id; ?>" class="wrap-pic-w size-214 hover-overlay1 m-r-20">
        <img src="<?php echo $product_image; ?>" alt="PRODUCT">
    </a>
    <div class="size-215 flex-col-t p-t-8">
        <a href="/kygui/src/pages/product-detail.php?id=<?php echo $product_id; ?>" class="stext-116 cl8 hov-cl1 trans-04">
            <?php echo $product_name; ?>
        </a>
        <span class="stext-116 cl6 p-t-20">
            <?php echo $product_price; ?> VNĐ
        </span>
    </div>
</li>
<?php
    }
} else {
    echo "Không có dữ liệu sản phẩm";
}

// Giải phóng kết quả
mysqli_free_result($result);
?>


							</ul>
						</div>

						<div class="p-t-55">
							<h4 class="mtext-112 cl2 p-b-20">
								Archive
							</h4>

							<ul>
								<?php
								$sql = "SELECT MONTH(blog_created_at) AS month, YEAR(blog_created_at) AS year, COUNT(*) AS num_posts 
								FROM blogs 
								GROUP BY YEAR(blog_created_at), MONTH(blog_created_at) 
								ORDER BY YEAR(blog_created_at) DESC, MONTH(blog_created_at) DESC";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									// Lặp qua các hàng dữ liệu
									while ($row = mysqli_fetch_assoc($result)) {
										// Lấy dữ liệu từ hàng hiện tại
										$month = $row['month'];
										$year = $row['year'];
										$num_posts = $row['num_posts'];
								
										// Chuyển định dạng tháng sang chuỗi văn bản
										$month_text = date("F", mktime(0, 0, 0, $month, 1));
								
										// Hiển thị dữ liệu trong mẫu HTML
								?>
								<li class="p-b-7">
    							<a href="#" class="flex-w flex-sb-m stext-115 cl6 hov-cl1 trans-04 p-tb-2">
        							<span>
            							<?php echo $month_text . " " . $year; ?>
        							</span>
        							<span>
            						(<?php echo $num_posts; ?>)
        							</span>
    							</a>
							</li>
							<?php
    }
} 
// Giải phóng kết quả
mysqli_free_result($result);
?>
								
							</ul>
						</div>

						<div class="p-t-50">
							<h4 class="mtext-112 cl2 p-b-27">
								Tags
							</h4>

							<div class="flex-w m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>
					</div>
				</div>