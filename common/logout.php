<?php 
	session_start();
	session_destroy();
	header("location: ../staff/staff_login.php");
 ?>