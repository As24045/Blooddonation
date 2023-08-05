<?php
include_once 'header3.php';
if (isset($_POST['submit']))
{
	date_default_timezone_set("Asia/Kolkata");

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$massage = $_POST['massage'];
	$date = date("d/m/Y h:i:s A");

	$sql = "insert into mail_us (name, email, phone, massage, date) values('$name','$email','$phone','$massage','$date')";

	if($conn->query($sql))
	{
		echo "<script>alert('Data submitted successfully..!');
		window.location.href = 'index.php';</script>";
	}
}
?>


<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
				<h1 class="title1">CONTACT US</h1>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="bread-tag">
					<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
					<span> / </span>
					<a href="contact.php" class="active">Mail Us</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">MAIL US</h3>
		<hr class="div10">
		<div class="loginform2">
			<form method="POST" class="form-horizontal" action="">
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="text">Name :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="name" required name="name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="massage">E-mail :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="email" required name="email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="number">Phone No. :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="number" min="6300000000" max="9999999999" class="form-control" id="phone"  name="phone"  >
					</div>
					<span id="haha2"></span>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="massage">Massage :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<textarea rows="4" type="text" class="form-control" id="massage" required  name="massage"></textarea>
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