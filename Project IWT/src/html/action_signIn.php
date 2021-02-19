
<?php 
	$pemail = $_POST['pemail'];
	$password = $_POST['password'];

	if($pemail == "malith@gmail.com" && $password == "pass"){
		echo "Login is success";
	}
	else{
		echo "Invalide Email Or Password";
	}
 ?>