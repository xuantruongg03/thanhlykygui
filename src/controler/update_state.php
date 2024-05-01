<?php

//Nếu trạng thái sp đang là 'Quyên góp' (0) thì cập nhật lại trạng thái thành "Lấy hàng" (1)
if (isset($_POST['order_receive_id'])) {
    include '../config/connectDB.php';
    $order_receive_id = $_POST['order_receive_id'];
    echo $_POST['state'];
    if ($_POST['state'] == 0) {
        $sql = "UPDATE order_receives SET state = 1 WHERE order_receive_id = '$order_receive_id'";
        if ($conn->query($sql) === TRUE) {
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
        header("Location: /kygui/src/pages/search-tracker.php");
        return;
    }
    $sql = "UPDATE order_receives SET state = 0 WHERE order_receive_id = '$order_receive_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    //Chuyển hướng về trang trước 
    header("Location: /kygui/src/pages/search-tracker.php");
    return;
}
