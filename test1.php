<?php
include("test.php");

$user1 = new user("lux","lux@gmail.com","3","Jupiter");

echo $user1->name."<br>";
echo $user1->email."<br>";
echo $user1->type."<br>";
echo $user1->password."<br>";

$admin1 = new admin("Dara","admin@gmail.com","1","adminpass");
echo $admin1->name."<br>";
echo $admin1->email."<br>";
echo $admin1->type."<br>";
echo $admin1->getpasswordadmin("dinosaur")."<br>";
echo $admin1->getpassworduser();
?>