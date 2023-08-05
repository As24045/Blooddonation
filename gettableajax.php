<?php 

include 'database/connect.php';

$city_id = $_GET['q'];
$sql = "select * from past_requirement where city_id='$city_id'";
$result = $conn->query($sql);

?>
<table class="container table table-striped">
	<tr>
		<th>Name</th>
		<th>Blood Group</th>
		<th>Unit</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Reqdate</th>
		<th>Expdate</th>
	</tr>
	<?php 

	while ($row = $result->fetch_assoc())

	{

		$bgid = $row['blood_g'];

		$sql1 = "select * from blood_group where id='$bgid'";	
		$result1 = $conn->query($sql1);
		if($row1 = $result1->fetch_assoc())
		{	
		?>
		<tr>
			<td><?php echo $row['f_name']; ?></td>
			<td><?php echo $row1['blood_g']; ?></td>
			<td><?php echo $row['unit']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['req_date']; ?></td>
			<td><?php echo $row['exp_date']; ?></td>
		</tr>
		<?php
	} }
	?>
</table>