<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style> 
body
{
	background-color: lightblue;
	text-align:center;
	font-size:30;
	border-style: solid;
	
}
table,th,td
{
  border: 1px solid black;
  width: 40%;
  text-align:center;
  font-size:30;
}
</style>
<body>
	<h1>Cart </h1>
	<img src="canteen.jpg" alt="Canteen Automation System" width="1000" height="400">
	<?php
	$server = "localhost";
	$user = "root";
	$pass = "8825359354";
	$db = "canteen";
	$table = "cart";

	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("Error");
	}

		$sqlShowAll = "select * from cart;";
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<table>";
			echo "<tr>";
			echo"<th>Cart</th>";
  			echo "<tr>";
    			echo "<th>Item ID</th>";
    			echo "<th>Item Name</th>";
    			echo "<th>Price</th>";
    			echo "<th>Quantity</th>";
  			echo "</tr>";
  			echo "</tr><br>";
			while ($row = mysqli_fetch_assoc($resShowAll)) {
			echo "<tr>";
				foreach ($row as $cell) {
					echo "<td>$cell </td>";
				}

				echo "</tr><br>";
			}
			echo "</table>";
				
?>

	<h3> Click here to modify cart</h3>
	<form action = "order.php" method = "post">
		<input type="submit" name="submit" value="Modify card">
	</form>
	<h3> Click here to Order</h3>
	<form action = "placeOrder.php" method = "post">
		<input type="submit" name="submit" value="Order">
	</form>
	<h3> Click here to Sign out!!!</h3>
	<form action = "customer.php" method = "post">
		<input type="submit" name="submit" value="Signout">
	</form>
	

</body>
</html>