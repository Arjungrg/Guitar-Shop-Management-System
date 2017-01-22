<?php
          include('header.php');

          if (isset($_POST['update'])) {
            $id= $_POST['id'];
            $rack_no = $_POST['rack_no'];

            $condb = mysqli_connect('localhost','root','root','sandesh');

            $update = " UPDATE add_guitar SET rack_no = '$rack_no' WHERE guitar_id = '$id' ";
              
              if (mysqli_query($condb, $update)) {
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
            <b> <?php echo $row['guitar_make'] ?></b>

            <br/><br/>

            Guitar Model<br/>
            <b><?php echo $row['guitar_model'] ?></b>
            <br/><br/>


            Guitar Color<br/>
            <b><?php echo $row['guitar_color'] ?></b>
            <br/><br/>

            Puroposed Selling Price<br>
            <b><?php echo $row['purposed_sp'] ?></b>
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