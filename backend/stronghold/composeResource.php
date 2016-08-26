<?php
session_start();

include_once ($_SERVER['DOCUMENT_ROOT'].'/backend/taskmodel.php');

// Get component name
$component = $_POST['component'];
$team = $_SESSION['t_team'];
$isTrans = $_POST['isTrans'];
/*$isTrans = false;
$team = '1';
$component = "magic_stone";*/



// Try to update team resources
$result = makeComponent($team, $component, $isTrans);

// Return TRUE or FALSE
echo $result;
?>
