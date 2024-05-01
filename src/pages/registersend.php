<?php
include '../components/header.php';


?>
<script>
    let hdmn = document.querySelectorAll(".main-menu > li");

    for (let i = 0; i < hdmn.length; i++) {
        if (i == 2) {
            hdmn[i].classList.add("active-menu");
        } else {
            hdmn[i].classList.remove("active-menu");
        }
    }
</script>
<script>
    document.title = "Đăng ký gửi hàng - Dịch vụ thanh lý ký gửi DEWI";
</script>
<main>
    <div class="container ctn-11" style="margin-top:100px;">
        <div class="hdkgn" id="go1" style="margin-top:15px;">
            KÝ GỬI TẠI DEWI – NƠI THỜI TRANG TÁI SINH
        </div>
        <ul>
            <li>Ký gửi minh bạch với báo cáo bán hàng hàng tháng, khách kí gửi có thể theo dõi đồ qua website</li>
            <li>Tỉ lệ sản phẩm bán được cao (70-100%)</li>
            <li>Cách thức đơn giản, bạn chỉ cần soạn đồ, DEWI sẽ giúp bạn tất cả các bước còn lại</li>
        </ul>
        <div class="shdkgn" id="go12">
            1. Cách thức gửi đồ
        </div>
        <p>
            <br>
            <strong>Bước 1: </strong>Điền thông tin trực tiếp vào link sau: <a href="https://forms.gle/YZMWAkasTTL67Pv18" >https://forms.gle/YZMWAkasTTL67Pv18</a> <br>
            <br>
            <strong>Bước 2: </strong>Ghi chú giá bán (đã bao gồm phí ký gửi) từng mặt hàng ra giấy và đặt cùng đồ ký gửi (nếu muốn định giá bán sản phẩm). Nếu bạn để DEWI định giá, vui lòng bỏ qua bước này. <br>
            <br>
            <strong>Bước 3: </strong>Giao trực tiếp hoặc gửi đồ qua giao hàng đến DEWI. Vui lòng ghi rõ trên kiện đồ : Số điện thoại – Tên người kí gửi (trong trường hợp không có số điện thoại và tên người gửi trên bưu kiện, DEWI sẽ không chịu trách nhiệm nếu hàng bị thất lạc). DEWI sẽ xử lý hàng và gửi xác nhận ký gửi qua email trong vòng 5 ngày làm việc.
            <br>
            <br>
            Địa chỉ nhận hàng: Số 238/4 đường Thống Nhất, phường 10, quận Gò Vấp.
            <br>
            <br>
            Thời gian nhận hàng: 8h00 – 17h00 hàng ngày (khách hàng gửi đồ sau 17h00 vui lòng liên hệ trước)
            <br><br>
            Hỗ trợ lấy hàng tại nhà:
            <br><br>
            – Khách tại các quận nội thành HCM:
            <br><br>
            DEWI hỗ trợ lấy hàng tại nhà tại các quận nội thành HCM với mức phí đồng giá 30.000VNĐ (cho gói hàng dưới 20kg). Đăng ký lấy hàng tại nhà tại <a href="">ĐÂY!</a>
            <br><br>
            <a href="/kygui/src/pages/contact.php">CLICK ĐỂ LIÊN HỆ VỚI DEWI!</a>
            <br><br>– Khách tại các quận ngoại thành và các tỉnh ngoài HCM:
            <br><br>DEWI hỗ trợ lấy hàng tại nhà qua đơn vị vận chuyển Giao hàng tiết kiệm hoặc Ahamove… Hãy liên hệ với DEWI qua hotline hoặc fanpage để được hướng dẫn.
        </p>
        <div class="shdkgn" id="go13">
            2. Chính sách ký gửi
        </div>
        <ul style="margin: 15px 0;">
            <li>
                <strong style="font-style: italic;">
                    DEWI nhận ký gửi những sản phẩm gì?
                </strong>
            </li>
        </ul>
        <p>
            DEWI nhận ký gửi thời trang nữ (quần áo, túi xách, giày dép, thắt lưng…). DEWI không nhận ký gửi đồ lót, trang sức và mỹ phẩm.
            <br>
            <br>
            DEWI sẽ tiến hành sàng lọc hàng khi đồ được gửi đến để đảm bảo độ mới và sự phù hợp của sản phẩm. DEWI có thể từ chối nhận các món đồ tuy còn mới nhưng khó có khả năng bán được (do trái mùa, lỗi mốt, lượng hàng tồn các sản phẩm tương tự lớn). Khách ký gửi vui lòng giặt sạch đồ và lau chùi vết bẩn trên sản phẩm trước khi gửi đồ. HIện DEWI đã nhận các sản phẩm thu đông và vẫn tiếp tục nhận đồ hè.
        </p>
        <ul style="margin: 15px 0;">
            <li>
                <strong style="font-style: italic;">
                    Phí ký gửi là bao nhiêu?
                </strong>
            </li>
        </ul>
        <p>
            Phí kí gửi: <strong>25% – 30%</strong> giá bán sản phẩm với tùy thuộc vào <strong>sản phẩm</strong>. Nếu hàng được bán sau sale thì phí kí gửi sẽ tính trên giá bán sau sale.
            <br><br>
            (Ví dụ: Bạn có một chiếc váy Zara muốn bán với giá 100.000VNĐ, nếu sản phẩm được bán thành công ở mức giá 100.000 bạn sẽ nhận về 75.000 và DEWI thu 25.000 phí ký gửi. Nếu sản phẩm không phải là hàng có thương hiệu, bạn sẽ nhận về 70.000 và DEWI thu 30.000 phí ký gửi)
            <br><br>
            Chú ý: Khách ký gửi không phải trả phí ký gửi nếu sản phẩm không bán được.
        </p>
        <ul style="margin: 15px 0;">
            <li>
                <strong style="font-style: italic;">
                    Khi nào bạn được thanh toán tiền?
                </strong>
            </li>
        </ul>
        <p>
            Đối với những hàng bán được trong tháng, DEWI sẽ gửi báo cáo qua email và thanh toán qua chuyển khoản trước ngày 18 của tháng kế tiếp. VD: đồ được bán trong tháng 2 và không có trả hàng thì sẽ được báo cáo và thanh toán trước ngày 18 tháng 3.
            <br><br>
            Với hàng hoá đang trong thời gian ký gửi, khách muốn lấy về trước hạn DEWI sẽ thu phí xử lý lấy hàng trước hạn là 20.000đ/sp.
        </p>
        <ul style="margin: 15px 0;">
            <li>
                <strong style="font-style: italic;">
                    Thời hạn ký gửi là bao lâu?
                </strong>
            </li>
        </ul>
        <p>
            Thời hạn ký gửi là 60 ngày. Trong trường hợp kho còn chỗ chứa, thời gian ký gửi có thể kéo dài đến 100 ngày và khách hàng không phải trả thêm bất kỳ khoản phí lưu kho nào. Khi sản phẩm hết hạn ký gửi, DEWI sẽ gửi thông báo hết hạn ký gửi qua email. <strong>Sau 72h</strong> kể từ khi gửi thông báo mà không có bất kì liên hệ nào từ khách kí gửi về việc xử lý số hàng hết hạn này sẽ thuộc quyền sở hữu của DEWI. DEWI không hỗ trợ giải quyết các khiếu nại liên quan khi sản phẩm ký gửi đã hết hạn quá 30 ngày.
        </p>
        <ul style="margin: 15px 0;">
            <li>
                <strong style="font-style: italic;">
                    Những sản phẩm không được nhận ký gửi sẽ được xử lý như thế nào?
                </strong>
            </li>
        </ul>
        <p>
            Bạn có thể nhận lại các sản phẩm không được nhận ký gửi bằng cách đến lấy trực tiếp hoặc DEWI gửi giao hàng. Trong trường hợp bạn không muốn nhận lại đồ, DEWI sẽ xử lý số hàng (từ thiện, tái chế, gửi đến chương trình I/CO). Sau 72h kể từ khi gửi thông báo qua Email danh sách hàng nhận kí gửi mà không có bất kỳ liên hệ nào từ khách hàng yêu cầu gửi trả hàng không nhận kí gửi thì số hàng đó sẽ do DEWI toàn quyền xử lý.
        </p>
        <div class="shdkgn" id="go14" style="text-align: center; margin:0 10px; font-style: italic;">
            Tỉ lệ bán được sản phẩm là bao nhiêu?
        </div>
        <p style="margin:0 10px;">
            <br>
            Quy trình sàng lọc theo thị hiếu thị trường, chính sách giảm giá và chiến lược đẩy bán của DEWI giúp ít nhất 70% các sản phẩm ký gửi được bán thành công khi kết thúc thời gian ký gửi. Việc ký gửi tủ đồ giúp mỗi khách hàng của DEWI có thêm 558.000 VNĐ mỗi tháng từ những món đồ không dùng đến.
            <br><br>
        </p>
        <p style="margin:0 10px;">
            ♻️ TUẦN HOÀN TỦ ĐỒ không chỉ là một thói quen tiêu dùng hiệu quả về chi phí, giúp những món đồ “cũ người mới ta” tìm được một vòng đới mới mà còn là một phần để tạo ra SỰ BỀN VỮNG trong thời trang.
            <br><br>
        </p>
        <div class="hdkgn" id="go15">
            ĐĂNG KÝ GỬI HÀNG:
        </div>
        <p>
            <br>Link đăng ký gửi hàng: <a href="https://forms.gle/YZMWAkasTTL67Pv18">https://forms.gle/YZMWAkasTTL67Pv18</a>
        </p>
    </div>


    <script>
        var hide = document.querySelector(".ctkga");
        let ctnkg = document.querySelector(".kgdt");
        console.log(hide);
        hide.addEventListener('click', function(e) {
            e.preventDefault();
            if (hide.classList.contains("hdn")) {
                var chilkg = document.querySelectorAll(".ahdn");
                chilkg.forEach(function(item) {
                    item.style.display = "none";
                });
                ctnkg.classList.remove("col-md-6");
                ctnkg.classList.remove("col-sm-6");
                ctnkg.classList.add("col-md-2");
                ctnkg.classList.add("col-sm-2");
                ctnkg.style.padding = "10px";
                hide.classList.remove("hdn");
                hide.innerHTML = "Show";
            } else {
                var chilkg = document.querySelectorAll(".ahdn");
                chilkg.forEach(function(item) {
                    item.style.display = "inline";
                });
                ctnkg.classList.remove("col-md-2");
                ctnkg.classList.remove("col-sm-2");
                ctnkg.classList.add("col-md-6");
                ctnkg.classList.add("col-sm-6");
                hide.classList.add("hdn");
                ctnkg.style.padding = "30px";
                hide.innerHTML = "Hide";
            }
        });
    </script>




</main>

<?php include '../components/footer.php' ?>