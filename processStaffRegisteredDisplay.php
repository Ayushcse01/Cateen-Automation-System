<?php
	$server = "localhost";
	$user = "root";
	$pass = "8825359354";
	$db = "canteen";
	$table = "canteenownerworker";

	$con = mysqli_connect($server, $user, $pass, $db);

	if (! $con) {
		die("Error");
	}
		$sqlShowAll = "select * from canteenownerworker;";
		$resShowAll = mysqli_query($con, $sqlShowAll);
		echo "<h1> Registered Employees </h1><br>";
		echo "<table>";
			echo "<tr>";
				echo "<th>Employee Name</th>";
				echo "<th>Email Address </th>";
				echo "<th> Username</th>";
				echo "<th>Password</th>";
				echo "<th>Designation</th>";
				echo "<th>Phone No.</th>";
				echo "<th>Emp id</th>";
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
	
	
	$con->close();
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
	

	<form action = "customer.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>
	

	<form action = "emp.php" method = "post">
		<input type="submit" name="submit" value="back">
	</form>

</body>
</html>