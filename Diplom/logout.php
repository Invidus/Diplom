<?
setcookie('user', $user['name'], time() - 3600 * 24, "/");
session_destroy();
header('Location:index.php');
exit;
