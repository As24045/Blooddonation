<?php 
include 'database/connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Donation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <a href="logout.php" class="btn btn-warning">LOGOUT</a>
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
                <li class="menu-item menu-item-has-children">
                   <a href="#"  data-toggle="sub-menu">ADD<i class="plus"></i></a>
                   <ul class="sub-menu">
                    <li class="menu-item"><a href="addstate.php">Add State</a></li>
                    <li class="menu-item"><a href="addcity.php">Add City </a></li>
                    <li class="menu-item"><a href="addbloodbank.php">Add Blood Bank</a></li>
                    <li class="menu-item"><a href="addcamp.php">Add Camp</a></li>
                    <li class="menu-item"><a href="addbloodgroup.php">Add Blood Group</a></li>
                 </ul>
              </li>
              <li class="menu-item menu-item-has-children">
                <a href="#" data-toggle="sub-menu">VIEW<i class="plus"></i></a>
                <ul class="sub-menu">
                 <li class="menu-item"><a href="viewmassages.php">Massage</a></li>
                 <li class="menu-item"><a href="view_feedback.php">Feedback</a></li>
                 <li class="menu-item"><a href="view_ragistration.php">Registration</a></li>
              </ul>
              <li class="menu-item menu-item-has-children">
                <a href="#" data-toggle="sub-menu">UPDATE/DELETE<i class="plus"></i></a>
                <ul class="sub-menu">
                 <li class="menu-item"><a href="viewstate.php">State</a></li>
                 <li class="menu-item"><a href="viewcity.php">City</a></li>
                 <li class="menu-item"><a href="viewbloodbank.php">Blood Bank</a></li>
                 <li class="menu-item"><a href="viewcamp.php">Camp</a></li>
                 <li class="menu-item"><a href="viewbloodgroup.php">Blood Group</a></li>
              </ul>
           </li>
       </ul>
    </nav>
    <!-- navigation menu end -->
 </div>
</div>
</header>
<!-- header end -->
<script src="js/script.js"></script>