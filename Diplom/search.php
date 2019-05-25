<?php
define("DB_HOST","localhost");
define("DB_NAME","csv_db"); //Имя базы
define("DB_USER","root"); //Пользователь
define("DB_PASSWORD","root"); //Пароль

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");

if(!empty($_POST["referal"])){ //Принимаем данные
   
    $referal = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["referal"]))));

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
