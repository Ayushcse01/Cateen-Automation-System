<!DOCTYPE html>
<html>
<head>
	<title>Customer Login Page</title>
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
	<img src="canteen.jpg" alt="Canteen Automation System" width="1000" height="400"><br>
	<form action = "processCustomerLogin.php" method = "post">
		
		Username   : <input type="text" name="uname">
		<br><br>
		Password   : <input type="password" name="pass">
		<br><br>
		<input type="submit" name="submit" value="Login">
	</form>

	<form action = "customerregister.php" method = "post">
	<input type="submit" name="submit" value="Register Now">
	</form>
</body>
</html>