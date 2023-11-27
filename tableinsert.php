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

$ins1="insert into student(id,name)values(2,'Malu')";

if ($conne->query($ins1) === TRUE) {
echo "New record created successfully";
} 
else {
echo "Error: " . $ins1 . "<br>" . $conn->error;
}
$conne->close();
?>

