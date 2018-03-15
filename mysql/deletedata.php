<?php

//deletion
$sql = "DELETE FROM user WHERE id=15";
if ($conn->query($ql) === TRUE){
	echo "Deleted";
}else{
	echo "Error Deletion";
}


?>