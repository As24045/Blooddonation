<?php 

include 'database/connect.php';

$state_id = $_GET['q'];
?>
<div class="form-group" id="citydata">
	<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="city">City<span>*</span>:</label>
	<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9 form-control">          
		<select required class="form-control" name="city">
			<option>----Select City----</option>
			<?php
			$sql= "select * from city where state_id = '$state_id'";
			$result = $conn->query($sql);
			while($row = $result->fetch_assoc())
			{
				?>

				<option value="<?php echo $row['city_name'];?>"> <?php echo $row['city_name'];?></option>

			<?php } ?>
		?>
	</select>
</div>
</div>