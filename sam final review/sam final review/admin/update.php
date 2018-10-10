<?php
$name=$_POST['name1'];
$add1=$_POST['price1'];
$add2=$_POST['quantity1'];
$email=$_POST['dis'];

$id=$_POST['id'];
mysql_connect("localhost","root","");
               mysql_select_db("web1");
			   mysql_query("update bookinfo set name='$name',price='$price1',quantity='$quantity1',discription='$dis' where id='$id'");
			  header('Location:display.php');
?>
