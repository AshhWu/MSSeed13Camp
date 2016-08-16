<!DOCTYPE html>
<html>

<head>
<!-- Title -->
<title>回報成果</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="#">
</head>

<body>
<?php
  include "nav.php";
  ?>
  
<div style="text-align:center">
	<h1>Report</h1><br>
	<p style="text-align: center;">
		<form action="occupyStronghold.php" method="post">
			<table border="1">
				<tr>
					<td>Team: </td>
					<td>
						<select name="team"/>
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>完成任務: </td>
					<td>
						<select name="code"/>
							<option value="YEyKd">YEyKd</option>
							<option value="DWVw4">DWVw4</option>
							<option value="soDJ3">soDJ3</option>
							<option value="GJPzb">GJPzb</option>
							<option value="lJAfD">lJAfD</option>
							<option value="SZ1yG">SZ1yG</option>
							<option value="y997V">y997V</option>
							<option value="X02aw">X02aw</option>
							<option value="Glsx3">Glsx3</option>
							<option value="YNbMr">YNbMr</option>
							<option value="KeQW2">KeQW2</option>
							<option value="vNUEM">vNUEM</option>
							<option value="5swuv">5swuv</option>
							<option value="Ao2pa">Ao2pa</option>
							<option value="uIBpt">uIBpt</option>
							<option value="Ow3vC">Ow3vC</option>
						</select>
					</td>
				</tr>
			</table>
					<input type="submit" value="佔領據點"/>
			</form>
	</p>
</div>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
