<?php 

$id = $_GET['id'];

include_once 'header2.php';

if (isset($_POST['submit'])) {

	$blood_g = $_POST['blood_g'];
	$sql = "update blood_group set blood_g='$blood_g' where id = '$id'";

	if($conn->query($sql))
	{
		echo "<script>alert('State Updated successfully..!');
		window.location.href = 'viewbloodgroup.php';</script>";
	}
}
?>

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
					<a href="addstate.php" class="active">bloodgroup</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">UPDATE</h3>
		<hr class="div10">
		<div class="loginform1">
			<form method="POST" class="form-horizontal" action="" onsubmit="return validate()">

				<?php

				$sql= "select * from blood_group where id = '$id'";
				$result = $conn->query($sql);
				if($row = $result->fetch_assoc())
				{
					?>
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">Blood Group<span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<input type="text" class="form-control" value="<?php echo $row['blood_g']; ?>" id="blood_g" name="blood_g">

							<input type="hidden" class="form-control" value="<?php echo $row['id']; ?>" name="id">
						</div>
					</div>
				<?php } ?>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10 col-xl-10 col-md-10 col-lg-10">
							<button type="submit" name="submit" class="btn btn-info">UPDATE</button>
						</div>
					</div>
				</form>		
			</div>
		</div>
	</div>
	<?php
	include 'footer.php'; 
?>