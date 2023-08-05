<?php
	
	session_start();
	$name = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'donate_blood';

	$conn = new mysqli($name, $username, $password, $database);
	if($conn->connect_error)
	{
		die('ckeck your connection..!'.$conn->connect_error);
	}
?>