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
<body >
	<img src="canteen.jpg" alt="Canteen Automation System" width="1000" height="400">
	<h1> WELCOME TO ONLINE FOOD ORDERING SYSTEM </h1>
	<h4> Click here to login to the system </h4>
	<form action = "customerLogin.php" method = "post">
		<input type="submit" name="submit" value="Customer Login">
	</form>
	<h4> Click here to Register!!! </h4>
	<form action = "customerRegister.php" method = "post">
		<input type="submit" name="submit" value="Customer Registration">
	</form>
<!-- Write your comments here 
	<h4> Click here to View user to the system </h4>
	<form action = "processCustomerRegisteredDisplay.php" method = "post">
		<input type="submit" name="submit" value="Registered Customers">
	</form>-->
	<h4> Click here to See Admin options </h4>
	<form action = "1 Admin.php" method = "post">
		<input type="submit" name="submit" value="Admin">
	</form>
	
</body>
</html>