<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $roll_no=$_POST['roll'];
    $mfc=$_POST['MFC'];
    $ase=$_POST['ASE'];
    $dfcs=$_POST['DFCS'];
    $ads=$_POST['ADS'];
    for($i=0;$i<5;$i++)
    {
        $total[$i]=$mfc[$i]+$ase[$i]+$dfcs[$i]+$ads[$i];
        if($total[$i]>70)
            $status[$i]='PASS';
        else
            $status[$i]='FAIL';
    }
    $internal=array(array($roll_no[0],$name[0],$mfc[0],$ase[0],$dfcs[0],$ads[0],$total[0],$status[0]),array($roll_no[1],$name[1],$mfc[1],$ase[1],$dfcs[1],$ads[1],$total[1],$status[1]),array($roll_no[2],$name[2],$mfc[2],$ase[2],$dfcs[2],$ads[2],$total[2],$status[2]),array($roll_no[3],$name[3],$mfc[3],$ase[3],$dfcs[3],$ads[3],$total[3],$status[3]),array($roll_no[4],$name[4],$mfc[4],$ase[4],$dfcs[4],$ads[4],$total[4],$status[4]));
?>
<html>
    <style>
        th{
            height: 10
        }
    </style>
    <body>
        <br><br><br><br>
    <center>
            <h1> TRINITY COLLEGE OF LONDON </h1>
            <h1> Master of Computer Applications</h1>
            <h2> INTERNAL MARKS </h2>
            <h2> Semester One </h2>
            <table border="1" height="500" width="700">
                <tr>
                    <th rowspan="2" width="100"><h3>Roll No</h3></th>
                    <th rowspan="2"><h3>Name</h3></th>
                    <th colspan="4"><h3>Internal Mark</h3></th>
                    <th rowspan="2"><h3>Total</h3>Out of 80</th>
                    <th rowspan="2"><h3>Result</h3></th>
                </tr>
                <tr>
                    <th><h3>MFC</h3>Out of 20</th>
                    <th><h3>ASE</h3>Out of 20</th>
                    <th><h3>DFCS</h3>Out of 20</th>
                    <th><h3>ADS</h3>Out of 20</th>
                </tr>
                <?php
                    for($i=0;$i<5;$i++)
                    {
                ?>
                <tr>
                    <?php
                        for($j=0;$j<8;$j++)
                        {
                     ?>
                    <td><center><?php echo $internal[$i][$j]?></center></td>
                    <?php
                        }
                        ?>
                </tr>
                <?php
                    }
                    ?>
            </table>
    </center>
    </body>
</html>
<?php
}
?>