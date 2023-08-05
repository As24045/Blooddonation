<?php 
include 'database/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Dropdown Menu Responsive</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta contextmenu="Responsive">
 <link rel="stylesheet" type="text/css" href="css/style.css">
<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
 <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
 <script src="bootstrap/bootstrap.min.js"></script>
 <script src="bootstrap/jquery.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div class="first-header">
      <a href="#" class="btn btn-warning">WELCOME <?php echo $_SESSION["name"]; ?></a>
      <a href="loginuser.php" class="btn btn-warning">LOGOUT</a>
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
                <li class="menu-item"><a href="#">Search Donar</a></li>
                <li class="menu-item"><a href="#">Search Camp</a></li>
                <li class="menu-item"><a href="#">Search Blood Bank</a></li>
             </ul>
          </li>
          <li class="menu-item">
           <a href="#">CONTACT US</a>
        </li>
        <li class="menu-item">
           <a href="#">FEEDBACK</a>
        </li>
     </ul>
  </nav>
  <!-- navigation menu end -->
</div>
</div>
</header>
<!-- header end -->
<script src="js/script.js"></script>


<?php
if(isset($_POST['submit']))
{
	$id = $_SESSION['id'];
   $old_pass = $_POST['old_pass'];
   $new_pass = $_POST['new_pass'];


   $sql = "select * from ragistration where id = '$id'"; 
   $result = $conn->query($sql);
   if($row = $result->fetch_assoc())
   {
    if($old_pass==$row['password'])
    {
      $sql1 = "update ragistration set password='$new_pass', re_password='$new_pass' where id ='$id'";
      if($conn->query($sql1))
      {
         echo "<script>alert('Updated successfully..!');
         window.location.href = 'logout1.php';</script>";
      }
   }
   else
   {
      echo "<script>alert('Wrong details'); </script>";
   }
}
}

?>

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
				<h1 class="title1">CHANGE PASSWORD</h1>
			</div>
			
		</div>
	</div>
</div>


<div class="container">
   <div class="row">
      <h3 class="heading5">CHANGE PASSWORD</h3>
      <hr class="div10">
      <div class="loginform1">
         <form method="POST" class="form-horizontal" action="" onsubmit="return validate()">
            <div class="form-group">
               <label class="control-label col-sm-2 col-xl-2 col-md-2 col-lg-2" for="email">Old Password<span>*</span>:</label>
               <div class="col-sm-10 col-xl-10 col-md-10 col-lg-10">
                  <input type="text" class="form-control" id="old_pass" placeholder="Enter Username" name="old_pass">
                  <span id="haha1"></span>
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-sm-2 col-xl-2 col-md-2 col-lg-2" for="pwd">New Password<span>*</span>:</label>
               <div class="col-sm-10 col-xl-10 col-md-10 col-lg-10">          
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="new_pass">
                  <span id="haha2"></span>
               </div>
            </div>

            <div class="form-group">
               <label class="control-label col-sm-2 col-xl-2 col-md-2 col-lg-2" for="pwd">Retype New Password<span>*</span>:</label>
               <div class="col-sm-10 col-xl-10 col-md-10 col-lg-10">          
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="r_new_pass">
                  <span id="haha2"></span>
               </div>
            </div>
            <div class="form-group">        
               <div class="col-sm-offset-2 col-sm-10 col-xl-10 col-md-10 col-lg-10">
                  <button type="submit" class="btn btn-info" name="submit">Submit</button>
               </div>
            </div>
         </form>     
      </div>
   </div>
</div>
<?php
include 'footer.php'; 
?>

