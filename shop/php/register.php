<?php
  if(isset($_POST['submit']))
 {

     if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    // проверяем, не сущестует ли пользователя с таким именем
    $query = mysql_query("SELECT id FROM guest WHERE login='".mysql_real_escape_string($_POST['login'])."'");
    if(mysql_num_rows($query) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует";
    }


       // Если нет ошибок, то добавляем в БД нового пользователя
    if(count($err) == 0)
    {

        $name=$_POST['name'];

        $lastname=$_POST['lastname'];

        $num=$_POST['num'];

        $login = $_POST['login'];

        $pass = md5(md5(trim($_POST['pass'])));

        mysql_query("INSERT INTO guest (id,name,lastname,num,login,pass,admin) VALUES (NULL,'$name','$lastname','$num','$login', '$pass','0')");
        print $name.",вы успешно зарегестрированы!";
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach ($err AS $error)
        {
            print $error."";
        }

    
}
}
?>