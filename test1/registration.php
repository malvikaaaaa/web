<?php
session_start();
$con=mysqli_connect('localhost','root','','login');
if($con->connect_error)
    echo "Connection Failed";
else{
?>
<html>
    <body>
        <center>
            <br><br>
        <h2>Registration</h2>
        <form method='post' action='registration.php'>
            
               <br>
            <table height="400" width="400">

                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="gender" value="Female">Female<input type="radio" name="gender" value="Male">Male</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="pword"></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" name="signup" value="Sign-Up">&nbsp;&nbsp;<input type="reset" name="reset" value="Reset"></center></td>
                </tr>
            </table>
        </center>
        </form>
    </body>
</html>
<?php

if(isset($_POST["signup"]))
{
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $uname=$_POST["uname"];
    $pword=$_POST["pword"];

    $insQry="insert into tbl_login(name,gender,phone,email,u_name,p_word)values('$name','$gender','$phone','$email','$uname','$pword')";
    if(mysqli_query($con,$insQry))
    {
        ?>
        <script>
            window.alert("Inserted Successfully");
            window.location.href='loginpage.php'
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
?>