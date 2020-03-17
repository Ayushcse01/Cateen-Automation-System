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


	$name = $_POST['a'];
	$email = $_POST['b'];
	$username= $_POST['c'];
	$password = $_POST['d'];
	$designation = $_POST['e'];
	$contact_no = $_POST['f'];

	$sqlInsert = "insert into canteenownerworker values('$name', '$email', '$username', '$password', '$designation', '$contact_no','')";
	// mysqli_query($con, "INSERT into canteenownerworker VALUES('test1', 'test1@mail.com', 'testOwner1', 'test', 'test', '9876543210', '')");

	// $tmp = mysqli_query($con, "SELECT * FROM `canteenownerworker` WHERE 1");
	// $row = mysqli_fetch_array($tmp, MYSQLI_NUM);
	// print $row[0];
	// print "\n";

	// $usern = mysqli_real_escape_string($con, 'test');

	if($res = mysqli_query($con, $sqlInsert)) {
		echo "Insertion Successful";
		echo "<br>";
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
	}
	else
	{
		echo "Unsuccessful Insertion";
		die();
	}
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
form
{

  border: 1px solid black;
  margin-top: 50px;
  margin-bottom: 10px;
  margin-right: 15px;
  margin-left: 10px;
  background-color: lightblue;

}


</style>

<body>
	

	<form action = "staffLogin.php" method = "post">
		<input type="submit" name="submit" value="Customer Login">
	</form>
	

	<form action = "customer.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>