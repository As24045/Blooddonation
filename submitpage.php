<?php

include 'header2.php';

if(empty($_SESSION['un']))
{
	header("location:login.php");
}
?>

<div class="rts-breadcrumb-area breadcrumb-bg bg_image">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
				<h1 class="title1">Home</h1>
			</div>
			</div>
		</div>
	</div>
</div>
	

<div class="container">
	<div class="row">
		<div class="col-md-5 col-lg-6 col-sm-12 welcomepanel">
			Welcome Admin
		</div>
		<div class="col-md-7 col-lg-6 col-sm-12">
			<img src="img/logo2.jpg">
			
		</div>
		
	</div>
</div>
<?php
include 'footer.php'; 
?>