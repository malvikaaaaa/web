<?php
    
function volume($s)
{
    return $s*$s*$s;
    
}

?>

<html>
    <head></head>
    <body>
                   <br><br><br>
        <form id='form1' method='get' action='PHPUserDefFunctions.php'>
            <center>  
            <label>Enter Side of Square</label>
            <input type="text" name="value1" ><br>
                       <br><br> 
                       <input type="submit" name="submit" value="Area"  ><br> <br> <br> 
                       
                       <?php
                            if(isset($_GET["submit"]))
                            {
                                $side=$_GET["value1"];
                               
                                ?>
                                <label>Volume</label>
                                 <input type="text" name="value1" value="<?php echo volume($side); ?>" ><br>
                                
                       <?php
                                
                            }

                        ?>
            </center>
        </form>
        
        
    </body>
</html>