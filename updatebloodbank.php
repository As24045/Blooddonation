<?php
include 'header2.php';

$id = $_GET['id'];
$sid="";
$sql2= "select * from city where id = '$id'";
$result2 = $conn->query($sql2);
if($row2 = $result2->fetch_assoc())
{
	$sid = $row2['state_id'];

}

if (isset($_POST['submit'])) {

	$bbn = $_POST['bbn'];
	$state_name = $_POST['state'];
	$city_name = $_POST['city'];
	$city_id = $_POST['id'];
	$address = $_POST['address'];
	$phone = $_POST['mob'];
	$contact = $_POST['contact_p'];
	$timing = $_POST['timing'];

	$sql = "update blood_bank set blood_bank='$bbn', state_id='$state_name', city_id='$city_name', address='address', phone='$phone', contact_p ='$contact', timing ='$timing' where id = '$id'";

	if($conn->query($sql))
	{
		echo "<script>alert('blood bank Updated successfully..!');
		window.location.href = 'viewbloodbank.php';</script>";
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
		xmlhttp.open("GET","getcityajax7.php?q="+str,true);
		xmlhttp.send();
	}
</script>                                                                                          

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
				<h1 class="title1">UPDATE</h1>
			</div>

			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="bread-tag">
					<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
					<span> / </span>
					<a href="addbloodbank.php" class="active">bloodgroup</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">UPDATE BLOOD BANK</h3>
		<hr class="div10">
		<div class="loginform2">
			<form method="POST" class="form-horizontal" action="">
				<?php 

				$sql3= "select * from blood_bank where id = '$id'";
				$result3 = $conn->query($sql3);
				while($row3 = $result3->fetch_assoc())
				{
					
					?>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="text">Blood Bank Name<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" id="bbn" required placeholder="Blood Bank Name" name="bbn"  value="<?php echo $row3['Blood_bank']; ?>">
							<span id="haha1"></span>
						</div>
					</div>


					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="state">Choose State<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<select required class="form-control" id="state" name="state" onchange="showCity(this.value)">
								<option  value="">-----Select State-----</option>
								<?php
								$sql = "select * from state order by state_name ";
								$result = $conn->query($sql);
								while ($row = $result->fetch_assoc())
								{

									?>
									<option value="<?php echo $row['id'];?>" <?php if($row3['state_id'] == $row['id'] ) { echo "selected"; } ?>><?php echo $row['state_name'];?></option>
								<?php } ?> 
							</select>
						</div>
					</div>		
					<div id="citydata">					
					<div class="form-group" >
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Choose City<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<select require class="form-control" id="city" name="city">
								<option>-----Select City-----</option>
								<?php

								$sql= "select * from city order by city_name ";
								$result = $conn->query($sql);
								while($row = $result->fetch_assoc())
								{
									?>
									<option value="<?php echo $row['id'];?>" <?php if($row3['city_id'] == $row['id'] ) { echo "selected"; } ?>><?php echo $row['city_name'];?></option>
								<?php } ?>  
							</select>
							
						</div>
					</div>
				</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Address :</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<textarea rows="2" type="text" class="form-control" id="address" required name="address"  value=""><?php echo $row3['address']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="number">Phone No. :</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="number" min="6300000000" max="9999999999" class="form-control" id="mob" placeholder="Number" name="mob"  value="<?php echo $row3['phone']; ?>"  >
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Contact Person :</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" id="contact_p" required placeholder="Person Name" name="contact_p"  value="<?php echo $row3['contact_p']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Timing :</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" id="timing" required placeholder="Timing" name="timing"  value="<?php echo $row3['timing']; ?>">
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10 col-xl-10 col-md-10 col-lg-10">
							<button type="submit" class="btn btn-info" value="update" name="submit">Update</button>
						</div>
					</div>

				<?php } ?>
			</form>		
		</div>
	</div>
</div>
<?php
include 'footer.php'; 
?>