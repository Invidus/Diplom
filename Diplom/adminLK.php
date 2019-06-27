<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdminLK</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/CalculateTab.css">
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="./css/Authorization.css">
    <link rel="stylesheet" href="./css/userLK.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
    <div class="container ">
        <h6><a class="cancel" href="index.php"><i>
                    <- Назад</i> </a> </h6> <div class="lkgrid">
                        <h5>Панель администратора</h5>
                        <a class="nav-link reg-link" href="logout.php">Выход</a>
    </div>
    <?
    require("connect.php");

    $query = "select * from `support` where msg != '';";
    $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
    while ($row = mysqli_fetch_array($result)) {
        echo '<table class = "tableUserM">
        <tr>
        <th>Имя</th>
        <th>Почта</th>
        <th>Сообщение</th>
        </tr>
        <tr>
            <td>' . $row[name] . '</td>
            <td>' . $row[email] . '</td>
            <td>' . $row[msg] . '</td>
        </tr>
    </table>';
    }

    ?>

    <div class="registration-inputs">
        <form method="POST">
            <input class="form-control" id="emailO" name="emailO" type="text" placeholder="Почта" />
            <textarea class="textarea-support form-control" name="msgO" id="msgO" cols="40" rows="10" placeholder="Ответ..."></textarea>
            <button id="sendM" name="sendM" type="submit" class="btn btn-primary">Отправить письмо</button>
        </form>
    </div>
    <?
    if (isset($_POST['sendM'])) {
        $subj = 'Healthy diet';
        $to = $_POST['emailO'];
        $msg = $_POST['msgO'];
        mail($to, $subj, $msg);
        echo "<script>Письмо было успешно отправлено!</script>";
    }
    ?>
    </div>

</body>

</html>