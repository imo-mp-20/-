 <? 
  if (isset($_GET['del_id'])) { //проверяем, есть ли переменная
    //удаляем строку из таблицы
    $row = mysql_query("DELETE FROM `product` WHERE `id` = {$_GET['del_id']}");
  
  }
?>