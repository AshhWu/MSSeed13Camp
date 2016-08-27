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
<?php $country = $_SESSION['country'] ;?>
<?php $id = $_GET['id']; ?>
<?php $team2 = $_GET['teamb']; ?>
<?php $trade = getTradeRequestById($id); ?>
<?php $sender = $trade[1]; ?>
<?php $receiver = $trade[2]; ?>
<?php $lego = getAllCubeNum($sender); ?>
<?php $lego2 = getAllCubeNum($receiver); ?>

<h3 id="team_label" style="color:#337ab7"><?php echo $country;?></h3>
<div id="team2" style="display:none"><?php echo $team2;?></div>
<div id="trade_with" class="w3-container w3-section w3-card-2 w3-padding" style="color:brown"></div>

<table id="trade_table" class="w3-table w3-container w3-card-2">
<tr>
	<th id="sender_country" class="w3-tag"><?php echo $sender;?></th>
	<th>給出</th>
	<th>|</th>
	<th>給出</th>
	<th id="receiver_country" class="w3-tag"><?php echo $receiver;?></th>
</tr>
<script type="text/javascript">
	var country_str = ['XX', 'America', 'Canada', 'Brazil', 'Italy', 'Germany', 'England', 'Taiwan', 'Japan', 'Thailand', 'SouthAfrica', 'Madagascar', 'Egypt'];
	document.getElementById("trade_with").innerHTML = '和' + country_str[document.getElementById("team2").innerText] + '的交易細節';
	document.getElementById("sender_country").innerHTML = country_str[document.getElementById("sender_country").innerText];
	document.getElementById("receiver_country").innerHTML = country_str[document.getElementById("receiver_country").innerText];
	var phone = ['XX', '0922328956', '0960196018', '0979316860', '0920050658', '0988239671', '0988833344', '0976616521', '0938623485', '0932241031', '0920627069', '0986760065', '0932973500'];
	document.getElementById("trade_with").innerHTML += '<br>聯絡電話: ' + phone[document.getElementById("team2").innerText];
</script>
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
<button class="w3-btn w3-padding w3-teal w3-round" onclick="trade_agree(<?php echo '['.$lego[1].','.$lego[2].','.$lego[3].','.$lego[4].','.$lego2[1].','.$lego2[2].','.$lego2[3].','.$lego2[4].'],['; foreach($trade as $value){echo $value . ',';} echo '-1]';?>)">同意</button><br><br>
<a class="w3-btn w3-padding w3-teal w3-round" onclick="trade_reject(<?php echo $id;?>)">拒絕</a>
</div>

<div id="team" style="display:none"><?php echo $team;?></div>
<div id="sender" style="display:none"><?php echo $sender;?></div>

<script type="text/javascript">
	if (document.getElementById("team").innerText == document.getElementById("sender").innerText)
		document.getElementById("trade_btn").innerHTML = '<a class="w3-btn w3-padding w3-teal w3-round" href="t_lego_list.php">退出</a>';
	alert("還在等待對方回覆,如需向對方施壓請撥聯絡電話~");
</script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="js/nav.js"></script>

</body>
</html>
