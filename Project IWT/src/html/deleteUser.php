
<?php include('inc/headerAdmin.php'); ?>

<?php 
	
	if (isset($_GET['user_id'])) {

		$user_id = mysqli_real_escape_string($connection, $_GET['user_id']);

		if($user_id == $_SESSION['user_id']){
			// Cannont delet  user ID  number
			header('Location:users.php?err=cannot delete');
		}
			else {// Start Deleting
				$query = " DELETE FROM user WHERE id = {$user_id} LIMIT 1";
			
				$resultSet = mysqli_query($connection, $query);
				if($resultSet) {
					header('Location:users.php?user_Acnt=Delete successful');
					// echo mysqli_affected_rows($connection) . " Records Deleted <br>";
				}
				else {
					header('Location:users.php?err=Delete Failed');
				} 
			}	//end of delete		
	}
	else {
		header('Location:users.php');
	}
?>

<?php include('inc/footer.php'); ?>