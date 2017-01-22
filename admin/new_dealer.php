<?php 
	
	include('header.php');
	require_once('../common/connection.php');
	mysql_select_db("sandesh");
	if (isset($_POST['submit'])) {
        	$dealer_name = $_POST['dealer_name'];
        	$address = $_POST['address'];
        	$email = $_POST['email'];
        	$contact = $_POST['contact'];

		 // To protect MySQL injection for Security purpose
    		$dealer_name = stripslashes($dealer_name);
    		$address = stripslashes($address);
    		$email = stripslashes($email);
    		$contact = stripslashes($contact);

    		$dealer_name = mysql_real_escape_string($dealer_name);
    		$address = mysql_real_escape_string($address);
    		$email = mysql_real_escape_string($email);
    		$contact = mysql_real_escape_string($contact);

			$query = "insert into dealer (dealer_name, address, email, contact) values ('$dealer_name', '$address', '$email', '$contact')";
			
			if(mysql_query($query)) {
				echo "Dealer details has been added.";
			} else {
				echo "Somthing went wrong.";
			}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sandesh Prasai's Guitar Shop</title>
</head>
<body>
<h2>Add Dealer Details</h2>
	<form method="post" action="<?php $_PHP_SELF ?>">
		<label>Dealer Name</label> <br/>
		<input type="text" name="dealer_name" required></input> <br/>
		<label>Address</label> <br/>
		<input type="text" name="address" required></input> <br/>
		<label>Email</label> <br/>
		<input type="email" name="email" required></input> <br/>
		<label>Contact No</label> <br />
		<input type="number" name="contact" required></input> <br />
		<input type="submit" name="submit" value="Save Details"></input> <br/>
	</form>
</body>
</html>