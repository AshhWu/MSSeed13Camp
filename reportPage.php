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

<h1>Mission</h1>
<br>
<p style="text-align: center;">
	<form action="reportPage.html">
		<table border="1">
			<tr>
				<td>Group: </td>
				<td>
					<select name="name"/>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Complete mission: </td>
				<td>
					<select name="source"/>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">8</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Value: </td>
				<td><input name="value" type="number"/></td>
			</tr>
		</table>
				<input type="submit" value="Send request"/>
		</form>
</p>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
