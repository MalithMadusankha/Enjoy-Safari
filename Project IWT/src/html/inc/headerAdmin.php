<?php session_start(); ?>
<?php include('conection.php'); ?>
<?php 
	if(!isset($_SESSION['user_id'])){
		header('location: SignIn.php');
	}
 ?>
<!DOCTYPE html>
<html>
	<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Enjoy Safari </title>
		<link rel="styleSheet" type="text/css" href="../style/homeStyle.css"> </link>
		<link rel="styleSheet" type="text/css" href="../style/homeStyleMy.css"> </link>
		<link rel="styleSheet" type="text/css" href="../style/ContactUsStyle.css"> </link>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../style/userStyle.css">
		<style>
			hr.newF{
				float:bottom;
				margin-top: 10px;
				border:1px solid black;
			}
		</style>
	</head>
	<body class="bimg">
	<header>	
		<div>
		<!-- Add Logo -->
			<a href="HomeMyUserLog2.php">
			<img class="floatLogo" src="../images/logo.png" alt="Enjoy Safari logo" width="100" height="100"></a>
			<a href="HomeMyUserLog2.php"><h1 class="floatWebName">Enjoy Safari</h1></a>>
		<!-- Add Social Media -->
			<a href ="https://www.facebook.com/Enjoy-Safari-105012397801586/">
				<img class="floatL iconM" src="../images/fbIcon.png" alt="Face book" width="30" height="30"></a>
			<a href =""><img class="floatL" src="../images/Instagram.png" alt="Instagram" width="30" height="30"></a>
			<a href =""><img class="floatL" src="../images/GoogleEPlus.png" alt="GoogleEPlus" width="30" height="30"></a>
			<a href =""><img class="floatLogo" src="../images/twitter.png" alt="Twitter" width="30" height="30"></a>
		<!-- Login area -->
			<div class="userIcon1">
				<a href = "users.php">
				<img class="imgAdmin" src="../images/malith.png" alt="SingIn" width="70" height="70"></a>
			</div>
			
	
		<!-- Creat Menu Bar-->
		<div class="menuH" >
		
			<a class="menu" href = "HomeMyUserLog2.php"> Home </a> 
			<a class="menu" href = "" onclick="return confirm('Are You Suver ? This page has not created');"> Safari Parks </a>
			<a class="menu" href = "#"  onclick="return confirm('Are You Suver ? This page has not created');"> Camping </a>
			<a class="menu" href = ""  onclick="return confirm('Are You Suver ? This page has not created');"> Vechical Hire </a>
			<a class="menu" href = ""  onclick="return confirm('Are You Suver ? This page has not created');"> Hotel Booking </a>
			<a class="menu" href = "ContacUsLog2.php"> Contact Us </a>
			<a class="menu" href = ""  onclick="return confirm('Are You Suver ? This page has not created');">About US </a>
			<!-- Making Search Bar-->
			<div class="search-container brdrColor">
				<form method="post" >
					<input class="search-container" type="text" value="Search.." name="search">
					<button type="submite" name="submit"><i class="fa fa-search" style="font-size:20px;color:red;"></i></button>
				</form>
			</div>   
			<!--  -->
		</div>
	</header>

	<div class="userHeader">
		<div class="nameAp"> <h2>User Management System</h2></div>
		
		<div class="userName"> Welcome Admin  <?php echo $_SESSION['f_name'] . " " . $_SESSION['l_name']; ?> 
			<a href="SignOut.php">SignOut</a></div>
	</div>