<?php
  
  session_start();
  if (isset($_SESSION['adminUsername'])) {
    header("location: index.php");
  } else {
  
    require_once('../common/connection.php');
        
        if(isset($_POST['submit'])) {
          if (empty($_POST['username']) || empty($_POST['password'])) {
            echo "Some fields are missing.";
          } else{

          // Define $username and $password
          $username=$_POST['username'];
          $password=$_POST['password'];
          
          // Establishing Connection with Server by passing server_name, user_id and password as a parameter
          $connection = mysql_connect("localhost", "root", "root");
          
          // To protect MySQL injection for Security purpose
          $username = stripslashes($username);
          $password = stripslashes($password);
          $username = mysql_real_escape_string($username);
          $password = mysql_real_escape_string($password);
          
          // Selecting Database
          $db = mysql_select_db("sandesh", $connection);
          
          // SQL query to fetch information of registerd users and finds user match.
          $query = mysql_query("select * from admin where password='$password' AND username='$username'", $connection);
          
          $rows = mysql_num_rows($query);
          if ($rows == 1) {
              session_start();
              $_SESSION['adminUsername']=$username; // Initializing Session
            header("location: index.php"); // Redirecting To Other Page
          } else {
            echo "Invalid Username or Password";
          }
          mysql_close($connection); // Closing Connection
        }
      }
    ?>
<html>
<head>
 <title>Sandesh Prasai's Guitar Shop</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body class="formBody">
    <!-- begin content -->
    <div class="login-page">
      <div class="form">
        <div class="error">
          <?php //echo $error; ?>
        </div>
        <h4>LOGIN : Admin</h4>
				  <form action="" method="post">
            <input type="text" name="username" placeholder="Username" /> <br />
            <input type="password" name="password" placeholder="Password" /> <br />
            <input type="submit" value="Log In" name="submit" />
				</form>
        Login as <a href="../staff/staff_login.php">Warehouse Staff ?</a>
      </div>
    </div>
   
<?php
  }
  include('../common/footer.php');
?>