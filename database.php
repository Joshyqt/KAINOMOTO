<?php
	$conn = new mysqli("localhost", "root", "", "register_ics");
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
?> 