<?php
$theirname = $_POST["name"];
$theiremail = $_POST["email"];
$theirsubject=$_POST["subject"];
$message = $_POST["text"];

$headers = "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/plain;";
$headers.= "Charset=iso-8859-1\r\n";
$headers.= "From: $theiremail";

mail("email@email.com", $theirsubject, $message, $headers);
?>
<html>
<script language="Javascript">

<!--
// please keep these lines on when you copy the source
// made by: Nicolas - http://www.javascript-page.com

alert ("Thank you for your Message!")
//-->

</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=http://www.i-tech-system.com/index.php">
</html>