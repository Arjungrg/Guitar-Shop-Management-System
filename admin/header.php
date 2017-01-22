<?php 
	session_start();

	if (!$_SESSION['adminUsername']) {
		header("location: ../staff/staff_login.php");
	}
 ?>
<!-- begin header -->
<!DOCTYPE html>
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
      <li class="active"><a href="index.php">Home</a></li>
      <li class="active"><a href="new_staff.php">Add New Staff</a></li>
      <li class="active"><a href="staff_list.php">Staff List</a></li>
      <li class="active"><a href="customer.php">Add Customer</a></li>
      <li class="active"><a href="display_customer.php">Display All Customer</a></li>
      <li class="active"><a href="add_guitar.php">Add Guitar</a></li>
      <li class="active"><a href="new_purchase_order.php">New Purchase Order</a></li>
      <li class="active"><a href="index.php">All guitar</a></li>
      <li class="active"><a href="display_purchase_order.php">Display All Order</a></li>
      <li class="active"><a href="new_dealer.php">Add Dealer</a></li>
      <li class="active"><a href="display_dealer.php">Display Dealer</a></li>
      <li class="active"><a href="../common/logout.php">Logout</a></li>
    </ul>
  </div>

    <div role="main" class="main">
      <a href="#nav" class="nav-toggle">Menu</a>
    <script>
      var navigation = responsiveNav("foo", {customToggle: ".nav-toggle"});
    </script>