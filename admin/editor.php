<?php

require_once('../common/connection.php');


if (isset($_POST['submit'])) {
    $id= $_POST['guitar_id'];
    $make = $_POST['guitar_make'];
    $model = $_POST['guitar_model'];
    $color = $_POST['guitar_color'];
    $purposed_selling_price = $_POST['purposed_sp'];
    $status = $_POST['damaged_status'];
    
 //    $update = " UPDATE add_guitar SET `Guitar_Name` = '$name', `Guitar_Description` = '$description',
 // `Date_Purchased` = '$date_purchased', `Delivery_Date` = '$delivery_date', `Quantity` = '$quantity',`Cost_Price` = '$cost_price',
 // `Company_Name` = '$company_name' WHERE `guitardatabase`.`id` = $id";


 //    $register = mysql_query($update) or die(mysql_error());
 //    if ($register) {

 //        header('Location: index.php');
 //    } else {
 //        echo "something went wrong";
 //    }


}

?>


<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dbcon = mysqli_connect('localhost','root','root','sandesh') or die(mysqli_error());

    $query = mysql_query('SELECT * FROM add_guitar WHERE guitar_id ='$id'');

    if($result = mysqli_query($dbcon,$getdata))
          {


        while ($row = mysql_fetch_assoc($query)) {
        ?>

        <html>

        <h1>Update your Description </h1>

        <form action="" method="post">

            <input type="hidden" name="id" value="<?php echo $row['guitar_id']; ?>">

            Guitar Make:<br/>
            <input type="text" name="guitar_make" value="<?php echo $row["guitar_make"] ?>"/>

            <br/><br/>

            Guitar Model<br/>
            <input type="text"  name="guitar_model" value="<?php echo $row['guitar_model'] ?>"/>
            <br/><br/>


            Guitar Color<br/>
            <input type="text"  name="guitar_color" value="<?php echo $row['guitar_color'] ?>"/>
            <br/><br/>

            Puroposed Selling Price<br>
            <input type="number"  name="purposed_sp"
                   value="<?php echo $row['purposed_sp'] ?>"/>
            <br/><br/>


            Damaged Status <br/>
            <select name="status">
                <option value="Ok">Ok</option>
                <option value="Damaged">Damaged</option>
            </select> <br />

            <input type="submit" value="Update" name="submit"/>

        </form>
        </html>

    <?php
    }
    ?>

<?php
}
?>
<?php
}
?>