<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf8" />
    <title>Registration</title>
</head>

<body>
    <?
        require('addHeadLinks.php');
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
        if (!empty($fname) && !empty($lname) && !empty($login) && !empty($pass) &&
            !empty($surname) && !empty($rpass) && !empty($email)) {
            if ($pass == $rpass) {
                if (check_length($fname, 2, 40) && check_length($lname, 2, 50) &&
                    check_length($login, 2, 50) && check_length($email, 2, 100) &&
                    check_length($surname, 2, 50) && check_length($pass, 2, 32)) {
    
                    require("connect.php");

                    $fname = filter_var(trim($_POST['fname']), FILTER_SANITIZE_STRING);
                    $lname = filter_var(trim($_POST['lname']), FILTER_SANITIZE_STRING);
                    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
                    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
                    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
                    $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
                    $login = addslashes($login);
                    $fname = addslashes($fname);
                    $lname = addslashes($lname);
                    $email = addslashes($email);
                    $surname = addslashes($surname);

                    $pass = md5($pass."iiwusascxzsdj777");
                    //проверка повторения логина
                    $que = "select * from `users` where  login = '$login';";
                    $resu = mysqli_query($link, $que);
                    if (mysqli_num_rows($resu) > 0) {
                        $errorMsgUse = 'Данный логин уже используется!';
                    } else {
                        //проверка повторения email
                        $emailCheck = "select * from `users` where email = '$email'";
                        $emailRes = mysqli_query($link, $emailCheck);
                        if (mysqli_num_rows($emailRes) > 0) {
                            $errorMsgEmail = 'Данная почта уже используется!';
                        } else {
                            // Внесение данных в БД
                            mysqli_query($link,"SET NAMES UTF8");
                            mysqli_query($link,"SET CHARACTER SET UTF8");

                            $query = "Insert into `users` values('0','$fname','$lname','$surname','$email','$login','$pass')";
                            $result = mysqli_query($link, $query) or die("Error sql" . mysqli_error($link));
                            $queryLog = "Select id from `users` where login = '$login';";
                            $res = mysqli_query($link, $queryLog);
                            while ($resultLog = mysqli_fetch_array($res)) {
                                $idUser = $resultLog[id];
                            }
                            $resultLog =  mysqli_fetch_row($res);
                            $querySupport = "Insert into `support` values('$idUser','$fname','$email','')";
                            $resultSupport = mysqli_query($link, $querySupport) or die("Error sql" . mysql_error($link));
                            echo $result;
                            if ($result) {
                                $successMsg = 'Вы успешно зарегистровались!';
                                header('Location: http://demon439.ru/calculate.php');
                                // ЗДЕСЬ МЕНЯЕМ ЧТОБЫ НЕ КРАШИЛО СТРАНИЦУ
                            }
                            mysqli_close($link);
                            // Внесение данных в БД
                        }
                    }
                } else {
                    $errorMsgLength = 'Введена неверная длина одного из полей!';
                }
            } else {
                $errorMsgPass = 'Пароли не совпадают!';
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