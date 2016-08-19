<?php
session_start();

include_once 'taskmodel.php';

// Get component name
$component = $_POST['component'];
$team = $_SESSION['s_team'];




// Try to update team resources
$result = makeComponent($team, $component);

// Return TRUE or FALSE
echo $result;
?>