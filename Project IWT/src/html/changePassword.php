
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
			$user_id = $_POST['user_id'];
			$password = $_POST['password'];

		if (empty(trim($_POST['user_id']))) {
			$erros[] = 'User ID is required';
		}
		if (empty(trim($_POST['password']))) {
			$erros[] = 'Frist name is required';
		}

		// Checking if erros empty
		if(empty($erros)){
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			$hased_password = sha1($password);

			// Update Table Query
			$query = "UPDATE user SET ";
			$query .= "password = '{$hased_password}' ";
			$query .= " WHERE id = {$user_id} LIMIT 1 "; 
			$result = mysqli_query($connection, $query);
				if($result) {
					header('Location:users.php?user_modify=true');
				}
					else {
						$erros[] = " Can't update password";
					}
		}	
	}
 ?>

<div class="userLink">
	<a class="linkboder" href="modifyUser.php?user_id=<?php echo $user_id; ?>">  GO Back  </a>
	<h2> Change Password </h2> 
</div>

<div class="formAll">
	<?php 
		if(!empty($erros)){
			foreach ($erros as $key => $value1) {
				echo  '<p class="erro">' . $value1 . '</p> <br>';
			}
		}
	 ?>

	<form class="fAll" action="changePassword.php" method="post" target="blank">
	
		<p id="pf1"></p>
	
		<input class="formInput" type="hidden" id="user_id" name="user_id" <?php echo 'value="' . $user_id .'"';?> ><br>
		<label style="color:white" class="fAll" >  Frist Name : </label><br>
		<p id="pf1"></p>
							
		<span class="formInput" disabled> <?php echo $f_name;?> </span><br> 
		<label style="color:white" class="fAll" for="l_name">  Last Name : </label><br>
		<p id="pf1"></p>
	
		<span class="formInput" disabled> <?php echo $l_name;?> </span><br> 
			<br>
		<label style="color:white" class="fAll" for="pemail"> Email : </label><br>

		<span class="formInput" disabled> <?php echo $email;?> </span><br> 
			<br>
		<label style="color:white" class="fAll" for="password">  Password : </label><br>
		<p id="pf1"></p>
		<div class="">
			<input class="formInput" type="password" name="password" id="psw1">
			
		</div>
		<label class="chgPsw">Show Password</label>
		<input class="chgPsw1" type="checkbox" onclick="showPasword()">
		
		<div>
			<center>
				<input class="fSubmit button" type="submit" name="submit" value="UPDATE">
				<a class="linkboder" href="users.php"> Cancel</a>
			</center>
		</div>
					<br><br><br>
		
	</form>
</div>
		

<?php include('inc/footer.php'); ?>