<?php
session_start();

include_once '/backend/taskmodel.php';

// Get component name
$component = $_POST['component'];
$team = $_SESSION['s_team'];
$isTrans = $_POST['isTrans'];
/*$isTrans = false;
$team = 'A';
$component = "magic_stone";*/



// Try to update team resources
$result = makeComponent($team, $component, $isTrans);

// Return TRUE or FALSE
echo $result;
?>
