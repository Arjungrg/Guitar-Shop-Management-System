<?php
	include('header.php');
	require_once('../common/connection.php');
	mysql_select_db("sandesh");
	if (isset($_POST['submit'])) {
		
		$gMake = $_POST['gMake'];
		$gModel = $_POST['gModel'];
		$gColor = $_POST['gColor'];
		$purposed_sp = $_POST['purposed_sp'];
		$rack_no = $_POST['rack_no'];
		$status = $_POST['status'];

		 // To protect MySQL injection for Security purpose
    		$gMake = stripslashes($gMake);
    		$gModel = stripslashes($gModel);
    		$gColor = stripslashes($gColor);
    		$purposed_sp = stripslashes($purposed_sp);
    		$rack_no = stripslashes($rack_no);
    		$status = stripslashes($status);

    		$gMake = mysql_real_escape_string($gMake);
    		$gModel = mysql_real_escape_string($gModel);
    		$gColor = mysql_real_escape_string($gColor);
    		$purposed_sp = mysql_real_escape_string($purposed_sp);
    		$rack_no = mysql_real_escape_string($rack_no);
    		$status = mysql_real_escape_string($status);


		$query = "INSERT INTO add_guitar (guitar_make,guitar_model,guitar_color,purposed_sp,damaged_status,rack_no) values ('$gMake','$gModel','$gColor', '$purposed_sp', '$status', '$rack_no')";
		if(mysql_query($query)) {
			echo "New Guitar has been added.";
		}
	}
 ?>
<h1>Add New Guitar</h1>
	<form method="post" action="<?php $_PHP_SELF ?>">
		<label>Guitar Make</label> <br/>
		<input type="text" name="gMake"></input> <br/>
		<label>Guitar Model</label> <br/>
		<input type="text" name="gModel"></input> <br/>
		<label>Guitar Color</label> <br/>
		<input type="text" name="gColor"></input> <br/>
		<label>Purposed Selling Price</label> <br/>
		<input type="number" name="purposed_sp"></input> <br/>
		<label>Rack No</label> <br />
		<input type="number" name="rack_no"> </input> <br/>
		<label>Damage Status: </label> <br />
		<select name="status">
			<option value="Ok">Ok</option>
			<option value="Damaged">Damaged</option>
		</select> <br />
		<input type="submit" name="submit" value="Save Guitar Details"></input> <br/>
	</form>
<?php
	include('../common/footer.php');
?>