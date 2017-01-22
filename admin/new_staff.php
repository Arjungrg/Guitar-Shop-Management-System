<?php
	
	include('header.php');
	
	require_once('../common/connection.php');
	mysql_select_db("sandesh");
	if (isset($_POST['submit'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conpassword = $_POST['conpassword'];
		$email = $_POST['email'];

		 // To protect MySQL injection for Security purpose
    		$username = stripslashes($username);
    		$password = stripslashes($password);
    		$username = mysql_real_escape_string($username);
    		$password = mysql_real_escape_string($password);

		if ($username == '' || $password == '') {
			echo "<script>alert('Username and password cannot be empty.')</script>";
			exit();
		}

		if ($password != $conpassword){
			echo "Two password you have entered didnot match !!!";
			exit;
			}

		$check_username = "select * from staff where username = '$username'";
		$run = mysql_query($check_username);

		if (mysql_num_rows($run)>0) {
			echo "<script>alert('Username $username is already exist in system.')</script>";
			exit();
		}

		$query = "insert into staff (username,password,email) values ('$username','$password','$email')";
		if(mysql_query($query)) {
			echo "Staff has been added.";
		}
	}
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Sandesh Prasai's Guitar Shop</title>
</head>
<body>
<h2>Add New Staff</h2>
	<form method="post" action="new_staff.php">
		<label>Email</label> <br/>
		<input type="email" name="email"></input> <br/>
		<label>Username</label> <br/>
		<input type="text" name="username"></input> <br/>
		<label>Password</label> <br/>
		<input type="password" name="password"></input> <br/>
		<label>Confirm password</label> <br/>
		<input type="password" name="conpassword"></input> <br/>
		<input type="submit" name="submit" value="Add Staff"></input> <br/>
	</form>
<?php
	include('../common/footer.php');
?>