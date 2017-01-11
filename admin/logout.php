<?php
session_start();
$user_name = $_SESSION['user'];
if (isset($_COOKIE[$user_name])) {
    setcookie(session_name(), '', time() - 42000, '/');
}
session_destroy();
$logoutpage = $_GET['act'];
header("location:index.php");
?> 
