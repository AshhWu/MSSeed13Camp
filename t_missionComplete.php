<?php
include_once 'taskmodel.php';
$id = $_GET['id'];
$team = $_GET['team'];

$conn = connect();
$sql = "UPDATE t_missionReport SET state=1 where id=".$id;
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql = "UPDATE taipeiRun SET mState=2 where team=?";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $team);
$stmt->execute();

header('Location: t_taipeiAdmin.php');
?>