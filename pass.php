<?php
// переменная для хранения результата
$result = 'Файл не был успешно загружен на сервер';
// путь для загрузки файлов
$upload_path = dirname(__FILE__) . '/uploads/';
// если файл был успешно загружен, то
if ($_FILES['file']['error'] == UPLOAD_ERR_OK) {
    // получаем расширение исходного файла
    $extension_file = mb_strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
    // получаем уникальное имя под которым будет сохранён файл
    $full_unique_name = $upload_path . uniqid('file_', true).'.'.$extension_file;
    // перемещает файл из временного хранилища в указанную директорию
    if (move_uploaded_file($_FILES['file']['tmp_name'], $full_unique_name)) {
        // записываем в переменную $result ответ
        $result = substr($full_unique_name, strlen($_SERVER['DOCUMENT_ROOT'])+1);
    } else {
        // записываем в переменную $result сообщение о том, что произошла ошибка
        $result = "Не удалось загрузить изображение";
    }
}
// возвращаем результат (ответ сервера)
echo $result;
