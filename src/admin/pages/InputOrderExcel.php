<?php include '../components/header.php' ?>
<?php
include '../../config/connectDB.php';
?>
<style>
    .md-i:hover {
        color: #007bff;
    }

    .box-excel {
        width: 50%;
        height: 14rem;
        border: 1px dashed black;
        border-radius: 0.25rem;
        position: relative;
    }

    .be001 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .uploadExcel {
        opacity: 0;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        cursor: pointer;
    }

    .ul001 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>

<body class="">
    <div class="container-scroller">
        <?php include '../components/nav.php' ?>
        <div class="container-fluid page-body-wrapper">
            <?php include '../components/side_bar.php' ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="home-tab">
                        <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                            <ul class="nav nav-tabs" role="tablist">
                            </ul>
                            <div>
                                <div class="btn-wrapper">
                                    <a href="/kygui/sample_form.xlsx" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Tải file mẫu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Nhập đơn hàng bằng file</h4>
                                    <div>
                                        <div style="display: flex; justify-content: center; height: 24rem; align-items: center;">
                                            <div id="box-excel" class="box-excel">
                                                <div class="be001">
                                                    <img src="/kygui/src/admin/assets/images/upload.svg" alt="upload" style="width: 2rem; vertical-align: middle;">
                                                    <label for="uploadExcel" style="font-size: 1.125rem; line-height: 1.75rem; text-align: center; letter-spacing: 0.1em;">Click or drop file excel here
                                                    </label>
                                                    <span style="line-height: 13px; letter-spacing: 1px; font-size: 0.875rem;">(.xlsx, .xls, .csv)</span>
                                                </div>
                                                <input type="file" id="uploadExcel" accept=".xlsx, .xls, .csv" class="uploadExcel" />
                                            </div>
                                        </div>
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