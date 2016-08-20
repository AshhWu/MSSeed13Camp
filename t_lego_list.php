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

<?php include "nav.php"; ?>
<?php include "t_getitems.php"; ?>

<div class="middle_part w3-container w3-section">
	<h5 class="w3-brown w3-padding w3-round-large">樂高</h5>
	<section class="section2 w3-container">
		<?php $team=1; ?>
		<div id="lego2" class="w3-tag w3-red"><p><?php echo getCubeNum($team, 2)?></p></div>
		<div id="lego3" class="w3-tag w3-green"><p><?php echo getCubeNum($team, 3)?></p></div>
		<div id="lego4" class="w3-tag w3-yellow"><p><?php echo getCubeNum($team, 4)?></p></div>
		<div id="lego5" class="w3-tag w3-blue"><p><?php echo getCubeNum($team, 5)?></p></div>
	</section>
</div>

<div id="lego_list" class="w3-container w3-section w3-round w3-padding">
	<h4 class="w3-card-4 w3-sand w3-round w3-padding">各組樂高(點組別按鈕請求交易)</h4>
	<ul class="w3-ul w3-hoverable">
		<li class="w3-container">
			<?php $team=2; ?>
			<a class="w3-btn w3-purple w3-padding w3-round-large" href="t_lego_exchange.php">第2組</a>
			<div class="w3-tag w3-red"><p><?php echo getCubeNum($team, 2)?></p></div>
			<div class="w3-tag w3-green"><p><?php echo getCubeNum($team, 3)?></p></div>
			<div class="w3-tag w3-yellow"><p><?php echo getCubeNum($team, 4)?></p></div>
			<div class="w3-tag w3-blue"><p><?php echo getCubeNum($team, 5)?></p></div>
		</li>
		<li class="w3-container">
			<?php $team=3; ?>
			<a class="w3-btn w3-purple w3-padding w3-round-large" href="t_lego_exchange.php">第3組</a>
			<div class="w3-tag w3-red"><p><?php echo getCubeNum($team, 2)?></p></div>
			<div class="w3-tag w3-green"><p><?php echo getCubeNum($team, 3)?></p></div>
			<div class="w3-tag w3-yellow"><p><?php echo getCubeNum($team, 4)?></p></div>
			<div class="w3-tag w3-blue"><p><?php echo getCubeNum($team, 5)?></p></div>
		</li>
		<li class="w3-container">
			<?php $team=4; ?>
			<a class="w3-btn w3-purple w3-padding w3-round-large" href="t_lego_exchange.php">第4組</a>
			<div class="w3-tag w3-red"><p><?php echo getCubeNum($team, 2)?></p></div>
			<div class="w3-tag w3-green"><p><?php echo getCubeNum($team, 3)?></p></div>
			<div class="w3-tag w3-yellow"><p><?php echo getCubeNum($team, 4)?></p></div>
			<div class="w3-tag w3-blue"><p><?php echo getCubeNum($team, 5)?></p></div>
		</li>
	</ul>
</div>



<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="js/nav.js"></script>

</body>
</html>