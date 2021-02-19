<?php include('conection.php'); ?>
<?php session_start(); ?>
<?php 
	// function.php
	function verifiecdEmail($setEmail){
		// Checking if email already  exists
		$email  = mysqli_real_escape_string($connection, $setEmail);
		$query = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1";

		$resultSet = mysqli_query($connection, $query);

		if ($resultSet) {
			if (mysqli_num_rows($resultSet) == 1){
				$erros[] = 'Email already  exists';
			}
		}

	}
 ?>