
<?php include('inc/headerAdmin.php'); ?>

<?php 
	
	$erros = array();
	$user_id = '';

	if (isset($_GET['user_id'])) {
		$user_id = mysqli_real_escape_string($connection, $_GET['user_id']);
		$query = "SELECT * FROM user WHERE id = {$user_id} LIMIT 1";
	
			$resultSet = mysqli_query($connection, $query);
		
			if($resultSet) {
				if (mysqli_num_rows($resultSet) == 1) {
					//found
					$result = mysqli_fetch_assoc($resultSet);
					$user_id = $result['id'];
					$f_name = $result['f_name'];
					$l_name = $result['l_name'];
					$email = $result['email'];
				}
					else {
						header('Location:users.php?err=user_not_found');
					}
			}
			else {
						header('Location:users.php?err=query_faild');
			}
	}
	

	if (isset($_POST['submit'])) {
		if (empty(trim($_POST['user_id']))) {
			$erros[] = 'User ID is required';
		}
		if (empty(trim($_POST['f_name']))) {
			$erros[] = 'Frist name is required';
		}
		if (empty(trim($_POST['l_name']))) {
			$erros[] = 'Last name is required';
		}
		if (empty($_POST['pemail'])) {
			$erros[] = 'Email is required';
		}
			else if($_POST['pemail']){
			
				$email  = mysqli_real_escape_string($connection, $_POST['pemail']);
				
				$query = " SELECT * FROM user WHERE email = '{$email}' AND id != {$_POST['user_id']} LIMIT 1";
	
				$resultSet = mysqli_query($connection, $query);
	
				if ($resultSet) {
					if (mysqli_num_rows($resultSet) == 1) {
						$erros[] = 'Email already  exists';
					}
				}
			}
			$user_id = $_POST['user_id'];
			$f_name = $_POST['f_name'];
			$l_name = $_POST['l_name'];

		// Checking if erros empty
		if(empty($erros)){
			$user_id = mysqli_real_escape_string($connection, $_POST['user_id']);
			$f_name = mysqli_real_escape_string($connection, $_POST['f_name']);
			$l_name = mysqli_real_escape_string($connection, $_POST['l_name']);
			// Update Table Query
			$query = "UPDATE user SET ";
			$query .= "f_name = '{$f_name}', ";
			$query .= " l_name = '{$l_name}', ";
			$query .= " email = '{$email}' ";
			$query .= " WHERE id = {$user_id} LIMIT 1 "; 
			$result = mysqli_query($connection, $query);
				if($result) {
					header('Location:users.php?user_modify=true');
				}
					else {
						$erros[] = " Cannot modify data to Data Basa";
					}
		}	
	}
 ?>

<div class="userLink">
	<a class="linkboder" href="users.php"> << Back to user list </a>
	<h2> User Modifiy Page </h2> 
</div>

<div class="formAll">
	<?php 
		if(!empty($erros)){
			foreach ($erros as $key => $value1) {
				echo  '<p class="erro">' . $value1 . '</p> <br>';
			}
		}
	 ?>

	<form class="fAll" action="modifyUser.php" method="post" target="blank">
	
		<p id="pf1"></p>
	
		<input class="formInput" type="hidden" id="user_id" name="user_id" <?php echo 'value="' . $user_id .'"';?> ><br>
		<label style="color:white" class="fAll" for="f_name">  Frist Name : </label><br>
		<p id="pf1"></p>
							
		<input class="formInput" type="text" id="f_name" name="f_name" <?php echo 'value="' . $f_name . '"';?> ><br> 
		<label style="color:white" class="fAll" for="l_name">  Last Name : </label><br>
		<p id="pf1"></p>
	
		<input class="formInput" type="text" id="l_name" name="l_name" <?php echo 'value="' . $l_name . '"';?> ><br>
		<label style="color:white" class="fAll" for="pemail"> Email : </label><br>

		<input class="inputE" type="email" id="pemail" name="pemail" <?php echo 'value="' . $email . '"';?> ><br>
		<label style="color:white" class="fAll" for="password">  Password : </label><br>
		<p id="pf1"></p>
		<div class="userLink">
			<center> | <span cal>********</span> |</center> 
			<a class="linkboder" href="changePassword.php?user_id=<?php echo $user_id; ?>"> Chang Password</a>
		</div>
					<br><br><br>
		<input class="fSubmit button" type="submit" name="submit" value="SAVE"> <br> 
	</form>
</div>
		

<?php include('inc/footer.php'); ?>