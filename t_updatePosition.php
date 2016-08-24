<?php

include_once 'backend/taskmodel.php';

$team = $_GET['team'];
$position = $_GET['position'];

$conn = connect();
$sql = "UPDATE taipeiRun SET position=? where team=?";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $position);
$stmt->bindValue(2, $team);
$stmt->execute();

//header('Location: t_mrtmap.php');

?>
