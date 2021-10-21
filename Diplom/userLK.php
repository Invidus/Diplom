<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserLK</title>
    <link rel="shortcut icon" href="./Images/favicon.ico" type="image/x-icon">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/CalculateTab.css">
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="./css/Authorization.css">
    <link rel="stylesheet" href="./css/userLK.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="./js/Diary.js"></script>
</head>

<body>
<?
require_once('loadCharacteristcs.php');
?>
    <div class="container">
        <a class="cancel" href="index.php"><i>
                <- Назад</i> </a> <div class="lkgrid">
                    <h5>Дневник,
                        <? echo $_COOKIE['user']; ?>
                    </h5>
                    <a class="nav-link reg-link" href="logout.php">Выход</a>
    </div>
    <div class="container">
        <form class="input-group" action="saveCharacteristics.php" method="POST">
            <fieldset class="field-set">
                <legend>Пол</legend>

                <label class="radio-inline">
                    <input type="radio" name="sexRadio" id="M" value="1" checked/> Мужчина
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sexRadio" id="W" value="2"/> Женщина
                </label>
            </fieldset>
            <fieldset class="field-set">
                <legend>Характеристики</legend>

                <div class="chr-grid">
                    <input type="text" class="input-fields form-control" name="height" id="height" onChange="calculateIndexM()" placeholder="Рост, см" value="<?php echo $height; ?>"/>
                    <input type="text" class="input-fields form-control" name="weight" id="weight" onChange="calculateIndexM()" placeholder="Вес, кг" value="<?php echo $weight; ?>"/>
                    <input type="text" class="input-fields form-control" name="age" id="age" onChange="calculateIndexM()" placeholder="Возраст" value="<?php echo $age; ?>"/>
                </div>
                <button type="submit" id="saveChange" class="btn btn-primary" onclick="getSexValue();">Сохранить</button>
            </fieldset>
        </form>
    </div>
    <?
    require("connect.php");
    $log = $_COOKIE['login'];
    $query = "select id from `users` where login = '$log';";
    $result = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
    while ($row = mysqli_fetch_array($result)) {
        $id = $row[id];
        $query = "select * from `calculations` where id = $id";
        $result1 = mysqli_query($link, $query) or die("Error sql" . mysql_error($link));
        while ($row = mysqli_fetch_array($result1)) {

            echo '  <div class="container"><form class="input-group">
            <fieldset class="field-set">               
                 <legend>Итого за ' . $row[date] . '</legend>
                <div class="result_count3">
                    <label>Жиров, грамм: ' . $row[fat] . '</label><br>
                    <label>Белков, грамм: ' . $row[protein] . '</label><br>
                    <label>Углеводов, грамм: ' . $row[carbohydrates] . '</label><br>
                    <label>Калорий, ккал: ' . $row[calories] . '</label><br>                  
                </div>
            </fieldset>
        </form></div>';
        }
    }
    ?>
    </div>
<script>
    if ('<?php echo $sex ?>' == 1) {
        document.getElementById('M').checked = true;
    } else if ('<?php echo $sex ?>' == 2) {
        document.getElementById('W').checked = true;
    }
</script>
</body>

</html>