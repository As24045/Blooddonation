<?php 
include_once 'header2.php';

$id = $_GET['id'];
$sid="";
$sql2= "select * from city where id = '$id'";
$result2 = $conn->query($sql2);
if($row2 = $result2->fetch_assoc())
{
	$sid = $row2['state_id'];

}


if (isset($_POST['submit'])) {

	$city_name = $_POST['city'];
	$city_id = $_POST['id'];
	$sql = "update city set city_name='$city_name' where id = '$id'";

	if($conn->query($sql))
	{
		echo "<script>alert('city Updated successfully..!');
		window.location.href = 'viewcity.php';</script>";
	}
}
?>


<div class="container">
	<div class="row">
		<h3 class="heading5">UPDATE CITY</h3>
		<hr class="div10">
		<div class="loginform">
			<form method="POST" class="form-horizontal" action="" onsubmit="return validate()">
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
								<option value="<?php echo $row['id'];?>" <?php if($sid == $row['id'] ) { echo "selected"; } ?>><?php echo $row['state_name'];?></option>
							<?php } ?> 
						</select>
					</div>
				</div>		
				<?php

				$sql= "select * from city where id = '$id'";
				$result = $conn->query($sql);
				if($row = $result->fetch_assoc())
				{
					?>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">State Name<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" value="<?php echo $row['city_name']; ?>" id="city" placeholder="State Name" name="city">

							<input type="hidden" class="form-control" value="<?php echo $row['id']; ?>" name="id">
						</div>
					</div>
				<?php } ?>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10 col-xl-10 col-md-10 col-lg-10">
					<button type="submit" name="submit" class="btn btn-info">Update</button>
				</div>
			</div>
		</form>		
	</div>
</div>
</div>
<?php
include 'footer.php'; 
?>

