<?php
include '../../config/connectDB.php';
if (isset($_POST['title']) && isset($_POST['des']) && isset($_POST['content']) && isset($_POST['avt']) && isset($_POST['action'])) {
    $title = $_POST['title'];
    $des = $_POST['des'];
    $content = $_POST['content'];
    $image = $_POST['avt'];
    if($_POST['action'] == 'update') {
        $sql_update = "UPDATE blogs SET blog_title='$title', blog_des='$des', blog_content='$content', blog_image='$image' WHERE blog_id='$_POST[id]'";
        if (mysqli_query($conn, $sql_update)) {
            echo "<script>alert('Cập nhât thành công')</script>";
        } else {
            echo "<script>alert('Cập nhât thành công')</script>";
        }
        echo "<script>window.location.href = '/kygui/src/admin/pages/ViewBlog.php'</script>";
        return;
    }
    $sql = "INSERT INTO blogs (blog_title, blog_des, blog_content, blog_image) VALUES ('$title', '$des', '$content', '$image')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Đăng bài thành công')</script>";
    } else {
        echo "<script>alert('Đăng bài thất bại')</script>";
    }
    echo "<script>window.location.href = '/kygui/src/admin/pages/ViewBlog.php'</script>";
}
mysqli_close($conn);
