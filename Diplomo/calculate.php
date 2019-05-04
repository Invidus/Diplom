<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Healthy diet</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/CalculateTab.css">
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        include('nav.php');
        ?>

        <form class="input-group">
            <fieldset class = "field-set">
                <legend>Уровень физической нагрузки</legend>
                <select class="custom-select select-lvl" id="inputGroupSelect04" onChange="calculateIndexM()"><br>
                    <option selected value="1">Сидячий образ жизни</option>
                    <option value="2">Легкие физ.нагрузки (1-3 раза в неделю)</option>
                    <option value="3">Средние физ.нагрузки (3-5 раз в неделю)</option>
                    <option value="4">Ежедневные тренировки </option>
                    <option value="5">Снижение веса </option>
                </select>
            </fieldset>
            <fieldset class = "field-set">
                <legend>Пол</legend>
                <label class="radio-inline">
                    <input type="radio" name="optradio" id="M" onChange="calculateIndexM()" />Мужчина
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" id="W" onChange="calculateIndexM()" />Женщина
                </label>
            </fieldset>
        </form>
        <form>
            
        </form>
        <form>
            <fieldset class = "field-set">
                <legend>Характеристики</legend>
                <input type="text" name="height" id="height" onChange="calculateIndexM()" />
                <input type="text" name="weight" id="weight" onChange="calculateIndexM()" />
                <input type="text" name="age" id="age" onChange="calculateIndexM()" />
            </fieldset>
        </form>
        <form>
            <fieldset class = "field-set">
                <legend>Результат</legend>
                Индекс массы тела <label id="indexM"> 0.0</label><br />
                Суточная норма потребления калорий <label id="Cal"> 0.0</label><br />
                Нормальный вес <label id="normalW"> 0.0</label><br />
            </fieldset>
        </form>


    </div>
    <?php
    include('footer.php');
    ?>
    <script src="./js/Calculations.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>