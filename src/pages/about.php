<?php
    session_start();
?>
<?php
    include '../components/header.php';
    
?>
<script>
    document.title = "Về chúng tôi - Dịch vụ thanh lý ký gửi DEWI";
</script>

<script>
		let hdmn = document.querySelectorAll(".main-menu > li");
		console.log(hdmn);
		for(let i=0;i<hdmn.length;i++) {
			if(i==4){
				hdmn[i].classList.add("active-menu");
			}else{
				hdmn[i].classList.remove("active-menu");
			}
		}
	</script>
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/kygui/src/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			About
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Story
						</h3>

						<p class="stext-113 cl6 p-b-26">
                        Bắt nguồn từ những lần đứng trầm ngâm trước chiếc tủ quần áo chật ních nhưng vẫn thấy mình không có gì để mặc của các cô gái trẻ, DEWI ra đời để giải quyết “nghịch cảnh” của hầu hết mọi cô nàng: sở hữu quá nhiều món đồ so với những gì họ cần nhưng vẫn thấy cần thiết phải mua sắm.</p>

						<p class="stext-113 cl6 p-b-26">
                        DEWI là cửa hàng thời trang kí gửi online không phải đầu tiên tại Việt Nam. Nhưng những con người tạo nên DEWI đều mang trong mình quan điểm: ĐẸP NHƯNG KHÔNG ĐẮT, SECOND-HAND NHƯNG KHÔNG CŨ. DEWI là nơi mà bạn có thể sở hữu những món đồ trong điều kiện còn như mới với giá không quá 1/3 những gì bạn trả cho một món đồ mới.</p>

					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="/kygui/src/images/about-01.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Our Mission
						</h3>

						<p class="stext-113 cl6 p-b-26">
                        Website https://thanhlykyguidewi.site/ ra đời với muốn mang xu hướng “thời trang XANH” đến với người tiêu dùng Việt Nam và hơn hết góp phần nhỏ bé vào giảm tác hại to lớn của ngành công nghiệp thời trang lên môi trường. Nếu bạn tin tưởng vào những gì DEWI đang nỗ lực hướng tới, hãy tiếp tục mua những món đồ second-hand và kí gửi những món đồ không còn được sử dụng thường xuyên. Mua hàng trực tuyến tại website: https://thanhlykyguidewi.site/ với chính sách đổi trả sau khi mua hàng. Miễn phí giao hàng với đơn hàng trên 400k khi đặt trên website.</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
                            DEWI xin đảm bảo chất lượng cho những món hàng được bán ra như mô tả và mong muốn nhận được đóng góp của khách hàng để cải tiến chất lượng dịch vụ ngày càng tốt hơn.</p>

							<span class="stext-111 cl8">
                            Chính sách kí gửi: <a href="/kygui/src/pages/registersend.php">Tại đây!!</a>
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="/kygui/src/images/about-02.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

    <?php
	 include '../components/footer.php' ?>