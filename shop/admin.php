<?php
define('INCLUDE_CHECK',1);
require "php/connect.php";
?>
<!DOCTYPE html>
<html lang="ru"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Muli:400,600&display=swap&subset=cyrillic" rel="stylesheet">
    <title>CandyShop</title>
    <script src="https://kit.fontawesome.com/0ca89e24fc.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="redact">
    <p>/*..Панель администратора..*/</p>
    <a href="php/cretev.php" class="men " id="create">Создать карточку товара</a> <br>
    <a href="php/deletev.php" class="men" id="delite">Удалить товары</a> <br>
    <a href="php/redactv.php" class="men" id="redact">Редактировать товары</a> <br>
    <a href="catalog.php" class="men" text-alight>Вернуться в каталог</a>
    
</div>
</body>
</html>