

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

	$title_c = $_POST['title_c'];
	$state_name = $_POST['state'];
	$city_name = $_POST['city'];
	$location = $_POST['location'];
	$phone = $_POST['mob'];
	$contact = $_POST['contact_p'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$org = $_POST['org'];


		// for the comming imges
	$old_img_name = $_POST['old_img_name'];
	$img_name = $_FILES['img']['name'];
	$img_tmp = $_FILES['img']['tmp_name'];
	
	if ($img_name!='')
	{
		$store = ("img/choosephoto/".$img_name);
		move_uploaded_file($img_tmp, $store);
		unlink("img/choosephoto/".$old_img_name);
	}
	else
	{
		$img_name = $old_img_name;
	}


	$sql = "update camp set camp_title='$title_c', state_id='$state_name', city_id='$city_name', location='$location', phone='$phone', contact_p ='$contact', date='$date', time ='$time', org='$org', pic='$img_name' where id = '$id'";

	if($conn->query($sql))
	{
		echo "<script>alert('blood bank Updated successfully..!');
		window.location.href = 'viewcamp.php';</script>";
	}

}
?>

<script>

	var loadFile = function(event)
	{
		var output = document.getElementById('output');
		output.src=URL.createObjectURL(event.target.files[0]);
	}

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
				<h1 class="title1">UPDATE</h1>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="bread-tag">
					<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
					<span> / </span>
					<a href="addcamp.php" class="active">Camp</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<h3 class="heading5">UPDATE CAMP</h3>
		<hr class="div10">
		<div class="loginform2">
			<form method="POST" class="form-horizontal" action=""  enctype="multipart/form-data">
				<?php 

				$sql3= "select * from camp where id = '$id'";
				$result3 = $conn->query($sql3);
				while($row3 = $result3->fetch_assoc())
				{
					
					?>

					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="text">Camp Title<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" id="title_c" required placeholder="Camp Title" name="title_c" value="<?php echo $row3['camp_title'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="state">Choose State<span>*</span> :</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<select  class="form-control" id="state" name="state" value="<?php echo $row3['state_id'] ?>" required onchange="showCity(this.value)">
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

					<div  id="citydata">
						<!-- Label and city select box will come from getcityajax.php -->
						<div class="form-group">
							<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="city">Choose City :</label>
							<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">

								<select  class="form-control" id="city" name="city"  value="<?php echo $row3['city_id'] ?>">
									<option  value="">-----Select City-----</option>
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
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="location">Location<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" id="location" required placeholder="Location" name="location" value="<?php echo $row3['location'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="number">Phone No.<span>*</span> :</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="number" min="6300000000" max="9999999999" class="form-control" id="mob" placeholder="Number" name="mob"  value="<?php echo $row3['phone'] ?>">
						</div>
						<span id="haha2"></span>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Contact Person<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" id="contact_p" required placeholder="Person Name" name="contact_p"  value="<?php echo $row3['contact_p'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="date">Date<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="date" class="form-control" id="date" required name="date"  value="<?php echo $row3['date'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="date">Time<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" id="time" required name="time"  value="<?php echo $row3['time'] ?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="text">Organised By<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" id="org" required placeholder="Organised name" name="org"  value="<?php echo $row3['org'] ?>">
						</div>
					</div>
					<input type="hidden" name="old_img_name" value="<?php echo $row3['pic']; ?>">
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="picture">Camp Picture<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="file" name="img" onchange="loadFile(event)">
							<br>
							<div>
								<img src="img/choosephoto/<?php echo $row3['pic']; ?>" id="output" style="width:120px; height: 90px;">
							</div>
							<br>
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10 col-xl-10 col-md-10 col-lg-10">
							<button type="submit" class="btn btn-info" name="submit">Update</button>
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