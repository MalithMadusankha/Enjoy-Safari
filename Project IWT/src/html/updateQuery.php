<?php include('inc/header.php'); ?>

<?php
	$password = 'pas22';
	//pas11 admin Malith  
	//pas22 Other 
	$hashed_password = sha1($password);

	$query = " UPDATE user SET password = '{$hashed_password}' WHERE id = 8";

	$resultSet = mysqli_query($connection, $query);

	//mysqli_affected_rows() = returns number of rows affected

	if($resultSet) {
		echo "Query successful  <br>";
		echo mysqli_affected_rows($connection) . " Records updated <br>";
	}
	else {
		echo "DataBase query failed <br>";
	}

	?>


<?php include('inc/footer.php'); ?>