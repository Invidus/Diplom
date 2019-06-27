$('#exit').on('click', function () {
    $.ajax({
        type: 'post',
        url: "exit.php", //Путь к обработчику
        data: true,
        response: 'text',
        // success: function (data) {
        //     $(".search_result").html(data).fadeIn();
        // },
        error: function () {
            alert("Данные не были отправлены");
        }
    })
})