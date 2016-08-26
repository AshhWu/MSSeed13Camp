<?php
include_once '../backend/taskmodel.php';
$team = $_GET['team'];

$conn = connect();
$sql = "UPDATE taipeiRun SET mState=0 where team=?";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $team);
$stmt->execute();
header('Location: ../t_missionDetail.php');
?>
