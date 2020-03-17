<!DOCTYPE html>
<html>
<head>
	<title>Add Food To Menu</title>
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
	<h1>Add food to menu</h1>
	<form action = "processRemoveFoodFromMenu.php" method="post">
		Item Id: <input type="text" name="id">
		<br><br><br>
		<input type="submit" name="submit" value="Remove item from menu">
	</form>
</body>
</html>