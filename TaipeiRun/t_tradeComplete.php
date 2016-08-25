<?php
include_once '../backend/taskmodel.php';

    $teama = $_GET['teama'];
    $cube2 = $_GET['c2'];
    $cube3 = $_GET['c3'];
    $cube4 = $_GET['c4'];
    $cube5 = $_GET['c5'];
    $teamb = $_GET['teamb'];
    $fcube2 = $_GET['fc2'];
    $fcube3 = $_GET['fc3'];
    $fcube4 = $_GET['fc4'];
    $fcube5 = $_GET['fc5'];
    $id = $_GET['id'];
    $conn = connect();
    $sql = "UPDATE taipeiRun SET cube2=".$cube2.", cube3=".$cube3.", cube4=".$cube4.", cube5=".$cube5." where team=".$teama."
            ; UPDATE taipeiRun SET cube2=".$fcube2.", cube3=".$fcube3.", cube4=".$fcube4.", cube5=".$fcube5." where team=".$teamb." 
            ; UPDATE t_tradeRequest SET state=2 WHERE id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    header('Location: ../t_mrtmap.php');
?>
