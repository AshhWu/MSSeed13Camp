<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>台北行</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/t_style.css">
    <link rel="stylesheet" href="css/w3.css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php include "nav.php"; ?>
<?php include "t_getitems.php"; ?>
<?php $all_lego = getAllTeamCubeNum() ?>
<?php $team = 1 ?>
<?php $wait = getTradeRequestBySender($team) ?>
<?php $trade = getTradeRequestByReceiver($team) ?>

<div class="middle_part w3-container w3-section">
	<h5 class="w3-brown w3-padding">樂高</h5>
	<section class="section2 w3-container">
		<div id="lego2" class="w3-tag w3-red"><p><?php echo $all_lego[0][2]?></p></div>
		<div id="lego3" class="w3-tag w3-green"><p><?php echo $all_lego[0][3]?></p></div>
		<div id="lego4" class="w3-tag w3-yellow"><p><?php echo $all_lego[0][4]?></p></div>
		<div id="lego5" class="w3-tag w3-blue"><p><?php echo $all_lego[0][5]?></p></div>
	</section>
</div>

<div class="container">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#lego_list">樂高列表</a></li>
		<li><a data-toggle="tab" href="#trade_list" onclick="trade_init(<?php echo $trade?>)">交易請求</a></li>
		<li><a data-toggle="tab" href="#wait_list" onclick="wait_init(<?php echo $wait?>)">已提交易</a></li>
	</ul>

	<div class="tab-content">
		<div id="lego_list" class="tab-pane fade in active w3-container w3-section w3-padding">
			<h4 class="w3-card w3-pink w3-padding">點組別按鈕請求交易</h4>
			<ul id="lego_list" class="w3-ul">
				<li class="w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=2">第2組</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[1][2]?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[1][3]?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[1][4]?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[1][5]?></p></div>
				</li>
				<li class="w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=3">第3組</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[2][2]?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[2][3]?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[2][4]?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[2][5]?></p></div>
				</li>
				<li class="w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=4">第4組</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[3][2]?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[3][3]?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[3][4]?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[3][5]?></p></div>
				</li>
			</ul>
		</div>
		<div id="trade_list" class="tab-pane fade w3-container w3-section w3-padding">
			<h4 class="w3-card w3-pink w3-padding">別組向你提出的交易</h4>
			<ul class="w3-ul">
			</ul>
		</div>
		<div id="wait_list" class="tab-pane fade w3-container w3-section w3-padding">
			<h4 class="w3-card w3-pink w3-padding">你向別組提出的交易</h4>
			<ul class="w3-ul">
			</ul>
		</div>
	</div>
</div>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="js/nav.js"></script>
<script src="js/t_main.js"></script>

</body>
</html>