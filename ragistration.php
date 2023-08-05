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
      <a href="#" class="btn btn-warning">WELCOME GUEST</a>
      <a href="loginuser.php" class="btn btn-warning">LOGIN USER</a>
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

if (isset($_POST['submit']))
{
	$f_name = $_POST['f_name'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$blood_g = $_POST['blood_g'];
	$age = $_POST['age'];
	$phone = $_POST['mob'];
	$weight = $_POST['weight'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];

	$sql = "insert into ragistration (f_name, gender, address, state_id, city_id, blood_g, age, phone, weight, email, password, re_password)values('$f_name','$gender','$address','$state','$city','$blood_g','$age','$phone','$weight','$email','$password','$re_password')";

	if($conn->query($sql))
	{
		echo "<script>alert('Data submitted successfully..!');
		window.location.href = 'submitregistration.php';</script>";
	}
}
?>
<script>
	function showCity(str) {
		if (str=="") {
			document.getElementById("citydata").innerHTML="";
			return;
		}
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
				document.getElementById("citydata").innerHTML=this.responseText;
			}
		}
		xmlhttp.open("GET","getcityajax.php?q="+str,true);
		xmlhttp.send();
	}
</script>
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
				<h1 class="title1">REGISTRATION</h1>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="bread-tag">
					<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
					<span> / </span>
					<a href="ragistration.php" class="active">Registration</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">SIGNUP AS DONOR</h3>
		<hr class="div10">
		<div class="loginform3">
			<form method="POST" class="form-horizontal" action="" onsubmit="return validate()">
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="text">Full Name <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="f_name" required placeholder="Enter full name" name="f_name">
						<span id="haha1"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="radio">Gender <span>*</span></label>
					<div required class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input style="margin-top: 14px;" type="radio" id="gender" value="male"  name="gender">Male
						<input type="radio" value="female" id="gender"  name="gender">Female
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Address <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<textarea rows="2" type="text" class="form-control" id="address" required placeholder="Address" name="address"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="state">State <span>*</span> </label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<select  class="form-control" id="state" required name="state" onchange="showCity(this.value)">
							<option  value="">-----Select State-----</option>
							<?php
							$sql = "select * from state order by state_name ";
							$result = $conn->query($sql);
							while ($row = $result->fetch_assoc())
							{
								?>
								<option value="<?php echo $row['id'];?>"><?php echo $row['state_name'];?></option>
							<?php } ?> 
						</select>
					</div>
				</div>

				<div id="citydata">
					<!-- Label and city select box will come from getcityajax.php -->
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="city"> City <span>*</span></label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">

							<select  class="form-control" id="city" required name="city">
								<option  value="">-----Select City-----</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="option">Blood Group <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<select class="form-control" id="blood_g" required name="blood_g">
							<option value="">---Blood Group List---</option>

							<?php
							$sql = "select * from blood_group order by blood_g ";
							$result = $conn->query($sql);
							while ($row = $result->fetch_assoc())
							{
								?>
								<option value="<?php echo $row['id'];?>"><?php echo $row['blood_g'];?></option>
							<?php } ?> 
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Age <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="age" required placeholder="Age" name="age">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="number">Phone No. <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="number" min="6300000000" max="9999999999" class="form-control" id="mob" required placeholder="Number" name="mob"  >
					</div>
					<span id="haha2"></span>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Weight <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="weight" required placeholder="Weight" name="weight">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="email">Email <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="email" class="form-control" id="email" required placeholder="Please Enter Email Id" name="email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="password">Password <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="password" required placeholder="Password" name="password">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="password">Conform Password <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="re_password" required placeholder="Re-Password" name="re_password">
						<span id="aaa"></span>
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

<script type="text/javascript">
	function validate() 
	{
		var f_name = document.getElementById('f_name').value;
		if(f_name=="")
		{
			document.getElementById('haha1').innerHTML="Please enter full name!";
			return false;
		}
		else
		{
			return true;
		}
	}
</script>
<script type="text/javascript">
		function validate() 
	   {
		var password = document.getElementById('password').value;
		var re_password = document.getElementById('re_password').value;
		if (password == re_password)
		 {
			return true;
		 }
		 else
		 {
		 	document.getElementById('aaa').innerHTML="Please enter the same password !";
		 	return false;
		 }
	}
</script>