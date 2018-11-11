<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(!isset($_POST["msg"])){
			return;
		}
	  	
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "wispa";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO comments (message,time) VALUE ('". $_POST["msg"] . "','" . date("Y-m-d h:i:sa") ."')";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
		
	}

?>