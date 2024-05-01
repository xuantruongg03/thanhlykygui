<!DOCTYPE html>
<html lang="en">
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/kygui/src/config/connectDB.php';

$rstype = mysqli_query($conn, "SELECT name FROM type GROUP BY name");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/kygui/src/images/icons/logod.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/kygui/src/css/util.css">
    <link rel="stylesheet" type="text/css" href="/kygui/src/css/main.css">
    <link rel="stylesheet" type="text/css" href="/kygui/src/css/css.css">
    <link rel="stylesheet" href="/kygui/src/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/kygui/src/admin/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!--===============================================================================================-->
</head>

<body>
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        THỜI TRANG MỚI - GIÁ CŨ, SỰ LỰA CHỌN THÔNG MINH!
                    </div>

                    <div class="right-top-bar flex-w h-full">
                        <?php
                        if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] == 'admin')) {
                            echo '<a href="/kygui/src/admin/index.php" class="flex-c-m trans-04 p-lr-25">
                                Admin
                            </a>';
                        }
                        ?>

                        <?php
                        if (isset($_SESSION['user_id'])) {
                            echo '<a href="/kygui/src/controler/logout.php" class="flex-c-m trans-04 p-lr-25">
                                Đăng xuất
                            </a>';
                        } else {
                            echo '<a href="/kygui/src/pages/login.php" class="flex-c-m trans-04 p-lr-25">
                            Đăng nhập
                        </a>';
                        }
                        ?>

                        <a href="/kygui/src/pages/contact.php" class="flex-c-m trans-04 p-lr-25">
                            Giúp đỡ & FAQs
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            Mở cửa: 08:00 - 22:00
                        </a>
                    </div>
                </div>
            </div>

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="/kygui/src/images/icons/logo.png" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="/kygui/index.php">Trang chủ</a>
                            </li>

                            <li>
                                <a href="/kygui/src/pages/product.php">Sản Phẩm</a>
                                <ul class="sub-menu">
                                    <li><a href="/kygui/src/pages/product.php?type=Áo">Áo</a></li>
                                    <li><a href="/kygui/src/pages/product.php?type=Quần">Quần</a></li>
                                    <li><a href="/kygui/src/pages/product.php?type=Chân váy">Chân váy</a></li>
                                    <li><a href="/kygui/src/pages/product.php?type=Váy đầm">Váy đầm</a></li>
                                    <li><a href="/kygui/src/pages/product.php?type=Set đồ">Set đồ</a></li>
                                    <li><a href="/kygui/src/pages/product.php?type=Khác">Khác</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="/kygui/src/pages/registersend.php">Gửi hàng</a>
                                <ul class="sub-menu">
                                    <li><a href="/kygui/src/pages/search-tracker.php">Theo Dõi Hàng</a></li>
                                    <li><a href="/kygui/src/pages/registersend.php">Đăng Ký Gửi Hàng</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="/kygui/src/pages/blog.php">Blog</a>
                            </li>

                            <li>
                                <a href="/kygui/src/pages/about.php">Chúng Tôi</a>
                                <ul class="sub-menu" style="width: 250px;">
                                    <li><a href="/kygui/src/pages/about-dewi.php">Câu chuyện về DEWI</a></li>
                                    <li><a href="/kygui/src/pages/ship-policy.php">Chính sách vận chuyển</a></li>
                                    <li><a href="/kygui/src/pages/policy.php">Chính sách thanh lý ký gửi</a></li>
                                    <li><a href="/kygui/src/pages/payment-policy.php">Chính sách đặt hàng và thanh toán</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="/kygui/src/pages/contact.php">Liên Hệ</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
                            <i class="zmdi zmdi-search"></i>
                        </div>

                        <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart1 cartd" data-notify="0">
                            <i class="zmdi zmdi-shopping-cart"></i>
                        </div>

                        <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
                            <i class="zmdi zmdi-favorite-outline"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="/kygui/src/images/icons/logo.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart1 cartd" data-notify="0">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        THỜI TRANG MỚI - GIÁ CŨ, SỰ LỰA CHỌN THÔNG MINH!
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">
                        <a href="/kygui/src/pages/contact.php" class="flex-c-m p-lr-10 trans-04">
                            Giúp đỡ & FAQs
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            Mở cửa: 08:00 - 22:00
                        </a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Trang chủ</a>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="/kygui/src/pages/product.php">Sản Phẩm</a>
                    <ul class="sub-menu-m">
                        <?php
                        while ($r = mysqli_fetch_array($rstype)) {
                            $type = $r['name'];
                            echo "<li><a href='/kygui/src/pages/product.php?type=$type'>$type</a></li>";
                        }
                        ?>
                    </ul>
                </li>

                <li>
                <li>
                    <a href="/kygui/src/pages/registersend.php">Gửi hàng</a>
                    <ul class="sub-menu-m">
                        <li><a href="index.html">Theo Dõi Hàng</a></li>
                        <li><a href="/kygui/src/pages/registersend.php">Đăng Ký Gửi Hàng</a></li>
                    </ul>
                </li>
                </li>

                <li>
                    <a href="/kygui/src/pages/blog.php">Blog</a>
                </li>

                <li>
                    <a href="/kygui/src/pages/about.php">Chúng Tôi</a>
                </li>

                <li>
                    <a href="/kygui/src/pages/contact.php">Liên Hệ</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <div class="container-search-header">
                <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                    <img src="/kygui/src/images/icons/icon-close2.png" alt="CLOSE">
                </button>

                <form class="wrap-search-header flex-w p-l-15" method="get" action="/kygui/src/pages/product.php">
                    <button class="flex-c-m trans-04" type="submit">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                    <input class="plh3" type="text" name="search" placeholder="Tìm kiếm...">
                </form>
            </div>
        </div>

        <!-- Cart -->
        <div class="wrap-header-cart js-panel-cart">
            <div class="s-full js-hide-cart"></div>
            <div class="header-cart flex-col-l p-l-65 p-r-25">
                <div class="header-cart-title flex-w flex-sb-m p-b-8">
                    <span class="mtext-103 cl2">
                        Giỏ hàng
                    </span>

                    <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                        <i class="zmdi zmdi-close"></i>
                    </div>
                </div>

                <div class="header-cart-content flex-w js-pscroll">
                    <ul class="header-cart-wrapitem w-full cart-infor-n">

                    </ul>

                    <div class="w-full">
                        <div class="header-cart-total w-full p-tb-40 total-cart-n">
                            Tổng tiền: 0 VNĐ
                        </div>

                        <div class="header-cart-buttons flex-w w-full">
                            <a href="/kygui/src/pages/shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                                Xem giỏ hàng
                            </a>

                            <a href="/kygui/src/pages/shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                                Thanh toán
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>