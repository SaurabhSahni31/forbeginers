<?php
include"connection.php";
if(($_SERVER["REQUEST_METHORD"]="POST"))
{
  $name=$_POST["u1"];
  $password=$_POST["p1"];
  $mobile_no=$_POST["m1];
  $query="insert into shopping_cart('name','password','mobile_no') values('$name','$password','$mobile_no');
  if(mysql_query($query))
  {
	  header("location:home_page.html");
  }
}
?>  

