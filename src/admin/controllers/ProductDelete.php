<?php

$id = $_GET['id'];
include '../functions/delete_product.php';
delete_product($id);
header('Location: /kygui/src/admin/pages/ViewProduct.php');
