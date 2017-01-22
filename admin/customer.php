<?php 
	
	include('header.php');
	require_once('../common/connection.php');
	mysql_select_db("sandesh");
	if (isset($_POST['submit'])) {
		if (empty($_POST['first_name']) || empty($_POST['last_name'] || empty($_POST['address']))){
            echo "Some fields are missing.";
            exit();
        } else {
        	$first_name = $_POST['first_name'];
        	$last_name = $_POST['last_name'];
        	$address = $_POST['address'];

		 // To protect MySQL injection for Security purpose
    		$first_name = stripslashes($first_name);
    		$last_name = stripslashes($last_name);
    		$address = stripslashes($address);

    		$first_name = mysql_real_escape_string($first_name);
    		$last_name = mysql_real_escape_string($last_name);
    		$address = mysql_real_escape_string($address);

			$query = "insert into customer (first_name,last_name,address) values ('$first_name','$last_name','$address')";
			
			if(mysql_query($query)) {
				echo "Customer details has been added.";
			} else {
				echo "Somthing went wrong.";
			}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sandesh Prasai's Guitar Shop</title>
</head>
<body>
<h2>Add Customer Details</h2>
	<form method="post" action="<?php $_PHP_SELF ?>">
		<label>First Name</label> <br/>
		<input type="text" name="first_name" required></input> <br/>
		<label>Last Name</label> <br/>
		<input type="text" name="last_name" required></input> <br/>
		<label>Address</label> <br/>
		<input type="text" name="address" required></input> <br/>
		<input type="submit" name="submit" value="Save Details"></input> <br/>
	</form>
</body>
</html>