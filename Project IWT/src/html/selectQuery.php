<?php include('inc/header.php'); ?>

<h2>
	<pre>
	<?php 
		$query = "SELECT id, f_name, l_name, email FROM user";

		$resultSet = mysqli_query($connection, $query);

		if($resultSet) {
			echo " Query Successful <br> ";
			// Checking records and returned how many 
			echo mysqli_num_rows($resultSet) . " Record found <hr>";
			$table = '<table border="1" width="60%">'; 
			$table .= '<tr> <th> ID </th>  <th> Frist Name </th> <th> Last Name </th> <th> Email </th> </tr>';
			

			// To get table details
			while($record = mysqli_fetch_assoc($resultSet)) {
				$table .= '</tr>';
				$table .= '<td>' . $record['id'] . '</td>';
				$table .= '<td>' . $record['f_name'] . '</td>';
				$table .= '<td>' . $record['l_name'] . '</td>';
				$table .= '<td>' . $record['email'] . '</td>';
				$table .= '<tr>';
			}
			$table .= "</table>";


		}
		else {
			echo " Query failed <br> ";
		}
	 ?>
	 </pre>
</h2>

<?php echo $table; ?>



<?php include('inc/footer.php'); ?>