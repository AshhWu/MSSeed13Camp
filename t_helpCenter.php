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
<?php $msg = getHelpFromGM($team);?>

<h3 style="color:#337ab7; width:180px; margin:auto; text-align: center">求助中心</h3>

<div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; margin: auto;">
	給後台(Grace ma)的訊息: <input type="text" name="message">
	<button id="submit_btn" class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_message(<?php echo $team;?>)">送出</button>
</div>

<div id="chat_board" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; margin:auto;"></div>


<div id="msg" style="display:none"><?php foreach($msg as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>
<script type="text/javascript">
	var tmp = document.getElementById("msg").innerText;
	var msg = tmp.split(',');
	var len = msg.length;
	var i, str = '';
	for (i = 2; i < len; i+=5){
		if (msg[i] == 0)
			str += '<p class="w3-card-2 w3-light-grey w3-padding" style="float:right;max-width:250px;">' + msg[i+1] + '</p><br><br>';
		else if (msg[i] == 1)
			str += '<p class="w3-card-2 w3-light-grey w3-padding" style="float:left;max-width:250px;">' + msg[i+1] + '</p><br><br>';
	}
	document.getElementById("chat_board").innerHTML = str;
</script>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="js/nav.js"></script>

</body>
</html>