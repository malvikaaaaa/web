<?php
$conne=new mysqli("localhost","root","","S1MCA");
if($conne->connect_error)
{
    die("Connection failed: ".$conne->connect_error);      
}
else
{
    echo 'Connection successful';
}

$st="create table student(id INT(2)PRIMARY KEY,Name VARCHAR(30)NOT NULL)";

if($conne->query($st)===TRUE)
{
    echo 'Table student created successfully ';
}
 else {
    echo "Error creating table: " . $conne->error;
}

$conne->close();
?>


