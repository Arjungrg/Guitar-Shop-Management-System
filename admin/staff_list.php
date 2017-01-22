<?php
      include('header.php');
      
          $dbcon = mysqli_connect('localhost','root','root','sandesh') or die(mysqli_error());
          $getdata = "SELECT * FROM staff";

          if($result = mysqli_query($dbcon,$getdata))
          {

          echo "<table style: border 1px solid white>";
          echo "<tr><th>ID</th><th>User Name</th><th>Email</th><th>Action</th></tr>";

          while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>";
            echo $row['id'];
            echo "</td><td>";
            echo $row['username'];
            echo "</td><td>";
            echo $row['email'];
             echo "</td><td>";
            ?>
            <a href="delete_staff.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')"
               style="text-decoration: none; color: black">Delete Record</a>

<?php
    echo "</td></tr>";
          }

          echo "</table>";

        }
        include('../common/footer.php');
?>