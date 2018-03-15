<?php
//control error
include"Error/showError.php";

//localhost, username and password
$servername = "localhost";
$username = "root";
$password = "Bryophyte_27";
$mydb="myDB";

// Create connection
include("mysql/serverconn.php");

// Create databas
//include("mysql/createdb.php");

// sql to create table
//include("mysql/createtable.php");

//insert into fields
//include("mysql/insertdata.php");

//call data
//include("mysql/calldata.php");


//deletion
//include("mysql/deletedata.php");

mysqli_close($conn);

 ?> 