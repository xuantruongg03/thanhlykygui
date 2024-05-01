<?php include '../components/header.php' ?>
<?php
include '../../config/connectDB.php';
?>
<style>
    .md-i:hover {
        color: #007bff;
    }
</style>

<body class="">
    <div class="container-scroller">
        <?php include '../components/nav.php' ?>
        <div class="container-fluid page-body-wrapper">
            <?php include '../components/side_bar.php' ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Danh sách sản phẩm</h4>
                                    <p class="card-description">
                                        Chi tiết về sản phẩm
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Tiêu đề</th>
                                                    <th>Thời gian cập nhật</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * FROM blogs";
                                                $result = mysqli_query($conn, $sql);
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row['blog_title']; ?></td>
                                                        <td><?php echo $row['blog_updated_at']; ?></td>
                                                        <td>
                                                            <a href="/kygui/src/admin/pages/InputBlog.php?id=<?php echo $row['blog_id']; ?>"><i class="mdi mdi-pencil md-i" style="font-size: 20px;"></i></a>
                                                            <a href="/kygui/src/admin/controllers/delete_blog.php?id=<?php echo $row['blog_id']; ?>"><i class="mdi mdi-delete md-i" style="font-size: 20px;"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    $i++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
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