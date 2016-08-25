<?php

include_once 'backend/taskmodel.php';
include_once 't_getitems.php';

$sender = $_GET['sender'];
$receiver = $_GET['receiver'];

$c1 = $_GET['c1'];
$c2 = $_GET['c2'];
$c3 = $_GET['c3'];
$c4 = $_GET['c4'];
$c5 = $_GET['c5'];
$fc1 = $_GET['fc1'];
$fc2 = $_GET['fc2'];
$fc3 = $_GET['fc3'];
$fc4 = $_GET['fc4'];
$fc5 = $_GET['fc5'];

$conn = connect();
$sql = "INSERT INTO t_tradeRequest (sender, receiver, c1, c2, c3, c4, c5, fc1, fc2, fc3, fc4, fc5, state) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $sender);
$stmt->bindValue(2, $receiver);
$stmt->bindValue(3, $c1);
$stmt->bindValue(4, $c2);
$stmt->bindValue(5, $c3);
$stmt->bindValue(6, $c4);
$stmt->bindValue(7, $c5);
$stmt->bindValue(8, $fc1);
$stmt->bindValue(9, $fc2);
$stmt->bindValue(10, $fc3);
$stmt->bindValue(11, $fc4);
$stmt->bindValue(12, $fc5);
$stmt->execute();

header('Location: t_lego_list.php');
?>
