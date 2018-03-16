<?php
	// Set up connection credentials
	$user = "rober375_robert";
	$pass = "";
	$url = "localhost";
	$db = "rober375_db_christina";
	$link = mysqli_connect($url,$user,$pass,$db);//PC
	//$link = mysqli_connect($url,$user,$pass,$db, "8888");//Mac
	
	//Confirm proper credentials were successful
	if(mysqli_connect_error()){
		printf("Connect Failed: %s\n", mysqli_connect_error());
		exit();
	}
?>
