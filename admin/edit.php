<?php
          include('header.php');

          if (isset($_POST['update'])) {
            $id= $_POST['id'];
            $make = $_POST['guitar_make'];
            $model = $_POST['guitar_model'];
            $color = $_POST['guitar_color'];
            $purposed_selling_price = $_POST['purposed_sp'];
            $status = $_POST['status'];
            $rack_no = $_POST['rack_no'];

            $condb = mysqli_connect('localhost','root','root','sandesh');
            $update = " UPDATE add_guitar SET guitar_make = '$make', guitar_model = '$model', guitar_color = '$color', purposed_sp = '$purposed_selling_price', rack_no = '$rack_no', damaged_status = '$status' WHERE guitar_id = '$id' ";
              
              if (mysqli_query($condb,$update)) {
                echo "Update success !";
                exit();
              } else {
                echo "Something went wrong!";
              }

              mysqli_close($condb);
        }
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

          $dbcon = mysqli_connect('localhost','root','root','sandesh') or die(mysqli_error());
          $getdata = "SELECT * FROM add_guitar where guitar_id = '$id' ";

          if($result = mysqli_query($dbcon,$getdata))
          {
            while ($row = mysqli_fetch_array($result)) {

           ?>
          <html>
          <h1>Update Guitar Details</h1>
           <form action="<?php $_PHP_SELF ?>" method="post">

            <input type="hidden" name="id" value="<?php echo $row['guitar_id']; ?>"/>

            Guitar Make:<br/>
            <input type="text" name="guitar_make" value="<?php echo $row['guitar_make'] ?>"/>

            <br/><br/>

            Guitar Model<br/>
            <input type="text"  name="guitar_model" value="<?php echo $row['guitar_model'] ?>"/>
            <br/><br/>


            Guitar Color<br/>
            <input type="text"  name="guitar_color" value="<?php echo $row['guitar_color'] ?>"/>
            <br/><br/>

            Puroposed Selling Price<br>
            <input type="number"  name="purposed_sp" value="<?php echo $row['purposed_sp'] ?>"/>
            <br/><br/>

             Rack No <br />
            <input type="number"  name="rack_no" value="<?php echo $row['rack_no'] ?>"/>
            <br/><br/>

            Damaged Status <br/>
            <select name="status"/>
                <option value="Ok">Ok</option>
                <option value="Damaged">Damaged</option>
            </select> <br />

            <input type="submit" value="Update" name="update"/>

        </form>
        </html>
           <?php
         }
          }
          mysqli_close($dbcon);
        }
?>