<?php

include_once 'backend/taskmodel.php';

$id = $_POST['id'];
$team = $_POST['team'];
$mission = $_POST['mission'];
$picture = $_POST['picture'];

$conn = connect();
$sql = "INSERT INTO t_missionReport (id, team, mission, picture) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $id);
$stmt->bindValue(2, $team);
$stmt->bindValue(3, $mission);
$stmt->bindValue(4, $picture);
$stmt->execute();


header('Location: t_taipeiAdmin.php');

?>