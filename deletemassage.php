<?php
	
	include_once 'database/connect.php';

	if(empty($_SESSION["un"]))
{
	header("Location:login.php");
}

	$id =$_GET['id'];
	$sql = "delete from mail_us where id = '$id'";

	if ($conn->query($sql))
	{
		echo "<script> window.location.href = 'viewmassages.php'; </script>";
	}

?>