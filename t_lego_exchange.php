<!DOCTYPE html>
<html lang="en">
<head>
    <title>台北行</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="js/t_main.js"></script>
    <link rel="stylesheet" href="css/t_style.css">
    <link rel="stylesheet" href="css/w3.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php include "nav.php"; ?>
<?php include "t_getitems.php"; ?>
<?php $team=1; ?>
<?php $team2=2; ?>

<div id="lego_exchange" class="w3-container w3-section w3-card-4 w3-padding w3-indigo">和第<?php echo $team2 ?>組交易</div>

<table id="exchange_table" class="w3-table w3-sand">
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
	<th><?php echo getCubeNum($team, 2)?></th>
	<th class="w3-tag w3-red"></th>
	<th><input type="number" name="give_r"></th>
	<th>|</th>
	<th><?php echo getCubeNum($team2, 2)?></th>
	<th class="w3-tag w3-red"></th>
	<th><input type="number" name="get_r"></th>
</tr>
<tr>
	<th><?php echo getCubeNum($team, 3)?></th>
	<th class="w3-tag w3-green"></th>
	<th><input type="number" name="give_g"></th>
	<th>|</th>
	<th><?php echo getCubeNum($team2, 3)?></th>
	<th class="w3-tag w3-green"></th>
	<th><input type="number" name="get_g"></th>
</tr>
<tr>
	<th><?php echo getCubeNum($team, 4)?></th>
	<th class="w3-tag w3-yellow"></th>
	<th><input type="number" name="give_y"></th>
	<th>|</th>
	<th><?php echo getCubeNum($team2, 4)?></th>
	<th class="w3-tag w3-yellow"></th>
	<th><input type="number" name="get_y"></th>
</tr>
<tr>
	<th><?php echo getCubeNum($team, 5)?></th>
	<th class="w3-tag w3-blue"></th>
	<th><input type="number" name="give_b"></th>
	<th>|</th>
	<th><?php echo getCubeNum($team2, 5)?></th>
	<th class="w3-tag w3-blue"></th>
	<th><input type="number" name="get_b"></th>
</tr>
</table>

<div id="exchange_btn" class="w3-container w3-section w3-padding-large">
<button class="w3-btn w3-padding w3-teal w3-round">確定</button><br><br>
<a class="w3-btn w3-padding w3-teal w3-round" href="t_lego_list.php">取消</a>
</div>

</body>
</html>