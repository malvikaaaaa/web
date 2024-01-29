<?php
$con=mysqli_connect('localhost','root','','product');
if($con->connect_error)
    echo 'connection failed';
else
{
    if(isset($_POST['submit']))
    {
        $id=$_POST['pro_id'];
        $selqry="select * from tbl_product where pro_id=$id";
        $data= mysqli_query($con, $selqry);
        $row= mysqli_fetch_assoc($data);
        ?>
<html>
    <style>
        body{
            background-color: green;
        }
        table{
            background-color: azure;
        }
    </style>
    <body>
    <center>
        <form>
            <table border="1" width="100" cellpadding="20">
                <tbody>
                    <tr>
                        <td>Id</td>
                        <td>prod name</td>
                        <td>quantity</td>
                        <td>unit price</td>
                    </tr>
                    <tr>
                        <td><?php echo $row['pro_id'];?></td>
                        <td><?php echo $row['pro_name'];?></td>
                        <td><?php echo $row['pro_quantity'];?></td>
                        <td><?php echo $row['pro_price'];?></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </center>
    </body>
</html>
<?php
    }
    else
    {
        ?>
<html>
    <style>
        input[type="submit"]
        {
            background-color: honeydew;
        }
        table{
            background-color: azure;
        }
        h1{
            color: plum;
        }
    </style>
    <body>
    <center>
        <h1><marquee>product id</marquee></h1>
        <form id="form1" method="post" action="test.php">
            <table border="1" width="100"  cellpadding="20">
                <thead>
                    <tr>
                        <th>Enter Product id &nbsp;&nbsp;<input type="text" name="pro_id"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><center><input type="submit" name="submit" value="GO"></center></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </center>
</html>
<?php
    }
}
?>
