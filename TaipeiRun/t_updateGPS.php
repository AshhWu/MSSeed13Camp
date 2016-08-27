<?php
    include_once '../backend/taskmodel.php';
    
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];

    $lat_sec = explode("_",$lat);
    $lat = $lat_sec[0].".".$lat_sec[1];
    
    $lon_sec = explode("_",$lon);
    $lon = $lon_sec[0].".".$lon_sec[1];
    
    $conn = connect();
    $sql = "UPDATE taipeiRun SET gpsX=".$lat.", gpsY=".$lon." where team=2";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header("Location: ../t_mrtmap.php?gps=1");
?>
