<?php

          include('header.php');
          $dbcon = mysqli_connect('localhost','root','root','sandesh') or die(mysqli_error());
          $getdata = "SELECT * FROM purchase_order";

          if($result = mysqli_query($dbcon,$getdata))
          {
          echo "<h3>Here is the list of Guitar:</h3>";
          echo "<table style: border 1px solid white>";
          echo "<tr>
                    <th>Order ID</th>
                    <th>Purchase Date</th>
                    <th>Delivery Date</th>
                    <th>Make</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>";

          while ($row = mysqli_fetch_array($result)) {
            echo "<tr><td>";
            echo $row['order_id'];
            echo "</td><td>";
            echo $row['pDate'];
            echo "</td><td>";
            echo $row['dDate'];
            echo "</td><td>";
            echo $row['make'];
            echo "</td><td>";
            echo $row['quantity'];
            echo "</td><td>";
            echo $row['price'];
            echo "</td><td>";
            ?>
            <a href="delete_order.php?id=<?php echo $row['order_id'] ?>" onclick="return confirm('Are you sure?')"
               style="text-decoration: none; color: black">Delete Record</a>

<?php
    echo "</td></tr>";
          }

          echo "</table>";

        }
        include('../common/footer.php');
?>