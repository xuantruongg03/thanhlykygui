<?php

require_once './dompdf/autoload.inc.php';
include '../../config/connectDB.php';

$id = $_GET['id'];

$sql = "SELECT * FROM order_items INNER JOIN products ON order_items.product_id = products.product_id WHERE order_items.order_id = $id";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM order_info WHERE order_id = $id";
$result2 = $conn->query($sql2);

$total = 0;
$product_name = '';

while ($row = $result->fetch_assoc()) {
    $total += $row['product_price'] * $row['quantity'];
    $product_name .= $row['product_name'] . " x " . $row['quantity'] . ", ";
}

if ($result2->num_rows > 0) {
    $row = $result2->fetch_assoc();
    $name_user = $row['name_user'];
    $phone_user = $row['phone_user'];
    $address = $row['address'];
    $note = $row['note'];
    $created_at = $row['created_at'];

    $html = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hóa đơn</title>
    </head>
    <body>
        <h1>Thong tin don hang</h1>
        <p>Ho ten: ' . convertVNToEng($name_user) . '</p>
        <p>So dien thoai: ' . convertVNToEng($phone_user) . '</p>
        <p>San pham: ' . convertVNToEng($product_name) . '</p>
        <p>Tong tien: ' . convertVNToEng($total) . 'VND</p>
        <p>Dia chi: ' . convertVNToEng($address) . '</p>
        <p>Ghi chu: ' . convertVNToEng($note) . '</p>
        <p>Ngay dat hang: ' . $created_at . '</p>
    </body>
    </html>';

    $dompdf = new Dompdf\Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->render();
    $dompdf->stream();
}

mysqli_close($conn);

function convertVNToEng($str) {
    $str = trim($str);
    $str = mb_strtolower($str, 'UTF-8');
    $str = str_replace('đ', 'd', $str);
    $str = str_replace('Đ', 'd', $str);
    $str = str_replace(array('á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ', 'đ'), 'a', $str);
    $str = str_replace(array('é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ'), 'e', $str);
    $str = str_replace(array('í', 'ì', 'ỉ', 'ĩ', 'ị'), 'i', $str);
    $str = str_replace(array('ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ'), 'o', $str);
    $str = str_replace(array('ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự'), 'u', $str);
    $str = str_replace(array('ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ'), 'y', $str);
    $str = preg_replace('/[^a-z0-9\- ]/', '', $str); // Thêm dấu cách vào để không xóa dấu cách
    return $str;
}

?>
