<?php
	echo "hi";
	include("connect.php");
	$sql = "SELECT * FROM comments";
	$result = mysqli_query($conn, $sql) or die("BAD Query: $sql");
?>