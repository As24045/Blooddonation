<?php
	
	include_once 'database/connect.php';

	if(empty($_SESSION["un"]))
{
	header("Location:login.php");
}

	$id =$_GET['id'];
	$sql = "delete from blood_bank where id = '$id'";

	if ($conn->query($sql))
	{
		echo "<script> window.location.href = 'viewbloodbank.php'; </script>";
	}

?>