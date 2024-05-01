<?php 
include '../config/connectDB.php';
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE user_username = '$username'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['user_password'])){
            session_start();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_username'] = $row['user_username'];
            $_SESSION['user_role'] = $row['user_role'];
            header("Location: /kygui/");
        }else{
            header("Location: /kygui/src/pages/login.php?ss=ssnomk");
        }
    }else{
        header("Location: /kygui/src/pages/login.php?ss=ssnotk");
    }
}
?>