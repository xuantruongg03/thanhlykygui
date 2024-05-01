<?php

include '../../config/connectDB.php';

function randomID()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomID = '';
    for ($i = 0; $i < 10; $i++) {
        $randomID .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomID;
}
if (
    isset($_POST['name_product']) && isset($_POST['trademark']) && isset($_POST['size'])
    && isset($_POST['price']) && isset($_POST['categories']) && isset($_POST['quantity'])
    && isset($_POST['des']) && isset($_POST['multi_file']) && isset($_POST['sub_categories'])
) {
    $id_product = randomID();
    $name_product = $_POST['name_product'];
    $des = $_POST['des'];
    $trademark = $_POST['trademark'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $categories = $_POST['categories'];
    $quantity = $_POST['quantity'];
    $imagearray = $_POST['multi_file'];
    $sub_categories = $_POST['sub_categories'];
    $image = explode(',', $imagearray);

    //Check action update or add
    if (isset($_POST['action']) && $_POST['action'] == 'update') {
        $id_product = $_POST['id'];
        $sql_product = "UPDATE products SET product_name = ?, 
        product_price = ?, product_quantity = ?,
        product_description = ?, product_sub_type = ?, product_trademark = ?, product_size = ?
        WHERE product_id = ?";
        $stmt = $conn->prepare($sql_product);
        $stmt->bind_param("sdisssss", $name_product, $price, $quantity, $des, $sub_categories, $trademark, $size, $id_product);
        if ($stmt->execute()) {
            $sql_categories = "UPDATE type SET name = '$categories' WHERE product_id = '$id_product'";
            if (mysqli_query($conn, $sql_categories)) {
                $sql_image = "DELETE FROM product_images WHERE product_id = '$id_product'";
                mysqli_query($conn, $sql_image);
                foreach ($image as $img) {
                    if($img != '') {
                        $sql_image = "INSERT INTO product_images (product_id, product_image) VALUES ('$id_product', '$img')";
                        mysqli_query($conn, $sql_image);
                    }
                }
                echo '<script>alert("Cập nhật sản phẩm thành công")</script>';
                echo "<script>window.location.href = '/kygui/src/admin/pages/ViewProduct.php'</script>";
                return;
            } else {
                echo '<script>alert("Cập nhật sản phẩm thất bại i")</script>';
                echo "<script>window.location.href = '/kygui/src/admin/pages/InputProduct.php'</script>";
                return;
            }
        } else {
            echo '<script>alert("Cập nhật sản phẩm thất bại p")</script>';
            echo "<script>window.location.href = '/kygui/src/admin/pages/InputProduct.php'</script>";
            return;
        }
    }

    // Add product
    $sql_product = "INSERT INTO products (product_id, product_name, product_price, product_quantity, product_description, product_sub_type, product_trademark, product_size) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Chuẩn bị prepared statement
    $stmt = $conn->prepare($sql_product);

    // Bind các tham số với giá trị thực tế
    $stmt->bind_param("ssdissss", $id_product, $name_product, $price, $quantity, $des, $sub_categories, $trademark, $size);
    if ($stmt->execute()) {
        $sql_categories = "INSERT INTO type (product_id, name) VALUES ('$id_product', '$categories')";
        if (mysqli_query($conn, $sql_categories)) {
            foreach ($image as $img) {
                if($img != '') {
                    $sql_image = "INSERT INTO product_images (product_id, product_image) VALUES ('$id_product', '$img')";
                    mysqli_query($conn, $sql_image);
                }
            }
            echo '<script>alert("Thêm sản phẩm thành công")</script>';
            echo "<script>window.location.href = '/kygui/src/admin/pages/ViewProduct.php'</script>";
        } else {
            echo '<script>alert("Thêm sản phẩm thất bại i")</script>';
            echo "<script>window.location.href = '/kygui/src/admin/pages/InputProduct.php'</script>";
        }
    } else {
        echo '<script>alert("Thêm sản phẩm thất bại p")</script>';
        echo "<script>window.location.href = '/kygui/src/admin/pages/InputProduct.php'</script>";
        return;
    }
}

mysqli_close($conn);
