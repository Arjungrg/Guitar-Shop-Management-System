<?php 
	session_start();

	if (!$_SESSION['username']) {
		header("location: ../staff/staff_login.php");
	}
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Sandesh Prasai's Guitar Shop</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!--[if lte IE 8]><link rel="stylesheet" href="../css/responsive-nav.css"><![endif]-->
    <!--[if gt IE 8]><!--><link rel="stylesheet" href="../css/nav.css"><!--<![endif]-->
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/responsive-nav.js"></script>
  </head>
  <body>
    <div role="navigation" id="foo" class="nav-collapse">
      <ul>
        <li><a href="index.php">home</a></li>
        <li><a href="../common/logout.php">Logout</a></li>
      </ul>
    </div>

    <div role="main" class="main">
      <a href="#nav" class="nav-toggle">Menu</a>
    <script>
      var navigation = responsiveNav("foo", {customToggle: ".nav-toggle"});
    </script>