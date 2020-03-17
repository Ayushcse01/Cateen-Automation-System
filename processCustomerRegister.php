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

	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$ph_no = $_POST['ph_no'];
	

	$sqlInsert = "insert into customer values('$name', '$email', '$address', '$username', '$password','$ph_no','')";
	if($res = mysqli_query($con, $sqlInsert)) {
		echo "User Registered Sucessfully";
		echo "<br>";
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
	}
	else
		echo "Unsuccessful Insertion";

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
	<form action = "customerRegister.php" method = "post">
		<input type="submit" name="submit" value="Customer Registration">
	</form>

	<form action = "customerLogin.php" method = "post">
		<input type="submit" name="submit" value="Customer Login">
	</form>
	

	<form action = "customer.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>

</body>
</html>