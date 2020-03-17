<!DOCTYPE html>
<html>
<head>
	<title>Menu page</title>
</head>
<style> 
body
{
	background-color: lightblue;
	text-align:center;
	font-size:30;
	border-style: solid;
	
}
</style>
<body>
	<img src="canteen.jpg" alt="Canteen Automation System" width="1000" height="400">
	<h2>Click here to See and update menu</h2>
	<form action="menu.php" method="POST">
		<input type="submit" name="submit" value="Menu">
	</form>
	<h2>Click here to View Registerd Customers</h2>
	<form action="viewcustomers.php" method="POST">
		<input type="submit" name="submit" value="View Registered Customer">
	</form>
	<h2>Click here to view Registerd Employee to the canteen</h2>
	<form action="processStaffRegisteredDisplay.php" method="POST">
		<input type="submit" name="submit" value="View Registered Employees">
	</form>


</body>
</html>