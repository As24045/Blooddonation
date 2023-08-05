<?php 
include 'header2.php';
if(empty($_SESSION['un'])) 
{
	header("location:login.php");
}
if (isset($_POST['submit']))
{
	$bbn = $_POST['bbn'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	$phone = $_POST['mob'];
	$contact = $_POST['contact_p'];
	$timing = $_POST['timing'];

	$sql = "insert into blood_bank (blood_bank, state_id, city_id, address, phone, contact_p, timing)values('$bbn','$state','$city','$address','$phone','$contact','$timing')";

	if($conn->query($sql))
	{
		echo "<script>alert('Data submitted successfully..!');
		window.location.href = 'addbloodbank.php';</script>";
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
				<h1 class="title1">ADD</h1>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="bread-tag">
					<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
					<span> / </span>
					<a href="addbloodbank.php" class="active">Blood Bank</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">ADD BLOOD BANK</h3>
		<hr class="div10">
		<div class="loginform2">
			<form method="POST" class="form-horizontal" action="" onsubmit="return validate()">
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="text">Blood Bank Name<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="bbn" required placeholder="Blood Bank Name" name="bbn">
						<span id="haha1"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="state">Choose State :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<select  class="form-control" id="state" name="state" required onchange="showCity(this.value)">
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

				<div required id="citydata">
					<!-- Label and city select box will come from getcityajax.php -->
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Address :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<textarea rows="2" type="text" class="form-control" id="address" required placeholder="Address" name="address"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="number">Phone No. :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="number" min="6300000000" max="9999999999" class="form-control" id="mob" placeholder="Number" name="mob"  >
					</div>
					<span id="haha2"></span>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Contact Person :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="contact_p" required placeholder="Person Name" name="contact_p">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Timing :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="timing" required placeholder="Timing" name="timing">
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
		var bbn = document.getElementById('bbn').value;
		if(bbn=="")
		{
			document.getElementById('haha1').innerHTML="Please enter Blood Bank name!";
			return false;
		}
		else
		{
			return true;
		}
	}
</script>