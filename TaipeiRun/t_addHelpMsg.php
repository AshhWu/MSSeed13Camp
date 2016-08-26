<?php

include_once '../backend/taskmodel.php';

$team = $_GET['team'];
$content = $_GET['content'];

$conn = connect();
$sql = "INSERT INTO t_helpCenter (team, isGM, content, state) VALUES (?, 0, ?, 0)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $team);
$stmt->bindValue(2, $content);
$stmt->execute();

header('Location: ../t_helpCenter.php');

?>
