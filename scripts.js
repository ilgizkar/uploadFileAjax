$(function() {
    // при нажатии на кнопку "Отправить"
    $('#upload-image').click(function() {
        // элемент, с помощью которого пользователь выбирает файл
        var file = $('#file');
        // элемент, в который выведим ответ сервера
        var result = $('#result');
        // если файл выбран, то
        if (file.prop('files').length) {
            // создаём объект FormData
            var formData = new FormData();
            // добавляем в объект FormData файл
            formData.append('file', file.prop('files')[0]);
            // выполняем HTTP (AJAX) запрос
            //   url - адрес, содержащий php скрипт, который будет обрабатывать запрос
            //   procedData - параметр, с помощью которого отключим преобразование данных в строку запроса
            //   contentType - параметр, с помощью которого отключим установления  типа контента jQuery
            //   type - параметр, с помощью которого установим в качестве метода отправки запроса POST
            //   success - параметр, который
            $.ajax({
                url: 'pass.php',
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data) {
                    $('#result').attr('src', data);
                }
            });
        } else {
            result.html("Не выбран файл для загрузки!");
        }
    });
});