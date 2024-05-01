<?php
if (isset($_GET['id'])) {
    // Create connection
    include '../../config/connectDB.php';

    $id = $_GET['id'];

    //Kiểm tra xem sản phẩm có tồn tại không và trạng thái có đang đăng bán không
    $sql_check = "select * from products where product_id = '$id'";
    $result_check = mysqli_query($conn, $sql_check);
    $row = mysqli_fetch_assoc($result_check);
    if ($row['product_status'] == 'Chưa bán') {
        echo "<script>alert('Sản phẩm chưa đang bán không thể hủy bán');</script>";
        echo "<script>window.location.href = '/kygui/src/admin/pages/ViewProduct.php';</script>";
        return;
    }

    //Hủy bán
    $sql = "update products set product_status = 'Chưa bán', product_buy = 0 where product_id = '$id'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    echo "<script>alert('Đã hủy bán sản phẩm');</script>";
    echo "<script>window.location.href = '/kygui/src/admin/pages/ViewProduct.php';</script>";
   
}

