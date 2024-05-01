<?php
header("Content-type: application/json");
if (isset($_POST['sqlOrder'])) {
    $sqlOrder = $_POST['sqlOrder'];
    include "../../config/connectDB.php";
    try {
        $result = mysqli_query($conn, $sqlOrder);
        echo "200";
    } catch (\Throwable $th) {
        // echo $status = 500;
        echo $th;
    }
} else {
    $response = array("success" => false, "message" => "No data");
    echo json_encode($response);
}
