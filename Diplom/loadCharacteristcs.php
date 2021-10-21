<?php
$sex = 0;
$height = 0;
$weight = 0;
$age = 0;
if (!empty($_COOKIE['user'])) {
    require("connect.php");
    $log = $_COOKIE['login'];
    $query = "select id from `users` where login = '$log';";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        $id = $row[id];
        $query = "select sex, height, weight, age from `users` where id = $id";
        $result = mysqli_query($link, $query);
        while ($row = mysqli_fetch_array($result)) {
            $sex = $row['sex'];
            $height = $row['height'];
            $weight = $row['weight'];
            $age = $row['age'];
        }
    }
}
