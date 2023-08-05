<?php 

include 'database/connect.php';

$state_id = $_GET['q'];
?>
<div class="form-group">
	<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="city">Choose City :</label>
	<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
		
		<select required class="form-control" id="city" name="city" onchange="showTable(this.value)">
			<option  value="">-----Select City-----</option>
			<?php
			$sql = "select * from city where state_id='$state_id' order by city_name ";
			$result = $conn->query($sql);
			while ($row = $result->fetch_assoc())
			{
				?>
				<option value="<?php echo $row['id'];?>"><?php echo $row['city_name'];?></option>
			<?php } ?> 
		</select>
	</div>
</div>