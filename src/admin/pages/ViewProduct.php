<?php include '../components/header.php' ?>

<body class="">
    <div class="container-scroller">
        <?php include '../components/nav.php' ?>
        <div class="container-fluid page-body-wrapper">
            <?php include '../components/side_bar.php' ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Danh sách sản phẩm</h4>
                                    <p class="card-description">
                                        Chi tiết về sản phẩm
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Giá</th>
                                                    <th>Thương hiệu</th>
                                                    <th>Kích thước</th>
                                                    <th>Số lượng còn lại</th>
                                                    <th>Số lượng đã bán</th>
                                                    <th>Trạng thái</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include "../../config/connectDB.php";
                                                $sql = "SELECT product_name, product_quantity, product_size, 
                                                product_sold, product_trademark, product_price, product_id
                                                FROM products";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $product_id = $row['product_id'];
                                                    $product_name = $row['product_name'];
                                                    $product_quantity = $row['product_quantity'];
                                                    $product_size = $row['product_size'];
                                                    $product_price = $row['product_price'];
                                                    $product_sold = $row['product_sold'];
                                                    $product_trademark = $row['product_trademark'];
                                                    echo '<tr>';
                                                    echo '<td>' . $product_name . '</td>';
                                                    echo '<td>' . $product_price . '</td>';
                                                    echo '<td>' . $product_trademark . '</td>';
                                                    echo '<td>' . $product_size . '</td>';
                                                    echo '<td>' . $product_quantity . '</td>';
                                                    echo '<td>' . $product_sold . '</td>';
                                                    echo '<td>';
                                                    if($product_quantity == 0) {
                                                        echo 'Hết hàng';
                                                    } else {
                                                        echo 'Còn hàng';
                                                    }
                                                    echo '</td>';
                                                    echo '<td>';
                                                    echo '<a href="/kygui/src/admin/pages/InputProduct.php?id=' . $product_id . '" style="color: black;"><span title="Sửa" class="mdi mdi-pen md-i" style="font-size: 20px; cursor:pointer;"></span></a>';
                                                    echo '<a href="/kygui/src/admin/controllers/ProductDelete.php?id=' . $product_id . '" style="color: black;"><span title="Xóa" class="mdi mdi-delete md-i" style="font-size: 20px; cursor:pointer; margin-right: 5px;"></span></a>';
                                                    echo '</td>';
                                                    echo '</tr>';
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include '../components/footer.php'; ?>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</body>