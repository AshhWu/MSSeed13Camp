<?php
echo "start!!";
	$host = "ap-cdbr-azure-east-c.cloudapp.net";
	$user = "b37f8ddf38d21d";
	$pwd = "1e72c81e";
	$db = "stronghold";

	try{
		$conn = new mysqli($host, $user, $pwd, $db);
	}
	catch(Exception $e){
		die(print_r($e));
	}
	echo "success1!";
$sql = "SELECT team, cube2, cube3, cube4, cube5, mission FROM taipeiRun";
$result = $conn->query($sql) or die($conn->error.__LINE__);

echo "success2!";

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}

# JSON-encode the response
echo "success3!";
echo $json_response = json_encode($arr);
?>