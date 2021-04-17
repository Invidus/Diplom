<!DOCTYPE html>
<html lang="en">
<head>
    <title>Authorization</title>
</head>
<body>
    <?php
        require('addHeadLinks.php');
        $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

        $pass = md5($pass."iiwusascxzsdj777");

        if (isset($_POST['login']) && isset($_POST['pass'])) {
            require("connect.php");

            $query = "select * from `users` where  `login` = '$login' and `password` = '$pass'";
            $res = mysqli_query($link, $query);

            $user = $res->fetch_assoc();
            if (count($user) == 0) {
                $errorUser = "Пользователь не найден";
                exit();
            }
            // Установка куки польз-ля на одни сутки
            setcookie('user', $user['name'], time() + 3600 * 24, "/");
            echo 'norm';
            header('Location: http://localhost/Diplom/Diplom/index.php');


//            if ($login == "admin" && $pass == "admin") {
//                $_SESSION['login'] = "admin";
//                header('Location: http://localhost/Diplom/Diplom/adminLK.php');
//            } else {
//                while ($row = mysqli_fetch_array(($res))) {
//                    if (password_verify($pass, $row['password'])) {
//                        $_SESSION['login'] = $login;
//                        $successMsg = "Авторизация прошла успешно.";
//                        header('Location: http://localhost/Diplom/Diplom/index.php');
//                    } else {
//                        $errorMsgWrongPass = "Неверный пароль";
//                    }
//                }
//            }
            mysqli_close($link);
        }
    ?>

    <div id="auth" class="auth-inputs">
        <form method="POST">
            <h6>
                <a class="cancel" href="index.php">
                    <i> < </i>
                </a>
            </h6>
            <h4 class="reg-lable">
                <i>Вход</i>
            </h4>
            <? if (isset($successMsg)) { ?>
                <div class="alert alert-success" role="alert">
                    <? echo $successMsg; ?>
                </div>
            <? } ?>
            <? if (isset($errorMsgWrongPass)) { ?>
                <div class="alert alert-danger" role="alert">
                    <? echo $errorMsgWrongPass; ?>
                </div>
            <? } ?>
            <? if (isset($errorUser)) { ?>
                <div class="alert alert-danger" role="alert">
                    <? echo $errorUser; ?>
                </div>
            <? } ?>
            <? if (isset($errorMsgFill)) { ?>
                <div class="alert alert-danger" role="alert">
                    <? echo $errorMsgFill; ?>
                </div>
            <? } ?>
            <label for="login">Логин</label>
            <input class="form-control" id="login" name="login" type="text" />

            <label for="pass">Пароль</label>
            <input class="form-control" id="pass" name="pass" type="password" />

            <a class="open_window auth-link link1" href="#">Забыли пароль?</a>
            <div class="link-center">
                <button id = "logIn" type="submit" class="btn btn-primary">Войти</button>
                <a href="registration.php" class="auth-link">Зарегистрироваться</a>
            </div>

            <div class="overlay" title="окно"></div>
            <div class="popup">
                <div class="close_window"><h6><a class="cancel close_widow" href="#"><i><</i></a></h6></div>
                 <h4 class="reg-lable"><i>Восстановление пароля</i></h4>
                <label for="loginRec">Введите ваш логин</label>
                <input class="form-control" id="loginRec" name="loginRec" type="text" />
                <label for="emailRec">Введите ваш email</label>
                <input class="form-control" id="emailRec" name="emailRec" type="text" />
                <button id = "getPass" type="submit" class="btn btn-primary">Получить пароль</button>
            </div>
        </form>
    </div>
    <?php
        session_start();
        if (isset($_POST['loginRec']) && isset($_POST['emailRec'])) {
            require("connect.php");
            $loginRec = $_POST['loginRec'];
            $emailRec = $_POST['emailRec'];
            $query = "select password from `users` where  login = '$loginRec' and email = '$emailRec';";
            $res = mysqli_query($link, $query);

                while ($row = mysqli_fetch_array(($res))) {
                    if (password_verify($pass, $row['password'])) {
                        $_SESSION['login'] = $login;
                        $successMsg = "Авторизация прошла успешно.";
                        header('http://localhost/Diplom/Diplom/index.php');
                    } else {
                        $errorMsgWrongPass = "Неверный пароль";
                    }
                }
            mysqli_close($link);
        }
    ?>
    <script>
        $('.popup .close_window, .overlay').click(function() {
            $('.popup, .overlay').css({
                'opacity': 0,
                'visibility': 'hidden'
            });
        });
        $('a.open_window').click(function(e) {
            $('.popup, .overlay').css({
                'opacity': 1,
                'visibility': 'visible'
            });
            e.preventDefault();
        });
        $('#logIn').on('click',function(){
            if(!$('#login').val() && !$('#pass').val()){
                alert("Заполните все поля!");
            }
        })
    </script>
</body>

</html>