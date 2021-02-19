
<?php include('inc/headerAdmin.php'); ?>
<?php 
	$userList = '';
	// Taking users list
	$query = "SELECT * FROM user WHERE is_deleted=0 ORDER BY id";
	$users = mysqli_query($connection, $query);

	if(isset($users)){
		while ($user = mysqli_fetch_assoc($users)) {
			# code...
			$userList .= "</tr>";
			$userList .= "<td>" . $user['id'] . "</td>";
			$userList .= "<td>" . $user['f_name'] . "</td>";
			$userList .= "<td>" . $user['l_name'] . "</td>";
			$userList .= "<td>" . $user['email'] . "</td>";
			$userList .= "<td>" . $user['last_login'] . "</td>";
			$userList .= "<td><a href=\"modifyUser.php?user_id={$user['id']}\"> Edit</a></td>";
			$userList .= "<td><a href=\"deleteUser.php?user_id={$user['id']}\" onclick=\"return confirm('Are You Suver ?');\"> Delete</a></td>";
			$userList .= "<tr>";
		}
	}
	else{
		echo "Query Failed <br>";
	}
 ?>

<div class="userLink">
	<h2> User </h2> <a class="linkboder" href="AddUser.php"> + Add User + </a>
</div>
<div>
	<table border="1" width="60%">
		<tr font-color="white">
			<th>User ID</th>
			<th>Frist Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Last Login</th>
			<th>Edite</th>
			<th>Delete</th>
		</tr>
		
		<?php echo $userList; ?>
	</table>
</div>


<?php include('inc/footer.php'); ?>