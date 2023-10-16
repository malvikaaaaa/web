<html>
    <title>form</title>
    <center>
        <head><h1 style="color:greenyellow"><b><u>FORM</u></b></h1></head>
    <br><br>
    <body bgcolor="lightpink">
        <form action="form.php" method="post">
            First Name: <input type="text" name="first"><br><br>
            Last Name: <input type="text" name="last"><br><br>
            Gender: <input type="radio" name="rname" value="female">Female<input type="radio" name="rname" value="male">Male
            <br><br><input type="submit" name="signup" value="submit">
        </form>
    </body>
    </center>
</html>

<?php
    if(isset($_POST['signup'])){
        $fn=$_POST['first'];
         echo "Firstname is:",$fn;
         echo "<br>";
        $ln=$_POST['last'];
         echo "lastname is:",$ln;
         echo "<br>";
        $gender=$_POST['rname'];
         echo "Gender is:",$gender;
    }
 ?>
    

