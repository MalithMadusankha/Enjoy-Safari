<?php include('inc/header.php'); ?>
<h1>
<?php 
	$f_name = 'Gihan';
	$l_name = 'pradeep';
	$email = 'pradeep@gmail.com';
	$password = 'prdeepno';
	$is_deleted = 0;

	$hashed_password = sha1($password);
	//echo " Malith Password : {$hashed_password} ";

	$query = "INSERT INTO user (f_name, l_name, email, password, is_deleted) VALUES ('{$f_name}', '{$l_name}', '{$email}', '{$hashed_password}', '{$is_deleted}') ";

	$result = mysqli_query($connection, $query);

	if($result) {
		echo " Record added <br> ";
	}
	else {
		echo " Database query has failed <br> ";
	}
 ?>
</h1>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert Quary</title>
</head>
<body>
	
</body>
</html>
<?php include('inc/footer.php'); ?>