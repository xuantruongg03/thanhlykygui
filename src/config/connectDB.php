<?php
$servername = "localhost";
// $database = "demo";
// $username = "root";
// $password = "lexuantruong2k3@";
$database = "thanhly1_kygui";
$username = "thanhly1_userkygui2";
$password = "kygui@123";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
  }