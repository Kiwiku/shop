<?php
echo "<table>";
foreach($wszystkie as $value1){
    echo "<tr>";
    foreach($value1 as $value2){
        echo "<td>";
        echo $value2 . "<br>";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo $link;