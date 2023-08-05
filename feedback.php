<?php
include_once 'header3.php';
if (isset($_POST['submit']))
{
	date_default_timezone_set("Asia/Kolkata");
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$rate = $_POST['rate'];
	$designing = $_POST['designing'];
	$info = $_POST['info'];
	$other = $_POST['other'];
	$date = date("d/m/Y h:i:s A");

	$sql = "insert into feedback (name, email, phone, rate, designing, info, other, date) values('$name','$email','$phone','$rate','$designing','$info','$other','$date')";

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
				<h1 class="title1">FEEDBACK</h1>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">FEEDBACK</h3>
		<hr class="div10">
		<div class="loginform4">
			<form method="POST" class="form-horizontal" action="">
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="text">Full Name <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="name" required name="name">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="massage">Email<span>*</span> </label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="email" required name="email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="number">Phone No.<span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="number" min="6300000000" max="9999999999" class="form-control" id="phone"  name="phone"  >
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="massage">HOW YOU RATE OVER WEBSITE OVERALL? <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
					<input type="radio" required name="rate" value="EXCELLENT" id= "rate"><b>EXCELLENT</b>
					<input type="radio" required name="rate" value="VERY GOOD" id= "rate"><b>VERY GOOD</b>
					<input type="radio" required name="rate" value="GOOD" id= "rate"><b>GOOD</b>
					<input type="radio" required name="rate" value="AVERAGE" id= "rate"><b>AVERAGE</b>				
					<input type="radio" required name="rate" value="BAD" id= "rate"><b>BAD</b>
				</div>
			</div>
			<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="radio">HOW YOU RATE DESIGNING OF SITE? <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
					<input type="radio" required name="designing" value="EXCELLENT" id= "designing"><b>EXCELLENT</b>
					<input type="radio" required name="designing" value="VERY GOOD" id= "designing"><b>VERY GOOD</b>
					<input type="radio" required name="designing" value="GOOD" id= "designing"><b>GOOD</b>
					<input type="radio" required name="designing" value="AVERAGE" id= "designing"><b>AVERAGE</b>				
					<input type="radio" required name="designing" value="BAD" id= "designing"><b>BAD</b>
				</div>
			</div>
			<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="massage">IS INFORMATION PROVIDED ON SITE ENOUGHT? <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
					<input type="radio" required name="info" value="YES" id= "info"><b>YES</b>
					<input type="radio" required name="info" value="NO" id= "info"><b>NO</b>
					</div>
			</div>
			<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="massage">OTHER SUGGESTION/FEEDBACK<span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<textarea rows="5" type="text" class="form-control" id="other" required  name="other"></textarea>
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