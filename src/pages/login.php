<?php
include '../components/header.php';
if (isset($_GET['ss']) && $_GET['ss'] == 'ssyes') {
  echo "
        <script>
        alert('Đăng ký thành công');
        </script>";
}
if (isset($_GET['ss']) && $_GET['ss'] == 'ssnomk') {
  echo "
        <script>
        alert('Đăng nhập thất bại!! sai mật khẩu');
        </script>";
}
if (isset($_GET['ss']) && $_GET['ss'] == 'ssnotk') {
  echo "
        <script>
        alert('Đăng nhập thất bại!! sai tài khoản');
        </script>";
}
?>
<style>
  input::-ms-reveal,
      input::-ms-clear {
        display: none;
      }
</style>

<script>
  document.title = "Đăng nhập - Dịch vụ thanh lý ký gửi DEWI";
</script>
<section class="" style="margin-top:50px; margin-bottom:50px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="/kygui/src/images/product-13.jpg" alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;object-fit: cover; object-position: center;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post" action="/kygui/src/controler/login.php">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <div class="logo">
                      <img src="/kygui/src/images/icons/logo.png" alt="IMG-LOGO">
                    </div>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Đăng nhập</h5>

                  <div class="form-outline mb-4">
                    <input type="text" name="username" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Tên tài khoản</label>
                  </div>

                  <div class="form-outline mb-4" style="position:relative;">
                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Mật khẩu</label>
                    <i class="toggle-password mdi mdi-eye-outline" style="position: absolute; top: 35%; right: 10px; transform: translateY(-50%); cursor: pointer; font-size:24px;" onclick="togglePasswordVisibility()"></i>
                  </div>
                  <script>
                    function togglePasswordVisibility() {
    var passwordInput = document.getElementById("form2Example27");
    var icon = document.querySelector(".toggle-password");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.remove("mdi-eye-outline");
        icon.classList.add("mdi-eye-off-outline");
    } else {
        passwordInput.type = "password";
        icon.classList.remove("mdi-eye-off-outline");
        icon.classList.add("mdi-eye-outline");
    }
}
                  </script>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Đăng nhập</button>
                  </div>

                  <a class="small text-muted" href="#!">Quên mật khẩu?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Chưa có tài khoản? <a href="/kygui/src/pages/register.php" style="color: #393f81;"> Đăng ký ở đây!!!</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
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