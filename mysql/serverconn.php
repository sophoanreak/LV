<?php
//variables to fill
/*
$servername = "localhost";
$username = "root";
$password = "Bryophyte_27";
$mydb="myDB";
*/

// Create connection
$conn = mysqli_connect($servername, $username, $password,$mydb);

// Check connection
 if (!$conn) {
     die("Connection failed: " . mysql_connect_error());
}else {
	echo "Connected successfully";
}
?>