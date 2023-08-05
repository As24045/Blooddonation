<?php 
include 'database/connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Donation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta contextmenu="Responsive">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!-- <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
 <script src="bootstrap/bootstrap.min.js"></script>
 <script src="bootstrap/jquery.min.js"></script> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div class="first-header">
      <a href="ragistration.php" class="btn btn-warning">REGISTRATION</a>
      <a href="loginuser.PHP" class="btn btn-warning">LOGIN USER</a>
      <a href="login.php" class="btn btn-warning">LOGIN ADMIN</a>
   </div>
   <!-- header start -->
   <header class="header">
     <div class="container">
        <div class="header-main">
           <div class="logo">
              <a href="#"><img src="img/logo.png" alt="logo"></a>
           </div>
           <div class="open-nav-menu">
              <span></span>
           </div>
           <div class="menu-overlay">
           </div>
           <!-- navigation menu start -->
           <nav class="nav-menu">
             <div class="close-nav-menu">
                <img src="img/close.jpg" alt="close">
             </div>
             <ul class="menu">
                <li class="menu-item">
                   <a href="index.php">HOME</a>
                </li>
                <li class="menu-item">
                   <a href="about.php">ABOUT</a>
                </li>
                <li class="menu-item menu-item-has-children">
                   <a href="#"  data-toggle="sub-menu">REQUEST<i class="plus"></i></a>
                   <ul class="sub-menu">
                    <li class="menu-item"><a href="past_requirement.php">Past Requriment</a></li>
                    <li class="menu-item"><a href="view_requirement.php">View Requriment</a></li>
                 </ul>
              </li>
              <li class="menu-item menu-item-has-children">
                <a href="#" data-toggle="sub-menu">SEARCH<i class="plus"></i></a>
                <ul class="sub-menu">
                 <li class="menu-item"><a href="searchdonar.php">Search Donar</a></li>
                 <li class="menu-item"><a href="searchcamp.php">Search Camp</a></li>
                 <li class="menu-item"><a href="searchbloodbank.php">Search Blood Bank</a></li>
              </ul>
           </li>
           <li class="menu-item">
             <a href="contact.php">CONTACT US</a>
          </li>
          <li class="menu-item">
             <a href="feedback.php">FEEDBACK</a>
          </li>
       </ul>
    </nav>
    <!-- navigation menu end -->
 </div>
</div>
</header>
<!-- header end -->
<script src="js/script.js"></script>