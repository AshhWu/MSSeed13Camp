<!DOCTYPE html>
<html lang="en">
<head>
    <title>台北行</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="js/t_main.js"></script>
    <link rel="stylesheet" href="css/t_style.css">
    <link rel="stylesheet" href="css/w3.css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body onload="trade_init()">

<?php include "nav.php"; ?>
<?php include "t_getitems.php"; ?>
<?php $team=1; ?>
<?php $team2=$_GET['teamb']; ?>

<div id="lego_exchange" class="w3-container w3-section w3-card-4 w3-padding w3-indigo">和第<?php echo $team2 ?>組交易</div>

<table id="exchange_table" class="w3-table w3-sand">
<tr>
	<th class="w3-tag">我方</th>
	<th>給對方</th>
	<th>|</th>
	<th class="w3-tag">對方</th>
	<th>給我方</th>
</tr>	
<tr>
	<th class="w3-tag w3-red"><?php echo getCubeNum($team, 2)?></th>
	<th><input type="number" value="0" min="0" max=<?php echo getCubeNum($team, 2)?>></th>
	<th>|</th>
	<th class="w3-tag w3-red"><?php echo getCubeNum($team2, 2)?></th>
	<th><input type="number" value="0" min="0" max=<?php echo getCubeNum($team2, 2)?>></th>
</tr>
<tr>
	<th class="w3-tag w3-green"><?php echo getCubeNum($team, 3)?></th>
	<th><input type="number" value="0" min="0" max=<?php echo getCubeNum($team, 3)?>></th>
	<th>|</th>
	<th class="w3-tag w3-green"><?php echo getCubeNum($team2, 3)?></th>
	<th><input type="number" value="0" min="0" max=<?php echo getCubeNum($team2, 3)?>></th>
</tr>
<tr>
	<th class="w3-tag w3-yellow"><?php echo getCubeNum($team, 4)?></th>
	<th><input type="number" value="0" min="0" max=<?php echo getCubeNum($team, 4)?>></th>
	<th>|</th>
	<th class="w3-tag w3-yellow"><?php echo getCubeNum($team2, 4)?></th>
	<th><input type="number" value="0" min="0" max=<?php echo getCubeNum($team2, 4)?>></th>
</tr>
<tr>
	<th class="w3-tag w3-blue"><?php echo getCubeNum($team, 5)?></th>
	<th><input type="number" value="0" min="0" max=<?php echo getCubeNum($team, 5)?>></th>
	<th>|</th>
	<th class="w3-tag w3-blue"><?php echo getCubeNum($team2, 5)?></th>
	<th><input type="number" value="0" min="0" max=<?php echo getCubeNum($team2, 5)?>></th>
</tr>
</table>

<div id="exchange_btn" class="w3-container w3-section w3-padding-large">
<button class="w3-btn w3-padding w3-teal w3-round" onclick="send_request()">確定</button><br><br>
<a class="w3-btn w3-padding w3-teal w3-round" href="t_lego_list.php">取消</a>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="js/nav.js"></script>

</body>
</html>