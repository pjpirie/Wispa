<?php
	$servername = "localhost";
	$username = "paulpiri_admin";
	$password = "Se@gate13";
	$dbname = "paulpiri_Wispa";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>