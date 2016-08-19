<?php

include_once 'taskmodel.php';
 
function getTaipeiRun()
{
  $items = getAllTaipei();
  return $items;
}

function getMissionReport()
{
  $items = getAllReport();
  return $items;
}

function getMissionInfo()
{
  $items = getAllInfo();
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

function getMissionByTeam($team){
    $conn = connect();
    $sql = "SELECT * FROM taipeiRun where team=".$team;
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
    return $items[0][9];
}

function getMissionTitle($id){
    $conn = connect();
    $sql = "SELECT * FROM t_missionInfo where id=".$id;
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
    return $items[0][1];
}

function getMissionContent($id){
    $conn = connect();
    $sql = "SELECT * FROM t_missionInfo where id=".$id;
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
    return $items[0][2];
}

function getMissionPic($id){
    $conn = connect();
    $sql = "SELECT * FROM t_missionInfo where id=".$id;
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
    return $items[0][3];
}

function getMissionState($team){
    $conn = connect();
    $sql = "SELECT * FROM taipeiRun where team=".$team;
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
    return $items[0][10];
}

function getMissionReportPic($team){
    $conn = connect();
    $sql = "SELECT * FROM t_missionReport WHERE team=".$team." ORDER BY id DESC";
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
    return $items[0][3];
}

function getAllTaipei()
{
	$conn = connect();
	$sql = "SELECT * FROM taipeiRun";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getAllReport()
{
	$conn = connect();
	$sql = "SELECT * FROM t_missionReport";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getAllInfo()
{
	$conn = connect();
	$sql = "SELECT * FROM t_missionInfo";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}


?>
