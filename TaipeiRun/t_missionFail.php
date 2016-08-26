<?php
include_once '../backend/taskmodel.php';
$team = $_GET['team'];
$mission = $_GET['mission'];
$conn = connect();
$sql = "UPDATE taipeiRun SET mState=3 where team=?";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $team);
$stmt->execute();
header('Location: ../t_mission.php?mission='.$mission);
?>
