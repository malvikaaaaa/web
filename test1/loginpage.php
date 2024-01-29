<?php
session_start();
$con=mysqli_connect('localhost','root','','login');
if($con->connect_error)
    echo "Connection Failed";
else{
?>
<html>
    <body>
        <form method='post' action="loginpage.php">
            <center>
                <br><br><br><br>
                <table border="1" height="300" width="400" cellpadding="15">
                    <tr>
                        <td width="150">Username</td>
                        <td><input type="text" name="uname"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pword"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><center><input type="submit" name="login" value="Log In">&nbsp;<input type="reset" name="reset" value="Reset"></center></td>
                        
                    </tr>
                    <tr>
                        <td colspan="2"><center>New User?<a href="registration.php">Sign Up</a></center></td>
                        
                    </tr>
                </table>
            </center>
        </form>
    </body>
</html>
<?php
if(isset($_POST['login']))
{
    $name=$_POST["uname"];
    $pword=$_POST["pword"];

    $selQry="Select * from tbl_login where u_name='$name' and p_word='$pword'";
    $data=mysqli_query($con,$selQry);
    if(mysqli_num_rows($data)>0)
    {
        $row=mysqli_fetch_assoc($data);
        $_SESSION["uid"]=$row["u_id"];
       
        ?>
        <script>
            alert("Login Successfull")
            window.location.href='loginpage2.php'
        </script>
        
        <?php
    }
    else
    {
        ?>
        <script>
            alert("Login Failed")
            
        </script>
        
        <?php
    }

}
}
?>
