<?php
include '../config/connectDB.php';
function generateRandomInt() {
    $min = pow(10, 1); 
    $max = pow(10, 6) - 1; 
    return mt_rand($min, $max); // Sử dụng mt_rand() để sinh số ngẫu nhiên trong khoảng từ $min đến $max
}
// Đặt tên cho cookie chứa giỏ hàng
$cookie_name = "cart";

// Kiểm tra xem cookie có tồn tại không
if(isset($_COOKIE[$cookie_name])) {
    // Lấy dữ liệu từ cookie và chuyển đổi thành mảng PHP
    $cart_data = json_decode($_COOKIE[$cookie_name], true);
    
    // Kiểm tra xem các trường đã được gửi từ form chưa
    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['payment']) && isset($_POST['ship'])){
        // Lấy các giá trị từ form
        $name_user = $_POST['name'];
        $phone_user = $_POST['phone'];
        $payment = $_POST['payment'];
        $ship = $_POST['ship'];
        $address = $_POST['address'];
        
        foreach($cart_data as $item) {
            $product_id = $item['id'];
            $sql = "SELECT product_quantity FROM products WHERE product_id = '$product_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $quantityTT = $row['product_quantity'];
            $quantity = $item['quantity'];
            if($quantity > $quantityTT){
                header("Location: /kygui/src/pages/shoping-cart.php?ss=ssnosl");
                exit;
            }
        }
        $id = generateRandomInt();
        $sql = "INSERT INTO order_info (order_id, name_user, phone_user, address, ship, note, payment) 
        VALUES ('$id','$name_user', '$phone_user', '$address', '$ship', '', '$payment')";
            if ($conn->query($sql) !== TRUE) {
                header("Location: /kygui/src/pages/shoping-cart.php?ss=ssno");
                exit;
            }
        // Duyệt qua mảng giỏ hàng
        foreach($cart_data as $item) {
            // Lấy ra id và số lượng
            $product_id = $item['id'];
            //check quantity of product in database
            $quantity = $item['quantity'];
            // Thực hiện truy vấn để thêm dữ liệu vào bảng "orders"
            $sql = "INSERT INTO order_items (order_id, product_id, quantity) 
            VALUES ('$id', '$product_id', '$quantity')";
            if ($conn->query($sql) !== TRUE) {
                header("Location: /kygui/src/pages/shoping-cart.php?ss=ssno");
                exit;
            }
            // thực hiện trừ số lượng sản phẩm còn lại trong products ....và cộng số lượng bán được của sản phẩm ấy lên
            $sql = "UPDATE products SET 
            product_quantity = product_quantity - '$quantity', 
            product_sold = product_sold + '$quantity' 
            WHERE product_id = '$product_id'";

            if ($conn->query($sql) !== TRUE) {
                header("Location: /kygui/src/pages/shoping-cart.php?ss=ssno");
                exit;
            }

        }
        
        // Xóa cookie giỏ hàng sau khi đã thêm vào cơ sở dữ liệu
        echo "<script>";
        echo "document.cookie = '$cookie_name=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';";
        echo "window.location.href = '/kygui/src/pages/complete.php?id=$id';";
        echo "</script>";
    } else {
        header("Location: /kygui/src/pages/shoping-cart.php?ss=ssno");
        exit;
    }
} else {
    header("Location: /kygui/src/pages/shoping-cart.php?ss=ssno");
    exit;
}

// Đóng kết nối đến cơ sở dữ liệu
$conn->close();
?>
