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
					<a href="viewcamp.php" class="active">Camp</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<h3 class="heading5">UPDATE / DELETE CAMP</h3>
		<hr class="div10">
		<table class="container table table-striped">
			<tr>
				<th>Camp Tital</th>
				<th>State Name</th>
				<th>City Name</th>
				<th>Location</th>
				<th>Mobile No.</th>
				<th>Contact Person</th>
				<th>Date</th>
				<th>Time</th>
				<th>Organised By</th>
				<th>Image</th>
				<th>Update/Delete</th>
			</tr>
			<?php

			$sql= "select * from camp";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc())

			{

				$sid = $row['state_id'];
				$cid = $row['city_id'];

				$sql1= "select * from state where id = '$sid'";
				$result1 = $conn->query($sql1);
				if($row1 = $result1->fetch_assoc())
				{
					
				$sql2= "select * from city where id = '$cid'";
				$result2 = $conn->query($sql2);
				if($row2 = $result2->fetch_assoc())
				{
				?>
				<tr>
					<td><?php echo $row['camp_title']; ?></td>
					<td><?php echo $row1['state_name']; ?></td>
					<td><?php echo $row2['city_name']; ?></td>
					<td><?php echo $row['location']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><?php echo $row['contact_p']; ?></td>
					<td><?php echo $row['time']; ?></td>
					<td><?php echo $row['org']; ?></td>
					<td><img width="100px" height="40px" src="img/choosephoto/<?php echo $row['pic']; ?>"></td>
					<td>
						<a class="update" href="updatecamp.php?id=<?php echo $row['id']; ?>">Edit</a>
						<a  class="delete" href="deletecamp.php?id=<?php echo $row['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php } } } ?>
		</table>
	</div>
</div>
<?php
include 'footer.php'; 
?>

