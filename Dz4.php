<?php
$numbers = array([2.3 , 0], [2.64363 , 3], [2.332 , 1]);

for ($i = 0; $i < 3; $i++)
{
    echo $numbers[$i][0] ." rounden to " .$numbers[$i][1] ." : " .round($numbers[$i][0], $numbers[$i][1]) ."<br>";
}
?>