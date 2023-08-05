<?php
include 'header2.php';
if(empty($_SESSION['un']))
{
	header("location:login.php");
}
if (isset($_POST['submit']))
{
	$state = $_POST['state']; 
	$city = $_POST['city']; 

	$sql = "select * from city where state_id='$state' and city_name = '$city'";
	$result = $conn->query($sql);

	if($row = $result->fetch_assoc())
	{
		echo "<script>alert('Alredy Exist! Please try again...!');
		window.location.href = 'addbloodbank.php';</script>";
	}
	else{
	$sql = "insert into city (state_id, city_name)values('$state','$city')";

	if($conn->query($sql))
	{
		echo "<script>alert('Data submitted successfully..!');
		window.location.href = 'addcity.php';</script>";
	}

    }
 }
?>

<script type="text/javascript">
	function validate() 
	{
		var cstate = document.getElementById('state').value;
		var city = document.getElementById('city').value;
		if(cstate=="")
		{
			document.getElementById('haha1').innerHTML="Please choose state!";
			return false;
		}
		else if (city=="")
		{
			document.getElementById('haha2').innerHTML="Please choose city!";
			return false;
		}
		else
		{
			return true;
		}
	}
</script>
<?php
?>
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
					<a href="addcity.php" class="active">City</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">ADD CITY</h3>
		<hr class="div10">
		<div class="loginform">
			<form method="POST" class="form-horizontal" action="" onsubmit="return validate()">
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="state">Choose State<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<select required class="form-control" id="state" name="state">
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

							<span id="haha1"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="city">City<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">          
							<input type="address" required class="form-control" id="city" placeholder="Enter city name" name="city">
							<span id="haha2"></span>
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10 col-xl-10 col-md-10 col-lg-10">
							<button type="submit" name="submit" class="btn btn-info">ADD</button>
						</div>
					</div>
				</form>		
			</div>
		</div>
	</div>
	<?php
	include 'footer.php'; 
	?>

