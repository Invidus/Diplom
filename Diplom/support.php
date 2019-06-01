<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Support</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Authorization.css">
</head>
<body>
<div class="registration-inputs">
        <form method="POST" action="support.php" >
            <h6 ><a class = "cancel" href = "index.php"><i><- Назад</i></a></h6>
            <h4 class="reg-lable"><i>Поддержка</i></h4>
            <label for="fname">Имя</label>
            <input class="form-control" id="fname" name="fname" type="text" />
            <label for="email">E-mail</label>
            <input class="form-control" id="email" name="email" type="text" />
            <textarea class = "textarea-support" name="msg" id="msg" cols="30" rows="7" placeholder="Опишите вашу проблему"></textarea>
            <button type="submit" class="btn btn-primary">Отправить письмо</button>

        </form>
    </div>
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
    if (
        !empty($fname) && !empty($msg) && !empty($email)
    ) {
        
            if (
                check_length($fname, 2, 25) && check_length($msg, 2, 250) &&
                 check_length($email, 2, 80) 
                
            ) {

                require("connect.php");

                $fnameBD = htmlentities(mysqli_real_escape_string($link, $_POST['fname']));
                $msgBD = htmlentities(mysqli_real_escape_string($link, $_POST['msg']));
                $emailBD = htmlentities(mysqli_real_escape_string($link, $_POST['email']));

                    // Внесение данных в БД
                    $query = "Insert into `support` values('$fnameBD','$emailBD','$msgBD')";
                    $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
                    if ($result) {
                        echo ("<script>alert('Ваше письмо было отправлено администации сайта.');</script>");
                        header('Refresh: 0.3;url = http://localhost:85/Diplom/index.php');
                    }
                    mysqli_close($link);

                    // Внесение данных в БД
                
            } else {
                echo ("<script>alert('Введена неверная длина одного из полей!');</script>");
            }

    }
    ?>
</body>
</html>