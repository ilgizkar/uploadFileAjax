<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-wysihtml5.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/wysihtml5-0.3.0.js"></script>
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap-wysihtml5.js"></script>

    <title>Document</title>
</head>
<body>

<div class="container">
    <!-- Блок, в который будем выводить путь к файлу на сервере -->
    <p class="alert alert-info">
        Результат:<br><img id="result"></img>
    </p>
    <div class="form-group">
        <!-- Элемент, для выбора файла  -->
        <input type="file" id="file">
    </div>
    <!-- Элемент для отправки файла на сервер  -->
    <button id="upload-image" class="btn btn-primary">Отправить</button>
</div>

<script src="scripts.js"></script>


</body>
</html>
