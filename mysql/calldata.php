
<?php
$sql = "SELECT * FROM category";
$result = $conn->query($sql);

if ($result->num_rows>0){
		echo "<center>";
		echo "<table>";
	while($row = $result->fetch_array()){
		echo "<tr><td>";
		echo $row['id'].$row["name"].$row["permission"]."<br>";
		echo "</td></tr>";
	}
		echo "</table>";
} else {
	echo "0 results";
}

?>