<?php

require_once "../taskmodel.php";
$conn = connect();

$team = $_POST['team'];
$resource = $_POST['resource'];
$value = isset($_POST['value']) ? $_POST['value'] : 0;

$sql = "UPDATE resource SET ".$resource."='".$value."' WHERE team='".$team."'";
$stmt = $conn->prepare($sql);
$stmt->execute();
header('Location: ../../superAdmin.php');
?>