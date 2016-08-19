<?php
header('Content-type: text/plain; charset=md5');
include_once 'taskmodel.php';
include_once 't_getitems.php';

if(isset($_POST['sender'])){
    $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
}else{
    $sender = 20;
    $receiver = 21;
}

$c1 = $_POST['c1'];
$c2 = $_POST['c2'];
$c3 = $_POST['c3'];
$c4 = $_POST['c4'];
$c5 = $_POST['c5'];
$fc1 = $_POST['fc1'];
$fc2 = $_POST['fc2'];
$fc3 = $_POST['fc3'];
$fc4 = $_POST['fc4'];
$fc5 = $_POST['fc5'];

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

if(isset($_POST['sender'])){
    header('Location: t_taipeiAdmin.php');
}else{
    header('Location: index.php');
}

?>