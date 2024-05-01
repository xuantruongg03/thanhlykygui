<?php
    include '../components/header.php';
	if(isset($_GET['ss']) && $_GET['ss'] == 'ssno'){
        echo "
        <script>
        alert('Đặt hàng thất bại!!');
        </script>";
    }
	if(isset($_GET['ss']) && $_GET['ss'] == 'ssnosl'){
        echo "
        <script>
        alert('Đặt quá số lượng sản phẩm có trong kho!!');
        </script>";
    }
    ?>
	<script>
		let hdmn = document.querySelectorAll(".main-menu > li");
		console.log(hdmn);
		for(let i=0;i<hdmn.length;i++) {
				hdmn[i].classList.remove("active-menu");
		}
	</script>

<script>
    document.title = "Giỏ hàng - Dịch vụ thanh lý ký gửi DEWI";
</script>
<form class="bg0 p-t-75 p-b-85" method="post" action="/kygui/src/controler/order.php" >
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Sản phẩm</th>
									<th class="column-2"></th>
									<th class="column-3">Giá</th>
									<th class="column-4">Số lượng</th>
									<th class="column-5">Tổng tiền</th>
								</tr>
			
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
									
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Apply coupon
								</div>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10 update-cart-bt">
								Update Cart
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Tổng giỏ hàng
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Tạm tính:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2 stt-tp">
									0 VNĐ
								</span>
							</div>
						</div>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									bạn hãy chọn đơn vị vận chuyển và nhập địa chỉ nhận hàng vào bên dưới.
								</p>
								
								<div class="p-t-15">
									<span class="stext-112 cl8">
										Calculate Shipping
									</span>
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" required name="ship" id="ship" >
											<option value="">Chọn đơn vị vận chuyển</option>
											<option value="Giao hàng tiết kiệm">Giao hàng tiết kiệm.<sre</option>
											<option value="Giao hàng nhanh">Giao hàng nhanh</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" required  placeholder="Địa chỉ người nhận">
									</div>
									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="name" required  placeholder="Tên">
									</div>	
									<div class="bor8 bg0 m-b-12">
										<input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="phone" pattern="[0-9]{10}" required  placeholder="Số điện thoại">
									</div>
									<div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
										<select class="js-select2" required name="payment" id="ship" >
											<option value="">Phương thức thanh toán</option>
											<option value="Chuyển khoản ngân hàng">Chuyển khoản ngân hàng<sre</option>
											<option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
						
									<div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer update-tt-bt">
											Update Totals
										</div>
									</div>
										
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Tổng Tiền:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2 tt-prc">
									0 VNĐ
								</span>
							</div>
						</div>

						<button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>


    <?php include '../components/footer.php' ?>