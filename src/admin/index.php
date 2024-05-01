
<?php include './components/header.php';?>
<?php 
    include "../config/connectDB.php";
    //Get total product
    $sqlProduct = "SELECT COUNT(*) as total FROM products";
    $resultProduct = mysqli_query($conn, $sqlProduct);
    $rowProduct = mysqli_fetch_assoc($resultProduct);
    $totalProduct = $rowProduct['total'];

    //Get total post
    $sqlPost = "SELECT COUNT(*) as total FROM blogs";
    $resultPost = mysqli_query($conn, $sqlPost);
    $rowPost = mysqli_fetch_assoc($resultPost);
    $totalPost = $rowPost['total'];

    //Get total order
    $sqlOrder = "SELECT COUNT(*) as total FROM order_info";
    $resultOrder = mysqli_query($conn, $sqlOrder);
    $rowOrder = mysqli_fetch_assoc($resultOrder);
    $totalOrder = $rowOrder['total'];

    //Get total user
    $sqlUser = "SELECT COUNT(*) as total FROM users";
    $resultUser = mysqli_query($conn, $sqlUser);
    $rowUser = mysqli_fetch_assoc($resultUser);
    $totalUser = $rowUser['total'];

    //Get total order_receives
    $sqlOrderReceives = "SELECT COUNT(*) as total FROM order_receives";
    $resultOrderReceives = mysqli_query($conn, $sqlOrderReceives);
    $rowOrderReceives = mysqli_fetch_assoc($resultOrderReceives);
    $totalOrderReceives = $rowOrderReceives['total'];

    //Get total user order receives
    $sqlUserOrderReceives = "SELECT COUNT(DISTINCT user_id) as total FROM order_receives";
    $resultUserOrderReceives = mysqli_query($conn, $sqlUserOrderReceives);
    $rowUserOrderReceives = mysqli_fetch_assoc($resultUserOrderReceives);
    $totalUserOrderReceives = $rowUserOrderReceives['total'];
?>
<body class="">
    <div class="container-scroller">
        <?php include './components/nav.php' ?>
        <div class="container-fluid page-body-wrapper">
            <?php include './components/side_bar.php' ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="statistics-details d-flex align-items-center justify-content-between">
                                                    <div>
                                                        <p class="statistics-title">Số lượng sản phẩm</p>
                                                        <h3 class="rate-percentage"><?php echo $totalProduct ?> <span style="font-size: small; font-weight:500;">Sản phẩm</span></h3>
                                                    </div>
                                                    <div>
                                                        <p class="statistics-title">Số lượng bài viết</p>
                                                        <h3 class="rate-percentage"><?php echo $totalPost ?> <span style="font-size: small; font-weight:500;">Bài</span></h3>
                                                    </div>
                                                    <div class="d-none d-md-block">
                                                        <p class="statistics-title">Số lượng đơn hàng</p>
                                                        <h3 class="rate-percentage"><?php echo $totalOrder ?> <span style="font-size: small; font-weight:500;">Đơn</span></h3>
                                                    </div>
                                                    <div class="d-none d-md-block">
                                                        <p class="statistics-title">Số lượng khách hàng</p>
                                                        <h3 class="rate-percentage"><?php echo $totalUser ?> <span style="font-size: small; font-weight:500;">Khách hàng</span></h3>
                                                    </div>
                                                    <div class="d-none d-md-block">
                                                        <p class="statistics-title">Số người ký gửi</p>
                                                        <h3 class="rate-percentage"><?php echo $totalUserOrderReceives ?> <span style="font-size: small; font-weight:500;">Người</span></h3>
                                                    </div>
                                                    <div class="d-none d-md-block">
                                                        <p class="statistics-title">Số hàng ký gửi</p>
                                                        <h3 class="rate-percentage"><?php echo $totalOrderReceives ?> <span style="font-size: small; font-weight:500;">Sản phẩm</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body card-rounded">
                                                                <h4 class="card-title  card-title-dash">Recent Events</h4>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Change in Directors
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Other Events
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Quarterly Report
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="list align-items-center border-bottom py-2">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-2 font-weight-medium">
                                                                            Change in Directors
                                                                        </p>
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <div class="d-flex align-items-center">
                                                                                <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                                <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="list align-items-center pt-3">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-0">
                                                                            <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                                    <h4 class="card-title card-title-dash">Activities</h4>
                                                                    <p class="mb-0">20 finished, 5 remaining</p>
                                                                </div>
                                                                <ul class="bullet-line-list">
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                            <p>Just now</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="d-flex justify-content-between">
                                                                            <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                                                            <p>1h</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="list align-items-center pt-3">
                                                                    <div class="wrapper w-100">
                                                                        <p class="mb-0">
                                                                            <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex flex-column">
                                                <div class="row flex-grow">
                                                    <div class="col-12 grid-margin stretch-card">
                                                        <div class="card card-rounded">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="d-flex justify-content-between align-items-center">
                                                                            <h4 class="card-title card-title-dash">Todo list</h4>
                                                                            <div class="add-items d-flex mb-0">
                                                                                <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                                                                <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="list-wrapper">
                                                                            <ul class="todo-list todo-list-rounded">
                                                                                <li class="d-block">
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                            <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                                                                            <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="d-block">
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">23 June 2020</div>
                                                                                            <div class="badge badge-opacity-success me-3">Done</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                            <div class="badge badge-opacity-success me-3">Done</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li class="border-bottom-0">
                                                                                    <div class="form-check w-100">
                                                                                        <label class="form-check-label">
                                                                                            <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text
                                                                                            of the printing <i class="input-helper rounded"></i>
                                                                                        </label>
                                                                                        <div class="d-flex mt-2">
                                                                                            <div class="ps-4 text-small me-3">24 June 2020</div>
                                                                                            <div class="badge badge-opacity-danger me-3">Expired</div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include './components/footer.php'; ?>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</body>