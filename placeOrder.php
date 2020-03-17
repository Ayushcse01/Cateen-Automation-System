<?php
?>
	<html>
	<head>
	<title>Order Placed</title>
	</head>
	<body>
		<style> 
body
{
	background-color: lightblue;
	text-align:center;
	font-size:15;
	border-style: solid;
	
}
table,th,td
{
  border: 2px solid black;
  width: 35%;
  text-align:center;
  font-size:12;
}
</style>
	<h1>Order Placed Sucessfully!!!
	</form>

	<h3>Click here to see menu</h3>
	<form action = "viewmenu.php" method = "post">
	<input type="submit" name="submit" value="View menu">
	</form>
	<h3>Click here to Logout</h3>
	<form action = "customerLogin.php" method = "post">
	<input type="submit" name="submit" value="Logout">
	</form>
	</form>
</body>
</html>