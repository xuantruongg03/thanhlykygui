<?php include '../components/header.php' ?>
<?php

if (isset($_GET['id'])) {
    include "../../config/connectDB.php";
    $id = $_GET['id'];
    $sql = "SELECT p.product_id, product_name, product_price, product_quantity, 
    product_sub_type, product_description, product_size, product_trademark, t.name as product_type
        FROM products as p inner join type as t on t.product_id = p.product_id 
        WHERE p.product_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $product_id = $row['product_id'];
        $product_name = $row['product_name'];
        $product_price = $row['product_price'];
        $product_quantity = $row['product_quantity'];
        $product_sub_type = $row['product_sub_type'];
        $product_des = $row['product_description'];
        $product_size = $row['product_size'];
        $product_trademark = $row['product_trademark'];
        $product_type = $row['product_type'];

        $sql_images = "SELECT product_image FROM product_images WHERE product_id = '$id'";
        $result_images = mysqli_query($conn, $sql_images);
        $images = "";
        if (mysqli_num_rows($result_images) > 1) {
            for($i = 0; $i < mysqli_num_rows($result_images); $i++) {
                if($i == mysqli_num_rows($result_images) - 1) {
                    $images .= mysqli_fetch_assoc($result_images)['product_image'];
                } else {
                    $images .= mysqli_fetch_assoc($result_images)['product_image'] . ","; 
                }
            }
        } else {
            $images = mysqli_fetch_assoc($result_images)['product_image'];
        }
        $conn->close();
    } else {
        echo '<script>alert("Sản phẩm không tồn tại"); window.location.href = "/kygui/src/admin/pages/ViewProduct.php";</script>';
    }
}

?>
<style>
    input[type='number'] {
        -moz-appearance: textfield;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }
</style>

<body class="">
    <div class="container-scroller">
        <?php include '../components/nav.php' ?>
        <div class="container-fluid page-body-wrapper">
            <?php include '../components/side_bar.php' ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row" style="justify-content: center;">
                        <div class="col-md-8 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Nhập thông tin sản phẩm</h4>
                                    <p class="card-description">
                                        Chi tiết về sản phẩm
                                    </p>
                                    <form class="forms-sample" action="/kygui/src/admin/controllers/add_product.php" method="post">
                                        <div class="form-group">
                                            <label for="name_product">Tên sản phẩm</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="text" class="form-control" id="name_product" placeholder="Tên sản phẩm" name="name_product" value="' . $product_name . '" required>';
                                            } else {
                                                echo '<input type="text" class="form-control" id="name_product" placeholder="Tên sản phẩm" name="name_product" required>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Giá sản phẩm</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="number" min="1000" class="form-control" id="price" name="price" value="' . $product_price . '" required>';
                                            } else {
                                                echo '<input type="number" min="1000" class="form-control" id="price" name="price" required>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">Số lượng</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="number" min="0" max="100" class="form-control" id="quantity" name="quantity" value="' . $product_quantity . '" required>';
                                            } else {
                                                echo '<input type="number" min="0" max="100" class="form-control" id="quantity" name="quantity" required>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Loại sản phẩm</label>
                                            <select class="form-control" name="categories">
                                                <?php
                                                $array = array("Chân váy", "Quần", "Áo", "Váy đầm", "Set đồ",  "Khác");
                                                if (isset($_GET['id'])) {
                                                    foreach ($array as $value) {
                                                        if ($value == $product_type) {
                                                            echo '<option value="' . $value . '" selected>' . $value . '</option>';
                                                        } else {
                                                            echo '<option value="' . $value . '">' . $value . '</option>';
                                                        }
                                                    }
                                                } else {
                                                    foreach ($array as $value) {
                                                        echo '<option value="' . $value . '">' . $value . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="type">Danh mục phụ</label>
                                            <select class="form-control" name="sub_categories">
                                                <?php
                                                if (isset($_GET['id'])) {
                                                    if ($product_sub_type == 'Nam') {
                                                        echo '<option value="Nam" selected>Nam</option>';
                                                        echo '<option value="Nữ">Nữ</option>';
                                                    } else {
                                                        echo '<option value="Nam">Nam</option>';
                                                        echo '<option value="Nữ" selected>Nữ</option>';
                                                    }
                                                } else {
                                                    echo '<option value="Nam">Nam</option>';
                                                    echo '<option value="Nữ">Nữ</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="size">Loại size</label>
                                            <select class="form-control" name="size">
                                                <?php
                                                $array = array("S", "M", "XL", "XXL");
                                                if (isset($_GET['id'])) {
                                                    foreach ($array as $value) {
                                                        if ($value == $product_size) {
                                                            echo '<option value="' . $value . '" selected>' . $value . '</option>';
                                                        } else {
                                                            echo '<option value="' . $value . '">' . $value . '</option>';
                                                        }
                                                    }
                                                } else {
                                                    foreach ($array as $value) {
                                                        echo '<option value="' . $value . '">' . $value . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="trademark">Thương hiệu</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<input type="text" class="form-control" id="trademark" name="trademark" value="' . $product_trademark . '" required>';
                                            } else {
                                                echo '<input type="text" class="form-control" id="trademark" name="trademark" required>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="des">Giới thiệu sản phẩm</label>
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo '<textarea class="form-control" id="des" name="des" rows="4" style="height: 150px;" required>' . $product_des . '</textarea>';
                                            } else {
                                                echo '<textarea class="form-control" id="des" name="des" rows="4" style="height: 150px;" required></textarea>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="des">Hình ảnh sản phẩm</label>
                                            <div style="display: flex; margin: 10px 0;" id="box_image">
                                                <?php
                                                if (isset($_GET['id'])) {
                                                    echo '<input type="hidden" id="multi_file" name="multi_file" value="' . $images . '">';
                                                } else {
                                                    echo '<input type="hidden" id="multi_file" name="multi_file">';
                                                }
                                                ?>
                                            </div>
                                            <button id="upload_widget" class="btn btn-light mt-2 " type="button">
                                                Tải ảnh lên
                                            </button>
                                        </div>
                                        <?php
                                        if (isset($_GET['id'])) {
                                            echo '<button type="submit" id="submit" class="btn btn-primary me-2">Cập nhật</button>';
                                            echo '<input type="hidden" name="action" value="update">';
                                            echo '<input type="hidden" name="id" value="' . $id . '">';
                                        } else {
                                            echo '<button type="submit" id="submit" class="btn btn-primary me-2">Thêm sản phẩm</button>';
                                        }
                                        ?>

                                        <script>
                                            const cloudName = "dcweof28t";
                                            const uploadPreset = "uwkwlwgp";
                                            document.getElementById("upload_widget").addEventListener(
                                                "click",
                                                function() {
                                                    myWidget.open();
                                                },
                                                false
                                            );
                                            const myWidget = cloudinary.createUploadWidget({
                                                    cloudName: cloudName,
                                                    uploadPreset: uploadPreset
                                                },
                                                (error, result) => {
                                                    if (!error && result && result.event === "success") {
                                                        const box_image = document.getElementById("box_image");
                                                        //add button to remove image on image box
                                                        const div = document.createElement("div");
                                                        div.style.display = "flex";
                                                        div.style.margin = "10px 0";

                                                        const icon = document.createElement("i");
                                                        icon.className = "mdi mdi-close";
                                                        icon.style.fontSize = "20px";
                                                        icon.style.cursor = "pointer";
                                                        icon.style.position = "absolute";
                                                        icon.style.top = "0";
                                                        icon.style.right = "0";
                                                        icon.style.marginRight = "5px";
                                                        icon.addEventListener("click", () => {
                                                            const input = document.getElementById("multi_file");
                                                            const images = input.value.split(",");
                                                            const index = images.indexOf(result.info.secure_url);
                                                            images.splice(index, 1);
                                                            input.value = images.join(",");
                                                            div.remove();
                                                        });
                                                        div.appendChild(icon);

                                                        const img = document.createElement("img");
                                                        img.src = result.info.secure_url;
                                                        img.style.height = "100px";
                                                        img.style.width = "150px";
                                                        img.style.borderRadius = "10px";
                                                        img.style.marginRight = "10px";
                                                        div.appendChild(img);
                                                        box_image.appendChild(div);

                                                        const input = document.getElementById("multi_file");
                                                        input.value += result.info.secure_url + ",";
                                                    }
                                                }
                                            );
                                            const btn_submit = document.getElementById("submit");
                                            btn_submit.addEventListener("click", (e) => {
                                                const input = document.getElementById("multi_file");
                                                if (input.value === "") {
                                                    e.preventDefault();
                                                    alert("Vui lòng chọn hình ảnh sản phẩm");
                                                    return;
                                                }
                                            });
                                            <?php
                                            if (isset($_GET['id'])) {
                                                echo 'const images = "' . $images . '".split(",");';
                                                echo 'const box_image = document.getElementById("box_image");';
                                                echo 'console.log(images);';
                                                echo 'images.forEach(image => {';
                                                echo 'const div = document.createElement("div");';
                                                echo 'div.style.position = "relative";';
                                                echo 'div.style.display = "flex";';
                                                echo 'div.style.margin = "10px 0";';
                                                echo 'const icon = document.createElement("i");';
                                                echo 'icon.className = "mdi mdi-close";';
                                                echo 'icon.style.fontSize = "20px";';
                                                echo 'icon.style.cursor = "pointer";';
                                                echo 'icon.style.position = "absolute";';
                                                echo 'icon.style.top = "-10px";';
                                                echo 'icon.style.right = "0";';

                                                echo 'icon.style.marginRight = "5px";';
                                                echo 'icon.addEventListener("click", () => {';
                                                echo 'const input = document.getElementById("multi_file");';
                                                echo 'const images = input.value.split(",");';
                                                echo 'const index = images.indexOf(image);';
                                                echo 'images.splice(index, 1);';
                                                echo 'input.value = images.join(",");';
                                                echo 'div.remove();';
                                                echo '});';
                                                echo 'div.appendChild(icon);';
                                                echo 'const img = document.createElement("img");';
                                                echo 'img.src = image;';
                                                echo 'img.style.height = "100px";';
                                                echo 'img.style.width = "150px";';
                                                echo 'img.style.borderRadius = "10px";';
                                                echo 'img.style.marginRight = "10px";';
                                                echo 'div.appendChild(img);';
                                                echo 'box_image.appendChild(div);';
                                                echo '});';
                                            }
                                            ?>
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include '../components/footer.php'; ?>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
</body>