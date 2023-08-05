<?php 

include 'database/connect.php';

$state_id = $_GET['state_id'];
$city_id = $_GET['city_id'];
$blood_g = $_GET['blood_g'];
$i=1;
$sql = "select * from ragistration where state_id='$state_id' and  city_id='$city_id' and blood_g='$blood_g' ";
$result = $conn->query($sql);

?>
<table class="container table table-striped">
	<?php 

	if ($row1 = $result->fetch_assoc())
	{
		?>
		<tr>
			<th>Name</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Age</th>
			<th>Contact No.</th>
			<th>Weight</th>
			<th>Email</th>
		</tr>
		<?php 

		while ($row = $result->fetch_assoc())
		{
			?>
			<tr>
				<td><?php echo $row['f_name']; ?></td>
				<td><?php echo $row['gender']; ?></td>
				<td><?php echo $row['address']; ?></td>
				<td><?php echo $row['age']; ?></td>
				<td><?php echo $row['phone']; ?></td>
				<td><?php echo $row['weight']; ?></td>
				<td><?php echo $row['email']; ?></td>
			</tr>
			<?php
		}}
		?>
	</table>