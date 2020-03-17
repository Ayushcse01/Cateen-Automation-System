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

	<h2>Click here to See List of item available</h2>
	<form action="processSeeMenu.php" method="POST">
		<input type="submit" name="submit" value="See Menu">
	</form>
	<h2>Click here to add food item</h2>
	<form action="addFoodToMenu.php" method="POST">
		<input type="submit" name="submit" value="Add Food To Menu">
	</form>
	<h2>Click here to Remove food item</h2>
	<form action="removeFoodFromMenu.php" method="POST">
		<input type="submit" name="submit" value="Remove Food from Menu">
	</form>


</body>
</html>