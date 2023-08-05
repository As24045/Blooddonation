<?php
include 'header2.php';
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
					<a href="viewcity.php" class="active">City</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<h3 class="heading5">UPDATE / DELETE CITY</h3>
		<hr class="div10">
		<table class="container table table-striped">
			<tr>
				<th>State Name</th>
				<th>City Name</th>
				<th>Update/Delete</th>
			</tr>

			
			<?php

			$sql= "select * from city";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc())
			{
				$sid = $row['state_id'];

				$sql1= "select * from state where id = '$sid'";
				$result1 = $conn->query($sql1);
				if($row1 = $result1->fetch_assoc())
				{

					?>
					<tr>
						<td><?php echo $row1['state_name']; ?></td>
						<td><?php echo $row['city_name']; ?></td>
						<td>
							<a class="update" href="updatecity.php?id=<?php echo $row['id']; ?>">Edit</a>
							<a  class="delete" href="deletecity.php?id=<?php echo $row['id']; ?>">Delete</a>
						</td>
					</tr>
				<?php } } ?>
			</table>
		</div>
	</div>
	<?php
	include 'footer.php'; 
	?>

