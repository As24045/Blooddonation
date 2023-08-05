<?php
	
	include_once 'database/connect.php';

	if(empty($_SESSION["un"]))
{
	header("Location:login.php");
}

	$id =$_GET['id'];
	$sql1 = "delete from state where id = '$id'";
	$sql2 = "delete from city where state_id = '$id'";
	$sql3 = "delete from blood_bank where state_id = '$id'";
	$sql4 = "delete from camp where state_id = '$id'";
	$sql5 = "delete from past_requirement where state_id = '$id'";
	$sql6 = "delete from ragistration where state_id = '$id'";

	if ($conn->query($sql1) && $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4) && $conn->query($sql5) && $conn->query($sql6))
	{
		echo "<script> window.location.href = 'viewstate.php'; </script>";
	}

?>