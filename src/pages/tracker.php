
<?php
    session_start();
include '../config/connectDB.php';
if (!isset($_POST['fasdf'])) {
    header("Location: /kygui/index.php");
    exit;
}
include '../components/header.php'; ?>

<body>
    <section class="intro" style="height:100%;">
        <div class="gradient-custom-1 h-100">
            <div class="mask d-flex h-100" style="margin-top: 100px;">
                <div class="container">
                    <h1 style="margin: 10px 0;">Đơn hàng của bạn</h1>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="table-responsive bg-white">
                                <table class="table mb-0 table-striped" style="align-items: center;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Mã đơn hàng</th>
                                            <th scope="col">Tên khách hàng</th>
                                            <th scope="col">Số lượng tồn</th>
                                            <th scope="col">Thu nhập</th>
                                            <th scope="col">Ngày gửi</th>
                                            <th scope="col">Ngày hết hạn</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Thao tác</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $user_id = $_POST['fasdf'];
                                        $sql = "SELECT * FROM order_receives WHERE user_id = '$user_id'";

                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                $stock=$row['product_stock'];
                                                echo "<tr>";
                                                echo "<td>" . $row['order_receive_id'] . "</td>";
                                                echo "<td>" . $row['user_name'] . "</td>";
                                                echo "<td>" . $stock . "</td>";
                                                echo "<td>" . $row['price'] . "</td>";
                                                echo "<td>" . $row['receives_date'] . "</td>";
                                                echo "<td>" . $row['expired_date'] . "</td>";
                                                                                               
                                                if($row['expired_date'] <= date("Y-m-d")) {
                                                    if ($row['state'] == 0) {
                                                        echo "<td><span class='badge badge-success'>Quyên góp</span></td>";
                                                    } else {
                                                        echo "<td><span class='badge badge-success'>Lấy lại hàng</span></td>";
                                                    }
                                                } else {
                                                    echo "<td></td>";
                                                };
                                                if($row['expired_date'] <= date("Y-m-d")) {
                                                    if ($row['state'] == 1){
                                                    echo "<td><form action='/kygui/src/controler/update_state.php' method='POST'>
                                                        <input type='hidden' name='state' value='" . $row['state'] . "'>
                                                        <input type='hidden' name='order_receive_id' value='" . $row['order_receive_id'] . "'>
                                                        <button type='submit' class='btn btn-primary'>Quyên góp</button></form></td>";
                                                    }
                                                    else {
                                                        echo "<td><form action='/kygui/src/controler/update_state.php' method='POST'>
                                                        <input type='hidden' name='state' value='" . $row['state'] . "'>
                                                        <input type='hidden' name='order_receive_id' value='" . $row['order_receive_id'] . "'>
                                                        <button type='submit' class='btn btn-primary'>Lấy hàng</button></form></td>";
                                                    }
                                                } else {
                                                    echo "<td></td>";
                                                }
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
    </section>
</body>
<?php include '../components/footer.php' ?>