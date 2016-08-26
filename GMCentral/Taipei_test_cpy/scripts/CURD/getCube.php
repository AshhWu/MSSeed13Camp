<?php
include_once 'DBConnect.php';

$sql = "SELECT team, cube2, cube3, cube4, cube5, mission FROM taipeiRun";
$result = $conn->query($sql) or die($conn->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}

# JSON-encode the response
echo $json_response = json_encode($arr);
?>