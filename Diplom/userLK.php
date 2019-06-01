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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
    <div class = "container ">
        <div class = "lkgrid">
            <h5>Личный кабинет, yurnero20</h5>
            <button type="submit" class = "btn btn-primary" style = "width: 150px; height: 50px; ">Выход</button>
        </div>
<form class="input-group">
            <fieldset class="field-set">
            <?
     date_default_timezone_set('Russia/Moskow');
     $date = date('m/d/Y ', time());
     echo "<legend>Итого за ".$date."</legend>";

    ?>
                
                <div class="result_count3" hidden>
                    <label id="result-protein3"></label><br>
                    <label id="result-fat3"></label><br>
                    <label id="result-carbohydrates3"></label><br>
                    <label id="result-cal3"></label><br>
                    <label id="result-ans3"></label><br>
                </div>
            </fieldset>
        </form>

    <script>
        $(".result_count3").removeAttr("hidden");
    $("#result-protein3").text("Белков, грамм: 171");
        $("#result-fat3").text("Жиров, грамм: 254");
        $("#result-carbohydrates3").text("Углеводов, грамм: 329") ;
        $("#result-cal3").text("Калорий, кКал: " + 2257);
        $("#result-ans3").text("За сегодня вы употребили: 102% калорий от суточной нормы (" + 2257 + " кКал из " + 2212 + " кКал)");</script>
        </div>
</body>
</html>