<?php 
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"db_OVS");
	if(!$con)
	{
	die("Connected failed");
	}
	
?>