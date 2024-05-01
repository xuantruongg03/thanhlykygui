<?php
$id = $_GET['id'];
include '../functions/delete_product.php';
include '../../config/connectDB.php';

$sql = "DELETE FROM order_receives WHERE order_receive_id = $id";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Xóa đơn hàng thành công')</script>";
    echo "<script>window.location.href='/kygui/src/admin/pages/ViewOrder.php'</script>";
} else {
    echo "<script>alert('Xóa đơn hàng thất bại')</script>";
    echo "<script>window.location.href='/kygui/src/admin/pages/ViewOrder.php'</script>";
}
mysqli_close($conn);
