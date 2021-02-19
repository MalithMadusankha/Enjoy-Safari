
<?php include('inc/CustomerHeader.php'); ?>
<?php 
	$doller = $_SESSION['user_id'];
	// Taking users list
	$query = "SELECT * FROM user WHERE id = {$doller} ";
	$users = mysqli_query($connection, $query);
	$userList = '';
	if(isset($users)){
		while ($user = mysqli_fetch_assoc($users)) {
			# code...
			
			$userList .= "<h2> User ID " . "  :  " . $user['id'] . "</h2> <br>";
			$userList .= "<h2> Frist Name " . "  :  " . $user['f_name'] . "</h2> <br>";
			$userList .= "<h2> Last Name " . "  :  " . $user['l_name'] . "</h2> <br>";
			$userList .= "<h2> Email " . "  :  " . $user['email'] . "</h2> <br>";
			
			
		}
	}
	else{
		echo "Query Failed <br>";
	}
 ?>


<div class="cusPg">

	<h1 class="h1Mgn"> CUSTOMER PAGE </h1>		
		<pre><?php echo $userList; ?></pre>
</div>


<?php include('inc/footer.php'); ?>