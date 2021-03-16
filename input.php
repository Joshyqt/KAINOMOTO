<?php
	$error_message="";
	
		$link=mysqli_connect("localhost","root","","register_ics");

		if($link==false)
		{
			die("ERROR: Could not connect." .mysqli_connect_error());
		}
		$first_name=mysqli_real_escape_string($link, $_POST['firstName']);
		$last_name=mysqli_real_escape_string($link, $_POST['lastName']);
		$email_ad=mysqli_real_escape_string($link, $_POST['email']);
		$pass=mysqli_real_escape_string($link, $_POST['createpass']);
		$con_pass=mysqli_real_escape_string($link, $_POST['confirmpass']);
		$birth_date=mysqli_real_escape_string($link, $_POST['bday']);
		$add=mysqli_real_escape_string($link, $_POST['address']);
		$contact_no=mysqli_real_escape_string($link, $_POST['contactno']);
	
		$sql="INSERT INTO register (first_Name, last_Name, email, password, con_Pass, birth_Date, address, contact_No)
			VALUES ('$first_name', '$last_name', '$email_ad', '$pass', '$con_pass', '$birth_date', '$add', '$contact_no')";
		
		
		if(mysqli_query($link,$sql))
		{
			header('location:student/UserProfile.html');
		}
		else
		{
			echo "ERROR: Data not added! $sql." .mysqli_error($link);
		}
		
		mysqli_close($link);
?>