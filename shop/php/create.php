<?php
if(isset($_POST['dobav']))
{

       $title=$_POST['name'];

       $price=$_POST['price'];

       if ( isset($_POST['new']) == true ) {
        $new=1; 
    } else {
        $new=0;
    }

       $img = $_POST['img'];

       $category = $_POST['category'];

       mysql_query("INSERT INTO product (id,title,price,new,img,category) VALUES (NULL,'$title','$price','$new','$img', '$category')");
header("Location: ../admin.php");
  
   
}
?>