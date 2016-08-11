<?php
include_once 'taskmodel.php';
$team = $_GET['team'];
$conn = connect();
$sql = "SELECT * FROM taipeiRun where team=".$team;
$stmt = $conn->query($sql);
$items = $stmt->fetchAll(PDO::FETCH_NUM);
foreach($items as $item){
    $newMissionRank = $item[9]+1;
}
$sql = "UPDATE taipeiRun SET mission=".$newMissionRank." where team=".$team;
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location: t_taipeiAdmin.php');
?>