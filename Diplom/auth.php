<!DOCTYPE html>
<html lang="en">
<head>
    <title>Authorization</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <?php
    require('addHeadLinks.php');
    require("connect.php");
    function SiteVerify($url) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_TIMEOUT, 15);
            curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36");
            $curlData = curl_exec($curl);
            curl_close($curl);
            return $curlData;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST")  {
            $recaptcha=$_POST['g-recaptcha-response'];
            if(!empty($recaptcha)) {
                $google_url="https://www.google.com/recaptcha/api/siteverify";
                $secret = '6Ld4PHkcAAAAACA0ZoRzR4SxI0R6d6Wp-uSIdC03';
                $ip=$_SERVER['REMOTE_ADDR'];
                $url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
                $res=SiteVerify($url);
                $res= json_decode($res, true);
                if($res['success']) {

                    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
                    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
                    $pass = md5($pass."iiwusascxzsdj777");

                    if (isset($_POST['login']) && isset($_POST['pass'])) {

                        $query = "select * from `users` where  `login` = '$login' and `pass` = '$pass'";

                        $res = mysqli_query($link, $query);

                        $user = $res->fetch_assoc();

                        if (count($user) == 0) {
    
                            $errorUser = "Пользователь не найден";
                            exit();
                        }

                        // Установка куки польз-ля на одни сутки
                        setcookie('user', $user['fname'], time() + 3600 * 24, "/");

                        header('Location: http://demon439.ru/userLK.php');
                        mysqli_close($link);
                    }
                }

            }
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
            <div class="g-recaptcha margin-5" data-sitekey="6Ld4PHkcAAAAAG7Ale3IF6GBptKOYu7cmILKBsjc"></div>
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
<style>
    .margin-5 {
        margin-top: 5px;
    }
</style>

</html>