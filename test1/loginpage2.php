<?php
session_start();
$con=mysqli_connect('localhost','root','','login');
if($con->connect_error)
    die("Connection Failed");

$uid=$_SESSION["uid"];

$selQry="select * from tbl_login where u_id=$uid";
$data=mysqli_query($con,$selQry);
$row=mysqli_fetch_assoc($data);

?>

<html>
    <body>
        <center>
        <br><br><br><br><br><br><br><br>
        <h1>Welcome <?php echo $row['name'] ?></h1>
        </center>
    </body>
</html>