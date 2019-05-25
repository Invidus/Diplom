<?
// echo $_COOKIE['userLogin'];
if ($_POST[true]) {
    echo "GG";
    unset($_COOKIE['userLogin']);
    setcookie('userLogin', null, -1, '/');
}
if (!isset($_COOKIE['userLogin'])) {
    echo "<li class='nav-item'>
            <a class='nav-link reg-link' name = 'exit'  id = 'exit' href='index.php'>Выход</a>
                     </li>";
} else {
    echo '<li class="nav-item">
            <a class="nav-link" href="auth.php">Вход</a> 
            </li>
            <li class="nav-item">
            <a class="nav-link reg-link" href="registration.php">Регистрация</a>
            </li>';
}
