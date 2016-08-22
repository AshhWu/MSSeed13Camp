<?php

include_once 'taskmodel.php';
include_once 't_getitems.php';

$team = $_GET['team'];

$conn = connect();
$sql = "SELECT * FROM taipeiRun where team=".$team;
$stmt = $conn->query($sql);
$items = $stmt->fetchAll(PDO::FETCH_NUM);
foreach($items as $item){
    $newMissionRank = $item[9]+1;
}

$sql = "UPDATE taipeiRun SET mission=?, mState=0 where team=?";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $newMissionRank);
$stmt->bindValue(2, $team);
$stmt->execute();


header('Location: t_missionDetail.php');

?>