<?php
$con=mysqli_connect('localhost','root','');
if($con->connect_error)
    echo 'connection failed';
else
    echo 'connection successful';
$sql='create database login';
if(mysqli_query($con, $sql))
    echo 'database created';
else
    echo 'not created';

$con=mysqli_connect('localhost','root','','login');
$sql1="create table tbl_login(u_id int primary key Auto_Increment,name varchar(20),gender varchar(10),phone int,email varchar(30),u_name varchar(30),p_word varchar(40))";
if(mysqli_query($con, $sql1))
    echo 'table created';
else
    echo 'not created';
?>