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

				echo "</tr><br>";
			}
			echo "</table>";
				
?>
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
  
}
</style>
<body>
	<form action = "addFoodToMenu.php" method = "post">
		<input type="submit" name="submit" value="Add Food">
	</form>

	<form action = "menu.php" method = "post">
		<input type="submit" name="submit" value="back">
	</form>

</body>
</html>