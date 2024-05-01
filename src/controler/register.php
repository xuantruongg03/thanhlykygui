<?php
function randomID()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomID = '';
    for ($i = 0; $i < 10; $i++) {
        $randomID .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomID;
}
include '../config/connectDB.php';
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passhash = password_hash($password, PASSWORD_DEFAULT);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $sql = "SELECT * FROM users WHERE user_username = '$username'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        header("Location: /kygui/src/pages/register.php?ss=ssnotk");
        exit;
    }
    $user_id = randomID();
    $sql = "INSERT INTO users (user_id, user_firstname, user_lastname, user_username, user_password, user_role) 
    VALUES ('$user_id','$firstname', '$lastname', '$username', '$passhash', 'user')";
    if(mysqli_query($conn, $sql)){
        header("Location: /kygui/src/pages/login.php?ss=ssyes");
    } else{
        header("Location: /kygui/src/pages/register.php?ss=ssno");
    }
}else{
    header("Location: /kygui/src/pages/register.php?ss=ssno");
}


?>