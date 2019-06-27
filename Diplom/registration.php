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

    <?
    $fname = clearing($_POST['fname']);
    $lname = clearing($_POST['lname']);
    $surname = clearing($_POST['surname']);
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
        !empty($surname) && !empty($rpass) && !empty($email)
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

                $passBD = password_hash(htmlentities(mysqli_real_escape_string($link, $_POST['pass'])), PASSWORD_DEFAULT);
                $emailBD = htmlentities(mysqli_real_escape_string($link, $_POST['email']));
                $surnameBD = htmlentities(mysqli_real_escape_string($link, $_POST['surname']));

                //проверка повторения логина
                $que = "select * from `users` where  login = '$login';";
                $resu = mysqli_query($link, $que);
                if (mysqli_num_rows($resu) > 0) {
                    $errorMsgUse = 'Данный логин уже используется!';
                    // echo ("<script>alert('Данный логин уже используется');</script>");
                    //проверка повторения логина
                } else {
                    $emailCheck = "select * from `users` where email = '$email'";
                    $emailRes = mysqli_query($link, $emailCheck);
                    if (mysqli_num_rows($emailRes) > 0) {
                        $errorMsgEmail = 'Данная почта уже используется!';
                    } else {
                        // Внесение данных в БД
                        $query = "Insert into `users` values('0','$fnameBD','$lnameBD','$surnameBD','$emailBD','$loginBD','$passBD')";
                        $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
                        $queryLog = "Select id from `users` where login = '$loginBD';";
                        $res = mysqli_query($link, $queryLog);
                        while ($resultLog = mysqli_fetch_array($res)) {
                            $idUser = $resultLog[id];
                        }
                        $resultLog =  mysqli_fetch_row($res);
                        $querySupport = "Insert into `support` values('$idUser','$fnameBD','$emailBD','')";
                        $resultSupport = mysqli_query($link, $querySupport) or die("Error sql" . mysql_error($link));
                        if ($result) {
                            $successMsg = 'Вы успешно зарегистровались!';
                            header('Refresh: 1;url = http://localhost:85/Diplom/auth.php');
                        }
                        mysqli_close($link);
                        // Внесение данных в БД
                    }
                }
            } else {
                $errorMsgLength = 'Введена неверная длина одного из полей!';
                // echo ("<script>alert('Введена неверная длина одного из полей!');</script>");
            }
        } else {
            $errorMsgPass = 'Пароли не совпадают!';

            // echo ("<script>alert('Пароли не совпадают');</script>");
        }
    }
    ?>

    <div class="registration-inputs">
        <form method="POST" action="registration.php">
            <h6><a class="cancel" href="index.php"><i>
                        <</i> </a> </h6> <h4 class="reg-lable"><i>Регистрация</i></h4>
                            <?
                            if (isset($successMsg)) { ?>
                                <div class="alert alert-success" role="alert">
                                    <? echo $successMsg; ?>
                                </div>
                            <? } ?>
                            <?
                            if (isset($errorMsgLength)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <? echo $errorMsgLength; ?>
                                </div>
                            <? } ?>
                            <?
                            if (isset($errorMsgPass)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <? echo $errorMsgPass; ?>
                                </div>
                            <? } ?>
                            <?
                            if (isset($errorMsgUse)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <? echo $errorMsgUse; ?>
                                </div>
                            <? } ?>
                            <?
                            if (isset($errorMsgFill)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <? echo $errorMsgFill; ?>
                                </div>
                            <? } ?>

                            <?
                            if (isset($errorMsgEmail)) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <? echo $errorMsgEmail; ?>
                                </div>
                            <? } ?>

                            <label for="fname">Имя</label>
                            <input class="form-control" id="fname" name="fname" type="text" />
                            <label for="lname">Фамилия</label>
                            <input class="form-control" id="lname" name="lname" type="text" />
                            <label for="surname">Отчество</label>
                            <input class="form-control" id="surname" name="surname" type="text" />
                            <label for="email">E-mail</label>
                            <input class="form-control" id="email" name="email" type="text" />
                            <label for="login">Логин</label>
                            <input class="form-control" id="login" name="login" type="text" />
                            <label for="pass">Пароль</label>
                            <input class="form-control" id="pass" name="pass" type="password" />
                            <label for="pass">Повторите пароль</label>
                            <input class="form-control" id="rpass" name="rpass" type="password" />

                            <button id ="registration-button" type="submit" class="btn btn-primary">Зарегистрироваться</button>
                            <div class="link-center"><a href="auth.php" class="auth-link ">Уже зарегистрированы? Войти тут</a></div>
        </form>
    </div>

<script>
$('#registration-button').on('click',function () {
    if(!$('#fname').val()&&!$('#lname').val()&&!$('#surname').val()&&!$('#email').val()&&!$('#login').val()
    &&!$('#pass').val()&&!$('#rpass').val()){
        alert("Заполните все поля!");
    }
  })
</script>

</body>

</html>