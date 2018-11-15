<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(!isset($_POST["msg"])){
			return;
		}
	  	
		
		include("connect.php");

		$sql = "INSERT INTO comments (message,time) VALUE ('". $_POST["msg"] . "','" . date("Y-m-d h:i:sa") ."')";

		if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
			header("Location: http://paulpirie.com/Wispa");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		
		
	}

?>