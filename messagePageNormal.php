<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<!-- Title -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="#">
<style type="text/css">
	table { margin-top: 0.75em;}

	th { font-size: 1.2em; text-align: center; border: none 0px; padding-right: 15px;
		background-color: #4CAF50;
		color: white; }

	td { padding: 0.25em 2em 0.25em 0em; border: 0 none; }
	
	tr:nth-child(even){background-color: #f2f2f2}
</style>

</head>

<body>
  
<div style="text-align:center" align="center">
	<h1>Messages</h1>

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getMessages();
	$team = $_SESSION['s_team'];
	if(!empty($items))
	{
		$items = array_reverse($items); // try 反向
		foreach($items as $item)
		{	
			if($item[2]=="All" || $item[2]==$team){
				echo 	"<p>
				<span style=\"font-size:14px;\">".$item[1]."</span></p>
					<h3 style=\"color:".$item[4].";\">".$item[3]."</h3>
				<hr />";
			}
		}
	}
?>

</div>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Navbar Dropdown -->
	<script src="js/nav.js"></script>

</body>
</html>
