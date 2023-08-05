<?php

	include_once 'header2.php';

?>
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
				<h1 class="title1">MASSAGES</h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<h3 class="heading5">VIEW MASSAGES</h3>
		<hr class="div10">
		<table class="container table table-striped">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone No.</th>
				<th>Massages</th>
				<th>Time</th>
				<th>Delete</th>
			</tr>
			<?php

			$sql= "select * from mail_us";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc())
			{
				?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['phone']; ?></td>
					<td><?php echo $row['massage']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td>
						<a  class="delete" href="deletemassage.php?id=<?php echo $row['id']; ?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>
<?php
include 'footer.php'; 
?>

