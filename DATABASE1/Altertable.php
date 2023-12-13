<?php
//$password='';
$con=new mysqli('localhost','root','','exam');
if($con->connect_error)
    die("Connection failed\n");
else
    echo "Connected Successfully";

$sql="alter table student add age int";
if(mysqli_query($con,$sql))

    echo "\nColumn Added  successfully";
else
     echo " Failed";
?>