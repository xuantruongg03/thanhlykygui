
<?php
session_start();
    include '../components/header.php';
    if (!isset($_GET['id'])){
		header("Location: /kygui/src/pages/blog.php");
	}
	$blog_id = $_GET['id'];
	$sql = "SELECT * FROM blogs WHERE blog_id = $blog_id";
    $result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
        // Lấy dữ liệu từ kết quả truy vấn
        $row = mysqli_fetch_assoc($result);
    
?>
<style>
							.ck-reset_all{
								display: none;
							}
						</style>
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
	<!-- breadcrumb -->
	<div class="container" style="margin-top: 100px;">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="/kygui/index.php" class="stext-109 cl8 hov-cl1 trans-04">
				Home
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<a href="/kygui/src/pages/blog.php" class="stext-109 cl8 hov-cl1 trans-04">
				Blog
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>

			<span class="stext-109 cl4">
				8 Inspiring Ways to Wear Dresses in the Winter
			</span>
		</div>
	</div>

    <section class="bg0 p-t-52 p-b-20">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-45 p-r-0-lg">
						<!--  -->
						<div class="wrap-pic-w how-pos5-parent">
							<img src="<?php echo $row['blog_image']; ?>" alt="IMG-BLOG">

							<div class="flex-col-c-m size-123 bg9 how-pos5">
								<span class="ltext-107 cl2 txt-center">
								<?php echo date('d', strtotime($row['blog_created_at'])); ?>
								</span>

								<span class="stext-109 cl3 txt-center">
								<?php echo date('M Y', strtotime($row['blog_created_at'])); ?>
								</span>
							</div>
						</div>

						<div class="p-t-32">
							<span class="flex-w flex-m stext-111 cl2 p-b-19">
								<span>
									<span class="cl4">By</span> Admin  
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
								<?php echo date('d M, Y', strtotime($row['blog_created_at'])); ?>
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									StreetStyle, Fashion, Couple  
									<span class="cl12 m-l-4 m-r-6">|</span>
								</span>

								<span>
									8 Comments
								</span>
							</span>

							<h4 class="ltext-109 cl2 p-b-28">
							<?php echo $row['blog_title']; ?>
							</h4>

							<p class="stext-117 cl6 p-b-26">
							<?php echo $row['blog_content']; ?>
							</p>
						</div>

						<div class="flex-w flex-t p-t-16">
							<span class="size-216 stext-116 cl8 p-t-4">
								Tags
							</span>

							<div class="flex-w size-217">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div>

						<!--  -->
						<div class="p-t-40">
							<h5 class="mtext-113 cl2 p-b-12">
								Leave a Comment
							</h5>

							<p class="stext-107 cl6 p-b-40">
								Your email address will not be published. Required fields are marked *
							</p>

							<form>
								<div class="bor19 m-b-20">
									<textarea class="stext-111 cl2 plh3 size-124 p-lr-18 p-tb-15" name="cmt" placeholder="Comment..."></textarea>
								</div>

								<div class="bor19 size-218 m-b-20">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="name" placeholder="Name *">
								</div>

								<div class="bor19 size-218 m-b-20">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="email" placeholder="Email *">
								</div>

								<div class="bor19 size-218 m-b-30">
									<input class="stext-111 cl2 plh3 size-116 p-lr-18" type="text" name="web" placeholder="Website">
								</div>

								<button type="button" class="flex-c-m stext-101 cl0 size-125 bg3 bor2 hov-btn3 p-lr-15 trans-04">
									Post Comment
								</button>
							</form>
						</div>
					</div>
				</div>

				<?php include '../components/item_blog/item_category_blog.php' ?>

			</div>
		</div>
	</section>


    <?php
	}else {
        // Nếu không có dữ liệu trả về, chuyển hướng người dùng về trang danh sách blog
        header("Location: /kygui/src/pages/blog.php");
        exit();
    }
	 include '../components/footer.php' ?>