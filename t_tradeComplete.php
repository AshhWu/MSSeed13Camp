<?php

include_once 'taskmodel.php';
include_once 't_getitems.php';

$id = $_POST['id'];

$item = getTradeRequestById($id);

$conn = connect();
$sql = "UPDATE taipeiRun SET cube1=?, cube2=?, cube3=?, cube4=?, cube5=? WHERE team=".$item['sender'].
       "UPDATE taipeiRun SET cube1=?, cube2=?, cube3=?, cube4=?, cube5=? WHERE team=".$item['receiver'].
       "UPDATE t_tradeRequest SET state=2 WHERE id=".$id;
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $c1);
$stmt->bindValue(2, $c2);
$stmt->bindValue(3, $c3);
$stmt->bindValue(4, $c4);
$stmt->bindValue(5, $c5);
$stmt->bindValue(6, $fc1);
$stmt->bindValue(7, $fc2);
$stmt->bindValue(8, $fc3);
$stmt->bindValue(9, $fc4);
$stmt->bindValue(10, $fc5);
$stmt->execute();

?>