$(function () {

    //Живой поиск завтрак
    $('.counter-block').on("change keyup input click", "#ref", function () {
        if (this.value.length >= 2) {
            $.ajax({
                type: 'post',
                url: "search.php", //Путь к обработчику
                data: { 'referal': this.value },
                response: 'text',
                success: function (data) {
                    $(".search_result").html(data).fadeIn();
                },
                error: function () {
                    alert("Данные не были отправлены");
                }
            })
        }
        else {
            $(".search_result").fadeOut();
        }

    })
    $(".search_result").hover(function () {
        $("#ref").blur();
    })

    //Живой поиск обед
    $('.counter-block').on("change keyup input click", "#ref1", function () {
        if (this.value.length >= 2) {
            $.ajax({
                type: 'post',
                url: "search.php", //Путь к обработчику
                data: { 'referal': this.value },
                response: 'text',
                success: function (data) {
                    $(".search_result1").html(data).fadeIn();
                },
                error: function () {
                    alert("Данные не были отправлены");
                }
            })
        }
        else {
            $(".search_result1").fadeOut();
        }

    })

    $(".search_result1").hover(function () {
        $("#ref1").blur();
    })

    //Живой поиск ужин
    $('.counter-block').on("change keyup input click", "#ref2", function () {
        if (this.value.length >= 2) {
            $.ajax({
                type: 'post',
                url: "search.php", //Путь к обработчику
                data: { 'referal': this.value },
                response: 'text',
                success: function (data) {
                    $(".search_result2").html(data).fadeIn();
                },
                error: function () {
                    alert("Данные не были отправлены");
                }
            })
        }
        else {
            $(".search_result2").fadeOut();
        }

    })

    $(".search_result2").hover(function () {
        $("#ref2").blur();
    })


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
        $(".search_result").fadeOut();

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
var normal = "норма";
var calRes = 0;
var diffrnt = $("#Cal").val() / $("#result-cal").text();
function itog() {
    if ($("#height").val() != ""
        && $("#weight").val() != "" && $("#age").val() != "") {
        $(".result_count3").removeAttr("hidden");
        $("#result-protein3").text("Белков, грамм: " + parseFloat(prot + prot1 + prot2));
        $("#result-fat3").text("Жиров, грамм: " + parseFloat(fat + fat1 + fat2));
        $("#result-carbohydrates3").text("Углеводов, грамм: " + parseFloat(carbh + carbh1 + carbh2));
        $("#result-cal3").text("Калорий, кКал: " + parseFloat(cal + cal1 + cal2));
        calRes = cal + cal1 + cal2;
        $("#result-ans3").text("За сегодня вы употребили: "
            + Math.round(parseFloat(calRes / $("#Cal").text()) * 100)
            + "% калорий от суточной нормы (" + calRes + " кКал из " + $("#Cal").text() + " кКал)");
    }
    else {$(".result_count3").removeAttr("hidden");
    $("#result-protein3").text("Белков, грамм: " + parseFloat(prot + prot1 + prot2));
        $("#result-fat3").text("Жиров, грамм: " + parseFloat(fat + fat1 + fat2));
        $("#result-carbohydrates3").text("Углеводов, грамм: " + parseFloat(carbh + carbh1 + carbh2));
        $("#result-cal3").text("Калорий, кКал: " + parseFloat(cal + cal1 + cal2));
        calRes = cal + cal1 + cal2;
         $("#result-ans3").text("Заполните все данные, чтобы получить полную статистику"); }
}
// завтрак
$("#addProductButton").on("click", function () {

    if ($('#ref').val() == "") { alert('Введите данные') } else {
        $(".toHide").css({ "display": "block" });
        if ($("#height").val() != ""
            && $("#weight").val() != "" && $("#age").val() != "") {
            prot += parseFloat($("#Protein").val());
            fat += parseFloat($("#Fat").val());
            carbh += parseFloat($("#Carbohydrates").val());
            cal += parseFloat($("#Calories").val());
            if (parseFloat($("#Cal").text()) * 0.3 > cal &&
                parseFloat($("#Cal").text()) * 0.2 < cal) {
                normal = "Калорийность вашего завтрака достаточная и составляет "
                    + Math.round(cal / parseFloat($("#Cal").text()) * 100) + " % от суточной нормы потребления калорий";
            } else {
                normal = "Вам необходимо изменить количество потребляемых калорий, 20%-30% суточной нормы для завтрака, вы потребляете: "
                    + (cal / parseFloat($("#Cal").text()) * 100).toFixed(1) + " % от суточной нормы потребления калорий";
            }
        } else { normal = "Введите все данные, чтобы получить полную статистику!!!" }
        $('#ref').clone(true).appendTo(".table_result").prop('disabled', true);
        $("#Gramm").clone(true).appendTo(".table_result").prop('disabled', true);
        $("#Protein").clone(true).appendTo(".table_result");
        $("#Fat").clone(true).appendTo(".table_result");
        $("#Carbohydrates").clone(true).appendTo(".table_result");
        $("#Calories").clone(true).appendTo(".table_result");

        $("#result-protein").text("Белков, грамм: " + prot);
        $("#result-fat").text("Жиров, грамм: " + fat);
        $("#result-carbohydrates").text("Углеводов, грамм: " + carbh);
        $("#result-cal").text("Калорий, кКал: " + cal);
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
        $("#Gramm1").clone(true).appendTo(".table_result1").prop('disabled', true);
        $("#Protein1").clone(true).appendTo(".table_result1");
        $("#Fat1").clone(true).appendTo(".table_result1");
        $("#Carbohydrates1").clone(true).appendTo(".table_result1");
        $("#Calories1").clone(true).appendTo(".table_result1");

        $("#result-protein1").text("Белков, грамм: " + prot1);
        $("#result-fat1").text("Жиров, грамм: " + fat1);
        $("#result-carbohydrates1").text("Углеводов, грамм: " + carbh1);
        $("#result-cal1").text("Калорий, кКал: " + cal1);
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
        $("#Gramm2").clone(true).appendTo(".table_result2").prop('disabled', true);
        $("#Protein2").clone(true).appendTo(".table_result2");
        $("#Fat2").clone(true).appendTo(".table_result2");
        $("#Carbohydrates2").clone(true).appendTo(".table_result2");
        $("#Calories2").clone(true).appendTo(".table_result2");

        $("#result-protein2").text("Белков, грамм: " + prot2);
        $("#result-fat2").text("Жиров, грамм: " + fat2);
        $("#result-carbohydrates2").text("Углеводов, грамм: " + carbh2);
        $("#result-cal2").text("Калорий, кКал: " + cal2);
        $("#result-ans2").text(normal);
        $(".result_count2").removeAttr("hidden");
        itog();

    }
})


