<?php
$name=$_REQUEST['name'];

$add1=$_REQUEST['price1'];
$add2=$_REQUEST['quantity1'];
$email=$_REQUEST['dis'];
$id=$_REQUEST['id'];
 mysql_connect("localhost","root","");
               mysql_select_db("web1");

 ?>
<html>
<head>
<title>New book</title>
</head>
<body>
<form method="POST" action="update.php"><br/>
<font color="blue"/>
	<h1 align="center">Personal Infomation</h1>
	<table align='center'>
		<tr>
			<td>Enter Name</td>
			<td><input type="text" name="name1" value="<?php echo $name; ?>"/></td>
			<td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
		</tr>
		<tr>
		
			<td>Enter Price</td>
			<td><input type="text" name="price1" value="<?php echo $price; ?>"/></td>
		</tr>
		<tr>
			<td>Enter Quantity</td>
			<td><input type="text" name="quantity1" value="<?php echo $quantity; ?>"/></td>
		</tr>
		<tr>
			<td>Enter Discription</td>
			<td><input type="text" name="dis" value="<?php echo $discription; ?>"/></td>
		</tr>
		<tr><td><input type="reset" value="CLEAR"/></td>
			<td><input type="submit" value="update" name="s1"/></td>
		</tr>
		</table>		
</form>
</body>
</html>
