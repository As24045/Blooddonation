<?php 
include 'database/connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Doantion</title>
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
      <a href="#" class="btn btn-warning">WELCOME <?php echo $_SESSION["name"]; ?></a>
      <a href="changepassword.php" class="btn btn-warning">CHANGE PASSWORD</a>
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


<?php
if(isset($_POST['submit']))
{
	$un = $_POST['username'];
	$pass = $_POST['pwd'];

	$sql = "select * from ragistration where email = '$un' and password ='$pass'"; 
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc())
	{
		if($un==$row['email'] && $pass==$row['password'])
		{
			$_SESSION["email"] = $row['email'];
			echo "<script>alert('Login Successful... Welcome to Panel...!');
			window.location.href='past_requirement.php'; </script>";
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
				<h1 class="title1">Login</h1>
			</div>
			
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5"> WELCOME DONOR</h3>
		
	</div>
</div>
<?php
include 'footer.php'; 
?>

