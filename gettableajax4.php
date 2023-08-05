<?php 

include 'database/connect.php';

$city_id = $_GET['q'];
$sql = "select * from blood_bank where city_id='$city_id'";
$result = $conn->query($sql);

?>
<table class="container table table-striped">
	<tr>
		<th>Blood Bank Name</th>
		<th>address</th>
		<th>Contact Person</th>
		<th>timing</th>
		<th>Phone</th>
	</tr>
	<?php 

	while ($row = $result->fetch_assoc())
	{
		?>
		<tr>
			<td><?php echo $row['Blood_bank']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['contact_p']; ?></td>
			<td><?php echo $row['timing']; ?></td>
			<td><?php echo $row['phone']; ?></td>
		</tr>
		<?php
	}
	?>
</table>