<?php
	
	include_once 'database/connect.php';

	if(empty($_SESSION["un"]))
{
	header("Location:login.php");
}

	$id =$_GET['id'];
	$sql1 = "delete from city where id = '$id'";
	$sql2 = "delete from blood_bank where city_id = '$id'";
	$sql3 = "delete from camp where city_id = '$id'";
	$sql4 = "delete from past_requirement where city_id = '$id'";
	$sql5 = "delete from ragistration where city_id = '$id'";

	if ($conn->query($sql1) && $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4) && $conn->query($sql5))
	{
		echo "<script> window.location.href = 'viewcity.php'; </script>";
	}

?>