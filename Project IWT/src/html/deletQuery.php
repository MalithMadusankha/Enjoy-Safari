<?php include('inc/header.php'); ?>

<?php 
	$query = " DELETE FROM user WHERE id = 6 LIMIT 1";

	$resultSet = mysqli_query($connection, $query);

	//mysqli_affected_rows() = returns number of rows affected

	if($resultSet) {
		echo "Query successful  <br>";
		echo mysqli_affected_rows($connection) . " Records Deleted <br>";
	}
	else {
		echo "DataBase query failed <br>";
	}

	?>


<?php include('inc/footer.php'); ?>