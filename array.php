<?php
$arr=array("12","13","14");
$count=count($arr);
echo "Number of elements:",$count,'<br><br>';

echo "Elements are:";
for($i=0;$i<$count;$i++)
{
    echo $arr[$i],' ';
}

echo '<br><br>';
$s=array("s1mca"=>60,"s3mca"=>30);
echo 'mark of s1mca:',$s["s1mca"];
echo '<br>';
foreach($arr as $v)
    echo $v, '<br>';

foreach($s as $v=>$u)
    echo $v,' ',$u,'<br>';
    
?>