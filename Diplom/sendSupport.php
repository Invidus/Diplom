<?
$fname = $_POST['fname'];
$msg = $_POST['msg'];
$email = $_POST['email'];

// Очистка от Html и php тегов
function clearing($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    return $value;
}

// Проверка длины введенных данных
function check_length($value, $min, $max)
{
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}

    // Проверка на незаполненные поля
    if (!empty($fname) && !empty($msg) && !empty($email)) {

        if (check_length($fname, 2, 25) && check_length($msg, 2, 250) &&
            check_length($email, 2, 80)) {

            require("connect.php");
            $fnameBD = htmlentities(mysqli_real_escape_string($link, $_POST['fname']));
            $emailBD = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
            $log = $_COOKIE['login'];

            $query = "select id from `users` where login = '$log';";
            $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
            while ($row = mysqli_fetch_array($result)) {
                $id = $row[id];
                $query = "Insert into `support_messages` values(null, $id, '$fnameBD', '$emailBD', '$msg')";
                $result = mysqli_query($link, $query);
            }
            // Внесение данных в БД

            if ($result) {
                header('Refresh: 0.3;url = http://demon439.ru/index.php');
            }
        } else {
            echo ("<script>alert('Введена неверная длина одного из полей!');</script>");
        }
    }


?>