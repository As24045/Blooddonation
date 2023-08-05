<?php
	
	include_once 'database/connect.php';

	if(empty($_SESSION["un"]))
{
	header("Location:login.php");
}

	$id =$_GET['id'];
	$sql = "delete from blood_group where id = '$id'";
	$sql1 = "delete from past_requirement where blood_g = '$id'";
	$sql2 = "delete from ragistration where blood_g = '$id'";

	if ($conn->query($sql) && $conn->query($sql2) && $conn->query($sql3))
	{
		echo "<script> window.location.href = 'viewbloodgroup.php'; </script>";
	}

?>