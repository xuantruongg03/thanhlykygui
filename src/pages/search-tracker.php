<?php 
    session_start();
?>
<?php include "../components/header.php" ?>
<style>
    .s004 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: url("../images/Searchs_004.png");
    }

    .s004 form {
        width: 100%;
        max-width: 790px;
        background: #fff;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .s004 form fieldset {
        border: none;
        padding: 0;
        margin: 0;
    }

    .s004 form fieldset legend {
        display: none;
    }

    .s004 form .inner-form {
        display: flex;
        width: 100%;
    }

    .s004 form .input-field {
        width: 100%;
        display: flex;
    }

    .s004 form .input-field input {
        width: 100%;
        height: 60px;
        background: #fff;
        border: none;
        outline: none;
        padding: 0 20px;
        font-size: 18px;
        color: #333;
    }

    .s004 form .input-field input::placeholder {
        color: #999;
    }

    .s004 form .input-field button {
        width: 60px;
        height: 60px;
        background: #f26522;
        border: none;
        outline: none;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>
    <div class="s004">
        <form action="/kygui/src/pages/tracker.php" method="post">
            <fieldset>
                <legend>Tra cứu đơn hàng</legend>
                <div class="inner-form">
                    <div class="input-field">
                        <input class="form-control" name="fasdf" id="choices-text-preset-values" type="text" placeholder="Nhập mã khách hàng..." />
                        <button class="btn-search" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
<?php include "../components/footer.php" ?>