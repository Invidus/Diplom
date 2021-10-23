<?
//Удалим куку, установив третий параметр в текущий момент времени:
setcookie('user', '', time());
session_destroy();
header('Location:index.php');
exit;
