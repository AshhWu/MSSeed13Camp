<?php

include_once 'taskmodel.php';
 
function getAllTaipei()
{
	$conn = connect();
	$sql = "SELECT * FROM taipeiRun";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getTaipeiRun()
{
  $items = getAllTaipei();
  return $items;
}

function getCubeNum($team, $cubeColor){
    $cubeColorR = $cubeColor + 3;
    $conn = connect();
    $sql = "SELECT * FROM taipeiRun where team=".$team;
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
    return $items[0][$cubeColorR];
}

?>