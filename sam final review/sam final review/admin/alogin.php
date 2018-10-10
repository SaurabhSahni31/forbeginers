<?php
include("dbconnect_books.php");
session_start();
$error = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 
$myusername=addslashes($_POST['l1']); 
$mypassword=addslashes($_POST['up1']); 
$sql="SELECT id FROM login WHERE username='$myusername' and passcode='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$count=mysql_num_rows($result);

if($count==1)
{
session_register("myusername");
$_SESSION['name']=$myusername;
     header("location: edit.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>