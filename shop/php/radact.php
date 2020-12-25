<? 
if (isset($_POST["title"])) {
    if (isset($_GET['red_id'])) {
        $result = mysqli_query($link, "UPDATE `product` SET `title` = '{$_POST['title']}',`price` = '{$_POST['price']}',`new` = '{$_POST['new']}',`img` = '{$_POST['price']}',`category` = '{$_POST['category']}' WHERE `ID`={$_GET['red_id']}");
    } 
}
    if (isset($_GET['red_id'])) {
    $result = mysqli_query($link, "SELECT `id`, `title` , `price` , `new` , `img` , `category` from `product` WHERE `id`={$_GET['red_id']}");
    $row = mysqli_fetch_array($result);
  }
?>