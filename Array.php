<?php
$fruits=array('Apple','Orange','Grapes');

$count=count($fruits);
echo 'Number of elements ',$count,'<br>';

for($i=0;$i<$count;++$i){
    
    echo $fruits[$i],' ';
}
?>