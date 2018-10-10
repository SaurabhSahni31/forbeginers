<?php
$id=$_REQUEST['id'];
mysql_connect("localhost","root","");
               mysql_select_db("web1");	
			   $result = mysql_query("delete from bookinfo where id=$id");
			   header("Location:display.php");
		
	   ?>
