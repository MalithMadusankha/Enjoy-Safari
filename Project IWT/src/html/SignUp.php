<?php include('inc/header.php'); ?>

<?php 
	
	$erros = array();

	if (isset($_POST['submit'])) {
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
				$query = "SELECT * FROM user WHERE email = '{$email}' LIMIT 1";

				$resultSet = mysqli_query($connection, $query);
	
				if ($resultSet) {
					if (mysqli_num_rows($resultSet) == 1){
						$erros[] = 'Email already  exists';
					}
				}
			}
		if (empty(trim($_POST['password']))) {
			$erros[] = 'Password is required';
		}
		if (empty(trim($_POST['rePassword']))) {
			$erros[] = 'Re-password is required';
		}
		// Checking if erros empty
		if(empty($erros) && $_POST['password'] == $_POST['rePassword']) {

			$f_name = mysqli_real_escape_string($connection, $_POST['f_name']);
			$l_name = mysqli_real_escape_string($connection, $_POST['l_name']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);

			$hashed_pasword = sha1($password);

			$query = "INSERT INTO user (f_name, l_name, email, password, is_deleted) VALUES ('{$f_name}', '{$l_name}', '{$email}', '{$hashed_pasword}', 0) ";

			$result = mysqli_query($connection, $query);
				if($result) {
					header('Location:SignIn.php?user_ad=true');
				}
				else {
					$erros[] = " Cannot add data to Data Basa";
				}
		}	
	}

 ?>

	<br><br>
	<!-- SingUp form -->
	
	<img src="../images/Signup.webp" alt="SingIn" width="100" height="100" style="margin: 30px">
		<h1 style="margin-left: 30px; color:white;"> SignUp </h1> <br>
		<h4 style="margin-left: 30px; color:white;">

			After creating an account, you'll be able to track your payment status, track the confirmation
			and you can also rate the tour after you finished the tour </h4>

		<div class="formAll">
			
			<?php 
				if(!empty($erros)){
					foreach ($erros as $key => $value1) {
						echo  '<p class="erro">' . $value1 . '</p> <br>';
					}
				}
	 		?>

				<form class="fAll" action="SignUp.php" method="post" target="blank">
					<label style="color:white" class="fAll" for="f_name">  Frist Name : </label><br>
					<input class="formInput" type="text" id="f_name" name="f_name" placeholder="John" required  autofocus><br>
					<label style="color:white" class="fAll" for="l_name">  Last Name : </label><br>
					<input class="formInput" type="text" id="l_name" name="l_name" placeholder="Anta" required><br>
					<label style="color:white" class="fAll" for="pemail"> Email : </label><br>
					<input class="inputE" type="email" name="pemail" id="pemail" placeholder="johnanta@gmail.com" required><br>
					<label style="color:white" class="fAll" for="password">  Password : </label><br>
					<input class="formInput" type="password" id="password" name="password" placeholder="abc#12" required><br>
					<label style="color:white" class="fAll" for="rePassword">  Re-Password : </label><br>
					<input class="formInput" type="password" id="rePassword" name="rePassword" placeholder="abc#12" required><br> <br>
					
				<br>
				<input class="fSubmit button" type="submit" name="submit" value="SUBMIT"> <br> 
				<a href="#" class="google"><i class="fa fa-google fa-fw"></i> Sigin with Google</a>
			</form>
		</div>
			
 	<!-- End Of Form-->	
<?php include('inc/footer.php'); ?>