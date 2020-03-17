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
	<img src="canteen.jpg" alt="Canteen Automation System" width="1300" height="400">
	<form action = "processStaffRegister.php" method = "post">
		Employee Name: <input type="text" name="a">
		<br><br><br>
		Enter  Email : <input type="email" name="b">
		<br><br><br>
		Choose Username: <input type="text" name="c">
		<br><br><br>
		Choose Password: <input type="password" name="d">
		<br><br><br>
		Designation : <input type="text" name="e">
		<br><br><br>
		Contact Number : <input type="text" name="f">
		<br><br><br>
		
		<input type="submit" name="submit" value="Register">
	</form>
</body>
</html>
<!--
#	Name	Type	Collation	Attributes	Null	Default	Comments	Extra
1	Ename	varchar(20)	utf8mb4_general_ci		No	None		
2	Email	varchar(20)	utf8mb4_general_ci		No	None		
3	OusernameIndex	varchar(20)	utf8mb4_general_ci		No	None		
4	Opassword	varchar(20)	utf8mb4_general_ci		No	None		
5	Designation	varchar(20)	utf8mb4_general_ci		No	None		
6	Contact_No	bigint(20)			No	None		
7	EmpidPrimary-->