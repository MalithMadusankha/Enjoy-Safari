
<?php include('inc/headerAdmin.php'); ?>

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
		// Checking if erros empty
		if(empty($erros)){
			$f_name = mysqli_real_escape_string($connection, $_POST['f_name']);
			$l_name = mysqli_real_escape_string($connection, $_POST['l_name']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);

			$hashed_pasword = sha1($password);

			$query = "INSERT INTO user (f_name, l_name, email, password, is_deleted) VALUES ('{$f_name}', '{$l_name}', '{$email}', '{$hashed_pasword}', 0) ";

			$result = mysqli_query($connection, $query);
				if($result) {
					header('Location:users.php?user_ad=true');
				}
				else {
					$erros[] = " Cannot add data to Data Basa";
				}
		}	
	}

 ?>

<div class="userLink">
	<a class="linkboder" href="users.php"> << Back to user list </a>
	<h2> Add New User </h2> 
</div>

<div class="formAll">
	<?php 
		if(!empty($erros)){
			foreach ($erros as $key => $value1) {
				echo  '<p class="erro">' . $value1 . '</p> <br>';
			}
		}
	 ?>

	<form class="fAll" action="AddUser.php" method="post" target="blank">
		<label style="color:white" class="fAll" for="f_name">  Frist Name : </label><br>
		<p id="pf1"></p>
							
		<input class="formInput" type="text" id="f_name" name="f_name" placeholder="John" required autofocus><br> 
		<label style="color:white" class="fAll" for="l_name">  Last Name : </label><br>
		<p id="pf1"></p>
	
		<input class="formInput" type="text" id="l_name" name="l_name" placeholder="Anta" required><br>
		<label style="color:white" class="fAll" for="pemail"> Email : </label><br>

		<input class="inputE" type="email" id="pemail" name="pemail" placeholder="johnanta@gmail.com" required><br>
		<label style="color:white" class="fAll" for="password">  Password : </label><br>
		<p id="pf1"></p>

		<input class="formInput" type="password" id="password" name="password" placeholder="abc#12" required><br>
					<br><br><br>
		<input class="fSubmit button" type="submit" name="submit" value="SAVE"> <br> 
	</form>
</div>
		

<?php include('inc/footer.php'); ?>