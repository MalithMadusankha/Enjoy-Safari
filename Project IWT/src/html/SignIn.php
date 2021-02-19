<?php session_start(); ?>
<?php include('inc/header.php'); ?>
<?php 
	// check for form submission
	if(isset($_POST['Login'])){
		$erros =  array();
		// check if the username and password has been entered 
		if(!isset($_POST['pemail'])|| strlen($_POST['pemail']) < 1){
			$erros[] = 'Username Invalide or Missing ';
		}
		if(!isset($_POST['password'])|| strlen($_POST['password']) < 1){
			$erros[] = 'Password Invalide or Missing ';
		}
		// check if there are any erros  in the form
		if(empty($erros)){
			// save user name and password into variables
			$email = mysqli_real_escape_string($connection, $_POST['pemail']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			$hashed_password = sha1($password);
			// prepare data base query
			$query = " SELECT * FROM user WHERE email = '{$email}' AND password = '{$hashed_password}' LIMIT 1 ";

			$resultSet = mysqli_query($connection, $query);

			if($resultSet) {
				// query successful
				if(mysqli_num_rows($resultSet) == 1){
				// Valide user
					$user = mysqli_fetch_assoc($resultSet);
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['f_name'] = $user['f_name'];
					$_SESSION['l_name'] = $user['l_name'];
					// Updating  database
					$query = "UPDATE user SET last_login = NOW()";
					$query .= " WHERE id = {$_SESSION['user_id']}";

					$resultSet = mysqli_query($connection, $query);

					if(!$resultSet){
						die("Database query failed. <br>");
					}

				//redirect to users.php
					if($user['id'] == 1){
						header('Location: users.php');
					}
						else {
							header('Location:customerPage.php?cus5=ok');
						}
					
				}
				else{
					// username and password invalide
					$erros[] = 'username and password invalide';
				}
			}
			else{
				// Database query failed
				$erros[] = 'Database query has failed';
			}
		}
	}

 ?>


	<br><br>
	<!-- SingUp form -->

<img class="" src="../images/SignIn.png" alt="SingIn" width="100" height="100" style="margin: 30px">	
	<h1 style="margin-left: 30px; color: white;"> SignIn </h1> <br>
	<div class="formAll">
	<p style="color:red">		
	<?php 
		if(isset($erros) && !empty($erros)) {
			echo '<p class = "erro"> invalide username or password </p>';
		}
	?>
	<?php 
		if(isset($_GET['SignOut'])) {
			echo '<p class = "erro1"> You have successful SignOut </p>';
		}
	?>
	<!-- <p> invalide username or password</p> -->
 	</p>		
		<form action="SignIn.php" method="post" onsubmit="return validateForm();">
			<label class="fAll" for="pemail" style="color:white"> Email : </label><br>
			<input class="inputE" type="email" id="pemail" name="pemail" placeholder="type your Email.." required autofocus><br>
			<label class="fAll" for="password" style="color:white">  Password : </label><br>
			<input class="inputE" type="password" id="password" name="password" placeholder="type your password.. "required>
			<br>					
			<br>
			<input class="fSubmit button" type="submit" name="Login" value="LOGIN"> <br> 
			<a href="#" class="google"><i class="fa fa-google fa-fw"></i> Login with Google</a>
		</form>
	</div>
			
 	<!-- End Of Form-->	
<?php include('inc/footer.php'); ?>