<?php
    session_start();
include '../config/connectDB.php';
if (isset($_GET['search'])) {
	$search = $_GET['search'];
	$result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$search'");
	if (mysqli_num_rows($result) > 0) {
		header("Location: /kygui/src/pages/tracker.php?fasdf=$search");
		exit;
	}
	$result1 = mysqli_query($conn, "SELECT 
	p.product_id,
	p.product_name,
	p.product_description,
	p.product_quantity,
	p.product_price,
	p.product_size,
	p.product_trademark,
	p.product_sub_type,
	MAX(pi.product_image) AS product_image
  FROM 
	products p
  JOIN 
	product_images pi ON p.product_id = pi.product_id
  WHERE
	p.product_name LIKE '%$search%' OR p.product_description LIKE '%$search%'
  GROUP BY 
	p.product_id");
} else if (isset($_GET['type'])) {
	$type = $_GET['type'];
	$gt = mysqli_query($conn, "SELECT * FROM type WHERE name = '$type'");
	if ($gt && mysqli_num_rows($gt) > 0) { // Kiểm tra xem có kết quả trả về không

		$result1 = mysqli_query($conn, "SELECT 
        p.product_id,
        p.product_name,
        p.product_description,
        p.product_quantity,
        p.product_size,
        p.product_trademark,
        p.product_price,
        p.product_sub_type,
        MAX(pi.product_image) AS product_image
    FROM 
        products p
    JOIN 
        product_images pi ON p.product_id = pi.product_id
    WHERE
        p.product_id IN (SELECT product_id FROM type WHERE name = '$type')
    GROUP BY 
        p.product_id");
	}
} else if (isset($_GET['loadmore']) && $_GET['loadmore'] == 'lmodsmore') {
	$result1 = mysqli_query($conn, "SELECT 
    p.product_id,
    p.product_name,
    p.product_description,
    p.product_quantity,
	p.product_size,
	p.product_trademark,
    p.product_price,
    p.product_sub_type,
    MAX(pi.product_image) AS product_image
FROM 
    products p
JOIN 
    product_images pi ON p.product_id = pi.product_id
GROUP BY 
    p.product_id;
");
} else {
	$result1 = mysqli_query($conn, "SELECT 
    p.product_id,
    p.product_name,
    p.product_description,
    p.product_quantity,
	p.product_size,
	p.product_trademark,
    p.product_price,
    p.product_sub_type,
    MAX(pi.product_image) AS product_image
FROM 
    products p
JOIN 
    product_images pi ON p.product_id = pi.product_id
GROUP BY 
    p.product_id
LIMIT 8;
");
}
$result2 = mysqli_query($conn, "SELECT product_sub_type, COUNT(*) AS type_count 
FROM products 
GROUP BY product_sub_type 
ORDER BY type_count 
DESC LIMIT 5; ");
include '../components/header.php';
?>

<script>
	let hdmn = document.querySelectorAll(".main-menu li");
	for (let i = 0; i < hdmn.length; i++) {
		if (i == 1) {
			hdmn[i].classList.add("active-menu");
		} else {
			hdmn[i].classList.remove("active-menu");
		}
	}
</script>
<script>
	document.title = "Sản phẩm - Dịch vụ thanh lý ký gửi DEWI";
</script>

<body class="animsition">
	<div class="container" style="margin-top:50px;">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/kygui/" class="stext-109 cl8 hov-cl1 trans-04">
				Trang chủ
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="#" class="stext-109 cl8 hov-cl1 trans-04">
				Sản phẩm
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<!-- Product -->
	<div class="bg0 m-t-23  p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Tất cả sản phẩm
					</button>
					<?php
					while ($r = mysqli_fetch_array($result2)) {
						$type = $r['product_sub_type'];
						echo "<button class='stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1' data-filter='.$type'>
					$type
				</button>";
					}

					?>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Tìm kiếm
					</div>
				</div>

				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<form method="get" action="/kygui/src/pages/product.php">
						<div class="bor8 dis-flex p-l-15">
							<button type="submit" class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
								<i class="zmdi zmdi-search"></i>
							</button>

							<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search" placeholder="Tìm kiếm sản phẩm">
						</div>
					</form>
				</div>

			</div>

			<div class="row isotope-grid">

				<?php
				while ($r = mysqli_fetch_array($result1)) {
					$type = $r['product_sub_type'];
					$id = $r['product_id'];
					$name = $r['product_name'];
					$quantity = $r['product_quantity'];
					$price = $r['product_price'];
					$image = $r['product_image'];
					$size = $r['product_size'];
					$trademark = $r['product_trademark'];
					$description = $r['product_description'];
					include '../components/item_product/item_product.php';
				}

				?>



			</div>


			<!-- Load more -->
			<?php
			if (isset($_GET['loadmore']) && $_GET['loadmore'] == 'lmodsmore') {
			} else {
			?>
				<div class="flex-c-m flex-w w-full p-t-45">
					<a href="/kygui/src/pages/product.php?loadmore=lmodsmore" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
						Xem thêm
					</a>
				</div>
			<?php } ?>
		</div>
	</div>


</body>
<?php include '../components/footer.php' ?>