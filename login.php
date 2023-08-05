<?php

include 'header.php';

if(isset($_POST['submit']))
{
	$un = $_POST['username'];
	$pass = $_POST['pwd'];

	$sql = "select * from login where username = '$un' and password ='$pass'"; 
	$result = $conn->query($sql);
	if($row = $result->fetch_assoc())
	{
		if($un==$row['username'] && $pass==$row['password'])
		{
			$_SESSION["un"] = $row['username'];
			echo "<script>alert('Login Successful... Welcome to Panel...!');
			window.location.href='submitpage.php'; </script>";
		}
	}
	else
	{
		echo "<script>alert('Wrong details'); </script>";
	}
}

?>

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
				<h1 class="title1">Login Admin</h1>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="bread-tag">
					<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
					<span> / </span>
					<a href="login.php" class="active">Login Admin</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">ADMIN LOGIN</h3>
		<hr class="div10">
		<div class="loginform">
			<form method="POST" class="form-horizontal" action="" onsubmit="return validate()">
				<div class="form-group">
					<label class="control-label col-sm-2 col-xl-2 col-md-2 col-lg-2" for="email">Username<span>*</span>:</label>
					<div class="col-sm-10 col-xl-10 col-md-10 col-lg-10">
						<input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
						<span id="haha1"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2 col-xl-2 col-md-2 col-lg-2" for="pwd">Password<span>*</span>:</label>
					<div class="col-sm-10 col-xl-10 col-md-10 col-lg-10">          
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
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

<script type="text/javascript">
	function validate() 
	{
		var username = document.getElementById('username').value;
		var password = document.getElementById('pwd').value;
		if(username=="")
		{
			document.getElementById('haha1').innerHTML="Please enter username";
			return false;
		}
		else if (password=="")
		{
			document.getElementById('haha2').innerHTML="Please enter password";
			return false;
		}
		else
		{
			return true;
		}
	}
</script>