<?php 
	// $connection = mysqli_connect(dbserver, dbuser, dbpass, dbname);
	$connection = mysqli_connect('localhost', 'root', '', 'uderdb');

	// mysql_cooect_errno();	mysqli_cooect_error();

	// Checking hte rerror
	if (mysqli_connect_errno()){
		die('Database cooection failded ' . mysqli_connect_error());
	}
	else{
		// echo " Connection Successfull. ";
	}
 ?>