<?php
include_once '../backend/taskmodel.php';
    
    $id = $_GET['id'];
    $conn = connect();
    $sql = "UPDATE t_tradeRequest SET state=3 WHERE id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('Location: ../t_lego_list.php');
?>