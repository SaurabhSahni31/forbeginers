<?php
session_start();
error_reporting(0);
include 'dbconnect_books.php';
	$result = mysqli_query($con,'select * from product where id='.$_GET['id']);
	$product = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$quantity =null;
?>
<table cellpadding="2" cellspacing="2" border="1">
    <tr>
        <th>Option</th>	
		<th>Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Sub Total</th>
	</tr>
    <?php
	
	$index = 0; $s=0;
	//for($i=0;$i<count($cart);$i++){
		$s += $product['price'] * $product['quantity']; 
		?>
		<tr>
		    <td><a href="cart.php?id=<?php echo $cart[$i]->id; ?>"  onclick="return confirm(Are u sure?)">Delete<a></td>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['price']; ?></td>
			<td><?php echo $product['quantity']; ?></td>
			<td><?php echo $product['price'] * $product['quantity']; ?></td>
		</tr>
   
	<tr>
	    <td colspan="5" align="right">sum</td>
		<td align="left"><?php echo $s; ?></td>
	</tr>
</table>
<br>
<a href="index.php"> Continue Shopping</a>
	







	
			