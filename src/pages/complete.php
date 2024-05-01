<?php
include "../config/connectDB.php";
if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $sql = "SELECT * FROM order_info WHERE order_id = $order_id";
    $sql1 = "SELECT * FROM order_items inner join products on order_items.product_id = products.product_id WHERE order_id = $order_id";
    $result = $conn->query($sql);
    if($result->num_rows == 0){
        header("Location: /kygui/index.php");
    }
    $result1 = $conn->query($sql1);
    $total = 0;
    $ship = "";
    $payment = "";
    $note = "";
    $order_id = 0;
    $date = "";
    while ($row = $result1->fetch_assoc()) {
        $total += $row['product_price'] * $row['quantity'];
    }
    if ($result->num_rows > 0) {
        $row1 = $result->fetch_assoc();
        $ship = $row1['ship'];
        $payment = $row1['payment'];
        $note = $row1['note'];
        $order_id = $row1['order_id'];
        $date = $row1['created_at'];
    }
} else {
    header("Location: /kygui/index.php");
}
?>
<?php include "../components/header.php" ?>

<body>
    <div id="content" class="content-area page-wrapper" role="main" style="margin: 8% 15%;">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">
                    <div class="woocommerce">
                        <div class="row">
                            <div class="large-7 col">
                                <?php
                                if ($payment == "Chuyển khoản ngân hàng") {
                                    echo '<section class="woocommerce-bacs-bank-details">
                                        <h3 class="wc-bacs-bank-details-heading">Thông tin chuyển khoản ngân hàng</h3>
                                        <br>
                                        <ul class="wc-bacs-bank-details order_details bacs_details">
                                            <li class="wc-bacs-bank-details-account-name">Tên: <strong>NGUYEN THI MY LINH</strong></li>
                                            <li class="bank_name">Ngân hàng: <strong>VIETCOMBANK</strong></li>
                                            <li class="account_number">Số tài khoản: <strong>1014204123</strong></li>
                                        </ul>
                                        <br>
                                    </section>';
                                }
                                ?>
                                <section class="woocommerce-order-details">
                                    <h3 class="woocommerce-order-details__title">Chi tiết đơn hàng</h3>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm</th>
                                                <th style="display: flex; justify-content: end;">Tổng</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $result1 = $conn->query($sql1);
                                            while ($row = $result1->fetch_assoc()) {
                                                echo "<tr class='woocommerce-table__line-item order_item'>";
                                                echo "<td>";
                                                echo "<a href='/kygui/src/pages/product-detail?id=" . $row['product_id'] . "'>" . $row['product_name'] . "</a> <strong class='product-quantity'>&times;&nbsp;" . $row['quantity'] . "</strong>";
                                                echo "</td>";
                                                echo "<td style='display: flex; justify-content: end;'>";
                                                echo "<span>" . number_format($total, 0, ',', '.') . " VNĐ</span>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                            ?>

                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th scope="row">Giao nhận hàng:</th>
                                                <td style="display: flex; justify-content: end;">
                                                    <?php echo $ship; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Phương thức thanh toán:</th>
                                                <td style="display: flex; justify-content: end;">
                                                    <?php echo $payment; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Tổng cộng:</th>
                                                <td style="display: flex; justify-content: end;">
                                                    <?php
                                                    if($total > 400000) {
                                                        echo number_format($total, 0, ',', '.') . " VNĐ";
                                                    } else {
                                                        if ($ship == "Giao hàng nhanh") {
                                                            echo number_format($total + 45000, 0, ',', '.') . " VNĐ";
                                                        } elseif ($ship == "Giao hàng tiết kiệm") {
                                                            echo number_format($total + 25000, 0, ',', '.') . " VNĐ";
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Lưu ý:</th>
                                                <td style="display: flex; justify-content: end;">
                                                    <?php echo $note ?>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </section>


                            </div>

                            <div class="large-5 col" style="padding-left: 5rem;">
                                <div class="is-well col-inner entry-content">
                                    <p class="success-color woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><strong>Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</strong></p>

                                    <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

                                        <li class="woocommerce-order-overview__order order">
                                            Mã đơn hàng: <strong>
                                                <?php
                                                echo $order_id;
                                                ?>
                                            </strong>
                                        </li>


                                        <li class="woocommerce-order-overview__total total">
                                            Tổng cộng: <strong>
                                                <span>
                                                <?php
                                                    if($total > 400000) {
                                                        echo number_format($total, 0, ',', '.') . " VNĐ";
                                                    } else {
                                                        if ($ship == "Giao hàng nhanh") {
                                                            echo number_format($total + 45000, 0, ',', '.') . " VNĐ";
                                                        } elseif ($ship == "Giao hàng tiết kiệm") {
                                                            echo number_format($total + 25000, 0, ',', '.') . " VNĐ";
                                                        }
                                                    }
                                                    ?>
                                                </span>
                                            </strong>
                                        </li>
                                        <li class="woocommerce-order-overview__payment-method method">
                                           Ngày đặt hàng: <strong>
                                                <?php echo $date; ?>
                                            </strong>
                                        </li>
                                        <li class="woocommerce-order-overview__payment-method method">
                                            Phương thức thanh toán: <strong>
                                                <?php echo $payment; ?>
                                            </strong>
                                        </li>

                                    </ul>

                                    <div class="clear"></div>
                                </div>
                            </div>



                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>
<?php include "../components/footer.php" ?>