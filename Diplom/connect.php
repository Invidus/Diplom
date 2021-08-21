<?
$user = 'a370634_csv_db';
$password = 'Timeofdie29';
$db = 'a370634_csv_db';
$host = 'a370634.mysql.mchost.ru';


$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db
);