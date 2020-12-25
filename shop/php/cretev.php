<?php
define('INCLUDE_CHECK',1);
require "connect.php";
define('INCLUDE_CHECK',1);
require "create.php";

?>
<!DOCTYPE html>
<html lang="ru"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Muli:400,600&display=swap&subset=cyrillic" rel="stylesheet">
    <title>CandyShop</title>
    <script src="https://kit.fontawesome.com/0ca89e24fc.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- создание товара-->


<div class="redact" >
        <div class="sozdanie">
        <form method=POST>
                Название товара <br>
            <input class="sozdanie-input" name=name type="text"> <br>
            Цена <br>
            <input class="sozdanie-input" name=price type="text"> <br>
            <input type="checkbox" name=new class="checkbox" id="checkbox-2" />
            <label for="checkbox-2">Новинки</label><br>
            Картинка <br>
            <input class="sozdanie-input" name=img type="text"> <br>
            Категория <br>
            <input class="sozdanie-input" name=category type="text"> <br>
            <button class="btn" name="dobav">Добавить</button>
        </form> 
        </div>
    </div>
</div>

</body>
</html>