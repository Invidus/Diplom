<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/Authorization.css">
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>


<div class="registration-inputs">
        <form method="POST" action="registration.php" >
        <h6 ><a class = "cancel" href = "index.php"><i><</i></a></h6>
            <h4 class="reg-lable"><i>Регистрация</i></h4>
            <label for="fname">Имя</label>
            <input class="form-control" id="fname" name="fname" type="text" />
            <label for="lname">Фамилия</label>
            <input class="form-control" id="lname" name="lname" type="text" />
            <label for="surname">Отчество</label>
            <input class="form-control" id="surname" name="surname" type="text" />
            <label for="email">E-mail</label>
            <input class="form-control" id="email" name="email" type="text" />
            <label for="login">Логин</label>
            <input class="form-control" id="login" name="login"  type="text" />
            <label for="pass">Пароль</label>
            <input class="form-control" id="pass" name="pass" type="password" />
            <label for="pass">Повторите пароль</label>
            <input class="form-control" id="rpass" name="rpass" type="password" />
            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            <div class = "link-center"><a href="auth.php" class="auth-link ">Уже зарегистрированы? Войти тут</a></div>
        </form>
    </div>



    <?
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];
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
    if (
        !empty($fname) && !empty($lname) && !empty($login) && !empty($pass) &&
         !empty($surname)
    ) {
        if ($pass == $rpass) {
            if (
                check_length($fname, 2, 25) && check_length($lname, 2, 50) &&
                check_length($login, 2, 30) && check_length($email, 2, 80) &&
                 check_length($surname, 2, 30) && check_length($pass, 2, 30)
            ) {

                require("connect.php");

                $fnameBD = htmlentities(mysqli_real_escape_string($link, $_POST['fname']));
                $lnameBD = htmlentities(mysqli_real_escape_string($link, $_POST['lname']));
                $loginBD = htmlentities(mysqli_real_escape_string($link, $_POST['login']));
                $passBD = htmlentities(mysqli_real_escape_string($link, $_POST['pass']));
                $emailBD = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
                $surnameBD = htmlentities(mysqli_real_escape_string($link, $_POST['surname']));

                //проверка повторения логина
                $que = "select * from `users` where  login = '$login';";
                $resu = mysqli_query($link, $que);
                if (mysqli_num_rows($resu) > 0) {
                    echo ("<script>alert('Данный логин уже используется');</script>");
                    //проверка повторения логина
                } else {
                    // Внесение данных в БД
                    $query = "Insert into `users` values('$fnameBD','$lnameBD','$surnameBD','$emailBD','$loginBD','$passBD','0')";
                    $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
                    if ($result) {
                        echo ("<script>alert('Вы успешно зарегистровались !');</script>");
                        header('Refresh: 0.3;url = http://localhost:85/Diplom/auth.php');
                    }
                    mysqli_close($link);

                    // Внесение данных в БД
                }
            } else {
                echo ("<script>alert('Введена неверная длина одного из полей!');</script>");
            }
        } else {
            echo ("<script>alert('Пароли не совпадают');</script>");
        }
    }
    ?>
</body>

</html>