<!DOCTYPE html>
<html>
<head>
	<title>Staff Login Page</title>
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

<body>
	<form action = "processStaffLogin.php" method = "post">
		username: <input type="text" name="uname">
		<br><br>
		Password: <input type="password" name="pass">
		<br><br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>