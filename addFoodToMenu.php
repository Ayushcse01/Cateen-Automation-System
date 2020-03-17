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
	<form action = "processAddFoodToMenu.php" method="post">
		Item Id: <input type="text" name="id">
		<br><br><br>
		Item Name: <input type="text" name="name">
		<br><br><br>
		Price : <input type="text" name="price">
		<br><br><br>
		<!--Quantity: <input type="text" name="">
		<br>-->
		Description: <input type="text" name="desc">
		<br><br><br>
		<input type="submit" name="submit" value="Add to menu">
	</form>
</body>
</html>