<?
// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
if(isset($_POST['sub']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysql_query("SELECT id, pass, admin FROM guest WHERE login = '".mysql_real_escape_string($_POST['log'])."' LIMIT 1");
    $data = mysql_fetch_assoc($query);

    // Сравниваем пароли
    if($data['pass'] == md5(md5($_POST['password'])))
    {
        
 
        
        if  ($data['admin'] == 1)
        {
            header("Location: admin.php");
            
        }
        else 
        {
            print "Вы зашли в профиль!";

        }
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>