<?php
mysql_connect("localhost","root","");
               mysql_select_db("web1");
			   $result = mysql_query("SELECT * from bookinfo");
echo "<table border='1' align='center'>
<caption>Book Information</caption>
<tr>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Discription</th>
<th>Delete</th>
<th>Edit</th>
</tr>";
	while($row = mysql_fetch_array($result))
	{
	echo "<tr>
	<td>" . $row['name'] . "</td>
	<td>" . $row['price1'] . "</td>
	<td>" . $row['quantity1'] . "</td>
	<td>" . $row['dis'] . "</td>
	<td><a href='delete.php?id=$row[0]'>Delete</a></td>
	<td><a href='edit.php?id=$row[0]&name=$row[1]&price1=$row[2]&quantity1=$row[3]&dis=$row[4]'>Edit</a></td>
	</tr>";
	}
	echo "</table>";
?>
