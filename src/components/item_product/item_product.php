<!-- 
    - $id: string
    - $type: string
    - $name: string
    - $price: string
    - $image: string
	- $description: string
 -->




<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women <?php echo $type ?>">
    <!-- Block2 -->
    <div class="block2">
	<div class="block2-pic hov-img0" style="position: relative;">
    <img src="<?php echo $image ?>" alt="IMG-PRODUCT" style="height: 300px;">
    <div class="flex-col-c-m size-123 bg9 how-pos5" style="">
        <span class="ltext-107 cl2 txt-center"><?php echo $size; ?></span>
        <span class="stext-109 cl3 txt-center">size</span>
    </div>
	<?php
	if($quantity == 0){
	 ?>
    <div style="position: absolute; top: 0; right: 0; background-color: rgba(255,255,255,0.7); padding: 5px;">
        hết hàng
    </div>
	<?php }?>
    <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal4" id="<?php echo $id ?>">
        Xem nhanh
    </a>
</div>

        <div class="block2-txt flex-w flex-t p-t-14">
            <div class="block2-txt-child1 flex-col-l ">
                <a href="/kygui/src/pages/product-detail.php?id=<?php echo $id?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                    <?php echo $name; ?>
                </a>

                <span class="stext-105 cl3">
                    <?php echo number_format($price, 0, '', '.') ?> VNĐ
                </span>
            </div>

            <div class="block2-txt-child2 flex-r p-t-3">
                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                    <img class="icon-heart1 dis-block trans-04" src="/kygui/src/images/icons/icon-heart-01.png" alt="ICON">
                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="/kygui/src/images/icons/icon-heart-02.png" alt="ICON">
                </a>
            </div>
        </div>
    </div>
</div>
<?php
     $result=mysqli_query($conn, "select * from product_images where product_id = '$id'"); 

?>
<div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal1-<?php echo $id; ?>">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="/kygui/src/images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">

									
									<?php
									 while ($row=mysqli_fetch_assoc($result)) {
										$images = $row['product_image'];
									
									echo "<div class='item-slick3' data-thumb='$images'>
									<div class='wrap-pic-w pos-relative'>
										<img src='$images' alt='IMG-PRODUCT'>
										<div class='flex-col-c-m size-123 bg9 how-pos5'>
										<span class='ltext-107 cl2 txt-center'>$size</span>
										<span class='stext-109 cl3 txt-center'>size</span>
										</div>
										<a class='flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04' href='$images'>
											<i class='fa fa-expand'></i>
										</a>
									</div>
								</div>";
								
								}
									 ?>


								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								<?php echo $name ?>
							</h4>

							<span class="mtext-106 cl2">
							<?php echo number_format($price, 0, '', '.'); ?> VNĐ
							</span>

							<p class="stext-102 cl3 p-t-23">
								<?php echo $description ?>
								</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option><?php echo $size; ?></option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Thương hiệu:
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option><?php echo $trademark ;?></option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" id="quantity-ac<?php echo $id?>" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
										<input type="text" id="product-ac<?php echo $id?>" style="display: none;" value="<?php echo $name?>">
										<input type="text" id="price-ac<?php echo $id?>" style="display: none;" value="<?php echo $price?>">
										<input type="text" id="image-ac<?php echo $id?>" style="display: none;" value="<?php echo $image?>">
										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detai4" id="ac<?php echo $id?>">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>