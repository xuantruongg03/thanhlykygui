<?php include '../components/header.php' ?>
<?php

if (isset($_GET['id'])) { // check if id is set in the url
    include "../../config/connectDB.php"; // connect to database
    $id = $_GET['id'];
    $sql = "SELECT user_name, user_id, receives_date, expired_date, product_stock, price
        FROM order_receives  WHERE order_receive_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['user_name'];
        $receives_date = $row['receives_date'];
        $expired_date = $row['expired_date'];
        $product_stock = $row['product_stock'];
        $price = $row['price'];
        $user_id = $row['user_id'];
        $conn->close();
    } else {
        echo '<script>alert("Đơn hàng không tồn tại"); window.location.href = "/kygui/src/admin/pages/ViewOrder.php";</script>';
    }
}

?>
<style>
    input[type='number'] {
        -moz-appearance: textfield;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }
</style>

<body class="">
    <div class="container-scroller">
        <?php include '../components/nav.php' ?>
        <div class="container-fluid page-body-wrapper">
            <?php include '../components/side_bar.php' ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row" style="justify-content: center;">
                        <div class="col-md-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Nhập thông tin đơn hàng</h4>
                                    <p class="card-description">
                                        Chi tiết về đơn hàng
                                    </p>
                                    <form class="forms-sample" action="/kygui/src/admin/controllers/add_order.php" method="post">
                                        <div class="form-group">
                                            <label for="user_id">Mã khách hàng</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="text" class="form-control" id="user_id" placeholder="Mã khách hàng" name="user_id" value="' . $user_id . '" required>';
                                            } else {
                                                echo '<input type="text" class="form-control" id="user_id" placeholder="Mã khách hàng" name="user_id" required>';
                                            }
                                            ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="user_name">Tên khách hàng</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="text" class="form-control" id="user_name" placeholder="Tên khách hàng" name="user_name" value="' . $user_name . '" required>';
                                            } else {
                                                echo '<input type="text" class="form-control" id="user_name" placeholder="Tên khách hàng" name="user_name" required>';
                                            }
                                            ?>
                                        </div>

                                        <div class="form-group ">
                                            <label for="receives_date">Ngày nhận</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="date" class="form-control" id="receives_date" name="receives_date" value="' . $receives_date . '" required>';
                                            } else {
                                                echo "<input id='receives_date' type='date' class='form-control' style='padding: 16px;' name='receives_date'>";
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group ">
                                            <label for="expired_date">Ngày hết hạn</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="date" class="form-control" id="expired_date" required name="expired_date" value="' . $expired_date . '" required>';
                                            } else {
                                                echo "<input id='expired_date' type='date' class='form-control' required style='padding: 16px;' name='expired_date'>
                                                    ";
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="product_stock">Số lượng tồn</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="number" min="1" max="100" class="form-control" id="product_stock" name="product_stock" value="' . $product_stock . '" required>';
                                            } else {
                                                echo '<input type="number" min="1" max="100" class="form-control" id="product_stock" name="product_stock" required>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Số tiền</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="number" min="1000" class="form-control" id="price" name="price" value="' . $price . '" required>';
                                            } else {
                                                echo '<input type="number" min="1000" class="form-control" id="price" name="price" required>';
                                            }
                                            ?>
                                        </div>
                                        <?php
                                        if (isset($_GET['id'])) {
                                            echo '<button type="submit" id="submit" class="btn btn-primary me-2">Cập nhật</button>';
                                            echo '<input type="hidden" name="action" value="update">';
                                            echo '<input type="hidden" name="id" value="' . $id . '">';
                                        } else {
                                            echo '<button type="submit" id="submit" class="btn btn-primary me-2">Thêm đơn hàng</button>';
                                        }
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include '../components/footer.php'; ?>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
        <?php
        if (!isset($_GET['id'])) {
            echo "<script>
                const date = document.getElementById('receives_date');
                const expired_date = document.getElementById('expired_date');
                const today = new Date();
                const day = today.getDate();
                const month = today.getMonth() + 1;
                const year = today.getFullYear();
                const todayString = year + '-' + (month < 10 ? '0' + month : month) + '-' + (day < 10 ? '0' + day : day);
                date.min = todayString;
                date.value = todayString;
                expired_date.min = todayString;
                expired_date.value = todayString;
            </script>";
        }
        ?>
    </div>
</body>