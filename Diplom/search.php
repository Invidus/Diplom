<?php

require("connectForLiveSearch.php");
if(!empty($_POST["nameOfProductValue"])){ //Принимаем данные

    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["nameOfProductValue"]))));

    $db_referal = $mysqli -> query("SELECT * from tbl_name WHERE name LIKE '%$referal%'")
    or die('Ошибка №'.__LINE__.'<br>Обратитесь к администратору сайта пожалуйста, сообщив номер ошибки.');

    while ($row = $db_referal -> fetch_array()) {
        echo "<li><div id = 'c'>".$row["Name"]."</div></li>".
            "<li  class = 'hidden'><div  id = 'c1'> ".$row["Protein"]." </div></li>".
            "<li class = 'hidden'><div  id = 'c2'> ".$row["Fat"]." </div></li>".
            "<li class = 'hidden'><div  id = 'c3'> ".$row["Carbohydrates"]." </div></li>".
            "<li class = 'hidden'><div  id = 'c4'> ".$row["Calories"]." </div></li>"; //$row["name"] - имя поля таблицы
    }

}else{echo('пустые данные post');}