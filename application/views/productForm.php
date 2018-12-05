<?php

$this->load->helper("url");
$url = "AdminController/addArticle";
print_r($url);
?>
<form action="addArticle" method="POST">
    nazwa produktu <input type="text" name="productName"><br>
    kategoria: <select name="category">
        <?php
            foreach($category as $id){
            foreach($id as $value){
                    echo "<option>". $value ."</option>";
                }
            }
        ?>
    </select><br>
    cena: <input type="number" name="price"><br>
    liczba w magazynie: <input type="number" name="amount"><br>
    <input type="submit">
</form>