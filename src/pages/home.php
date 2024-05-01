<?php 
session_start();
if(isset($_GET['ss']) && $_GET['ss'] == 'ssye'){
    echo "
    <script>
    alert('Bạn đã đặt hàng thành công!!');
    </script>";
}
include 'src/components/header.php';
include 'src/config/connectDB.php';

if(isset($_GET['loadmore']) && $_GET['loadmore'] =='lmodsmore'){
    $result1 = mysqli_query($conn, "SELECT 
    p.product_id,
    p.product_name,
    p.product_description,
    p.product_size,
    p.product_quantity,
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
}
else{
    $result1 = mysqli_query($conn, "SELECT 
    p.product_id,
    p.product_name,
    p.product_description,
    p.product_size,
	p.product_trademark,
    p.product_quantity,
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

    ?>
<script>
    document.title = "Trang chủ - Dịch vụ thanh lý ký gửi DEWI";
</script>
<body>
    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1" style="background-image: url(/kygui/src/images/slide-01.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    Women Collection 2024
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    NEW SEASON
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                                <a href="/kygui/src/pages/product.php"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url(/kygui/src/images/slide-02.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    Men New-Season
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn"
                                data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    Jackets & Coats
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                                <a href="/kygui/src/pages/product.php"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item-slick1" style="background-image: url(/kygui/src/images/slide-03.jpg);">
                    <div class="container h-full">
                        <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                            <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft"
                                data-delay="0">
                                <span class="ltext-101 cl2 respon2">
                                    Men Collection 2024
                                </span>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight"
                                data-delay="800">
                                <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                    New arrivals
                                </h2>
                            </div>

                            <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                                <a href="/kygui/src/pages/product.php"
                                    class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner -->
    <div class="sec-banner bg0 p-t-80 p-b-50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="/kygui/src/images/banner-01.jpg" alt="IMG-BANNER">

                        <a href="/kygui/src/pages/product.php"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8" style="font-size: 24px; font-family: Arial;">
                                    Nữ
                                </span>

                                <span class="block1-info stext-102 trans-04">
                                    1000 sản phẩm
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Mua ngay
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="/kygui/src/images/banner-02.jpg" alt="IMG-BANNER">

                        <a href="/kygui/src/pages/product.php"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8" style="font-size: 24px; font-family: Arial;">
                                    Nam
                                </span>

                                <span class="block1-info stext-102 trans-04">
                                    1000 sản phẩm
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Mua ngay
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="/kygui/src/images/banner-03.jpg" alt="IMG-BANNER">

                        <a href="/kygui/src/pages/product.php"
                            class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
                                <span class="block1-name ltext-102 trans-04 p-b-8" style="font-size: 24px; font-family: Arial !important;">
                                    Trang sức
                                </span>

                                <span class="block1-info stext-102 trans-04">
                                    1000 sản phẩm
                                </span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Mua ngay
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product -->
    <section class="bg0 p-t-23 p-b-140">
        <div class="container">
            <div class="p-b-10">
                <h3 class="ltext-103 cl5" style="font-family: Poppins-Medium; font-weight: bold;">
                    Tổng quan sản phẩm
                </h3>
            </div>

            <div class="flex-w flex-sb-m p-b-52">
                <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                    <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                        Tất cả sản phẩm
                    </button>

                    <?php
                while($r=mysqli_fetch_array($result2)){
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
                            
                            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search"
                            placeholder="Tìm kiếm sản phẩm">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row isotope-grid">

                <?php
                while($r=mysqli_fetch_array($result1)){
                    $type = $r['product_sub_type'];
                    $id=$r['product_id'];
                    $quantity = $r['product_quantity'];
                    $name = $r['product_name'];
                    $size = $r['product_size'];
                    $trademark = $r['product_trademark'];
                    $price = $r['product_price'];
                    $image = $r['product_image'];
                    $description = $r['product_description'];
                    include 'src/components/item_product/item_product.php';
                }

            ?>
            </div>

			<?php
			if(isset($_GET['loadmore']) && $_GET['loadmore'] =='lmodsmore'){

			}else {
			 ?>
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="/kygui/index.php?loadmore=lmodsmore" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Xem thêm
				</a>
			</div>
			<?php }?>
        </div>
    </section>
</body>

<?php include 'src/components/footer.php' ?>