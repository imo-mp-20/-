<?php
define('INCLUDE_CHECK',1);
require "connect.php";
define('INCLUDE_CHECK',1);
require "delete.php";

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


 <!-- удаление товара-->
 <div class="redact">
 <a href="../admin.php" class="men" >Вернуться в панель администратора</a>
        <div class="product">
        
    <?php
            $result = mysql_query("SELECT * FROM product");    // выбираем все товары
                while($row=mysql_fetch_assoc($result))
                {
                    if ($row['new'] == true)
                    {
                        echo '<div class="prod" data-category = "'.$row['category'].'">
                        <img class="prod-img" src="../img/'.$row['img'].'" />
                        <div class="prod-price">'.$row['price'].'₽</div>
                        <form method=POST><span></span>
                        <div class="prod-name" name=name>'.$row['title'].'</div>
                        <a href="?del_id='.$row['id'].'" class="btn "  name=del>Удалить </a></form>
                        <img class="prod-new" src="img/new-tag.png" alt="" width="30" height="30"></div>';
                        } else {
                        echo '<div class="prod" data-category='.$row['category'].'>
                        <img class="prod-img" src="../img/'.$row['img'].'" />
                        <div class="prod-price">'.$row['price'].'₽</div>
                        <form method=POST><div class="prod-name" name=name>'.$row['title'].'</div>
                        <a href="?del_id='.$row['id'].'" class="btn "  name=del>Удалить </a></form></div>';
                    }
                }
               

        ?>
    </div>
            </div>
</body>
</html>