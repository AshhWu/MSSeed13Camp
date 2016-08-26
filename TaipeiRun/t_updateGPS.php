<?php
    include_once '../backend/taskmodel.php';
    $conn = connect();
    $sql = "UPDATE taipeiRun SET gpsX=".$lat.", gpsY=".$lon." where team=2";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header("Location: t_mrtmap.php?gps=1");
?>
