<?php 
session_start();
?>
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
<body>

<?php include "backend/navbar/nav.php"; ?>
<?php include "t_getitems.php"; ?>
<?php $team = $_SESSION['t_team']; ?>
<?php $id = $_GET['id']; ?>
<?php $team2 = $_GET['teamb']; ?>
<?php $lego = getAllCubeNum($team); ?>
<?php $lego2 = getAllCubeNum($team2); ?>
<?php $trade = getTradeRequestById($id); ?>

<h5 id="team_label" class="w3-indigo w3-padding">我是第<?php echo $team;?>組</h5>
<div id="trade_with" class="w3-container w3-section w3-card w3-padding w3-brown">交易細節</div>

<table id="trade_table" class="w3-table w3-sand">
<tr>
	<th class="w3-tag"><?php echo $trade[1];?>組</th>
	<th>給出</th>
	<th>|</th>
	<th>給出</th>
	<th class="w3-tag"><?php echo $trade[2];?>組</th>
</tr>	
<tr>
	<th><div class="w3-tag w3-red"><p><?php echo $lego[1];?></p></div></th>
	<th><p><?php echo $trade[4];?></p></th>
	<th>|</th>
	<th><p><?php echo $trade[9];?></p></th>
	<th><div class="w3-tag w3-red"><p><?php echo $lego2[1];?></p></div></th>
</tr>
<tr>
	<th><div class="w3-tag w3-green"><p><?php echo $lego[2];?></p></div></th>
	<th><p><?php echo $trade[5];?></p></th>
	<th>|</th>
	<th><p><?php echo $trade[10];?></p></th>
	<th><div class="w3-tag w3-green"><p><?php echo $lego2[2];?></p></div></th>
</tr>
<tr>
	<th><div class="w3-tag w3-yellow"><p><?php echo $lego[3];?></p></div></th>
	<th><p><?php echo $trade[6];?></p></th>
	<th>|</th>
	<th><p><?php echo $trade[11];?></p></th>
	<th><div class="w3-tag w3-yellow"><p><?php echo $lego2[3];?></p></div></th>
</tr>
<tr>
	<th><div class="w3-tag w3-blue"><p><?php echo $lego[4];?></p></div></th>
	<th><p><?php echo $trade[7];?></p></th>
	<th>|</th>
	<th><p><?php echo $trade[12];?></p></th>
	<th><div class="w3-tag w3-blue"><p><?php echo $lego2[4];?></p></div></th>
</tr>
</table>

<div id="trade_btn" class="w3-container w3-section w3-padding-large">
<button class="w3-btn w3-padding w3-teal w3-round" onclick="trade_agree(<?php echo $id;?>)">同意</button><br><br>
<a class="w3-btn w3-padding w3-teal w3-round" href="t_lego_list.php">拒絕</a>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="js/nav.js"></script>

</body>
</html>