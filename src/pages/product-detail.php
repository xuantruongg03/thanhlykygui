	<!-- Product Detail -->

	<?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }else{
        header("Location: /kygui/index.php");
        exit;
    }
    include '../components/header.php';
    $result1 = mysqli_query($conn,"SELECT * FROM products WHERE product_id = '$id'");
    $row=mysqli_fetch_assoc($result1);
	$id1=$id;
    $name = $row['product_name'];
	$size = $row['product_size'];
	$trademark = $row['product_trademark'];
    $price = $row['product_price'];
	$type1 = $row['product_sub_type'];
    $description = $row['product_description'];
	$r=mysqli_query($conn,"Select * from type where product_id='$id'");
	$type2=mysqli_fetch_assoc($r)['name'];
    $result=mysqli_query($conn, "select * from product_images where product_id = '$id'"); 
    ?>
<script>
    document.title = "Sản phẩm - Dịch vụ thanh lý ký gửi DEWI";
</script>
<script>
		let hdmn = document.querySelectorAll(".main-menu > li");
		console.log(hdmn);
		for(let i=0;i<hdmn.length;i++) {
			if(i==1){
				hdmn[i].classList.add("active-menu");
			}else{
				hdmn[i].classList.remove("active-menu");
			}
		}
	</script>
	<body>
	    <div class="container" style="margin-top:50px;">
	        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
	            <a href="/kygui/" class="stext-109 cl8 hov-cl1 trans-04">
	                Trang chủ
	                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
	            </a>

	            <a href="/kygui/src/pages/product.php" class="stext-109 cl8 hov-cl1 trans-04">
	                Sản phẩm
	                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
	            </a>

	            <span class="stext-109 cl4">
	                <?php echo $name;?>
	            </span>
	        </div>
	    </div>

	    <section class="sec-product-detail bg0 p-t-65 p-b-60 ">
	        <div class="container">
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
	                            <?php echo $name; ?>
	                        </h4>

	                        <span class="mtext-106 cl2">
	                            <?php echo number_format($price, 0, '', '.') ?> VNĐ
	                        </span>

	                        <p class="stext-102 cl3 p-t-23">
	                            <?php echo $description; ?>
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
	                                    Thương hiệu
	                                </div>

	                                <div class="size-204 respon6-next">
	                                    <div class="rs1-select2 bor8 bg0">
	                                        <select class="js-select2" name="time">
	                                            <option><?php echo $trademark; ?></option>
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

	                                        <input class="mtext-104 cl3 txt-center num-product"  id="quantity-ac<?php echo $id?>" type="number"
	                                            name="num-product" value="1">

	                                        <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
	                                            <i class="fs-16 zmdi zmdi-plus"></i>
	                                        </div>
	                                    </div>
										<input type="text" id="product-ac<?php echo $id?>" style="display: none;" value="<?php echo $name?>">
										<input type="text" id="price-ac<?php echo $id?>" style="display: none;" value="<?php echo $price?>">
										<input type="text" id="image-ac<?php echo $id?>" style="display: none;" value="<?php echo $image?>">
	                                    <button
	                                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detai4" id="ac<?php echo $id?>">
	                                        Add to cart
	                                    </button>
	                                </div>
	                            </div>
	                        </div>

	                        <!--  -->
	                        <div class="flex-w flex-m p-l-100 p-t-40 respon7">
	                            <div class="flex-m bor9 p-r-10 m-r-11">
	                                <a href="#"
	                                    class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100"
	                                    data-tooltip="Add to Wishlist">
	                                    <i class="zmdi zmdi-favorite"></i>
	                                </a>
	                            </div>

	                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
	                                data-tooltip="Facebook">
	                                <i class="fa fa-facebook"></i>
	                            </a>

	                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
	                                data-tooltip="Twitter">
	                                <i class="fa fa-twitter"></i>
	                            </a>

	                            <a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100"
	                                data-tooltip="Google Plus">
	                                <i class="fa fa-google-plus"></i>
	                            </a>
	                        </div>
	                    </div>
	                </div>
	            </div>

	            <div class="bor10 m-t-50 p-t-43 p-b-40">
	                <!-- Tab01 -->
	                <div class="tab01">
	                    <!-- Nav tabs -->
	                    <ul class="nav nav-tabs" role="tablist">
	                        <li class="nav-item p-b-10">
	                            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
	                        </li>

	                        <li class="nav-item p-b-10">
	                            <a class="nav-link" data-toggle="tab" href="#information" role="tab">Additional
	                                information</a>
	                        </li>

	                        <li class="nav-item p-b-10">
	                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
	                        </li>
	                    </ul>

	                    <!-- Tab panes -->
	                    <div class="tab-content p-t-43">
	                        <!-- - -->
	                        <div class="tab-pane fade show active" id="description" role="tabpanel">
	                            <div class="how-pos2 p-lr-15-md">
	                                <p class="stext-102 cl6">
	                                    <?php echo $description; ?>
	                                </p>
	                            </div>
	                        </div>

	                        <!-- - -->
	                        <div class="tab-pane fade" id="information" role="tabpanel">
	                            <div class="row">
	                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
	                                    <ul class="p-lr-28 p-lr-15-sm">
	                                        <li class="flex-w flex-t p-b-7">
	                                            <span class="stext-102 cl3 size-205">
	                                                Weight
	                                            </span>

	                                            <span class="stext-102 cl6 size-206">
	                                                0.79 kg
	                                            </span>
	                                        </li>

	                                        <li class="flex-w flex-t p-b-7">
	                                            <span class="stext-102 cl3 size-205">
	                                                Dimensions
	                                            </span>

	                                            <span class="stext-102 cl6 size-206">
	                                                110 x 33 x 100 cm
	                                            </span>
	                                        </li>

	                                        <li class="flex-w flex-t p-b-7">
	                                            <span class="stext-102 cl3 size-205">
	                                                Materials
	                                            </span>

	                                            <span class="stext-102 cl6 size-206">
	                                                60% cotton
	                                            </span>
	                                        </li>

	                                        <li class="flex-w flex-t p-b-7">
	                                            <span class="stext-102 cl3 size-205">
	                                                Thương hiệu:
	                                            </span>

	                                            <span class="stext-102 cl6 size-206">
												<?php echo $trademark; ?>
	                                            </span>
	                                        </li>

	                                        <li class="flex-w flex-t p-b-7">
	                                            <span class="stext-102 cl3 size-205">
	                                                Size
	                                            </span>

	                                            <span class="stext-102 cl6 size-206">
												<?php echo $size; ?>
	                                            </span>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>

	                        <!-- - -->
	                        <div class="tab-pane fade" id="reviews" role="tabpanel">
	                            <div class="row">
	                                <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
	                                    <div class="p-b-30 m-lr-15-sm">
	                                        <!-- Review -->
	                                        <div class="flex-w flex-t p-b-68">
	                                            <div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
	                                                <img src="/kygui/src/images/avatar-01.jpg" alt="AVATAR">
	                                            </div>

	                                            <div class="size-207">
	                                                <div class="flex-w flex-sb-m p-b-17">
	                                                    <span class="mtext-107 cl2 p-r-20">
	                                                        Hoàng TD
	                                                    </span>

	                                                    <span class="fs-18 cl11">
	                                                        <i class="zmdi zmdi-star"></i>
	                                                        <i class="zmdi zmdi-star"></i>
	                                                        <i class="zmdi zmdi-star"></i>
	                                                        <i class="zmdi zmdi-star"></i>
	                                                        <i class="zmdi zmdi-star-half"></i>
	                                                    </span>
	                                                </div>

	                                                <p class="stext-102 cl6">
														mua sản phẩm này cho ny 1 lần....đẹp lắm nha mọi người!!!
	                                                </p>
	                                            </div>
	                                        </div>

	                                        <!-- Add review -->
	                                        <form class="w-full">
	                                            <h5 class="mtext-108 cl2 p-b-7">
	                                                Add a review
	                                            </h5>

	                                            <p class="stext-102 cl6">
	                                                Your email address will not be published. Required fields are marked *
	                                            </p>

	                                            <div class="flex-w flex-m p-t-50 p-b-23">
	                                                <span class="stext-102 cl3 m-r-16">
	                                                    Your Rating
	                                                </span>

	                                                <span class="wrap-rating fs-18 cl11 pointer">
	                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
	                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
	                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
	                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
	                                                    <i class="item-rating pointer zmdi zmdi-star-outline"></i>
	                                                    <input class="dis-none" type="number" name="rating">
	                                                </span>
	                                            </div>

	                                            <div class="row p-b-25">
	                                                <div class="col-12 p-b-5">
	                                                    <label class="stext-102 cl3" for="review">Your review</label>
	                                                    <textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10"
	                                                        id="review" name="review"></textarea>
	                                                </div>

	                                                <div class="col-sm-6 p-b-5">
	                                                    <label class="stext-102 cl3" for="name">Name</label>
	                                                    <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="name"
	                                                        type="text" name="name">
	                                                </div>

	                                                <div class="col-sm-6 p-b-5">
	                                                    <label class="stext-102 cl3" for="email">Email</label>
	                                                    <input class="size-111 bor8 stext-102 cl2 p-lr-20" id="email"
	                                                        type="text" name="email">
	                                                </div>
	                                            </div>

	                                            <button
	                                                class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10">
	                                                Submit
	                                            </button>
	                                        </form>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	        <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
	            <span class="stext-107 cl6 p-lr-25">
				<?php echo $name; ?>
	            </span>

	            <span class="stext-107 cl6 p-lr-25">
	                Categories: <?php echo $type1; ?>,<?php echo $type2; ?>
	            </span>
	        </div>
	    </section>

	    <!-- Related Products -->
	    <section class="sec-relate-product bg0 p-t-45 p-b-105">
	        <div class="container">
	            <div class="p-b-45">
	                <h3 class="ltext-106 cl5 txt-center">
	                    Related Products
	                </h3>
	            </div>

	            <!-- Slide2 -->
	            <div class="wrap-slick2">
	                <div class="slick2">
	                    <?php
                    $result1 = mysqli_query($conn, "
					SELECT 
    				p.product_id, 
   					p.product_name,
					p.product_size,
					p.product_trademark,
					p.product_quantity,
    				p.product_description, 
					p.product_price,  
					MAX(pi.product_image) AS product_image 
					FROM 
    					products p 
					JOIN 
    					product_images pi ON p.product_id = pi.product_id 
					WHERE 
    					p.product_id <> '$id1'
					GROUP BY 
    					p.product_id 
					LIMIT 
    					8;
					");
                    while($row1 = mysqli_fetch_assoc($result1)){
                        $id = $row1['product_id'];
                        $name = $row1['product_name'];
                        $quantity = $row1['product_quantity'];
                        $price = $row1['product_price'];
                        $image = $row1['product_image'];
						$size = $row1['product_size'];
						$trademark = $row1['product_trademark'];
                        include '../components/item_product/item_slide.php';
                    }
					$result1 = mysqli_query($conn, "
					SELECT 
    				p.product_id, 
   					p.product_name, 
    				p.product_description,
					p.product_size,
					p.product_trademark, 
					p.product_price,  
					MAX(pi.product_image) AS product_image 
					FROM 
    					products p 
					JOIN 
    					product_images pi ON p.product_id = pi.product_id 
					WHERE 
    					p.product_id <> '$id1'
					GROUP BY 
    					p.product_id 
					LIMIT 
    					8;
					");
                    ?>
	                </div>
	            </div>
	        </div>
	        <?php
            while($row1 = mysqli_fetch_assoc($result1)){
                $id = $row1['product_id'];
                $name = $row1['product_name'];
                $price = $row1['product_price'];
				$size = $row1['product_size'];
				$trademark = $row1['product_trademark'];
                $image = $row1['product_image'];
                include '../components/item_product/item_quick.php';
            }
            ?>
	    </section>
	</body>
	<?php include '../components/footer.php' ?>