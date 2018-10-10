<?php
mysql_connect("localhost","root","");
 mysql_select_db("web1");
		$name=$_POST['name1'];
		$add1=$_POST['price1'];
		$add2=$_POST['quantity1'];
		$email=$_POST['dis'];
        mysql_query("INSERT INTO bookinfo(name,price1,quantity1,dis) VALUES('$name','$price1','$quantity1','$dis')");
		header('Location:addbooks.html');
	
?>
