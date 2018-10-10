<?php

echo "<html><body><form method='POST'>";
echo "<input type='text' name='name1'>";
echo "<input type='submit' name='search' value='search'><br>";
	
mysql_connect("localhost","root","");
 mysql_select_db("web1");	
   if(isset($_POST['search']))  
 {	
		$name=$_POST['name1'];		
		$result = mysql_query("SELECT * from bookinfo where name='$name'");
echo "<table border='1' align='center'><caption>Books Information</caption><tr><th>Name</th><th>Price</th><th>Quantity</th><th>Discription</th>
</tr>";
	while($row = mysql_fetch_array($result))
	{
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['price1'] . "</td><td>" .         $row['quantity1'] . "</td><td>" . $row['dis'] . "</td></tr>";
	}
	echo "</table>";	
	
 }
		   echo "</form></body></html>";
		   ?>
