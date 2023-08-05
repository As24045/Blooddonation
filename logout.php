<?php 
include 'database/connect.php';
session_destroy();
unset($_SESSION['un']);
header("location:login.php")
?>

