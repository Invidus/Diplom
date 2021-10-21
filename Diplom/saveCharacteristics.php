<?php

function clearing($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}
if (!empty($_COOKIE['user'])) {
    require("connect.php");
    $log = $_COOKIE['login'];
    $sex = $_POST['sexRadio'];
    $height = preg_replace('~\D+~','', clearing($_POST['height']));
    $weight = preg_replace('~\D+~','', clearing($_POST['weight']));
    $age = preg_replace('~\D+~','', clearing($_POST['age']));
    $query = "select id from `users` where login = '$log';";
    $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
    while ($row = mysqli_fetch_array($result)) {
        $id = $row[id];
        if (!empty($sex) && !empty($height) && !empty($weight) && !empty($age)) {
            $query = "Update `users` set sex = $sex, height = $height, weight = $weight, age = $age where id = $id ";
            $result = mysqli_query($link, $query);
            if ($result) {
                header('Location: http://demon439.ru/userLK.php');
            }
        } else {
            header('Location: http://demon439.ru/userLK.php');
        }
    }
} else {
    header('Refresh: 0;url = http://demon439.ru/auth.php');
}