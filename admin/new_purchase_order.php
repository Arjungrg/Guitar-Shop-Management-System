<?php
	
	include('header.php');
	require_once('../common/connection.php');
	mysql_select_db("sandesh");
	if (isset($_POST['submit'])) {
		
		$pDate = $_POST['pDate'];
		$dDate = $_POST['dDate'];
		$make = $_POST['make'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];

		 // To protect MySQL injection for Security purpose
    		$pDate = stripslashes($pDate);
    		$dDate = stripslashes($dDate);
    		$make = stripslashes($make);
    		$quantity = stripslashes($quantity);
    		$price = stripslashes($price);

    		$pDate = mysql_real_escape_string($pDate);
    		$dDate = mysql_real_escape_string($dDate);
    		$make = mysql_real_escape_string($make);
    		$quantity = mysql_real_escape_string($quantity);
    		$price = mysql_real_escape_string($price);


		$query = "INSERT INTO purchase_order (pDate, dDate, make ,quantity, price) values ('$pDate','$dDate','$make', '$quantity', '$price')";
		if(mysql_query($query)) {
			echo "New purchase order has been recorded.";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sandesh Prasai's Guitar Shop</title>
</head>
<body>
	<form method="post" action="<?php $_PHP_SELF ?>">
		<label>Purchase Date</label> <br />
		<input type="date" name="pDate"></input> <br />
		<label>Delivery Date</label> <br />
		<input type="date" name="dDate"></input> <br />
		<label>Make</label> <br />
		<input type="text" name="make"></input> <br />
		<label>Quantity</label> <br />
		<input type="number" name="quantity"></input> <br />
		<label>Cost Price</label> <br />
		<input type="number" name="price"></input> <br />
		<input type="submit" name="submit" value="Save Details"></input>
	</form>
<?php
	include('../common/footer.php');
?>