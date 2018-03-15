<?php

$sql ="INSERT INTO users (username , password, salt, name, joined, category)
VALUES ('Alex', 'password' ,'salt' , 'Momo Ka', '2008-08-12 00:00:00', 'standard user')";

if ($conn->query($sql) === TRUE) {
    echo "Users' input created successfully";
} else {
    echo "Error creating field: " . $conn->error;
}

/*
$sql ="INSERT INTO category (name , permission)
VALUES ('Standard User', '')";

if ($conn->query($sql) === TRUE) {
    echo "Users' input created successfully";
} else {
    echo "Error creating field: " . $conn->error;
}
*/
