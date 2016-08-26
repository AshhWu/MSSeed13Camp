<?php
include_once 'backend/taskmodel.php';
$team = $_POST['team'];
$country = $_POST['country'];
$cube2 = $_POST['cube2'];
$cube3 = $_POST['cube3'];
$cube4 = $_POST['cube4'];
$cube5 = $_POST['cube5'];
$conn = connect();
$sql = "INSERT INTO taipeiRun (team, position, gpsX, gpsY, cube1, cube2, cube3, cube4, cube5, mission, mState) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $team);
$stmt->bindValue(2, 505);
$stmt->bindValue(3, 0);
$stmt->bindValue(4, 0);
$stmt->bindValue(5, 0);
$stmt->bindValue(6, $cube2);
$stmt->bindValue(7, $cube3);
$stmt->bindValue(8, $cube4);
$stmt->bindValue(9, $cube5);
$stmt->bindValue(10, 1);
$stmt->execute();
header('Location: ../t_taipeiAdmin.php');
?>
