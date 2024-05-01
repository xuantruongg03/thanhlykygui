<?php
include '../../config/connectDB.php';
$id = $_GET['id'];
$sql = "DELETE FROM order_items WHERE order_id = $id";
if (mysqli_query($conn, $sql)) {
    $sql2 = "DELETE FROM order_info WHERE order_id = $id";
    mysqli_query($conn, $sql2);
    echo "<script>alert('Hủy đơn thành công')</script>";
    header("Location: /kygui/src/admin/pages/ViewOrderSell.php");
} else {
    echo "<script>alert('Hủy đơn thất bại')</script>";
    header("Location: /kygui/src/admin/pages/ViewOrderSell.php");
}
mysqli_close($conn);
