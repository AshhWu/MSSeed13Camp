<?php
include_once 'backend/taskmodel.php';
echo "start!!";

$conn = connect();
$sql = "SELECT team, cube2, cube3, cube4, cube5, mission FROM taipeiRun";
$result = $conn->query($query) or die($conn->error.__LINE__);

$sql = "SELECT cube1, cube2, cube3, cube4, cube5 FROM taipeiRun where team=".$team;
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
echo "success!";
echo $items;

// $arr = array();
// if($result->num_rows > 0) {
// 	while($row = $result->fetch_assoc()) {
// 		$arr[] = $row;	
// 	}
// }

# JSON-encode the response
echo "success!";
//echo $json_response = json_encode($arr);
?>