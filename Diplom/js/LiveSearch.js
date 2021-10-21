function liveSearchScript(inputId, dropDownList) {
    //Живой поиск завтрак
    $('.counter-block').on("change keyup input click", inputId, function () {
        if (this.value.length >= 2) {
            $.ajax({
                method: 'POST',
                url: "/search.php", //Путь к обработчику
                data: {nameOfProductValue: this.value} ,
                success: function (data) {
                    $(dropDownList).html(data).fadeIn();
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.status === 0) {
                        alert('Not connect. Verify Network.');
                    } else if (jqXHR.status == 404) {
                        alert('Requested page not found (404).');
                    } else if (jqXHR.status == 500) {
                        alert('Internal Server Error (500).');
                    } else if (exception === 'parsererror') {
                        alert('Requested JSON parse failed.');
                    } else if (exception === 'timeout') {
                        alert('Time out error.');
                    } else if (exception === 'abort') {
                        alert('Ajax request aborted.');
                    } else {
                        alert('Uncaught Error. ' + jqXHR.responseText);
                    }
                }
            })
        }
        else {
            $(dropDownList).fadeOut();
        }

    })
    $(dropDownList).hover(function () {
        $(inputId).blur();
    })
}

$(function () {
    liveSearchScript('#ref', '.search_result');
    liveSearchScript('#ref1', '.search_result1');
    liveSearchScript('#ref2', '.search_result2');


    var caloriesVar, caloriesVar1, caloriesVar2;
    var proteinVar, proteinVar1, proteinVar2;
    var fatVar, fatVar1, fatVar2;
    var carbohydratesVar, carbohydratesVar1, carbohydratesVar2;

    // Изменения калорий 
    function varCounter(data, gramm) {
        return (data * gramm).toFixed(1);
    }
    $("#Gramm").on("keyup", function () {
        var gramm = $("#Gramm").val() / 100;
        $("#Calories").val(varCounter(caloriesVar, gramm));
        $("#Protein").val(varCounter(proteinVar, gramm));
        $("#Fat").val(varCounter(fatVar, gramm));
        $("#Carbohydrates").val(varCounter(carbohydratesVar, gramm));

    })
    $("#Gramm1").on("keyup", function () {
        var gramm = $("#Gramm1").val() / 100;
        $("#Calories1").val(varCounter(caloriesVar1, gramm));
        $("#Protein1").val(varCounter(proteinVar1, gramm));
        $("#Fat1").val(varCounter(fatVar1, gramm));
        $("#Carbohydrates1").val(varCounter(carbohydratesVar1, gramm));

    })
    $("#Gramm2").on("keyup", function () {
        var gramm = $("#Gramm2").val() / 100;
        $("#Calories2").val(varCounter(caloriesVar2, gramm));
        $("#Protein2").val(varCounter(proteinVar2, gramm));
        $("#Fat2").val(varCounter(fatVar2, gramm));
        $("#Carbohydrates2").val(varCounter(carbohydratesVar2, gramm));

    })
    //Обработка при выборе завтрак
    $(".search_result").on("click", "li", function () {
        var gramm = ($("#Gramm").val() / 100);
        $("#ref").val($(this).text());
        $("#Protein").val(($(this).next().text() * gramm).toFixed(1));
        $("#Fat").val(($(this).next().next().text() * gramm).toFixed(1));
        $("#Carbohydrates").val(($(this).next().next().next().text() * gramm).toFixed(1));
        $("#Calories").val(($(this).next().next().next().next().text() * gramm).toFixed(1));
        caloriesVar = ($(this).next().next().next().next().text() * gramm).toFixed(1);
        fatVar = ($(this).next().next().text() * gramm).toFixed(1);
        carbohydratesVar = ($(this).next().next().next().text() * gramm).toFixed(1);
        proteinVar = ($(this).next().text() * gramm).toFixed(1)
        $(".search_result").fadeOut(0);

    })
    //Обработка при выборе обед
    $(".search_result1").on("click", "li", function () {
        var gramm1 = ($("#Gramm1").val() / 100);
        $("#ref1").val($(this).text());
        $("#Protein1").val(($(this).next().text() * gramm1).toFixed(1));
        $("#Fat1").val(($(this).next().next().text() * gramm1).toFixed(1));
        $("#Carbohydrates1").val(($(this).next().next().next().text() * gramm1).toFixed(1));
        $("#Calories1").val(($(this).next().next().next().next().text() * gramm1).toFixed(1));
        caloriesVar1 = ($(this).next().next().next().next().text() * gramm1).toFixed(1);
        fatVar1 = ($(this).next().next().text() * gramm1).toFixed(1);
        carbohydratesVar1 = ($(this).next().next().next().text() * gramm1).toFixed(1);
        proteinVar1 = ($(this).next().text() * gramm1).toFixed(1)
        $(".search_result1").fadeOut();

    })
    //Обработка при выборе ужин
    $(".search_result2").on("click", "li", function () {
        var gramm2 = ($("#Gramm2").val() / 100);
        $("#ref2").val($(this).text());
        $("#Protein2").val(($(this).next().text() * gramm2).toFixed(1));
        $("#Fat2").val(($(this).next().next().text() * gramm2).toFixed(1));
        $("#Carbohydrates2").val(($(this).next().next().next().text() * gramm2).toFixed(1));
        $("#Calories2").val(($(this).next().next().next().next().text() * gramm2).toFixed(1));
        caloriesVar2 = ($(this).next().next().next().next().text() * gramm2).toFixed(1);
        fatVar2 = ($(this).next().next().text() * gramm2).toFixed(1);
        carbohydratesVar2 = ($(this).next().next().next().text() * gramm2).toFixed(1);
        proteinVar2 = ($(this).next().text() * gramm2).toFixed(1)
        $(".search_result2").fadeOut();

    })

})
var prot = 0;
var prot1 = 0;
var prot2 = 0;
var fat = 0;
var fat1 = 0;
var fat2 = 0;
var carbh = 0;
var carbh1 = 0;
var carbh2 = 0;
var cal = 0;
var cal1 = 0;
var cal2 = 0;
var prot4 = 0;
var fat4 = 0;
var carbh4 = 0;
var cal4 = 0;
var normal = "норма";
var calRes = 0;
var diffrnt = $("#Cal").val() / $("#result-cal").text();
function itog() {
    if ($("#height").val() != ""
        && $("#weight").val() != "" && $("#age").val() != "") {
        $(".result_count3").removeAttr("hidden");

        $("#result-protein3").text("Белков, грамм: " + parseFloat(prot4 + prot1 + prot2)
            + ", что составляет " + Math.round(parseFloat((prot4 + prot1 + prot2) / $("#normalP").text()) * 100)
            + " % от суточной нормы в " + $("#normalP").text() + " грамм");
        $("#result-proteinI").val(parseFloat(prot4 + prot1 + prot2));
        $("#result-fat3").text("Жиров, грамм: " + parseFloat(fat4 + fat1 + fat2) + ", что составляет "
            + Math.round(parseFloat((fat4 + fat1 + fat2) / $("#normalF").text()) * 100)
            + " % от суточной нормы в " + $("#normalF").text() + " грамм");
        $("#result-fatI").val(parseFloat(fat4 + fat1 + fat2));
        $("#result-carbohydrates3").text("Углеводов, грамм: " + parseFloat(carbh4 + carbh1 + carbh2)
            + ", что составляет "
            + Math.round(parseFloat((carbh4 + carbh1 + carbh2) / $("#normalC").text()) * 100)
            + " % от суточной нормы в " + $("#normalC").text() + " грамм");
        $("#result-carbohydratesI").val(parseFloat(carbh4 + carbh1 + carbh2));
        $("#result-cal3").text("Калорий, ккал: " + parseFloat(cal4 + cal1 + cal2));
        $("#result-calI").val(parseFloat(cal4 + cal1 + cal2));

        calRes = cal4 + cal1 + cal2;
        $("#result-ans3").text("За сегодня вы употребили: "
            + Math.round(parseFloat(calRes / $("#Cal").text()) * 100)
            + "% калорий от суточной нормы (" + calRes + " ккал из " + $("#Cal").text() + " ккал)");
    }
    else {
        $(".result_count3").removeAttr("hidden");
        $("#result-protein3").text("Белков, грамм: " + parseFloat(prot4 + prot1 + prot2));
        $("#result-proteinI").val(parseFloat(prot4 + prot1 + prot2));
        $("#result-fat3").text("Жиров, грамм: " + parseFloat(fat4 + fat1 + fat2));
        $("#result-fatI").val(parseFloat(fat4 + fat1 + fat2));
        $("#result-carbohydrates3").text("Углеводов, грамм: " + parseFloat(carbh4 + carbh1 + carbh2));
        $("#result-carbohydratesI").val(parseFloat(carbh4 + carbh1 + carbh2));
        $("#result-cal3").text("Калорий, ккал: " + parseFloat(cal4 + cal1 + cal2));
        $("#result-calI").val(parseFloat(cal4 + cal1 + cal2));
        calRes = cal4 + cal1 + cal2;
        $("#result-ans3").text("Заполните все данные, чтобы получить полную статистику");
    }
}

// завтрак
$("#addProductButton").on("click", function () {

    if ($('#ref').val() == "") { alert('Введите данные') } else {
        $(".toHide").css({ "display": "block" });
        if ($("#height").val() != ""
            && $("#weight").val() != "" && $("#age").val() != "") {
            prot4 += parseFloat($("#Protein").val());
            fat4 += parseFloat($("#Fat").val());
            carbh4 += parseFloat($("#Carbohydrates").val());
            cal4 += parseFloat($("#Calories").val());
            if (parseFloat($("#Cal").text()) * 0.3 > cal4 &&
                parseFloat($("#Cal").text()) * 0.2 < cal4) {
                normal = "Калорийность вашего завтрака достаточная и составляет "
                    + Math.round(cal4 / parseFloat($("#Cal").text()) * 100) + " % от суточной нормы потребления калорий";
            } else {
                normal = "Вам необходимо изменить количество потребляемых калорий, 20%-30% суточной нормы для завтрака, вы потребляете: "
                    + (cal4 / parseFloat($("#Cal").text()) * 100).toFixed(1) + " % от суточной нормы потребления калорий";
            }
        } else { normal = "Введите все данные, чтобы получить полную статистику!!!" }
        $('#ref').clone(true).appendTo(".table_result").prop('disabled', true);


        $("#result-protein").text("Белков, грамм: " + prot4);
        $("#result-fat").text("Жиров, грамм: " + fat4);
        $("#result-carbohydrates").text("Углеводов, грамм: " + carbh4);
        $("#result-cal").text("Калорий, ккал: " + cal4);
        $("#result-ans").text(normal);
        $(".result_count").removeAttr("hidden");
        itog();
    }
})
// обед
$("#addProductButton1").on("click", function () {
    if ($('#ref1').val() == "") { alert('Введите данные') } else {
        $(".toHide").css({ "display": "block" });
        if ($("#height").val() != ""
            && $("#weight").val() != "" && $("#age").val() != "") {
            prot1 += parseFloat($("#Protein1").val());
            fat1 += parseFloat($("#Fat1").val());
            carbh1 += parseFloat($("#Carbohydrates1").val());
            cal1 += parseFloat($("#Calories1").val());
            if (parseFloat($("#Cal").text()) * 0.45 > cal1 &&
                parseFloat($("#Cal").text()) * 0.35 < cal1) {
                normal = "Калорийность вашего обеда достаточная и составляет "
                    + Math.round(cal1 / parseFloat($("#Cal").text()) * 100) + " % от суточной нормы потребления калорий";
            } else {
                normal = "Вам необходимо изменить количество потребляемых калорий, 35%-45% суточной нормы для обеда, вы потребляете: "
                    + (cal1 / parseFloat($("#Cal").text()) * 100).toFixed(1) + " % от суточной нормы потребления калорий";
            }
        } else { normal = "Введите все данные, чтобы получить полную статистику!!!" }
        $('#ref1').clone(true).appendTo(".table_result1").prop('disabled', true);


        $("#result-protein1").text("Белков, грамм: " + prot1);
        $("#result-fat1").text("Жиров, грамм: " + fat1);
        $("#result-carbohydrates1").text("Углеводов, грамм: " + carbh1);
        $("#result-cal1").text("Калорий, ккал: " + cal1);
        $("#result-ans1").text(normal);
        $(".result_count1").removeAttr("hidden");
        itog();
    }
})
// ужин
$("#addProductButton2").on("click", function () {
    if ($('#ref2').val() == "") { alert('Введите данные') } else {
        $(".toHide").css({ "display": "block" });
        if ($("#height").val() != ""
            && $("#weight").val() != "" && $("#age").val() != "") {
            prot2 += parseFloat($("#Protein2").val());
            fat2 += parseFloat($("#Fat2").val());
            carbh2 += parseFloat($("#Carbohydrates2").val());
            cal2 += parseFloat($("#Calories2").val());
            if (parseFloat($("#Cal").text()) * 0.30 > cal2 &&
                parseFloat($("#Cal").text()) * 0.20 < cal2) {
                normal = "Калорийность вашего ужина достаточная и составляет "
                    + Math.round(cal2 / parseFloat($("#Cal").text()) * 100) + " % от суточной нормы потребления калорий";
            } else {
                normal = "Вам необходимо изменить количество потребляемых калорий, 20%-30% суточной нормы для ужина, вы потребляете: "
                    + (cal2 / parseFloat($("#Cal").text()) * 100).toFixed(1) + " % от суточной нормы потребления калорий";
            }
        } else { normal = "Введите все данные, чтобы получить полную статистику!!!" }
        $('#ref2').clone(true).appendTo(".table_result2").prop('disabled', true);


        $("#result-protein2").text("Белков, грамм: " + prot2);
        $("#result-fat2").text("Жиров, грамм: " + fat2);
        $("#result-carbohydrates2").text("Углеводов, грамм: " + carbh2);
        $("#result-cal2").text("Калорий, ккал: " + cal2);
        $("#result-ans2").text(normal);
        $(".result_count2").removeAttr("hidden");
        itog();

    }
})


