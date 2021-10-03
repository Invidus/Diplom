<?php
echo '4';
require("connect.php");
// Проверка каптчи пройдена успешно, продолжаем дальше выполнение проверки формы и т.д.
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$pass = md5($pass."iiwusascxzsdj777");
echo '           3';
if (isset($_POST['login']) && isset($_POST['pass'])) {
    echo '           4';
    $query = "select * from `users` where  `login` = '$login' and `password` = '$pass'";
    $res = mysqli_query($link, $query);
    $user = $res->fetch_assoc();
    if (count($user) == 0) {
        $errorUser = "Пользователь не найден";
        exit();
    }
    // Установка куки польз-ля на одни сутки
    setcookie('user', $user['fname'], time() + 3600 * 24, "/");
    header('Location: http://demon439.ru/userLK.php');
    mysqli_close($link);
}
?>