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

function getMissionOrder(){
  $items = getAllMissionOrder();
  return $items;
}

function getTradeRequest(){
  $items = getAllTradeRequest();
  return $items;
}

function getAllCubeNum($team){
    $conn = connect();
    $sql = "SELECT cube1, cube2, cube3, cube4, cube5 FROM taipeiRun where team=".$team;
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
    return $items[0];
}

function getAllTeamCubeNum(){
    $conn = connect();
    $sql = "SELECT team, cube1, cube2, cube3, cube4, cube5 FROM taipeiRun ORDER BY team ASC";
	$stmt = $conn->query($sql);
    $items = $stmt->fetchAll(PDO::FETCH_NUM);
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
    $missionRank = $items[0][9];
    
    $sql = "SELECT * FROM t_missionOrder where team=".$team;
    $stmt = $conn->query($sql);
    $allMission = $stmt->fetchAll(PDO::FETCH_NUM);
    $mission = $allMission[0][$missionRank];
    return $mission;
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

function getAllMissionOrder(){
    $conn = connect();
	$sql = "SELECT * FROM t_missionOrder";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
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

function getAllTradeRequest(){
    $conn = connect();
	$sql = "SELECT * FROM t_tradeRequest";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getTradeRequestById($id){
    $conn = connect();
	$sql = "SELECT * FROM t_tradeRequest where id=".$id;
	$stmt = $conn->query($sql);
	$items = $stmt->fetchAll(PDO::FETCH_NUM);
    return $items[0];
}

function getTradeRequestByTeam($team){
    $conn = connect();
	$sql = "SELECT * FROM t_tradeRequest where state=0, receiver=".$team." ORDER BY id DESC";
	$stmt = $conn->query($sql);
	$items = $stmt->fetchAll(PDO::FETCH_NUM);
    
    $sql = "UPDATE t_tradeRequest SET state=1 where id=".$items[0][0];
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $items[0];
}

function isTradeRequest($team){
    $conn = connect();
	$sql = "SELECT * FROM t_tradeRequest where state=0, receiver=".$team;
	$stmt = $conn->query($sql);
	$items = $stmt->fetchAll(PDO::FETCH_NUM);
    if(empty($items)){
        return false;
    }else{
        return true;
    }
}

?>
