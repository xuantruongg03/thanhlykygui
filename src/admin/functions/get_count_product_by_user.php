<?php
function get_count_product_by_user($user_id)
{
    include '../../config/connectDB.php';
    $sql = "SELECT COUNT(*) as count FROM products WHERE user_id = '$user_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['count'];
}
