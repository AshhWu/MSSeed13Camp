<?php
    include_once '../backend/taskmodel.php';
    
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
    
    //str_replace ("[_]",".",(string)$lat);
    //str_replace ("[_]",".",$lon);

    $lat_sec = explode("_",$lat);
    $lat = $lat_sec[0] + "." + $lat_sec[1];
    
    //$lat=1.1;
    $lon=3.1;
    /*
    $conn = connect();
    $sql = "UPDATE taipeiRun SET gpsX=".$lat.", gpsY=".$lon." where team=2";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    */
    header("Location: ../t_mrtmap.php?gps=1&lat=".$lat);
?>
