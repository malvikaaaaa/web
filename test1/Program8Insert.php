<?php

$con=mysqli_connect('localhost','root','','product');
if($con->connect_error)
    echo "Connection Failed";
else
{
    $uid="";
    $id='';
    $name='';
    $qty='';
    $price="";
    $manufacture="";
    if(isset($_GET["uid"]))
    {
        $uid=$_GET["uid"];
        $selQry="select * from tbl_product where pro_id='$uid'";
        $data=mysqli_query($con,$selQry);
        $row=mysqli_fetch_assoc($data);
        $id=$row['pro_id'];
        $name=$row['pro_name'];
        $qty=$row['pro_quantity'];
        $price=$row['pro_price'];
        $manufacture=$row['pro_manufacture'];
    }
?>
<html>
    <body>
        <center>
        <form id="form1" method="POST" action="Program8Insert.php">
            <br><br><br>
            <h1>Product Details</h1>
            <br>
            <table border="1" width="400" height="300" cellpadding="20">
                <tr>
                    <th>Product Id</th>
                    <td><input type="text" name="pro_id" value=<?php echo $id ?>>
                    <input type="hidden" name="uid" value=<?php echo $uid ?>>
                    </td>
                </tr>
                <tr>
                    <th>Product Name</th>
                    <td><input type="text" name="pro_name" value=<?php echo $name ?>></td>
                </tr>
                <tr>
                    <th>Quantity</th>
                    <td><input type="text" name="pro_qty" value=<?php echo $qty ?>></td>
                </tr>
                <tr>
                    <th>Unit Price</th>
                    <td><input type="text" name="pro_price" value=<?php echo $price ?>></td>
                </tr>
                <tr>
                    <th>Manufacturer Name</th>
                    <td><input type="text" name="pro_manu" value=<?php echo $manufacture ?>></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" name="submit" value="Add">&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"></center></td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $uid=$_POST['uid'];
        $id=$_POST['pro_id'];
        $name=$_POST['pro_name'];
        $qty=$_POST['pro_qty'];
        $price=$_POST['pro_price'];
        $manufacture=$_POST['pro_manu'];
        if(isset($_POST["uid"]))
        {
            $updateQry="update tbl_product set pro_id='$id',pro_name='$name',pro_quantity='$qty',pro_price='$price',pro_manufacture='$manufacture' where pro_id='$uid'";
            if(mysqli_query($con,$updateQry))
            {

                header("Location: Program9Retrieve.php");
            }
            else
            {
            ?>
            <script>
                    windows.alert("Updation Failed");
            </script>
            <?php
            }
        }
        else
        {
        $insQuery="insert into tbl_product(pro_id,pro_name,pro_quantity,pro_price,pro_manufacture)values('$id','$name',$qty,$price,'$manufacture')";
        //echo $insQuery;
        if(mysqli_query($con,$insQuery))
        {
            ?>
            <script>
                window.alert("Inserted Successfully");
            </script>
            <?php
        }
        else
        {
        ?>
        <script>
                windows.alert("Insertion Failed");
        </script>
        <?php
        }
    }
    }
}
?>