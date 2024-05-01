<?php
    session_start();
    if (!isset($_SESSION['user_id']) || isset($_SESSION['user_role']) != 'admin') {
        header('Location: /kygui/index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/kygui/src/admin/assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="/kygui/src/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/kygui/src/images/icons/logo.png">
    <link rel="stylesheet" href="/kygui/src/admin/assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="/kygui/src/admin/assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="/kygui/src/admin/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/kygui/src/admin/assets/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/kygui/src/admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="/kygui/src/admin/assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/kygui/src/admin/assets/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/kygui/src/images/icons/logod.png" />
    <script src="/kygui/src/admin/assets/vendors/ckeditor/ckeditor.js" ></script>
    <script src="https://widget.cloudinary.com/v2.0/global/all.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/decoupled-document/ckeditor.js"></script>
<script src="/kygui/src/admin/lib/jszip.js"></script>
    <style>
        .md-i:hover {
            color: #007bff;
        }
    </style>
</head>

</html>