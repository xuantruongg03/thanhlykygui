<script>
    var a = document.querySelectorAll(".js-show-modal4");
    a.forEach(element => {
        element.addEventListener("click", function(e) {
            e.preventDefault();
            var modal = document.getElementById('modal1-' + this.id);
            modal.classList.add("show-modal1");
            console.log(this.id);

        });
    });

    function setNotifyCart() {
        let cartCookie = getCookie("cart");
        let totalQuantity = 0;
        if (cartCookie) {
            // Nếu có, phân tích cú pháp JSON để lấy danh sách sản phẩm
            var cartItems = JSON.parse(cartCookie);
            cartItems.forEach(function(item) {
                totalQuantity += item.quantity;
            });
        }
        document.querySelectorAll(".cartd").forEach((e) => {
            e.dataset.notify = totalQuantity;
        });
    }

    var b = document.querySelectorAll(".js-addcart-detai4");
    b.forEach(element => {
        element.addEventListener("click", function(e) {
            e.preventDefault();
            var idct = this.id;
            var id = idct.split("ac")[1];
            var name = document.getElementById("product-ac" + id).value;
            var price = document.getElementById("price-ac" + id).value;
            var image = document.getElementById("image-ac" + id).value;
            var quantity = document.getElementById("quantity-ac" + id).value;

            // Kiểm tra xem cookie "cart" đã tồn tại hay chưa
            var cartCookie = getCookie('cart');
            var cartItems = cartCookie ? JSON.parse(cartCookie) : [];

            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
            var existingItem = cartItems.find(item => item.id === id);
            if (existingItem) {
                existingItem.quantity += parseInt(quantity);
            } else {
                cartItems.push({
                    id: id,
                    name: name,
                    price: price,
                    image: image,
                    quantity: parseInt(quantity)
                });
            }

            // Lưu thông tin giỏ hàng vào cookie
            var now = new Date();
            var expirationDate = new Date(now.getTime() + 30 * 24 * 60 * 60 * 1000);
            document.cookie = "cart=" + JSON.stringify(cartItems) + "; expires=" + expirationDate.toUTCString() + "; path=/";
            setNotifyCart();
            swal(name, "is added to cart !", "success");
        });
    });


    function getCookie(name) {
        var value = "; " + document.cookie;
        var parts = value.split("; " + name + "=");
        if (parts.length === 2) return parts.pop().split(";").shift();
    }
    window.addEventListener('load', function() {
        setNotifyCart();
        refreshCart();
    });
    document.querySelector('.js-show-cart1').addEventListener('click', function() {
        refreshCart();
        document.querySelector('.js-panel-cart').classList.add('show-header-cart');
    });





    function displayCart() {
        var tbody = document.querySelector('.table-shopping-cart');
        if (tbody != null) {
            var subtt = document.querySelector('.stt-tp');
            tbody.innerHTML = "<tr class='table_head'> <th class='column-1'>Sản phẩm</th><th class='column-2'></th><th class='column-3'>Giá</th><th class='column-4'>Số lượng</th><th class='column-5'>Tổng tiền</th></tr>";
            var cartCookie = getCookie('cart');
            var total = 0;

            if (cartCookie) {
                var cartItems = JSON.parse(cartCookie);
                cartItems.forEach(function(item) {
                    // Tạo một hàng mới trong bảng
                    var tr = document.createElement('tr');
                    tr.className = 'table_row';

                    // Tạo các ô dữ liệu cho mỗi mặt hàng
                    var td1 = document.createElement('td');
                    td1.className = 'column-1';
                    var divImg = document.createElement('div');
                    divImg.className = 'how-itemcart1';
                    var img = document.createElement('img');
                    img.src = item.image;
                    img.alt = 'Product Image';
                    divImg.appendChild(img);
                    td1.appendChild(divImg);
                    tr.appendChild(td1);

                    var td2 = document.createElement('td');
                    td2.className = 'column-2';
                    td2.textContent = item.name;
                    tr.appendChild(td2);

                    var td3 = document.createElement('td');
                    td3.className = 'column-3';
                    td3.textContent = number_format(item.price, 0, '', '.') + " VNĐ";
                    tr.appendChild(td3);

                    var td4 = document.createElement('td');
                    td4.className = 'column-4';
                    var divWrapNumProduct = document.createElement('div');
                    divWrapNumProduct.className = 'wrap-num-product flex-w m-l-auto m-r-0';
                    var divBtnNumProductDown = document.createElement('div');
                    divBtnNumProductDown.className = 'btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m';
                    var iMinus = document.createElement('i');
                    iMinus.className = 'fs-16 zmdi zmdi-minus';
                    divBtnNumProductDown.appendChild(iMinus);
                    divWrapNumProduct.appendChild(divBtnNumProductDown);

                    var inputNumProduct = document.createElement('input');
                    inputNumProduct.className = 'mtext-104 cl3 txt-center num-product num-upds';
                    inputNumProduct.type = 'number';
                    inputNumProduct.id = "hl" + item.id;
                    inputNumProduct.name = 'num-product1';
                    inputNumProduct.value = item.quantity;
                    divWrapNumProduct.appendChild(inputNumProduct);

                    var divBtnNumProductUp = document.createElement('div');
                    divBtnNumProductUp.className = 'btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m';
                    var iPlus = document.createElement('i');
                    iPlus.className = 'fs-16 zmdi zmdi-plus';
                    divBtnNumProductUp.appendChild(iPlus);
                    divWrapNumProduct.appendChild(divBtnNumProductUp);
                    td4.appendChild(divWrapNumProduct);
                    tr.appendChild(td4);

                    var td5 = document.createElement('td');
                    td5.className = 'column-5';
                    td5.textContent = number_format(item.price * item.quantity, 0, '', '.') + " VNĐ";
                    tr.appendChild(td5);

                    // Thêm hàng vào bảng
                    tbody.appendChild(tr);
                });
                $('.btn-num-product-down').on('click', function() {
                    var numProduct = Number($(this).next().val());
                    if (numProduct > 0) $(this).next().val(numProduct - 1);
                });

                $('.btn-num-product-up').on('click', function() {
                    var numProduct = Number($(this).prev().val());
                    $(this).prev().val(numProduct + 1);
                });
            }
            subtt.innerHTML = document.querySelector(".total-cart-n").innerHTML.split("Tổng tiền: ")[1];
            caculateTotal();

            var update = document.querySelector('.update-cart-bt');
            update.addEventListener('click', function() {
                document.querySelectorAll(".num-upds").forEach(e => {
                    var id = e.id.split("hl")[1];
                    var quantity = parseInt(e.value);
                    //get product on cookie
                    var cartCookie = getCookie('cart');
                    var cartItems = cartCookie ? JSON.parse(cartCookie) : [];
                    var existingItem = cartItems.find(item => item.id === id);

                    if (existingItem) {
                        if (quantity > 0) {
                            existingItem.quantity = quantity;
                        } else {
                            cartItems = cartItems.filter(item => item.id !== id);
                        }
                    }

                    // Lưu thông tin giỏ hàng vào cookie
                    var now = new Date();
                    var expirationDate = new Date(now.getTime() + 30 * 24 * 60 * 60 * 1000);
                    document.cookie = "cart=" + JSON.stringify(cartItems) + "; expires=" + expirationDate.toUTCString() + "; path=/";
                    setNotifyCart();
                    refreshCart();
                });
            });



        }
    }



    function caculateTotal() {
        let n = document.querySelector(".tt-prc");
        let ship = 0;
        if(document.getElementById("ship").value){
            if(document.getElementById("ship").value == "Giao hàng tiết kiệm"){
                ship = 25000;
            }else if(document.getElementById("ship").value == "Giao hàng nhanh"){
                ship = 45000;
            }
        }
        if (n == null) {
            return;
        }
        var total = 0;
        var cartCookie = getCookie('cart');
        if (cartCookie) {
            var cartItems = JSON.parse(cartCookie);
            cartItems.forEach(function(item) {
                total = total + item.quantity * item.price;
            });
        }
        if(total<400000){
                total = total + ship;
        }
        n.innerHTML = number_format(total, 0, '', '.') + " VNĐ";
    }
    var update = document.querySelector('.update-tt-bt');
    if (update != null) {
        update.addEventListener('click', function() {
            caculateTotal();
        });
    }


    function refreshCart() {
        // Lấy cookie "cart"
        var cartCookie = getCookie('cart');
        var total = 0;

        // Kiểm tra xem cookie "cart" có tồn tại không
        if (cartCookie) {
            // Nếu có, phân tích cú pháp JSON để lấy danh sách sản phẩm
            var cartItems = JSON.parse(cartCookie);

            // Lặp qua mỗi sản phẩm trong danh sách và hiển thị chúng
            var cartList = document.querySelector('.cart-infor-n');
            cartList.innerHTML = '';
            cartItems.forEach(function(item) {
                var li = document.createElement('li');
                li.className = 'header-cart-item flex-w flex-t m-b-12';
                var divImg = document.createElement('div');
                divImg.className = 'header-cart-item-img remove-cart-item';
                divImg.id = 'rm' + item.id;
                var img = document.createElement('img');
                img.src = item.image; // Assuming there is an 'image' property in each item
                img.alt = 'Product Image';
                divImg.appendChild(img);
                li.appendChild(divImg);
                total = total + item.quantity * item.price;
                var divTxt = document.createElement('div');
                divTxt.className = 'header-cart-item-txt p-t-8';
                var a = document.createElement('a');
                a.href = '/kygui/src/pages/product-detail.php?id=' + item.id;
                a.className = 'header-cart-item-name m-b-18 hov-cl1 trans-04';
                a.textContent = item.name; // Assuming there is a 'name' property in each item
                divTxt.appendChild(a);
                var spanInfo = document.createElement('span');
                spanInfo.className = 'header-cart-item-info';
                spanInfo.textContent = item.quantity + ' x ' + number_format(item.price, 0, '', '.') + " VNĐ"; // Assuming there are 'quantity' and 'price' properties in each item
                divTxt.appendChild(spanInfo);
                li.appendChild(divTxt);

                cartList.appendChild(li);
            });
        } else {
            // Nếu không có cookie "cart", hiển thị thông báo rằng giỏ hàng trống
            console.log("Giỏ hàng trống");
        }
        document.querySelector(".total-cart-n").innerHTML = "Tổng tiền: " + number_format(total, 0, '', '.') + " VNĐ";
        document.querySelectorAll(".remove-cart-item").forEach(e => {
            e.addEventListener("click", function() {
                var id = e.id.split("rm")[1];
                var cartCookie = getCookie('cart');
                var cartItems = cartCookie ? JSON.parse(cartCookie) : [];
                var existingItem = cartItems.find(item => item.id === id);
                if (existingItem) {
                    cartItems = cartItems.filter(item => item.id !== id);
                }
                var now = new Date();
                var expirationDate = new Date(now.getTime() + 30 * 24 * 60 * 60 * 1000);
                document.cookie = "cart=" + JSON.stringify(cartItems) + "; expires=" + expirationDate.toUTCString() + "; path=/";
                refreshCart();
                setNotifyCart();
            });
        });
        displayCart();
    }

    function number_format(number, decimals, decPoint, thousandsSep) {
        // Kiểm tra đầu vào
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousandsSep === 'undefined') ? ',' : thousandsSep,
            dec = (typeof decPoint === 'undefined') ? '.' : decPoint,
            s = '',
            toFixedFix = function(n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };

        // Tạo phần nguyên và phần thập phân
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        var re = /(-?\d+)(\d{3})/;
        while (re.test(s[0])) {
            s[0] = s[0].replace(re, '$1' + sep + '$2');
        }

        return s.join(dec);
    }
</script>

<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Câu chuyện về DEWI
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            DEWI – Nơi thời trang tái sinh
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                            Là thương hiệu thời trang ký gửi với nền tảng mua sắm trực tuyến. Với mong muốn xây dựng thời trang bền vững, tái sử dụng những món đồ tưởng chừng như đã cũ. DEWI mang đến “sự tái sinh” cho những món đồ thời trang vẫn còn GIÁ TRỊ SỬ DỤNG CAO, ở một mức giá tốt nhất cho người dùng.
                        </a>
                    </li>

                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Hỗ trợ dịch vụ
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="/kygui/src/pages/about-dewi.php" class="stext-107 cl7 hov-cl1 trans-04">
                            Câu chuyện về DEWI
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="/kygui/src/pages/policy.php" class="stext-107 cl7 hov-cl1 trans-04">
                            Chính sách thanh lý ký gửi
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="/kygui/src/pages/ship-policy.php" class="stext-107 cl7 hov-cl1 trans-04">
                            Chính sách vận chuyển
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="/kygui/src/pages/payment-policy.php" class="stext-107 cl7 hov-cl1 trans-04">
                            Chính sách đặt hàng và thanh toán
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    Kết nối với chúng tôi
                </h4>

                <p class="stext-107 cl7 size-201">
                    <strong>Thời gian nhận ký gửi: </strong> 8:00 - 17:00 hàng ngày
                </p>
                <div>
                    <p class="stext-107 cl7 size-201">
                        <span class="mdi mdi-map-marker" style="font-size: 20px; color: white; margin-right: 5px;"></span> Số 238/4 đường Thống Nhất, phường 10, quận Gò Vấp
                    </p>
                    <p class="stext-107 cl7 size-201">
                        <span class="mdi mdi-phone" style="font-size: 20px; color: white; margin-right: 5px;"></span> Điện thoại:038 2438 931
                    </p>
                    <p class="stext-107 cl7 size-201">
                        <span class="mdi mdi-email-outline" style="font-size: 20px; color: white; margin-right: 5px;"></span> Email: thanhlykyguidewi@gmail.com
                    </p>
                    <p class="stext-107 cl7 size-201">
                        <span class="mdi mdi-web" style="font-size: 20px; color: white; margin-right: 5px;"></span> Website: thanhlykyguidewi.site
                    </p>
                </div>

<div class="p-t-27">
                <a href="https://shopee.vn/thao.bap_22?gidzl=8JrzLnP3l6OdAdzM5boxOoKgVrmBMxLgQYL-N5rLw6y_T2bO2b6uFJWcSW9SLBHcFoKWKJW0H_874qwyOm" target="_blank" rel="noopener">
            <img src="https://img.icons8.com/color/48/shopee.png" alt="shopee">
          </a>

          <a href="https://www.facebook.com/NhaDewi.vn?mibextid=LQQJ4d" target="_blank" rel="noopener">
            <img src="https://img.icons8.com/color/48/facebook.png" alt="facebook">
          </a>
          <a href="https://www.instagram.com/thanhlykyguidewi2020?igsh=Ymx6OG1nYW1kN2lz" target="_blank" rel="noopener">
            <img src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new">
          </a>
          <a href="https://www.tiktok.com/@thanhlykygui_dewi?_t=8l32UMxAsja&amp;_r=1" target="_blank" rel="noopener">
            <img src="https://img.icons8.com/color/48/tiktok--v1.png" alt="tiktok--v1">
          </a>
                </div>
            </div>
        </div>

    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="zmdi zmdi-chevron-up"></i>
    </span>
</div>


<!--===============================================================================================-->
<script src="/kygui/src/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/bootstrap/js/popper.js"></script>
<script src="/kygui/src/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/select2/select2.min.js"></script>
<script>
    $(".js-select2").each(function() {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
</script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/daterangepicker/moment.min.js"></script>
<script src="/kygui/src/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/slick/slick.min.js"></script>
<script src="/kygui/src/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<script>
    $('.gallery-lb').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                enabled: true
            },
            mainClass: 'mfp-fade'
        });
    });
</script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/sweetalert/sweetalert.min.js"></script>
<script>
    $('.js-addwish-b2').on('click', function(e) {
        e.preventDefault();
    });

    $('.js-addwish-b2').each(function() {
        var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-b2');
            $(this).off('click');
        });
    });

    $('.js-addwish-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

        $(this).on('click', function() {
            swal(nameProduct, "is added to wishlist !", "success");

            $(this).addClass('js-addedwish-detail');
            $(this).off('click');
        });
    });

    /*---------------------------------------------*/

    $('.js-addcart-detail').each(function() {
        var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
        $(this).on('click', function() {
            swal(nameProduct, "is added to cart !", "success");
        });
    });
</script>
<!--===============================================================================================-->
<script src="/kygui/src/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function() {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function() {
            ps.update();
        })
    });
</script>
<!--===============================================================================================-->
<script src="/kygui/src/js/main.js"></script>