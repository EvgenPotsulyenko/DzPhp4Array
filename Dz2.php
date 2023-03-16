<?php
$arr = array(["Ivan","Microsoft","Menedjer"], ["Evgen","Apple","Developer"], ["Genrih","Intel","Engeener"]);

for ($j = 0; $j < 3; $j++)
{
    echo "<h3>" .$arr[$j][1] ."</h3>";
    echo "<ul>";
        echo "<li>" .$arr[$j][0] ."</li>";
    echo "</ul>";
}

//walk($arr);
//function walk($el) {
//    echo "<ul>";
//    foreach ($el as $k => $v) {
//        echo "<li>";
//        if (is_array($v)) {
//            walk($v);
//        } else {
//            echo $v;
//        }
//        echo "</li>";
//    }
//    echo "</ul>";
//}
?>