<?php

//database name
$mydb = "db_test";


// Create database
$sql = "CREATE DATABASE $mydb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

?>