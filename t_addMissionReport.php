<html>
    <head>
        <title>圖片上傳中</title>
    </head>
    <body>
        圖片上傳中
    </body>
</html>
<?php
include_once 'taskmodel.php';
include_once 't_getitems.php';

if(isset($_POST['team'])){
    $team = $_POST['team'];
    $mission = $_POST['mission'];
}else{
    $team = 20;
    $mission = getMissionByTeam($team);
}

if(getMissionState($team)!=0){
    header('Location: t_missionSend.php');
}

if(isset($_FILES['picture']['tmp_name'])){
    $picture = file_get_contents($_FILES['picture']['tmp_name']);
}

$conn = connect();
$sql = "INSERT INTO t_missionReport (team, mission, picture, state) VALUES (?, ?, ?, 0)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $team);
$stmt->bindValue(2, $mission);
$stmt->bindValue(3, $picture);
$stmt->execute();

$sql = "UPDATE taipeiRun SET mState=1 where team=?";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1, $team);
$stmt->execute();

if(isset($_POST['team'])){
    header('Location: t_taipeiAdmin.php');
}else{
    header('Location: t_missionSend.php');
}

?>