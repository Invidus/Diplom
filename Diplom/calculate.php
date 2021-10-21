<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculations</title>
    <link rel="shortcut icon" href="./Images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/CalculateTab.css">
    <meta name="viewport" content="width=device-width; initial-scale=0.35; maximum-scale=0.95; user-scalable=0;" />    <meta name="viewport" content="width=device-width, initial-scale=1; user-scalable=0;">


</head>

<body>
    <div class="container">
        <?php
        include('nav.php');
        ?>
        <form class="input-group">
            <fieldset class="field-set">
                <legend>Пол</legend>
                <label class="radio-inline">
                    <input type="radio" name="optradio" id="M" onChange="calculateIndexM()"> Мужчина
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" id="W" onChange="calculateIndexM()" /> Женщина
                </label>
            </fieldset>
        </form>
        <form class="input-group">
            <fieldset class="field-set">
                <legend>Цель</legend>
                <select class="custom-select select-lvl select-height" id="goalMain" onChange="calculateIndexM()"><br>
                    <option value="1">Уменьшение лишнего веса (похудение)</option>
                    <option value="2">Набор мышечной массы</option>
                    <option value="3">Комфортный вес</option>
                    <option value="4">Набор веса</option>
                </select>
            </fieldset>
        </form>

        <form class="input-group">
            <fieldset class="field-set">
                <legend>Уровень физической нагрузки</legend>
                <select class="custom-select select-lvl select-height" id="inputGroupSelect04" onChange="calculateIndexM()"><br>
                    <option value="1">Отсутствие активности (сидячий образ жизни, не занимающиеся спортом)</option>
                    <option value="2">Низкая активность (сидячий образ жизни + регулярная ходьба)</option>
                    <option value="3">Средняя активность (тренировки 3 раза в неделю по 60 минут)</option>
                    <option value="4">Высокая активность (ежедневные тренировки, либо тяжелый физическй труд)</option>
                    <option value="5">Экстремальная активность (ежедневные многоразовые тренировки, либо тяжелый физический труд)</option>
                </select>
            </fieldset>
        </form>

        <form class="input-group">
            <fieldset class="field-set">
                <legend>Характеристики</legend>

                <div class="chr-grid">
                    <input type="text" class="input-fields form-control" name="height" id="height" onChange="calculateIndexM()" placeholder="Рост, см"/>
                    <input type="text" class="input-fields form-control" name="weight" id="weight" onChange="calculateIndexM()" placeholder="Вес, кг"/>
                    <input type="text" class="input-fields form-control" name="age" id="age" onChange="calculateIndexM()" placeholder="Возраст"/>
                </div>
            </fieldset>
        </form>
        <form class="input-group">
            <fieldset class="field-set">
                <legend>Тип телосложения</legend>

                <div class="form-check form-check-inline type-body-grid body-type-div">
                    <input class="form-check-input" type="radio" name="radioBodyType" id="ectomorphInput" value="ectomorphValue" hidden>
                    <label class="form-check-label label-body-type" for="ectomorphInput">
                        <img class="body-type-img" id="ectomorphImg" src="Images/Ec.png" alt="Ecto">
                    </label>
                    <input class="form-check-input" type="radio" name="radioBodyType" id="mesomorphInput" value="mesomorphValue" hidden>
                    <label class="form-check-label label-body-type" for="mesomorphInput">
                        <img class="body-type-img" src="Images/mes.png" alt="MESO">
                    </label>
                    <input class="form-check-input" type="radio" name="radioBodyType" id="endomorphInput" value="endomorphValue" hidden>
                    <label class="form-check-label label-body-type" for="endomorphInput">
                        <img class="body-type-img" src="Images/end.png" alt="ENDO">
                    </label>
                </div>
                <div class="form-check form-check-inline">

                </div>
                <div class="form-check form-check-inline">

                </div>
            </fieldset>
        </form>
        <form class="input-group">
            <fieldset class="field-set">
                <legend>Результат</legend>
                <h6 id="fillFilds"><b>Заполните все поля, чтобы получить результат</b></h6>
                Индекс массы тела: <label id="indexM"> 0.0</label><br />
                Суточная норма потребления калорий, ккал: <label id="Cal"> 0.0</label><br />
                Нормальный вес, кг: <label id="normalW"> 0.0</label><br />
                Белки, грамм: <label id="normalP"> 0.0</label><br />
                Углеводы, грамм: <label id="normalC"> 0.0</label><br />
                Жиры, грамм: <label id="normalF"> 0.0</label><br />
            </fieldset>
        </form>
        <form class="input-group">
            <fieldset class="field-set">
                <legend>Счетчик потреблённых калорий (завтрак)</legend>
                <div class="counter-block">
                    <div class="product-grid">
                        <div class="chr-grid"><label for="ref" class="input-fields">Название продукта</label> <input autocomplete="off" class="input-fields form-control" id='ref' type="text" name="referal" placeholder="Начните вводить" /></div>
                        <div><ul class="search_result"></ul></div>
                        <div class="chr-grid"><label for="Gramm" class="input-fields">Вес, грамм</label> <input autocomplete="off" class="input-fields form-control" id="Gramm" type="text" value="100" /></div>
                        <div class="chr-grid"><label for="Protein" class="input-fields">Белков, грамм</label> <input class="input-fields form-control" id="Protein" type="text" disabled /></div>
                        <div class="chr-grid"><label for="Fat" class="input-fields">Жиров, грамм</label> <input class="input-fields form-control" id="Fat" type="text" disabled /></div>
                        <div class="chr-grid"><label for="Carbohydrates" class="input-fields">Углеводов, грамм</label> <input class="input-fields form-control" id="Carbohydrates" type="text" disabled /></div>
                        <div class="chr-grid"><label for="Calories" class="input-fields">Калорий, ккал</label> <input class="input-fields form-control" id="Calories" type="text" disabled /></div>
                    </div>
                </div>
                <a id="addProductButton" class="addProduct-link" href="javascript:void(0);">+ Добавить продукт в список потребленных</a>
                <br><br>
                <h6 class="toHide">Список потребленных продуктов</h6>
                <ul class="table_result"></ul>
                <h6 class="toHide">Итого за завтрак</h6>
                <div class="result_count" hidden>
                    <label id="result-protein"></label><br>
                    <label id="result-fat"></label><br>
                    <label id="result-carbohydrates"></label><br>
                    <label id="result-cal"></label><br>
                    <label class="last-lable" id="result-ans"></label><br>
                </div>
                <!-- <h6>Рекомендация</h5>
                    <div class="product-grid">
                        <div><label for="ref" class="input-fields">Название продукта</label> <input class="input-fields form-control" id='ref' type="text" name="referal" placeholder="Начните вводить" disabled/></div>
                        <div><label for="Gramm" class="input-fields">Вес, грамм</label> <input class="input-fields form-control" id="Gramm" type="text" value="100" disabled></div>
                        <div><label for="Protein" class="input-fields">Белков, грамм</label> <input class="input-fields form-control" id="Protein" type="text" disabled /></div>
                        <div><label for="Fat" class="input-fields">Жиров, грамм</label> <input class="input-fields form-control" id="Fat" type="text" disabled /></div>
                        <div><label for="Carbohydrates" class="input-fields">Углеводов, грамм</label> <input class="input-fields form-control" id="Carbohydrates" type="text" disabled /></div>
                        <div><label for="Calories" class="input-fields">Калорий, ккал</label> <input class="input-fields form-control" id="Calories" type="text" disabled /></div>
                    </div> -->
            </fieldset>
        </form>
        <!-- ОБЕД -->
        <form class="input-group">
            <fieldset class="field-set">
                <legend>Счетчик потреблённых калорий (Обед)</legend>
                <div class="counter-block">
                    <div class="product-grid">
                        <div class="chr-grid"><label for="ref1" class="input-fields">Название продукта</label> <input autocomplete="off" class="input-fields form-control" id='ref1' type="text" name="referal1" placeholder="Начните вводить" /></div>
                        <div><ul class="search_result1"></ul></div>
                        <div class="chr-grid"><label for="Gramm1" class="input-fields">Вес, грамм</label> <input autocomplete="off" class="input-fields form-control" id="Gramm1" type="text" value="100" /></div>
                        <div class="chr-grid"><label for="Protein1" class="input-fields">Белков, грамм</label> <input class="input-fields form-control" id="Protein1" type="text" disabled /></div>
                        <div class="chr-grid"><label for="Fat1" class="input-fields">Жиров, грамм</label> <input class="input-fields form-control" id="Fat1" type="text" disabled /></div>
                        <div class="chr-grid"><label for="Carbohydrates1" class="input-fields">Углеводов, грамм</label> <input class="input-fields form-control" id="Carbohydrates1" type="text" disabled /></div>
                        <div class="chr-grid"><label for="Calories1" class="input-fields">Калорий, ккал</label> <input class="input-fields form-control" id="Calories1" type="text" disabled /></div>
                    </div>
                </div>
                <a id="addProductButton1" class="addProduct-link" href="javascript:void(0);">+ Добавить продукт в список потребленных</a>
                <br><br>
                <h6 class="toHide">Список потребленных продуктов</h6>
                <ul class="table_result1"></ul>
                <h6 class="toHide">Итого за обед</h6>
                <div class="result_count1" hidden>
                    <label id="result-protein1"></label><br>
                    <label id="result-fat1"></label><br>
                    <label id="result-carbohydrates1"></label><br>
                    <label id="result-cal1"></label><br>
                    <label id="result-ans1"></label><br>
                </div>
                <!-- <h6>Рекомендация</h5>
                <div class="product-grid">
                        <div><label for="ref" class="input-fields">Название продукта</label> <input class="input-fields form-control" id='ref' type="text" name="referal" placeholder="Начните вводить" disabled/></div>
                        <div><label for="Gramm" class="input-fields">Вес, грамм</label> <input class="input-fields form-control" id="Gramm" type="text" value="100" disabled></div>
                        <div><label for="Protein" class="input-fields">Белков, грамм</label> <input class="input-fields form-control" id="Protein" type="text" disabled /></div>
                        <div><label for="Fat" class="input-fields">Жиров, грамм</label> <input class="input-fields form-control" id="Fat" type="text" disabled /></div>
                        <div><label for="Carbohydrates" class="input-fields">Углеводов, грамм</label> <input class="input-fields form-control" id="Carbohydrates" type="text" disabled /></div>
                        <div><label for="Calories" class="input-fields">Калорий, ккал</label> <input class="input-fields form-control" id="Calories" type="text" disabled /></div>
                    </div> -->
            </fieldset>
        </form>
        <!-- УЖИН -->
        <form class="input-group">
            <fieldset class="field-set">
                <legend>Счетчик потреблённых калорий (Ужин)</legend>
                <div class="counter-block">
                    <div class="product-grid">
                        <div class="chr-grid"><label for="ref2" class="input-fields">Название продукта</label> <input autocomplete="off" class="input-fields form-control" id='ref2' type="text" name="referal1" placeholder="Начните вводить" /></div>
                        <div><ul class="search_result2"></ul></div>
                        <div class="chr-grid"><label for="Gramm2" class="input-fields">Вес, грамм</label> <input autocomplete="off" class="input-fields form-control" id="Gramm2" type="text" value="100" /></div>
                        <div class="chr-grid"><label for="Protein2" class="input-fields">Белков, грамм</label> <input class="input-fields form-control" id="Protein2" type="text" disabled /></div>
                        <div class="chr-grid"><label for="Fat2" class="input-fields">Жиров, грамм</label> <input class="input-fields form-control" id="Fat2" type="text" disabled /></div>
                        <div class="chr-grid"><label for="Carbohydrates2" class="input-fields">Углеводов, грамм</label> <input class="input-fields form-control" id="Carbohydrates2" type="text" disabled /></div>
                        <div class="chr-grid"><label for="Calories2" class="input-fields">Калорий, ккал</label> <input class="input-fields form-control" id="Calories2" type="text" disabled /></div>
                    </div>
                </div>
                <a id="addProductButton2" class="addProduct-link" href="javascript:void(0);">+ Добавить продукт в список потребленных</a>
                <br><br>
                <h6 class="toHide">Список потребленных продуктов</h6>
                <ul class="table_result2"></ul>
                <h6 class="toHide">Итого за ужин</h6>
                <div class="result_count2" hidden>
                    <label id="result-protein2"></label><br>
                    <label id="result-fat2"></label><br>
                    <label id="result-carbohydrates2"></label><br>
                    <label id="result-cal2"></label><br>
                    <label id="result-ans2"></label><br>
                </div>
                <!-- <h6>Рекомендация</h5>
                <div class="product-grid">
                        <div><label for="ref" class="input-fields">Название продукта</label> <input class="input-fields form-control" id='ref' type="text" name="referal" placeholder="Начните вводить" disabled/></div>
                        <div><label for="Gramm" class="input-fields">Вес, грамм</label> <input class="input-fields form-control" id="Gramm" type="text" value="100" disabled></div>
                        <div><label for="Protein" class="input-fields">Белков, грамм</label> <input class="input-fields form-control" id="Protein" type="text" disabled /></div>
                        <div><label for="Fat" class="input-fields">Жиров, грамм</label> <input class="input-fields form-control" id="Fat" type="text" disabled /></div>
                        <div><label for="Carbohydrates" class="input-fields">Углеводов, грамм</label> <input class="input-fields form-control" id="Carbohydrates" type="text" disabled /></div>
                        <div><label for="Calories" class="input-fields">Калорий, ккал</label> <input class="input-fields form-control" id="Calories" type="text" disabled /></div>
                    </div> -->
            </fieldset>
        </form>
        <form class="input-group" action="addToDiary.php" method="POST">
            <fieldset class="field-set">
                <legend>Итого за день</legend>
                <div class="result_count3" hidden>
                    <label id="result-protein3"></label>
                    <input type="text" id="result-proteinI" name="result-proteinI" style="visibility: hidden;" /><br>
                    <label id="result-fat3"></label>
                    <input type="text" id="result-fatI" name="result-fatI" style="visibility: hidden;" /><br>
                    <label id="result-carbohydrates3"></label>
                    <input type="text" id="result-carbohydratesI" name="result-carbohydratesI" style="visibility: hidden;" /><br>
                    <label id="result-cal3"></label>
                    <input type="text" id="result-calI" name="result-calI" style="visibility: hidden;" /><br>
                    <label id="result-ans3"></label><br>
                    <button id="addToDiary" name="addToDiary" type="submit" class="btn btn-primary">Добавить в дневник</button>
                </div>
            </fieldset>
        </form>
    </div>
    <?php
    include('footer.php');
    ?>
    <script src="./js/Calculations.js"></script>
    <script src="./js/LiveSearch.js"></script>
</body>

</html>