<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "assignment";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Kết nối thất bại: " . $conn->connect_error);
	}
	echo '<script language="javascript"></script>';
	mysqli_set_charset($conn,"utf8");
?>