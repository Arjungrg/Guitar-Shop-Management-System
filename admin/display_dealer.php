<?php

          include('header.php');
          $dbcon = mysqli_connect('localhost','root','root','sandesh') or die(mysqli_error());
          $getdata = "SELECT * FROM dealer";

          if($result = mysqli_query($dbcon,$getdata))
          {
          echo "<h3>Here is the list of Dealer:</h3>";
          echo "<table style: border 1px solid white>";
          echo "<tr>
                    <th>Dealer ID</th>
                    <th>Dealer Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact No</th>
                    <th>Delete</th>
                </tr>";
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>";
            echo $row['id'];
            echo "</td><td>";
            echo $row['dealer_name'];
            echo "</td><td>";
            echo $row['address'];
            echo "</td><td>";
            echo $row['email'];
            echo "</td><td>";
            echo $row['contact'];
            echo "</td><td>";
          ?>
            <a href="delete_dealer.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')"
               style="text-decoration: none; color: black">Delete Record</a>

<?php
    echo "</td></tr>";
          }

          echo "</table>";

        }
        include('../common/footer.php');
?>