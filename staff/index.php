<?php

          include('header.php');
          $dbcon = mysqli_connect('localhost','root','root','sandesh') or die(mysqli_error());
          $getdata = "SELECT * FROM add_guitar";

          if($result = mysqli_query($dbcon,$getdata))
          {
          echo "<h3>Here is the list of Guitar:</h3>";
          echo "<table style: border 1px solid white>";
          echo "<tr>
                    <th>ID</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Purposed Selling Price</th>
                    <th>Rack No</th>
                    <th>Damage Status</th>
                    <th>Action</th>
                </tr>";

          while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>";
            echo $row['guitar_id'];
            echo "</td><td>";
            echo $row['guitar_make'];
            echo "</td><td>";
            echo $row['guitar_model'];
            echo "</td><td>";
            echo $row['guitar_color'];
            echo "</td><td>";
            echo $row['purposed_sp'];
            echo "</td><td>";
            echo $row['rack_no'];
            echo "</td><td>";
            echo $row['damaged_status'];
            echo "</td><td>";
            ?>
            <a href="edit.php?id=<?php echo $row['guitar_id'] ?>" style="text-decoration: none; color: black">Edit</a>
<?php
    echo "</td></tr>";
          }

          echo "</table>";

        }
        include('../common/footer.php');
?>