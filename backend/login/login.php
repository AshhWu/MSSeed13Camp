<?php
    session_start(); 
    
    require_once("../taskmodel.php");
    $conn = connect();
    
    $id = isset($_POST['email']) ? $_POST['email'] : null;
    $pw = isset($_POST['password']) ? $_POST['password'] : null;
    $sql = "SELECT * FROM account where email = '$id'";
    $stmt = $conn->query($sql);
	$row = $stmt->fetchAll(PDO::FETCH_NUM);
    
	/*echo "id: ".$id."<br>";
	echo "pw: ".$pw."<br>";
	echo "row[0][0]: ".$row[0][0]."<br>";
	echo "row[0][1]: ".$row[0][1]."<br>";
	echo "row[0][2]: ".$row[0][2]."<br>";
	echo "row[0][3]: ".$row[0][3]."<br>";*/
	
    if($id !== null && $pw !== null && strtolower($row[0][1]) == strtolower($id) && $row[0][2] == $pw)
    {
        $_SESSION['ID'] = $row[0][0];
        if($row[0][3] == '1')
        {
            $_SESSION['authority'] = 1;
        }
        elseif($row[0][3] == '2')
        {
            $_SESSION['authority'] = 2;
        }
        elseif($row[0][3] == '3')
        {
            $_SESSION['authority'] = 3;
        }
        header('Location: ../../index.php');
    }
    else
    {
        echo "Wrong Password!";
        header('Location: ../../index.php');
    }
?>
