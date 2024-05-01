<?php include '../components/header.php' ?>
<?php
include '../../config/connectDB.php';
?>

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
                                    <h4 class="card-title">Danh sách đơn đặt hàng</h4>
                                    <p class="card-description">
                                        Chi tiết về đơn đặt hàng
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Họ tên</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Tổng tiền</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Phương thức thanh toán</th>
                                                    <th>Phương thức giao hàng</th>
                                                    <th>Ghi chú</th>
                                                    <th>Ngày đặt hàng</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * FROM order_items inner join products on order_items.product_id = products.product_id";
                                                $result1 = $conn->query($sql);
                                                $total = 0;
                                                while ($row = $result1->fetch_assoc()) {
                                                    $total += $row['product_price'] * $row['quantity'];
                                                }

                                                $sql2 = "SELECT * FROM order_info";
                                                $result = $conn->query($sql2);


                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['name_user'] . "</td>";
                                                        echo "<td>" . $row['phone_user'] . "</td>";
                                                        echo "<td>" . $total . "</td>";
                                                        echo "<td>" . $row['address'] . "</td>";
                                                        echo "<td>" . $row['payment'] . "</td>";
                                                        echo "<td>" . $row['ship'] . "</td>";
                                                        echo "<td>" . $row['note'] . "</td>";
                                                        echo "<td>" . $row['created_at'] . "</td>";
                                                        echo "<td>";
                                                        echo '<a href="/kygui/src/admin/controllers/delete_order.php?id=' . $row['order_id'] . '" style="color: black;"><span title="Hủy đơn" class="mdi mdi-delete md-i" style="font-size: 20px; margin-right: 5px;  cursor:pointer;"></span></a>';
                                                        echo '<a href="/kygui/src/admin/controllers/export_order.php?id=' . $row['order_id'] . '" style="color: black;"><span title="Xuất hóa đơn" class="mdi mdi-printer md-i" style="font-size: 20px; cursor:pointer; margin-right: 5px;"></span></a>';
                                                        echo "</td>";
                                                        echo "</tr>";
                                                    }
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