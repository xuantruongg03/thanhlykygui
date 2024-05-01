<?php
include '../components/header.php';
if (isset($_GET['ss']) && $_GET['ss'] == 'ssno') {
    echo "
        <script>
        alert('Đăng ký thất bại');
        </script>";
}
if (isset($_GET['ss']) && $_GET['ss'] == 'ssnotk') {
    echo "
        <script>
        alert('Đăng ký thất bại... Tài khoản đã tồn tại');
        </script>";
}
//Thông báo trùng email
if (isset($_GET['ss']) && $_GET['ss'] == 'ssnoem') {
    echo "
        <script>
        alert('Đăng ký thất bại... Email đã tồn tại');
        </script>";
}
//thông báo trùng sdt
if (isset($_GET['ss']) && $_GET['ss'] == 'ssnoph') {
    echo "
        <script>
        alert('Đăng ký thất bại... Số điện thoại đã tồn tại');
        </script>";
}

?>
<script>
    document.title = "Đăng ký - Dịch vụ thanh lý ký gửi DEWI";
</script>
<section class="vh-100" style="margin-top:60px ;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="/kygui/src/images/about-02.jpg" alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;object-fit: cover; object-position: center;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <form method="post" action="/kygui/src/controler/register.php">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <div class="logo">
                                            <img src="/kygui/src/images/icons/logo.png" alt="IMG-LOGO">
                                        </div>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Đăng ký tài khoản mới</h5>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="firstname" name="firstname" class="form-control form-control-lg" required />
                                        <label class="form-label" for="firstname">Họ</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="lastname" name="lastname" class="form-control form-control-lg" required />
                                        <label class="form-label" for="lastname">Tên</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="username" name="username" class="form-control form-control-lg" required />
                                        <label class="form-label" for="username">Tên đăng nhập</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                                        <label class="form-label" for="form2Example27">Mật khẩu</label>
                                        <i class="toggle-password fas fa-eye"></i>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Đăng ký</button>
                                    </div>

                                    <a href="#!" class="small text-muted">Điều khoản sử dụng.</a>
                                    <a href="#!" class="small text-muted">Chính sách bảo mật</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../components/footer.php' ?>