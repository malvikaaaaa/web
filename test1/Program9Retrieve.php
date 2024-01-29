<?php

$con=mysqli_connect('localhost','root','','product');
if($con->connect_error)
    echo "Connection Failed";
else
{
    $selQry="select * from tbl_product";
    $data=mysqli_query($con,$selQry);
    if(mysqli_num_rows($data)>0)
    {
        

?>
<html>
<body>
<center>
<form id="form1" action="Program9Retrieve.php">
<br><br><br>
<h1>Product Details</h1>
<br>
<table border="1" width="600" height="200" cellpadding="20">
    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Manufacturer</th>
        
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($data))
    {
    ?>
    <tr>
        
        <td><?php echo $row['pro_id'];?></td>
        <td><?php echo $row['pro_name'];?></td>
        <td><?php echo $row['pro_quantity'];?> </td>
        <td><?php echo $row['pro_price'];?> Rs.</td>
        <td><?php  if ($row['pro_manufacture']!=NULL)
                         echo $row['pro_manufacture'];
                    else
                    {
                        ?><a href="Program8Insert.php?uid=<?php echo $row['pro_id']?>">Update</a> 
                        <?php 
                    }?></td>
    </tr>
    <?php
    }
    ?>
    
</table>
</form>
</center>
</body>
</html>

<?php
    }

    else{
        echo "No Data";
    }
}
?>