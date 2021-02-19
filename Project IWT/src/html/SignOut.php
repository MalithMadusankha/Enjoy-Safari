<?php 
	session_start();
	$_SESSION = array();

	session_destroy();
	header('Location: SignIn.php?SignOut=yes');
 ?>