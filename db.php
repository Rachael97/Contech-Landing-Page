<?php

	$host = "localhost";
	$user = "contech";
	$pass = "KlzYTYqTCEIHZqJ0";
	$dbname = "contech";
	
	//mysql_connect($host,$user,$pass);
	//mysql_select_db($dbname);
	
	$link = mysqli_connect($host,$user,$pass, $dbname) or die(mysqli_error());
	
?>