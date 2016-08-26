<?php

include_once '../backend/taskmodel.php';

$team = $_GET['team'];
$isGM = $_GET['isGM'];
$content = $_GET['content'];

$conn = connect();
$sql = "INSERT INTO t_helpCenter (team, isGM, content, state) VALUES (?, ?, ?, 0)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $team);
$stmt->bindValue(2, $isGM);
$stmt->bindValue(3, $content);
$stmt->execute();

header('Location: ../t_helpCenter.php');

?>
