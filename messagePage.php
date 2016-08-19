<!DOCTYPE html>
<html>

<head>
<!-- Title -->
<title>消息公告</title>

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
<?php
  include "nav.php";
  ?>
  
<div style="text-align:center" align="center">
	<h1>Messages</h1>

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getMessages();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Time</th>
					<th>Client</td>
					<th>Message</th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1]."</td>
						<td>".$item[2]."</td>
						<td>".$item[3]."</td>
					</tr>";
		}
		
		echo "</table>";
	}
?>

</div>
<!--
<p>
	<span style="font-size:14px;">11:50</span></p>
<h3 style="color:red;">
	【警告】10分鐘過後噴火龍將會襲擊大家的陣營，請盡速回首並做好防護措施</h3>
<hr />
<p>
	<span style="font-size:14px;">11:32</span></p>
<h3 style="color:blue;">
	礦產大放送：現在只要收集到五個木材就可以到礦場換一個鑽石！</h3>
-->

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Navbar Dropdown -->
	<script src="js/nav.js"></script>

</body>
</html>
