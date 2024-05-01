document.getElementById("uploadExcel").addEventListener("change", function () {
    var file = this.files[0];
    if (file) {
        const box = document.getElementById("box-excel");
        box.innerHTML = "";
        box.innerHTML = `<div 
    class="ul001"><label style="margin: 0.75rem 0; font-size: 1.125rem; line-height: 1.75rem;">${file.name}
    </label><button style="height: 2.25rem; width: 6rem; background-color: #2b6cb0; border: none; border-radius: 0.375rem; color: white;" id= "btnUploadExcel">
    Upload</button></div>`;
    }

    document
        .getElementById("btnUploadExcel")
        .addEventListener("click", function () {
            const ExcelToJSON = function () {
                this.parseExcel = function (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const data = e.target.result;
                        const workbook = XLSX.read(data, {
                            type: "binary",
                        });
                        let result = [];
                        workbook.SheetNames.forEach(function (sheetName) {
                            const XL_row_object =
                                XLSX.utils.sheet_to_row_object_array(
                                    workbook.Sheets[sheetName]
                                );
                            result.push(XL_row_object);
                        });
                        
                        let sqlOrder =
                            "INSERT INTO order_receives (user_id, user_name, receives_date, expired_date, product_stock, price) VALUE ";
                        result[0].forEach((item) => {
                            sqlOrder += `('${item.user_id}', '${item.user_name}', '${item.receives_date}', '${item.expired_date}', ${item.product_stock}, ${item.price}),`;
                        });
                        sqlOrder = sqlOrder.slice(0, -1);
                        const formDT = new FormData();
                        formDT.append("sqlOrder", sqlOrder);
                        const xhr = new XMLHttpRequest();
                        xhr.open("POST", "/kygui/src/admin/controllers/spec_post.php", true);
                        xhr.setRequestHeader(
                            "Content-Type",
                            "application/x-www-form-urlencoded"
                        );
                        xhr.onload = function () {
                            if (this.responseText == "200") {
                                alert("Upload thành công");
                            } else {
                                console.log(this.responseText);
                                alert("Upload thất bại");
                            }
                        };
                        xhr.send(
                            `sqlOrder=${encodeURIComponent(sqlOrder)}`
                        );
                    };
                    reader.onerror = function (ex) {
                        console.log(ex);
                    };
                    reader.readAsBinaryString(file);
                };
            };
            var excel = new ExcelToJSON();
            excel.parseExcel(file);
        });
});

const processDate = (date) => {

};