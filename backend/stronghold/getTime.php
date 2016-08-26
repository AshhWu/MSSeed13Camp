<?php
	require_once "../taskmodel.php";
    $day = getAllDay();

    if (!empty($day)) 
    { 
    	$_SESSION["time"] = $day[0][1];
    	if ($_SESSION["time"] <= 10) { echo 'true'; }
    	else { echo 'false';  } 
	}
    else { echo 'false'; }

?>