<?php
	$host='localhost';
	$user='root';
	$password='root';
	
	$db='sandesh';
	$con=mysql_connect('localhost','root','root')or die(mysql_error());
	mysql_select_db($db, $con)or die(mysql_error());
?>