<!DOCTYPE html>
<html>
<head>
    <title>台北行</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/t_main.js"></script>
    <link rel="stylesheet" href="css/t_style.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php include "nav.php"; ?>

<div id="lego_change" class="w3-container w3-section w3-card-4 w3-padding w3-indigo">和XX組交易</div>

<table id="change_table" class="w3-table w3-sand">
<tr>
	<th>有</th>
	<th class="w3-card w3-grey">我方</th>
	<th>給對方</th>
	<th>|</th>
	<th>有</th>
	<th class="w3-card w3-grey">對方</th>
	<th>給我方</th>
</tr>
<tr>
	<th>10</th>
	<th class="w3-tag w3-orange"></th>
	<th><input type="number" name="give_o"></th>
	<th>|</th>
	<th>22</th>
	<th class="w3-tag w3-orange"></th>
	<th><input type="number" name="get_o"></th>
</tr>
<tr>
	<th>10</th>
	<th class="w3-tag w3-red"></th>
	<th><input type="number" name="give_r"></th>
	<th>|</th>
	<th>22</th>
	<th class="w3-tag w3-red"></th>
	<th><input type="number" name="get_r"></th>
</tr>
<tr>
	<th>10</th>
	<th class="w3-tag w3-green"></th>
	<th><input type="number" name="give_g"></th>
	<th>|</th>
	<th>22</th>
	<th class="w3-tag w3-green"></th>
	<th><input type="number" name="get_g"></th>
</tr>
<tr>
	<th>10</th>
	<th class="w3-tag w3-yellow"></th>
	<th><input type="number" name="give_y"></th>
	<th>|</th>
	<th>22</th>
	<th class="w3-tag w3-yellow"></th>
	<th><input type="number" name="get_y"></th>
</tr>
<tr>
	<th>10</th>
	<th class="w3-tag w3-blue"></th>
	<th><input type="number" name="give_b"></th>
	<th>|</th>
	<th>22</th>
	<th class="w3-tag w3-blue"></th>
	<th><input type="number" name="get_b"></th>
</tr>
</table>

<div id="change_btn" class="w3-container w3-section w3-padding-large">
<button class="w3-btn w3-padding w3-teal w3-round">確定</button><br><br>
<button class="w3-btn w3-padding w3-teal w3-round">取消</button>
</div>

</body>
</html>