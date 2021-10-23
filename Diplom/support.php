<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Support</title>
    <link rel="shortcut icon" href="./Images/favicon.ico" type="image/x-icon">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Authorization.css">
</head>

<body>
    <div class="container">
        <form method="POST" action="sendSupport.php">
            <h6><a class="cancel" href="index.php"><i>
                        <- Назад</i> </a> </h6> <h4 class="reg-lable"><i>Поддержка</i></h4>
                            <label for="fname">Имя</label>
                            <input class="form-control" id="fname" name="fname" type="text" />
                            <label for="email">E-mail</label>
                            <input class="form-control" id="email" name="email" type="text" />
                            <textarea class="textarea-support form-control" name="msg" id="msg" cols="40" rows="10" placeholder="Опишите вашу проблему"></textarea>
                            <button type="submit" class="btn btn-primary">Отправить письмо</button>
        </form>
    </div>
<script>
    if ('<?php echo empty($_COOKIE['user']) ?>' ) {
        alert('Для начала войдите в свой профиль!');
        location.replace("http://demon439.ru/auth.php");
    }
</script>
</body>

</html>