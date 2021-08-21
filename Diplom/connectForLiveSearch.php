<?php
define("DB_HOST","a370634.mysql.mchost.ru");
define("DB_NAME","a370634_csv_db");
define("DB_USER","a370634_csv_db");
define("DB_PASSWORD","Timeofdie29");

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$mysqli -> query("SET NAMES 'utf8'") or die ("Ошибка соединения с базой!");
?>