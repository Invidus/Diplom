<?
    if (!empty($_COOKIE['user'])) {
        require("connect.php");
        $protein = $_POST['result-proteinI'];

        $fat = $_POST['result-fatI'];
        $carbh = $_POST['result-carbohydratesI'];
        $cal = $_POST['result-calI'];
        date_default_timezone_set('Russia/Moscow');
        $date = date('Y.m.d', time());

        $log = $_COOKIE['login'];

        $query = "select id from `users` where login = '$log';";
        $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
        while ($row = mysqli_fetch_array($result)) {
            $id = $row[id];
            $query = "Insert into `calculations` values('0',$id,$fat,$protein,$carbh,$cal,'$date')";
            $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
            header('Refresh: 0; url = http://demon439.ru/userLK.php');
        }
    } else {
        header('Refresh: 0;url = http://demon439.ru/auth.php');
    }
