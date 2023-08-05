<?php 
include 'database/connect.php';
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['id']);
header("location:loginuser.php")
?>

