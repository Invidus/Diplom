<?
session_start();
if ($_SESSION['login'] == "admin") {
    echo '<li class="nav-item nav-signs">
    <a class="nav-link" href="adminLK.php">Админ</a> 
    </li>
    <li class="nav-item">
    <a class="nav-link reg-link" href="logout.php">Выход</a>
    </li>';
} else {
    if ($_SESSION['login'] != "") {
        echo '<li class="nav-item nav-signs">
    <a class="nav-link" href="userLK.php">Дневник</a> 
    </li>
    <li class="nav-item">
    <a class="nav-link reg-link" href="logout.php">Выход</a>
    </li>';
    }
}
