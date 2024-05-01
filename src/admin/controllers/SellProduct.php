<?php
if (isset($_GET['id'])) {
    include '../../config/connectDB.php';
    $id = $_GET['id'];

    //Kiểm tra xem sản phẩm có tồn tại không và trạng thái có quá hạn không
    $sql_check = "select * from products where product_id = '$id'";
    $result_check = mysqli_query($conn, $sql_check);
    $row = mysqli_fetch_assoc($result_check);
    if ($row['product_status'] == 'Đã quá hạn') {
        echo "<script>alert('Sản phẩm đã quá hạn không thể bán');</script>";
        echo "<script>window.location.href = '/kygui/src/admin/pages/ViewProduct.php';</script>";
        return;
    }

    //Kiểm tra xem số lượng sản phẩm còn lại có lớn hơn 0 không
    if (($row['product_quantity'] - $row['product_sold']) <= 0) {
        echo "<script>alert('Sản phẩm đã hết hàng không thể bán');</script>";
        echo "<script>window.location.href = '/kygui/src/admin/pages/ViewProduct.php';</script>";
        return;
    }

    $sql = "update products set product_status = 'Đang bán', product_buy = 1 where product_id = '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo "<script>alert('Đã đăng bán sản phẩm');</script>";
    echo "<script>window.location.href = '/kygui/src/admin/pages/ViewProduct.php';</script>";
}

