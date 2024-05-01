<?php include '../components/header.php' ?>
<?php include '../../config/connectDB.php'; ?>

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
                                    <h4 class="card-title">Danh sách đơn hàng nhập</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Mã khách hàng</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th>Ngày ký gửi</th>
                                                    <th>Ngày hết hạn</th>
                                                    <th>Số lượng tồn</th>
                                                    <th>Số tiền</th>
                                                    <th>Trạng thái</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT order_receive_id, user_name, product_stock, user_id,
                                                price, receives_date, expired_date, state
                                                FROM order_receives";
                                                $result = mysqli_query($conn, $sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['user_id'] . "</td>";
                                                        echo "<td>" . $row['user_name'] . "</td>";
                                                        echo "<td>" . $row['receives_date'] . "</td>";
                                                        echo "<td>" . $row['expired_date'] . "</td>";
                                                        echo "<td>" . $row['product_stock'] . "</td>";
                                                        echo "<td>" . $row['price'] . "</td>";
                                                        if ($row['state'] == 0) {
                                                            echo "<td>Quyên góp</td>";
                                                        } else {
                                                            echo "<td>Lấy lại hàng</td>";
                                                        }
                                                        echo "<td>";
                                                        echo '<a href="/kygui/src/admin/pages/InputOrder.php?id=' . $row['order_receive_id'] . '" style="color: black;"><span title="Sửa" class="mdi mdi-pen md-i" style="font-size: 20px; margin-right: 5px;  cursor:pointer;"></span></a>';
                                                        echo '<a href="/kygui/src/admin/controllers/order_rec_delete.php?id=' . $row['order_receive_id'] . '" style="color: black;"><span title="Xóa" class="mdi mdi-delete md-i" style="font-size: 20px; cursor:pointer; margin-right: 5px;"></span></a>';
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
    </div>
</body>