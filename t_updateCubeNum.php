<?php
include_once 'backend/taskmodel.php';

    $team = $_GET['team'];
    $cubeColor = $_GET['color'];
    $cubeNum = $_GET['num'];
    $conn = connect();
    $sql = "UPDATE taipeiRun SET cube".$cubeColor."=".$cubeNum." where team=".$team;
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header('Location: t_mrtmap.php');
?>