<?php 
include 'header2.php';
if(empty($_SESSION['un'])) 
{
	header("location:login.php");
}
if (isset($_POST['submit']))
{
	$camp = $_POST['title_c'];
	$state = $_POST['state'];
	$city = $_POST['city'];
	$location = $_POST['location'];
	$phone = $_POST['mob'];
	$date = $_POST['date'];
	$contact = $_POST['contact_p'];
	$time = $_POST['time'];
	$org = $_POST['org'];

	$img_name = $_FILES['img']['name'];
	$img_tmp=$_FILES['img']['tmp_name'];
	$store = 'img/choosephoto/'.$img_name;
	move_uploaded_file($img_tmp, $store);

	$sql = "insert into camp (camp_title, state_id, city_id, location, phone, date, contact_p, time, org, pic)values('$camp','$state','$city','$location','$phone','$date','$contact','$time','$org','$img_name')";

	if($conn->query($sql))
	{
		echo "<script>alert('Data submitted successfully..!');
		window.location.href = 'addcamp.php';</script>";
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
				<h1 class="title1">ADD</h1>
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
		<h3 class="heading5">ADD CAMP</h3>
		<hr class="div10">
		<div class="loginform2">
			<form method="POST" class="form-horizontal" action="" onsubmit="return validate()" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="text">Camp Title<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="title_c" required placeholder="Camp Title" name="title_c">
						<span id="haha1"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="state">Choose State<span>*</span> :</label>
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

				<div  id="citydata">
					<!-- Label and city select box will come from getcityajax.php -->
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="city">Choose City :</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">

							<select  class="form-control" id="city" name="city">
								<option  value="">-----Select City-----</option>
							</select>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="location">Location<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="location" required placeholder="Location" name="location">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="number">Phone No.<span>*</span> :</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="number" min="6300000000" max="9999999999" class="form-control" id="mob" placeholder="Number" name="mob"  >
					</div>
					<span id="haha2"></span>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Contact Person<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="contact_p" required placeholder="Person Name" name="contact_p">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="date">Date<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="date" class="form-control" id="date" required name="date">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="date">Time<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="time" required name="time">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="text">Organised By<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="org" required placeholder="Organised name" name="org">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="picture">Camp Picture<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="file" id="img"  name="img" onchange="loadFile(event)">
					<br>
					<div id="photobox">
						<!-- yhaa photo aayega -->
					</div>
				<br>
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10 col-xl-10 col-md-10 col-lg-10">
						<button type="submit" class="btn btn-info" name="submit">ADD</button>
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