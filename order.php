<?php
	$server = "localhost";
	$user = "root";
	$pass = "8825359354";
	$db = "canteen";
	$table = "items";

	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("Error");
	}

		$sqlShowAll = "select * from items;";
		
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<table>";
			echo "<tr>";
			echo"<th>Menu</th>";
  			echo "<tr>";
    			echo "<th>Item ID</th>";
    			echo "<th>Item Name</th>";
    			echo "<th>Price</th>";
    			#echo "<th>Quantity Available</th>";
    			echo "<th>Description</th>";
  			echo "</tr>";
  			echo "</tr><br>";
			while ($row = mysqli_fetch_assoc($resShowAll)) {
			echo "<tr>";
				foreach ($row as $cell) {
					echo "<td>$cell </td>";
				}
			}
			echo "</table>";
				
?>
	<html>
	<head>
	<title></title>
	</head>
	<body>
		<style> 
body
{
	background-color: lightblue;
	text-align:center;
	font-size:15;
	border-style: solid;
	
}
table,th,td
{
  border: 2px solid black;
  width: 35%;
  text-align:center;
  font-size:12;
}
</style>
	<form action = "addToCart.php" method = "post">
		<h3>Enter details of food to order</h3>
		ItemId   : <input type="text" name="id">
		<!--Item Name   : <input type="text" name="name">
		Price   : <input type="text" name="price">-->
		Quantity   : <input type="text" name="qtyn">
		<input type="submit" name="submit" value="Add to Cart">
	</form>
	<h3>Click here to View Cart</h3>
	<form action = "viewCart.php" method = "post">
	<input type="submit" name="submit" value="View Cart">
	</form>
	<h3>Click here to Remove item from Cart</h3>
	<form action = "removeFoodFromCart.php" method = "post">
	<input type="submit" name="submit" value="Remove item from Cart">
	</form>
	<h3>Click here to clear Cart</h3>
	<form action = "clearCart.php" method = "post">
	<input type="submit" name="submit" value="Clear Cart">
	</form>
	<h3>Click here to Place Order</h3>
	<form action= "placeOrder.php" method = "post">
		<input type="submit" name="submit" value="Place Order">
	</form>
</body>
</html>