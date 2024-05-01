<?php
include '../../config/connectDB.php';
$id = $_GET['id'];
$sql = "DELETE FROM blogs WHERE blog_id = $id";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Xóa bài viết thành công')</script>";
    header("Location: /kygui/src/admin/pages/ViewBlog.php");
} else {
    echo "<script>alert('Xóa bài viết thất bại')</script>";
    header("Location: /kygui/src/admin/pages/ViewBlog.php");
}
mysqli_close($conn);
