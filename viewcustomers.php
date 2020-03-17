<!DOCTYPE html>
<html>
<head>
	<title>Registered Customer</title>
</head>
<style> 
body
{
	background-color: lightblue;
	text-align:center;
	font-size:300;
	border-style: solid;
	
}
table,th,td
{

  border: 1px solid black;
  
}


</style>
<body >
<?php

$server = "localhost";
	$user = "root";
	$pass = "8825359354";
	$db = "canteen";
	$table = "customer";

	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("Error");
	}

$sqlShowAll = "select * from customer;";
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<h1> Registered Customers </h1>";
		echo "<table>";
			echo "<tr>";
				
				echo "<th>Name</th>";
				echo "<th>Email</th>";
				
				echo "<th>Address</th>";
				echo "<th>Username</th>";
				echo "<th>Password</th>";
				echo "<th>Phone</th>";
				echo "<th>Cid</th>";
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
		<form action = "emp.php" method = "post">
		<input type="submit" name="submit" value="Back">
	</form>
	</body>
</html>