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

<?php include "backend/navbar/nav.php"; ?>
<?php include "t_getitems.php"; ?>
<?php $all_lego = getAllTeamCubeNum(); ?>
<?php $team = $_SESSION['t_team']; ?>
<?php $country = $_SESSION['country']; ?>
<?php $wait = getTradeRequestBySender($team); ?>
<?php $trade = getTradeRequestByReceiver($team); ?>

<h3 id="team_label" style="color:#337ab7"><?php echo $country;?></h3>
<div class="middle_part w3-container w3-section w3-card-2 w3-padding">
	<h5 style="color:#337ab7; position:relative; top:5px;">樂高</h5>
	<section class="section2 w3-container">
		<div id="lego2" class="w3-tag w3-red"><p><?php echo $all_lego[$team-1][2];?></p></div>
		<div id="lego3" class="w3-tag w3-green"><p><?php echo $all_lego[$team-1][3];?></p></div>
		<div id="lego4" class="w3-tag w3-yellow"><p><?php echo $all_lego[$team-1][4];?></p></div>
		<div id="lego5" class="w3-tag w3-blue"><p><?php echo $all_lego[$team-1][5];?></p></div>
	</section>
</div>

<div class="container">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#lego_list">樂高列表</a></li>
		<li><a data-toggle="tab" href="#trade_list" onclick="trade_init(<?php echo '['; foreach($trade as $arr){foreach($arr as $value){echo $value . ',';}} echo '-1]';?>)">交易請求(<?php echo count($trade);?>)</a></li>
		<li><a data-toggle="tab" href="#wait_list" onclick="wait_init(<?php echo '['; foreach($wait as $arr){foreach($arr as $value){echo $value . ',';}} echo '-1]';?>)">已提交易(<?php echo count($wait);?>)</a></li>
	</ul>

	<div class="tab-content">
		<div id="lego_list" class="tab-pane fade in active w3-container w3-section w3-padding w3-card-2">
			<h4 class="w3-card w3-brown w3-padding">點國家按鈕請求交易</h4>
			<ul id="lego_list" class="w3-ul">
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=1">America</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[0][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[0][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[0][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[0][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=2">Canada</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[1][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[1][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[1][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[1][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=3">Brazil</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[2][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[2][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[2][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[2][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=4">Italy</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[3][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[3][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[3][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[3][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=5">Germany</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[4][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[4][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[4][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[4][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=6">England</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[5][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[5][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[5][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[5][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=7">Taiwan</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[6][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[6][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[6][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[6][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=8">Japan</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[7][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[7][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[7][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[7][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=9">Thailand</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[8][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[8][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[8][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[8][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=10">SouthAfrica</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[9][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[9][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[9][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[9][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=11">Madagascar</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[10][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[10][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[10][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[10][5];?></p></div>
				</li>
				<li class="team_li w3-container">
					<a class="w3-btn w3-purple w3-padding w3-round" href="t_lego_trade.php?teamb=12">Egypt</a>
					<div class="w3-tag w3-red"><p><?php echo $all_lego[11][2];?></p></div>
					<div class="w3-tag w3-green"><p><?php echo $all_lego[11][3];?></p></div>
					<div class="w3-tag w3-yellow"><p><?php echo $all_lego[11][4];?></p></div>
					<div class="w3-tag w3-blue"><p><?php echo $all_lego[11][5];?></p></div>
				</li>
			</ul>
		</div>
		<div id="trade_list" class="tab-pane fade w3-container w3-section w3-padding w3-card-2">
			<h4 class="w3-card w3-pink w3-padding">別組交易請求</h4>
			<ul id="trade_ul" class="w3-ul">
			</ul>
		</div>
		<div id="wait_list" class="tab-pane fade w3-container w3-section w3-padding w3-card-2">
			<h4 class="w3-card w3-pink w3-padding">已提出的交易</h4>
			<ul id="wait_ul" class="w3-ul">
			</ul>
		</div>
	</div>
</div>

<div id="team" style="display:none"><?php echo $team;?></div>
<script type="text/javascript">
	document.getElementsByClassName("team_li")[parseInt(document.getElementById("team").innerText) - 1].style.display = "none";
</script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="js/nav.js"></script>
<script src="js/t_main.js"></script>

</body>
</html>
