<?php
	session_start();
	$team = $_POST["team"];
	if ($team == "美洲") { $_SESSION["s_team"] = "A"; }
	else if ($team == "歐洲") { $_SESSION["s_team"] = "B"; }
	else if ($team == "亞洲") { $_SESSION["s_team"] = "C"; }
	else if ($team == "非洲") { $_SESSION["s_team"] = "D"; }
	header('Location: map.php');
?>