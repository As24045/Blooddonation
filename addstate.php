<?php
include 'header2.php';
if(empty($_SESSION['un']))
{
	header("location:login.php");
}
if (isset($_GET['submit']))
{
	$state = $_GET['state']; 

	$sql = "select * from state where state_name='$state' ";
	$result = $conn->query($sql);
	if ($row = $result->fetch_assoc())
	{
		echo "<script>alert('Already Exist! Please try again...! :-) ');
			window.location.href = 'addcity.php'; </script>";
	}
	else
	{

		$sql = "insert into state(state_name)values('$state')";

		if ($conn->query($sql))
		{
			echo "<script>alert('State Submitted Successfully..! ');
			window.location.href = 'addstate.php'; </script>";
		} 
	}
}
?>

<script type="text/javascript">
	function validate() 
	{
		var username = document.getElementById('state').value;
		if(username=="")
		{
			document.getElementById('haha1').innerHTML="Please enter state name!";
			return false;
		}
		else
		{
			return true;
		}
		if (cstate=="cstate") 
		{
			document.getElementById('successfuly').innerHTML="login successfuly";
			return true;
		}
		else
		{
			return true;
		}
	}
</script>

<?php
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
		<h3 class="heading5">ADD STATE</h3>
		<hr class="div10">
		<div class="loginform1">
			<form method="GET" class="form-horizontal" action="" onsubmit="return validate()">
				<div class="form-group">
					<label class="control-label col-sm-3 col-xl-3 col-md-3 col-lg-3" for="address">State Name<span>*</span>:</label>
					<div class="col-sm-9 col-xl-9 col-md-9 col-lg-9">
						<input type="text" class="form-control" id="state" placeholder="State Name" name="state">
						<span id="haha1"></span>
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10 col-xl-10 col-md-10 col-lg-10">
						<button type="submit" name="submit" class="btn btn-info">ADD</button>
					</div>
				</div>
			</form>		
		</div>
	</div>
</div>
<?php
include 'footer.php'; 
?>