
<?php
    include '../components/header.php';
    
?>
<script>
    document.title = "Liên hệ - Dịch vụ thanh lý ký gửi DEWI";
</script>
<script>
		let hdmn = document.querySelectorAll(".main-menu > li");
		console.log(hdmn);
		for(let i=0;i<hdmn.length;i++) {
			if(i==5){
				hdmn[i].classList.add("active-menu");
			}else{
				hdmn[i].classList.remove("active-menu");
			}
		}
	</script>
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('/kygui/src/images/bg-01.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Contact
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form>
						<h4 class="mtext-105 cl2 txt-center p-b-30">
							Gửi yêu cầu hỗ trợ
						</h4>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" name="email" placeholder="Địa chỉ Email của bạn">
							<img class="how-pos4 pointer-none" src="/kygui/src/images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="msg" placeholder="Chúng tôi có thể giúp gì?"></textarea>
						</div>

						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Gửi đi
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-map-marker"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Address
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
                            Số 238/4 đường Thống Nhất, phường 10, quận Gò Vấp
							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
                            Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
                            038 2438 931
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
                            Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
                            thanhlykyguidewi@gmail.com
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
	<!-- Map -->
	<div class="map">
    <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.667133423086!2d106.66219057309766!3d10.836765358081832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a879dcf8db%3A0xf4e6e1c3d1fa8415!2zMjM4IMSQLiBUaOG7kW5nIE5o4bqldCwgUGjGsOG7nW5nIDEwLCBHw7IgVuG6pXAsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaCA3MDAwMDAsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1712337858416!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

    <?php
	 include '../components/footer.php' ?>