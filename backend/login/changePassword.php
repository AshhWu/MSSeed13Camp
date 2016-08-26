<?php
session_start();
require_once "../taskmodel.php";
$conn = connect();

if (($_POST['pwd1'] == "") || ($_POST['pwd2'] == "")) { echo "欄位空白"; return; }

$pwd = $_POST['pwd1'];
$pwd2 = $_POST['pwd2'];
if ($pwd != $pwd2) { echo "兩欄位不同"; return; }

$sql = "UPDATE account SET password ='".$pwd."' WHERE pid='".$_SESSION['ID']."'";
$stmt = $conn->prepare($sql);
if ($stmt->execute() == 1) { echo "SUCCESS"; return; }
else { echo "FAIL"; return; }
?>