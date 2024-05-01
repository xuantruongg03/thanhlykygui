<?php

function delete_product($id)
{
    include '../../config/connectDB.php';
    //Step 1: Delete order_receives
    //Step 2: Delete type of product
    //Step 3: Delete product_images
    //Step 4: Delete products

    $sql_delete_type_product = "DELETE FROM type WHERE product_id = '$id'";
    $sql_delete_product_images = "DELETE FROM product_images WHERE product_id = '$id'";
    $sql_delete_product = "DELETE FROM products WHERE product_id = '$id'";

    if (mysqli_query($conn, $sql_delete_type_product)) {
        if (mysqli_query($conn, $sql_delete_product_images)) {
            if (mysqli_query($conn, $sql_delete_product)) {
                return true;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }

    mysqli_close($conn);
}
