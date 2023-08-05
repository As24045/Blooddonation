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
					<a href="addstate.php" class="active">State</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<h3 class="heading5">UPDATE / DELETE STATE</h3>
		<hr class="div10">
		<table class="container table table-striped">
			<tr>
				<th>State Name</th>
				<th>Update/Delete</th>
			</tr>
			<?php

			$sql= "select * from state";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc())
			{
				?>
				<tr>
					<td><?php echo $row['state_name']; ?></td>
					<td>
						<a  class="update" href="updatestate.php?id=<?php echo $row['id']; ?>">Edit</a>
						<a  class="delete" href="deletestate.php?id=<?php echo $row['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>


<?php
include 'footer.php'; 
?>

