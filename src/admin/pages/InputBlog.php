<?php include '../components/header.php' ?>
<?php

if (isset($_GET['id'])) {
    include "../../config/connectDB.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM blogs WHERE blog_id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['blog_title'];
        $des = $row['blog_des'];
        $content = $row['blog_content'];
        $image = $row['blog_image'];
        $conn->close();
    } else {
        echo '<script>alert("Bài viết không tồn tại"); window.location.href = "/kygui/src/admin/pages/ViewBlog.php";</script>';
    }
}

?>

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
                                    <h4 class="card-title">Bài viết</h4>
                                    <p class="card-description">
                                        <?php
                                        if (isset($title)) {
                                            echo 'Chỉnh sửa bài viết';
                                        } else {
                                            echo 'Nhập bài viết mới';
                                        }
                                        ?>
                                    </p>
                                    <form class="forms-sample" action="/kygui/src/admin/controllers/post_blog.php" method="post">
                                        <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                                            <div style="width: 60%;">
                                                <label for="title">Tiêu đề</label>
                                                <?php
                                                if (isset($title)) {
                                                    echo '<input type="text" class="form-control" id="title" required placeholder="Tiêu đề" name="title" value="' . $title . '">';
                                                } else {
                                                    echo '<input type="text" class="form-control" id="title" required placeholder="Tiêu đề" name="title">';
                                                }
                                                ?>
                                            </div>
                                            <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 35%;">
                                                <?php
                                                if (isset($title)) {
                                                    echo '<img src="' . $image . '" alt="Avatar" id="avt" style="height: 100px; width: 200px; border-radius: 10px;">';
                                                    echo '<input type="text" hidden id="avtH" name="avt" value="' . $image . '">';
                                                } else {
                                                    echo '<img src="/kygui/src/admin/assets/images/background.jpg" alt="Avatar" id="avt" style="height: 100px; width: 200px; border-radius: 10px;">';
                                                    echo '<input type="text" hidden id="avtH" name="avt" value="/kygui/src/admin/assets/images/background.jpg">';
                                                }
                                                ?>
                                                <button id="upload_widget" class="btn btn-light mt-2 " type="button">
                                                    Tải ảnh lên
                                                </button>
                                            </div>
                                            <script>
                                                const cloudName = "dcweof28t";
                                                const uploadPreset = "uwkwlwgp";
                                                const myWidget = cloudinary.createUploadWidget({
                                                        cloudName: cloudName,
                                                        uploadPreset: uploadPreset,
                                                        resource_type: 'image'
                                                    },
                                                    (error, result) => {
                                                        if (!error && result && result.event === "success") {
                                                            document
                                                                .getElementById("avt")
                                                                .setAttribute("src", result.info.secure_url);
                                                            document
                                                                .getElementById("avtH")
                                                                .setAttribute("value", result.info.secure_url);
                                                        }
                                                    }
                                                );

                                                document.getElementById("upload_widget").addEventListener(
                                                    "click",
                                                    function() {
                                                        myWidget.open();
                                                    },
                                                    false
                                                );
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="des">Mô tả ngắn</label>
                                            <?php
                                            if (isset($title)) {
                                                echo '<textarea type="text" class="form-control" required id="des" placeholder="Mô tả ngắn" name="des" style="height: 150px;">' . $des . '</textarea>';
                                            } else {
                                                echo '<textarea type="text" class="form-control" required id="des" placeholder="Mô tả ngắn" name="des" style="height: 150px;"></textarea>';
                                            }
                                            ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="editor">Nội dung</label>
                                            <input id="editor" name="content" required value=""></input>
                                        </div>
                                        <style>
                                            .ck-editor__editable[role="textbox"] {
                                                height: 500px;
                                            }

                                            .ck-content .image {
                                                max-width: 80%;
                                                margin: 20px auto;
                                            }
                                        </style>
                                        <!-- <button type="submit" id="submit" class="btn btn-primary me-2">Đăng bài</button> -->
                                        <?php
                                        if (isset($title)) {
                                            echo '<button type="submit" id="submit" class="btn btn-primary me-2">Cập nhật</button>';
                                            echo '<input type="text" hidden name="id" value="' . $id . '">';
                                            echo '<input type="text" hidden name="action" value="update">';
                                        } else {
                                            echo '<button type="submit" id="submit" class="btn btn-primary me-2">Đăng bài</button>';
                                            echo '<input type="text" hidden name="id" value="' . $id . '">';
                                            echo '<input type="text" hidden name="action" value="create">';
                                        }
                                        ?>
                                        <script>
                                            document.querySelector("#submit").addEventListener("click", function(e) {
                                                document.querySelector("#editor").value = document.querySelector(".ck-editor__editable").innerHTML;
                                                if (document.querySelector("#avtH").value === "/kygui/src/admin/assets/images/background.jpg") {
                                                    e.preventDefault();
                                                    alert("Ảnh đại diện không được để trống");
                                                    return;
                                                }
                                                if (document.querySelector("#editor").value === "") {
                                                    e.preventDefault();
                                                    alert("Nội dung không được để trống");
                                                    return;
                                                }
                                            });
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    ClassicEditor
                        .create(document.querySelector('#editor'), {
                            
                        })
                        .then(editor => {
                            editor.setData(`<?php if (isset($content)) {
                                                echo $content;
                                            } else {
                                                echo '';
                                            } ?>`);
                            editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                                //open widget cloudinary to upload image and set url to src
                                return {
                                    upload: function() {
                                        return new Promise((resolve, reject) => {
                                            loader.file.then(file => {
                                                const data = new FormData();
                                                data.append('file', file);
                                                data.append('upload_preset', 'uwkwlwgp');
                                                fetch('https://api.cloudinary.com/v1_1/dcweof28t/image/upload', {
                                                        method: 'POST',
                                                        body: data
                                                    })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        resolve({
                                                            default: data.secure_url
                                                        });
                                                    })
                                                    .catch(error => {
                                                        console.error(error);
                                                    });
                                            });
                                        });
                                    }
                                };

                            };
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>
                <?php include '../components/footer.php'; ?>
            </div>
        </div>
    </div>
</body>