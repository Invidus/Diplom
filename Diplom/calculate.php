<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculations</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/CalculateTab.css">


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
                    <input type="radio" name="optradio" id="M" onChange="calculateIndexM()">Мужчина
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio" id="W" onChange="calculateIndexM()" />Женщина
                </label>
            </fieldset>
        </form>
        <form class="input-group">
            <fieldset class="field-set">
                <legend>Уровень физической нагрузки</legend>
                <select class="custom-select select-lvl" id="inputGroupSelect04" onChange="calculateIndexM()"><br>
                    <option value="1">Сидячий образ жизни</option>
                    <option value="2">Легкие физ.нагрузки (1-3 раза в неделю)</option>
                    <option value="3">Средние физ.нагрузки (3-5 раз в неделю)</option>
                    <option value="4">Ежедневные тренировки </option>
                    <option value="5">Снижение веса </option>
                    <option value="6">Набор мышечной массы </option>
                </select>
            </fieldset>
        </form>

        <form class="input-group">
            <fieldset class="field-set">
                <legend>Характеристики</legend>

                <div class="chrsts-grid">
                    <label for="height">Рост</label>
                    <label for="weight">Вес</label>
                    <label for="age">Возраст</label>
                    <input type="text" class="input-fields form-control" name="height" id="height" onChange="calculateIndexM()" placeholder="Рост, см" value="175" />
                    <input type="text" class="input-fields form-control" name="weight" id="weight" onChange="calculateIndexM()" placeholder="Вес, кг" value="75" />
                    <input type="text" class="input-fields form-control" name="age" id="age" onChange="calculateIndexM()" placeholder="Возраст" value="21" />
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
                        <div><label for="ref" class="input-fields">Название продукта</label> <input autocomplete="off" class="input-fields form-control" id='ref' type="text" name="referal" placeholder="Начните вводить" /></div>
                        <div><label for="Gramm" class="input-fields">Вес, грамм</label> <input autocomplete="off" class="input-fields form-control" id="Gramm" type="text" value="100" /></div>
                        <div><label for="Protein" class="input-fields">Белков, грамм</label> <input class="input-fields form-control" id="Protein" type="text" disabled /></div>
                        <div><label for="Fat" class="input-fields">Жиров, грамм</label> <input class="input-fields form-control" id="Fat" type="text" disabled /></div>
                        <div><label for="Carbohydrates" class="input-fields">Углеводов, грамм</label> <input class="input-fields form-control" id="Carbohydrates" type="text" disabled /></div>
                        <div><label for="Calories" class="input-fields">Калорий, ккал</label> <input class="input-fields form-control" id="Calories" type="text" disabled /></div>
                    </div>
                </div>
                <ul class="search_result"></ul>
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
                        <div><label for="ref1" class="input-fields">Название продукта</label> <input autocomplete="off" class="input-fields form-control" id='ref1' type="text" name="referal1" placeholder="Начните вводить" /></div>
                        <div><label for="Gramm1" class="input-fields">Вес, грамм</label> <input autocomplete="off" class="input-fields form-control" id="Gramm1" type="text" value="100" /></div>
                        <div><label for="Protein1" class="input-fields">Белков, грамм</label> <input class="input-fields form-control" id="Protein1" type="text" disabled /></div>
                        <div><label for="Fat1" class="input-fields">Жиров, грамм</label> <input class="input-fields form-control" id="Fat1" type="text" disabled /></div>
                        <div><label for="Carbohydrates1" class="input-fields">Углеводов, грамм</label> <input class="input-fields form-control" id="Carbohydrates1" type="text" disabled /></div>
                        <div><label for="Calories1" class="input-fields">Калорий, ккал</label> <input class="input-fields form-control" id="Calories1" type="text" disabled /></div>
                    </div>
                </div>
                <ul class="search_result1"></ul>
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
                        <div><label for="ref2" class="input-fields">Название продукта</label> <input autocomplete="off" class="input-fields form-control" id='ref2' type="text" name="referal1" placeholder="Начните вводить" /></div>
                        <div><label for="Gramm2" class="input-fields">Вес, грамм</label> <input autocomplete="off" class="input-fields form-control" id="Gramm2" type="text" value="100" /></div>
                        <div><label for="Protein2" class="input-fields">Белков, грамм</label> <input class="input-fields form-control" id="Protein2" type="text" disabled /></div>
                        <div><label for="Fat2" class="input-fields">Жиров, грамм</label> <input class="input-fields form-control" id="Fat2" type="text" disabled /></div>
                        <div><label for="Carbohydrates2" class="input-fields">Углеводов, грамм</label> <input class="input-fields form-control" id="Carbohydrates2" type="text" disabled /></div>
                        <div><label for="Calories2" class="input-fields">Калорий, ккал</label> <input class="input-fields form-control" id="Calories2" type="text" disabled /></div>
                    </div>
                </div>
                <ul class="search_result2"></ul>
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
        <form class="input-group" method="POST">
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
    require('addToDiary.php');
    ?>
    <?php
    include('footer.php');
    ?>
    <script src="./js/Calculations.js"></script>
    <script src="./js/LiveSearch.js"></script>
</body>

</html>