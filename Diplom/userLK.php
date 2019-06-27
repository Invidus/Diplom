<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserLK</title>
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
    <div class="container">
        <a class="cancel" href="index.php"><i>
                <- Назад</i> </a> <div class="lkgrid">
                    <h5>Дневник,
                        <? session_start();
                        echo $_SESSION['login']; ?>
                    </h5>
                    <a class="nav-link reg-link" href="logout.php">Выход</a>
    </div>
    <?
    require("connect.php");
    $log = $_SESSION['login'];

    $query = "select id from `users` where login = '$log';";
    $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
    while ($row = mysqli_fetch_array($result)) {
        $id = $row[id];
        $query = "select * from `calculations` where id = $id";
        $result1 = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
        while ($row = mysqli_fetch_array($result1)) {

            echo '  <form class="input-group">
            <fieldset class="field-set">               
                 <legend>Итого за ' . $row[date] . '</legend>
                <div class="result_count3">
                    <label>Жиров, грамм: ' . $row[fat] . '</label><br>
                    <label>Белков, грамм: ' . $row[protein] . '</label><br>
                    <label>Углеводов, грамм: ' . $row[carbohydrates] . '</label><br>
                    <label>Калорий, ккал: ' . $row[calories] . '</label><br>                  
                </div>
            </fieldset>
        </form>';
        }
    }
    ?>
    </div>
</body>

</html>