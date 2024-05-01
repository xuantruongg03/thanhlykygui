<?php
//Log out
session_start();
session_destroy();
header('Location: /kygui/src/pages/login.php');
?>