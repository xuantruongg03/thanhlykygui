<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="/kygui/src/admin/index.php">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Chức năng</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements-1" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Đơn hàng</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements-1">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/kygui/src/admin/pages/InputOrder.php">Form nhập đơn hàng</a></li>
                     <li class="nav-item"> <a class="nav-link" href="/kygui/src/admin/pages/InputOrderExcel.php">Nhập đơn hàng bằng file</a></li> 
                    <li class="nav-item"> <a class="nav-link" href="/kygui/src/admin/pages/ViewOrder.php">Xem đơn hàng nhập</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon mdi mdi-list-box"></i>
                <span class="menu-title">Sản phẩm</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/kygui/src/admin/pages/InputProduct.php">Form nhập sản phẩm</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/kygui/src/admin/pages/ViewProduct.php">Xem sản phẩm</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-post"></i>
                <span class="menu-title">Bài viết</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="/kygui/src/admin/pages/InputBlog.php">Form viết bài</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/kygui/src/admin/pages/ViewBlog.php">Xem bài viết</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables-2" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Dữ liệu khác</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables-2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="/kygui/src/admin/pages/ViewOrderSell.php">Xem đơn đặt hàng</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/kygui/index.php" style="background-color: #F4F5F7;">
                <i class="menu-icon mdi mdi-arrow-left"></i>
                <span class="menu-title">Trở lại</span>
            </a>
        </li>
    </ul>
</nav>