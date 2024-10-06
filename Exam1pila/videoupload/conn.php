<?php
	$conn = mysqli_connect('localhost', 'root', '', 'campus');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>