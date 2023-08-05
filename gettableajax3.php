<?php 

include 'database/connect.php';

$city_id = $_GET['q'];
$sql = "select * from camp where city_id='$city_id'";
$result = $conn->query($sql);

?>
<table class="container table table-striped">
	<tr>
		<th>Camp Title</th>
		<th>Location</th>
		<th>Phone</th>
		<th>Contact Person</th>
		<th>Date</th>
		<th>Time</th>
		<th>Organizedby</th>
		<th>Picture</th>
	</tr>
	<?php 

	while ($row = $result->fetch_assoc())
	{
		?>
		<tr>
			<td><?php echo $row['camp_title']; ?></td>
			<td><?php echo $row['location']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['contact_p']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['time']; ?></td>
			<td><?php echo $row['org']; ?></td>
			<td><img width="40px" height="40px" src="img/choosephoto/<?php echo $row['pic']; ?>"></td>
		</tr>
		<?php
	}
	?>
</table>