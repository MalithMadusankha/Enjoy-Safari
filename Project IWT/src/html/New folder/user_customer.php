
<?php include('inc/CustomerHeader.php'); ?>
<?php 
	$cus = ''; 
	// Taking users list
	$query = "SELECT * FROM user WHERE id = {$_SESSION['user_id']}";
	$users = mysqli_query($connection, $query);

	if(isset($users)){
		while ($user = mysqli_fetch_assoc($users)) {
			# code...
			$cus .= "<div class=\"formAll\">";
			$cus .= "<h3>" . $user['id'] . "</h3> <br>";
			$cus .= "<h3>" . $user['f_name'] . "</h3> <br>";
			$cus .= "<h3>" . $user['l_name'] . "</h3> <br>";
			$cus .= "<h3>" . $user['email'] . "</h3> <br>";
			$cus .= "<h3>" . $user['last_login'] . "</h3> <br>";
			$cus .= "</div>";
	}
 ?>

<div class="userLink">
	<h2> User </h2>
</div>
<div>
		<!-- <?php echo $cus; ?> -->
</div>
	<script type="text/javascript" src="../js/HSlideShow.js"></script>
	<script type="text/javascript" src="../js/emailValidate.js"></script>
	</body>
</html>
<!-- <?php include('inc/footer.php'); ?> -->