<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<style> 
body
{
	background-color: lightblue;
	text-align:center;
	font-size:300;
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


<!-- Write your comments here////stafflogin.php        staffregister.php//// -->
<body >
	<img src="canteen.jpg" alt="Canteen Automation System" width="1000" height="400">
	<h1> WELCOME TO ONLINE FOOD ORDERING SYSTEM </h1>
	<h4> Click here to login to the system </h4>
	<form action = "staffLogin.php" method = "post">
		<input type="submit" name="submit" value="Staff Login">
	</form>
	<h4> Click here to Register!!! </h4>
	<form action = "staffRegister.php" method = "post">
		<input type="submit" name="submit" value="Staff Registration">
	</form>

	<h4> Click here to go to home page </h4>
	<form action = "customer.php" method = "post">
		<input type="submit" name="submit" value="Home">
	</form>
</body>
</html>