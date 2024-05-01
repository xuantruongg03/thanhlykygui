<?php

include "../../config/connectDB.php";

if (
    isset($_POST['user_id']) && isset($_POST['user_name']) && isset($_POST['receives_date'])
    && isset($_POST['expired_date']) && isset($_POST['product_stock']) && isset($_POST['price'])
) {
    $user_id = $_POST['user_id'];

    $user_name = $_POST['user_name'];
    $receives_date = $_POST['receives_date'];
    $expired_date = $_POST['expired_date'];
    $product_stock = $_POST['product_stock'];
    $price = $_POST['price'];

    $sql = "INSERT INTO order_receives (user_id, user_name, receives_date, expired_date, product_stock, price) 
    VALUES ('$user_id', '$user_name', '$receives_date', '$expired_date', '$product_stock', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Thêm đơn hàng thành công"); window.location.href = "/kygui/src/admin/pages/ViewOrder.php";</script>';
    } else {
        echo '<script>alert("Thêm đơn hàng thất bại"); window.location.href = "/kygui/src/admin/pages/ViewOrder.php";</script>';
    }
} else {
    echo '<script>alert("Vui lòng nhập đầy đủ thông tin"); window.location.href = "/kygui/src/admin/pages/InputOrder.php";</script>';
}
