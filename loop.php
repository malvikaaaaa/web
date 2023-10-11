<html>
    <title>Loop</title>
    <center><head><h1 style="color:honeydew"><b><u>Number Loop</u></b></h1></head>
    <br><br>
    <body bgcolor="lightblue">
        <?php       
           for($i=0;$i<=10;$i++)
           {
               echo "<br>",$i;
           }
        ?>
        <br><br>
        <h1 style="color:honeydew"><b><u>Number Pattern</u></b></h1>
        <?php
            for($i=1;$i<=10;$i++)
            {
                for($j=1;$j<=$i;$j++)
                {
                   echo " ",$j;
                }
                echo "<br>";
            }
        ?>
    </body>
</center>
    
</html>


