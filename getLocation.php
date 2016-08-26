<?php
include_once 'backend/taskmodel.php';

$conn = connect();
$sql = "SELECT team, gpsX, gpsY FROM taipeiRun";
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