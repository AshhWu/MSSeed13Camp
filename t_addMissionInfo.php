<?php

    include_once 'taskmodel.php';

    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $position = $_POST['position'];
    
    if(isset($_FILES['picture']['tmp_name'])){
        $picture = file_get_contents($_FILES['picture']['tmp_name']);
    }

    $conn = connect();
    $sql = "INSERT INTO t_missionInfo (id, title, content, picture, position) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->bindValue(2, $title);
    $stmt->bindValue(3, $content);
    $stmt->bindValue(4, $picture);
    $stmt->bindValue(5, $position);
    $stmt->execute();


    header('Location: t_taipeiAdmin.php');

?>
 