<?php
echo "<table>";
foreach($wszystkie as $v){
    echo "<tr>";
        echo "<td>$v->name</td>";
        echo "<td>$v->price</td>";
    echo "</tr>";
}
echo "</table>";
echo $link;