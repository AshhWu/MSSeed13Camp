<?php
    session_start(); 
    
    require_once("taskmodel.php");
    $conn = connect();
    
    $id = isset($_POST['email']) ? $_POST['email'] : null;
    $pw = isset($_POST['password']) ? $_POST['password'] : null;
    $sql = "SELECT * FROM account where email = '$id'";
    $stmt = $conn->query($sql);
	$result = $stmt->fetchAll(PDO::FETCH_NUM);
    $row = @mysql_fetch_row($result);
    
    if($id !== null && $pw !== null && $row[1] == $id && $row[2] == $pw)
    {
        if($row[2] == '1')
        {
			echo "normal uesr<br>";
            $_SESSION['ID'] = $id;
            $_SESSION['authority'] = 1;
            #header('Location: Student_login.php');
        }
        elseif($row[2] == '2')
        {
            $_SESSION['ID'] = $id;
            $_SESSION['authority'] = 2;
			echo "隨輔<br>";
            #header('Location: Prof_login.php');
        }
        elseif($row[2] == '3')
        {
            $_SESSION['ID'] = $id;
            $_SESSION['authority'] = 3;
			echo "Admin<br>";
            #header('Location: admin.php');
        }
    }
    else
    {
        header('Location: index.php');
    }
?>