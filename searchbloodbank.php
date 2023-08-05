<?php
include 'header3.php';
?>

<script>
	function showCity(str) {
		if (str=="") {
			document.getElementById("citydata").innerHTML="";
			return;
		}
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
				document.getElementById("citydata").innerHTML=this.responseText;
			}
		}
		xmlhttp.open("GET","getcityajax1.php?q="+str,true);
		xmlhttp.send();
	}


	function showTable(str) {
		if (str=="") {
			document.getElementById("table1").innerHTML="";
			return;
		}
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.onreadystatechange=function() {
			if (this.readyState==4 && this.status==200) {
				document.getElementById("table1").innerHTML=this.responseText;
			}
		}
		xmlhttp.open("GET","gettableajax4.php?q="+str,true);
		xmlhttp.send();
	}
</script>
<?php
?>
<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
				<h1 class="title1">SEARCH</h1>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="bread-tag">
					<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
					<span> / </span>
					<a href="searchbloodbank.php" class="active">Blood Bank</a>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		<h3 class="heading5">SEARCH BLOOD BANK</h3>
		<hr class="div10">
		<div class="loginform1">
			<form method="POST" class="form-horizontal" action="" onsubmit="return validate()">
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="state">Choose State<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<select required class="form-control" id="state" name="state" onchange="showCity(this.value)">
							<option  value="">-----Select State-----</option>
							<?php
							$sql = "select * from state order by state_name ";
							$result = $conn->query($sql);
							while ($row = $result->fetch_assoc())
							{
								?>
								<option value="<?php echo $row['id'];?>"><?php echo $row['state_name'];?></option>
							<?php } ?> 
						</select>
						<span id="haha1"></span>
					</div>
				</div>
				<div id="citydata">
					<!-- Label and city select box will come from getcityajax.php -->
					<div class="form-group">
						<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="city">Choose City <span>*</span>:</label>
						<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
							<select  class="form-control" id="city" required name="city" >
								<option  value="">-----Select City-----</option>
							</select>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div id="table1">	
		</div>		
	</div>
</div>
<?php
include 'footer.php'; 
?>

