<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authorization</title>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/Authorization.css">
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

<div class="auth-inputs">
<form method="POST" >
<h6 ><a class = "cancel" href = "index.php"><i><</i></a></h6>
    <h4 class="reg-lable"><i>Вход</i></h4>

    <label for="login">Логин</label>
    <input class="form-control" id="login" name="login"  type="text" />
    <label for="pass">Пароль</label>
    <input class="form-control" id="pass" name="pass" type="password" />
<div class = "link-center">
    <button type="submit" class="btn btn-primary">Войти</button>
    <a href="registration.php" class="auth-link">Зарегистрироваться</a>
    </div>
</form>
</div>

<?php 

    if (isset($_POST['login']) && isset($_POST['pass'])) {
        require("connect.php");
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $query = "select * from `users` where  login = '$login' and password = '$pass';";
        $res = mysqli_query($link, $query);
        if (mysqli_num_rows($res) > 0) {
            setcookie("userLogin", $login);
            // $_SESSION['userLogin'] = $login;
            echo "<script>alert('Авторизация прошла успешно.Вы будете перенаправлены на главную страницу');</script>";
            if ($login == "admin" && $pass = "admin") {
                header('Refresh: 0.3;url = http://localhost:85/Diplom/adminPanel.php');
             } else {
                header('Refresh: 0.3;url = http://localhost:85/Diplom/index.php');
            }
        } else {
            echo "<script>alert('Введены неверные данные');</script>";
        }
        mysqli_close($link);
    }
    ?>
</body>
</html>