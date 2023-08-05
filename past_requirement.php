<?php

	include 'header3.php';
?>

<?php 
date_default_timezone_set("Asia/Kolkata");


if (isset($_POST['submit']))
{
	$f_name = $_POST['f_name'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$blood_g = $_POST['blood_g'];
	$unit = $_POST['unit'];
	$phone = $_POST['mob'];
	$address = $_POST['address'];
	$rdate = date("d/m/Y h:i:s A");
	$edate = date("d/m/Y h:i:s A", strtotime('+ 7 days'));
	
	$sql = "insert into past_requirement (f_name, state_id, city_id, blood_g, unit, phone, address, req_date, exp_date)values('$f_name','$state','$city','$blood_g','$unit','$phone','$address', '$rdate', '$edate')";

	if($conn->query($sql))
	{
		echo "<script>alert('Data submitted successfully..! your requirement have been posted, It well be visible on site for next 7 days');
		window.location.href = 'index.php';</script>";
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
				<h1 class="title1">HOME</h1>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="bread-tag">
					<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
					<span> / </span>
					<a href="past_requirement.php" class="active">Post Requirement</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">POST REQUIREMENT</h3>
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
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="state">Choose State <span>*</span> </label>
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
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="city">Choose City <span>*</span></label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">

							<select  class="form-control" id="city" required name="city">
								<option  value="">-----Select City-----</option>
							</select>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="option">Choose Blood Group <span>*</span></label>
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
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Unit Required <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="unit" required placeholder="Unit" name="unit">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="number">Phone No. <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="number" min="6300000000" max="9999999999" class="form-control" id="mob" required placeholder="Number" name="mob"  >
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Address <span>*</span></label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<textarea rows="2" type="text" class="form-control" id="address" required placeholder="Address" name="address"></textarea>
					</div>
				</div>
				
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10 col-xl-10 col-md-10 col-lg-10">
						<button type="submit" class="btn btn-info" name="submit">Submit</button>
					</div>
				</div>
				<div id="haha3"></div>
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
