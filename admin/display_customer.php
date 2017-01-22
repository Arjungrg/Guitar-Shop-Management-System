<?php

          include('header.php');
          $dbcon = mysqli_connect('localhost','root','root','sandesh') or die(mysqli_error());
          $getdata = "SELECT * FROM customer";

          if($result = mysqli_query($dbcon,$getdata))
          {
          echo "<h3>Here is the list of customer:</h3>";
          echo "<table style: border 1px solid white>";
          echo "<tr>
                    <th>Customer ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Delete</th>
                </tr>";

          while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>";
            echo $row['id'];
            echo "</td><td>";
            echo $row['first_name'];
            echo "</td><td>";
            echo $row['last_name'];
            echo "</td><td>";
            echo $row['address'];
            echo "</td><td>";
          ?>
            <a href="delete_customer.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')"
               style="text-decoration: none; color: black">Delete Record</a>

<?php
    echo "</td></tr>";
          }

          echo "</table>";

        }
        include('../common/footer.php');
?>