<?php
$numbers = array(1);
$num = count($numbers);

$i = 0;
echo "1";
while ($i < 10)
{
        $rnd = rand(0, 100);
        if($numbers[$i] <= $rnd)
        {
            echo $numbers[$i] . "   ";
            $numbers[] = $rnd;
            $i++;
        }
}

?>