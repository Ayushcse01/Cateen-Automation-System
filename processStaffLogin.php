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

	$uname = $_POST['uname'];
	$pass = $_POST['pass'];

	$sqlPassCheck = "select * from canteenownerworker where Ousername = $uname and Opassword = '$pass';";
	$res = mysqli_query($con, $sqlPassCheck);
	$row = mysqli_fetch_assoc($res);
	if ($row['Ousername'] = $uname) {
		if ($row['Opassword'] = $pass) {
			echo "Login Successful";
		}
	}
	else
		echo "Login Unsuccessfull! Try Again";

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
	<h1>Welcome to Canteen Automation System</h1>
	<img src="canteen.jpg" alt="Canteen Automation System" width="1000" height="400">
	<form action = "emp.php" method = "post">
		<input type="submit" name="submit" value="Continue">
	</form>

	<form action = "customer.php" method = "post">
		<input type="submit" name="submit" value="Sign Out">
	</form>

</body>
</html>