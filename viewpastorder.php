<!DOCTYPE html>
<html>
<head>
	<title>list </title>
</head>
<style> 
body
{
	background-color: lightblue;
	text-align:center;
	font-size:300;
	border-style: solid;
	
}
table,th,td
{

  border: 1px solid black;
  
}

</style>
<body >
<h1> PAST ORDER DETAILS</h1><br><br><br>

<?php
$servername = "localhost";
$username = "root";
$password = "8825359354";
$dbname = "canteen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Oid, cname, price,date FROM `customer`,`order`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Oid: " . $row["Oid"]. "<br> Name: " . $row["cname"]. " <br>total amount:" . $row["price"]. "<br>date: " .$row["date"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
	</body>
</html>