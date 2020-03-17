<!DOCTYPE html>
<html>
<head>
	<title>Customer Registration</title>
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
	<img src="canteen.jpg" alt="Canteen Automation System" width="1000" height="400">
	<form action = "processCustomerRegister.php" method = "post">
		
		Customer Name: <input type="text" name="name">
		<br><br>
		Enter Email: <input type="email" name="email">
		<br><br>
		Enter Address: <input type="text" name="address">
		<br><br>
		Select Username: <input type="text" name="username">
		<br><br>
		Choose Password: <input type="password" name="password">
		<br><br>
		Contact Number: <input type="text" name="ph_no">
		<br><br><br>
		
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>