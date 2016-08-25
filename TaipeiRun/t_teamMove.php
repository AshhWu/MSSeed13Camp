<?php
include_once 'backend/taskmodel.php';

    $team = $_GET['team'];
    $position = $_GET['position'];
    $cube1 = $_GET['c1'];
    $cube2 = $_GET['c2'];
    $cube3 = $_GET['c3'];
    $cube4 = $_GET['c4'];
    $cube5 = $_GET['c5'];
    $conn = connect();
    $sql = "UPDATE taipeiRun SET cube1=".$cube1.", cube2=".$cube2.", cube3=".$cube3.", cube4=".$cube4.", cube5=".$cube5.", position=".$position." where team=".$team;
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header('Location: t_mrtmap.php');
?>