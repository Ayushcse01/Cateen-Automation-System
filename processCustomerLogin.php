
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

	$uname = $_POST['uname'];
	$pass = $_POST['pass'];

	$sqlPassCheck = "select * from customer where Username = '$uname' and Password = '$pass';";
	$res = mysqli_query($con, $sqlPassCheck);
	$row = mysqli_fetch_assoc($res);
	if ($row['Username'] == $uname) {
		if ($row['Password'] == $pass) {
			echo "Login Successful";

		}
	}
	else
		{
echo "Login Unsuccessfull! Try Again, ";
die(" Incorrect Username or Password");
$con->close();
}
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
	<img src="canteen.jpg" alt="Canteen Automation System" width="1200" height="400"><br>
	<h3>Click here to View Menu</h3>
	<form action = "viewmenu.php" method = "post">
		<input type="submit" name="submit" value="View Menu">
	</form>
	<h3>Click here to Order </h3>
	<form action = "order.php" method = "post">
		<input type="submit" name="submit" value="Order">
	</form>
	
	<h3> Click here to signout</h3>
	<form action = "customerlogin.php" method = "post">
		<input type="submit" name="submit" value="Sign Out">
	</form>

</body>
</html>


