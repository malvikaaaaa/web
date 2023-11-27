<?php
$conne=new mysqli("localhost","root","");

if($conne->connect_error)
{
    die("Connection failed:".$conne->connect_error);
}
 else {
     echo "Connected Successfully";
}

$s="create database S1MCA";
if($conne->query($s)===TRUE)
{
    echo 'Database created successfully with the name S1MCA';
}
 else {
    echo "Error creating database: " . $conne->error;
}

$conne->close();
?>
