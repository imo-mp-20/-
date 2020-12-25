<?php
    define('INCLUDE_CHECK',1);
    require "php/connect.php";
    define('INCLUDE_CHECK',1);
    require "php/register.php";
    define('INCLUDE_CHECK',1);
    require "php/login.php";
?>




<!DOCTYPE html>
<html lang="ru">
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
    <!--навигация-->
    <div class="nav-wrapper">
        <div class="logo"><a href  ="index.php" class="logo-link">CANDYSHOP</a>  </div>
        <div class="navigation">
            <a href="#" class="navigation-link">Каталог</a>
            <a href="#" class="navigation-link" id="vhod">Вход</a>
        </div>
        <div class="serch">
            <input class="serch-input" type="text">             
            <a href="#" class="buttonS">Поиск</a>
        </div>
        <div class="cart">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-number">0</span>
        </div>
    </div>
    <!--категории-->
   <div class="kat">
       <div class="price">
           Цена<br/>от
           <input class="price-input" type="text" id="min">₽ до
           <input class="price-input" type="text" id="max">₽ 
       </div>
            <input type="checkbox" class="checkbox" id="checkbox-3" />
            <label for="checkbox-3">Новинки</label>
            <div class="catalog-button">
                <button class="catalog-button_burger"></button>
                <div class="catalog">Категории
                    <ul class="catalog-list">

                    </ul>
                </div>
            </div>
   </div>
    <!--продукт-->

    <div class="product">
    <?php
            $result = mysql_query("SELECT * FROM product");    // выбираем все товары
                while($row=mysql_fetch_assoc($result))
                {
                    if ($row['new'] == true)
                    {
                        echo '<div class="prod" data-category = "'.$row['category'].'">
                        <img class="prod-img" src="img/'.$row['img'].'" />
                        <div class="prod-name">'.$row['title'].'</div>
                        <div class="prod-price">'.$row['price'].'₽</div>
                        <button class="btn">В корзину</button>
                        <img class="prod-new" src="img/new-tag.png" alt="" width="30" height="30"></div>';
                        } else {
                        echo '<div class="prod" data-category='.$row['category'].'>
                        <img class="prod-img" src="img/'.$row['img'].'" />
                        <div class="prod-name">'.$row['title'].'</div>
                        <div class="prod-price">'.$row['price'].'₽</div>
                        <button class="btn">В корзину</button></div>';
                    }
                }
               

        ?>
    </div>


    <!--подвал-->
    <footer class="footer">
        <div class="foot">design by Dmitriy Mitrokhin</div>
        <div class="wrap-f">
         <div class="contacts"><a href="https://www.instagram.com/mitrofan312/?hl=ru" ><i class="fab fa-instagram"></i></a></div>
         <div class="contacts"> <a href="https://vk.com/mitroxin1998"><i class="fab fa-vk"></i></a></div>  
         <div class="contacts"><a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"><i class="far fa-envelope"></i></a></div>
   </div>
 </footer>
 
    <!--корзина-->
    <div class="carts">
        <div class="carts-body">
            <div class="carts-title">Корзина</div>
            <div class="carts-total">Общая сумма: <span>0</span> руб</div>

            <div class="carts-wrapper">
                <div id="carts-empty">
                    Ваша корзина пока пуста
                </div>
            </div>
            <button class="btn cart-confirm">Оформить заказ</button>
            <div class="carts-close">
                <i class="far fa-window-close"></i>
            </div>
        </div>
    </div>
    <!--поле авторизации-->
    <div class="enter">
        <div class="enter-body">
            <div class="enter-field">
            <form method=POST>
                Вход<br/>
                <input class="enter-input" type="text" name=log placeholder="  Логин"><br/>
                <input class="enter-input" type="password" name=password placeholder="  Пароль"> <br>
                <button name="sub" type='submit' class="ent" name="sub">Войти</button>
               </form>
            </div>
            <div class="registr-field">
                <form method=POST>
                Регистрация <br>
                <input class="enter-input" type="text" name=name placeholder="  Имя"><br/>
                <input class="enter-input" type="text" name=lastname placeholder="  Фамилия"> <br>
                <input class="enter-input" type="text" name=num placeholder="  Телефон"> <br>
                <input class="enter-input" type="text" name=login placeholder="  Логин"><br/>
                <input class="enter-input" type="password" name=pass placeholder="  Пароль"> <br>

            <button name="submit" type='submit' class="reg">Зарегистрироваться</button>
            </form>
            </div>
            
            <div class="enter-close">
                <i class="far fa-window-close"></i>
            </div>
        </div>
    </div>
<script src="srs/index.js"></script>
</body>
</html>
