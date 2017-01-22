 <?php

 		include('header.php');
		if (isset($_GET['id'])) {
          $id = $_GET['id'];

          $dbcon = mysqli_connect('localhost','root','root','sandesh');
          $sql = "DELETE FROM add_guitar WHERE guitar_id = '$id' ";
		
		// sql to delete a record


		if (mysqli_query($dbcon, $sql)) {
    		echo "Record deleted successfully";
		} else {
    		echo "Error deleting record.";
		}

		mysqli_close($dbcon);
	}
	?>
